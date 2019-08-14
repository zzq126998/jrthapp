$(function () {
	
	var thisURL   = window.location.pathname;
		tmpUPage  = thisURL.split( "/" ); 
		thisUPage = tmpUPage[ tmpUPage.length-1 ]; 
		thisPath  = thisURL.split(thisUPage)[0];
	
	$("input[name='emstype']").bind("click", function(){
		var val = $(this).val();
		if(val == 1){
			$(".ems").hide();
		}else{
			$(".ems").show();
		}
	});
		
	//提交表单
	$("#btnSubmit").bind("click", function(event){
		event.preventDefault();
		var t            = $(this),
			id           = $("#id").val(),
			emstype      = $("input[name='emstype']:checked").val(),
			useraddr     = $("#useraddr").val(),
			usercode     = $("#usercode").val(),
			username     = $("#username").val(),
			ordermobile  = $("#ordermobile").val(),
			usernote     = $("#usernote").val(),
			tj           = true;
		
		if(emstype == 0){
			if(useraddr == ""){
				$.dialog.alert("请输入街道地址！");
				return false;
			}
			if(usercode == ""){
				$.dialog.alert("请输入邮政编码！");
				return false;
			}
		}
		if(username == ""){
			$.dialog.alert("请输入收货人姓名！");
			return false;
		}
		if(ordermobile == ""){
			$.dialog.alert("请输入联系电话！");
			return false;
		}

		if(tj){
			t.attr("disabled", true);
			$.ajax({
				type: "POST",
				url: "educationOrderEdit.php?action="+action,
				data: $(this).parents("form").serialize()+"&submit=" + encodeURI("提交"),
				dataType: "json",
				success: function(data){
					if(data.state == 100){
						$.dialog({
							fixed: true,
							title: "修改成功",
							icon: 'success.png',
							content: "修改成功！",
							ok: function(){
								location.reload();
							},
							cancel: false
						});
					}else{
						$.dialog.alert(data.info);
						t.attr("disabled", false);
					};
				},
				error: function(msg){
					$.dialog.alert("网络错误，请刷新页面重试！");
					t.attr("disabled", false);
				}
			});
		}
	});
	
});