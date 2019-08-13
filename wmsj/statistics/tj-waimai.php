<?php
/**
 * 管理后台首页
 *
 * @version        $Id: index.php 2013-7-7 上午10:33:36 $
 * @package        HuoNiao.Administrator
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "../" );
require_once(dirname(__FILE__)."/../inc/config.inc.php");
$dsql = new dsql($dbo);
$userLogin = new userLogin($dbo);
$tpl = dirname(__FILE__)."/../templates/";
$tpl = isMobile() ? $tpl."touch/statistics" : $tpl."statistics";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "tj-waimai.html";

//域名检测 s
$httpHost  = $_SERVER['HTTP_HOST'];    //当前访问域名
$reqUri    = $_SERVER['REQUEST_URI'];  //当前访问目录

//判断是否为主域名，如果不是则跳转到主域名的后台目录
if($cfg_basehost != $httpHost && $cfg_basehost != str_replace("www.", "", $httpHost)){
	header("location:http://".$cfg_basehost.$reqUri);
	die;
}

// 查询当日外卖业绩
$stime = GetMkTime(date("Y-m-d") . " 00:00:00");
// 成功订单
$sql = $dsql->SetQuery("SELECT `id` FROM `#@__waimai_order` WHERE `state` = 1 AND sid in ($managerIds) AND `pubdate` >= $stime");
$totalSuccess = $dsql->dsqlOper($sql, "totalCount");
// 失败订单
$sql = $dsql->SetQuery("SELECT `id` FROM `#@__waimai_order` WHERE `state` = 7 AND sid in ($managerIds) AND `pubdate` >= $stime");
$totalFailed = $dsql->dsqlOper($sql, "totalCount");
// 总金额
$sql = $dsql->SetQuery("SELECT SUM(`amount`) amount FROM `#@__waimai_order` WHERE `state` = 1 AND sid in ($managerIds) AND `pubdate` >= $stime");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
    $totalAmount = empty($ret[0]['amount']) ? 0 : $ret[0]['amount'];
}else{
    $totalAmount = 0;
}

// 分成款项
$business = 0;
$sql = $dsql->SetQuery("SELECT o.`usequan`, o.`food`, o.`priceinfo`, s.`fencheng_foodprice`, s.`fencheng_delivery`, s.`fencheng_dabao`, s.`fencheng_addservice`, s.`fencheng_discount`, s.`fencheng_promotion`, s.`fencheng_firstdiscount`, s.`fencheng_quan` FROM `#@__waimai_order` o LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE o.`state` = 1 AND o.`pubdate` >= $stime AND o.`sid` in ($managerIds)");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
    $foodTotalPrice = $turnover = $platform = $business = $delivery = $money = $online = $peisongTotalPrice = $dabaoTotalPrice = $addserviceTotalPrice = $discountTotalPrice = $promotionTotalPrice = $firstdiscountTotalPrice = $quanTotalPrice = 0;

    foreach ($ret as $k => $v) {

        $foodTotal = $peisongTotal = $dabaoTotal = $addserviceTotal = $discountTotal = $promotionTotal = $firstdiscountTotal = $quanTotal = 0;

        $food = unserialize($v['food']);
        $priceinfo = unserialize($v['priceinfo']);
        $fencheng_foodprice = (int)$v['fencheng_foodprice'];   //商品原价分成
        $fencheng_delivery = (int)$v['fencheng_delivery'];     //配送费分成
        $fencheng_dabao = (int)$v['fencheng_dabao'];           //打包分成
        $fencheng_addservice = (int)$v['fencheng_addservice']; //增值服务费分成
        $fencheng_discount = (int)$v['fencheng_discount'];     //折扣分摊
        $fencheng_promotion = (int)$v['fencheng_promotion'];   //满减分摊
        $fencheng_firstdiscount = (int)$v['fencheng_firstdiscount'];  //首单减免分摊
        $fencheng_quan = (int)$v['fencheng_quan'];  //优惠券分摊

        // 优惠券
        $usequan = (int)$v['usequan'];
        $quanBili = 100;
        if($usequan){
            $quanSql = $dsql->SetQuery("SELECT `bear` FROM `#@__waimai_quanlist` WHERE `id` = $usequan");
            $quanRet = $dsql->dsqlOper($quanSql, "results");
            if($quanRet){
                $bear = $quanRet[0]['bear'];
                // 平台和店铺分担
                if(!$bear){
                    $quanBili = $fencheng_quan;
                }
            }
        }

        //计算单个订单的商品原价
        foreach ($food as $k_ => $v_) {
            $foodTotal += $v_['price'] * $v_['count'];
            $foodTotalPrice += $v_['price'] * $v_['count'];
        }

        //费用详情
        foreach ($priceinfo as $k_ => $v_) {
            if($v_['type'] == "peisong"){
                $peisongTotal += $v_['amount'];
                $peisongTotalPrice += $v_['amount'];
            }
            if($v_['type'] == "dabao"){
                $dabaoTotal += $v_['amount'];
                $dabaoTotalPrice += $v_['amount'];
            }
            if($v_['type'] == "fuwu"){
                $addserviceTotal += $v_['amount'];
                $addserviceTotalPrice += $v_['amount'];
            }
            if($v_['type'] == "youhui"){
                $discountTotal += $v_['amount'];
                $discountTotalPrice += $v_['amount'];
            }
            if($v_['type'] == "manjian"){
                $promotionTotal += $v_['amount'];
                $promotionTotalPrice += $v_['amount'];
            }
            if($v_['type'] == "shoudan"){
                $firstdiscountTotal += $v_['amount'];
                $firstdiscountTotalPrice += $v_['amount'];
            }
            if($v_['type'] == "quan"){
                $quanTotal += -$v_['amount'];
                $quanTotalPrice += -$v_['amount'];
            }
        }

        //计算总交易额
        $zjye = $foodTotal - $discountTotal - $promotionTotal - $firstdiscountTotal + $dabaoTotal + $peisongTotal + $addserviceTotal - $quanTotal;
        $turnover += $zjye;

        //计算平台应得金额
        $ptyd = $foodTotal * $fencheng_foodprice / 100 - $discountTotal * $fencheng_discount / 100 - $promotionTotal * $fencheng_promotion / 100 - $firstdiscountTotal * $fencheng_firstdiscount / 100 + $dabaoTotal * $fencheng_dabao / 100 + $peisongTotal * $fencheng_delivery / 100 + $addserviceTotal * $fencheng_addservice / 100 - $quanTotal * $quanBili / 100;
        $platform += $ptyd;

        //商家应得
        $business += $zjye - $ptyd;


    }
}

$huoniaoTag->assign('totalSuccess', $totalSuccess);
$huoniaoTag->assign('totalFailed', $totalFailed);
$huoniaoTag->assign('totalAmount', sprintf("%.2f", $totalAmount));
$huoniaoTag->assign('business', sprintf("%.2f", $business));




// echo $tpl."/".$templates;
//验证模板文件
if(file_exists($tpl."/".$templates)){
    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/".(isMobile() ? "touch/" : ""));  //模块路径
	$huoniaoTag->display($templates);
}else{
	echo $tpl."/".$templates."模板文件未找到！";
}
