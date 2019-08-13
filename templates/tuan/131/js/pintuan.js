$(function () {
    // //导航全部分类
    $(".lnav").find('.category-popup').hide();

    $(".lnav").hover(function(){
        $(this).find(".category-popup").show();
    }, function(){
        $(this).find(".category-popup").hide();
    });

    getTuanData();

    //初始加载设置页码
    if(totalPage > 0){
        showPageInfo();
    }

    //排序
    $("#bar-area .l a").bind("click", function(){

        var t = $(this), sort = t.attr("data-sort"), index = t.index(), load = 0;

        //默认
        if(index == 0){
            if(!t.hasClass("active")){
                t.addClass("active").siblings("a").removeClass("active price-up price-down");
                load = 1;
            }
        }else{

            //价格
            if(t.hasClass("price")){

                if(t.hasClass("price-up")){
                    t.removeClass("price-up").addClass("active price-down").siblings("a").removeClass("active");
                    t.attr("data-sort", 4);
                }else{
                    t.removeClass("price-down").addClass("active price-up").siblings("a").removeClass("active");
                    t.attr("data-sort", 3);
                }
                load = 1;

                //其他情况
            }else{

                //下
                if(t.hasClass("sort-down")){
                    if(!t.hasClass("active")){
                        t.addClass("active sort-down-active").siblings("a").removeClass("active price-up price-down");
                        load = 1;
                    }

                    //上
                }else{
                    if(!t.hasClass("active")){
                        t.addClass("active sort-up-active").siblings("a").removeClass("active price-up price-down");
                        load = 1;
                    }
                }

            }

        }

        if(load){
            atpage = 1;
            getTuanData();
        }

    });

    //自定义属性筛选
    $(".flags label").bind("click", function(){
        var t = $(this);
        t.hasClass("curr") ? t.removeClass("curr") : t.addClass("curr");
        atpage = 1;
        getTuanData();
    });

    //数据筛选导航
    var win = $(window), modList = $("#bar-area"), modTop = modList.offset().top;
    $(window).scroll(function() {
        var stop = win.scrollTop();
        stop > modTop ? modList.addClass("fixed") : modList.removeClass("fixed");
    });


    //获取团购数据
    function getTuanData(type){

        var orderby = $("#bar-area .l").find(".active").attr("data-sort");



        var item = [];
        $(".filter-wrapper .items").each(function(){
            var t = $(this), field = t.data("field").replace("field_", ""), active = t.find(".active");
            if(!active.hasClass("qb")){
                item.push(field+","+active.text());
            }
        });

        var flag = [];
        $(".flags label").each(function(){
            var t = $(this);
            t.hasClass("curr") ? flag.push(t.data("val")) : "";
        });

        $("#mod-item .loading").html("加载中，请稍候...").show();

        $.ajax({
            url: "/include/ajax.php?service=tuan&action=tList&pin=1&iscity=1&pageSize="+pageSize+"&typeid="+typeid+"&addrid="+addrid+"&business="+business+"&subway="+subway+"&station="+station+"&item="+item.join("$$")+"&orderby="+orderby+"&flag="+flag.join(",")+"&title="+keywords+"&page="+atpage,
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
                console.log(data);
                $("#mod-item .loading").hide();
                if(data && data.state == 100 && data.info.list.length > 0){
                    var list = data.info.list,
                        pageinfo = data.info.pageInfo,
                        html = [];
                    for(var i = 0; i < list.length; i++){
                        
                        html.push('<li class="clone">');

                        html.push('<a href="'+list[i].url+'" target="_blank">');
                        html.push('<div class="img"><img src="'+cfg_staticPath+'images/blank.gif" data-url="'+huoniao.changeFileSize(list[i].litpic, "small")+'" alt="'+list[i].title+'"><span>'+list[i].pinnum+'人在拼</span></div>');
                        
                        html.push('<p class="name">'+list[i].title+'</p>');
                        html.push('<p class="price"><i>'+echoCurrency('symbol')+'</i><span>'+list[i].pinprice+'</span> <strong>单买价 :</strong> <em><i>'+echoCurrency('symbol')+'</i>'+list[i].market+'</em></p>');
                        if(list[i].state == 1){
                            html.push('<span class="btn">已结束</span>');
                        }else if(list[i].state == 2){
                            html.push('<span class="btn">已抢完</span>');
                        }else if(list[i].state == 3){
                            html.push('<span class="btn">去拼单</span>');
                        }

                        html.push('</a>');

                        html.push('</li>');
                    }
                    $("#mod-item ul").html(html.join(""));

                    totalCount = pageinfo.totalCount;

                    showPageInfo();
                    $("img").scrollLoading();

                }else{
                    $("#mod-item ul").empty();
                    $("#mod-item .loading").html("暂无数据！").show();
                    $("#mod-item .pagination").html("").hide();

                    var pageList = [];
                    //上一页
                    pageList.push('<span class="pg-prev"><i class="trigger"></i><span class="text">上一页</span></span>');
                    //下一页
                    pageList.push('<span class="pg-next"><span class="text">下一页</span><i class="trigger"></i></span>');
                    //页码统计
                    pageList.push('<span class="sum"><em>1</em>/1</span>');
                    $("#bar-area .pagination").html(pageList.join(""));

                }
            }
        });

    }

    //打印分页
    function showPageInfo() {
        var info = $("#mod-item .pagination");
        var nowPageNum = atpage;
        var allPageNum = Math.ceil(totalCount/pageSize);
        var pageArr = [];

        info.html("").hide();

        var pageList = [];
        //上一页
        if(atpage > 1){
            pageList.push('<a href="javascript:;" class="pg-prev"><i class="trigger"></i><span class="text">上一页</span></a>');
        }else{
            pageList.push('<span class="pg-prev"><i class="trigger"></i><span class="text">上一页</span></span>');
        }

        //下一页
        if(atpage >= allPageNum){
            pageList.push('<span class="pg-next"><span class="text">下一页</span><i class="trigger"></i></span>');
        }else{
            pageList.push('<a href="javascript:;" class="pg-next"><span class="text">下一页</span><i class="trigger"></i></a>');
        }

        //页码统计
        pageList.push('<span class="sum"><em>'+atpage+'</em>/'+allPageNum+'</span>');

        $("#bar-area .pagination").html(pageList.join(""));

        var pages = document.createElement("div");
        pages.className = "pagination-pages fn-clear";
        info.append(pages);

        //拼接所有分页
        if (allPageNum > 1) {

            //上一页
            if (nowPageNum > 1) {
                var prev = document.createElement("a");
                prev.className = "prev";
                prev.innerHTML = '上一页';
                prev.setAttribute('href','#');
                prev.onclick = function () {
                    atpage = nowPageNum - 1;
                    getTuanData();
                }
                info.find(".pagination-pages").append(prev);
            }

            //分页列表
            if (allPageNum - 2 < 1) {
                for (var i = 1; i <= allPageNum; i++) {
                    if (nowPageNum == i) {
                        var page = document.createElement("span");
                        page.className = "curr";
                        page.innerHTML = i;
                    } else {
                        var page = document.createElement("a");
                        page.innerHTML = i;
                        page.setAttribute('href','#');
                        page.onclick = function () {
                            atpage = Number($(this).text());
                            getTuanData();
                        }
                    }
                    info.find(".pagination-pages").append(page);
                }
            } else {
                for (var i = 1; i <= 2; i++) {
                    if (nowPageNum == i) {
                        var page = document.createElement("span");
                        page.className = "curr";
                        page.innerHTML = i;
                    }
                    else {
                        var page = document.createElement("a");
                        page.innerHTML = i;
                        page.setAttribute('href','#');
                        page.onclick = function () {
                            atpage = Number($(this).text());
                            getTuanData();
                        }
                    }
                    info.find(".pagination-pages").append(page);
                }
                var addNum = nowPageNum - 4;
                if (addNum > 0) {
                    var em = document.createElement("span");
                    em.className = "interim";
                    em.innerHTML = "...";
                    info.find(".pagination-pages").append(em);
                }
                for (var i = nowPageNum - 1; i <= nowPageNum + 1; i++) {
                    if (i > allPageNum) {
                        break;
                    }
                    else {
                        if (i <= 2) {
                            continue;
                        }
                        else {
                            if (nowPageNum == i) {
                                var page = document.createElement("span");
                                page.className = "curr";
                                page.innerHTML = i;
                            }
                            else {
                                var page = document.createElement("a");
                                page.innerHTML = i;
                                page.setAttribute('href','#');
                                page.onclick = function () {
                                    atpage = Number($(this).text());
                                    getTuanData();
                                }
                            }
                            info.find(".pagination-pages").append(page);
                        }
                    }
                }
                var addNum = nowPageNum + 2;
                if (addNum < allPageNum - 1) {
                    var em = document.createElement("span");
                    em.className = "interim";
                    em.innerHTML = "...";
                    info.find(".pagination-pages").append(em);
                }
                for (var i = allPageNum - 1; i <= allPageNum; i++) {
                    if (i <= nowPageNum + 1) {
                        continue;
                    }
                    else {
                        var page = document.createElement("a");
                        page.innerHTML = i;
                        page.setAttribute('href','#');
                        page.onclick = function () {
                            atpage = Number($(this).text());
                            getTuanData();
                        }
                        info.find(".pagination-pages").append(page);
                    }
                }
            }

            //下一页
            if (nowPageNum < allPageNum) {
                var next = document.createElement("a");
                next.className = "next";
                next.innerHTML = '下一页';
                next.setAttribute('href','#');
                next.onclick = function () {
                    atpage = nowPageNum + 1;
                    getTuanData();
                }
                info.find(".pagination-pages").append(next);
            }

            //输入跳转
            var insertNum = Number(nowPageNum + 1);
            if (insertNum >= Number(allPageNum)) {
                insertNum = Number(allPageNum);
            }

            var redirect = document.createElement("div");
            redirect.className = "redirect";
            redirect.innerHTML = '<i>到</i><input id="prependedInput" type="number" placeholder="页码" min="1" max="'+allPageNum+'" maxlength="4"><i>页</i><button type="button" id="pageSubmit">确定</button>';
            info.find(".pagination-pages").append(redirect);

            //分页跳转
            info.find("#pageSubmit").bind("click", function(){
                var pageNum = $("#prependedInput").val();
                if (pageNum != "" && pageNum >= 1 && pageNum <= Number(allPageNum)) {
                    atpage = Number(pageNum);
                    getTuanData();
                } else {
                    $("#prependedInput").focus();
                }
            });

            info.show();

        }else{
            info.hide();
        }
    }


});