// 判断设备类型，ios全屏
var device = navigator.userAgent;
if (device.indexOf('huoniao_iOS') > -1) {
  $('body').addClass('huoniao_iOS');
}
var huoniao = {
  transTimes: function(timestamp, n){
		update = new Date(timestamp*1000);//时间戳要乘1000
		year   = update.getFullYear();
		month  = (update.getMonth()+1<10)?('0'+(update.getMonth()+1)):(update.getMonth()+1);
		day    = (update.getDate()<10)?('0'+update.getDate()):(update.getDate());
		hour   = (update.getHours()<10)?('0'+update.getHours()):(update.getHours());
		minute = (update.getMinutes()<10)?('0'+update.getMinutes()):(update.getMinutes());
		second = (update.getSeconds()<10)?('0'+update.getSeconds()):(update.getSeconds());
		if(n == 1){
			return (year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second);
		}else if(n == 2){
			return (year+'-'+month+'-'+day);
		}else if(n == 3){
			return (month+'-'+day);
		}else{
			return 0;
		}
	}
  //获取附件不同尺寸
	,changeFileSize: function(url, to, from){
		if(url == "" || url == undefined) return "";
		if(to == "") return url;
		var from = (from == "" || from == undefined) ? "large" : from;
		var newUrl = "";
		if(hideFileUrl == 1){
			newUrl =  url + "&type=" + to;
		}else{
			newUrl = url.replace(from, to);
		}

		return newUrl;

	}

}

