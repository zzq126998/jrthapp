//时间格式化方法
Date.prototype.Format = function (fmt) { //author: meizz 
    var o = {
        "M+": this.getMonth() + 1, //月份 
        "d+": this.getDate(), //日 
        "h+": this.getHours(), //小时 
        "m+": this.getMinutes(), //分 
        "s+": this.getSeconds(), //秒 
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
        "S": this.getMilliseconds() //毫秒 
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}
//获取当前时间

var getCurrentDate = function(format) {
	  var now = new Date();
	  var year = now.getFullYear(); //得到年份
	  var month = now.getMonth();//得到月份
	  var date = now.getDate();//得到日期
	  var day = now.getDay();//得到周几
	  var hour = now.getHours();//得到小时
	  var minu = now.getMinutes();//得到分钟
	  var sec = now.getSeconds();//得到秒
	  month = month + 1;
	  if (month < 10) month = "0" + month;
	  if (date < 10) date = "0" + date;
	  if (hour < 10) hour = "0" + hour;
	  if (minu < 10) minu = "0" + minu;
	  if (sec < 10) sec = "0" + sec;
	  var time = "";
	  //精确到天
	  if(format==1){
		time = year + "-" + month + "-" + date;
	  }
	  //精确到分
	  else if(format==2){
		time = year + "-" + month + "-" + date+ " " + hour + ":" + minu + ":" + sec;
	  }
	  //只获取时和分
	  else if(format==3){
	  	time = hour + ":" + minu
	  }
	  return time;
	}

//获取好友列表
var getflist = function (){
	$.ajax({
        url: '/include/ajax.php?service=siteConfig&action=getImFriendList&userid='+ userinfo['uid'],
        type: "GET",
        dataType: "json", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
         if(data && data.state == 100){
         	 datalist = data.info;
         	 var html = [];
         	if(datalist.length==0){
         		$('.im-f_list.im-chat_list').html('<div class="im-no_list" style="display: none;"><img src="'+staticPath+'images/im/no_img.png" /><p>暂未添加任何好友~</p></div>');
         	}else{
         		for(var i=0; i< datalist.length; i++ ){
         			var val = datalist[i];
         			var online = '';
         			if(val['online']){
         				 online = '<i>在线</i>';
         			}
					var list = [];
					list.push('<li class="fn-clear friend'+datalist[i].userinfo.uid+'" data-id="'+datalist[i].userinfo.uid+'" data-token = '+datalist[i].token+' data-f= "1">');
						list.push('<div class="im-headimg"><img src="'+datalist[i].userinfo.photo+'"></div>');
							list.push('<div class="im-_right">');
								list.push('<h2 class="im-f_name" title="'+datalist[i].userinfo.name+'"><span>'+datalist[i].userinfo.name+'</span>'+online+'</h2>');
								list.push('<div class="im-f_msg"><span>这里是签名这里是签名这里是签名这里是签名</span></div>');
							list.push('</div>');
							list.push('<div class="im-op_box">');
								list.push('<ul><li class="im-chat_to">和他聊天</li>');
									list.push('<li class="im-look_info">基本资料</li>');
									list.push('<li class="im-del_f">删除好友</li>');
						list.push('</ul></div></li>');
         			html.push(list.join(''));
         		}
         		$('.im-f_list.im-chat_list').html(html);
         		
         	}
         	
         }else{
         	$('.im-f_list.im-chat_list').html('<div class="im-no_list" ><img src="'+staticPath+'images/im/no_img.png" /><p>暂未添加任何好友~</p></div>');
         }

        },
        error:function(err){
        	console.log('network error');
        }
     });
}
 function getDateDiff(theDate){
        var nowTime = (new Date());    //当前时间
        var date = (new Date(theDate*1000));    //当前时间
        var today = new Date(nowTime.getFullYear(), nowTime.getMonth(), nowTime.getDate()).getTime(); //今天凌晨
        var yestday = new Date(today - 24*3600*1000).getTime();
        var is = date.getTime() < today && yestday <= date.getTime();

        var Y = date.getFullYear(),
        M = date.getMonth() + 1,
        D = date.getDate(),
        H = date.getHours(),
        m = date.getMinutes(),
        s = date.getSeconds();
        //小于10的在前面补0
        if (M < 10) {
            M = '0' + M;
        }
        if (D < 10) {
            D = '0' + D;
        }
        if (H < 10) {
            H = '0' + H;
        }
        if (m < 10) {
            m = '0' + m;
        }
        if (s < 10) {
            s = '0' + s;
        }

        if(is){
            return '昨天 ' + H + ':' + m;
        }else if(date > today){
            return H + ':' + m;
        }else{
            return Y + '-' + M + '-' + D + '&nbsp;' + H + ':' + m;
        }
    }
