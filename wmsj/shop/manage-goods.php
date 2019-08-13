<?php
/**
 * 管理商品
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
$dbname = "waimai_list";
$templates = "manage-goods.html";

if(!empty($action) && !empty($id)){
  if(!checkWaimaiShopManager($id)){
    echo '{"state": 200, "info": "操作失败，请刷新页面！"}';
    exit();
  }
}

$unfind = 0;
if(empty($sid)){
  $unfind = 1;
}else{
  $sql = $dsql->SetQuery("SELECT `shopname` FROM `#@__waimai_shop` WHERE `id` = $sid AND `id` in ($managerIds)");
  $ret = $dsql->dsqlOper($sql, "results");
  if($ret){
    $huoniaoTag->assign('shopname', $ret[0]['shopname']);
  }else{
    $unfind = 1;
  }
}


//获取信息内容
if(!$unfind && $id){
  $where = " AND `sid` in ($managerIds)";
  $sql = $dsql->SetQuery("SELECT * FROM `#@__$dbname` WHERE `id` = $id".$where);
  $ret = $dsql->dsqlOper($sql, "results");
  if($ret){

      foreach ($ret[0] as $key => $value) {
        if($key == "week"){
          if($value != ""){
            $wk = explode(",", $value);
            $wklist = array();
            foreach ($wk as $k => $v) {
              $d = "";
              switch ($v) {
                case 1:
                  $d = '星期一';
                  break;
                case 2:
                  $d = '星期二';
                  break;
                case 3:
                  $d = '星期三';
                  break;
                case 4:
                  $d = '星期四';
                  break;
                case 5:
                  $d = '星期五';
                  break;
                case 6:
                  $d = '星期六';
                  break;
                case 7:
                  $d = '星期日';
                  break;
              }
              array_push($wklist, $d);
            }
            $huoniaoTag->assign('weeklist', join(",", $wklist));
          }else{
            $huoniaoTag->assign('weeklist', '请选择');
          }
        }
        $huoniaoTag->assign($key, $value);
      }

  }else{
    $unfind = 1;
  }
}


$huoniaoTag->assign('unfind', $unfind);
$huoniaoTag->assign('sid', empty($sid) ? 0 : $sid);
$huoniaoTag->assign('id', empty($id) ? 0 : $id);


$typelist = array();
$sql = $dsql->SetQuery("SELECT * FROM `#@__waimai_list_type` WHERE `del` = 0 AND `sid` = $sid AND `sid` IN ($managerIds) ORDER BY `sort` DESC, `id` DESC");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
    $typelist = $ret;
}
$huoniaoTag->assign('typelist', $typelist);


if($action == "getList"){
  $where = " AND t.`del` = 0 AND s.`del` = 0 AND s.`sid` = $sid AND s.`sid` IN ($managerIds)";

  //商品名称
  if(!empty($title)){
    $where .= " AND s.`title` like ('%$title%')";
  }

  //编号
  if(!empty($sort)){
    $where .= " AND s.`sort` = '$sort'";
  }

  //单位
  if(!empty($unit)){
    $where .= " AND s.`unit` like ('%$unit%')";
  }

  //价格
  if(!empty($price)){
    $where .= " AND s.`price` = $price";
  }

  //分类id
  if(!empty($typeid)){
    $where .= " AND s.`typeid` = $typeid";
  }

  //分类
  if(!empty($typename)){
    $where .= " AND t.`title` like ('%$typename%')";
  }

  //标签
  if(!empty($label)){
    $where .= " AND s.`label` like ('%$label%')";
  }

  //库存
  if(!empty($stock)){
    $where .= " AND s.`stock` = $stock";
  }

  $pageSize = 15;

  $sql = $dsql->SetQuery("SELECT s.`id`, s.`sort`, s.`title`, s.`price`, s.`typeid`, s.`unit`, s.`label`, s.`status`, s.`stockvalid`, s.`stock`, s.`is_day_limitfood`, s.`is_nature`, t.`title` typename FROM `#@__$dbname` s LEFT JOIN `#@__waimai_list_type` t ON t.`id` = s.`typeid` WHERE 1 = 1".$where." ORDER BY s.`sort` DESC, `id` DESC");
  // echo $sql;die;

  //总条数
  $totalCount = $dsql->dsqlOper($sql, "totalCount");

  if($totalCount == 0){
    echo '{"state": 200, "info": "暂无数据"}';
    die;
  }
  //总分页数
  $totalPage = ceil($totalCount/$pageSize);

  $pageinfo = array(
    "page" => $page,
    "pageSize" => $pageSize,
    "totalPage" => $totalPage,
    "totalCount" => $totalCount
  );

  $page = (int)$page == 0 ? 1 : (int)$page;
  $atpage = $pageSize * ($page - 1);
  $results = $dsql->dsqlOper($sql." LIMIT $atpage, $pageSize", "results");

  $list = array();
  foreach ($results as $key => $value) {
    $list[$key]['id']               = $value['id'];
    $list[$key]['sort']             = $value['sort'];
    $list[$key]['title']            = $value['title'];
    $list[$key]['price']            = $value['price'];
    $list[$key]['typeid']           = $value['typeid'];
    $list[$key]['typename']         = $value['typename'];
    $list[$key]['unit']             = $value['unit'];
    $list[$key]['label']            = $value['label'];
    $list[$key]['status']           = $value['status'];
    $list[$key]['stockvalid']       = $value['stockvalid'];
    $list[$key]['stock']            = $value['stock'];
    $list[$key]['is_day_limitfood'] = $value['is_day_limitfood'];
    $list[$key]['is_nature']        = $value['is_nature'];
  }

  $info = array("list" => $list, "pageInfo" => $pageinfo);
  echo '{"state": 100, "info": '.json_encode($info).'}';
  exit();

}

//验证模板文件
if(file_exists($tpl."/".$templates)){

    $huoniaoTag->assign('HUONIAOADMIN', HUONIAOADMIN);
    $huoniaoTag->assign('templets_skin', $cfg_secureAccess.$cfg_basehost."/wmsj/templates/touch/");  //模块路径
    $huoniaoTag->display($templates);

}else{
    echo $templates."模板文件未找到！";
}
