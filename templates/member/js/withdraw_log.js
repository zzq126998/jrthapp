/**
 * 提现记录
 * by guozi at: 20151110
 */

var objId = $("#list");
$(function(){

	//类型切换
	$(".sel label").bind("click", function(){
		var t = $(this), id = t.attr("data-id");
		if(!t.hasClass("curr")){
			lei = id;
			state = "";
			atpage = 1;

			$(".main-sub-tab li:eq(1)").addClass("curr").siblings("li").removeClass("curr");
			t.addClass("curr").siblings("label").removeClass("curr");

			getList();
		}
	});

	getList(1);

});

function getList(is){

	if(is != 1){
		$('html, body').animate({scrollTop: $(".main-tab").offset().top}, 300);
	}

	objId.html('<p class="loading"><img src="'+staticPath+'images/ajax-loader.gif" />'+langData['siteConfig'][20][184]+'...</p>');  //加载中，请稍候

	var type = $(".main-sub-tab .curr").attr("data-id");

	$.ajax({
		url: masterDomain+"/include/ajax.php?service=member&action=withdraw_log&state="+type+"&page="+atpage+"&pageSize="+pageSize,
		type: "GET",
		dataType: "jsonp",
		success: function (data) {
			if(data && data.state != 200){
				if(data.state == 101){
					objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");  //暂无相关信息！
				}else{
					var list = data.info.list, pageInfo = data.info.pageInfo, html = [];

					//拼接列表
					if(list.length > 0){
						for(var i = 0; i < list.length; i++){

							if(list[i].tab == 'w'){
								var item     = [],
										bank     = list[i].bank,
										cardnum  = list[i].cardnum,
										cardnum  = bank == "alipay" ? cardnum.substr(0, 4) + "..." : "..."+cardnum.substr(cardnum.length-4),
										cardname = list[i].cardname,
										cardname = "*"+cardname.substr(1),
										amount   = list[i].amount,
										tdate    = huoniao.transTimes(list[i].tdate, 1),
										state    = list[i].state,
										url      = list[i].url;

								var stateTxt = "";
								switch(state){
									case "0":
										stateTxt = "<font color='#999999'>"+langData['siteConfig'][9][14]+"</font>";  //审核中
										break;
									case "1":
										stateTxt = "<font color='#53a000'>"+langData['siteConfig'][9][5]+"</font>";  //成功
										break;
									case "2":
										stateTxt = "<font color='#f37800'>"+langData['siteConfig'][9][6]+"</font>";  //失败
										break;
								}

                                var account = (bank == 'weixin' ? '微信' : (bank == 'alipay' ? '支付宝' : '银行卡')) + (bank != 'weixin' ? " | "+cardnum+" | "+cardname : '');

								html.push('<tr><td class="fir"></td>');
								html.push('<td>'+tdate+'</td>');
								html.push('<td>'+account+'</td>');
								html.push('<td>'+amount+'</td>');
								html.push('<td>'+stateTxt+'</td>');
								html.push('<td><a href="'+url+'" class="link" target="_blank">'+langData['waimai'][1][210]+'</a></td>');  //详情
								html.push('</tr>');

							}else if(list[i].tab == "p"){
								var item     = [],
										type = list[i].type,
										amount = list[i].amount,
										order_id = list[i].order_id,
										pubdate = huoniao.transTimes(list[i].pubdate),
										paydate = list[i].paydate,
										cardname = list[i].cardname,
										state = list[i].state,
										bank = list[i].bank,
										url = list[i].url,
										account;

								var stateTxt = "";
								if(type == 'bank'){
									account = (bank == 'weixin' ? '微信' : (bank == 'alipay' ? '支付宝' : '银行卡')) + (bank != 'weixin' ? " | "+order_id.substr(order_id.length-4)+" | "+"*"+cardname.substr(1) : '');

									switch(state){
										case "0":
											stateTxt = "<font color='#999999'>"+langData['siteConfig'][9][14]+"</font>";   //审核中
											break;
										case "1":
											stateTxt = "<font color='#53a000'>"+langData['siteConfig'][9][5]+"</font>";  //成功
											break;
										case "2":
											stateTxt = "<font color='#f37800'>"+langData['siteConfig'][9][6]+"</font>";  //失败
											break;
									}
								}else{
									switch(type){
										case 'alipay':
											account = langData['siteConfig'][19][302];  //支付宝
											break;
										case 'wxpay':
											account =  langData['siteConfig'][27][139]; //'微信'
											break;
									}
									account += langData['siteConfig'][32][73];  //快速提现
									stateTxt = "<font color='#53a000'>"+langData['siteConfig'][20][312]+"</font>";   //提交成功
								}

								html.push('<tr><td class="fir"></td>');
								html.push('<td>'+pubdate+'</td>');
								html.push('<td>'+account+'</td>');
								html.push('<td>'+amount+'</td>');
								html.push('<td>'+stateTxt+'</td>');
								html.push('<td><a href="'+url+'" class="link" target="_blank">'+langData['waimai'][1][210]+'</a></td>');  //详情
								html.push('</tr>');

							}

						}

						objId.html('<table><thead class="thead"><tr><th class="fir"></th><th>'+langData['siteConfig'][19][46]+'</th><th>'+langData['siteConfig'][19][305]+'</th><th>'+langData['siteConfig'][19][306]+'</th><th>'+langData['siteConfig'][19][307]+'</th><th>'+langData['siteConfig'][6][11]+'</th></tr></thead><tbody>'+html.join("")+'</tbody></table>');
					//申请时间---提现账号---金额--操作
					}else{
						objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");  //暂无相关信息！
					}

					totalCount = pageInfo.totalCount;
					showPageInfo();
				}
			}else{
				objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");  //暂无相关信息！
			}
		}
	});
}
