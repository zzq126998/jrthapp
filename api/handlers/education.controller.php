<?php

/**
 * huoniaoTag模板标签函数插件-旅游模块
 *
 * @param $params array 参数集
 * @return array
 */
function education($params, $content = "", &$smarty = array(), &$repeat = array()){
	$service = "education";
	extract ($params);
	if(empty($action)) return '';

	global $template;
	global $huoniaoTag;
	global $dsql;
	global $userLogin;
	global $cfg_basehost;
	global $cfg_secureAccess;
	global $langData;

	$userid = $userLogin->getMemberID();

	if($action == "storeDetail" || $action == "store-detail"){
		$detailHandels = new handlers($service, "storeDetail");
		$detailConfig  = $detailHandels->getHandle(array("id" => $id));
		$state = 0;
		if(is_array($detailConfig) && $detailConfig['state'] == 100){
			$detailConfig  = $detailConfig['info'];
			if(is_array($detailConfig)){//print_R($detailConfig);exit;

				global $template;
				if($template != 'config'){
					detailCheckCity("travel", $detailConfig['id'], $detailConfig['cityid'], "store-detail");
				}

				if($action == "store-detail"){
					//更新浏览次数
					$sql = $dsql->SetQuery("UPDATE `#@__travel_store` SET `click` = `click` + 1 WHERE `id` = ".$id);
					$dsql->dsqlOper($sql, "results");
				}

				//输出详细信息
				foreach ($detailConfig as $key => $value) {
					$huoniaoTag->assign('detail_'.$key, $value);
				}
				$state = 1;

			}

			$huoniaoTag->assign('storeState', $state);
			$huoniaoTag->assign('storeId', $id);
		}else{
			if($action == "store-detail"){
				header("location:".$cfg_secureAccess.$cfg_basehost."/404.html?v=1");
			}
		}
	}elseif($action == "fabu"){//会员中心发布

		if($type == "teacher"){//教育教师
			$act = "teacherDetail";
		}elseif($type == "tutor"){//教育家教
			$act = "tutorDetail";
		}elseif($type == "courses"){//教育课程
			$act = "detail";
		}
		if($id){
			$detailHandels = new handlers($service, $act);
			if($type == "tutor"){
				$detailConfig  = $detailHandels->getHandle();
			}else{
				$detailConfig  = $detailHandels->getHandle($id);
			}
			$state = 0;
			if(is_array($detailConfig) && $detailConfig['state'] == 100){
				$state = 1;
				$detailConfig  = $detailConfig['info'];//print_R($detailConfig);exit;
				if(is_array($detailConfig)){
					foreach ($detailConfig as $key => $value) {
						$huoniaoTag->assign('detail_'.$key, $value);
					}
				}
				$huoniaoTag->assign('educationState', $state);
			}else{
				if($type != "tutor"){
					header('location:'.$cfg_secureAccess.$cfg_basehost.'/404.html');
					die;
				}
			}
		}

	}elseif($action == "teacher-detail" || $action == "class-detail" || $action == "detail" || $action == "word-detail" || $action == "tutor-detail"){

		if($action == "detail"){
			$act = $action;
			$tab = 'education_courses';
		}else{
			$actionArr = explode('-', $action);
			$act = $actionArr[0] . 'Detail';
			$tab = 'education_' . $actionArr[0];
		}
		

		$detailHandels = new handlers($service, $act);
		$detailConfig  = $detailHandels->getHandle(array("id" => $id));
		$state = 0;
		if(is_array($detailConfig) && $detailConfig['state'] == 100){
			$detailConfig  = $detailConfig['info'];
			if(is_array($detailConfig)){//print_R($detailConfig);exit;
				//更新浏览次数
				$sql = $dsql->SetQuery("UPDATE `#@__".$tab."` SET `click` = `click` + 1 WHERE `id` = ".$id);
				$dsql->dsqlOper($sql, "results");

				//输出详细信息
				foreach ($detailConfig as $key => $value) {
					$huoniaoTag->assign('detail_'.$key, $value);
				}
			}
		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost."/404.html?v=1");
		}
	}elseif($action == 'list'){
		$huoniaoTag->assign('store', $store);
		$huoniaoTag->assign('usertype', $usertype);
		$huoniaoTag->assign('keywords', $keywords);
		$prices = $_GET['prices'];
		$huoniaoTag->assign('prices', $prices);

		require(HUONIAOINC."/config/education.inc.php");
		$list_typename = $customSeoTitle;
		if(!empty($id)){
			$sql = $dsql->SetQuery("SELECT `typename` FROM `#@__education_type` WHERE `id` = ".$id);
			$results = $dsql->dsqlOper($sql, "results");
			if($results){
				$list_typename = $results[0]['typename'];
			}
		}
		$huoniaoTag->assign('list_id', $id);
		$huoniaoTag->assign('list_typename', $list_typename);
		
	}elseif($action == 'class'){
		$huoniaoTag->assign('id', $id);
	}elseif($action == 'search'){
		$huoniaoTag->assign('keywords', $keywords);
	}elseif($action == "comfirm"){//确认订单
		$detailHandels = new handlers($service, 'classDetail');
		$detailConfig  = $detailHandels->getHandle(array("id" => $id));
		$state = 0;
		if(is_array($detailConfig) && $detailConfig['state'] == 100){
			$detailConfig  = $detailConfig['info'];
			if(is_array($detailConfig)){//print_R($detailConfig);exit;

				//输出详细信息
				foreach ($detailConfig as $key => $value) {
					$huoniaoTag->assign('detail_'.$key, $value);
				}
			}
		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost."/404.html?v=1");
		}
	}elseif($action == "pay"){
		global $userLogin;
		$userid = $userLogin->getMemberID();

		if($userid == -1){
			header('location:'.$cfg_secureAccess.$cfg_basehost.'/login.html?furl='.$furl);
			die;
		}

		$RenrenCrypt = new RenrenCrypt();
		$ordernums = $RenrenCrypt->php_decrypt(base64_decode($ordernum));

		if(!empty($ordernums)){
			$huoniaoTag->assign('ordernum', $ordernums);

			$ordernumArr = explode(",", $ordernums);
			$orderArr    = array();
			$totalAmount = 0;

			foreach ($ordernumArr as $key => $value) {

				//获取订单内容
				$archives = $dsql->SetQuery("SELECT `proid`, `procount`, `orderprice`, `orderstate` FROM `#@__education_order` WHERE `ordernum` = '$value' AND `userid` = $userid");
				$orderDetail  = $dsql->dsqlOper($archives, "results");
				if($orderDetail){

					$proid      = $orderDetail[0]['proid'];
					$procount   = $orderDetail[0]['procount'];
					$orderprice = $orderDetail[0]['orderprice'];
					$orderstate = $orderDetail[0]['orderstate'];
					//总价
					$totalAmount += $orderprice * $procount;

					//验证订单状态，如果不是待付款状态则跳转至订单列表
					if($orderstate != 0){
						$param = array(
							"service"     => "member",
							"type"        => "user",
							"template"    => "order",
							"module"      => "education"
						);
						$url = getUrlPath($param);
						header("location:".$url);
						die;
					}

					$newid   = $proid;
					$act     = 'classDetail';

					$detailHandels = new handlers($service, $act);
					$detailConfig  = $detailHandels->getHandle($newid);
					if(is_array($detailConfig) && $detailConfig['state'] == 100){
						$detailConfig  = $detailConfig['info'];//print_R($detailConfig);exit;
						if(is_array($detailConfig)){
							foreach ($detailConfig as $key => $value) {
								$huoniaoTag->assign('detail_'.$key, $value);
							}
						}
					}else{
						header('location:'.$cfg_secureAccess.$cfg_basehost.'/404.html');
						die;
					}

				//订单不存在
				}else{
					header("location:".$cfg_secureAccess.$cfg_basehost);
					die;
				}

			}

			$huoniaoTag->assign('orderArr', $orderArr);
			$huoniaoTag->assign('totalAmount', sprintf("%.2f", $totalAmount));

		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost);
			die;
		}

	//支付结果页面
	}elseif($action == "payreturn"){
		global $userLogin;
		$userid = $userLogin->getMemberID();

		if($userid == -1){
			header('location:'.$cfg_secureAccess.$cfg_basehost.'/login.html?furl='.$furl);
			die;
		}
		
		
		if(!empty($ordernum)){

			//根据支付订单号查询支付结果
			$archives = $dsql->SetQuery("SELECT `body`, `amount`, `state` FROM `#@__pay_log` WHERE `ordertype` = 'education' AND `ordernum` = '$ordernum' AND `uid` = $userid");
			$payDetail  = $dsql->dsqlOper($archives, "results");
			if($payDetail){

				$proArr = array();
				$isaddr = 0;
				$address = "";
				$i = 0;
				$ids = explode(",", $payDetail[0]['body']);

				foreach ($ids as $key => $value) {

					//查询订单详细信息
					$archives = $dsql->SetQuery("SELECT `id`, `proid`, `procount`, `orderstate`, `people`,`contact`, `orderprice` FROM `#@__education_order` WHERE `ordernum` = '$value' AND `userid` = $userid");
					$orderDetail  = $dsql->dsqlOper($archives, "results");
					if($orderDetail){
						$orderDetail = $orderDetail[0];

						$orderid    = $orderDetail['id'];
						$orderstate = $orderDetail['orderstate'];
						$proid      = $orderDetail['proid'];
						$people     = $orderDetail['people'];
						$contact    = $orderDetail['contact'];
						$id         = $orderDetail['id'];

						

						$detailHandels = new handlers($service, "orderDetail");
						$detailConfig  = $detailHandels->getHandle($id);

						if(is_array($detailConfig) && $detailConfig['state'] == 100){
							$detailConfig  = $detailConfig['info'];//print_R($detailConfig);exit;
							if(is_array($detailConfig)){
								foreach ($detailConfig as $key => $value) {
									$huoniaoTag->assign('detail_'.$key, $value);
								}
							}
						}else{
							header("location:".$cfg_secureAccess.$cfg_basehost."/404.html");
						}
						
					}
				}


				$huoniaoTag->assign('state', $payDetail[0]['state']);
				$huoniaoTag->assign('orderid', $orderid);
				$huoniaoTag->assign('people', $people);
				$huoniaoTag->assign('contact', $contact);
				$huoniaoTag->assign('orderstate', $orderstate);
				$huoniaoTag->assign('totalAmount', sprintf("%.2f", $payDetail[0]['amount']));

			//支付订单不存在
			}else{
				header("location:".$cfg_secureAccess.$cfg_basehost);
				die;
			}

		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost);
			die;
		}
	}




	if(empty($smarty)) return;

	if(!isset($return))
		$return = 'row'; //返回的变量数组名

	//注册一个block的索引，照顾smarty的版本
    if(method_exists($smarty, 'get_template_vars')){
        $_bindex = $smarty->get_template_vars('_bindex');
    }else{
        $_bindex = $smarty->getVariable('_bindex')->value;
    }

    if(!$_bindex){
        $_bindex = array();
    }

    if($return){
        if(!isset($_bindex[$return])){
            $_bindex[$return] = 1;
        }else{
            $_bindex[$return] ++;
        }
    }

    $smarty->assign('_bindex', $_bindex);

	//对象$smarty上注册一个数组以供block使用
	if(!isset($smarty->block_data)){
		$smarty->block_data = array();
	}

	//得一个本区块的专属数据存储空间
	$dataindex = md5(__FUNCTION__.md5(serialize($params)));
	$dataindex = substr($dataindex, 0, 16);

	//使用$smarty->block_data[$dataindex]来存储
	if(!$smarty->block_data[$dataindex]){
		//取得指定动作名
		$moduleHandels = new handlers($service, $action);

		$param = $params;
		$moduleReturn  = $moduleHandels->getHandle($param);

		//只返回数据统计信息
		if($pageData == 1){
			if(!is_array($moduleReturn) || $moduleReturn['state'] != 100){
				$pageInfo_ = array("totalCount" => 0, "gray" => 0, "audit" => 0, "refuse" => 0);
			}else{
				$moduleReturn  = $moduleReturn['info'];  //返回数据
				$pageInfo_ = $moduleReturn['pageInfo'];
			}
			$smarty->block_data[$dataindex] = array($pageInfo_);

		//指定数据
		}elseif(!empty($get)){
			$retArr = $moduleReturn['state'] == 100 ? $moduleReturn['info'][$get] : "";
			$retArr = is_array($retArr) ? $retArr : array();
			$smarty->block_data[$dataindex] = $retArr;

		//正常返回
		}else{

			global $pageInfo;
			if(!is_array($moduleReturn) || $moduleReturn['state'] != 100) {
				$pageInfo = array();
				$smarty->assign('pageInfo', $pageInfo);
				return '';
			}
			$moduleReturn  = $moduleReturn['info'];  //返回数据
			$pageInfo_ = $moduleReturn['pageInfo'];
			if($pageInfo_){
				//如果有分页数据则提取list键
				$moduleReturn  = $moduleReturn['list'];
				$pageInfo = $pageInfo_;
			}else{
				$pageInfo = array();
			}
			$smarty->assign('pageInfo', $pageInfo);
			$smarty->block_data[$dataindex] = $moduleReturn;  //存储数据

		}

	}

	//果没有数据，直接返回null,不必再执行了
	if(!$smarty->block_data[$dataindex]) {
		$repeat = false;
		return '';
	}

	//一条数据出栈，并把它指派给$return，重复执行开关置位1
	if(list($key, $item) = each($smarty->block_data[$dataindex])){
		$smarty->assign($return, $item);
		$repeat = true;
	}

	//如果已经到达最后，重置数组指针，重复执行开关置位0
	if(!$item) {
		reset($smarty->block_data[$dataindex]);
		$repeat = false;
	}

	//打印内容
	print $content;
}
