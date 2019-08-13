$(function(){
	
	//增加一行
	$(".addLevel").bind("click", function(){
		var count = $('#levelList tr').length;
		var level = ['一','二','三','四','五','六','七','八','九','十'];
		var fxsName = $('#fenxiaoName').val() || '分销商';
		var name = count < 10 ? level[count]+'级'+fxsName : (count+1)+'级';
		var html = $("#trTemp").html().replace('#name', name);
		$(this).closest('table').find("tbody:eq(0)").append(html);
	});

	//删除
	$("table").delegate(".del", "click", function(){
		var t = $(this);
		$.dialog.confirm("确定要删除吗？", function(){
			t.closest("tr").remove();
			// var fxsName = $('#fenxiaoName').val() || '分销商';
			// $('#levelList tr').each(function(i){
			// 	var level = ['一','二','三','四','五','六','七','八','九','十'];
			// 	var name = i < 10 ? level[i]+'级'+fxsName : '';
			// 	$(this).find('.name').val(name);
			// })
		});
	});

	//表单提交
	$("#btnSubmit").bind("click", function(event){
		event.preventDefault();

		var totalFee = 0, err = false;
		$('#levelList tr').each(function(i){
			var t = $(this), r = t.find('.fee'), fee = r.val();
			if(fee == '' || fee == 0){
				r.addClass('error');
				err = true;
			}
			totalFee += parseFloat(fee);
		})
		if(err){
			return false;
		}
		if(totalFee > 100){
			$.dialog.alert('佣金比例总额不能大于100');
			return false;
		}
		
		//异步提交
		var post = $("#editform").find("input, select, textarea").serialize();

		huoniao.showTip('loading', '正在操作，请稍后···');
		huoniao.operaJson("fenxiaoConfig.php", post + "&token="+$("#token").val(), function(data){
			var state = "success";
			if(data.state != 100){
				state = "error";
			}else{
				setTimeout(function(){
					location.reload();
				}, 1000)
			}
			huoniao.showTip(state, data.info, "auto");
		});
	});
	
});