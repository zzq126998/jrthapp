$(function(){

  var reduceyue = $('.reduce-yue');

  // 发布信息支付框
	$('.fabuPay .payway li').click(function(){
		var t = $(this);
		t.addClass('active').siblings('li').removeClass('active');
    calculationPayPrice();
	})

	// 选择余额
	$('.fabuPay .yue-btn').click(function(){
    var t = $(this), yue = $('.fabuPay .payPrice').text();
    if (t.hasClass('active')) {
      t.removeClass('active');
      reduceyue.text('0.00');
    }else {
      t.addClass('active');
      reduceyue.text(yue);
    }
    calculationPayPrice();
  })

	// 关闭支付框
	$('.fabuPay .payClose').click(function(){
		$('.fabuPay, .mask').hide();
    fabuPay.close();
	})

  calculationPayPrice();

  //计算总价
  function calculationPayPrice(){

    //改变表单内容
    $('#payform #paytype').val($('.fabuPay .payway .active').data('id'));
    $('#payform #amount').val($('.fabuPay .payPrice').text());
    $("#payform #useBalance").val($(".fabuPay .yue-btn").hasClass("active") ? 1 : 0);


    $('.fabuPay .paySubmit').show();
    var totalPrice = $('.fabuPay .payPrice').text();
    if($('.fabuPay .yue-btn').hasClass('active')){
      reduceyue.text(totalBalance > totalPrice ? totalPrice : totalBalance);
      balance = totalBalance > totalPrice ? totalPrice : totalBalance;
      $('.fabuPay .pay-total').html((totalPrice-balance).toFixed(2));

      if(totalPrice-balance <= 0){
        $('.fabuPay .paytypeObj').hide();
      }else{
        $('.fabuPay .paytypeObj').show();
        getQrCode();
      }
    }else{
      $('.fabuPay .paytypeObj').show();
      $('.fabuPay .pay-total').html(totalPrice);
      getQrCode();
    }
    resetPoputPos()

  }


  //支付
  $(".fabuPay .paySubmit").bind("click", function(){
    fabuPay.sub();
  });


  // manage页面继续支付
  $("body").delegate(".delayPay", "click", function(){
    var t = $(this), aid = t.closest(".item").attr("data-id");
    fabuPay.checkLevel(t, aid);
  })


  //支付方式切换
  $('.fabuPay .payTab li').bind('click', function(){
    var t = $(this), index = t.index();
    t.addClass('curr').siblings('li').removeClass('curr');
    if(index == 0){
      $('.fabuPay .qrpay').show();
      $('.fabuPay .payway, .fabuPay .paySubmit').hide();
    }else{
      $('.fabuPay .qrpay').hide();
      $('.fabuPay .payway, .fabuPay .paySubmit').show();
    }
    resetPoputPos();
  })

})

var timer = null;

