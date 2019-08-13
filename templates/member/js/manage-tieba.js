/**
 * 会员中心贴吧帖子列表
 * by guozi at: 20161124
 */

var objId = $("#list");
$(function(){

	$(".main-tab li[data-id='"+state+"']").addClass("curr");

	$(".main-tab li").bind("click", function(){
		var t = $(this), id = t.attr("data-id");
		if(!t.hasClass("curr") && !t.hasClass("add")){
			state = id;
			atpage = 1;
			t.addClass("curr").siblings("li").removeClass("curr");
			getList();
		}
	});

	getList(1);

	//删除
	objId.delegate(".del", "click", function(){
		var t = $(this), par = t.closest(".item"), id = par.attr("data-id");
		if(id){
			$.dialog.confirm(langData['siteConfig'][20][543], function(){   //你确定要删除这条信息吗？
				t.siblings("a").hide();
				t.addClass("load");

				$.ajax({
					url: masterDomain+"/include/ajax.php?service=tieba&action=del&id="+id,
					type: "GET",
					dataType: "jsonp",
					success: function (data) {
						if(data && data.state == 100){

							//删除成功后移除信息层并异步获取最新列表
							par.slideUp(300, function(){
								par.remove();
								setTimeout(function(){getList(1);}, 200);
							});

						}else{
							$.dialog.alert(data.info);
							t.siblings("a").show();
							t.removeClass("load");
						}
					},
					error: function(){
						$.dialog.alert(langData['siteConfig'][20][183]);   //网络错误，请稍候重试！
						t.siblings("a").show();
						t.removeClass("load");
					}
				});
			});
		}
	});

});

function getList(is){

	if(is != 1){
		$('html, body').animate({scrollTop: $(".main-tab").offset().top}, 300);
	}

	objId.html('<p class="loading"><img src="'+staticPath+'images/ajax-loader.gif" />'+langData['siteConfig'][20][184]+'...</p>');//加载中，请稍候
	$(".pagination").hide();

	$.ajax({
		url: masterDomain+"/include/ajax.php?service=tieba&action=tlist&u=1&state="+state+"&page="+atpage+"&pageSize="+pageSize,
		type: "GET",
		dataType: "jsonp",
		success: function (data) {
			if(data && data.state != 200){
				if(data.state == 101){
					objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");//暂无相关信息！
				}else{
					var list = data.info.list, pageInfo = data.info.pageInfo, html = [];

					//拼接列表
					if(list.length > 0){

						for(var i = 0; i < list.length; i++){
							var item     = [],
								id       = list[i].id,
								title    = list[i].title,
								color    = list[i].color,
								typename = list[i].typename.join("-"),
								url      = list[i].url,
								bold     = list[i].bold,
								jinghua  = list[i].jinghua,
								top      = list[i].top,
								click    = list[i].click,
								reply    = list[i].reply,
								waitpay     = list[i].waitpay,
								pubdate  = huoniao.transTimes(list[i].pubdate, 1);

							url = waitpay == "1" || list[i].state != "1" ? 'javascript:;' : url;

							html.push('<div class="item fn-clear" data-id="'+id+'">');
							if(waitpay == "1"){
								html.push('<div class="o"><a href="javascript:;" class="stick delayPay" style="color:#f60;"><s></s>'+langData['siteConfig'][23][113]+'</a><a href="javascript:;" class="del"><s></s>'+langData['siteConfig'][6][8]+'</a></div>');
								//为求职者提供最新最全的招聘信息------删除 
							}else{
								html.push('<div class="o"><a href="javascript:;" class="del"><s></s>'+langData['siteConfig'][6][8]+'</a></div>'); //删除 
							}
							html.push('<div class="i">');

							var arcrank = "";
							if(list[i].state == "0"){
								arcrank = '&nbsp;&nbsp;·&nbsp;&nbsp;<span class="gray">'+langData['siteConfig'][9][21]+'</span>'; //未审核
							}else if(list[i].state == "2"){
								arcrank = '&nbsp;&nbsp;·&nbsp;&nbsp;<span class="red">'+langData['siteConfig'][9][35]+'</span>';//审核拒绝
							}

							html.push('<p>'+langData['siteConfig'][19][393]+'：'+typename+'&nbsp;&nbsp;·&nbsp;&nbsp;'+langData['siteConfig'][11][8]+'：'+pubdate+arcrank+'</p>');////分类---发布时间
							html.push('<h5><a href="'+url+'" target="_blank" title="'+title+'" style="color:'+color+';">'+title+'</a></h5>');

							var apa = [];
							if(top == 1){
								apa.push('<span style="background: #66a3ff; color:#fff; padding: 0 5px; margin-left: 10px;">'+langData['siteConfig'][19][762]+'</span>');//置顶
							}
							if(jinghua == 1){
								apa.push('<span style="background: #f66; color:#fff; padding: 0 5px; margin-left: 10px;">'+langData['siteConfig'][19][763]+'</span>');//精华
							}

							var reward = langData['siteConfig'][19][397];  //暂无打赏
							if(list[i].reward.count > 0){
								reward = list[i].reward.count+langData['siteConfig'][13][26]+' '+langData['siteConfig'][13][13]+list[i].reward.amount+echoCurrency('short');//次---共
							}

							html.push('<p>'+langData['siteConfig'][19][394]+'：'+click+langData['siteConfig'][13][26]+'&nbsp;&nbsp;·&nbsp;&nbsp;'+langData['siteConfig'][6][114]+'：'+reply+langData['siteConfig'][13][49]+apa.join("")+'&nbsp;&nbsp;·&nbsp;&nbsp;'+langData['siteConfig'][19][396]+'：'+reward+'</p>');
							//浏览--次--条--打赏
							html.push('</div>');
							html.push('</div>');

						}

						objId.html(html.join(""));

					}else{
						objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");//暂无相关信息！
					}

					switch(state){
						case "":
							totalCount = pageInfo.totalCount;
							break;
						case "0":
							totalCount = pageInfo.gray;
							break;
						case "1":
							totalCount = pageInfo.audit;
							break;
						case "2":
							totalCount = pageInfo.refuse;
							break;
					}


					$("#total").html(pageInfo.totalCount);
					$("#audit").html(pageInfo.audit);
					$("#gray").html(pageInfo.gray);
					$("#refuse").html(pageInfo.refuse);
					showPageInfo();
				}
			}else{
				objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");//暂无相关信息！
			}
		}
	});
}
