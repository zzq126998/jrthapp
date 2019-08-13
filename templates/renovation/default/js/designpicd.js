$(function(){
	// 分享
	var staticPath = (u=window.staticPath||window.cfg_staticPath)?u:((window.masterDomain?window.masterDomain:document.location.origin)+'/static/');
	var shareApiUrl = staticPath.indexOf('https://')>-1?staticPath+'api/baidu_share/js/share.js':'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5);
	window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{"bdSize":0}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=shareApiUrl];

	var first = true;
	var slideLi = $('#slide_small ul li');
	slideLi.click(function(){
		var li = $(this);
		if(li.hasClass('active')) return;
		var index = li.index();
		$('#pagerlist a').eq(index).click();
		li.addClass('active').siblings().removeClass('active');
	}).eq(0).addClass('active');

	//幻灯
	$('.slide').picScroll();

})

+(function ($) {
	$.fn.picScroll = function(options){
		var $this = $(this);
		var defaults = {
			'atpage': '#atpage',		//当前页码
			'tpage': '#tpage',			//总页码
			'bigk': '#slide_big',	//大图父框
			'smallk': '.picsmall',		//小图父框
			'sItem': '.picsmall a'		//小图
		};
		var st = $.extend({},defaults,options);

		var bigk = $(st.bigk);
		var smallk = $(st.smallk);
		var sItem = $(st.sItem);
		var bpnext = $('#slidebtn_next');
		var bpprev = $('#slidebtn_prev');
		var spnext = $('#slidebtn2_next');
		var spprev = $('#slidebtn2_prev');

		var len = sItem.length;				//图片数目
		smallk.css('width',(sItem.width() + 8) * len + 'px');
		$(st.atpage).text(1);
		$(st.tpage).text(len);


		var index = 0,							//当前显示图片index
			showNum = 9,						//小图显示数目
			maxMove = 0;						//小图最大移动步数

		$(window).resize(function(){
			showNum = $('html').hasClass('w1200') ? 9 : 8;
			maxMove = len - showNum;
			if(len < showNum) {
				spnext.addClass('disabled');
				spprev.addClass('disabled');
			}
		}).resize();


		if(len < showNum) {
			spprev.addClass('disabled')
		}

		var biglist = '';
		for(var i=0;i < len;i++) {
			biglist += '<div class="big-item big-item-' + i + '"><div class="big-pic"><i></i><img src="" alt="" /></div><div class="slideinfo"><h3>' + sItem.eq(i).attr('data-title') + '</h3><div class="bg"></div></div></div>';
		}
		bigk.append(biglist);

		smallk.attr('data-step',0)

		// 点击小图
		sItem.click(function(){
			var a = $(this);
			if(a.hasClass('active')) {
				sPic();
				return;
			}
			index = a.index();
			bigPic = a.attr('data-bigpic');

			dolist();
			a.addClass('active').siblings().removeClass('active');
		}).eq(0).click();

		// 点击大图前后按钮
		bpnext.click(function(){
			if(index + 1 < len) {
				index++;
			} else {
				index = 0;
				smallk.attr('data-step',0)
			}
			dolist();
		})
		bpprev.click(function(){
			if(index > 0) {
				index--;
			} else {
				index = len - 1;
				smallk.attr('data-step',maxMove)
			}
			dolist();
		})

		// 点击小图前后按钮
		spnext.click(function(){
			if(spnext.hasClass('disabled')) return;
			spprev.removeClass('disabled')
			var step = parseInt(smallk.attr('data-step'));
			if(step + showNum > maxMove) {
				var step = maxMove
				spnext.addClass('disabled')
			} else {
				var step = step + showNum
			}
			var iw = sItem.width() + 8;
			smallk.stop().animate({
				'left' : -step * iw + 'px'
			},300).attr('data-step',step)
		})
		spprev.click(function(){
			if(spprev.hasClass('disabled')) return;
			spnext.removeClass('disabled')
			var step = parseInt(smallk.attr('data-step'));
			if(step - showNum >= 0) {
				var step = step - showNum;
			} else {
				var step = 0;
				spprev.addClass('disabled')
			}
			var iw = sItem.width() + 8;
			smallk.stop().animate({
				'left' : -step * iw + 'px'
			},300).attr('data-step',step)
		})

		// 大图部分
		function bPic(){
			var item = $('.big-item-' + index);
			var img = item.find('img');
			if(img.attr('src') == '') {
				var bigPic = sItem.eq(index).attr('data-bigpic');
				img.attr('src',bigPic)
			}
			if($('.loading').length > 0) {
				$('.loading').fadeIn();
			} else {
				bigk.append('<div class="loading"></div>');
			}
			if(item.attr('data-load') === undefined) {
				img.load(function(){
					item.attr('data-load','load').fadeIn().siblings().stop(true,true).fadeOut();
				})
			} else {
				item.fadeIn().siblings().stop(true,true).fadeOut();
			}
		}

		// 缩略图部分
		function sPic(){
			sItem.eq(index).addClass('active').siblings().removeClass('active');
			if(len < showNum) return;
			var step = parseInt(smallk.attr('data-step'));
			var iw = sItem.width() + 8;
			if(index + 1 == step + showNum) {
				if(step < maxMove) {
					step++;
				}
				smallk.stop().animate({
					'left' : -step * iw + 'px'
				},500).attr('data-step',step)
			}
			if(index == step) {
				if(step > 0) {
					step--;
				}
				smallk.stop().animate({
					'left' : -step * iw + 'px'
				},500).attr('data-step',step)
			}
			if(smallk.attr('data-step') && smallk.attr('data-step')  != '0' ) {
				spprev.removeClass('disabled');
			} else {
				spprev.addClass('disabled');
			}
			if(parseInt(smallk.attr('data-step')) >= maxMove ) {
				spnext.addClass('disabled');
			} else {
				spnext.removeClass('disabled');
			}
		}

		// 页码
		function showPage(){
			$(st.atpage).text(index + 1);
		}

		keyDown()
		//绑定键盘事件
		function keyDown(){
			var keydownId;
			$(window).keydown(function(e){
				clearTimeout(keydownId);
				keydownId = setTimeout(function(){
					var keyCode = e.keyCode;
					if(keyCode == 37){
						bpprev.click();
					}else if(keyCode == 39){
						bpnext.click();
					}
				},150);
			});
		}

		function dolist(){
			bPic();
			sPic();
			showPage();
		}
	}
})(jQuery);
