var noticeTipID = null;
var huoniao = {
    /**
     * 提示信息
     * param string type 类型： loading warning success error
     * param string message 提示内容
     * param string hide 是否自动隐藏 auto
     */
    showTip: function (type, message, hide) {
        var obj = $(".w-tip");

        if (obj.html() != undefined) {
            obj.remove();
        }
        $("body").append('<div class="w-tip"><span class="msg ' + type + '">' + message + '</span></div>');

        if (hide == "auto") {
            setTimeout(function () {
                $(".w-tip").stop().fadeOut("fast", function () {
                    $(".w-tip").remove();
                });
            }, 3000);
        }
    }

    //删除提示信息
    , hideTip: function () {
        var obj = $(".w-tip");
        setTimeout(function () {
            obj.fadeOut("fast", function () {
                obj.remove();
            });
        }, 500);
    }

    //父级窗口提示
    , parentTip: function (type, message) {
        if (parent.$(".w-notice").html() != undefined) {
            parent.$(".w-notice").remove();
        }
        parent.$("body").append('<div class="w-notice"><span class="msg ' + type + '"><s></s>' + message + '</span></div>');

        huoniao.parentHideTip();
    }

    //删除父级窗口提示
    , parentHideTip: function () {
        noticeTipID != null ? clearTimeout(noticeTipID) : "";

        noticeTipID = setTimeout(function () {
            parent.$(".w-notice").stop().animate({top: "-50px", opacity: 0}, 300, function () {
                parent.$(".w-notice").remove();
            });
        }, 3000);
    }

    //异步操作
    , operaJson: function (url, action, callback, asy) {
        $.ajax({
            url: url,
            data: action,
            type: "POST",
            dataType: "json",
            async: (typeof asy != "undefined" ? asy : true),
            success: function (data) {
                typeof callback == "function" && callback(data);
            },
            error: function () {

                $.post("../login.php", "action=checkLogin", function (data) {
                    if (data == "0") {
                        huoniao.showTip("error", "登录超时，请重新登录！");
                        setTimeout(function () {
                            location.reload();
                        }, 500);
                    } else {
                        huoniao.showTip("error", "网络错误，请重试！");
                    }
                });

            }
        });
    }

    //表单验证
    , regex: function (obj) {
        var regex = obj.attr("data-regex"), tip = obj.siblings(".input-tips");
        if (regex != undefined && tip.html() != undefined) {
            var exp = new RegExp("^" + regex + "$", "img");
            if (!exp.test($.trim(obj.val()))) {
                tip.removeClass().addClass("input-tips input-error").attr("style", "display:inline-block");
                return false;
            } else {
                tip.removeClass().addClass("input-tips input-ok").attr("style", "display:inline-block");
                return true;
            }
        }
    }

    //返回头部
    , goTop: function () {
        window.scroll(0, 0);
    }

    //定位input
    , goInput: function (obj) {
        $(document).scrollTop(Number(obj.offset().top) - 8);
    }

    //转换PHP时间戳
    , transTimes: function (timestamp, n) {
        update = new Date(timestamp * 1000);//时间戳要乘1000
        year = update.getFullYear();
        month = (update.getMonth() + 1 < 10) ? ('0' + (update.getMonth() + 1)) : (update.getMonth() + 1);
        day = (update.getDate() < 10) ? ('0' + update.getDate()) : (update.getDate());
        hour = (update.getHours() < 10) ? ('0' + update.getHours()) : (update.getHours());
        minute = (update.getMinutes() < 10) ? ('0' + update.getMinutes()) : (update.getMinutes());
        second = (update.getSeconds() < 10) ? ('0' + update.getSeconds()) : (update.getSeconds());
        if (n == 1) {
            return (year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second);
        } else if (n == 2) {
            return (year + '-' + month + '-' + day);
        } else {
            return 0;
        }
    }

    //合并相同内容的单元格
    , rowspan: function (t, colIdx) {
        return t.each(function () {
            var that;
            $('tr', this).each(function (row) {
                $('td:eq(' + colIdx + ')', this).filter(':visible').each(function (col) {
                    if (that != null && $(this).html() == $(that).html()) {
                        rowspan = $(that).attr("rowSpan");
                        if (rowspan == undefined) {
                            $(that).attr("rowSpan", 1);
                            rowspan = $(that).attr("rowSpan");
                        }
                        rowspan = Number(rowspan) + 1;
                        $(that).attr("rowSpan", rowspan);
                        $(this).hide();
                    } else {
                        that = this;
                    }
                });
            });
        });
    }

    //打印分页信息
    , showPageInfo: function (lt, po) {
        var list = lt != undefined ? lt : "list";
        var pageInfo = po != undefined ? po : "pageInfo";

        var obj = $("#" + list), info = $("#" + pageInfo);
        var nowPageNum = Number(obj.attr("data-atpage"));
        var allPageNum = Number(obj.attr("data-totalpage"));

        info.hide();

        //拼接所有分页
        if(allPageNum < 10000){
            $("#paginationBtn button").html(nowPageNum + '/' + allPageNum + '页<span class="caret"></span>');
            var pageList = [];
            for (var i = 0; i < allPageNum; i++) {
                pageList.push('<li><a href="javascript:;" data-id="' + (i + 1) + '">第' + (i + 1) + '页</a></li>');
            }
            $("#paginationBtn ul").html(pageList.join(""));
        }else{
            $("#paginationBtn").remove();
        }

        if (allPageNum > 1) {

            $("#paginationBtn").attr("style", "display:inline-block;");

            info.html("").hide();

            var ul = document.createElement("ul");
            info.append(ul);

            //上一页
            if (nowPageNum > 1) {
                var prev = document.createElement("li");
                prev.innerHTML = '<a href="javascript:;">« 上一页</a>';
                prev.onclick = function () {
                    obj.attr("data-atpage", nowPageNum - 1);
                    getList();
                }
                $("#prevBtn").removeClass("disabled").show();
            } else {
                var prev = document.createElement("li");
                prev.className = "disabled";
                prev.innerHTML = '<a href="javascript:;">« 上一页</a>';
                $("#prevBtn").addClass("disabled").show();

            }
            info.find("ul").append(prev);

            //分页列表
            if (allPageNum - 2 < 1) {
                for (var i = 1; i <= allPageNum; i++) {
                    if (nowPageNum == i) {
                        var page = document.createElement("li");
                        page.className = "active";
                        page.innerHTML = '<a href="javascript:;">' + i + '</a>';
                    }
                    else {
                        var page = document.createElement("li");
                        page.innerHTML = '<a href="javascript:;">' + i + '</a>';
                        page.onclick = function () {
                            obj.attr("data-atpage", $(this).text());
                            getList();
                        }
                    }
                    info.find("ul").append(page);
                }
            } else {
                for (var i = 1; i <= 2; i++) {
                    if (nowPageNum == i) {
                        var page = document.createElement("li");
                        page.className = "active";
                        page.innerHTML = '<a href="javascript:;">' + i + '</a>';
                    }
                    else {
                        var page = document.createElement("li");
                        page.innerHTML = '<a href="javascript:;">' + i + '</a>';
                        page.onclick = function () {
                            obj.attr("data-atpage", $(this).text());
                            getList();
                        }
                    }
                    info.find("ul").append(page);
                }
                var addNum = nowPageNum - 4;
                if (addNum > 0) {
                    var em = document.createElement("li");
                    em.innerHTML = "<em>...</em>";
                    info.find("ul").append(em);
                }
                for (var i = nowPageNum - 1; i <= nowPageNum + 1; i++) {
                    if (i > allPageNum) {
                        break;
                    }
                    else {
                        if (i <= 2) {
                            continue;
                        }
                        else {
                            if (nowPageNum == i) {
                                var page = document.createElement("li");
                                page.className = "active";
                                page.innerHTML = '<a href="javascript:;">' + i + '</a>';
                            }
                            else {
                                var page = document.createElement("li");
                                page.innerHTML = '<a href="javascript:;">' + i + '</a>';
                                page.onclick = function () {
                                    obj.attr("data-atpage", $(this).text());
                                    getList();
                                }
                            }
                            info.find("ul").append(page);
                        }
                    }
                }
                var addNum = nowPageNum + 2;
                if (addNum < allPageNum - 1) {
                    var em = document.createElement("li");
                    em.innerHTML = "<em>...</em>";
                    info.find("ul").append(em);
                }
                for (var i = allPageNum - 1; i <= allPageNum; i++) {
                    if (i <= nowPageNum + 1) {
                        continue;
                    }
                    else {
                        var page = document.createElement("li");
                        page.innerHTML = '<a href="javascript:;">' + i + '</a>';
                        page.onclick = function () {
                            obj.attr("data-atpage", $(this).text());
                            getList();
                        }
                        info.find("ul").append(page);
                    }
                }
            }

            //下一页
            if (nowPageNum < allPageNum) {
                var next = document.createElement("li");
                next.innerHTML = '<a href="javascript:;">下一页 »</a>';
                next.onclick = function () {
                    obj.attr("data-atpage", nowPageNum + 1);
                    getList();
                }
                $("#nextBtn").removeClass("disabled").show();
            } else {
                var next = document.createElement("li");
                next.className = "disabled";
                next.innerHTML = '<a href="javascript:;">下一页 »</a>';
                $("#nextBtn").addClass("disabled").show();
            }
            info.find("ul").append(next);

            //输入跳转
            var insertNum = Number(nowPageNum + 1);
            if (insertNum >= Number(allPageNum)) {
                insertNum = Number(allPageNum);
            }

            var redirect = document.createElement("div");
            redirect.className = "input-prepend input-append";
            redirect.innerHTML = '<span class="add-on">跳转至</span><input class="span1" id="prependedInput" type="text" placeholder="页码"><button class="btn" type="button" id="pageSubmit">GO</button>';
            info.append(redirect);

            info.show();

            //分页跳转
            info.find("#pageSubmit").bind("click", function () {
                var pageNum = $("#prependedInput").val();
                if (pageNum != "" && pageNum >= 1 && pageNum <= Number(allPageNum)) {
                    obj.attr("data-atpage", pageNum);
                    getList();
                } else {
                    //alert("请输入正确的数值！");
                    $("#prependedInput").focus();
                }
            });
        } else {
            $("#prevBtn").removeClass("disabled").addClass("disabled").hide();
            $("#nextBtn").removeClass("disabled").addClass("disabled").hide();
            $("#paginationBtn").hide();
        }
    }

    //上一页、下一页
    , pageInfo: function (type) {
        var obj = $("#list"), atPage = Number(obj.attr("data-atpage"));
        if (type == "prev") {
            obj.attr("data-atpage", atPage - 1);
        } else if (type == "next") {
            obj.attr("data-atpage", atPage + 1);
        }
        getList();
    }

    //分类拖动后提示
    , stopDrag: function () {
        if ($(".stopdrag").size() <= 0) {
            $("body").append('<div class="stopdrag">信息发生变化，请及时<a href="javascript:;" onclick="saveOpera(\'\');">保存</a></div>');
        }
    }

    //获取URL参数
    , GetQueryString: function (name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return (r[2]);
        return null;
    }

    //修改URL参数
    , changeURLPar: function (destiny, par, par_value) {
        var pattern = par + '=([^&]*)';
        var replaceText = par + '=' + par_value;
        if (destiny.match(pattern)) {
            var tmp = '/' + par + '=[^&]*/';
            tmp = destiny.replace(eval(tmp), replaceText);
            return (tmp);
        } else {
            if (destiny.match('[\?]')) {
                return destiny + '&' + replaceText;
            } else {
                return destiny + '?' + replaceText;
            }
        }
        return destiny + '\n' + par + '\n' + par_value;
    }

    //判断url地址是否包含scrolltop
    , scrollTop: function () {
        var scrolltop = huoniao.GetQueryString("scrolltop");
        if (scrolltop != null && scrolltop != 0) {
            $(document).scrollTop(scrolltop);
        }
    }

    //重置用户输入的日期为“yyyy-mm-dd hh:mm:ss”格式
    , resetDate: function (t) {
        var val = t.val(),
            now = new Date(),
            year = now.getFullYear(),
            month = now.getMonth() + 1,
            day = now.getDate(),
            hh = now.getHours(),
            mm = now.getMinutes(),
            ss = now.getSeconds();

        month = month <= 9 ? "0" + month : month;
        day = day <= 9 ? "0" + day : day;
        mm = mm <= 9 ? "0" + mm : mm;
        ss = ss <= 9 ? "0" + ss : ss;

        val = val.replace("年", "-");
        val = val.replace("月", "-");
        val = val.replace("日 ", "日");
        val = val.replace("日", " ");
        val = val.replace("时", ":");
        val = val.replace("分", ":");
        val = val.replace("秒", "");

        var nDate = [];
        var ds = val.split(" ");

        if (ds[1] != undefined) {
            var ymd = ds[0].split("-");
            nDate[0] = isNaN(ymd[0]) ? year : ymd[0];
            nDate[1] = isNaN(ymd[1]) ? month : ymd[1];
            nDate[2] = isNaN(ymd[2]) ? day : ymd[2];
        } else {
            nDate[0] = year;
            nDate[1] = month;
            nDate[2] = day;
        }

        if (ds[1] != undefined) {
            var hms = ds[1].split(":");
            nDate[3] = isNaN(hms[0]) ? hh : hms[0];
            nDate[4] = isNaN(hms[1]) ? mm : hms[1];
            nDate[5] = hms[2] == undefined || hms[2] == "" ? "00" : (isNaN(hms[2]) ? ss : hms[2]);
        } else {
            nDate[3] = hh;
            nDate[4] = mm;
            nDate[5] = ss;
        }

        t.val(nDate[0] + "-" + nDate[1] + "-" + nDate[2] + " " + nDate[3] + ":" + nDate[4] + ":" + nDate[5]);
    }

    //填写管理员列表 chzn
    , buildAdminList: function (obj, list, title, currid) {
        var html = [];
        html.push('<option value="">' + (title ? title : '请选择') + '</option>');
        if (obj && list) {
            for (var i = 0; i < list.length; i++) {
                var id = list[i].id, name = list[i].name, l = list[i].list;
                if (l) {
                    html.push('<optgroup label="' + name + '">');
                    for (var b = 0; b < l.length; b++) {
                        html.push('<option value="' + l[b].id + '"' + (currid == l[b].id ? ' selected' : '') + '>' + l[b].username + '&nbsp;&nbsp;[' + l[b].nickname + ']' + '</option>');
                    }
                    html.push('</optgroup>');
                } else {
                    html.push('<option value="' + id + '"' + (currid == id ? ' selected' : '') + '>' + name + '</option>');
                }
            }
        }
        obj.html(html.join(''));
    }


}