$(function(){

  var loadMoreLock = false, page = 1, isend = false;

  // 点击切换搜索列表
  $('.slideNav a').click(function(){
    $('.slideNav a').removeClass('active');
    $(this).addClass('active');
    $('#action').val($(this).attr('data-action'));
    getList(1);
  })




  // 下拉加载
  $(window).on("scroll", function(){
		var sct = $(window).scrollTop();
		if(sct + $(window).height() + 50 > $(document).height()) {
      if (!loadMoreLock && !isend) {
        page++;
        getList();
      }
    }
	});

  var actionType = getUrlParam('action');
  $('.slideNav .'+actionType).addClass('active');
  $('#action').val($('.slideNav .active').attr('data-action'));
  getList(1);

  // 异步获取列表
  function getList(tr){

    var keywords = decodeURI(getUrlParam('keywords'));
    $('.search-inp').val(keywords);

    if (tr) {
      page = 1;
      $('.list').html('');
    }

    $('.list').append('<div class="loading">加载中...</div>');

    var active = $('.slideNav .active'), url, action = active.attr('data-action');

    if (action == "article") {
      url = masterDomain + "/include/ajax.php?service=article&action=alist&page="+page+"&pageSize=10&title="+keywords;
    }else if (action == "image") {
      url = masterDomain + "/include/ajax.php?service=image&action=alist&page="+page+"&pageSize=10&title="+keywords;
    }else if (action == "info") {
      url = masterDomain + "/include/ajax.php?service=info&action=ilist&page="+page+"&pageSize=10&title="+keywords;
    }else if (action == "tuan") {
      url = masterDomain + "/include/ajax.php?service=tuan&action=tlist&page="+page+"&pageSize=10&title="+keywords;
    }else if (action == "waimai") {
      url = masterDomain + "/include/ajax.php?service=waimai&action=shopList&page="+page+"&pageSize=10&title="+keywords;
    }else if (action == "shop") {
      url = masterDomain + "/include/ajax.php?service=shop&action=slist&page="+page+"&pageSize=10&keywords="+keywords;
    }else if (action == "house") {
      url = masterDomain + "/include/ajax.php?service=house&action=loupanList&page="+page+"&pageSize=10&keywords="+keywords;
    }else if (action == "renovation") {
      url = masterDomain + "/include/ajax.php?service=renovation&action=news&page="+page+"&pageSize=10";
    }else if (action == "job") {
      url = masterDomain + "/include/ajax.php?service=job&action=post&page="+page+"&pageSize=10&title="+keywords;
    }else if (action == "tieba") {
      url = masterDomain + "/include/ajax.php?service=tieba&action=tlist&page="+page+"&pageSize=10&keywords="+keywords;
    }else if (action == "dating") {
      url = masterDomain + "/include/ajax.php?service=dating&action=memberList&page="+page+"&pageSize=10";
    }else if (action == "video") {
      url = masterDomain + "/include/ajax.php?service=video&action=alist&page="+page+"&pageSize=10&title="+keywords;
    }else if (action == "huangye") {
      url = masterDomain + "/include/ajax.php?service=huangye&action=ilist&page="+page+"&pageSize=10&keywords="+keywords;
    }else if (action == "vote") {
      url = masterDomain + "/include/ajax.php?service=vote&action=vlist&page="+page+"&pageSize=10";
    }else if (action == "huodong") {
      url = masterDomain + "/include/ajax.php?service=huodong&action=hlist&page="+page+"&pageSize=10&keywords="+keywords;
    }else if (action == "live") {
      // url = masterDomain + "/include/ajax.php?service=huodong&action=hlist&page=1&pageSize=10";
    }else{
      url = masterDomain + "/include/ajax.php?service=info&action=ilist&page=1&pageSize=10";
    }

		loadMoreLock = true;

    $.ajax({
      url: url,
      type: "GET",
      dataType: "jsonp",
      success: function(data){
        if (data && data.state != 200) {
          if (data.state == 101) {
            $('.loading').remove();
						$('.list').append('<div class="loading">暂无数据！</div>');
            $('.count').html(0);
          }else {
            var list = data.info.list, html = [];
            var totalPage = data.info.pageInfo.totalPage;
            var totalCount = data.info.pageInfo.totalCount;
            $('.count').html(totalCount);
						active.attr('data-totalPage', totalPage);
            for (var i = 0; i < list.length; i++) {
              // 资讯模块
              if (action == "article") {

                // 如果是图集
                if(list[i].group_img){
                  html.push('<div class="item imglist">');
                  html.push('<a href="' + list[i].url + '" class="fn-clear">');
                  html.push('<p class="tit">' + list[i].title + '</p>');
                  html.push('<p class="desc">' + list[i].description + '</p>');
                  html.push('<ul class="fn-clear">');
                  var n = 0;
                  for (var g = 0; g < list[i].group_img.length; g++) {
                    var src = huoniao.changeFileSize(list[i].group_img[g].path, "small");
                    if(src && n < 3) {
                      html.push('<li><img src="' + src +'"></li>');
                      n++;
                      if(n == 3) break;
                    }
                  }
                  html.push('</ul>');
                  html.push('<p class="tag"><span class="source">'+list[i].source+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                  html.push('</a>');
                  html.push('</div>');

                //如果是视频
                }else if (list[i].typeid == "3") {
                  var litpic = list[i].litpic;
                  html.push('<div class="item videoBox">');
                  html.push('<a href="' + list[i].url + '" class="fn-clear">');
                  html.push('<p class="tit">' + list[i].title + '</p>');
                  html.push('<p class="desc">' + list[i].description + '</p>');
                  html.push('<div class="video">');
                  if (litpic) {
                    html.push('<img src="' + list[i].litpic + '" alt=""><span class="video_bg"></span>');
                  }
                  html.push('</div>');
                  html.push('<p class="tag"><span class="source">'+list[i].source+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                  html.push('</a>');
                  html.push('</div>');

                // 缩略图
                }else {
                  var litpic = list[i].litpic;
                  html.push('<div class="item">');
                  html.push('<a href="' + list[i].url + '" class="fn-clear">');
                  if (litpic) {
                    html.push('<div class="imgbox"><img src="' + list[i].litpic + '"></div>');
                  }
                  html.push('<div class="txtbox">');

									html.push('<p class="tit">' + list[i].title + '</p>');
									html.push('<p class="desc">' + list[i].description + '</p>');
                  html.push('<p class="tag"><span class="source">'+list[i].source+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                  html.push('</div>');
                  html.push('</a>');
                  html.push('</div>');
                }

              // 图片列表
              }else if (action == "image") {
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic) {
                  html.push('<div class="imgbox"><img src="' + list[i].litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].subtitle + '</p>');
                html.push('<p class="tag"><span class="source">'+list[i].source+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 二手
              }else if (action == "info"){
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic) {
                  html.push('<div class="imgbox"><img src="' + list[i].litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].desc + '</p>');
                html.push('<p class="tag"><span class="source">'+list[i].teladdr+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 团购
              }else if (action == "tuan"){
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic && litpic != null) {
                  html.push('<div class="imgbox"><img src="' + list[i].litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].subtitle + '</p>');
                html.push('<p class="tag"><span class="source">原价：'+echoCurrency('symbol')+list[i].market+'</span><span class="time">现价：'+echoCurrency('symbol')+ list[i].price + '</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 外卖
              }else if (action == "waimai"){
                var logo = list[i].pic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (logo) {
                  html.push('<div class="imgbox"><img src="' + logo + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].shopname + '</p>');
                html.push('<p class="desc">' + list[i].typename + '</p>');
                html.push('<p class="tag"><span class="source">配送费：'+echoCurrency('symbol')+list[i].delivery_fee+'</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 商城
              }else if (action == "shop"){
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic) {
                  html.push('<div class="imgbox"><img src="' + list[i].litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">库存：' + list[i].inventory + '</p>');
                html.push('<p class="tag"><span class="source">原价：'+echoCurrency('symbol')+list[i].mprice+'</span><span class="time">现价：'+echoCurrency('symbol')+list[i].price+'</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 房产
              }else if (action == "house"){
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic) {
                  html.push('<div class="imgbox"><img src="' + list[i].litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].address + '</p>');
                html.push('<p class="tag"><span class="source">'+list[i].protype+'</span><span class="time">'+list[i].zhuangxiu+'</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 装修
              }else if (action == "renovation"){
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic) {
                  html.push('<div class="imgbox"><img src="' + list[i].litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].description + '</p>');
                html.push('<p class="tag"><span class="source">浏览：'+list[i].click+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 招聘
              }else if (action == "job") {
                var company = list[i].company;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (company && company != "" && company.logo) {
                  html.push('<div class="imgbox"><img src="' + company.logo + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].note + '</p>');
                html.push('<p class="tag"><span class="source">'+list[i].salary+'</span><span class="time">' + list[i].timeUpdate + '</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 贴吧列表
              }else if (action == "tieba") {
                var group = list[i].imgGroup, username = list[i].username;
                // 如果是图集
                if(group && group != ""){
                  html.push('<div class="item imglist">');
                  html.push('<a href="' + list[i].url + '" class="fn-clear">');
                  html.push('<p class="tit">' + list[i].title + '</p>');
                  html.push('<p class="desc">' + list[i].content + '</p>');
                  html.push('<ul class="fn-clear">');
                  var n = 0;
                  for (var g = 0; g < group.length; g++) {
                    var src = group[g];
                    if(src && n < 3) {
                      html.push('<li><img src="' + src +'"></li>');
                      n++;
                      if(n == 3) break;
                    }
                  }
                  html.push('</ul>');
                  html.push('<p class="tag"><span class="source">'+list[i].typename[0]+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                  html.push('</a>');
                  html.push('</div>');

                //如果是视频
                }else if (list[i].typeid == "3") {
                  var litpic = list[i].litpic;
                  html.push('<div class="item videoBox">');
                  html.push('<a href="' + list[i].url + '" class="fn-clear">');
                  html.push('<p class="tit">' + list[i].title + '</p>');
                  html.push('<p class="desc">' + list[i].content + '</p>');
                  html.push('<div class="video">');
                  if (litpic) {
                    html.push('<img src="' + list[i].litpic + '" alt=""><span class="video_bg"></span>');
                  }
                  html.push('</div>');
                  html.push('<p class="tag"><span class="source">'+list[i].typename[0]+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                  html.push('</a>');
                  html.push('</div>');

                // 没有图
                }else {
                  var litpic = list[i].litpic;
                  html.push('<div class="item">');
                  html.push('<a href="' + list[i].url + '" class="fn-clear">');
                  html.push('<div class="txtbox">');

									html.push('<p class="tit">' + list[i].title + '</p>');
									html.push('<p class="desc">' + list[i].content + '</p>');
                  html.push('<p class="tag"><span class="source">'+list[i].typename[0]+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                  html.push('</div>');
                  html.push('</a>');
                  html.push('</div>');
                }

              // 交友
              }else if (action == "dating"){
                var photo = list[i].photo;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (photo && photo != null) {
                  html.push('<div class="imgbox"><img src="' + photo + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].nickname + '</p>');
                html.push('<p class="desc">' + list[i].sign + '</p>');
                var sex = list[i].sex == 0 ? '女' : '男';
                html.push('<p class="tag"><span class="source">年龄：'+list[i].age+'</span><span class="time">'+ sex + '</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 视频
              }else if (action == "video") {
                var litpic = list[i].litpic;
                html.push('<div class="item videoBox">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].description + '</p>');
                html.push('<div class="video">');
                if (litpic && litpic != "") {
                  html.push('<img src="' + litpic + '" alt=""><span class="video_bg"></span>');
                }
                html.push('</div>');
                html.push('<p class="tag"><span class="source">'+list[i].source+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                html.push('</a>');
                html.push('</div>');

              // 黄页
              }else if (action == "huangye"){
                var weixinQr = list[i].weixinQr;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (weixinQr && weixinQr != null) {
                  html.push('<div class="imgbox"><img src="' + weixinQr + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">' + list[i].project + '</p>');
                html.push('<p class="tag"><span class="source">'+list[i].typeLevel[0]+'</span><span class="time">' + returnHumanTime(list[i].pubdate,3) + '</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 投票
              }else if (action == "vote"){
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic && litpic != null) {
                  html.push('<div class="imgbox"><img src="' + litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">&nbsp;结束时间：'+list[i].endf+'</p>');
                html.push('<p class="tag"><span class="source">已有'+list[i].usercount+'名选手</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              // 活动
              }else if (action == "huodong") {
                var litpic = list[i].litpic;
                html.push('<div class="item">');
                html.push('<a href="' + list[i].url + '" class="fn-clear">');
                if (litpic && litpic != null) {
                  html.push('<div class="imgbox"><img src="' + litpic + '"></div>');
                }
                html.push('<div class="txtbox">');

                html.push('<p class="tit">' + list[i].title + '</p>');
                html.push('<p class="desc">开始时间：' + returnHumanTime(list[i].began,3) + '</p>');

                var feetype = list[i].feetype == 0 ? '免费' : echoCurrency('symbol')+list[i].mprice;
                html.push('<p class="tag"><span class="source">'+feetype+'</span></p>');
                html.push('</div>');
                html.push('</a>');
                html.push('</div>');

              }else {
                html.push('');
              }
            }
						$('.loading').remove();
            $('.list').append(html.join(""));
            if(totalPage == page || totalCount == 0){
              isend = true;
              $('.list').append('<div class="loading">已加载全部数据！</div>');
            }else {
              isend = false;
            }

          }
        }
				loadMoreLock = false;

      }
    })



  }

})

function returnHumanTime(t,type) {
    var n = new Date().getTime();
    var c = n - t;
    var str = '';
    if(c < 3600) {
        str = parseInt(c / 60) + '分钟前';
    } else if(c < 86400) {
        str = parseInt(c / 3600) + '小时前';
    } else if(c < 604800) {
        str = parseInt(c / 86400) + '天前';
    } else {
        str = huoniao.transTimes(t,type);
    }
    return str;
}
function G(id) {
    return document.getElementById(id);
}
function in_array(needle, haystack) {
    if(typeof needle == 'string' || typeof needle == 'number') {
        for(var i in haystack) {
            if(haystack[i] == needle) {
                    return true;
            }
        }
    }
    return false;
}

//获取url中的参数
function getUrlParam(name) {
  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
  var r = window.location.search.substr(1).match(reg);
  if ( r != null ){
     return decodeURI(r[2]);
  }else{
     return null;
  }
}
