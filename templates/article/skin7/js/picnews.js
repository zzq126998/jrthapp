$(function () {
    var navHeight = $('.navlist').offset().top;
    //时间轴吸顶
    $(window).scroll(function() {
        if ($(window).scrollTop() > navHeight) {
            $('.navlist').addClass('topfixed');
        } else {
            $('.navlist').removeClass('topfixed');
        }
    });

    // 焦点图
    // var swiperNav = [], mainNavLi = $('.slideBox2 .bd').find('li');
    // for (var i = 0; i < mainNavLi.length; i++) {
    //     swiperNav.push($('.slideBox2 .bd').find('li:eq('+i+')').html());
    // }
    // var liArr = [];
    // for(var i = 0; i < swiperNav.length; i++){
    //     liArr.push(swiperNav.slice(i, i + 1).join(""));
    //     i += 0;
    // }
    // $('.slideBox2 .bd').find('ul').html('<li>'+liArr.join('</li><li>')+'</li>');
    $(".slideBox2").slide({titCell:".hd ul", mainCell:".bd ul",effect:"leftLoop", autoPage:"<li></li>",autoPlay: true});

    // //加载更多
    // $('.channel_mod .list .loadmore').click(function () {
    //     page=page+1;
    //     getDatas(page);
    // });


    //  首页新闻ajax请求
    $.fn.getAjax({
        page:1,
        pageSize:10,
        typeid: typeid,

        container:'#piclist'
    })


    //分享功能
    $("html").delegate(".sharebtn", "mouseenter", function(){
        console.log(0);
        var t = $(this), title = t.attr("data-title"), url = t.attr("data-url"), pic = t.attr("data-pic"), site = encodeURIComponent(document.title);
        title = title == undefined ? "" : encodeURIComponent(title);
        url   = url   == undefined ? "" : encodeURIComponent(url);
        pic   = pic   == undefined ? "" : encodeURIComponent(pic);
        if(title != "" || url != "" || pic != ""){
            $("#shareBtn").remove();
            var offset = t.offset(),
                left   = offset.left - 42 + "px",
                top    = offset.top + 20 + "px",
                shareHtml = [];
            shareHtml.push('<s></s>');
            shareHtml.push('<ul>');
            shareHtml.push('<li class="tqq"><a href="http://share.v.t.qq.com/index.php?c=share&a=index&url='+url+'&title='+title+'&pic='+pic+'" target="_blank">腾讯微博</a></li>');
            shareHtml.push('<li class="qzone"><a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+url+'&desc='+title+'&pics='+pic+'" target="_blank">QQ空间</a></li>');
            shareHtml.push('<li class="qq"><a href="http://connect.qq.com/widget/shareqq/index.html?url='+url+'&desc='+title+'&title='+title+'&summary='+site+'&pics='+pic+'" target="_blank">QQ好友</a></li>');
            shareHtml.push('<li class="sina"><a href="http://service.weibo.com/share/share.php?url='+url+'&title='+title+'&pic='+pic+'" target="_blank">腾讯微博</a></li>');
            shareHtml.push('</ul>');

            $("<div>")
                .attr("id", "shareBtn")
                .css({"left": left, "top": top})
                .html(shareHtml.join(""))
                .mouseover(function(){
                    $(this).show();
                    return false;
                })
                .mouseout(function(){
                    $(this).hide();
                })
                .appendTo("body");
        }
    });

    $("html").delegate(".sharebtn", "mouseleave", function(){
        $("#shareBtn").hide();
    });

    $("html").delegate("#shareBtn a", "click", function(event){
        event.preventDefault();
        var href = $(this).attr("href");
        var w = $(window).width(), h = $(window).height();
        var left = (w - 760)/2, top = (h - 600)/2;
        window.open(href, "shareWindow", "top="+top+", left="+left+", width=760, height=600");
    });



});