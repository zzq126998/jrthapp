<?php
/**
 * 后台管理配置文件
 *
 * @version        $Id: config.inc.php 2013-7-7 上午10:33:36 $
 * @package        HuoNiao.Administrator
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
require_once(HUONIAOADMIN.'../include/common.inc.php');
require_once(HUONIAOADMIN.'function/waimai.fun.php');
$huoniaoTag->caching         = FALSE;                             //是否使用缓存，后台不需要开启
$huoniaoTag->compile_dir     = HUONIAOROOT."/templates_c/admin";  //设置编译目录
$huoniaoTag->template_dir = dirname(__FILE__)."/templates";       //设置后台模板目录
$userLogin = new userLogin($dbo);

//header('Cache-Control:private');

//获取当前地址
$Nowurl = $s_scriptName = '';
$path = array();

$Nowurl = GetCurUrl();
$Nowurls = explode('/', $Nowurl);
for($i = 1; $i < count($Nowurls); $i++){
	array_push($path, $Nowurls[$i]);
}

$s_scriptName = join("/", $path);

if($action == "logout"){
    $userLogin->exitMember();
    // DropCookie("login_user");
    header("location:/wmsj");
    // echo '{"state": 200, "info": "退出成功！"}';
    exit();
}

//检验用户登录状态
$userid = $userLogin->getMemberID();

$app = (int)$app;
$appuid = (int)$appuid;


if($app && $appuid){
	$userid = $appuid;
}

if($userid==-1){
		if($action != "checkLastOrder" && $action != "shopList" && $action != "updateStatus"){
	    header("location:/login.html?furl=".urlencode($s_scriptName));
	    exit();
		}else{
			echo '{"state": 200, "info": "登录超时！"}';
			exit();
		}

// 判断用户权限
}else{
	//判断是否入驻商家 start
	$time = time();
	$sql = $dsql->SetQuery("SELECT `id` FROM `#@__waimai_shop_manager` WHERE `userid` = $userid");
	$ret = $dsql->dsqlOper($sql, "results");
	if(!$ret){
		$sql = $dsql->SetQuery("SELECT `id`, `title`, `company`, `cityid` FROM `#@__business_list` WHERE `uid`='$userid' and `state` = 1");
		$res = $dsql->dsqlOper($sql, "results");
		if(!empty($res[0]['id'])){
			$company = !empty($res[0]['company']) ? $res[0]['company'] : $res[0]['title'];
			$cityid  = $res[0]['cityid'];
			$archives = $dsql->SetQuery("INSERT INTO `#@__waimai_shop` (`cityid`, `shopname`, `jointime`, `status`, `ordervalid`)	VALUES ('$cityid', '$company', '$time', 1, 1)");
			$aid = $dsql->dsqlOper($archives, "lastid");
			if(is_numeric($aid)){
				$sql = $dsql->SetQuery("INSERT INTO `#@__waimai_shop_manager` (`userid`, `shopid`, `pubdate`) VALUES ('$userid', '$aid', '$time')");
				$dsql->dsqlOper($sql, "lastid");
			}
		}
	}
	//判断是否入驻商家 end

    $sql = $dsql->SetQuery("SELECT `shopid` FROM `#@__waimai_shop_manager` WHERE `userid` = $userid");
    $ret = $dsql->dsqlOper($sql, "results");
    if(!$ret){
        $info = "抱歉，你没有任何外卖店铺可以管理，请联系管理员！";
        $back = 'window.location.href = "/?service=member&template=logout"';
        if($from){
            $info .= "\\n即将返回来源页";
            $back = 'setTimeout(function(){window.location.href = "'.$from.'"}, 1000)';
        }
        echo '<script>setTimeout(function(){alert("'.$info.'");'.$back.'}, 500)</script>';
        die;
    }

    $manager = array();
    foreach ($ret as $key => $value) {
        array_push($manager, $value['shopid']);
    }
    $managerIds = join(",", $manager);

}

$userLogin->keepUser();

$huoniaoTag->assign("adminPath", HUONIAOADMIN."../");

// 可管理店铺id数组
/*$huoniaoTag->assign("manager", $manager);
$huoniaoTag->assign("managerIds", $managerIds);*/