//时间转换
	var transTimes=function(timestamp, n){
		update = new Date(timestamp*1000);//时间戳要乘1000
		year   = update.getFullYear();
		month  = (update.getMonth()+1<10)?('0'+(update.getMonth()+1)):(update.getMonth()+1);
		day    = (update.getDate()<10)?('0'+update.getDate()):(update.getDate());
		hour   = (update.getHours()<10)?('0'+update.getHours()):(update.getHours());
		minute = (update.getMinutes()<10)?('0'+update.getMinutes()):(update.getMinutes());
		second = (update.getSeconds()<10)?('0'+update.getSeconds()):(update.getSeconds());
		if(n == 1){
			return (year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second);
		}else if(n == 2){
			return (year+'-'+month+'-'+day);
		}else if(n == 3){
			return (month+'-'+day);
		}else if(n == 4){
			return (hour+':'+minute);
		}else{
			return 0;
		}
	}
//获取最新会话列表
var getcurlist = function (){
	$.ajax({
        url: '/include/ajax.php?service=siteConfig&action=getImFriendList&userid='+userinfo['uid']+'&type=temp',
        type: "GET",
        dataType: "json", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
         if(data && data.state == 100){
         	var datalist = data.info;
         	var html = [];
         	if(datalist.length==0){
         		$('.im-cur_chat.im-chat_list').html('<div class="im-no_list" style="display: none;"><img src="'+staticPath+'images/im/no_img.png" /><p>没有最近聊天记录~</p></div>');
         	}else{
         		var news_num = 0;
         		for(var i=0; i< datalist.length; i++ ){
					var list = [],unread = '';
					var val = datalist[i];
					if(val['lastMessage']['unread']!=undefined){
						news_num =news_num + val['lastMessage']['unread']*1;
					}
		         	if(val['lastMessage'] && val['lastMessage'] != false && val['lastMessage']['unread'] > 0 && (!toUserinfo || (toUserinfo && val['userinfo']['uid'] != toUserinfo['uid']))){
		                unread = '<i>'+val['lastMessage']['unread']+'</i>';
		              
		            }
		            var curr = '';
		            if(toUserinfo && val['userinfo']['uid'] == toUserinfo['uid']){
		               curr = 'im-pannel_curr';
		            }
		            if(datalist[i].userinfo.uid != '0'){
		            	list.push('<li class="fn-clear '+curr+' friend'+datalist[i].userinfo.uid+'" data-token = '+datalist[i].token+' data-id="'+datalist[i].userinfo.uid+'" data-type = "'+val['lastMessage']['type']+'" data-read="'+val['lastMessage']['unread']+'">' );
						list.push('<div class="im-headimg"><img src="'+datalist[i].userinfo.photo+'"></div>')
						list.push('<div class="im-_right">')
						list.push('<h2 class="im-f_name" title="'+datalist[i].userinfo.name+'"><span>'+datalist[i].userinfo.name+'</span><i>'+(val['lastMessage'] && val['lastMessage'] != false ? transTimes(val['lastMessage']['time'], 4):'') + '</i></h2>');
						list.push('<div class="im-f_msg"><span>'+(val['lastMessage'] && val['lastMessage'] != false ? (val['lastMessage']['content']) : '')+'</span>'+unread+'</div>')
						list.push('</div>')
						list.push('<div class="im-delbox"><a href="javascript:;" title="删除会话"></a></div>')
						list.push('</li>')
	         			html.push(list.join(''));
		            }
					
         			
         		}
         		
         		newTip(news_num);
         		$('.im-cur_chat.im-chat_list').html(html)
         	}
         }else{
         	$('.im-cur_chat.im-chat_list').html('<div class="im-no_list" ><img src="'+staticPath+'images/im/no_img.png" /><p>暂无进行中的会话哦~</p></div>');
         }
        },
        error:function(err){
        	console.log('fail');
        }
     });
}

