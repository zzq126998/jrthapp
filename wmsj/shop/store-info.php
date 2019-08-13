<?php

/**
 * 管理店铺
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



$dotype = empty($dotype) ? "basic-info" : $dotype;

$templates = $dotype.".html";



//表单提交

if($_POST){



    if(empty($id) || empty($dotype)){

      echo '{"state":200, "info":"参数错误"}';

    }



    if($id && !checkWaimaiShopManager($id)){

      echo '{"state":200, "info":"您没有该店铺的管理权限！"}';

      exit();

    }



    //获取表单数据

    $id                      = (int)$id;

    $sort                    = (int)$sort;

    $typeid                  = $typeid;

    $category                = (int)$category;

    $weeks                   = isset($weeks) ? join(',',$weeks) : '';

    $delivery_radius         = (float)$delivery_radius;

    $delivery_fee_mode       = (int)$delivery_fee_mode;

    $basicprice              = (float)$basicprice;

    $delivery_fee            = (float)$delivery_fee;

    $delivery_fee_type       = (int)$delivery_fee_type;

    $delivery_fee_value      = (float)$delivery_fee_value;

    $open_range_delivery_fee = (int)$open_range_delivery_fee;

    $shop_notice_used        = (int)$shop_notice_used;

    $linktype                = (int)$linktype;

    $callshow                = (int)$callshow;

    $unitshow                = (int)$unitshow;

    $opencomment             = (int)$opencomment;

    $showtype                = (int)$showtype;

    $food_showtype           = (int)$food_showtype;

    $showsales               = (int)$showsales;

    $show_basicprice         = (int)$show_basicprice;

    $show_delivery           = (int)$show_delivery;

    $show_range              = (int)$show_range;

    $show_area               = (int)$show_area;

    $show_delivery_service   = (int)$show_delivery_service;

    $paytype                 = isset($paytype) ? join(',',$paytype) : '';

    $offline_limit           = (int)$offline_limit;

    $pay_offline_limit       = (float)$pay_offline_limit;

    $is_first_discount       = (int)$is_first_discount;

    $first_discount          = (float)$first_discount;

    $is_discount             = (int)$is_discount;

    $discount_value          = (float)$discount_value;

    $open_promotion          = (int)$open_promotion;

    $open_fullcoupon          = (int)$open_fullcoupon;

    $smsvalid                = (int)$smsvalid;

    $emailvalid              = (int)$emailvalid;

    $weixinvalid             = (int)$weixinvalid;

    $customerid              = (int)$customerid;

    $auto_printer            = (int)$auto_printer;

    $showordernum            = (int)$showordernum;

    $open_addservice         = (int)$open_addservice;

    $bind_print              = (int)$bind_print;

    // $manager                 = $manager;

    $jointime                = GetMkTime(time());











    //不同距离不同外送费和起送价

    $range_delivery_fee_value = array();

    if($rangedeliveryfee){

        foreach ($rangedeliveryfee['start'] as $key => $value) {

            array_push($range_delivery_fee_value, array(

                $value, $rangedeliveryfee['stop'][$key], $rangedeliveryfee['value'][$key], $rangedeliveryfee['minvalue'][$key]

            ));

        }

    }

    $range_delivery_fee_value = serialize($range_delivery_fee_value);





    //预设选项



    //负数或者false表示第一个参数应该在前

    function sort_by($x, $y){

      return strcasecmp($x[1],$y[1]);

    }



    $preset = array();

    if($field){

        foreach ($field['name'] as $key => $value) {

            array_push($preset, array(

                $field['type'][$key], $field['sort'][$key], $value, $field['content'][$key]

            ));

        }

    }

    uasort($preset, 'sort_by');

    $preset = serialize($preset);





    //满减

    $promotionsArr = array();

    if($promotions){

        foreach ($promotions as $key => $value) {

            array_push($promotionsArr, array(

                (int)$value['amount'], (int)$value['discount']

            ));

        }

    }

    $promotions = serialize($promotionsArr);



    //满送

    $fullcouponArr = array();

    if($fullcoupon){

        foreach ($fullcoupon as $key => $value) {

            array_push($fullcouponArr, array(

                (int)$value['full'], (int)$value['coupon']

            ));

        }

    }

    $fullcoupon = serialize($fullcouponArr);





    //增值服务

    $addserviceArr = array();

    if($addservice){

        foreach ($addservice as $key => $value) {

            array_push($addserviceArr, array(

                $value['name'], $value['start'], $value['stop'], $value['price']

            ));

        }

    }

    $addservice = serialize($addserviceArr);





    //自定义显示内容

    $selfdefineArr = array();

    if($selfdefine){

        foreach ($selfdefine['type'] as $key => $value) {

            array_push($selfdefineArr, array(

                $value, $selfdefine['name'][$key], $selfdefine['content'][$key]

            ));

        }

    }

    $selfdefine = serialize($selfdefineArr);





    //打印机

    $printArr = array();

    if($print_config){

        foreach ($print_config['partner'] as $key => $value) {

            array_push($printArr, array(

                "partner" => $value,

                "apikey"  => $print_config['apikey'][$key],

                "mcode"  => $print_config['mcode'][$key],

                "msign"  => $print_config['msign'][$key]

            ));

        }

    }

    $print_config = serialize($printArr);





    $service_area_data = array();

    $serviceAreaData = json_decode($_POST['service_area_data'], true);

    if($serviceAreaData){

        foreach ($serviceAreaData as $key => $value) {

            array_push($service_area_data, array(

                "peisong" => $value['peisong'],

                "qisong"  => $value['qisong'],

                "points"  => $value['points']

            ));

        }

    }

    $service_area_data = serialize($service_area_data);





    // 基本信息

    if($dotype == 'basic-info'){



      //店铺名称

      if(trim($shopname) == ""){

        echo '{"state": 200, "info": "请输入店铺名称"}';

        exit();

      }



      //店铺分类

      if(empty($typeid)){

          echo '{"state": 200, "info": "请选择店铺分类"}';

          exit();

      }else{



          $typeid = join(",", $typeid);

      }



      //先验证店铺是否存在

      $sql = $dsql->SetQuery("SELECT `id` FROM `#@__$dbname` WHERE `id` = $id");

      $ret = $dsql->dsqlOper($sql, "totalCount");

      if($ret <= 0){

          echo '{"state": 200, "info": "店铺不存在或已经删除！"}';

        exit();

      }



      $sql = $dsql->SetQuery("SELECT `id` FROM `#@__$dbname` WHERE `shopname` = '$shopname' AND `id` != '$id'");

      $ret = $dsql->dsqlOper($sql, "results");

      if($ret){

        echo '{"state": 200, "info": "店铺名称已经存在！"}';

        exit();

      }



    }







    // 组合要修改的字段

    $fields = array();



    if($dotype == 'basic-info'){

      array_push($fields, 'sort');

      array_push($fields, 'shopname');

      array_push($fields, 'typeid');

      array_push($fields, 'category');

      array_push($fields, 'phone');

      array_push($fields, 'address');

      array_push($fields, 'qq');

      array_push($fields, 'description');

      // array_push($fields, 'coordX');

      // array_push($fields, 'coordY');



    // 营业信息

    }elseif($dotype == 'business-info'){

      array_push($fields, 'status');

      array_push($fields, 'closeinfo');

      array_push($fields, 'ordervalid');

      array_push($fields, 'closeorder');

      array_push($fields, 'merchant_deliver');

      array_push($fields, 'selftake');

      array_push($fields, 'closeorder');

      array_push($fields, 'weeks');

      array_push($fields, 'start_time1');

      array_push($fields, 'end_time1');

      array_push($fields, 'start_time2');

      array_push($fields, 'end_time2');

      array_push($fields, 'start_time3');

      array_push($fields, 'end_time3');

      // array_push($fields, 'delivery_radius');

      array_push($fields, 'delivery_area');



    // 店铺显示

    }elseif($dotype == 'display-info'){

      array_push($fields, 'shop_notice');

      array_push($fields, 'shop_notice_used');

      array_push($fields, 'buy_notice');



    // 店铺图片

    }elseif($dotype == 'image-info'){

      array_push($fields, 'shop_banner');



    // 增值服务

    }elseif($dotype == 'add-service'){

      array_push($fields, 'open_addservice');

      array_push($fields, 'addservice');



    // 资质招聘

    }elseif($dotype == 'license-info'){

      array_push($fields, 'food_license_img');

      array_push($fields, 'business_license_img');



    }



    // 拼接SET

    $setStr = array();

    foreach ($fields as $key => $value) {

      array_push($setStr, "`$value` = '".$$value."'");

    }

    // print_r($setStr);die;



    $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET ".join(",", $setStr)." WHERE `id` = $id");

    // echo $sql;die;

    $ret = $dsql->dsqlOper($sql, "update");



    if($ret == "ok"){

      echo '{"state": 100, "info": '.json_encode("保存成功！").'}';

    }else{

      echo '{"state": 200, "info": "数据更新失败，请检查填写的信息是否合法！"}';

    }

    require_once HUONIAOROOT."/api/payment/log.php";
    //初始化日志
    $logHandler= new CLogFileHandler(HUONIAOROOT.'/api/memberEditWaimaiShop.log');
    $log = Log::Init($logHandler, 15);
    $sql = str_replace("\n", "", $sql);
    $sql = str_replace("\r", "", $sql);
    $sql = str_replace("            ", " ", $sql);
    $data = "会员（id:".$userLogin->getMemberID()."）修改外卖店铺 ".($ret == "ok" ? "ok" : "err")." ：".$id." - ".$sql;
    Log::DEBUG("query:" . $data . "\r\n");


    die;



}





if(empty($sid)){

  header("location:/wmsj/?to=shop");

  die;

}else{

  $sql = $dsql->SetQuery("SELECT * FROM `#@__waimai_shop` WHERE `id` = $sid AND `id` in ($managerIds)");

  $ret = $dsql->dsqlOper($sql, "results");

  if($ret){

    $data = $ret[0];

    foreach ($data as $key => $value) {



      //不同距离不同的外送费和起送价

      if($key == "range_delivery_fee_value"){

          $value = unserialize($value);

      }



      //预设选项

      if($key == "preset"){

          $value = unserialize($value);

      }



      //满减

      if($key == "promotions"){

          $value = unserialize($value);

      }



      //满送

      if($key == "fullcoupon"){

          $value = unserialize($value);

      }



      //增值服务

      if($key == "addservice"){

          $value = unserialize($value);

      }



      //自定义显示内容

      if($key == "selfdefine"){

          $value = unserialize($value);

      }



      //店铺图片

      if($key == "shop_banner"){

        $picsList = array();

        if(!empty($value)){

          $picsArr = explode(",", $value);

          foreach ($picsArr as $k => $v) {

            $item = array("path" => getFilePath($v), "pathSource" => $v);

            array_push($picsList, $item);

          }

        }

        $huoniaoTag->assign('picsList', $picsList);

        $value = !empty($value) ? json_encode(explode(",", $value)) : "[]";

      }



      // 资质照片

      if(($key == "food_license_img" || $key == "business_license_img") && !empty($value)){

        $huoniaoTag->assign($key."_pathSource", $value);

        $value = getFilePath($value);

      }



      //打印机

      if($key == "print_config"){

          $value = unserialize($value);

      }



      //服务区域

      if($key == "service_area_data"){

          $value = !empty($value) ? unserialize($value) : array();

      }                //店铺分类

      if($key == "typeid"){

          $huoniaoTag->assign('typeidlist', $value);

          $value = explode(",", $value);

      }



      if($key == "weeks"){

        $weeklist = array();

        if(!empty($value)){

          $week1 = explode(",", $value);

          foreach ($week1 as $k => $v) {

            switch ($v) {

              case '1':

                $day = '星期一';

                break;

              case '2':

                $day = '星期二';

                break;

              case '3':

                $day = '星期三';

                break;

              case '4':

                $day = '星期四';

                break;

              case '5':

                $day = '星期五';

                break;

              case '6':

                $day = '星期六';

                break;

              case '7':

                $day = '星期天';

                break;

            }

            array_push($weeklist, $day);

          }

          $huoniaoTag->assign('weeklist', $weeklist ? join(",", $weeklist) : '请选择');

        }

      }



      $huoniaoTag->assign($key, $value);

    }

  }else{

    header("location:/wmsj/?to=shop");

    die;

  }

}



$huoniaoTag->assign('sid', $sid);



$typeArr = array();

$sql = $dsql->SetQuery("SELECT * FROM `#@__waimai_shop_type` ORDER BY `sort` DESC, `id` DESC");

$ret = $dsql->dsqlOper($sql, "results");

if($ret){

    foreach ($ret as $key => $value) {

        $typeArr[$key]['id'] = $value['id'];

        $typeArr[$key]['title'] = $value['title'];

    }

}

$huoniaoTag->assign('typeArr', $typeArr);



//验证模板文件

if(file_exists($tpl."/".$templates)){



    $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);

    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/touch/");  //模块路径

    $huoniaoTag->display($templates);



}else{

    echo $templates."模板文件未找到！";

}
