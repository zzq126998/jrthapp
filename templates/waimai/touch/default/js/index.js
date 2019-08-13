$(function(){

  // banna轮播图
	var mySwiper1 = new Swiper('.swiper-container1', {pagination: '.pagination', slideClass: 'slideshow-item', paginationClickable: true, loop: true, autoplay: 5000});
  new Swiper('.swiper-container3', {pagination: '.pagination', slideClass: 'slideshow-item', paginationClickable: true, loop: true, autoplay: 5000});

  // 滑动导航
	var swiperNav = [], mainNavLi = $('.nav li');
  for (var i = 0; i < mainNavLi.length; i++) {
    swiperNav.push('<li>'+$('.nav li:eq('+i+')').html()+'</li>');
  }

  var liArr = [];
  for(var i = 0; i < swiperNav.length; i++){
    liArr.push(swiperNav.slice(i, i + 8).join(""));
    i += 7;
  }

  $('.nav .swiper-wrapper').html('<div class="swiper-slide"><ul class="fn-clear">'+liArr.join('</ul></div><div class="swiper-slide"><ul class="fn-clear">')+'</ul></div>');

  var mySwiperNav = new Swiper('.nav',{pagination : '.swiper-pagination',})


  var hallList = $(".near-box"), atpage = 1, pageSize = 20, listArr = [], totalPage = 0, isload = false;
  function getList(){

    typeid = $("#choose-classify .active").data("id");
    orderby = $("#choose-sort .active").data("id");
    yingye = $("#choose-screen .active").data("id");

    isload = true;

		if(page == 1){
			$('.near-box').html('<div class="loading">'+langData['siteConfig'][20][184]+'...</div>');
		}else{
			$('.near-box').append('<div class="loading">'+langData['siteConfig'][20][184]+'...</div>');
		}

        $.ajax({
            url: '/include/ajax.php?service=waimai&action=shopList',
            data: {
                lng: lng,
                lat: lat,
								orderby: 1,
                page: page,
                pageSize: pageSize
            },
            type: 'get',
            dataType: 'json',
            success: function(data){

                if(data.state == 100){
                    var list = [];
                    $('.near-box .loading').remove();

                    if(data.info.pageInfo.totalPage < page){
                        if(page == 1){
                          $('.near-box').html('<div class="loading">'+langData['siteConfig'][20][126]+'</div>');
                        }else {
                          $('.near-box').append('<div class="loading">'+langData['siteConfig'][20][185]+'</div>');
                        }
                        return false;
                    }

                    var info = data.info.list;
                    for(var i = 0; i < info.length; i++){
                        var d = info[i];

                        // 不是默认排序隐藏休息中的店铺
                        if(orderby != 1 && orderby != '' && d.yingye != 1){
                          continue;
                        }

                        list.push('<div class="near-list"><a href="'+d.url+'">');

                        var xx = '';


												list.push('<div class="near-list-img"><img src="'+d.pic+'" alt="'+d.shopname+'" onerror="this.src=\'/static/images/shop.png\'"></div>');
												list.push('<div class="near-list-txt"><p class="fn-clear nh"><span class="fn-left">'+d.shopname+'</span></p>');
												list.push('<div class="judge-box fn-clear">');
												if(d.yingye != 1 || d.ordervalid != 1){
                          if(d.ordervalid != 1){
                            list.push('<span class="xiuxi l">'+langData['waimai'][2][101]+'</span>');
                          }else if(d.yingye != 1){
                            list.push('<span class="xiuxi l">'+langData['waimai'][2][102]+'</span>');
                          }
                        }else {
													list.push('<div class="rating-wrapper"><div class="rating-gray"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink"xlink:href="#star-gray.cc081b9"></use></svg></div>');
													list.push('<div class="rating-actived"style="width: '+(d.star/5)*100+'%;"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink"xlink:href="#star-actived.d4c54d1"></use></svg></div></div><span class="rateNum">'+(d.star > 0 ? d.star : langData['waimai'][2][4])+'</span>');

													list.push('<span class="sale-num">'+langData['waimai'][2][5].replace('1', d.sale)+'</span>');
                          if(d.delivery_service){
                            list.push('<b class="fn-right sale-song">'+d.delivery_service+'</b>');
                          }
                        }
												list.push('</div>');

                        list.push('<div class="starting-price"><span>'+echoCurrency('symbol')+d.basicprice+langData['waimai'][2][6]+'</span><em>|</em><span>'+langData['waimai'][2][7]+echoCurrency('symbol')+d.delivery_fee+'</span><div class="fn-right grayfz"><span>'+d.juli+'</span>'+(d.delivery_time ? '<em>|</em><span>'+d.delivery_time+langData['waimai'][2][11]+'</span>' : '')+'</div></div>');

												list.push('<div class="saleBox">');
                        if(d.is_first_discount == '1'){
                            list.push('<p class="gray"><i class="shou">'+langData['waimai'][2][92]+'</i><span>'+langData['waimai'][2][8].replace('1', d.first_discount)+'</span></p>');
                        }
                        if(d.is_discount == '1'){
                          list.push('<p class="gray"><i class="zhe">'+langData['waimai'][2][91]+'</i>'+langData['waimai'][2][8].replace('1', d.discount_value)+'</p>');
                        }
                        if(d.open_promotion == '1'){
                          list.push('<p class="gray"><i class="sale">'+langData['waimai'][2][93]+'</i><span>');
                          for(var o = 0; o < d.promotions.length; o++){
                              if(d.promotions[o][0] && d.promotions[o][1]){
                                  list.push(langData['waimai'][2][10].replace('1', d.promotions[o][0]).replace('2', d.promotions[o][1]));
                              }
                          }
                          list.push('</span></p>');
                        }
												list.push('</div>');

                        if(d.description){
                          list.push('<p class="gray desc">'+d.description+'</p>');
                        }

                        list.push('</div>');
                        list.push('</a></div>');
                    }

                    if(page == 1){
                			$('.near-box').html(list.join(''));
                		}else{
                			$('.near-box').append(list.join(''));
                		}

                    isload = false;
                    page++;

                }else{
                    $('.near-box .loading').html(data.info);
                }

            },
            error: function(){
                $('.near-box .loading').html(langData['siteConfig'][20][227]);
            }
        })

	}

  //滚动加载
  $(window).on("scroll", function(){
    var scrollTop = $(window).scrollTop(),
        allh = $('body').height(),
        w = $(window).height(),
        scroll = allh - w - 300;
    if (scrollTop > scroll && !isload) {
      if(lat == 0){
        $('.near-box').html('<div class="loading">'+langData['waimai'][2][103]+'</div>');
      }else{
        atpage++;
        getList();
      }
    };
  });

  // 定位
	var localData = utils.getStorage('waimai_local');
	if(localData != null){
		var last = localData.time;
	}else{
		var last = 0;
	}
	var time = Date.parse(new Date());

  // 手动定位或10分钟内使用上次坐标
	if(local == 'manual' || (time - last < 60*10*1000)){
		$('.header-address em').html(localData.address);
		var lat = localData.lat;
		var lng = localData.lng;
		getList();

		utils.setStorage('waimai_local', JSON.stringify({'time': time, 'lng': lng, 'lat': lat, 'address': localData.address}));
	}else{
		HN_Location.init(function(data){
			if (data == undefined || data.address == "" || data.name == "" || data.lat == "" || data.lng == "") {
				$('.header-address em').html(''+langData['siteConfig'][27][136]+'');
				$('.loading').html(''+langData['siteConfig'][27][137]+'').show();
			}else{
				var lng = data.lng, lat = data.lat, name = data.name, page = 1;
				$('.header-address em').html(name);
				getList();

				utils.setStorage('waimai_local', JSON.stringify({'time': time, 'lng': lng, 'lat': lat, 'address':name}));
			}
		})
	}


  var mywaimaiSwiper = null;

  function checkWaimaiOrder(){
    $.ajax({
      url: '/include/ajax.php?service=waimai&action=checkMyorder',
      type: 'get',
      dataType: 'json',
      success: function(data){

        if(data && data.state == 100){
          var list = data.info;
          var order = null;
          if(list.length > 0){
            var html = [];
            for(var i = 0; i < list.length; i++){
              var obj = list[i],
                  state = parseInt(obj.state);

              if(obj.iscommon){
                continue;
              }

              var str = '';
              if(state == 0){
                str = '<li class="swiper-slide"><a href="'+userdomain+'/orderdetail-waimai-'+obj.id+'.html">'+langData['waimai'][3][76]+'</a></li>';
              }else{
                var txt = '';
                switch(state){
                  case 2:
                    txt = langData['waimai'][3][77];
                    break;
                  case 3:
                    txt = langData['waimai'][3][78];
                    break;
                  case 4:
                    txt = langData['waimai'][3][79];
                    break;
                  case 5:
                    txt = langData['waimai'][3][80];
                    break;
                  case 7:
                    txt = langData['waimai'][3][81];
                    break;
                  case 1:
                    txt = langData['waimai'][3][82];
                    break;
                }
                str = '<li class="swiper-slide"><a href="'+userdomain+'/orderdetail-waimai-'+obj.id+'.html">'+txt+'</a></li>';
              }

              html.push(str);
            }

            $('.swiper-msg ul').html(html.join(""));
            if(mywaimaiSwiper){
              // 销毁
              mywaimaiSwiper.destroy();
            }
            if(list.length > 1){
              mywaimaiSwiper = new Swiper('.swiper-msg', {direction: 'vertical', autoplay:3000, loop : true, speed: 700, height: 60});
            }
            $(".waimaiOrderstate").show();

          }else{
            $(".waimaiOrderstate").hide();
          }

        }else{
          $(".waimaiOrderstate").hide();
        }

        setTimeout(function(){
          checkWaimaiOrder();
        },13700)
      },
      error: function(){
        $(".waimaiOrderstate").hide();
        setTimeout(function(){
          checkWaimaiOrder();
        },13700)
      }
    })
  }

  var userid = $.cookie(cookiePre+"login_user");
  if(userid != undefined && userid != null && userid != ''){
    checkWaimaiOrder();
  }


})