// 普通会员发布信息支付费用
var fabuPay = {
  payform: $("#payform"),
  btn: null,
  url: '',
  check: function(data, url, btn){
    url = url.split('#')[0];
    this.btn = btn;
    this.url = url;
    var tip = langData['siteConfig'][20][341], icon = "success.png";   //发布成功
    // 修改
    if(id){
      tip = langData['siteConfig'][20][229];   //修改成功！
    }else{
      // 付费
      if(data.info.amount > 0){
        fabuPay.show(data);
        return;
      }
    }

    $.dialog({
      title: langData['siteConfig'][19][287],  //请选择到岗时间！
      icon: icon,
      content: tip,
      close: false,
      ok: function(){
        location.href = url;
      },
      cancel: function(){
        location.href = url;
      }
    });
  },
  show: function(data){
    $("#aid").val(data.info.aid);

    var auth = data.info.auth;
    // 付费会员更新提示信息
    if(auth.level != 0){
      $(".payNotice").text(langData['siteConfig'][19][826].replace('1', auth.levelname).replace('2', auth.maxcount).replace('3', auth.alreadycount));
    }//您当前是1，此模块每天最多可免费发布2条信息，您已发布3条

    $("#payform #tourl").val(this.url);
    $('.fabuPay, .mask').show();
    getQrCode();
    resetPoputPos();
  },
  sub: function(){
    var F = this;
    // var url = F.payform.attr("action"), data = F.payform.serialize();

    this.payform.submit();

  },
  close: function(){
    window.location.href = this.url;
  },
  checkLevel: function(t, aid){
    var F = this;
    if(t.hasClass('load')) return;
    t.addClass("load");
    $.ajax({
      url: '/include/ajax.php?service=member&action=checkFabuAmount&module='+module,
      type: 'post',
      dataType: 'json',
      success: function(data){

        if(data){
          // 需要支付
          if(data.info.needpay == "1"){
            data.info.aid = aid;
            F.url = document.URL;
            F.show(data);

          // 已升级为会员
          }else{
            var auth = data.info.auth;
            jQuery.dialog({
              id: "updatePayState",
              title: langData['siteConfig'][23][107],    //修改信息支付状态
              content: langData['siteConfig'][19][827].replace('1', auth.levelname).replace('2', auth.alreadycount).replace('3', auth.maxcount),
              //您当前是1。此模块今天已免费发布2条信息，每天最多可免费发布3条。确认将该信息设为已支付吗？
              width: 450,
              ok: function(){
                $.ajax({
                  url: '/include/ajax.php?service=member&action=updateFabuPaystate&module='+module+'&type='+type+'&aid='+aid,
                  type: 'post',
                  dataType: 'json',
                  success: function(data){
                    if(data && data.state == 100){
                      location.reload();
                    }else{
                      $.dialog.alert(data.info);
                      t.removeClass('load')
                    }
                  },
                  error: function(){
                    $.dialog.alert(langData['siteConfig'][20][183]);   //网络错误，请稍候重试！
                    t.removeClass('load')
                  }
                })
              },
              cancel: function(){
                t.removeClass('load');
              }
            });
          }
        }
      },
      error: function(){
        $.dialog.alert(langData['siteConfig'][20][183]);  //网络错误，请稍候重试！
        t.removeClass("load");
      }
    })
  }
}





//获取付款二维码
function getQrCode(){
  $('.fabuPay .payTab li:eq(0)').hasClass('curr') && $('.paytypeObj').is(':visible') ? $('.fabuPay .paySubmit').hide() : null;
  var data = $('#payform').serialize(), action = $('#payform').attr('action');

  $.ajax({
    type: 'POST',
    url: action,
    data: data  + '&qr=1',
    dataType: 'jsonp',
    success: function(str){
      if(str.state == 100){
        var data = [], info = str.info;
        for(var k in info) {
          data.push(k+'='+info[k]);
        }
        var src = masterDomain + '/include/qrPay.php?' + data.join('&');
        $('.fabuPay .qrimg').attr('src', masterDomain + '/include/qrcode.php?data=' + encodeURIComponent(src));

        //验证是否支付成功，如果成功跳转到指定页面
        if(timer != null){
          clearInterval(timer);
        }

        timer = setInterval(function(){

          $.ajax({
            type: 'POST',
            async: false,
            url: '/include/ajax.php?service=member&action=tradePayResult&type=3&order=' + info['ordernum'],
            dataType: 'json',
            success: function(str){
              if(str.state == 100 && str.info != ""){
                //如果已经支付成功，则跳转到会员中心页面
                clearInterval(timer);
                if(typeof payReturn != "undefined"){
                  location.href = payReturn;
                }else{
                  location.reload();
                }
              }else if(str.state == 101 && str.info == '订单不存在！'){
                getQrCode();
              }
            }
          });

        }, 2000);


      }
    }
  });

}


//重置浮动层位置
function resetPoputPos(){
  var top = $('.fabuPay').height() / 2;
  $('.fabuPay').css({'margin-top': -top + 'px'});
}
