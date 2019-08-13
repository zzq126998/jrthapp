$(function(){

  var page = 1, typeid = 0, title = '', load = true;

  // {#$langData['siteConfig'][18][2]#}
  $('.header-middle span').click(function(){
    var t = $(this);
    if (t.hasClass('on')) {
      $('body').removeClass('fixed');
      t.removeClass('on');
      $('.layer').removeClass('show').animate({"opacity":"0"}, 100);
    }else {
      $('body').addClass('fixed');
      t.addClass('on');
      $('.layer').addClass('show').animate({"opacity":"1"}, 100);
    }

  })

  $('.layer .mask').click(function(){
    $('body').removeClass('fixed');
    $('.header-middle span').removeClass('on');
    $('.layer').removeClass('show').animate({"opacity":"0"}, 100);
  })
  // 选择分类
  $(".type li").click(function(){
    var t = $(this), type = t.text();
    $(".header-middle span").text(type);
    $('body').removeClass('fixed');
    $('.header-middle span').removeClass('on');
    $('.layer').removeClass('show').animate({"opacity":"0"}, 100);

    typeid = $(this).attr("data-id");
    page = 1;
    getList(true);
  })

  // 上架下架
  $(".list").delegate(".toggle", "click", function(){
    var t = $(this), id = t.closest('.item').attr('data-id'), val = t.hasClass('on') ? 1 : 0;
    t.toggleClass('on');
    $.ajax({
        url: "waimaiFoodList.php",
        type: "post",
        data: {action: "updateStockStatus", id: id, val: val},
        dataType: "json",
        success: function(res){
          msg.show('', res.info, 'auto');
          if(res.state != 100){
            t.toggleClass('on');
          }
        },
        error: function(){
          msg.show('', langData['siteConfig'][20][253], 'auto');
        }
    })
  })

  // 监听输入框
  var timer = null;
  $(".keywords").on("input propertychange",function(){
    clearTimeout(timer);
    var t = $(this);
    title = $.trim(t.val());
    timer = setTimeout(function(){
      getList(1);
    },500)
  })


  function getList(tr){
    load = false;
    if(tr){
      page = 1;
      $(".list .item").remove();
    }
    var data = [];
    data.push('page='+page);
    data.push('typeid='+typeid);
    data.push('title='+title);

    $(".loading").text(langData['siteConfig'][20][184]).show();
    $.ajax({
      url: '?action=getList&sid='+sid,
      type: 'get',
      data: data.join('&'),
      dataType: 'json',
      success: function(data){
        if(data && data.state == 100){
          var list = data.info.list, len = list.length, html = [];
          if(len > 0){
            for(var i = 0; i < len; i++){
              var obj = list[i], item = [];
              item.push()
              item.push('<div class="item" data-id="'+obj.id+'">');
              item.push('    <div class="txtbox">');
              item.push('      <p class="name">'+obj.title+'&nbsp;&nbsp;&yen;'+obj.price+'</p>');
              item.push('      <div>'+langData['siteConfig'][19][489]+'：'+(obj.status == 1 ? '<span class="state state1">'+langData['waimai'][1][120]+'&nbsp;&nbsp;&nbsp;</span>' : '<span class="state state0">'+langData['waimai'][1][121]+'</span>')+'<div class="xiajia"><span>'+langData['siteConfig'][9][10]+'</span><em class="toggle'+((obj.stockvalid == "0" || obj.stockvalid == "1" && obj.stock > 0) ? ' on' : '')+'"></em><span>'+langData['siteConfig'][19][110]+'</span></div></div>');
              item.push('    </div>');
              item.push('    <a href="add-goods.php?sid='+sid+'&id='+obj.id+'" class="price">'+langData['siteConfig'][6][6]+'</a>');
              item.push('</div>');

              html.push(item.join(""));
            }

            $(".loading").hide().before(html.join(""));
            load = true;

          }else{
            $(".loading").text(langData['siteConfig'][20][185]);
          }
        }else{
          $(".loading").text(langData['siteConfig'][21][64]);
        }
      },
      error: function(){
        load = true;
        msg.show('', langData['siteConfig'][20][458], 'auto');
      }
    })
  }

  $(window).scroll(function(){
    if(!load) return;
    var loadtop = $('.loading').offset().top, sct = $(window).scrollTop(), winh = $(window).height();
    if(sct+winh-$('.footer').height() >= loadtop){
      page++;
      getList();
    }
  })

  getList();





})
