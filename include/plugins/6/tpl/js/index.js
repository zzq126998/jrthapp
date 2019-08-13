$(function(){

    //城市列表
    if(step == 0) {
        //获取未采集城市的小区数据
        // getCommunityCount($('.notCollection li:eq(0)'));

        function getCommunityCount(t) {
            var cid = t.data('cid');
            $.ajax({
                url: '?action=getCommunityCount&cid=' + cid,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    if (data && data.state == 100) {
                        t.find('a').attr('title', '可采集' + data.info + '个小区');
                        t.find('span').html(data.info);

                        //查下一个城市
                        var nextLi = t.next('li');
                        if (nextLi) {
                            getCommunityCount(nextLi);
                        }
                    }
                }
            });
        }
    }

    //采集列表
    if(step == 4){


        var defaultBtn = $("#delBtn"),
            checkedBtn = $("#stateBtn, #collection, #fabu, #delete"),
            init = {

                //选中样式切换
                funTrStyle: function(){
                    var trLength = $("#list tbody tr").length, checkLength = $("#list tbody tr.selected").length;
                    if(trLength == checkLength){
                        $("#selectBtn .check").removeClass("checked").addClass("checked");
                    }else{
                        $("#selectBtn .check").removeClass("checked");
                    }

                    if(checkLength > 0){
                        defaultBtn.css('display', 'inline-block');
                        checkedBtn.hide();
                    }else{
                        defaultBtn.hide();
                        checkedBtn.css('display', 'inline-block');
                    }
                }

                //删除
                ,del: function(){
                    var checked = $("#list tbody tr.selected");
                    if(checked.length < 1){
                        huoniao.showTip("warning", "未选中任何信息！", "auto");
                    }else{
                        huoniao.showTip("loading", "正在操作，请稍候...");
                        var id = [];
                        for(var i = 0; i < checked.length; i++){
                            id.push($("#list tbody tr.selected:eq("+i+")").attr("data-id"));
                        }

                        huoniao.operaJson("?action=del", "id="+id, function(data){
                            if(data.state == 100){
                                huoniao.showTip("success", data.info, "auto");
                                $("#selectBtn a:eq(1)").click();
                                setTimeout(function() {
                                    getList();
                                }, 800);
                            }else{
                                var info = [];
                                for(var i = 0; i < $("#list tbody tr").length; i++){
                                    var tr = $("#list tbody tr:eq("+i+")");
                                    for(var k = 0; k < data.info.length; k++){
                                        if(data.info[k] == tr.attr("data-id")){
                                            info.push("▪ "+tr.find("td:eq(1)").text());
                                        }
                                    }
                                }
                                $.dialog.alert("<div class='errInfo'><strong>以下信息删除失败：</strong><br />" + info.join("<br />") + '</div>', function(){
                                    getList();
                                });
                            }
                        });
                        $("#selectBtn a:eq(1)").click();
                    }
                }

            };

        //初始加载
        getList();

        //二级菜单点击事件
        $("#addrBtn a").bind("click", function(){
            var id = $(this).attr("data-id"), title = $(this).text();
            $("#addrBtn").attr("data-id", id);
            $("#addrBtn button").html(title+'<span class="caret"></span>');
        });

        $("#stateBtn, #pageBtn, #paginationBtn").delegate("a", "click", function(){
            var id = $(this).attr("data-id"), title = $(this).html(), obj = $(this).parent().parent().parent();
            obj.attr("data-id", id);
            if(obj.attr("id") == "paginationBtn"){
                var totalPage = $("#list").attr("data-totalpage");
                $("#list").attr("data-atpage", id);
                obj.find("button").html(id+"/"+totalPage+'页<span class="caret"></span>');
                $("#list").attr("data-atpage", id);
            }else{

                $("#addrBtn")
                    .attr("data-id", "")
                    .find("button").html('全部地区<span class="caret"></span>');

                //$("#sAddr").html("");

                if(obj.attr("id") != "propertyBtn"){
                    obj.find("button").html(title+'<span class="caret"></span>');
                }
                $("#list").attr("data-atpage", 1);
            }
            getList();
        });

        //下拉菜单过长设置滚动条
        $(".dropdown-toggle").bind("click", function(){
            if($(this).parent().attr("id") != "typeBtn" && $(this).parent().attr("id") != "addrBtn"){
                var height = document.documentElement.clientHeight - $(this).offset().top - $(this).height() - 30;
                $(this).next(".dropdown-menu").css({"max-height": height, "overflow-y": "auto"});
            }
        });

        //全选、不选
        $("#selectBtn a").bind("click", function(){
            var id = $(this).attr("data-id");
            if(id == 1){
                $("#selectBtn .check").addClass("checked");
                $("#list tr").removeClass("selected").addClass("selected");

                defaultBtn.css('display', 'inline-block');
                checkedBtn.hide();
            }else{
                $("#selectBtn .check").removeClass("checked");
                $("#list tr").removeClass("selected");

                defaultBtn.hide();
                checkedBtn.css('display', 'inline-block');
            }
        });

        //删除
        $("#delBtn").bind("click", function(){
            $.dialog.confirm('此操作不可恢复，您确定要删除吗？', function(){
                init.del();
            });
        });

        //单条删除
        $("#list").delegate(".delete", "click", function(){
            $.dialog.confirm('此操作不可恢复，您确定要删除吗？', function(){
                init.del();
            });
        });

        $('#delete').bind('click', function(){
           $.dialog.confirm('此操作不可恢复，确认要清空吗？', function(){
               huoniao.operaJson("?action=clear", "cityid="+cityid+"&cid="+cid, function(data){
                   if(data.state == 100){
                       huoniao.showTip("success", data.info, "auto");
                       location.reload();
                   }else{
                       $.dialog.alert(data.info);
                   }
               });
           });
        });

        //单选
        $("#list tbody").delegate("tr", "click", function(event){
            var isCheck = $(this), checkLength = $("#list tbody tr.selected").length;
            if(event.target.className.indexOf("check") > -1) {
                if(isCheck.hasClass("selected")){
                    isCheck.removeClass("selected");
                }else{
                    isCheck.addClass("selected");
                }
            }else if(event.target.className.indexOf("edit") > -1 || event.target.className.indexOf("del") > -1) {
                $("#list tr").removeClass("selected");
                isCheck.addClass("selected");
            }else{
                if(checkLength > 1){
                    $("#list tr").removeClass("selected");
                    isCheck.addClass("selected");
                }else{
                    if(isCheck.hasClass("selected")){
                        isCheck.removeClass("selected");
                    }else{
                        $("#list tr").removeClass("selected");
                        isCheck.addClass("selected");
                    }
                }
            }

            init.funTrStyle();
        });


    }

});





