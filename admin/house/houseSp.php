<?php
/**
 * 管理商铺
 *
 * @version        $Id: houseSp.php 2014-1-18 下午13:49:09 $
 * @package        HuoNiao.House
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("houseSp");
$dsql  = new dsql($dbo);
$tpl   = dirname(__FILE__)."/../templates/house";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "houseSp.html";

$tab = "house_sp";

if($dopost == "getList"){
	$pagestep = $pagestep == "" ? 10 : $pagestep;
	$page     = $page == "" ? 1 : $page;

    $where = " AND `cityid` in (0,$adminCityIds)";

    if ($cityid) {
        $where = " AND `cityid` = $cityid";
    }

	if($sKeyword != ""){
		$sidArr = array();
		$userSql = $dsql->SetQuery("SELECT zj.id FROM `#@__house_zjuser` zj LEFT JOIN `#@__member` user ON user.id = zj.userid WHERE (user.username like '%$sKeyword%' OR user.phone like '%$sKeyword%')");
		$userResult = $dsql->dsqlOper($userSql, "results");
		foreach ($userResult as $key => $value) {
			$sidArr[$key] = $value['id'];
		}
		if(!empty($sidArr)){
			$where .= " AND (`title` like '%$sKeyword%' OR `contact` like '%$sKeyword%' OR `userid` in (".join(",",$sidArr)."))";
		}else{
			$where .= " AND (`title` like '%$sKeyword%' OR `contact` like '%$sKeyword%')";
		}
	}

	if($sType != ""){
		$where .= " AND `type` = ".$sType;
	}

	if($sAddr != ""){
		if($dsql->getTypeList($sAddr, "houseaddr")){
			$lower = arr_foreach($dsql->getTypeList($sAddr, "houseaddr"));
			$lower = $sAddr.",".join(',',$lower);
		}else{
			$lower = $sAddr;
		}
		$where .= " AND `addrid` in ($lower)";
	}

	$archives = $dsql->SetQuery("SELECT `id` FROM `#@__".$tab."` WHERE `waitpay` = 0");

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

	$where .= " AND `waitpay` = 0 order by `pubdate` desc";

	$atpage = $pagestep*($page-1);
	$where .= " LIMIT $atpage, $pagestep";
	$archives = $dsql->SetQuery("SELECT `id`, `type`, `title`, `litpic`, `addrid`, `price`, `usertype`, `userid`, `username`, `contact`, `state`, `weight`, `pubdate` FROM `#@__".$tab."` WHERE 1 = 1".$where);
	$results = $dsql->dsqlOper($archives, "results");

	if(count($results) > 0){
		$list = array();
		foreach ($results as $key=>$value) {
			$list[$key]["id"] = $value["id"];
			$list[$key]["type"] = $value["type"];
			$list[$key]["title"] = $value["title"];
			$list[$key]["litpic"] = $value["litpic"];

			$list[$key]["addrid"] = $value["addrid"];
            //地区
            $addrname = $value["addrid"];
            if($addrname){
                $addrname = getPublicParentInfo(array('tab' => 'site_area', 'id' => $addrname, 'type' => 'typename', 'split' => ' '));
            }
            $list[$key]["addrname"] = $addrname;

			$list[$key]["price"] = $value["price"];
			$list[$key]["usertype"] = $value["usertype"];
			$list[$key]["userid"] = $value["userid"];

			$username = $contact = "无";
			if($value['userid'] != 0 && $value['usertype'] == 1){
				//会员
				$userSql = $dsql->SetQuery("SELECT `userid` FROM `#@__house_zjuser` WHERE `id` = ". $value['userid']);
				$username = $dsql->getTypeName($userSql);
				if($username){
					$userSql = $dsql->SetQuery("SELECT `id`, `username`, `phone` FROM `#@__member` WHERE `id` = ". $username[0]["userid"]);
					$username = $dsql->getTypeName($userSql);
					$list[$key]["userid"] = $username[0]["id"];
					$contact = $username[0]["phone"];
					$username = $username[0]["username"];
				}
			}else{
				//会员
				//$userSql = $dsql->SetQuery("SELECT `username`, `contact` FROM `#@__house_zjuser` WHERE `id` = ". $value['userid']);
				//$username = $dsql->getTypeName($userSql);
				//$contact = $username[0]["contact"];
				//$username = $username[0]["username"];
				$contact = $value["contact"];
				$username = $value["username"];
			}
			$list[$key]["username"] = $username;
			$list[$key]["contact"] = $contact;

			$list[$key]["state"] = $value["state"];
			$list[$key]["weight"] = $value["weight"];
			$list[$key]["pubdate"] = date('Y-m-d H:i:s', $value["pubdate"]);

			$param = array(
				"service"  => "house",
				"template" => "sp-detail",
				"id"       => $value['id']
			);
			$list[$key]["url"] = getUrlPath($param);
		}

		if(count($list) > 0){
			echo '{"state": 100, "info": '.json_encode("获取成功").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}, "houseSp": '.json_encode($list).'}';
		}else{
			echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
		}

	}else{
		echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
	}
	die;

//删除
}elseif($dopost == "del"){
	if(!testPurview("houseSpDel")){
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
			delPicFile($results[0]['litpic'], "delThumb", "house");

			//删除内容图片
			$body = $results[0]['note'];
			if(!empty($body)){
				delEditorPic($body, "house");
			}

			//图集
			$archives = $dsql->SetQuery("SELECT `picPath` FROM `#@__house_pic` WHERE `type` = 'housesp' AND `aid` = ".$val);
			$results = $dsql->dsqlOper($archives, "results");

			//删除图片文件
			if(!empty($results)){
				$atlasPic = "";
				foreach($results as $key => $value){
					$atlasPic .= $value['picPath'].",";
				}
				delPicFile(substr($atlasPic, 0, strlen($atlasPic)-1), "delAtlas", "house");
			}

			$archives = $dsql->SetQuery("DELETE FROM `#@__house_pic` WHERE `type` = 'housesp' AND `aid` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");

			//删除举报信息
			$archives = $dsql->SetQuery("DELETE FROM `#@__member_complain` WHERE `module` = 'house' AND `action` = 'sp' AND `aid` = ".$val);
			$dsql->dsqlOper($archives, "update");

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
			adminLog("删除商铺信息", join(", ", $title));
			echo '{"state": 100, "info": '.json_encode("修改成功！").'}';
		}
		die;

	}
	die;

//更新状态
}elseif($dopost == "updateState"){
	if(!testPurview("houseSpEdit")){
		die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
	};
	$each = explode(",", $id);
	$error = array();
	if($id != ""){
		foreach($each as $val){
			$archives = $dsql->SetQuery("UPDATE `#@__".$tab."` SET `state` = ".$state." WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");
			if($results != "ok"){
				$error[] = $val;
			}
		}
		if(!empty($error)){
			echo '{"state": 200, "info": '.json_encode($error).'}';
		}else{
			adminLog("更新商铺状态", $id."=>".$state);
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
		'admin/house/houseSp.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));
	$huoniaoTag->assign('notice', $notice);

    $huoniaoTag->assign('cityArr', $userLogin->getAdminCity());
	$huoniaoTag->assign('addrListArr', json_encode($dsql->getTypeList(0, "houseaddr")));
	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/house";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}
