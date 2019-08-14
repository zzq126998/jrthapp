<?php   if(!defined('HUONIAOINC')) exit('Request Error!');
/**
 * 结束置顶计划任务
 *
 * @version        $Id: system_updateToppingState.php 2018-09-05 上午11:46:20 $
 * @package        HuoNiao.cron
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */

global $installModuleArr;
$topping_time = time();
$topping_tab = array();

if(in_array('info', $installModuleArr)){
  array_push($topping_tab, 'infolist');
}

if(in_array('house', $installModuleArr)){
  array_push($topping_tab, 'house_sale');
  array_push($topping_tab, 'house_zu');
  array_push($topping_tab, 'house_xzl');
  array_push($topping_tab, 'house_sp');
  array_push($topping_tab, 'house_cf');
  array_push($topping_tab, 'house_cw');
}

if(in_array('job', $installModuleArr)){
  array_push($topping_tab, 'job_post');
}

if(in_array('car', $installModuleArr)){
  array_push($topping_tab, 'car_list');
}

if(in_array('education', $installModuleArr)){
  array_push($topping_tab, 'education_courses');
}

if($topping_tab){
  foreach ($topping_tab as $key => $value) {
    $sql = $dsql->SetQuery("UPDATE `#@__".$value."` SET `isbid` = 0 WHERE `bid_end` < $topping_time");
    $dsql->dsqlOper($sql, "update");
  }
}
