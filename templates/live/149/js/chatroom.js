var chatLib, AccessKeyID, userinfo, chatToken, chatServer;
var isload = false, page = 1, pageSize = 20, totalPage = 1, stop = 0, time = Math.round(new Date().getTime()/1000).toString();

$(function(){

    // var room = getQueryString('room');

    //im sdk
    var kumanIMLib = function (wsHost) {

        var lib = this;

        this.timeOut = 30000;  // 每30秒发送一次心跳
        this.timeOutObj = null;

        // 重置心跳
        this.reset = function(){
            clearTimeout(this.timeOutObj);
            lib.start();
        }

        // 启动心跳
        this.start = function(){
            lib.timeOutObj = setInterval(function(){
                lib.socket.send('HeartBeat');
            }, lib.timeOut);
        }

        // 初始化连接
        if (window['WebSocket']) {
            this.socket = new WebSocket(wsHost);
            //this.socket.onopen = this.evt.onopen;  // 连接成功

            // 关闭
            this.socket.onclose = function(){
                lib.socket = new WebSocket(lib.socket.url);
            };

            // 异常
            this.socket.onerror = function(){
                this.close();
            };

            // 收到消息
            this.socket.onmessage = function (evt) {
                lib.reset();  //重置心跳
                var msg = JSON.parse(evt.data);
                switch (msg.type) {
                    case "init":
                        // console.log(msg.info.content);
                        break;
                    default:
                        if(userinfo['uid'] != msg.info.from && msg.info.type == 'chat'){
                            createEle(msg, '', 1, lib);
                        }
                        break;
                }

            };

        } else {
            alert('您的浏览器不支持WebSockets.');
            return false;
        }

        this.start();  //启动心跳检测

    };


    //初始化
    if(room){
        $.ajax({
            url: '/include/ajax.php?service=siteConfig&action=getImToken',
            type: 'post',
            dataType: 'json',
            success: function(data){
                if(data.state == 100){
                    var info = data.info;
                    userinfo = info;
                    chatToken = info.token;
                    chatServer = info.server;
                    AccessKeyID = info.AccessKeyID;

                    $("#welcome").html("你好：" + userinfo['name']);

                    //创建连接
                    chatLib = new kumanIMLib(chatServer + "?AccessKeyID=" + AccessKeyID + "&token=" + chatToken + "&type=chat");

                    loadMessage();

                    //加入聊天室
                    var data = {
                        mark: 'chatRoom' + room,
                        from: chatToken,
                    }
                    $.ajax({
                        url: '/include/ajax.php?service=siteConfig&action=joinChatRoom',
                        data: data,
                        type: 'post',
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                        },
                        error: function(){

                        }
                    });

                }else{
                    // alert(data.info);
                    console.log(data.info);

                }
            },
            error: function(){
                alert('网络错误，初始化失败！');
            }
        });
    }


    //创建历史对话
    var appendLog = function (ele, item, type, time) {
        var log = $('#'+ele);

        if(log.find('.item').size() == 0){
            log.append('<div class="timeSplit" data-time="'+time+'">'+getDateDiff(time)+'</div>');
        }else{
            if(type != 'prepend'){
                var lastTime = parseInt(log.find('.item:last').attr('data-time'));
                var timeCalcu = time-lastTime;
            }else{
                var lastTime = parseInt(log.find('.timeSplit:eq(0)').attr('data-time'));
                var timeCalcu = lastTime-time;
            }

            if(timeCalcu > 300){
                if(type != 'prepend'){
                    log.append('<div class="timeSplit" data-time="'+time+'">'+getDateDiff(time)+'</div>');
                }else{
                    log.prepend('<div class="timeSplit" data-time="'+time+'">'+getDateDiff(time)+'</div>');
                }
            }
        }

        if(type != 'prepend'){
            log.append(item);
            log.scrollTop(log[0].scrollHeight - log.innerHeight());
        }else{
            log.prepend(item);
            stop += log.find('.item:eq(0)').outerHeight();
            log.scrollTop(stop);
        }
    }

    // 业务层
    var createEle = function(data, type, newMessage, lib){
        var from = data.info.from;
        var sf = false;
        //拼接对话
        var imghead1 = '<div class="user-img fn-left"><img src="'+data.info.photo+'"></div>';
        var userName = '<p class="user-name">'+ data.info.name+':</p>';
        var fromUser ='<div class="content">'+imghead1+userName+'</div>' ;


        var imghead2 ='';
        if (from == userinfo['uid']) {
            imghead2 = '<div class="user-img fn-left"><img src="'+userinfo['photo']+'"></div>';
            fromUser = '<p class="user-name">你:</p>';
            sf = true;
        }
        var text = '<div class="content">'+imghead2+fromUser+'</div>' ;

        // 文本
        if(data.type == "text"){
            if(data.info.content.indexOf("__L__:") != -1){//礼物
                var txt = '<div class="user-txt">收一个礼物，请在手机上查看</div>';
            }else if(data.info.content.indexOf("__H__:") != -1){//红包
                var txt = '<div class="user-txt">收一个红包，请在手机上查看</div>';
            }else{
                var txt = '<div class="user-txt">'+ data.info.content+'</div>';
            }
            text += txt;
        }

        // 图片
        if(data.type == 'image'){
            content = data;
            text += '<div class="img-box"><img src="/include/attachment.php?f='+data.info.content.url+'" /></div>';
        }
        var item = '<div class="item fn-clear '+(sf ? 'others' : 'others')+'" data-time="'+data.info.time+'"'+(sf ? ' style="text-align: left;"' : '')+'>'+text+'</div>';
        appendLog('mine', item, type, data.info.time);

    };




    //发消息
    $("#send").bind('click', function(event) {
        var msg = $("#msg").html();

        msg = msg.trim();
        if (! msg) {
            return false;
        }

        if (msg == '') {
            alert("消息内容为空");
            return false;
        }

        var time = Math.round(new Date().getTime()/1000).toString();
        var data = {
            content: msg,
            contentType: "text",
            mark: 'chatRoom' + room,
            from: chatToken,
            time: time,
        }
        $.ajax({
            url: '/include/ajax.php?service=siteConfig&action=sendImChatRoom',
            data: data,
            type: 'post',
            dataType: 'json',
            success: function(data){
                chatLib.reset();
            },
            error: function(){

            }
        });

        data = {
            type: data.contentType,
            info: {
                content: msg,
                mark: 'chatRoom' + room,
                from: userinfo['uid'],
                name: userinfo['name'],
                photo: userinfo['photo'],
                time: time
            }
        }
        createEle(data);
        $('#msg').html('');//清空消息
    });
    if($("#msg").length>0){
        document.getElementById("msg").onkeyup = function(event) {
            if (event.keyCode == "13") {
                $("#send").trigger("click");
            }
        };
    }


    //加载聊天记录
    function loadMessage(type){

        if(isload || page > totalPage) return false;
        isload = true;

        $.ajax({
            url: '/include/ajax.php?service=siteConfig&action=getImChatRoomLog',
            data: {from: chatToken, mark: "chatRoom" + room, page: page, pageSize: pageSize, time: time},
            type: 'post',
            dataType: 'json',
            success: function(data){

                if(data && data.state == 100){
                    data = data.info;
                    var pageInfo = data.pageInfo;
                    var list = data.list;

                    if(page == 1){
                        list.reverse();
                    }

                    totalPage = pageInfo.totalPage;

                    for(var i = 0; i < list.length; i++){
                        var data = {
                            type: list[i].type,
                            info: {
                                content: list[i].info.content,
                                from: list[i].info.uid,
                                name: list[i].info.name,
                                photo: list[i].info.photo,
                                type: "person",
                                time: list[i].info.time
                            }
                        }
                        createEle(data, type);
                    }
                    setTimeout(function(){
                        isload = false;
                    }, 1000);

                    //最后一页显示时间
                    if(page > 1 && page == pageInfo.totalPage){
                        var time = parseInt($('#mine').find('.item:eq(0)').attr('data-time'));
                        $('#mine').prepend('<div class="timeSplit" data-time="'+time+'">'+getDateDiff(time)+'</div>');
                    }

                    page++;

                }else{
                    console.log(data.info);
                    isload = false;
                }
            },
            error: function(){
                console.log('network error');
                isload = false;
            }
        });

    }

    $('#mine').scroll(function() {
        var scroH = $(this).scrollTop();  //滚动高度
        stop = scroH;
        if(scroH < 50 && !isload){  //距离顶部大于100px时
            loadMessage('prepend');
        }
    });



    function getDateDiff(theDate){
        var nowTime = (new Date());    //当前时间
        var date = (new Date(theDate*1000));    //当前时间
        var today = new Date(nowTime.getFullYear(), nowTime.getMonth(), nowTime.getDate()).getTime(); //今天凌晨
        var yestday = new Date(today - 24*3600*1000).getTime();
        var is = date.getTime() < today && yestday <= date.getTime();

        var Y = date.getFullYear(),
            M = date.getMonth() + 1,
            D = date.getDate(),
            H = date.getHours(),
            m = date.getMinutes(),
            s = date.getSeconds();
        //小于10的在前面补0
        if (M < 10) {
            M = '0' + M;
        }
        if (D < 10) {
            D = '0' + D;
        }
        if (H < 10) {
            H = '0' + H;
        }
        if (m < 10) {
            m = '0' + m;
        }
        if (s < 10) {
            s = '0' + s;
        }

        if(is){
            return '昨天 ' + H + ':' + m;
        }else if(date > today){
            return H + ':' + m;
        }else{
            return Y + '-' + M + '-' + D + '&nbsp;' + H + ':' + m;
        }
    }

    function transTimes(timestamp, n){
        update = new Date(timestamp*1000);//时间戳要乘1000
        year   = update.getFullYear();
        month  = (update.getMonth()+1<10)?('0'+(update.getMonth()+1)):(update.getMonth()+1);
        day    = (update.getDate()<10)?('0'+update.getDate()):(update.getDate());
        hour   = (update.getHours()<10)?('0'+update.getHours()):(update.getHours());
        minute = (update.getMinutes()<10)?('0'+update.getMinutes()):(update.getMinutes());
        second = (update.getSeconds()<10)?('0'+update.getSeconds()):(update.getSeconds());
        if(n == 1){
            return (year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second);
        }else if(n == 2){
            return (year+'-'+month+'-'+day);
        }else if(n == 3){
            return (month+'-'+day);
        }else if(n == 4){
            return (hour+':'+minute);
        }else{
            return 0;
        }
    }


    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return null;
    }



    //选择表情
    var memerySelection;
    $('body').delegate('.live-emoj_btn','click',function(e){
        $('.live-emoji-hide').toggleClass('live-show');
        $(document).one('click',function(){
            $('.live-emoji-hide').removeClass('live-show');
        });
        e.stopPropagation();  //停止事件传播
    });

    // 选择表情
    $('body').delegate('.live-emoji-list li','click',function(e){
        set_focus($('#msg'))
        memerySelection = window.getSelection();
        $('.live-big_panel.live-show .live-textarea').focus();
        var t = $(this),emojsrc = t.find('img').attr('src');

        pasteHtmlAtCaret('<img src="'+emojsrc+'" />');
        $('.live-emoji-hide').removeClass('live-show');
        $(document).one('click',function(){
            $('.live-replyto_box').animate({'height':'0'},150);
        });
        e.stopPropagation();  //停止事件传播

    });

    //根据光标位置插入指定内容

    function pasteHtmlAtCaret(html) {
        var sel, range;
        if (window.getSelection) {
            sel = memerySelection;

            if (sel.getRangeAt && sel.rangeCount) {
                range = sel.getRangeAt(0);
                range.deleteContents();
                var el = document.createElement("div");
                el.innerHTML = html;
                var frag = document.createDocumentFragment(), node, lastNode;
                while ( (node = el.firstChild) ) {
                    lastNode = frag.appendChild(node);
                }
                range.insertNode(frag);
                if (lastNode) {
                    range = range.cloneRange();
                    range.setStartAfter(lastNode);
                    range.collapse(true);
                    sel.removeAllRanges();
                    sel.addRange(range);
                }
            }
        } else if (document.selection && document.selection.type != "Control") {
            document.selection.createRange().pasteHTML(html);
        }
    }

    //光标定位到最后
    function  set_focus(el){
        el=el[0];
        el.focus();
        if($.browser.msie){
            var rng;
            el.focus();
            rng = document.selection.createRange();
            rng.moveStart('character', -el.innerText.length);
            var text = rng.text;
            for (var i = 0; i < el.innerText.length; i++) {
                if (el.innerText.substring(0, i + 1) == text.substring(text.length - i - 1, text.length)) {
                    result = i + 1;
                }
            }
        }else{
            var range = document.createRange();
            range.selectNodeContents(el);
            range.collapse(false);
            var sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
        }
    }

    //发送图片
    $('body').delegate('.live-img_btn','click',function(){
        $('.live-photo input').click();
    })
    $('body').delegate('.live-photo input','change',function(){
        console.log($(this).val() )
        if ($(this).val() == '') return;
        mysub();

    })
    //上传图片
    function mysub(){
        var photo = $('.live-photo')
        var data = [];
        data['mod']  = "siteConfig";
        data['type'] = "live";
        var fileId = photo.find("input[type=file]").attr("id");
        $.ajaxFileUpload({
            url: "/include/upload.inc.php",
            fileElementId: fileId,
            dataType: "json",
            data: data,
            success: function(m, l) {
                if (m.state == "SUCCESS") {
                    console.log('上传成功');
                    imgurl = m;
                    // msgto(m,'image');
                    imgto(m,'image');
                } else {
                    alert('上传失败 ');   //上传失败
                }
            },
            error: function() {
                // alert('网络错误，上传失败！');  //网络错误，上传失败！
            }
        });

    }

    function imgto(msg,type) {
        console.log(msg)
        if(! msg){
            return false;
        }

        var time = Math.round(new Date().getTime()/1000).toString();
        var data = {
            content: msg,
            contentType: type,
            mark: 'chatRoom' + room,
            from: chatToken,
            time: time
        }

        $.ajax({
            url: '/include/ajax.php?service=siteConfig&action=sendImChatRoom',
            data: data,
            type: 'post',
            dataType: 'json',
            success: function(data){
                chatLib.reset();
            },
            error: function(){

            }
        });

        data = {
            type: 'image',
            info: {
                content: msg,
                mark: 'chatRoom' + room,
                from: userinfo['uid'],
                name: userinfo['name'],
                photo: userinfo['photo'],
                time: time
            }
        }
        createEle(data);
    }



})
