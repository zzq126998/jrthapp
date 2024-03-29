$(function(){
		// 字体大小
	var Dpr = 1,
		uAgent = window.navigator.userAgent;
	var isIOS = uAgent.match(/iphone/i);
	var isYIXIN = uAgent.match(/yixin/i);
	var is2345 = uAgent.match(/Mb2345/i);
	var ishaosou = uAgent.match(/mso_app/i);
	var isSogou = uAgent.match(/sogoumobilebrowser/ig);
	var isLiebao = uAgent.match(/liebaofast/i);
	var isGnbr = uAgent.match(/GNBR/i);
	var wWidth, wHeight, wFsize = 100;

	function resizeRoot() {
		var wWidth = (screen.width > 0) ? (window.innerWidth >= screen.width || window.innerWidth == 0) ? screen.width : window.innerWidth : window.innerWidth,
			wDpr;
		var wHeight = (screen.height > 0) ? (window.innerHeight >= screen.height || window.innerHeight == 0) ? screen.height : window.innerHeight : window.innerHeight;
		if (window.devicePixelRatio) {
			wDpr = window.devicePixelRatio;
		} else {
			wDpr = isIOS ? wWidth > 818 ? 3 : wWidth > 480 ? 2 : 1 : 1;
		}
		if (isIOS) {
			wWidth = screen.width;
			wHeight = screen.height;
		}
		if (wWidth > wHeight) {
			// wWidth = wHeight;
		}
		wFsize = wWidth > 1080 ? 144 : wWidth / 7.5;
		wFsize = wFsize > 32 ? wFsize : 32;
		window.screenWidth_ = wWidth;
		if (isYIXIN || is2345 || ishaosou || isSogou || isLiebao || isGnbr) { //YIXIN 和 2345 这里有个刚调用系统浏览器时候的bug，需要一点延迟来获取
			setTimeout(function() {
				wWidth = (screen.width > 0) ? (window.innerWidth >= screen.width || window.innerWidth == 0) ? screen.width : window.innerWidth : window.innerWidth;
				wHeight = (screen.height > 0) ? (window.innerHeight >= screen.height || window.innerHeight == 0) ? screen.height : window.innerHeight : window.innerHeight;
				wFsize = wWidth > 1080 ? 144 : wWidth / 7.5;
				wFsize = wFsize > 32 ? wFsize : 32;
				document.getElementsByTagName('html')[0].style.fontSize = wFsize + 'px';
				$('body').addClass('show');
				complate(0, wWidth, wHeight, wFsize);
			}, 500);
		} else {
			document.getElementsByTagName('html')[0].style.fontSize = wFsize + 'px';
			$('body').addClass('show');
		}
	}

	resizeRoot();
	window.addEventListener("orientationchange", function() {
		resizeRoot();
	})

	// 判断设备类型，ios全屏
  var device = navigator.userAgent;
  if (device.indexOf('huoniao_iOS') > -1) {
		$('body').addClass('huoniao_iOS');
	}



})

//输出货币标识
function echoCurrency(type){
	var pre = (typeof cookiePre != "undefined" && cookiePre != "") ? cookiePre : "HN_";
	var currencyArr = $.cookie(pre+"currency");
	if(currencyArr){
		var currency = JSON.parse(currencyArr);
		if(type){
			return currency[type]
		}else{
			return currencyArr['short'];
		}
	}
}
