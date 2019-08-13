$(function() {
	var atPage =0;
	var havemore = true;
	var mediaInit = $('.userinfo').html();

	var device = navigator.userAgent;
  if (device.indexOf('huoniao_iOS') > -1) {
    $('body').addClass('huoniao_iOS');
  }

	var height = $(window).height()-$('.photo-head-h').height()-$('.by_day').height();
	$('.swiper-container,.swiper-slide').css({'height':height,'opacity':1});
	$('.swiper-slide').css('line-height',height+'px');

	var mySwiper = new Swiper('.swiper-container', {
		observer:true,//修改swiper自己或子元素时，自动初始化swiper
    observeParents:true,//修改swiper的父元素时，自动初始化swiper
		onSlideChangeStart: function(swiper){
			getImage(swiper.activeIndex);
		}
	});

	$('#Gallery').delegate('li', 'touchend', function(){
		var t = $(this), index = t.index(), parent = t.closest('ul'), length = parent.find('li').length;
		if (index == length - 2 && havemore) {
			getData(function(data){
				if(data && data.imglist.length > 0){

					next = t.next();
					nextLen = next.length;
					if(nextLen == 0){
						$(this).addClass('disabled');
					}else{
						next.click();
					}
				}else{
					havemore = false;
				}
			});
		}
	})

	// mySwiper.swipeTo(atPage, 100, false);
	getImage(atPage);


	function getImage(index){
		var li = $(".swiper-container li:eq("+index+")"), type = li.data("type"), img = li.find("img"), src = img.data("src"), alt = img.attr("alt"), id = li.attr('data-id');

		img.attr("src", src);
		$(".f14").html(alt);
		if(id == undefined){
			$('.userinfo').html(mediaInit);
		}else{
			for(var i = 0; i < pageInfo.length; i++){
				// if(pageInfo[i].id == id){
				// 	$('.userinfo').html(pageInfo);
				// 	return;
				// }
			}
		}
	}

	$('.swiper-container').click(function(){
		if ($('.pic-int').css("display")=="none") {
			$('.pic-int,.f10,.btn-box').show();
		}else{
			$('.pic-int,.f10,.btn-box').hide();
		}
	})

	$('body').on('touchmove', function(){

	})

	function getData(callback){
		isload = true;
		$.ajax({
			url: masterDomain+'/include/ajax.php?service=article&action=nextData&id='+pageid,
			dataType: 'jsonp',
			success: function(data){

				if(data.state == 100){

					var info    = data.info,
						id      = info.id,
						typeid  = info.typeid,
						typeName = info.typeName,
						typeUrl = info.typeUrl,
						title   = info.title,
						url     = info.url,
						imglist = info.imglist,
						from    = info.source,
						fromUrl = info.sourceurl;console.log(imglist);

					pageid = id;

					length += imglist.length;

					var html = [];
					var lastGroup = parseInt($('.listul li').last().attr('data-group'));

					for(var i = 0; i < imglist.length; i++){
						html.push('<li class="swiper-slide" data-id="'+id+'"><img src="'+imglist[i].path+'" alt="'+(i+1)+'/'+imglist.length+'" class="swiper-lazy"><div class="swiper-lazy-preloader"></div><div class="font_scroll"><span><em>'+(i+1)+'</em>/'+imglist.length+'&nbsp;&nbsp;&nbsp;'+imglist[i].info+'</span></div></li>')
					}

					$('#Gallery').append(html.join(""));
					html = [];
					if(info.media){
						html.push('<dt><img src="'+info.media.ac_photo+'" alt=""></dt>');
						html.push('<dd>');
						html.push('<h3><a href="'+info.media.url+'">'+(info.writer ? info.writer : info.media.ac_name)+'</a></h3>');
						html.push('<p>'+huoniao.transTimes(info.pubdate, 1)+'</p>');
						html.push('</dd>');
					}else{
						html.push('<dt><img src="/static/images/default_user.jpg" alt=""></dt>');
						html.push('<dd>');
						html.push('<h3>'+info.writer+'</h3>');
						html.push('<p>'+huoniao.transTimes(info.pubdate, 1)+'</p>');
						html.push('</dd>');
					}
					$('.userinfo').html(html.join(""));

					// 重新初始化swiper
					mySwiper.reInit();
					$('.swiper-container,.swiper-slide').css({'height':height,'opacity':1});
					$('.swiper-slide').css('line-height',height+'px');
					
					var newGroup = {
						'id': id,
						'typeid': typeid,
						'typeName': typeName,
						'typeUrl': typeUrl,
						'title': title,
						'url': url,
						'picnum': imglist.length,
						'from': from,
						'fromUrl': fromUrl,
						'media': info.media
					}
					pageInfo.push(newGroup);

					if(typeof callback == 'function'){
						callback(data.info);
					}

					// setThumbWidth(true);

				}

				isload = false;

			},
			error: function(){
				isload = false;

				if(typeof callback == 'function'){
					callback(data.info);
				}
			}
		})
	}



	$('.imgsBox').on('tap', function(){
		var t = $(this);
		if(t.hasClass('ing')) return;
		t.addClass('ing');
		setTimeout(function(){
			t.removeClass('ing');
		},200)
		$('body').toggleClass('hideotherinfo');
	})



})
