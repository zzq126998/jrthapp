$(function(){
    //点赞
    $(".commentList").delegate(".btnUp","click", function(){
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
          window.location.href = masterDomain+'/login.html';
          return false;
        }
        var t = $(this), id = t.attr("data-id");
        if(t.hasClass("active")) return false;
        var num = t.find("em").html();
        if( typeof(num) == 'object') {
            num = 0;
        }
        num++;

        $.ajax({
            url: "/include/ajax.php?service=travel&action=dingCommon&id="+id,
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
              t.addClass('active');
              t.find('em').html(num);
            }
        });
    });

    $('.wcmt_send, .submit_top').click(function(){
		var userid = $.cookie(cookiePre+"login_user");
		if(userid == null || userid == ""){
			top.location.href = masterDomain + '/login.html';
			return false;
		}

		var t = $(this);
		if(t.hasClass("loading")) return false;

		var contentObj = t.hasClass("submit_top") ? $(".newcomment") : $(".newcomment1"), content = contentObj.val();

		if(content == ""){
            alert(langData['travel'][4][3]);  //请输入您要评论的内容！
			return false;
		}
		if(huoniao.getStrLength(content) > 200){
			alert(langData['travel'][4][4]);   //超过200个字了！
			return false;
		}

		t.addClass("loading").html(langData['travel'][4][2]+'...');  //提交中
		$.ajax({
			url: "/include/ajax.php?service=travel&action=sendCommon&aid="+newsid+"&id="+0,
			data: "content="+content+"&type="+type,
			type: "POST",
			dataType: "json",
			success: function (data) {
				t.removeClass("loading").html(langData['travel'][4][1]);  //评论
				if(data && data.state == 100){
                    contentObj.val('');
					alert(langData['travel'][4][5]);   //提交成功！
					location.reload();
				}else{
                    alert(data.info);
                }
			}
		});
	})

    var page = 1, pageSize = 10, isload = false;

    $(window).scroll(function(){
        var sct = $(window).scrollTop(), winh = $(window).height(), bh = $('body').height();
        if(!isload && winh + sct + 50 >= bh){
          page ++;
          getComment();
        }
    });

    getComment();

    function getComment(tr){
        isload = true;

        if(tr){
            page = 1;
            $(".hotList ul").html("");
            $(".newList ul").html("");
        }

        $(".newList ul").append('<div class="loading"><img src="'+templets_skin+'images/loading.gif" alt=""><span>'+langData['siteConfig'][20][184]+'</span></div>');//加载中，请稍候
        $(".newList ul .loading").remove();
  
        $.ajax({
          url: '/include/ajax.php?service=travel&action=common&orderby=hot&newsid='+newsid+'&page='+page+'&pageSize='+pageSize+'&typeid='+type,
          type: 'get',
          dataType: 'jsonp',
          success: function(data){
              if(data && data.state == 100){
                  $(".loading").remove();
                  var list = data.info.list;
                  var pageInfo = data.info.pageInfo;
                  var html = [], html1 = [];
                  for(var i = 0; i < list.length; i++){
                      var d = list[i];
                      if(i<2){
                        html.push('<li>');
                        html.push('<div class="imgbox"><img src="'+(d.userinfo.photo ? d.userinfo.photo : (staticPath + 'images/noPhoto_60.jpg') )+'" alt=""></div>');
                        html.push('<div class="rightInfo">');
                        html.push('<h4>'+ d.userinfo.nickname +'</h4>');
                        html.push('<p class="txtInfo">'+ d.content +'</p>');
                        if(d.lower!=null && d.lower!=undefined){
                            html.push('<div class="replyCon">');
                            for(var j =0; j <d.lower.length; j++){
                                html.push('<dl><dt><span class="spColor">'+ d.lower[j].userinfo.nickname +'：</span></dt><dd>'+ d.lower[j].content +'</dd></dl>');
                                if(d.lower[j].lower!=null && d.lower[j].lower!=undefined){
                                    var comdUrl = comdetailUrl.replace("%id%", d.lower[j].id);
                                    for(var k =0; k <d.lower[j].lower.length; k++){
                                        html.push('<dl><dt><span class="spColor">'+ d.lower[j].lower[k].userinfo.nickname +'</span>'+langData['travel'][3][11]+' <span class="spColor">'+ d.lower[j].userinfo.nickname +'：</span></dt><dd>'+ d.lower[j].lower[k].content +'</dd></dl>'); 
                                    }
                                    if(d.lower[j].lower.length>2){
                                        html.push('<a href="'+ comdUrl +'" class="pmore">'+langData['travel'][4][10]+ d.lower[j].lower.length +langData['travel'][4][11]+' ></a>');  //查看全部-条回复
                                    }
                                }
                            }
                            html.push('</div>');
                        }
                        html.push('<div class="rbottom">');
                        html.push('<div class="rtime">'+huoniao.transTimes(d.dtime, 2).replace(/-/g, '.')+'</div>');
                        html.push('<div class="rbInfo">');
                        var comdReplayUrl = comdetailUrl.replace("%id%", d.id);
                        html.push('<a href="'+ comdReplayUrl +'" class="btnReply"> <s></s> '+langData['travel'][3][11]+' </a>');//回复
                        var praise = "";
                        if(d.already == 1){
                            praise = " active";
                        }
                        html.push('<a href="javascript:;" class="btnUp '+praise+'" data-id="'+d.id+'"> <s></s> <em>'+d.good+'</em> </a>');
                        html.push('</div>');
                        html.push('</div>');

                        html.push('</div>');
                        html.push('</li>');
                      }else{
                        html1.push('<li>');
                        html1.push('<div class="imgbox"><img src="'+(d.userinfo.photo ? d.userinfo.photo : (staticPath + 'images/noPhoto_60.jpg') )+'" alt=""></div>');
                        html1.push('<div class="rightInfo">');
                        html1.push('<h4>'+ d.userinfo.nickname +'</h4>');
                        html1.push('<p class="txtInfo">'+ d.content +'</p>');
                        if(d.lower!=null && d.lower!=undefined){
                            html1.push('<div class="replyCon">');
                            for(var j =0; j <d.lower.length; j++){
                                html1.push('<dl><dt><span class="spColor">'+ d.lower[j].userinfo.nickname +'：</span></dt><dd>'+ d.lower[j].content +'</dd></dl>');
                                if(d.lower[j].lower!=null && d.lower[j].lower!=undefined){
                                    var comdUrl = comdetailUrl.replace("%id%", d.lower[j].id);
                                    for(var k =0; k <d.lower[j].lower.length; k++){
                                        html1.push('<dl><dt><span class="spColor">'+ d.lower[j].lower[k].userinfo.nickname +'</span>'+langData['travel'][3][11]+' <span class="spColor">'+ d.lower[j].userinfo.nickname +'：</span></dt><dd>'+ d.lower[j].lower[k].content +'</dd></dl>'); 
                                    }
                                    if(d.lower[j].lower.length>2){
                                        html1.push('<a href="'+ comdUrl +'" class="pmore">'+langData['travel'][4][10]+ d.lower[j].lower.length +langData['travel'][4][11]+' ></a>');   //查看全部-条回复
                                    }
                                }
                            }
                            html1.push('</div>');
                        }
                        html1.push('<div class="rbottom">');
                        html1.push('<div class="rtime">'+huoniao.transTimes(d.dtime, 2).replace(/-/g, '.')+'</div>');
                        html1.push('<div class="rbInfo">');
                        var comdReplayUrl = comdetailUrl.replace("%id%", d.id);
                        html1.push('<a href="'+ comdReplayUrl +'" class="btnReply"> <s></s> '+langData['travel'][3][11]+' </a>');  //回复
                        var praise = "";
                        if(d.already == 1){
                            praise = " active";
                        }
                        html1.push('<a href="javascript:;" class="btnUp '+praise+'" data-id="'+d.id+'"> <s></s> <em>'+d.good+'</em> </a>');
                        html1.push('</div>');
                        html1.push('</div>');
                        html1.push('</div>');
                        html1.push('</li>');
                      }
                  }
                  isload = false;
                  if(page==1){
                    $(".hotList ul").html(html.join(""));
                    if(html1==''){
                        $(".newList ul").html('<div class="loading"><span>'+langData['travel'][4][12]+'</span></div>');  //暂无数据！
                    }else{
                        $(".newList ul").html(html1.join(""));
                    }
                  }else{
                    $(".newList ul").append(html1.join(""));
                  }
                  if(page >= pageInfo.totalPage){
                    isload = true;
                    $(".newList ul .loading").remove();
                    $(".newList ul").append('<div class="loading"><span>'+langData['siteConfig'][18][7]+'</span></div>');  //已经到最后一页了
                  }
              }else{
                  isload = true;
                  $(".loading").remove();
                  $(".newList ul").append('<div class="loading">'+data.info+'</span></div>');
              }
          },
          error: function(XMLHttpRequest, textStatus, errorThrown){
             isload = false;
             $(".hotList ul").html("");
             $(".newList ul").html('<div class="loading"><span>'+langData['siteConfig'][20][184]+'</span></div>');  //加载中，请稍后
          }
        })
    }
	

})

