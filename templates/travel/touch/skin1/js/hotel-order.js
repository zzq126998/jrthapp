$(function(){
	//入住时间显示
	$('.select-time').hotelDate();
	
	//增加房间数目
	var i = $('.num_room span').text()*1;
	$('.add').click(function(){
		i=i+1;
		$('.num_room span').text(i);
		$('.person').append('<p class="person_name"><input type="text" name="person_name" placeholder="'+langData['travel'][7][11]+'"/></p>');   //入住人姓名   //新增入住人
		priceCalculator();
	});

	$('.jian').click(function(){
		
		if(i<=1){
			alert(langData['travel'][7][59]);   //不能再减了
			return 0;
		}
		i=i-1;
		$('.num_room span').text(i);
		$("p.person_name:last").remove(); //减少入住人

		priceCalculator();
	});
	
	//计算总价 包含特殊时刻
	priceCalculator();

	function priceCalculator(){
		var peoplenum = $('.jian').siblings('span').text();//人数
		peoplenum = peoplenum ? parseInt(peoplenum) : 1;
		// var walktime  = $(".datebox .date_chose").find('h3').data('id');//日期
		var walktime = $(".entertime").text();
		walktime = walktime.replace("/", '-').replace("/", '-');
		var pricePay = price;//原来的价格
		walktime = new Date(walktime);
		
		var priceArr = [];
		if(specialtimejson!=''){
			var specialtime = JSON.parse(specialtimejson);//特殊时刻
			if(specialtime.length>0){
				for(var o in specialtime){
					var stime = new Date(specialtime[o].stime);
					var etime = new Date(specialtime[o].etime);
					if(walktime.getTime() >= stime.getTime() && walktime.getTime() <= etime.getTime()){
						priceArr.push(specialtime[o].price);
					}
				}
			}
		}
		if (priceArr.length == 0){
			pricePay = (pricePay * peoplenum).toFixed(2);
		}else{
			pricePay = (priceArr.pop() * peoplenum).toFixed(2);
		}
		$('.price_all em').html(pricePay);
		$('.detail_all em').html(pricePay);
	}
    
    //提交
    $('.right_btn').click(function(){
		var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			window.location.href = masterDomain+'/login.html';
			return false;
		}
		
		var tel = $('#tel').val();
		var person = [];
		var tel_d = /^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/;
		if(tel==''){
			alert(langData['travel'][7][60]);   // 请输入手机号
			return 0;
		}else if(!tel.match(tel_d)){
			alert(langData['travel'][7][61]);   //请输入正确的手机号
			return 0;
		}else if($('.person input').val()==''){
			alert(langData['travel'][7][62]); //请输入入住人
			return 0;
		}

		var data = [];
		data.push('proid=' + $("#proid").val());
		data.push('type=' + type);
		data.push('procount=' + $('.jian').siblings('span').text());

		var person = [];
		$(".person_name input").each(function(){
			if($(this).val()!=''){
				person.push($(this).val());
			}
		});
		data.push('people=' + person.join('|'));
		data.push('contact=' + $("#tel").val());

		var walktime = $(".entertime").text();
		walktime = walktime.replace("/", '-').replace("/", '-');

		var departuretime = $(".leavetime").text();
		departuretime = departuretime.replace("/", '-').replace("/", '-');

		data.push('walktime=' + walktime);
		data.push('departuretime=' + departuretime);
		
		$.ajax({
			url: masterDomain + '/include/ajax.php?service=travel&action=deal',
			data: data.join("&"),
			type: "GET",
			dataType: "jsonp",
			success: function (data) {
				if(data && data.state == 100){
					if(device.indexOf('huoniao') > -1) {
						setupWebViewJavascriptBridge(function (bridge) {
							bridge.callHandler('pageClose', {}, function (responseData) {
							});
						});
					}

					location.href = data.info;
				}else{
					alert(data.info);
				}
			},
			error: function(){
				alert(langData['siteConfig'][20][183]);
				t.removeClass("disabled").html(langData['shop'][1][8]);
			}
		});
		
	});
	
	//价格明细
	$('.price_all a').click(function(){
		$('.mask').show();
		$('.detail_price').animate({'bottom':'0'},200)
	});

	$('.detail_price h2>i,.mask').click(function(){
		$('.mask').hide();
		$('.detail_price').animate({'bottom':'-20rem'},200)	
	});


})
