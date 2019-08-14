$(function(){
  // 切换类型
  $(".member_type dl").click(function(){
    $(this).addClass("active").siblings().removeClass("active");
  })

  $(".submit").click(function(){
    var t  = $(this),
        mobile = $.trim($('#mobile').val()),
        password = $.trim($('#password').val()),
        type = $('.member_type .active').index();

    if(t.hasClass('disabled')) return;  
    if(mobile == ''){
      showMsg.alert('请填写手机号码', 1000);
      return false;
    }
    if(password == ''){
      showMsg.alert('请填写登陆密码', 1000);
      return false;
    }
    if(password.length < 6){
      showMsg.alert('登陆密码最少6位', 1000);
      return false;
    }

    t.addClass('disabled');
    showMsg.loading('正在提交', 1000);

    var data = [];
    data.push('service=dating');
    data.push('action=addUser');
    data.push('type=1');
    data.push('mobile='+mobile);
    data.push('password='+password);
    data.push('entrust='+$('.member_type .active').index());

    operaJson(masterDomain + '/include/ajax.php', data.join("&")  , function(data){
      if(data && data.state == 100){
        showMsg.alert(data.info, 1000, function(){
          location.reload();
        })
      }else{
        t.removeClass('disabled');
        showMsg.alert(data.info);
      }
    }, function(){
      t.removeClass('disabled');
      showMsg.alert('网络错误，请重试！');
    })

  })
})