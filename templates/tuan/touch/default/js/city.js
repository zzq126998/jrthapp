$(function(){

  $('a').bind('contextmenu', function(e) {
    e.preventDefault();
  })

  // 获取城市列表
  $.ajax({
    url: "/include/ajax.php?service=tuan&action=city",
    type: "GET",
    dataType: "json",
    success: function(data){
      var list = data.info, cityArr = new Array(), html = [], html1 = [];
      for (var i = 0; i < list.length; i++) {
        var pinyin = list[i].pinyin.substr(0,1), tableList = $('.table-list-'+pinyin);

        if(cityArr[pinyin] == undefined){
          cityArr[pinyin] = [];
        }

        var lArr = [];
        lArr.name = list[i].name;
        lArr.url = list[i].url;

        cityArr[pinyin].push(lArr);

      }

      $('.search-box input').bind('input propertychange', function(){
        var t = $(this), val = t.val(), searchHtml = [];
        if (val != "") {
          $('body').addClass('fixed');
          $('.search-list, .search-box .close').show();

          for (var m = 0; m < list.length; m++) {
            var name = list[m].name, pinyin = list[m].pinyin;
            if (name.indexOf(val) >= 0 || pinyin.indexOf(val) >= 0) {
              searchHtml.push('<li><a href="'+list[m].url+'">'+list[m].name+'</a></li>');
            }else {
              $('.search-list ul').html('');
            }
          }

          $('.search-list ul').html('');
          $('.search-list ul').html(searchHtml.join(''));

        }else {
          $('body').removeClass('fixed');
          $('.search-list, .search-box .close').hide();
        }
      })

      var szmArr = [];
      for(var key in cityArr){
        var szm = key;
        // 右侧字母数组
        szmArr.push(key);

      }

      // 右侧字母填充
      szmArr.sort();
      html1.push('<ul>');
      for (var i = 0; i < szmArr.length; i++) {
        html1.push('<li><a href="javascript:;">'+szmArr[i]+'</a></li>');

        // 左侧城市填充
        html.push('<p class="table-tit table-tit-'+szmArr[i]+'" id="'+szmArr[i]+'">'+szmArr[i]+'</p>');
        html.push('<ul class="table-list">');
        for (var j = 0; j < cityArr[szmArr[i]].length; j++) {
          html.push('<li><a href="'+cityArr[szmArr[i]][j].url+'">'+cityArr[szmArr[i]][j].name+'</a></li>');
        }
        html.push('</ul>');


      }
      html1.push('</ul>');

      $('.table-city').html(html.join(''));
      $('.szm').html(html1.join(''));

    }
  })



  // 关闭搜索框
  $('.search-box .close').click(function(){
    $('.search-box input').val('');
    $('body').removeClass('fixed');
    $('.search-list, .search-box .close').hide();
  })

  var navBar = $(".navbar");
  navBar.on("touchstart", function (e) {
      $(this).addClass("active");
      $('.letter').html($(e.target).html()).show();
      var width = navBar.find("li").width();
      var height = navBar.find("li").height();
      var touch = e.touches[0];
      var pos = {"x": touch.pageX, "y": touch.pageY};
      var x = pos.x, y = pos.y;
      $(this).find("li").each(function (i, item) {
          var offset = $(item).offset();
          var left = offset.left, top = offset.top;
          if (x > left && x < (left + width) && y > top && y < (top + height)) {
              var id = $(item).find('a').text();
              var cityHeight = $('#'+id).offset().top;
              $('body').scrollTop(cityHeight);
              $('.letter').html($(item).html()).show();
          }
      });
  });

  navBar.on("touchmove", function (e) {
      e.preventDefault();
      var width = navBar.find("li").width();
      var height = navBar.find("li").height();
      var touch = e.touches[0];
      var pos = {"x": touch.pageX, "y": touch.pageY};
      var x = pos.x, y = pos.y;
      $(this).find("li").each(function (i, item) {
          var offset = $(item).offset();
          var left = offset.left, top = offset.top;
          if (x > left && x < (left + width) && y > top && y < (top + height)) {
              var id = $(item).find('a').text();
              var cityHeight = $('#'+id).offset().top;
              $('body').scrollTop(cityHeight);
              $('.letter').html($(item).html()).show();
          }
      });
  });


  navBar.on("touchend", function () {
      $(this).removeClass("active");
      $(".letter").hide();
  })

  // 清除列表cookie
	$('.nav li').click(function(){
		window.sessionStorage.removeItem('house-list');
		window.sessionStorage.removeItem('maincontent');
		window.sessionStorage.removeItem('detailList');
		window.sessionStorage.removeItem('video_list');
	})

})
// 重新定位
$('.localBtn').click(function(){
  getCity();
})
getCity();

// 定位
function getCity() {
    $('.local p').html(langData['siteConfig'][27][135]);
  HN_Location.init(function(data){
      if (data == undefined || data.province == "" || data.city == "" || data.district == "") {
          $('.local p').html(langData['siteConfig'][27][136]);
      }else{
          var province = data.province, city = data.city, district = data.district, page = 1;
          var time = Date.parse(new Date());
          selectCity(province, city, district);
      }
  })

}


// 根据定位城市查询本站数据
function selectCity(province, city, district){

    $.ajax({
      url: "/include/ajax.php?service=tuan&action=verifycity&province="+province+"&city="+city+"&district="+district,
      type: "POST",
      dataType: "json",
      success: function(data){
        if(data && data.state == 100){
            $('.local p').html('<a href="'+data.info.url+'">'+data.info.name+'</a>');
        }else {
            $('.local p').html('当前城市暂未开通团购');
        }
      },
      error: function(){
        alert('网络错误，请重试');
      }
    })

}
