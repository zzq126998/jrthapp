$(function(){
  var activeFid = 0;
  var editUrl = $(".edit").attr("data-url");

  // 操作提示层
  $('.item .more').click(function(){
    activeFid = $(this).closest('.item').attr('data-id');
    $(".edit").attr('href', editUrl+activeFid);
    $('.layer .mask').addClass('show').animate({'opacity':'.5'}, 100);
    $('.layer .operate').animate({'bottom':'0'}, 150);
  })
  $('.mask, .cancel').click(function(){
    $('.layer .mask').animate({'opacity':'0'}, 100);
    setTimeout(function(){
      $('.layer .mask').removeClass('show');
    }, 100)
    $('.layer .operate').animate({'bottom':'-100%'}, 150);
  })

  //删除
  $(".del").bind("click", function(){

    if(confirm(langData['siteConfig'][20][211])){
        $.ajax({
            url: "waimaiFoodType.php",
            type: "post",
            data: {action: "delete", id: activeFid},
            dataType: "json",
            success: function(res){
                if(res.state != 100){
                    alert(res.info);
                }else{
                    location.reload();
                }
            },
            error: function(){
                alert(langData['siteConfig'][20][253]);
            }
        })
    }

  });


})
