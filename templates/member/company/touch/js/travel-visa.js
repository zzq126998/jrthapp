$(function () {
    var atpage = 1, pageSize = 10, isload = false;

    var huoniao_ = {
        //转换PHP时间戳
        transTimes: function(timestamp, n){
            update = new Date(timestamp*1000);//时间戳要乘1000
            year   = update.getFullYear();
            month  = (update.getMonth()+1<10)?('0'+(update.getMonth()+1)):(update.getMonth()+1);
            day    = (update.getDate()<10)?('0'+update.getDate()):(update.getDate());
            hour   = (update.getHours()<10)?('0'+update.getHours()):(update.getHours());
            minute = (update.getMinutes()<10)?('0'+update.getMinutes()):(update.getMinutes());
            second = (update.getSeconds()<10)?('0'+update.getSeconds()):(update.getSeconds());
            if(n == 1){
                return (year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second);
            }else if(n == 2){
                return (year+'-'+month+'-'+day);
            }else if(n == 3){
                return (month+'-'+day);
            }else{
                return 0;
            }
        }
    };

    $('.hotel-tab').delegate('li','click',function(){
        var t = $(this), id = t.attr("data-state");
        if(!$(this).hasClass('curr')){
            $(this).addClass('curr').siblings('li').removeClass('curr');
            state = id;
            atpage = 1;
            getList(1);
        }
    });

    // 删除
    $(".visa-list").delegate(".del", "click", function(){
        var t = $(this), par = t.closest(".hotel-box"), id = par.attr("data-id");
        if(id){
            var result = confirm(langData['siteConfig'][20][211]);
            if(result){
                $.ajax({
                    url: masterDomain+"/include/ajax.php?service=travel&action=operVisa&oper=del&id="+id,
                    type: "GET",
                    dataType: "jsonp",
                    success: function (data) {
                        if(data && data.state == 100){
                            //删除成功后移除信息层并异步获取最新列表
                            par.slideUp(300, function(){
                                par.remove();
                                setTimeout(function(){getList(1);}, 200);
                            });
                            alert(langData['siteConfig'][20][444]);
                        }else{
                            alert(data.info);
                        }
                    },
                    error: function(){
                        alert(langData['siteConfig'][20][183]);
                    }
                });

            }else{
            }
        }
    });


    // 下拉加载
    $(window).scroll(function() {
        var h = $('#list').height();
        var allh = $('body').height();
        var w = $(window).height();
        var scroll = allh - w - h;
        if ($(window).scrollTop() > scroll && !isload) {
            atpage++;
            getList();
        };
    });

    getList(1);

    function getList(tr){

        isload = true;
        if(tr){
            $("#list").html('<div class="empty">'+langData['siteConfig'][20][184]+'</div>');
        }

        $.ajax({
            url: masterDomain+"/include/ajax.php?service=travel&action=visaList&u=1&orderby=2&state="+state+"&page="+atpage+"&pageSize="+pageSize,
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
                isload = false;
                if(data && data.state == 100){
                    $(".empty").remove();
                    var html = [], list = data.info.list, pageinfo = data.info.pageInfo;
                    for (var i = 0; i < list.length; i++) {
                        var url = list[i].state == 1 ? list[i].url : 'javascript:;';

                        var t = window.location.href.indexOf(".html") > -1 ? "?" : "&";
                        var param = t + "id=";
                        var urlString = editUrl + param;

                        /**
                         * <div class="hotel-box item" data-id="39" data-title="dddd">
                                <div class="title fn-clear">
                                    <span style="color:#919191;font-size: .24rem;">{#$langData['travel'][11][12]#}：2019-01-09 09:35:13</span>{#* 发布时间 *#}
                                    <span class="right_state">待审核</span>
                                </div>
                                <div class="hotel-item fn-clear">
                                    <div class="hotel-img fn-left">
                                        <a href="#"><img src="{#$templets_skin#}/upfiles/hotel_img.jpg" alt=""></a>
                                    </div>
                                    <dl><a href="#">
                                        <dt>马来西亚旅游签证·15天停留Entri电子签+全国受理+电子材料+限制出入境...</dt>
                                        
                                        <dd class="msg"><span>历史低价</span></dd>
                                        <dd class="price"><span>{#echoCurrency type='symbol'#}<em>450</em></span>/{#$langData['travel'][11][13]#}</dd>
                                    </a>
                                    </dl>
                                </div>
                                <div class="o fn-clear"><a href="#" class="edit">{#$langData['travel'][11][14]#}</a><a href="javascript:;" class="del">{#$langData['travel'][5][29]#}</a></div>{#* 编辑----删除 *#}
                            </div>
                         */

                        html.push('<div class="hotel-box item" data-id="'+list[i].id+'" data-title="'+list[i].title+'">');
                        var state = "";
                        if(list[i].state == "0"){
                            state = langData['travel'][12][39];
                        }else if(list[i].state == "2"){
                            state = langData['travel'][12][40];
                        } 
                        html.push('<div class="title fn-clear"><span style="color:#919191;font-size: .24rem;">'+langData['travel'][11][12]+'：'+huoniao_.transTimes(list[i].pubdate, 1)+'</span><span class="right_state">'+state+'</span></div>');
                        html.push('<div class="hotel-item fn-clear">');
                        html.push('<div class="hotel-img fn-left"><a href="#"><img src="'+huoniao.changeFileSize(list[i].litpic, "small")+'" alt=""></a></div>');
                        html.push('<dl><a href="'+url+'">');
                        html.push('<dt>'+list[i].title+'</dt>');
                        html.push('<dd class="msg"><span>'+list[i].typename+' | '+list[i].countryname+'</span></dd>');
                        html.push('<dd class="price"><span>'+echoCurrency('symbol')+'<em>'+list[i].price+'</em></span>'+langData['travel'][1][6]+'</dd>');
                        html.push('</a></dl>');
                        html.push('</div>');
                        html.push('<div class="o fn-clear"><a href="'+urlString+list[i].id+'" class="edit">'+langData['travel'][11][14]+'</a><a href="javascript:;" class="del">'+langData['travel'][5][29]+'</a></div>');
                        html.push('</div>');
                    }

                    $("#list").append(html.join(""));
                    isload = false;

                    if(atpage >= pageinfo.totalPage){
                        isload = true;
                        $("#list").append('<div class="empty">'+langData['marry'][5][29]+'</div>');
                    }

                    switch(state){
    					case "":
    						totalCount = pageinfo.totalCount;
    						break;
    					case "0":
    						totalCount = pageinfo.gray;
    						break;
    					case "1":
    						totalCount = pageinfo.audit;
    						break;
    					case "2":
    						totalCount = pageinfo.refuse;
    						break;
    				}


    				$("#total").html(pageinfo.totalCount);

                    if(pageinfo.gray>0){
                        $("#unpaid").show().html(pageinfo.gray);
                    }else{
                        $("#unpaid").show().html(0);
                    }
                    if(pageinfo.audit>0){
                        $("#over").show().html(pageinfo.audit);
                    }else{
                        $("#over").show().html(0);
                    }
                    if(pageinfo.refresh>0){
                        $("#rates").show().html(pageinfo.refresh);
                    }else{
                        $("#rates").show().html(0);
                    }

                }else{
                    $("#unpaid").show().html(0);
                    $("#over").show().html(0);
                    $("#rates").show().html(0);
                    $("#list").html('<div class="empty">'+data.info+'</div>');
                }
            },
            error: function(){
                isload = false;
                //网络错误，加载失败
                $("#unpaid").show().html(0);
                $("#over").show().html(0);
                $("#rates").show().html(0);
                $("#list .empty").html(''+langData['marry'][5][23]+'...').show();   
            }
        });

    }

});

