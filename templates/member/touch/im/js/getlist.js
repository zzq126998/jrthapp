




//礼物列表获取
var gift_page =1, gift_load=0;
var gift_list = function(time){
	gift_load =1;
	$.ajax({
       url: "/include/ajax.php?service=info&action=ilist_v2&page="+gift_page+"&pageSize=10",
       type: "GET",
       dataType: "json",
       success: function (data) {
	       var datalist = data.info.list,totalpage = data.info.pageInfo.totalPage;
	       var html = [];
	       if(data.state == 100){
	          if(datalist.length==0){
         		$('.gift_list').html('<div class="im-no_list"><img src="'+templets_skin+'images/no_img.png"/><p>没有找到相关记录~</p></div>'); 	
	          }else{
	            for(var i=0; i<datalist.length; i++){
	            	var list =[];
	            	list.push('<li class="fn-clear">')
					list.push('<div class="userhead_left"><img src="'+templets_skin+'upfile/img.png" /><i class="vip_level"><img src="'+templets_skin+'upfile/vip_icon.png"/></i></div>');
					list.push('<div class="giftcon_box"><h3>礼物-来自沈丽娟 </h3><span class="gift_price">+35</span>');
					list.push('<div class="gift_con"><div class="giftimg_left"><img src="'+templets_skin+'upfile/giif.png"/></div><div class="gift_right"><p>么么哒<em>x2</em></p><h2>100</h2></div></div>');
					list.push('<p class="gift_info">12-15  12:50</p></div></li>');	
					$('.gift_list ul').append(list.join(''));
	            }
	                   
	            
	          }
	          
//	          $('.loading').remove();
	          gift_load =0;
	          if(totalpage == gift_page){
	          	$('.loading').html('<span>已经全部加载</span>');
	          	console.log('已经全部加载');
	          	gift_load=1;
	          }
	          gift_page++;
	       }
       },
       error: function(){
         $('.loading').html('<span>请求出错请刷新重试</span>');  //请求出错请刷新重试
       }
    });
}