//获取最新消息的列表
var totalpage = 0,req_page=1,isload=0;
var gettiplist = function (){
//	$('.im-msg_list').append('<p class="im-msg_loading"><i></i>加载中</p>');
	$.ajax({
        url: "/include/ajax.php?service=member&state=0&action=message&page=1&pageSize=100",
        type: "GET",
        dataType: "json", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
         if(data.state == 100){

         	var datalist = data.info.list,
         	pageinfo = data.info.pageInfo,
         	totalpage = data.info.pageInfo.totalPage;
         	var html = [];
         	
         	if(datalist.length==0 ){
         		$('.im-tip_num').hide();
         		$('.im-msg_list').html('<div class="im-no_list"><img src="'+staticPath+'images/im/no_notice.png" /><p>暂无未读通知~</p><a class="im-notice_all" href="'+masterDomain+'/u/message.html">查看历史</a></div>');
         	}else{
         		$('.im-tip_num').show();
         		for(var i=0; i< datalist.length; i++ ){
					var list  = [];
					var info = datalist[i].body
					//有新消息的类名
					var newtip = datalist[i].state==0?'im-new':'';
					
					if(info.first){
						list.push('<li class="fn-clear" data-url="'+datalist[i].url+'"><a href="javascript:;"><dl>');
						list.push('<dt class="'+newtip+'">'+info.first.value+'</dt>');
						list.push('<dd><label>'+Object.keys(info)[2]+'</label><span>'+info[Object.keys(info)[2]].value+'</span></dd>');
	         			list.push('<dd class="im-acc_jian"><label>'+Object.keys(info)[3]+'</label><span>'+info[Object.keys(info)[3]].value+'</span></dd>');
	         			
					}else{
						list.push('<li class="fn-clear" data-url="'+datalist[i].url+'"><dl>');
						list.push('<dt class="'+newtip+'"><span>'+datalist[i].title+'</span></dt>');
						list.push('<dd>'+info+'</dd>');
					}
         			list.push('<dd><label>变动时间</label><span>'+datalist[i].date+'</span></dd>');
         			list.push('<dd class="im-delbox"><i></i></dd>');
         			list.push('</dl></li>');
         			
//       			list.push('<li class="fn-clear"><a href="'+datalist[i].url+'"><dl>');
//					list.push('<dt class="'+newtip+'">您的账户有新的消息</dt>');
//       			list.push('<dd><label>消息内容</label><span>'+datalist[i].title+'</span></dd>');
//       			list.push('<dd class="im-acc_jian"><label>余额变化</label><span>-38.99</span></dd>');
//       			list.push('<dd><label>变动时间</label><span>'+datalist[i].date+'</span></dd>');
//       			list.push('<dd class="im-delbox"><i></i></dd>');
//       			list.push('</dl></a></li>');
         			html.push(list.join(''))
         		}
         		$('.im-msg_list').html(html);
         		
         		$('.im-panel_list .im-tip_btn .im-tip_num').text(pageinfo.unread);
         		if(pageinfo.unread==0){
         			$('.im-panel_list .im-tip_btn .im-tip_num').hide();
         		}else{
         			$('.im-panel_list .im-tip_btn .im-tip_num').show();
         		}
         		$('.im-msg_loading').remove();
         	}
//       	if(req_page == totalpage){
////              console.log('true')
//              isload = 1;
////              $('.im-msg_list').append('<p class="im-msg_loading">已经全部加载</p>');
//           }
//       	req_page++;
         }
        },
        error:function(err){
        	console.log('fail');
        }
     });
}

