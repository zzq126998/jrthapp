$(function(){

  var container = $('#container'), tofoot = $('.tofoot'), page = 1, pageSize = 10, isload = false;

  // 打开搜索框
  $('.screen').click(function(){
    $('.searchWrap, .desk').addClass('show');
    $('html').addClass('md_fixed');
  })
  // 关闭搜索框
  $('.searchWrap .cancel, .desk, .searchWrap .submit').click(function(){
    var t = $(this);
    $('.searchWrap, .desk').removeClass('show');
    $('html').removeClass('md_fixed');
    if(t.hasClass('submit')){
      getList(1);
    }
  })
  // 搜索框
  $('.searchWrap .keywords').focus(function(){
    $(this).parent().addClass('hasfocus');
  }).blur(function(){
    var t = $(this);
    if(t.val() == ''){
      t.parent().removeClass('hasfocus');
    }
  })
  // 选择搜索类别
  $('.searchWrap .typeBox span').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
  })

  // 提现
  $('.withdrawBtn').click(function(){
    $('.withdrawWrap, .desk').addClass('show');
  })
  $('.withdrawWrap .close, .desk').click(function(){
    $('.withdrawWrap, .desk').removeClass('show');
  })

  $(window).scroll(function(){
    var sct = $(window).scrollTop();
    if(sct + $(window).height() >= tofoot.offset().top){
      getList();
    }
  })

  // 获取信息
  function getList(tr){
    if(tr){
      page = 1;
      container.html('');
      tofoot.hide();
      $(".withdraw font").text('0');
    }
    showMsg.loading();
    var category = $(".typeBox .active").attr("data-id");
    category = category == undefined ? '' : category;
    $.ajax({
      url: masterDomain + '/include/ajax.php?service=dating&action=incomeStoreList&spec=in&autoread=1&page='+page+'&pageSize='+pageSize+'&category='+category,
      type: 'get',
      dataType: 'jsonp',
      success: function(data){
        showMsg.close();
        if(data && data.state == 100){
          var html = [], list = data.info.list, len = list.length;
          if(len){
            $(".withdraw font").text(data.info.pageInfo.totalMoney);
            for(var i = 0; i < len; i++){
              var d = list[i];
              html.push('<div class="item">');
              html.push('  <a href="'+d.url+'" class="fn-clear">');
              html.push('    <div class="img"><img src="'+d.user.photo+'" alt=""></div>');
              html.push('    <div class="info">');
              html.push('      <h3 class="name">'+d.user.nickname+'<span>'+d.user.year+'年经验</span></h3>');
              html.push('      <p class="case">'+d.user.case+'对成功案例</p>');
              html.push('    </div>');
              html.push('    <span class="money">收入：<font>'+d.totalMoney+'</font></span>');
              html.push('  </a>');
              html.push('</div>');
            }
            container.append(html.join(""));
            
            if(data.info.pageInfo > page){
              isload = false;
              tofoot.text('下拉加载更多').show();
            }else{
              tofoot.text('已加载完全部数据').show();
            }
          }else{
            if(data.info.pageInfo == 0){
              tofoot.text('已加载完全部数据').show();
            }else{
              tofoot.text('暂无相关信息！').show();
            }
          }
        }else{
          tofoot.text(page > 1 ? '已加载完全部数据' : '暂无相关信息！').show();
        }
      },
      error: function(){
        isload = false;
        showMsg.alert('网络错误，请重试', 1000);
      }
    })
  }

  getList();

})