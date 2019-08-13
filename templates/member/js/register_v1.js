$(function(){
	// 注册方式切换
	//var type = 3;

	var mark = $('.mark');
	var mtimer;
	var regform = $('.registform');
	// var djs = $('.djs'),dsjinfo = $('.vdimgckinfo');

	//第三方登录
    $(".loginconnect").click(function(e){
        e.preventDefault();

        var href = $(this).attr("href"), type = href.split("type=")[1];
        loginWindow = window.open(href, 'oauthLogin', 'height=565, width=720, left=100, top=100, toolbar=no, menubar=no, scrollbars=no, status=no, location=yes, resizable=yes');

        //判断窗口是否关闭
        mtimer = setInterval(function(){
          if(loginWindow.closed){
            $.cookie(cookiePre+"connect_uid", null, {expires: -10, domain: masterDomain.replace("http://www", ""), path: '/'});
            clearInterval(mtimer);
            huoniao.checkLogin(function(){
              location.reload();
            });
          }else{
            if($.cookie(cookiePre+"connect_uid") && $.cookie(cookiePre+"connect_code") == type){
              loginWindow.close();
              var modal = '<div id="loginconnectInfo"><div class="mask"></div> <div class="layer"> <p class="layer-tit"><span>'+langData['siteConfig'][21][5]+'</span></p> <p class="layer-con">'+langData['siteConfig'][20][510]+'<br /><em class="layer_time">3</em>s'+langData['siteConfig'][23][97]+'</p> <p class="layer-btn"><a href="'+masterDomain+'/bindMobile.html?type='+type+'">'+langData['siteConfig'][23][98]+'</a></p> </div></div>';
			 //温馨提示---为了您的账户安全，请绑定您的手机号---后自动跳转---前往绑定
              $("#loginconnectInfo").remove();
              $('body').append(modal);

              var t = 3;
              var timer = setInterval(function(){
                if(t == 1){
                  clearTimeout(timer);
                  location.href = masterDomain+'/bindMobile.html?type='+type;
                }else{
                  $(".layer_time").text(--t);
                }
              },100000)
            }
          }
        }, 1000);
    });


	$('.tab-nav li').click(function(){
		//var a = $(this), index = a.index();
		var a = $(this), index = a.attr('data-type');
		if(a.hasClass('active')) return;
		a.addClass('active').siblings().removeClass('active');
		var width = a.width(), left = a.position().left + 90;
		//重写以类型进行判断
		type = index == 1 ? 1 : (index==2 ? 3 : 2);
		//type = index == 0 ? 3 : 2;

		//regform.removeClass('ftype01 ftype02 ftype03').addClass('ftype0'+type).find('.error').hide();
		regform.find('.error').hide();

		if(index == 1){
			$('.ftype03').hide();
			$('.ftype02').hide();
			$('.ftype01').show();
		}else if(index == 2){
			$('.ftype03').hide();
			$('.ftype02').show();
			$('.ftype01').hide();
		}else{
			$('.ftype01').hide();
			$('.ftype02').hide();
			$('.ftype03').show();
		}
		mark.stop(true).animate({
			'left':left+'px',
			'width':width+'px'
		},300)

	})

	// 协议
	$('.agreement label').click(function(){
		$(this).toggleClass('checked');
	})

	// 更换验证码
	$('.vdimgck ,.change').click(function(){
		var a = $(this),img;
		if(a.hasClass('change')){
			img = a.siblings('img');
		}else{
			img = a;
		}
		var src = img.attr('src') + '?v=' + new Date().getTime();
		img.attr('src',src);
	})

	//更新验证码
	var verifycode = $("#verifycode").attr("src");
	$("#verifycode").bind("click", function(){
		$(this).attr("src", verifycode+"?v="+Math.random());
	});

	regform.find('.inpbox input').focus(function(){
		$(this).closest('.inpbox').siblings('.error').hide();
	})

	//倒计时（开始时间、结束时间、显示容器）
	function countDown(time, obj, func){
		$('.sendvdimgck'+type).hide();
		$('.djs'+type).show();
		obj.text(langData['siteConfig'][20][5].replace('1', time));
		mtimer = setInterval(function(){
			obj.text(langData['siteConfig'][20][5].replace('1', (--time)));
			if(time <= 0) {
				clearInterval(mtimer);
				obj.text('');
				$('.sendvdimgck'+type).show();
				$('.djs'+type).hide();
			}
		}, 1000);
	}

	// 密码可见
  $('.psw-show').click(function(){
    var t = $(this);
    if (t.hasClass('psw-hide')) {
      t.removeClass('psw-hide');
      t.siblings('input').attr('type', 'password');
    }else {
      t.addClass('psw-hide');
      t.siblings('input').attr('type', 'text');
    }
  })

	var geetestData = "";

	//发送验证码
	function sendVerCode(a){
		var b = $('.sendvdimgck'+type),v = $('.username'+type).val();

		if(vdimgck.username(type)){

			var action = type == 2 ? "getEmailVerify" : "getPhoneVerify";
			var dataName = type == 2 ? "email" : "phone";
			var djs = $('.djs'+type);

			var areaCode = $('#J-countryMobileCode label').text();
			$("#areaCode").val(areaCode);

    	djs.text(langData['siteConfig'][23][99]).show().siblings('.sendvdimgck').hide();   //正在发送

			$.ajax({
				url: masterDomain+"/include/ajax.php?service=siteConfig&action="+action,
				data: $(".registform").serialize()+"&"+dataName+"="+v+"&type=signup" + geetestData,
				type: "POST",
				dataType: "jsonp",
				success: function (data) {
					//获取成功
					if(data && data.state == 100){
						var time = new Date().getTime();
						b.hide();
						countDown(60,djs);
						info(type,v);

					//获取失败
					}else{
						djs.text('').hide().siblings('.sendvdimgck').show();
						alert(data.info);
					}
				},
				error: function(){
					djs.text('').hide().siblings('.sendvdimgck').show();
					alert(langData['siteConfig'][20][173]);//网络错误，发送失败！
				}
			});

		}
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
				var djs = $('.djs'+type);
    		djs.text('').hide().siblings('.sendvdimgck').show();
			})

			$(document).on('click','.sendvdimgck',function(){
				var a = $(this), b = $('.sendvdimgck'+type), v = $('.username'+type).val();
				if(vdimgck.username(type)){
					registAccountCheck(function(data){
						sendvdimgckBtn = a;
						captchaObj.verify();
					})
				}
			});

		};


	    $.ajax({
	        url: masterDomain+"/include/ajax.php?service=siteConfig&action=geetest&t=" + (new Date()).getTime(), // 加随机数防止缓存
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



	// 发送验证码
	if(!geetest){
		$(document).on('click','.sendvdimgck',function(){
			registAccountCheck(function(){
				sendVerCode($(this));
			})
		})
	}

	function info(type,v){
		var t = type == 2 ? langData['siteConfig'][3][0] : langData['siteConfig'][3][17];//邮箱--手机
	}


	var vdimgck = {
		username : function(){
			var o = $('.username'+type),v = o.val(),e = o.closest('.inpbox').siblings('.error');
			if(type == 1){
				if(v==''){
					e.show().find('span').html(langData['siteConfig'][21][225]); //
					return false;
				}else{
					if(!/^[a-zA-Z]{1}[0-9a-zA-Z_]{4,15}$/.test(v)){
						e.show().find('span').html(langData['siteConfig'][30][80]);//用户名格式：英文字母、数字、下划线以内的5-20个字！<br />并且只能以字母开头！
						return false;
					}else{
						return true;
					}
				}
			}
			if(type == 3){
				if(v == ''){
					e.show().find('span').html(langData['waimai'][3][84]);//纵向排列
					return false;
				}else{
					return true;
				}
			}
			if(type == 2){
				if(v == ''){
					e.show().find('span').html(langData['siteConfig'][20][538]);//请填写您的邮箱
					return false;
				}else{
					var reg = !!v.match(/^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/);
					if(!reg) {
						e.show().find('span').html(langData['siteConfig'][20][319]);//邮箱有误
						return false;
					}else{
						return true;
					}
				}
			}
		},
		password : function(){
			var o = $('.password'+type),v = o.val(),e = o.closest('.inpbox').siblings('.error');
			if(v == ''){
				e.show().find('span').html(langData['siteConfig'][20][502]); //请填写密码
				return false;
			}else{
				var o2 = $('.repassword'+type),v2 = o2.val(),e2 = o2.closest('.inpbox').siblings('.error');
				if(v2 == ''){
					e2.show().find('span').html(langData['siteConfig'][20][539]);//请填写确认密码
					return false;
				}else{
					if(type!=1){
						if(v != v2){
							e2.show().find('span').html(langData['siteConfig'][20][381]);//两次密码不一致
							return false;
						}else{
							return true;
						}
					}else{
						return true;
					}
				}
			}
		},
		yzm : function(){
			var o = $('.yzm'+type),v = o.val(),e = o.closest('.inpbox').siblings('.error');
			if(v == ''){
				e.show().find('span').html(langData['siteConfig'][20][540]);//请填写验证码
				return false;
			}else{
				return true;
			}

		},
		nickname : function (){
			var o = $('.nickname'),v = o.val(),e = o.closest('.inpbox').siblings('.error');
			if(v == ''){
				e.show().find('span').html(langData['siteConfig'][30][81]);  //请填写真实姓名
				return false;
			}else{
				return true;
			}
		},
		email : function (){
			var o = $('.email'),v = o.val(),e = o.closest('.inpbox').siblings('.error');
			if(v == ''){
				e.show().find('span').html(langData['siteConfig'][30][82]);  //请填写正确邮箱
				return false;
			}else{
				if(!/^[a-z0-9]+([\+_\-\.]?[a-z0-9]+)*@([a-z0-9]+\.)+[a-z]{2,6}$/i.test(v)){
					e.show().find('span').html(langData['siteConfig'][20][551]);   //请填写正确邮箱
					return false;
				}else{
					return true;
				}
			}
		},
		phone : function (){
			var o = $('.phone'),v = o.val(),e = o.closest('.inpbox').siblings('.error');
			if(v == ''){
				e.show().find('span').html(langData['siteConfig'][30][83]);  //请填写正确手机号
				return false;
			}else{
				if(!/1[0-9]{10}/.test(v)){
					e.show().find('span').html(langData['siteConfig'][21][98]);   //请填写正确手机号
					return false;
				}else{
					return true;
				}
			}
		},
		vericode : function (){
			var o = $('.vericode'),v = o.val(),e = o.closest('.inpbox').siblings('.error');
			if(v == ''){
				e.show().find('span').html(langData['siteConfig'][30][84]); //请填写正确验证码
				return false;
			}
		}
	}


	// 关闭弹出层
	$('.layer .close').click(function(){
		$('.layer, .mask').hide();
	})

	// 提交
	regform.submit(function(e){
		e.preventDefault();

		regform.find('.error').hide().find('span').html('');

		var btn = $(".submit");


		var tj = true;

		//邮箱、手机
		if(vdimgck.username() && vdimgck.yzm() && vdimgck.password()){
			var data = [];
			if(type==1){
				if($('.nickname').length>0){
					if(vdimgck.nickname()){
						data.push('nickname='+$('.nickname').val());
					}else{
						tj = false;
					}
				}
				if($('.email').length>0){
					if(vdimgck.email()){
						data.push('email='+$('.email').val());
					}else{
						tj = false;
					}
				}
				if($('.phone').length>0){
					if(vdimgck.phone()){
						data.push('phone='+$('.phone').val());
					}else{
						tj = false;
					}
				}
				data.push('vericode='+$('.vericode').val());
			}

			data.push('mtype=1');
			data.push('rtype='+type);
			data.push('rtype='+type);
			if(type == 3){
				data.push("areaCode="+$("#areaCode").val());
			}
			data.push('account='+$('.username'+type).val());
			data.push('password='+$('.password'+type).val());
			data.push('vcode='+$('.yzm'+type).val());

		}else{
			tj = false;
		}
		if(!tj) return false;
		btn.attr("disabled", true).val(langData['siteConfig'][6][35]+"...");  //提交中
		//异步提交
		$.ajax({
			url: masterDomain+"/registerCheck_v1.html",
			data: data.join("&"),
			type: "POST",
			dataType: "html",
			success: function (data) {

				var dataArr = data.split("|");
					var info = dataArr[1];
					if(data.indexOf("100|") > -1){
						$("body").append('<div style="display:none;">'+data+'</div>');
						location.href = userDomain;

					}else{
					    if(data.indexOf("state") > -1 && data.indexOf("200") > -1){
					        var d = eval('(' + data + ')');
					        alert(d.info);
                        }else {
                            alert(info.replace(new RegExp('<br />', 'gm'), '\n'));
                        }
					}
					btn.attr("disabled", false).val(langData['siteConfig'][6][118]);  //重新提交

			},
			error: function(){
				alert(langData['siteConfig'][20][183]);  //网络错误，请稍候重试！
				btn.attr("disabled", false).val(langData['siteConfig'][6][118]);  //重新提交
			}
		});
		return false;

	})

	function registAccountCheck(callback){
		var account = $('.username'+type).val();
		var data = '';
    if(type == 3){
    	var areaCode = $("#J-countryMobileCode label").text();
    	if(areaCode == "86"){
    		var phoneReg = /(^1[3|4|5|6|7|8|9]\d{9}$)|(^09\d{8}$)/;
        if(!phoneReg.test(account)){
          $(".username3").parent().next(".error").show();
          return;
        }else{
          $(".username3").parent().next(".error").hide();
        }
    	}
      data = '&areaCode=' + areaCode;
    }else if(type == 2){
    	if(!vdimgck.username()){
    		return false;
    	}
    }


    var djs = $('.djs'+type);
    djs.text(langData['siteConfig'][7][6]).show().siblings('.sendvdimgck').hide();  //验证中

		$.ajax({
      url: '/include/ajax.php?service=member&action=registAccountCheck&rtype='+type+'&account='+account+data,
      type: 'get',
      dataType: 'json',
      success: function(data){
        if(data && data.state == 100){
        	callback();
        }else{
        	djs.text('').hide().siblings('.sendvdimgck').show();
        	if(data.info.indexOf("   ") > -1){
        		$('.dialog_msg .info span').text(account);
        		$('.dialog_msg').removeClass('fn-hide');
        	}else{
	        	alert(data.info);
        	}
        }
      },
      error: function(){
      	callback();
      }
    })
	}

	$('.dialog_msg .close').click(function(){
		$('.dialog_msg').addClass('fn-hide');
	})

})
