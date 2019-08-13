$(function(){

	var listArr = [];

	//商品属性选择
	var SKUResult = {};  //保存组合结果
	var mpriceArr = [];  //市场价格集合
	var priceArr = [];   //现价集合
	var totalStock = 0;  //总库存
	var skuObj = $(".size-box .size-count"),
			mpriceObj = $(".size-box .size-selected .price .mprice"),          //原价
			priceObj = $(".size-box .size-selected p.price b"),    //现价
			stockObj = $(".size-box .count b"),           				//库存
			disabled = "disabled",                               //不可选
			selected = "selected";                               //已选

	// 幻灯片
	new Swiper('.swiper-container', {pagination: '.pagination', slideClass: 'slideshow-item', paginationClickable: true, loop: true, autoplay:2000, autoplayDisableOnInteraction : false});

  $('.footer .top').click(function(){
      $(window).scrollTop(0);
  })



	// 点击加入购物车选择颜色、尺码
	var myscroll = null;
	$('body').delegate('.ter', 'touchend', function(){
		var t = $(this), li = t.closest('li'), id = li.attr('data-id');
		//验证登录
		var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			location.href = '/login.html';
			return false;
		}

		var specification = listArr[id].specification, specificationArr = listArr[id].specificationArr,
				imgSrc = li.find('.pro-img').find('img').attr('src');
		$('.guige em').text();
		li.addClass('layer').siblings('li').removeClass('layer');
		if (specification != "") {
			$('.mask').css('display', 'block');
			$('.size-box').css('bottom', '0');

			//商品属性选择
			SKUResult = {};  //保存组合结果
			mpriceArr = [];  //市场价格集合
			priceArr = [];   //现价集合
			totalStock = 0;  //总库存
			var skuObj = $(".size-box .size-count"),
					mpriceObj = $(".size-box .size-selected .price .mprice"),          //原价
					priceObj = $(".size-box .size-selected p.price b"),    //现价
					stockObj = $(".size-box .count b"),           				//库存
					disabled = "disabled",                               //不可选
					selected = "selected";                               //已选

			init.start(id);

			if(myscroll == null){
				myscroll = new iScroll("scrollbox", {vScrollbar: false,});
			}

			$('.size-img img').attr('src', imgSrc);
			return false;

		}else {
			var cartNum = Number($('.total-cart em').text()), detailUrl = $('.command-list-con .layer a').attr('href'),
					layerId = $('.command-list-con .layer').attr('data-id'), detailTitle = $('.command-list-con .layer h4').text();
			var t = $(this).offset();
			var offset = $(".ficon3").offset();
			var img = $(this).closest("li").find('img').attr('src'); //获取当前点击图片链接
			var flyer = $('<img class="flyer-img" src="' + img + '">'); //抛物体对象
			var num=parseInt($(".shop-count").text());
			var scH = $(window).scrollTop();

			flyer.fly({
				start: {
					left: t.left - 50, //抛物体起点横坐标
					top: t.top - scH - 30, //抛物体起点纵坐标
					width: 30,
					height: 30
				},
				end: {
					left: offset.left + 12,//抛物体终点横坐标
          top: offset.top-scH, //抛物体终点纵坐标
          width:15,
          height:15
				},
				onEnd: function() {
					this.destroy(); //销毁抛物体
					$('.total-cart').addClass('swing');

					setTimeout(function(){$('.total-cart em').removeClass('swing')},300);
				}
			});

			var t=''; //该商品的属性编码 以“-”链接个属性
			$(".sys_item .selected").each(function(){
				var y=$(this).attr("attr_id");
				t=t+"-"+y;
			})
			var t=t.substr(1);

			//操作购物车
			var data = [];
			data.id = layerId;
			data.specation = t;
			data.count = 1;
			data.title = detailTitle;
			data.url = detailUrl;
			shopInit.add(data);

		}
	})

	// 关闭规格弹出层
	$('.mask, .closed').click(function(){
		$('.mask').hide();
		$('.size-box').css('bottom', '-200%');
	})

	// 选择规格点击确定
	$('.size-confirm a').click(function(){
		var count = Number($('.shop-count').text()), cart = Number($('.total-cart em').text());
		$('.total-cart em').text(count + cart);
		var winWidth = $(window).width(), winHeight = $(window).height(), cartNum = Number($('.total-cart em').text()),
				layerId = $('.command-list-con .layer').attr('data-id'), detailTitle = $('.command-list-con .layer h3').text(),
				detailUrl = $('.command-list-con .layer a').attr('href');

		//加入购物车及加入购物车判断
		var $buy=$(this),$li=$(".sys_item"),$ul=$(".size-html"),n=$li.length;
		if($buy.hasClass("disabled")) return false;
		var len=$li.length;
		var spValue=parseInt($(".size-selected .count b").text()),
				inputValue=parseInt($(".shop-count").text());

		if($(".sys_item dd").find("a.selected").length==n && inputValue<=spValue){

			//加入购物车动画
 			$(".size-html").removeClass("on");
 			var offset = $(".cartBox").offset();
			var detailThumb = $('.size-img img').attr('src');
      var flyer = $('<img class="flyer-img" src="' + detailThumb + '">'); //抛物体对象
     	var t = $('.command-list-con .layer .ter').offset();
			var scH = $(window).scrollTop();

			flyer.fly({
				start: {
					left: t.left - 50, //抛物体起点横坐标
					top: t.top - scH - 30, //抛物体起点纵坐标
					width: 30,
					height: 30
				},
				end: {
					left: offset.left + 12,//抛物体终点横坐标
          top: offset.top-scH, //抛物体终点纵坐标
					width: 15,
					height: 15

				},
				onEnd: function() {
					this.destroy(); //销毁抛物体
					$('.total-cart').addClass('swing');
					setTimeout(function(){$('.total-cart em').removeClass('swing')},300);
				}
			});

			$('.mask').hide();
			$('.size-box').css('bottom', '-200%');

			var t=''; //该商品的属性编码 以“-”链接个属性
			$(".sys_item").each(function(){
				var $t=$(this),y=$t.find("a.selected").attr("attr_id");
				 t=t+"-"+y;
			})
			t=t.substr(1);

			var num=parseInt($(".shop-count").text());

			//操作购物车
			var data = [];
			data.id = layerId;
			data.specation = t;
			data.count = num;
			data.title = detailTitle;
			data.url = detailUrl;
			shopInit.add(data);

		}else{
			$ul.addClass("on");
			$('.guige-tips').show();
			// setTimeout(function(){$('.guige-tips').hide();}, 1000);
		}

	})

	// 选择规格增加数量
	$('.sizeBtn .add').click(function(){
		var stockx = parseInt($(".size-selected .count b").text()),n=$(".sys_item").length;
		var $c=$(this),value;
		value=parseInt($c.siblings(".shop-count").html());
		if(value<stockx){
			value=value+1;
			$c.siblings(".shop-count").html(value);
			if(value>=stockx){}
			var spValue=parseInt($(".size-selected .count b").text()),
			inputValue=parseInt($(".shop-count").val());
			if($(".color-info-ul ul").find("li.active").length==n && inputValue<spValue){
				// $(".singleGoods dd.info ul").removeClass("on");
			}
		}else{
			alert(langData['shop'][2][23])
		}



	})

	// 选择规格减少数量
	$('.sizeBtn .reduce').click(function(){
		var stockx = parseInt($(".size-selected .count b").text()),n=$(".sys_item").length;
		var $c=$(this),value;
		value=parseInt($c.siblings(".shop-count").html());
		if(value>1){
			value=value-1;
			$c.siblings(".shop-count").html(value);
			if(value<=stockx){}
			var spValue=parseInt($(".size-selected .count b").text()),
			inputValue=parseInt($(".shop-count").val());
			if($(".color-info-ul ul").find("li.active").length==n && inputValue<=spValue){
			}
		}else{
			alert(langData['shop'][2][12])
		}
	})

	// 加入购物车的商品选择规格框
	var init = {

		//拼接HTML代码
		start: function(id){
			var specification = listArr[id].specification, specificationArr = listArr[id].specificationArr, sizeHtml = [];
			for (var i = 0; i < specificationArr.length; i++) {
				sizeHtml.push('<dl class="sys_item"><dt>'+specificationArr[i].typename+'</dt>');
				var itemArr = specificationArr[i].item;
				sizeHtml.push('<dd class="fn-clear">');
				for (var j = 0; j < itemArr.length; j++) {
					sizeHtml.push('<a href="javascript:;" class="sku" attr_id="'+itemArr[j].id+'">'+itemArr[j].name+'</a>');
				}
				sizeHtml.push('</dd>');
				sizeHtml.push('</dl>');
			}
			$('.size-html').html(sizeHtml.join(""));
			init.initSKU(id);
		}


		//默认值
		,defautx: function(){

			//市场价范围
			var maxPrice = Math.max.apply(Math, mpriceArr);
			var minPrice = Math.min.apply(Math, mpriceArr);
			mpriceObj.html(echoCurrency('symbol')+(maxPrice > minPrice ? minPrice.toFixed(2) + "-" + maxPrice.toFixed(2) : maxPrice.toFixed(2)));

			//现价范围
			var maxPrice = Math.max.apply(Math, priceArr);
			var minPrice = Math.min.apply(Math, priceArr);
			priceObj.html(echoCurrency('symbol')+(maxPrice > minPrice ? minPrice.toFixed(2) + "-" + maxPrice.toFixed(2) : maxPrice.toFixed(2)));

			//总库存

			stockObj.text(totalStock);

			//设置属性状态
			$('.sku').each(function() {
				SKUResult[$(this).attr('attr_id')] ? $(this).removeClass(disabled) : $(this).addClass(disabled).removeClass(selected);
			})

		}

		//初始化得到结果集
		,initSKU: function(id) {
			var i, j, skuKeys = listArr[id].specification;

			for(i = 0; i < skuKeys.length; i++) {
				var _skuKey = skuKeys[i].spe.split("-");	//一条SKU信息value
				var skuKey = _skuKey.join(";");  //一条SKU信息key
				var sku = skuKeys[i].price;	//一条SKU信息value
				var skuKeyAttrs = skuKey.split(";");  //SKU信息key属性值数组
				var len = skuKeyAttrs.length;

				//对每个SKU信息key属性值进行拆分组合
				var combArr = init.arrayCombine(skuKeyAttrs);

				for(j = 0; j < combArr.length; j++) {
					init.add2SKUResult(combArr[j], sku);
				}

				mpriceArr.push(sku[0]);
				priceArr.push(sku[1]);
				totalStock += parseInt(sku[2]);

				//结果集接放入SKUResult
				SKUResult[skuKey] = {
					stock: sku[2],
					prices: [sku[1]],
					mprices: [sku[0]]
				}
			}

			init.defautx();
		}

		//把组合的key放入结果集SKUResult
		,add2SKUResult: function(combArrItem, sku) {
			var key = combArrItem.join(";");
			//SKU信息key属性
			if(SKUResult[key]) {
				SKUResult[key].stock = parseInt(SKUResult[key].stock) + parseInt(sku[2]);
				SKUResult[key].prices.push(sku[1]);
				SKUResult[key].mprices.push(sku[0]);
			} else {
				SKUResult[key] = {
					stock: sku[2],
					prices: [sku[1]],
					mprices: [sku[0]]
				};
			}
		}

		//从数组中生成指定长度的组合
		,arrayCombine: function(targetArr) {
			if(!targetArr || !targetArr.length) {
				return [];
			}

			var len = targetArr.length;
			var resultArrs = [];

			// 所有组合
			for(var n = 1; n < len; n++) {
				var flagArrs = init.getFlagArrs(len, n);
				while(flagArrs.length) {
					var flagArr = flagArrs.shift();
					var combArr = [];
					for(var i = 0; i < len; i++) {
						flagArr[i] && combArr.push(targetArr[i]);
					}
					resultArrs.push(combArr);
				}
			}

			return resultArrs;
		}

		//获得从m中取n的所有组合
		,getFlagArrs: function(m, n) {
			if(!n || n < 1) {
				return [];
			}

			var resultArrs = [],
				flagArr = [],
				isEnd = false,
				i, j, leftCnt;

			for (i = 0; i < m; i++) {
				flagArr[i] = i < n ? 1 : 0;
			}

			resultArrs.push(flagArr.concat());

			while (!isEnd) {
				leftCnt = 0;
				for (i = 0; i < m - 1; i++) {
					if (flagArr[i] == 1 && flagArr[i+1] == 0) {
						for(j = 0; j < i; j++) {
							flagArr[j] = j < leftCnt ? 1 : 0;
						}
						flagArr[i] = 0;
						flagArr[i+1] = 1;
						var aTmp = flagArr.concat();
						resultArrs.push(aTmp);
						if(aTmp.slice(-n).join("").indexOf('0') == -1) {
							isEnd = true;
						}
						break;
					}
					flagArr[i] == 1 && leftCnt++;
				}
			}
			return resultArrs;
		}

		// 将已选展示出来
		,getSelected: function(){
			var selectedHtml = [];
			$('.size-html .sys_item').each(function(){
				var t = $(this), selected = t.find('.selected').text();
				if (selected) {
					selectedHtml.push('\"'+selected+'\"');
				}
				$('.guige em').text(selectedHtml.join(","));
			})
		}

	}


	//点击事件
	$('.sku').each(function() {
		var self = $(this);
		var attr_id = self.attr('attr_id');
		if(!SKUResult[attr_id]) {
			self.addClass(disabled);
		}
	})
	$('body').delegate('.sku', 'click', function() {

		var self = $(this);


		if(self.hasClass(disabled)) return;

		//选中自己，兄弟节点取消选中
		self.toggleClass(selected).siblings("a").removeClass(selected);
		var spValue=parseInt($(".size-box .count b").text()),
		inputValue=parseInt($(".shop-count").text());
		var n=$(".size-html .sys_item").length;

		if($(".size-html .sys_item").find("a.selected").length==n && inputValue<spValue){
			$(".size-html").removeClass("on");
			$('.guige-tips').hide();
		}

		//已经选择的节点
		var selectedObjs = $('.'+selected);
		init.getSelected();

		if(selectedObjs.length) {
			//获得组合key价格
			var selectedIds = [];
			selectedObjs.each(function() {
				selectedIds.push($(this).attr('attr_id'));
			});
			selectedIds.sort(function(value1, value2) {
				return parseInt(value1) - parseInt(value2);
			});
			var len = selectedIds.length;

			var prices = SKUResult[selectedIds.join(';')].prices;
			var maxPrice = Math.max.apply(Math, prices);
			var minPrice = Math.min.apply(Math, prices);
			priceObj.html(echoCurrency('symbol')+(maxPrice > minPrice ? minPrice.toFixed(2) + "-" + maxPrice.toFixed(2) : maxPrice.toFixed(2)));


			var mprices = SKUResult[selectedIds.join(';')].mprices;
			var maxPrice = Math.max.apply(Math, mprices);
			var minPrice = Math.min.apply(Math, mprices);
			mpriceObj.html(echoCurrency('symbol')+(maxPrice > minPrice ? minPrice.toFixed(2) + "-" + maxPrice.toFixed(2) : maxPrice.toFixed(2)));


			stockObj.text(SKUResult[selectedIds.join(';')].stock);

			//获取input的值
			var inputValue=parseInt($(".shop-count").val());
			// var inputTip=$(".singleGoods dd cite");

			if(inputValue>SKUResult[selectedIds.join(';')].stock){
				alert(langData['shop'][2][24]);
			}


			//用已选中的节点验证待测试节点 underTestObjs
			$(".sku").not(selectedObjs).not(self).each(function() {
				var siblingsSelectedObj = $(this).siblings('.'+selected);
				var testAttrIds = [];//从选中节点中去掉选中的兄弟节点
				if(siblingsSelectedObj.length) {
					var siblingsSelectedObjId = siblingsSelectedObj.attr('attr_id');
					for(var i = 0; i < len; i++) {
						(selectedIds[i] != siblingsSelectedObjId) && testAttrIds.push(selectedIds[i]);
					}
				} else {
					testAttrIds = selectedIds.concat();
				}
				testAttrIds = testAttrIds.concat($(this).attr('attr_id'));
				testAttrIds.sort(function(value1, value2) {
					return parseInt(value1) - parseInt(value2);
				});
				if(!SKUResult[testAttrIds.join(';')]) {
					$(this).addClass(disabled).removeClass(selected);
				} else {
					$(this).removeClass(disabled);
				}
			});
		} else {
			init.defautx();
		}
	});

	$('.size-box').on('touchmove', function(e){
		e.preventDefault();
	})


	//初始加载
	getList();

	//数据列表
	function getList(tr){

		isload = true;

		//如果进行了筛选或排序，需要从第一页开始加载
		if(tr){
			atpage = 1;
			$(".command-list-con ul").html("");
		}

		$(".command-list-con .loading").remove();
		$(".command-list-con").append('<div class="loading">'+langData['siteConfig'][20][184]+'...</div>');

		//请求数据
		var data = [];
		data.push("pageSize="+pageSize);
		data.push("page="+atpage);

		$.ajax({
			url: "/include/ajax.php?service=shop&action=slist&flag=0",
			data: data.join("&"),
			type: "GET",
			dataType: "jsonp",
			success: function (data) {
				if(data){
					if(data.state == 100){
						$(".command-list-con .loading").remove();
						var list = data.info.list, lr, html = [];
						if(list.length > 0){
							for(var i = 0; i < list.length; i++){
								lr = list[i];
								var pic = lr.litpic == false || lr.litpic == '' ? '/static/images/blank.gif' : lr.litpic;
								var specification = lr.specification

								html.push('<li data-id="'+lr.id+'">');
								html.push('		<a href="'+lr.url+'">');
								html.push('			<div class="pro-img">');
								html.push('				<img src="'+pic+'" alt="">');
								html.push('			</div>');
								html.push('		</a>');
								html.push('		<div class="pro-txt">');
								html.push('			<h4 class="mt10">'+lr.title+'</h4>');
								html.push('			<div class="pro-price mt10">');
								html.push('				<span>'+echoCurrency('symbol')+lr.price+'</span>');
								html.push('				<em>'+echoCurrency('symbol')+lr.mprice+'</em>');
								html.push('			</div>');
								html.push('			<div class="pro-info">');
								html.push('				<span>'+langData['shop'][3][7].replace('1', '<em class="yellow">'+lr.sales+'</em>')+'</span>');
								html.push('				<span class="ter"></span>');
								html.push('			</div>');
								html.push('		</div>');
								html.push('</li>');

								listArr[lr.id] = lr;
							}

							$(".command-list-con ul").append(html.join(""));
							isload = false;

							//最后一页
							if(atpage >= data.info.pageInfo.totalPage){
								isload = true;
								$(".command-list-con").append('<div class="loading">'+langData['siteConfig'][18][7]+'</div>');
							}

						//没有数据
						}else{
							isload = true;
							$(".command-list-con").append('<div class="loading">'+langData['siteConfig'][20][126]+'</div>');
						}

					//请求失败
					}else{
						$(".command-list-con .loading").html(data.info);
					}

				//加载失败
				}else{
					$(".command-list-con .loading").html(langData['siteConfig'][20][462]);
				}
			},
			error: function(){
				isload = false;
				$(".command-list-con .loading").html(langData['siteConfig'][20][227]);
			}
		});
	}

	// 上滑下滑导航隐藏
	var upflag = 1, downflag = 1, fixFooter = $(".fixFooter");
	//scroll滑动,上滑和下滑只执行一次！
	scrollDirect(function (direction) {
		if (direction == "down") {
			if (downflag) {
				fixFooter.hide();
				downflag = 0;
				upflag = 1;
			}
		}
		if (direction == "up") {
			if (upflag) {
				fixFooter.show();
				downflag = 1;
				upflag = 0;
			}
		}
	});

})