/* //加载数据
var servepage = 1;
var orderpage=1 ;
var totalpage = 0;
var isload = false;

$('.hotel-tab').delegate('li','click',function(){
	orderpage=2;
	if(!$(this).hasClass('curr')){
		$(this).addClass('curr').siblings('li').removeClass('curr');
		getList();
		
	}
});

//删除事件
$('#list').delegate('.del','click',function(){
	$(this).parents('.hotel-box').remove();
	console.log('删除')
})


//点击初次加载数据
function getList() {
        var url ="/include/ajax.php?service=info&action=ilist_v2&page=1&pageSize=10";
        var html = []
        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            success: function (data) {
                var datalist = data.info.list;
                if(data.state == 100){
                	console.log(data)
                    totalpage = data.info.pageInfo.totalPage;
                    al_page = totalpage;
                    for(var i=0;i<datalist.length;i++){
                        list = `
                         <div class="hotel-box item" data-id="39" data-title="dddd">
				            <div class="title fn-clear">
				            	<span style="color:#919191;font-size: .24rem;">`+langData['travel'][11][12]+`：2019-01-09 09:35:13</span>
				            	<span class="right_state">待审核</span>
				            </div>
				            <div class="hotel-item fn-clear">
				                <div class="hotel-img fn-left">
				                    <a href="#"><img src="`+templets_skin+`/upfiles/hotel_img.jpg" alt=""></a>
				                </div>
				                <dl><a href="#">
				                    <dt>马来西亚旅游签证·15天停留Entri电子签+全国受理+电子材料+限制出入境...</dt>
				                  
				                    <dd class="msg"><span>历史低价</span></dd>
				                    <dd class="price"><span>`+echoCurrency('symbol')+`<em>450</em></span>/`+langData['travel'][9][1]+`</dd>
				                </a>
				                </dl>
				            </div>
				           <div class="o fn-clear"><a href="#" class="edit">`+langData['travel'][11][14]+`</a><a href="javascript:;" class="del">`+langData['travel'][5][29]+`</a></div>
				      </div>
		      	`
                         html.push((list));
                       
                        isload = false;
                    }
                      
                     $('#list').html(html.join(''));
                  
                    if(orderpage == totalpage){
                        console.log(langData['travel'][0][9]);//已显示全部
                       
                    }
                }else {
					
                }
            },
            error: function(){
                console.log(langData['travel'][0][10]);//请求出错请刷新重试
            }
        })
    }


$(window).scroll(function() {
	    var allh = $('body').height();
	    var w = $(window).height();
	    var scroll = allh - w;
	    if ($(window).scrollTop() >= scroll&& !isload) {
	        getList2();
	      
	    };
	});
//滚动到底部加载
function getList2() {
        var url ="/include/ajax.php?service=info&action=ilist_v2&page="+orderpage +"&pageSize=10";
        var html = []
        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            success: function (data) {
                var datalist = data.info.list;
                if(data.state == 100){
                	console.log(data)
                    totalpage = data.info.pageInfo.totalPage;
                    al_page = totalpage;
                    for(var i=0;i<datalist.length;i++){
                        list = `
                         <div class="hotel-box item" data-id="39" data-title="dddd">
				            <div class="title fn-clear">
				            	<span style="color:#919191;font-size: .24rem;">`+langData['travel'][11][12]+`：2019-01-09 09:35:13</span>
				            	<span class="right_state">待审核</span>
				            </div>
				            <div class="hotel-item fn-clear">
				                <div class="hotel-img fn-left">
				                    <a href="#"><img src="`+templets_skin+`/upfiles/hotel_img.jpg" alt=""></a>
				                </div>
				                <dl><a href="#">
				                    <dt>马来西亚旅游签证·15天停留Entri电子签+全国受理+电子材料+限制出入境...</dt>
				                  
				                    <dd class="msg"><span>历史低价</span></dd>
				                    <dd class="price"><span>`+echoCurrency('symbol')+`<em>450</em></span>/`+langData['travel'][9][1]+`</dd>
				                </a>
				                </dl>
				            </div>
				           <div class="o fn-clear"><a href="#" class="edit">`+langData['travel'][11][14]+`</a><a href="javascript:;" class="del">`+langData['travel'][5][29]+`</a></div>
				      </div>
		      	`
                         ;
                         html.push((list))
                      
                        isload = false;
                    }
                      $('#list').append(html.join(''));
                     orderpage++;
                    if(orderpage == totalpage){
                        console.log(langData['travel'][0][9]);//已显示全部
                       
                    }
                }else {
					
                }
            },
            error: function(){
                console.log(langData['travel'][0][10]);//请求出错请刷新重试
            }
        })
    } */