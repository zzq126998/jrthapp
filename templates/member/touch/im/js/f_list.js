var chatLib, AccessKeyID, userinfo, chatToken, chatServer, toUserinfo, toChatToken;
var isload = false, page = 1, pageSize = 20, totalPage = 1, stop = 0, time = Math.round(new Date().getTime()/1000).toString();
$(function(){
	//获取当前登录用户的信息
    $.ajax({
        url: '/include/ajax.php?service=siteConfig&action=getImToken',
        type: 'post',
        dataType: 'json',
        success: function(data){
            if(data.state == 100){
                var info = data.info;
                userinfo = info;
                chatToken = info.token;
                chatServer = info.server;
                AccessKeyID = info.AccessKeyID;
                
                f_list('friend'); //获取好友列表
                console.log('111')
            }else{
                alert(data.info);
            }
        },
        error: function(){
            alert('网络错误，初始化失败！');
        }
    });
	
	
	
	
	
	
	
	
	
	
	
	
	

	$('.tab_box li').click(function(){
		$(this).addClass('on').siblings('li').removeClass('on');
		var type=$(this).attr('data-type');
		var  i = $(this).index(),txt = $(this).text();
		$('.ulbox').eq(i).addClass('show').siblings('.ulbox').removeClass('show');
		$('.top_head span').text(txt);
		console.log($('.ulbox').eq(i).find('li').length)
		if($('.ulbox').eq(i).find('li').length==0){
			f_list(type)
		}
	});
	
	//取消关注
	$('body').delegate('.no_focus','click',function(){
		var t= $(this);
		follow(t, function(){
			showMsg('已经取消关注')
			t.parents('li').remove();
		});
		return false;
	});
	
	//点击关注
	
	$('body').delegate('.to_focus','click',function(){
		var t= $(this);
		if(!t.parents('li').hasClass('f_li')){
			follow(t, function(){
				t.text('相互关注');
				t.parents('li').addClass('f_li');
				
			});
			return false;
			
		}else{
			follow(t, function(){
				t.text('关注');
				t.parents('li').removeClass('f_li');
				
			});
			
			return false;
		}
	    
	});
	
	$('body').delegate('.chat_to','click',function(){
		var uid = $(this).parents('.libox').attr('data-id');
		location.href=userDomain+"chat-"+uid+".html";
		return false;
	})
	
  

	var follow = function(t, func){
	    var userid = $.cookie(cookiePre+"login_user");
	    if(userid == null || userid == ""){
	      location.href = masterDomain + '/login.html';
	      return false;
	    }
	
	    if(t.hasClass("disabled")) return false;
	    t.addClass("disabled");
	    $.post("/include/ajax.php?service=member&action=followMember&id="+t.attr("data-id"), function(){
	      t.removeClass("disabled");
	      func();
	    });
	  }
})
