<?php
/**
 * 婚恋课堂信息分类
 *
 * @version        $Id: datingSchoolType.php 2013-11-6 上午11:06:10 $
 * @package        HuoNiao.Info
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("datingSchoolType");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__)."/../templates/dating";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "datingSchoolType.html";

$action = "dating_school";

//获取指定ID信息详情
if($dopost == "getTypeDetail"){
	if($id != ""){
		$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."type` WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "results");
		echo json_encode($results);
	}
	die;

//修改分类
}else if($dopost == "updateType"){
	checkPurview("datingSchoolType");

	if($id != ""){
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

				//保存到主表
				$archives = $dsql->SetQuery("UPDATE `#@__".$action."type` SET `parentid` = '$parentid', `typename` = '$typename' WHERE `id` = ".$id);
				$results = $dsql->dsqlOper($archives, "update");

			}

			if($results != "ok"){
				echo '{"state": 101, "info": '.json_encode('分类修改失败，请重试！').'}';
				exit();
			}else{
				adminLog("修改交友活动分类", $typename);
				echo '{"state": 100, "info": '.json_encode('修改成功！').'}';
				exit();
			}

		}else{
			echo '{"state": 101, "info": '.json_encode('要修改的信息不存在或已删除！').'}';
			die;
		}
	}
	die;

//删除分类
}else if($dopost == "del"){
	checkPurview("datingSchoolType");

	if($id != ""){

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

		//删除分类下的信息
		foreach ($idsArr as $kk => $id) {

			$archives = $dsql->SetQuery("SELECT `id` FROM `#@__".$action."` WHERE `typeid` = ".$id);
			$results = $dsql->dsqlOper($archives, "results");

			if(count($results) > 0){
				$idList = array();
				foreach($results as $key => $val){

					//删除报名表
					$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_take` WHERE `aid` = ".$val['id']);
					$dsql->dsqlOper($archives, "update");

					$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."` WHERE `id` = ".$val['id']);
					$results = $dsql->dsqlOper($archives, "results");

					//删除缩略图
					delPicFile($results[0]['litpic'], "delThumb", $action);

					//删除内容图片
					$content = $results[0]['content'];
					if(!empty($content)){
						delEditorPic($content, $action);
					}

					//删除表
					$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."` WHERE `id` = ".$val['id']);
					$dsql->dsqlOper($archives, "update");
				}
			}

			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."type` WHERE `id` = ".$id);
			$dsql->dsqlOper($archives, "update");

		}

		adminLog("删除交友活动分类", $id);
		echo '{"state": 100, "info": '.json_encode('删除成功！').'}';
		die;

	}
	die;

//更新信息分类
}else if($dopost == "typeAjax"){
	checkPurview("datingSchoolType");
	$data = str_replace("\\", '', $_POST['data']);
	if($data != ""){
		$json = json_decode($data);

		$json = objtoarr($json);
		$json = typeAjax($json, 0, $action."type");
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
		'admin/dating/datingSchoolType.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

	$huoniaoTag->assign('action', $action);
	$huoniaoTag->assign('typeListArr', json_encode($dsql->getTypeList(0, $action."type")));
	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/dating";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
