$(function(){

	var defaultBtn = $("#delBtn, #batchAudit"),
		checkedBtn = $("#stateBtn, #propertyBtn"),
		init = {

			//选中样式切换
			funTrStyle: function(){
				var trLength = $("#list tbody tr").length, checkLength = $("#list tbody tr.selected").length;
				if(trLength == checkLength){
					$("#selectBtn .check").removeClass("checked").addClass("checked");
				}else{
					$("#selectBtn .check").removeClass("checked");
				}

				if(checkLength > 0){
					defaultBtn.css('display', 'inline-block');
					checkedBtn.hide();
				}else{
					defaultBtn.hide();
					checkedBtn.css('display', 'inline-block');
				}
			}

			//菜单递归分类
			,selectTypeList: function(type){
				var typeList = [], title = type == "addr" ? "全部地区" : "全部分类";
				typeList.push('<ul class="dropdown-menu">');
				typeList.push('<li><a href="javascript:;" data-id="">'+title+'</a></li>');

				var l = type == "addr" ? addrListArr : typeListArr;
				for(var i = 0; i < l.length; i++){
					(function(){
						var jsonArray =arguments[0], jArray = jsonArray.lower, cl = "";
						if(jArray.length > 0){
							cl = ' class="dropdown-submenu"';
						}
						typeList.push('<li'+cl+'><a href="javascript:;" data-id="'+jsonArray["id"]+'">'+jsonArray["typename"]+'</a>');
						if(jArray.length > 0){
							typeList.push('<ul class="dropdown-menu">');
						}
						for(var k = 0; k < jArray.length; k++){
							if(jArray[k]['lower'] != ""){
								arguments.callee(jArray[k]);
							}else{
								typeList.push('<li><a href="javascript:;" data-id="'+jArray[k]["id"]+'">'+jArray[k]["typename"]+'</a></li>');
							}
						}
						if(jArray.length > 0){
							typeList.push('</ul></li>');
						}else{
							typeList.push('</li>');
						}
					})(l[i]);
				}

				typeList.push('</ul>');
				return typeList.join("");
			}

			//删除
			,del: function(){
				var checked = $("#list tbody tr.selected");
				if(checked.length < 1){
					huoniao.showTip("warning", "未选中任何信息！", "auto");
				}else{
					huoniao.showTip("loading", "正在操作，请稍候...");
					var id = [];
					for(var i = 0; i < checked.length; i++){
						id.push($("#list tbody tr.selected:eq("+i+")").attr("data-id"));
					}

					huoniao.operaJson("loupanList.php?dopost=del", "id="+id, function(data){
						if(data.state == 100){
							huoniao.showTip("success", data.info, "auto");
							$("#selectBtn a:eq(1)").click();
							setTimeout(function() {
								getList();
							}, 800);
						}else{
							var info = [];
							for(var i = 0; i < $("#list tbody tr").length; i++){
								var tr = $("#list tbody tr:eq("+i+")");
								for(var k = 0; k < data.info.length; k++){
									if(data.info[k] == tr.attr("data-id")){
										info.push("▪ "+tr.find("td:eq(1) a").text());
									}
								}
							}
							$.dialog.alert("<div class='errInfo'><strong>以下信息删除失败：</strong><br />" + info.join("<br />") + '</div>', function(){
								getList();
							});
						}
					});
					$("#selectBtn a:eq(1)").click();
				}
			}

			//更新信息状态
			,updateState: function(type){
				huoniao.showTip("loading", "正在操作，请稍候...");
				$("#smartMenu_state").remove();

				var checked = $("#list tbody tr.selected");
				if(checked.length < 1){
					huoniao.showTip("warning", "未选中任何信息！", "auto");
				}else{
					var state = "";
					if(type == "待审核"){
						state = 0;
					}else if(type == "已审核"){
						state = 1;
					}else if(type == "拒绝审核"){
						state = 2;
					}

					huoniao.showTip("loading", "正在操作，请稍候...");
					var id = [];
					for(var i = 0; i < checked.length; i++){
						id.push($("#list tbody tr.selected:eq("+i+")").attr("data-id"));
					}
					huoniao.operaJson("loupanList.php?dopost=updateState", "id="+id+"&state="+state, function(data){
						if(data.state == 100){
							huoniao.showTip("success", data.info, "auto");
							setTimeout(function() {
								getList();
							}, 800);
						}else{
							var info = [];
							for(var i = 0; i < $("#list tbody tr").length; i++){
								var tr = $("#list tbody tr:eq("+i+")");
								for(var k = 0; k < data.info.length; k++){
									if(data.info[k] == tr.attr("data-id")){
										info.push("▪ "+tr.find("td:eq(1) a").text());
									}
								}
							}
							$.dialog.alert("<div class='errInfo'><strong>以下信息修改失败：</strong><br />" + info.join("<br />") + '</div>', function(){
								getList();
							});
						}
					});
					$("#selectBtn a:eq(1)").click();
				}
			}

		};

	//地区递归分类
	$("#addrBtn").append(init.selectTypeList("addr"));

    $(".chosen-select").chosen();

	//初始加载
	getList();

	//搜索
	$("#searchBtn").bind("click", function(){
		$("#sKeyword").html($("#keyword").val());
		//$("#sAddr").html($("#addrBtn").attr("data-id"));
		$("#list").attr("data-atpage", 1);
		getList();
	});

	//搜索回车提交
    $("#keyword").keyup(function (e) {
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
            $("#searchBtn").click();
        }
    });

	//二级菜单点击事件
	$("#addrBtn a").bind("click", function(){
		var id = $(this).attr("data-id"), title = $(this).text();
		$("#addrBtn").attr("data-id", id);
		$("#addrBtn button").html(title+'<span class="caret"></span>');
	});

	$("#stateBtn, #propertyBtn, #pageBtn, #paginationBtn").delegate("a", "click", function(){
		var id = $(this).attr("data-id"), title = $(this).html(), obj = $(this).parent().parent().parent();
		obj.attr("data-id", id);
		if(obj.attr("id") == "paginationBtn"){
			var totalPage = $("#list").attr("data-totalpage");
			$("#list").attr("data-atpage", id);
			obj.find("button").html(id+"/"+totalPage+'页<span class="caret"></span>');
			$("#list").attr("data-atpage", id);
		}else{

			// $("#addrBtn")
			// 	.attr("data-id", "")
			// 	.find("button").html('全部地区<span class="caret"></span>');

			// $("#sAddr").html("");

			//if(obj.attr("id") != "propertyBtn"){
				obj.find("button").html(title+'<span class="caret"></span>');
			//}
			$("#list").attr("data-atpage", 1);
		}
		getList();
	});

	//下拉菜单过长设置滚动条
	$(".dropdown-toggle").bind("click", function(){
		if($(this).parent().attr("id") != "typeBtn" && $(this).parent().attr("id") != "addrBtn"){
			var height = document.documentElement.clientHeight - $(this).offset().top - $(this).height() - 30;
			$(this).next(".dropdown-menu").css({"max-height": height, "overflow-y": "auto"});
		}
	});

	//全选、不选
	$("#selectBtn a").bind("click", function(){
		var id = $(this).attr("data-id");
		if(id == 1){
			$("#selectBtn .check").addClass("checked");
			$("#list tr").removeClass("selected").addClass("selected");

			defaultBtn.css('display', 'inline-block');
			checkedBtn.hide();
		}else{
			$("#selectBtn .check").removeClass("checked");
			$("#list tr").removeClass("selected");

			defaultBtn.hide();
			checkedBtn.css('display', 'inline-block');
		}
	});

	//修改
	$("#list").delegate(".modify", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			href = $(this).attr("href");

		try {
			event.preventDefault();
			parent.addPage("loupanEdit"+id, "house", title, "house/"+href);
		} catch(e) {}
	});

	//房源
	$("#list").delegate(".house", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			url = $(this).attr("data-url");

		try {
			event.preventDefault();
			parent.addPage("listing"+id, "house", title + "房源", "house/"+url);
		} catch(e) {}
	});

	//户型
	$("#list").delegate(".apart", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			url = $(this).attr("data-url");

		try {
			event.preventDefault();
			parent.addPage("apartmentloupan"+id, "house", title + "户型", "house/"+url);
		} catch(e) {}
	});

	//全景
	$("#list").delegate(".360qj", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			url = $(this).attr("data-url");

		try {
			event.preventDefault();
			parent.addPage("360qjloupan"+id, "house", title + "全景", "house/"+url);
		} catch(e) {}
	});

	//沙盘
	$("#list").delegate(".shapan", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			url = $(this).attr("data-url");

		try {
			event.preventDefault();
			parent.addPage("shapanloupan"+id, "house", title + "沙盘", "house/"+url);
		} catch(e) {}
	});

	//相册
	$("#list").delegate(".album", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			url = $(this).attr("data-url");

		try {
			event.preventDefault();
			parent.addPage("housealbumloupan"+id, "house", title + "相册", "house/"+url);
		} catch(e) {}
	});

	//资讯
	$("#list").delegate(".news", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			url = $(this).attr("data-url");

		try {
			event.preventDefault();
			parent.addPage("loupanNews"+id, "house", title + "资讯", "house/"+url);
		} catch(e) {}
	});

	//视频
	$("#list").delegate(".video", "click", function(event){
		var id = $(this).attr("data-id"),
			title = $(this).attr("data-title"),
			url = $(this).attr("data-url");

		try {
			event.preventDefault();
			parent.addPage("loupanVideo"+id, "house", title + "视频", "house/"+url);
		} catch(e) {}
	});

	//删除
	$("#delBtn").bind("click", function(){
		$.dialog.confirm('删除信息将会删除信息下面的所有房源、户型、相册、问答、资讯。<br />此操作不可恢复，您确定要删除吗？', function(){
			init.del();
		});
	});

	//单条删除
	$("#list").delegate(".delete", "click", function(){
		$.dialog.confirm('删除信息将会删除信息下面的所有房源、户型、相册、问答、资讯。<br />此操作不可恢复，您确定要删除吗？', function(){
			init.del();
		});
	});

	//批量审核
	$("#batchAudit a").bind("click", function(){
		init.updateState($(this).text());
	});

	//单选
	$("#list tbody").delegate("tr", "click", function(event){
		var isCheck = $(this), checkLength = $("#list tbody tr.selected").length;
		if(event.target.className.indexOf("check") > -1) {
			if(isCheck.hasClass("selected")){
				isCheck.removeClass("selected");
			}else{
				isCheck.addClass("selected");
			}
		}else if(event.target.className.indexOf("edit") > -1 || event.target.className.indexOf("revert") > -1 || event.target.className.indexOf("del") > -1) {
			$("#list tr").removeClass("selected");
			isCheck.addClass("selected");
		}else{
			if(checkLength > 1){
				$("#list tr").removeClass("selected");
				isCheck.addClass("selected");
			}else{
				if(isCheck.hasClass("selected")){
					isCheck.removeClass("selected");
				}else{
					$("#list tr").removeClass("selected");
					isCheck.addClass("selected");
				}
			}
		}

		init.funTrStyle();
	});

	//拖选功能
	$("#list tbody").selectable({
		distance: 3,
		cancel: '.check, a',
		start: function(){
			$("#smartMenu_state").remove();
		},
		stop: function() {
			init.funTrStyle();
		}
	});

	//地区链接点击
	$("#list").delegate(".addr", "click", function(event){
		event.preventDefault();
		var id = $(this).attr("data-id"), txt = $(this).text();

		$("#addrBtn")
			.attr("data-id", id)
			.find("button").html(txt+'<span class="caret"></span>');

		//$("#sAddr").html(id);

		$("#list").attr("data-atpage", 1);
		getList();

		$("#selectBtn a:eq(1)").click();
	});

	//审核状态更新
	$("#list").delegate(".more", "click", function(event){
		event.preventDefault();

		var t = $(this), top = t.offset().top - 5, left = t.offset().left + 15, obj = "smartMenu_state";
		if($("#"+obj).html() != undefined){
			$("#"+obj).remove();
		}

		t.parent().parent().removeClass("selected").addClass("selected");

		var htmlCreateStateMenu = function(){
			var htmlMenu = [];
			htmlMenu.push('<div id="'+obj+'" class="smart_menu_box">');
			htmlMenu.push('  <div class="smart_menu_body">');
			htmlMenu.push('    <ul class="smart_menu_ul">');
			htmlMenu.push('      <li class="smart_menu_li"><a href="javascript:" class="smart_menu_a">待审核</a></li>');
			htmlMenu.push('      <li class="smart_menu_li"><a href="javascript:" class="smart_menu_a">已审核</a></li>');
			htmlMenu.push('      <li class="smart_menu_li"><a href="javascript:" class="smart_menu_a">拒绝审核</a></li>');
			htmlMenu.push('    </ul>');
			htmlMenu.push('  </div>');
			htmlMenu.push('</div>');

			return htmlMenu.join("");
		}

		$("body").append(htmlCreateStateMenu());

		$("#"+obj).find("a").bind("click", function(event){
			event.preventDefault();
			init.updateState($(this).text());
		});

		$("#"+obj).css({
			top: top,
			left: left - $("#"+obj).width()/2
		}).show();

		return false;
	});

	$(document).click(function (e) {
		var s = e.target;
		if ($("#smartMenu_state").html() != undefined) {
			if (!jQuery.contains($("#smartMenu_state").get(0), s)) {
				if (jQuery.inArray(s, $(".smart_menu_body")) < 0) {
					$("#smartMenu_state").remove();
				}
			}
		}
	});

});