$(function () {
    //判断是否为顶级窗体
    if (self.location == top.location) {
        var count = adminPath.split("../").length,
            url = self.location.pathname + self.location.search,
            Nowurls = url.split("/"),
            path = [];
        for (var i = count; i < Nowurls.length; i++) {
            path.push(Nowurls[i]);
        }
        parent.location.href = adminPath + "index.php?gotopage=" + path.join("/");
    }

    //上一页
    $("#prevBtn").bind("click", function () {
        if (!$(this).hasClass("disabled")) {
            huoniao.pageInfo("prev");
        }
    });

    //下一页
    $("#nextBtn").bind("click", function () {
        if (!$(this).hasClass("disabled")) {
            huoniao.pageInfo("next");
        }
    });


    //选择模板
    $("#tplList").delegate(".choose", "click", function () {
        var t = $(this), li = t.closest("li"), ul = t.closest(".tpl-list"), img = li.find(".img"),
            id = img.attr("data-id");
        if (!li.hasClass("current")) {
            ul.find("li").removeClass("current");
            li.addClass("current");
            ul.find(".del").show();
            // li.find(".del").attr("style", "display:none;");
            ul.find("input").val(id);
            return false;
        }
    });


    //编辑模板
    $("#tplList").delegate(".edit", "click", function (event) {
        var t = $(this), obj = t.parent().prev(".img"), template = obj.attr("data-id"),
            touch = t.closest(".tpl-list").hasClass("touch") ? "touch" : "", title = obj.attr("data-title");
        try {
            event.preventDefault();
            parent.addPage(action + "EditTemplate_" + touch + "_" + template, action, "编辑" + title + "模板", "siteConfig/editTemplate.php?action=" + action + "&template=" + template + "&title=" + title + "&touch=" + touch);
        } catch (e) {
        }
    });


    //模板缩略图放大
    $("#tplList").delegate(".img", "click", function () {
        var url = $(this).find("img").attr("src").replace("preview", "preview_large"), rand = Math.random();
        $.dialog({
            id: 'tplPic',
            title: '预览模板',
            lock: true,
            content: '<div style="width: 700px; height: 700px; overflow-y: scroll;"><img src="../' + url + '?v=' + rand + '" width="700" style="display: block; margin: 0 auto;" /></div>',
            padding: 0
        });
    });


    //删除模板
    $("#tplList").delegate(".del", "click", function () {
        var t = $(this), obj = t.parent().prev(".img"), floder = obj.attr("data-id"),
            type = t.closest(".tpl-list").hasClass("touch") ? "touch/" : "";
        $.dialog.confirm('此操作不可恢复，您确定要删除吗？', function () {
            if (!obj.hasClass("current")) {
                huoniao.showTip("loading", "正在删除，请稍候！");
                huoniao.operaJson("?action=delTpl", "floder=" + encodeURIComponent(type + floder) + "&dopost=" + action + "&token=" + $("#token").val(), function (data) {
                    if (data.state == 100) {
                        huoniao.showTip("success", data.info);
                        t.parent().parent().remove();
                        setTimeout(function(){
                            typeof getCityTemplate == "function" && getCityTemplate();
                        }, 2000);
                    } else {
                        huoniao.showTip("error", data.info);
                        setTimeout(function(){
                            typeof getCityTemplate == "function" && getCityTemplate();
                        }, 2000);
                    }
                });
            }
        });
    });


    //检测FTP是否可连接
    $("#checkFtpConn").bind("click", function () {
        var t = $(this), custome = $("input[name=articleFtp]:checked").val(),
            type = $("input[name=ftpType]:checked").val(), data = $("#ftpType" + type).find("input").serialize();
        if (t.text() == "正在连接...") return false;
        t.html("<font class='muted'>正在连接...</font>");
        if (type == 1) {
            action_ = "checkOssConn";
        } else if (type == 0) {
            action_ = "checkFtpConn";
        } else {
            action_ = "checkQINIUConn";
        }
        if (custome == 0) {
            action_ = "checkSystemConn";
            data = "";
        }
        huoniao.operaJson("../inc/json.php?action=" + action_, data, function (val) {
            if (!val) t.html("点击检测是否可用");
            var info = val.info;
            if (val.state == 100) {
                info = '<font class="text-success">' + info + '</font>';
            } else {
                info = '<font class="text-error">' + info + '</font>';
            }
            t.html(info + "&nbsp;&nbsp;<font size='1'>返回重试</font>");
        });
    });

    //一键导入系统地址库
    $("#importAddr").bind("click", function () {
        var t = $(this), type = t.attr("data-type");

        if (t.html() == "正在导入...") return false;
        huoniao.showTip("loading", "加载中...");

        huoniao.operaJson("../siteConfig/siteSubway.php?dopost=getCity", "", function (data) {
            if (data) {
                huoniao.hideTip();

                var li = [];
                for (var i = 0; i < data.length; i++) {
                    li.push('<option value="' + data[i].id + '">' + data[i].typename + '</option>');
                }
                $.dialog({
                    id: "areaInfo",
                    fixed: false,
                    title: "请选择要导入的城市",
                    content: '<form class="quick-editForm" name="editForm" style="padding: 40px 0;"><dl class="clearfix"><dt>选择城市：</dt><dd><select id="province" name="province" style="width:130px;"><option value="">--省份--</option>' + li.join("") + '</select><select id="city" name="city" style="width:130px; margin-left: 10px;"><option value="">--城市--</option></select></dd></dl></form>',
                    width: 450,
                    ok: function () {
                        var cid = 0, city = parent.$("#city").val(), province = parent.$("#province").val();
                        if (city != "" && city != 0) {
                            cid = city;
                        } else if (province != "" && province != 0) {
                            cid = province;
                        }

                        if (cid == 0) {
                            alert("请选择要导入的城市！");
                            return false;
                        }


                        huoniao.operaJson("../inc/json.php?action=importAddr", "type=" + type + "&id=" + cid, function (val) {
                            if (!val) t.html("一键导入系统地址库");
                            if (val.state == 100) {
                                location.reload();
                            } else {
                                $.dialog.alert(val.info);
                                t.html("一键导入系统地址库");
                            }
                        });


                    },
                    cancelVal: "关闭",
                    cancel: true
                });

                parent.$("#province").change(function () {
                    var id = $(this).val(), pinyin = $(this).find("option:selected").data("pinyin");
                    if (id != 0 && id != "") {
                        //获取子级城市
                        huoniao.operaJson("../siteConfig/siteSubway.php?dopost=getCity", "id=" + id, function (data) {
                            if (data) {
                                var li = [];
                                for (var i = 0; i < data.length; i++) {
                                    li.push('<option value="' + data[i].id + '">' + data[i].typename + '</option>');
                                }
                                parent.$("#city").html('<option value="0">--城市--</option>' + li.join(""));
                            } else {
                                parent.$("#city").html('<option value="0">--城市--</option>');
                            }
                        });
                    } else {
                        parent.$("#city").html('<option value="0">--城市--</option>');
                    }
                });


            } else {
                huoniao.showTip("error", "加载失败！");
            }
        });

        // $.dialog.confirm('确定要导入系统地址库吗？<br />确定后将清除现有数据，请谨慎操作！', function(){
        // 	if(t.html() == "正在导入...") return false;
        // 	t.html("正在导入...");
        // 	huoniao.operaJson("../inc/json.php?action=importAddr", "type="+type, function(val){
        // 		if(!val) t.html("一键导入系统地址库");
        // 		if(val.state == 100){
        // 			location.reload();
        // 		}else{
        // 			$.dialog.alert(val.info);
        // 			t.html("一键导入系统地址库");
        // 		}
        // 	});
        // });
    });

    //多选按钮组全选功能
    $("#editform").delegate(".checkAll", "click", function () {
        if ($(this).html() == "反选") {
            $(this).html("全选");
            $(this).parent().find("input[type=checkbox]").attr("checked", false);
        } else {
            $(this).html("反选");
            $(this).parent().find("input[type=checkbox]").attr("checked", true);
        }
    });

    //查看会员信息
    $("#list, #editform, .o-wrap").delegate(".userinfo", "click", function () {
        var id = $(this).attr("data-id");
        if (id) {
            huoniao.showTip("loading", "数据读取中，请稍候...");
            huoniao.operaJson("../inc/json.php?action=getMemberInfo", "id=" + id, function (data) {
                huoniao.hideTip();
                if (data) {

                    $.dialog({
                        id: "memberInfo",
                        fixed: false,
                        title: "会员ID【" + id + "】",
                        content: '<table width="100%"border="0"cellspacing="1"cellpadding="5" style="line-height:2em;"><tr><td width="100"valign="top"><img src="' + cfg_attachment + data[0]["photo"] + '&type=small"width="100"/></td><td width="80"align="right"valign="top">会员名：<br />昵称：<br />' + (data[0]["company"] ? "公司名称：<br />" : "") + '帐户：<br />性别：<br />邮箱：<br />电话：<br />QQ：<br />生日：<br />城市：<br />注册时间：<br />注册IP：</td><td valign="top">' + data[0]["username"] + (data[0]["level"] ? '<font color="red">【' + data[0]["level"] + '】</font>' : '') + '<br />' + data[0]["nickname"] + (data[0]["company"] ? '<br />' + data[0]["company"] : "") + '<br />余额 ' + data[0]["money"] + '&nbsp;&nbsp;&nbsp;积分 ' + data[0]["point"] + '&nbsp;&nbsp;&nbsp;保障金 ' + data[0]["promotion"] + '<br />' + (data[0]["sex"] == 0 ? "女" : "男") + '<br />' + data[0]["email"] + (data[0]["emailCheck"] == 0 ? "&nbsp;<font color='#f00'>[未验证]</font>" : "&nbsp;<font color='green'>[已验证]</font>") + '<br />' + data[0]["phone"] + (data[0]["phoneCheck"] == 0 ? "&nbsp;<font color='#f00'>[未验证]</font>" : "&nbsp;<font color='green'>[已验证]</font>") + '<br />' + data[0]["qq"] + '<br />' + huoniao.transTimes(data[0]["birthday"], 2) + '<br />' + data[0]["addr"] + '<br />' + huoniao.transTimes(data[0]["regtime"], 2) + '<br />' + data[0]["regip"] + '</td></tr></table>',
                        width: 550,
                        okVal: "修改会员信息",
                        ok: function () {
                            var title = data[0]["username"],
                                href = "memberList.php?dopost=Edit&id=" + id;

                            try {
                                parent.addPage("memberListEdit" + id, "member", title, "member/" + href);
                            } catch (e) {
                            }
                        },
                        cancelVal: "关闭",
                        cancel: true
                    });

                } else {
                    huoniao.showTip("error", "数据读取失败");
                }
            });
        }
    });

    function checkFenbiao(){
        var cookiePre = window.cookiePre ? window.cookiePre : top.cookiePre;
        var cookieDomain = $.cookie(cookiePre+'cookieDomain');
        var syncCheck = $.cookie(cookiePre+'syncFenbiao');
        if(syncCheck){
            var file = syncCheck+'_syncFenbiao.php';
            $.cookie(cookiePre+'syncFenbiao', '');
            top.open('/include/cron/'+file);
        }
    }
    setTimeout(function(){
        checkFenbiao();
    }, 1000)
});


