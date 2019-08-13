$(function () {
    //分类品牌
    $('#type').on('click',function () {
        $('.mask').removeClass('mask-hide');
        $('.block-brand').addClass('show');
    });
    $('.block-brand .nav-final .back').on('click',function () {
        $('.mask').addClass('mask-hide');
        $('.block-brand').removeClass('show');
    });

    $('.block-brand .aside-main ul li').click(function () {
        var t = $(this).find('.bread_text').html(), id = $(this).data('id');
        $('#type').val(t);
        $('#brand').val(id);
        $('.brand .choose span').hide();
        $('.mask').addClass('mask-hide');
        $('.block-brand').removeClass('show');
    });
    //分类车系
    // $('.block-brand .aside-main li').on('click',function () {
    //     $('.block-cartype').addClass('show');
    //     $('.aside .aside-main').scrollTop(0);
    // });
    // $('.block-cartype .nav-final .back').on('click',function () {
    //     $('.block-cartype').removeClass('show');
    // });
    // // 车型分类
    // $('.block-cartype .aside-main li').on('click',function () {
    //     $('.cartype-sub').addClass('show');
    //     $('.cartype-sub .aside-main').scrollTop(0);
    // });
    // $('.cartype-sub .nav-final .back').on('click',function () {
    //     $('.mask').addClass('mask-hide');
    //     $('.aside').removeClass('show');
    // });
    // $('.cartype-sub .tt').click(function(){
    //     $(this).toggleClass('curr');
    //     $(this).parent().find('.list-line').toggleClass('hide');
    // });
    //
    // $('.cartype-sub .list-line li').on('click',function () {
    //     var t= $(this).html();
    //     $('#type').val(t);
    //     $('.aside').removeClass('show');
    //     $('.mask').addClass('mask-hide');
    // });

    $('.mask').on('click',function () {
        $(this).addClass('mask-hide');
        $('.aside').removeClass('show');
    });
    
    // 信息提示框
    
    $('.maskbg .msg-box .btn-close').click(function () {
        $('.maskbg').hide();
    });

    //表单验证
    function isPhoneNo(p) {
        var pattern = /^1[34578]\d{9}$/;
        return pattern.test(p);
    }

    $('.submit').on('click',function (){
        var type = $('#type').val();
        var phone = $('#phone').val();
        var r = true;
        if(!type){
            r = false;
            $('.maskbg').show();
            $('.maskbg .msg-box .msg').html(''+langData['car'][5][28]+'');/*车型不能为空!*/
        }else if(!phone){
            r = false;
            $('.maskbg').show();
            $('.maskbg .msg-box .msg').html(''+langData['car'][5][29]+'');/*手机号不能为空!*/
        }else {
            if (isPhoneNo($.trim($('#phone').val())) == false) {
                r = false;
                $('.maskbg').show();
                $('.maskbg .msg-box .msg').html(''+langData['car'][5][30]+'');/*请输入格式正确的手机号!*/
            }
        }
        console.log(11);
        console.log(r);
        if(!r){
            return;
        }
        console.log(22);

        var form = $("#fabuForm"), action = form.attr("action"), url = form.attr("data-url");
        data = form.serialize();
        
        $.ajax({
			url: action,
			data: data,
			type: "POST",
			dataType: "json",
			success: function (data) {
				if(data && data.state == 100){
                    $('.maskbg').show();
                    $('.maskbg .msg-box .msg').html(data.info);
				}else{
                    $('.maskbg').show();
                    $('.maskbg .msg-box .msg').html(data.info);
				}
			},
			error: function(){
                $('.maskbg').show();
                $('.maskbg .msg-box .msg').html(langData['siteConfig'][20][183]);
			}
		});


    });





    // 侧边栏点击字幕条状
    var navBar = $(".navbar");
    navBar.on("touchstart", function (e) {
        $(this).addClass("active");
        $('.letter').html($(e.target).html()).show();


        var width = navBar.find("li").width();
        var height = navBar.find("li").height();
        var touch = e.touches[0];
        var pos = {"x": touch.pageX, "y": touch.pageY};
        var x = pos.x, y = pos.y;
        $(this).find("li").each(function (i, item) {
            var offset = $(item).offset();
            var left = offset.left, top = offset.top;
            if (x > left && x < (left + width) && y > top && y < (top + height)) {
                var id = $(item).find('a').attr('data-id');
                var cityHeight = $('#'+id).offset().top + $('.aside .aside-main').scrollTop();
                if(cityHeight>45){
                    $('.aside .aside-main').scrollTop(cityHeight-45);
                    $('.letter').html($(item).html()).show();
                }

            }
        });
    });

    navBar.on("touchmove", function (e) {
        e.preventDefault();
        var width = navBar.find("li").width();
        var height = navBar.find("li").height();
        var touch = e.touches[0];
        var pos = {"x": touch.pageX, "y": touch.pageY};
        var x = pos.x, y = pos.y;
        $(this).find("li").each(function (i, item) {
            var offset = $(item).offset();
            var left = offset.left, top = offset.top;
            if (x > left && x < (left + width) && y > top && y < (top + height)) {
                var id = $(item).find('a').attr('data-id');
                var cityHeight = $('#'+id).offset().top + $('.aside .aside-main').scrollTop();
                if(cityHeight>45) {
                    $('.aside .aside-main').scrollTop(cityHeight - 45);
                    $('.letter').html($(item).html()).show();
                }
            }
        });
    });


    navBar.on("touchend", function () {
        $(this).removeClass("active");
        $(".letter").hide();
    })



    
});