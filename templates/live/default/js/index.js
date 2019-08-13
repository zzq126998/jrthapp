$(function () {
	function follow(id){
		$.post("/include/ajax.php?service=live&action=followMember&id="+id, function(){
			//t.removeClass("disabled");
		});
	}
	//详情关注切换
	$(".follow").click(function () {
		var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			window.location.href = masterDomain+'/login.html';
			return false;
		}

		var t = $(this),id=t.attr('data-id');
		if (t.hasClass('btn_care1')) {
			t.removeClass('btn_care1').addClass('btn_care').text('关注');
			follow(id);
		}else{
			t.removeClass('btn_care').addClass('btn_care1').text('已关注');
			follow(id);
		}
	});

	$("body").delegate(".isfollow","click", function(){
	//$(".isfollow").click(function () {
		var t = $(this),id=t.attr('data-id');
		if (t.hasClass('fans_care1')) {
			t.removeClass('fans_care1').addClass('fans_care').text('关注');
			follow(id);
		}else{
			t.removeClass('fans_care').addClass('fans_care1').text('已关注');
			follow(id);
		}
	});

	$("#qrcode").qrcode({
		render: window.applicationCache ? "canvas" : "table",
		width: 150,
		height: 150,
		text: window.location.href
	});

	//手机看
	$(".smobile").hover(function(){
		$(".qrcode").show();
	}, function(){
		$(".qrcode").hide();
	});

	//分享
	$(".share").hover(function(){
		$(".lshare").show();
	}, function(){
		$(".lshare").hide();
	});

	//举报
	var complain = null;
	$(".report").bind("click", function(){

		var domainUrl = channelDomain.replace(masterDomain, "").indexOf("http") > -1 ? channelDomain : masterDomain;
		complain = $.dialog({
			fixed: true,
			title: "直播举报",
			content: 'url:'+domainUrl+'/complain-live-detail-'+id+'.html',
			width: 500,
			height: 300
		});
	});

	//微信打开
	$('.popup_weixin').click(function(){
		$(".weixin").show();
	});

	$('.close').click(function(){
		$(".weixin").hide();
	});

	//百度分享代码
	var staticPath = (u=window.staticPath||window.cfg_staticPath)?u:((window.masterDomain?window.masterDomain:document.location.origin)+'/static/');
	var shareApiUrl = staticPath.indexOf('https://')>-1?staticPath+'api/baidu_share/js/share.js':'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5);
	window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"4","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"12"},"share":{"bdSize":0}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=shareApiUrl];

	/*$(".btnCare").click(function () {
		$(".btnCare").removeClass('btnCare').addClass('btnCare1').text('已关注');
	});

	$(".fans_care").click(function(){
		var index=$(this).index();
		$(this).removeClass('fans_care').addClass('fans_care1').text('已关注');
	});

	$(".fans_care1").click(function(){
		var index=$(this).index();
		$(this).removeClass('fans_care1').addClass('fans_care').text('关注');
	});*/



});
