$(function(){

  var container = $(".frequency"), page = 1, pageSize = 10, isload = false, tofoot = $(".tofoot");

    // 获取信息
  function getList(){
    if(isload) return false;
    isload = true;
    showMsg.loading();
    $.ajax({
      url: masterDomain + '/include/ajax.php?service=dating&action=leadList'+'&page='+page+'&pageSize='+pageSize,
      type: 'get',
      dataType: 'jsonp',
      success: function(data){
        if(data && data.state == 100){
          var html = [];
          var length = data.info.list.length;
          for(var i = 0; i < length; i++){
            var d = data.info.list[i];
            html.push('<div class="frequency_item item fn-clear">');
            html.push('  <div class="img">');
            html.push('    <a href="'+d.user.url+'">');
            html.push('      <img src="'+d.user.phototurl+'" alt="">');
            if(d.user.my_video_state){
                html.push('        <span class="user_video"></span>');
              }
            html.push('    </a>');
            html.push('  </div>');
            html.push('  <div class="info">');
            html.push('    <p class="base fn-clear">');
            html.push('      <a href="'+d.user.url+'" class="name">'+d.user.nickname+'</a>');
            if(d.user.level){
              html.push('        <em class="u_level">');
              html.push('          <img src="'+d.user.levelIcon+'" alt=""></em>');
            }
            if(d.user.phoneCheck){
              html.push('        <em class="phone"></em>');
            }
            if(d.user.online == "1"){
              html.push('        <span class="online active">在线</span>');
            }else{
              html.push('        <span class="online">离线</span>');
            }
            html.push('      <span class="picnum">'+huoniao.transTimes(d.pubdate, 2).replace(/-/g, '/')+'</span>');
            html.push('    </p>');
            html.push('    <p class="more">');
            html.push('      <span class="age">'+d.user.age+'岁</span>');
            html.push('      <span class="height">'+d.user.heightName+'</span>');
            // html.push('      <span class="distance">'+d.user.distance+'</span>');
            html.push('    </p>');
            if(d.state == 1){
              html.push('    <p class="hn hn_no">牵线中</p>');
              // if(d.zd){
              //   html.push('    <p class="hn cancel">取消牵线</p>');
              // }else{
              //   html.push('    <p class="hn agree">同意牵线</p>');
              //   html.push('    <p class="hn refuse">拒绝牵线</p>');
              // }
            }else if(d.state == 2){
              html.push('    <p class="hn hn_yes">牵线成功</p>');
            }else if(d.state == 3){
              html.push('    <p class="hn hn_no">牵线失败</p>');
            }
            html.push('  </div>');
            html.push('</div>');
          }
          container.append(html.join(""));
          showMsg.close();
          if(data.info.pageInfo.totalPage == page){
            tofoot.remove();
          }else{
            isload = false;
            tofoot.text('下拉加载更多').show();
          }
        }else{
          showMsg.alert('暂无相关会员！', 1000);
        }
      },
      error: function(){
        isload = false;
        showMsg.alert('网络错误，请重试！', 1000);
      }
    })
  }

  $(window).scroll(function(){
    var sct = $(window).scrollTop();
    if(!isload && sct + $(window).height() >= tofoot.offset().top){
      getList();
    }
  })

  getList();

});
