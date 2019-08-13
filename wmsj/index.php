<?php
/**
 * 管理后台首页
 *
 * @version        $Id: index.php 2013-7-7 上午10:33:36 $
 * @package        HuoNiao.Administrator
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "" );
require_once(dirname(__FILE__)."/inc/config.inc.php");
$dsql = new dsql($dbo);
$userLogin = new userLogin($dbo);
$tpl = dirname(__FILE__)."/templates";
$tpl = isMobile() ? $tpl."/touch" : $tpl;
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "index.html";

if($_GET['to'] != 'shop' && empty($action)){
    header("location:order/waimaiOrder.php");exit;
}

//域名检测 s
$httpHost  = $_SERVER['HTTP_HOST'];    //当前访问域名
$reqUri    = $_SERVER['REQUEST_URI'];  //当前访问目录

//判断是否为主域名，如果不是则跳转到主域名的后台目录
if($cfg_basehost != $httpHost && $cfg_basehost != str_replace("www.", "", $httpHost)){
    header("location:".$cfg_secureAccess.$cfg_basehost.$reqUri);
    die;
}


//更新店铺状态
if($action == "updateStatus"){

    if(!empty($id)){
        $where = " AND `id` in ($managerIds)";

        $val = (int)$val;

        $sql = $dsql->SetQuery("UPDATE `#@__waimai_shop` SET `status` = $val WHERE `id` = $id".$where);
        $ret = $dsql->dsqlOper($sql, "update");
        if($ret == "ok"){
            echo '{"state": 100, "info": "更新成功！"}';
            exit();
        }else{
            echo '{"state": 200, "info": "更新失败！"}';
            exit();
        }

    }else{
        echo '{"state": 200, "info": "信息ID传输失败！"}';
        exit();
    }
}

// 获取店铺列表
if($action == "shopList"){
    $where = " AND `id` in ($managerIds)";

    $pageSize = empty($pageSize) ? 10 : $pageSize;
    $page     = empty($page) ? 1 : $page;

    $sql = $dsql->SetQuery("SELECT `id` FROM `#@__waimai_shop` WHERE 1 = 1".$where);
    $totalCount = $dsql->dsqlOper($sql, "totalCount");
    if($totalCount == 0){

        echo '{"state": 200, "info": "暂无数据"}';

    }else{
        $totalPage = ceil($totalCount/$pageSize);
        $pageinfo = array(
            "page" => $page,
            "pageSize" => $pageSize,
            "totalPage" => $totalPage,
            "totalCount" => $totalCount
        );
        $sql = $dsql->SetQuery("SELECT `id`, `shopname`, `phone`, `address`, `shop_banner`, `status` FROM `#@__waimai_shop` WHERE 1 = 1".$where);
        // echo $sql;die;
        $ret = $dsql->dsqlOper($sql, "results");
        $list = array();
        foreach ($ret as $key => $value) {
            $list[$key]['id']       = $value['id'];
            $list[$key]['shopname'] = $value['shopname'];
            $list[$key]['phone']    = $value['phone'];
            $list[$key]['address']  = $value['address'];
            $list[$key]['pic']      = $value['shop_banner'] ? getFilePath(explode(",", $value['shop_banner'])[0]) : "";  //图片
            $list[$key]['status']   = $value['status'];
        }

        $info = array("list" => $list, "pageInfo" => $pageinfo);

        echo '{"state": 100, "info": '.json_encode($info).'}';
    }
    exit();
}

// 检查最新未处理订单
if($action == "checkLastOrder"){
    $sql = $dsql->SetQuery("SELECT `id` FROM `#@__waimai_order` WHERE `sid` in ($managerIds) AND `state` = 2 AND `pushed` = 0 ORDER BY `id` ASC");
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){
      $aid = $ret[0]['id'];
      $count_ = count($ret);
      $url = $cfg_secureAccess.$cfg_basehost.'/wmsj/order/waimaiOrderDetail.php?id='.$aid;

      $printData = array();



      //打印订单内容
      $sql = $dsql->SetQuery("SELECT
          s.`shopname`, s.`smsvalid`, s.`sms_phone`, s.`auto_printer`, s.`showordernum`, s.`bind_print`, s.`print_config`, s.`print_state`, o.`state`, o.`ordernum`, o.`ordernumstore`, o.`food`, o.`person`, o.`tel`, o.`address`, o.`paytype`, o.`amount`, o.`priceinfo`, o.`preset`, o.`note`, o.`pubdate`, o.`uid`
          FROM `#@__waimai_shop` s LEFT JOIN `#@__waimai_order` o ON o.`sid` = s.`id` WHERE o.`id` = $aid");
      $ret = $dsql->dsqlOper($sql, "results");
      if($ret){
          $data         = $ret[0];
          $shopname     = $data['shopname'];
          $smsvalid     = $data['smsvalid'];
          $sms_phone    = $data['sms_phone'];
          $auto_printer = $data['auto_printer'];
          $showordernum = $data['showordernum'];
          $bind_print   = $data['bind_print'];
          $print_config = $data['print_config'];
          $print_state  = $data['print_state'];

          $state     = $data['state'];
          $ordernum  = $data['ordernum'];
          $ordernumstore  = $data['ordernumstore'];
          $food      = unserialize($data['food']);
          $person    = $data['person'];
          $tel       = $data['tel'];
          $address   = $data['address'];
          $paytype   = $data['paytype'];
          $amount    = $data['amount'];
          $priceinfo = unserialize($data['priceinfo']);
          $preset    = unserialize($data['preset']);
          $note      = $data['note'];
          $pubdate   = $data['pubdate'];
          $uid       = $data['uid'];
          $count     = explode("-", $ordernumstore);
          $count     = $showordernum ? $count[1] : 0;

          $amountInfo = $paytype == "delivery" ? "货到付款：".$amount : "已付款：".$amount;

          //计算
          if(($auto_printer || $pp)){
              $print_config = unserialize($print_config);

              $num = "";
              if($count){
                  $num = " #".$count;
              }

              //预设内容
              $presets = "";
              $presetArr = array();
              if($preset){
                  foreach ($preset as $key => $value) {
                      if(!empty($value['value'])){
                          array_push($presetArr, $value['title'] . "：" . $value['value'] . "<br>");
                      }
                  }
              }
              if($presetArr){
                  $presets = join("", $presetArr) . "********************************";
              }

              //菜单内容
              $foods = array();
              if($food){
                  foreach ($food as $key => $value) {
                      $title = $value['title'];
                      if($value['ntitle']){
                          $title .= "（".$value['ntitle']."）";
                      }
                      // array_push($foods, $title."<br>                 ×<FB>".$value['count']."</FB>     ".(sprintf('%.2f', $value['price'] * $value['count'])) . "<br>................................");
                      array_push($foods, "<tr><td>".$title."</td><td>*".$value['count']."</td><td>".(sprintf('%.2f', $value['price'] * $value['count']))."</td></tr>");
                  }
              }
              $foods = join("", $foods);

              //费用详细
              $prices = "";
              $priceArr = array();
              if($priceinfo){
                  array_push($priceArr, "<table><tr><td></td><td></td><td></td></tr>");
                  foreach ($priceinfo as $key => $value) {
                      $oper = "";
                      if($value['type'] == "youhui" || $value['type'] == "manjian" || $value['type'] == "shoudan"){
                          $oper = "—";
                      }
                      array_push($priceArr, "<tr><td>".$value['body']."</td><td></td><td>".$oper.$value['amount']."</td></tr>");
                  }
                  array_push($priceArr, "</table>");
              }
              if($priceArr){
                  $prices = join("", $priceArr) . "\r\n********************************";
              }


              $noteText = !empty($note) ? "<FH><FW><FB>$note</FB></FW></FH>" . "\r\n********************************" : "";


              $content = "<FB><FH2><center>".$shopname.$num."</center></FH2></FB>
********************************
单号：$ordernumstore
时间：".date("Y-m-d H:i:s", $pubdate)."
地址：$address
姓名：$person
电话：$tel
********************************".($presets ? "\r" . $presets : "")."
商品名           数量    小计
********************************
<table>$foods</table>
--------------------------------
$prices
$noteText
<FH2><FW>".$amountInfo.echoCurrency(array("type" => "short"))."</FW></FH2>

<center>".$cfg_shortname."祝您购物愉快".$num.($num ? "完" : "")."</center>";


           //提取表格
           preg_match_all('/<table>(.*)<\/table>/isU', $content, $splitTable);

           $splitArr = array();

           //将字符串分组取指定位置的内容
           function splitFunc($str, $exp, $c){
            if(empty($exp)){
              return $str;
            }
             $split = explode($exp, $str);
             return $split[$c];
           }

           $table1 = $splitTable[0][0];  //取第一个表格
           $table2 = $splitTable[0][1];  //取第二个表格

           //第一段
           array_push($splitArr, trim(splitFunc($content, $table1, 0)));

           //第一个表格
           array_push($splitArr, $table1);

           //第二段
           $str2 = splitFunc(splitFunc($content, $table1, 1), $table2, 0);
           array_push($splitArr, trim($str2));

           //第二个表格
           array_push($splitArr, $table2);

           //第三段
           $str3 = splitFunc($content, $table2, 1);
           array_push($splitArr, trim($str3));

           //转码
           function changeBin2hex($str){

             $repArr = array(
               array('3C46423E', '1B450F'),  //加粗
               array('3C2F46423E', '1B4500'),  //取消加粗
               array('3C4648323E', '1D2101'),  //加高
               array('3C2F4648323E', '1D2100'),  //取消大小
               array('3C46573E', '1B450F'),  //加宽
               array('3C2F46573E', '1B4500'),  //取消加宽
               array('3C63656E7465723E', '1B6101'),  //居中对齐
               array('3C2F63656E7465723E', '0A1B6100'),  //左对齐
               array('3C62723E', '1B45001D21000A'),  //换行
             );

             $str = preg_replace('/\n|\r\n/', '<br>', $str);

             $str = iconv("utf-8", "gb18030", $str);
             $nstr = strtoupper(bin2hex($str));

             foreach ($repArr as $key => $value) {
               $f = $value[0];
               $r = $value[1];
               $nstr = preg_replace("/$f/", $r, $nstr);
             }
             return $nstr;
           }


           //分组
           foreach ($splitArr as $key => $value) {

             if(!strstr($value, '<table>')){
               array_push($printData, array(
                 'type' => 'bin',
                 'value' => changeBin2hex($value)
               ));
             }else{
               array_push($printData, array(
                 'type' => 'table',
                 'value' => $value
               ));
             }

           }

        }
      }


      echo '{"state": 100, "count": '.$count_.', "aid": '.$aid.', "url": "'.$url.'", "printData": '.json_encode($printData).'}';
    }else{
      echo '{"state": 200, "count": 0}';
    }
    // $count = $dsql->dsqlOper($sql, "totalCount");
    exit();
}


// 更新已查看订单状态
// if($action == "updateLastOrder"){
//     $sql = $dsql->SetQuery("UPDATE `#@__waimai_order` SET `pushed` = 1 WHERE `sid` in ($managerIds) AND `state` = 2 AND `id` = $id");
//     $ret = $dsql->dsqlOper($sql, "update");
//     if($ret == "ok"){
//       echo '{"state": 100}';
//     }else{
//       echo '{"state": 200}';
//     }
//     exit();
// }


// echo $tpl."/".$templates;
//验证模板文件
if(file_exists($tpl."/".$templates)){
    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/".(isMobile() ? "touch/" : ""));  //模块路径
    $huoniaoTag->display($templates);
}else{
    echo $templates."模板文件未找到！";
}
