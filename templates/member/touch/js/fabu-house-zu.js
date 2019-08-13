$(function(){
	
	//选择框
	$('.checkbox[data-type="type"] dd').bind('click',function(){
		$(this).addClass('on').siblings('dd').removeClass('on');
		var value = $(this).data('id');
		if(value==1){
			$('.checkbox[data-type="act"]').show()
		}else{
			$('.checkbox[data-type="act"]').hide()
		}
		$('#rent_way').val(value);
	});
	//房间类型选择
	$('.sharetype dd').bind('click',function(){
		$(this).addClass('on').siblings('dd').removeClass('on');
		var value = $('.sharetype dd.on').data('id');
		$('#sharetype').val(value)
	})
	//房源配置 是否有床..
	$('.conf dd').click(function(){
		var t = $(this), p = t.parent();
		t.toggleClass('on');
		var r = [];
		p.children('dd').each(function(){
			var d = $(this), id = d.data('id');
			if($(this).hasClass('on')){
				r.push(id);
			}
		})
		p.children('input').val(r.join(","));
	})
	//性别切换
	$('.user_sex .active').bind('click',function(){
		$(this).addClass('chose_btn').siblings('.active').removeClass('chose_btn');
		$('#usersex').val($(this).find('a').data('id'));
	});
	$('.wx_phone .active').bind('click',function(){
		$(this).toggleClass('chose_btn');
		if($(this).hasClass('chose_btn')){
			$(this).find('#wx_tel').val('1')
		}else{
			$(this).find('#wx_tel').val('0')
		}
	})
	//房源特色
	// var house_feature = [];
	$('.feature_box dd').click(function(){
		var t = $(this), p = t.parent();
		t.toggleClass('on');
		var r = [];
		p.children('dd').each(function(){
			var d = $(this), id = d.data('id');
			if($(this).hasClass('on')){
				r.push(id);
			}
		})
		p.children('input').val(r.join(","));
	});
	//全景图片 url切换
	$('.qjimg_box .active').click(function(){
		$('#qj_type').val($(this).find('a').data('id'));
		
		$(this).addClass('chose_btn').siblings().removeClass('chose_btn');
		if($(this).find('a').data('id')!=0){
			$('.url_box').show();
			$('#qjshow_box').hide();
		}else{
			$('.url_box').hide();
			$('#qjshow_box').show();
		}
	});
	
	//选择地址的返回按钮
	$('.gz-address .go_back').click(function(){
		$(this).parents('.gz-address ').hide();
		$('.page.input_info').show();
	})
	
	
	//选择地区-----有问题需要改
	$('.posi_house').click(function(){
		$(this).parents('.page').hide();
		$('.gz-address').css('z-index','50').show().find('#house_name').focus();
	});
	
	
	//补充更多信息
	$('.more_btn').click(function(){
		$('.more_info').show()
	})
	//房型选择
	var numArr =[],numArr1 =[],numArr2 =[];//自定义房型数据
	for(var i=1; i<=8 ;i++){
		numArr.push(i+'室');
		numArr1.push(i+'厅');
		numArr2.push(i+'卫')
	}
	var huxinSelect = new MobileSelect({
	    trigger: '.huxin ',
	    title: '房型选择',
	    wheels: [
	                {data: numArr},
	                {data: numArr1},
	                {data: numArr2}
	            ],
	    position:[0, 0, 0],
	    callback:function(indexArr, data){
			$('.huxin p.tip').text(data.join(' '));
			$('#room').val(parseInt(data[0].replace(/[^0-9]/ig,"")));
			$('#hall').val(parseInt(data[1].replace(/[^0-9]/ig,"")));
			$('#guard').val(parseInt(data[2].replace(/[^0-9]/ig,"")));
	    }
	   ,triggerDisplayData:false,
	});
	//楼层选择
	$('.loucen_chose .active').click(function(){
		$(this).addClass('chose_btn').siblings('.active').removeClass('chose_btn');	
	});
	var numfloor = [],countfloor = [],startfloor = [],endfloor=[];
	for(var i=1; i<50;i++){
		numfloor.push('第'+i+'层');
		startfloor.push('第'+i+'层');
		endfloor.push('第'+i+'层');
		countfloor.push('共'+i+'层')
	}
	
	//单层选择
	var sigfloorSelect = new MobileSelect({
	    trigger: '.sig-build',
	    title: '单层选择',
	    wheels: [
	                {data: numfloor},
	                {data: countfloor}, 
	            ],
	    position:[0, 0],
	    transitionEnd:function(indexArr, data){
	      		if(indexArr[0]>indexArr[1]){
					sigfloorSelect.locatePosition(1,indexArr[0])
				}
	    },
	    callback:function(indexArr, data){
			var result_val = data.join('/')
			$('.result_val').text(result_val);
			// $('#louceng').val(parseInt(data[1].replace(/[^0-9]/ig,""))).attr('data-id',parseInt(data[0].replace(/[^0-9]/ig,"")));
				$('#bno').val(parseInt(data[0].replace(/[^0-9]/ig,"")));
				$('#floorspr').val(0);
				$('#floor').val(parseInt(data[1].replace(/[^0-9]/ig,"")));
	    }
	    ,triggerDisplayData:false,
	});
	
	//跃层选择
	var multfloorSelect = new MobileSelect({
	    trigger: '.mul-build',
	    title: '跃层选择',
	    wheels: [
	    			{data: startfloor},
	                {data: endfloor},
	                {data: countfloor}, 
	            ],
	    position:[0, 0],
	    transitionEnd:function(indexArr, data){
//	       console.log(indexArr);

	       if(indexArr[0]>indexArr[1]&&indexArr[0]>indexArr[2]){
	       	  multfloorSelect.locatePosition(1,indexArr[0]);
	       	  multfloorSelect.locatePosition(2,indexArr[0]);
	       }else if(indexArr[0]>indexArr[1]){
	       		multfloorSelect.locatePosition(1,indexArr[0]);
	       }else if(indexArr[0]>indexArr[2]){
	       	 	multfloorSelect.locatePosition(2,indexArr[0]);
	       }else if(indexArr[1]>indexArr[2]){
	       		multfloorSelect.locatePosition(2,indexArr[1]);
	       }
        
	    },
	    callback:function(indexArr, data){
	    	
	    	var val1 = parseInt(data[0].replace(/[^0-9]/ig,""));
	    	var val2 = parseInt(data[1].replace(/[^0-9]/ig,""))
	        var result_val = val1+'-'+val2+'层/'+data[2];
	      $('.result_val').text(result_val);
				$('#bno').val(val1);
				$('#floorspr').val(val2);
				$('#floor').val(parseInt(data[2].replace(/[^0-9]/ig,"")));
	    }
	    ,triggerDisplayData:false,
	});
	
	    //楼层朝向
	    var house_to=[],house_toid=[];
	    
	    if($('#direction option').length>0){
	     	for(var i= 0; i<$('#direction option').length; i++){
				house_to.push($('#direction option').eq(i).text());
				house_toid.push($('#direction option').eq(i).val());
	     	}
	     }
	     //装修情况
	    var  Renovation = [],Renovationid=[];
	     if($('#zhuangxiu option').length>0){
	     	for(var i= 0; i<$('#zhuangxiu option').length; i++){
				Renovation.push($('#zhuangxiu option').eq(i).text());
				Renovationid.push($('#zhuangxiu option').eq(i).val());
	     	}
	     }
	     //付款方式的数据
	     var pay_way = [],pay_id=[];
	     if($('#paytype_ option').length>0){
	     	for(var i= 0; i<$('#paytype_ option').length; i++){
	     		if($('#paytype_ option').eq(i).data('id')!= undefined){
//	     			pay_way.push({id:$('#paytype_ option').eq(i).data('id') , value:$('#paytype_ option').eq(i).text()});	
					pay_way.push($('#paytype_ option').eq(i).text());
					pay_id.push($('#paytype_ option').eq(i).data('id'))
	     		}
	     	}
	     }
	var RenovationSelect = new MobileSelect({
	    trigger: '.about_house',
		keyMap: {
            id:'id',
            value: 'value',
        },  
	    wheels: [
	                {data: Renovation},
	                {data: pay_way}, 
	                {data: house_to}
	            ],
	    position:[0, 0, 0],
	    onShow:function(e){
	    	$('.panel').append('<ul class="title-box"><li>装修情况</li><li>付款方式</li><li>楼层朝向</li></ul>');
	    	
	    },
	    onHide:function(e){
	    	$('.title-box').remove()
	    },
	    
	    callback:function(indexArr, data){
	    	for(var i=0; i<data.length; i++){
	    		$('.about_house .my_select').eq(i).find('input').val(data[i]);
	    		if(i==1){
	    			$('.about_house .my_select').eq(i).find('input').attr('data-id',pay_id[indexArr[i]]);
	    			
	    		}else if(i==0){
	    			$('.about_house .my_select').eq(i).find('input').attr('data-id',Renovationid[indexArr[i]])
	    		}else if(i==2){
	    			$('.about_house .my_select').eq(i).find('input').attr('data-id',house_toid[indexArr[i]])
	    		}
	    		
	    	}
	    	
			
			
			
	    }
	    ,triggerDisplayData:false,
	});

	//物业、电梯、性别
	var sex = ['性别不限','限男性','限女性'], 
		ele = ['有电梯','无电梯'],
		wuye = [],wuyeid=[]
		if($('#protype option').length>0){
			for(var i=0; i<$('#protype option').length;i++){
				wuye.push($('#protype option').eq(i).text());
				wuyeid.push($('#protype option').eq(i).val())
			}	
		};
		
	var RenovationSelect = new MobileSelect({
	    trigger: '.select_box',

	    wheels: [
	                {data: wuye},
	                {data: ele}, 
	                {data: sex}
	            ],
	    position:[0, 0, 0],
	    onShow:function(e){
	    	$('.panel').append('<ul class="title-box"><li>物业类型</li><li>电梯</li><li>租客性别</li></ul>');
	    	console.log(e)
	    },
	    onHide:function(e){
	    	$('.title-box').remove()
	    },
	    transitionEnd:function(indexArr, data){
	      		
	    },
	    callback:function(indexArr, data){
	    	for(var i=0; i<data.length; i++){
	    		if(i==0){
	    			$('.select_box .my_select').eq(i).find('input').val(data[i]).attr('data-id',wuyeid[indexArr[i]]);
	    			
	    		}else if(i == 1){
	    			$('.select_box .my_select').eq(i).find('input').val(data[i]).attr('data-id',indexArr[i]+1);
	    		}else{
	    			$('.select_box .my_select').eq(i).find('input').val(data[i]).attr('data-id',indexArr[i]);
	    		}	
	    	};
	    }
	    ,triggerDisplayData:false,
	});


	// 错误提示
	function showMsg(str){
	  var o = $(".error");
	  o.html('<p>'+str+'</p>').show();
	  setTimeout(function(){o.hide()},1000);
	}

   //房源标题填充
    $('#space').change(function(){
    	autoTitle();
    });
    $('#price').change(function(){
    	autoTitle()
    });
    
 	
 
 function autoTitle(){
	var housename = $('#house_chosed').val();
	var space = $('#space').val();
	var price =  $('#price').val();
	var room = $('.tip').text();
	var title =housename+' ';
	
	if(space !=''){
		title +=' '+ space+'㎡';
	}
	if(price !=''){
		title +=' '+ price+$('#price').next('span').text();
	}
	if(room !=''){
		title +=' '+ room;
	}
	
	$('#house_title').val(title);
  }
    
    
   
   	
    
    $('.sub_btn').click(function(){
       var form = $("#fabuForm"), action = form.attr("action"), url = form.attr("data-url"), tj = true;
       event.preventDefault();
       
       
       var rentype  = $('#rent_way').val(), //整租还是合租
       	   sharetype = $('#sharetype').val(),  //房间类型
	   	   community = $('#house_chosed').val(),  //选择的小区名称
	   	   addrid = $('#addrid').val(),  //小区所在城市id
	   	   communityid = $('#houseid').val(),  //小区的id
	   	   address = $('#detail_addr').val(),  //小区详细地址
	   	   lnglat   = $('#addr_lnglat').val(), //小区的坐标
	   	   room  = $('#room').val(),   //室
	   	   hall  = $('#hall').val()   ,  //厅
	   	   guard = $('#guard').val() ,  //卫生间
	   	   dong =$('#dong').val(),danyuan = $('#danyuan').val(),shi = $('#shi').val(), //可不填，门牌号
	   	   floor  = $('#floor').val(),  //楼层总数
	   	   bno	= $('#bno').val(),  //出租的楼层
		    floortype = $('[name=floortype]:checked').val(),
		    floorspr = $('#floorspr').val(),
	   	   area             = $('#space').val(),  //出租面积
	   	   price             = $('#price').val(),  //租金
	   	   zhuangxiu         = $('#zxiu').data('id'), //装修情况------
	   	   paytype           = $('#pay_way').data('id'), //付款方式
	   	   direction		 = $('#floor_to').data('id'), //楼层朝向
	   	   house_config      = $('#house_config').val(), //房间配置
	   	   title     = $('#house_title').val(),  //房源标题
	   	   sex       = $('#usersex').val(),  //用户性别
	   	   wx_tel    = $('#wx_tel').val(),  //手机能否查找微信
	   	   person    = $('#person').val(),  //用户姓名
	   	   tel           = $('#contact').val();  //联系方式
	//  以上表单为第一版，以下为第二版表单
	   var protype=($('#wuyetype').data('id')==undefined)?'':($('#wuyetype').data('id')), //物业类型
	       elevator = ($('#lift_if').data('id')==undefined)?'':($('#lift_if').data('id')),  //是否有电梯
	   	   sharesex =( $('#limit_sex').data('id')==undefined)?'':($('#limit_sex').data('id')), //合租室友性别
	   	   housefeature = $('#housefeature').val(), //房源特色
	   	   note    =$('#house_descripe').val(),  //房源描述
	       qj_pics =$('#qj_pics').val();  //全景图
	       qj_url = $('#qj_url').val(),
        vercode = $('#vercode').val(),
        qj_type = $('#qj_type').val();
//	     console.log($('#fabuForm').serialize());
	    
	    if($('.sub_btn').hasClass("disabled")) return;
	     
	   
	     //cityid
		var cityid = 0;
		var communityCityid = parseInt($('#house_chosed').attr('data-cityid'));
		if(communityCityid){
			cityid = communityCityid;
		}else{
			var ids = $('.gz-addr-seladdr').attr('data-ids');
			if(ids){
				var idsArr = ids.split(' ');
				cityid = idsArr[0];
			}
		}
    	
	   
	  //判断是否必填  
	    if(rentype==''||rentype==undefined){
	    	showMsg('请选择租赁类型');
	    	tj=false;
	    }else if(rentype==1&&(sharetype==''||sharetype==undefined)){
	    	showMsg('请选择房间类型');
	    	tj=false;
	    }else if(community =='' ||community ==undefined){
	    	showMsg('请选择小区名');
	    	tj=false;
	    }else if((communityid == 0 || communityid == "" ||communityid == undefined) && address == ""){
	    	
	      	showMsg(langData['siteConfig'][20][351]);
	      	tj = false;
		}else if((communityid == 0 || communityid == "" ||communityid == undefined) && addrid == 0){
	     	showMsg(langData['siteConfig'][20][344]);
	      	tj = false;
		}else if($('#fileList li.thumbnail').length<=0){
			 showMsg('请至少上传一张图');
	      	tj = false;	
		}else if(area ==''||area ==undefined){
		    showMsg('请输入面积');
	      	tj = false;	
		}else if(price == "" || price == undefined){  //租金
		    showMsg(langData['siteConfig'][20][355]);
		    tj = false;
		}else if(paytype == "" || paytype == undefined){   //付款方式
		    showMsg(langData['siteConfig'][20][356]);
		    tj = false;
		}else if(title == "" || title ==undefined){  //标题
	        showMsg(langData['siteConfig'][20][343]);
	        tj = false;
		}else if(person == "" || person == undefined){   //联系人
	        showMsg(langData['siteConfig'][20][345]);
	        tj = false;
	    }else if(tel == "" || tel == undefined){
	        showMsg(langData['siteConfig'][20][239]);
	    	tj = false;
	    }
	     if(!tj) return; 
	    
	    var data = 'rentype='+rentype+'&sharetype='+sharetype+'&community='+encodeURI(community)+'&addrid='+addrid+'&communityid='+communityid
    	+'&address='+encodeURI(address)+'&lnglat='+lnglat+'&room='+room+'&hall='+hall+'&guard='+guard+'&buildpos='+dong+'||'+danyuan+'||'
    	+shi+'&floor='+floor+'&bno='+bno+'&area='+area+'&price='+price+'&zhuangxiu='+zhuangxiu+'&paytype='+paytype+'&direction='+direction+'&config='+house_config
    	+'&title='+encodeURI(title)+'&sex='+sex+'&wx_tel='+wx_tel+'&person='+encodeURI(person)+'&tel='+tel+'&protype='+protype+'&elevator='+elevator+'&sharesex='+sharesex+'&flag='+housefeature
    	+'&note='+encodeURI(note)+'&qj_pics='+qj_pics +'&qj_url='+qj_url+'&qj_type='+qj_type
    	+'&floortype='+floortype
    	+'&floorspr='+floorspr
    	+'&vercode='+vercode
    	+'&buildage='+$('#buildage').val()

    	;
    	
  	
    	
			//获取图片的
		   	var imgli = $('#fileList li.thumbnail'), imglist = [];
		   	var n = 0;
		   	imgli.each(function(index){
			    var t = $(this), val = t.find("img").attr("data-val"), des = t.find("img").attr("data-des");
		    	if(val != ''){
		    		if(n == 0){
		    			data += '&litpic='+val;
		    		}else{
			        	imglist.push(val+"|"+(des ? des : ''));
			        }
			        n++;
			    }
		    });
		    if(imglist){}
		    data += "&imglist="+imglist.join(",");
		    
		    //获取视频的
		    var videoli = $('.video_li'), videolist =[];
		    videoli.each(function(index){
		      var t = $(this), val = t.find("video").attr("data-url");
		      if(val != ''){
            videolist.push(val);
		      }
		      
		    });
		    if(videolist){}
		    data += "&video="+videolist.join(",");

	    // $('.sub_btn').addClass("disabled").html(langData['siteConfig'][6][35]+"...");
 
	    $.ajax({
	      url: action,
	      data: data + "&cityid="+cityid,
	      type: "POST",
	      dataType: "json",
	      success: function (data) {
	        if(data && data.state == 100){
	          fabuPay.check(data, url, $('.sub_btn'));
	        }else{
	          alert(data.info);
	          console.log(data.info+'-+-')
	          $('.sub_btn').removeClass("disabled").html(langData['siteConfig'][11][19]);
	        }
	      },
	      error: function(){
	        alert(langData['siteConfig'][20][183]);
	        $('.sub_btn').removeClass("disabled").html(langData['siteConfig'][11][19]);
	      }
	    });

    });
   	   
   	   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
	

});


