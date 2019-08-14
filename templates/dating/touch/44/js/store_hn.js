$(function(){

  var container = $('#container'), tofoot = $('.tofoot'), page = 1, pageSize = 10, isload = false;
  var keywrods = "";

  // 搜索框
  $('.searchWrap .keywords').focus(function(){
    $(this).parent().addClass('hasfocus');
  }).blur(function(){
    var t = $(this);
    if(t.val() == ''){
      t.parent().removeClass('hasfocus');
    }
  })
  $('.searchWrap .keywords').on('input propertychange', function(){
    var t = $(this);
    keywrods = $.trim(t.val());
    isload = false;
    getList(1);
  })

  $(window).scroll(function(){
    if(isload) return;
    var sct = $(window).scrollTop();
    if(sct + $(window).height() >= tofoot.offset().top){
      page++;
      getList();
    }
  })

  // 获取信息
  function getList(tr){
    if(isload) return;
    if(tr){
      page = 1;
      container.html('');
      tofoot.hide();
    }
    isload = true;
    showMsg.loading();
    var keywords = $(".keywords").val();
    $.ajax({
      url: masterDomain + '/include/ajax.php?service=dating&action=hnList&type=2&company='+storeUid+'&page='+page+'&pageSize='+pageSize+'&keywords='+keywords,
      type: 'get',
      dataType: 'jsonp',
      success: function(data){
        showMsg.close();
        if(data && data.state == 100){
          var html = [], list = data.info.list, len = list.length;
          if(len){
            for(var i = 0; i < len; i++){
              var d = list[i];
              html.push('<div class="item fn-clear" data-id="'+d.id+'">');
              // html.push('  <a href="" class="fn-clear">');
              html.push('    <div class="img"><a href="'+d.url+'"><img src="'+(d.photo ? d.photo : templets_skin + 'images/photo_girl.png')+'" alt=""></a></div>');
              html.push('    <div class="info">');
              html.push('      <h3 class="name">'+d.nickname+'<span>'+d.year+'年经验</span></h3>');
              html.push('      <p class="des"><a href="'+d.userUrl+'">她的会员</a>婚恋情绪管理，亲密关系冲突处理，解决</p>');
              html.push('      <p class="case">'+d.case+'对成功案例</p>');
              html.push('    </div>');
              // html.push('  </a>');
              html.push('</div>');
            }
            container.append(html.join(""));
            
            if(data.info.pageInfo > page){
              tofoot.text('下拉加载更多').show();
              isload = false;
            }else{
              tofoot.text('已加载完全部数据').show();
            }
          }else{
            tofoot.text('暂无相关信息！').show();
          }
        }else{
          tofoot.text('暂无相关信息！').show();
        }
      },
      error: function(){
        showMsg.alert('网络错误，请重试');
      }
    })
  }

  getList();

})