//获取聊天记录
var rec_page=1,recload=0,fin=1;
var getrecord = function(type){
	$('.im-more').remove();
	if(recload || rec_page > totalPage) return false;
        recload = 1;
	$.ajax({
         url: '/include/ajax.php?service=siteConfig&action=getImChatLog',
         data: {from: chatToken, to: toChatToken, page: rec_page, pageSize: 20, time: time},
        type: "post",
        dataType: "json", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
		if(data && data.state == 100){
            data = data.info;
            var pageInfo = data.pageInfo;
            var list = data.list;
            if(rec_page == 1){
                list.reverse();
            }
            totalPage = pageInfo.totalPage;
            for(var i = 0; i < list.length; i++){
                var data = {
                        content: list[i].info.content,
                        contentType: list[i].type,
                        from: list[i].info.fid,
                        to: list[i].info.tid,
                        type: "person",
                        time: list[i].info.time
                    }
				
                createEle(data, type);
            }
            $('.im-record_box').prepend('<a href="javascript:;" class="im-more"><span><i></i>查看更多记录</span></a>');
            setTimeout(function(){
                recload = false;
            }, 1000);

            //最后一页显示时间
           if(rec_page > 1 && rec_page == pageInfo.totalPage){
           		$('.im-more').remove();
                var time = parseInt($('.im-record_box').find('.im-chat_item:eq(0)').attr('data-time'));
                 $('.im-record_box').prepend('<p class="im-msg_time" data-time="'+time+'">'+getDateDiff(time)+'</p>');
           }
                   if(rec_page>=pageInfo.totalPage){
                   	$('.im-more').remove();
                   }

                   rec_page++; 
					fin =1;
               }else{
                    recload = false;
                }
            },
            error: function(){
                console.log('network error');
                recload = false;
            }
     });
	
}
  // 业务层
    var createEle = function(data, type, newMessage, lib){
        var from = data.from;
        var to = data.to;
        var sf = false;
        //更新好友列表最新消息
        if(newMessage){
            $('.im-cur_chat .friend' + from).find('.im-f_name i').html(transTimes(data.time, 4) );
            if(data.contentType == "text"){
            	$('.im-cur_chat .friend' + from).find('.im-f_msg span').html( data.content.replace(/\\/g,""))
            }else if(data.contentType == "image"){
            	$('.im-cur_chat .friend' + from).find('.im-f_msg span').html( '[图片]');
            }else if(data.contentType == "apply"){
            	$('.im-cur_chat .friend' + from).find('.im-f_msg span').html( '[验证消息]')
            }
            if(!$('.im-cur_chat .friend' + from).hasClass('im-pannel_curr')){
                if($('.im-cur_chat .friend' + from).find('.im-f_msg i').size() == 0){
                    $('.im-cur_chat .friend' + from).find('.im-f_msg').append('<i></i>');
                }
                $('.im-cur_chat .friend' + from).find('.im-f_msg i').html(data.unread);
                newTip(data.unread);
                
            }
         
        }
        //更新对话窗体内容，如果没有选择会员，不执行        
        if(!toUserinfo || (newMessage && toUserinfo['uid'] != from)) return;
		var gest = typemsg = imghead = style = attrbuite = lng = lat ='';
        //拼接对话
        if (from == userinfo['uid']) {
        	gest ='im-to_other';
        	imghead = '<div class="im-m_head"><img src="'+userinfo['photo']+'"></div>';
            var fromUser = "<span style='color: red;'>你</span>";
            sf = true;
        } else {
            var fromUser = toUserinfo['name'];
        }
		
        if (to == userinfo['uid']) {
        	gest ='im-from_other';
        	imghead = '<div class="im-m_head im-to_fdetail"><img src="'+toUserinfo['photo']+'"></div>';
            var toUser = "<span style='color: red;'>你</span>";
        } else {
            var toUser = toUserinfo['name'];
        }
		
         

        // 文本
        if(data.contentType == "text"){
            text = '<div class="im-text_msg">'+data.content.replace(/\\/g,"")+'</div>';
            typemsg= '';
            style="";
            attrbuite=""
        }

        // 图片
        if(data.contentType == 'image'){
            content = data.content;
            text = '<img src="/include/attachment.php?f='+content.url+'" />';
            typemsg= 'im-img_content';
            attrbuite = data.content.width+'X'+data.content.height;
            if(data.content.width>180 && (data.content.height<=data.content.width)){
            	var h =  data.content.height*180/data.content.width
            	style ='height:'+h+'px';
            	
            }else if(data.content.height>180){
            	style ='height:180px';
            }
            
        }
        
         //语音消息
        if(data.contentType == 'audio'){
        	 typemsg= 'im-s_content';
        	 text = '<div class="im-speak_msg"><em>23"</em></div>'
        }
        
        //视频
        if(data.contentType == 'video'){
        	 content = data.content;
        	 text = '<div class="im-video_msg"><video src="/include/attachment.php?f='+content.url+'"></video></div>';
        	 typemsg= 'im-img_content';
            attrbuite = data.content.width+'X'+data.content.height;
           
            if(data.content.width>100 && ((data.content.height-data.content.width)<=0)){
            	var h =  data.content.height*100/data.content.width
            	style ='height:'+h+'px';
            }else if(data.content.height>100&&((data.content.height-data.content.width)>0)){
            	style ='height:100px';
            	
            }
        }
        
        //地图分享
        if(data.contentType == 'mapshare'){
			typemsg = 'im-post_content';
        	lng =  data.content.lng;
        	lat = data.content.lat;
        	text = '<a class="appMapBtn" target="_blank" href="javascript:;"><div class="im-post_text"><h2>'+data.content.name+'</h2><p>'+data.content.address+'</p></div><div class="im-area_show"><img src="'+data.content.mapimg+'" /></div></a>'
        }
        
         //好友推荐
        if(data.contentType == 'recfriend'){
        	typemsg = 'im-recf_content';
        	text = '<a data-id="'+data.content.f_id+'" href="add_friend-'+data.content.f_id+'.html"><dl><dt>推荐好友</dt><dd class="fn-clear"><div class="im-recf_head"><img src="'+data.content.f_photo+'"/><i class="level"></i></div><div class="im-recf_info"><h2>'+data.content.f_name+'</h2><p>ID：'+data.content.f_id+'</p></div></dd></dl></a>';
        }
        //好友申请
        if(data.contentType == "apply"){
        	var date1 =new Date();
        	var date2 = date1.getTime()-data.time*1000;
        	var day = Math.floor(date2/(24*3600*1000)); //相差天数
        	var hour =  Math.floor((date2%(24*3600*1000))/(3600*1000));
        	var min =  Math.floor(((date2%(24*3600*1000))%(3600*1000))/(60*1000));
        	var timemsg ='';
        	if(day>0){
        		timemsg ='apply_timeout';
        	}else{
        		timemsg ='im-apply_msg';
        	}
            text = '<div class="im-text_msg '+timemsg+'"><span class="im-test_msg">好友验证 -</span>'+data.content+'</div>';
           
            if(min<=2&&hour==0&&day==0 && (data.from == toUserinfo['uid']) &&data.content!='你们已成功添加为好友'){
            	
        		$('.im-btn_group .im-to_f').html('对方请求加为好友<a href="javascript:;" class="im-btn_agree">同意</a><a class="im-btn_refuse" href="javascript:;">忽略</a>')
        	}
            typemsg= '';
            style="";
            attrbuite="";
        }
        
        var item = '<div class="'+gest+' im-chat_item fn-clear" data-time="'+data.time+'" data-size="'+attrbuite+'">'+imghead+'<div style="'+style+'" class="im-m_content '+typemsg+'" data-lng="'+lng+'" data-lat="'+lat+'">'+text+'</div></div>';
        
        appendLog('mine', item, type, data.time);
	
        //已读上报
        if(newMessage && data.to == userinfo['uid'] && data.from == toUserinfo['uid']){
            var data = {
                contentType: 'read',
                from: chatToken,
                to: toChatToken,
                time: data.time
            };
		
            lib.reset();
            lib.socket.send(JSON.stringify(data));
        }

    };
    
     //创建历史对话
    var appendLog = function (ele, item, type, time) {
        var log = $('.im-record_box');
		
        if(log.find('.im-chat_item').size() == 0){
            log.append('<div class="im-msg_time" data-time="'+time+'">'+getDateDiff(time)+'</div>');
           
        }else{
        	
            if(type != 'prepend'){
                var lastTime = parseInt(log.find('.im-chat_item:last').attr('data-time'));
                var timeCalcu = time-lastTime;
            }else{
                var lastTime = parseInt(log.find('.im-msg_time:eq(0)').attr('data-time'));
                var timeCalcu = lastTime-time;
            }
	
            if(timeCalcu > 300){
                if(type != 'prepend'){
                    log.append('<div class="im-msg_time" data-time="'+time+'">'+getDateDiff(time)+'</div>');
                }else{
                    log.prepend('<div class="im-msg_time" data-time="'+time+'">'+getDateDiff(time)+'</div>');
                }
            }
        }

        if(type != 'prepend'){
            log.append(item);
            log.scrollTop(log[0].scrollHeight - log.innerHeight());
        }else{
            log.prepend(item);
            stop += log.find('.im-chat_item:eq(0)').outerHeight();
            log.scrollTop(stop);
        }
    }
    
	
