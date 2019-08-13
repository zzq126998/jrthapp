$(function(){

  //年月日
  $('.demo-test-date').scroller(
    $.extend({preset: 'time'})
  );

  // 开启、关闭
  $('.openbtn .toggle').click(function(){
    if ($(this).hasClass('on')) {
      $(this).removeClass('on');
    }else {
      $(this).addClass('on');
    }
  })


  function weekInit(){
    var week = $('#week').val();
    if(week != ''){
      var weekarr = week.split(',');
      $('.week li').each(function(){
        var id = $(this).attr("data-id");
        if(in_array(id, weekarr)){
          $(this).addClass('curr');
        }else{
          $(this).removeClass('curr');
        }
      })
    }else{
      $('.week li').removeClass('curr');
    }
  }
  weekInit();
  // 选择星期几
  $('.weekbtn').click(function(){
    weekInit();
    $('.layer .mask').addClass('show').animate({'opacity':'.5'}, 100);
    $('.layer .operate').animate({'bottom':'0'}, 150);
  })
  $('.mask').click(function(){
    hideMask();
  })

  $('.week li').click(function(){
    var t = $(this);
    if (t.hasClass('all')) {
      if (t.hasClass('curr')) {
        $('.week li').removeClass('curr');
      }else {
        $('.week li').addClass('curr');
      }
    }else {
      if (!t.hasClass('curr')) {
        t.addClass('curr');
      }else {
        t.removeClass('curr');
      }
    }
  })

  $('.confirm a').click(function(){

    var info = [], ids = [];
    $('.item.curr').each(function(){
      var t = $(this), id = t.attr('data-id'), txt = t.children('a').text();
      info.push(txt);
      ids.push(id);
    })

    $('.weekbtn dd').html('<p>'+info.join(",")+'</p>');
    $('#week').val(ids.join(","))
    hideMask();

  })

  function hideMask(){
    $('.layer .mask').animate({'opacity':'0'}, 100);
    setTimeout(function(){
      $('.layer .mask').removeClass('show');
    }, 100)
    $('.layer .operate').animate({'bottom':'-100%'}, 150);
  }

  // 提交
  $('.submit').click(function(){
    $("#submitForm").submit();
  })

  $("#submitForm").submit(function(e){
    e.preventDefault();
    var form = $(this), btn = $(".submit");
    if(btn.hasClass("disabled")) return;

    // 开关类
    $(".toggle").each(function(){
      var t = $(this), type = t.attr('data-type');
      $('#'+type).val(t.hasClass('on') ? 1 : 0);
    })

    $('.weeks').remove();
    // 店铺分类
    $(".week .item.curr").each(function(){
      $(this).addClass("aaaaa")
      var id = $(this).attr('data-id');
      form.append('<input type="hidden" class="weeks" name="weeks[]" value="'+id+'">');
    })

    formSubmit('business-info');

  })

})
