$(function(){
	
	
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
			$('.huxin p').text(data.join(' '))
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
			// $('#louceng').val(parseInt(data[2].replace(/[^0-9]/ig,""))).attr('data-id',(val1+'-'+val2));
			$('#bno').val(val1);
			$('#floorspr').val(val2);
			$('#floor').val(parseInt(data[2].replace(/[^0-9]/ig,"")));
	    }
	    ,triggerDisplayData:false,
	});
	
	//付税方式
	$('.paytax_way .active').bind('click',function(){
		var value = $(this).find('a').data('id');
		$(this).addClass('chose_btn').siblings('.active').removeClass('chose_btn');
		$('#paytax').val(value);
	});
	//产权
	$('.rights .active').bind('click',function(){
		var value = $(this).find('a').data('id');
		$(this).addClass('chose_btn').siblings('.active').removeClass('chose_btn');
		$('#rights_to').val(value);
	});
	//房源特色
	$('.feature_box dd').click(function(){
		$(this).toggleClass('on');
		var ids = [];
		$('.feature_box dd').each(function(){
			if($(this).hasClass('on')){
				ids.push($(this).data('id'));
			}
		})
		$('#housefeature').val(ids.join(","));
	});
	//装修情况数据加载
	var  Renovation = [],Renovationid=[];
	if($('#zhuangxiu option').length>0){
	    for(var i= 0; i<$('#zhuangxiu option').length; i++){
			Renovation.push($('#zhuangxiu option').eq(i).text());
			Renovationid.push($('#zhuangxiu option').eq(i).val());
	    }
	}
	//楼层朝向数据加载
	var build_to = [],build_id=[];
	if($('#direction option').length>0){
	    for(var i= 0; i<$('#direction option').length; i++){
			build_to.push($('#direction option').eq(i).text());
			build_id.push($('#direction option').eq(i).val());
	    }
	};
	//装修和楼层朝向的选择列表
	var RenovationSelect = new MobileSelect({
	    trigger: '.about_house',
		keyMap: {
            id:'id',
            value: 'value',
        },  
	    wheels: [
	                {data: Renovation},
	                {data: build_to}
	            ],
	    onShow:function(e){
	    	$('.panel').append('<ul class="title-box-sale"><li>装修情况</li><li>楼层朝向</li></ul>');
	    },
	    onHide:function(e){
	    	$('.title-box-sale').remove()
	    },
	    position:[0, 0],
	    callback:function(indexArr, data){
	    	for(var i=0; i<data.length; i++){
	    		$('.about_house .my_select').eq(i).find('input').val(data[i]);
	    		if(i==1){
	    			$('.about_house .my_select').eq(i).find('input').attr('data-id',build_id[indexArr[i]])
	    		}else if(i==0){
	    			$('.about_house .my_select').eq(i).find('input').attr('data-id',Renovationid[indexArr[i]])
	    		}
	    	}	
	    }
	    ,triggerDisplayData:false
	});
	
	//物业类型数据
	wuye = [],wuyeid=[];
	if($('#protype option').length>0){
		for(var i=0; i<$('#protype option').length;i++){
			wuye.push($('#protype option').eq(i).text());
			wuyeid.push($('#protype option').eq(i).val())
		}	
	};
	//建筑年代数据
	var myDate = new Date;
	var year = myDate.getFullYear();
	var buildyear = [];
	for(var i=year; i>year-100;i--){
		buildyear.push(i);	
	};
	var lift_if=['有电梯','无电梯'];
	var wuyeSelect = new MobileSelect({
	    trigger: '.about_build',
		
	    wheels: [
	                {data: wuye},
	                {data: buildyear},
	                {data: lift_if}
	            ],
	    onShow:function(e){
	    	$('.panel').append('<ul class="title-box"><li>物业类型</li><li>建筑年代</li><li>电梯</li></ul>');
	    },
	    onHide:function(e){
	    	$('.title-box').remove()
	    },
	    position:[0, 0, 0],
	    callback:function(indexArr, data){
	    	console.log(indexArr);
	    	console.log(data);
	    	for(var i=0; i<data.length; i++){
	    		$('.about_build .my_select').eq(i).find('input').val(data[i]);
	    		if(i==0){
	    			$('.about_build .my_select').eq(i).find('input').attr('data-id',wuyeid[indexArr[i]]);
	    		}else if(i==1){
	    			$('.about_build .my_select').eq(i).find('input').attr('data-id',data[i]);
	    		}else if(i==2){
	    			$('.about_build .my_select').eq(i).find('input').attr('data-id',indexArr[i]+1);
	    		}
	    		
	    	}
	    	
	    	console.log($('#lift').data('id'))
	    }
	    ,triggerDisplayData:false
	}); 
	
	
	
	
	$('.sub_btn').bind('click',function(){
		event.preventDefault();
        var form = $("#fabuForm"), action = form.attr("action"), url = form.attr("data-url"), tj = true;
		var t = $(this),
		
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
	    bno	=  $('#bno').val(),  //出售的楼层
	    floortype = $('[name=floortype]:checked').val(),
	    floorspr = $('#floorspr').val(),
	    paytax_way =  $('#paytax').val();       //付税方式
	    rights_to = $('#rights_to').val();   //产权
	   	area             = $('#space').val(),  //出租面积
	   	price             = $('#price').val(),  //售价
	   	zhuangxiu         = ($('#zxiu').data('id')==undefined)?'':($('#zxiu').data('id')), //装修情况------
	   	direction		 = ($('#floor_to').data('id')==undefined)?'':($('#floor_to').data('id')), //楼层朝向
//	    house_config      = $('#house_config').val(), //房间配置
	   	title     = $('#house_title').val(),  //房源标题
	   	sex       = $('#usersex').val(),  //用户性别
	   	wx_tel    = $('#wx_tel').val(),  //手机能否查找微信
	    person    = $('#person').val(),  //用户姓名
	    tel           = $('#contact').val();  //联系方式
        error       = $(".error"),
        text        = error.find('p');
		if(t.hasClass("disabled")) return;
		//  以上表单为第一版，以下为第二版表单

	   var protype=($('#wuyetype').data('id')==undefined)?'':($('#wuyetype').data('id')), //物业类型
	       elevator = ($('#lift').data('id')==undefined)?'':($('#lift').data('id')),  //是否有电梯
	   	   buildage = $('#build_years').val();  //建筑年代
	   	   housefeature = $('#housefeature').val(), //房源特色
	   	   sourceid = $('#sourceid').val();  //房源id
	   	   note    =$('#note').val(),  //房源描述
	       qj_pics =$('#qj_pics').val();  //全景图
	       qj_url = $('#qj_url').val(),
        vercode = $('#vercode').val(),
        qj_type = $('#qj_type').val();
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
		if($('#fileList li.thumbnail').length<=0){
	    	showMsg('请至少上传一张图片');
	    	tj = false;
	   }else if(community =='' ||community ==undefined){
	    	showMsg('请选择小区名');
	    	tj=false;
	    }else if((communityid == 0 || communityid == "" ||communityid == undefined) && address == ""){
	    	alert(communityid)
	      	showMsg(langData['siteConfig'][20][351]);
	      	tj = false;
		}else if((communityid == 0 || communityid == "" ||communityid == undefined) && addrid == 0){
	     	showMsg(langData['siteConfig'][20][344]);
	      	tj = false;
		}else if(area ==''||area ==undefined){
		    showMsg('请输入面积');
	      	tj = false;	
		}else if(price == "" || price == undefined){     //售价
		    showMsg('请填写销售价格');
		    tj = false;
		}else if(title == "" || title ==undefined){      //标题
	        showMsg(langData['siteConfig'][20][343]);
	        tj = false;
		}else if(person == "" || person == undefined){   //联系人
	        showMsg(langData['siteConfig'][20][345]);
	        tj = false;
	    }else if(tel == "" || tel == undefined){
	        showMsg(langData['siteConfig'][20][239]);
	    	tj = false;
	    }else if($('.test_code').is(':visible') && $('#vercode').val() == ''){
	    	showMsg(langData['siteConfig'][20][176]);
	    	tj = false;
	    }else if($('.qjimg_box .radioBox .chose_btn').index() == 0 && $('#qjshow_box .img img').length && $('#qjshow_box .img img').length != 6){
	    	showMsg('请上传6张全景图片');
	    	tj = false;
	    }
	    if(!tj) return; 
	    
		var data ='community='+encodeURI(community)+'&addrid='+addrid+'&communityid='+communityid+'&address='+encodeURI(address)+'&lnglat='+lnglat+'&room='+room+'&hall='+hall+'&guard='+guard+'&buildpos='+dong+'||'+danyuan
		+'||'+shi+'&floortype='+floortype+'&floor='+floor+'&bno='+bno+'&floorspr='+floorspr+'&rights_to='+rights_to+'&area='+area+'&price='+price+'&zhuangxiu='+zhuangxiu+'&paytax='+paytax_way+'&direction='+direction
	    +'&title='+encodeURI(title)+'&sex='+sex+'&wx_tel='+wx_tel+'&person='+encodeURI(person)+'&tel='+tel+'&sourceid='+sourceid+'&protype='+protype+'&elevator='+elevator+'&buildage='+buildage+'&flag='+housefeature
	    +'&note='+encodeURI(note)+'&qj_pics='+qj_pics +'&qj_url='+qj_url+'&vercode='+vercode+'&qj_type='+qj_type
   
	
	
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
	    data += "&video="+videolist.join(",");
	    	    
	    $('.sub_btn').addClass("disabled").html(langData['siteConfig'][6][35]+"...");

	    $.ajax({
	        url: action,
	        data: data + "&cityid="+cityid,
	        type: "POST",
	        dataType: "json",
	        success: function (data) {
	            if(data && data.state == 100){

	            	fabuPay.check(data, url, t);

	            }else{
	            	alert(data.info);
	            	t.removeClass("disabled").html(langData['siteConfig'][11][19]);
	            }
	        },
	        error: function(){
	            alert(langData['siteConfig'][20][183]);
	            t.removeClass("disabled").html(langData['siteConfig'][11][19]);
	        }
        });
 
	});
	
	
	
})