//弹出层消息
var showErrTimer;
var showMsg = function(txt){
	showErrTimer && clearTimeout(showErrTimer);
	$(".im-popMsg").remove();
	$(".im-big_panel").append('<div class="im-popMsg"><p>'+txt+'</p></div>');
	$(".im-popMsg p").css({ "left": "50%"});
	$(".im-popMsg").css({"visibility": "visible"});
	showErrTimer = setTimeout(function(){
	    $(".im-popMsg").fadeOut(300, function(){
	        $(this).remove();
	    });
	}, 1500);
}

 //根据光标位置插入指定内容
var pasteHtmlAtCaret = function(html) {
      var sel, range;
      if (window.getSelection) {
          sel = memerySelection;
          if (sel.getRangeAt && sel.rangeCount) {
              range = sel.getRangeAt(0);
              range.deleteContents();
              var el = document.createElement("div");
              el.innerHTML = html;
              var frag = document.createDocumentFragment(), node, lastNode;
              while ( (node = el.firstChild) ) {
                  lastNode = frag.appendChild(node);
              }
              range.insertNode(frag);
              if (lastNode) {
                  range = range.cloneRange();
                  range.setStartAfter(lastNode);
                  range.collapse(true);
                  sel.removeAllRanges();
                  sel.addRange(range);
              }
          }
      } else if (document.selection && document.selection.type != "Control") {
          document.selection.createRange().pasteHTML(html);
      }
  }
	//光标定位到最后