//输出货币标识
function echoCurrency(type) {
    var pre = (typeof cookiePre != "undefined" && cookiePre != "") ? cookiePre : ((typeof top.cookiePre != "undefined" && top.cookiePre != "") ? top.cookiePre : "HN_");
    var currencyArr = $.cookie(pre + "currency");
    if (currencyArr) {
        var currency = JSON.parse(currencyArr);
        if (type) {
            return currency[type]
        } else {
            return currencyArr['short'];
        }
    }
}


Date.ParseString = function (e) {
    var b = /(\d{4})-(\d{1,2})-(\d{1,2})(?:\s+(\d{1,2}):(\d{1,2}):(\d{1,2}))?/i,
        a = b.exec(e),
        c = 0,
        d = null;
    if (a && a.length) {
        if (a.length > 5 && a[6]) {
            c = Date.parse(e.replace(b, "$2/$3/$1 $4:$5:$6"));
        } else {
            c = Date.parse(e.replace(b, "$2/$3/$1"));
        }
    } else {
        c = Date.parse(e);
    }
    if (!isNaN(c)) {
        d = new Date(c);
    }
    return d;
};

Array.prototype.in_array = function (e) {
    for (i = 0; i < this.length && this[i] != e; i++);
    return !(i == this.length);
}

//监听F5，只刷新当前页面
function _attachEvent(obj, evt, func, eventobj) {
    eventobj = !eventobj ? obj : eventobj;
    if (obj.addEventListener) {
        obj.addEventListener(evt, func, false);
    } else if (eventobj.attachEvent) {
        obj.attachEvent('on' + evt, func);
    }
}

var ISFRAME = 1;
if (ISFRAME) {
    try {
        _attachEvent(document.documentElement, 'keydown', parent.resetEscAndF5);
    } catch (e) {
    }
}
