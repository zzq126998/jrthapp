/**
 * 会员中心我参与的活动
 * by guozi at: 20161229
 */

var objId = $("#list");
$(function(){

	$(".tab li").bind("click", function(){
		var t = $(this), id = t.attr("data-id");
		if(!t.hasClass("curr")){
			atpage = 1;
			t.addClass("curr").siblings("li").removeClass("curr");
			objId.html('');
			getList();
		}
	});


	// 下拉加载
	$(window).scroll(function() {
		var h = $('.item').height();
		var allh = $('body').height();
		var w = $(window).height();
		var scroll = allh - w - h;
		if ($(window).scrollTop() > scroll && !isload) {
			atpage++;
			getList();
		};
	});

	getList(1);


	//电子票后退
	$("#detail .header-l a").bind("click", function(e){
		e.preventDefault();
		$("#detail").hide();
		$("#body").show();
		return false;
	});


	var operid;

	//取消报名
	$('body').delegate(".cancel", "click", function(){
		var t = $(this);
		if(operid && !t.hasClass('load')){
			if(confirm(langData['siteConfig'][20][192])){
				t.addClass("load");

				$.ajax({
					url: masterDomain+"/include/ajax.php?service=huodong&action=cancelJoin&id="+operid,
					type: "GET",
					dataType: "jsonp",
					success: function (data) {
						if(data && data.state == 100){
							$("#body").show();
							$("#detail").hide();
							objId.html('');
							atpage = 1;
							getList();
						}else{
							alert(data.info);
							t.removeClass("load");
						}
					},
					error: function(){
						alert(langData['siteConfig'][20][183]);
						t.removeClass("load");
					}
				});
			};
		}
	});

	//完成报名
	$('body').delegate(".success", "click", function(){
		var t = $(this);
		if(operid && !t.hasClass('load')){
			if(confirm(langData['siteConfig'][20][584])){
				t.addClass("load");

				$.ajax({
					url: masterDomain+"/include/ajax.php?service=huodong&action=compleateJoin&id="+operid,
					type: "GET",
					dataType: "jsonp",
					success: function (data) {
						if(data && data.state == 100){
							$("#body").show();
							$("#detail").hide();
							objId.html('');
							atpage = 1;
							getList();
						}else{
							alert(data.info);
							t.removeClass("load");
						}
					},
					error: function(){
						alert(langData['siteConfig'][20][183]);
						t.removeClass("load");
					}
				});
			};
		}
	});

	//查看详情
	objId.delegate(".detail", "click", function(){
		var t = $(this), par = t.closest(".item"), id = par.attr("data-id");
		if(id && !t.hasClass("load")){
			operid = id;
			t.addClass("load");
			$.ajax({
				url: masterDomain+"/include/ajax.php?service=huodong&action=regDetail&id="+id,
				type: "GET",
				dataType: "jsonp",
				success: function (data) {
					if(data && data.state == 100){
						t.removeClass("load");
						var info = data.info, property = info.property;

						var state_ = '';
						switch (info.state) {
							case '1':
								state_ = langData['siteConfig'][19][891];
								break;
							case '2':
								state_ = langData['siteConfig'][16][116];
								break;
							case '3':
								state_ = langData['siteConfig'][9][13];
								break;
							case '4':
								state_ = langData['siteConfig'][9][30];
								break;
						}

						var content = '<div class="cbody"><div class="item">';
						content += '<h3>'+langData['siteConfig'][23][122]+'：'+(info.price > 0 ? info.price : langData['siteConfig'][19][427])+'</h3>';
						content += '<div class="code"><h2>'+info.code+'</h2><img src="'+masterDomain+'/include/qrcode.php?data='+(info.code.replace(/\s/g, ''))+'" /><p>'+state_+'</p></div>';
						content += '</div>';
						content += '<div class="item">';
						content += '<a href="'+info.url+'"><dl class="fn-clear inline"><dt>'+info.title+'</dt><dd><s></s></dd></dl></a>';
						content += '<dl class="fn-clear"><dt>'+langData['siteConfig'][19][851]+'：</dt><dd>'+transTimes(info.began, 1)+'</dd></dl>';
						content += '<dl class="fn-clear"><dt>'+langData['siteConfig'][19][852]+'：</dt><dd>'+info.address+'</dd></dl>';
						content += '<a href="tel:'+info.contact+'"><dl class="fn-clear"><dt>'+langData['siteConfig'][18][49]+'：</dt><dd><span>'+info.nickname+'</span><i>'+langData['siteConfig'][19][56]+'</i><s></s></dd></dl></a>';
						content += '</div>';

						if(property.length > 0){
							content += '<div class="item">';
							for(var tmp in property){
								for(var n in property[tmp]){
									content += '<dl class="fn-clear"><dt>'+n+'：</dt><dd>'+property[tmp][n]+'</dd></dl>';
								}
							}
							content += '</div>';
						}
						content += '</div></div>';

						if(info.state == '1'){
							content += '<div class="oper">';
							content += '<a href="javascript:;" class="cancel"><s></s>'+langData['siteConfig'][19][773]+'</a>';
							content += '<a href="javascript:;" class="success"><s></s>'+langData['siteConfig'][6][186]+'</a>';
							content += '</div>';
						}

						$("#dcon").html(content);
						$("#body").hide();
						$("#detail").show();

					}else{
						$.dialog.alert(data.info);
						t.removeClass("load");
					}
				},
				error: function(){
					$.dialog.alert(langData['siteConfig'][20][183]);
					t.removeClass("load");
				}
			})
		}
	});




});



