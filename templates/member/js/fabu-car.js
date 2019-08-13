$(function(){
	var mold_ = mold;
	function getEditor(id){
		ue = UE.getEditor(id, {toolbars: [['fullscreen', 'undo', 'redo', '|', 'fontfamily', 'fontsize', '|', 'forecolor', 'bold', 'italic', 'underline', '|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'simpleupload', '|', 'insertimage', '|', 'insertorderedlist', 'insertunorderedlist', '|', 'link', 'unlink']], initialStyle:'p{line-height:1.5em; font-size:13px; font-family:microsoft yahei;}'});
		ue.on("focus", function() {ue.container.style.borderColor = "#999"});
		ue.on("blur", function() {ue.container.style.borderColor = ""})
	}

	//getEditor("body");

	//选择分类
	$("#selType").delegate("a", "click", function(){
		var title = $(this).text();
		if($(this).text() != langData['siteConfig'][22][96] && $(this).attr("data-id") != $("#brand").val()){
			$(this).closest(".sel-group").nextAll(".sel-group").remove();
			var id = $(this).attr("data-id");
			getChildType(id);
			getChildModel(id, title);
		}
	});

	function getChildModel(id, title){
		if(!id) return;
		$.ajax({
			url: "/include/ajax.php?service=car&action=carmodel&pageSize=9999&brand="+id,
			type: "GET",
			dataType: "jsonp",
			success: function (data) {
				if(data && data.state == 100){
					var list = data.info.list, html = [];
					$("#model").html('');

					for(var i = 0; i < list.length; i++){
						html.push('<option value="'+list[i].id+'">'+list[i].title+'</option>');
					}
					if(html){
						$("#title").val(title);
						$("#model").html('<option value="0">'+langData['siteConfig'][7][2]+'</option>' + html.join(""));
						$("#carmodel").show();
					}
					
				}else{
					$("#title").val(title);
					$("#model").html('');
					$("#carmodel").hide();
				}
			},
			error: function(){
				$("#model").html('');
				$("#carmodel").hide();
			}
		});
	}

	//获取子级分类
	function getChildType(id){
		if(!id) return;
		$.ajax({
			url: "/include/ajax.php?service=car&action=type&type="+id,
			type: "GET",
			dataType: "json",
			success: function (data) {
				if(data && data.state == 100){
					var list = data.info, html = [];

					html.push('<div class="sel-group" data-title="'+langData['siteConfig'][20][41]+'">');   //请选择所属分类
					html.push('<button class="sel">'+langData['siteConfig'][22][96]+'<span class="caret"></span></button>');  //不限
					html.push('<ul class="sel-menu">');
					html.push('<li><a href="javascript:;" data-id="'+id+'">'+langData['siteConfig'][22][96]+'</a></li>'); //不限
					for(var i = 0; i < list.length; i++){
						html.push('<li><a href="javascript:;" data-id="'+list[i].id+'">'+list[i].typename+'</a></li>');
					}
					html.push('</ul>');
					html.push('</div>');

					$("#brand").before(html.join(""));

				}
			}
		});
	}

	$("#fabuForm").delegate("#model", "change", function(){
		var t = $(this), id = t.val(), title = t.find("option:selected").text();
		var brand = $("#selType button").text();
		if(id!=0){
			$("#title").val(brand + ' ' +title);
		}else{
			$("#title").val(brand);
		}
	});

	//上牌时间
	$("#cardtime").click(function(){
		WdatePicker({
			el: 'cardtime',
			doubleCalendar: true,
			isShowClear: false,
			isShowOK: false,
			isShowToday: false,
			minDate: '%y-%M-{%d+1}',
			onpicking: function(dp){

			}
		});
	});

	//年检到期时间
	$("#njendtime").click(function(){
		WdatePicker({
			el: 'njendtime',
			doubleCalendar: true,
			isShowClear: false,
			isShowOK: false,
			isShowToday: false,
			minDate: '%y-%M-{%d+1}',
			onpicking: function(dp){

			}
		});
	});

	//交强险到期时间
	$("#jqxendtime").click(function(){
		WdatePicker({
			el: 'jqxendtime',
			doubleCalendar: true,
			isShowClear: false,
			isShowOK: false,
			isShowToday: false,
			minDate: '%y-%M-{%d+1}',
			onpicking: function(dp){

			}
		});
	});

	//商业险到期时间
	$("#businessendtime").click(function(){
		WdatePicker({
			el: 'businessendtime',
			doubleCalendar: true,
			isShowClear: false,
			isShowOK: false,
			isShowToday: false,
			minDate: '%y-%M-{%d+1}',
			onpicking: function(dp){

			}
		});
	});

	// 分期
	$('#box_staging span').click(function(){
		var t = $(this), val = t.data('id');
		if(t.hasClass('curr')) return;
		if(val == 1){
			$("#downpayment1").show();
		}else{
			$("#downpayment1").hide();
		}
	})
	

	//提交发布
	$("#submit").bind("click", function(event){
		$('#addr').val($('#selAddr .addrBtn').attr('data-id'));
        var addrids = $('#selAddr .addrBtn').attr('data-ids').split(' ');
        $('#cityid').val(addrids[0]);
		event.preventDefault();

		var     t           = $(this),
				title       = $("#title"),
				litpic      = $("#litpic").val(),
				brand       = $("#brand").val(),
				carsystem   = $("#carsystem").val(),
				model       = $("#model").val(),
				staging     = $("#mold").val();

		if(t.hasClass("disabled")) return;

		var offsetTop = 0;

		//分类
		if(brand == "" || brand == "0"){
			$.dialog.alert(langData['car'][7][38]);   
			//offsetTop = offsetTop == 0 ? $("#body").offset().top : offsetTop;
		}

		/* if(model == "" || model == "0"){
			$.dialog.alert(langData['siteConfig'][33][10]);   
			offsetTop = offsetTop == 0 ? $("#body").offset().top : offsetTop;
		} */

        //验证城市
        if(cityid == "" || cityid == 0){
            var dl = $("#cityid").closest("dl");
            dl.find(".tip-inline").removeClass().addClass("tip-inline error").html("<s></s>"+$("#cityid").attr("data-title"));
            offsetTop = offsetTop == 0 ? dl.offset().top : offsetTop;
        }

        //验证标题
		var exp = new RegExp("^" + titleRegex + "$", "img");
		if(!exp.test(title.val())){
			title.siblings(".tip-inline").removeClass().addClass("tip-inline error").html("<s></s>"+titleErrTip);
			offsetTop = title.offset().top;
		}

		if(litpic == ''){
			$.dialog.alert(langData['siteConfig'][33][42]);   
			offsetTop = offsetTop == 0 ? $("#body").offset().top : offsetTop;
		}

		if(staging == 1){
			$downpayment = $("#downpayment").find("option:selected").val();
			if($downpayment==0){
				$.dialog.alert(langData['siteConfig'][33][25]);  
			}
			offsetTop = offsetTop == 0 ? $("#body").offset().top : offsetTop;
		}

		//ue.sync();

		if(offsetTop){
			$('html, body').animate({scrollTop: offsetTop - 5}, 300);
			return false;
		}

		var form = $("#fabuForm"), action = form.attr("action"), url = form.attr("data-url");
		data = form.serialize();

		t.addClass("disabled").html(langData['siteConfig'][6][35]+"...");  //提交中

		$.ajax({
			url: action,
			data: data,
			type: "POST",
			dataType: "json",
			success: function (data) {
				if(data && data.state == 100){

					fabuPay.check(data, url, t);

				}else{
					$.dialog.alert(data.info);
					t.removeClass("disabled").html(langData['siteConfig'][33][4]);   //立即投稿
					$("#verifycode").click();
				}
			},
			error: function(){
				$.dialog.alert(langData['siteConfig'][20][183]);//网络错误，请稍候重试！
				t.removeClass("disabled").html(langData['siteConfig'][33][4]); //立即投稿
				$("#verifycode").click();
			}
		});


	});

});
