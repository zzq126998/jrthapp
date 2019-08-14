$(function () {

  	
		$('.bd a.go_detail').attr('href',$('.hd li.curr').attr('data-url'));
		$('.bd .ercode_img img').attr('src',masterDomain+"/include/qrcode.php?data="+$('.hd li.curr').attr('data-url'));
    //广告轮播
    $(".fir_l_top #slideBox").slide({mainCell:".bd ul",effect:"left",easing:"easeOutCirc",delayTime:600,
        autoPlay:true,
        autoPage:'<li></li>', titCell: '.hd ul'});
    $(".fir_m_adBox #slideBox2").slide({mainCell:".bd ul",effect:"left",easing:"easeOutCirc",delayTime:650,
        autoPlay:true,
        autoPage:'<li></li>', titCell: '.hd ul'});
   
  /*
   //点击预约
    $('.fir_r_con .con_img .btn_appo').click(function () {
        var h1 = $(this).parents('.fir_r_con').offset().top;
        var h2 = $(this).parents('li').offset().top;
        var h = h2-h1+214;
        $('#appo_sec').attr('style','top:'+h+'px');
        $('#appo_sec').show();
        fadeOut();
    });
    function fadeOut(){
        setTimeout(function () {
            $('#appo_sec').fadeOut();
        },3000);
    }*/

    //控制标题的字数
    $('.sliceFont').each(function(index, el) {
        var num = $(this).attr('data-num');
        var text = $(this).text();
        var len = text.length;
        $(this).attr('title',$(this).text());
        if(len > num){
            $(this).html(text.substring(0,num));
        }
    });

    $('.fir_r_con li').hover(function () {
       $(this).addClass('curr').siblings().removeClass('curr');
    });

    // 推荐直播--焦点图
    var swiperNav = [], mainNavLi = $('.slideBox4 .bd').find('li');
    for (var i = 0; i < mainNavLi.length; i++) {
        swiperNav.push($('.slideBox4 .bd').find('li:eq('+i+')').html());
    }
    var liArr = [];
    for(var i = 0; i < swiperNav.length; i++){
        liArr.push(swiperNav.slice(i, i + 5).join(""));
        i += 4;
    }
    $('.slideBox4 .bd').find('ul').html('<li>'+liArr.join('</li><li>')+'</li>');
    $(".slideBox4").slide({titCell:".hd ul", mainCell:".bd ul",effect:"leftLoop", autoPage:"<li></li>",autoPlay: true});

    //都在关注
    $(".part_thr .foucebox2").slide({
        mainCell: ".bd ul",
        effect: "fold",
        autoPlay: true,
        delayTime: 300,
        triggerTime: 50,
        startFun: function(i) {
            $(".foucebox2 .hoverBg").animate({
                    "margin-top": 126 * i
                },
                150);
        }
    });

    //控制标题的字数
    $('.sliceFont2').each(function(index, el) {
        var num = $(this).attr('data-num');
        var text = $(this).text();
        var len = text.length;
        $(this).attr('title',$(this).text());
        if(len > num){
            $(this).html(text.substring(0,num));
        }
    });
    //控制标题的字数
    $('.sliceFont3').each(function(index, el) {
        var num = $(this).attr('data-num');
        var text = $(this).text();
        var len = text.length;
        $(this).attr('title',$(this).text());
        if(len > num){
            $(this).html(text.substring(0,num));
        }
    });


    $('.part_four .conList li').hover(function () {
        $(this).find('.code_bg').show();
    },function () {
        $(this).find('.code_bg').hide();
    });

    if($.browser.msie && parseInt($.browser.version) >= 8){
        $('.part_sec .liveList .slideBox .bd ul li a:nth-child(5n),.part_four .conList li:nth-child(4n)').css('margin-right','0');
    }

    $(".isearch").click(function(){
        var url = $("#myform").attr('action');
        location.href = url + '?keywords=' + $(".searchkey").val();
    });

});