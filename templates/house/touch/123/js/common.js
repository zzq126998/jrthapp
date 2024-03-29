var Dpr = 1, uAgent = window.navigator.userAgent;
var isIOS = uAgent.match(/iphone/i);
var isYIXIN = uAgent.match(/yixin/i);
var is2345 = uAgent.match(/Mb2345/i);
var ishaosou = uAgent.match(/mso_app/i);
var isSogou = uAgent.match(/sogoumobilebrowser/ig);
var isLiebao = uAgent.match(/liebaofast/i);
var isGnbr = uAgent.match(/GNBR/i);
var wWidth ,wHeight ,wFsize = 100;
function resizeRoot(){
    var wWidth = (screen.width > 0) ? (window.innerWidth >= screen.width || window.innerWidth == 0) ? screen.width : window.innerWidth : window.innerWidth, wDpr;
    var wHeight = (screen.height > 0) ? (window.innerHeight >= screen.height || window.innerHeight == 0) ? screen.height : window.innerHeight : window.innerHeight;
    if (window.devicePixelRatio) {
        wDpr = window.devicePixelRatio;
    } else {
        wDpr = isIOS ? wWidth > 818 ? 3 : wWidth > 480 ? 2 : 1 : 1;
    }
    if(isIOS) {
        wWidth = screen.width;
        wHeight = screen.height;
    }
    if(wWidth > wHeight){
        // wWidth = wHeight;
    }
    wFsize = wWidth > 1080 ? 144 : wWidth / 7.5;
    wFsize = wFsize > 32 ? wFsize : 32;
    window.screenWidth_ = wWidth;
    if(isYIXIN || is2345 || ishaosou || isSogou || isLiebao || isGnbr){//YIXIN 和 2345 这里有个刚调用系统浏览器时候的bug，需要一点延迟来获取
        setTimeout(function(){
            wWidth = (screen.width > 0) ? (window.innerWidth >= screen.width || window.innerWidth == 0) ? screen.width : window.innerWidth : window.innerWidth;
            wHeight = (screen.height > 0) ? (window.innerHeight >= screen.height || window.innerHeight == 0) ? screen.height : window.innerHeight : window.innerHeight;
            wFsize = wWidth > 1080 ? 144 : wWidth / 7.5;
            wFsize = wFsize > 32 ? wFsize : 32;
            document.getElementsByTagName('html')[0].style.fontSize = wFsize + 'px';
    				$('body').addClass('show');
            complate(0,wWidth,wHeight,wFsize);
        },500);
    }else{
        document.getElementsByTagName('html')[0].style.fontSize = wFsize + 'px';
				$('body').addClass('show');
        complate(0,wWidth,wHeight,wFsize);
    }
}

resizeRoot();
window.addEventListener("orientationchange", function() {
	 resizeRoot();
})
var comTime;
function complate(n,w,h,b){
    clearTimeout(comTime);
    if(typeof returnWinSize === 'function') {
        returnWinSize(w,h,b);
    } else {
        if(n++ > 50) return;
        comTime = setTimeout(function(){
        	complate(n,w,h,b);
        },100)
    }
}

