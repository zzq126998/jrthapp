$(function(){
    // 点击收藏
    $('.follow-wrapper').click(function(){
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
            location.href = masterDomain + '/login.html';
            return false;
        }

        var t = $(this), type = '';
        if(t.find('.follow-icon').hasClass('active')){
            t.find('.follow-icon').removeClass('active');
            t.find('.text-follow').text(langData['education'][0][2]);//收藏
            type = 'del';
        }else{
            t.find('.follow-icon').addClass('active');
            t.find('.text-follow').text(langData['education'][4][6]);//已收藏
            type = 'add';
        }
        $.post("/include/ajax.php?service=member&action=collect&module=education&temp=tutor-detail&type="+type+"&id="+pageData.id);
    });

    // 错误提示
    function showMsg(str){
        var o = $(".error");
        o.html('<p>'+str+'</p>').show();
        setTimeout(function(){o.hide()},1000);
    }

    //我要预约
    $('.yue .tec_yuyue').bind('click', function(){
        if(!$(this).hasClass('noyue')){
            $('.work_mask').show();
        }
    });
    $('.peo_footer .class_yuyue').bind('click', function(){
        if(!$(this).hasClass('noyue')){
            $('.work_mask').show();
        }
    });

    $('.step .cancel').bind('click', function(){
        $('.work_mask').hide();
    });

    $('.step .sure').bind('click', function(e){
        e.preventDefault();

        var t = $("#fabuForm"), action = t.attr('action'), r = true;

        var username = $('#username').val();
        var tel      = $('#tel').val();
        if(!username){
            r = false;
            showMsg(langData['education'][6][32]); //请输入姓名
            return;
        }else if(!tel){
            r = false;
            showMsg(langData['education'][6][24]); //请输入手机号
            return;
        }

        if(!r){
            return;
        }

        $.ajax({
            url: action,
            data: t.serialize(),
            type: 'post',
            dataType: 'json',
            success: function(data){
                if(data && data.state == 100){
                    showMsg(data.info);
                    $('.work_mask').hide();
                }else{
                  showMsg(data.info);
                }
            },
            error: function(){
              showMsg(langData['education'][5][33]);
            }
        });

    });



})