$(function(){

  //下拉菜单
  $('.demo-test-select').scroller(
    $.extend({preset: 'select'})
  );

  // {#$langData['waimai'][1][8]#}分类
  $('#Config_type_id').click(function(){
    $('.layer .mask').addClass('show').animate({'opacity':'.5'}, 100);
    $('.layer .operate').animate({'bottom':'0'}, 150);
  })
  $('.mask').click(function(){
    hideMask();
  })

  $('.shoptype li').click(function(){
    var t = $(this);
    if (t.hasClass('all')) {
      if (t.hasClass('curr')) {
        $('.shoptype li').removeClass('curr');
      }else {
        $('.shoptype li').addClass('curr');
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

    $('#Config_type_id').val(info.join(" "));
    $('#typeid').val(ids.join(","))
    hideMask();
  })

   function hideMask(){
    $('.layer .mask').animate({'opacity':'0'}, 100);
    setTimeout(function(){
      $('.layer .mask').removeClass('show');
    }, 100)
    $('.layer .operate').animate({'bottom':'-100%'}, 150);
  }

  $("#autolocation").click(function(){
    autolocation();
  })

  if($("#coordX").val() == '' || $("#coordY").val() == ''){
    autolocation();
  }

  function autolocation(){
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
      if(this.getStatus() == BMAP_STATUS_SUCCESS){
          lat = r.point.lat;
          lng = r.point.lng;

          var myGeo = new BMap.Geocoder();
          myGeo.getLocation(r.point, function mCallback(rs){
            var allPois = rs.surroundingPois;
            if(allPois == null || allPois == ""){
                msg.show(langData['waimai'][5][79], langData['waimai'][2][104], 'auto');
                return;
            }
            $("#coordX").val(lat);
            $("#coordY").val(lng);
        }, {
            poiRadius: 1000,  //半径一公里
            numPois: 1
        });


      }else {
        msg.show(langData['waimai'][5][79], 'failed'+this.getStatus(), 'auto');
      }
    },{enableHighAccuracy: true})
  }



  // 提交
  $('.submit').click(function(){
  	$("#submitForm").submit();
  })

  $("#submitForm").submit(function(e){
    e.preventDefault();
    var btn = $(".submit"), form = $(this);
    if(btn.hasClass("disabled")) return;

    $('.typeids').remove();
    // 店铺分类
    $(".shoptype .curr").each(function(){
    	var id = $(this).attr('data-id');
      form.append('<input type="hidden" class="typeids" name="typeid[]" value="'+id+'">');
    })

    formSubmit('basic-info');

  })


})