// document.domain = masterDomain.replace("http://", "");
var uploadErrorInfo = [],
	huoniao = {

	//转换PHP时间戳
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

	//数字格式化
	,number_format: function(number, decimals, dec_point, thousands_sep) {
		var n = !isFinite(+number) ? 0 : +number,
				prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
				sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
				dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
				s = '',
				toFixedFix = function (n, prec) {
					var k = Math.pow(10, prec);
					return '' + Math.round(n * k) / k;
				};

		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		return s.join(dec);
	}

	//将普通时间格式转成UNIX时间戳
	,transToTimes: function(timestamp){
		var new_str = timestamp.replace(/:/g,'-');
    new_str = new_str.replace(/ /g,'-');
    var arr = new_str.split("-");
    var datum = new Date(Date.UTC(arr[0],arr[1]-1,arr[2],arr[3]-8,arr[4],arr[5]));
    return datum.getTime()/1000;
	}

	//登录
	,login: function(){
		$("#login_iframe, #login_bg").remove();

		var site = channelDomain;

		//如果频道域名为子目录
		if(channelDomain.replace("//", "").indexOf("/") > 1){
			site = masterDomain;
		}

		var src = masterDomain+'/login.html?site='+site+'&v=1.8',
				wWidth = $(document).width(),
				wHeight = $(document).height(),
				fWidht = 650,
				fHeight = 314;
		$("<div>")
			.attr("id", "login_iframe")
			.html('<iframe scrolling="no" src="'+src+'" frameborder="0" allowtransparency="true"></iframe>')
			.appendTo("body");
		$("<div>")
			.attr("id", "login_bg")
			.css({"height": wHeight+"px"})
			.html('<div class="loadPage">页面加载中，请稍候...</div><iframe></iframe>')
			.appendTo("body");
	}

	//登录窗口尺寸调整
	,changeLoginFrameSize: function(height){
		$("#login_iframe, #login_iframe iframe").css({"height": height+"px"}).fadeIn("fast");
	}

	//关闭登录窗口
	,closeLoginFrame: function(){
		$("#login_iframe, #login_bg").fadeOut("fast", function(){
			$("#login_iframe, #login_bg").remove();
		});
	}

	//判断登录成功
	,checkLogin: function(fun){
		//异步获取用户信息
		$.ajax({
			url: masterDomain+'/getUserInfo.html',
			type: "GET",
			async: false,
			dataType: "jsonp",
			success: function (data) {
				if(data){
					fun();
				}
			},
			error: function(){
				return false;
			}
		});
	}

	//登录成功
	,loginSuccess: function(){
		//异步获取用户信息
		$.ajax({
			url: masterDomain+'/getUserInfo.html',
			type: "GET",
			dataType: "jsonp",
			success: function (data) {
				if(data){

					location.reload();
					return false;
					$("#navLoginBefore").hide();

					if(data.photo != ""){
						$("#upic a").html('<img src="'+huoniao.changeFileSize(data.photo, "small")+'" />');
					}else{
						$("#upic").html('欢迎您，').css({"width": "auto"});
					}
					$("#uname").html(data.nickname);

					if(data.message > 0){
						$("#umsg").html("消息("+(data.message > 99 ? "99+" : data.message)+")").show();
					}
					$("#navLoginAfter").show();
				}
			},
			error: function(){

			}
		});
	}

	//获取附件不同尺寸
	,changeFileSize: function(url, to, from){
		if(url == "" || url == undefined) return "";
		if(to == "") return url;
		var from = (from == "" || from == undefined) ? "large" : from;
		if(hideFileUrl == 1){
			return url + "&type=" + to;
		}else{
			return url.replace(from, to);
		}
	}

	//获取字符串长度
	//获得字符串实际长度，中文2，英文1
	,getStrLength: function(str) {
		var realLength = 0, len = str.length, charCode = -1;
		for (var i = 0; i < len; i++) {
		charCode = str.charCodeAt(i);
		if (charCode >= 0 && charCode <= 128) realLength += 1;
		else realLength += 2;
		}
		return realLength;
	}

	//旋转图集文件
	,rotateAtlasPic: function(mod, direction, img, c) {
			var g = {
				mod: mod,
				type: "rotateAtlas",
				direction: direction,
				picpath: img,
				randoms: Math.random()
			};
			$.ajax({
				type: "POST",
				cache: false,
				async: false,
				url: "/include/upload.inc.php",
				dataType: "json",
				data: $.param(g),
				success: function(a) {
					try {
						c(a)
					} catch(b) {}
				}
			});
		}

	//删除已上传的图片
	,delAtlasImg: function(mod, obj, path, listSection, delBtn){
		var g = {
			mod: mod,
			type: "delAtlas",
			picpath: path,
			randoms: Math.random()
		};
		$.ajax({
			type: "POST",
			cache: false,
			async: false,
			url: "/include/upload.inc.php",
			dataType: "json",
			data: $.param(g),
			success: function() {}
		});
		$("#"+obj).remove();

		if($("#"+listSection).find("li").length < 1){
			$("#"+listSection).hide();
			$("#"+delBtn).hide();
		}
	}

	//将字符串转成utf8
	,toUtf8: function(str) {
		var out, i, len, c;
		out = "";
		len = str.length;
		for(i = 0; i < len; i++) {
			c = str.charCodeAt(i);
			if ((c >= 0x0001) && (c <= 0x007F)) {
				out += str.charAt(i);
			} else if (c > 0x07FF) {
				out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
				out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));
				out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
			} else {
				out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));
				out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
			}
		}
		return out;
	}

	//异步操作
	,operaJson: function(url, action, callback){
		$.ajax({
			url: url,
			data: action,
			type: "POST",
			dataType: "json",
			success: function (data) {
				typeof callback == "function" && callback(data);
			},
			error: function(){

				$.post("../login.php", "action=checkLogin", function(data){
					if(data == "0"){
						huoniao.showTip("error", "登录超时，请重新登录！");
						setTimeout(function(){
							location.reload();
						}, 500);
					}else{
						huoniao.showTip("error", "网络错误，请重试！");
					}
				});

			}
		});
	}

	//合并相同内容的单元格
	,rowspan: function(t, colIdx) {
	    return t.each(function() {
	        var that;
	        $('tr', this).each(function(row) {
	            $('td:eq(' + colIdx + ')', this).filter(':visible').each(function(col) {
	                if (that != null && $(this).html() == $(that).html()) {
	                    rowspan = $(that).attr("rowSpan");
	                    if (rowspan == undefined) {
	                        $(that).attr("rowSpan", 1);
	                        rowspan = $(that).attr("rowSpan");
	                    }
	                    rowspan = Number(rowspan) + 1;
	                    $(that).attr("rowSpan", rowspan);
	                    $(this).hide();
	                } else {
	                    that = this;
	                }
	            });
	        });
	    });
	}


}

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