var set_focus = function(el){
		el=el[0];
		el.focus();
		if($.browser.msie){
			var rng;
			el.focus();
			rng = document.selection.createRange();
			rng.moveStart('character', -el.innerText.length);
			var text = rng.text;
			for (var i = 0; i < el.innerText.length; i++) {
				if (el.innerText.substring(0, i + 1) == text.substring(text.length - i - 1, text.length)) {
					result = i + 1;
				}
			}
		}else{
			var range = document.createRange();
			range.selectNodeContents(el);
			range.collapse(false);
			var sel = window.getSelection();
			sel.removeAllRanges();
			sel.addRange(range);
		}
	}

//加载聊天记录
var datelist = []
var getrecord_1 = function(page,datachose){
	if(!datachose){
		datachose='';
	}
	$('.im-rec_loading2').show();
	$.ajax({
        url: '/include/ajax.php?service=siteConfig&action=getImChatLog',
        data: {from: chatToken, to: toChatToken, page: page, pageSize: 20, time: time},
        type: "GET",
        dataType: "json", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
         if(data.state == 100){
         	var datalist = data.info.list;
         	var total = data.info.pageInfo.totalPage;
         	var page = data.info.pageInfo.page;
         	var html = [];
			//有聊天记录的日期
			
         	for(var i=0; i< datalist.length; i++ ){
         		var value_time = transTimes(datalist[1].time,2);
				$('#im-date').val(value_time);
				var list  = [];
				var msgt,nickname;
				if(datalist[i].info.fid==userinfo['uid']&&datalist[i].info.tid==toUserinfo['uid']){
					msgt='im-msg_to';
					nickname=userinfo['name']
				}else if(datalist[i].info.fid==toUserinfo['uid']&&datalist[i].info.tid==userinfo['uid']){
					msgt='im-msg_from';
					nickname=toUserinfo['name']
				}
					list.push('<li class="im-msg_content">');
	         			list.push('<div class="im-chat-user '+msgt+'">');
	         				list.push('<span>'+nickname+'</span> <em>'+transTimes(datalist[i].info.time,1)+'</em>')
	         			list.push('</div>');
	         			list.push('<div class="im-chat-text">');
	         			if(datalist[i].type=='text'){
	         				list.push('<div class="im-text-msg">');
	         					list.push(datalist[i].info.content)
	         				list.push('</div>');
	         			}else if(datalist[i].type=='image'){
	         				list.push('<img src="/include/attachment.php?f='+datalist[i].info.content.url+'">');
	         			}else if(datalist[i].type=='apply'){
	         				list.push('<span>验证消息</span> - '+datalist[i].info.content);
	         			}else if(datalist[i].type=='mapshare'){
	         				list.push('[地图分享]');
	         			}else if(datalist[i].type=='recfriend'){
	         				list.push('[好友分享]');
	         			}
	         			list.push('</div>');
	         		list.push('</li>');
				
				
         		html.push(list.join(''))
         	}
         	$('.im-msg_record ul').html(html);
         	$('.im-page_mum').val(page);
         	$('.im-to_first').attr('data-total',total);
         	if(page==1){
         		$('.im-next').css('background-image','url('+staticPath+'images/im/right1.png)')
		        $('.im-to_last').css('background-image','url('+staticPath+'images/im/to_right1.png)');
		        $('.im-prev').css('background-image','url('+staticPath+'images/im/left.png)')
		        $('.im-to_first').css('background-image','url('+staticPath+'images/im/to_left.png)');
         	}else if(page==total){
         		$('.im-rec_loading2').hide();
         		$('.im-prev').css('background-image','url('+staticPath+'images/im/left1.png)')
		        $('.im-to_first').css('background-image','url('+staticPath+'images/im/to_left1.png)');
		        $('.im-next').css('background-image','url('+staticPath+'images/im/right.png)')
		        $('.im-to_last').css('background-image','url('+staticPath+'images/im/to_right.png)');
         	}else{
         		$('.im-prev').css('background-image','url('+staticPath+'images/im/left.png)')
		        $('.im-to_first').css('background-image','url('+staticPath+'images/im/to_left.png)');
		        $('.im-next').css('background-image','url('+staticPath+'images/im/right.png)')
		        $('.im-to_last').css('background-image','url('+staticPath+'images/im/to_right.png)');
         	}
         	$('.im-rec_loading2').hide();
         }
        },
        error:function(err){
        	console.log('fail');
        }
     });
}

