$(function(){

    var lens = $(".NavList li").length;
    if(lens<=11){
        $(".moreList").hide();
    }else{
        $(".moreList").show();
    }

    $(".NavList").hover(function(){
        var t = $(this);

        t.find("li:not(.moreList)").show();
        t.find("li").each(function(){
            var index = $(this).index();
            if(index == 20){
                $(this).find(".sub-category").hide();
            }
        });
    });


    $(".NavList li").hover(function(){
		var t = $(this);
		if(!t.hasClass("active")){
			t.parent().find("li").removeClass("active");
			t.addClass("active");
		}
	}, function(){
		$(this).removeClass("active");
	});

	$(".more_list li").hover(function(){
		$(this).find('.sub-category').show();
	},function(){
		$(this).find('.sub-category').hide();
	});


	// 焦点图
    $(".slideBox1").slide({titCell:".hd ul",mainCell:".bd .slideobj",effect:"leftLoop",autoPlay:true,autoPage:"<li></li>"});

	// 最新发布
	$(".ViewBox").slide({mainCell:".NewList",effect:"left",autoPlay:false,vis:4,prevCell:".prev",nextCell:".next",scroll:2,pnLoop:false});



	// 电话
    $('.recomtop,.newshop,.c_info, .main_box').delegate('.recom_box,.telphone', 'hover', function(event) {
        var type = event.type;
        if(type == "mouseenter"){
            $(this).find('.box_collect').css("display","block");
            $(this).next('.c_telphone').css("display","block");
        }else{
            $(this).find('.box_collect').css("display","none");
            $(this).next('.c_telphone').css("display","none");
        }
    });

	// 焦点图
    // var swiperNav = [], mainNavLi = $('.slideBox2 .bd').find('li');
    // for (var i = 0; i < mainNavLi.length; i++) {
    //   swiperNav.push($('.slideBox2 .bd').find('li:eq('+i+')').html());
    //   console.log(swiperNav)
    // }
    // var liArr = [];
    // for(var i = 0; i < swiperNav.length; i++){
    // 	console.log(swiperNav.length)
    //   liArr.push(swiperNav.slice(i, i + 6).join(""));
    //    console.log(liArr)
    //   i += 3;
    // }
    // $('.slideBox2 .bd').find('ul').html('<li>'+liArr.join('</li><li>')+'</li>');
    $(".slideBox2").slide({titCell:".hd ul", mainCell:".bd ul",effect:"leftLoop", autoPage:"<li></li>",autoPlay: true});

    $('.recomtop,.newshop,.main_box').delegate('.box_collect', 'click', function(event) {
		var t = $(this), type = t.hasClass("collected") ? "del" : "add";
		var detail_id = t.attr("data-id");
		var coll_type = t.attr("data-type");
            $.ajax({
                url : "/include/ajax.php?service=member&action=collect",
                data : {
                    'type' : type,
                    'module' : 'info',
                    'temp' : coll_type,
                    'id' : detail_id,
                },
                type : 'get',
                dataType : 'json',
                success : function (data) {
                    if(data.state == 100){
                        if(data.info == 'has'){
                            alert("您已收藏");
                        }else if(data.info == 'ok'){
                            if(type == 'del'){
                                t.removeClass('collected');
                            }else{
                                t.addClass('collected');
                            }
                        }
                    }else{
                        alert("请登录！");
                        window.location.href = masterDomain + '/login.html';
                    }


                }
            })

	});

   /* // 查看更多
    $(".bt_more").bind('click', function () {
    	// 获取分类
		var last_type = $(".info_typeid:last").attr("data-id");
		var typeid = last_type*1 + 3;

        var parent_name;
        var typename_html = '';
		$.ajax({
			url : masterDomain + '/include/ajax.php?service=info&action=type&type=' +typeid,
            data : '',
            dataType : 'json',
            type : 'GET',
			success : function (data) {
                if(data.state == 100){
                	var type_list = data.info;
                	for(var i=0; i<type_list.length;i++){
                        var typename_link = $(".btn_more:last").attr("href").replace(last_type+'.html', type_list[i].id + '.html');
                        typename_html += '<li><a href="'+typename_link+'">'+type_list[i].typename+'</a></li>'
					}
					$.ajax({
                        url : masterDomain + '/include/ajax.php?service=info&action=type&type=0',
                        data : '',
                        dataType : 'json',
                        type : 'GET',
						success : function (data) {
                        	if(data.state == 100){
                                parent_name = getParentName(data.info, typeid);
                                //获取list
                                $.ajax({
                                    url : masterDomain + '/include/ajax.php?service=info&action=ilist_v2',
                                    data : {
                                        'orderby' : 1,
                                        'pageSize' : 5,
                                        'typeid' : typeid,
                                        'page' : 1,
                                    },
                                    dataType : 'json',
                                    type : 'GET',
                                    success : function (data) {
                                        if(data.state == 100){
                                            var html = '';
                                            var list = data.info.list;
                                            var len = list.length;

                                            var look_more_link = $(".btn_more:last").attr("href");
                                            look_more_link = look_more_link.replace(last_type+'.html', typeid + '.html');
                                            var fabu_link = $(".btn_fabu:last").attr("href");
                                            html = '<div class="wrap c_info">' +
                                                '<div class="public_top fn-clear">' +
                                                '<div class="fn-left l">' +
                                                '<span class="info_typeid" data-id="'+typeid+'">'+parent_name+'</span>' +
                                                '</div>' +
                                                '<div class="fn-right r">' +
                                                '<a href="'+look_more_link+'" class="a_btn1 btn_more">查看更多</a>' +
                                                '<a href="'+fabu_link+'" class="a_btn2 btn_fabu">我要发布</a>' +
                                                '</div>' +
                                                '</div>' +
                                                '<div class="list_box">' +
                                                '<ul class="fn-clear">' +
                                                	typename_html +
                                                '</ul>' +
                                                '</div>' +
                                                '<div class="recom_main fn-clear">';

                                            for (var i = 0; i < len; i++){
                                                var video_fengmian = '';
                                                if(list[i].is_video){
                                                    video_fengmian = '<div class="cover_play"><img src="'+templatePath+'images/Icon_play.png" alt=""></div>';
												}
												var is_phone = '';
                                                if(list[i].member.phone){
                                                    is_phone = '<img src="'+templatePath+'images/Icon_tel.png" alt="">'
                                                }
                                                var is_collected = '';
                                                if(list[i].collect){
                                                    is_collected = 'collected';
                                                }
                                                var price_ = '';
                                                if(list[i].price_switch == 0){
	                                                if(list[i].price != 0){
	                                                    price_ = '<p class="info_price"><b>¥</b>'+list[i].price+'</p>';
	                                                }else{
	                                                    price_ = '<p class="info_price">价格面议</p>';
	                                                }
                                                }
                                                var litpic = list[i].litpic != "" && list[i].litpic != undefined ? huoniao.changeFileSize(list[i].litpic, "small") : "/static/images/404.jpg";

												html += '<div class="recom_box">' +
                                                    '<div class="box_collect '+is_collected+'" data-id="'+list[i].id+'" data-type="detail"><i></i></div>' +
                                                    '<a href="'+list[i].url+'">' +
                                                    '<div class="recom_img">' +
                                                    '<img src="'+litpic+'" alt="">' +
                                                    	video_fengmian +
                                                    '</div>' +
                                                    '<div class="recom_info">' + price_ +
                                                    //'<p class="info_price"> '+price_+'</p>' +
                                                    '<p class="m_info">'+list[i].title+'</p>' +
                                                    '<div class="info_address fn-clear">' +
                                                    '<span class="fn-left location">'+list[i].address[2]+'/'+list[i].address[1]+'</span>' +
                                                    '<span class="fn-right telphone" data-tel="'+list[i].member.phone+'">' +
                                                        is_phone +
                                                    '</span>' +
                                                    '<div class="c_telphone">'+list[i].member.phone+' <i></i></div>' +
                                                    '</div>' +
                                                    '</div>' +
                                                    '</a>' +
                                                    '</div>';
                                            }
                                            html += '</div>';
                                            $(".main_box").find(".bt_more").before(html);
                                        }else{
                                                $(".bt_more").hide();

                                        }
                                    }
                                })

							}
                        }
					})

				}else{
                    $(".bt_more").hide();
                }

            },
		})


    })*/

	function getParentName(data, index) {
    	// console.log(data)
    	// console.log(index)
    	var len = data.length;
		for(var i = 0; i < len; i++){
			if(data[i].id == index){
				return data[i].typename;
			}
		}
    }

    // 换一批
	$(".btn_change").bind('click', function () {
		var type = $(this).attr("data-type");
		if(type == 'sj'){
			var page = $(".sz_page").val();
			page++;
			$.ajax({
                url : masterDomain + '/include/ajax.php?service=info&action=shopList&orderby=1&pagesize=4&page='+page,
                data : '',
                dataType : 'json',
                type : 'GET',
				success : function (data) {
					if(data.state == 100){
						var html = '';
						var list = data.info.list;
						var len = list.length;
						for (var i = 0; i<len; i++){
							var video_htm = '';
							if(list[i].video){
                                video_htm = '<div class="cover_play">' +
                                '<img src="'+templatePath+'images/Icon_play.png" alt="">' +
                                '</div>'
							}
							var top_htm = '';
                            if(list[i].top){
                                top_htm = '<span class="m_top">置顶</span>'
                            }
                            var tu_htm = '';
                            if(list[i].video == ''){
                                tu_htm = '<span class="m_pic"><em>'+list[i].pcount+'</em>图</span>'
                            }
                            var is_collected = '';
                            if(list[i].collect){
                                is_collected = 'collected';
                            }

                            var litpic = list[i].pic[0] != "" && list[i].pic[0] != undefined ? huoniao.changeFileSize(list[i].pic[0], "small") : "/static/images/404.jpg";

							html += '<div class="recom_box">' +
                                '<div class="box_collect '+is_collected+'" data-type="detail" data-id="'+list[i].id+'"><i></i></div>' +
                                '<a href="'+list[i].url+'">' +
                                '<div class="recom_img">' +
                                '<img src="'+litpic+'" alt="">' +
                               	 	video_htm +
                                '<div class="box_mark">' +
                                	top_htm +
                                	tu_htm +
                                '</div>' +
                                '</div>' +
                                '<div class="recom_info">' +
                                '<h3>'+list[i].user.nickname+'</h3>' +
                                '<div class="box_mark fn-clear">' +
                                '<span class="m_mark mark1">商家</span>' +
                                '<span class="m_mark mark2">'+list[i].typename+'</span>' +
                                '</div>' +
                                '<div class="comment_box fn-clear">' +
                                // '<div class="star_box"><i style="width: 80%;"></i></div>' +
                                '<span>'+list[i].shop_common+'评论</span>' +
                                '</div>' +
                                '<div class="pos_box fn-clear">' +
                                '<span class="pos fn-left">'+list[i].address_[0] + list[i].address_[1]+'</span>' +
                                // '<span class="fn-right"><i class="ipos"></i>2.3km</span>' +
                                '</div>' +
                                '<div class="tel_box"><i></i>'+list[i].tel+'</div>' +
                                '</div>' +
                                '</a>' +
                                '</div>';
						}
						$(".sj_list").html();
						$(".sj_list").html(html);
                        $(".sz_page").val(page);
					}
                }
			})
		}else if (type == 'zd'){
            var page = $(".zd_page").val();
            page++;
            $.ajax({
                url : masterDomain + '/include/ajax.php?service=info&action=ilist_v2&orderby=1&pageSize=5&top=1&page='+page,
                data : '',
                dataType : 'json',
                type : 'GET',
                success : function (data) {
                    if(data.state == 100){
                        var html = '';
                        var list = data.info.list;
                        var len = list.length;
                        for (var i = 0; i<len; i++){
                            var video_htm = '';
                            if(list[i].video){
                                video_htm = '<div class="cover_play">' +
                                    '<img src="'+templatePath+'images/Icon_play.png" alt="">' +
                                    '</div>'
                            }
                            var tu_htm = '';
                            if(list[i].video == ""){
                                tu_htm = '<span class="m_pic"><em>'+list[i].pcount+'</em>图</span>'
                            }
                            var shop_htm = '';
                            if(list[i].is_shop){
                            	shop_htm = '<span class="m_shop">商家</span>'
                            }else{
                                shop_htm = '<span class="m_geren">个人</span>'
                            }
                            var is_phone = '';
                            if(list[i].member.phone){
                                is_phone = '<img src="'+templatePath+'images/Icon_tel.png" alt="">'
                            }
                            var is_collected = '';
                            if(list[i].collect){
                                is_collected = 'collected';
                            }
                            var price_ = '';
                            if(list[i].price_switch == 0){
	                            if(list[i].price != 0){
	                                price_ = '<p class="info_price"><b>¥</b>'+list[i].price+'</p>';
	                            }else{
	                                price_ = '<p class="info_price">面议</p>';
	                            }
                            }

                            html += '<div class="recom_box">' +
                                '<div class="box_collect '+is_collected+'" data-id="'+list[i].id+'" data-type="detail"><i></i></div>' +
                                '<a href="'+list[i].url+'">' +
                                '<div class="recom_img">' +
                                '<img src="'+list[i].litpic+'" alt="">' +
                                video_htm +
                                '<div class="box_mark">' +
                                '<span class="m_top">置顶</span>' +
                                shop_htm +
                                tu_htm +
                                '</div>' +
                                '</div>' +
                                '<div class="recom_info">' + price_ +
                                //'<p class="info_price">'+price_+'</p>' +
                                '<p class="m_info">'+list[i].title+'</p>' +
                                '<div class="info_address fn-clear">' +
                                '<span class="fn-left location">'+list[i].address[2]+'/'+list[i].address[1]+'</span>' +
                                '<span class="fn-right telphone" data-tel="'+list[i].member.phone+'">' +
                                    is_phone +
                                '</span>' +
                                '<div class="c_telphone">'+list[i].member.phone+' <i></i></div>' +
                                '</div>' +
                                '</div>' +
                                '</a>' +
                                '</div>';

                        }
                        $(".zd_list").html("");
                        $(".zd_list").html(html);
                        $(".zd_page").val(page);
                    }
                }
            })
		}
    })








})
