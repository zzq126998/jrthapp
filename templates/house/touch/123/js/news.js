$(function(){
var hchange,hnochange
function getData(id){
	$('#nav_item_'+id).attr('data-type',1);
	var html = [];
	//请求数据
	var data = [];
		data.push("pageSize="+pageSize);
		data.push("page="+atpage);
	$.ajax({
			url: "/include/ajax.php?service=house&action=news&typeid="+id,
			data: data.join("&"),
			type: "GET",
			dataType: "jsonp",
			success: function (data) {
				if(data){
					if(data.state == 100){
						var list=data.info.list;
						for(var i=0; i<list.length; i++){
							var time = returnHumanTime(list[i].pubdate,3);
							if(!list[i].group_img){
								html.push('<li class="m_item singleBox">')
								html.push('<a href='+list[i].url+' class="fn-clear">')
								html.push('<div class="aright_">')
								html.push('<img src='+list[i].litpic+'>')
								html.push('</div>')
								html.push('<div class="aleft">')
								html.push('<h2>'+list[i].title+'</h2>')
								html.push('<p>')
								html.push('<span>'+time+'</span>')
								html.push('</p>')
								html.push('</div>')
								html.push('</a>')
								html.push('</li>')
							}else if(list[i].group_img.length>1){
								html.push('<li class="m_item multipleBox">')
								html.push('<a href='+list[i].url+'>')
								html.push('<h2><i class="ihot"></i>'+list[i].title+'</h2>')
								html.push('<div class="imgBox fn-clear">')
								if(list[i].group_img.length>3){
									html.push('<div class="mBox">')
									html.push('	<img src='+list[i].group_img[0]+'>')
									html.push('</div>')
									html.push('<div class="mBox">')
									html.push('	<img src='+list[i].group_img[1]+'>')
									html.push('	</div>')
									html.push('	<div class="mBox last">')
									html.push('	<img src='+list[i].group_img[2]+'>')
									html.push('	</div>')
								}else{
									html.push('<div class="mBox">')
									html.push('	<img src='+list[i].group_img[0]+'>')
									html.push('</div>')
									html.push('<div class="mBox">')
									html.push('	<img src='+list[i].group_img[1]+'>')
									html.push('	</div>')
								}
								html.push('/div>')
								html.push('<p>')
								html.push('<span>'+time+'</span>')
								html.push('</p>')
								html.push('</a>')
								html.push('</li>')
							}
						}
						$('#chanel_'+id).append(html.join(''));
						$('#nav_item_'+id).attr('data-type',0);
						if(atpage >= data.info.pageInfo.totalPage){
							$('#nav_item_'+id).attr('data-type',1);
							$('#chanel_'+id).append('<div class="loading">已经到最后一页了</div>');
						}
						
					//请求失败
					}else{
						console.log(data.info);
						$('#chanel_'+id).append('<div class="loading">暂无数据</div>');
					}
				//加载失败
				}else{
					console.log(data.info);
					$('#chanel_'+id).append('<div class="loading">暂无数据</div>');
				}
				hchange = $('#chanel_'+id).height();
				console.log('此时高度'+hchange);
			},
			error: function(){
				$('#nav_item_'+id).attr('data-type',0);
				console.log('网络错误，加载失败！');
			}
		});
}

 
// 下拉加载
$(window).scroll(function() {
	
	var id = $('.curr').attr('data-id')
	var h = $('.footer').height() + $('.content li').height() * 2;
	var allh = $('body').height();
	var w = $(window).height();
	var isload = $('.curr').attr('data-type');
	var scroll = allh - h - w;
	hnochange = $('channel_'+id).height();
	if ($(window).scrollTop() > scroll && (isload==0) ) {
		atpage++;
		console.log('hehe'+isload)
		getData(id);
		mySwiper.updateAutoHeight(hchange);
		console.log('这是滚动加载的高度');
		return 0;
//		$('.swiper-container').css('height',hchange)
	}else{
		
		mySwiper.updateAutoHeight(hnochange);
		console.log('这是滚动不加载的高度');
		return 0;
	};
	
});

//导航栏加载成功时
var len = $('#nav_list .item').length ;
for(var i=0;i<len;i++){
	$('.swrip-panel').append('<ul class="content swiper-slide" id="chanel_'+i+'"></ul>')
}
	var mySwiper = new Swiper('.swiper-container', {
		pagination : '.pagination',
		autoHeight: true,
		on: {
		    init: function(){
		      console.log('当前的slide序号是'+this.activeIndex);
		      getData(this.activeIndex);
		    }, 
			
		    slideChangeTransitionEnd: function(){
		      var x = $('#nav_item_'+this.activeIndex).offset();
			  hnochange = $('.item').eq(this.activeIndex).height()
		      $('.item').eq(this.activeIndex).addClass('curr').siblings('.item').removeClass('curr');
		      isload =  $('.item').eq(this.activeIndex).attr('data-type');
		      var len = $('#chanel_'+this.activeIndex).children('li').length;
		       var scrl = $('#nav').scrollLeft(),w=0;
		        for(var i=0; i<this.activeIndex+1; i++){
		        	w = $('#nav_list .item').eq(i).width()+w-10
		        }
		        if(this.activeIndex>1){
		        	$('#nav').scrollLeft(w);
		        }else{
		        	$('#nav').scrollLeft(0);
		        }
		      if(isload==0&& len==0){
		      	$(window).scrollTop(0);
		      	atpage=1;
		      	$('#chanel_'+this.activeIndex).html('');
		      	getData(this.activeIndex*1);
		      	mySwiper.updateAutoHeight(hchange)
		      	console.log('这是第一次加载的高度')
		      }else{
		      	console.log('已经滑动加载过');
		      	mySwiper.updateAutoHeight(hnochange)
		      }
		    },
		  },
	});
	
	// 点击导航
    $('#nav_list .item').click(function(){
        $(window).scrollTop(0);
        var id = $(this).attr('data-id');
        var index = $(this).index();
        isload = $(this).attr('data-type');
        var scrl = $('#nav').scrollLeft(),w=0;
        for(var i=0; i<index+1; i++){
        	w = $('#nav_list .item').eq(i).width()+w
        }
        if(index>1){
        	$('#nav').scrollLeft(w);
        }
        if($(this).hasClass('curr')){
        	console.log('已经加载过数据，点击事件');
        }else{
        	$(this).addClass('curr').siblings('.item').removeClass('curr');
        	
        	mySwiper.slideTo(id, 500, false);//切换到第一个slide，速度为1秒;
        	var len = $('#chanel_'+id).children('li').length;
        	console.log('长度'+len)
        	//判断是否加载过数据,如果没有加载数据
        	if(isload==0&&len==0){
        		atpage=1;
        		$('#chanel_'+id).html('');
        		getData(id);
        		console.log('点击'+id);
        	}
        }

    });
    
    
    

})
