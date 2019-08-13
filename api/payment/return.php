<?php
//页面跳转同步通知页面路径

require_once(dirname(__FILE__)."/../../include/common.inc.php");

$code    = !empty($_REQUEST['code']) ? trim($_REQUEST['code']) : '';
$module = !empty($_REQUEST['module']) ? trim($_REQUEST['module']) : '';
$sn      = !empty($_REQUEST['sn']) ? trim($_REQUEST['sn']) : '';

if(empty($code)) die('PayCode Request Error!');
if(empty($module)) die('Service Request Error!');
if(empty($sn)) die('OrderSN Request Error!');

//引入配置文件
require_once(dirname(__FILE__)."/$code/$code.php");
$payRequest = new $code();

if($module == "member"){
	$param = array(
		"service"  => $module,
		"type"		 => "user",
		"template" => "record"
	);

	//查询是否入驻商家页面
	$sql = $dsql->SetQuery("SELECT `body` FROM `#@__pay_log` WHERE `ordernum` = '$sn'");
	$ret = $dsql->dsqlOper($sql, "results");
	if($ret){
		$body = unserialize($ret[0]['body']);
		$type = $body['type'];

		//入驻成功的跳转到入驻页面
		if($type == "join"){
			$param = array(
				"service"  => "member",
				"type"     => "user",
				"template" => "business-config"
			);
		//入驻续费或升级的跳转到会员中心
		}elseif($type == "join_renew" || $type == "join_upgrade"){
			$param = array(
				"service"  => "member",
			);

		//升级成功后跳转到会员中心首页
		}elseif($type == "upgrade"){
			$param = array(
				"service"  => "member",
				"type"     => "user"
			);
		//升级成功后跳转到会员中心首页
		}elseif($type == "fabu"){

			$module = $body['module'];
			$class  = $body['class'];

			$tmp = "record";

			if($module == 'article' || $module == 'info' || $module == 'house' || $module == 'tieba'){

				$tmp = "manage-".$module;

				if($module == 'house'){
					$tmp .= "-".$class;
				}

			}else{

			}

			$param = array(
				"service"  => "member",
				"type"     => "user",
				"template" => $tmp
			);

		}
	}

}elseif ($module == "live"){
    $param = array(
        "service"  => $module,
        "template" => "returnLivePay",
        "ordernum" => $sn
    );
}else{
	$param = array(
		"service"  => $module,
		"template" => "payreturn",
		"ordernum" => $sn
	);
}
$url = getUrlPath($param);

if($payRequest->respond()){
	header("location:".$url);

}else{
	header("location:".$url);
}