//获取列表
function getList(){
	huoniao.showTip("loading", "正在操作，请稍候...");
	$("#list table, #pageInfo").hide();
	$("#selectBtn a:eq(1)").click();
	$("#loading").html("加载中，请稍候...").show();
	var sKeyword = encodeURIComponent($("#sKeyword").html()),
		//sAddr    = $("#sAddr").html(),
        cityid   = $("#cityid").val(),
		state    = $("#stateBtn").attr("data-id") ? $("#stateBtn").attr("data-id") : "",
		property = $("#propertyBtn").attr("data-id") ? $("#propertyBtn").attr("data-id") : "",
		pagestep = $("#pageBtn").attr("data-id") ? $("#pageBtn").attr("data-id") : "10",
		page     = $("#list").attr("data-atpage") ? $("#list").attr("data-atpage") : "1";

	var data = [];
		data.push("sKeyword="+sKeyword);
		//data.push("sAddr="+sAddr);
    	data.push("cityid="+cityid);
		data.push("state="+state);
		data.push("property="+property);
		data.push("pagestep="+pagestep);
		data.push("page="+page);

	huoniao.operaJson("loupanList.php?dopost=getList", data.join("&"), function(val){
		var obj = $("#list"), list = [], i = 0, loupanList = val.loupanList;
		obj.attr("data-totalpage", val.pageInfo.totalPage);

		$(".totalCount").html(val.pageInfo.totalCount);
		$(".totalGray").html(val.pageInfo.totalGray);
		$(".totalAudit").html(val.pageInfo.totalAudit);
		$(".totalRefuse").html(val.pageInfo.totalRefuse);

		if(val.state == "100"){
			//huoniao.showTip("success", "获取成功！", "auto");
			huoniao.hideTip();

			for(i; i < loupanList.length; i++){
				list.push('<tr data-id="'+loupanList[i].id+'">');
				list.push('  <td class="row3"><span class="check"></span></td>');
				var img = '<img src="'+cfg_attachment+loupanList[i].litpic+'&type=small" class="litpic" />';
				var append = [];
				if(loupanList[i].hot == 1){
					append.push('热');
				}
				if(loupanList[i].rec == 1){
					append.push('推');
				}
				if(loupanList[i].tuan == 1){
					append.push('团');
				}
				if(append.length > 0){
					append = '<span class="append">（'+append.join(",")+'）</span>';
				}
				list.push('  <td class="row25 left">'+img+'<span><a href="'+loupanList[i].url+'" target="_blank">'+loupanList[i].title+'</a>'+append+'</span></td>');
				list.push('  <td class="row10"><a href="javascript:;" data-id="'+loupanList[i].addrid+'" class="addr">'+loupanList[i].addrname+'</a></td>');
				var username = [];
				if(loupanList[i].username.length){
					for(var n = 0; n < loupanList[i].username.length && n < 5; n++){
						username.push(loupanList[i].username[n])
					}
				}
				list.push('  <td class="row10" title="'+loupanList[i].username.join('\n')+'">'+(username.length ? username.join('<br>') : '无')+'</td>');
				list.push('  <td class="row5">'+loupanList[i].weight+'</td>');
				list.push('  <td class="row5">'+loupanList[i].views+'</td>');

				var ptype = echoCurrency('short') + "/㎡";
				if(loupanList[i].ptype == 2){
					ptype = "万"+echoCurrency('short')+"/套";
				}
				list.push('  <td class="row10">&yen;'+loupanList[i].price+' '+ptype+'</td>');
				var salestate = "";
				switch (loupanList[i].salestate) {
					case "0":
						salestate = '<span class="audit">新盘待售</span>';
						break;
					case "1":
						salestate = '<span class="audit">在售</span>';
						break;
					case "2":
						salestate = '<span class="refuse">尾盘</span>';
						break;
					case "3":
						salestate = '<span class="refuse">售磬</span>';
						break;
				}
				list.push('  <td class="row7">'+salestate+'</td>');
				var state = "";
				switch (loupanList[i].state) {
					case "0":
						state = '<span class="gray">待审核</span>';
						break;
					case "1":
						state = '<span class="audit">已审核</span>';
						break;
					case "2":
						state = '<span class="refuse">审核拒绝</span>';
						break;
				}
				list.push('  <td class="row10 state">'+state+'<span class="more"><s></s></span></td>');
				list.push('  <td class="row15">');
				list.push('<a data-id="'+loupanList[i].id+'" data-title="'+loupanList[i].title+'" href="loupanAdd.php?dopost=edit&id='+loupanList[i].id+'" title="修改" class="link modify">修改</a>&nbsp;|&nbsp;');
				list.push('<a href="javascript:;" title="删除" class="link delete">删除</a>&nbsp;|&nbsp;');
				list.push('<span class="actions"><a href="javascript:;" title="更多操作" class="btn btn-link dropdown-toggle" data-toggle="dropdown">更多操作<span class="caret"></span></a>');
				list.push('<ul class="dropdown-menu">');
				//list.push('<li><a href="javascript:;" class="house" data-id="'+loupanList[i].id+'" data-url="listing.php?id='+loupanList[i].id+'" data-title="'+loupanList[i].title+'">房源</a></li>');
				list.push('<li><a href="javascript:;" class="shapan" data-id="'+loupanList[i].id+'" data-url="houseshapan.php?loupan='+loupanList[i].id+'" data-title="'+loupanList[i].title+'">沙盘</a></li>');
				list.push('<li><a href="javascript:;" class="360qj" data-id="'+loupanList[i].id+'" data-url="house360qj.php?loupan='+loupanList[i].id+'" data-title="'+loupanList[i].title+'">全景</a></li>');
				list.push('<li><a href="javascript:;" class="video" data-id="'+loupanList[i].id+'" data-url="loupanVideo.php?loupan='+loupanList[i].id+'" data-title="'+loupanList[i].title+'">视频</a></li>');
				list.push('<li><a href="javascript:;" class="apart" data-id="'+loupanList[i].id+'" data-url="apartment.php?action=loupan&id='+loupanList[i].id+'" data-title="'+loupanList[i].title+'">户型</a></li>');
				list.push('<li><a href="javascript:;" class="album" data-id="'+loupanList[i].id+'" data-url="housealbum.php?action=loupan&id='+loupanList[i].id+'" data-title="'+loupanList[i].title+'">相册</a></li>');
				list.push('<li><a href="javascript:;" class="news" data-id="'+loupanList[i].id+'" data-url="loupanNews.php?id='+loupanList[i].id+'" data-title="'+loupanList[i].title+'">资讯</a></li>');
				list.push('</ul></span>');
				list.push('</td>');
				list.push('</tr>');
			}

			obj.find("tbody").html(list.join(""));
			$("#loading").hide();
			$("#list table").show();
			huoniao.showPageInfo();
		}else{

			obj.find("tbody").html("");
			huoniao.showTip("warning", val.info, "auto");
			$("#loading").html(val.info).show();
		}
	});

};