//图片报错
function nofind(){ 
	var img = event.srcElement; 
	img.src = staticPath+"images/noPhoto_60.jpg"; 
	img.onerror = null;
} 
//图片2报错
function nofind_c(){ 
	var img = event.srcElement; 
	img.src = staticPath+"images/404.jpg"; 
	img.onerror = null;
} 
//获取点赞，评论列表
var comm_page =1,comm_load=0;
var commt_list = function(type){
	comm_load =1;
	url = type=="commt"?"/include/ajax.php?service=member&action=getComment&u=1&son=1&onlyself=1&page="+comm_page:"/include/ajax.php?service=member&action=upList&u=1&page="+comm_page
	$.ajax({
       url: url,
       type: "GET",
       dataType: "json",
       success: function (data) {
	       
	       var html = [];
	       var login_userid ='';
	       if(data.state == 100){
	       	  var datalist = data.info.list,totalpage = data.info.pageInfo.totalPage;
	          if(datalist.length==0){
         		$('.commt_list').html('<div class="im-no_list"><img src="'+templets_skin+'images/no_img.png"/><p>没有找到相关记录~</p></div>'); 	
	          }else{
	          		
	          		for(var i=0; i<datalist.length; i++){
		            	var list =[];
		            	var className ='';
		            	var user = datalist[i].user;
		            	var detail = datalist[i].detail;
		            	i
		            	if(type=='commt'){
		            		if(datalist[i].parent){
			            		className="commt_con";
			            	}else{
			            		className="con_box";
			            	}
			            	var hide = '';
			            	
			            	if(datalist[i].type=="tuan-order" || datalist[i].type=="tuan-store" || datalist[i].type=="shop-order" || datalist[i].type=="waimai-order" || datalist[i].type == "info-business"){
			            		hide = 'fn-hide';
			            	}
		            			list.push('<li class="commt_li"><div class="f_info">');
								list.push('<a href="'+masterDomain+'/user-'+user.userid+'.html" class="fn-clear">');
								list.push('<div class="left_head"><img src="'+(user.photo?user.photo:"/static/iamges/noPhoto_60.jpg")+'" /><i class="vip_level">'+(datalist[i].levelIcon?"<img src="+datalist[i].levelIcon+" />":"")+'</i></div>');
								list.push('<div class="right_info"><h2>'+user.nickname+'</h2><p>'+datalist[i].ftime+'</p></div>');
								list.push('</a><button data-id="'+datalist[i].id+'" class="reply_btn '+hide+'">回复</button></div>');
								list.push('<a href="'+(detail?detail.url:"javascript:;")+'" class="commt_link"><div class="commt_con">');
								if(className=="con_box"){
									list.push('<h3>'+datalist[i].content+'</h3>');
									list.push('<div class="mycon '+className+'">');
								}else{
									list.push('<h3>'+datalist[i].content+'</h3>');
									list.push('<div class="mycon '+className+'"><h3>我：'+datalist[i].parent.content+'</h3>');
									list.push('<div class="con_box">');
								};									
								if(detail && detail.litpic){
									if(datalist[i].type!='quanjing-detail'){
										list.push('<div class="left_img"><img src="'+(detail.litpic==''?(detail.pics?detail.pics[0].path:"/static/iamges/noPhoto_40"):detail.litpic)+'" /></div>');
										list.push('<div class="right_box"><h2>'+(datalist[i].parent?(detail.member?detail.member.nickname:(detail.writer?detail.writer:"佚名")):"我")+'：</h2><p class="con">'+(detail.description?detail.description:detail.title)+'</p></div>');	
									}else{
										list.push('<div class="left_img"><img src="'+(detail.litpic==''?(detail.pics?detail.pics[0].path:"/static/iamges/noPhoto_40"):detail.litpic)+'" /></div>');
										list.push('<div class="right_box"><h2>'+(datalist[i].parent?(detail.user.nickname?detail.user.nickname:(detail.writer?detail.writer:"佚名")):"我")+'：</h2><p class="con">'+(detail.description?detail.description:detail.title)+'</p></div>');	
									}
									
								}else if(detail && detail.imglist ){
									if(detail.imglist.length>0 ){
										list.push('<div class="left_img"><img src="'+detail.imglist[0].path+'" /></div>');
										if(datalist[i].type=="travel-agency"){
											list.push('<div class="right_box"><h2>'+(datalist[i].parent?detail.travelservice:"我")+'：</h2><p class="con">'+(detail.imglist[0].info?detail.imglist[0].info:detail.title)+'</p></div>');
										}else{
											list.push('<div class="right_box"><h2>'+(datalist[i].parent?detail.member.nickname:"我")+'：</h2><p class="con">'+(detail.imglist[0].info?detail.imglist[0].info:detail.title)+'</p></div>');
										}
									}	
								}else if(datalist[i].type=="tieba-detail" && detail && detail.imgGroup.length>0){  //贴吧
									list.push('<div class="left_img"><img src="'+detail.imgGroup[0]+'" /></div>');
									list.push('<div class="right_box"><h2>'+(datalist[i].parent?detail.louzu.nickname:"我")+'：</h2><p class="con">'+(detail.title)+'</p></div>');
								}else if(detail && detail.pics.length>0 && datalist[i].type!="info-business"){
									list.push('<div class="left_img"><img src="'+(detail.pics[0].path?detail.pics[0].path:detail.pics[0].pic)+'" /></div>');
									list.push('<div class="right_box"><h2>'+(datalist[i].parent?(detail.member?detail.member.nickname:(detail.store?detail.store.title:"佚名")):"我")+'：</h2><p class="con">'+(detail.title?detail.title:detail.note)+'</p></div>');
								}else if(datalist[i].type=="business" && detail.logo){
									list.push('<div class="left_img"><img src="'+detail.logo+'" /></div>');
									list.push('<div class="right_box"><h2>'+(datalist[i].parent?detail.title:"我")+'：</h2><p class="con">'+(detail.intro)+'</p></div>');
								}else if(datalist[i].type=="info-business"&& detail && detail.pics.length>0){
									
									list.push('<div class="left_img"><img src="'+detail.pics[0].path+'" /></div>');
									list.push('<div class="right_box"><h2>'+(datalist[i].parent?detail.member.username:"我")+'：</h2><p class="con">'+(detail.title?detail.title:"")+'</p></div>');
								}else{
									list.push('<div class="right_box" style="margin-left:.2rem;"><h2>'+(datalist[i].parent?(detail?(detail.user?detail.user.username:(detail.store?detail.store.member.nickname:"佚名")):"佚名"):"我")+'：</h2><p class="con">'+(detail?detail.title:"")+'</p></div>');
								}
		            		
		            	}else{
		            		if(datalist[i].type=='1'){
				            		className="commt_con";
				            	}else{
				            		className="con_box";
				            	}
							list.push('<li class="commt_li"><div class="f_info">');
							list.push('<a href="'+masterDomain+'/user-'+datalist[i].uid+'.html" class="fn-clear">');
							list.push('<div class="left_head"><img onerror="nofind();" src="'+(datalist[i].photo?datalist[i].photo:"/static/iamges/noPhoto_60.jpg")+'" /></div>');
							list.push('<div class="right_info"><h2>'+datalist[i].username+'</h2><p>'+(getDateDiff(datalist[i].puctime))+'</p></div>');
							list.push('</a><button data-id="'+datalist[i].id+'" class="reply_btn fn-hide">回复</button></div>');
							list.push('<a href="'+detail.url+'" class="commt_link"><div class="commt_con">');
							if(className=="con_box"){
								list.push('<h3>赞了我的这条发布</h3>');
								list.push('<div class="mycon '+className+'">');
							}else{
								list.push('<h3>赞了我的这条评论</h3>');
								list.push('<div class="mycon '+className+'"><h3>我：'+datalist[i].detail.commentcontent+'</h3>');
								list.push('<div class="con_box">');
							}
							if(detail.litpic){
								list.push('<div class="left_img"><img onerror="nofind_c();" src="'+detail.litpic+'" /></div>');
								list.push('<div class="right_box"><h2>'+((datalist[i].type=='0')?"我":detail.member.nickname)+'：</h2><p class="con">'+detail.description+'</p></div>');	
							}else if(detail.imglist.length>0 && detail.imglist!=undefined){
								list.push('<div class="left_img"><img src="/include/attachment.php?f='+detail.imglist[0].pathSource+'" /></div>');
								list.push('<div class="right_box"><h2>'+((datalist[i].type=='0')?"我":detail.member.nickname)+'：</h2><p class="con">'+(detail.imglist[0].info?detail.imglist[0].info:detail.title)+'</p></div>');	
							}
			          }
						if(className=="con_box"){
							list.push('</div></div></a></li>');	
						}else{
							list.push('</div></div></div></a></li>');	
						}
						
								
						$('.commt_list').append(list.join(''));
		            }
	          	
	             
	          }

	          comm_load =0;
	          comm_page++;
	          if(totalpage < comm_page){
	          	$('.loading').html('<span>已经全部加载</span>');
	          	console.log('已经全部加载');
	          	comm_load=1;
	          }
	          
	       }else{
	       	$('.loading').remove();
	       	$('.commt_list').html('<div class="im-no_list"><img src="'+templets_skin+'images/no_img.png"/><p>没有找到相关记录~</p></div>'); 
	       }
       },
       error: function(){
          $('.loading').html('<span>请求出错请刷新重试</span>');  //请求出错请刷新重试
       }
    });
}


