
//删除订单
function close_li(thisli){
    $('.alert_tip').show();
}

$(function () {
    var atpage = 1;
    var pageSize = 10;
    var isload = false;

    
    
    //取消订单之后  变成删除订单
    $('.sale_cancel').click(function () {
        var id = $("#orderids").val();
        if(id){
            $(this).toggleClass('active');
            var data = [];
            data.push('id='+id);
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=operOrder&oper=cancel',
                data: data.join("&"),
                type: 'post',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        $('.content_bottom2 .nomoney_back').remove();
                        $('.content_bottom2 .contact_com').remove();
                        $('.content_bottom2').html('<span class="del_cancel" onclick="close_li(this)">'+langData['homemaking'][7][18]+'</span>'); //删除订单
                        $('.order_confirm2').text(langData['homemaking'][7][19]);   //已取消
                        $('.work_mask').hide();
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

    //申请退款弹出层
    $(".jz_data").delegate(".nomoney_back","click",function(){
        var t = $(this), id = t.attr('data-id');
        if(id){
            $("#orderids").val(id);
            var data = [];
            data.push("id="+id);
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=operOrder&oper=see',
                data: data.join("&"),
                type: 'post',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        var url = homemakingcancelUrl.replace("%id%", id);
                        if(data.info.retreat==1 && data.info.homemakingtype==1){
                            $(".work_container .t1").html(langData['homemaking'][6][17]);
                            $('.work_mask').show();
                        }else if(data.info.retreat==0 && data.info.homemakingtype==1){
                            //$(".work_container .t1").html(langData['homemaking'][9][64]);
                            if(data.info.type==1){
                                window.location.href = url + '?type=1';
                            }else{
                                window.location.href = url;
                            }
                        }else{
                            if(data.info.type==1){
                                window.location.href = url + '?type=1';
                            }else{
                                window.location.href = url;
                            }
                        }   
                        
                        /* $('.alert_tip').hide();
                        that.parents('li').remove();
                        getList(1); */
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

    //取消申请退款
    $(".jz_data").delegate(".refund_cancel","click",function(){
        var t = $(this), id = t.attr('data-id');
        if(id){
            $("#orderids").val(id);
            var data = [];
            data.push("id="+id);
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=operOrder&oper=cancelrefund',
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

    $('.work_close').click(function () {
        $('.work_mask').hide();
    })
    $('.sale_confirm').click(function () {
        $('.work_mask').hide();
    })

    //删除订单
    $(".jz_data").delegate(".del_cancel","click",function(){
        $('.alert_tip').show();
        $('.alert_tip .alert_content ul li').removeClass('active')
        var that=$(this), id = that.attr('data-id');
        //one()绑定click事件
        $("#cancel_order1").one("click",(function(){
            if(id){
                var data = [];
                data.push('id='+id);
                $.ajax({
                    url: '/include/ajax.php?service=homemaking&action=delOrder',
                    data: data.join("&"),
                    type: 'post',
                    dataType: 'json',
                    success: function(data){
                        if(data && data.state == 100){
                            $('.alert_tip').hide();
                            that.parents('li').remove();
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
          
        }));
    })

    $('.cancel_order2').click(function () {
       $(this).toggleClass('active')
       $('.alert_tip').hide();
    })

    //验收完成弹出层 线上
    $(".jz_data").delegate(".jz_pay1","click",function(){
        var t = $(this), id = t.attr('data-id'), ordernum = t.attr('data-ordernum'), price = t.attr('data-price');
        if(id){
            $("#orderids").val(id);
            $("#ordernum").val(ordernum); 
            $("#orderprice").val(price);
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=orderDetail&id='+id,
                type: 'get',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        $(".work_mask2 .t4").html(data.info.guarantee);
                    }
                },
                error: function(){
                }
            });
            $(".work_mask2 .money").html('<span>'+echoCurrency('symbol')+'</span><span>'+price+'</span>');
        }
        $('.work_mask2').show();
    })
    $('.work_close2').click(function () {
        $('.work_mask2').hide();
    })
    $('.yanshou_confirm').click(function () {
        $('.work_mask2').hide();
        $('.yanshou1').text('服务完成');
        var app = device.indexOf('huoniao') >= 0 ? 1 : 0;
        //data-ordernum="'+ordernum+'" data-id="'+proid+'"
        var aid = $("#orderids").val(), ordernumid = $("#ordernum").val(), amount = $("#orderprice").val();
        // var amount = $().val();
        location.href = masterDomain + "/include/ajax.php?service=homemaking&action=servicepay&aid="+aid+"&amount="+amount+"&ordernumid="+ordernumid+"&app="+app;
        return;
    })
    //验收完成弹出层 线下
    $(".jz_data").delegate(".jz_pay2","click",function(){
        var t = $(this), id = t.attr('data-id'), ids = t.attr('data-aid'), ordernum = t.attr('data-ordernum'), price = t.attr('data-price');
        if(id){
            $("#orderids").val(id);
            $("#ids").val(ids);
            $("#ordernum").val(ordernum); 
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=orderDetail&id='+ids,
                type: 'get',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        $(".work_container2 .t4").html(data.info.guarantee);
                    }
                },
                error: function(){
                }
            });
            $(".work_container2 .money").html('<span>'+echoCurrency('symbol')+'</span><span>'+price+'</span>');
        }
        $('.work_mask3').show();
    })
    $('.work_close3').click(function () {
        $('.work_mask3').hide();
    })
    $('.yanshou_confirm2').click(function () {
        var ids = $("#ids").val();
        if(ids){
            var data = [];
            data.push('id='+ids);
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=operOrder&oper=verify',
                data: data.join("&"),
                type: 'post',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        $('.work_mask3').hide();
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
        
        $('.yanshou2').text('服务完成');
    })

    //取消预约
    $(".jz_data").delegate(".yuyue_cancel","click",function(){
        var t = $(this), id = t.attr('data-id');
        if(id){
            $("#orderids").val(id);
        }
        $('.alert_tip2').show();
        $('.alert_tip2 .alert_content ul li').removeClass('active')
    })
    //免费预约 取消预约
    $('.yuyue_yes').click(function () {
        var id = $("#orderids").val();
        if(id){
            $(this).toggleClass('active');
            var data = [];
            data.push('id='+id);
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=operOrder&oper=cancel',
                data: data.join("&"),
                type: 'post',
                dataType: 'json',
                success: function(data){
                    if(data && data.state == 100){
                        $('.content_bottom3 .yuyue_cancel').remove();
                        $('.content_bottom3 .contact_com').remove();
                        $('.content_bottom3').html('<span class="del_cancel" onclick="close_li(this)">'+langData['homemaking'][7][18]+'</span>'); //删除订单
                        $('.order_confirm2').text(langData['homemaking'][7][19]);   //已取消
                        $('.alert_tip2').hide();
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
    $('.yuyue_no').click(function () {
        $(this).toggleClass('active')
        $('.alert_tip2').hide();
    })

    //服务码
    $(".jz_data").delegate(".service_code","click",function(){
        var t = $(this), id = t.attr('data-id');
        if(id){
            $(".fuwu_alert .t2").html(id);
        }
        $('.fuwu_alert').show();
    })
    $('.fuwu_alert .t6').click(function () {
        $('.fuwu_alert').hide();
    })

    //选择状态
    var  objId = $('.jz_data ul');
    $(".tab li").bind("click", function(){
        var t = $(this);
        if(!t.hasClass("curr")){
        t.addClass("curr").siblings("li").removeClass("curr");
        objId.html('');
        getList(objId);
        }
    });

    //个人取消订单
    $(".jz_data").delegate(".jz_cancel","click",function(){
        var id = $(this).attr('data-id');
        if(id){
            var data = [];
            data.push('id='+id);
            $.ajax({
                url: '/include/ajax.php?service=homemaking&action=operOrder&oper=cancel',
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
        $(".pagination").hide();
        
        var state = $('.tab .curr').attr('data-id') ? $('.tab .curr').attr('data-id') : '';

        $.ajax({
            url: masterDomain+"/include/ajax.php?service=homemaking&action=orderList&state="+state+"&page="+atpage+"&pageSize="+pageSize,
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
                if(data && data.state != 200){
                    if(data.state == 101){
                        objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
                    }else{
                        var list = data.info.list, pageInfo = data.info.pageInfo, html = [], durl = $(".tab ul").data("url"), rUrl = $(".tab ul").data("refund"), cUrl = $(".tab ul").data("comment");
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
                            for(var i = 0; i < list.length; i++){
                                var id            = list[i].id,
                                    ordernum      = list[i].ordernum,
                                    orderstate    = list[i].orderstate,
                                    orderprice    = list[i].orderprice,
                                    procount      = list[i].procount,
                                    litpic        = list[i].product.litpic,
                                    courier       = list[i].dispatch.courier,
                                    title         = list[i].product.title,
                                    homemakingtype= list[i].homemakingtype,
                                    usercontact   = list[i].usercontact,
                                    tel           = list[i].tel,
                                    payurl        = list[i].payurl,
                                    usertel       = list[i].usertel,
                                    cardnum       = list[i].cardnum,
                                    proid         = list[i].proid,
                                    servicetype   = list[i].servicetype,
                                    price         = list[i].price,
                                    online        = list[i].online,
                                    aftersale     = list[i].aftersale

                                    ;
                                var stateInfo = btn = contactbtn = "";
                                var urlString = homemakingEditUrl.replace("%id%", id);
                                var repairURL = homemakingRepairUrl.replace("%id%", id);
                                var cancelserviceUrl = homemakingcancelserviceUrl.replace("%id%", id);
                                /**
                                 * 0 、待付款
                                 * 1、已付款 待确认
                                 * 点击确认有效 2
                                 * 点击确认无效 3
                                 * 有预约金的 验证服务码  4
                                 * 确认服务   5
                                 * 服务完成   6
                                 * 订单取消   7
                                 * 申请退款   8
                                 */
                                switch(orderstate){
                                    case "0":
                                        stateInfo = langData['homemaking'][4][1];//待付款
                                        //取消订单 联系商家 立即付款
                                        btn = '<span data-id="'+id+'" class="jz_cancel">'+langData['homemaking'][9][51]+'</span><a href="tel:'+tel+'"><span class="tel_com">'+langData['homemaking'][9][50]+'</span></a><a href="'+payurl+'"><span class="jz_pay">'+langData['homemaking'][9][52]+'</span></a>';
										break;
									case "1":
                                        stateInfo = langData['homemaking'][4][2]; //已付款，待确认
                                        if(homemakingtype == 0){
                                            btn = '<span data-id="'+id+'" class="yuyue_cancel">'+langData['homemaking'][10][11]+'</span><a href="tel:'+usertel+'"><span class="contact_com tel_com">'+langData['homemaking'][9][50]+'</span></a>';//取消预约 联系商家
                                        }else{
                                            btn = '<span data-id="'+id+'" class="nomoney_back">'+langData['homemaking'][9][55]+'</span><a href="tel:'+usertel+'"><span class="contact_com tel_com">'+langData['homemaking'][9][50]+'</span></a>';//申请退款 联系商家
                                        }
                                        break;
                                    case "2":
                                        stateInfo = langData['homemaking'][4][3]; //待服务
                                        if(homemakingtype==1){
                                            btn = '<span data-id="'+id+'" class="nomoney_back">'+langData['homemaking'][10][15]+'</span>';//申请售后
                                            btn += '<span data-id="'+cardnum+'" class="service_code">'+langData['homemaking'][9][74]+'</span>';//服务码
                                        }else if(homemakingtype == 0){
                                            btn = '<span data-id="'+id+'" class="yuyue_cancel">'+langData['homemaking'][10][11]+'</span>';//取消预约
                                        }
                                        contactbtn = '<a href="tel:'+usertel+'"><span class="contact_com tel_com">'+langData['homemaking'][9][50]+'</span></a>';//联系商家
                                        break;
                                    case "3":
                                        stateInfo = langData['homemaking'][9][59]; //服务无效
                                        btn = '<span data-id="'+id+'" class="del_cancel">'+langData['homemaking'][9][54]+'</span>';//删除订单
                                        break;
                                    case "4":
                                        stateInfo = langData['homemaking'][4][3]; //待服务
                                        if(homemakingtype==2){
                                            btn = '<span data-id="'+id+'" class="nomoney_back">'+langData['homemaking'][10][15]+'</span>';//申请售后
                                        }else if(homemakingtype == 0){
                                            btn = '<span data-id="'+id+'" class="yuyue_cancel">'+langData['homemaking'][10][11]+'</span>';//取消预约
                                        }
                                        contactbtn = '<a href="tel:'+usertel+'"><span class="contact_com tel_com">'+langData['homemaking'][9][50]+'</span></a>';//联系商家
                                        break;
                                    case "5":
                                        stateInfo = langData['homemaking'][9][89]; //商家已服务，待验收
                                        if(homemakingtype==2){
                                            btn = '<a href="'+cancelserviceUrl+'"><span class="sale_shouhou">'+langData['homemaking'][9][76]+'</span></a>';//申请退款
                                        }
                                        contactbtn = '<a href="tel:'+usertel+'"><span class="contact_com tel_com">'+langData['homemaking'][9][50]+'</span></a>';//联系商家
                                        var paybtn = '';
                                        if(servicetype==0 || (servicetype==1 && online==1)){
                                            paybtn = 'jz_pay2';
                                        }else{
                                            paybtn = 'jz_pay1';
                                        }
                                        contactbtn += '<span data-price="'+price+'" data-aid="'+id+'" data-ordernum="'+ordernum+'" data-id="'+proid+'" class="jz_pay '+paybtn+'">'+langData['homemaking'][9][90]+'</span>';//验收服务
                                        break;
                                    case "6":
                                        stateInfo = langData['homemaking'][9][93]; //服务完成
                                        if(aftersale==1){
                                            btn = '<a href="'+repairURL+'"><span class="sale_repair">'+langData['homemaking'][9][94]+'</span></a>';//售后维保
                                        }else{
                                            btn = '<span data-id="'+id+'" class="del_cancel">'+langData['homemaking'][9][54]+'</span>';//删除订单
                                        }
                                        contactbtn = '<a href="tel:'+usertel+'"><span class="contact_com tel_com">'+langData['homemaking'][9][50]+'</span></a>';//联系商家
                                        break;
                                    case "7":
                                        stateInfo = langData['homemaking'][9][53]; //已取消
                                        btn = '<span data-id="'+id+'" class="del_cancel">'+langData['homemaking'][9][54]+'</span>';//删除订单
                                        break;
                                    case "8":
                                        stateInfo = langData['homemaking'][9][71]; //退款中
                                        btn = '<span data-id="'+id+'" class="refund_cancel">'+langData['homemaking'][10][22]+'</span>';//取消退款
                                        btn += '<a href="tel:'+usertel+'"><span class="contact_com tel_com">'+langData['homemaking'][9][50]+'</span></a>';//联系商家
                                        break;
                                    case "9":
                                        stateInfo = langData['homemaking'][10][14]; //退款成功
                                        btn = '<span data-id="'+id+'" class="del_cancel">'+langData['homemaking'][9][54]+'</span>';//删除订单
                                        break;
                                }
                                html.push('<li class="fn-clear">');
                                html.push('<p class="jz_order_company"><span>'+langData['homemaking'][4][7]+'：<span>'+ordernum+'</span></span><span class="jz_order_type">'+stateInfo+'</span></p>');
                                html.push('<div class="content_top fn-clear">');
                                html.push('<a href="'+urlString+'">');
                                if(courier!=''){
                                    // html.push('<p class="courier">'+courier+'</p>');
                                }
                                html.push('<div class="left_b"><img src="'+litpic+'" alt=""></div>');
                                html.push('<div class="right_b">');
                                html.push('<p class="jz_order_title">'+title+'</p>');
                                html.push(' <p class="jz_order_time"><span>'+langData['homemaking'][4][8]+'：</span><span>2019-03-13  10:00</span></p>');//预约时间
                                if(homemakingtype==1){
                                    html.push('<p class="jz_order_price"><span>'+echoCurrency('symbol')+'</span><span>'+orderprice+'</span><span>'+langData['homemaking'][8][60]+'</span></p>');
                                }else if(homemakingtype==0){
                                    html.push('<p class="jz_order_free"><span>'+langData['homemaking'][9][44]+'</span></p>');
                                }
                                html.push('</div>');
                                html.push('</a>');
                                html.push('</div>');
                                html.push('<div class="content_bottom">');
                                html.push(btn);
                                html.push(contactbtn);
                                html.push('</div>');
                                html.push('</li>');
                            }
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