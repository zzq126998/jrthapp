var objId = $("#list");
$(function(){
    var device = navigator.userAgent;
    if (device.indexOf('huoniao_iOS') > -1) {
        $('body').addClass('huoniao_iOS');
    }

    var atpage = 1;
    var pageSize = 10;
    var isload = false;

    $('.order_nav ul').delegate('li','click',function(){
        $(this).addClass('on').siblings('li').removeClass('on');
        getList(1);
    });

    $('.travel').delegate('.code_order','click',function(){
        $('.mask,.ercode').show();
        var t = $(this), url = t.data('code');
		if(url != '' && url != undefined){
            url = tuanQR + url ;
			$('.ercode dd').html('<img src="'+url+'" alt="">');
			$('.mask').show();
		}
    });
    
    $('.ercode i').click(function(){
        $('.mask,.ercode').hide();
    });

    //删除订单
    $(".travel").delegate(".cancel_order","click",function(){
        var t = $(this), par = t.closest(".li_box"), id = par.attr("data-id");
        if(id){
            if(confirm(langData['siteConfig'][20][182])){
                $.ajax({
                    url: masterDomain+"/include/ajax.php?service=travel&action=delOrder&id="+id,
                    type: "GET",
                    dataType: "jsonp",
                    success: function (data) {
                        if(data && data.state == 100){
                            //删除成功后移除信息层并异步获取最新列表
                            objId.html('');
                            atpage = 1;
                            getList();
                        }else{
                            alert(data.info);
                            t.siblings("a").show();
                            t.removeClass("load");
                        }
                    },
                    error: function(){
                        alert(langData['siteConfig'][20][183]);
                        t.siblings("a").show();
                        t.removeClass("load");
                    }
                });
            }
        }
    });

    //取消申请退款
    $(".travel").delegate(".refund_cancel","click",function(){
        var t = $(this), par = t.closest(".li_box"), id = par.attr("data-id");
        if(id){
            var data = [];
            data.push("id="+id);
            $.ajax({
                url: '/include/ajax.php?service=travel&action=operOrder&oper=cancelrefund',
                data: data.join("&"),
                type: 'post',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        getList(1);
                    }else{
                        alert(data.info);
                    }
                },
                error: function(){
                    alert(langData['siteConfig'][6][203]);
                }
            });
        }
    })

    //确认退款
    $(".travel").delegate(".refund","click",function(){
        var t = $(this), par = t.closest(".li_box"), id = par.attr("data-id");
        if(id){
            var data = [];
            data.push("id="+id);
            $.ajax({
                url: '/include/ajax.php?service=travel&action=refundPay',
                data: data.join("&"),
                type: 'post',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        getList(1);
                    }else{
                        alert(data.info);
                    }
                },
                error: function(){
                    alert(langData['siteConfig'][6][203]);
                }
            });
        }
    });

    //加载
    $(window).scroll(function() {
        var allh = $('body').height();
        var w = $(window).height();
        var scroll = allh - w;
        if ($(window).scrollTop() >= scroll && !isload) {
            atpage++;
            getList();
            
        };
    });

    getList();

    function getList(item) {

        isload = true;
        if(item==1){
            atpage= 1;
            objId.html('');
        }

        objId.append('<p class="loading">'+langData['siteConfig'][20][184]+'...</p>');
        $('.loading').remove();
        
        var state = $('.order_nav .on').attr('data-id') ? $('.order_nav .on').attr('data-id') : '';

        $.ajax({
            url: masterDomain+"/include/ajax.php?service=travel&action=orderList&store=1&state="+state+"&page="+atpage+"&pageSize="+pageSize,
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
                if(data && data.state != 200){
                    if(data.state == 101){
                        objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
                    }else{
                        var list = data.info.list, pageInfo = data.info.pageInfo, html = [], 
                        durl = $(".order_nav ul").data("url"), 
                        cdurl = $(".order_nav ul").data("cancel"), 
                        rhUrl = $(".order_nav ul").data("refundhotel"), 
                        rtUrl = $(".order_nav ul").data("refundticket"), 
                        cUrl = $(".order_nav ul").data("comment");
                        var t = window.location.href.indexOf(".html") > -1 ? "?" : "&";
                        
                        switch(state){
                            case "":
                                totalCount = pageInfo.totalCount;
                                break;
                            case "0":
                                totalCount = pageInfo.state0;
                                break;
                            case "1":
                                totalCount = pageInfo.state1;
                                break;
                            case "2":
                                totalCount = pageInfo.state2;
                                break;
                            case "3":
                                totalCount = pageInfo.state3;
                                break;
                            case "4":
                                totalCount = pageInfo.state4;
                                break;
                            case "5":
                                totalCount = pageInfo.state5;
                                break;
                            case "6":
                                totalCount = pageInfo.state6;
                                break;
                            case "7":
                                totalCount = pageInfo.state7;
                                break;
                            case "8":
                                totalCount = pageInfo.state8;
                                break;
                            case "9":
                                totalCount = pageInfo.state9;
                                break;
                            case "20":
                                totalCount = pageInfo.state20;
                                break;
                        }

                        var msg = totalCount == 0 ? langData['siteConfig'][20][126] : langData['siteConfig'][20][185];

                        $("#state").html(pageInfo.totalCount);
                        $("#state0").html(pageInfo.state0);
                        $("#state1").html(pageInfo.state1);
                        $("#state2").html(pageInfo.state2);
                        $("#state3").html(pageInfo.state3);
                        $("#state4").html(pageInfo.state4);
                        $("#state5").html(pageInfo.state5);
                        $("#state6").html(pageInfo.state6);
                        $("#state7").html(pageInfo.state7);
                        $("#state8").html(pageInfo.state8);
                        $("#state9").html(pageInfo.state9);
                        $("#state20").html(pageInfo.state20);

                        //拼接列表
					    if(list.length > 0){
                            html.push('<ul>');
                            for(var i = 0; i < list.length; i++){
                                var id            = list[i].id,
                                    ordernum      = list[i].ordernum,
                                    orderstate    = list[i].orderstate,
                                    orderprice    = list[i].orderprice,
                                    procount      = list[i].procount,
                                    litpic        = list[i].product.litpic,
                                    title         = list[i].product.title,
                                    homemakingtype= list[i].homemakingtype,
                                    payurl        = list[i].payurl,
                                    usertel       = list[i].usertel,
                                    cardnum       = list[i].cardnum,
                                    proid         = list[i].proid,
                                    cardnumUrl    = list[i].cardnumUrl,
                                    type          = list[i].type

                                    ;

                                var stateInfo = btn = contactbtn = "";
                                var urlString = durl.replace("%id%", id);//详情
                                var cdurls    = cdurl.replace("%id%", id);//退款详情
                                if(type==3){
                                    var refundUrl = rhUrl.replace("%id%", id);
                                }else{
                                    var refundUrl = rtUrl.replace("%id%", id);
                                } 
                                var cancelserviceUrl = cUrl.replace("%id%", id);//评论

                                /**
                                 * 0 、待付款
                                 * 1、已付款 待使用
                                 * 3、交易完成
                                 * 订单取消   7
                                 * 申请退款   8
                                 * 退款成功   9
                                 */
                                switch(orderstate){
                                    case "0":
                                        stateInfo = langData['homemaking'][4][1];//待付款
                                        btn = '<a href="javascript:;" class="cancel_order del">'+langData['travel'][13][38]+'</a><a href="'+payurl+'" class="pay_order sure">'+langData['travel'][13][37]+'</a>';
                                        //取消订单 付款
                                        break;
                                    case "1":
                                        stateInfo = langData['travel'][13][36];//待使用
                                        btn = '<a href="'+travelQR+'" class="refund_order sure">'+langData['travel'][13][51]+'</a>';
                                        //验证券码
                                        break;
                                    case "3":
                                        stateInfo = langData['travel'][13][62];//交易完成
                                        break;
                                    case "7":
                                        stateInfo = langData['homemaking'][9][53]; //已取消
                                        break;
                                    case "8":
                                        stateInfo = langData['homemaking'][9][71]; //退款中
                                        btn = '<a href="javascript:;" class="refund del">'+langData['travel'][13][63]+'</a><a href="'+cdurls+'" class="cancel sure">'+langData['travel'][13][49]+'</a>';
                                        //确认退款 退款详情
                                        break;
                                    case "9":
                                        stateInfo = langData['homemaking'][10][14]; //退款成功
                                        btn = '<a href="'+cdurls+'" class="cancel sure">'+langData['travel'][13][49]+'</a>';//删除订单 退款详情
                                        break;
                                }

                                html.push('<li data-id="'+id+'" class="li_box">');
                                html.push('<a href="'+urlString+'">');
                                html.push('<div class="img_left"><img src="'+litpic+'" /></div>');
                                html.push('<div class="state_right">'+stateInfo+'</div>');
                                html.push('<div class="txt_center">');
                                html.push('<h2>'+title+'</h2>');
                                html.push('<p class="price_order">'+echoCurrency('symbol')+'<em>'+orderprice+'</em></p>');
                                html.push('</div>');
                                html.push('</a>');
                                html.push('<div class="btn_group">');
                                html.push(btn);
                                html.push('</div>');
                                html.push('</li>');
                                
                            }
                            html.push('</ul>');
                            if(atpage == 1){
                                objId.html("");
                                objId.html(html.join(""));
                            }else{
                                objId.append(html.join(""));
                            }
                            isload = false;
                            if(atpage >= pageInfo.totalPage){
                                isload = true;
                                objId.append('<p class="loading">'+langData['homemaking'][8][65]+'</p>');
                            }
                        }else{
                            $('.loading').remove();
						    objId.append("<p class='loading'>"+msg+"</p>");
                        }
                    }
                }else{
                    objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
                }
            }
        });
    }
	
});

