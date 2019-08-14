$(function(){
    //提交
    $('#right_btn').click(function(){
        var userid = $.cookie(cookiePre+"login_user");
        if(userid == null || userid == ""){
            window.location.href = masterDomain+'/login.html';
            return false;
        }

        var t = $(this);
        var people  = $('#people').val();
        var contact = $('#contact').val();

        var tel_d = /^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/;
        var id_d = /^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/;
        if(people==''){
            alert(langData['travel'][8][63]);  //请输入联系人
            return 0;
        }else if(contact==''){
            alert(langData['travel'][7][60]);//请输入手机号
            return 0;
        }else if(!contact.match(tel_d)){
            alert(langData['travel'][7][61]);   //请输入正确的手机号
            return 0;
        }

        var data = [];
        data.push('proid=' + pageData.id);
        data.push('procount=1');
        data.push('people=' + $("#people").val());
        data.push('contact=' + $("#contact").val());

        $.ajax({
            url: masterDomain + '/include/ajax.php?service=education&action=deal',
            data: data.join("&"),
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
                t.removeClass("disabled").html(langData['shop'][1][8]);
            }
        });

    });
});