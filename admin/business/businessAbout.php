<?php
/**
 * 管理商家介绍
 *
 * @version        $Id: businessAbout.php 2017-03-24 下午15:38:25 $
 * @package        HuoNiao.Business
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("businessAbout");
$dsql  = new dsql($dbo);
$tpl   = dirname(__FILE__)."/../templates/business";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "businessAbout.html";

$tab = "business";

$cssFile = array();
$jsFile = array(
	'ui/bootstrap.min.js',
	'admin/business/businessAbout.js'
);

if($dopost == "add" || $dopost == "edit"){
	$cssFile = array(
		'ui/chosen.min.css'
	);
	$jsFile = array(
		'ui/chosen.jquery.min.js',
		'admin/business/businessAboutAdd.js'
	);
	$templates = "businessAboutAdd.html";
}

//提前前验证
if(!empty($_POST) && ($dopost == "add" || $dopost == "edit")){
	if($token == "") die('token传递失败！');

	if(empty($uid)){
		echo '{"state": 200, "info": "请选择所属商家"}';
		exit();
	}

	//城市管理员权限
	if($userType == 3){
		$sql = $dsql->SetQuery("SELECT `id` FROM `#@__business_list` WHERE `cityid` in ($adminCityIds) AND `id` = $uid");
		$ret = $dsql->dsqlOper($sql, "results");
		if(!$ret){
			die('{"state": 200, "info": '.json_encode("对不起，您无权操作此商家！").'}');
		}
	}

	if(empty($title)){
		echo '{"state": 200, "info": "请输入标题"}';
		exit();
	}

	//查询商家ID
	$sql = $dsql->SetQuery("SELECT `id` FROM `#@__business_list` WHERE `id` = $uid");
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret){
		$sid = $ret[0]['id'];
	}else{
		echo '{"state": 200, "info": "所选商家不存在或已经删除！"}';
		exit();
	}
}

$time = time();

if($dopost == "add" && !empty($_POST)){

	//保存到主表
	$archives = $dsql->SetQuery("INSERT INTO `#@__".$tab."_about` (`uid`, `title`, `body`, `weight`, `pubdate`) VALUES ('$uid', '$title', '$body', '$weight', '$time')");
	$results = $dsql->dsqlOper($archives, "lastid");

	if(!is_numeric($results)){
		echo '{"state": 200, "info": "主表保存失败！"}';
		exit();
	}

	adminLog("新增商家介绍", $uid . "=>" . $title);

	$param = array(
		"service"  => "business",
		"template" => "intro",
		"business" => $sid,
		"id"       => $results
	);
	$url = getUrlPath($param);

	echo '{"state": 100, "url": "'.$url.'"}';die;
}

if($dopost == "edit"){

	if(!empty($_POST)){
		//保存到主表
		$archives = $dsql->SetQuery("UPDATE `#@__".$tab."_about` SET `uid` = '$uid', `title` = '$title', `body` = '$body', `weight` = '$weight' WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "update");

		if($results != "ok"){
			echo '{"state": 200, "info": "主表保存失败！"}';
			exit();
		}

		adminLog("修改商家介绍信息", $uid . "=>" . $title);

		$param = array(
			"service"  => "business",
			"template" => "intro",
			"business" => $sid,
			"id"       => $id
		);
		$url = getUrlPath($param);

		echo '{"state": 100, "url": "'.$url.'"}';die;
	}elseif(!empty($id)){

		//主表信息
		$archives = $dsql->SetQuery("SELECT * FROM `#@__".$tab."_about` WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "results");

		if(!empty($results)){

			$uid    = $results[0]['uid'];
			$title  = $results[0]['title'];
			$body   = $results[0]['body'];
			$weight = $results[0]['weight'];

		}else{
			ShowMsg('要修改的信息不存在或已删除！', "-1");
			die;
		}

	}
}

if($dopost == "getList"){
	$pagestep = $pagestep == "" ? 10 : $pagestep;
	$page     = $page == "" ? 1 : $page;

	$where = "";

	//城市管理员
	if($userType == 3){
		if($adminCityIds){
			$where .= " AND l.`cityid` in ($adminCityIds)";
		}else{
			$where .= " AND 1 = 2";
		}
	}

	if($sKeyword != ""){
		$userSql = $dsql->SetQuery("SELECT l.`id` FROM `#@__member` m LEFT JOIN `#@__".$tab."_list` l ON l.`uid` = m.`id` WHERE m.`phone` like '%$sKeyword%' OR m.`company` like '%$sKeyword%' OR l.`title` like '%$sKeyword%'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			$userid = array();
			foreach($userResult as $key => $user){
				if($user['id']){
					array_push($userid, $user['id']);
				}
			}
			if(!empty($userid)){
				$where .= " AND (a.`uid` in (".join(",", $userid).") OR a.`title` like '%$sKeyword%')";
			}
		}

		if(empty($userid)){
			$where .= " AND a.`title` like '%$sKeyword%'";
		}
	}

	$archives = $dsql->SetQuery("SELECT a.`id` FROM `#@__".$tab."_about` a LEFT JOIN `#@__business_list` l ON l.`id` = a.`uid` WHERE 1 = 1");

	//总条数
	$totalCount = $dsql->dsqlOper($archives.$where, "totalCount");
	//总分页数
	$totalPage = ceil($totalCount/$pagestep);

	$where .= " order by a.`id` desc";

	$atpage = $pagestep*($page-1);
	$where .= " LIMIT $atpage, $pagestep";
	$archives = $dsql->SetQuery("SELECT a.`id`, a.`uid`, a.`title`, a.`weight`, a.`click`, a.`pubdate` FROM `#@__".$tab."_about` a LEFT JOIN `#@__business_list` l ON l.`id` = a.`uid` WHERE 1 = 1".$where);
	$results = $dsql->dsqlOper($archives, "results");

	if(count($results) > 0){
		$list = array();
		foreach ($results as $key=>$value) {
			$list[$key]["id"] = $value["id"];

			$list[$key]["uid"] = $value["uid"];
			$userSql = $dsql->SetQuery("SELECT `id`, `title` FROM `#@__".$tab."_list` WHERE `id` = ". $value['uid']);
			$username = $dsql->getTypeName($userSql);
			$list[$key]["store"] = $username[0]["title"];

			$list[$key]["title"] = $value["title"];
			$list[$key]["weight"] = $value["weight"];
			$list[$key]["click"] = $value["click"];
			$list[$key]["pubdate"] = date('Y-m-d H:i:s', $value["pubdate"]);

			$param = array(
				"service"  => "business",
				"template" => "intro",
				"business" => $username[0]["id"],
				"id"       => $value['id']
			);
			$list[$key]['url'] = getUrlPath($param);

			$param = array(
				"service"  => "business",
				"template" => "detail",
				"business" => $username[0]["id"]
			);
			$list[$key]['storeUrl'] = getUrlPath($param);
		}

		if(count($list) > 0){
			echo '{"state": 100, "info": '.json_encode("获取成功").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.'}, "businessAbout": '.json_encode($list).'}';
		}else{
			echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.'}}';
		}

	}else{
		echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.'}}';
	}
	die;

//删除
}elseif($dopost == "del"){
	if($id != ""){

		$each = explode(",", $id);
		$error = array();
		$title = array();
		foreach($each as $val){

			//城市管理员
			if($userType == 3){
				if($adminCityIds){
					$where = " AND l.`cityid` in ($adminCityIds)";
				}else{
					$where = " AND 1 = 2";
				}
			}

			$archives = $dsql->SetQuery("SELECT a.* FROM `#@__".$tab."_about` a LEFT JOIN `#@__business_list` l ON l.`id` = a.`uid` WHERE a.`id` = ".$val.$where);
			$results = $dsql->dsqlOper($archives, "results");
			if($results){

				//删除缩略图
				array_push($title, $results[0]['title']);

				//删除内容图片
				$body = $results[0]['body'];
				if(!empty($body)){
					delEditorPic($body, "business");
				}

				//删除表
				$archives = $dsql->SetQuery("DELETE FROM `#@__".$tab."_about` WHERE `id` = ".$val);
				$results = $dsql->dsqlOper($archives, "update");
				if($results != "ok"){
					$error[] = $val;
				}
			}else{
				$error[] = $val;
			}
		}
		if(!empty($error)){
			echo '{"state": 200, "info": '.json_encode($error).'}';
		}else{
			adminLog("删除商家介绍信息", $id."：".join(", ", $title));
			echo '{"state": 100, "info": '.json_encode("修改成功！").'}';
		}
		die;

	}
	die;

}

//验证模板文件
if(file_exists($tpl."/".$templates)){

	$businessList = array();
	if($userType == 3){
		$sql = $dsql->SetQuery("SELECT `id`, `title` FROM `#@__business_list` WHERE `cityid` in ($adminCityIds) AND `state` = 1 ORDER BY `id` DESC");
	}else{
		$sql = $dsql->SetQuery("SELECT `id`, `title` FROM `#@__business_list` WHERE `state` = 1 ORDER BY `id` DESC");
	}
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret){
		foreach ($ret as $key => $value) {
			array_push($businessList, array(
				"id" => $value['id'],
				"title" => $value['title']
			));
		}
	}
	$huoniaoTag->assign('businessList', $businessList);
	$huoniaoTag->assign('dopost', $dopost);
	$huoniaoTag->assign('id', $id);
	$huoniaoTag->assign('uid', $uid);
	$huoniaoTag->assign('title', $title);
	$huoniaoTag->assign('body', $body);
	$huoniaoTag->assign('weight', $weight);

	//js
	$huoniaoTag->assign('cssFile', includeFile('css', $cssFile));
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));
	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/business";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
