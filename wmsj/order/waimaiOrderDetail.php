<?php
/**
 * 订单详细
 *
 * @version        $Id: orderDetail.php 2017-5-25 上午10:16:21 $
 * @package        HuoNiao.Order
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "../" );
require_once(dirname(__FILE__)."/../inc/config.inc.php");
$dsql = new dsql($dbo);
$userLogin = new userLogin($dbo);
$tpl = dirname(__FILE__)."/../templates/";
$tpl = isMobile() ? $tpl."touch/order" : $tpl."order";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录

$dbname = "waimai_order";
$templates = "waimaiOrderDetail.html";

if(empty($id)){
    die;
}

$where = " AND `sid` in ($managerIds)";

$sql = $dsql->SetQuery("SELECT * FROM `#@__$dbname` WHERE `id` = $id".$where);
$ret = $dsql->dsqlOper($sql, "results");
if($ret){

  //更新订单信息的推送状态为已查看
  $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET `pushed` = 1 WHERE `sid` in ($managerIds) AND `state` = 2 AND `id` = $id");
  $dsql->dsqlOper($sql, "update");

    foreach ($ret[0] as $key => $value) {

        //店铺
        if($key == "sid"){
            $sql = $dsql->SetQuery("SELECT `shopname`, `coordY`, `coordX`, `merchant_deliver` FROM `#@__waimai_shop` WHERE `id` = $value");
            $ret = $dsql->dsqlOper($sql, "results");
            if($ret){
                $huoniaoTag->assign("shopname", $ret[0]['shopname']);
                $huoniaoTag->assign("coordY", $ret[0]['coordY']);
                $huoniaoTag->assign("coordX", $ret[0]['coordX']);
                $huoniaoTag->assign("merchant_deliver", $ret[0]['merchant_deliver']);
            }
        }

        //用户
        if($key == "uid"){
            // $userSql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = ". $value);
            // $username = $dsql->dsqlOper($userSql, "results");
            // if(count($username) > 0){
            //     $huoniaoTag->assign("username", $username[0]['username']);
            // }

        }

        if($key == "person"){
            $huoniaoTag->assign("person", $value);
            $huoniaoTag->assign("username", $value);
        }

        //商品、预设字段、费用详细
        if($key == "food" || $key == "preset" || $key == "priceinfo"){
            $value = unserialize($value);
        }

        //支付方式
        if($key == "paytype"){
            $_paytype = '';
            switch ($value) {
                case 'wxpay':
                    $_paytype = '微信支付';
                    break;
                case 'alipay':
                    $_paytype = '支付宝';
                    break;
                case 'unionpay':
                    $_paytype = '银联支付';
                    break;
                case 'money':
                    $_paytype = '余额支付';
                    break;
                case 'delivery':
                    $_paytype = '货到付款';
                    break;
                default:
                    break;
            }
            $value = $_paytype;
        }

        //配送员
        if($key == "peisongid"){
            $sql = $dsql->SetQuery("SELECT `name`, `phone` FROM `#@__waimai_courier` WHERE `id` = $value");
            $ret = $dsql->dsqlOper($sql, "results");
            if($ret){
                $huoniaoTag->assign("peisong", $ret[0]['name']);
                $huoniaoTag->assign("peisongphone", $ret[0]['phone']);
            }
        }

        // 支付记录订单号
        if($key == 'paylognum' && empty($value)){
            $sql = $dsql->SetQuery("SELECT `ordernum` FROM `#@__pay_log` WHERE `body` = '".$ret[0]['ordernum']."'");
            $res = $dsql->dsqlOper($sql, "results");
            if($res){
              $value = $res[0]['ordernum'];
            }
        }


        $huoniaoTag->assign($key, $value);
    }


}else{
    die;
}

//验证模板文件
if(file_exists($tpl."/".$templates)){
    $jsFile = array(
        'shop/waimaiOrderDetail.js'
    );
    $huoniaoTag->assign('jsFile', $jsFile);

    $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);
    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/".(isMobile() ? "touch/" : ""));  //模块路径
    $huoniaoTag->display($templates);
}else{
    echo $templates."模板文件未找到！";
}
