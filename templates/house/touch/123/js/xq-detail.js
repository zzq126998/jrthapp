$(function(){

    $('.appMapBtn').attr('href', OpenMap_URL);

// 位置周边
 var it = {
        initMap: function() {
            var searchList = [
                {name: "公交", order: "1"},
                {name: "地铁", order: "6"},
                {name: "教育", order: "4"},
                {name: "医院", order: "2"},
                {name: "银行", order: "9"},
                {name: "美食", order: "5"},
                {name: "休闲", order: "7"},
                {name: "购物", order: "3"},
                {name: "健身", order: "8"}
            ];

            var map, centerPoint, centerLabel;
            init();
            
            function init() {
                var longitude = $("#map-wrapper").attr("data-lng");
                var latitude = $("#map-wrapper").attr("data-lat");
                map = new BMap.Map("map-wrapper");
                map.disableDragging();
                map.disableScrollWheelZoom();
                centerPoint = new BMap.Point(longitude, latitude);
                centerLabel = {
                    labelHtml: '<div class="center-label"></div>',
                    labelOpts: {
                        position: centerPoint
                    },
                    style: {
                        width: "1.25rem",
                        height: "1.25rem",
                        background: "rgba(66,133, 244, 0.40)",
                        border: "1px solid #4285F4",
                        "border-radius": "50%"
                    }
                };
                map.centerAndZoom(centerPoint, 14);
                addLabel(centerLabel.labelHtml, centerLabel.labelOpts, centerLabel.style, 1e3);
                initNav(searchList);
                $(".periphery").on("click", ".nav-item",
                function() {
                    navClickHandler($(this))
                })
            }
            function initNav(arr) {
                var projectName = $(".periphery").attr("data-project");
                var flag = 0;
                var loadHaveDone = false;
                arr.forEach(function(item, index) {
                    var value = item.name;
                    var order = item.order;
                    $(".periphery .nav-wrapper").append('<li class="nav-item post_ulog" data-evtid="10184" data-ulog="xinfangm_click=10158_' + order + '" data-type="' + value + '" data-index="' + index + '">' + value + "</li>");
                    search(value, false,
                    function(type, success, nums) {
                        if (!success) {
                            $(".periphery .nav-item").forEach(function(item, index) {
                                if ($(item).attr("data-type") === type) {
                                    $(item).remove()
                                }
                            })
                        } else if ( !! success) {
                            $(".periphery").find("[data-type=" + type + "]").text(value + "(" + nums + ")")
                        }
                        if (flag === arr.length - 1) {
                            loadHaveDone = true;
                            $(".periphery .nav-item").length > 0 && navClickHandler($($(".periphery .nav-item")[0]))
                        }
                        flag++
                    })
                });
                setTimeout(function() {
                    if (!loadHaveDone) {
                        $(".periphery .nav-item").length > 0 && navClickHandler($($(".periphery .nav-item")[0]))
                    }
                },
                1e3)
            }
            function navClickHandler($targer) {
                var type = $targer.attr("data-type");
                $targer.addClass("active");
                $targer.siblings().removeClass("active").addClass("disable");
                map.clearOverlays();
                addLabel(centerLabel.labelHtml, centerLabel.labelOpts, centerLabel.style, 1e3);
                search(type, true,
                function() {
                    $targer.siblings().removeClass("disable")
                })
            }
            function addLabel(labelHtml, labelOpts, style, index) {
                var label = new BMap.Label(labelHtml, labelOpts);
                label.setStyle(style);
                label.setZIndex(index);
                map.addOverlay(label)
            }
            function search(type, render, callback) {
                var search = new BMap.LocalSearch(map);
                search.setSearchCompleteCallback(function(results) {
                    var baidu_nearby = [];
                    var success = true;
                    if (search.getStatus() == BMAP_STATUS_SUCCESS) {
                        for (var i = 0; i < results.getCurrentNumPois(); i++) {
                            var pointObj = results.getPoi(i);
                            var pointA = new BMap.Point(pointObj.point.lng, pointObj.point.lat);
                            var distance = getTwoPointsDistance(pointA, centerPoint);
                            pointObj.distance = distance;
                            baidu_nearby.push(pointObj)
                        }
                        baidu_nearby.sort(function(itemA, itemB) {
                            return itemB.distance - itemA.distance
                        });
                        if ( !! render && baidu_nearby instanceof Array) {
                            renderDistance(baidu_nearby)
                        }
                    } else {
                        success = false
                    }
                    callback && callback(type, success, results.getCurrentNumPois());
                    render && renderLayer(baidu_nearby)
                });
                var SEARCH_RADIUS = 2e3;
                search.searchNearby(type, centerPoint, SEARCH_RADIUS)
            }
            function renderDistance(baidu_nearby) {
                var nearestThree = baidu_nearby.slice( - 3).sort(function(a, b) {
                    return a.distance - b.distance
                });
                var str = "";
                nearestThree.forEach(function(item) {
                    var distance = Number(item.distance).toFixed(0);
                    if (Number(distance) > 1e3) {
                        distance = (Number(distance) / 1e3).toFixed(2) + "km"
                    } else {
                        distance = distance + "m"
                    }
                    str += '<li class="nearest-item">' + '<div class="left">' + '<span class="name">' + item.title + "</span> (" + item.address + ")" + "</div>" + '<span class="right distance">' + '<i class="icon"></i>' + '<span class="distance-item">' + distance + "</span> " + "</span>" + "</li> "
                });
                $(".nearest-three").html(str)
            }
            function renderLayer(list) {
                list.forEach(function(a, i) {
                    var labelHtml = '<div class="label-container"><div class="label-wrapper bounce "><div class="self-label">' + a.title + '</div><i class="label-bottom-icon"></i></div></div>';
                    var opts = {
                        position: new BMap.Point(a.point.lng, a.point.lat)
                    };
                    var style = {
                        "margin-left": "-3.9375rem",
                        background: "transparent",
                        border: "none"
                    };
                    addLabel(labelHtml, opts, style, i)
                })
            }
            function getTwoPointsDistance(pointA, pointB) {
                return map.getDistance(pointA, pointB).toFixed(2)
            }
        }
    };

    it.initMap();



    $('.markBox').find('a:first-child').addClass('curr');
    new Swiper('.topSwiper .swiper-container', {pagination: {el: '.topSwiper .swiper-pagination',type: 'fraction',} ,loop: false,grabCursor: true,paginationClickable: true,
        on: {
            slideChangeTransitionStart: function(){
                var len = $('.markBox').find('a').length;
                var sindex = this.activeIndex;
                if(len==1){
                    $('.markBox').find('a:first-child').addClass('curr');
                }else{
                    if(sindex>1){
                        $('.pmark').removeClass('curr');
                        $('.picture').addClass('curr');
                    }else{
                        $('.pmark').removeClass('curr');
                        $('.markBox').find('a').eq(sindex).addClass('curr');
                    }
                }

            },
        }
    });



    //如果是安卓腾讯X5内核浏览器，使用腾讯TCPlayer播放器
    var player = document.getElementById('video'), videoWidth = 0, videoHeight = 0, videoCover = '', videoSrc = '', isTcPlayer = false;
    if(device.indexOf('MQQBrowser') > -1 && device.indexOf('Android') > -1 && player){
        videoSrc = player.getAttribute('src');
        videoCover = player.getAttribute('poster');
        var vid = player.getAttribute('id');

        videoWidth = $('#' + vid).width();
        videoHeight = $('#' + vid).height();

        $('#' + vid).after('<div id="tcPlayer"></div>');
        $('#' + vid).remove();
        document.head.appendChild(document.createElement('script')).src = '//imgcache.qq.com/open/qcloud/video/vcplayer/TcPlayer-2.2.2.js';
        isTcPlayer = true;
    }


    // 图片放大
    var videoSwiper = new Swiper('.videoModal .swiper-container', {pagination: {el:'.videoModal .swiper-pagination',type: 'fraction',},loop: false})
    $(".topSwiper").delegate('.swiper-slide', 'click', function() {
        var imgBox = $('.topSwiper .swiper-slide');
        var i = $(this).index();
        $(".videoModal").addClass('vshow');
        $('.markBox').toggleClass('show');
        videoSwiper.slideTo(i, 0, false);

        //安卓腾讯X5兼容
        if(player && isTcPlayer){
            new TcPlayer('tcPlayer', {
                "mp4": videoSrc, //请替换成实际可用的播放地址
                "autoplay" : false,  //iOS下safari浏览器，以及大部分移动端浏览器是不开放视频自动播放这个能力的
                "coverpic" : videoCover,
                "width" :  videoWidth,  //视频的显示宽度，请尽量使用视频分辨率宽度
                "height" : videoHeight  //视频的显示高度，请尽量使用视频分辨率高度
            });
        }

        return false;
    });

    $(".videoModal").delegate('.vClose', 'tap', function() {
        var video = $('.videoModal').find('video').attr('id');
        if(player && isTcPlayer){
            $('#tcPlayer').html('');
        }else{
            $(video).trigger('pause');
        }

        $(this).closest('.videoModal').removeClass('vshow');
        $('.videoModal').removeClass('vshow');
        $('.markBox').removeClass('show');
        return false;
    });





    // 点击电话
    $('.im_icon .im_iphone').click(function(){
        var t = $(this), phone = t.data('phone');
        $('.phone_frame').show().children('p').text(phone);
        $('.phone_frame').show().children('a').attr('href', 'tel:'+phone);
        $('.desk').show();
    });
    $('.phone_frame .phone_cuo').click(function(){
        $('.phone_frame').hide();
        $('.desk').hide();
    });

    $('.convert ul li').click(function(){
        var t = $(this), index = t.index();
        if(!t.hasClass('active')){
            t.addClass('active');
            t.siblings().removeClass('active');
            $('#community_house_'+index).show().siblings('ul').hide();
            $('.quanbu').addClass('fn-hide');
            $('.quanbu_'+index).removeClass('fn-hide');
        }
    });

    var page = 2, pageSize = 5;

    function getZjuser(type, no){
        var no = no == undefined ? 1 : no;
        if(type == 'again'){
            if(no >= 5){
                $('.quanbu').html('没有更多了').addClass('disabled');
                return;
            }else{
                no++;
                page++;
            }
        }
        $.ajax({
            url: masterDomain + '/include/ajax.php?service=house&action=communityZjUser&id='+pageData.id+'&page='+page+'&pageSize='+pageSize,
            type: 'get',
            dataType: 'jsonp',
            success: function(data){
                if(data && data.state == 100){
                    var list = data.info;
                    var html = [];
                    for(var i = 0; i < list.length; i++){
                        var d = list[i];
                        html.push('<div class="information fn-clear">');
                        html.push('    <div class="im_img"><a href="'+d.url+'"><img src="'+d.photo+'"></a></div>');
                        html.push('    <div class="im_name"><p><span><a href="'+d.url+'">'+d.nickname+'</a></span>'+(d.certify ? '<i class="rz_01"></i>' : '')+(d.flag ? '<i class="rz_02"></i>' : '')+'</p><p>'+d.zjcom+'</p></div>');
                        html.push('    <div class="im_icon">');
                        html.push('        <span class="im_iphone" data-phone="'+d.phone+'"></span>');
                        html.push('    </div>');
                        html.push('</div>');
                    }
                    page++;
                    $('.quanbu').before(html.join(""));
                }else{
                    getZjuser('again', no);
                }
            },
            error: function(){

            }
        })
    }

    $('.quanbu').click(function(){
        if($(this).hasClass('disabled')) return;
        getZjuser();
    })





})