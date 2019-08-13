/**
 * 会员中心登录记录
 * by guozi at: 20150627
 */

var objId = $("#list");
$(function(){

	getList(1);

	//项目
	$(".main-sub-tab li").bind("click", function(){
		var t = $(this), id = t.attr("data-id");
		if(!t.hasClass("curr") && !t.hasClass("sel")){
			atpage = 1;
			t.addClass("curr").siblings("li").removeClass("curr");
			getList();
		}
	});

	//查看报名详细
	$("#list").delegate(".detail", "click", function(){
		var t = $(this), name = t.attr("data-name"), property = t.next(".property").html();

		$.dialog({
			title: langData['siteConfig'][19][570],  //详细信息
			width: 300,
			content: '<div class="propertyPopup">'+property+'</div>',
			ok: false
		});
	});

	//验票签到
	$("#pBtn").bind("click", function(){
		var code = $.trim($("#pCode").val().replace(/\s/img, ''));
		if(code == ""){
			$("#pCode").focus();
		}else{
			$.ajax({
				url: masterDomain+"/include/ajax.php?service=huodong&action=verifyCode&hid="+hid+"&codes="+code,
				type: "GET",
				dataType: "jsonp",
				success: function (data) {
					if(data && data.state == 100){
						$("#pCode").val('');
						atpage = 1;
						$(".main-sub-tab li:eq(0)").removeClass('curr');
						$(".main-sub-tab li:eq(1)").addClass('curr');
						getList();
					}else{
						$.dialog.alert(data.info);
					}
				},
				error: function(){
					$.dialog.alert(langData['siteConfig'][20][183]);   //详细信息
				}
			})
		}
	});

	//搜索回车提交
  $("#pCode").keyup(function (e) {
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
          $("#pBtn").click();
      }
  });

});

function getList(is){

	if(is != 1){
		$('html, body').animate({scrollTop: $(".main-tab").offset().top}, 300);
	}

	objId.html('<p class="loading"><img src="'+staticPath+'images/ajax-loader.gif" />'+langData['siteConfig'][20][184]+'...</p>');   //加载中，请稍候
	$(".pagination").hide();

	$.ajax({
		url: masterDomain+"/include/ajax.php?service=huodong&action=regList&hid="+hid+"&state="+$('.main-sub-tab .curr').attr("data-id")+"&page="+atpage+"&pageSize="+pageSize,
		type: "GET",
		dataType: "jsonp",
		success: function (data) {
			if(data && data.state != 200){
				if(data.state == 101){
					$("#unchecked").html(0);
					$("#checked").html(0);
					objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");  //暂无相关信息！
				}else{
					var list = data.info.list, pageInfo = data.info.pageInfo, html = [];

					$("#unchecked").html(pageInfo.unchecked);
					$("#checked").html(pageInfo.checked);

					//拼接列表
					if(list.length > 0){

						html.push('<table>');
						html.push('<thead class="thead">');
						html.push('<tr>');
						html.push('<th class="fir"></th>');
						html.push('<th>'+langData['siteConfig'][19][423]+'</th>');  //报名人
						html.push('<th style="padding-left: 20px;">'+langData['siteConfig'][19][424]+'</th>');   //联系方式
						html.push('<th style="padding-left: 20px;">'+langData['siteConfig'][19][425]+'</th>');  //报名时间
						html.push('<th style="padding-left: 20px;">'+langData['siteConfig'][19][426]+'</th>');  //费用项
						html.push('<th style="padding-left: 20px;">'+langData['siteConfig'][19][307]+'</th>');  //状态
						html.push('</tr>');
						html.push('</thead>');
						html.push('<tbody>');

						for(var i = 0; i < list.length; i++){
							var item = [],
									date = list[i].date,
									nickname   = list[i].nickname,
									phone = list[i].phone;
									photo = list[i].photo;
									price = list[i].price ? list[i].price : 0;
									property = list[i].property;
									state = list[i].state;
									title = list[i].title;
									uid = list[i].uid;

							var status = state == '1' ? langData['siteConfig'][6][187] : langData['siteConfig'][6][188];
						    //待验票----已验票
							var name = nickname, tel = phone;
							if(property.length > 1){
								name = property[0][langData['siteConfig'][19][4]];   //
								tel = property[1][langData['siteConfig'][22][40]];
							}

							var info = [];
							if(property.length > 0){
								for(var tmp in property){
									for(var n in property[tmp]){
										info.push('<p><span>'+n+'：</span>'+property[tmp][n]+'</p>');
									}
								}
							}

							html.push('<tr>');
							html.push('<td class="fir"></td>');
							html.push('<td>'+name+'<a href="javascript:;" class="detail" data-name="'+name+'"><s></s></a><div class="fn-hide property">'+info.join("")+'</div></td>');
							html.push('<td style="padding-left: 20px;">'+(tel ? tel : langData['siteConfig'][13][20])+'</td>');   //无
							html.push('<td style="padding-left: 20px;">'+huoniao.transTimes(date, 1)+'</td>');
							html.push('<td style="padding-left: 20px;">'+(title ? title : langData['siteConfig'][19][427])+'('+price+')</td>');  //免费
							html.push('<td style="padding-left: 20px;">'+status+'</td>');
							html.push('</tr>');

						}

						objId.html(html.join('')+'</body></table>');

					}else{
						objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");  //暂无相关信息！
					}

					totalCount = pageInfo.totalCount;
					showPageInfo();
				}
			}else{
				$("#unchecked").html(0);
				$("#checked").html(0);
				objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");//暂无相关信息！
			}
		}
	});
}
