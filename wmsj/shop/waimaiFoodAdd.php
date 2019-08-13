<?php

/**
 * 店铺管理 商品列表
 *
 * @version        $Id: list_list.php 2017-4-25 上午10:16:21 $
 * @package        HuoNiao.Shop
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */

define('HUONIAOADMIN', "../" );

require_once(dirname(__FILE__)."/../inc/config.inc.php");

$dsql = new dsql($dbo);

$userLogin = new userLogin($dbo);

$tpl = dirname(__FILE__)."/../templates/shop";

$huoniaoTag->template_dir = $tpl; //设置后台模板目录

$templates = "waimaiFoodAdd.html";

$dbname = "waimai_list";



//表单提交

if($_POST){



    //获取表单数据

    $id               = (int)$id;

    $sort             = (int)$sort;

    $typeid           = (int)$typeid;

    $price            = (float)$price;

    $is_dabao         = (int)$is_dabao;

    $dabao_money      = (float)$dabao_money;

    $status           = (int)$status;

    $stockvalid       = (int)$stockvalid;

    $stock            = (int)$stock;

    $formerprice      = (float)$formerprice;

    $is_day_limitfood = (int)$is_day_limitfood;

    $day_foodnum      = (int)$day_foodnum;

    $is_nature        = (int)$is_nature;

    $is_limitfood     = (int)$is_limitfood;

    $foodnum          = (int)$foodnum;

    $start_time       = $start_time ? GetMkTime($start_time) : 0;

    $stop_time        = $stop_time ? GetMkTime($stop_time) : 0;



    if($id && !checkWaimaiShopManager($id, "list")){

        echo '{"state": 200, "info": "操作失败，请刷新页面！"}';

        exit();

    }



    //商品属性

    $natureArr = array();

    if($nature){

        foreach ($nature as $key => $value) {

            $arr = array();

            foreach ($value['value'] as $k => $v) {

                array_push($arr, array(

                    "value" => $v,

                    "price" => $value['price'][$k]

                ));

            }

            array_push($natureArr, array(

                "name" => $value['name'],

                "data" => $arr

            ));

        }

    }

    $nature = serialize($natureArr);





    //限制时间段

    $limit_timeArr = array();

    if($limit_time){

        foreach ($limit_time as $key => $value) {

            array_push($limit_timeArr, array(

                $value['start'], $value['stop']

            ));

        }

    }

    $limit_time = serialize($limit_timeArr);





    //商品名称

    if(trim($title) == ""){

		echo '{"state": 200, "info": "请输入商品名称"}';

		exit();

	}





    //商品价格

    if(trim($price) == ""){

		echo '{"state": 200, "info": "请输入商品价格"}';

		exit();

	}





    if($id){



        //验证商品是否存在

        $sql = $dsql->SetQuery("SELECT `id` FROM `#@__$dbname` WHERE `id` = $id");

        $ret = $dsql->dsqlOper($sql, "totalCount");

        if($ret <= 0){

            echo '{"state": 200, "info": "商品不存在或已经删除！"}';

			exit();

        }



    }





    //修改

    if($id){



        $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET

            `sort` = '$sort',

            `title` = '$title',

            `price` = '$price',

            `typeid` = '$typeid',

            `unit` = '$unit',

            `label` = '$label',

            `is_dabao` = '$is_dabao',

            `dabao_money` = '$dabao_money',

            `status` = '$status',

            `stockvalid` = '$stockvalid',

            `stock` = '$stock',

            `formerprice` = '$formerprice',

            `descript` = '$descript',

            `body` = '$body',

            `is_nature` = '$is_nature',

            `nature` = '$nature',

            `is_day_limitfood` = '$is_day_limitfood',

            `day_foodnum` = '$day_foodnum',

            `is_limitfood` = '$is_limitfood',

            `foodnum` = '$foodnum',

            `start_time` = '$start_time',

            `stop_time` = '$stop_time',

            `limit_time` = '$limit_time',

            `pics` = '$pics'

          WHERE `id` = $id

        ");

        $ret = $dsql->dsqlOper($sql, "update");

        if($ret == "ok"){



			echo '{"state": 100, "info": '.json_encode("保存成功！").'}';

		}else{

			echo '{"state": 200, "info": "数据更新失败，请检查填写的信息是否合法！"}';

		}

        require_once HUONIAOROOT."/api/payment/log.php";
        //初始化日志
        $logHandler= new CLogFileHandler(HUONIAOROOT.'/api/memberEditWaimaiList.log');
        $log = Log::Init($logHandler, 15);
        $sql = str_replace("\n", "", $sql);
        $sql = str_replace("\r", "", $sql);
        $sql = str_replace("            ", " ", $sql);
        $data = "会员（id:".$userLogin->getMemberID()."）修改外卖商品 ".($ret == "ok" ? "ok" : "err")." ：".$id." - ".$sql;
        Log::DEBUG("query:" . $data . "\r\n");

        die;



    //新增

    }else{



        //保存到主表

		$archives = $dsql->SetQuery("INSERT INTO `#@__$dbname` (

            `sid`,

            `sort`,

            `title`,

            `price`,

            `typeid`,

            `unit`,

            `label`,

            `is_dabao`,

            `dabao_money`,

            `status`,

            `stockvalid`,

            `stock`,

            `formerprice`,

            `descript`,

            `body`,

            `is_nature`,

            `nature`,

            `is_day_limitfood`,

            `day_foodnum`,

            `is_limitfood`,

            `foodnum`,

            `start_time`,

            `stop_time`,

            `limit_time`,

            `pics`

        ) VALUES (

            '$sid',

            '$sort',

            '$title',

            '$price',

            '$typeid',

            '$unit',

            '$label',

            '$is_dabao',

            '$dabao_money',

            '$status',

            '$stockvalid',

            '$stock',

            '$formerprice',

            '$descript',

            '$body',

            '$is_nature',

            '$nature',

            '$is_day_limitfood',

            '$day_foodnum',

            '$is_limitfood',

            '$foodnum',

            '$start_time',

            '$stop_time',

            '$limit_time',

            '$pics'

        )");

		$aid = $dsql->dsqlOper($archives, "lastid");



		if($aid){

			echo '{"state": 100, "id": '.$aid.', "info": '.json_encode("添加成功！").'}';

		}else{

			echo '{"state": 200, "info": "数据插入失败，请检查填写的信息是否合法！"}';

		}

		die;



    }



}







