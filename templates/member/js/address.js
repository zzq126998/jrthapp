$(function(){

	var id = 0;

	//增加新地址
	$(".addNew").bind("click", function(){
		$("#selAddr").find(".sel-group").each(function(index){
			if(index > 0){
				$(this).remove();
			}else{
				$(this).find("button").html(langData['siteConfig'][20][134]+'<span class="caret"></span>');
			}
		});
		$("#address").val("");
		$("#fabuForm").find("input").val("");
		$(".w-form").stop().slideToggle(200);
	});

	$(".w-form .cancel").bind("click", function(){
		$(".w-form").stop().slideUp(200);
	});

	//选择区域
	$("#selAddr").delegate("a", "click", function(){
		if($(this).text() != langData['siteConfig'][22][96] && $(this).attr("data-id") != $("#addr").val()){
			var id = $(this).attr("data-id");
			$(this).closest(".sel-group").nextAll(".sel-group").remove();
			getChildAddr(id);
		}
	});

	//获取子级区域
	function getChildAddr(id){
		if(!id) return;
		$.ajax({
			url: "/include/ajax.php?service=siteConfig&action=addr&type="+id,
			type: "GET",
			dataType: "jsonp",
			success: function (data) {
				if(data && data.state == 100){
					var list = data.info, html = [];

					html.push('<div class="sel-group">');
					html.push('<button class="sel">'+langData['siteConfig'][22][96]+'<span class="caret"></span></button>');  //不限
					html.push('<ul class="sel-menu">');
					html.push('<li><a href="javascript:;" data-id="'+id+'">'+langData['siteConfig'][22][96]+'</a></li>'); //不限
					for(var i = 0; i < list.length; i++){
						html.push('<li><a href="javascript:;" data-id="'+list[i].id+'">'+list[i].typename+'</a></li>');
					}
					html.push('</ul>');
					html.push('</div>');

					$("#addrid").before(html.join(""));

				}
			}
		});
	}

	//保存
	$("#submit").bind("click", function(event){
		event.preventDefault();
		$('#addrid').val($('.addrBtn').attr('data-id'));

		var t       = $(this),
				addrid  = $("#addrid").val(),
				address = $("#address"),
				person  = $("#person"),
				mobile  = $("#mobile"),
				tel     = $("#tel");

		if(addrid == "" || addrid == 0){
			$.dialog.alert(langData['siteConfig'][20][68]);    //请选择所在区域
			return false;
		}
		if(address.val() == ""){
			address.focus();
			$.dialog.alert(langData['siteConfig'][20][69]);   //请输入详细地址
			return false;
		}
		if(person.val() == ""){
			person.focus();
			$.dialog.alert(langData['siteConfig'][20][70]);   //请输入收货人姓名
			return false;
		}
		if(mobile.val() == "" && tel.val() == ""){
			mobile.focus();
			$.dialog.alert(langData['siteConfig'][20][67]);   //手机号码和固定电话至少输入一项
			return false;
		}

		// if(mobile.val() != ""){
		// 	var exp = new RegExp("^(13|14|15|17|18)[0-9]{9}$", "img");
		// 	if(!exp.test($.trim(mobile.val()))){
		// 		mobile.focus();
		// 		$.dialog.alert("请输入正确的手机号码");
		// 		return false;
		// 	}
		// }

		var form = $("#fabuForm"), action = form.attr("action");
		data = form.serialize() + "&id="+id;

		t.attr("disabled", true).html(langData['siteConfig'][6][35]+"...");   //提交中

		$.ajax({
			url: action,
			data: data,
			type: "POST",
			dataType: "json",
			success: function (data) {
				if(data && data.state == 100){

					$.dialog({
						title: langData['siteConfig'][19][287], //提示消息
						icon: 'success.png',
						content: langData['siteConfig'][6][39], //保存成功
						ok: function(){
							location.reload();
						}
					});

				}else{
					$.dialog.alert(data.info);
					t.attr("disabled", false).html(id == 0 ? langData['siteConfig'][6][27] : langData['siteConfig'][6][41]);//保存----确认修改
				}
			},
			error: function(){
				$.dialog.alert(langData['siteConfig'][20][183]);       //网络错误，请稍候重试！
				t.attr("disabled", false).html(id == 0 ? langData['siteConfig'][6][27] : langData['siteConfig'][6][41]);//保存----确认修改
			}
		});

	});


	//修改
	$("#list .edit").bind("click", function(){
		var t        = $(this).closest("tr"),
				person   = t.data("person"),
				addrid   = t.data("addrid"),
				addrname = t.data("addrname"),
				address  = t.data("address"),
				mobile   = t.data("mobile"),
				tel      = t.data("tel");

		id = t.data("id");

		if(id == "" || id == 0){
			$.dialog.alert(langData['siteConfig'][20][250]);    //信息获取失败，请刷新页面重试！
			return false;
		}

		$("#selAddr").find(".sel-group").each(function(index){
			if(index > 1){
				$(this).remove();
			}else{
				$(this).find("button").html(addrname.replace(" ", " > ")+'<span class="caret"></span>');
			}
		});
		$("#addrid").val(addrid);
		$('.addrBtn').attr('data-id', addrid);
		$("#address").val(address);
		$("#person").val(person);
		$("#mobile").val(mobile);
		$("#tel").val(tel);

		$.ajax({
			url: "/include/ajax.php?service=siteConfig&action=getPublicParentInfo&tab=site_area&id="+addrid,
			type: "GET",
			dataType: "json",
			success: function(data){
				if (data && data.state == 100) {
					var ids = data.info.ids, names = data.info.names;
					$('.addrBtn').attr('data-ids', ids.join(" "));
					$('.addrBtn').html(names.join("/"));
				}
			}
		})

		$("#submit").html(langData['siteConfig'][6][41]);     //确认修改

		$('html, body').animate({scrollTop: $(".container").offset().top}, 300);
		$(".w-form").show();
	});


	//删除
	$("#list .del").bind("click", function(){
		var t = $(this).closest("tr"), id = t.data("id");
		if(id){
			$.dialog.confirm(langData['siteConfig'][20][211], function(){    //确认要删除吗？

				$.ajax({
					url: "/include/ajax.php?service=member&action=addressDel",
					data: "id="+id,
					type: "POST",
					dataType: "json",
					success: function (data) {
						if(data && data.state == 100){

							t.hide(300, function(){
								t.remove();
							});

						}else{
							$.dialog.alert(data.info);
						}
					},
					error: function(){
						$.dialog.alert(langData['siteConfig'][20][183]);   //网络错误，请稍候重试！
					}
				});

			});
		}
	});

});
