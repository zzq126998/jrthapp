<?php
/**
 * 管理商城分类
 *
 * @version        $Id: shopType.php 2014-2-9 下午23:30:21 $
 * @package        HuoNiao.Shop
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("shopType");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__)."/../templates/shop";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "shopType.html";

$action = "shop_type";

//获取指定ID详情
if($dopost == "getTypeDetail"){
	if($id != ""){
		$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."` WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "results");
		echo json_encode($results);
	}
	die;

//修改分类
}else if($dopost == "updateType"){
	checkPurview("editShopType");

	if($id != ""){
		$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."` WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "results");

		if(!empty($results)){

			if($typename == "") die('{"state": 101, "info": '.json_encode('请输入分类名').'}');
			if($type == "single"){

				if($results[0]['typename'] != $typename){

					//保存到主表
					$archives = $dsql->SetQuery("UPDATE `#@__".$action."` SET `typename` = '$typename' WHERE `id` = ".$id);
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
				$spes = isset($spe) ? join(',',$spe) : '';

				//同步子级分类的规格
				if($replace){
					speRelevance($id, $spes);
				}

				//保存到主表
				$archives = $dsql->SetQuery("UPDATE `#@__".$action."` SET `parentid` = '$parentid', `typename` = '$typename', `spe` = '$spes', `seotitle` = '$seotitle', `keywords` = '$keywords', `description` = '$description' WHERE `id` = ".$id);
				$results = $dsql->dsqlOper($archives, "update");

			}

			if($results != "ok"){
				echo '{"state": 101, "info": '.json_encode('分类修改失败，请重试！').'}';
				exit();
			}else{
				adminLog("修改分类商城分类", $typename);
				echo '{"state": 100, "info": '.json_encode('修改成功！').'}';
				exit();
			}

		}else{
			echo '{"state": 101, "info": '.json_encode('要修改的商城不存在或已删除！').'}';
			die;
		}
	}
	die;

//删除分类
}else if($dopost == "del"){
	checkPurview("delShopType");

	if($id != ""){

		$idsArr = array();
		$idexp = explode(",", $id);

		//获取所有子级
		foreach ($idexp as $k => $id) {
			$childArr = $dsql->getTypeList($id, $action, 1);
			if(is_array($childArr)){
				global $data;
				$data = "";
				$idsArr = array_merge($idsArr, array_reverse(parent_foreach($childArr, "id")));
			}
			$idsArr[] = $id;
		}

		foreach ($idsArr as $key => $id) {
			//删除分类下所有字段
			$archives = $dsql->SetQuery("DELETE FROM `#@__shop_item` WHERE `type` = ".$id);
			$dsql->dsqlOper($archives, "update");
			//删除分类图标
			$sql = $dsql->SetQuery("SELECT `icon` FROM `#@__".$action."` WHERE `id` = ".$id." AND `icon` != ''");
			$res = $dsql->dsqlOper($sql, "results");
			if($res){
				delPicFile($res[0]['icon'], "delAdv", "shop");
			}
		}

		$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."` WHERE `id` in (".join(",", $idsArr).")");
		$dsql->dsqlOper($archives, "update");

		adminLog("删除分类商城分类", join(",", $idsArr));
		echo '{"state": 100, "info": '.json_encode('删除成功！').'}';
		die;

	}
	die;

//更新商城分类
}else if($dopost == "typeAjax"){
	checkPurview("addShopType");
	$data = str_replace("\\", '', $_POST['data']);
	if($data != ""){
		$json = json_decode($data);

		$json = objtoarr($json);
		$json = typeAjax($json, 0, $action);
		echo $json;
	}
	die;
}

//验证模板文件
if(file_exists($tpl."/".$templates)){

	//js
	$jsFile = array(
		'ui/jquery.dragsort-0.5.1.min.js',
		'ui/jquery-ui-sortable.js',
		'ui/jquery.ajaxFileUpload.js',
		'admin/shop/shopType.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

	$huoniaoTag->assign('action', $action);
	$huoniaoTag->assign('typeListArr', json_encode($dsql->getTypeList(0, $action)));

	//规格
	$speSql = $dsql->SetQuery("SELECT `id`, `typename` FROM `#@__shop_specification` WHERE `parentid` = 0");
	$speResult = $dsql->dsqlOper($speSql, "results");
	$speListArr = array();
	if($speResult){
		$speListArr = $speResult;
	}
	$huoniaoTag->assign('speListArr', json_encode($speListArr));
	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/shop";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}

//同步子级分类规格
function speRelevance($id, $spes){
	global $dsql;
	$typeSql = $dsql->SetQuery("SELECT `id` FROM `#@__shop_type` WHERE `parentid` = ".$id);
	$typeResult = $dsql->dsqlOper($typeSql, "results");
	if($typeResult){
		$typeSql = $dsql->SetQuery("UPDATE `#@__shop_type` SET `spe` = '$spes' WHERE `parentid` = ".$id);
		$dsql->dsqlOper($typeSql, "results");

		foreach($typeResult as $key => $value){
			speRelevance($value['id'], $spes);
		}
	}
}
