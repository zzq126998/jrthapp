<?php
/**
 * 添加二手房
 *
 * @version        $Id: houseSaleAdd.php 2014-1-8 下午16:34:13 $
 * @package        HuoNiao.House
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__)."/../templates/house";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "houseSaleAdd.html";

$tab = "house_sale";
$dopost = $dopost ? $dopost : "save";        //操作类型 save添加 edit修改
if($dopost == "edit"){
	$pagetitle = "修改二手房";
	checkPurview("houseSaleEdit");
}else{
	$pagetitle = "添加二手房";
	checkPurview("houseSaleAdd");
}

if(empty($communityid)) $communityid = 0;
if(empty($addrid)) $addrid = 0;
if(empty($cityid)) $cityid = 0;
if(empty($price)) $price = 0;
if(empty($unitprice)) $unitprice = 0;
if(empty($bno)) $bno = 0;
if(empty($floor)) $floor = 0;
if(empty($buildage)) $buildage = 0;
if(empty($weight)) $weight = 1;
if(empty($state)) $state = 0;
if(empty($userid)) $userid = 0;
if(!empty($flag)) $flag = join(",", $flag);

if($_POST['submit'] == "提交"){

	if($token == "") die('token传递失败！');
	//二次验证
	if(empty($title)){
		echo '{"state": 200, "info": "请输入二手房名称！"}';
		exit();
	}

	if(trim($communityid) != 0){
		$communitySql = $dsql->SetQuery("SELECT `id`,`cityid`,`addr`, `longitude`, `latitude` FROM `#@__house_community` WHERE `id` = ".$communityid);
		$communityResult = $dsql->dsqlOper($communitySql, "results");
		if(!$communityResult){
			echo '{"state": 200, "info": "小区不存在，请在联想列表中选择"}';
			exit();
		}else{
		    $cityid = $communityResult[0]['cityid'];
	    	$address = $communityResult[0]['addr'];
	    	$longitude = $communityResult[0]['longitude'];
	    	$latitude = $communityResult[0]['latitude'];
        }
	}else{
		if(empty($community)){
			echo '{"state": 200, "info": "请输入小区名称！"}';
			exit();
		}
		if(empty($addrid)){
			echo '{"state": 200, "info": "请选择小区所处区域！"}';
			exit();
		}
		if(empty($address)){
			echo '{"state": 200, "info": "请输入小区详细地址！"}';
			exit();
		}
		if(empty($address)){
			echo '{"state": 200, "info": "请输入小区详细地址！"}';
			exit();
		}
		//坐标
		if(!empty($lnglat)){
			$lnglat = explode(",", $lnglat);
			$longitude = $lnglat[0];
			$latitude  = $lnglat[1];
		}
		if(empty($longitude) || empty($latitude)){
			echo '{"state": 200, "info": "请选择坐标！"}';
			exit();
		}
	}

	if($usertype == 0){
		if(empty($username)){
			echo '{"state": 200, "info": "请输入联系人！"}';
			exit();
		}
		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `username` = '".$users."'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if(!$userResult){
			echo '{"state": 200, "info": "会员不存在，请重新选择"}';
			exit();
		}
		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__house_zjuser` WHERE `userid` = '".$userResult[0]['id']."'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			echo '{"state": 200, "info": "该会员为经纪人，请选择个人会员！"}';
			exit();
		}
		if(empty($contact)){
			echo '{"state": 200, "info": "请输入联系电话！"}';
			exit();
		}
	}else{
		if($userid == 0 && trim($user) == ''){
			echo '{"state": 200, "info": "请选择中介"}';
			exit();
		}
		if($userid == 0){
			$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `username` = '".$user."'");
			$userResult = $dsql->dsqlOper($userSql, "results");
			if(!$userResult){
				echo '{"state": 200, "info": "会员不存在，请重新选择"}';
				exit();
			}
			$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__house_zjuser` WHERE `userid` = '".$userResult[0]['id']."'");
			$userResult = $dsql->dsqlOper($userSql, "results");
			if(!$userResult){
				echo '{"state": 200, "info": "经纪人不存在，请在联想列表中选择"}';
				exit();
			}

			$userid = $userResult[0]['id'];
		}else{
			$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__house_zjuser` WHERE `id` = ".$userid);
			$userResult = $dsql->dsqlOper($userSql, "results");
			if(!$userResult){
				echo '{"state": 200, "info": "经纪人不存在，请在联想列表中选择"}';
				exit();
			}
		}
	}

	if(empty($price)){
//		echo '{"state": 200, "info": "请输入报价！"}';
//		exit();
	}

	if(empty($protype)){
		echo '{"state": 200, "info": "请选择物业类型"}';
		exit();
	}

	if(trim($note) == ""){
		// echo '{"state": 200, "info": "请输入房源介绍"}';
		// exit();
	}

	$elevator = (int)$elevator;

	// 全景
	$qj_type = (int)$typeidArr;
	if($qj_type == 0){
		$qj_file = $qj_pic;
	}else{
		$qj_file = $qj_url;
	}


	// 201903新增
	$buildpos  = $dong."||".$danyuan."||".$shi;
    if((int)$floorspr && (int)$floorspr > (int)$bno && (int)$floor >= (int)$floorspr){
        $floortype = 1;
    }else{
        $floortype = 0;
    }
    $floorspr  = $floortype ? (int)$floorspr : 0;
	$paytax    = (int)$paytax;
	$rights_to = (int)$rights_to;
	$sex       = (int)$sex;
	$wx_tel    = (int)$wx_tel;

}

if($dopost == "save" && $submit == "提交"){
	//保存到表
	$archives = $dsql->SetQuery("INSERT INTO `#@__".$tab."` (`cityid`, `title`, `communityid`, `community`, `addrid`, `address`, `litpic`, `price`, `unitprice`, `protype`, `room`, `hall`, `guard`, `bno`, `floor`, `area`, `direction`, `zhuangxiu`, `buildage`, `usertype`, `userid`, `username`, `contact`, `note`, `mbody`, `weight`, `state`, `flag`, `pubdate`, `elevator`, `video`, `qj_type`, `qj_file`, `longitude`, `latitude`, `buildpos`, `floortype`, `floorspr`, `paytax`, `rights_to`, `sex`, `wx_tel`, `sourceid`) 
		VALUES 
		('$cityid', '$title', '$communityid', '$community', '$addrid', '$address', '$litpic', '$price', '$unitprice', '$protype', '$room', '$hall', '$guard', '$bno', '$floor', '$area', '$direction', '$zhuangxiu', '$buildage', '$usertype', '$userid', '$username', '$contact', '$note', '$mbody', '$weight', '$state', '$flag', '".GetMkTime(time())."', '$elevator', '$video', '$qj_type', '$qj_file', '$longitude', '$latitude', '$buildpos', '$floortype', '$floorspr', '$paytax', '$rights_to', '$sex', '$wx_tel', '$sourceid')");
	$aid = $dsql->dsqlOper($archives, "lastid");

	//保存图集表
	if($imglist != ""){
		$picList = explode(",",$imglist);
		foreach($picList as $k => $v){
			$picInfo = explode("|", $v);
			$pics = $dsql->SetQuery("INSERT INTO `#@__house_pic` (`type`, `aid`, `picPath`, `picInfo`) VALUES ('housesale', '$aid', '$picInfo[0]', '$picInfo[1]')");
			$dsql->dsqlOper($pics, "update");
		}
	}

	if($aid){

		if($state == 1){
			updateCache("house_sale_list", 300);
			clearCache("house_sale_list", "key");
			clearCache("house_sale_total", "key");
		}

		adminLog("添加二手房信息", $title);
		$param = array(
			"service"  => "house",
			"template" => "sale-detail",
			"id"       => $aid
		);
		$url = getUrlPath($param);

		echo '{"state": 100, "url": "'.$url.'"}';
	}else{
		echo '{"state": 200, "info": '.json_encode("保存到数据库失败！").'}';
	}
	die;
}elseif($dopost == "edit"){

	if($submit == "提交"){

		$sql = $dsql->SetQuery("SELECT `state` FROM `#@__".$tab."` WHERE `id` = ".$id);
		$res = $dsql->dsqlOper($sql, "results");
		$state_ = $res[0]['state'];

		//保存到表
		$archives = $dsql->SetQuery("UPDATE `#@__".$tab."` SET `cityid` = '$cityid', `title` = '$title', `communityid` = '$communityid', `community` = '$community', `addrid` = '$addrid', `address` = '$address', `litpic` = '$litpic', `price` = '$price', `unitprice` = '$unitprice', `protype` = '$protype', `room` = '$room', `hall` = '$hall', `guard` = '$guard', `bno` = '$bno', `floor` = '$floor', `area` = '$area', `direction` = '$direction', `zhuangxiu` = '$zhuangxiu', `buildage` = '$buildage', `usertype` = '$usertype', `userid` = '$userid', `username` = '$username', `contact` = '$contact', `note` = '$note', `mbody` = '$mbody', `weight` = '$weight', `state` = '$state', `flag` = '$flag', `elevator` = '$elevator', `video` = '$video', `qj_type` = '$qj_type', `qj_file` = '$qj_file', `longitude` = '$longitude', `latitude` = '$latitude', `buildpos` = '$buildpos', `floortype` = '$floortype', `floorspr` = '$floorspr', `paytax` = '$paytax', `rights_to` = '$rights_to', `sex` = '$sex', `wx_tel` = '$wx_tel', `sourceid` = '$sourceid' WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "update");

		//先删除文档所属图集
		$archives = $dsql->SetQuery("DELETE FROM `#@__house_pic` WHERE `type` = 'housesale' AND `aid` = ".$id);
		$dsql->dsqlOper($archives, "update");

		//保存图集表
		if($imglist != ""){
			$picList = explode(",", $imglist);
			foreach($picList as $k => $v){
				$picInfo = explode("|", $v);
				$pics = $dsql->SetQuery("INSERT INTO `#@__house_pic` (`type`, `aid`, `picPath`, `picInfo`) VALUES ('housesale', '$id', '$picInfo[0]', '$picInfo[1]')");
				$dsql->dsqlOper($pics, "update");
			}
		}

		if($results == "ok"){

			// 清除缓存
			clearCache("house_sale_detail", $id);
			checkCache("house_sale_list", $id);
			if(($state != 1 && $state_ == 1)|| ($state == 1 && $state_ != 1)){
				clearCache("house_sale_total", "key");
			}

			adminLog("修改二手房信息", $title);
			$param = array(
				"service"  => "house",
				"template" => "sale-detail",
				"id"       => $id
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

			foreach ($results[0] as $key => $value) {
				${$key} = $value;
			}

			//图表信息
			$archives = $dsql->SetQuery("SELECT * FROM `#@__house_pic` WHERE `type` = 'housesale' AND `aid` = ".$id." ORDER BY `id` ASC");
			$results = $dsql->dsqlOper($archives, "results");

			if(!empty($results)){
				$imglist = array();
				foreach($results as $key => $value){
					$imglist[$key]["path"] = $value["picPath"];
					$imglist[$key]["info"] = $value["picInfo"];
				}
				$imglist = json_encode($imglist);
			}else{
				$imglist = "''";
			}

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
		'publicAddr.js',
		'admin/house/houseSaleAdd.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

	$huoniaoTag->assign('dopost', $dopost);
	require_once(HUONIAOINC."/config/house.inc.php");
	global $customUpload;
	if($customUpload == 1){
		global $custom_thumbSize;
		global $custom_thumbType;
		global $custom_atlasSize;
		global $custom_atlasType;
		$huoniaoTag->assign('thumbSize', $custom_thumbSize);
		$huoniaoTag->assign('thumbType', "*.".str_replace("|", ";*.", $custom_thumbType));
		$huoniaoTag->assign('atlasSize', $custom_atlasSize);
		$huoniaoTag->assign('atlasType', "*.".str_replace("|", ";*.", $custom_atlasType));
	}
	$huoniaoTag->assign('id', $id);

	$huoniaoTag->assign('title', $title);
	$huoniaoTag->assign('communityid', $communityid);
	if($communityid == 0){
		$huoniaoTag->assign('community', $community);
	}else{
		$communitySql = $dsql->SetQuery("SELECT `id` FROM `#@__house_community` WHERE `id` = ".$communityid);
		$communityResult = $dsql->dsqlOper($communitySql, "results");
		$huoniaoTag->assign('community', $community);
	}
	$huoniaoTag->assign('address', $address);
	//区域
	$huoniaoTag->assign('addrListArr', json_encode($dsql->getTypeList(0, "houseaddr")));
	$huoniaoTag->assign('addrid', $addrid == "" ? 0 : $addrid);
    $huoniaoTag->assign('cityid', $cityid == "" ? 0 : $cityid);


	$huoniaoTag->assign('litpic', $litpic);
	$huoniaoTag->assign('price', $price == 0 ? 0 : $price);
	$huoniaoTag->assign('unitprice', $unitprice == 0 ? "" : $unitprice);

	//物业类型
	$archives = $dsql->SetQuery("SELECT * FROM `#@__houseitem` WHERE `parentid` = 1 ORDER BY `weight` ASC");
	$results = $dsql->dsqlOper($archives, "results");
	$list = array(0 => '请选择');
	foreach($results as $value){
		$list[$value['id']] = $value['typename'];
	}
	$huoniaoTag->assign('protypeList', $list);
	$huoniaoTag->assign('protype', $protype == "" ? 0 : $protype);

	//室
	$list = array();
	for($i = 1; $i < 11; $i++){
		$list[$i] = $i;
	}
	$huoniaoTag->assign('roomList', $list);
	$huoniaoTag->assign('room', $room == "" ? 0 : $room);
	//厅
	$list = array();
	for($i = 0; $i < 11; $i++){
		$list[$i] = $i;
	}
	$huoniaoTag->assign('hallList', $list);
	$huoniaoTag->assign('hall', $hall == "" ? 0 : $hall);
	//卫
	$list = array();
	for($i = 0; $i < 11; $i++){
		$list[$i] = $i;
	}
	$huoniaoTag->assign('guardList', $list);
	$huoniaoTag->assign('guard', $guard == "" ? 0 : $guard);

	$huoniaoTag->assign('bno', $bno == 0 ? "" : $bno);
	$huoniaoTag->assign('floor', $floor == 0 ? "" : $floor);
	$huoniaoTag->assign('area', $area);

	//房屋朝向
	$archives = $dsql->SetQuery("SELECT * FROM `#@__houseitem` WHERE `parentid` = 4 ORDER BY `weight` ASC");
	$results = $dsql->dsqlOper($archives, "results");
	$directionList = array(0 => '请选择');
	foreach($results as $value){
		$directionList[$value['id']] = $value['typename'];
	}
	$huoniaoTag->assign('directionList', $directionList);
	$huoniaoTag->assign('direction', $direction == "" ? 0 : $direction);

	//装修情况
	$archives = $dsql->SetQuery("SELECT * FROM `#@__houseitem` WHERE `parentid` = 2 ORDER BY `weight` ASC");
	$results = $dsql->dsqlOper($archives, "results");
	$list = array(0 => '请选择');
	foreach($results as $value){
		$list[$value['id']] = $value['typename'];
	}
	$huoniaoTag->assign('zhuangxiuList', $list);
	$huoniaoTag->assign('zhuangxiu', $zhuangxiu == "" ? 0 : $zhuangxiu);

	$huoniaoTag->assign('buildage', $buildage == 0 ? "" : $buildage);

	//房源性质
	$huoniaoTag->assign('typeopt', array('0', '1'));
	$huoniaoTag->assign('typenames',array('个人','中介'));
	$huoniaoTag->assign('usertype', $usertype == "" ? 0 : $usertype);

	$huoniaoTag->assign('userid', $userid);
	$huoniaoTag->assign('contact', $contact);
	$huoniaoTag->assign('username', $username);
	if($usertype == 0){
		$userSql = $dsql->SetQuery("SELECT `username`, `phone` FROM `#@__member` WHERE `id` = ". $userid);
		$username = $dsql->getTypeName($userSql);
		$huoniaoTag->assign('user', $username[0]["username"]);
	}else{
		//会员
		$userSql = $dsql->SetQuery("SELECT `userid` FROM `#@__house_zjuser` WHERE `id` = ". $userid);
		$username = $dsql->getTypeName($userSql);
		if($username){
			$userSql = $dsql->SetQuery("SELECT `username`, `phone` FROM `#@__member` WHERE `id` = ". $username[0]["userid"]);
			$username = $dsql->getTypeName($userSql);
			$huoniaoTag->assign('user', $username[0]["username"]);
		}
	}

	$huoniaoTag->assign('note', $note);
	$huoniaoTag->assign('mbody', $mbody);
	$huoniaoTag->assign('weight', $weight == "" ? "50" : $weight);

	//显示状态
	$huoniaoTag->assign('stateopt', array('0', '1', '2'));
	$huoniaoTag->assign('statenames',array('待审核','已审核','审核拒绝'));
	$huoniaoTag->assign('state', $state == "" ? 1 : $state);

	//属性
	$huoniaoTag->assign('flaglist', array("急售", "免税", "地铁", "校区房", "满五年", "推荐"));
	$huoniaoTag->assign('flagval', array("0", "1", "2", "3", "4", "5"));
	$huoniaoTag->assign('flag', explode(",", $flag));

	// 是否有电梯
	$huoniaoTag->assign('elevatorNames', array("有", "无"));
	$huoniaoTag->assign('elevatorOpt', array("1", "2"));
	$huoniaoTag->assign('elevator', $elevator == "" ? 0 : (int)$elevator);

	// 视频 -------------
	$huoniaoTag->assign('video', $video);

	// 全景 -------------
	$huoniaoTag->assign('qj_type', (int)$qj_type);
	$huoniaoTag->assign('qj_file', $qj_file);
	$huoniaoTag->assign('typeidArr', array('0', '1'));
	$huoniaoTag->assign('typeidNames',array('图片','url'));

	$huoniaoTag->assign('lnglat', $longitude.','.$latitude);

	$huoniaoTag->assign('imglist', empty($imglist) ? "''" : $imglist);


	if($buildpos){
		$arr = explode('||', $buildpos);
		$huoniaoTag->assign('dong', $arr[0]);
		$huoniaoTag->assign('danyuan', $arr[1]);
		$huoniaoTag->assign('shi', $arr[2]);
	}
	$huoniaoTag->assign('floorspr', $floorspr);
	$huoniaoTag->assign('sex', $sex);
	$huoniaoTag->assign('sourceid', $sourceid);

	// 单层跃层
	$huoniaoTag->assign('floortypeNames', array("单层", "跃层"));
	$huoniaoTag->assign('floortypeOpt', array("0", "1"));
	$huoniaoTag->assign('floortype', $floortype == "" ? 0 : (int)$floortype);

	// 付税方式
	$huoniaoTag->assign('paytaxNames', array("双方各自付税", "房主净得价"));
	$huoniaoTag->assign('paytaxOpt', array("1", "2"));
	$huoniaoTag->assign('paytax', $paytax == "" ? 0 : (int)$paytax);

	// 产权
	$huoniaoTag->assign('rights_toNames', array("使用权房", "产权房"));
	$huoniaoTag->assign('rights_toOpt', array("1", "2"));
	$huoniaoTag->assign('rights_to', $rights_to == "" ? 0 : (int)$rights_to);

	// 手机即微信
	$huoniaoTag->assign('wx_telNames', array("是", "否"));
	$huoniaoTag->assign('wx_telOpt', array("1", "0"));
	$huoniaoTag->assign('wx_tel', $wx_tel == "" ? 0 : (int)$wx_tel);

	// 联系人性别
	$huoniaoTag->assign('sexNames', array("男", "女"));
	$huoniaoTag->assign('sexOpt', array("1", "2"));
	$huoniaoTag->assign('sex', $sex == "" ? 0 : (int)$sex);

	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/house";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
