<?php

/**
 * 订单管理
 *
 * @version        $Id: order.php 2017-5-25 上午10:16:21 $
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
$templates = "waimaiOrder.html";

if(!empty($action) && !empty($id)){
  if(!checkWaimaiShopManager($id, "order")){
    echo '{"state": 200, "info": "操作失败，请刷新页面！"}';
    exit();
  }
}

//确认订单
if($action == "confirm"){
    if(!empty($id)){
        $ids = explode(",", $id);
        foreach ($ids as $key => $value) {
            $date = GetMkTime(time());
            $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET `state` = 3, `confirmdate` = '$date' WHERE `state` = 2 AND `id` = $value");
            $ret = $dsql->dsqlOper($sql, "update");

            //消息通知 & 打印
            $sql = $dsql->SetQuery("SELECT o.`uid`, o.`food`, o.`ordernumstore`, o.`amount`, o.`pubdate`, s.`shopname` FROM `#@__waimai_order` o LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE o.`id` = $value");
            $ret = $dsql->dsqlOper($sql, "results");
            if($ret){
              $data          = $ret[0];
              $uid           = $data['uid'];
              $ordernumstore = $data['shopname'].$data['ordernumstore'];
              $pubdate       = $data['pubdate'];
              $shopname      = $data['shopname'];
              $amount        = $data['amount'];
              $food          = unserialize($data['food']);

              $foods = array();
              foreach ($food as $k => $v) {
                array_push($foods, $v['title'] . " " . $v['count'] . "份");
              }

              $param = array(
                  "service"  => "member",
                  "type"     => "user",
                  "template" => "orderdetail",
                  "module"   => "waimai",
                  "id"       => $value
              );

              //自定义配置
              $config = array(
                  "ordernum" => $ordernumstore,
                  "orderdate" => date("Y-m-d H:i:s", $pubdate),
                  "orderinfo" => join(" ", $foods),
                  "orderprice" => $amount,
                  "fields" => array(
                      'keyword1' => '订单编号',
                      'keyword2' => '下单时间',
                      'keyword3' => '订单详情',
                      'keyword4' => '订单金额'
                  )
              );

              updateMemberNotice($uid, "会员-订单确认提醒", $param, $config);
            }

            // printerWaimaiOrder($value);
        }

        echo '{"state": 100, "info": "操作成功！"}';
        die;

    }else{
        echo '{"state": 200, "info": "信息ID传输失败！"}';
		exit();
    }
}


//打印订单
if($action == "print"){
  die('{"state": 200, "info": "操作失败！"}');
    if(!empty($id)){
        $ids = explode(",", $id);
        foreach ($ids as $key => $value) {
            printerWaimaiOrder($value, true);
        }

        echo '{"state": 100, "info": "操作成功！"}';
        die;
    }else{
        echo '{"state": 200, "info": "信息ID传输失败！"}';
		exit();
    }
}

//成功订单，只有开启自配的商家可以操作
if($action == "ok"){
    if(!empty($id)){
        // 检查订单状态 && 有用户收到两次订单确认推送
        $sql = $dsql->SetQuery("SELECT `state` FROM `#@__$dbname` WHERE `id` = $id");
        $ret = $dsql->dsqlOper($sql, "results");
        if($ret){
          if($ret[0]['state'] != 3){
            echo '{"state": 200, "info": "操作失败,请检查订单状态！"}';
            exit();
          }
        }else{
          echo '{"state": 200, "info": "操作失败，订单不存在！"}';
          exit();
        }

        $date = GetMkTime(time());

        $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET `state` = 1, `okdate` = '$date' WHERE (`state` = 3 OR `state` = 4 OR `state` = 5) AND `id` in ($id)");
        $ret = $dsql->dsqlOper($sql, "update");
        if($ret == "ok"){
           //消息通知用户
            $ids = explode(",", $id);
            foreach ($ids as $key => $value) {
              $sql_ = $dsql->SetQuery("SELECT o.`uid`, o.`ordernumstore`, o.`okdate`, o.`amount`, o.`ordernum`, s.`shopname` FROM `#@__waimai_order` o LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE o.`id` = $value");
              $ret_ = $dsql->dsqlOper($sql_, "results");
              if($ret_){
                  $data = $ret_[0];
                  $uid           = $data['uid'];
                  $ordernumstore = $data['shopname'].$data['ordernumstore'];
                  $okdate        = $data['okdate'];
                  $amount        = $data['amount'];
                  $ordernum      = $data['ordernum'];

                  $param = array(
                      "service"  => "member",
                      "type"     => "user",
                      "template" => "orderdetail",
                      "module"   => "waimai",
                      "id"       => $id
                  );

                  //自定义配置
                  $config = array(
                      "ordernum" => $ordernumstore,
                      "date" => date("Y-m-d H:i:s", $okdate),
                      "fields" => array(
                          'keyword1' => '订单号',
                          'keyword2' => '完成时间'
                      )
                  );

                  updateMemberNotice($uid, "会员-订单完成通知", $param, $config);

                  //返积分
                  (new member())->returnPoint("waimai", $uid, $amount, $ordernum);
              }
          }

          echo '{"state": 100, "info": "操作成功！"}';
    		exit();
        }else{
            echo '{"state": 200, "info": "操作失败！"}';
    		exit();
        }
    }else{
        echo '{"state": 200, "info": "信息ID传输失败！"}';
		exit();
    }
}



//无效订单
if($action == "failed"){
    if(!empty($id)){
      if(empty($note)){
        echo '{"state": 200, "info": "请填写失败原因！"}';
        exit();
      }
        $ids = explode(",", $id);
        foreach ($ids as $key => $value) {
            $sql = $dsql->SetQuery("SELECT o.`peisongid`, o.`ordernumstore`, s.`shopname` FROM `#@__waimai_order` o LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE o.`id` = $value AND (o.`state` = 4 OR o.`state` = 5) AND o.`peisongid` != ''");
            $ret = $dsql->dsqlOper($sql, "results");
            if($ret){
                $peisongid = $ret[0]['peisongid'];
                $ordernumstore = $ret[0]['ordernumstore'];
                $shopname      = $ret[0]['shopname'];

                if($peisongid > 0){
                  sendapppush($peisongid, "您有一笔订单已取消，不必配送！", "订单号：".$shopname.$ordernumstore, "", "peisongordercancel");
                  // aliyunPush($peisongid, "您有一笔订单已取消，不必配送！", "订单号：".$shopname.$ordernumstore, "peisongordercancel");
                }



                //消息通知用户
                $uid =  $ret[0]['uid'];
                $param = array(
                    "service"  => "member",
                    "type"     => "user",
                    "template" => "orderdetail",
                    "module"   => "waimai",
                    "id"       => $value
                );

                //自定义配置
                $config = array(
                    "ordernum" => $shopname.$ordernumstore,
                    "date" => date("Y-m-d H:i:s", time()),
                    "info" => $note,
                    "fields" => array(
                        'keyword1' => '订单编号',
                        'keyword2' => '取消时间',
                        'keyword3' => '取消原因'
                    )
                );

                updateMemberNotice($uid, "会员-订单取消通知", $param, $config);
            }
        }

        $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET `state` = 7, `failed` = '$note', `failedadmin` = $userid WHERE `id` in ($id)");
        $ret = $dsql->dsqlOper($sql, "update");
        if($ret == "ok"){
            echo '{"state": 100, "info": "操作成功！"}';
    		exit();
        }else{
            echo '{"state": 200, "info": "操作失败！"}';
    		exit();
        }



    }else{
        echo '{"state": 200, "info": "信息ID传输失败！"}';
		exit();
    }

}





//设置配送员
if($action == "setCourier"){
    if(!empty($id) && $courier){
        $ids = explode(",", $id);
        $now = GetMkTime(time());
        $date = date("Y-m-d H:i:s", $now);

        $err = array();
        foreach ($ids as $key => $value) {
            $sql = $dsql->SetQuery("SELECT o.`sid`, o.`ordernum`, o.`food`, o.`ordernumstore`, o.`peisongid`, o.`peisongidlog`, s.`shopname` FROM `#@__$dbname` o LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE o.`id` = $value");
            $ret = $dsql->dsqlOper($sql, "results");
            if(!$ret) break;

            $sid           = $ret[0]['sid'];
            $shopname      = $ret[0]['shopname'];
            $ordernum      = $ret[0]['ordernum'];
            $ordernumstore = $ret[0]['ordernumstore'];
            $peisongid     = $ret[0]['peisongid'];
            $peisongidlog  = $ret[0]['peisongidlog'];
            $food          = unserialize($data['food']);

            $info = array();
            foreach ($food as $k => $v) {
              array_push($info, $v['title']."×".$v['count']);
            }

            $param = array(
                "service"  => "member",
                "type"     => "user",
                "template" => "orderdetail",
                "module"   => "waimai",
                "id"       => $value['id']
            );



            // 没有变更

            if($courier == $peisongid) continue;



            $sql = $dsql->SetQuery("SELECT `id`, `name`, `phone` FROM `#@__waimai_courier` WHERE `id` = $peisongid || `id` = $courier");
            $ret = $dsql->dsqlOper($sql, "results");
            if($ret){
                foreach ($ret as $k => $v) {
                    if($v['id'] == $peisongid){
                        $peisongname_ = $v['name'];
                        $peisongtel_ = $v['phone'];
                    }else{
                        $peisongname = $v['name'];
                        $peisongtel = $v['phone'];
                    }
                }
            }



            if($peisongid){
                // 骑手变更记录
                $pslog = "此订单在 ".$date." 重新分配了配送员，原配送员是：".$peisongname_."（".$peisongtel_."），新配送员是:".$peisongname."（".$peisongtel."）<hr>" . $peisongidlog;
            }else{
                $pslog = "";
            }

            $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET `state` = 4, `peisongid` = '$courier', `peisongidlog` = '$pslog' WHERE (`state` = 3 OR `state` = 4 OR `state` = 5) AND `id` = $value");

            $ret = $dsql->dsqlOper($sql, "update");
            if($ret == "ok"){
                //推送消息给骑手
                sendapppush($courier, "您有新的配送订单", "订单号：".$shopname.$ordernumstore, $url, "newfenpeiorder");
                // aliyunPush($courier, "您有新的配送订单", "订单号：".$shopname.$ordernumstore, "newfenpeiorder");
                if($peisongid){
                    sendapppush($peisongid, "您有订单被其他骑手派送", "订单号：".$shopname.$ordernumstore, "", "peisongordercancel");
                    // aliyunPush($peisongid, "您有订单被其他骑手派送", "订单号：".$shopname.$ordernumstore, "peisongordercancel");
                }

                //自定义配置
                $config = array(
                    "ordernum" => $shopname.$ordernumstore,
                    "peisong" => $name . "，" . $phone,
                    "orderinfo" => join(" ", $foods),
                    "orderprice" => $amount,
                    "fields" => array(
                        'keyword1' => '订单号',
                        'keyword2' => '订单详情',
                        'keyword3' => '订单金额',
                        'keyword4' => '配送人员'
                    )
                );

                // 推送给用户
                updateMemberNotice($uid, "会员-订单配送提醒", $param, $config);

            }else{
                array_push($err, $value);
            }
        }



        if($err){
            echo '{"state": 200, "info": "操作失败！"}';
            exit();
        }else{
            echo '{"state": 100, "info": "操作成功！"}';
            exit();
        }

    }else{
        echo '{"state": 200, "info": "信息ID传输失败！"}';
		  exit();
    }

}

//取消配送员
if($action == "cancelCourier"){
  die('{"state": 200, "info": "操作失败！"}');
    if(!empty($id)){
        $sql = $dsql->SetQuery("UPDATE `#@__$dbname` SET `state` = 3, `peisongid` = '0' WHERE (`state` = 4 OR `state` = 5) AND `id` in ($id)");
        $ret = $dsql->dsqlOper($sql, "update");
        if($ret == "ok"){
            echo '{"state": 100, "info": "操作成功！"}';
    		exit();
        }else{
            echo '{"state": 200, "info": "操作失败！"}';
    		exit();
        }
    }else{
        echo '{"state": 200, "info": "信息ID传输失败！"}';
		exit();
    }

}


// 退款
if($action == "refund"){
  require_once HUONIAOINC.'/config/waimai.inc.php';

  if($customMemberRefundswitch != 0){
    echo '{"state": 200, "info": "您无权无权限进行此操作！"}';
    exit();
  }

  if(empty($id)){
    echo '{"state": 200, "info": "参数错误"}';
    exit();
  }

  $sql = $dsql->SetQuery("SELECT o.`paytype`, o.`uid`, o.`amount`, o.`ordernumstore`, l.`ordernum`, s.`shopname` FROM `#@__waimai_order` o LEFT JOIN `#@__pay_log` l ON l.`body` = o.`ordernum` LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE o.`state` = 7 AND o.`paytype` != 'delivery' AND o.`refrundstate` = 0 AND o.`amount` > 0 AND o.`id` = $id AND o.`sid` in ($managerIds)");
  $ret = $dsql->dsqlOper($sql, "results");

  if($ret){
    $value = $ret[0];
    $date  = GetMkTime(time());
    $uid           = $value['uid'];
    $paytype       = $value['paytype'];
    $amount        = $value['amount'];
    $ordernum      = $value['ordernum'];
    $shopname      = $value['shopname'];
    $ordernumstore = $value['ordernumstore'];

    $sql = $dsql->SetQuery("UPDATE `#@__waimai_order` SET `refrundstate` = 1, `refrunddate` = '$date', `refrundadmin` = $userid, `refrundfailed` = '' WHERE `id` = $id");
    $ret = $dsql->dsqlOper($sql, "update");
    if($ret != "ok"){
      echo '{"state": 200, "info": "操作失败！"}';
      exit();
    }



    $r = true;

    // 余额支付

    if($paytype == "money"){
        $sql = $dsql->SetQuery("UPDATE `#@__member` SET `money` = `money` + $amount WHERE `id` = $uid");
        $dsql->dsqlOper($sql, "update");

    // 支付宝
    }elseif($paytype == "alipay"){
      $order = array(
        "ordernum" => $ordernum,
        "amount" => $amount
      );



      require_once(HUONIAOROOT."/api/payment/alipay/alipayRefund.php");
      $alipayRefund = new alipayRefund();

      $return = $alipayRefund->refund($order);

      // 成功
      if($return['state'] == 100){
         $sql = $dsql->SetQuery("UPDATE `#@__waimai_order` SET `refrunddate` = '".GetMkTime($return['date'])."', `refrundno` = '".$return['trade_no']."' WHERE `id` = $id");
         $ret = $dsql->dsqlOper($sql, "update");
      }else{

        $r = false;
      }

    // 微信
    }elseif($paytype == "wxpay"){
      $order = array(
        "ordernum" => $ordernum,
        "amount" => $amount
      );

      require_once(HUONIAOROOT."/api/payment/wxpay/wxpayRefund.php");
      $wxpayRefund = new wxpayRefund();

      $return = $wxpayRefund->refund($order);

      // 成功
      if($return['state'] == 100){
        $sql = $dsql->SetQuery("UPDATE `#@__waimai_order` SET `refrunddate` = '".GetMkTime($return['date'])."', `refrundno` = '".$return['trade_no']."' WHERE `id` = $id");
        $ret = $dsql->dsqlOper($sql, "update");
      }else{
        $r = false;
      }

    // 银联
    }elseif($paytype == "unionpay"){

      $order = array(
        "ordernum" => $ordernum,
        "amount" => $amount,
        "transaction_id" => $transaction_id
      );

      require_once(HUONIAOROOT."/api/payment/unionpay/unionpayRefund.php");
      $unionpayRefund = new unionpayRefund();

      $return = $unionpayRefund->refund($order);

      // 成功
      if($return['state'] == 100){

        $sql = $dsql->SetQuery("UPDATE `#@__waimai_order` SET `refrunddate` = '".GetMkTime($return['date'])."', `refrundno` = '".$return['trade_no']."' WHERE `id` = $id");
        $ret = $dsql->dsqlOper($sql, "update");

      }else{

        $r = false;

      }
    }else{
      $r = false;
    }

    if($r){
      //保存操作日志
      $archives = $dsql->SetQuery("INSERT INTO `#@__member_money` (`userid`, `type`, `amount`, `info`, `date`) VALUES ('$uid', '1', '$amount', '外卖退款：".$shopname.$ordernumstore."', '$date')");
      $dsql->dsqlOper($archives, "update");
      $sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = $uid");
      $user = $dsql->dsqlOper($sql, "results");
      if($user){
        $param = array(
          "service" => "member",
          "type" => "user",
          "template" => "record"
        );

        //自定义配置
        $config = array(
            "username" => $user['username'],
            "order" => $shopname . $ordernumstore,
            "amount" => $amount,
            "fields" => array(
                'keyword1' => '退款状态',
                'keyword2' => '退款金额',
                'keyword3' => '审核说明'
            )
        );

        updateMemberNotice($userid, "会员-订单退款成功", $param, $config);
      }
      echo '{"state": 100, "info": "退款操作成功！"}';
    }else{
      echo '{"state": 200, "info": "退款失败，错误码：'.$return['code'].'"}';
    }


    exit();

  }else{
    echo '{"state": 200, "info": "操作失败，请检查订单状态！"}';
    exit();

  }

}


$where = " AND s.`id` in ($managerIds)";

$state = empty($state) ? 2 : $state;



//订单编号

if(!empty($ordernum)){
  $where .= " AND o.`ordernum` like '%$ordernum%'";
}



//店铺名称

if(!empty($shopname)){

  $where .= " AND s.`shopname` like '%$shopname%'";

}



//姓名

if(!empty($person)){

  $where .= " AND o.`person` = '%$person%'";

}



//电话

if(!empty($tel)){

  $where .= " AND o.`tel` like '%$tel%'";

}



//地址

if(!empty($address)){

  $where .= " AND o.`address` like '%$address%'";

}



//订单金额

if(!empty($amount)){

  $where .= " AND o.`amount` = '$amount'";

}



//订单状态

if($state !== ""){

    $where .= " AND o.`state` = '$state'";

    /*// 未处理订单需要显示货到付款的订单

    if($state == 2){

        $where .= " AND (o.`state` = '2' || (o.`state` = 0 && o.`paytype` = 'delivery'))";

    }else{

        $where .= " AND o.`state` = '$state'";

    }*/

}



