$(function () {
    var anchorId, refreshTopTimer;
    $('.container.tw_info .img_box li a').abigimage();
	//页面自适应设置
	$(window).resize(function(){
		var screenwidth = window.innerWidth || document.body.clientWidth;
		var criticalPoint = criticalPoint != undefined ? criticalPoint : 1600;
		var criticalClass = criticalClass != undefined ? criticalClass : "newsize";
		if(screenwidth > criticalPoint){
			$(".w1600").removeClass(criticalClass);
		}else{
			$(".w1600").addClass(criticalClass);
		}
	});
    $('.intro  span').click(function () {
        $(this).addClass('curr').siblings().removeClass('curr');
        var i = $(this).index();
        $('.filter .container').eq(i).addClass('show').siblings().removeClass('show');
    });
    
    
    $('.conBox .conList li').hover(function () {
        $(this).find('.code_bg').show();
    },function () {
        $(this).find('.code_bg').hide();
    });

    //点击关注
    function follow(id){
		$.post("/include/ajax.php?service=member&action=followMember&for=live_anchor&id="+id, function(){
		});
	}
    $('#follow').click(function () {
        var t = $(this),id=t.attr('data-id');
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
            huoniao.login();
            return false;
        }

        if(!t.hasClass("curr")){
            t.addClass("curr");
            t.find('.txt').html('已关注');
            $(this).parent().find('.appo_sec').show();
            fadeOut();
            follow(id);
            var num = $("#follow .num").text();
            num = parseInt(num) + 1;
            $("#follow .num").html(num);
        }else {
            $(this).parent().find('.appo_cancel').show();
            
        }
        
    });
    $('#gz_sure').click(function () {
        $(this).parents('.gz').find('.follow').removeClass("curr");
        $(this).parents('.gz').find('.txt').html('关注');
        $(this).parents('.appo_cancel').fadeOut();
        var id = $(this).parents('.gz').find('.follow').attr("data-id");
        follow(id);
        var num = $("#follow .num").text();
        num = parseInt(num) - 1;
        $("#follow .num").html(num);
    });

    $('#gz_cancel').click(function () {
        $(this).parents('.appo_cancel').fadeOut();
    });

    // 验证邀请码
    $('.invite-box .btn a.sure').click(function (e) {
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
            window.location.href = masterDomain+'/login.html';
            return false;
        }

        e.preventDefault();
        var invite = $('#invite').val();
        var msg;
        if(invite==''){
            msg = "请输入邀请码";
            $('#inv-msg').html(msg);
            return false;
        }

        var url = $("#pForm").attr('action'), data = $("#pForm").serialize();

        $.ajax({
			url: url,
			data: data,
			type: "POST",
			dataType: "html",
			success: function (data) {
                if(data!='密码错误'){
                    location.reload();
                }else{
                    $('#inv-msg').html(data);
                }
            },
			error: function(){
				alert(langData['siteConfig'][20][183]);  //网络错误，请稍候重试！
            }
        });

    });

    // 去支付
    $('.play-box .btn a.sure').click(function () {
        var userid = $.cookie(cookiePre + "login_user");
        if (userid == null || userid == "") {
            window.location.href = masterDomain+'/login.html';
            return false;
        }

        var data = [];
        data.push("liveid="+id);
        data.push("amount="+livemoney);
        data.push("paytype=wxpay");
        data.push("qr=1");

        $.ajax({
            url:'/include/ajax.php?service=live&action=livePay',
            data:data.join('&'),
            type:'GET',
            dataType:'json',
            success:function (data) {
                if(data.state == 100){

                    $(".play-money").addClass('pop-show');
                    $('.play-box').hide();

                    var param = [], info = data.info;
                    for (var k in info) {
                        param.push(k + '=' + info[k]);
                    }

                    var src = masterDomain + '/include/qrPay.php?' + param.join('&');
                    $('.play-money .code img').attr('src', masterDomain + '/include/qrcode.php?data=' + encodeURIComponent(src));

                    //验证是否支付成功，如果成功跳转到指定页面
                    if (refreshTopTimer != null) {
                        clearInterval(refreshTopTimer);
                    }

                    refreshTopTimer = setInterval(function () {

                        $.ajax({
                            type: 'POST',
                            async: false,
                            url: '/include/ajax.php?service=member&action=tradePayResult&type=3&order=' + info['ordernum'],
                            dataType: 'json',
                            success: function (str) {
                                if (str.state == 100 && str.info != "") {
                                    clearInterval(refreshTopTimer);
                                    $(".play-money").removeClass('pop-show');
                                    $('.dalogo').hide();
                                    $('.play-success').fadeIn();
                                    setTimeout(function () {
                                        $('.play-success').fadeOut();
                                    },1500);
                                } else if (str.state == 101) { //订单不存在
                                    console.log(langData['siteConfig'][21][162]);
                                }
                            }
                        });

                    }, 2000);

                }else{
                    alert(langData['siteConfig'][20][183]);  //网络错误，请稍候重试！
                }
            }
        });

        

    });






    //聊天室点击详情
    $('.play_r .room .collapsing .rank-list ul.list li').click(function () {
        var h1 = $(this).parents('.collapsing').offset().top;
        var h2 = $(this).offset().top;
        var h = h2-h1+35;
        $('#anchorBox').attr('style','top:'+h+'px');
        $('#anchorBox i.jian').attr('style','left:25%');
        $('#anchorBox').show();
        //点击区域以外地方影藏该区域
        $(document).click(function(){
            $('#anchorBox').hide();
        });
        event.stopPropagation();
        anchorId = $(this).attr('data-id')
        console.log(anchorId);
        getAnchor(anchorId);
    });
    
    $('.play_r .room .collapsing .rank-list .th-item:nth-child(1)').click(function () {
        $('#anchorBox').attr('style','top:115px');
        $('#anchorBox i.jian').attr('style','left:25%');
        $('#anchorBox').show();
        $(document).click(function(){
            $('#anchorBox').hide();
        });
        event.stopPropagation();
        anchorId = $(this).attr('data-id')    
        getAnchor(anchorId);
    });
    $('.play_r .room .collapsing .rank-list .top-three .th-item:nth-child(2)').click(function () {
        $('#anchorBox').attr('style','top:115px;left:48px');
        $('#anchorBox i.jian').attr('style','left:50%');
        $('#anchorBox').show();
        $(document).click(function(){
            $('#anchorBox').hide();
        });
        event.stopPropagation();
        anchorId = $(this).attr('data-id')
        console.log(anchorId);
        getAnchor(anchorId);
    });
    $('.play_r .room .collapsing .rank-list .top-three .th-item:nth-child(3)').click(function () {
        $('#anchorBox').attr('style','top:115px;left:100px');
        $('#anchorBox i.jian').attr('style','left:75%');
        $('#anchorBox').show();
        $(document).click(function(){
            $('#anchorBox').hide();
        });
        event.stopPropagation();
        anchorId = $(this).attr('data-id')
        console.log(anchorId);
        getAnchor(anchorId);
    });


    function getAnchor(anchorId) {
        $.ajax({
            url:'/include/ajax.php?service=live&action=getUserInfo&id='+anchorId+'',
            type:'GET',
            dataType:'json',
            success:function (data) {
                if(data.state == 100){
                    var html = [],data=data.info;

                        html.push('<div class="img_box"><div class="img"><img src="'+huoniao.changeFileSize(data.photo, "small")+'" alt=""></div><i></i></div>');
                        html.push('<p class="name">'+data.nickname+'</p>');
                        html.push('<p class="num"><span class="z_num">直播 '+data.livenum+'</span><span>粉丝 '+data.totalFans+'</span></p>');
                        html.push('<p class="ID"><i></i>'+data.userid+'</p>');
                        html.push('<p class="btn"><a target="_blank" href="'+masterDomain+'/user/'+data.userid+'">前往Ta的主页 ></a></p>');

                    $("#anchorBox").html(html.join(""));
                }else{
                    $("#anchorBox").html('<div class="loading">'+data.info+'</div>');
                }
            }
        });
    }

    function fadeOut(){
        setTimeout(function () {
            $('.appo_sec').fadeOut();
        },1500);
    }


    // 聊天室
    $('.play_r .room .room-hd ul.rank-tab li').click(function () {
        $(this).toggleClass('curr').siblings().removeClass('curr');
        var i = $(this).index();
        $('.collapsing .rank-list').eq(i).toggleClass('show').siblings().removeClass('show');

    });
    $('.play_r .room .room-hd ul.rank-tab').click(function () {
        if($('.play_r .room .room-hd ul').find('.curr').length==0){
            $('.play_r .room .room-hd .room-hd-bg').removeClass('show');
        }else{
            $('.play_r .room .room-hd .room-hd-bg').addClass('show');
        }

    });

    $('.play_r .room .room-hd .bottom_bar').click(function () {

        if($('.collapsing .reward-list').hasClass('show')){
            $('.collapsing .reward-list').toggleClass('show');
            $('.play_r .room .room-hd ul.rank-tab li.spare').toggleClass('curr');
        }else {
            $('.collapsing .invite-list').toggleClass('show');
            $('.play_r .room .room-hd ul.rank-tab li.invite').toggleClass('curr');         
        }
         $('.play_r .room .room-hd .room-hd-bg').toggleClass('show');
    });

});