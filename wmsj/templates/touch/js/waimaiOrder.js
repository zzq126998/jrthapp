$(function(){

  var isload = false;
  var activeIndex = $(".tabs a.active").index();
  var container = $(".swiper-slide").eq(0);
  var tabsSwiper = new Swiper('#tabs-container',{
    speed:500,
    autoHeight: true,
    onSlideChangeStart: function(){
      activeIndex = tabsSwiper.activeIndex;
      container = $(".swiper-slide").eq(activeIndex);
      var active = $(".tabs a").eq(activeIndex);
      state = active.attr("data-state");
      active.addClass('active').siblings().removeClass('active');
      $(window).scrollTop(0);
      isload = false;
      getList('change');

      $.cookie(cookiePre + 'wmsj_orderstate', activeIndex);
      var gurl = pageUrl+state;
      window.history.pushState({}, 0, gurl);

      if(activeIndex > 3 && !$(".header .more").hasClass("g2")){
        $(".header .more").addClass("g2");
        $(".tabs .group2").removeClass("fn-hide");
        $(".tabs .group1").addClass("fn-hide");
      }
      if(activeIndex < 4 && $(".header .more").hasClass("g2")){
        $(".header .more").removeClass("g2");
        $(".tabs .group2").addClass("fn-hide");
        $(".tabs .group1").removeClass("fn-hide");
      }
    },
    onSliderMove: function(){
      // isload = true;
    },
    onSlideChangeEnd: function(){
      isload = false;
    }
  })


  $(".tabs a").on('click',function(e){
    e.preventDefault();
    var t = $(this), index = t.index();
    t.addClass('active').siblings().removeClass('active')
    tabsSwiper.slideTo(index);

  })

  if(activeIndex > 0){
    $(".tabs a").eq(activeIndex).click();
    if(activeIndex > 3){
      $(".header .more").addClass("g2");
      $(".tabs .group2").removeClass("fn-hide");
      $(".tabs .group1").addClass("fn-hide");
    }
  }

  // 更多状态订单
  $(".header .more").click(function(){
    var t = $(this);
    if(t.hasClass("g2")){
      $(".tabs .group1").removeClass("fn-hide").eq(0).click();
      $(".tabs .group2").addClass("fn-hide");
      t.removeClass("g2");
    }else{
      $(".tabs .group2").removeClass("fn-hide").eq(0).click();
      $(".tabs .group1").addClass("fn-hide");
      t.addClass("g2");
    }
  })


  // 下拉刷新
  new DragLoading($('.loading'), {
      onReload: function () {

        container.attr({"data-first":"1", "data-page":"1", "data-end":"0"});


        getList("refresh");
        tabsSwiper.onResize();
        this.origin();
      }
  });


  // 加载更多
	$(window).scroll(function() {
		var h = $('.footer').height();
		var allh = $('body').height();
		var w = $(window).height();
		var scroll = allh - h - w;
		if ($(window).scrollTop() > scroll && !isload) {
      if($(".swiper-slide").eq(activeIndex).attr("data-end") != "1"){
        getList();
      }
      tabsSwiper.onResize();

		};
	});

  function getList(type){
    list = container.find(".content-slide"), page = container.attr("data-page");

    if(type == 'change'){
      if(container.attr("data-first") != 1){
        return;
      }
    }
    if(type == 'refresh'){
      list.html('<div class="load">'+langData['siteConfig'][20][184]+'···</div>');
    }else{
      if(list.find(".load").length == 0){
        list.append('<div class="load">'+langData['siteConfig'][20][184]+'···</div>');
      }
    }
    var load = list.find(".load");
    load.show();

    isload = true;

    $.ajax({
      url: '?action=getList&state='+state+'&p='+page,
      type: 'get',
      dataType: 'json',
      success: function(data){
        if(data && data.state == 100){
          var list = data.info.list, len = list.length, html = [];

          // container.attr("data-totalPage", data.info.pageInfo.totalPage);

          if(len > 0){
            for(var i = 0; i < len; i++){
              var obj = list[i], item = [];
              item.push('<div class="item">');
              if(obj.today){
                item.push('  <em class="tag">'+langData['siteConfig'][13][24]+'</em>');
              }
              item.push('  <a href="waimaiOrderDetail.php?id='+obj.id+'" class="fn-clear">');
              // item.push('    <div class="imgbox"><img src="'+skinlUrl+'images/timepicker2.png?v=2" alt="">'+obj.pubdatef+'</div>');
              item.push('    <div class="txtbox">');
              item.push('      <p class="title">'+obj.username+'&nbsp;&nbsp;'+obj.tel+'</p>');
              item.push('      <p>'+langData['siteConfig'][19][308]+'：'+obj.shopname+obj.ordernumstore+'</p>');
              item.push('    </div>');
              item.push('  </a>');
              item.push('</div>');

              html.push(item.join(""));
            }

            load.hide().before(html.join(""));

            container.attr("data-page", ++page)

            isload = false;

          }else{
            load.text(langData['siteConfig'][20][185]);
            container.attr("data-end", "1");
          }

        }else{
          load.text(langData['siteConfig'][21][64]);
          container.attr("data-end", "1");
        }

        container.attr("data-first", "0");
      },
      error:  function(){
        isload = false;
        console.log('err')
      }
    })
  }
  // getList();

})
