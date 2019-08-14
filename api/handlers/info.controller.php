<?php

/**
 * huoniaoTag模板标签函数插件-信息模块
 *
 * @param $params array 参数集
 * @return array
 */
function info($params, $content = "", &$smarty = array(), &$repeat = array())
{
    $service = "info";
    extract($params);
    if (empty($action)) return '';
    global $huoniaoTag;
    global $cfg_secureAccess;
    global $cfg_basehost;
    global $dsql;

    //获取指定分类详细信息
    if ($action == "list" || $action == "category") {

        if($typeid){
            $listHandels = new handlers($service, "typeDetail");
            $listConfig  = $listHandels->getHandle($typeid);
            if (is_array($listConfig) && $listConfig['state'] == 100) {
                $listConfig = $listConfig['info'];
                if (is_array($listConfig)) {
                    foreach ($listConfig[0] as $key => $value) {
                        $huoniaoTag->assign('list_' . $key, $value);
                    }
                }
            }

            //面包屑
            global $data;
            $data    = "";
            $typeArr = getParentArr("infotype", $typeid);
            $typeArr = array_reverse(parent_foreach($typeArr, "typename"));

            global $data;
            $data    = "";
            $typeIds = getParentArr("infotype", $typeid);
            $typeIds = array_reverse(parent_foreach($typeIds, "id"));

            $crumbs = array();
            foreach ($typeArr as $key => $value) {
                $param    = array(
                    "service" => $service,
                    "template" => "list",
                    "typeid" => $typeIds[$key],
                    "addrid" => (int)$addrid,
                );
                $url      = getUrlPath($param);
                $crumbs[] = '<a href="' . $url . '">' . $value . '</a>';
            }
            $huoniaoTag->assign('list_crumbs', join("<s></s>", $crumbs));
        }

        if($addrid){
            global $data;
            $data   = "";
            $addrArr = getParentArr("site_area", $addrid);
            $addrArr = array_reverse(parent_foreach($addrArr, "typename"));
            $addrname = !empty($addrArr[3]) ? $addrArr[3] : $addrArr[2];
            $huoniaoTag->assign('addrname', $addrname);

            global $data;
            global $siteCityInfo;
            $data    = "";
            $addrIds = getParentArr("site_area", $addrid);
            $addrIds = array_reverse(parent_foreach($addrIds, "id"));
            $addrIds = array_slice($addrIds, array_search($siteCityInfo['cityid'], $addrIds) + 1);
            $huoniaoTag->assign('addrIds', $addrIds);
        }

        $item = $_REQUEST['item'];
        if($item){
            $itemArr = array();
            $itemList = json_decode($item, true);
            if(is_array($itemList)){
                foreach ($itemList as $key => $value) {
                    $itemArr[$value['id']] = $value['value'];
                }

                $huoniaoTag->assign('item', $item);
                $huoniaoTag->assign('itemArr', $itemArr);
            }else{
                $huoniaoTag->assign('item', '');
            }
        }


        $huoniaoTag->assign('nature', (int)$nature);

        $price_section = $_GET['price_section'];
        $price_sectionArr = explode(',', $price_section);
        $min_price = (int)$price_sectionArr[0];
        $max_price = (int)$price_sectionArr[1];
        $huoniaoTag->assign('price_section', $min_price || $max_price ? ($min_price.','.$max_price) : '');
        $huoniaoTag->assign('min_price', $min_price);
        $huoniaoTag->assign('max_price', $max_price);

        $huoniaoTag->assign('keywords', $keywords);
        $huoniaoTag->assign('typeid', (int)$typeid);
        $huoniaoTag->assign('addrid', (int)$addrid);
        $huoniaoTag->assign('typeIds', $typeIds);
        $huoniaoTag->assign('fire', (int)$fire);
        $huoniaoTag->assign('rec', (int)$rec);
        $huoniaoTag->assign('typename', $typeArr ? $typeArr[count($typeArr)-1] : '');
        $huoniaoTag->assign('orderby', RemoveXSS($orderby));
        $huoniaoTag->assign('page', (int)$page);
        return;

        //获取指定ID的详细信息
    } elseif ($action == "detail" || $action == "comment") {
        $act = 'detail';
        if($type){
            $act = 'storeDetail';
        }
        $detailHandels = new handlers($service, $act);
        $detailConfig  = $detailHandels->getHandle($id);
        $type = $type ? (int)$type : 0;
		$huoniaoTag->assign('type', $type);

        if (is_array($detailConfig) && $detailConfig['state'] == 100) {
            $detailConfig = $detailConfig['info'];
            if (is_array($detailConfig)) {
                $huoniaoTag->assign('detail_info_video_pic', $detailConfig['imglist'] ? $detailConfig['imglist'][0]['path'] : '' );
                $huoniaoTag->assign('is_video', $detailConfig['video']);
                $userid = $detailConfig['member']['userid'];
                if($userid){
                    //查询是不是商家
                    $sql = $dsql->SetQuery("SELECT `id` FROM `#@__infoshop` WHERE `uid` = $userid LIMIT 1");
                    $ret = $dsql->dsqlOper($sql, "results");
                    if($ret){
                        $huoniaoTag->assign('is_shop', 1);
                        $huoniaoTag->assign('shop_id', $ret[0]['id']);
                        $huoniaoTag->assign('shop_wechat', getFilePath(explode(',', $ret[0]['wechat_pic'])[0]));
                        $huoniaoTag->assign('shop_addr', $ret[0]['address']);
                        $param    = array(
                            "service" => "info",
                            "template" => "business",
                            "id" => $ret[0]['id']
                        );
                        $urlParam = getUrlPath($param);
                        $huoniaoTag->assign('shop_url', $urlParam);

                        $lnglat_1 = join(',', array_reverse(explode(',', $ret[0]['lnglat'])));

                        $addr_url = "https://api.map.baidu.com/marker?location={$lnglat_1}&title={$detailConfig['member']['company']}&content={$ret[0]['address']}&output=html";
                        $huoniaoTag->assign('addr_url_map', $addr_url);

                    }
                }else{
                    $huoniaoTag->assign('is_shop', 0);
                }

                detailCheckCity($service, $detailConfig['id'], $detailConfig['cityid'], $action);
                $huoniaoTag->assign('detail_info', $detailConfig);
                //获取分类信息
                $listHandels = new handlers($service, "typeDetail");
                $listConfig  = $listHandels->getHandle($detailConfig['typeid']);
                if (is_array($listConfig) && $listConfig['state'] == 100) {
                    $listConfig = $listConfig['info'];
                    if (is_array($listConfig)) {
                        foreach ($listConfig[0] as $key => $value) {
                            $huoniaoTag->assign('list_' . $key, $value);
                        }
                    }
                }

                //面包屑
                global $data;
                $data    = "";
                $typeArr = getParentArr("infotype", $detailConfig['typeid']);
                $typeArr = array_reverse(parent_foreach($typeArr, "typename"));

                global $data;
                $data    = "";
                $typeIds = getParentArr("infotype", $detailConfig['typeid']);
                $typeIds = array_reverse(parent_foreach($typeIds, "id"));

                $crumbs = array();
                foreach ($typeArr as $key => $value) {
                    $param    = array(
                        "service" => $service,
                        "template" => "list",
                        "id" => $typeIds[$key]
                    );
                    $url      = getUrlPath($param);
                    $crumbs[] = '<a href="' . $url . '" target="_blank">' . $value . '</a>';
                }
                $huoniaoTag->assign('list_crumbs', join(" &raquo; ", $crumbs));

                //输出详细信息
                foreach ($detailConfig as $key => $value) {
                    $huoniaoTag->assign('detail_' . $key, $value);
                }

                $body = $detailConfig['body'];
                $huoniaoTag->assign('detail_body', str_replace("</p>_huoniao_page_break_tag_<p>", "", $body));

                //更新阅读次数
                $sql = $dsql->SetQuery("UPDATE `#@__" . $service . "list` SET `click` = `click` + 1 WHERE `arcrank` = 1 AND `id` = " . $id);
                $dsql->dsqlOper($sql, "update");

            }
        } else {
            header("location:" . $cfg_basehost . "/404.html");
        }
        return;


        //会员首页
    } elseif ($action == "store") {

        $huoniaoTag->assign('id', $id);
        $huoniaoTag->assign('member', getMemberDetail($id));

        //获取商家共发布多少条信息
        $archives = $dsql->SetQuery("SELECT `id` FROM `#@__infolist` WHERE `arcrank` = 1 AND `userid` = " . $id);
        $results2 = $dsql->dsqlOper($archives, "totalCount");
        $huoniaoTag->assign('storeCount', $results2);
        return;


        //号码发布记录
    } elseif ($action == "mobilehistory") {

        if ($data) {
            $RenrenCrypt = new RenrenCrypt();
            $tel         = $RenrenCrypt->php_decrypt(base64_decode($data));

            $huoniaoTag->assign('data', $data);
            $huoniaoTag->assign('tel', $tel);
            $huoniaoTag->assign('telAddr', getTelAddr($tel));

            //获取手机号码共发布多少条信息
            global $dsql;
            $archives = $dsql->SetQuery("SELECT `id` FROM `#@__infolist` WHERE `tel` = '" . $tel . "' AND `arcrank` = 1");
            $results2 = $dsql->dsqlOper($archives, "totalCount");
            $huoniaoTag->assign('telCount', $results2);

        } else {
            header("location:" . $cfg_basehost . "/404.html");
        }
        return;


        //发布信息
    } elseif ($action == "fabu") {

        $huoniaoTag->assign('dopost', $dopost);

        if (!empty($typeid)) {

            //获取分类信息
            $listHandels = new handlers($service, "typeDetail");
            $listConfig  = $listHandels->getHandle($typeid);
            if (is_array($listConfig) && $listConfig['state'] == 100) {
                $listConfig = $listConfig['info'];
                if (is_array($listConfig)) {
                    foreach ($listConfig[0] as $key => $value) {
                        $huoniaoTag->assign('list_' . $key, $value);
                    }
                }
            }

        }

        //发布成功
        if (!empty($id)) {
            $huoniaoTag->assign("id", $id);
        }
        return;


        //付款结果页面
    } elseif ($action == "payreturn") {
        global $dsql;
        global $userLogin;
        $userid = $userLogin->getMemberID();
        if (!empty($ordernum)) {

            //区分二手物品订单
            $sql = $dsql->SetQuery("SELECT * FROM `#@__pay_log` WHERE `ordernum` = '$ordernum' AND `ordertype` = 'info' AND `uid` = $userid");
            $res = $dsql->dsqlOper($sql, "results");
            if($res){
                $body = unserialize($res[0]['body']);

                if($body !== false){

                    if($body['type'] == "info"){
                        $paystate = $res[0]['state'];
                        $huoniaoTag->assign('state', $paystate);
                        $huoniaoTag->assign('date', $res[0]['pubdate']);
                        $huoniaoTag->assign('ordertype', 'buyshop');

                        // if($paystate == 1){
                        //     $paytype = $res[0]['paytype'];
                        //     $ordertype = $res[0]['ordertype'];
                        //     $param  = [
                        //         'paytype' => $paytype,
                        //         'ordertype' => $ordertype,
                        //         'ordernum' => $ordernum
                        //     ];
                        //     if($paytype !== '余额'){
                        //         $detailConfig = new handlers('info', 'paySuccess');
                        //         $detailConfig  = $detailConfig->getHandle($param);
                        //         if (is_array($detailConfig) && $detailConfig['state'] == 100) {
                        //             $returnInfo = $detailConfig['info'];
                        //             header("location:".$returnInfo);die;
                        //         }
                        //     }else{
                        //         $sql = $dsql->SetQuery("SELECT * FROM `#@__info_order` WHERE `ordernum` = '$ordernum'");
                        //         $res = $dsql->dsqlOper($sql, "results");
                        //         $param = array(
                        //             "service" => "member",
                        //             "template" => "orderdetail",
                        //             "module" => "info",
                        //             "type" => "user",
                        //             "id" => $res[0]['id']
                        //         );
                        //         $url   = getUrlPath($param);
                        //         header("location: $url");die;
                        //     }


                        // }
                    }
                }else{

                    //根据支付订单号查询支付结果
                    $archives  = $dsql->SetQuery("SELECT r.`ordernum`, r.`aid`, r.`start`, r.`end`, r.`price`, r.`state` FROM `#@__pay_log` l LEFT JOIN `#@__member_bid` r ON r.`ordernum` = l.`body` WHERE r.`module` = 'info' AND l.`ordernum` = '$ordernum'");
                    $payDetail = $dsql->dsqlOper($archives, "results");
                    if ($payDetail) {

                        $title = "";
                        $sql   = $dsql->SetQuery("SELECT `title` FROM `#@__infolist` WHERE `id` = " . $payDetail[0]['aid']);
                        $ret   = $dsql->dsqlOper($sql, "results");
                        if ($ret) {
                            $title = $ret[0]['title'];
                        }

                        $param = array(
                            "service" => "info",
                            "template" => "detail",
                            "id" => $payDetail[0]['aid']
                        );
                        $url   = getUrlPath($param);

                        $huoniaoTag->assign('state', $payDetail[0]['state']);
                        $huoniaoTag->assign('ordernum', $payDetail[0]['ordernum']);
                        $huoniaoTag->assign('title', $title);
                        $huoniaoTag->assign('url', $url);
                        $huoniaoTag->assign('date', $payDetail[0]['start']);
                        $huoniaoTag->assign('end', $payDetail[0]['end']);
                        $huoniaoTag->assign('price', $payDetail[0]['price']);

                        $amount = ($payDetail[0]['end'] - $payDetail[0]['end']) / 24 / 3600 * $payDetail[0]['price'];
                        $huoniaoTag->assign('amount', sprintf("%.2f", $amount));

                        //支付订单不存在
                    } else {
                        $huoniaoTag->assign('state', 0);
                    }
                }
            }
        } else {
            header("location:" . $cfg_secureAccess . $cfg_basehost);
            die;
        }

    } elseif ($action == "homepage") {

        if(empty($id)){
            header("location:" . $cfg_basehost . "/404.html");
            die;
        }
        //个人发布主页
        global $dsql;
        global $userLogin;
        $uid      = $userLogin->getMemberID();
        $userinfo = getMemberDetail($id);
        $days     = FloorTime(time() - (strtotime($userinfo['regtime'])) , 3);
        $mons     = (int)($days / 30);

        if($uid < 0){
            $userinfo['phone'] = preg_replace('/(1[3456789]{1}[0-9])[0-9]{4}([0-9]{4})/is',"$1****$2", $userinfo['phone']);
        }

        $huoniaoTag->assign('userInfo_', $userinfo);
        $huoniaoTag->assign('mons', $mons);
        $param  = array(
            "service" => "info",
            "template" => "homepage",
            "id" => $id
        );
        $action = getUrlPath($param);
        $huoniaoTag->assign('action', $action);
        //发布信息
//        $keywords    = $_GET['keywords'] ? $_GET['keywords'] : '';
        $listHandels = new handlers('info', "getUserHomeList");
        $listConfig  = $listHandels->getHandle(array('userid' => $id, 'keywords' => $keywords));
        if (is_array($listConfig) && $listConfig['state'] == 100) {
            $list = $listConfig['info'];
            $huoniaoTag->assign('list', $list);
            $sql      = $dsql->SetQuery("SELECT count(`id`) total FROM `#@__infolist` WHERE `is_valid` = 0 AND `waitpay` = 0 AND `arcrank` = 1 AND `userid` = $id");
            $list_count     = $dsql->dsqlOper($sql, "results");
            $huoniaoTag->assign('list_count', $list_count[0]['total']);
            $clicks  = 0;
            $commons = 0;

            $sql = $dsql->SetQuery("SELECT COUNT(`id`) total FROM `#@__member_follow` WHERE `fid` = " . $id);
            $total = getCache("info", $sql, 300, array("name" => "total"));
            $huoniaoTag->assign('fensi', $total);

            $sql = $dsql->SetQuery("SELECT COUNT(`id`) total FROM `#@__member_follow` WHERE `tid` = " . $id);
            $total = getCache("info", $sql, 300, array("name" => "total"));
            $huoniaoTag->assign('guanzhu', $total);

            foreach ($list as $item) {
                $clicks  += $item['click'];
                $commons += $item['common'];
            }
            $huoniaoTag->assign('clicks', $clicks);
            $huoniaoTag->assign('commons', $commons);

            //是否关注
            $userLoginid = $userLogin->getMemberID();
            $sql = "SELECT `id` FROM `#@__member_follow` WHERE `tid` = $userLoginid AND `fid` = $id";
            $sql = $dsql->SetQuery($sql);
            $is_foll = $dsql->dsqlOper($sql, "results");
            $huoniaoTag->assign('is_follow', $is_foll ? 1 : 0);


        }

    } elseif ($action == 'business') {
        //商家主页
        global $dsql;
        global $userLogin;
        $sql = "UPDATE `#@__infoshop` SET `click` = `click`+1 WHERE `id` = $id";
        $sql = $dsql->SetQuery($sql);
        $dsql->dsqlOper($sql, "update");
        $shopid = $id;
        $huoniaoTag->assign('detail_id', $shopid);
        $listHandels = new handlers('info', "shopList");
        $listConfig  = $listHandels->getHandle(array('id' => $shopid));
        if (is_array($listConfig) && $listConfig['state'] == 100) {
            $info = $listConfig['info']['list'][0];
            foreach ($info as $key => $item) {
                $huoniaoTag->assign('detail_' . $key, $item);
            }
            foreach ($info['lnglat'] as $k => $v){
                $info['lnglat'][$k] = trim($v);
            }
            $lnglat_1 = join(',', array_reverse($info['lnglat']));

            $addr_url = "https://api.map.baidu.com/marker?location={$lnglat_1}&title={$info['user']['company']}&content={$info['address']}&output=html";

            $huoniaoTag->assign('addr_url_map', $addr_url);
            $listHandels_ = new handlers('info', "ilist_v2");
            $listConfig_  = $listHandels_->getHandle(array('uid' => $info['uid']));
            if (is_array($listConfig_) && $listConfig_['state'] == 100) {
                $huoniaoTag->assign('pinfos_sum_count', $listConfig_['info']['pageInfo']['totalCount']);
            }else{
                $huoniaoTag->assign('pinfos_sum_count', 0);
            }

            // 统计已发布信息数量
            // $sql = $dsql->SetQuery("SELECT COUNT(`id`) total FROM `#@__infolist` WHERE `userid` = ".$info['uid']." AND `state` = 1");
            // $total = getCache("info", $sql, 300, array("name" => "total"));
            // $huoniaoTag->assign('pinfos_sum_count', $total);


        }

        //验证是否已经收藏
        $params  = array(
            "module" => "info",
            "temp" => "business",
            "type" => "add",
            "id" => $id,
            "check" => 1
        );
        $collect = checkIsCollect($params);
        $huoniaoTag->assign('collect', $collect == "has" ? 1 : 0);

        $huoniaoTag->assign('page', (int)$page);

    }elseif($action == 'confirm'){
        //够买页面
        global $dsql;
        global $userLogin;
        global $cfg_secureAccess;
        global $cfg_basehost;
        $uid = $userLogin->getMemberID();
        if($uid == -1){
            header("location:" . $cfg_secureAccess.$cfg_basehost . "/login.html");exit;
            die;
        }
        $buyInfo = new handlers('info', "detail");
        $buyInfos  = $buyInfo->getHandle(array('id' => $id));
        if (is_array($buyInfos) && $buyInfos['state'] == 100) {
            $buyInfos = $buyInfos['info'];
            foreach ($buyInfos as $key=>$item){
                $huoniaoTag->assign('detail_' . $key, $item);
            }


        }else{
            header("location:" . $cfg_basehost . "/404.html");
        }

    }elseif($action == 'pay'){
        global $dsql;
        global $userLogin;
        $uid = $userLogin->getMemberID();
        if($uid == -1){
            header("location:" . $cfg_secureAccess.$cfg_basehost . "/login.html");exit;
            die;
        }
        $RenrenCrypt = new RenrenCrypt();
        $ordernums = $RenrenCrypt->php_decrypt(base64_decode($ordernum));
        if($ordernums){
            $sql = $dsql->SetQuery("SELECT * FROM `#@__info_order` WHERE `ordernum` = '$ordernums'");
            $ret = $dsql->dsqlOper($sql, "results");
            if($ret){
                $huoniaoTag->assign('ordernum', $ordernums);
                $order = $ret[0];
                if($order['orderstate'] == 0){
                    $price = $order['price'];
                    $huoniaoTag->assign('price', $price);

                    $huoniaoTag->assign('people', $order['people']);
					$huoniaoTag->assign('address', $order['address']);
					$huoniaoTag->assign('contact', $order['contact']);
					$huoniaoTag->assign('note', $order['note']);
                    $huoniaoTag->assign('logistic', $order['logistic']);

                    $buyInfo = new handlers('info', "detail");
                    $buyInfos  = $buyInfo->getHandle(array('id' => $order['prod']));
                    if (is_array($buyInfos) && $buyInfos['state'] == 100) {
                        $buyInfos = $buyInfos['info'];
                        foreach ($buyInfos as $key=>$item){
                            $huoniaoTag->assign('detail_' . $key, $item);
                        }
                    }else{
                        header("location:" . $cfg_basehost . "/404.html");
                    }
                }else{
                    $param = array(
						"service"  => "member",
						"type"     => "user",
						"template" => "orderdetail",
						"module"   => "info",
						"id"       => $order['id']
					);

					header('location:'.getUrlPath($param));
					die;
                }

            }else{
                header('location:'.$cfg_secureAccess.$cfg_basehost.'/404.html');
				die;
            }
        }else{
            header('location:'.$cfg_secureAccess.$cfg_basehost.'/404.html');
			die;
        }

    }
    elseif($action == "storeDetail"){
        $detailHandels = new handlers($service, "storeDetail");
        $detailConfig  = $detailHandels->getHandle($uid);
        $state = 0;

        global $template;

        if(is_array($detailConfig) && $detailConfig['state'] == 100){
            $detailConfig  = $detailConfig['info'];
            if(is_array($detailConfig)){

                if($template != 'config'){
                    detailCheckCity($service, $detailConfig['id'], $detailConfig['cityid'], $action);
                }

                //输出详细信息
                foreach ($detailConfig as $key => $value) {
                    $huoniaoTag->assign('detail_'.$key, $value);
                }
                $state = 1;

            }

        }else{

            if($template != 'config'){
                header("location:".$cfg_secureAccess.$cfg_basehost."/404.html");
                die;
            }
        }
        $huoniaoTag->assign('storeState', $state);
        return;


    }elseif ($action == "store_list"){

        if($list_id){
            $listHandels = new handlers($service, "typeDetail");
            $listConfig  = $listHandels->getHandle($list_id);
            if (is_array($listConfig) && $listConfig['state'] == 100) {
                $listConfig = $listConfig['info'];
                if (is_array($listConfig)) {
                    foreach ($listConfig[0] as $key => $value) {
                        $huoniaoTag->assign('list_' . $key, $value);
                    }
                }
            }

            //面包屑
            global $data;
            $data    = "";
            $typeArr = getParentArr("infotype", $list_id);
            $typeArr = array_reverse(parent_foreach($typeArr, "typename"));

            global $data;
            $data    = "";
            $typeIds = getParentArr("infotype", $list_id);
            $typeIds = array_reverse(parent_foreach($typeIds, "id"));

            $crumbs = array();
            foreach ($typeArr as $key => $value) {
                $param    = array(
                    "service" => $service,
                    "template" => "store_list",
                    "list_id" => $typeIds[$key],
                    "addr_id" => (int)$addr_id,
                );
                $url      = getUrlPath($param);
                $crumbs[] = '<a href="' . $url . '">' . $value . '</a>';
            }
            $huoniaoTag->assign('list_crumbs', join("<s></s>", $crumbs));
        }

        if($addr_id){
            global $data;
            $data   = "";
            $addrArr = getParentArr("site_area", $addr_id);
            $addrArr = array_reverse(parent_foreach($addrArr, "typename"));
            $addrname = !empty($addrArr[3]) ? $addrArr[3] : $addrArr[2];
            $huoniaoTag->assign('addrname', $addrname);

            global $data;
            global $siteCityInfo;
            $data    = "";
            $addrIds = getParentArr("site_area", $addr_id);
            $addrIds = array_reverse(parent_foreach($addrIds, "id"));
            $addrIds = array_slice($addrIds, array_search($siteCityInfo['cityid'], $addrIds) + 1);
            $huoniaoTag->assign('addrIds', $addrIds);
        }

        $huoniaoTag->assign('keywords', $keywords);
        $huoniaoTag->assign('list_id', (int)$list_id);
        $huoniaoTag->assign('addrid', (int)$addr_id);
        $huoniaoTag->assign('typeIds', $typeIds);
        $huoniaoTag->assign('typename', $typeArr ? $typeArr[count($typeArr)-1] : '');
        $huoniaoTag->assign('orderby', (int)$orderby);
        $huoniaoTag->assign('page', (int)$page);

    }elseif($action == "comdetail"){
        $id   = (int)$id;
		$type = $type ? (int)$type : 0;
        $huoniaoTag->assign('type', $type);
        /* $act = 'commentDetail';
        if($type){
            $act = 'shopcommentDetail';


        } */
        $act = 'commentDetail';

        $detailHandels = new handlers("member", $act);
        $detail  = $detailHandels->getHandle(array("id" => $id));
        if(is_array($detail) && $detail['state'] == 100){
            $detail  = $detail['info'];
            foreach ($detail as $key => $value) {
                $huoniaoTag->assign('detail_'.$key, $value);
            }
            if($type){
                $infoshopHandels = new handlers($service, "storeDetail");
                $infoshopConfig  = $infoshopHandels->getHandle($detail['aid']);
                if(is_array($infoshopConfig) && $infoshopConfig['state'] == 100){
                    $infodetail  = $infoshopConfig['info'];
                    $huoniaoTag->assign('detail_info', $infodetail);
                }
            }else{
                $infoListHandels = new handlers($service, "detail");
                $infoListConfig  = $infoListHandels->getHandle($detail['aid']);
                if(is_array($infoListConfig) && $infoListConfig['state'] == 100){
                    $infodetail  = $infoListConfig['info'];
                    $huoniaoTag->assign('detail_info', $infodetail);
                }
            }
        }else{
            $param = array(
				"service" => "info",
			);
			header("location:".getUrlPath($param));
			die;
        }
    }


    global $template;
    if (empty($smarty)) return;

    if (!isset($return))
        $return = 'row'; //返回的变量数组名

    //注册一个block的索引，照顾smarty的版本
    if (method_exists($smarty, 'get_template_vars')) {
        $_bindex = $smarty->get_template_vars('_bindex');
    } else {
        $_bindex = $smarty->getVariable('_bindex')->value;
    }

    if (!$_bindex) {
        $_bindex = array();
    }

    if ($return) {
        if (!isset($_bindex[$return])) {
            $_bindex[$return] = 1;
        } else {
            $_bindex[$return]++;
        }
    }

    $smarty->assign('_bindex', $_bindex);

    //对象$smarty上注册一个数组以供block使用
    if (!isset($smarty->block_data)) {
        $smarty->block_data = array();
    }

    //得一个本区块的专属数据存储空间
    $dataindex = md5(__FUNCTION__ . md5(serialize($params)));
    $dataindex = substr($dataindex, 0, 16);

    //使用$smarty->block_data[$dataindex]来存储
    if (!$smarty->block_data[$dataindex]) {
        //取得指定动作名
        $moduleHandels = new handlers($service, $action);

        $param = $params;

        //获取分类
        if ($action == "type" || $action == "addr") {
            $param['son'] = $son ? $son : 0;

            //信息列表
        } elseif ($action == "ilist") {
            //如果是列表页面，则获取地址栏传过来的typeid
            if ($template == "list" && !$typeid) {
                global $typeid;
                $params['typeid'] = $typeid;
            }

        }

        $moduleReturn = $moduleHandels->getHandle($param);

        //只返回数据统计信息
        if ($pageData == 1) {
            if (!is_array($moduleReturn) || $moduleReturn['state'] != 100) {
                $pageInfo_ = array("totalCount" => 0, "gray" => 0, "audit" => 0, "refuse" => 0, "expire" => 0);
            } else {
                $moduleReturn = $moduleReturn['info'];  //返回数据
                $pageInfo_    = $moduleReturn['pageInfo'];
            }
            $smarty->block_data[$dataindex] = array($pageInfo_);

            //正常返回
        } else {

            if (!is_array($moduleReturn) || $moduleReturn['state'] != 100) return '';
            $moduleReturn = $moduleReturn['info'];  //返回数据
            $pageInfo_    = $moduleReturn['pageInfo'];
            if ($pageInfo_) {
                //如果有分页数据则提取list键
                $moduleReturn = $moduleReturn['list'];
                //把pageInfo定义为global变量
                global $pageInfo;
                $pageInfo = $pageInfo_;
                $smarty->assign('pageInfo', $pageInfo);
            }

            $smarty->block_data[$dataindex] = $moduleReturn;  //存储数据

        }
    }

    //果没有数据，直接返回null,不必再执行了
    if (!$smarty->block_data[$dataindex]) {
        $repeat = false;
        return '';
    }

    //一条数据出栈，并把它指派给$return，重复执行开关置位1
    if (list($key, $item) = each($smarty->block_data[$dataindex])) {
        $smarty->assign($return, $item);
        $repeat = true;
    }

    //如果已经到达最后，重置数组指针，重复执行开关置位0
    if (!$item) {
        reset($smarty->block_data[$dataindex]);
        $repeat = false;
    }

    //打印内容
    print $content;
}
