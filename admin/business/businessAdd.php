<?php
/**
 * 修改商家信息
 *
 * @version        $Id: businessAdd.php 2017-3-24 上午10:04:10 $
 * @package        HuoNiao.Business
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("businessList");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__)."/../templates/business";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "businessAdd.html";

global $handler;
$handler = true;

$action     = "business";
$pagetitle  = "修改商家信息";
$dopost     = $dopost ? $dopost : "save";        //操作类型 save添加 edit修改

$authattr = isset($authattr) ? join(',',$authattr) : '';
$isbid = empty($isbid) ? 0 : $isbid;


//验证商家是否入驻成功
if($dopost == "edit"){
	$isJoin = 1;
	$sql = $dsql->SetQuery("SELECT l.`id` FROM `#@__business_list` l LEFT JOIN `#@__business_order` o ON o.`bid` = l.`id` WHERE l.`state` = 3 AND o.`id` != '' AND l.`id` = $id");
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret){
		$isJoin = 0;
	}
}


//模糊匹配会员
if($dopost == "checkUser"){

	$key = $_POST['key'];
	if(!empty($key)){
	    if($userType == 0)
            $where = "";
	    if($userType == 3)
            $where = " AND `addr` in ($adminCityIds)";
		if(!empty($id)){
			$where = " AND `id` != $id";
		}
		$where .= " AND (`mtype` = 1 || `mtype` = 2)";
		$userSql = $dsql->SetQuery("SELECT `id`, `username`, `company`, `nickname` FROM `#@__member` WHERE (`username` like '%$key%' OR `company` like '%$key%' OR `nickname` like '%$key%')".$where." LIMIT 0, 10");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			echo json_encode($userResult);
		}
	}
	die;
}

if($submit == "提交"){
	if($token == "") die('token传递失败！');

	$id = (int)$id;
	$uid = (int)$uid;

	//表单二次验证
	if($uid == 0 && !empty($username)){
		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `company` = '".$username."'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if(!$userResult){
			echo '{"state": 200, "info": "会员不存在，请在联想列表中选择"}';
			exit();
		}
		$uid = $userResult[0]['id'];
	}

	if(is_numeric($uid) && $uid != 0){
		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `id` = ".$uid);
		$userResult = $dsql->dsqlOper($userSql, "results");
		if(!$userResult){
			echo '{"state": 200, "info": "会员不存在，请在联想列表中选择"}';
			exit();
		}

		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__".$action."_list` WHERE `uid` = '".$uid."' AND `id` != ". $id);
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			echo '{"state": 200, "info": "此会员已授权管理其它商家，一个会员不可以管理多个商家！"}';
			exit();
		}
	}

	if($title == ''){
		echo '{"state": 200, "info": "请输入店铺名称"}';
		exit();
	}

	if(trim($logo) == ''){
		echo '{"state": 200, "info": "请上传店铺LOGO"}';
		exit();
	}

	if(trim($typeid) == ''){
		echo '{"state": 200, "info": "请选择经营品类"}';
		exit();
	}

	if(trim($addrid) == ''){
		echo '{"state": 200, "info": "请选择所在区域"}';
		exit();
	}

	if(empty($expired)){
		echo '{"state": 200, "info": "请填写过期时间"}';
		exit();
	}else{
		$expired = GetMkTime($expired);
	}

	$lnglat = explode(",", $lnglat);
	$lng = $lnglat[0];
	$lat = $lnglat[1];

	$time = time();

	//打印机
    $printArr = array();
    if($print_config){
        array_push($printArr, array(
            "mcode"  => $print_config['mcode'][0],
            "msign"  => $print_config['msign'][0]
        ));
    }
    $print_config = serialize($printArr);

	$bind_print = (int)$bind_print;
	$print_state = 0;

	$wifi = (int)$wifi;
	$state = (int)$state;
	$name = $_POST['name'];
	$type = (int)$type;
	$week = $weeks ? str_replace(';', '至', $weeks) : "";

	$tag = $tag ? join("|", $tag) : "";

	// 全景
	$qj_type = (int)$typeidArr;
	if($qj_type == 0){
		$qj_file = $qj_pic;
	}else{
		$qj_file = $qj_url;
	}

}

if($dopost == "add" && $submit == "提交"){

	//保存到主表
	$archives = $dsql->SetQuery("INSERT INTO `#@__".$action."_list`
		(`cityid`, `uid`, `title`, `logo`, `typeid`, `addrid`, `address`, `lng`, `lat`, `wechatname`, `wechatcode`, `wechatqr`, `tel`, `qq`, `pics`, `banner`, `jingying`, `certify`, `opentime`, `amount`, `parking`, `wifi`, `wifiname`, `wifipasswd`, `authattr`, `state`, `stateinfo`, `pubdate`, `name`, `areaCode`, `phone`, `email`, `cardnum`, `company`, `licensenum`, `license`, `accounts`, `cardfront`, `cardbehind`, `body`, `bind_print`, `print_config`, `print_state`, `touch_skin`, `type`, `expired`, `tag`, `tag_shop`, `weeks`, `video`, `qj_file`, `custom_nav`, `isbid`, `mappic`, `video_pic`, `qj_type`)
		VALUES
		('$cityid', '$uid', '$title', '$logo', '$typeid', '$addrid', '$address', '$lng', '$lat', '$wechatname', '$wechatcode', '$wechatqr', '$tel', '$qq', '$pics', '$banner', '$jingying', '$certify', '$opentime', '$amount', '$parking', '$wifi', '$wifiname', '$wifipasswd', '$authattr', '$state', '', '$time', '$name', '$areaCode', '$phone', '$email', '$cardnum', '$company', '$licensenum', '$license', '$accounts', '$cardfront', '$cardbehind', '$body', '$bind_print', '$print_config', '$print_state', '$touch_skin', '$type', '$expired', '$tag', '$tag_shop', '$weeks', '$video', '$qj_file', '', '$isbid', '$mappic', '$video_pic', '$qj_type')");
	$results = $dsql->dsqlOper($archives, "lastid");

	if(!is_numeric($results)){
		echo '{"state": 200, "info": "主表保存失败！"}';
		exit();
	}

	if($state == 1){
		$sql = $dsql->SetQuery("UPDATE `#@__member` SET `mtype` = 2 WHERE `id` = $uid AND `mtype` = 1");
		$dsql->dsqlOper($sql, "update");
	}

	adminLog("新增商家", $title);

	$param = array(
		"service"     => "business",
		"template"    => "detail",
		"id"          => $results
	);
	$url = getUrlPath($param);

	echo '{"state": 100, "url": "'.$url.'"}';die;
}

if($dopost == "edit"){

	if($submit == "提交"){

		//查询信息之前的状态
		if($isJoin){
			$sql = $dsql->SetQuery("SELECT `state`, `uid`, `pubdate`, `addrid` FROM `#@__".$action."_list` WHERE `id` = $id");
			$ret = $dsql->dsqlOper($sql, "results");
			if($ret){

				//城市管理员验证权限
				if($userType == 3){
					if($adminCityIds){
						if(!in_array($res[0]['cityid'], explode(',', $adminCityIds))){
							die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能1！").'}');
						}
					}else{
						die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能2！").'}');
					}
				}

				$state_  = $ret[0]['state'];
				$userid     = $ret[0]['uid'];
				$pubdate = $ret[0]['pubdate'];

				//会员消息通知
				if($state != $state_){

					$status = "";

					//等待审核
					if($state == 0){
						$status = "进入等待审核状态。";

					//已审核
					}elseif($state == 1){
						$status = "已经通过审核。";

						//审核失败
					}elseif($state == 2){
						$status = "审核失败。";
					}

					$param = array(
						"service"  => "member",
						"template" => "config",
						"action"   => "business"
					);

					//获取会员名
					$username = "";
					$sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = $userid");
					$ret = $dsql->dsqlOper($sql, "results");
					if($ret){
						$username = $ret[0]['username'];
					}

					//自定义配置
					$config = array(
						"username" => $username,
						"title" => $title,
						"status" => $status,
						"date" => date("Y-m-d H:i:s", time()),
						"fields" => array(
							'keyword1' => '店铺名称',
							'keyword2' => '审核结果',
							'keyword3' => '处理时间'
						)
					);

					updateMemberNotice($userid, "会员-店铺审核通知", $param, $config);
				}
			}
		}

		$state_ = $isJoin ? ", `state` = '$state'" : "";

		//保存到主表
		$archives = $dsql->SetQuery("UPDATE `#@__".$action."_list` SET `cityid` = '$cityid', `uid` = '$uid', `title` = '$title', `logo` = '$logo', `typeid` = '$typeid', `addrid` = '$addrid', `address` = '$address', `lng` = '$lng', `lat` = '$lat', `wechatname` = '$wechatname', `wechatcode` = '$wechatcode', `wechatqr` = '$wechatqr', `tel` = '$tel', `qq` = '$qq', `pics` = '$pics', `banner` = '$banner', `jingying` = '$jingying', `certify` = '$certify', `opentime` = '$opentime', `amount` = '$amount', `parking` = '$parking', `wifi` = '$wifi', `wifiname` = '$wifiname', `wifipasswd` = '$wifipasswd', `authattr` = '$authattr', `name` = '$name', `areaCode` = '$areaCode', `phone` = '$phone', `email` = '$email', `cardnum` = '$cardnum', `company` = '$company', `licensenum` = '$licensenum', `license` = '$license', `accounts` = '$accounts', `cardfront` = '$cardfront', `cardbehind` = '$cardbehind', `body` = '$body', `bind_print` = '$bind_print', `print_config` = '$print_config' ".$state_.", `touch_skin` = '$touch_skin', `type` = '$type', `expired` = '$expired', `tag` = '$tag', `tag_shop` = '$tag_shop', `weeks` = '$weeks', `landmark` = '$landmark', `isbid`='$isbid', `mappic`='$mappic', `video`='$video', `video_pic`='$video_pic', `qj_type`='$qj_type', `qj_file`='$qj_file' WHERE `id` = ".$id);
		$results = $dsql->dsqlOper($archives, "update");
		if($results != "ok"){
			echo '{"state": 200, "info": "主表保存失败！"}';
			exit();
		}

		if($isJoin && $state == 1){
			$sql = $dsql->SetQuery("UPDATE `#@__member` SET `mtype` = 2 WHERE `id` = $uid AND `mtype` = 1");
			$dsql->dsqlOper($sql, "update");
		}

		adminLog("修改商家信息", $title);


		$param = array(
			"service"     => "business",
			"template"    => "detail",
			"id"          => $id
		);
		$url = getUrlPath($param);

		echo '{"state": 100, "url": "'.$url.'"}';die;

	}else{
		if(!empty($id)){

			//主表信息
			$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."_list` WHERE `id` = ".$id);
			$results = $dsql->dsqlOper($archives, "results");

			if(!empty($results)){

				//城市管理员验证权限
				if($userType == 3){
					if($adminCityIds){
						if(!in_array($results[0]['cityid'], explode(',', $adminCityIds))){
							ShowMsg('您无权修改此商家信息1！', "javascript:;");
							die;
						}
					}else{
						ShowMsg('您无权修改此商家信息2！', "javascript:;");
						die;
					}
				}


				$uid        = $results[0]['uid'];

				$username = "";
				$sql = $dsql->SetQuery("SELECT `company`, `nickname` FROM `#@__member` WHERE `id` = $uid");
				$ret = $dsql->dsqlOper($sql, "results");
				if($ret){
					$username = $ret[0]['company'] ? $ret[0]['company'] : $ret[0]['nickname'];
				}

				$title        = $results[0]['title'];
				$logo         = $results[0]['logo'];
				$typeid       = $results[0]['typeid'];
				$addrid       = $results[0]['addrid'];
				$cityid       = $results[0]['cityid'];
				$address      = $results[0]['address'];
				$lng          = $results[0]['lng'];
				$lat          = $results[0]['lat'];
				$wechatname   = $results[0]['wechatname'];
				$wechatcode   = $results[0]['wechatcode'];
				$wechatqr     = $results[0]['wechatqr'];
				$tel          = $results[0]['tel'];
				$qq           = $results[0]['qq'];
				$pics         = $results[0]['pics'];
				$banner       = $results[0]['banner'];
				$jingying     = $results[0]['jingying'];
				$certify      = $results[0]['certify'];
				$opentime     = $results[0]['opentime'];
				$amount       = $results[0]['amount'];
				$parking      = $results[0]['parking'];
				$wifi         = $results[0]['wifi'];
				$wifiname     = $results[0]['wifiname'];
				$wifipasswd   = $results[0]['wifipasswd'];
				$authattr     = $results[0]['authattr'];
				$pubdate      = $results[0]['pubdate'];
				$state        = $results[0]['state'];
				$stateinfo    = $results[0]['stateinfo'];
				$name         = $results[0]['name'];
				$areaCode     = $results[0]['areaCode'];
				$phone        = $results[0]['phone'];
				$email        = $results[0]['email'];
				$cardnum      = $results[0]['cardnum'];
				$company      = $results[0]['company'];
				$licensenum   = $results[0]['licensenum'];
				$license      = $results[0]['license'];
				$accounts     = $results[0]['accounts'];
				$cardfront    = $results[0]['cardfront'];
				$cardbehind   = $results[0]['cardbehind'];
				$body         = $results[0]['body'];
				$bind_print   = $results[0]['bind_print'];
				$print_config = empty($results[0]['print_config']) ? array('mcode' => '', 'msign' => '') : unserialize($results[0]['print_config']);
				$print_state  = $results[0]['print_state'];
				$touch_skin   = $results[0]['touch_skin'];
				$type         = $results[0]['type'];
				$expired      = $results[0]['expired'];
				$landmark     = $results[0]['landmark'];
				$tag          = $results[0]['tag'];
				$weeks        = $results[0]['weeks'];
				$tag_shop     = $results[0]['tag_shop'];
				$isbid	      = $results[0]['isbid'];
				$mappic       = $results[0]['mappic'];
				$video        = $results[0]['video'];
				$video_pic    = $results[0]['video_pic'];
				$qj_type      = $results[0]['qj_type'];
				$qj_file      = $results[0]['qj_file'];

			}else{
				ShowMsg('要修改的信息不存在或已删除！', "-1");
				die;
			}

		}else{
			ShowMsg('要修改的信息参数传递失败，请联系管理员！', "-1");
			die;
		}
	}

}

//验证模板文件
if(file_exists($tpl."/".$templates)){

	//js
	$jsFile = array(
		'ui/bootstrap.min.js',
		'ui/jquery.dragsort-0.5.1.min.js',
		'ui/bootstrap-datetimepicker.min.js',
		'ui/ion.rangeSlider-2.2.min.js',
		'publicUpload.js',
		'publicAddr.js',
		'admin/business/businessAdd.js'
	);
	$cssFile = array(
		'ui/ion.rangeSlider.skinNice.css',
		'ui/ion.rangeSlider.css'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));
	$huoniaoTag->assign('cssFile', includeFile('css', $cssFile));

	require_once(HUONIAOINC."/config/".$action.".inc.php");
	global $customUpload;
	if($customUpload == 1){
		global $custom_atlasSize;
		global $custom_atlasType;
		$huoniaoTag->assign('atlasSize', $custom_atlasSize);
		$huoniaoTag->assign('atlasType', "*.".str_replace("|", ";*.", $custom_atlasType));
	}


	$huoniaoTag->assign('mapCity', $cfg_mapCity);
	$huoniaoTag->assign('action', $action);
	$huoniaoTag->assign('pagetitle', $pagetitle);
	$huoniaoTag->assign('dopost', $dopost);
	$huoniaoTag->assign('id', $id);
	$huoniaoTag->assign('uid', $uid);
	$huoniaoTag->assign('username', $username);
	$huoniaoTag->assign('title', $title);
	$huoniaoTag->assign('logo', $logo);
	$huoniaoTag->assign('typeid', (int)$typeid);
	$huoniaoTag->assign('addrid', (int)$addrid);
	$huoniaoTag->assign('address', $address);
    $huoniaoTag->assign('cityid', $cityid);
	$huoniaoTag->assign('lnglat', $lng.",".$lat);
	$huoniaoTag->assign('wechatname', $wechatname);
	$huoniaoTag->assign('wechatcode', $wechatcode);
	$huoniaoTag->assign('wechatqr', $wechatqr);
	$huoniaoTag->assign('tel', $tel);
	$huoniaoTag->assign('qq', $qq);
	$huoniaoTag->assign('banner', $banner ? json_encode(explode(",", $banner)) : "[]");
	$huoniaoTag->assign('pics', $pics ? json_encode(explode(",", $pics)) : "[]");
	$huoniaoTag->assign('jingying', $jingying);
	$huoniaoTag->assign('certify', $certify ? json_encode(explode(",", $certify)) : "[]");
	$huoniaoTag->assign('opentime', $opentime);
	$huoniaoTag->assign('amount', $amount);
	$huoniaoTag->assign('parking', $parking);
	$huoniaoTag->assign('wifi', $wifi);
	$huoniaoTag->assign('wifiname', $wifiname);
	$huoniaoTag->assign('wifipasswd', $wifipasswd);
	$huoniaoTag->assign('pubdate', $pubdate);
	$huoniaoTag->assign('state', $state);
	$huoniaoTag->assign('stateinfo', $stateinfo);
	$huoniaoTag->assign('authattr', explode(",", $authattr));
	$huoniaoTag->assign('isbid', $isbid);
	$huoniaoTag->assign('mappic', $mappic);



	$huoniaoTag->assign('typeListArr', json_encode($dsql->getTypeList(0, $action."_type")));
	$huoniaoTag->assign('addrListArr', json_encode($dsql->getTypeList(0, $action."_addr")));

	//认证信息
	$authArr = array();
	$sql = $dsql->SetQuery("SELECT * FROM `#@__business_authattr` ORDER BY `weight`");
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret){
		foreach ($ret as $key => $value) {
			array_push($authArr, array(
				"id" => $value['id'],
				"jc" => $value['jc'],
				"typename" => $value['typename']
			));
		}
	}
	$huoniaoTag->assign('authArr', $authArr);


	//阅读权限-下拉菜单
	$huoniaoTag->assign('stateList', array(0 => '等待审核', 1 => '审核通过', 2 => '审核拒绝'));
	$huoniaoTag->assign('state', $state);

	$huoniaoTag->assign('name', $name);
	$huoniaoTag->assign('areaCode', $areaCode);
	$huoniaoTag->assign('phone', $phone);
	$huoniaoTag->assign('email', $email);
	$huoniaoTag->assign('cardnum', $cardnum);
	$huoniaoTag->assign('company', $company);
	$huoniaoTag->assign('licensenum', $licensenum);
	$huoniaoTag->assign('license', $license);
	$huoniaoTag->assign('accounts', $accounts);
	$huoniaoTag->assign('cardfront', $cardfront);
	$huoniaoTag->assign('cardbehind', $cardbehind);
	$huoniaoTag->assign('body', $body);
	$huoniaoTag->assign('isJoin', $isJoin);

	// 打印机配置
	$huoniaoTag->assign('bind_printList', array(0 => '关闭', 1 => '开启'));
	$huoniaoTag->assign('bind_print', $bind_print);
	$huoniaoTag->assign('print_config', $print_config);
	$huoniaoTag->assign('print_state', $print_state);


	// 2018新版入驻
	$huoniaoTag->assign('type', (int)$type ? (int)$type : 1);
	$huoniaoTag->assign('expired', $expired ? date("Y-m-d H:i:s", $expired) : "");
	$huoniaoTag->assign('landmark', $landmark);
	$huoniaoTag->assign('tag', $tag);
	$huoniaoTag->assign('tagSel', $tag ? explode("|", $tag) : array());
	$huoniaoTag->assign('weekDay', $weeks);
	$huoniaoTag->assign('tag_shop', $tag_shop);

	$tagArr = $customBusinessTag ? explode("|", $customBusinessTag) : array();
	$huoniaoTag->assign('tagArr', $tagArr);

	// 视频 -------------
	$huoniaoTag->assign('video', $video);
	$huoniaoTag->assign('video_pic', $video_pic);

	// 全景 -------------
	$huoniaoTag->assign('qj_type', (int)$qj_type);
	$huoniaoTag->assign('qj_file', $qj_file);
	$huoniaoTag->assign('typeidArr', array('0', '1'));
	$huoniaoTag->assign('typeidNames',array('图片','url'));


	//touch模板
	// $dir = "../../templates/store/business";
	// $floders = listDir($dir.'/touch');
	// $skins = array();
	// if(!empty($floders)){
	// 	$i = 0;
	// 	foreach($floders as $key => $floder){
	// 		$config = $dir.'/touch/'.$floder.'/config.xml';
	// 		if(file_exists($config)){
	// 			//解析xml配置文件
	// 			$xml = new DOMDocument();
	// 			libxml_disable_entity_loader(false);
	// 			$xml->load($config);
	// 			$data = $xml->getElementsByTagName('Data')->item(0);
	// 			$tplname = $data->getElementsByTagName("tplname")->item(0)->nodeValue;
	// 			$copyright = $data->getElementsByTagName("copyright")->item(0)->nodeValue;

	// 			$skins[$i]['tplname'] = $tplname;
	// 			$skins[$i]['directory'] = $floder;
	// 			$skins[$i]['copyright'] = $copyright;
	// 			$i++;
	// 		}
	// 	}
	// }
	// $huoniaoTag->assign('touchTplList', $skins);
	// $huoniaoTag->assign('touchTemplate', $customTouchTemplate);
	// $huoniaoTag->assign('touch_skin', $touch_skin);

	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/business";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
