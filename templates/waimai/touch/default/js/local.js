var history_local = 'wm_history_local';
var map;

if(site_map === "baidu"){
	map = new BMap.Map("map");
}

//提交搜索
function check(){
	var keywords = $.trim($("#keywords").val());

	if (site_map == "baidu") {
      
      var options = {
        onSearchComplete: function(results){
          // 判断状态是否正确
          if (local.getStatus() == BMAP_STATUS_SUCCESS){
            //记录搜索历史
            var history = utils.getStorage(history_local);
            history = history ? history : [];
            if(history && history.length >= 10 && $.inArray(keywords, history) < 0){
              history = history.slice(1);
            }

            // 判断是否已经搜过
            if($.inArray(keywords, history) > -1){
              for (var i = 0; i < history.length; i++) {
                if (history[i] === keywords) {
                  history.splice(i, 1);
                  break;
                }
              }
            }
            history.push(keywords);
            utils.setStorage(history_local, JSON.stringify(history));
            
            var point = results.getPoi(0).point;

            var time = Date.parse(new Date());
            utils.setStorage('waimai_local', JSON.stringify({'time': time, 'lng': point.lng, 'lat': point.lat, 'address': keywords}));
            location.href = 'index.html?local=manual';
          }else{
            alert(langData['siteConfig'][20][431]);
          }
		}
      };
      var local = new BMap.LocalSearch(map, options);
      local.search(keywords);

	}else if (site_map == "google") {

		geocoder = new google.maps.Geocoder();
		geocoder.geocode({'address': keywords}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				var locations = results[0].geometry.location;
				lng = locations.lng(), lat = locations.lat();
				if (lng && lat) {

					//记录搜索历史
					var history = utils.getStorage(history_local);
					history = history ? history : [];
					if(history && history.length >= 10 && $.inArray(keywords, history) < 0){
						history = history.slice(1);
					}

					// 判断是否已经搜过
					if($.inArray(keywords, history) > -1){
						for (var i = 0; i < history.length; i++) {
							if (history[i] === keywords) {
								history.splice(i, 1);
								break;
							}
						}
					}
					history.push(keywords);
					utils.setStorage(history_local, JSON.stringify(history));

					var time = Date.parse(new Date());
					utils.setStorage('waimai_local', JSON.stringify({'time': time, 'lng': lng, 'lat': lat, 'address': keywords}));
					location.href = 'index.html?local=manual';

				}else{
					alert(langData['siteConfig'][20][431]);
				}
			}
		});

	}else if (site_map == "qq") {

	}else if (site_map == "amap") {

		// var geocoder = new AMap.Geocoder;
		// geocoder.getLocation(keywords, function(status, result) {
    //     if (status === 'complete' && result.info === 'OK') {
		// 			var resultStr = "";
		// 			//地理编码结果数组
		// 			var geocode = data.geocodes;
		// 			for (var i = 0; i < geocode.length; i++) {
		// 				 //拼接输出html
		// 				 resultStr += geocode[i].location.getLng() + ", " + geocode[i].location.getLat();
		// 			}
		// 			alert(resultStr);
    //     }
    // });

	}


}


$(function(){

	//加载历史记录
	var hlist = [];
	var history = utils.getStorage(history_local);
	if(history){
		history.reverse();
		for(var i = 0; i < history.length; i++){
			hlist.push('<li><a href="javascript:;">'+history[i]+'</a></li>');
		}
		$('.history ul').html(hlist.join(''));
		$('.all_shan, .history').show();
	}

	//点击历史记录
	$('.history a').bind('click', function(){
		var t = $(this), txt = t.text();
		$('#keywords').val(txt);
		check();
	});

	//清空
	$('.all_shan').bind('click', function(){
		utils.removeStorage(history_local);
		$('.all_shan, .history').hide();
		$('.history ul').html('');
	});

	// 点击当前位置记录历史记录
	$(".relocal a").click(function(){
		var txt = $(this).text();
		$('#keywords').val(txt);
		check();
	})


	//定位当前位置
	$('.click').bind('click', function(){
		location();
	});

	location();

	function location(){
		$('.relocal a').text(langData['siteConfig'][7][4]+'..');
		HN_Location.init(function(data){
			if (data == undefined || data.address == "" || data.name == "" || data.lat == "" || data.lng == "") {
				$('.relocal a').html(''+langData['siteConfig'][27][136]+'');
				$('.loading').html(''+langData['siteConfig'][27][137]+'').show();
			}else{
				var lng = data.lng, lat = data.lat, name = data.name, page = 1;
				var time = Date.parse(new Date());
				$('.relocal a').html(name);
				utils.setStorage('waimai_local', JSON.stringify({'time': time, 'lng': lng, 'lat': lat, 'address':name}));
			}
		})
	}

	if (site_map == "baidu") {
		var autocomplete = new BMap.Autocomplete({input: "keywords"});
		autocomplete.addEventListener("onconfirm", function(e) {
			console.log(e)
			var _value = e.item.value;
			myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
			$('#keywords').val(myValue);
			check();
		});
	}else if (site_map == "google") {

		var input = document.getElementById('keywords');
    var places = new google.maps.places.Autocomplete(input, {placeIdOnly: true});

		google.maps.event.addListener(places, 'place_changed', function () {
        var address = places.getPlace().name;
				$('#keywords').val(address);
				check();
    });

	}else if (site_map == "qq") {

	}else if (site_map == "amap") {
		// AMap.plugin('AMap.Autocomplete',function(){//回调函数
		//     var autoOptions = {
		//         city: "", //城市，默认全国
		//         input: "keywords"//使用联想输入的input的id
		//     };
		//     var autocomplete= new AMap.Autocomplete(autoOptions);
		//
		//     AMap.event.addListener(autocomplete, "select", function(data){
		// 			check();
		//     });
		// });
	}

});
