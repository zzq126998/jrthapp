var url = window.location.pathname;
var user_id = url.slice(url.indexOf("-")+1,url.indexOf("."));  //获取好友的id


//获取用户信息
    $.ajax({
        url: '/include/ajax.php?service=member&action=detail&id='+user_id+'&friend=1&shop=1',
        type: 'post',
        dataType: 'json',
        success: function(data){
            if(data.state == 100){
               var detail = data.info;
               console.log(detail);
               $('.nic .im-info_right').text(detail.nickname);
               $('.sig .im-info_right').text('未填写');
               $('.sex .im-info_right').text(detail.sex?"女":"男");
               $('.q_num .im-info_right').text(detail.qq?detail.qq:'未填写');
               $('.birth .im-info_right').text(detail.birthday?detail.birthday:'未填写');
               $('.area .im-info_right').text(detail.addrName?detail.addrName.replace(/\>/g,"-"):'未填写');  //替换所有>
               $('.reg_time .im-info_right').text(detail.regtime);
               if(detail.shopList){
               	var  shop = detail.shopList
               	 for(var i=0; i<shop.length; i++){
               	 	var list = []
               	 	if(shop[i].module=='job'){
               	 		list.push('<dd class=" im-li_shop"><a href="'+shop[i].url+'" class="fn-clear"><div class="im-icon_left"><img src="'+templets_skin+'images/icon2.png"/></div> <h2>'+shop[i].title+'</h2></dd>')
               	 	}else{
               	 		list.push('<dd class=" im-li_shop"><a href="'+shop[i].url+'" class="fn-clear"><div class="im-icon_left"><img src="'+templets_skin+'images/icon.png"/></div> <h2>'+shop[i].title+'</h2></dd>')
               	 	}
               	 	 $('.im-shop_list dl').append(list.join(''))
               	 }
               	
               }else{
               	$('.im-shop_list').hide();
               }
            }else{
                alert(data.info);
            }
        },
        error: function(){
            alert('网络错误，初始化失败！');
        }
    });