$(function(){

	$.fn.scrollTo =function(options){
        var defaults = {
            toT : 0, //滚动目标位置
            durTime : 500, //过渡动画时间
            delay : 30, //定时器时间
            callback:null //回调函数
        };
        var opts = $.extend(defaults,options),
            timer = null,
            _this = this,
            curTop = _this.scrollTop(),//滚动条当前的位置
            subTop = opts.toT - curTop, //滚动条目标位置和当前位置的差值
            index = 0,
            dur = Math.round(opts.durTime / opts.delay),
            smoothScroll = function(t){
                index++;
                var per = Math.round(subTop/dur);
                if(index >= dur){
                    _this.scrollTop(t);
                    window.clearInterval(timer);
                    if(opts.callback && typeof opts.callback == 'function'){
                        opts.callback();
                    }
                    return;
                }else{
                    _this.scrollTop(curTop + index*per);
                }
            };
        timer = window.setInterval(function(){
            smoothScroll(opts.toT);
        }, opts.delay);
        return _this;
    };




	//退出
	$("body").delegate(".logout", "click", function(){
		$.cookie(cookiePre+'login_user', null, {expires: -10, domain: channelDomain.replace("http://", ""), path: '/'});
	});


  //多域名同步登录
	var masterDomainClean = typeof masterDomain != 'undefined' ? masterDomain.replace("http://", "") : "",
			channelDomainClean = typeof channelDomain != 'undefined' ? channelDomain.replace("http://", "") : "";
	if(masterDomainClean != "" && channelDomainClean != "" && channelDomainClean.indexOf(masterDomainClean) == -1){
		$("body").append('<iframe src="'+masterDomain+'/sso.html?site='+channelDomainClean+'" style="display:none;"></iframe>');
	}

	// 返回顶部
	$(window).scroll(function(){
		var sct = $(window).scrollTop();
		var btn = $('.fixBtn'),maxo = btn.attr('data-max');
		if(maxo) {
			var max = parseInt($(btn.attr('data-max')).offset().top - $(window).height());
		} else {
			var max = sct + 1;
		}
		if(sct > 500 && sct < max) {
	        btn.show();
	    } else {
	        btn.hide();
	    }
	})
    $('#backTop ,.backTop').click(function(){
        var sct = $(window).scrollTop();
        var scrolltop=$('body').offset().top-window.innerHeight;
        scroll(scrolltop,200);
        $(".navfixbox").css('opacity', '1').show();
    })
    // 返回上一页
    $('.goback').click(function(){
    	history.go(-1);
    })


    var device = navigator.userAgent;
    if (device.indexOf('huoniao_iOS') > -1) {
        $('body').addClass('huoniao_iOS');
        $('.nav .btn_l,.nav .btn_r').hide();
    }


  // 页面向上滚动动画
  function scroll(scrollTo, time) {
    var scrollFrom = parseInt(document.body.scrollTop),
    i = 0,
    runEvery = 5; // run every 5ms

    scrollTo = parseInt(scrollTo);
    time /= runEvery;

    var interval = setInterval(function () {
      i++;
      document.body.scrollTop = (scrollTo - scrollFrom) / time * i + scrollFrom;
      if (i >= time) {clearInterval(interval);    }
    }, runEvery);
  }


 	//头部--微信引导关注
    $('.wechat').bind('click', function(){
      $('.wechat-popup').css("visibility","visible");
    });

    $('.wechat-popup .close').bind('click', function(){
      $('.wechat-popup').css("visibility","hidden");
    });


    // 回到顶部
    $('.gotop').click(function(){
        var dealTop = $("body").offset().top;
        $("html,body").scrollTo({toT:dealTop})
        $('.gotop').hide();
    })

    // 返回顶部
    var windowTop=0;
    $(window).on("scroll", function(){
        var scrolls = $(window).scrollTop();//获取当前可视区域距离页面顶端的距离
        if(scrolls>=windowTop){//当B>A时，表示页面在向上滑动
            //需要执行的操作
            windowTop=scrolls;
            $('.gotop').hide();

        }else{//当B<a 表示手势往下滑动
            //需要执行的操作
            windowTop=scrolls;
            $('.gotop').show();
        }
        if(scrolls==0){
          $('.gotop').hide();
        }
    });

     $('.add').click(function(){
        var t = $(this);

        if( $('.wechat').hasClass('wechat_show') || $('.wechat').hasClass('wechat_hide') ){
          if(t.hasClass('active')){
            $('.gotop').show();
            $('.wechat').removeClass('wechat_show');
            $('.my').removeClass('my_show');
            $('.wechat').addClass('wechat_hide');
            $('.my').addClass('my_hide');
            t.removeClass('add_x');
            t.addClass('add_y');
            t.removeClass('active');
          }else{
            $('.gotop').hide();
            $('.wechat').removeClass('wechat_hide');
            $('.my').removeClass('my_hide');
            $('.wechat').addClass('wechat_show');
            $('.my').addClass('my_show');
             t.addClass('add_x');
             t.removeClass('add_y');
            t.addClass('active');
          }
        }else{
            $('.gotop').hide();
            $('.wechat').removeClass('wechat_hide');
            $('.my').removeClass('my_hide');
            $('.wechat').addClass('wechat_show');
            $('.my').addClass('my_show');
             t.addClass('add_x');
            t.addClass('active');
        }
    });
    

})



//单点登录执行脚本
function ssoLogin(info){

	if(info){
    $.cookie(cookiePre+'login_user', info['uid'], {expires: 365, domain: channelDomain.replace("http://", ""), path: '/'});
  }else{
    $.cookie(cookiePre+'login_user', null, {expires: -10, domain: channelDomain.replace("http://", ""), path: '/'});
  }

}
