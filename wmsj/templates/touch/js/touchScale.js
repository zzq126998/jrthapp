!function(s, t) {
    // 字体大小
	var Dpr = 1,
		uAgent = s.navigator.userAgent;
	var isIOS = uAgent.match(/iphone/i);
	var isYIXIN = uAgent.match(/yixin/i);
	var is2345 = uAgent.match(/Mb2345/i);
	var ishaosou = uAgent.match(/mso_app/i);
	var isSogou = uAgent.match(/sogoumobilebrowser/ig);
	var isLiebao = uAgent.match(/liebaofast/i);
	var isGnbr = uAgent.match(/GNBR/i);
	var wWidth, wHeight, wFsize = 100;

	var v, w = s.document,
    x = w.documentElement,
    y = w.querySelector('meta[name="viewport"]'),
    z = w.querySelector('meta[name="flexible"]'),
    A = 0,
    B = 0,
    C = t.flexible || (t.flexible = {});

	function resizeRoot() {
		var wWidth = (screen.width > 0) ? (s.innerWidth >= screen.width || s.innerWidth == 0) ? screen.width : s.innerWidth : s.innerWidth,
			wDpr;
		var wHeight = (screen.height > 0) ? (s.innerHeight >= screen.height || s.innerHeight == 0) ? screen.height : s.innerHeight : s.innerHeight;
		if (s.devicePixelRatio) {
			wDpr = s.devicePixelRatio;
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
		s.screenWidth_ = wWidth;
		if (isYIXIN || is2345 || ishaosou || isSogou || isLiebao || isGnbr) { //YIXIN 和 2345 这里有个刚调用系统浏览器时候的bug，需要一点延迟来获取
			setTimeout(function() {
				wWidth = (screen.width > 0) ? (s.innerWidth >= screen.width || s.innerWidth == 0) ? screen.width : s.innerWidth : s.innerWidth;
				wHeight = (screen.height > 0) ? (s.innerHeight >= screen.height || s.innerHeight == 0) ? screen.height : s.innerHeight : s.innerHeight;
				wFsize = wWidth > 1080 ? 144 : wWidth / 7.5;
				wFsize = wFsize > 32 ? wFsize : 32;
				document.getElementsByTagName('html')[0].style.fontSize = wFsize + 'px';
				complate(0, wWidth, wHeight, wFsize);
			}, 500);
		} else {
			document.getElementsByTagName('html')[0].style.fontSize = wFsize + 'px';
		}
	}

	resizeRoot();

	s.addEventListener("orientationchange", function() {
		resizeRoot();
	}, false),

	s.addEventListener("resize", function() {
        resizeRoot();
    }, false);

    s.addEventListener("pageshow", function(b) {
        b.persisted && resizeRoot();
    }, false);

} (window, window.lib || (window.lib = {}));
