$(function(){
	var init = {

		//拼接分类
		printTypeTree: function(){
			var typeList = [], l=typeListArr.length;
			for(var i = 0; i < l; i++){
				(function(){
					var jsonArray =arguments[0];
					typeList.push('<li class="li0">');
					typeList.push('<div class="tr clearfix tr_'+jsonArray["id"]+'">');
					typeList.push('  <div class="row2"></div>');
					typeList.push('  <div class="row60 left"><input type="text" data-type="name" class="input-medium" data-id="'+jsonArray["id"]+'" value="'+jsonArray["typename"]+'" placeholder="名称"><input type="text" data-type="jc" class="input-mini" data-id="'+jsonArray["id"]+'" value="'+jsonArray["jc"]+'" placeholder="简称" style="margin-left: 20px;"></div>');
					typeList.push('  <div class="row20"><a href="javascript:;" class="up">向上</a><a href="javascript:;" class="down">向下</a></div>');
					typeList.push('  <div class="row17 left"><a href="javascript:;" class="edit" id="edit_'+jsonArray['id']+'">编辑</a><a href="javascript:;" class="del" title="删除">删除编辑</a></div>');
					typeList.push('</div>');
					typeList.push('</li>');
				})(typeListArr[i]);
			}
			$(".root").html(typeList.join(""));
			init.dragsort();
		}

		//快速编辑
		,quickEdit: function(id, rank){
			if(id == ""){
				huoniao.showTip("warning", "请选择要修改的分类！", "auto");
			}else{
				huoniao.showTip("loading", "正在获取信息，请稍候...");

				huoniao.operaJson("homemakingAuthAttr.php?dopost=getTypeDetail", "id="+id, function(data){
					if(data != null){
						var retData = data;
						data = retData[0];
						huoniao.hideTip();
						//huoniao.showTip("success", "获取成功！", "auto");

						var content = $("#editForm").html();
						var width = 480;

						$.dialog({
							fixed: true,
							title: '修改分类',
							content: content,
							width: width,
							init: function(){
								
							},
							ok: function(){
								//提交
								var typename  = self.parent.$("#typename").val(),
									  serialize = self.parent.$(".quick-editForm").serialize();


								if($.trim(typename) == ""){
									alert("请输入分类名称");
									return false;
								}else{
									if(!/^.{2,30}$/.test(typename)){
										alert("请正确填写分类名称\n2-30个汉字");
										return false;
									}
								}

								huoniao.operaJson("homemakingAuthAttr.php?dopost=updateType&action=single&type=all", "id="+id+"&"+serialize, function(data){
									if(data.state == 100){
										huoniao.showTip("success", data.info, "auto");
										setTimeout(function() {
											location.reload();
										}, 800);
									}else if(data.state == 101){
										alert(data.info);
										return false;
									}else{
										huoniao.showTip("error", data.info, "auto");
									}
								});

							},
							cancel: true
						});

						//填充信息
						self.parent.$("#typename").val(data.typename);
						self.parent.$("#jc").val(data.jc);
						self.parent.$("#description").val(data.description);
					}else{
						huoniao.showTip("error", "信息获取失败！", "auto");
					}
				});
			}

		}

		//拖动排序
		,dragsort: function(){
			//一级
			$('.root').sortable({
	      items: '>li',
				placeholder: 'placeholder',
	      orientation: 'vertical',
	      axis: 'y',
				handle:'>div.tr',
	      opacity: .5,
	      revert: 0,
				stop:function(){
					//saveOpera(1);
					huoniao.stopDrag();
				}
	    });
		}
	};


	//下拉菜单过长设置滚动条
	$(".dropdown-toggle").bind("click", function(){
		var height = document.documentElement.clientHeight - $(this).offset().top - $(this).height() - 30;
		$(this).next(".dropdown-menu").css({"max-height": height, "overflow-y": "auto"});
	});

	//修改
	$(".root").delegate(".edit", "click", function(){
		var id = $(this).parent().parent().find("input").attr("data-id"), rank = $(this).parent().parent().find(".add-type").attr("data-level");
		rank = rank == undefined ? 3 : rank;
		init.quickEdit(id, rank);
	});


	//拼接现有分类
	init.printTypeTree();


	//底部添加新分类
	$("#addNew").bind("click", function(){
		var html = [];

		html.push('<li class="li0">');
		html.push('  <div class="tr clearfix">');
		html.push('    <div class="row2"></div>');
		html.push('    <div class="row60 left"><input data-id="0" type="text" data-type="name" class="input-medium" placeholder="名称"><input data-id="0" type="text" data-type="jc" class="input-mini" placeholder="简称" style="margin-left:20px;"></div>');
		html.push('    <div class="row20"><a href="javascript:;" class="up">向上</a><a href="javascript:;" class="down">向下</a></div>');
		html.push('    <div class="row17 left"><a href="javascript:;" class="del">删除</a></div>');
		html.push('  </div>');
		html.push('</li>');

		$(this).parent().parent().prev(".root").append(html.join(""));
	});

	//input焦点离开自动保存
	$("#list").delegate("input", "blur", function(){
		var t = $(this), id = t.attr("data-id"), value = t.val(), type = t.data("type");
		if(id != "" && id != 0){
			huoniao.operaJson("homemakingAuthAttr.php?dopost=updateType&id="+id+"&type="+type, "action=single&value="+value, function(data){
				if(data.state == 100){
					huoniao.showTip("success", data.info, "auto");
				}else if(data.state == 101){
					//huoniao.showTip("warning", data.info, "auto");
				}else{
					huoniao.showTip("error", data.info, "auto");
				}
			});
		}
	});

	//鼠标经过li
	$("#list").delegate(".tr", "mouseover", function(){
		$(this).parent().addClass("hover");
	});
	$("#list").delegate(".tr", "mouseout", function(){
		$(this).parent().removeClass("hover");
	});

	//排序向上
	$(".root").delegate(".up", "click", function(){
		var t = $(this), parent = t.parent().parent().parent(), index = parent.index(), length = parent.siblings("li").length;
		if(index != 0){
			parent.after(parent.prev("li"));
			huoniao.stopDrag();
		}
	});

	//排序向下
	$(".root").delegate(".down", "click", function(){
		var t = $(this), parent = t.parent().parent().parent(), index = parent.index(), length = parent.siblings("li").length;
		if(index != length){
			parent.before(parent.next("li"));
			huoniao.stopDrag();
		}
	});

	//删除
	$(".root").delegate(".del", "click", function(event){
		event.preventDefault();
		var t = $(this), id = t.parent().parent().find("input").attr("data-id"), type = t.parent().text();

		//从异步请求
		if(type.indexOf("编辑") > -1){
			$.dialog.confirm("确定要删除吗？", function(){
				huoniao.showTip("loading", "正在删除，，请稍候...");
				huoniao.operaJson("homemakingAuthAttr.php?dopost=del", "id="+id, function(data){
					if(data.state == 100){
						huoniao.showTip("success", data.info, "auto");
						setTimeout(function() {
							location.reload();
						}, 800);
					}else{
						alert(data.info);
						return false;
					}
				});
			});
			//跳转到对应删除页面
		}else{
			t.parent().parent().parent().remove();
		}

	});

	//保存
	$("#saveBtn").bind("click", function(){
		saveOpera("");
	});

	//返回最近访问的位置
	huoniao.scrollTop();

});

