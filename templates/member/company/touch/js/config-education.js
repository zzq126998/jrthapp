 //服务范围 点击叉号 关闭标签       
function close_li(thisli){
    $(thisli).parent().remove();
    var range_num=$('.service-box .service li').length;
    $('.service-box .ser_range .num1').text(range_num);
}

$(function () {
    //服务选择
     $('.service-box .ser_range .range_sure').click(function (e) {
          e.preventDefault();

        var range_value=$('.service_input').val();
       if(range_value.length>0){
            $('.service-box .service').append("<li><span>"+ range_value +"</span><img src='"+templatePath+"images/education/close_icon1.png' alt='' class='close_img' onclick='close_li(this)'></li>");
            var range_value=$('.service_input').val('');
            var range_num=$('.service-box .service li').length;
            $('.service-box .ser_range .num1').text(range_num);
       }
        
        if(range_num==10){
            $('.service-box .ser_range .range_sure button').attr({"disabled":"disabled"});
            var range_value=$('.service_input').val(langData['education'][5][50]);//最多只能添加10个
        }

        
    });

    // 信息提示框
    // 错误提示
    function showMsg(str){
      var o = $(".error");
      o.html('<p>'+str+'</p>').show();
      setTimeout(function(){o.hide()},1000);
    }

    //表单验证
    function isPhoneNo(p) {
        var pattern = /^1[23456789]\d{9}$/;
        return pattern.test(p);
    }
    $('#btn-keep').click(function (e) {
          e.preventDefault();

          var t = $("#fabuForm"), action = t.attr('data-action');
          t.attr('action', action);
          var addrid = 0, cityid = 0, r = true;
     
        var comname = $('#comname').val();//公司名称
        var addrid = $('#addrid').val();//选择区域
        var address = $('#address').val();//详细地址
        var phone = $('#phone').val();//联系电话
        var num1=$(".num1").text();//学习方向

        if(!comname){
          r = false;
          showMsg(langData['education'][5][40]); //请输入公司名称
          return;
        }else if(!address){
          r = false;
          showMsg(langData['education'][5][43]);    //请填入详细地址
          return;
        }else if(!phone){
          r = false;
          showMsg(langData['education'][5][45]);    //请输入联系方式
          return;
        }else if (isPhoneNo($.trim($('#phone').val())) == false) {
          r = false;
          showMsg(langData['education'][5][51]);    //手机号码不正确
          return;
        }else if($('#fileList li.thumbnail').length == 0){
          r = false;
          showMsg(langData['education'][5][52]);    //请上传店铺图集
          return;
        }else if(num1==0){
          r = false;
          showMsg(langData['education'][5][53]);    //请输入学习方向
          return;
        }

        var ids = $('.gz-addr-seladdr').attr("data-ids");
          if(ids != undefined && ids != ''){
               addrid = $('.gz-addr-seladdr').attr("data-id");
               ids = ids.split(' ');
               cityid = ids[0];
          }else{
               r = false;
               showMsg(langData['homemaking'][5][19]);  //请选择所在地
               return;
          }
          $('#addrid').val(addrid);
          $('#cityid').val(cityid);

          var pics = [];
          $("#fileList").find('.thumbnail').each(function(){
               var src = $(this).find('img').attr('data-val');
               pics.push(src);
          });
          $("#pics").val(pics.join(','));

          //获取酒店特色
          var tag = [];
          $('.service-box ul.service').find('li').each(function(){
               var t = $(this),val = t.find('span').text();
               if(val!=''){
                    tag.push(val);
               }
          })
          $("#tag").val(tag.join('|'));

          if(!r){
               return;
          }
     
          $.ajax({
               url: action,
               data: t.serialize(),
               type: 'post',
               dataType: 'json',
               success: function(data){
                    if(data && data.state == 100){
                         showMsg(data.info);
                    }else{
                         showMsg(data.info);
                    }
               },
               error: function(){
                    showMsg(langData['siteConfig'][6][203]);
               }
          })



    });


});