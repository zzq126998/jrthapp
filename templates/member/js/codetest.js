	//手机号码改变的时候
	// $('#tel').bind('change',function(){
	// 	$('.testbox').removeClass('fn-hide')
	// });
	// //验证码没有输入的时候
	// $('#testcode').bind('blur',function(){
	// 	if($(this).val()==''){
	// 		$(this).siblings('span.tip-inline').removeClass('focus').addClass('error');
	// 		return 0;
	// 	}else{
	// 		//验证验证码
	// 		$(this).siblings('span.tip-inline').removeClass('focus').addClass('success');
	// 	}
	// })

  $('#tel').bind('keyup',function(){
    checkContact();
  });
  function checkContact(){
    $('.testbox').hide();
    var v = $('#tel').val();
    if(v != ''){
      //修改
      if(id){
        if(v != detail.contact && ((userinfo.phoneCheck && v != userinfo.phone) || !userinfo.phoneCheck) ){
          $('.testbox').show();
        }
      //新增
      }else{
        if(userinfo.phone == '' || !userinfo.phoneCheck || v != userinfo.phone){
          $('.testbox .tip').hide();
          $('.testbox').show();
        }
      }
    }
  }
  checkContact();

//极速验证
var dataGeetest = "";
  var ftype = "phone";
    
    //发送验证码
 function sendPhoneVerCode(){
    var btn = $('.codebtn');
    if(btn.filter(":visible").hasClass("disabled")) return;

    var vericode = "";
    // var vericode = $("#vdimgck").val();  //图形验证码
    // if(vericode == '' && !geetest){
    //   alert(langData['siteConfig'][20][170]);
    //   return false;
    // }

    var number = $('#tel').val();
    if (number == '') {
      alert(langData['siteConfig'][20][27]);
      return false;
    }

   if(isNaN(number)){
      alert(langData['siteConfig'][20][179]);
      return false;
    }else{
      ftype = "phone";
    }

    btn.addClass("disabled");

    if(ftype == "phone"){

      var action = "getPhoneVerify";
      var dataName = "phone";
      $.ajax({
        url: masterDomain+"/include/ajax.php?service=siteConfig&action=getPhoneVerify&type=verify",
        data: "vericode="+vericode+"&areaCode=86&phone="+number+dataGeetest,
        type: "GET",
        dataType: "jsonp",
        success: function (data) {
          //获取成功
          
          if(data && data.state == 100){
           alert('验证码已发送');
          //获取失败
          }else{
            btn.removeClass("disabled");
            alert(data.info);
          }
        },
        error: function(){
          btn.removeClass("disabled");
          alert(langData['siteConfig'][20][173]);
        }
      });
    }
  }

  if(!geetest){
    $('.codebtn').click(function(){
      if(!$(this).hasClass("disabled")){
        sendPhoneVerCode();
      }
    });
  }else{
    //极验验证
    var handlerPopupFpwd = function (captchaObjFpwd) {
      // captchaObjFpwd.appendTo("#popupFpwd-captcha-mobile");

      // 成功的回调
      captchaObjFpwd.onSuccess(function () {

        var validate = captchaObjFpwd.getValidate();
        dataGeetest = "&terminal=mobile&geetest_challenge="+validate.geetest_challenge+"&geetest_validate="+validate.geetest_validate+"&geetest_seccode="+validate.geetest_seccode;

        //邮箱找回
        if(ftype == "phone"){
			//获取短信验证码
          var number   = $('#tel').val();
          if (number == '') {
            alert(langData['siteConfig'][20][27]);
            return false;
          } else {
            sendPhoneVerCode();
          }

        }
      });

      window.captchaObjFpwd = captchaObjFpwd;
    };

   
    //获取验证码
    $('.codebtn').click(function(){
      if($(this).hasClass("disabled")) return;
      var number   = $('#tel').val();
      if (number == '') {
        alert(langData['siteConfig'][20][27]);   //请输入您的手机号
        return false;
      } else {
        if(isNaN(number)){
          alert(langData['siteConfig'][20][179]);  //账号错误
          return false;
        }else{
          ftype = "phone";
    }
		
        if (captchaObjFpwd) {
            captchaObjFpwd.verify();
        }
      
      }
    });


   

    $.ajax({
        url: masterDomain+"/include/ajax.php?service=siteConfig&action=geetest&terminal=mobile&t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
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
  }