$(function(){

  // 上传头像
  var upPhoto = new Upload({
    btn: '#item_0',
    bindBtn: '.uploader-btn span',
    title: 'Images',
    mod: modelType,
    params: 'type=atlas',
    atlasMax: 1,
    replace: true,
    deltype: 'delAtlas',
    fileQueued: function(file){
      
    },
    uploadSuccess: function(file, response){
      if(response.state == "SUCCESS"){
        // 未上传
        $('#item_0 img').attr('src', response.turl);
        $('#litpic').removeClass('noimg').addClass('has');
        $('.uploader-btn span').text('重新上传');

        var oldImg = $('#photo').val();
        if(oldImg){
          this.del(oldImg);
        }
        $('#photo').val(response.url);
      }
    }
  });

  // 提交
  $('#tj').click(function(){
    var t = $(this),
        nickname = $.trim($('#nickname').val()),
        phone = $.trim($('#phone').val()),
        photo = $.trim($('#photo').val()),
        address = $.trim($('#address').val()),
        profile = $.trim($('#profile').val());

    if(t.hasClass('disabled')) return;
    if(nickname == ''){
      showMsg.alert('请填写门店名称', 1000);
      return false;
    }
    if(phone == ''){
      showMsg.alert('请填写电话号码', 1000);
      return false;
    }
    if(address == ''){
      showMsg.alert('请填写门店地址', 1000);
      return false;
    }
    if(profile == ''){
      showMsg.alert('请填写门店简介', 1000);
      return false;
    }
    if(photo == ''){
      showMsg.alert('请上传头像', 1000);
      return false;
    }

    t.addClass('disabled');
    showMsg.loading('正在提交，请稍后', 1000);
    var data = [];
    data.push('nickname='+nickname);
    data.push('phone='+phone);
    data.push('address='+address);
    data.push('profile='+profile);
    data.push('photo='+photo);
    operaJson(masterDomain + '/include/ajax.php?service=dating&action=joinStore', data.join("&"), function(data){
      if(data && data.state == 100){
        showMsg.alert(data.info, 1000, function(){
          location.reload();
        })
      }else{
        t.removeClass('disabled');
        showMsg.alert(data.info, 100);
      }
    }, function(){
      t.removeClass('disabled');
      showMsg.alert('网络错误，请重试！', 1000);
    });

  })

})