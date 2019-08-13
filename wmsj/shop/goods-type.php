<?php
/**
 * 店铺商品分类
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
$dbname = "waimai_list_type";
$templates = "goods-type.html";

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


if(empty($sid)){
  header("location:/wmsj/index.php?to=shop");
  die;
}

// 验证店铺
$sql = $dsql->SetQuery("SELECT `shopname` FROM `#@__waimai_shop` WHERE `id` = $sid AND `id` in ($managerIds)");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
  $huoniaoTag->assign('shopname', $ret[0]['shopname']);
}else{
  header("location:/wmsj/index.php?to=shop");
  die;
}
$huoniaoTag->assign('sid', $sid);

// 读取商品分类
$list = array();
$sql = $dsql->SetQuery("SELECT * FROM `#@__waimai_list_type` WHERE `del` = 0 AND `sid` = $sid ORDER BY `sort` DESC, `id` DESC");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
    foreach ($ret as $key => $value) {
        $list[$key]['id'] = $value['id'];
        $list[$key]['title'] = $value['title'];
        $list[$key]['sort'] = $value['sort'];
        $list[$key]['status'] = $value['status'];
        $list[$key]['start_time'] = $value['start_time'];
        $list[$key]['end_time'] = $value['end_time'];
        $list[$key]['weekshow'] = $value['weekshow'];
        $list[$key]['week'] = $value['week'] ? "星期" . str_replace(",", "、星期", strtr($value['week'], array("1" => "一", "2" => "二", "3" => "三", "4" => "四", "5" => "五", "6" => "六", "7" => "七"))) : "";
    }
}

$huoniaoTag->assign('list', $list);

//验证模板文件
if(file_exists($tpl."/".$templates)){

    $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);
    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/touch/");  //模块路径
    $huoniaoTag->display($templates);

}else{
    echo $templates."模板文件未找到！";
}