//加载评论和点赞
var zan_page=1, zan_total=0, zanload=0,fin_zan=1;
var getzan = function(){
	$('.com_loading').show();
	$.ajax({
        url: "https://ihuoniao.cn/include/ajax.php?service=info&action=ilist_v2&page="+zan_page+"&pageSize=4",
        type: "GET",
        dataType: "jsonp", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
         if(data.state == 100){
         	var datalist = data.info.list;
         	zan_total = data.info.pageInfo.totalPage;
         	var html = [];
         	if(datalist.length==0){
         		$('.im-act_box .im-zan').html('<div class="im-no_list"><img src="'+staticPath+'images/im/no_img.png" /><p>没有任何消息~</p></div>');
         	}else{
         		for(var i=0; i< datalist.length; i++ ){
					var list  = [];
					list.push('<li><a href="#" class="fn-clear">');
						list.push('<div class="im-zan_head"><img src="'+templets_skin+'upfile/head01.jpg" /></div>');	
						list.push('<div class="im-zan_con">');	
							list.push('<div class="im-con_img"><img src="'+templets_skin+'upfile/img_01.png" /></div>');	
							list.push('<h3><span class="im-nicname">SIMMO</span>赞了我的发布</h3>');
							list.push('<p>自己也有写过一些文章来分享，同时自己也在不断收集和整理作品，并在公众号开始发</p>');	
							list.push('<div class="im-reply_box"><em>12:31</em><span class="im-btn_reply">回复</span></div>');	
						list.push('</div>');
         			list.push('</a></li>');
         			html.push(list.join(''))
         		}
         		$('.im-act_box .im-zan').append(html);
         		$('.com_loading').hide();
         	}
         	if(zan_page == zan_total){
	            console.log('已经全部加载');//已显示全部
	            zanload = 1;
	            $('.com_loading').hide();
	        }
         	zan_page++;
         	fin_zan=1;
         }
         
        },
        error:function(err){
        	console.log('fail');
        }
     });
}

var cm_page=1,cm_total=0,cmload=0,fin_comm=1;
var getcommt = function(){
	$('.com_loading').show();
	$.ajax({
        url: "https://ihuoniao.cn/include/ajax.php?service=info&action=ilist_v2&page="+cm_page+"&pageSize=6",
        type: "GET",
        dataType: "jsonp", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
         if(data.state == 100){
         	var datalist = data.info.list,
         	cm_total = data.info.pageInfo.totalPage;
         	var html = [];
         	if(datalist.length==0){
         		$('.im-act_box .im-commt').html('<div class="im-no_list" style="display: none;"><img src="'+staticPath+'images/im/no_img.png" /><p>没有任何消息~</p></div>');
         	}else{
         		for(var i=0; i< datalist.length; i++ ){
					var list  = [];
					list.push('<li><a href="#" class="fn-clear">');
						list.push('<div class="im-zan_head"><img src="'+datalist[i].litpic+'" /></div>');	
						list.push('<div class="im-zan_con">');	
							list.push('<div class="im-con_img"><img src="'+templets_skin+'upfile/img_01.png" /></div>');	
							list.push('<h3><span class="im-nicname">'+datalist[i].member.nickname+'</span></h3>');
							list.push('<p>自己也有写过一些文章来分享</p>');	
							list.push('<div class="im-reply_box"><em>12:31</em><span class="im-btn_reply">回复</span></div>');	
						list.push('</div>');
         			list.push('</a></li>');
         			html.push(list.join(''))
         		}
         		$('.im-act_box .im-commt').append(html);
         		$('.com_loading').hide();
         		
         		
         	}
         	 if(cm_page == cm_total){
				    console.log('已经全部加载');//已显示全部
				    cmload = 1;
				    $('.com_loading').hide();
			}
         cm_page++;
         fin_comm=1;
         }
        
        },
        error:function(err){
        	console.log('fail');
        }
     });
}

