$(function(){

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

    // 点击验证码
    if(!geetest){
	    $('.getCodes').click(function(){
	    	var money = $('.contact_phone').val();
	    	if(!money){
	    		errorMsg="请输入您的手机号";
		        showTipMsg(errorMsg);
		        return false;
	    	}else if(money.length !== 11){
	    		errorMsg="请输入正确的手机号";
		        showTipMsg(errorMsg);
		        return false;
	    	}else{
	    		 sendVerCode(money);
	    	}
	    });
	}

	function countdown(obj, t) {
	    if (t <= 0) {
	        obj.removeClass('disabled').removeAttr("disabled").html('重新发送验证码');
	        return
	    }
	  obj.attr('disabled','disabled');
	    --t;
	    obj.html(t + '&nbsp;秒后再发送');
	    setTimeout(function () {
	        countdown(obj, t);
	    }, 1000)
	}

	// 提交验证
	$('.btn').click(function(){
		var contact_address = $('.contact_address').val();
		var contact_DoorNumber = $('.contact_DoorNumber').val();
		var f_01 = $('.f_01 input').val();
		var f_02 = $('.f_02 input').val();
		var f_03 = $('.f_03 input').val();
		var f_04 = $('.f_04 input').val();

		var contact_name = $('.contact_name').val();
		var contact_phone = $('.contact_phone').val();
		var contact_yzm = $('.contact_yzm').val();
		var errorMsg = '';

		if(!contact_address){
			errorMsg="请输入地址";
	        showTipMsg(errorMsg);
	        return false;
		}else if(!contact_DoorNumber){
			errorMsg="请输入门牌号";
	        showTipMsg(errorMsg);
	        return false;
		}else if(!f_01){
			errorMsg="请输入房产证上面的面积";
	        showTipMsg(errorMsg);
	        return false;
		}else{
			if($(".time_txt_t .active").attr("data-id")==0){
				if(f_02==''){
					errorMsg="请输入您的报价";
	        		showTipMsg(errorMsg);
	        		return false;
				}
			}else if($(".time_txt_t .active").attr("data-id")==1){
				if(f_02==''){
					errorMsg="请输入您的报价";
		        	showTipMsg(errorMsg);
		        	return false;
		        }
			}else if($(".time_txt_t .active").attr("data-id")==2){
				if(f_03==''){
					errorMsg="请输入租金";
			        showTipMsg(errorMsg);
			        return false;
				}else if(f_04==''){
					errorMsg="请输入转让费";
			        showTipMsg(errorMsg);
			        return false;
				}
			}
		}

        if(errorMsg == ''){
	        if(!contact_name){
				errorMsg="请输入您的姓名";
		        showTipMsg(errorMsg);
		        return false;
			}else if(!userinfo.phoneCheck){
				if(!contact_phone){
					errorMsg="请输入您的手机号码";
			        showTipMsg(errorMsg);
			        return false;
				}else if(contact_phone.length !== 11){
					errorMsg="请输入正确的手机号";
			        showTipMsg(errorMsg);
			        return false;
				}else if(!contact_yzm){
					errorMsg="请输入验证码";
			        showTipMsg(errorMsg);
			        return false;
				}
			}
		}

		var data = [];
		data.push("type=" + $(".time_txt_t .active").attr("data-id"));
		data.push("address=" + $(".contact_address").val());
		if($("#zjcom").length>0){
			data.push("zjcom=" + $("#zjcom").val());
		}
		if($("#zjuid").length>0){
			data.push("zjuid=" + $("#zjuid").val());
		}
		data.push("doornumber=" + $(".contact_DoorNumber").val());
		data.push("area=" + $(".contact_area").val());
		if($(".time_txt_t .active").attr("data-id")==1){
			data.push("price=" + $(".contact_offer").val());
		}else if($(".time_txt_t .active").attr("data-id")==2){
			data.push("price=" + $(".contact_rent").val());
		}else{
			data.push("price=" + $(".contact_offer").val());
		}
		data.push("username=" + $(".contact_name").val());
		data.push("phone=" + $("#telphone").val());
		data.push("vdimgck=" + $(".contact_yzm").val());
		data.push("transfer=" + $(".contact_transfer").val());
		data.push("sex=1");

		$.ajax({
            url: "/include/ajax.php?service=house&action=putEnturst&"+data.join("&"),
            type: "POST",
            dataType: "jsonp",
            success: function (data) {
                if(data.state == 100){
					alert('提交成功，我们会尽快与您取得联系');
					setTimeout(function(){
						location.reload();
				    },1000);
                }else{
                    showTipMsg(data.info);
                }
            },
            error: function(){
                showTipMsg('网络错误，提交失败！');
            }
        });

	});

	/*if(!geetest){
		$(".getCodes").bind("click", function (){
			if($(this).hasClass('disabled')) return false;
			var tel = $("#telphone").val();
			if(tel == ''){
				errMsg = "请输入手机号码";
				showTipMsg(errMsg);
				$("#telphone").focus();
				return false;
			}else{
				 sendVerCode(tel);
				 //countDown($('.getCodes'), 60);
			}
			$("#vercode").focus();
		})
	}*/


	var geetestData = "";

	//发送验证码
  function sendVerCode(a){
  	var phone = $("#telphone").val();
	$.ajax({
	    url: masterDomain+"/include/ajax.php?service=siteConfig&action=getPhoneVerify",
	    data: "type=verify"+"&phone="+phone+"&areaCode=86" + geetestData,
	    type: "GET",
	    dataType: "jsonp",
	    success: function (data) {
	      //获取成功
	      if(data && data.state == 100){
	        countDown($('.getCodes'), 60);
	      //获取失败
	      }else{
	        alert(data.info);
	      }
	    },
	    error: function(){
	      alert('获取失败');
	    }
	  });
  }


	//倒计时
	function countDown(obj,time){
		obj.html(time+'秒后重发').addClass('disabled');
		mtimer = setInterval(function(){
			obj.html((--time)+'秒后重发').addClass('disabled');
			if(time <= 0) {
				clearInterval(mtimer);
				obj.html('重新发送').removeClass('disabled');
			}
		}, 1000);
	}


	//是否使用极验验证码
  var sendvdimgckBtn;

  if(geetest){

		//极验验证
		var handlerPopup = function (captchaObj) {
			// captchaObj.appendTo("#popup-captcha");
			// 成功的回调
			captchaObj.onSuccess(function () {

				var result = captchaObj.getValidate();
        var geetest_challenge = result.geetest_challenge,
            geetest_validate = result.geetest_validate,
            geetest_seccode = result.geetest_seccode;

				geetestData = "&geetest_challenge="+geetest_challenge+'&geetest_validate='+geetest_validate+'&geetest_seccode='+geetest_seccode;

				sendVerCode(sendvdimgckBtn);
			});

			captchaObj.onClose(function () {
				//var djs = $('.djs'+type);
    			//djs.text('').hide().siblings('.sendvdimgck').show();
			})

			$(document).on('click','.getCodes',function(){
				var tel = $("#telphone").val();
				if(tel == ''){
					errMsg = "请输入手机号码";
					showTipMsg(errMsg);
					$("#telphone").focus();
					return false;
				}
				var a = $(this);
				sendvdimgckBtn = a;
				captchaObj.verify();
			});

		};


	    $.ajax({
	        url: "/include/ajax.php?service=siteConfig&action=geetest&t=" + (new Date()).getTime(), // 加随机数防止缓存
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
	            }, handlerPopup);
	        }
	    });
	}



	// 点击类型变换

    $('.main .order_time .time_txt p span:eq(0)').click(function(){
		$('.f_02 em').text(''+echoCurrency('short')+'/月');
		$('.f_02').show();
		$('.f_03').hide();
		$('.f_04').hide();
	});

	$('.main .order_time .time_txt p span:eq(1)').click(function(){
		$('.f_02 em').text('万'+echoCurrency('short')+'');
		$('.f_02').show();
		$('.f_03').hide();
		$('.f_04').hide();
	});

	$('.main .order_time .time_txt p span:eq(2)').click(function(){
		$('.f_02').hide();
		$('.f_03').show();
		$('.f_04').show();
	});

	$('.main .order_time .time_txt p span:eq(0)').click();








})