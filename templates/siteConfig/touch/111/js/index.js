$(function(){
  // banner轮播图
  new Swiper('.banner .swiper-container', {pagination: '.banner .pagination',paginationClickable: true, loop: true, autoplay: 2000, autoplayDisableOnInteraction : false});

  //微信端隐藏退出按钮
    if(device.toLowerCase().match(/MicroMessenger/i) == "micromessenger"){
        $('.logout').hide();
    }

  //同城头条动态数据
    $.ajax({
        type: "POST",
        url: "/include/ajax.php",
        dataType: "json",
        data: 'service=article&action=alist&flag=h&pageSize=10',
        success: function(data) {

            if(data.state == 100){
                var tcNewsHtml = [], list = data.info.list;
                var step = 1;
                var img = '', imgUrl = '';

                for (var i = 0; i < list.length; i++){
                    if(step == 1){
                        tcNewsHtml.push('<div class="swiper-slide swiper-no-swiping"><div class="mlBox">');
                        tcNewsHtml.push('<p><a href="'+list[i].url+'"><span>['+list[i].typeName[(list[i].typeName.length)-1]+']</span>'+list[i].title+'</a></p>');
                        if(list[i].litpic){
                            img = list[i].litpic;
                            imgUrl = list[i].url;
                        }
                    }

                    if(step == 2){
                        tcNewsHtml.push('<p><a href="'+list[i].url+'"><span>['+list[i].typeName[(list[i].typeName.length)-1]+']</span>'+list[i].title+'</a></p>');
                        if(img == '' && list[i].litpic){
                            img = list[i].litpic;
                            imgUrl = list[i].url;
                        }
                        step = 0;
                    }

                    if(step == 0 || i == list.length - 1){
                        tcNewsHtml.push('</div>');
                        step = 0;
                    }

                    if(img && step == 0){
                        tcNewsHtml.push('<div class="mrBox"><a href="'+imgUrl+'"><img src="'+img+'" alt=""></a></div>');
                    }

                    if(step == 0) {
                        tcNewsHtml.push('</div>');
                    }
                    step++;

                }

                $('.tcNews .swiper-wrapper').html(tcNewsHtml.join(''));
                new Swiper('.tcNews .swiper-container', {pagination: '.tcNews .pagination',direction: 'vertical',paginationClickable: true, loop: true, autoplay: 2000, autoplayDisableOnInteraction : false});

            }
        }
    });

    // 滑动导航
    $('.tabMain').find('.swiper-wrapper').each(function(){
        var swiperNav = [], mainNavLi = $(this).find('li');
        for (var i = 0; i < mainNavLi.length; i++) {
            swiperNav.push('<li>'+$(this).find('li:eq('+i+')').html()+'</li>');
        }

        var liArr = [];
        for(var i = 0; i < swiperNav.length; i++){
            liArr.push(swiperNav.slice(i, i + 10).join(""));
            i += 9;
        }

        $(this).html('<div class="swiper-slide"><ul class="fn-clear">'+liArr.join('</ul></div><div class="swiper-slide"><ul class="fn-clear">')+'</ul></div>');
    });



  // 同城信息导航切换
    var tchengSwiper = [];
    $(".tabBox ul li").bind('click', function(){
        audio1.play();
        $(this).addClass("active").siblings().removeClass("active");
        var i=$(this).index();
        tabMain(i);
    });

    tabMain(0);
    function tabMain(i){
        $('.tabMain').eq(i).addClass("show").siblings().removeClass("show");
        if(!tchengSwiper[i]){
            tchengSwiper[i] = new Swiper('.swipre0' + i, {pagination: '.pag0' + i, loop: false, grabCursor: true, paginationClickable: true});
        }
    }

    // 推荐楼盘
    $(".recommendBox .recomTop ul li a").bind('click', function(){
      audio1.play();
      $(this).parent().addClass("curr").siblings().removeClass("curr");
      var i=$(this).parent().index();
      $('.recommBox').eq(i).addClass("show").siblings().removeClass("show");
    });

     // 招聘求职
    $(".job .jobTab ul li a").bind('click', function(){
      audio1.play();
      $(this).parent().addClass("curr").siblings().removeClass("curr");
      var i=$(this).parent().index();
      $('.jobMain').eq(i).addClass("show").siblings().removeClass("show");
    });


    var lng = lat = 0;
    var page = 1, isload = false;

    // 获取推荐商家
    function getList(){
        isload = true;
        var pageSize = page == 1 ? 4 : 10;
        $.ajax({
            url: masterDomain+'/include/ajax.php?service=business&action=blist&page='+page+'&pageSize='+pageSize+'&lng='+lng+'&lat='+lat,
            type: 'get',
            dataType: 'jsonp',
            success: function(data){
                if(data && data.state == 100){
                    var html = [];

                    for(var i = 0; i < data.info.list.length; i++){
                        var d = data.info.list[i];

                        html.push('<li class="fn-clear">');
                        html.push('  <div class="rleft">');
                        html.push('    <a href="'+d.url+'"><img src="'+(d.logo ? d.logo : (templets + 'images/fShop.png'))+'" alt=""></a>');
                        if(d.face_qj == "1"){
                            html.push('    <div class="mark mark1">全景</div>');
                        }
                        if(d.face_video == "1"){
                            html.push('    <div class="mark mark3">视频</div>');
                        }
                        html.push('  </div>');
                        html.push('  <div class="rright">');
                        html.push('    <div class="rtitle fn-clear"><a href="'+d.url+'">'+(d.top == "1" ? '<i></i>' : '')+'<p>'+d.title+'</p> '+(d.type == "2" ? '<em></em>' : '')+'&nbsp;</a></div>');
                        html.push('    <p class="comment"><span class="starbg"><i class="star" style="width: '+(d.sco1 / 5 * 100)+'%;"></i></span>'+d.comment+'评论</p>');
                        html.push('    <p class="addr">'+d.address+'<span>'+d.distance+'</span></p>');
                        if(d.tel != ""){
                            html.push('    <a href="tel:'+d.tel+'" class="tel">');
                            html.push('      <img src="'+templets+'images/hPhone.png" alt="">');
                            html.push('    </a>');
                        }
                        html.push('  </div>');
                        html.push('</li>');
                    }

                    $('.recomBus ul').append(html.join(''));

                    if(data.info.pageInfo.totalPage <= page){
                        $('.btnMore').text('已加载全部数据').addClass('disabled');
                    }else{
                        isload = false;
                    }

                }else{
                    $('.btnMore').text('暂无相关信息');
                    $('.tcNews .load').text('暂无相关入驻信息');
                }
            },
            error: function(){
                if(page == 1){
                    $('.tcNews .load').text('网络错误，请重试');
                }
                $('.btnMore').text('网络错误，请重试');
                page = page > 1 ? page - 1 : 1;
            }
        })
    }
    function checkLocal(){
        var local = false;
        var localData = utils.getStorage("user_local");
        if(localData){
            var time = Date.parse(new Date());
            time_ = localData.time;
            // 缓存1小时
            if(time - time_ > 3600 * 1000){
                lat = localData.lat;
                lng = localData.lng;
                local = true;
            }

        }

        if(!local){
            HN_Location.init(function(data){
                if (data == undefined || data.address == "" || data.name == "" || data.lat == "" || data.lng == "") {
                    lng = lat = -1;
                }else{
                    lng = data.lng;
                    lat = data.lat;

                    var time = Date.parse(new Date());
                    utils.setStorage('user_local', JSON.stringify({'time': time, 'lng': lng, 'lat': lat, 'address': data.address}));

                    getList();
                }
            })
        }else{
            getList();
        }

    }

    $('.btnMore').click(function(){
        var t = $(this);
        if(isload || t.hasClass('disabled')) return;
        page++;
        getList();
    })

    checkLocal();

});