//加载个人资料
var getinfo =  function(id){
	$.ajax({
        url: "https://ihuoniao.cn/include/ajax.php?service=info&action=ilist_v2&pageSize=4",
        type: "GET",
        dataType: "jsonp", //指定服务器返回的数据类型
        crossDomain:true,
        success: function (data) {
         if(data.state == 100){
         	var datalist = data.info.list;
         	var html = [],info=[];

         		for(var i=0; i< datalist.length; i++ ){
					var list  = [];
					if(i!=2){
						list.push('<li class="im-shop"><a href="#" class=" fn-clear"><div class="im-_leftLogo "><i></i><span>商城</span></div><div class="im-shop_info"><h3>蔓延时尚潮流女装  </h3><p>服装服饰、鞋帽、针纺织品、服装辅料、</p></div></a></li>');
					}else{
						list.push('<li class="im-zhaopin"><a href="#" class=" fn-clear"><div class="im-_leftLogo"><i></i><span>招聘</span></div><div class="im-shop_info"><h3>蔓延时尚潮流女装  </h3><p><span>在招职位  12</span><em>|</em><span>薪资  5000~7000</span></p></div></a></li>');
					}
         			html.push(list.join(''))
         		} 
         		$('.im-shop_box ul').html(html)
         }
        },
        error:function(err){
        	console.log('fail');
        }
     });
}

var timer,step=0;
var newTip = function(num){
	//新消息闪烁
	clearInterval(timer);
	if(num==0){
		$('.im-msg_tip').html('<span class="im-tip_head"><img src="'+userinfo["photo"]+'"/></span><p>'+userinfo["name"]+'</p><i></i>');
		return false;
				
	}else{
		
		timer = setInterval(function(){	
			step++;
			if(step == 3) {step = 1};
			if(step == 1) {$('.im-msg_tip p').text('  ') };
			if(step == 2) {
				$('.im-msg_tip p').html('有新消息<span class="im-news_num">'+num+'</span>');
			};
		}, 500);
	}
			

//		$('.im-msg_tip').html('<span class="im-tip_head"><img src="'+userinfo["photo"]+'"/></span><p>'+userinfo["name"]+'</p><i></i>')

}

//文本框过滤样式
$('[contenteditable]').each(function() {
    // 干掉IE http之类地址自动加链接
    try {
        document.execCommand("AutoUrlDetect", false, false);
    } catch (e) {}
    
    $(this).on('paste', function(e) {
        e.preventDefault();
        var text = null;
    
        if(window.clipboardData && clipboardData.setData) {
            // IE
            text = window.clipboardData.getData('text');
        } else {
            text = (e.originalEvent || e).clipboardData.getData('text/plain') || prompt('在这里输入文本');
        }
        if (document.body.createTextRange) {    
            if (document.selection) {
                textRange = document.selection.createRange();
            } else if (window.getSelection) {
                sel = window.getSelection();
                var range = sel.getRangeAt(0);
                
                // 创建临时元素，使得TextRange可以移动到正确的位置
                var tempEl = document.createElement("span");
                tempEl.innerHTML = "&#FEFF;";
                range.deleteContents();
                range.insertNode(tempEl);
                textRange = document.body.createTextRange();
                textRange.moveToElementText(tempEl);
                tempEl.parentNode.removeChild(tempEl);
            }
            textRange.text = text;
            textRange.collapse(false);
            textRange.select();
        } else {
            // Chrome之类浏览器
            document.execCommand("insertText", false, text);
        }
    });
    // 去除Crtl+b/Ctrl+i/Ctrl+u等快捷键
    $(this).on('keydown', function(e) {
        // e.metaKey for mac
        if (e.ctrlKey || e.metaKey) {
            switch(e.keyCode){
                case 66: //ctrl+B or ctrl+b
                case 98: 
                case 73: //ctrl+I or ctrl+i
                case 105: 
                case 85: //ctrl+U or ctrl+u
                case 117: {
                    e.preventDefault();    
                    break;
                }
            }
        }    
    });
});
