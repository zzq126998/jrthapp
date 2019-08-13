$(function(){

	//图集幻灯
	$(".lp-img").slide({ mainCell:".slider ul", titCell:".imgctrl li", switchLoad: "_src", effect:"fold", delayTime:300, autoPlay:true });


	//团购倒计时s
	var timeCompute = function (a, b) {
		if (this.time = a, !(0 >= a)) {
			for (var c = [86400 / b, 3600 / b, 60 / b, 1 / b], d = .1 === b ? 1 : .01 === b ? 2 : .001 === b ? 3 : 0, e = 0; d > e; e++) c.push(b * Math.pow(10, d - e));
			for (var f, g = [], e = 0; e < c.length; e++) f = Math.floor(a / c[e]),
			g.push(f),
			a -= f * c[e];
			return g
		}
	}
	,CountDown =	function(a, b) {
		this.precise = parseFloat(b) || 1,
		this.time = a / this.precise,
		this.countTimer = null,
		this.run = function(a) {
			var b, c = this,
			e = this.precise;
			this.countTimer = setInterval(function() {
				b = timeCompute.call(c, c.time - 1, e),
				b || (clearInterval(c.countTimer), c.countTimer = null),
				"function" == typeof a && a(b || [0, 0, 0, 0, 0], !c.countTimer)
			},
			1e3 * e)
		}
	}
	,timeLmtCountdown = function() {
		var content = $(".tinfo");
		var $this = content.find(".time");
		var etime = $this.attr('data-etime'); //结束时间
		var ntime = $this.attr('data-ntime'); //当前时间
		var end = etime - ntime;
		var time = end > 0 ? end : 0;

		var timeTypeText = '剩余';
		var countDown = new CountDown(time);
		countDownRun();

		function countDownRun(time) {
			time && (countDown.time = time);
			countDown.run(function(times, complete) {
				var html = '<span>'+timeTypeText+'<em>' + (times[0] < 10 ? "0" + times[0] : times[0]) +
				'</em>天<em>' + (times[1] < 10 ? "0" + times[1] : times[1]) +
				'</em>小时<em>' + (times[2] < 10 ? "0" + times[2] : times[2]) +
				'</em>分<em>' + (times[3] < 10 ? "0" + times[3] : times[3]) + '</em>秒</span>';
				$this.html(html);
			});
		}
	}
	timeLmtCountdown();


	//收藏
	$(".collect").bind("click", function(){
		var t = $(this), type = "add", oper = "+1", txt = "已收藏";

		var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			huoniao.login();
			return false;
		}

		if(!t.hasClass("curr")){
			t.addClass("curr");
		}else{
			type = "del";
			t.removeClass("curr");
			oper = "-1";
			txt = "收藏";
		}

		var $i = $("<b>").text(oper);
		var x = t.offset().left, y = t.offset().top;
		$i.css({top: y - 10, left: x + 17, position: "absolute", "z-index": "10000", color: "#E94F06"});
		$("body").append($i);
		$i.animate({top: y - 50, opacity: 0, "font-size": "2em"}, 800, function(){
			$i.remove();
		});

		t.html("<s></s>"+txt);

		$.post("/include/ajax.php?service=member&action=collect&module=house&temp=loupan_detail&type="+type+"&id="+pageData.id);

	});


	$("html").delegate(".bdshare_popup_box", "mouseover", function(){
		$(".share").addClass("curr");
	});
	$("html").delegate(".bdshare_popup_box", "mouseout", function(){
		$(".share").removeClass("curr");
	});

	//动态
	$(".news dl").hover(function(){
		var t = $(this);
		t.addClass("curr").siblings("dl").removeClass("curr");
	});

	//文本框placeholder
	$("html input").placeholder();

	//增加浏览历史
	// var house_loupan_history = $.cookie(cookiePre+'house_loupan_history');
	// if (house_loupan_history == null) house_loupan_history = "";
	// if (house_loupan_history.indexOf(pageData.id) == -1) {
	// 	if (house_loupan_history.length > 0) {
	// 		house_loupan_history += ':'+pageData.id;
	// 	} else {
	// 		house_loupan_history += pageData.id;
	// 	}
	// 	if (house_loupan_history.length > 128) {
	// 		var pos = house_loupan_history.indexOf(':');
	// 		house_loupan_history = house_loupan_history.substr(pos + 1);
	// 	}
	// 	$.cookie(cookiePre+'house_loupan_history', house_loupan_history, {expires: 365, domain: masterDomain.replace("http://", ""), path: '/'});
	// }




	var dzshapan = "#dzshapan", dzObj = $(dzshapan);


  //沙盘图拖动
  var shapanImg = $("#shapan-box");
  shapanImg.jqDrag({
      dragParent: dzshapan,
      dragHandle: "#shapan-obj"
  })

  window.HN=window.HN||{};(function(a){HN.Switch=function(c){var b=this;b.op=a.extend({},HN.Switch._default,c);b._isWebPSupport=false;b.isWebpSupport();b._init()};HN.Switch._default={switchST:"",clipST:".clip",conST:".con",itemST:".item",prevST:".prev",nextST:".next",pnavST:".pnav",effect:"slide",event:"click",current:"cur",circle:false,vertical:false,auto:false,start:0,duration:400,interval:4000,switchNum:1,clipNum:1};HN.Switch.prototype._init=function(){var c=this,e=c.op;e.sw=a(e.switchST);e.clip=e.sw.find(e.clipST);e.con=e.clip.find(e.conST).css({position:"relative"});e.item=e.con.find(e.itemST);e.prev=e.prevST==".prev"?e.sw.find(e.prevST):a(e.prevST);e.next=e.nextST==".next"?e.sw.find(e.nextST):a(e.nextST);e.pnav=e.pnavST==".pnav"?e.sw.find(e.pnavST):a(e.pnavST);e.itemLen=e.item.length;e.switchNum>e.clipNum&&(e.switchNum=e.clipNum);e.itemLen<e.clipNum&&(e.itemLen=e.clipNum);if(e.effect!="slide"){e.switchNum=1;e.clipNum=1}e.prevDisClass=a.trim(e.prevST).match(/\w\S*$/)+"-dis";e.nextDisClass=a.trim(e.nextST).match(/\w\S*$/)+"-dis";e.start=parseInt(e.start,10);e.start=(e.start>=0&&e.start<e.itemLen)?e.start:0;if(e.effect=="slide"){e.vertical||e.item.css({"float":"left"});e.leftOrTop=e.vertical?"top":"left";e.widthOrHeight=e.vertical?e.item.outerHeight(true):e.item.outerWidth(true);e.conSize=e.widthOrHeight*e.itemLen;e.vertical?e.con.css({height:e.conSize}):e.con.css({width:e.conSize})}else{if(e.effect=="fade"){e.item.not(e.item.eq(e.start).show()).hide().css({position:"absolute"})}else{e.item.not(e.item.eq(e.start).show()).hide();e.effect="none";e.duration=0}}function b(){e.timer=setInterval(function(){e.showpage>=e.itemLen-e.clipNum?c.switchTo(0):c.next()},e.interval)}function d(){clearInterval(e.timer)}d();if(e.itemLen<=e.clipNum){e.stopRun=true;c.switchTo(0);return}c.switchTo(e.start);e.prev.off("click.switch").on("click.switch",function(){a(this).hasClass(e.prevDisClass)||c.prev()});e.next.off("click.switch").on("click.switch",function(){a(this).hasClass(e.nextDisClass)||c.next()});e.pnav.each(function(f){a(this).off(e.event+".switch").on(e.event+".switch",function(){c.switchTo(f)})});if(e.auto){b();e.sw.off("mouseenter.switch mouseleave.switch").on({"mouseenter.switch":function(){d()},"mouseleave.switch":function(){b()}})}};HN.Switch.prototype._play=function(d,j,g){var c=this,h=c.op,f=null,e={},b=0;if(a(c).trigger("playBefore")!==false){if(d===null){d=j?h.showpage-h.switchNum:h.showpage+h.switchNum}else{d=isNaN(d)?0:d;if(d==h.showpage){return}}if(h.circle){d<0&&(d=h.itemLen-h.clipNum);d>h.itemLen-h.clipNum&&(d=0)}else{d<0&&(d=0);d>h.itemLen-h.clipNum&&(d=h.itemLen-h.clipNum);d==0?h.prev.addClass(h.prevDisClass):h.prev.removeClass(h.prevDisClass);d==h.itemLen-h.clipNum?h.next.addClass(h.nextDisClass):h.next.removeClass(h.nextDisClass)}for(;b<h.clipNum+h.switchNum;b++){if(d+b>=h.itemLen){break}c._changeSrc(d+b)}if(h.effect=="slide"){e[h.leftOrTop]=-h.widthOrHeight*d;h.con.stop().animate(e,h.duration)}else{if(h.effect=="fade"||h.effect=="none"){f=h.item.eq(d);h.item.not(f).stop().fadeOut(h.duration);f.fadeIn(h.duration)}}h.pnav.removeClass(h.current);h.pnav.eq(Math.ceil(d/h.switchNum)).addClass(h.current);h.showpage=d;a(c).trigger("playAfter")}};HN.Switch.prototype.isWebpSupport=function(){var c=this,e=window.localStorage&&window.localStorage.getItem("webpsupport"),d=navigator.userAgent&&/MSIE/.test(navigator.userAgent);e=d?false:e;if(null===e&&!d){var b=new Image();b.src="data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";if(b&&2===b.width&&2===b.height){e=true}}window.localStorage&&window.localStorage.setItem("webpsupport",e);c._isWebPSupport="true"===e};HN.Switch.prototype._changeSrc=function(e){var b=this,g=b.op,d=g.item.eq(e).find("img"),f=0;for(;f<d.length;f++){var c=d.eq(f).data("src");if(c&&b._isWebPSupport){c&&(/pic1\.ajkimg\.com(.*)\.(jpg|png)/.test(c))&&!(c.match(/\?t=(\d)/i)>0)&&(c+="?t=4")}d.eq(f).attr("src")||d.eq(f).attr("src",c)}};HN.Switch.prototype.switchTo=function(b){this._play(b,false,false)};HN.Switch.prototype.prev=function(){this._play(null,true,false)};HN.Switch.prototype.next=function(){this._play(null,false,true)}})(jQuery);



      window.switchDistinfo = new HN.Switch({
          switchST: "#j-switch-distinfo",
          clipST: ".dist-clip",
          conST: "ul",
          itemST: "li",
          prevST: "#j-switch-distinfo .prev",
          nextST: "#j-switch-distinfo .next",
          switchNum: 4,
          clipNum: 4
      });
      var c = $("#j-switch-distinfo .dist-clip").find("li"),
          a = $("#j-dist-content .dist-items"),
          e = $("#shapan-obj").find(".map-mark");
      function b() {
          $(c).eq(0).addClass("active").siblings().removeClass("active");
          $(a).eq(0).show().siblings().hide();
          $(e).eq(0).addClass("map-mark-active").siblings().removeClass("map-mark-active");
          $(c).on("click", function() {
              var f = $(c).index($(this));
              $(this).addClass("active").siblings().removeClass("active");
              $(a).eq(f).show().siblings().hide();
              $(e).eq(f).addClass("map-mark-active").siblings().removeClass("map-mark-active");
          });
          $(e).on("click", function() {
              var f = $(e).index($(this)),
              g = Math.floor(f / 4);
              switchDistinfo.switchTo(g * 4) + 1;
              $(c).eq(f).addClass("active").siblings().removeClass("active");
              $(a).eq(f).show().siblings().hide();
              $(this).addClass("map-mark-active").siblings().removeClass("map-mark-active");
          })
      }
      function d() {
          e.each(function() {
              $(this).on({
                  "mouseenter.district": function() {
                      $(this).addClass("map-mark-hover")
                  },
                  "mouseleave.district": function() {
                      $(this).removeClass("map-mark-hover")
                  }
              });

          })
      }
      d();
      b()

});


//百度分享代码
var staticPath = (u=window.staticPath||window.cfg_staticPath)?u:((window.masterDomain?window.masterDomain:document.location.origin)+'/static/');
var shareApiUrl = staticPath.indexOf('https://')>-1?staticPath+'api/baidu_share/js/share.js':'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5);
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["tsina","tqq","qzone","weixin","sqq","renren"],"bdSize":"16"},"share":{"bdSize":0}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=shareApiUrl];
