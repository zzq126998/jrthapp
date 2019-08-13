/**
 * 会员中心商城订单列表
 * by guozi at: 20151130
 */

var objId = $("#list");
$(function(){



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
		var h = $('.myitem').height();
		var allh = $('body').height();
		var w = $(window).height();
		var scroll = allh - w - h;
		if ($(window).scrollTop() > scroll && !isload) {
			atpage++;
			getList();
		};
	});



	// getList(1);

	// 删除
	objId.delegate(".cancel", "click", function(){
		var t = $(this), par = t.closest(".myitem"), id = par.attr("data-id");
		if(id){
			if(confirm('确定删除订单？删除后本订单将从订单列表消失，且不能恢复。')){
				t.siblings("a").hide();
				t.addClass("load");

				$.ajax({
					url: masterDomain+"/include/ajax.php?service=integral&action=cancelOrder&id="+id,
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
						alert("网络错误，请稍候重试！");
						t.siblings("a").show();
						t.removeClass("load");
					}
				});
			};
		}
	});

	//收货
	objId.delegate(".sh", "click", function(){
		var t = $(this), par = t.closest(".myitem"), id = par.attr("data-id");
		if(id){
			if(confirm('确定要收货吗？')){
				t.siblings("a").hide();
				t.addClass("load");

				$.ajax({
					url: masterDomain+"/include/ajax.php?service=integral&action=receipt&id="+id,
					type: "GET",
					dataType: "jsonp",
					success: function (data) {
						if(data && data.state == 100){

							t.removeClass("load").html("确认成功");
							setTimeout(function(){getList(1);}, 1000);

						}else{
							alert(data.info);
							t.siblings("a").show();
							t.removeClass("load");
						}
					},
					error: function(){
						alert("网络错误，请稍候重试！");
						t.siblings("a").show();
						t.removeClass("load");
					}
				});
			};
		}
	});

	//查看单号
	objId.delegate(".ordergood", "click", function(){
		var t = $(this), company = t.attr('data-company'), number = t.attr('data-number');
		if(company){
			$('.poppage .pop-content .num-info h3').html(company);
			$('.poppage .pop-content .num-info p').html(number);
			$('.poppage').show();
		}
	});

	//点击关闭按钮  
	$('.close-btn').bind('click',function(){
		$(this).parents('.poppage').hide()
	})
	

});