//获取好友列表
var f_list = function(type){
	if(type=='friend'){
		url = '/include/ajax.php?service=siteConfig&action=getImFriendList&userid=' + userinfo['uid']
	}else if(type == 'fans'){
		url = '/include/ajax.php?service=member&action=follow&uid=' + userinfo['uid']
	}else if(type == 'follow'){
		url = '/include/ajax.php?service=member&action=follow&type=follow&uid=' + userinfo['uid']
	}
	$.ajax({
       url: url,
       type: "GET",
       dataType: "json",
       success: function (data) {
	       var datalist ;
	      	var className = '',no_tip='';
	       var html = [];
	       if(type=='friend'){
	       
	          className = 'f_list';
	          datalist = data.info;
	          no_tip='暂未添加好友';
	        }else if(type=='fans'){
	          className = 'fan_list';
	          no_tip='暂无粉丝'
	          datalist = data.info.list;
	        }else{
	          className = 'focu_list';
	          no_tip='暂无关注好友';
	          datalist = data.info.list;
	        }
//	         $('.top_head em').text('('+datalist.length+')')
	       if(data.state == 100){
	          if(datalist.length==0){
         		$('.'+className).html('<div class="im-no_list"><img src="'+templets_skin+'images/no_img.png"/><p>'+no_tip+'</p></div>'); 	
	          }else{
	            for(var i=0; i<datalist.length; i++){
	            	var list =[];
	            	var online = datalist[i].online?"online":""
	            	console.log(datalist[i].lastMessage)
					if(type=='friend'){
						list.push('<li class="libox '+online+'"  data-id="'+datalist[i].userinfo.uid+'"><a href="add_friend-'+datalist[i].userinfo.uid+'.html#'+type+'" class="fn-clear">');
						list.push('	<div class="left_img"><img onerror="nofind();" src="'+(datalist[i].userinfo.photo?datalist[i].userinfo.photo:staticPath+"images/noPhoto_60.jpg")+'" /></div>');
						list.push('<button class="chat_to">聊天</button>');
						if(datalist[i].lastMessage.type=="link"){
							list.push('	<div class="right_info"><h2><span class="nickname">'+datalist[i].userinfo.name+'</span></h2><p>[链接消息]</p></div></a></li>');
						}else{
							list.push('	<div class="right_info"><h2><span class="nickname">'+datalist[i].userinfo.name+'</span></h2><p>'+datalist[i].lastMessage.content.replace(/△(.+?)△/g,'<img src="$1"/>')+'</p></div></a></li>');
						}
						
					}else if(type=='follow' && datalist[i].uid != "0"){
						list.push('<li class="libox '+online+'"  data-id="'+datalist[i].uid+'"><a href="add_friend-'+datalist[i].uid+'.html#'+type+'" class="fn-clear">');
						list.push('	<div class="left_img"><img onerror="nofind();" src="'+(datalist[i].photo?datalist[i].photo:staticPath+"images/noPhoto_60.jpg")+'" /></div>');
						list.push('<button class="no_focus" data-id="'+datalist[i].uid+'">取消关注</button>');
						list.push('	<div class="right_info"><h2><span class="nickname">'+datalist[i].nickname+'</span></h2><p>'+datalist[i].addrName+'</p></div></a></li>');
					}else if(datalist[i].uid != "0"){
						list.push('<li class="'+(datalist[i].isfollow?"f_li":"")+' libox '+online+' "  data-id="'+datalist[i].uid+'"><a href="add_friend-'+datalist[i].uid+'.html#'+type+'" class="fn-clear">');
						list.push('	<div class="left_img"><img onerror="nofind();" src="'+(datalist[i].photo?datalist[i].photo:staticPath+"images/noPhoto_60.jpg")+'" /></div>');
						if(datalist[i].isfollow){
							list.push('<button class="to_focus" data-id="'+datalist[i].uid+'">相互关注</button>');
						}else{
							list.push('<button class="to_focus" data-id="'+datalist[i].uid+'">关注</button>');
						}
						
						list.push('	<div class="right_info"><h2><span class="nickname">'+datalist[i].nickname+'</span></h2><p>'+datalist[i].addrName+'</p></div></a></li>');
					}	
					
					 $('.'+className).append(list.join(''));
	            }
	            console.log(className)
	           
	            
	       }
	       }else{
	       		$('.'+className).html('<div class="im-no_list"><img src="'+templets_skin+'images/no_img.png"/><p>'+no_tip+'</p></div>');
	       }
       },
       error: function(){
          $('.loading').html('<span>请求出错请刷新重试</span>');  //请求出错请刷新重试
       }
    });
}


