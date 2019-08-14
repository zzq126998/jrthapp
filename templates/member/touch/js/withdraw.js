$(function(){

  // 选择支付方式
  $('.tab li').bind('click', function(){
  	var t = $(this), lid = t.data('id');
  	$(this).addClass('curr').siblings('li').removeClass('curr');
  	$('.witem').hide();
  	$('.' + lid).show();
  });

  //提交申请
	$("#tj").bind("click", function(event){
		var t = $(this), data = [];

		var type = $(".tab .curr").attr('data-id');

		//微信
		if(type == 'weixin'){

            // 无记录状态
			var amount = $(".weixin #amount").val();
			data.push("bank=weixin");

		//支付宝
        }else if(type == 'alipay'){

            // 无记录状态
			var cardnum = $(".alipay #cardnum").val(),
                cardname = $(".alipay #cardname").val(),
                amount = $(".alipay #amount").val();

			if(cardnum == ""){
				showMsg(langData['siteConfig'][20][208]);
				return false;
			}

			if(cardname == ""){
				showMsg(langData['siteConfig'][20][209]);
				return false;
			}

			data.push("bank=alipay");
			data.push("cardnum="+cardnum);
			data.push("cardname="+cardname);

		//银行卡
        }else if(type == 'bank'){

            var bank = $(".bankbox #bank").val(),
                cardnum = $(".bankbox #cardnum").val().replace(/\s/g, ""),
                cardname = $(".bankbox #cardname").val(),
                amount = $(".bankbox #amount").val();

			if(bank == ""){
				showMsg(langData['siteConfig'][20][204]);
				return false;
			}

			if(cardnum == ""){
				showMsg(langData['siteConfig'][20][205]);
				return false;
			}

			if(cardname == ""){
				showMsg(langData['siteConfig'][20][206]);
				return false;
			}

			data.push("bank="+bank);
			data.push("cardnum="+cardnum);
			data.push("cardname="+cardname);

		}

		if(amount == ""){
			showMsg(langData['siteConfig'][20][207]);
			return false;
		}

        if(minWithdraw && amount < minWithdraw){
            showMsg((langData['siteConfig'][36][3]).replace(1, minWithdraw));  ////起提金额：1元
			return false;
        }

        if(maxWithdraw && amount > maxWithdraw){
            showMsg((langData['siteConfig'][36][4]).replace(1, maxWithdraw));  //单次最多提现：1元
			return false;
        }

		if(amount > money){
			showMsg(langData['siteConfig'][19][720]+money);
			return false;
		}

		data.push("amount="+amount);
		t.attr("disabled", true).html(langData['siteConfig'][6][35]+"...");

		$.ajax({
			url: masterDomain+"/include/ajax.php?service=member&action=withdraw",
			type: "POST",
			data: data.join("&"),
			dataType: "jsonp",
			success: function (data) {
				if(data && data.state == 100){
					var url = withdrawLog.replace("%id%", data.info);
					location.href = url;
				}else{
					alert(data.info);
					t.attr("disabled", false).html(langData['siteConfig'][19][716]);
				}
			},
			error: function(){
				alert(langData['siteConfig'][20][183]);
				t.attr("disabled", false).html(langData['siteConfig'][19][716]);
			}
		});


	});


})


// 错误提示
function showMsg(str){
  var o = $(".error");
  o.html('<p>'+str+'</p>').show();
  setTimeout(function(){o.hide()},1000);
}
