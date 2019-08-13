$(function(){
    //点赞
    $(".commentBox").delegate(".btnUp","click", function(){
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

        var url = '/include/ajax.php?service=info&action=dingCommon&id=' + id;
        if(type==1){
            url = '/include/ajax.php?service=info&action=shopdingCommon&id=' + id;
        }

        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
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
            alert("请输入您要评论的内容！");
			return false;
		}
		if(huoniao.getStrLength(content) > 200){
			alert("超过200个字了！");
			return false;
		}

    t.addClass("loading").html('提交中...');

    var url = '/include/ajax.php?service=info&action=sendCommon&aid=' + newsid + "&id=" + comdetailid;
    if(type==1){
        url = '/include/ajax.php?service=info&action=shopsendCommon&aid=' + newsid + "&id=" + comdetailid;
    }

		$.ajax({
			url: url,
			data: "content="+content,
			type: "POST",
			dataType: "json",
			success: function (data) {
				t.removeClass("loading").html('评论');
				if(data && data.state == 100){
                    contentObj.val('');
					alert('提交成功！');
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

    getComment(1);

    function getComment(tr){
        isload = true;

        if(tr){
            page = 1;
            $(".commentList ul").html("");
        }

        $(".commentList ul").append('<div class="loading"><img src="'+templets_skin+'images/loading.gif" alt=""><span>'+langData['siteConfig'][20][184]+'</span></div>');
        $(".commentList ul .loading").remove();

      var url = '/include/ajax.php?service=info&action=getCommonList&fid=' +comdetailid+'&page='+page+'&pageSize='+pageSize;
      if(type==1){
        url = '/include/ajax.php?service=info&action=shopgetCommonList&fid=' +comdetailid+'&page='+page+'&pageSize='+pageSize;
      }
  
        $.ajax({
          url: url,
          type: 'get',
          dataType: 'json',
          success: function(data){
              if(data && data.state == 100){
                  $(".loading").remove();
                  var list = data.info.list;
                  var pageInfo = data.info.pageInfo;
                  var html = [];
                  for(var i = 0; i < list.length; i++){
                      var d = list[i];
                      html.push('<li>');
                      html.push('<div class="imgbox"><img src="'+(d.userinfo.photo ? d.userinfo.photo : (staticPath + 'images/noPhoto_60.jpg') )+'" alt=""></div>');
                      html.push('<div class="rightInfo">');
                      html.push('<h4>'+ d.userinfo.nickname +'</h4>');
                      html.push('<p class="txtInfo">'+ d.content +'</p>');
                      html.push('<div class="rbottom">');
                      html.push('<div class="rtime">'+ huoniao.transTimes(d.dtime, 2).replace(/-/g, '.') +'</div>');
                      html.push('<div class="rbInfo">');
                      var comdUrl = comdetailUrl.replace("%id%", d.id);
                      html.push('<a href="'+ comdUrl +'" class="btnReply"> <s></s> 回复 </a>');
                      if(d.already==1){
                        html.push('<a href="javascript:;" data-id="'+ d.id +'" class="btnUp active"> <s></s> <em>'+ d.good +'</em> </a>');
                      }else{
                        html.push('<a href="javascript:;" data-id="'+ d.id +'" class="btnUp"> <s></s> <em>'+ d.good +'</em> </a>');
                      }
                      html.push('</div>');
                      html.push('</div>');
                      html.push('</div>');
                      html.push('</li>');
                  }
                  isload = false;
                  
                  $(".commentList ul").append(html.join(""));

                  if(page >= pageInfo.totalPage){
                    isload = true;
                    $(".commentList ul .loading").remove();
                    $(".commentList ul").append('<div class="loading"><span>'+langData['siteConfig'][18][7]+'</span></div>');
                  }
              }else{
                  isload = true;
                  $(".loading").remove();
                  $(".commentList ul").append('<div class="loading"><img src="'+templets_skin+'images/loading.gif" alt=""><span>'+data.info+'</span></div>');
              }
          },
          error: function(XMLHttpRequest, textStatus, errorThrown){
             isload = false;
             $(".commentList ul").html('<div class="loading"><span>'+langData['siteConfig'][20][184]+'</span></div>');
          }
        })
    }
	

})