//保存
function saveOpera(type){
	var first = $("ul.root>li"), json = '[';
	for(var i = 0; i < first.length; i++){
		(function(){
			var html =arguments[0], count = 0, input = $(html).find(".tr input.input-medium"), id = input.attr("data-id"), val = input.val(), jc = $(html).find(".tr input.input-mini").val();
			if(val != ""){
				json = json + '{"id": "'+id+'", "name": "'+encodeURIComponent(val)+'", "jc": "'+jc+'"},';
			}
		})(first[i]);
	}
	json = json.substr(0, json.length-1);
	json = json + ']';

	if(json == "]") return false;

	var scrolltop = $(document).scrollTop();
	var href = huoniao.changeURLPar(location.href, "scrolltop", scrolltop);

	var pid = $("#pBtn").attr("data-id"), cid = $("#cBtn").attr("data-id"), did = $("#dBtn").attr("data-id");

	huoniao.showTip("loading", "正在保存，请稍候...");
	huoniao.operaJson("homemakingAuthAttr.php?dopost=typeAjax&pid="+pid+"&cid="+cid+"&did="+did, "data="+json, function(data){
		if(data.state == 100){
			huoniao.showTip("success", data.info, "auto");
			if(type == ""){
				//window.scroll(0, 0);
				//setTimeout(function() {
					location.href = href;
				//}, 800);
			}
		}else{
			huoniao.showTip("error", data.info, "auto");
		}
	});
}
