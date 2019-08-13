$(function(){ 
	 //获取报名人数
  $.ajax({
      url: "/include/ajax.php?service=house&action=bookingList&type=1&pageSize=1",
      dataType: "jsonp",
      success: function (data) {
          if(data.state == 100){
              $(".nin:eq(1)").html(data.info.pageInfo.totalCount);
          }
      }
  });
  
  
  $('.housetype').delegate('label','click',function(){
  	  if($(this).hasClass('chosed')){
  	  	$(this).removeClass('chosed')
  	  }else{
  	  	$(this).addClass('chosed')
  	  }
  })
// 错误提示
	function showMsg(str){
	  var o = $(".errorMsg");
	  o.html(str).show();
	  setTimeout(function(){o.hide()},1500);
	}
		
	$('.subbtn').bind('click',function(){
		var loupan =$('#loupan').val(),
			price = $('#price').val(),
			name = $('#name').val(),
			phone = $('#phone').val(),
			huxi = [];
			$('.form-baomin').find("input[type='checkbox']:checked").each(function(){
	            huxi.push($(this).val());
	        });
	     
			if(loupan==''){
				showMsg('请输入楼盘名');
				return false;
			}else if(price==''){
				showMsg('请输入价格');
				return false;
			}else if(name==''){
				showMsg('请输入名称');
				return false;
			}else if(phone==''){
				showMsg('请输入手机号');
				return false;
			}else if(!(/^1[34578]\d{9}$/.test(phone))){
				showMsg('你输入的手机格式错误');
				return false;
			};
			 var data = [];
	        data.push("type=1");
	        data.push("loupan="+loupan);
	        data.push("amount="+price);
	        data.push("huxi="+huxi);
	        data.push("name="+name);
	        data.push("mobile="+phone);
	        console.log(data)
	       $.ajax({
            url: "/include/ajax.php?service=house&action=booking&"+data.join("&"),
            type: "POST",
            dataType: "jsonp",
            success: function (data) {
                if(data.state == 100){
                    showMsg('提交成功，我们会尽快与您取得联系');
                    //setTimeout(function(){o.hide()},1500);
                }else{
                    showMsg(data.info);
                }
            },
            error: function(){
                showMsg('网络错误，提交失败！');
                
            }
        });
        return false;
	});
	
	
})
