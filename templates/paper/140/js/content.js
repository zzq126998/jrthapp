$(function () {

    //往期
    $('.nav-l li.date .btn-date').click(function () {
        $('#date').focus();
    });

    $('.content .article-box .btn_close').click(function () {
        $(this).parent().hide();
    });

    // 版式
    $('.nav-l .edit .btn-edit').click(function () {
        $('.content .choose-box').toggleClass('show');
    });
    $('.content .choose-box li').click(function () {
        var edit = $(this).find('span').html();
        $('.edit-name').html(edit);
        $('.content .choose-box').removeClass('show');
    });

    $(document).bind('click', function (e) {
        var e = e || window.event; //浏览器兼容性
        var elem = e.target || e.srcElement;
        while (elem) { //循环判断至跟节点，防止点击的是div子元素
            if (elem.id && elem.id == 'edit') {
                return;
            }
            elem = elem.parentNode;
        }

        $('.content .choose-box').removeClass('show'); //点击的不是div或其子元素
    });

    // 右侧版式
    $('.content .content-r .tit .btn_choose').click(function () {
        $('.content .content-r .choose-list').toggleClass('show');
    });

    $('.content .content-r .choose-list').delegate('li', 'click', function () {
        $('.btn_choose').html($(this).text());
        $('.content .content-r .choose-list').removeClass('show');
    });

    $(document).bind('click', function (e) {
        var e = e || window.event; //浏览器兼容性
        var elem = e.target || e.srcElement;
        while (elem) { //循环判断至跟节点，防止点击的是div子元素
            if (elem.id && elem.id == 'btn_choose') {
                return;
            }
            elem = elem.parentNode;
        }

        $('.content .content-r .choose-list').removeClass('show'); //点击的不是div或其子元素
    });




    //控制标题的字数
    $('.sliceFont').each(function (index, el) {
        var num = $(this).attr('data-num');
        var text = $(this).text();
        var len = text.length;
        $(this).attr('title', $(this).text());
        if (len > num) {
            $(this).html(text.substring(0, num) + '...');
        }
    });


    // 文章详情
    $('.content .content-r ul.article-list').delegate('li','click',function () {
        $('.content .article-box').show();
        var id = $(this).attr('data-id');
        getContent(id);

    });
    getContent(id);
    //获取文章内容
    // getContent();
    function getContent(id){
        var url = "/include/ajax.php?service=paper&action=forumDetail&id="+id+"";
        $.ajax({
            url:url,
            type:"GET",
            dataType: "jsonp",
            success:function (data) {
                var datalist = data.info;
                var html=[];
                var time =huoniao.transTimes(datalist.pubdate,2);
                if(data.state == 100){

                    html.push('<p class="title">'+datalist.title+'</p>');
                    html.push('<p class="time"><span>'+datalist.author+'</span>');
                    if(datalist.author){
                        html.push('<span class="point">.</span> ');
                    }
                    html.push('<span>'+time+' </span></p>');
                    html.push('<div class="content-box"><p>'+datalist.body+'</p></div>');

                    $('#con_box').html(html.join(""));
                }
            }
        });
    }


    // 获取版本列表
    getforumList();
    function getforumList() {

        var url ="/include/ajax.php?service=paper&action=forumList&company="+companyid+"&date="+date+"&list=1&pageSize=100;";
        $.ajax({
            url: url,
            type: "GET",
            dataType: "jsonp",
            success:function (data) {
                if(data.state ==100){
                    // console.log(data);
                    var list = data.info.list;
                    var html=[];
                    for(var i=0;i<list.length;i++){
                        if(list[i].id == pid){
                            html.push('<li class="active"><a data-id="'+list[i].id+'" href="'+list[i].url+'">'+list[i].title+'</a></li>');
                            $('.edit .edit-name').html(list[i].title);
                            $('.now_page').html(i+1);
                            $('#btn_choose').html(list[i].title);
                        }else {
                            html.push('<li><a data-id="'+list[i].id+'" href="'+list[i].url+'">'+list[i].title+'</a></li>');
                        }


                    }
                    $('.list-box .choose-list').html(html.join(""));

                    $('.choose-box .choose-list').html(html.join(""));
                    totalCount =data.info.pageInfo.totalCount;
                    $('.total_page').html(totalCount);


                }

            }


        });





    }




    var w1,h1,w0,h0,len;
    var n,d1,d2,d3,d4;

    var aload = 0;

    var w0;

    imgSize();
    function imgSize(){
        var screenImage = $("#imageth");
        w1 = screenImage[0].clientWidth;
        h1 = screenImage[0].clientHeight;

        $('#IECN').find('canvas').remove();
        $('#IECN, #imageth').attr('style', '');
        mapinit();

    }

    var img_w;
    getcontentList();

    function getcontentList() {
        var p1,p2,p3,p4,right_top,right_bottom;
        var url ="/include/ajax.php?service=paper&action=contentList&des_count=40&id="+pid+"";
        $.ajax({
            url: url,
            type: "GET",
            dataType: "jsonp",
            success:function (data) {
                if(data.state == 100) {
                    var datalist = data.info;
                    var html1=[],html2=[];
                    len = datalist.length;
                    for (var i=0;i<datalist.length;i++) {
                        w0 = datalist[i].size.width;
                        img_w = datalist[i].size.width;
                        h0 = datalist[i].size.height;
                        n=w1/w0;
                        // console.log(n);
                        d1 = datalist[i].position[0];
                        d2 = datalist[i].position[1];
                        d3 = datalist[i].position[2];
                        d4 = datalist[i].position[3];

                        p1 = n*d1;
                        p2 = n*d2;
                        p3 = n*d3;
                        p4 = n*d4;
                        // console.log(p1);
                        right_top = p1+p3;
                        right_bottom = p2+p4;

                        // 插入area
                        html1.push('<area id="items'+i+'" data-id="'+datalist[i].id+'" data-posion="'+datalist[i].position+'"  class="areablock" shape="POLY" onmouseover="draw(this,\''+p1+','+p2+','+(p1+p3)+','+p2+','+(p1+p3)+','+(p2+p4)+','+p1+','+(p2+p4)+'\')"   onmouseout="undraw();" coords="'+p1+','+p2+','+right_top+','+p2+','+right_top+','+right_bottom+','+p1+','+right_bottom+'" >');
                        // 插入文章列表
                        html2.push('<li class="'+datalist[i].id+'" data-id="'+datalist[i].id+'" data-url="'+datalist[i].url+'" data-posion="'+datalist[i].position+'" onmouseout="undraw();">');
                        html2.push(' <p class="title sliceFont"  data-num="34">'+datalist[i].title+'</p>');
                        html2.push('<div class="info fn-clear">');
                        if(datalist[i].litpic){
                            html2.push('<div class="img fn-right"><img src="'+datalist[i].litpic+'" alt=""></div>');
                        }
                        if(datalist[i].description){
                            html2.push(' <div class="con">'+datalist[i].description+'......</div>');
                        }

                        html2.push('</div>');
                        html2.push('</li>');

                    }
                    $("#map_of_yyb").html(html1.join(""));
                    $('.content-r ul.article-list').html(html2.join(""));
                    // getSize();

                    setTimeout(function(){
                        $('#IECN').find('canvas').remove();
                        $('#IECN, #imageth').attr('style', '');
                        mapinit();
                    }, 500);

                    // mapAreaHover("AREA.areablock");
                }
            }
        });
    }

    $(window).resize(function () {
        drowarea();
    });

    function drowarea() {
        imgSize();
        var p ,data_id,url;
        $('#IECN').find('canvas').remove();
        $('#IECN, #imageth').attr('style', '');
        mapinit();

        n = w1/w0;
        var html1=[];
        var list1;

        for(var i=0;i<len;i++){
            p = $('.article-list li').eq(i).attr('data-posion');
            data_id = $('.article-list li').eq(i).attr('data-id');
            url = $('.article-list li').eq(i).attr('data-url');


            var arr = p.split(',');
            var p1 = arr[0]*n;
            var p2 = arr[1]*n;
            var p3 = arr[2]*n;
            var p4 = arr[3]*n;

            // console.log(p1);

            var right_top = p1+p3;
            var right_bottom = p2+p4;
            html1.push('<area id="items'+i+'" data-id="'+data_id+'" data-posion="'+p+'"  class="areablock" shape="POLY" onmouseover="draw(this,\''+p1+','+p2+','+(p1+p3)+','+p2+','+(p1+p3)+','+(p2+p4)+','+p1+','+(p2+p4)+'\')"  onmouseout="undraw();" coords="'+p1+','+p2+','+right_top+','+p2+','+right_top+','+right_bottom+','+p1+','+right_bottom+'" >');

        }
        $("#map_of_yyb").html(html1.join(""));

    }









    $('#map_of_yyb').delegate('area','click',function () {
        $('.content .article-box').show();
        var id = $(this).attr("data-id");
        getContent(id);
    });

    $('#map_of_yyb').delegate('area','mouseover',function () {
        var id = $(this).attr("data-id");
        $('.article-list li.'+id+'').addClass('active');
        var liHeigth =   $('.article-list li.'+id+'').offset().top;
        $('.content-r').scrollTop(liHeigth);
    });
    $('#map_of_yyb').delegate('area','mouseout',function () {
        var id = $(this).attr("data-id");
        $('.article-list li.'+id+'').removeClass('active');
    });



    $('body').delegate('.article-list li','mouseover',function () {
        p = $(this).attr('data-posion');

        var arr = p.split(',');
        var p1 = arr[0]*n;
        var p2 = arr[1]*n;
        var p3 = arr[2]*n;
        var p4 = arr[3]*n;
        draw($(this),''+p1+','+p2+','+(p1+p3)+','+p2+','+(p1+p3)+','+(p2+p4)+','+p1+','+(p2+p4)+'');
    })



    // 选择日期
    $(".laydate-icon").bind("click", function(){

        laydate({
            choose: function(dates){
                location.href = searchUrl.replace("%1", dates);
            }
        });
    });



    //百度分享代码
    var staticPath = (u=window.staticPath||window.cfg_staticPath)?u:((window.masterDomain?window.masterDomain:document.location.origin)+'/static/');
    var shareApiUrl = staticPath.indexOf('https://')>-1?staticPath+'api/baidu_share/js/share.js':'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5);
    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["tsina","tqq","qzone","weixin","sqq","renren"],"bdSize":"16"},"share":{"bdSize":0}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=shareApiUrl];


});