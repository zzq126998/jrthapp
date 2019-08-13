<?php
/**
 * 管理团购商家
 *
 * @version        $Id: tuanStore.php 2015-08-13 上午10:08:22 $
 * @package        HuoNiao.Tuan
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("tuanStore");
$dsql  = new dsql($dbo);
$tpl   = dirname(__FILE__)."/../templates/tuan";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "tuanStore.html";

global $handler;
$handler = true;

$tab = "tuan_store";

if($dopost == "getList"){
	$pagestep = $pagestep == "" ? 10 : $pagestep;
	$page     = $page == "" ? 1 : $page;

    $where = " AND `cityid` in (0,$adminCityIds)";

    if ($cityid) {
        $where = " AND `cityid` = $cityid";
    }

	if($sKeyword != ""){
		$where .= " AND (`address` like '%$sKeyword%'";

		$userSql = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `username` like '%$sKeyword%' OR `nickname` like '%$sKeyword%' OR `company` like '%$sKeyword%'");
		$userResult = $dsql->dsqlOper($userSql, "results");
		if($userResult){
			$userid = array();
			foreach($userResult as $key => $user){
				array_push($userid, $user['id']);
			}
			if(!empty($userid)){
				$where .= " OR `uid` in (".join(",", $userid)."))";
			}else{
                $where .= ")";
            }
		}else{
			$where .= ")";
		}
	}

	if($sType != ""){
		if($dsql->getTypeList($sType, "tuantype")){
			global $arr_data;
			$arr_data = array();
			$lower = arr_foreach($dsql->getTypeList($sType, "tuantype"));
			$lower = $sType.",".join(',',$lower);
		}else{
			$lower = $sType;
		}
		$where .= " AND `stype` in ($lower)";
	}

	$archives = $dsql->SetQuery("SELECT `id` FROM `#@__".$tab."` WHERE 1 = 1");

	//总条数
	$totalCount = $dsql->dsqlOper($archives.$where, "totalCount");
	//总分页数
	$totalPage = ceil($totalCount/$pagestep);
	//待审核
	$totalGray = $dsql->dsqlOper($archives." AND `state` = 0".$where, "totalCount");
	//已审核
	$totalAudit = $dsql->dsqlOper($archives." AND `state` = 1".$where, "totalCount");
	//拒绝审核
	$totalRefuse = $dsql->dsqlOper($archives." AND `state` = 2".$where, "totalCount");

	if($state != ""){
		$where .= " AND `state` = $state";

		if($state == 0){
			$totalPage = ceil($totalGray/$pagestep);
		}elseif($state == 1){
			$totalPage = ceil($totalAudit/$pagestep);
		}elseif($state == 2){
			$totalPage = ceil($totalRefuse/$pagestep);
		}
	}

	$where .= " order by `weight` desc, `jointime` desc";

	$atpage = $pagestep*($page-1);
	$where .= " LIMIT $atpage, $pagestep";
	$archives = $dsql->SetQuery("SELECT `id`, `uid`, `stype`, `addrid`, `address`, `tel`, `score`, `state`, `weight`, `jointime` FROM `#@__".$tab."` WHERE 1 = 1".$where);
	$results = $dsql->dsqlOper($archives, "results");

	if(count($results) > 0){
		$list = array();
		foreach ($results as $key=>$value) {
			$list[$key]["id"] = $value["id"];

			//会员
			$list[$key]["uid"] = $value["uid"];
			if($value["uid"] == 0){
				$list[$key]["company"] = "未知";
				$list[$key]["username"] = "未知";
			}else{
				$userSql = $dsql->SetQuery("SELECT `id`, `company`, `username` FROM `#@__member` WHERE `id` = ". $value['uid']);
				$username = $dsql->getTypeName($userSql);
				$list[$key]["company"] = $username[0]["company"];
				$list[$key]["username"] = $username[0]["username"];
			}

			//区域
			$list[$key]["addrid"] = $value["addrid"];
			if($value["addrid"] == 0){
				$list[$key]["addrname"] = "未知";
			}else{
                $addrname = getPublicParentInfo(array('tab' => 'site_area', 'id' => $value['addrid'], 'type' => 'typename', 'split' => ' '));
                $list[$key]["addrname"] = $addrname;
			}

			//分类
			$list[$key]["stype"] = $value["stype"];
			$typeSql = $dsql->SetQuery("SELECT `typename` FROM `#@__tuantype` WHERE `id` = ". $value["stype"]);
			$typename = $dsql->getTypeName($typeSql);
			$list[$key]["typename"] = $typename[0]['typename'];

			$list[$key]["tel"] = $value["tel"];
			$list[$key]["address"] = $value["address"];
			$list[$key]["state"] = $value["state"];
			$list[$key]["score"] = $value["score"];
			$list[$key]["weight"] = $value["weight"];
			$list[$key]["jointime"] = date('Y-m-d H:i:s', $value["jointime"]);

			$param = array(
				"service" => "tuan",
				"template" => "store",
				"id" => $value['id']
			);
			$list[$key]["url"] = getUrlPath($param);
		}

		if(count($list) > 0){
			echo '{"state": 100, "info": '.json_encode("获取成功").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}, "tuanStore": '.json_encode($list).'}';
		}else{
			echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
		}

	}else{
		echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
	}
	die;

//删除
}elseif($dopost == "del"){
	if(!testPurview("tuanStore")){
		die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
	};
	if($id != ""){

		$each = explode(",", $id);
		$error = array();
		$title = array();
		foreach($each as $val){

			$archives = $dsql->SetQuery("SELECT * FROM `#@__".$tab."` WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "results");

			//删除缩略图
			array_push($title, $results[0]['title']);

			//删除内容图片
			$body = $results[0]['note'];
			if(!empty($body)){
				delEditorPic($body, "tuan");
			}

			//删除团购表
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$tab."list` WHERE `sid` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");

			//删除表
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$tab."` WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");
			if($results != "ok"){
				$error[] = $val;
			}
		}
		if(!empty($error)){
			echo '{"state": 200, "info": '.json_encode($error).'}';
		}else{
			adminLog("删除团购商家信息", join(", ", $title));
			echo '{"state": 100, "info": '.json_encode("删除成功！").'}';
		}
		die;

	}
	die;

//更新状态
}elseif($dopost == "updateState"){
	if(!testPurview("tuanStore")){
		die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
	};
	$each = explode(",", $id);
	$error = array();
	if($id != ""){
		foreach($each as $val){

			//查询信息之前的状态
			$sql = $dsql->SetQuery("SELECT `state`, `uid` FROM `#@__".$tab."` WHERE `id` = $val");
			$ret = $dsql->dsqlOper($sql, "results");
			if($ret){

				$state_ = $ret[0]['state'];
				$uid    = $ret[0]['uid'];

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
						$status = "审核失败，请检查您填写的资料。";
					}

					$param = array(
						"service"  => "member",
						"template" => "config",
						"action"   => "tuan"
					);

					//获取会员名
					$username = "";
					$sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = $uid");
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

					updateMemberNotice($uid, "会员-店铺审核通知", $param, $config);

				}

			}


			$archives = $dsql->SetQuery("UPDATE `#@__".$tab."` SET `state` = ".$state." WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");
			if($results != "ok"){
				$error[] = $val;
			}
		}
		if(!empty($error)){
			echo '{"state": 200, "info": '.json_encode($error).'}';
		}else{
			adminLog("更新团购商家状态", $id."=>".$state);
			echo '{"state": 100, "info": '.json_encode("修改成功！").'}';
		}
	}
	die;

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
		'ui/jquery-ui-selectable.js',
        'ui/chosen.jquery.min.js',
		'admin/tuan/tuanStore.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));
	$huoniaoTag->assign('typeListArr', json_encode($dsql->getTypeList(0, "tuantype")));

	//区域
	$addrListArr = array();
	/* $sql = $dsql->SetQuery("SELECT c.*, a.`typename` FROM `#@__tuan_city` c LEFT JOIN `#@__site_area` a ON a.`id` = c.`cid` ORDER BY c.`id`");
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret){
		foreach ($ret as $key => $value) {
			$addrListArr[$key]['id'] = $value['cid'];
			$addrListArr[$key]['typename'] = $value['typename'];

			$sql = $dsql->SetQuery("SELECT `id`, `typename` FROM `#@__site_area` WHERE `parentid` = ".$value['cid']." ORDER BY `weight`");
			$res = $dsql->dsqlOper($sql, "results");
			foreach ($res as $k => $v) {
				$addrListArr[$key]['lower'][$k]['id'] = $v['id'];
				$addrListArr[$key]['lower'][$k]['typename'] = $v['typename'];
				$addrListArr[$key]['lower'][$k]['lower'] = array();
			}
		}
	} */

	$huoniaoTag->assign('addrListArr', json_encode($addrListArr));
    $huoniaoTag->assign('cityArr', $userLogin->getAdminCity());

	$huoniaoTag->assign('notice', $notice);

	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/tuan";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
