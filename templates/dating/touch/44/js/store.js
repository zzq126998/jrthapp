$(function(){

  var container = $('#container'), tofoot = $('.tofoot'), page = 1, pageSize = 10, isload = false;

  getList();

  $(window).scroll(function(){
    if(isload) return;
    var sct = $(window).scrollTop();
    if(sct + $(window).height() >= tofoot.offset().top){
      page++;
      getList();
    }
  })

  // 获取信息
  function getList(){
    if(isload) return;
    isload = true;
    showMsg.loading();
    $.ajax({
      url: masterDomain + '/include/ajax.php?service=dating&action=storeList&page='+page+'&pageSize='+pageSize,
      type: 'get',
      dataType: 'jsonp',
      success: function(data){
        if(data && data.state == 100){
          var html = [];
          var length = data.info.list.length;
          for(var i = 0; i < length; i++){
            var d = data.info.list[i];
            html.push('<div class="item">');
            html.push('  <a href="'+d.url+'" class="fn-clear">');
            html.push('    <div class="img"><img src="'+d.phototurl+'" alt=""></div>');
            html.push('    <div class="info">');
            html.push('      <h3 class="name"><span>门店详情</span>'+d.nickname+'</h3>');
            html.push('      <p class="contact">服务热线：'+d.tel+'</p>');
            html.push('      <p class="place">地址：'+d.address+'</p>');
            html.push('    </div>');
            html.push('  </a>');
            html.push('</div>');
          }
          container.append(html.join(""));
          showMsg.close();
          if(data.info.pageInfo.totalPage == page){
            tofoot.hide();
          }else{
            tofoot.show();
          }
        }else{
          tofoot.hide();
          showMsg.alert('暂无相关信息！', 1000);
        }
      },
      error: function(){
        isload = false;
        showMsg.alert('网络错误，请重试！', 1000);
      }
    })
  }

})