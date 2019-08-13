$(function(){

  //年月日
  $('.demo-test-date').scroller(
    $.extend({preset: 'date', dateFormat: 'yy-mm-dd'})
  );


  //下拉菜单
  $('.demo-test-select').scroller(
    $.extend({preset: 'select'})
  );

  //二级菜单
  $('.demo-select-opt').scroller(
  	$.extend({
      preset: 'select',
      group: true
    })
  );

  // 开启、关闭
  $('.item .toggle').click(function(){
    var t = $(this), wran = t.closest('.item').find('.warn');
    if (t.hasClass('on')) {
      t.removeClass('on');
      wran.hide();
    }else {
      t.addClass('on');
      wran.show();
    }
  })

  // 删除商品
  $(".del").click(function(){
    if(confirm(langData['siteConfig'][20][211])){
      $.ajax({
        url: "waimaiFoodList.php",
        type: "post",
        data: {action: "delete", id: id},
        dataType: "json",
        success: function(res){
            if(res.state != 100){
                msg.show('', res.info, 'auto');
            }else{
              location.href = '/wmsj/shop/add-goods.php?sid='+sid;
            }
        },
        error: function(){
          msg.show('', langData['siteConfig'][20][253], 'auto');
        }
    })
    }
  })

  $(".submit").click(function(){
    $("#submitForm").submit();
  })
  $("#submitForm").submit(function(e){
    e.preventDefault();
    var form = $(this), btn = $(".submit"), action = form.attr('action');
    if(btn.hasClass("disabled")) return;

    btn.addClass('disabled');

    // 图片
    var pics = [];
    $("#fileList .thumbnail").each(function(){
      var img = $(this).find('img'), val = img.attr('data-val');
      if(val){
        pics.push(val);
      }
      $("#pics").val(pics.join(","));
    })

    // 开关类
    $(".toggle").each(function(){
      var t = $(this), type = t.attr('data-type');
      $('#'+type).val(t.hasClass('on') ? 1 : 0);
    })

    msg.show('', langData['siteConfig'][7][9]);

    $.ajax({
      url: action,
      type: "post",
      data: form.serialize(),
      dataType: "json",
      success: function(res){
          msg.show('', res.info, 'auto');
          if(res.state == 100){
            location.href = '/wmsj/shop/manage-goods.php?sid='+sid;
          }else{
            msg.show('', res.info, 'auto');
            btn.removeClass("disabled");
          }
      },
      error: function(){
          msg.show('', langData['siteConfig'][20][253], 'auto');
          btn.removeClass("disabled");
      }
    })

  })


})