var search_list = function(val){
	$.ajax({
       url: "/include/ajax.php?service=siteConfig&action=searchMember&keywords="+val,
       type: "GET",
       dataType: "json",
       success: function (data) {
	       var datalist = data.info;
	       console.log(datalist)
	       if(data.state == 100){
	          if(datalist.length==0){
         		$('.search_result').html('<div class="null_list"><img src="'+templets_skin+'images/no_result.png" /><p>没有符合条件的结果</p>'); 	
	          }else{
	          	$('.search_result').html('');
	          	for(var i=0; i<datalist.length; i++){
	          		var  list=[];
	          		if(datalist[i].addrName!=''){
	          			area = datalist[i].addrName.split('>')[0]+datalist[i].addrName.split('>')[1]
	          		}else{
	          			area = '暂无'
	          		}
//	          		var area = datalist[i].addrName?datalist[i].addrName.split('>'):'暂无';
	          		
		          	list.push('<div class="im-add_infobox">');
				    list.push('<div class="im-acc_info">');
					list.push('<a href="detail_info-'+datalist[i].userid+'.html" class="fn-clear">');
					list.push('<div class="im-left_head im-vip_user">');
					list.push('<img  onerror="nofind();" src="'+(datalist[i].photo?datalist[i].photo:staticPath+"images/noPhoto_60.jpg")+'" />');
					list.push('<i class="vip_level">'+(datalist[i].levelIcon?"<img src="+datalist[i].levelIcon+" />":"")+'</i></div>');
					list.push('<div class="im-right_info">');
					list.push('<h2>'+datalist[i].nickname+'</h2>');
					list.push('<p>'+(datalist[i].person?'<i class="im-name_cfirm"></i>':"")+(datalist[i].emailCheck?'<i class="im-email_cfirm"></i>':"")+(datalist[i].phoneCheck?'<i class="im-phone_cfirm"></i>':"")+'</p>');
					list.push('</div></a></div>');
				    list.push('<div class="im-base_info">');
					list.push('<ul><li class="fn-clear">');
					list.push('<div class="im-label_left">地区</div>');
					list.push('<div class="im-info_right">'+area+'</div>');
					list.push('</li>');
					list.push('	<li class="fn-clear">');
					list.push('<div class="im-label_left">来源</div>');
					list.push('<div class="im-info_right">来自ID搜索</div>');
					list.push('</li></ul>');
					list.push('<div class="im-add_btn_group">');
					list.push('<a data-id="'+datalist[i].userid+'" href="chat-'+datalist[i].userid+'.html" class="im-chat_width">私聊</a>');
					if(!datalist[i].isfriend){
						list.push('<a href="f_test-'+datalist[i].userid+'.html" class="im-add_btn">加好友</a>');
					}else{
						list.push('<a href="javascript:;" class="im-add_btn im-del_btn">删除好友</a>');
					}
					
					list.push('</div></div></div>');
					$('.search_result').append(list.join(''));
	          	}
	          }
	              
	       }else{
	       	 $('.search_result').html('<div class="null_list"><img src="'+templets_skin+'images/no_result.png" /><p>没有符合条件的结果</p>'); 	
	       }
	      
       },
       error: function(){
          $('.loading').html('<span>请求出错请刷新重试</span>');  //请求出错请刷新重试
       }
    });
}


