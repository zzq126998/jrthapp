var chatLib, AccessKeyID, userinfo, chatToken, chatServer, toUserinfo, toChatToken;
var isload = false, page = 1, pageSize = 20, totalPage = 1, stop = 0, time = Math.round(new Date().getTime()/1000).toString();


$(function(){
	
	//初始化用户信息
var kumanIMLib = function (wsHost) {

        var lib = this;

        this.timeOut = 30000;  // 每30秒发送一次心跳
        this.timeOutObj = null;

        // 重置心跳
        this.reset = function(){
            clearTimeout(this.timeOutObj);
            lib.start();
        }

        // 启动心跳
        this.start = function(){
            lib.timeOutObj = setInterval(function(){
                lib.socket.send('HeartBeat');
            }, lib.timeOut);
        }

        // 初始化连接
        if (window['WebSocket']) {
            this.socket = new WebSocket(wsHost);
            //this.socket.onopen = this.evt.onopen;  // 连接成功

            // 关闭
            this.socket.onclose = function(){
                lib.socket = new WebSocket(lib.socket.url);
            };

            // 异常
            this.socket.onerror = function(){
                this.close();
            };

            // 收到消息
            this.socket.onmessage = function (evt) {
                lib.reset();  //重置心跳
                var msg = JSON.parse(evt.data);
                switch (msg.type) {
                    case "init":
                        console.log(msg.info.content);
                        break;
                    default:
                        if(userinfo['uid'] == msg.info.to && msg.info.type == 'member'){
							var unread = '';
							if(msg.info.unread>0){
								unread='<span class="tip_num">'+msg.info.unread+'</span>';
							}
							if(msg.type=='text'){
								$('.info_li[data-id="'+msg.info.from+'"]').find('.left_text p').html(msg.info.content.replace(/\\/g,""));
							}else if(msg.type=='image'){
								$('.info_li[data-id="'+msg.info.from+'"]').find('.left_text p').html('[图片]');
							}else if(msg.type=='apply'){
								$('.info_li[data-id="'+msg.info.from+'"]').find('.left_text p').html(msg.info.content.replace(/\\/g,""));
							}
							$('.info_li[data-id="'+msg.info.from+'"]').find('.time').html(getDateDiff(msg.info.time,4));
								$('.info_li[data-id="'+msg.info.from+'"]').find('.right_info .tip_num').remove();
								$('.info_li[data-id="'+msg.info.from+'"]').find('.right_info').append(unread);
							if($('.info_li[data-id="'+msg.info.from+'"]').length==0){
								msg_list()
							}
                        }
                        break;
                }

            };

        } else {
            alert('您的浏览器不支持WebSockets.');
            return false;
        }

        this.start();  //启动心跳检测

    };
//获取当前登录用户的相关信息

//初始化
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
				   //创建连接
                chatLib = new kumanIMLib(chatServer + "?AccessKeyID=" + AccessKeyID + "&token=" + chatToken + "&type=member");

                //获取好友列表
                msg_list();
                notice_list();
                setInterval(msg_list, 5000);
               
            }else{
                console.log(data.info);
                window.location.href = masterDomain+'/login.html';
				return false;
            }
        },
        error: function(){
            alert('网络错误，初始化失败！');
        }
    });
	
	
	//获取消息列表

 function msg_list(){
	info_load=1;
	info_page = $('.list_box .ulbox.show').attr('data-page');
//	console.log(type+info_page)
	$.ajax({
       url: '/include/ajax.php?service=siteConfig&action=getImFriendList&userid=' + userinfo['uid']+'&type=temp',
       type: "GET",
       dataType: "json",
       success: function (data) {
	       var datalist = data.info; 
//	       var totalpage = data.info.pageInfo.totalPage;
//	       $('.list_box .ulbox.show').attr('data-total',totalpage);
	       var html = [];
	       if(data.state == 100){
	          if(datalist.length==0){
         		$('.loading').html('<div class="im-no_list"><img src="'+templets_skin+'images/no_img.png"/><p>暂无会话~</p></div>'); 	
	          }else{
	          	  var unread = ''
	            for(var i=0; i<datalist.length; i++){
//	            	 if(datalist[i]['lastMessage'] && datalist[i]['lastMessage'] != false && datalist[i]['lastMessage']['unread'] > 0 && (!toUserinfo || (toUserinfo && val['userinfo']['uid'] != toUserinfo['uid']))){
//                          unread = datalist[i]['lastMessage']['unread'];
//                      }
						if(datalist[i].lastMessage.unread>0){
							
							unread ='<span class="tip_num">'+datalist[i]['lastMessage']['unread']+'</span>';
						}else{
							
							unread='';
						}
//	            	if(type=='info'){  //消息列表
	            		var list =[];
		            	list.push('<li class="info_li" data-id="'+datalist[i].userinfo.uid+'"><a href="'+userDomain+'chat-'+datalist[i].userinfo.uid+'.html" class="fn-clear">');
						list.push('<div class="left_img"><img src="'+datalist[i].userinfo.photo+'" /><i class="vip_level" style="display:none"><img src="'+templets_skin+'upfile/vip_icon.png"/></i></div>');
						list.push('<div class="right_con"><div class="left_text"><h2>'+datalist[i].userinfo.name+' </h2><p>'+(datalist[i]['lastMessage']&&datalist[i]['lastMessage']!=false?datalist[i]['lastMessage'].content:'')+'</p></div>');
						
						list.push('	<div class="right_info"><p class="time">'+(datalist[i]['lastMessage']['time']?getDateDiff(datalist[i]['lastMessage']['time']):'') +'</p>'+unread);
						list.push('	</div></div><div class="del_btn">删除对话</div></a></li>');
						html.push(list.join(''))

	            	
	            }
	            $('.info_li').remove()
				$('.message_list ul').append(html.join(''))    ;
	          }
			  $('.ulbox.message_list .loading').remove();
	          info_load =0;

	          info_page++;
	          $('.list_box .ulbox.show').attr('data-page',info_page);
	       }else{
	       		$('.ulbox.message_list .loading').remove();
	       		$('.ulbox.message_list').html('<div class="im-no_list"><img  src="'+templets_skin+'images/no_img.png"/><p>暂无会话~</p></div>');
	       }
       },
       error: function(){
         $('.loading').html('<span>请求出错请刷新重试</span>');  //请求出错请刷新重试
       }
    });
}
	
	
//获取通知列表
var notice_load = 0,notice_page = 1;
function notice_list(){
	notice_load=1
	$.ajax({
       url: '/include/ajax.php?service=member&action=message&page='+notice_page+'&pageSize=10',
       type: "GET",
       dataType: "json",
       success: function (data) {
	       var datalist = data.info.list; 
	       var totalpage = data.info.pageInfo.totalPage;
	       $('.tip_list').attr('data-total',totalpage);
	       var html = [];
	       if(data.state == 100){
	          if(datalist.length==0){
	          	$('.tip_list ').html('<div class="im-no_list"><img src="'+templets_skin+'images/no_notice.png"/><p>暂无未读通知~</p></div>');
	          }else{
	          	var unread = '';
	            for(var i=0; i<datalist.length; i++){
	            	if(datalist[i].state==0){
	            		unread='unread'
	            	}
	            	var info = datalist[i].body;
	            		var list =[];
	            		list.push('<dl><dt >'+datalist[i].date+'</dt>');
	            		list.push('<dd class="tip_con" data-url="'+datalist[i].url+'"><a href="javascript:;">');
						
						if(datalist[i].body.first){
							list.push('<h2 class="'+unread+'">'+datalist[i].body.first.value+'</h2>');
							list.push('<ul class="tip_detail"><li class="fn-clear">');
							list.push('<label>'+Object.keys(info)[1]+'</label><span>'+info[Object.keys(info)[1]].value+'</span></li>');
							list.push('<li class="fn-clear yue_sub" ><label>'+Object.keys(info)[3]+'</label><span>'+info[Object.keys(info)[3]].value+'</span></li>');		
							list.push('<li class="fn-clear"><label>'+Object.keys(info)[2]+'</label><span>'+info[Object.keys(info)[2]].value+'</span></li>');				
							list.push('</ul>');	
						}else{
							list.push('<h2 class="'+unread+'">'+datalist[i].title+'</h2>');
							list.push('<ul class="tip_detail"><li>'+datalist[i].body+'</li></ul>');
						}
						
						list.push('<button class="del_btn">删除</button></a></dd></dl>')
						html.push(list.join(''));

	            	
	            }
	           $('.tip_list .scrollbox').append(html.join(''))
	          }
			  $('.tip_list.ulbox .loading').remove();
	          notice_load =0;
	          if(totalpage == notice_page){
	          	$('.tip_list ').append('<div class="loading"><span>已经全部加载</span></div>');
	          	console.log('已经全部加载');
	          	notice_load=1;
	          	
	          }
	          notice_page++;
	          $('.list_box .tip_list ').attr('data-page',info_page);
	       }
       },
       error: function(){
         $('.loading').html('<span>请求出错请刷新重试</span>');  //请求出错请刷新重试
       }
    });
	
}
	
	
	
	
	
	
	
	
	$('.tab_box li').click(function(){
		var i = $(this).index(),type=$(this).attr('data-type'),total = $('.ulbox').eq(i).attr("data-total"),page = $('.ulbox').eq(i).attr("data-page");
		$(this).addClass('on').siblings('li').removeClass('on');
		$('.ulbox').eq(i).addClass('show').siblings('.ulbox').removeClass('show');
		
		if($('.message_list .info_li').length==0){
			msg_list();
		}else if(type=="notice"&&$('.tip_list dl').length==0){
			notice_list();
		}

		if(total <= page ){
			info_load=1;
			return false;
		}else{
			setTimeout(function(){
				info_load=0;
			},500);
			return false;
			
		}	
});
	
	//通知删除
	$('body').delegate('.tip_con .del_btn','click',function(){
	    var t = $(this), par = t.closest("dl"), id = par.attr("data-id");
//	    if(id){
//	console.log('111')
	      if(confirm(langData['siteConfig'][20][211])){
	        t.siblings("a").hide();
	        t.addClass("load");
	        $.ajax({
	          url: masterDomain+"/include/ajax.php?service=member&action=delMessage&id="+id,
	          type: "GET",
	          dataType: "jsonp",
	          success: function (data) {
	            if(data && data.state == 100){
	              //删除成功后移除信息层并异步获取最新列表
	              objId.html('');
	              getList(1)
	
	            }else{
	              alert(data.info);
	              t.siblings("a").show();
	              t.removeClass("load");
	            }
	          },
	          error: function(){
	            alert(langData['siteConfig'][20][183]);
	            t.siblings("a").show();
	            t.removeClass("load");
	          }
	        });
	      }
	      return false;
//	    }
	 
	});
	
	//跳转url
	$('.scrollbox').delegate('dd','click',function(){
		var url = $(this).attr('data-url');
		window.location.href = url;
	})
	
	//左滑删除
        var lines = $(".message_list .info_li");//左滑对象
        var len = lines.length;
        var lastXForMobile;//上一点位置
        var pressedObj;  // 当前左滑的对象
        var lastLeftObj; // 上一个左滑的对象
        var start;//起点位置
 		console.log('长度'+len)
        for (var i = 0; i < len; i++) {
            $(".message_list ").delegate('.info_li','touchstart', function (e) {
            	$(this).find('.del_btn').show() //显示删除按钮
            	$(this).siblings().find('.del_btn').hide();  //隐藏删除按钮
//          	console.log(e)
//                e.preventDefault();//加上这句的话删除按钮就无法点击了
                lastXForMobile = e.changedTouches[0].pageX;
                pressedObj = this; // 记录被按下的对象
                // 记录开始按下时的点
                var touches = event.touches[0];
                start = {
                    x: touches.pageX, // 横坐标
                    y: touches.pageY  // 纵坐标
                };
            });
           $(".message_list ").delegate('.info_li','touchmove', function (e) {
                // 计算划动过程中x和y的变化量
                var touches = event.touches[0];
                delta = {
                    x: touches.pageX - start.x,
                    y: touches.pageY - start.y
                };
                // 横向位移大于纵向位移，阻止纵向滚动
                if (Math.abs(delta.x) > Math.abs(delta.y)) {
                    event.preventDefault();
                }
                if (lastLeftObj && pressedObj != lastLeftObj) { // 点击除当前左滑对象之外的任意其他位置
                    $(lastLeftObj).animate({'transform': 'translateX(0px)'},100); // 右滑
                    lastLeftObj = null; // 清空上一个左滑的对象
                }
                var diffX = e.changedTouches[0].pageX - lastXForMobile;
                $('.message_list .info_li .del_btn').text('删除对话').removeClass('sure_btn');
                if (diffX < -50) {
                    $(pressedObj).animate({'transform': 'translateX(-1.8rem) '},100).siblings('li').animate({'transform': 'translateX(0px)'}); // 左滑
                    lastLeftObj = pressedObj; // 记录上一个左滑的对象
                } else if (diffX > 50) {
                    if (pressedObj == lastLeftObj) {
                        $(pressedObj).animate({'transform': 'translateX(0px)'},100);// 右滑
                        lastLeftObj = null; // 清空上一个左滑的对象
                    }
                }
            });
 
            $(".message_list ").delegate('.info_li','touchend', function (e) {
            	
            });
            
    }
    $('body').delegate('.del_btn','click',function(){
        var  t=$(this),p = t.parents('.info_li'),del_id = p.attr('data-id');
        if(!t.hasClass('sure_btn')){
        	if(p.length>0){
	        	t.text('确认删除');
	        	t.addClass('sure_btn');
	        	p.siblings('.info_li').find('.del_btn');
        	}
        }else{
        	console.log(del_id);
        	 $.ajax({
		        url: '/include/ajax.php?service=siteConfig&action=delFriend&tid='+del_id+'&type=temp',
		        type: 'post',
		        dataType: 'json',
		        success: function(data){
		            if(data.state == 100){
		               var detail = data.info;
   					   p.remove();
        			   showMsg('已删除对话')		
		            }else{
		                alert(data.info);
		            }
		        },
		        error: function(){
		            alert('网络错误，初始化失败！');
		        }
		    });

        }	
        return false;
    });
    
    
//  触底加载
	$('.list_box>div.tip_list').scroll(function(){
		var allh = $('.list_box .tip_list.show .scrollbox').height()+$('.list_box .tip_list .loading').height();
		var w = $(this).height();
		var scroll = allh - w;
		type = $('.tab_box li.on').attr('data-type');
	     
		if ($(this).scrollTop() >= scroll && !notice_load ) {
		    notice_list();
		};
	});
	
});
