/**
 * 会员中心投票列表
 */
var objId = $("#list");
$(function(){

  $(".nav-tabs li[data-id='"+state+"']").addClass("active");

  $(".nav-tabs li").bind("click", function(){
    var t = $(this), id = t.attr("data-id");
    if(!t.hasClass("active") && !t.hasClass("add")){
      state = id;
      atpage = 1;
      t.addClass("active").siblings("li").removeClass("active");
      getList();
    }
  });

  getList(1);

  //删除
  objId.delegate(".del", "click", function(){
    var t = $(this), par = t.closest(".item"), id = par.attr("data-id");
    if(t.hasClass("load")) return;
    if(id){
      $.dialog.confirm(langData['siteConfig'][20][543], function(){
        t.siblings("a").hide();
        t.addClass("load");

        $.ajax({
          url: masterDomain+"/include/ajax.php?service=vote&action=del&id="+id,
          type: "GET",
          dataType: "jsonp",
          success: function (data) {
            if(data && data.state == 100){

              //删除成功后移除信息层并异步获取最新列表
              par.slideUp(300, function(){
                par.remove();
                setTimeout(function(){getList(1);}, 200);
              });

            }else{
              $.dialog.alert(data.info);
              t.siblings("a").show();
              t.removeClass("load");
            }
          },
          error: function(){
            $.dialog.alert(langData['siteConfig'][20][183]);
            t.siblings("a").show();
            t.removeClass("load");
          }
        });
      });
    }
  });

  //结束
  objId.delegate(".stop", "click", function(){
    var t = $(this), par = t.closest(".item"), id = par.attr("data-id");
    if(t.hasClass("load")) return;
    if(id){
      $.dialog.confirm('确定要结束投票吗？', function(){
        t.siblings("a").hide();
        t.addClass("load");

        $.ajax({
          url: masterDomain+"/include/ajax.php?service=vote&action=stop&id="+id,
          type: "GET",
          dataType: "jsonp",
          success: function (data) {
            if(data && data.state == 100){
              setTimeout(function(){getList(1);}, 200);
            }else{
              $.dialog.alert(data.info);
              t.siblings("a").show();
              t.removeClass("load");
            }
          },
          error: function(){
            $.dialog.alert(langData['siteConfig'][20][183]);
            t.siblings("a").show();
            t.removeClass("load");
          }
        });
      });
    }
  });

});

function getList(is){

  if(is != 1){
    $('html, body').animate({scrollTop: $(".nav-tabs").offset().top}, 300);
  }

  objId.html('<p class="loading"><img src="'+staticPath+'images/ajax-loader.gif" />'+langData['siteConfig'][20][184]+'...</p>');
  $(".pagination").hide();

  $.ajax({
    url: masterDomain+"/include/ajax.php?service=vote&action=vlist&u=1&state="+state+"&page="+atpage+"&pageSize="+pageSize,
    type: "GET",
    dataType: "jsonp",
    success: function (data) {
      if(data && data.state != 200){
        if(data.state == 101){
          objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
        }else{
          var list = data.info.list, pageInfo = data.info.pageInfo, html = [];

          //拼接列表
          if(list.length > 0){

            var t = window.location.href.indexOf(".html") > -1 ? "?" : "&";
            var param = t + "do=edit&id=";
            var statisUrlString = statisticsUrl + param;
            var urlString = editUrl + param;

            for(var i = 0; i < list.length; i++){
              var item        = [],
                  id          = list[i].id,
                  title       = list[i].title,
                  url         = list[i].url,
                  click       = list[i].click,
                  vstate      = list[i].state,
                  arcrank     = list[i].arcrank,
                  join        = list[i].join,
                  // waitpay     = list[i].waitpay,
                  pubdate     = huoniao.transTimes(list[i].pubdate, 1);

              // url = waitpay == "1" || list[i].arcrank != "1" ? 'javascript:;' : url;

              var stateTxt = '', styleState = vstate;
              if(arcrank == 0){
                stateTxt = '待审核';
                styleState = 2;
              }else if(arcrank == 2){
                stateTxt = '审核拒绝';
                vstate = 3;
              }else if(vstate == 0){
                stateTxt = '未开始';
              }else if(vstate == 1){
                stateTxt = '投票进行中...';
              }else if(vstate == 2){
                stateTxt = '已结束';
              }

              html.push('<div class="item fn-clear" data-id="'+id+'" data-join="'+join+'">');
              html.push('  <div class="i">');
              html.push('    <h5><a href="'+url+'" target="_blank" title="'+title+'">'+title+'</a><span class="state state'+styleState+'">'+stateTxt+'</span></h5>');
              html.push('    <p>发布时间：'+pubdate+'</p>');
              html.push('    <div class="btns o">');
              html.push('      <span><font>'+join+'</font>人已参与</span>');
              if(vstate == 1){
                html.push('    <a href="javascript:;" class="stop">结束</a>');
              }
              html.push('      <a href="javascript:;" class="del"><s></s>'+langData['siteConfig'][6][8]+'</a>')
              if(join == 0 && vstate != 2){
                html.push('    <a href="'+urlString+id+'" class="edit" target="_blank">'+langData['siteConfig'][6][6]+'</a>');
              }
              html.push('      <a href="'+statisUrlString+id+'" class="statistics" target="_blank">查看统计</a>');
              html.push('    </div>');
              html.push('  </div>');
              html.push('</div>');
            }

            objId.html(html.join(""));

          }else{
            objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
          }

          switch(state){
            case "":
              totalCount = pageInfo.totalCount;
              break;
            case "0":
              totalCount = pageInfo.gray;
              break;
            case "1":
              totalCount = pageInfo.audit;
              break;
            case "2":
              totalCount = pageInfo.expire;
              break;
          }
          $("#total").html(pageInfo.totalCount);
          // $("#gray").html(pageInfo.gray);
          $("#audit").html(pageInfo.audit);
          $("#expire").html(pageInfo.expire);
          showPageInfo();
        }
      }else{
        objId.html("<p class='loading'>"+langData['siteConfig'][20][126]+"</p>");
      }
    }
  });
}
