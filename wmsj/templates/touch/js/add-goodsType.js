$(function(){

  //年月日
  $('.demo-test-date').scroller(
    $.extend({preset: 'datetime', stepMinute: 10, dateFormat: '', timeWheels:'HH:ii', dateOrder: 'HH:ii'})
  );

  // 选择星期几
  $('.weekbtn').click(function(){
    var week = $('#week').val();
    if(week != ''){
      var weekarr = week.split(',');
      $('.week li').each(function(i){
        console.log(i)
        if(in_array(i, weekarr)){
          $(this).addClass('curr');
        }else{
          $(this).removeClass('curr');
        }
      })
    }else{
      $('.week li').removeClass('curr');
    }
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
    var week = [], weekn = [], on = $('.item.curr a'), val = on.text();
    for (var i = 0; i < on.length; i++) {
      week.push(on[i].innerText)
      weekn.push($(on[i]).parent().index())
    }
    $('#weektxt').val(week.join(","))
    $('#week').val(weekn.join(","))
    hideMask();
  })

  function hideMask(){
    $('.layer .mask').animate({'opacity':'0'}, 100);
    setTimeout(function(){
      $('.layer .mask').removeClass('show');
    }, 100)
    $('.layer .operate').animate({'bottom':'-100%'}, 150);
  }

  // 切换开关
  $('.toggle').click(function(){
    $(this).toggleClass('on');
  })

  // 提交
  $("#submit").click(function(){
    var btn = $(this);
    if(btn.hasClass('disabled')) return;

    var title = $('#title').val(),
        sort = $('#sort').val(),
        status = $('#status').hasClass('on') ? 1 : 0,
        start_time = $('#start_time').val(),
        end_time = $('#end_time').val(),
        weekshow = $('#weekshow').hasClass('on') ? 1 : 0,
        week = $('#week').val();

    if(title == ''){
      alert(langData['waimai'][5][78]);
      return;
    }

    var data = [];
    data.push('sid='+sid);
    data.push('id='+id);
    data.push('title='+title);
    data.push('sort='+sort);
    data.push('status='+status);
    data.push('start_time='+$.trim(start_time));
    data.push('end_time='+$.trim(end_time));
    data.push('weekshow='+weekshow);
    if(week != ''){
      week = week.split(',');
      for(var i = 0; i < week.length; i++){
        data.push('week[]='+week[i]);
      }
    }

    btn.addClass("disabled");

    $.ajax({
        url: 'waimaiFoodTypeAdd.php',
        type: "post",
        data: data.join("&"),
        dataType: "json",
        success: function(res){
          msg.show('', res.info, 'auto')
          btn.removeClass("disabled");
          if(res.state == 100){
            location.href = '/wmsj/shop/goods-type.php?sid='+sid;
          }
        },
        error: function(){
          alert(langData['siteConfig'][20][253]);
          btn.removeClass("disabled");
        }
    })
  })

})
