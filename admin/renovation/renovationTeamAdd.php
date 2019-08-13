<?php
/**
 * 添加装修设计师
 *
 * @version        $Id: renovationTeamAdd.php 2014-3-5 下午14:29:12 $
 * @package        HuoNiao.Renovation
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__)."/../templates/renovation";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "renovationTeamAdd.html";

$tab = "renovation_team";
$dopost = $dopost ? $dopost : "save";        //操作类型 save添加 edit修改
if($dopost == "edit"){
	$pagetitle = "修改设计师";
	checkPurview("renovationTeamEdit");
}else{
	$pagetitle = "添加设计师";
	checkPurview("renovationTeamAdd");
}

if(empty($userid)) $userid = 0;
if(empty($company)) $company = 0;
if(empty($weight)) $weight = 1;
if(empty($state)) $state = 0;
if(empty($click)) $click = 0;
if(!empty($special)) $special = join(",", $special);
if(!empty($style)) $style = join(",", $style);
$name = $_POST['name'];

if($_POST['submit'] == "提交"){

	if($token == "") die('token传递失败！');
	//二次验证
	if(empty($name)){
		echo '{"state": 200, "info": "请输入姓名！"}';
		exit();
	}

	if($userid == 0 && trim($user) == ''){
		echo '{"state": 200, "info": "请选择会员名"}';
		exit();
	}
	if($userid == 0){
		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `username` = '".$user."'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if(!$userResult){
			echo '{"state": 200, "info": "会员不存在，请在联想列表中选择"}';
			exit();
		}
		$userid = $userResult[0]['id'];
	}else{
		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `id` = ".$userid);
		$userResult = $dsql->dsqlOper($userSql, "results");
		if(!$userResult){
			echo '{"state": 200, "info": "会员不存在，请在联想列表中选择"}';
			exit();
		}
	}

	if($companyid == 0 && trim($company) == ''){
		echo '{"state": 200, "info": "请选择所属公司"}';
		exit();
	}
	if($companyid == 0){
		$comSql = $dsql->SetQuery("SELECT `id` FROM `#@__renovation_store` WHERE `company` = '".$company."'");
		$comResult = $dsql->dsqlOper($comSql, "results");
		if(!$comResult){
			echo '{"state": 200, "info": "公司不存在，请在联想列表中选择"}';
			exit();
		}
		$companyid = $comResult[0]['id'];
	}else{
		$comSql = $dsql->SetQuery("SELECT `id` FROM `#@__renovation_store` WHERE `id` = ".$companyid);
		$comResult = $dsql->dsqlOper($comSql, "results");
		if(!$comResult){
			echo '{"state": 200, "info": "公司不存在，请在联想列表中选择"}';
			exit();
		}
	}

	//检测是否已经注册
	if($dopost == "save"){

		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__".$tab."` WHERE `name` = '".$name."' AND `company` = '".$companyid."'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			echo '{"state": 200, "info": "姓名已存在，不可以重复添加！"}';
			exit();
		}

		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__".$tab."` WHERE `userid` = '".$userid."'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			echo '{"state": 200, "info": "会员已经绑定过其它设计师，不可以重复绑定！"}';
			exit();
		}

	}else{

		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__".$tab."` WHERE `name` = '".$name."' AND `company` = '".$companyid."' AND `id` != ". $id);
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			echo '{"state": 200, "info": "姓名已存在，不可以重复添加！"}';
			exit();
		}

		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__".$tab."` WHERE `userid` = '".$userid."' AND `id` != ". $id);
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			echo '{"state": 200, "info": "会员已经绑定过其它名字，不可以重复绑定！"}';
			exit();
		}

	}

}

if($dopost == "save" && $submit == "提交"){
	//保存到表
	$archives = $dsql->SetQuery("INSERT INTO `#@__".$tab."` (`name`, `works`, `post`, `userid`, `photo`, `company`, `special`, `style`, `idea`, `note`, `weight`, `click`, `state`, `pubdate`) VALUES ('$name', '$works', '$post', '$userid', '$litpic', '$companyid', '$special', '$style', '$idea', '$note', '$weight', '$click', '$state', '".GetMkTime(time())."')");
	$aid = $dsql->dsqlOper($archives, "lastid");

	if($aid){
		adminLog("添加装修设计师", $title);

		$param = array(
			"service"     => "renovation",
			"template"    => "designer-detail",
			"id"          => $aid
		);
		$url = getUrlPath($param);

		echo '{"state": 100, "url": "'.$url.'"}';
	}else{
		echo '{"state": 200, "info": '.json_encode("保存到数据库失败！").'}';
	}
	die;
}elseif($dopost == "edit"){

	if($submit == "提交"){
		//保存到表
		$archives = $dsql->SetQuery("UPDATE `#@__".$tab."` SET `name` = '$name', `works` = '$works', `post` = '$post', `userid` = '$userid', `photo` = '$litpic', `company` = '$companyid', `special` = '$special', `style` = '$style', `idea` = '$idea', `note` = '$note', `weight` = '$weight', `click` = '$click', `state` = '$state' WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "update");

		if($results == "ok"){
			adminLog("修改装修设计师", $title);

			$param = array(
				"service"     => "renovation",
				"template"    => "designer-detail",
				"id"          => $id
			);
			$url = getUrlPath($param);

			echo '{"state": 100, "info": '.json_encode('修改成功！').', "url": "'.$url.'"}';
		}else{
			echo '{"state": 200, "info": '.json_encode('修改失败！').'}';
		}
		die;
	}

	if(!empty($id)){

		//主表信息
		$archives = $dsql->SetQuery("SELECT * FROM `#@__".$tab."` WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "results");

		if(!empty($results)){

			$name     = $results[0]['name'];
			$works    = $results[0]['works'];
			$post     = $results[0]['post'];
			$userid   = $results[0]['userid'];
			$litpic   = $results[0]['photo'];
			$company  = $results[0]['company'];
			$special  = $results[0]['special'];
			$style    = $results[0]['style'];
			$idea     = $results[0]['idea'];
			$note     = $results[0]['note'];
			$weight   = $results[0]['weight'];
			$click    = $results[0]['click'];
			$state    = $results[0]['state'];

		}else{
			ShowMsg('要修改的信息不存在或已删除！', "-1");
			die;
		}

	}else{
		ShowMsg('要修改的信息参数传递失败，请联系管理员！', "-1");
		die;
	}

}

//验证模板文件
if(file_exists($tpl."/".$templates)){

	//js
	$jsFile = array(
		'ui/jquery.dragsort-0.5.1.min.js',
		'publicUpload.js',
		'admin/renovation/renovationTeamAdd.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

	$huoniaoTag->assign('dopost', $dopost);
	$huoniaoTag->assign('pagetitle', $pagetitle);

	global $cfg_photoSize;
	global $cfg_photoType;
	$huoniaoTag->assign('thumbSize', $cfg_photoSize);
	$huoniaoTag->assign('thumbType', "*.".str_replace("|", ";*.", $cfg_photoType));
	$huoniaoTag->assign('id', $id);

	$huoniaoTag->assign('name', $name);
	$huoniaoTag->assign('works', $works);
	$huoniaoTag->assign('post', $post);

	$huoniaoTag->assign('userid', $userid);
	$userSql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = ". $userid);
	$username = $dsql->getTypeName($userSql);
	$huoniaoTag->assign('username', $username[0]['username']);

	$huoniaoTag->assign('litpic', $litpic);

	$huoniaoTag->assign('companyid', $company);
	$userSql = $dsql->SetQuery("SELECT `company` FROM `#@__renovation_store` WHERE `id` = ". $company);
	$username = $dsql->getTypeName($userSql);
	$huoniaoTag->assign('company', $username[0]['company']);

	//专长
	$archives = $dsql->SetQuery("SELECT * FROM `#@__renovation_type` WHERE `parentid` = 5 ORDER BY `weight` ASC");
	$results = $dsql->dsqlOper($archives, "results");
	$speciallist = array();
	$specialval  = array();
	foreach($results as $value){
		array_push($speciallist, $value['typename']);
		array_push($specialval, $value['id']);
	}
	$huoniaoTag->assign('speciallist', $speciallist);
	$huoniaoTag->assign('specialval', $specialval);
	$huoniaoTag->assign('special', explode(",", $special));

	//风格
	$archives = $dsql->SetQuery("SELECT * FROM `#@__renovation_type` WHERE `parentid` = 4 ORDER BY `weight` ASC");
	$results = $dsql->dsqlOper($archives, "results");
	$stylelist = array();
	$styleval  = array();
	foreach($results as $value){
		array_push($stylelist, $value['typename']);
		array_push($styleval, $value['id']);
	}
	$huoniaoTag->assign('stylelist', $stylelist);
	$huoniaoTag->assign('styleval', $styleval);
	$huoniaoTag->assign('style', explode(",", $style));

	$huoniaoTag->assign('idea', $idea);
	$huoniaoTag->assign('note', $note);
	$huoniaoTag->assign('click', $click == "" ? "1" : $click);
	$huoniaoTag->assign('weight', $weight == "" ? "1" : $weight);

	//显示状态
	$huoniaoTag->assign('stateopt', array('0', '1', '2'));
	$huoniaoTag->assign('statenames',array('未认证','已认证','认证失败'));
	$huoniaoTag->assign('state', $state == "" ? 1 : $state);
	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/renovation";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
