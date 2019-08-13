<?php
/**
 * 管理商家列表
 *
 * @version        $Id: businessList.php 2013-12-9 下午21:11:13 $
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
$templates = "businessList.html";

global $handler;
$handler = true;

$action = "business";

if($dopost == "getList"){
	$pagestep = $pagestep == "" ? 10 : $pagestep;
	$page     = $page == "" ? 1 : $page;

	$where = " AND l.`state` != 3 AND l.`state` != 4";

	//城市管理员
    $where .= " AND (l.`cityid` = 0 || l.`cityid` in ($adminCityIds) )";

    if ($cityid) {
        $where .= " AND l.`cityid` = $cityid";
    }

    if($sKeyword != ""){

		$sidArr = array();
		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `username` like '%$sKeyword%' OR `nickname` like '%$sKeyword%' OR `phone` like '%$sKeyword%' OR `company` like '%$sKeyword%'");
		$results = $dsql->dsqlOper($userSql, "results");
		foreach ($results as $key => $value) {
			$sidArr[$key] = $value['id'];
		}

		if(!empty($sidArr)){
			$where .= " AND (l.`title` like '%$sKeyword%' OR l.`company` like '%$sKeyword%' OR l.`phone` like '%$sKeyword%' OR l.`address` like '%$sKeyword%' OR l.`tel` like '%$sKeyword%' OR l.`uid` in (".join(",",$sidArr)."))";
		}else{
			$where .= " AND (l.`title` like '%$sKeyword%' OR l.`company` like '%$sKeyword%' OR l.`phone` like '%$sKeyword%' OR l.`address` like '%$sKeyword%' OR l.`tel` like '%$sKeyword%')";
		}

	}

	if($sType != ""){
		if($dsql->getTypeList($sType, $action."_type")){
			global $arr_data;
			$arr_data = array();
			$lower = arr_foreach($dsql->getTypeList($sType, $action."_type"));
			$lower = $sType.",".join(',',$lower);
		}else{
			$lower = $sType;
		}

		$where .= " AND l.`typeid` in (".$lower.")";
	}

	$archives = $dsql->SetQuery("SELECT l.`id` FROM `#@__".$action."_list` l WHERE 1 = 1");

	//总条数
	$totalCount = $dsql->dsqlOper($archives.$where, "totalCount");
	//总分页数
	$totalPage = ceil($totalCount/$pagestep);
	//待审核
	$totalGray = $dsql->dsqlOper($archives." AND l.`state` = 0".$where, "totalCount");
	//已审核
	$totalAudit = $dsql->dsqlOper($archives." AND l.`state` = 1".$where, "totalCount");
	//拒绝审核
	$totalRefuse = $dsql->dsqlOper($archives." AND l.`state` = 2".$where, "totalCount");

	if($state != ""){
		$where .= " AND l.`state` = $state";

		if($state == 0){
			$totalPage = ceil($totalGray/$pagestep);
		}elseif($state == 1){
			$totalPage = ceil($totalAudit/$pagestep);
		}elseif($state == 2){
			$totalPage = ceil($totalRefuse/$pagestep);
		}
	}

	$where .= " order by l.`pubdate` desc";

	$atpage = $pagestep*($page-1);
	$where .= " LIMIT $atpage, $pagestep";
	$archives = $dsql->SetQuery("SELECT l.`id`, l.`uid`, l.`title`, l.`logo`, l.`typeid`, l.`addrid`, l.`phone`, l.`email`, l.`pubdate`, l.`authattr`, l.`state`, l.`expired`, l.`type` FROM `#@__".$action."_list` l LEFT JOIN `#@__member` m ON m.`id` = l.`uid` WHERE 1 = 1".$where);
	$results = $dsql->dsqlOper($archives, "results");

	if(count($results) > 0){
		$list = array();
		$i = 0;
		$time = time();

		$bobj = new business();
		$config = $bobj->config();
		$busiType = array( 0 => '类型错误', 1 => $config['trialName'], 2 => $config['enterpriseName']);

		foreach ($results as $key=>$value) {
			$list[$i]["id"] = $value["id"];
			$list[$i]["uid"] = $value["uid"];

			$user = "";
			$sql = $dsql->SetQuery("SELECT `nickname`, `username` FROM `#@__member` WHERE `id` = ".$value['uid']);
			$ret = $dsql->dsqlOper($sql, "results");
			if($ret){
				$user = $ret[0]['nickname'] ? $ret[0]['nickname'] : $ret[0]['username'];
			}
			$list[$i]['user'] = $user;

			$list[$i]["title"] = $value["title"];
			$list[$i]["logo"] = getFilePath($value["logo"]);

			//分类
			$list[$i]["typeid"] = $value["typeid"];
			$typename = "";
			$sql = $dsql->SetQuery("SELECT `typename` FROM `#@__".$action."_type` WHERE `id` = ".$value['typeid']);
			$ret = $dsql->dsqlOper($sql, "results");
			if($ret){
				$typename = $ret[0]['typename'];
			}
			$list[$i]['typename'] = $typename;

			//区域
//			$list[$i]["addrid"] = $value["addrid"];
//			$addrname = "";
//			$sql = $dsql->SetQuery("SELECT `typename` FROM `#@__".$action."_addr` WHERE `id` = ".$value['addrid']);
//			$ret = $dsql->dsqlOper($sql, "results");
//			if($ret){
//				$addrname = $ret[0]['typename'];
//			}
//			$list[$i]['addrname'] = $addrname;

			$list[$i]["phone"] = $value["phone"];
			$list[$i]["email"] = $value["email"];
			$list[$i]["pubdate"] = date("Y-m-d H:i:s", $value["pubdate"]);
			$list[$i]["expired"] = date("Y-m-d H:i:s", $value["expired"]);
			$list[$i]["state"] = $value['state'];
			$list[$i]["state_time"] = $time >= $value["expired"] ? 0 : 1;

			$auth = array();
			if($value['authattr']){
				$authattr = explode(",", $value['authattr']);
				foreach ($authattr as $k => $v) {
					$sql = $dsql->SetQuery("SELECT `jc`, `typename` FROM `#@__business_authattr` WHERE `id` = $v");
					$ret = $dsql->dsqlOper($sql, "results");
					if($ret){
						array_push($auth, array("jc" => $ret[0]['jc'], "typename" => $ret[0]['typename']));
					}
				}
			}
			$list[$i]["auth"] = $auth;

			//查询商家订单
			$order = array();
			// $now = time();
			// $sql = $dsql->SetQuery("SELECT `id`, `module`, `expired` FROM `#@__business_order_module` WHERE `id` IN (SELECT SUBSTRING_INDEX(group_concat(m.`id` ORDER BY m.`expired` DESC), ',', 1) FROM `#@__business_order_module` m LEFT JOIN `#@__business_order` o ON o.`id` = m.`oid` LEFT JOIN `#@__business_list` l ON l.`id` = o.`bid` WHERE l.`id` = " . $value['id'] . " AND m.`expired` >= $now group by m.`module`) ORDER BY `expired` ASC");
			// $ret = $dsql->dsqlOper($sql, "results");
			// if($ret){
			// 	foreach ($ret as $k => $v) {
			// 		$name = getModuleTitle(array("name" => $v['module']));
			// 		if($name){
			// 			array_push($order, array("name" => $name, "expired" => $v['expired']));
			// 		}
			// 	}
			// }
			$list[$i]['order'] = $order;

			$param = array(
				"service"     => "business",
				"template"    => "detail",
				"id"          => $value['id']
			);
			$list[$i]["url"] = getUrlPath($param);

			$addrname = $value['addrid'];
			if($addrname){
				$addrname = getPublicParentInfo(array('tab' => 'site_area', 'id' => $addrname, 'type' => 'typename', 'split' => ' '));
			}
			$list[$i]["addrname"] = $addrname;

			// 入驻类型
			$list[$i]["type"] = $value['type'];
			$list[$i]["busiTypename"] = $busiType[$value['type']];

			$i++;
		}

		if(count($list) > 0){
			echo '{"state": 100, "info": '.json_encode("获取成功").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}, "businessList": '.json_encode($list).'}';
		}else{
			echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
		}

	}else{
		echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
	}
	die;

//更新状态
}elseif($dopost == "updateState"){
	if($id == "") die;
	$each = explode(",", $id);
	$error = array();
	foreach($each as $val){

		//查询信息之前的状态

		//验证权限
		if($userType == 3){
			$sql = $dsql->SetQuery("SELECT `title`, `state`, `pubdate`, `uid` FROM `#@__".$action."_list` WHERE `cityid` in ($adminCityIds) AND `id` = $val");
		}else{
			$sql = $dsql->SetQuery("SELECT `title`, `state`, `pubdate`, `uid` FROM `#@__".$action."_list` WHERE `id` = $val");
		}
		$ret = $dsql->dsqlOper($sql, "results");
		if($ret){

			$title    = $ret[0]['title'];
			$state    = $ret[0]['state'];
			$pubdate  = $ret[0]['pubdate'];
			$userid   = $ret[0]['uid'];

			//会员消息通知
			if($arcrank != $state){

				$status = "";

				//等待审核
				if($arcrank == 0){
					$status = "进入等待审核状态。";

				//已审核
				}elseif($arcrank == 1){
					$status = "已经通过审核。";

				//审核失败
				}elseif($arcrank == 2){
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
					"date" => date("Y-m-d H:i:s", $pubdate),
					"fields" => array(
						'keyword1' => '店铺名称',
						'keyword2' => '审核结果',
						'keyword3' => '处理时间'
					)
				);

				updateMemberNotice($userid, "会员-店铺审核通知", $param, $config);

			}

		}



		//验证权限
		if($userType == 3){
			$archives = $dsql->SetQuery("UPDATE `#@__".$action."_list` SET `state` = $arcrank WHERE `cityid` in ($adminCityIds) AND `id` = ".$val);
		}else{
			$archives = $dsql->SetQuery("UPDATE `#@__".$action."_list` SET `state` = $arcrank WHERE `id` = ".$val);
		}
		$results = $dsql->dsqlOper($archives, "update");
		if($results != "ok"){
			$error[] = $val;
		}else{
			// 审核通过时更新会员类型
			if($arcrank == 1){
				$sql = $dsql->SetQuery("UPDATE `#@__member` SET `mtype` = 2 WHERE `id` = $userid AND `mtype` = 1");
				$dsql->dsqlOper($sql, "update");
			}
		}
	}
	if(!empty($error)){
		echo '{"state": 200, "info": '.json_encode($error).'}';
	}else{
		adminLog("更新商家状态", $id."=>".$arcrank);
		echo '{"state": 100, "info": '.json_encode("修改成功！").'}';
	}
	die;

//删除
}elseif($dopost == "del"){
	if($id == "") die;

	$each = explode(",", $id);
	$error = array();
	$title = array();
	foreach($each as $val){

		//验证权限
		if($userType == 3){
			$sql = $dsql->SetQuery("SELECT `id` FROM `#@__".$action."_list` WHERE `cityid` in ($adminCityIds) AND `id` = $val");
		}else{
			$sql = $dsql->SetQuery("SELECT `id` FROM `#@__".$action."_list` WHERE `id` = $val");
		}
		$ret = $dsql->dsqlOper($sql, "results");
		if($ret){

			//删除介绍
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_about` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除动态分类
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_news_type` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除动态
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_news` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除相册分类
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_albums_type` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除相册
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_albums` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除视频
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_video` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除全景
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_panor` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除点评
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_comment` WHERE `uid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除订单内容
			$sql = $dsql->SetQuery("SELECT m.`id` FROM `#@__business_order` o LEFT JOIN `#@__business_order_module` m ON m.`oid` = o.`id` WHERE o.`id` = $val");
			$ret = $dsql->dsqlOper($sql, "results");
			if($ret){
				foreach ($ret as $key => $value) {
					$sql = $dsql->SetQuery("DELETE FROM `#@__business_order_module` WHERE `id` = " . $value['id']);
					$dsql->dsqlOper($sql, "update");
				}
			}

			//删除订单
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_order` WHERE `bid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除表
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."_list` WHERE `id` = ".$val);
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
		adminLog("删除商家信息", join(", ", $title));
		echo '{"state": 100, "info": '.json_encode("删除成功！").'}';
	}
	die;


//查询商家已开通的模块和未开通的模块
}elseif($dopost == "getBusinessModule"){

	if(empty($id)) die('{"state": 200, "info": '.json_encode("商家ID获取失败！").'}');

	$userOpenModules = array();
	$notOpenModules = array();
	$modulesNameArr = array();
	$now = time();

	$where = "";
	//验证权限
	if($userType == 3){
		$where = " AND l.`cityid` in ($adminCityIds)";
	}

	$sql = $dsql->SetQuery("SELECT `id`, `module`, `expired` FROM `#@__business_order_module` WHERE `id` IN (SELECT SUBSTRING_INDEX(group_concat(m.`id` ORDER BY m.`expired` DESC), ',', 1) FROM `#@__business_order_module` m LEFT JOIN `#@__business_order` o ON o.`id` = m.`oid` LEFT JOIN `#@__business_list` l ON l.`id` = o.`bid` WHERE l.`uid` = $id AND m.`expired` >= $now".$where." group by m.`module`) ORDER BY `expired` ASC");
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret && is_array($ret)){
		foreach ($ret as $key => $value) {
			array_push($modulesNameArr, $value['module']);
		}
		$userOpenModules = $ret;
	}

	$costArr = array();
	include HUONIAOINC . '/config/business.inc.php';
	if($customCost){
		$costArr = unserialize($customCost);
	}

	//未开通的模块
	if($costArr){
		foreach ($costArr as $key => $value) {

			//如果已经开通的，将价格插入数组中
			if(in_array($key, $modulesNameArr)){
				foreach ($userOpenModules as $k => $v) {
					if($v['module'] == $key){
						$userOpenModules[$k]['name'] = getModuleTitle(array("name" => $v['module']));
						$userOpenModules[$k]['price'] = $value;
					}
				}

			//没有开通的，单独存放
			}else{
				array_push($notOpenModules, array("module" => $key, "price" => $value, "name" => getModuleTitle(array("name" => $key))));
			}

		}
	}

	die('{"state": 100, "userOpenModules": '.json_encode($userOpenModules).', "notOpenModules": '.json_encode($notOpenModules).'}');


//更新开通模块
}elseif($dopost == "updateBusinessModule"){

	if(empty($id) || empty($bid)) die('{"state": 200, "info": '.json_encode("商家ID获取失败！").'}');
	if(empty($module)) die('{"state": 200, "info": '.json_encode("没有要更新的模块！").'}');

	$userOpenModules = array();
	$notOpenModules = array();
	$modulesNameArr = array();
	$now = time();

	//验证权限
	if($userType == 3){
		$sql = $dsql->SetQuery("SELECT `id` FROM `#@__business_list` WHERE `cityid` in ($adminCityIds) AND `id` = $bid");
		$ret = $dsql->dsqlOper($sql, "results");
		if(!$ret){
			die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
		}
	}

	$sql = $dsql->SetQuery("SELECT `id`, `module`, `expired` FROM `#@__business_order_module` WHERE `id` IN (SELECT SUBSTRING_INDEX(group_concat(m.`id` ORDER BY m.`expired` DESC), ',', 1) FROM `#@__business_order_module` m LEFT JOIN `#@__business_order` o ON o.`id` = m.`oid` LEFT JOIN `#@__business_list` l ON l.`id` = o.`bid` WHERE l.`uid` = $id AND m.`expired` >= $now group by m.`module`) ORDER BY `expired` ASC");
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret && is_array($ret)){
		foreach ($ret as $key => $value) {
			array_push($modulesNameArr, $value['module']);
		}
		$userOpenModules = $ret;
	}

	$costArr = array();
	include HUONIAOINC . '/config/business.inc.php';
	if($customCost){
		$costArr = unserialize($customCost);
	}

	//未开通的模块
	if($costArr){
		foreach ($costArr as $key => $value) {

			//如果已经开通的，将价格插入数组中
			if(in_array($key, $modulesNameArr)){
				foreach ($userOpenModules as $k => $v) {
					if($v['module'] == $key){
						$userOpenModules[$k]['name'] = getModuleTitle(array("name" => $v['module']));
						$userOpenModules[$k]['price'] = $value;
					}
				}

			//没有开通的，单独存放
			}else{
				array_push($notOpenModules, array("module" => $key, "price" => $value, "name" => getModuleTitle(array("name" => $key))));
			}

		}
	}

	foreach ($module as $key => $value) {

		$date = GetMkTime($value);

		//先验证已经开通的模块有没有更新时间
		$nameArr = array();
		foreach ($userOpenModules as $k => $v) {

			if($key == $v['module']){
				//如果提交的到期时间 不等于 数据库中的时间，则更新过期时间
				if($v['expired'] != $date){
					$sql = $dsql->SetQuery("SELECT m.`id` FROM `#@__business_order_module` m LEFT JOIN `#@__business_order` o ON o.`id` = m.`oid` WHERE o.`bid` = $bid AND m.`module` = '$key' ORDER BY m.`id` DESC LIMIT 1");
					$ret = $dsql->dsqlOper($sql, "results");
					if($ret){
						$mid = $ret[0]['id'];
						$sql = $dsql->SetQuery("UPDATE `#@__business_order_module` SET `expired` = $date WHERE `id` = $mid");
						$dsql->dsqlOper($sql, "update");
					}
				}
			}

			array_push($nameArr, $v['module']);

		}

		//再验证没有开通的模块
		foreach ($notOpenModules as $k => $v) {

			if(!in_array($v['module'], $nameArr) && $date){
				if($key == $v['module']){
					$ordernum = create_ordernum();
					$price = $v['price'];
					$time = time();

					//开通
					$sql = $dsql->SetQuery("INSERT INTO `#@__business_order` (`bid`, `ordernum`, `totalprice`, `offer`, `balance`, `paytype`, `amount`, `date`) VALUES ('$bid', '$ordernum', '$price', '0', '0', 'admin', '0', '$time')");
					$oid = $dsql->dsqlOper($sql, "lastid");
					if(is_numeric($oid)){
						$sql = $dsql->SetQuery("INSERT INTO `#@__business_order_module` (`oid`, `module`, `unitprice`, `count`, `expired`) VALUES ('$oid', '$key', '$price', '1', '$date')");
						$dsql->dsqlOper($sql, "update");
					}
				}

			}
		}

	}

	die('{"state": 100, "info": '.json_encode("操作成功！").'}');

}

//验证模板文件
if(file_exists($tpl."/".$templates)){

	//css
	$cssFile = array(
	  'ui/jquery.chosen.css',
	  'admin/chosen.min.css'
	);
	$huoniaoTag->assign('cssFile', includeFile('css', $cssFile));

	//js
	$jsFile = array(
		'ui/bootstrap.min.js',
		'ui/chosen.jquery.min.js',
		'admin/business/businessList.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

	$huoniaoTag->assign('typeListArr', json_encode($dsql->getTypeList(0, $action."_type")));
	$huoniaoTag->assign('notice', $notice);

	$huoniaoTag->assign('cityArr', $userLogin->getAdminCity());

	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/business";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
