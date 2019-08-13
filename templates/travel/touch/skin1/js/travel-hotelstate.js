$(function(){
    $('.appMapBtn').attr('href', OpenMap_URL);

    //取消订单
    $(".cancel_btn").click(function(){
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
            window.location.href = masterDomain+'/login.html';
            return false;
        }
        
        var t = $(this), id = t.attr("data-id");
        if(id){
            if(confirm(langData['travel'][13][76])){
                $.ajax({
                    url: masterDomain+"/include/ajax.php?service=travel&action=operOrder&oper=cancel&id="+id,
                    type: "GET",
                    dataType: "jsonp",
                    success: function (data) {
                        if(data && data.state == 100){
                            if(device.indexOf('huoniao') > -1) {
                                setupWebViewJavascriptBridge(function (bridge) {
                                    bridge.callHandler('pageClose', {}, function (responseData) {
                                    });
                                });
                            }
                            
                            location.reload;
                        }else{
                            alert(data.info);
                        }
                    },
                    error: function(){
                        alert(langData['siteConfig'][20][183]);
                    }
                });
            }
        }
    });

    //一键续住
    $(".go_btn").unbind("click").click(function (){
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
            window.location.href = masterDomain+'/login.html';
            return false;
        }
        
        var t = $(this), id = t.attr("data-id");
        if(id){
            if(confirm(langData['travel'][13][101])){
                $.ajax({
                    url: masterDomain+"/include/ajax.php?service=travel&action=oneKeyContinued&id="+id,
                    type: "GET",
                    dataType: "jsonp",
                    success: function (data) {
                        if(data && data.state == 100){
                            if(device.indexOf('huoniao') > -1) {
                                setupWebViewJavascriptBridge(function (bridge) {
                                    bridge.callHandler('pageClose', {}, function (responseData) {
                                    });
                                });
                            }
                            location.href = data.info;
                        }else{
                            alert(data.info);
                        }
                    },
                    error: function(){
                        alert(langData['siteConfig'][20][183]);
                    }
                });
            }
        }
    });

});