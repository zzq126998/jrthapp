<?php
/**
 * 店铺管理
 *
 * @version        $Id: list.php 2017-4-25 上午10:16:21 $
 * @package        HuoNiao.Shop
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "../" );
require_once(dirname(__FILE__)."/../inc/config.inc.php");
$dsql = new dsql($dbo);
$userLogin = new userLogin($dbo);
$tpl = dirname(__FILE__)."/../templates/touch/shop";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$dbname = "waimai_shop";
$templates = "store-detail.html";


if(!empty($action)){
  if(empty($id)){
    echo '{"state": 200, "info": "未指定id！"}';
    exit();
  }
  if(!checkWaimaiShopManager($id)){
    echo '{"state": 200, "info": "操作失败，请刷新页面！"}';
    exit();
  }
}

if(empty($id)){
  header("location:/wmsj/index.php?to=shop");
  die;
}

// 读取当前店铺营业状态和下单状态
$sql = $dsql->SetQuery("SELECT `ordervalid`, `status`, `shopname` FROM `#@__$dbname` WHERE `id` = $id AND `id` in ($managerIds)");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
  $data = $ret[0];
  $huoniaoTag->assign('shopname', $data['shopname']);
  $huoniaoTag->assign('status', $data['status']);
  $huoniaoTag->assign('ordervalid', $data['ordervalid']);
  $huoniaoTag->assign('id', $id);
}else{
  header("location:/wmsj/index.php?to=shop");
  die;
}

//验证模板文件
if(file_exists($tpl."/".$templates)){


    $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);
    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/touch/");  //模块路径
    $huoniaoTag->display($templates);

}else{
    echo $templates."模板文件未找到！";
}
