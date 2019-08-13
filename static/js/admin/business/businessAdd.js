//实例化编辑器
var ue = UE.getEditor('body');
$(function () {

	huoniao.parentHideTip();

	var thisURL   = window.location.pathname;
		tmpUPage  = thisURL.split( "/" );
		thisUPage = tmpUPage[ tmpUPage.length-1 ];
		thisPath  = thisURL.split(thisUPage)[0];

	var init = {
		//树形递归分类
		treeTypeList: function(type){
			var typeList = [], cl = "";
			if(type == "addr"){
				var l=addrListArr;
				typeList.push('<option value="">选择地区</option>');
			}else{
				var l=typeListArr;
				typeList.push('<option value="">选择分类</option>');
			}
			for(var i = 0; i < l.length; i++){
				(function(){
					var jsonArray =arguments[0], jArray = jsonArray.lower, selected = "";
					if((type == "type" && typeid == jsonArray["id"]) || (type == "addr" && addrid == jsonArray["id"])){
						selected = " selected";
					}
					// if(jsonArray['lower'] != "" && type == "type"){
					// 	typeList.push('<optgroup label="'+cl+"|--"+jsonArray["typename"]+'"></optgroup>');
					// }else{
						typeList.push('<option value="'+jsonArray["id"]+'"'+selected+'>'+cl+"|--"+jsonArray["typename"]+'</option>');
					// }
					for(var k = 0; k < jArray.length; k++){
						cl += '    ';
						var selected = "";
						if((type == "type" && typeid == jArray[k]["id"]) || (type == "addr" && addrid == jArray[k]["id"])){
							selected = " selected";
						}
						if(jArray[k]['lower'] != ""){
							arguments.callee(jArray[k]);
						}else{
							typeList.push('<option value="'+jArray[k]["id"]+'"'+selected+'>'+cl+"|--"+jArray[k]["typename"]+'</option>');
						}
						if(jsonArray["lower"] == null){
							cl = "";
						}else{
							cl = cl.replace("    ", "");
						}
					}
				})(l[i]);
			}
			return typeList.join("");
		}

		//重新上传时删除已上传的文件
		,delFile: function(b, d, c) {
			var g = {
				mod: "business",
				type: "delLogo",
				picpath: b,
				randoms: Math.random()
			};
			$.ajax({
				type: "POST",
				cache: false,
				async: d,
				url: "/include/upload.inc.php",
				dataType: "json",
				data: $.param(g),
				success: function(a) {
					try {
						c(a)
					} catch(b) {}
				}
			})
		}

	};

	$("#expired").datetimepicker({format: 'yyyy-mm-dd hh:ii:ss', autoclose: true, language: 'ch'});
	var yingyeFrom = 0, yingyeTo = 6;
  var yingyeTxt = $('#yingyeTxt').val();
  var yingyeArr = ["周一", "周二", "周三", "周四", "周五", "周六", "周日"];
  if(yingyeTxt != '' && yingyeTxt.indexOf('至') > -1){
      yingyeTxt = yingyeTxt.split('至');
      for (var i = 0; i < yingyeArr.length; i++){
          if(yingyeArr[i] == yingyeTxt[0]){
              yingyeFrom = i;
          }
          if(yingyeArr[i] == yingyeTxt[1]){
              yingyeTo = i;
          }
      }
  }
  $("#yingyeTxt").ionRangeSlider({
      type: "double",
      grid: true,
      from: yingyeFrom,
      to: yingyeTo,
      values: yingyeArr,
      onFinish: function (data) {
          $("#yingyeTxt").val(data.from_value + '至' + data.to_value);
      }
  });
    
	//自定义认证属性
	$("#customRz").bind("click", function(){
		var href = $(this).attr("href");

		try {
			event.preventDefault();
			parent.addPage("businessAuthAttrphp", "business", "自定义认证属性", "business/"+href);
		} catch(e) {}
	});


	//取消选择模板风格
	$("#tplList").delegate(".choose", "click", function(){
		var t = $(this), li = t.closest("li"), inp = li.parent().siblings("input");
		if(li.hasClass("current")){
			li.removeClass("current");
			inp.val('');
		}
	});


	//手机号码区域
	$("#phoneArea").delegate("a", "click", function(){
		var id = $(this).attr("data-id"), title = $(this).text();
		$("#areaCode").val(id.replace("+", ""));
		$("#phoneArea button").html(id+'<span class="caret"></span>');
	});


	//模糊匹配会员
	$("#username").bind("input", function(){
		$("#uid").val("0");
		var t = $(this), val = t.val(), id = $("#id").val();
		if(val != ""){
			t.addClass("input-loading");
			huoniao.operaJson("?dopost=checkUser", "key="+val+"&id="+id, function(data){
				t.removeClass("input-loading");
				if(!data) {
					$("#companyList").html("").hide();
					return false;
				}
				var list = [];
				for(var i = 0; i < data.length; i++){
					var name = data[i].company ? data[i].company : (data[i].nickname ? data[i].nickname : data[i].username);
					list.push('<li data-id="'+data[i].id+'" data-company="'+name+'">'+name+'</li>');
				}
				if(list.length > 0){
					var pos = t.position();
					$("#companyList")
						.css({"left": pos.left, "top": pos.top + 36, "width": t.width() + 12})
						.html('<ul>'+list.join("")+'</ul>')
						.show();
				}else{
					$("#companyList").html("").hide();
				}
			});

		}else{
			$("#companyList").html("").hide();
		}
  });

	$("#companyList").delegate("li", "click", function(){
		var name = $(this).text(), id = $(this).attr("data-id");
		$("#username").val(name);
		$("#uid").val(id);
		$("#companyList").html("").hide();
		checkGw($("#username"), name, $("#id").val());
		return false;
	});

	$(document).click(function (e) {
    var s = e.target;
    if (!jQuery.contains($("#companyList").get(0), s)) {
      if (jQuery.inArray(s.id, "user") < 0) {
          $("#companyList").hide();
      }
    }
  });

	$("#username").bind("blur", function(){
		var t = $(this), val = t.val(), id = $("#id").val();
		if(val != ""){
			checkGw(t, val, id);
		}else{
			t.siblings(".input-tips").removeClass().addClass("input-tips input-ok").html('<s></s>&nbsp;');
		}
	});

	function checkGw(t, val, id){
		var flag = false;
		t.addClass("input-loading");
		huoniao.operaJson("?dopost=checkUser", "key="+val+"&id="+id, function(data){
			t.removeClass("input-loading");
			if(data == 200){
				t.siblings(".input-tips").removeClass().addClass("input-tips input-error").html('<s></s>此会员已授权管理其它商家，一个会员不可以管理多个商家！');
			}else{
				if(data) {
					for(var i = 0; i < data.length; i++){
						if(data[i].company == val || data[i].nickname == val || data[i].username == val){
							flag = true;
							$("#uid").val(data[i].id);
						}
					}
				}
				if(flag){
					t.siblings(".input-tips").removeClass().addClass("input-tips input-ok").html('<s></s>如果填写了，则此会员可以管理商家信息');
				}else{
					t.siblings(".input-tips").removeClass().addClass("input-tips input-error").html('<s></s>请从列表中选择会员');
				}
			}
		});
	}



	//填充栏目分类
	$("#typeid").html(init.treeTypeList("type"));

	//标注地图
	$("#mark").bind("click", function(){
		$.dialog({
			id: "markDitu",
			title: "标注地图位置<small>（请点击/拖动图标到正确的位置，再点击底部确定按钮。）</small>",
			content: 'url:'+adminPath+'../api/map/mark.php?mod=business&lnglat='+$("#lnglat").val()+"&city="+mapCity+"&address="+$("#address").val(),
			width: 800,
			height: 500,
			max: true,
			ok: function(){
				var doc = $(window.parent.frames["markDitu"].document),
					lng = doc.find("#lng").val(),
					lat = doc.find("#lat").val(),
					address = doc.find("#addr").val();
				$("#lnglat").val(lng+","+lat);
				if($("#address").val() == ""){
					$("#address").val(address);
				}
				huoniao.regex($("#address"));
			},
			cancel: true
		});
	});

	//表单验证
	$("#editform").delegate("input,textarea", "focus", function(){
		var tip = $(this).siblings(".input-tips");
		if(tip.html() != undefined){
			tip.removeClass().addClass("input-tips input-focus").attr("style", "display:inline-block");
		}
	});

	$("#editform").delegate("input[type='radio'], input[type='checkbox']", "click", function(){
		if($(this).attr("data-required") == "true"){
			var name = $(this).attr("name"), val = $("input[name='"+name+"']:checked").val();
			if(val == undefined){
				$(this).parent().siblings(".input-tips").removeClass().addClass("input-tips input-error").attr("style", "display:inline-block");
			}else{
				$(this).parent().siblings(".input-tips").removeClass().addClass("input-tips input-ok").attr("style", "display:inline-block");
			}
		}
	});

	$("#editform").delegate("input,textarea", "blur", function(){
		var obj = $(this), tip = obj.siblings(".input-tips");
		if(obj.attr("data-required") == "true"){
			if($(this).val() == ""){
				tip.removeClass().addClass("input-tips input-error").attr("style", "display:inline-block");
			}else{
				tip.removeClass().addClass("input-tips input-ok").attr("style", "display:inline-block");
			}
		}else{
			huoniao.regex(obj);
		}
	});

	$("#editform").delegate("select", "change", function(){
		if($(this).parent().siblings(".input-tips").html() != undefined){
			if($(this).val() == 0){
				$(this).parent().siblings(".input-tips").removeClass().addClass("input-tips input-error").attr("style", "display:inline-block");
			}else{
				$(this).parent().siblings(".input-tips").removeClass().addClass("input-tips input-ok").attr("style", "display:inline-block");
			}
		}
	});

	//提交表单
	$("#btnSubmit").bind("click", function(event){
		event.preventDefault();
		$('#addrid').val($('.addrBtn').attr('data-id'));
        var addrids = $('.addrBtn').attr('data-ids').split(' ');
        $('#cityid').val(addrids[0]);
		var t      = $(this),
			id     = $("#id").val(),
			title  = $("#title"),
			logo   = $("#logo").val(),
			typeid = $("#typeid").val(),
			addrid = $("#addrid").val(),
			typeidA = $("input[name='typeidArr']:checked").val(),
			tj     = true;

		//标题
		if(!huoniao.regex(title)){
			tj = false;
			huoniao.goTop();
			return false;
		};

		if(logo == ""){
			tj = false;
			huoniao.goTop();
			$.dialog.alert("请上传店铺LOGO");
			return false;
		}

		//分类
		if(typeid == "" || typeid == "0"){
			$("#typeList").siblings(".input-tips").removeClass().addClass("input-tips input-error").attr("style", "display:inline-block");
			tj = false;
			huoniao.goTop();
			return false;
		}else{
			$("#typeList").siblings(".input-tips").removeClass().addClass("input-tips input-ok").attr("style", "display:inline-block");
		}

		//地区
		if(addrid == "" || addrid == "0"){
			$("#addrList").siblings(".input-tips").removeClass().addClass("input-tips input-error").attr("style", "display:inline-block");
			tj = false;
			huoniao.goTop();
			return false;
		}else{
			$("#addrList").siblings(".input-tips").removeClass().addClass("input-tips input-ok").attr("style", "display:inline-block");
		}

		var pics = [];
		if(typeidA == 0){
			if($("#listSection2").find("li").length > 0 && $("#listSection2").find("li").length != 6){
				$.dialog.alert("请上传6张完整的全景图片！");
				return false;
			}

			$("#listSection2").find("img").each(function(index, element) {
        		pics.push($(this).attr("data-val"));
	    	});
			
		}else if(typeidA == 1){
			// if($("#url").val() == ""){
			// 	$.dialog.alert("请输入URL地址！");
			// 	return false;
			// }
		}
		$("#litpic").val(pics.join(","));

		if(tj){
			t.attr("disabled", true).html("提交中...");
			$.ajax({
				type: "POST",
				url: "businessAdd.php?action="+action,
				data: $(this).parents("form").serialize() + "&submit=" + encodeURI("提交"),
				dataType: "json",
				success: function(data){
					if(data.state == 100){

						if($("#dopost").val() == "add"){
							huoniao.parentTip("success", "发布成功！<a href='"+data.url+"' target='_blank'>"+data.url+"</a>");
							huoniao.goTop();
							location.reload();
						}else{
							huoniao.parentTip("success", "店铺信息修改成功！<a href='"+data.url+"' target='_blank'>"+data.url+"</a>");
							t.attr("disabled", false).html("确认提交");
						}

					}else{
						$.dialog.alert(data.info);
						t.attr("disabled", false).html("确认提交");
					};
				},
				error: function(msg){
					$.dialog.alert("网络错误，请刷新页面重试！");
					t.attr("disabled", false);
				}
			});
		}
	});

	//视频预览
	$("#videoPreview").delegate("a", "click", function(event){
		event.preventDefault();
		var href = $(this).attr("href"),
			id   = $(this).attr("data-id");

		window.open(href+id, "videoPreview", "height=500, width=650, top="+(screen.height-500)/2+", left="+(screen.width-650)/2+", toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no");
	});

	//全景类型切换
	$("input[name='typeidArr']").bind("click", function(){
		$("#qj_type0, #qj_type1").hide();
		$("#qj_type"+$(this).val()).show();
	});

	//全景预览
	$("#licenseFiles a").bind("click", function(event){
		event.preventDefault();
		var id   = $(this).attr("data-id");

		window.open(cfg_attachment+id, "videoPreview", "height=600, width=650, top="+(screen.height-600)/2+", left="+(screen.width-600)/2+", toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no");
	});

	//删除文件
	$(".spic .reupload").bind("click", function(){
		var t = $(this), parent = t.parent(), input = parent.prev("input"), iframe = parent.next("iframe"), src = iframe.attr("src");
		delFile(input.val(), false, function(){
			input.val("");
			input.val("");
			t.prev(".sholder").html('');
			parent.hide();
			iframe.attr("src", src).show();
		});
	});

});