function getList(is){

  isload = true;

	if(is){
		atpage = 1;
		objId.html('');
	}

	objId.append('<p class="loading">加载中，请稍候...</p>');
	$(".pagination").hide();

	$.ajax({
		url: masterDomain+"/include/ajax.php?service=integral&action=orderList&state="+state+"&page="+atpage+"&pageSize="+pageSize,
		type: "GET",
		dataType: "jsonp",
		success: function (data) {
			if(data && data.state != 200){
				if(data.state == 101){
					$('.no-data').show();
				}else{
					
					var list = data.info.list, pageInfo = data.info.pageInfo, html = [], durl = $(".tab ul").data("url"), rUrl = $(".tab ul").data("refund"), cUrl = $(".tab ul").data("comment");

					switch(state){
						case "":
							totalCount = pageInfo.totalCount;
							break;
						case "0":
							totalCount = pageInfo.unpaid;
							break;
						case "1":
							totalCount = pageInfo.ongoing;
							break;
						case "3":
							totalCount = pageInfo.success;
							break;
						case "4":
							totalCount = pageInfo.refunded;
							break;
						case "5":
							totalCount = pageInfo.rates;
							break;
						case "6":
							totalCount = pageInfo.recei;
							break;
						case "7":
							totalCount = pageInfo.closed;
							break;
						case "10":
							totalCount = pageInfo.cancel;
							break;
					}

					var msg = totalCount == 0 ? '暂无相关信息！' : '已加载完全部信息！';
					
					//拼接列表
					if(list.length > 0){
						$('.no-data').hide();
						for(var i = 0; i < list.length; i++){
							var item       = [],
									id         = list[i].id,
									ordernum   = list[i].ordernum,
									orderstate = list[i].orderstate,
									retState   = 0,
									orderdate  = huoniao.transTimes(list[i].orderdate, 1),
									expDate    = list[i].expDate,
									payurl     = list[i].payUrl,
									common     = list[i].common,
									commonUrl  = list[i].commonUrl,
									paytype    = list[i].paytype,
									totalPayPrice  = list[i].totalPayPrice,
									store      = list[i].store,
									expcompany= list[i].expcompany,
									expnumber = list[i].expnumber,
									product    = list[i].product;

							var detailUrl = durl.replace("%id%", id);
							var refundlUrl = rUrl.replace("%id%", id);
							var commentUrl = cUrl.replace("%id%", id);
							var stateInfo = btn = "";
//							console.log(rUrl)
							switch(orderstate){
								case "0":
									stateInfo = '<p class="order-state"><span>未付款</span></p>';
									btn = '<a href="javascript:;" class="btn-nobg cancel">取消订单</a><a href="'+payurl+'" class="yellow btn-bg">立即付款</a>';
									break;
								case "1":
									stateInfo = '<p class="order-state"><span>已接单，待配送</span></p>';
									//btn = '<a href="'+refundlUrl+'" class="yellow btn-bg">申请退款</a>';
									break;
								case "3":
									stateInfo = '<p class="order-state"><span>交易成功</span></p>';
									// if(common == 1){
									// 	btn = '<a href="'+commentUrl+'" class="yellow">查看评价</a>';
									// }else{
									// 	btn = '<a href="'+commentUrl+'" class="yellow">评价</a>';
									// }

									break;
								case "4":
									stateInfo = '<p class="order-state"><span>退款中</span></p>';
									break;
								case "6":

									//申请退款
									if(retState == 1){

										//还未发货
										if(expDate == 0){
											stateInfo = '<p class="order-state"><span>未发货，申请退款中</span></p>';

										//已经发货
										}else{
											stateInfo = '<p class="order-state"><span>已发货，申请退款中</span></p>';
										}

									//未申请退款
									}else{
										stateInfo = '<p class="order-state"><span>待收货</span></p>';
										btn = '<a href="javascript:;" data-company="'+expcompany+'" data-number="'+expnumber+'" class="btn-nobg ordergood">查看单号</a><a href="javascript:;" class="yellow sh btn-bg">确认收货</a>';
									}
									break;
								case "7":
									stateInfo = '<p class="order-state"><span>退款成功</span></p>';
									break;
								case "10":
									stateInfo = '<p class="order-state"><span>关闭</span></p>';
									break;
							}

              cla = ' class="lt"';

//							html.push('<div class="item" data-id="'+list[i].id+'">');
//            html.push('<div class="domain fn-clear">积分商城<p class="order-state"><span>'+stateInfo+'</span></p></div>');
//
//							html.push('<div class="info fn-clear">');
//							html.push('<div class="imgbox fn-left">');
//							html.push('<a href="'+list[i].url+'"><img src="'+product.litpic+'" alt=""></a>');
//							html.push('</div>');
//
//
//
//							html.push('<div class="txtbox">');
//
//							html.push('<div class="title">');
//							html.push('<div>'+product.title+'</div>');
//							html.push('</div>');
//
//							html.push('<div class="number fn-clear">');
//							html.push('<p>现金:￥'+(list[i].price)+'&nbsp;+&nbsp;'+pointName+':'+list[i].point+'&nbsp;+&nbsp;运费:&yen;'+list[i].freight+'</p>');
//							html.push('<p class="fn-left">订单号：'+ordernum+'</p>');
//							html.push('<span class="fn-right">×'+list[i].count+'</span>');
//							html.push('</div>');
//
//							html.push('<div class="date">'+orderdate+'</div>');
//
//							html.push('</div>');
//							html.push('</div>');
//							html.push('<div class="opbtn">');
//							html.push('<a href="'+detailUrl+'" class="gray">订单详情</a>'+btn+'');
//							html.push('</div>');
//							html.push('</div>');
							html.push('<dl class="myitem" data-id="'+list[i].id+'">');
							html.push('<dt><a href="'+list[i].url+'"><p class="order_id"><i></i><span>'+ordernum+'</span></p><p class="order-state"><span>'+stateInfo+'</span></p></a></dt>');	
							html.push('<dd class="order-content">');
							html.push('<a href="'+detailUrl+'"><div class="fn-clear">');
							html.push('<div class="imgbox-l"><img src="'+product.litpic+'" /></div>');
							html.push('<div class="info-r"><div class="txtbox-c"><p>'+product.title+'</p></div><div class="pricebox-r"><p class="mprice">x'+list[i].count+'</p></div><p class="pjifen">'+list[i].point+'积分 + ¥'+(list[i].price)+'现金 + ¥'+list[i].freight+'运费</p></div>');
							html.push('</div></a>');
							
							html.push('<div class="btn-group" action="integral">'+btn+'</div>');
							html.push('</dd>');
							html.push('</dl>')

						}

						objId.append(html.join(""));
						$('.no-data').hide();
			            $('.loading').remove();
			            isload = false;

					}else{
						
						$('.loading').remove();
//						objId.append("<p class='loading'>"+msg+"</p>");
						if(totalCount==0){
							$('.no-data').show();
						}else{
							objId.append("<p class='loading'>"+msg+"</p>");
						}
					}



					$("#total").html(pageInfo.totalCount);
					$("#unpaid").html(pageInfo.unpaid);
					$("#unused").html(pageInfo.ongoing);
					$("#used").html(pageInfo.success);
					$("#refund").html(pageInfo.refunded);
					$("#rates").html(pageInfo.rates);
					$("#recei").html(pageInfo.recei);
					$("#closed").html(pageInfo.closed);
					$("#cancel").html(pageInfo.cancel);

				}
			}else{
				objId.html("<p class='loading'>暂无相关信息！</p>");
			}
		}
	});
}
