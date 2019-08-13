$(function(){

	//下拉选择控件
	$(".chosen-select").chosen().change(function() {
		$("#frmselect").submit();
	})

	// 回复评论
	$(".reply").click(function(e){
		event.preventDefault();
		var href = $(this).attr("href"), id = $(this).data("id"), uid = $(this).data("uid");
		try {
			event.preventDefault();
			parent.addPage("waimaiCommonReply"+id, "waimai", "回复"+uid, "waimai/"+href);
		} catch(e) {}
	})

	//订单详情
    $(".table").delegate(".orderdetail", "click", function(){
        var t = $(this), id = t.closest("tr").attr("data-oid"), type = t.closest("tr").attr("data-type");
        if(id){
            $.dialog({
    			id: "markDitu",
    			title: "订单详情",
    			content: 'url:waimai/'+(type=='waimai' ? 'waimaiOrderDetail' : 'paotuiOrderDetail')+'.php?id='+id,
    			width: 1000,
    			height: 600,
    			max: true,
    			ok: function(){

    			},
    			cancel: true
    		});
        }
    });

})