//上传成功接收
function uploadSuccess(obj, file, filetype, fileurl){
	$("#"+obj).val(file);
	var media = "";
	if(filetype == "swf" || file.split(".")[1] == "swf"){
		media = '<embed src="'+fileurl+'" type="application/x-shockwave-flash" quality="high" wmode="transparent">';
	}else if(obj == "video"){
		media = '<video src="'+cfg_attachment+file+'"></video>';
	}else{
		media = '<img src="'+cfg_attachment+file+'" />';
	}
	$("#"+obj).siblings(".spic").find(".sholder").html(media);
	//$("#"+obj).siblings(".spic").find(".sholder").html('<img src="'+cfg_attachment+file+'" />');
	$("#"+obj).siblings(".spic").find(".reupload").attr("style", "display: inline-block");
	$("#"+obj).siblings(".spic").show();
	$("#"+obj).siblings("iframe").hide();
}

//删除已上传的文件
function delFile(b, d, c) {
	var g = {
		mod: "business",
		type: "delThumb",
		picpath: b,
		randoms: Math.random()
	};
	$.ajax({
		type: "POST",
		cache: false,
		async: d,
		url: "/include/upload.inc.php",
		dataType: "json",
		data: $.param(g),
		success: function(a) {
			try {
				c(a)
			} catch(b) {}
		}
	})
}