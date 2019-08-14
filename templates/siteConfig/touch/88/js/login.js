$(function(){

	$("#loginForm").submit(function(event){
		event.preventDefault();
		$('#loginForm .login-btn input').click();
	});

	$('#loginForm .login-btn input').click(function(){
		var btn      = $(this);
		var number   = $('#loginForm .phone').val();
		var password = $('#loginForm .password').val();
		var vericode = $('#loginForm .vericode').val();

		if(number == ''){
			alert('请输入用户名/邮箱/手机号~');
			return false;
		}

		if(password == ''){
			alert('请输入密码~');
			return false;
		}

		if(vericode != undefined && vericode == ''){
			alert('请输入验证码~');
			return false;
		}


		btn.attr("disabled", true).val('登录中...');
		var data = [];
		data.push("username="+number);
		data.push("password="+password);
		if(vericode != undefined){
			data.push("vericode="+vericode);
		}

		//异步提交
		$.ajax({
			url: masterDomain+"/loginCheck.html",
			data: data.join("&"),
			type: "POST",
			dataType: "html",
			success: function (data) {
				if(data){
					if(data.indexOf("100") > -1){
						$("body").append('<div style="display:none;">'+data+'</div>');

						if(appInfo.device == ""){
							top.location.href = redirectUrl;
						}else{
							setupWebViewJavascriptBridge(function(bridge) {
								$.ajax({
									url: masterDomain+'/getUserInfo.html',
									type: "GET",
									async: false,
									dataType: "jsonp",
									success: function (data) {
										if(data){
											bridge.callHandler('appLoginFinish', {'passport': data.userid}, function(){});
											top.location.href = redirectUrl;
										}else{
											alert('登录失败，请重试！');
											$('.login-btn input').attr("disabled", false).val('登录');
										}
									},
									error: function(){
										alert('网络错误，登录失败！');
										$('.login-btn input').attr("disabled", false).val('登录');
										return false;
									}
								});
							});
						}

					}else{
						var data = data.split("|");
						alert(data[1]);
						$('#verifycode').click();
						btn.removeAttr("disabled").val('登录');
					}
				}else{
					alert("登录失败，请重试！");
					$('#verifycode').click();
					btn.removeAttr("disabled").val('登录');
				}
			},
			error: function(){
				alert("网络错误，登录失败！");
				$('#verifycode').click();
				btn.removeAttr("disabled").val('登录');
			}
		});

	})


	// 密码可见不可见
	$('#loginForm .psw_img').click(function(){
		if ($("#loginForm .password").attr("type") == "password") {
			var $t = $(this);
			$t.addClass('show');
			$("#loginForm .password").attr("type", "text");
		}else{
			$('#loginForm .psw_img').removeClass('show');
			$("#loginForm .password").attr("type", "password");
		}
	})

	// 更换验证码
	$('#loginForm #verifycode').click(function(){
		var img = $('#loginForm #verifycode'),src = img.attr('src') + '?v=' + new Date().getTime();
		img.attr('src',src);
	})


	//客户端登录
    setupWebViewJavascriptBridge(function(bridge) {

		$(".other-login-img a").bind("click", function(event){
			var t = $(this), index = t.index();
			event.preventDefault();

			var action = "";

			//QQ登录
			if(index == 0){
				action = "qq";
			}

			//微信登录
			if(index == 1){
				action = "wechat";
			}

			//新浪微博登录
			if(index == 2){
				action = "sina";
			}


			bridge.callHandler(action+"Login", {}, function(responseData) {
				if(responseData){
					var data = JSON.parse(responseData);
					var access_token = data.access_token, openid = data.openid, unionid = data.unionid;

					$('.login-btn input').attr("disabled", true).val('登录中...');

					//异步提交
					$.ajax({
						url: masterDomain+"/api/login.php",
						data: "type="+action+"&action=appback&access_token="+access_token+"&openid="+openid+"&unionid="+unionid,
						type: "GET",
						dataType: "html",
						success: function (data) {
							$.ajax({
								url: masterDomain+'/getUserInfo.html',
								type: "GET",
								async: false,
								dataType: "jsonp",
								success: function (data) {
									if(data){
										bridge.callHandler('appLoginFinish', {'passport': data.userid}, function(){});
										top.location.href = redirectUrl;
									}else{
										alert('登录失败，请重试！');
										$('.login-btn input').attr("disabled", false).val('登录');
									}
								},
								error: function(){
									alert('网络错误，登录失败！');
									$('.login-btn input').attr("disabled", false).val('登录');
									return false;
								}
							});
						},
						error: function(){
							alert("网络错误，登录失败！");
							$('.login-btn input').attr("disabled", false).val('登录');
						}
					});
				}
			});
		});

    });


	//微信登录验证
	$(".wechat").click(function(event){
		if(!navigator.userAgent.toLowerCase().match(/micromessenger/) && navigator.userAgent.toLowerCase().match(/iphone|android/) && appInfo.device == ""){
			event.preventDefault();
			alert("手机浏览器暂不支持微信登录，请使用手机号码或邮箱进行登录。\r\r或者使用微信浏览网站。");
		}
	});

})