function transTimes(timestamp, n){
	update = new Date(timestamp*1000);//时间戳要乘1000
	year   = update.getFullYear();
	month  = (update.getMonth()+1<10)?('0'+(update.getMonth()+1)):(update.getMonth()+1);
	day    = (update.getDate()<10)?('0'+update.getDate()):(update.getDate());
	hour   = (update.getHours()<10)?('0'+update.getHours()):(update.getHours());
	minute = (update.getMinutes()<10)?('0'+update.getMinutes()):(update.getMinutes());
	second = (update.getSeconds()<10)?('0'+update.getSeconds()):(update.getSeconds());
	if(n == 1){
		return (month+'-'+day+' '+hour+':'+minute);
	}else{
		return 0;
	}
}

function getList(is){

	 isload = true;


	if(is != 1){
		// $('html, body').animate({scrollTop: $(".main-tab").offset().top}, 300);
	}

	objId.append('<p class="loading">'+langData['siteConfig'][20][184]+'...</p>');

	$.ajax({
		url: masterDomain+"/include/ajax.php?service=huodong&action=joinList&state="+$(".tab .curr").data("id")+"&page="+atpage+"&pageSize="+pageSize,
		type: "GET",
		dataType: "jsonp",
		success: function (data) {
			if(data && data.state != 200){
				if(data.state == 101){
					objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
          $('.count span').text(0);
				}else{
					var list = data.info.list, pageInfo = data.info.pageInfo, html = [];

					//拼接列表
					if(list.length > 0){

						for(var i = 0; i < list.length; i++){
							var item     = [],
								id       = list[i].id,
								title    = list[i].title,
								litpic   = huoniao.changeFileSize(list[i].litpic, "middle"),
								url      = list[i].url,
								addrname = list[i].addrname,
								address  = list[i].address,
								going    = list[i].going,
								state    = list[i].state,
								began    = transTimes(list[i].began, 1),
								date     = huoniao.transTimes(list[i].date, 1);


							html.push('<div class="item" data-id="'+id+'">');
							var state_ = '<font color="red">'+langData['siteConfig'][19][418]+'</font>';
							if(going){
								state_ = '<font color="#0eabee">'+langData['siteConfig'][19][772]+'</font>';
							}

							var status_ = '';
							switch (state) {
								case '1':
									status_ = langData['siteConfig'][19][891];
									break;
								case '2':
									status_ = langData['siteConfig'][16][116];
									break;
								case '3':
									status_ = langData['siteConfig'][9][13];
									break;
								case '4':
									status_ = langData['siteConfig'][9][30];
									break;
							}
							var status = '<span class="fn-right" style="color: #f60; font-size: .24rem; line-height: .5rem;">'+status_+'</span>';

							html.push('<div class="title">'+state_+status+'</div>');
							html.push('<div class="info-item fn-clear">');
							if(litpic != "" && litpic != undefined){
								html.push('<div class="info-img fn-left"><a href="'+url+'"><img src="'+litpic+'" /></a></div>');
							}
							html.push('<dl>');
							html.push('<dt><a href="'+url+'">'+title+'</a></dt>');
							html.push('<dd class="item-area"><em>'+langData['siteConfig'][19][417]+'：'+date+'</em></dd>');
							html.push('<dd class="item-type-2">'+langData['siteConfig'][17][34]+'：'+began+'</dd>');
							html.push('<dd class="item-type-1"><em> '+langData['siteConfig'][19][9]+'：'+addrname[0]+' '+addrname[1]+' '+address+'</em></dd>');
							html.push('</dl>');
							html.push('</div>');
							// if(going){
								html.push('<div class="o fn-clear">');
								html.push('<a href="javascript:;" class="detail">'+langData['siteConfig'][6][175]+'</a>');
								html.push('</div>');
							// }

							html.push('</div>');
							html.push('</div>');

						}

						objId.append(html.join(""));
            $('.loading').remove();
            isload = false;

					}else{
						$('.loading').remove();
            objId.append("<p class='loading'>"+langData['siteConfig'][20][185]+"</p>");
					}

					var totalCount = pageInfo.totalCount;
					switch ($(".tab .curr").data("id")) {
						case 1:
							totalCount = pageInfo.involved;
							break;
						case 2:
							totalCount = pageInfo.success;
							break;
						case 3:
							totalCount = pageInfo.cancel;
							break;
						case 4:
							totalCount = pageInfo.refund;
							break;
					}
					$("#total").html(totalCount);
					// showPageInfo();
				}
			}else{
				objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
        $('.count span').text(0);
			}
		}
	});
}