$pageSize = 15;



$sql = $dsql->SetQuery("SELECT o.`id`, o.`uid`, o.`sid`, o.`ordernum`, o.`ordernumstore`, o.`state`, o.`food`, o.`priceinfo`, o.`person`, o.`tel`, o.`address`, o.`paytype`, o.`preset`, o.`note`, o.`pubdate`, o.`okdate`, o.`amount`, o.`peisongid`, o.`peisongidlog`, o.`failed`, o.`failed`, o.`refrundstate`, o.`refrunddate`, o.`refrundno`, o.`refrundfailed`, o.`refrundadmin`, o.`transaction_id`, o.`paylognum`, s.`shopname` FROM `#@__$dbname` o LEFT JOIN `#@__waimai_shop` s ON s.`id` = o.`sid` WHERE 1 = 1".$where." ORDER BY o.`id` DESC");

// echo $sql;die;



//总条数

$totalCount = $dsql->dsqlOper($sql, "totalCount");

//总分页数

$totalPage = ceil($totalCount/$pageSize);





$p = (int)$p == 0 ? 1 : (int)$p;

$atpage = $pageSize * ($p - 1);

$results = $dsql->dsqlOper($sql." LIMIT $atpage, $pageSize", "results");



$list = array();

foreach ($results as $key => $value) {

  $list[$key]['id']         = $value['id'];

  $list[$key]['uid']        = $value['uid'];



  //用户名

  // $userSql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = ". $value["uid"]);

  // $username = $dsql->dsqlOper($userSql, "results");

  // if(count($username) > 0){

  //     $list[$key]["username"] = $username[0]['username'];

  // }else{

  //     $list[$key]["username"] = "未知";

  // }



  $list[$key]['sid']           = $value['sid'];

  $list[$key]['shopname']      = $value['shopname'];

  $list[$key]['ordernum']      = $value['ordernum'];

  $list[$key]['ordernumstore'] = $value['ordernumstore'];

  $list[$key]['state']         = $value['state'];

  $list[$key]['food']          = unserialize($value['food']);

  $list[$key]['person']        = $value['person'];

  $list[$key]["username"]      = $value['person'];

  $list[$key]['tel']           = $value['tel'];

  $list[$key]['address']       = $value['address'];

  // $list[$key]['paytype']       = $value['paytype'] == "wxpay" ? "微信支付" : ($value['paytype'] == "alipay" ? "支付宝" : $value['paytype']);

  $_paytype = '';
  switch ($value['paytype']) {
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
  $list[$key]['paytype']       = $_paytype;

  $list[$key]['preset']        = unserialize($value['preset']);

  $list[$key]['note']          = $value['note'];

  $list[$key]['pubdate']       = $value['pubdate'];

  $list[$key]['pubdatef']      = date("m-d", $value['pubdate']);

  $list[$key]['okdate']        = $value['okdate'];

  $list[$key]['amount']        = $value['amount'];

  $list[$key]['peisongid']     = $value['peisongid'];

  $list[$key]['peisongidlog']  = $value['peisongidlog'] ? substr($value['peisongidlog'], 0, -4) : "";

  $list[$key]['failed']        = $value['failed'];

  $list[$key]['failed']        = $value['failed'];

  $list[$key]['refrundstate']  = $value['refrundstate'];

  $list[$key]['refrunddate']   = $value['refrunddate'];

  $list[$key]['refrundno']     = $value['refrundno'];

  $list[$key]['refrundfailed'] = $value['refrundfailed'];

  $list[$key]['transaction_id']= $value['transaction_id'];

  $list[$key]['paylognum']     = $value['paylognum'];

  $list[$key]['priceinfo']     = unserialize($value['priceinfo']);



  if(empty($value['paylognum'])){

    $sql = $dsql->SetQuery("SELECT `ordernum` FROM `#@__pay_log` WHERE `body` = '".$value['ordernum']."'");

    $ret = $dsql->dsqlOper($sql, "results");

    if($ret){

      $list[$key]['paylognum'] = $ret[0]['ordernum'];

    }

  }



  if($value['refrundadmin'] != 1){

    $sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = ".$value['refrundadmin']);

    $ret = $dsql->dsqlOper($sql, "results");

    if($ret){

      $list[$key]['refrundadmin'] = $ret[0]['username'];

    }

  }else{

    $list[$key]['refrundadmin'] = $cfg_shortname;

  }



  // 判断是否今日

  $list[$key]['today'] = date("Ymd", $value['pubdate']) == date("Ymd") ? 1 : 0;



  $sql = $dsql->SetQuery("SELECT `name`, `phone` FROM `#@__waimai_courier` WHERE `id` = ".$value['peisongid']);

  $ret = $dsql->dsqlOper($sql, "results");

  if($ret){

      $list[$key]['peisongname'] = $ret[0]['name'];

      $list[$key]['peisongtel'] = $ret[0]['phone'];

  }

}



$huoniaoTag->assign("state", $state);

$huoniaoTag->assign("list", $list);



$pagelist = new pagelist(array(

  "list_rows"   => $pageSize,

  "total_pages" => $totalPage,

  "total_rows"  => $totalCount,

  "now_page"    => $p

));

$huoniaoTag->assign("pagelist", $pagelist->show());





//查询待确认的订单

$where = " AND `sid` in ($managerIds)";

$sql = $dsql->SetQuery("SELECT `id` FROM `#@__waimai_order` WHERE `state` = 2".$where);

$ret = $dsql->dsqlOper($sql, "totalCount");

$huoniaoTag->assign("state2", $ret);







//配送员

$courier = array();

$sql = $dsql->SetQuery("SELECT `id`, `name` FROM `#@__waimai_courier` WHERE `state` = 1 ORDER BY `id` DESC");

$ret = $dsql->dsqlOper($sql, "results");

if($ret){

    foreach ($ret as $key => $value) {

        array_push($courier, array(

            "id" => $value['id'],

            "name" => $value['name']

        ));

    }

}

$huoniaoTag->assign("courier", $courier);



// 移动端-获取订单列表

if($action == "getList"){



  if($totalCount == 0){


    if($callback){
      echo $callback.'({"state": 200, "info": '.json_encode('暂无数据').'})';
    }else{
      echo '{"state": 200, "info": '.json_encode('暂无数据').'}';
    }


  }else{



      $pageinfo = array(

          "page" => $page,

          "pageSize" => $pageSize,

          "totalPage" => $totalPage,

          "totalCount" => $totalCount

      );



      $info = array("list" => $list, "pageInfo" => $pageinfo);


      if($callback){
      	echo $callback.'({"state": 100, "info": '.json_encode($info).'})';
      }else{
      	echo '{"state": 100, "info": '.json_encode($info).'}';
      }

    }

    exit();

}



//验证模板文件

if(file_exists($tpl."/".$templates)){

    $jsFile = array(

        'shop/waimaiOrder.js'

    );

    $huoniaoTag->assign('jsFile', $jsFile);



    $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);

    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/".(isMobile() ? "touch/" : ""));  //模块路径

    $huoniaoTag->display($templates);

}else{

    echo $templates."模板文件未找到！";

}
