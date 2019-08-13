$(function(){

	$("img").scrollLoading();


	if($('#my-video').size() > 0){
		var myPlayer = videojs('my-video');
		videojs("my-video").ready(function(){
			var myPlayer = this;
		});
	}

	$('.video_icon').bind('click', function(){
		$('.popupVideo').show();
		$(".popupVideo video")[0].play();
	});
	$('.popupVideo .close').bind('click', function(){
		$('.popupVideo').hide();
		$(".popupVideo video")[0].pause();
	});

	$("#qrcode").qrcode({
		render: window.applicationCache ? "canvas" : "table",
		width: 150,
		height: 150,
		text: huoniao.toUtf8(window.location.href)
	});

	//手机看
	$(".smobile").hover(function(){
		$(this).find(".qrcode").show();
	}, function(){
		$(this).find(".qrcode").hide();
	});

	//大图切换
	$("#slider").slide({
		titCell: ".plist li",
		mainCell: ".album",
		effect: "fold",
		autoPlay: true,
		delayTime: 500,
		switchLoad: "_src",
		startFun: function(i, p) {
			if (i == 0) {
				$(".sprev").click()
			} else if (i % 5 == 0) {
				$(".snext").click()
			}
    }
	});

	//小图左滚动切换
	$("#slider .thumb").slide({
		mainCell: "ul",
		delayTime: 300,
		vis: 5,
		scroll: 5,
		effect: "left",
		autoPage: true,
		prevCell: ".sprev",
		nextCell: ".snext",
		pnLoop: false
	});

	//页面改变尺寸重新对特效的宽高赋值
	$(window).resize(function(){
		var screenwidth = window.innerWidth || document.body.clientWidth;
		if(screenwidth < criticalPoint){
			$("#slider .tempWrap").css({'width': '530px'});
			$(".album li").css({'width': '530px'});
			$(".album").css({'width': '530px'});
		}else{
			$("#slider .tempWrap").css({'width': '730px'});
			$(".album li").css({'width': '730px'});
			$(".album").css({'width': '730px'});
		}
	});

	//收藏
	$(".fov").bind("click", function(){
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

		t.html("<i></i>"+txt);

		$.post("/include/ajax.php?service=member&action=collect&module=info&temp=detail&type="+type+"&id="+id);

	});

	var complain = null;
	$(".tool .report").bind("click", function(){

		var domainUrl = masterDomain;
		complain = $.dialog({
			fixed: false,
			title: "信息举报",
			content: 'url:'+domainUrl+'/complain-info-detail-'+id+'.html',
			width: 460,
			height: 280
		});
	});

	var commentObj = $("#commentList");
	var isLoad = 0;

	//内容TAB切换
	$(".nav-tabs li").bind("click", function(){
		var t = $(this), index = t.index();
		if(!t.hasClass("curr")){
			t.addClass("curr").siblings("li").removeClass("curr");
			$(".w-con .description").hide();
			$(".w-con .description:eq("+index+")").show();
			$(".w-con").css({"padding-top": "44px"});
			$('html, body').animate({scrollTop: $("#content").offset().top}, 200);

			if(index == $(".nav-tabs li").length - 1){
				isLoad = 1;
				loadComment();
			}
		}
	});

	//内容导航浮动
	$(window).scroll(function(){
		var stop = $(window).scrollTop();
		var ctop = $("#content").offset().top;

		if(stop >= ctop){
			$(".nav-tabs").addClass("fix");
			$(".w-con").css({"padding-top": "44px"});
		}else{
			$(".nav-tabs").removeClass("fix");
			$(".w-con").css({"padding-top": "0"});
		}
	});

	//评论登录
	$(".comment").delegate(".login", "click", function(){
		if ($.browser.msie && ($.browser.version == "6.0") && !$.support.style) {
			$("html, body").scrollTop(0);
		}
		huoniao.login();
	});

	//评论筛选【时间、热度】
	$(".c-orderby a").bind("click", function(){
		if(!$(this).hasClass("active")){
			$(".c-orderby a").removeClass("active");
			$(this).addClass("active");

			commentObj
				.attr("data-page", 1)
				.html('<div class="loading"></div>');
			$("#loadMore").removeClass().hide();

			loadComment();
		}
	});


	//加载评论
	function loadComment(){
		if(id && id != undefined){
			var page = commentObj.attr("data-page");
			var orderby = $(".c-orderby .active").attr('data-id');
			//异步获取用户信息
			$.ajax({
				url: "/include/ajax.php?service=info&action=common&infoid="+id+"&page="+page+"&orderby="+orderby,
				type: "GET",
				dataType: "jsonp",
				success: function (data) {
					if(data && data.state == 100){

						if(commentObj.find("li").length > 0){
							commentObj.append(getCommentList(data.info.list));
						}else{
							commentObj.html(getCommentList(data.info.list));
						}

						page = commentObj.attr("data-page", (Number(page)+1));

						var pageInfo = data.info.pageInfo;
						if(Number(pageInfo.page) < Number(pageInfo.totalPage)){
							$("#loadMore").removeClass().show();
						}else{
							$("#loadMore").removeClass().hide();
						}

					}else{
						if(commentObj.find("li").length <= 0){
							commentObj.html("<div class='empty'>暂无相关评论</div>");
							$("#loadMore").removeClass().hide();
						}
					}
				},
				error: function(){
					if(commentObj.find("li").length <= 0){
						commentObj.html("<div class='empty'>暂无相关评论</div>");
						$("#loadMore").removeClass().hide();
					}
				}
			});
		}else{
			commentObj.html("Error!");
		}
	}

	//拼接评论列表
	function getCommentList(list){
		var html = [];
		for(var i = 0; i < list.length; i++){
			html.push('<li class="fn-clear" data-id="'+list[i]['id']+'">');

			var photo = list[i].userinfo['photo'] == "" ? staticPath+'images/noPhoto_40.jpg' : huoniao.changeFileSize(list[i].userinfo['photo'], "small");

			html.push(' <a target="_blank" href="'+ masterDomain +'/user/'+list[i].userinfo['userid']+'#info"> <img onerror="javascript:this.src=\''+staticPath+'images/noPhoto_40.jpg\';" data-uid="'+list[i].userinfo['userid']+'" src="'+photo+'" alt="'+list[i].userinfo['nickname']+'"></a>');
			html.push('  <div class="c-body">');
			html.push('    <div class="c-header">');
			html.push('      <a target="_blank" href="'+ masterDomain +'/user/'+list[i].userinfo['userid']+'#info" data-id="'+list[i].userinfo['userid']+'">'+list[i].userinfo['nickname']+'</a>');
			html.push('      <span>'+list[i]['ftime']+'</span>');
			html.push('    </div>');
			html.push('    <p>'+list[i]['content']+'</p>');
			html.push('    <div class="c-footer">');

			var praise = "praise";
			if(list[i]['already'] == 1){
				praise = "praise active";
			}
			html.push('      <a href="javascript:;" class="'+praise+'"><s></s>(<em>'+list[i]['good']+'</em>)</a>');

			html.push('      <a href="javascript:;" class="reply"><s></s>回复(<em>'+(list[i]['lower'] ? list[i]['lower'].length : 0)+'</em>)</a>');
			html.push('    </div>');
			html.push('  </div>');
			if(list[i]['lower'] != null){
				html.push('  <ul class="children">');
				html.push(getCommentList(list[i]['lower']));
				html.push('  </ul>');
			}
			html.push('</li>');
		}
		return html.join("");
	}

	//加载更多评论
	$("#loadMore").bind("click", function(){
		$(this).addClass("loading");
		loadComment();
	});

	//顶
	commentObj.delegate(".praise", "click", function(){
		var t = $(this), id = t.closest("li").attr("data-id");
		if(t.hasClass("active")) return false;
		if(id != "" && id != undefined){
			$.ajax({
				url: "/include/ajax.php?service=info&action=dingCommon&id="+id,
				type: "GET",
				dataType: "jsonp",
				success: function (data) {
					var ncount = Number(t.text().replace("(", "").replace(")", ""));
					t
						.addClass("active")
						.html('<s></s>(<em>'+(ncount+1)+'</em>)');

					//加1效果
					var $i = $("<b>").text("+1");
					var x = t.offset().left, y = t.offset().top;
					$i.css({top: y - 10, left: x + 17, position: "absolute", color: "#E94F06"});
					$("body").append($i);
					$i.animate({top: y - 50, opacity: 0, "font-size": "2em"}, 800, function(){
						$i.remove();
					});

				}
			});
		}
	});

	//评论回复
	commentObj.delegate(".reply", "click", function(){
		var carea = commentObj.find(".c-area");
		if(carea.html() != "" && carea.html() != undefined){
			carea.stop().slideUp("fast");
			commentObj.find(".reply").removeClass("active");
		}

		var areaObj = $(this).closest(".c-body"),
			replaytemp = $("#replaytemp").html();
		if(areaObj.find(".c-area").html() == "" || areaObj.find(".c-area").html() == undefined){
			areaObj.append(replaytemp);
		}
		areaObj.find(".c-area").stop().slideToggle("fast");

	});

	//提交评论回复
	$(".comment").delegate(".subtn", "click", function(){
		var t = $(this), cid = t.closest("li").attr("data-id");
		if(t.hasClass("login") || t.hasClass("loading")) return false;

		var contentObj = t.parent().prev(".textarea"),
			content = contentObj.html();

		if(content == ""){
			return false;
		}
		if(huoniao.getStrLength(content) > 200){
			alert("超过200个字了！");
		}

		cid = cid == undefined ? 0 : cid;

		t.addClass("loading");

		$.ajax({
			url: "/include/ajax.php?service=info&action=sendCommon&aid="+id+"&id="+cid,
			data: "content="+content,
			type: "POST",
			dataType: "json",
			success: function (data) {

				t.removeClass("loading");
				contentObj.html("");
				if(data && data.state == 100){

					var info = data.info;
					var list = [];
					list.push('<li class="fn-clear colorAnimate" data-id="'+info['id']+'">');
					list.push(' <a target="_blank" href="'+ masterDomain +'/user/'+list[i].userinfo['userid']+'#info"> <img data-uid="'+info.userinfo['userid']+'" src="'+huoniao.changeFileSize(info.userinfo['photo'], "small")+'" alt="'+info.userinfo['nickname']+'"></a>');
					list.push('  <div class="c-body">');
					list.push('    <div class="c-header">');
					list.push('      <a target="_blank" href="'+ masterDomain +'/user/'+list[i].userinfo['userid']+'#info" data-id="'+info.userinfo['userid']+'">'+info.userinfo['nickname']+'</a>');
					list.push('      <span>'+info['ftime']+'</span>');
					list.push('    </div>');
					list.push('    <p>'+info['content']+'</p>');
					list.push('    <div class="c-footer">');
					list.push('      <a href="javascript:;" class="praise"><s></s>(<em>'+info['good']+'</em>)</a>');
					list.push('      <a href="javascript:;" class="reply">回复(<em>'+(info['lower'] ? info['lower'].length : 0)+'</em>)</a>');
					list.push('    </div>');
					list.push('  </div>');
					list.push('</li>');

					//一级评论
					if(contentObj.attr("data-type") == "parent"){
						if(commentObj.find("li").length <= 0){
							commentObj.html("");
							$("#loadMore").removeClass().hide();
						}

						commentObj.prepend(list.join(""));

					//子级
					}else{

						t.closest(".c-area").hide();

						var children = t.closest("li").find(".children");
						//判断子级是否存在
						if(children.html() == "" || children.html() == undefined){
							t.closest("li").append('<ul class="children"></ul>');
						}

						t.closest("li").find("ul.children").prepend(list.join(""));


					}

				}

			}
		});

	});

	//百度分享代码
	var staticPath = (u=window.staticPath||window.cfg_staticPath)?u:((window.masterDomain?window.masterDomain:document.location.origin)+'/static/');
var shareApiUrl = staticPath.indexOf('https://')>-1?staticPath+'api/baidu_share/js/share.js':'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5);
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["tsina","tqq","qzone","weixin","sqq","renren"],"bdSize":"16"},"share":{"bdSize":0}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=shareApiUrl];

});
