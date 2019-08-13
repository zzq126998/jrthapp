<?php
/**
 * 外卖统计-营业额统计
 *
 * @version        $Id: waimaiStatistics.php 2017-6-18 上午12:27:19 $
 * @package        HuoNiao.Waimai
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

$templates = "waimaiStatisticsChartrevenue.html";
$action ="chartrevenue" ;


$where = " AND `id` in ($managerIds)";
//查询所有店铺
$shopArr = array();
$sql = $dsql->SetQuery("SELECT `id`, `shopname` FROM `#@__waimai_shop` WHERE 1 = 1 $where ORDER BY `id`");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
    $shopArr = $ret;
}
$huoniaoTag->assign("shop_id", $shop_id);
$huoniaoTag->assign("shopArr", $shopArr);

//查询指定店铺信息
$shopname = "";
if(!empty($shop_id)){
    $sql = $dsql->SetQuery("SELECT `shopname` FROM `#@__waimai_shop` WHERE `id` = $shop_id".$where);
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){
        $shopname = $ret[0]['shopname'];
    }
}
$huoniaoTag->assign("shopname", $shopname);


//查询所有配送员
$courierArr = array();
$sql = $dsql->SetQuery("SELECT `id`, `name` FROM `#@__waimai_courier` ORDER BY `id`");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
    $courierArr = $ret;
}
$huoniaoTag->assign("courier_id", $courier_id);
$huoniaoTag->assign("courierArr", $courierArr);

//查询指定配送员信息
$couriername = "";
if(!empty($courier_id)){
    $sql = $dsql->SetQuery("SELECT `name` FROM `#@__waimai_courier` WHERE `id` = $courier_id");
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){
        $couriername = $ret[0]['name'];
    }
}
$huoniaoTag->assign("couriername", $couriername);


//最近一月时间
$nowDate = $endDate ? $endDate : ($action == "chartordertime" || $action == "chartcourier" ? date("Y-m-d") . " 23:59:59" : date("Y-m-d"));
$lastMonthDate = $beginDate ? $beginDate : ($action == "chartordertime" || $action == "chartcourier" ? date("Y-m-d", strtotime("-31 day")) . " 00:00:00" : date("Y-m-d", strtotime("-31 day")));

$huoniaoTag->assign("nowDate", $nowDate);
$huoniaoTag->assign("lastMonthDate", $lastMonthDate);

$begintime = strtotime($lastMonthDate);
$endtime = strtotime($nowDate);
$timeArr = array();
for($start = $begintime; $start <= $endtime; $start += 24 * 3600) {
    array_push($timeArr, date("m-d", $start));
}
$huoniaoTag->assign("timeArr", json_encode($timeArr));


$dataArr = $priceArr = array();

//外卖营业额统计
if($action == "chartrevenue"){

    for($start = $endtime; $start >= $begintime; $start -= 24 * 3600) {

        $time1 = $start;
        $time2 = $start + 86400;

        $where = " AND `sid` in ($managerIds)";
        if($shop_id){
            $where = " AND `sid` = $shop_id";
        }

        //货到付款
        $sql = $dsql->SetQuery("SELECT SUM(`amount`) total FROM `#@__waimai_order` WHERE `paytype` = 'delivery' AND `state` = 1 AND `pubdate` >= $time1 AND `pubdate` < $time2" . $where);
        $delivery = $dsql->dsqlOper($sql, "results");

        //余额支付
        $sql = $dsql->SetQuery("SELECT SUM(`amount`) total FROM `#@__waimai_order` WHERE `paytype` = 'money' AND `state` = 1 AND `pubdate` >= $time1 AND `pubdate` < $time2" . $where);
        $money = $dsql->dsqlOper($sql, "results");

        //在线支付
        $sql = $dsql->SetQuery("SELECT SUM(`amount`) total FROM `#@__waimai_order` WHERE (`paytype` = 'wxpay' OR `paytype` = 'alipay') AND `state` = 1 AND `pubdate` >= $time1 AND `pubdate` < $time2" . $where);
        $online = $dsql->dsqlOper($sql, "results");

        $zjye = $delivery[0]['total'] + $money[0]['total'] + $online[0]['total'];

        //总营业额
        $total = array(array("total" => $zjye));

        //其他费用统计
        $sql = $dsql->SetQuery("SELECT o.`priceinfo`, o.`food`, o.`usequan`, s.`fencheng_foodprice`, s.`fencheng_delivery`, s.`fencheng_dabao`, s.`fencheng_addservice`, s.`fencheng_discount`, s.`fencheng_promotion`, s.`fencheng_firstdiscount`, s.`fencheng_quan` FROM `#@__waimai_order` o LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE `state` = 1 AND `pubdate` >= $time1 AND `pubdate` < $time2" . $where);
        $ret = $dsql->dsqlOper($sql, "results");

        $business = $foodTotal = $peisongTotal = $dabaoTotal = $addserviceTotal = $discountTotal = $promotionTotal = $firstdiscountTotal = $zjye = $youhuiquanTotal = $youhuiquan = 0;

        $quanList = array();
        if($ret){
            foreach ($ret as $key => $value) {

                $fencheng_quan = (int)$value['fencheng_quan'];  //优惠券分摊

                // 优惠券
                $usequan = (int)$value['usequan'];
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
                    array_push($quanList, $usequan."-".$quanBili);
                }

                $priceinfo = empty($value['priceinfo']) ? array() : unserialize($value['priceinfo']);
                if($priceinfo){
                    foreach ($priceinfo as $k => $v) {
                        if($v['type'] == "dabao"){
                            $dabaoTotal += $v['amount'];
                        }
                        if($v['type'] == "peisong"){
                            $peisongTotal += $v['amount'];
                        }
                        if($v['type'] == "fuwu"){
                            $addserviceTotal += $v['amount'];
                        }
                        if($v['type'] == "shoudan"){
                            $firstdiscountTotal += $v['amount'];
                        }

                        if($v['type'] == "youhui"){
                            $discountTotal += $v['amount'];
                        }

                        if($v['type'] == "manjian"){
                            $promotionTotal += $v['amount'];
                        }

                        if($v['type'] == "quan"){
                            $youhuiquan += -$v['amount'] * $quanBili / 100;
                            $youhuiquanTotal += -$v['amount'];
                        }

                    }
                }


                $fencheng_foodprice = (int)$value['fencheng_foodprice'];   //商品原价分成
                $fencheng_delivery = (int)$value['fencheng_delivery'];     //配送费分成
                $fencheng_dabao = (int)$value['fencheng_dabao'];           //打包分成
                $fencheng_addservice = (int)$value['fencheng_addservice']; //增值服务费分成
                $fencheng_discount = (int)$value['fencheng_discount'];     //折扣分摊
                $fencheng_promotion = (int)$value['fencheng_promotion'];   //满减分摊
                $fencheng_firstdiscount = (int)$value['fencheng_firstdiscount'];  //首单减免分摊


                //计算单个订单的商品原价
                $food = unserialize($value['food']);
                foreach ($food as $k_ => $v_) {
                    $foodTotal += $v_['price'] * $v_['count'];
                }

            }

            //计算总交易额
            $zjye = $foodTotal - $discountTotal - $promotionTotal - $firstdiscountTotal + $dabaoTotal + $peisongTotal + $addserviceTotal - $youhuiquanTotal;

            //计算平台应得金额
            $ptyd = $foodTotal * $fencheng_foodprice / 100 - $discountTotal * $fencheng_discount / 100 - $promotionTotal * $fencheng_promotion / 100 - $firstdiscountTotal * $fencheng_firstdiscount / 100 + $dabaoTotal * $fencheng_dabao / 100 + $peisongTotal * $fencheng_delivery / 100 + $addserviceTotal * $fencheng_addservice / 100 - $youhuiquan;


            //商家应得
            $business = $zjye - $ptyd;
        }

        array_push($dataArr, array(
            "date"     => date("Y-m-d", $start),
            "datem"    => date("m-d", $start),
            "total"    => $total[0]['total'],
            "delivery" => $delivery[0]['total'],
            "money"    => $money[0]['total'],
            "online"   => $online[0]['total'],
            "food"     => $foodTotal,
            "dabao"    => $dabaoTotal,
            "peisong"  => $peisongTotal,
            "fuwu"     => $addserviceTotal,
            "shoudan"  => $firstdiscountTotal,
            "quan"     => $youhuiquanTotal,
            "business" => $business
        ));

        array_push($priceArr, sprintf("%.2f", $total[0]['total']));

    }


    //导出
    if($do == "export"){

        $shopname = (empty($shopname) ? "全部店铺" : $shopname) . "营业额统计";
        $shopname = iconv("UTF-8", "GB2312//IGNORE", $shopname);

        include HUONIAOROOT.'/include/class/PHPExcel/PHPExcel.php';
        include HUONIAOROOT.'/include/class/PHPExcel/PHPExcel/Writer/Excel2007.php';
        //或者include 'PHPExcel/Writer/Excel5.php'; 用于输出.xls 的
        // 创建一个excel
        $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Phpmarker")->setLastModifiedBy("Phpmarker")->setTitle("Phpmarker")->setSubject("Phpmarker")->setDescription("Phpmarker")->setKeywords("Phpmarker")->setCategory("Phpmarker");

        $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', '时间')
        ->setCellValue('B1', '总营业额')
        ->setCellValue('C1', '货到付款')
        ->setCellValue('D1', '余额支付')
        ->setCellValue('E1', '在线支付')
        ->setCellValue('F1', '餐盒费')
        ->setCellValue('G1', '配送费')
        ->setCellValue('H1', '增值服务费统计')
        ->setCellValue('I1', '首单立减总金额');


        // 表名
        $tabname = "外卖营业额统计";
        $objPHPExcel->getActiveSheet()->setTitle($tabname);

        // 将活动表索引设置为第一个表，因此Excel将作为第一个表打开此表
        $objPHPExcel->setActiveSheetIndex(0);
        // 所有单元格默认高度
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
        // 冻结窗口
        $objPHPExcel->getActiveSheet()->freezePane('A2');

        // 从第二行开始
        $row = 2;

        $total = $delivery = $money = $online = $dabao = $peisong = $fuwu = $shoudan = 0;
        foreach($dataArr as $data){
          $objPHPExcel->getActiveSheet()->setCellValue("A".$row, $data['date']);
          $objPHPExcel->getActiveSheet()->setCellValue("B".$row, $data['total']);
          $objPHPExcel->getActiveSheet()->setCellValue("C".$row, $data['delivery']);
          $objPHPExcel->getActiveSheet()->setCellValue("D".$row, $data['money']);
          $objPHPExcel->getActiveSheet()->setCellValue("E".$row, $data['online']);
          $objPHPExcel->getActiveSheet()->setCellValue("F".$row, $data['dabao']);
          $objPHPExcel->getActiveSheet()->setCellValue("G".$row, $data['peisong']);
          $objPHPExcel->getActiveSheet()->setCellValue("H".$row, $data['fuwu']);
          $objPHPExcel->getActiveSheet()->setCellValue("I".$row, $data['shoudan']);
          $row++;

          $total += $data['total'];
          $delivery += $data['delivery'];
          $money += $data['money'];
          $online += $data['online'];
          $dabao += $data['dabao'];
          $peisong += $data['peisong'];
          $fuwu += $data['fuwu'];
          $shoudan += $data['shoudan'];
        }

        $objPHPExcel->getActiveSheet()->setCellValue("A".$row, "总计");
        $objPHPExcel->getActiveSheet()->setCellValue("B".$row, $total);
        $objPHPExcel->getActiveSheet()->setCellValue("C".$row, $delivery);
        $objPHPExcel->getActiveSheet()->setCellValue("D".$row, $money);
        $objPHPExcel->getActiveSheet()->setCellValue("E".$row, $online);
        $objPHPExcel->getActiveSheet()->setCellValue("F".$row, $dabao);
        $objPHPExcel->getActiveSheet()->setCellValue("G".$row, $peisong);
        $objPHPExcel->getActiveSheet()->setCellValue("H".$row, $fuwu);
        $objPHPExcel->getActiveSheet()->setCellValue("I".$row, $shoudan);

        $objActSheet = $objPHPExcel->getActiveSheet();

        // 列宽
        $objPHPExcel->getActiveSheet()->getColumnDimension()->setAutoSize(true);

        $filename = $shopname."__".$lastMonthDate."__".$nowDate.".csv";
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
        die;

    }

}



$huoniaoTag->assign("dataArr", $dataArr);

$priceArr = array_reverse($priceArr);
$huoniaoTag->assign("priceArr", str_replace('"', '', json_encode($priceArr)));


$huoniaoTag->assign('action', $action);

//验证模板文件
if(file_exists($tpl."/".$templates)){

  $jsFile = array(
    'highcharts.js',
    'shop/waimaiStatistics.js',
    'shop/waimaiStatistics'.$action.'.js'
  );
  $huoniaoTag->assign('jsFile', $jsFile);

  $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);
  $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/".(isMobile() ? "touch/" : ""));  //模块路径
  $huoniaoTag->display($templates);
}else{
    echo $templates."模板文件未找到！";
}
