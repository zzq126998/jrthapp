$(function(){
	//设置一个标识符
	var flag,tel;
	var needVcode = false;
	var checkPasw = false;
	var login = $('.main_con').attr('data-login');
	//数量显示
	$('.totalCount b').html(totalCount);

	 var addr;
	 var act;
	 var orderby = 1;
	 var typeid;


	var keywords = '';
	$('.submit').click(function(e){
		e.preventDefault();
		keywords = $('#keywords').val();
		if(keywords!=''){
			atpage = 1;
			getList();
		}
	})


	var aid = 0;
	//管理按钮
	$('.main_con').delegate('.manage', 'click', function(){
		flag=1;
		var t = $(this), id = t.attr('data-id');
		$('.popup-fabu .fabu-form').show();
		$('.popup-fabu');
		if(t.hasClass('disabled')) return false;
		
		if(id && id != undefined){
			aid = id;

			t.addClass('disabled');

			//获取信息详细信息
			$.ajax({
				url: '/include/ajax.php?service=house&action=demandDetail&id=' + aid,
				dataType: "jsonp",
				success: function (data) {
					t.removeClass('disabled');
					if(data && data.state == 100){
						var info = data.info;

						$('#title').val(info.title);
						$('#note').val(info.note);
						$('input[name=act][value='+info.action+']').attr('checked', true);
						$('input[name=type][value='+info.type+']').attr('checked', true);
						$('.popup-fabu .addrBtn').attr('data-ids', info.addrIds.join(' ')).attr('data-id', info.addrid).html(info.addrName.join('/'));
						$('#person').val(info.person);
						if(login==1){
							$('#contact').val(info.contact);
						}
						tel = info.contact
						$('.popup-fabu .tit').html('修改求租求购信息<s></s>');
						$('#tj').html('提交修改');
						$('.popup-fabu .edit').show();
						$('html').addClass('nos');
						$('.popup-fabu').show();
					}else{
						alert(data.info);
					}
				},
				error: function(){
					t.removeClass('disabled');
					alert(langData['siteConfig'][20][183]);
				}
			});
		}
	});
	//强制登录
//	$('#contact').on('click',function(){
//		if(typeof($(this).attr("readonly")) != "undefined"){
//			window.location.href = masterDomain+'/login.html';
//		}
//	})
	//发布
	$('#put').bind('click', function(){
		flag=0;
		aid = 0;
		$('.popup-fabu .tit').html('快速发布求租求购<s></s>');
		$('#tj').html('立即发布');
		$('.popup-fabu .edit').hide();
		$('html').addClass('nos');
		$('.popup-fabu').show();
		$('.popup-fabu input[type=text], .popup-fabu textarea,.popup-fabu input[type=tel]').val('');
		$('.addrBtn').attr('data-ids', '').attr('data-id', '').html('请选择');
		$('#contact').removeAttr('readonly')
	});

	//关闭
	$('.popup-fabu').delegate('.tit s', 'click', function(){
		$('html').removeClass('nos');
		$('.popup-fabu').hide();
	});

	//回车提交
  $('.popup-fabu input').keyup(function (e) {
    if (!e) {
      var e = window.event;
    }
    if (e.keyCode) {
      code = e.keyCode;
    }
    else if (e.which) {
      code = e.which;
    }
    if (code === 13) {
      $('#tj').click();
    }
  });

//当手机号发生改变时
// $('#contact').bind('change',function(){
// 	if(flag==1 && $('#contact').val()!=tel){
// 		$('.codetest,.tip-code').show();
// 	}else{
// 		$('.codetest,.tip-code').hide();
// 	}
// });
$('#contact').bind('change',function(){
	var v = $(this).val();
	var userid = $.cookie(cookiePre+'login_user');
	$('.codetest,.tip-code').hide();
	needVcode = false;
	// 管理
	if(flag){
		if(userid){
			if(v != detail.contact){
				needVcode = true;
				$('.codetest,.tip-code').show();
			}
		}else{
			$.ajax({
				url: '/include/ajax.php?service=house&action=checkDemandPhone&id='+aid+'&contact='+v,
				type: 'get',
				dataType: 'json',
				success: function(res){
					if(res && res.info == 'no'){
						needVcode = true;
						$('.codetest,.tip-code').show();
					}
				}
			})
		}
	// 发布
	}else{
		if(userid){
			if(userinfo.phone == '' || !userinfo.phoneCheck || v != userinfo.phone){
				needVcode = true;
			  $('.codetest,.tip-code').show();
			}
		}else{
			needVcode = true;
			$('.codetest,.tip-code').show();
		}
	}
})

  //验证提示弹出层
  function showMsg(msg){
    $('.fabu-form .con').append('<p class="ptip">'+msg+'</p>')
    setTimeout(function(){
    $('.ptip').remove();
    },2000);
  }

	//提交
	$('#tj').bind('click', function(){
		var t = $(this);
		var ids = $('.popup-fabu .addrBtn').attr('data-ids');
		var idsArr = ids.split(' ');
		var title = $.trim($('#title').val()),
				note = $.trim($('#note').val()),
				act = $('input[name=act]:checked').val(),
				type = $('input[name=type]:checked').val(),
				manage = $('input[name=manage]:checked').val(),
				cityid = idsArr[0],
				addr = idsArr[idsArr.length-1],
				person = $.trim($('#person').val()),
				contact = $.trim($('#contact').val()),
				password = $.trim($('#password').val());

		if(title == ''){
			errMsg = "请输入标题！";
			showMsg(errMsg);
			return false;
		}

		if(note == ''){
			errMsg = "请输入需求描述！";
			showMsg(errMsg);
			return false;
		}

		if(act == '' || act == 0 || act == undefined){
			errMsg = "请选择类别！";
			showMsg(errMsg);
			return false;
		}

		if(type == '' || type == undefined){
			errMsg = "请选择供求！";
			showMsg(errMsg);
			return false;
		}

		if(addr == '' || addr == 0){
			errMsg = "请选择位置！";
			showMsg(errMsg);
			return false;
		}

		if(person == ''){
			errMsg = "请输入联系人！";
			showMsg(errMsg);
			return false;
		}

		if(contact == ''){
			errMsg = "请输入联系电话！";
			showMsg(errMsg);
			return false;
		}
		if(password == ''){
			errMsg = "请输入管理密码！";
			showMsg(errMsg);
			return false;
		}
		if(needVcode){
			if($('#testcode').val()==''){
				errMsg = "请输入验证码！";
				showMsg(errMsg);
				return false;
			}
		}

		t.attr('disabled', true);

		var action = aid ? 'edit' : 'put';
		
		//删除
		if(manage == '2'){
			$.ajax({
				url: '/include/ajax.php?service=house&action=del&type=demand&password=' + password + '&id=' + aid,
				dataType: "jsonp",
				success: function (data) {
					if(data && data.state == 100){
						delMsg = "删除成功！";
						showMsg(delMsg);
						location.reload();
					}else{
						showMsg(data.info);
						t.removeAttr('disabled');
					}
				},
				error: function(){
					showMsg(langData['siteConfig'][20][183]);
					t.removeAttr('disabled');
				}
			});
			return false;
		}

		$.ajax({
			url: '/include/ajax.php?service=house&action='+action+'&type=demand',
			data: {
				'id': aid,
				'title': title,
				'note': note,
				'category': type,
				'lei': act,
				'cityid': cityid,
				'addrid': addr,
				'person': person,
				'contact': contact,
				'password': password,
				'vercode': $('#testcode').val()
			},
			type: "POST",
			dataType: "jsonp",
			success: function (data) {
				if(data && data.state == 100){

					var info = data.info.split('|');
					if(info[1] == 1){
						showMsg(aid ? '修改成功' : '发布成功！');
					}else{
						showMsg(aid ? '提交成功，请等待管理员审核！' : '发布成功，请等待管理员审核！');
					}
					location.reload();

				}else{
					showMsg(data.info);
					t.removeAttr('disabled');
				}
			},
			error: function(){
				showMsg(langData['siteConfig'][20][183]);
				t.removeAttr('disabled');
			}
		});

	});


 var dataGeetest = "";
  var ftype = "phone";
    
    //发送验证码
  function sendPhoneVerCode(){
    var btn = $('.getcode button');
    if(btn.filter(":visible").hasClass("disabled")){
    	return;
    }
    var vericode = "";
    // var vericode = $("#vdimgck").val();  //图形验证码
    // if(vericode == '' && !geetest){
    //   alert(langData['siteConfig'][20][170]);
    //   return false;
    // }

    var number = $('#contact').val();
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
        url: "/include/ajax.php?service=siteConfig&action=getPhoneVerify&type=verify",
        data: "vericode="+vericode+"&areaCode=86&phone="+number+dataGeetest,
        type: "GET",
        dataType: "json",
        success: function (data) {
          //获取成功
          
          if(data && data.state == 100){
          //获取失败
           alert(langData['siteConfig'][20][298]);
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
    $('.getcode button').click(function(){
      sendPhoneVerCode();
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
          var number   = $('#contact').val();
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
    $('.getcode button').click(function(){
      if($(this).hasClass("disabled")) return;
      var number   = $('#contact').val();
      if (number == '') {
        alert(langData['siteConfig'][20][27]);
        return false;
      } else {
        if(isNaN(number)){
          alert(langData['siteConfig'][20][179]);//账号错误
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
        url: "/include/ajax.php?service=siteConfig&action=geetest&terminal=mobile&t=" + (new Date()).getTime(), // 加随机数防止缓存
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
});
