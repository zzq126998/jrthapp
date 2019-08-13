<?php
/**
 * 管理分类信息
 *
 * @version        $Id: infoList.php 2013-7-7 上午10:33:36 $
 * @package        HuoNiao.Info
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("infoList");
$dsql  = new dsql($dbo);
$tpl   = dirname(__FILE__)."/../templates/info";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "infoList.html";

global $handler;
$handler = true;

$action = "info";
$now = GetMkTime(time());

if($dopost == "getList"){
	$pagestep = $pagestep == "" ? 10 : $pagestep;
	$page     = $page == "" ? 1 : $page;

    $where = " AND `cityid` in (0,$adminCityIds)";

    if ($adminCity) {
        $where = " AND `cityid` = $adminCity";
    }

    if($sKeyword != ""){
		$where .= " AND (`title` like '%$sKeyword%' OR `tel` like '%$sKeyword%')";
	}

	if($sType != ""){
		if($dsql->getTypeList($sType, $action."type")){
			global $arr_data;
			$arr_data = array();
			$lower = arr_foreach($dsql->getTypeList($sType, $action."type"));
			$lower = $sType.",".join(',',$lower);
		}else{
			$lower = $sType;
		}
		$where .= " AND `typeid` in ($lower)";
	}

	$archives = $dsql->SetQuery("SELECT `id` FROM `#@__".$action."list` WHERE `waitpay` = 0");

	//总条数
	$totalCount = $dsql->dsqlOper($archives.$where, "totalCount");
	//总分页数
	$totalPage = ceil($totalCount/$pagestep);
	//待审核
	$totalGray = $dsql->dsqlOper($archives." AND `arcrank` = 0".$where, "totalCount");
	//已审核
	$totalAudit = $dsql->dsqlOper($archives." AND `arcrank` = 1 AND (`valid` > ".$now." AND `valid` <> 0)".$where, "totalCount");
	//拒绝审核
	$totalRefuse = $dsql->dsqlOper($archives." AND `arcrank` = 2".$where, "totalCount");
	//取消显示
	$totalNoshow = $dsql->dsqlOper($archives." AND `arcrank` = 3".$where, "totalCount");
	//已过期
	$totalValid = $dsql->dsqlOper($archives." AND (`valid` < ".$now." OR `valid` = 0)".$where, "totalCount");

	if($state != "" && $state != 4){
		$where .= " AND `arcrank` = $state";

		if($state == 1){
			$where .= " AND (`valid` > ".$now." AND `valid` <> 0)";
		}

		if($state == 0){
			$totalPage = ceil($totalGray/$pagestep);
		}elseif($state == 1){
			$totalPage = ceil($totalAudit/$pagestep);
		}elseif($state == 2){
			$totalPage = ceil($totalRefuse/$pagestep);
		}elseif($state == 3){
			$totalPage = ceil($totalNoshow/$pagestep);
		}
	}

	//筛选已经过期的信息
	if($state == 4){
		$where .= " AND (`valid` < ".$now." OR `valid` = 0)";
		$totalPage = ceil($totalValid/$pagestep);
	}


	$where .= " AND `waitpay` = 0 order by `pubdate` desc";

	$atpage = $pagestep*($page-1);
	$where .= " LIMIT $atpage, $pagestep";
	$archives = $dsql->SetQuery("SELECT `cityid`, `id`, `title`, `color`, `typeid`, `price`, `addr`, `weight`, `userid`, `ip`, `ipaddr`, `arcrank`, `pubdate`, `valid` FROM `#@__".$action."list` WHERE 1 = 1".$where);
	$results = $dsql->dsqlOper($archives, "results");

	if(count($results) > 0){
		$list = array();
		foreach ($results as $key=>$value) {
			$list[$key]["id"] = $value["id"];
			$list[$key]["title"] = $value["title"];
			$list[$key]["color"] = $value["color"];
			$list[$key]["typeid"] = $value["typeid"];
			$list[$key]["price"] = $value["price"];
			$list[$key]["addrid"] = $value["addr"];
            $cityname = getSiteCityName($value['cityid']);
            $list[$key]['cityname'] = $cityname;
			//分类
			$typeSql = $dsql->SetQuery("SELECT `typename` FROM `#@__".$action."type` WHERE `id` = ". $value["typeid"]);
			$typename = $dsql->getTypeName($typeSql);
			$list[$key]["type"] = $typename[0]['typename'];

			$list[$key]["sort"] = $value["weight"];

			$state = "";
			switch($value["arcrank"]){
				case "0":
					$state = "等待审核";
					break;
				case "1":
					$state = "审核通过";
					break;
				case "2":
					$state = "审核拒绝";
					break;
				case "3":
					$state = "取消显示";
					break;
			}

			$list[$key]["state"] = $state;

			$list[$key]["ip"] = $value["ip"];
			$list[$key]["ipaddr"] = $value["ipaddr"];
			$list[$key]['isvalid'] = ($value['valid'] != 0 && $value['valid'] > $now) ? 0 : 1;

			//会员信息
			$list[$key]['userid'] = $value['userid'];
			$username = "";
			$sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = ".$value['userid']);
			$ret = $dsql->dsqlOper($sql, "results");
			if($ret){
				$username = $ret[0]['username'];
			}
			$list[$key]['username'] = $username;

			$list[$key]["date"] = date('y-m-d H:i:s', $value["pubdate"]);

			$param = array(
				"service"     => "info",
				"template"    => "detail",
				"id"          => $value['id']
			);
			$list[$key]['url'] = getUrlPath($param);
		}

		if(count($list) > 0){
			echo '{"state": 100, "info": '.json_encode("获取成功").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.', "totalNoshow": '.$totalNoshow.', "totalValid": '.$totalValid.'}, "articleList": '.json_encode($list).'}';
		}else{
			echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.', "totalNoshow": '.$totalNoshow.', "totalValid": '.$totalValid.'}}';
		}

	}else{
		echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.', "totalNoshow": '.$totalNoshow.', "totalValid": '.$totalValid.'}}';
	}
	die;

//删除
}elseif($dopost == "del"){
	if(!testPurview("delInfo")){
		die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
	};
	if($id != ""){
		$each = explode(",", $id);
		$error = array();
		$title = array();
		foreach($each as $val){

			//删除评论
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."common` WHERE `aid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."list` WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "results");

			array_push($title, $results[0]['title']);

			//删除缩略图
			delPicFile($results[0]['litpic'], "delThumb", $action);

			$body = $results[0]['body'];
			if(!empty($body)){
				delEditorPic($body, $action);
			}

			//删除图集
			$archives = $dsql->SetQuery("SELECT `picPath` FROM `#@__".$action."pic` WHERE `aid` = ".$val);
			$results = $dsql->dsqlOper($archives, "results");

			//删除图片文件
			if(!empty($results)){
				$atlasPic = "";
				foreach($results as $key => $value){
					$atlasPic .= $value['picPath'].",";
				}
				delPicFile(substr($atlasPic, 0, strlen($atlasPic)-1), "delAtlas", $action);
			}

			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."pic` WHERE `aid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除字段
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."item` WHERE `aid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除举报信息
			$archives = $dsql->SetQuery("DELETE FROM `#@__member_complain` WHERE `module` = 'info' AND `aid` = ".$val);
			$dsql->dsqlOper($archives, "update");

			//删除表
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."list` WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");
			if($results != "ok"){
				$error[] = $val;
			}

			checkArticleCache($val);
		}
		if(!empty($error)){
			echo '{"state": 200, "info": '.json_encode($error).'}';
		}else{
			adminLog("删除分类信息", join(", ", $title));
			echo '{"state": 100, "info": '.json_encode("删除成功！").'}';
		}
		die;
	}
	die;

//删除所有待审核信息
}elseif($dopost == "delAllGray"){
	if(!testPurview("delInfo")){
		die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
	};

	$archives = $dsql->SetQuery("SELECT * FROM `#@__".$action."list` WHERE `arcrank` = 0");
	$results = $dsql->dsqlOper($archives, "results");
	if($results){
		foreach ($results as $key => $value) {
			//删除缩略图
			delPicFile($value['litpic'], "delThumb", $action);

			$body = $value['body'];
			if(!empty($body)){
				delEditorPic($body, $action);
			}

			//删除图集
			$archives = $dsql->SetQuery("SELECT `picPath` FROM `#@__".$action."pic` WHERE `aid` = ".$value['id']);
			$results = $dsql->dsqlOper($archives, "results");

			//删除图片文件
			if(!empty($results)){
				$atlasPic = "";
				foreach($results as $k => $v){
					$atlasPic .= $v['picPath'].",";
				}
				delPicFile(substr($atlasPic, 0, strlen($atlasPic)-1), "delAtlas", $action);
			}

			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."pic` WHERE `aid` = ".$value['id']);
			$dsql->dsqlOper($archives, "update");

			//删除字段
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."item` WHERE `aid` = ".$value['id']);
			$dsql->dsqlOper($archives, "update");

			//删除表
			$archives = $dsql->SetQuery("DELETE FROM `#@__".$action."list` WHERE `id` = ".$value['id']);
			$dsql->dsqlOper($archives, "update");
		}

	}
	die;



//更新状态
}elseif($dopost == "updateState"){
	if(!testPurview("editInfo")){
		die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
	};
	$each = explode(",", $id);
	$error = array();
	if($id != ""){
		foreach($each as $val){


			//查询信息之前的状态
			$sql = $dsql->SetQuery("SELECT `title`, `arcrank`, `userid`, `pubdate` FROM `#@__".$action."list` WHERE `id` = $val");
			$ret = $dsql->dsqlOper($sql, "results");
			if($ret){

				$title    = $ret[0]['title'];
				$arcrank_ = $ret[0]['arcrank'];
				$userid   = $ret[0]['userid'];
				$pubdate  = $ret[0]['pubdate'];

				//会员消息通知
				if($arcrank != $arcrank_){

					$state = "";
					$status = "";

					//等待审核
					if($arcrank == 0){
						$state = 0;
						$status = "进入等待审核状态。";

					//已审核
					}elseif($arcrank == 1){
						$state = 1;
						$status = "已经通过审核。";

					//审核失败
					}elseif($arcrank == 2){
						$state = 2;
						$status = "审核失败。";
					}

					$param = array(
						"service"  => "member",
						"type"     => "user",
						"template" => "manage",
						"action"   => "info"
					);

					//会员信息
					if($userid){
						$uinfo = $userLogin->getMemberInfo($userid);
						if($uinfo['userType'] == 2){
							$param = array(
								"service"  => "member",
								"template" => "manage",
								"action"   => "info"
							);
						}
					}

					$param['param'] = "state=".$state;

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
							'keyword1' => '信息标题',
							'keyword2' => '发布时间',
							'keyword3' => '进展状态'
						)
					);

					updateMemberNotice($userid, "会员-发布信息审核通知", $param, $config);

					checkArticleCache($val);

				}

			}


			$archives = $dsql->SetQuery("UPDATE `#@__".$action."list` SET `arcrank` = ".$arcrank." WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");
			if($results != "ok"){
				$error[] = $val;
			}


		}
		if(!empty($error)){
			echo '{"state": 200, "info": '.json_encode($error).'}';
		}else{
			adminLog("更新分类信息状态", $id."=>".$arcrank);
			echo '{"state": 100, "info": '.json_encode("修改成功！").'}';
		}
	}
	die;

//更新时间
}elseif($dopost == "updateTime"){
	if(!testPurview("editInfo")){
		die('{"state": 200, "info": '.json_encode("对不起，您无权使用此功能！").'}');
	};
	$each = explode(",", $id);
	$error = array();
	if($id != ""){
		foreach($each as $val){
			$archives = $dsql->SetQuery("UPDATE `#@__".$action."list` SET `pubdate` = ".GetMkTime(time())." WHERE `id` = ".$val);
			$results = $dsql->dsqlOper($archives, "update");
			if($results != "ok"){
				$error[] = $val;
			}else{
				checkArticleCache($val);
			}
		}
		if(!empty($error)){
			echo '{"state": 200, "info": '.json_encode($error).'}';
		}else{
			adminLog("更新分类信息时间", $id);
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
		'admin/info/infoList.js'
	);
	$huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

	$huoniaoTag->assign('notice', $notice);

	$huoniaoTag->assign('typeListArr', json_encode($dsql->getTypeList(0, $action."type")));
    $huoniaoTag->assign('cityList', json_encode($adminCityArr));
	$huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/info";  //设置编译目录
	$huoniaoTag->display($templates);
}else{
	echo $templates."模板文件未找到！";
}

// 检查缓存
function checkArticleCache($id){
    checkCache("info_list", $id);
    clearCache("info_total", "key");
    clearCache("info_detail", $id);
}
