$(function () {
    $('.appMapBtn').attr('href', OpenMap_URL);
    //放大图片
    $.fn.bigImage({
        artMainCon:".introBox",  //图片所在的列表标签
    });

    // 展开更多
    var slideHeight = 100;
    var defHeight = $('.introBox').height();
    if(defHeight >= slideHeight){
        $('.introBox').css('height' , slideHeight + 'px');
        $('.readMore').append('<a href="javascript:;">'+langData['marry'][0][32]+' <i class="rmDown"></i></a>');//全部内容
        $('.readMore a').click(function(){
            var curHeight = $('.introBox').height();
            // console.log(curHeight)
            // console.log(slideHeight)
            if(curHeight == slideHeight){
                $('.introBox').animate({height: defHeight}, "normal");
                $('.readMore a').html(''+langData['marry'][0][33]+' <i class="rmUp"></i>');//全部收起
                $('.gradient').fadeOut();
            }else{
                $('.introBox').animate({height: slideHeight}, "normal");
                $('.readMore a').html(''+langData['marry'][0][32]+' <i class="rmDown"></i>');//全部内容
                $('.gradient').fadeIn();
            }
            return false;
        });
    }

    // 赞
    $('.btnUp').on('click',function(){
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
            window.location.href = masterDomain+'/login.html';
            return false;
        }

        var t = $(this), id = t.attr("data-id");
        if(t.hasClass("active")) return false;
        var num = t.find('em').html();
        if( typeof(num) == 'object') {
            num = 0;
        }
        num++;

        $.ajax({
            url: "/include/ajax.php?service=article&action=dingCommon&id="+id,
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
                t.addClass('active');
                t.find('em').html(num);
            }
        });
    })

    // 轮播图
    $('.markBox').find('a:first-child').addClass('curr');
    new Swiper('.topSwiper .swiper-container', {pagination: {el: '.topSwiper .swiper-pagination',type: 'fraction',} ,loop: false,grabCursor: true,paginationClickable: true,
        on: {
            slideChangeTransitionStart: function(){
                var len = $('.markBox').find('a').length;
                var sindex = this.activeIndex;
                if(len==1){
                    $('.markBox').find('a:first-child').addClass('curr');
                }else{
                    if(sindex > 0){
                        $('.pmark').removeClass('curr');
                        $('.picture').addClass('curr');
                    }else{
                        $('.pmark').removeClass('curr');
                        $('.video').addClass('curr');
                    }
                }

            },
        }
    });


    // 图片放大
    var videoSwiper = new Swiper('.videoModal .swiper-container', {pagination: {el:'.videoModal .swiper-pagination',type: 'fraction',},loop: false})
    $(".topSwiper").delegate('.swiper-slide', 'click', function() {
        var imgBox = $('.topSwiper .swiper-slide');
        var i = $(this).index();
        $(".videoModal .swiper-wrapper").html("");
        for(var j = 0 ,c = imgBox.length; j < c ;j++){
            if(j==0){
                if(detail_video!=''){
                    $(".videoModal .swiper-wrapper").append('<div class="swiper-slide"><video width="100%" height="100%" controls preload="meta" x5-video-player-type="h5" x5-playsinline playsinline webkit-playsinline  x5-video-player-fullscreen="true" id="video" src="'+detail_video+'"  poster="' + imgBox.eq(j).find("img").attr("src") + '"></video></div>');
                }else{
                    $(".videoModal .swiper-wrapper").append('<div class="swiper-slide"><img src="' + imgBox.eq(j).find("img").attr("src") + '" / ></div>');
                }
            }else{
                $(".videoModal .swiper-wrapper").append('<div class="swiper-slide"><img src="' + imgBox.eq(j).find("img").attr("src") + '" / ></div>');
            }

        }
        videoSwiper.update();
        $(".videoModal").addClass('vshow');
        $('.markBox').toggleClass('show');
        videoSwiper.slideTo(i, 0, false);
        return false;
    });

    $(".videoModal").delegate('.vClose', 'click', function() {
        var video = $('.videoModal').find('video').attr('id');
        $(video).trigger('pause');
        $(this).closest('.videoModal').removeClass('vshow');
        $('.videoModal').removeClass('vshow');
        $('.markBox').removeClass('show');
    });




});