//推荐好友时，获取最近联系人

var r_flist = function(tid){
	if($('.im-f_list li').length>0){
		return false;
	}
	$.ajax({
       url: "/include/ajax.php?service=siteConfig&action=getImFriendList&userid="+ userinfo['uid'],
       type: "GET",
       dataType: "json",
       success: function (data) {
	       var datalist = data.info;
	       if(data.state == 100){
	          	for(var i=0;i<datalist.length;i++){
	          		var  list=[];
	          		
	          		if(tid != datalist[i].userinfo['uid']){
	          			list.push('<li class="im-f_li fn-clear" data-id="'+datalist[i].userinfo['uid']+'" data-token="'+datalist[i].token+'">');
						list.push('<div class="im-f_head">');
						list.push('<img  onerror="nofind();" src="'+(datalist[i].userinfo['photo']?datalist[i].userinfo['photo']:staticPath+"images/noPhoto_60.jpg")+'" />');
//						list.push('<i class="level"><img src="'+templets_skin+'upfile/vip_icon.png"/></i>');
						list.push('</div>');
						list.push('<div class="im-f_nickname">'+datalist[i].userinfo['name']+'</div>');
						list.push('</li>');
	          		}
		          	
					$('.im-f_list').append(list.join(''));
	          	}   
	       }
	      
       },
       error: function(){
          $('.im-f_list').html('<span>请求出错请刷新重试</span>');  //请求出错请刷新重试
       }
    });
}


var  transTimes = function(timestamp, n){
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
 var getDateDiff = function(theDate){
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
        }else if(Y==nowTime.getFullYear()){
            return M + '-' + D + '&nbsp;' + H + ':' + m;
        }else{
            return Y + '-' + M + '-' + D + '&nbsp;' + H + ':' + m;
        }
    }