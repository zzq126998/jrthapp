$(function(){
    $('.searchkey').focus(function(){
        $('.hotkey').addClass('leave').stop().animate({
            'right' : '-400px'
        },500);
    }).blur(function(){
        $('.hotkey').removeClass('leave').stop().animate({
            'right' : '15px'
        },500);
    })


    //页面自适应设
    $(window).resize(function(){
        var screenwidth = window.innerWidth || document.body.clientWidth;
        var criticalPoint = criticalPoint != undefined ? criticalPoint : 1240;
        var criticalClass = criticalClass != undefined ? criticalClass : "w1200";
        var isHaveBig = $("html").hasClass(criticalClass),now;
        if(screenwidth < criticalPoint){
            $("html").removeClass(criticalClass);
            now = false;
        }else{
            $("html").addClass(criticalClass);
            now = true;
        }
        if(isHaveBig && !now || !isHaveBig && now) {
            $(window).trigger('winSizeChange' , now);
        }
    });

    // 头部搜索框
    $('.search .type').hover(function(){
        $(this).find('dd').show();
    }, function(){
        $(this).find('dd').hide();
    });

    $('.search .type dd a').click(function(){
        var li = $(this).text();
        $('.search .type dt a').html(li);
    })

    // 顶部手机 微信
    $('.topInfo .menu li').hover(function(){
        $(this).find('.pop').show();
    }, function(){
        $(this).find('.pop').hide();
    })

    // 贴吧热议榜固定
    var offset = $('.topic-box').offset().top;
    $(window).bind("scroll",function(){
        var d = $(document).scrollTop();
        if(offset < d && $(".main-content-left").height() > $(".main-content-right").height()){
                $('.topic-box').addClass('fixed');
        }else{
            $('.topic-box').removeClass('fixed');
        }
    });

    // 回到顶部
    $('.floatNav .top').click(function(){
        $('html, body').animate({scrollTop: 0}, 300);
    })

    var ue;

    //发表帖子/评论
    $("#sendBtn").click(function(){
        var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			huoniao.login();
			return false;
		}

        var t = $(this), type = $(".publish-info").data("type"), typeid = $(".publish-info").data("typeid");
        if(t.hasClass("disabled")) return false;
        if(type == "index" || type == "list" || type == "detail"){

            if(type != "detail"){
              var cityid = $(".sel-city select:last").val();
              if(!cityid){
                  alert("请选择城市！");
                  return false;
              }
            }

            //首页
            if(type == "index"){

                var typeid = $(".sel-type select:last").val();
                if(!typeid){
                    alert("请选择分类！");
                    return false;
                }

            }

            if(type == "index" || type == "list"){
                var title = $("#pubTitle").val();
                if($.trim(title) == ""){
                    alert("请填写标题！");
                    return false;
                }
            }

            ue.sync();
            if(!ue.hasContents()){
    			alert("请填写内容！");
                return false;
    		}
            var content = ue.getContent();

            var pubCode = $("#pubCode").val();
            if(pubCode == ""){
                alert("请填写验证码！");
                return false;
            }

            t.addClass("disabled");
            if(type == "index" || type == "list"){
                $.ajax({
    				url: "/include/ajax.php?service=tieba&action=sendPublish",
                    data: "vdimgck="+pubCode+"&typeid="+typeid+"&cityid="+cityid+"&title="+encodeURIComponent(title)+"&content="+encodeURIComponent(content),
    				type: "POST",
    				dataType: "json",
    				success: function (data) {
    					if(data && data.state == 100){

    						fabuPay.check(data, document.URL, t);

    					}else{
    						alert(data.info);
                            $("#verifycode").click();
    						t.removeClass("disabled");
    					}
    				},
    				error: function(){
    					alert("网络错误，发表失败，请稍候重试！");
                        $("#verifycode").click();
    					t.removeClass("disabled");
    				}
    			});
            }else{
                $.ajax({
    				url: "/include/ajax.php?service=tieba&action=sendReply",
                    data: "vdimgck="+pubCode+"&tid="+id+"&rid=0&content="+encodeURIComponent(content),
    				type: "POST",
    				dataType: "json",
    				success: function (data) {
    					if(data && data.state == 100){

                            if(data.info.state == 1){
                                alert("发表成功！");
                                location.reload();
                            }else{
                                alert("发表成功，请等待管理员审核！");
                            }
                            ue.setContent("");
                            $("#pubCode").val('');

    					}else{
    						alert(data.info);
                            $("#verifycode").click();
    						t.removeClass("disabled");
    					}
    				},
    				error: function(){
    					alert("网络错误，发表失败，请稍候重试！");
                        $("#verifycode").click();
    					t.removeClass("disabled");
    				}
    			});
            }

        }
    });

    //更新验证码
	var verifycode = $("#verifycode").attr("src");
	$("#verifycode").bind("click", function(){
		$(this).attr("src", verifycode+"?v="+Math.random());
	});


    var userid = $.cookie(cookiePre+"login_user");
    if(userid && $(".publish-info").length > 0){
        ue = UE.getEditor("content", {toolbars: [['source', '|', 'fullscreen', 'undo', 'redo', '|', 'fontfamily', 'fontsize', '|', 'forecolor', 'bold', 'italic', 'underline', '|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'insertorderedlist', 'insertunorderedlist', '|','simpleupload', 'insertimage', '|', 'link', 'unlink']], initialStyle:'p{line-height:1.5em; font-size:13px; font-family:microsoft yahei;}'});
    }

    //百度分享代码
    var staticPath = (u=window.staticPath||window.cfg_staticPath)?u:((window.masterDomain?window.masterDomain:document.location.origin)+'/static/');
var shareApiUrl = staticPath.indexOf('https://')>-1?staticPath+'api/baidu_share/js/share.js':'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5);
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["tsina","tqq","qzone","weixin","sqq","renren"],"bdSize":"16"},"share":{"bdSize":0}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=shareApiUrl];
})
