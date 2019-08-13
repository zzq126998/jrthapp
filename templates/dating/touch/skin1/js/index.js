$(function(){

  // 关注
  $(".recommend .container").delegate(".like", "click", function(){
    var t = $(this), id = t.closest('.item').attr('data-id'), count = parseInt(t.text());
    if(t.hasClass('active')){
      operaJson(masterDomain+'/include/ajax.php?service=dating&action=cancelFollow', 'id='+id, function(data){
        if(data.state == 100){
          t.removeClass('active').text(--count);
        }else{
          showMsg.alert('操作失败', 1000);
        }
      })
    }else{
      operaJson(masterDomain+'/include/ajax.php?service=dating&action=visitOper', 'type=2&id='+id, function(data){
        if(data.state == 100){
          t.addClass('active').text(++count);
        }else{
          showMsg.alert('操作失败', 1000);
        }
      })
    }
  })

  // 幻灯片
  new Swiper('.swiper-container-banner', {pagination: '.pagination', slideClass: 'slideshow-item', paginationClickable: true, loop: true, autoplay:2000, autoplayDisableOnInteraction : false});

  // tab左右切换模块
  var navbar = $('.navbar');
  var loadMoreLock = false;
  var tabsSwiper = new Swiper('.tabs-container',{
    speed:350,
    autoHeight: true,
    touchAngle : 35,
    onSlideChangeStart: function(swiper){
      loadMoreLock = false;
      var container = swiper.container,
          box = container.parents('.box'),
          navbar = box.find(".navbar"),
          lastnav = navbar.find(".active"),
          activenav = navbar.find("li").eq(swiper.activeIndex);
      lastnav.removeClass('active');
      activenav.addClass('active');

      // 当模块的数据为空的时候加载数据
      var con = container.find(".swiper-slide").eq(swiper.activeIndex).find(".content-slide");
      if(!con.hasClass('load')){
        var action = box.attr("data-action"), data = activenav.attr("data-param");
        getData(con, action, data+'&lng='+lng+'&lat='+lat);
      }

    },
    onSliderMove: function(){
      // isload = true;
    },
    onSlideChangeEnd: function(){
      // isload = false;
    },
    onInit: function(swiper){

      // 当模块的数据为空的时候加载数据
      var container = swiper.container,
          box = container.parents('.box'),
          activenav = navbar.find("li").eq(swiper.activeIndex);
      var con = container.find(".swiper-slide").eq(swiper.activeIndex).find(".content-slide");
      if(!con.hasClass('load')){
        var action = box.attr("data-action"), data = activenav.attr("data-param");
        loadGetLocat(function(){
          getData(con, action, data+'&lng='+lng+'&lat='+lat);
        })
      }else{
      }

      var count = $('.box.swiper-box').length;
      box.attr("data-swiper-index", count);
      box.addClass('swiper-box');
    }
  })
  $(".navbar li").on('touchstart mousedown',function(e){
    e.preventDefault();
    var t = $(this), box = t.closest('.box'), sindex = box.attr("data-swiper-index");
    t.addClass('active').siblings().removeClass('active');
    tabsSwiper[sindex].slideTo( t.index() );

  })
  $(".container").delegate(".error, .empty", "click", function(){
    var t = $(this), p = t.parent();
    p.removeClass("load");
    getData(p);
  })

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

          operaJson(masterDomain + '/include/ajax.php', 'service=dating&action=updateLocation&lng='+lng+'&lat='+lat);
        }
      })
    }else{
      operaJson(masterDomain + '/include/ajax.php', 'service=dating&action=updateLocation&lng='+lng+'&lat='+lat);
    }
    
  }
  if(uid == 0){
    if(check){
      checkLogin_();
    }
    $(".memberContain, .matchmaker").delegate("a", "click", function(e){
      e.preventDefault();
      checkLogin_();
    })
  }
  checkLocal();
  


  // 等待获取坐标
  function loadGetLocat(callback){
    if(lng != 0){
      if(lng < 0) lng = lat = 0;
      callback();
    }else{
      setTimeout(function(){
        loadGetLocat(callback);
      },100)
    }
  }

  function getData(con, action, data){
    if(con.hasClass('load')){
      showMsg.loading();
      return;
    }
    showMsg.loading();
    con.addClass('load');

    if(!action || !data){
      var box = con.parents('.box');
      action = box.attr("data-action");
      data = box.find(".navbar .active").attr("data-param");
    }

    $.ajax({
      url: masterDomain + '/include/ajax.php?service=dating&action='+action,
      type: 'get',
      data: data,
      dataType: 'jsonp',
      success: function(data){
        if(data && data.state == 100){
          var html = [];
          if(action == "memberList"){
            for(var i = 0; i < data.info.list.length; i++){
              var d = data.info.list[i];
              html.push('<div class="item" data-id="'+d.id+'">');
              html.push('  <div class="like'+(d.follow ? ' active' : '')+'">'+d.like+'</div>');
              html.push('  <a href="'+d.url+'">');
              html.push('    <div class="img"><img src="'+d.photo+'" alt=""></div>');
              html.push('    <div class="info">');
              html.push('      <h3 class="name">'+d.nickname);
            if(d.level > 1){
              html.push('      <span class="u_level"><img src="'+d.levelIcon+'" alt=""></span>');
            }
            if(d.phoneCheck){
              html.push('      <span class="phone"></span>');
            }
            html.push('      </h3>');
              html.push('      <p>'+(d.age ? ('<span class="age">'+ d.age + '岁</span>') : '')+(d.height != 0 ? ('<span class="height">' + d.heightName + '</span>') : '')+'<span class="distance">'+d.juli+'</span></p>');
              html.push('    </div>');
              html.push('  </a>');
              html.push('</div>');
            }
          }

          con.html(html.join(""));
          showMsg.close();
          boxAutoHeight(con);
          // tabsSwiper[0].updateContainerSize();
        }else{
          con.html('<div class="empty">暂无相关信息</div>');
          showMsg.close();
        }
      },
      error: function(){
        con.html('<div class="error">网络错误，请重试</div>');
        showMsg.close();
      }
    })
  }

  // 验证是否登录及注册
  function checkLogin_(strict){
    if(sysId == 0){
      function getData(con, action, data){};
      showMsg.confirm('您还没有登陆', {
        lock: true,
        btn: {
          cancel: '<a href="'+masterDomain+'/register.html">注册</a>',
          ok: '<a href="'+masterDomain+'/login.html">登陆</a>',
        },
        cancel: function(){
          if(strict){
            location.href = masterDomain+'/register.html';
          }
        }
      })
    }else if(uid == 0){
      showMsg.confirm('您还没有注册交友会员，马上注册？', {
        lock: true,
        ok: function(){
          operaJson(masterDomain+'/include/ajax.php?service=dating', 'action=datingSwitch&state=1', function(data){
            if(data && data.state == 100){
              showMsg.alert(data.info, 3000, function(){
                // location.reload();
              })
            }
          })
        }
      })
    }
  }
})

var queueList = [];

function boxAutoHeight(box){
  var p = box.parents('.swiper-wrapper'), h = box.height();
  box.parents('.swiper-wrapper').css({'transition-duration': '350ms', 'height': h+'px'});
  setTimeout(function(){
    box.css({'transition-duration': '0'});
  },0)
}