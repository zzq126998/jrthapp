$('body').delegate('.search_btn','click',function(){
	var val = $("#search_val").val();
	if(val==''){
		showMsg('请输入ID或者手机号')
	}else{
		search_list(val);
	}
});

$('body').delegate('.im-del_btn.im-add_btn','click',function(){
		$.ajax({
	        url: '/include/ajax.php?service=siteConfig&action=delFriend&tid='+userid,
	        type: 'post',
	        dataType: 'json',
	        success: function(data){
	            if(data.state == 100){
	            	showMsg(data.info);
	            	$('.im-add_btn_group .im-add_btn').removeClass('im-del_btn').text('加好友');
	            }else{
	                alert(data.info);
	            }
	        },
	        error: function(){
	            alert('网络错误，初始化失败！');
	        }
	    });
		showMsg('已经删除好友');
		return false;
	});