//获取列表
function getList(){
    huoniao.showTip("loading", "正在操作，请稍候...");
    $("#list table, #pageInfo").hide();
    $("#selectBtn a:eq(1)").click();
    $("#loading").html("加载中，请稍候...").show();
    var state    = $("#stateBtn").attr("data-id") ? $("#stateBtn").attr("data-id") : "",
        pagestep = $("#pageBtn").attr("data-id") ? $("#pageBtn").attr("data-id") : "10",
        page     = $("#list").attr("data-atpage") ? $("#list").attr("data-atpage") : "1";

    var data = [];
    data.push("cityid="+cityid);
    data.push("cid="+cid);
    data.push("state="+state);
    data.push("pagestep="+pagestep);
    data.push("page="+page);

    huoniao.operaJson("?action=getList", data.join("&"), function(val){
        var obj = $("#list"), list = [], i = 0, communityList = val.communityList;
        obj.attr("data-totalpage", val.pageInfo.totalPage);

        $(".totalCount").html(val.pageInfo.totalCount);
        $(".totalGray").html(val.pageInfo.totalGray);
        $(".totalAudit").html(val.pageInfo.totalAudit);
        $(".totalRefuse").html(val.pageInfo.totalRefuse);

        if(val.state == "100"){
            huoniao.hideTip();

            for(i; i < communityList.length; i++){
                list.push('<tr data-id="'+communityList[i].id+'">');
                list.push('  <td class="row3"><span class="check"></span></td>');
                var img = '<img src="'+(communityList[i].litpic ? communityList[i].litpic : '/static/images/404.jpg')+'" class="litpic" />';
                list.push('  <td class="row25 left">'+img+'<span>'+communityList[i].name+'</span></td>');
                list.push('  <td class="row20 left">'+communityList[i].addr + "<br />" + communityList[i].address+'</td>');
                list.push('  <td class="row12 left">'+communityList[i].price+'</td>');
                list.push('  <td class="row10 left">'+communityList[i].buildtype+'</td>');
                list.push('  <td class="row15 left">'+communityList[i].proprice+'</td>');

                var state = '';
                if(communityList[i].state == 0){
                    state = '<span class="refuse">待采集</span>';
                }else if(communityList[i].state == 1){
                    state = '<span class="audit">已采集</span>';
                }else if(communityList[i].state == 2){
                    state = '<span class="gray">已发布</span>';
                }
                list.push('  <td class="row15 left">'+state+'</td>');
                list.push('</tr>');
            }

            obj.find("tbody").html(list.join(""));
            $("#loading").hide();
            $("#list table").show();
            huoniao.showPageInfo();
        }else{

            obj.find("tbody").html("");
            huoniao.showTip("warning", val.info, "auto");
            $("#loading").html(val.info).show();
        }
    });

};