if(empty($sid)){

    header("location:waimaiList.php");

    die;

}



$sql = $dsql->SetQuery("SELECT `shopname` FROM `#@__waimai_shop` WHERE `id` = $sid");

$ret = $dsql->dsqlOper($sql, "results");

if(!$ret){

    header("location:list.php");

    die;

}

$shop = $ret[0];



$shopname = $shop['shopname'];







//验证模板文件

if(file_exists($tpl."/".$templates)){



	//css

	$cssFile = array(

		'/static/css/publicUpload.css?v=1'

	);

	$huoniaoTag->assign('cssFile', $cssFile);

  if($cfg_remoteStatic){
    $staticPath_ = $cfg_remoteStatic . '/static/';
  }else{
    $staticPath_ = $cfg_staticPath;
  }

    //js

	$jsFile = array(

		'/include/ueditor/ueditor.config.js?v=11',

		'/include/ueditor/ueditor.all.js?v=11',

		'/static/js/ui/jquery.dragsort-0.5.1.min.js',

		$staticPath_ . 'js/publicUpload.js?v=61',

		'shop/waimaiFoodAdd.js'

	);

	$huoniaoTag->assign('jsFile', $jsFile);





    $huoniaoTag->assign('id', (int)$id);

    $huoniaoTag->assign('sid', (int)$sid);

    $huoniaoTag->assign('shopname', $shopname);



    $typelist = array();

    $sql = $dsql->SetQuery("SELECT * FROM `#@__waimai_list_type` WHERE `sid` = $sid ORDER BY `sort` DESC, `id` DESC");

    $ret = $dsql->dsqlOper($sql, "results");

    if($ret){

        $typelist = $ret;

    }

    $huoniaoTag->assign('typelist', $typelist);





    $huoniaoTag->assign('pics', '[]');



    //获取信息内容

    if($id){

        $sql = $dsql->SetQuery("SELECT * FROM `#@__$dbname` WHERE `id` = $id");

        $ret = $dsql->dsqlOper($sql, "results");

        if($ret){



            foreach ($ret[0] as $key => $value) {



                //商品属性

                if($key == "nature"){

                    $value = unserialize($value);

                }



                //限制时间段

                if($key == "limit_time"){

                    $value = unserialize($value);

                }



                //限制开始、结束日期

                if($key == "start_time" || $key == "stop_time"){

                    $value = $value ? date("Y-m-d", $value) : "";

                }



                //图片

                if($key == "pics"){

                    $value = !empty($value) ? json_encode(explode(",", $value)) : "[]";

                }



                $huoniaoTag->assign($key, $value);

            }



        }else{

            showMsg("没有找到相关信息！", "-1");

            die;

        }

    }







    $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);

	$huoniaoTag->display($templates);

}else{

	echo $templates."模板文件未找到！";

}
