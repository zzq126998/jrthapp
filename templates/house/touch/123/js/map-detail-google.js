$(function () {
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
    var map,centerPoint;
    var markers = [];

    init();
    function init(){
        centerPoint = new google.maps.LatLng(parseFloat(pageData.lat), parseFloat(pageData.lng));

        map = new google.maps.Map(document.getElementById('map-wrapper'), {
            zoom: 14,
            center: centerPoint,
            zoomControl: true,
            mapTypeControl: false,
            streetViewControl: false,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
            }
        });

        initNav(searchList);
        addcenMarker();
    }

    var centerwindow = new google.maps.InfoWindow({
        content: '<div style="font-weight: 700; font-size: 16px;">' + pageData.title + '</div>' + '<p style="line-height: 3em;">详细地址：' + pageData.address + '</p>'
    });
    // 添加中心点
    function addcenMarker() {
        var marker = new google.maps.Marker({
            position: centerPoint,
            map: map,
            title: pageData.panName,
            icon: cenicon,
        });
        // centerwindow.open(map, marker);
        // 中心点点击事件
        marker.addListener('click', function() {
            centerwindow.open(map, marker);
        });
    }

    infowindow = new google.maps.InfoWindow();

    //添加分类列表
    function initNav(arr) {
        var projectName = $(".periphery").attr("data-project");
        arr.forEach(function(item, index) {
            var value = item.name;
            var order = item.order;

            var curr = index == 0 ? ' active' : '';
            $(".periphery .nav-wrapper").append('<li class="nav-item post_ulog'+curr+'" data-evtid="10184" data-ulog="xinfangm_click=10158_' + order + '" data-type="' + value + '" data-index="' + index + '">' + value + "<span></span></li>");
            nearBySearch(value, index, 0);
        });
    }

    $('.nav-wrapper').on('click', '.nav-item',function () {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var type = $(this).data('type');
        nearBySearch(type, $(this).index(), 1);
    });
    // 创建标记点
    function createMarker(place) {
        // console.log(place);
        var marker = new google.maps.Marker({
            map: map,
            position: place.geometry.location,
            icon:iconimg,
        });
        markers.push(marker);
        var infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent( place.name);
            infowindow.open(map, this);
        });
    }

    function setMapOnAll(map){
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }
    function clearMarkers() {
        setMapOnAll(null);
    }
    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }

    //周边查找
    function nearBySearch(type,index,view) {
        deleteMarkers();
        var request = {
            location: centerPoint,
            radius: '2000',
            name:type,
        };

        service = new google.maps.places.PlacesService(map);

        service.nearbySearch(request, function(results, status) {

            var li = $(".periphery .nav-wrapper").find('li:eq(' + index + ')');
            // console.log(li);
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    // console.log(results[i]);
                    if(index == 0 || view == 1) {
                        createMarker(results[i]);
                    }
                }
                var count = results.length;  //判断类别导航，如果有数据则添加数量，如果没有数据则隐藏该类别
                    if (count > 0) {
                        // li.find('span').html('(' + count + ')');
                    } else {
                        li.hide();
                    }


            }else {
                li.hide();
                $('.loading').hide();
                $("#mapListContainer").append('<div class="load">很抱歉，该配套下无相关内容，请查看其它配套</div>');
            }
        });
    }


    
});