<?php
/**
 * 管理团购分类
 *
 * @version        $Id: tuanType.php 2013-12-6 下午22:17:18 $
 * @package        HuoNiao.Tuan
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("tuanType");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__)."/../templates/tuan";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "tuanType.html";

$action = "tuan";

//获取指定ID信息详情
if($dopost == "getTypeDetail"){
	if($id == "") die;
	$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."type` WHERE `id` = ".$id);
	$results = $dsql->dsqlOper($archives, "results");
	echo json_encode($results);die;

//修改分类
}else if($dopost == "updateType"){
	if(!testPurview("editTuanType")){
		die('{"state": 200, "info": '.json_encode('对不起，您无权使用此功能！').'}');
	}
	if($id == "") die;
	$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."type` WHERE `id` = ".$id);
	$results = $dsql->dsqlOper($archives, "results");

	if(!empty($results)){

		if($typename == "") die('{"state": 101, "info": '.json_encode('请输入分类名').'}');
		if($type == "single"){

			if($results[0]['typename'] != $typename){

				//保存到主表
				$archives = $dsql->SetQuery("UPDATE `#@__".$action."type` SET `typename` = '$typename' WHERE `id` = ".$id);
				$results = $dsql->dsqlOper($archives, "update");

			}else{
				//分类没有变化
				echo '{"state": 101, "info": '.json_encode('无变化！').'}';
				die;
			}

		}else{

			//对字符进行处理
			$typename    = cn_substrR($typename,30);
			$seotitle    = cn_substrR($seotitle,80);
			$keywords    = cn_substrR($keywords,60);
			$description = cn_substrR($description,150);
			$hot         = (int)$hot;
			$color       = cn_substrR($color,7);

			//保存到主表
			$archives = $dsql->SetQuery("UPDATE `#@__".$action."type` SET `parentid` = '$parentid', `typename` = '$typename', `seotitle` = '$seotitle', `keywords` = '$keywords', `description` = '$description', `hot` = '$hot', `color` = '$color' WHERE `id` = ".$id);
			$results = $dsql->dsqlOper($archives, "update");

		}

		if($results != "ok"){
			echo '{"state": 101, "info": '.json_encode('分类修改失败，请重试！').'}';
			exit();
		}else{
			adminLog("修改团购分类", $typename);
			echo '{"state": 100, "info": '.json_encode('修改成功！').'}';
			exit();
		}

	}else{
		echo '{"state": 101, "info": '.json_encode('要修改的信息不存在或已删除！').'}';
		die;
	}

//删除分类
}else if($dopost == "del"){
	if(!testPurview("editTuanType")){
		die('{"state": 200, "info": '.json_encode('对不起，您无权使用此功能！').'}');
	}
	if($id == "") die;

	$idsArr = array();
	$idexp = explode(",", $id);

	//获取所有子级
	foreach ($idexp as $k => $id) {
		$childArr = $dsql->getTypeList($id, $action."type", 1);
		if(is_array($childArr)){
			global $data;
			$data = "";
			$idsArr = array_merge($idsArr, array_reverse(parent_foreach($childArr, "id")));
		}
		$idsArr[] = $id;
	}

	// 删除分类图片
	foreach ($idsArr as $kk => $id) {
		//删除分类图标
		$sql = $dsql->SetQuery("SELECT `icon` FROM `#@__tuantype` WHERE `id` = ".$id." AND `icon` != ''");
		$res = $dsql->dsqlOper($sql, "results");
		if($res){
			delPicFile($res[0]['icon'], "delAdv", "tuan");
		}
	}

	//删除分类下的信息
	// foreach ($idsArr as $kk => $id) {
	//
	// 	//查询此分类下所有信息ID
	// 	$archives = $dsql->SetQuery("SELECT `id`, `litpic`, `pics`, `body` FROM `#@__".$action."list` WHERE `typeid` = ".$id);
	// 	$results = $dsql->dsqlOper($archives, "results");
	//
	// 	if(count($results) > 0){
	// 		foreach($results as $key => $val){
	// 			//删除评论
	// 			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."common` WHERE `aid` = ".$val['id']);
	// 			$dsql->dsqlOper($archives, "update");
	//
	// 			$orderid = array();
	// 			//删除相应的订单、团购券、充值卡数据
	// 			$orderSql = $dsql->SetQuery("SELECT `id` FROM `#@__".$action."_order` WHERE `proid` = ".$val['id']);
	// 			$orderResult = $dsql->dsqlOper($orderSql, "results");
	//
	// 			if($orderResult){
	// 				foreach($orderResult as $key => $order){
	// 					array_push($orderid, $order['id']);
	// 				}
	//
	// 				if(!empty($orderid)){
	// 					$orderid = join(",", $orderid);
	//
	// 					$quanSql = $dsql->SetQuery("DELETE FROM `#@__".$action."quan` WHERE `orderid` in (".$orderid.")");
	// 					$dsql->dsqlOper($quanSql, "update");
	//
	// 					$quanSql = $dsql->SetQuery("DELETE FROM `#@__paycard` WHERE `orderid` in (".$orderid.")");
	// 					$dsql->dsqlOper($quanSql, "update");
	// 				}
	//
	// 			}
	//
	// 			$quanSql = $dsql->SetQuery("DELETE FROM `#@__".$action."_order` WHERE `proid` = ".$val['id']);
	// 			$dsql->dsqlOper($quanSql, "update");
	//
	//
	// 			//删除缩略图
	// 			delPicFile($val['litpic'], "delThumb", $action);
	//
	// 			//删除图集
	// 			delPicFile($val['pics'], "delAtlas", $action);
	//
	// 			$body = $val['body'];
	// 			if(!empty($body)){
	// 				delEditorPic($body, $action);
	// 			}
	//
	// 		}
	// 	}
	//
	// }
	//
	// //删除信息表
	// $archives = $dsql->SetQuery("DELETE FROM `#@__".$action."list` WHERE `typeid` in (".join(",", $idsArr).")");
	// $results = $dsql->dsqlOper($archives, "update");

	//删除字段表
	$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."typeitem` WHERE `tid` in (".join(",", $idsArr).")");
	$results = $dsql->dsqlOper($archives, "update");

	$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."type` WHERE `id` in (".join(",", $idsArr).")");
	$dsql->dsqlOper($archives, "update");

	adminLog("删除团购分类", join(",", $idsArr));
	echo '{"state": 100, "info": '.json_encode('删除成功！').'}';
	die;


//更新信息分类
}else if($dopost == "typeAjax"){
	if(!testPurview("addTuanType")){
		die('{"state": 200, "info": '.json_encode('对不起，您无权使用此功能！').'}');
	}
	$data = str_replace("\\", '', $_POST['data']);
	if($data == "") die;
	$json = json_decode($data);

	$json = objtoarr($json);
	$json = typeAjax($json, 0, $action."type");
	echo $json;
	die;
}

//验证模板文件
if(file_exists($tpl."/".$templates)){

	//js
	$jsFile = array(
		'ui/jquery.dragsort-0.5.1.min.js',
		'ui/jquery.colorPicker.js',
		'ui/jquery-ui-sortable.js',
		'ui/jquery.ajaxFileUpload.js',
		'admin/tuan/tuanType.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

	$huoniaoTag->assign('action', $action);
	$huoniaoTag->assign('typeListArr', json_encode($dsql->getTypeList(0, $action."type"), JSON_UNESCAPED_UNICODE));
	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/tuan";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
