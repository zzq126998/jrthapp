$(function(){
  
	//导航
  $('.header-r .screen').click(function(){
    var nav = $('.nav'), t = $('.nav').css('display') == "none";
    if (t) {nav.show();}else{nav.hide();}
  });

  $('.sh').click(function(){
  	$.ajax({
  		url: '/include/ajax.php?service=integral&action=receipt&id='+id,
  		type: 'post',
  		dataType: 'json',
  		success: function(data){
  			if(data && data.state == 100){
  				alert('操作成功');
  				location.reload();
  			}else{
  				alert('操作失败！');
  			}
  		},
  		error: function(){
  			alert('网络错误，操作失败！');
  		}
  	})
  })

})
