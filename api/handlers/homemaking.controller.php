<?php

/**
 * huoniaoTag模板标签函数插件-家政模块
 *
 * @param $params array 参数集
 * @return array
 */
function homemaking($params, $content = "", &$smarty = array(), &$repeat = array()){
	$service = "homemaking";
	extract ($params);
	if(empty($action)) return '';

	global $template;
	global $dsql;
	global $huoniaoTag;
	global $userLogin;
	global $cfg_basehost;
	global $cfg_secureAccess;
	
	if($action == "storeDetail" || $action == "store-detail"){
		$detailHandels = new handlers($service, "storeDetail");
		$detailConfig  = $detailHandels->getHandle($id);
		$state = 0;
		if(is_array($detailConfig) && $detailConfig['state'] == 100){
			$detailConfig  = $detailConfig['info'];//print_R($detailConfig);exit;
			if(is_array($detailConfig)){

				global $template;
				if($template != 'config'){
					detailCheckCity("homemaking", $detailConfig['id'], $detailConfig['cityid'], "store-detail");
				}

				//更新浏览次数
				$sql = $dsql->SetQuery("UPDATE `#@__homemaking_store` SET `click` = `click` + 1 WHERE `id` = ".$id);
				$dsql->dsqlOper($sql, "results");//print_R($detailConfig);exit;

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
	}elseif($action == "broker-detail"){
		$huoniaoTag->assign('tpl', $tpl);

		$detailHandels = new handlers($service, "adviserList");
		$detailConfig  = $detailHandels->getHandle(array("userid" => $id, "u" => $u));

		if(is_array($detailConfig) && $detailConfig['state'] == 100){
			$detailConfig  = $detailConfig['info'];
			if(is_array($detailConfig)){

				global $template;
				if(stripos($action, 'config-car') !== false ){
					detailCheckCity($service, $detailConfig['list'][0]['id'], $detailConfig['list'][0]['cityid'], $action);
				}

				//输出详细信息
				foreach ($detailConfig['list'][0] as $key => $value) {
					$huoniaoTag->assign('detail_'.$key, $value);
				}

				$sql = $dsql->SetQuery("UPDATE `#@__car_adviser` SET `click` = `click` + 1 WHERE `id` = $id");
				$dsql->dsqlOper($sql, "update");

			}
		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost."/404.html");
		}
		return;
	}elseif ($action == "fabu") {
		$huoniaoTag->assign('dopost', $dopost);
		//发布成功
        if (!empty($id)) {
            $huoniaoTag->assign("id", $id);
        }
	}elseif($action == "detail" || $action == "configure" || $action == "buy" || $action == "buy"){
		$detailHandels = new handlers($service, "detail");
		$detailConfig  = $detailHandels->getHandle($id);//print_R($detailConfig);die;

		

		if (is_array($detailConfig) && $detailConfig['state'] == 100) {
			$detailConfig = $detailConfig['info'];
			if (is_array($detailConfig)) {
				//购买页面
				if($action == "buy"){
					$action = "detail";
					$count = $count <= 0 ? 1 : $count;

					if(!empty($count)){
						$huoniaoTag->assign('count', $count);
						$huoniaoTag->assign('totalAmount', sprintf("%.2f", $count * $detailConfig['price']));
					}

				}

				//输出详细信息
                foreach ($detailConfig as $key => $value) {
                    $huoniaoTag->assign('detail_' . $key, $value);
                }
                //更新阅读次数
                $sql = $dsql->SetQuery("UPDATE `#@__homemaking_list` SET `click` = `click` + 1 WHERE `state` = 1 AND `id` = " . $id);
                $dsql->dsqlOper($sql, "update");

			}
		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost."/404.html");
		}
		return;

	//资讯详情页面
	}elseif($action == "news-detail"){

		$detailHandels = new handlers($service, "newsDetail");
		$detailConfig  = $detailHandels->getHandle($id);

		if(is_array($detailConfig) && $detailConfig['state'] == 100){
			$detailConfig  = $detailConfig['info'];
			if(is_array($detailConfig)){

				detailCheckCity("homemaking", $detailConfig['id'], $detailConfig['cityid'], "news-detail");

                //更新阅读次数
                global $dsql;
                $sql = $dsql->SetQuery("UPDATE `#@__car_news` SET `click` = `click` + 1 WHERE `id` = ".$id);
                $dsql->dsqlOper($sql, "update");

				//输出详细信息
				foreach ($detailConfig as $key => $value) {
					$huoniaoTag->assign('detail_'.$key, $value);
				}

			}
		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost."/404.html");
		}
		return;

	//列表
	}elseif($action == 'list'){
		$huoniaoTag->assign('store', $store);
		$huoniaoTag->assign('usertype', $usertype);
		$huoniaoTag->assign('keywords', $keywords);
		$prices = $_GET['prices'];
		$huoniaoTag->assign('prices', $prices);
		$huoniaoTag->assign('brand', $id);

		require(HUONIAOINC."/config/homemaking.inc.php");
		$list_typename = $customSeoTitle;
		if(!empty($id)){
			$sql = $dsql->SetQuery("SELECT `typename` FROM `#@__homemaking_type` WHERE `id` = ".$id);
			$results = $dsql->dsqlOper($sql, "results");
			if($results){
				$list_typename = $results[0]['typename'];
			}
		}
		$huoniaoTag->assign('list_typename', $list_typename);
		$huoniaoTag->assign('list_id', $id);
		
	}elseif($action == 'wtsell'){
    	$archives = $dsql->SetQuery("SELECT `id` FROM `#@__car_enturst` ");
		$totalCount = $dsql->dsqlOper($archives, "totalCount");
        $huoniaoTag->assign('totalCount', $totalCount);
    }elseif($action == 'nanny'){
		
	}elseif ($action == "nanny-detail") {
		$huoniaoTag->assign('dopost', $dopost);
		//发布成功
        if (!empty($id)) {
            $huoniaoTag->assign("id", $id);
		}
		
		$detailHandels = new handlers($service, "nannyDetail");
		$detailConfig  = $detailHandels->getHandle($id);//print_R($detailConfig);die;
		if (is_array($detailConfig) && $detailConfig['state'] == 100) {
			$detailConfig = $detailConfig['info'];
			if (is_array($detailConfig)) {
				//输出详细信息
                foreach ($detailConfig as $key => $value) {
                    $huoniaoTag->assign('detail_' . $key, $value);
                }
                //更新阅读次数
                $sql = $dsql->SetQuery("UPDATE `#@__homemaking_nanny` SET `click` = `click` + 1 WHERE `state` = 1 AND `id` = " . $id);
                $dsql->dsqlOper($sql, "update");

			}
		}else{
			header("location:".$cfg_secureAccess.$cfg_basehost."/404.html");
		}
		return;
	}elseif ($action == "nannydetail") {
		$huoniaoTag->assign('dopost', $dopost);
		//发布成功
        if (!empty($id)) {
            $huoniaoTag->assign("id", $id);
		}
		
		$detailHandels = new handlers($service, "nannyDetail");
		$detailConfig  = $detailHandels->getHandle($id);//print_R($detailConfig);die;
		if (is_array($detailConfig) && $detailConfig['state'] == 100) {
			$detailConfig = $detailConfig['info'];
			if (is_array($detailConfig)) {
				//输出详细信息
                foreach ($detailConfig as $key => $value) {
                    $huoniaoTag->assign('detail_' . $key, $value);
                }
                //更新阅读次数
                $sql = $dsql->SetQuery("UPDATE `#@__homemaking_nanny` SET `click` = `click` + 1 WHERE `state` = 1 AND `id` = " . $id);
                $dsql->dsqlOper($sql, "update");

			}
		}
		return;
	}elseif($action == "search"){
		$huoniaoTag->assign("keywords", $keywords);

	//支付页面
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

			$detailHandels = new handlers("homemaking", "detail");

			foreach ($ordernumArr as $key => $value) {

				//获取订单内容
				$archives = $dsql->SetQuery("SELECT `proid`, `procount`, `orderprice`, `orderstate` FROM `#@__homemaking_order` WHERE `ordernum` = '$value' AND `userid` = $userid");
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
							"module"      => "homemaking"
						);
						$url = getUrlPath($param);
						header("location:".$url);
						die;
					}

					$proDetail  = $detailHandels->getHandle($proid);
					//获取商品详细信息
					if($proDetail && $proDetail['state'] == 100){
						$orderArr[$key]['title'] = $proDetail['info']['title'];
						$param = array(
							"service"  => "homemaking",
							"template" => "detail",
							"id"       => $proDetail['info']['id']
						);
						$orderArr[$key]['url']   = getUrlPath($param);
						$orderArr[$key]['count'] = $procount;
						$orderArr[$key]['price'] = $orderprice;
						$orderArr[$key]['store'] = $proDetail['info']['store'];
					//商品不存在
					}else{
						header("location:".$cfg_secureAccess.$cfg_basehost);
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
			$archives = $dsql->SetQuery("SELECT `body`, `amount`, `state` FROM `#@__pay_log` WHERE `ordertype` = 'homemaking' AND `ordernum` = '$ordernum' AND `uid` = $userid");
			$payDetail  = $dsql->dsqlOper($archives, "results");
			if($payDetail){

				$proArr = array();
				$isaddr = 0;
				$address = "";
				$i = 0;
				$ids = explode(",", $payDetail[0]['body']);

				foreach ($ids as $key => $value) {

					//查询订单详细信息
					$archives = $dsql->SetQuery("SELECT `id`, `proid`, `procount`, `orderprice`, `useraddr`, `username`, `usercontact` FROM `#@__homemaking_order` WHERE `ordernum` = '$value' AND `userid` = $userid");
					$orderDetail  = $dsql->dsqlOper($archives, "results");
					if($orderDetail){
						$orderDetail = $orderDetail[0];

						//查询商品信息
						$archives = $dsql->SetQuery("SELECT `id`, `title`, `homemakingtype` FROM `#@__homemaking_list` WHERE `id` = ".$orderDetail['proid']);
						$detail  = $dsql->dsqlOper($archives, "results");
						if($detail){
							$detail = $detail[0];

							$proArr[$i]['title'] = $detail['title'];
							$proArr[$i]['id']    = $orderDetail['id'];
							$proArr[$i]['count'] = $orderDetail['procount'];
							$proArr[$i]['price'] = $orderDetail['orderprice'];

							$param = array(
								"service"  => "homemaking",
								"template" => "detail",
								"id"       => $detail['id']
							);
							$proArr[$i]['url'] = getUrlPath($param);

							$i++;

							/* if($detail['tuantype'] == 2){
								$isaddr = 1;
								$address = $orderDetail['username']."，".$orderDetail['useraddr']."，".$orderDetail['usercontact'];
							} */

						}
					}
				}


				$huoniaoTag->assign('proArr', $proArr);
				$huoniaoTag->assign('isaddr', $isaddr);
				$huoniaoTag->assign('address', $address);
				$huoniaoTag->assign('state', $payDetail[0]['state']);
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

		//获取分类
		if($action == "type"){
			$param['type']     = $type;
			$param['page']     = $page;
			$param['pageSize'] = $pageSize;
			$param['son']      = '0';
		
		//数据列表
		}else{
			//如果是列表页面，则获取地址栏传过来的typeid
			if($template == "list" && !$typeid){
				global $typeid;
			}
			$param = array();
			$param['typeid']      = $typeid;

			$param['page']        = $page;
			$param['pageSize']    = $pageSize;

		}

		$moduleReturn  = $moduleHandels->getHandle($params);
		if(!is_array($moduleReturn) || $moduleReturn['state'] != 100) return '';

		//只返回数据统计信息
		if($pageData == 1){
			if(!is_array($moduleReturn) || $moduleReturn['state'] != 100){
				$pageInfo_ = array("totalCount" => 0, "gray" => 0, "audit" => 0, "refuse" => 0);
			}else{
				$moduleReturn  = $moduleReturn['info'];  //返回数据
				$pageInfo_ = $moduleReturn['pageInfo'];
			}
			$smarty->block_data[$dataindex] = array($pageInfo_);
		}else{
			$moduleReturn  = $moduleReturn['info'];  //返回数据
			$pageInfo_ = $moduleReturn['pageInfo'];
			if($pageInfo_){
				//如果有分页数据则提取list键
				$moduleReturn  = $moduleReturn['list'];
				//把pageInfo定义为global变量
				global $pageInfo;
				$pageInfo = $pageInfo_;
			}
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