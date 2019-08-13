$(function(){
  // banner轮播图
  new Swiper('.banner .swiper-container', {pagination:{ el: '.banner .pagination',} ,slideClass:'slideshow-item',loop: true,grabCursor: true,paginationClickable: true,autoplay:{delay: 2000,}});

  // 滚动信息
  new Swiper('.tcNews .swiper-container', {direction: 'vertical', pagination: { el: '.tcNews .pagination'},loop: true,autoplay: {delay: 2000},observer: true,observeParents: true});

  new Swiper('.tcInfo .swiper-container', {pagination: {el:'.tcInfo .pagination',},loop: false,grabCursor: true,paginationClickable: true})


  //左右导航切换(推荐信息、推荐店铺)
    var tabsSwiper = new Swiper('#tabs-container',{
    speed:350,
    autoHeight: true,
    touchAngle : 35,
    on: {
          slideChangeTransitionStart: function(){
          // loadMoreLock = false;
              var recomTab = $('.recomTab');

              $(".recomTab .active").removeClass('active');
              $(".recomTab li").eq(tabsSwiper.activeIndex).addClass('active');

              $("#tabs-container .conlist").eq(tabsSwiper.activeIndex).css('height', 'auto').siblings('.conlist').height($(window).height());

              // $("#tabs-container .recomShop").eq(tabsSwiper.activeIndex).css('height', 'auto').siblings('.recomShop').height($(window).height());


          },
    },
 
  })

  $(".recomTab li").on('touchstart mousedown',function(e){
    e.preventDefault();
    $(".recomTab .active").removeClass('active');
    $(this).addClass('active');
    tabsSwiper.slideTo( $(this).index() );
  });

    //滚动信息
    $.ajax({
        url : '/include/ajax.php?service=info&action=indexInfo',
        data : '',
        type : 'get',
        dataType : 'json',
        success : function (data) {
            if(data.state == 100){
                list = data.info;

                var obj = $(".mBox .swiper-wrapper");
                var len = list.length;
                var html = '';
                for (var i = 0; i < len; i++){
                    j=i+1;
                    if(i%2 == 0){
                        html += '<div class="swiper-slide">' +
                            '<a href="'+list[i].url+'" class="fn-clear"><p>'+list[i].title+'</p><span><em>¥</em>'+list[i].price+'</span></a>' +
                            '<a href="'+list[j].url+'" class="fn-clear"><p>'+list[j].title+'</p><span><em>¥</em>'+list[j].price+'</span></a>' +
                            '</div>';
                    }
                }
                obj.html(html);
            }
        }
    })




    // 悬浮发布
  $(document).ready(function (ev) {
      $('.menu').on('touchend', function (ev) {
          if($('.mask').hasClass('show')){
             $('.mask').removeClass('show');
           }else{
             $('.mask').addClass('show');
           }
          $('.mIcon').toggleClass('close');
          $('.menu').toggleClass('m_active');
          $('.mIcon.wx').toggleClass('m_curr');
          $('.mIcon.fb').toggleClass('m_curr');
          $('.mIcon.my').toggleClass('m_curr');
      });
     
  });

    var tabHeight = 1700;

    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var lat2 = r.point.lat;
            var lng2 = r.point.lng;

            //最新入驻店铺
            $.ajax({
                url : '/include/ajax.php?service=info&action=shopList',
                data : {
                    'orderby' : 1,
                    'page' : 1,
                    'pagesize':5,
                    'lat2' : lat2,
                    'lng2' : lng2
                },
                type : 'get',
                dataType : 'json',
                success : function (data) {
                    if(data.state == 100){
                        list = data.info;

                        var obj = $(".recomShop").eq(0).find(".fn-clear");
                        var len = list.length;
                        tuijian_shop_len = len;
                        var html = '';
                        var top_htm;
                        for (var i = 0; i < len; i++){
                            if(list[i].top == '1'){
                                top_htm = 'style="background:  #fff  url('+templatePath+'images/top.png)  no-repeat right top;background-size: .94rem;"';
                            }else{
                                top_htm = '';
                            }
                            var photo = list[i].user['photo'];
                            var is_video = '';
                            if(list[i].video){
                                is_video = '<div class="mVideo"></div>';
                            }

                            html += '<li class="acttop fn-clear" '+top_htm+'>' +
                                '<div class="rleft">' +
                                '<a href="'+list[i].url+'">' +
                                '<div class="rpic">' +
                                '<img src="'+list[i].user['photo']+'" alt="">' +
                                is_video +
                                '</div>' +
                                '<div class="rinfo">' +
                                '<div class="rtitle">'+list[i].user.company+'</div>' +
                                '<p class="p-comment">'+list[i].shop_common+'评论</p>' +
                                // '<!--<span class="starbg"><i class="star" style="width: 60%;"></i></span>-->' +
                                '<p class="mark"><span class="mcolor1">商家</span><span class="mcolor2">'+list[i].typename+'</span></p>' +
                                '<p class="addr">'+list[i].address_[1]+' <span><i class="pos"></i><em>'+list[i].lnglat_diff+'km</em></span></p>' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '<div class="rright tel" data-tel="'+list[i].tel+'">' +
                                '<img src="'+templatePath+'images/hPhone.png" alt="">' +
                                '</div>' +
                                '</li>';
                        }
                        obj.html(html);
                        tabHeight = $('.recomTab').offset().top;

                    }else{
                        tabHeight = $('.recomTab').offset().top;


                    }

                }
            })


            //推荐信息
            $.ajax({
                url : '/include/ajax.php?service=info&action=ilist_v2',
                data : {
                    'orderby' : 1,
                    'lat2' : lat2,
                    'lng2' : lng2
                },
                type : 'get',
                dataType : 'json',
                success : function (data) {
                    if(data.state == 100){
                        list = data.info.list;
                        var obj2 = $(".tuijianInfo .reInfo");
                        var len = list.length;
                        var html = '';
                        var top_htm;
                        var isshop_htm = '';
                        var juli = '';
                        for (var i = 0; i < len; i++){
                            if(list[i].is_shop){
                                isshop_htm = '<span class="mcolor1">商家</span><span class="mcolor2">'+list[i].typename+'</span>';
                                juli = '<i class="pos"></i><em>'+list[i].lnglat_diff+'km</em>';
                            }else{
                                isshop_htm = '<span class="mcolor1">个人</span><span class="mprice"><em>¥</em>'+list[i].price+'</span>';
                                juli = list[i].pubdate1;
                            }
                            if(list[i].top == '1'){
                                top_htm = 'style="background:  #fff  url('+templatePath+'images/top.png)  no-repeat right top;background-size: .94rem;"';
                            }else{
                                top_htm = '';
                            }
                            var is_video = '';
                            if(list[i].video){
                                is_video = '<div class="mVideo"></div>';

                            }else{
                                is_video = '<div class="pnum">'+list[i].pcount+'图</div>';

                            }
                            html += '<li class="fn-clear" '+top_htm+'>' +
                                '<div class="rleft">' +
                                '<a href="'+list[i].url+'">' +
                                '<div class="rpic">' +

                                '<img src="'+list[i].litpic+'" alt="">' +
                                is_video +

                                '</div>' +
                                '<div class="rinfo">' +
                                '<div class="rtitle">'+list[i].title+'</div>' +
                                '<p class="p-comment">' +
                                '<!--<span class="starbg"><i class="star" style="width: 40%;"></i></span>-->' +
                                '' +
                                list[i].common+'评论</p>' +
                                '<p class="mark">'+isshop_htm+'</p>' +
                                '<p class="addr">'+list[i].address[1]+' <span>'+juli+'</span></p>' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '<div class="rright tel">' +
                                '<img src="'+templatePath+'images/hPhone.png" alt="">' +
                                '</div>' +
                                '</li>';
                            juli = '';

                        }
                        obj2.html(html+"<div class=\"loading\">到底了...</div>");
                    }
                }
            })


            //推荐店铺
            $.ajax({
                url : '/include/ajax.php?service=info&action=shopList',
                data : {
                    'orderby' : 1,
                    'pagesize' : 10,
                    'page' : 1,
                    'lat2' : lat2,
                    'lng2' : lng2
                },
                type : 'get',
                dataType : 'json',
                success : function (data) {
                    if(data.state == 100){
                        list = data.info;

                        var obj = $(".tuijianshop .reShop");
                        var len = list.length;
                        var html = '';
                        var top_htm;

                        for (var i = 0; i < len; i++){
                            if(list[i].top == '1'){
                                top_htm = 'style="background:  #fff  url('+templatePath+'images/top.png)  no-repeat right top;background-size: .94rem;"';
                            }else{
                                top_htm = '';
                            }
                            var is_video = '';
                            if(list[i].video){
                                is_video = '<div class="mVideo"></div>';
                            }
                            html += '<li class="acttop fn-clear" '+top_htm+'>' +
                                '<div class="rleft">' +
                                '<a href="'+list[i].url+'">' +
                                '<div class="rpic">' +
                                '<img src="'+list[i].user['photo']+'" alt="">' +
                                is_video +
                                '</div>' +
                                '<div class="rinfo">' +
                                '<div class="rtitle">'+list[i].user.company+'</div>' +
                                '<p class="p-comment">'+list[i].shop_common+'评论</p>' +
                                // '<!--<span class="starbg"><i class="star" style="width: 60%;"></i></span>-->' +
                                '<p class="mark"><span class="mcolor1">商家</span><span class="mcolor2">'+list[i].typename+'</span></p>' +
                                '<p class="addr">'+list[i].address_[1]+' <span><i class="pos"></i><em>'+list[i].lnglat_diff+'km</em></span></p>' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '<div class="rright tel" data-tel="'+list[i].tel+'">' +
                                '<img src="'+templatePath+'images/hPhone.png" alt="">' +
                                '</div>' +
                                '</li>';
                        }
                        obj.html(html+"<div class=\"loading\">到底了...</div>");
                    }else{

                    }
                }
            })


        }
        else {
            return 0;
        }
    });




    $(window).scroll(function() {
        if ($(window).scrollTop() > tabHeight) {
            $('.recomTab').addClass('topfixed');
        } else {
            $('.recomTab').removeClass('topfixed');
        }
    });



    });
    

