$(function(){

  var errorMsg = '';

	//验证提示弹出层
	function showTipMsg(msg){
   /* 给出一个浮层弹出框,显示出errorMsg,2秒消失!*/
    /* 弹出层 */
	  $('.protips').html(msg);
		  var scrollTop=$(document).scrollTop();
		  var windowTop=$(window).height();
		  var xtop=windowTop/2+scrollTop;
		  $('.protips').css('display','block');
		  setTimeout(function(){      
			$('.protips').css('display','none');
		  },2000);
	}


	$('.time_txt_t p span').click(function(){
        var t = $(this);
        if(!t.find('i').hasClass('active')){
        	t.find('i').addClass('active');
        	t.siblings().find('i').removeClass('active');
        }
	});

  var sendSmsData = [];

  if(geetest){
    //极验验证
    var handlerPopupFpwd = function (captchaObjFpwd){
      captchaObjFpwd.onSuccess(function (){
        var validate = captchaObjFpwd.getValidate();
        sendSmsData.push('geetest_challenge='+validate.geetest_challenge);
        sendSmsData.push('geetest_validate='+validate.geetest_validate);
        sendSmsData.push('geetest_seccode='+validate.geetest_seccode);
        $("#vercode").focus();
        sendSmsFunc();
      });

      $('.getCodes').bind("click", function (){
        if($(this).hasClass('disabled')) return false;
        var tel = $(".contact_phone").val();
        if(tel == ''){
          errMsg = "请输入手机号码";
          showTipMsg(errMsg);
          $(".contact_phone").focus();
          return false;
        }
        //弹出验证码
        captchaObjFpwd.verify();
      })
    };

    $.ajax({
      url: masterDomain+"/include/ajax.php?service=siteConfig&action=geetest&terminal=mobile&t=" + (new Date()).getTime(), // 加随机数防止缓存
      type: "get",
      dataType: "json",
      success: function(data) {
        initGeetest({
          gt: data.gt,
          challenge: data.challenge,
          offline: !data.success,
          new_captcha: true,
          product: "bind",
          width: '312px'
        }, handlerPopupFpwd);
      }
    });
  }else{
    $(".getCodes").bind("click", function (){
      if($(this).hasClass('disabled')) return false;
      var tel = $(".contact_phone").val();
      if(tel == ''){
        errMsg = "请输入手机号码";
        showTipMsg(errMsg);
        $(".contact_phone").focus();
        return false;
      }
      $("#vercode").focus();
      sendSmsFunc();
    })
  }

  //发送验证码
  function sendSmsFunc(){
    var tel = $(".contact_phone").val();
    var areaCode = $("#areaCode").val().replace('+', '');
    var sendSmsUrl = "/include/ajax.php?service=siteConfig&action=getPhoneVerify";

    sendSmsData.push('type=verify');
    sendSmsData.push('areaCode=' + areaCode);
    sendSmsData.push('phone=' + tel);

    $('.senderror').text('');
    $.ajax({
      url: sendSmsUrl,
      data: sendSmsData.join('&'),
      type: 'POST',
      dataType: 'json',
      success: function (res) {
        if (res.state == 101) {
          $('.senderror').text(res.info);
        }else{
          countDown($('.getCodes'), 60);
        }
      }
    })
  }

	//倒计时
  function countDown(obj,time){
    obj.html(time+'s').addClass('disabled');
    mtimer = setInterval(function(){
      obj.html((--time)+'s').addClass('disabled');
      if(time <= 0) {
        clearInterval(mtimer);
        obj.html('重新发送').removeClass('disabled');
      }
    }, 1000);
  }

	// 提交验证
	$('.btn button').click(function(){
    var t = $(this);
    if(t.hasClass('disabled')) return;

		var contact_name = $('.contact_name').val();
		var contact_phone = $('.contact_phone').val();
		var contact_yzm = $('.contact_yzm').val();

    errorMsg = '';

		if(!contact_name){
			errorMsg="请输入您的姓名";
	        showTipMsg(errorMsg);
		}else if(!contact_phone){
			errorMsg="请输入您的手机号码";
	        showTipMsg(errorMsg);
		}else if(contact_phone.length !== 11){
			errorMsg="请输入正确的手机号";
	        showTipMsg(errorMsg);
    } else if(!userinfo.phoneCheck){

  		if(!contact_yzm){
  			errorMsg="请输入验证码";
        showTipMsg(errorMsg);
  		}
    }

    if(errorMsg) return;

    var data = [];

    data.push('type='+type);
    data.push('aid='+id);
    // data.push('title='+title);
    data.push('day='+$('.time_txt_t').eq(0).find('.active').parent().index() - 1);
    data.push('time='+$('.time_txt_t').eq(0).find('.active').parent().index() - 1);
    data.push('note='+$('#note').val());
    data.push('username='+$('.contact_name').val());
    data.push('mobile='+$('.contact_phone').val());
    data.push('areaCode='+$('#areaCode').val());
    data.push('vercode='+$('.contact_yzm').val());
    // data.push('sex='+$('[name="sex"]:checked').val());

    t.addClass("disabled").val("提交中...");

    $.ajax({
      url: masterDomain + '/include/ajax.php?service=house&action=bookHouse',
      type: 'get',
      data: data.join('&'),
      dataType: 'jsonp',
      success: function(data){
        if(data && data.state == 100){
          showTipMsg(data.info);
          setTimeout(function(){
            // if(device.indexOf('huoniao') > -1) {
            //     setupWebViewJavascriptBridge(function (bridge) {
            //         bridge.callHandler("goBack", {}, function (responseData) {
            //         });
            //     });
            // }else{
            //     window.location.href = document.referrer;
            // }
            history.go(-1);
            t.removeClass('disabled').val('立即预约');
          }, 2000)
        }else{
          showTipMsg(data.info);
          t.removeClass('disabled').val('立即预约');
        }
      },
      error: function(){
        showTipMsg('网络错误，请重试！');
        t.removeClass('disabled').val('立即预约');
      }
    })
	});








})