$(function(){
    //APP端取消下拉刷新
    toggleDragRefresh('off');
    
    // 互动的高度
    var a = $(window).height();
    var b = $('.video-box').height();
    var c = $('.name_title').height();
    var d = $('.header').height();
    var f = $('iframe').height();
    var e = $('.Bottom_inputBox').height();
    $('.comment_list').height(a-b-c-d-e-f);

    //点击input获取和失去焦点事件
    $("#common_btn").focus(function(){
        $('.information').hide();
        $('.fabulous').hide();
        $('.fasong').show();
        $('.mask').show();
    });
    // $("#common_btn").blur(function(){
    //     $('.information').show();
    //     $('.fabulous').show();
    //     $('.fasong').hide();
    // });
    // $('.intro').click(function(){
    //     $('.information').show();
    //     $('.fabulous').show();
    //     $('.fasong').hide();
    // });
    $('.mask').click(function(){
        $('.mask').hide();
        $('.information').show();
        $('.fabulous').show();
        $('.fasong').hide();
        $("#common_btn").blur();
    });



    //回复事件
    $('.comment_list ul').delegate('.huifu','click',function(){
        var t = $(this);
        var huifu_user = t.attr("data-id");
        $("#common_btn").focus();
        var a = t.find('.txt_name').text();
        $('#common_btn').attr('placeholder','回复：'+a);
        $('#common_btn').attr('data-id', huifu_user);
    });


    $('.video-box').on('click',function(){
        $('.video-btn').css('display','-webkit-flex');
        $('#video-control').css('display','-webkit-flex');
        setTimeout(function(){ $('#video-control').css('display','none'); $('.video-btn').css('display','none');}, 5000);
    });

    if(detail_videotype != 1){
        var box = document.getElementById("video-control"); //box对象
        var video = document.getElementById("video"); //视频对象
        var play = document.getElementById("play"); //播放按钮
        var vbplay = document.getElementById("vbplay");//视频中间播放按钮
        var time = document.getElementById('time');
        var progress = document.getElementById("progress"); //进度条
        var bar = document.getElementById("bar"); //蓝色进度条
        var control = document.getElementById("control"); //声音按钮
        var sound = document.getElementById("sound"); //喇叭
        var full = document.getElementById("full") //全屏
        video.addEventListener('play', function() {
            play.className = "pause";
            $('.play-box').find('i').removeClass('play-icon').addClass('pause-icon');
        });
        video.addEventListener('pause', function() {
            play.className = "play";
            $('.play-box').find('i').removeClass('pause-icon').addClass('play-icon');
        });
        video.addEventListener('timeupdate', function() {
            var timeStr = parseInt(video.currentTime);
            var minute = parseInt(timeStr/60);
            if(minute == 0){
                if(timeStr < 10){
                    timeStr = "0"+timeStr  ;
                }
                minute = "00:"+timeStr;
            }else{
                var timeStr = timeStr%60;
                if(timeStr < 10){
                    timeStr = "0"+timeStr  ;
                }
                minute = minute +":"+timeStr;
            }
            time.innerHTML = minute;
        });
        video.addEventListener('volumechange', function() {
            if(video.muted) {
                sound.className = "soundoff"
            } else {
                sound.className = "soundon"
            }
        });
        full.addEventListener("click", function() {
            $('.video-box').toggleClass('fullscreen-box');
            $('.markBox').toggleClass('show');
            var type = $(this).hasClass('small') ? "del" : "add";
            if(type=="del"){
                $(this).removeClass('small')
            }else{
                $(this).addClass('small')
            }

        }, false)
        play.onclick = function() {
            if(video.paused) {
                play.className = "pause";
                video.play();
            } else {
                play.className = "play";
                video.pause();
            }
        }
        vbplay.onclick = function() {
            if (video.paused){
                video.play();
                video.value = "pause";
            }else{
                video.pause();
                video.value = "play";
            }
        }
        //进度条
        video.addEventListener("timeupdate", function() {
            var scales = video.currentTime / video.duration;
            bar.style.width = progress.offsetWidth * scales + "px";
            control.style.left = progress.offsetWidth * scales + "px";
        }, false);
        var move = 'ontouchmove' in document ? 'touchmove' : 'mousemove';
        control.addEventListener("touchstart", function(e) {
            var leftv = e.touches[0].clientX - progress.offsetLeft - box.offsetLeft;
            if(leftv <= 0) {
                leftv = 0;
            }
            if(leftv >= progress.offsetWidth) {
                leftv = progress.offsetWidth;
            }
            control.style.left = leftv + "px"
        }, false);
        control.addEventListener('touchmove', function(e) {
            var leftv = e.touches[0].clientX - progress.offsetLeft - box.offsetLeft;
            if(leftv <= 0) {
                leftv = 0;
            }
            if(leftv >= progress.offsetWidth) {
                leftv = progress.offsetWidth;
            }
            control.style.left = leftv + "px"
        }, false);
        control.addEventListener("touchend", function(e) {
            var scales = control.offsetLeft / progress.offsetWidth;
            video.currentTime = video.duration * scales;
            video.play();
            document.onmousemove = null;
            document.onmousedown = null;
            //video.pause();
        }, false);
        sound.onclick = function() {
            if(video.muted) {
                video.muted = false;
                sound.className = "soundon"
            } else {
                video.muted = true;
                sound.className = "soundoff"
            }
        }

    }



// 点赞
$('.comment_list ul').delegate('.dianzan','click',function(){
  var t = $(this);
  var detail_comm_id = t.attr("data-common-id");
  var type_ = 0;
  if(t.hasClass('active')){
      //取消赞
      $.ajax({
          url : masterDomain + '/include/ajax.php?service=video&action=dianzan&vid=' + detail_comm_id + '&type=' + type_ + '&temp=video_common',
          data : '',
          type : 'get',
          dataType : 'json',
          success : function (data) {
              if(data.state == 100){
                  t.removeClass('active');
                  var b = t.text();
                  b--;
                  t.text(b)
              }else{
                  alert(data.info);
              }

          }
      })

  }else{
      type_ = 1
      $.ajax({
          url : masterDomain + '/include/ajax.php?service=video&action=dianzan&vid=' + detail_comm_id + '&type=' + type_ + '&temp=video_common',
          data : '',
          type : 'get',
          dataType : 'json',
          success : function (data) {
              if(data.state == 100){
                  t.addClass('active');
                  var c = t.text();
                  c++;
                  t.text(c);
              }else{
                  alert(data.info);
              }

          }
      })

  }
});

// 评论框处的点赞
$('.fabulous').click(function(){
  var t = $(this);
    var type = 1;

    if(!t.find('i').hasClass('active')){
      //点赞
      $.ajax({
          url : masterDomain + '/include/ajax.php?service=video&action=dianzan&vid=' + detail_id + '&type=' + type + '&temp=video',
          data : '',
          type : 'get',
          dataType : 'json',
          success : function (data) {
              if(data.state == 100){
                  t.find('i').addClass('active');

              }else{
                  alert(data.info);
              }

          }
      })
  }else{
        type = 0;
        $.ajax({
            url : masterDomain + '/include/ajax.php?service=video&action=dianzan&vid=' + detail_id + '&type=' + type + '&temp=video',
            data : '',
            type : 'get',
            dataType : 'json',
            success : function (data) {
                if(data.state == 100){
                    t.find('i').removeClass('active')

                }else{
                    alert(data.info);
                }

            }
        })
  }
});



        var followObj = $(".guanzhu");
        if(is_follow){
            followObj.text("已关注");
        }else{
            followObj.text("关注");
        }


        //点关注
        $(".guanzhu").click(function () {
            var type = 0;
            var t = $(".guanzhu");
            if(t.hasClass('isfollow')){
                type = 1;
            }else if(t.hasClass('follow')){
                type = 0;
            }
            $.ajax({
                url : masterDomain + '/include/ajax.php?service=video&action=follow&vid=' + detail_id + '&type=' + type + '&temp=video',
                data : '',
                type : 'get',
                dataType : 'json',
                success : function (data) {
                    if(data.state == 100){
                        if(type){
                            t.text('已关注');
                            t.removeClass('isfollow');
                            t.addClass('follow');

                        }else{

                            t.text('关注');
                            t.removeClass('follow');
                            t.addClass('isfollow');
                        }

                    }else{
                        alert(data.info);
                    }

                }
            })

        })


    /**
     * 评论
     */
    function common_method(comm_content, floor)
    {
        if(!comm_content){
            return false;
        }
        $.ajax({
            url : masterDomain + '/include/ajax.php?service=video&action=sendCommon&aid=' + detail_id + '&id=' + floor + '&content=' + comm_content,
            data : '',
            type : 'get',
            dataType : 'json',
            success : function (data) {
                if(data.state == 100){
                    window.location.href = window.location.href;
                }else{
                    alert(data.info);
                }

            }
        })
    }



    $(".fasong").click(function () {
        var floor = 0;
        var common = $("#common_btn").val();
        var huifu_user = $("#common_btn").attr("data-id");
        if(!common){
            alert("请输入评论");
            return;
        }
        if(huifu_user){
            floor = huifu_user;
        }
        common_method(common, floor, detail_id);

    })







})