$(function(){

  $(".lg").bind("click", function(){
    huoniao.login();
  });

    // 选择日期
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    $('#mday').fdatepicker({
      format: 'yyyy-mm-dd',
      onRender: function (date) {
        return date.valueOf() < now.valueOf() ? 'disabled' : '';
      }
    })
  
  //验证提示弹出层
  function showMsg(msg, type){
    if(type == 1){
      $('.popup-box.msg').remove();
      $('body').append('<div class="popup-box msg" style="display:block;"><p class="ptip">'+msg+'</p></div>');
      setTimeout(function(){
        $('.popup-box.msg').remove();
      },2000);
      return;
    }

    $('.popup-box').append('<p class="ptip">'+msg+'</p>')
    setTimeout(function(){
    $('.ptip').remove();
    },2000);
  }

  //购买联系方式
  $(".gm").bind("click", function(){
    var t = $(this);
    if(t.hasClass("disabled")) return false;

    var userid = $.cookie(cookiePre+"login_user");
    if(userid == null || userid == ""){
      huoniao.login();
      return false;
    }

    t.addClass("disabled");

    $('.popup-buy .edit').hide();
    $('html').addClass('nos');
    $('.popup-buy').show();
  });

  $('body').delegate('#btnBuy', 'click', function() {
      $.ajax({
        url: masterDomain + "/include/ajax.php?service=job&action=viewResume&id="+id,
        type: "GET",
        dataType: "jsonp",
        success: function (data) {
          if(data.state == 100){
            location.reload();
          }else{
            showMsg(data.info);
          }
        },
        error: function(){
          t.removeClass("disabled");
          showMsg('网络错误，查看失败！');
        }
      });
  });

  //关闭
  $('.popup-box').delegate('.tit s,.btn_cancer', 'click', function(){
    $('html').removeClass('nos');
    $('.popup-box').hide();
  });


  //邀请面试
  $("#yq, .yqms").bind("click", function(){
    var t = $(this);
    if(t.hasClass("disabled")) return false;

    var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			huoniao.login();
			return false;
		}

    var winh = $(window).height(),
        boxh = 780,
        conh = 660,
        offset = parseInt(winh * 0.84 - boxh);
    if(offset < 0){
      $('.popup-yqms .con').css({'height': (conh + offset), 'overflow-y': 'auto'});
    }else{
      $('.popup-yqms .con').css({'height': conh, 'overflow': 'hidden'});
    }

    t.addClass("disabled");
    
    $.ajax({
      url: masterDomain + "/include/ajax.php?service=job&action=post&com=1",
      type: "GET",
      dataType: "jsonp",
      success: function (data) {
        t.removeClass("disabled");
        if(data.state == 100){

          if(data.info.pageInfo.totalCount == 0){
            showMsg('您还未发布职位，无法邀请！');
          }else{
            var post = [];
            var list = data.info.list;
            for(var i = 0; i < list.length; i++){
              post.push('<option value="'+list[i].id+'">'+list[i].title+'</option>');
            }

            $('html').addClass('nos');
            $('#zhiwei option:eq(0)').nextAll().remove();
            $('#zhiwei').append(post.join(''));
            $('.popup-yqms').show();
          }

        }else{
          showMsg('您还未发布职位，无法邀请！', 1);
        }
      },
      error: function(){
        t.removeClass("disabled");
        showMsg('网络错误，操作失败！');
      }
    });

  });

  // 其它备注
  $('#ms_remark').focus(function() {
    $(this).parent('.otherbox').find("input[type='checkbox']").attr('checked', 'checked');
  });
  // 邀请面试验证
  $('.popup-yqms').delegate('.btn_ok','click',  function() {
      var mzhiwei = $('#zhiwei').val();
      var mday = $('#mday').val();
      var mhalfa = $('#mhalfa').val();
      var mhour = $('#mhour').val();
      var mplace = $('#place').val();
      var mcontact = $('#contact').val();
      var mphone = $("#telphone").val();

      var curDate = new Date();
      var curDate_ = curDate.getTime();
      var nowHour = curDate.getHours();

      if(mzhiwei == 0){
          showMsg('请选择要邀请的职位！');
          return false;
      }else if(mday == '') {
          showMsg('请选择面试日期！');
          return false;
      }else if(mplace == '') {
          showMsg('请填写面试地点！');
          return false;
      }else if(mcontact == '') {
          showMsg('请填写联系人！');
          return false;
      }else if(mphone == '') {
          showMsg('请填写联系电话！');
          return false;
      }else{
        if(mday == 0 && parseInt(mhour) <= parseInt(nowHour)){
            showMsg('面试时间已过！'+mhour+'-'+nowHour);
            return false;
        }
        var ms_day = $('#mday').val(); //面试时间
        var ms_halfa = $('#mhalfa').find("option:selected").text(); //面试时间
        var ms_hour = $('#mhour').find("option:selected").text(); //面试时间
        var remark = [];//备注
        var obj = $("input[name='mremark']");
        for(k in obj){
            if(obj[k].checked)
                remark.push(obj[k].value);
        }
        var remark2 = $("input[type='checkbox']:checked").next('#ms_remark').val();


        $.ajax({
            url: masterDomain + "/include/ajax.php?service=job&action=invitation",
            data: {
                lease_day: ms_day,
                lease_halfa: ms_halfa,
                lease_hour: ms_hour,
                place: mplace,
                name: mcontact,
                phone: mphone,
                rid: id,
                pid: mzhiwei,
                remark: remark.join("、")+(remark2 ? "、"+remark2 : ""),
            },
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
              if(data.state == 100){
                showMsg('已发送邀请');
                setTimeout(function(){
                   $('.popup-yqms').hide();
                },2000);
              }else{
                showMsg(data.info);
              }
            },
            error: function(){
              showMsg('网络错误，邀请失败！');
            }
        });
      }
  });

  $('.mstime').change(function () {
        var t = $(this), val = t.val(), id = t.attr('id');
        if(id == "mhalfa"){
            if(val == '0'){
                $("#mhour").html('<option value="7">07:00</option>\n' +
                    '        <option value="8">08:00</option>\n' +
                    '        <option value="9">09:00</option>\n' +
                    '        <option value="10">10:00</option>\n' +
                    '        <option value="11">11:00</option>\n' +
                    '        <option value="12">12:00</option>');
            }else{
                $("#mhour").html('<option value="13">13:00</option>\n' +
                    '        <option value="14">14:00</option>\n' +
                    '        <option value="15">15:00</option>\n' +
                    '        <option value="16">16:00</option>\n' +
                    '        <option value="17">17:00</option>\n' +
                    '        <option value="18">18:00</option>');
            }
        }
    })


  //收藏简历
  $("#sc, .sc").bind("click", function(){
    var t = $(this);
    if(t.hasClass("disabled")) return false;

    var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			huoniao.login();
			return false;
		}

    t.addClass("disabled");

    $.ajax({
      url: masterDomain + "/include/ajax.php?service=member&action=collect&module=job&temp=resume&type=add&id="+id,
      type: "GET",
      dataType: "jsonp",
      success: function (data) {
        t.removeClass("disabled");
        if(data.state == 100){

          $.dialog.tips('收藏成功！', 3, 'success.png');
          $('#sc').addClass('disabled').html('已收藏');
        }else{
          $.dialog.tips('网络错误，收藏失败！', 3, 'error.png');
          $('#sc').html('收藏简历');
        }
      },
      error: function(){
        t.removeClass("disabled");
        $.dialog.tips('网络错误，收藏失败！', 3, 'error.png');
        $('#sc').html('收藏简历');
      }
    });

  });


  // 标记为不合适
  $("#bhs").bind("click", function(){
    var t = $(this);
    if(t.hasClass("disabled")) return false;
    
    var userid = $.cookie(cookiePre+"login_user");
    if(userid == null || userid == ""){
      huoniao.login();
      return false;
    }

    $('html').addClass('nos');
    $('.popup-bhs').show();
    
  });

  $('#bhs_other').focus(function() {
    $(this).parents('.otherbox').find("input[type='radio']").attr('checked', 'checked');
  });

  $('.popup-bhs').delegate('.btn_ok','click',  function() {

      var remark = $("input[name='bhsmark']:checked").val();
      remark = $.trim(remark);
      if(remark == '其它'){
          remark = $("#bhs_other").val();
      }

      $.ajax({
          url : "/include/ajax.php?service=job&action=buyResumeRemark",
          data:{
              rid : id,
              remark : remark
          },
          type : 'get',
          dataType : 'json',
          success : function (data) {
              if(data.state == 100){
                  showMsg('已标记为不合适');
                  setTimeout(function(){
                     $('.popup-bhs').hide();
                  },1000);
                  window.location.href = window.location.href;
              }else{
                  showMsg(data.info);
              }
          }
      })
  });


});

// 分享
var staticPath = (u=window.staticPath||window.cfg_staticPath)?u:((window.masterDomain?window.masterDomain:document.location.origin)+'/static/');
var shareApiUrl = staticPath.indexOf('https://')>-1?staticPath+'api/baidu_share/js/share.js':'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5);
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{"bdSize":0}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=shareApiUrl];
