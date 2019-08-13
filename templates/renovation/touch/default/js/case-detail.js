$(function(){
	// 收藏
	$('.collect').click(function(){
		var t = $(this), type = t.hasClass("has") ? "del" : "add", temp = 'case-detail';
		var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			location.href = '/login.html';
			return false;
		}
		if(type == 'add'){
			t.html('<i></i>已收藏').addClass('has');
		}else{
			t.html('<i></i>收藏').removeClass('has');
		}
		$.post("/include/ajax.php?service=member&action=collect&module=renovation&temp="+temp+"&type="+type+"&id="+id);
	});

})
