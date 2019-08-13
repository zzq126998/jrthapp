var objId = $("#list"), isload = true;
$(function(){

  var device = navigator.userAgent;
  if (device.indexOf('huoniao_iOS') > -1) {
    $('body').addClass('huoniao_iOS');
  }

  // 选择模块
  $('.orderbtn').click(function(){
    var t = $(this);
    if (!t.hasClass('on')) {
      if (device.indexOf('huoniao_iOS') > -1) {
    		$('.orderbox').css("top", "calc(.9rem + 20px)");
    	}else {
        $('.orderbox').animate({"top":".9rem"},200);
    	}
      $('.mask').show().animate({"opacity":"1"},200);
      $('body').addClass('fixed');
      t.addClass('on');
    }else {
      hideMask();
    }
  })

  $('.mask').click(function(){
    hideMask();
  })

  // 隐藏下拉框跟遮罩层
  function hideMask(){
    $('body').removeClass('fixed');
    $('.orderbtn').removeClass('on');
    $('.orderbox').animate({"top":"-100%"},200);
    $('.mask').hide().animate({"opacity":"0"},200);
  }



	//状态切换
	$(".tab ul li").bind("click", function(){
		var t = $(this), id = t.attr("data-id");
		if(!t.hasClass("curr") && !t.hasClass("sel")){
			state = id;
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

	// 删除
	objId.delegate(".del", "click", function(){
		var t = $(this), par = t.closest(".item"), id = par.attr("data-id");
		if(id){
			if(confirm(langData['siteConfig'][20][182])){
				t.siblings("a").hide();
				t.addClass("load");

				$.ajax({
					url: masterDomain+"/include/ajax.php?service=tuan&action=delOrder&id="+id,
					type: "GET",
					dataType: "jsonp",
					success: function (data) {
						if(data && data.state == 100){

							//删除成功后移除信息层并异步获取最新列表
							objId.html('');
							getList();

						}else{
							alert(data.info);
							t.siblings("a").show();
							t.removeClass("load");
						}
					},
					error: function(){
						alert(langData['siteConfig'][20][183]);
						t.siblings("a").show();
						t.removeClass("load");
					}
				});
			};
		}
	});

  // 展开详情
  objId.delegate(".detail", "click", function(){
    var t = $(this), p = t.closest(".item");
    if(p.hasClass("showDetail")){
      p.removeClass("showDetail");
      t.text(langData['siteConfig'][6][113]);
    }else{
      p.addClass("showDetail");
      t.text(langData['siteConfig'][16][77]);
    }
  })

  // 取消
  objId.delegate(".cancel", "click", function(){
    var t = $(this), p = t.closest(".item"), id = p.attr("data-id");
    if(t.hasClass("disabled")) return;

    if(confirm(langData['siteConfig'][20][192])){
      t.addClass("disabled");
      $.ajax({
        url: masterDomain+"/include/ajax.php?service=business&action=serviceCancelOrder&type="+type+"&id="+id,
        type: "GET",
        dataType: "jsonp",
        success: function (data) {
          if(data && data.state == 100){
            alert(data.info);
            location.reload();
          }else{
            alert(data.info);
            t.removeClass("disabled");
          }
        },
        error: function(){
          alert(langData['siteConfig'][20][183]);
          t.removeClass("disabled");
        }
      })
    }

  })

$("#list").scrollTop();

})


function getList(is){

  isload = true;

	if(is != 1){
		// $('html, body').animate({scrollTop: $(".main-tab").offset().top}, 300);
	}

	objId.append('<p class="loading">'+langData['siteConfig'][20][184]+'...</p>');
	$(".pagination").hide();


	$.ajax({
    url: masterDomain+"/include/ajax.php?service=business&action="+type+"Order&state="+state+"&page="+atpage+"&pageSize="+pageSize,
    type: "GET",
    dataType: "jsonp",
    success: function (data) {
      if(data && data.state != 200){
        if(data.state == 101){
          objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
        }else{
          var list = data.info.list, pageInfo = data.info.pageInfo;

          var msg = list.length == 0 && objId.children(".item").length == 0 ? langData['siteConfig'][20][126] : langData['siteConfig'][20][185];

          //拼接列表
          if(list.length > 0){

            eval('var html = ' + type + 'Order(list, pageInfo)');

            objId.append(html.join(""));

            // updateItemHeight();

            $('.loading').remove();
            isload = false;

          }else{
            $('.loading').remove();
            objId.append("<p class='loading'>"+msg+"</p>");
          }

        }
      }else{
        objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
      }
    }
  });


}

function updateItemHeight(){
  var style = [];
  style.push('<style id="itemHeight">');
  objId.children(".item").each(function(){
    var item = $(this), index = item.index(), box = item.find(".box");
    var height = box.height();
    var cls = "item-forheight-"+index;
    item.addClass(cls);

    style.push("."+cls+".showDetail .detail-con {height:"+height+"px}");
  })
  style.push('</style>');

  $("#itemHeight").remove();
  $("head").append(style.join("\n"));


}


function diancanOrder(list, pageInfo){
  var html = [];
  for(var i = 0; i < list.length; i++){
    var item       = [],
        id         = list[i].id,
        ordernum   = list[i].ordernum,
        orderstate = list[i].state,
        table      = list[i].table,
        people     = list[i].people,
        orderdate  = huoniao.transTimes(list[i].pubdate, 1),
        amount     = list[i].amount,
        food       = list[i].food,
        priceinfo  = list[i].priceinfo,
        note       = list[i].note,
        store      = list[i].store;

    detailUrl = '';

    var stateInfo = btn = "";

    if(orderstate == "0"){
      stateInfo = "<span class='state'>"+langData['siteConfig'][9][11]+"</span>";
    }else if(orderstate == "2" || orderstate == "3"){
      stateInfo = "<span class='state'>"+langData['siteConfig'][9][12]+"</span>";
    }else if(orderstate == 1){
      stateInfo = "<span class='state'>"+langData['siteConfig'][16][116]+"</span>";
    }

    html.push('<div class="item" data-id="'+id+'">');
    html.push('<p class="order-number fn-clear"><span class="fn-left">'+langData['siteConfig'][19][308]+'：'+ordernum+'</span><span class="time">'+orderdate+'</span></p>');
    html.push('<p class="store fn-clear">');
    html.push('<span class="title fn-clear"><a href="'+store.url+'" class="sname">'+store.title+'</a></span>'+stateInfo+'</p>');
    html.push('<div class="detail-con">');
    html.push('<div class="box">');
    html.push('<div class="tit">'+langData['siteConfig'][19][319]+'</div>');
    html.push('<div class="order-info">');
    html.push('<ul>');
    html.push('<li>'+langData['siteConfig'][16][72]+'：'+people+'</li>');
    html.push('<li>'+langData['siteConfig'][16][73]+'：'+table+'</li>');
    html.push('<li>'+langData['siteConfig'][16][74]+'：'+note+'</li>');
    html.push('</ul>');
    html.push('</div>');
    if(priceinfo){
      html.push('<div class="tit">'+langData['siteConfig'][16][75]+'</div>');
      html.push('<div class="order-info">');
      html.push('<ul>');
      for(var p = 0; p < priceinfo.length; p++){
        html.push('<li>'+langData['siteConfig'][19][691]+'：'+(echoCurrency('symbol'))+priceinfo[p].amount+'</li>');
      }
      html.push('</ul>');
      html.push('</div>');
    }
    html.push('<div class="tit">'+langData['siteConfig'][16][76]+'</div>');
    html.push('<div class="shop-list">');
    var totalCount = 0;
    for(var p = 0; p < food.length; p++){
      totalCount = totalCount + Number(food[p].count);
      html.push('<div class="shop-item">');
      html.push('<a href="javascript:;" class="fn-clear">');
      html.push('<div class="txtbox">');
      html.push('<p class="">'+food[p].title+'</p>');
      html.push('<p class="gray">'+food[p].ntitle+'</p>');
      html.push('</div>');
      html.push('<div class="pricebox">');
      html.push('<p class="price">'+(echoCurrency('symbol'))+food[p].price+'</p>');
      html.push('<p class="mprice">×'+food[p].count+'</p>');
      html.push('</div>');
      html.push('</a>');
      html.push('</div>');
    }
    html.push('</div>');
    html.push('</div>');
    html.push('</div>');
    html.push('<p class="sum">'+totalCount+langData['siteConfig'][19][692]+'<font class="blue">'+echoCurrency("symbol")+amount+'</font></p>');
    html.push('<p class="btns fn-clear"><a href="javascript:;" class="blueBtn detail">'+langData['siteConfig'][19][313]+'</a>'+btn+'</p>');
    html.push('</div>');

  }

  $("#total").html(pageInfo.totalCount);
  $("#totalGray").html(pageInfo.totalGray);
  $("#totalAudit").html(pageInfo.totalAudit);

  return html;

}

function dingzuoOrder(list, pageInfo){
  var html = [];
  for(var i = 0; i < list.length; i++){
    var item       = [],
        id         = list[i].id,
        ordernum   = list[i].ordernum,
        orderstate = list[i].state,
        baofang    = list[i].baofang,
        table      = list[i].table,
        people     = list[i].people,
        orderdate  = huoniao.transTimes(list[i].pubdate, 1),
        time       = huoniao.transTimes(list[i].time, 1),
        contact    = list[i].contact,
        note       = list[i].note,
        sex        = list[i].sex,
        name       = list[i].name,
        store      = list[i].store;

    detailUrl = '';

    var stateInfo = btn = "";

    if(orderstate == "0"){
      stateInfo = "<span class='state'>"+langData['siteConfig'][9][11]+"</span>";
      btn = '<a href="javascript:;" class="cancel">'+langData['siteConfig'][6][12]+'</a>';
    }else if(orderstate == "1"){
      stateInfo = "<span class='state'>"+langData['siteConfig'][9][12]+"</span>";
    }else if(orderstate == "2"){
      stateInfo = "<span class='state state_cancel'>"+langData['siteConfig'][9][13]+"</span>";
    }

    html.push('<div class="item" data-id="'+id+'">');
    html.push('<p class="order-number fn-clear"><span class="fn-left">'+langData['siteConfig'][19][308]+'：'+ordernum+'</span><span class="time">'+orderdate+'</span></p>');
    html.push('<p class="store fn-clear">');
    html.push('<span class="title fn-clear"><em class="sname">'+store.title+'</em></span>'+stateInfo+'</p>');
    html.push('<div class="detail-con">');
    html.push('<div class="box">');
    html.push('<div class="tit">'+langData['siteConfig'][19][319]+'</div>');
    html.push('<div class="order-info">');
    html.push('<ul>');
    html.push('<li>'+langData['siteConfig'][19][642]+'：'+name+' '+(sex == 0 ? langData['siteConfig'][19][693] : langData['siteConfig'][19][694])+'</li>');
    html.push('<li>'+langData['siteConfig'][3][1]+'：'+contact+'</li>');
    html.push('<li>'+langData['siteConfig'][16][72]+'：'+people+'人</li>');
    html.push('<li>'+langData['siteConfig'][16][73]+'：'+(baofang == 1 ? langData['siteConfig'][19][695] : table)+'</li>');
    html.push('<li>'+langData['siteConfig'][19][384]+'：'+time+'</li>');
    html.push('</ul>');
    html.push('</div>');
    html.push('</div>');
    html.push('</div>');
    html.push('<p class="btns fn-clear"><a href="javascript:;" class="blueBtn detail">'+langData['siteConfig'][19][313]+'</a>'+btn+'</p>');
    html.push('</div>');

  }

  $("#total").html(pageInfo.totalCount);
  $("#totalGray").html(pageInfo.totalGray);
  $("#totalAudit").html(pageInfo.totalAudit);
  $("#totalCancel").html(pageInfo.totalCancel);

  return html;

}

function paiduiOrder(list, pageInfo){
  var html = [];
  for(var i = 0; i < list.length; i++){
    var item       = [],
        id         = list[i].id,
        ordernum   = list[i].ordernum,
        orderstate = list[i].state,
        people     = list[i].people,
        table      = list[i].table,
        cancel_bec = list[i].cancel_bec,
        orderdate  = huoniao.transTimes(list[i].pubdate, 1),
        user       = list[i].user,
        before     = list[i].before,
        store      = list[i].store;

    detailUrl = '';

    var stateInfo = btn = "";

    if(orderstate == "0"){
      stateInfo = "<span class='state state_ing'>"+langData['siteConfig'][7][5]+" "+langData['siteConfig'][7][5].replace('1', before)+"</span>";
      btn = '<a href="javascript:;" class="cancel">'+langData['siteConfig'][6][12]+'</a>';
    }else if(orderstate == "1"){
      stateInfo = "<span class='state'>"+langData['siteConfig'][19][507]+"</span>";
    }else if(orderstate == "2"){
      stateInfo = "<span class='state state_cancel'>"+langData['siteConfig'][9][13]+"</span>";
    }


    html.push('<div class="item" data-id="'+id+'">');
    html.push('<p class="order-number fn-clear"><span class="fn-left">'+langData['siteConfig'][19][308]+'：'+ordernum+'</span><span class="time">'+orderdate+'</span></p>');
    html.push('<p class="store fn-clear">');
    html.push('<span class="title fn-clear"><em class="sname">'+store.title+'</em></span>'+stateInfo+'</p>');
    html.push('<div class="detail-con">');
    html.push('<div class="box">');
    html.push('<div class="tit">'+langData['siteConfig'][19][319]+'</div>');
    html.push('<div class="order-info">');
    html.push('<ul>');
    html.push('<li>'+langData['siteConfig'][16][72]+'：'+people+'</li>');
    html.push('<li>'+langData['siteConfig'][19][487]+'：'+table+'</li>');
    html.push('</ul>');
    html.push('</div>');
    html.push('</div>');
    html.push('</div>');
    html.push('<p class="btns fn-clear"><a href="javascript:;" class="blueBtn detail">'+langData['siteConfig'][19][313]+'</a>'+btn+'</p>');
    html.push('</div>');

  }

  $("#total").html(pageInfo.totalCount);
  $("#totalGray").html(pageInfo.totalGray);
  $("#totalAudit").html(pageInfo.totalAudit);
  $("#totalCancel").html(pageInfo.totalCancel);

  return html;

}

function maidanOrder(list, pageInfo){
  var html = [];
  for(var i = 0; i < list.length; i++){
    var item       = [],
        id           = list[i].id,
        ordernum     = list[i].ordernum,
        orderstate   = list[i].state,
        amount       = list[i].amount,
        amount_alone = list[i].amount_alone,
        youhui_value = list[i].youhui_value,
        payamount    = list[i].payamount,
        paytype      = returnPaytype(list[i].paytype),
        orderdate    = huoniao.transTimes(list[i].pubdate, 1),
        paydate      = huoniao.transTimes(list[i].paydate, 1),
        store        = list[i].store;

    var stateInfo = btn = '';

    if(orderstate == "0"){
      btn = '<a href="'+masterDomain +'/include/ajax.php?service=business&action=pay&ordernum='+ordernum+(appInfo.device != '' ? '&app=1' : '')+'">'+langData['siteConfig'][6][64]+'</a>';
    }

    html.push('<div class="item" data-id="'+id+'">');
    html.push('<p class="order-number fn-clear"><span class="fn-left">'+langData['siteConfig'][19][308]+'：'+ordernum+'</span><span class="time">'+orderdate+'</span></p>');
    html.push('<p class="store fn-clear">');
    html.push('<span class="title fn-clear"><em class="sname">'+store.title+'</em></span><span class="state">'+(echoCurrency('symbol'))+payamount+'</span></p>');
    html.push('<div class="detail-con">');
    html.push('<div class="box">');
    html.push('<div class="tit">'+langData['siteConfig'][19][319]+'</div>');
    html.push('<div class="order-info">');
    html.push('<ul>');
    html.push('<li>'+langData['siteConfig'][19][512]+'：'+(echoCurrency('symbol'))+amount+'</li>');
    if(youhui_value > 0){
      html.push('<li>'+langData['siteConfig'][19][697]+'：'+langData['siteConfig'][19][698]+youhui_value+'%</li>');
      html.push('<li>'+langData['siteConfig'][19][513]+'：'+(echoCurrency('symbol'))+amount_alone+'</li>');
    }
    html.push('<li>'+langData['siteConfig'][19][514]+'：'+(echoCurrency('symbol'))+payamount+'</li>');
    html.push('<li>'+langData['siteConfig'][19][52]+'：'+paytype+'</li>');
    html.push('</ul>');
    html.push('</div>');
    html.push('</div>');
    html.push('</div>');
    html.push('<p class="btns fn-clear"><a href="javascript:;" class="blueBtn detail">'+langData['siteConfig'][19][313]+'</a>'+btn+'</p>');
    html.push('</div>');

  }

  $("#total").html(pageInfo.totalCount);
  $("#totalGray").html(pageInfo.totalGray);
  $("#totalAudit").html(pageInfo.totalAudit);

  return html;

}

function returnPaytype(type){
  var paytypeArr = [];
  paytypeArr['alipay'] = langData['siteConfig'][19][699];
  paytypeArr['wxpay'] = langData['siteConfig'][19][700];
  paytypeArr['money'] = langData['siteConfig'][19][328];
  paytypeArr['point'] = langData['siteConfig'][19][701];
  paytypeArr['unionpay'] = langData['siteConfig'][19][702];
  paytypeArr['paypal'] = langData['siteConfig'][19][703];
  paytypeArr['tenpay'] = langData['siteConfig'][19][704];

  var r = [];
  var typeArr = type.split(',');
  for(var m = 0; m < typeArr.length; m++){
    for(var i in paytypeArr){
      if(i == typeArr[m]){
        r.push(paytypeArr[i]);
        break;
      }
    }
  }
  return r.join(",");
}
