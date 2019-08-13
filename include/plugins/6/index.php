<?php
//系统核心配置文件
require_once(dirname(__FILE__).'/../../common.inc.php');


//跳转到一下页的JS
$gotojs = "\r\nfunction GotoNextPage(){
    document.gonext."."submit();
}"."\r\nset"."Timeout('GotoNextPage()',500);";

$dojs = "<script language='javascript'>$gotojs\r\n</script>";


//根据城市ID获取小区数量
if($action == 'getCommunityCount' && $cid){

    $totalRecord = 0;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://m.58.com/xiaoquweb/getXiaoquList/?city=".$cid."&page=1");
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_TIMEOUT, 5);
    $data = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($data, true);
    $data = $data['data'];

    //页码信息
    $pageDTO = $data['pageDTO'];

    if($data && $pageDTO) {
        $totalRecord = $pageDTO['totalRecord'];   //共多少条数据
        die('{"state": 100, "info": '.$totalRecord.'}');
    }else{
        die('{"state": 200, "info": '.json_encode("获取失败！").'}');
    }
    die;
}

//获取列表
if($action == 'getList'){

    if(empty($cityid) || empty($cid)) die('{"state": 200, "info": '.json_encode("参数错误！").'}');

    $pagestep = $pagestep == "" ? 10 : $pagestep;
    $page     = $page == "" ? 1 : $page;

    $archives = $dsql->SetQuery("SELECT `id` FROM `#@__site_plugins_house_community` WHERE `cityid` = $cityid AND `cid` = $cid");

    //总条数
    $totalCount = $dsql->dsqlOper($archives.$where, "totalCount");
    //总分页数
    $totalPage = ceil($totalCount/$pagestep);
    //待采集
    $totalGray = $dsql->dsqlOper($archives." AND `state` = 0".$where, "totalCount");
    //已采集
    $totalAudit = $dsql->dsqlOper($archives." AND `state` = 1".$where, "totalCount");
    //已发布
    $totalRefuse = $dsql->dsqlOper($archives." AND `state` = 2".$where, "totalCount");

    if($state != ""){
        $where .= " AND `state` = $state";

        if($state == 0){
            $totalPage = ceil($totalGray/$pagestep);
        }elseif($state == 1){
            $totalPage = ceil($totalAudit/$pagestep);
        }elseif($state == 2){
            $totalPage = ceil($totalRefuse/$pagestep);
        }
    }

    $where .= " order by `id` desc";

    $atpage = $pagestep*($page-1);
    $where .= " LIMIT $atpage, $pagestep";
    $archives = $dsql->SetQuery("SELECT `id`, `state`, `name`, `addr`, `addrid`, `litpic`, `price`, `buildtype`, `property`, `proprice`, `kfs` FROM `#@__site_plugins_house_community` WHERE `cityid` = $cityid AND `cid` = $cid".$where);
    $results = $dsql->dsqlOper($archives, "results");

    if(count($results) > 0){
        $list = array();
        foreach ($results as $key=>$value) {
            $list[$key]["id"] = $value["id"];
            $list[$key]["state"] = $value["state"];
            $list[$key]["name"] = $value["name"];
            $list[$key]["address"] = $value["addr"];

            //地区
            $addrname = $value['addrid'];
            if($addrname){
                $addrname = getPublicParentInfo(array('tab' => 'site_area', 'id' => $addrname, 'type' => 'typename', 'split' => ' '));
            }
            $list[$key]["addr"] = $addrname ? $addrname : '未匹配';

            $list[$key]["litpic"] = $value["litpic"];
            $list[$key]["price"] = $value["price"];
            $list[$key]["buildtype"] = $value["buildtype"];
            $list[$key]["property"] = $value["property"];
            $list[$key]["proprice"] = $value["proprice"];
        }
        if(count($list) > 0){
            echo '{"state": 100, "info": '.json_encode("获取成功").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}, "communityList": '.json_encode($list).'}';
        }else{
            echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
        }

    }else{
        echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
    }

    die;
}



//删除
if($action == 'del'){

    if(empty($id)) die('{"state": 200, "info": '.json_encode("参数错误！").'}');

    $sql = $dsql->SetQuery("DELETE FROM `#@__site_plugins_house_community` WHERE `id` in($id)");
    $ret = $dsql->dsqlOper($sql, "update");
    if($ret == 'ok'){
        die('{"state": 100, "info": '.json_encode("删除成功！").'}');
    }else{
        die('{"state": 200, "info": '.json_encode("删除失败！").'}');
    }
}


//清空
if($action == 'clear'){

    $sql = $dsql->SetQuery("DELETE FROM `#@__site_plugins_house_community` WHERE `cityid` = $cityid AND `cid` = $cid");
    $ret = $dsql->dsqlOper($sql, "update");
    if($ret == 'ok'){
        die('{"state": 100, "info": '.json_encode("清除成功！").'}');
    }else{
        die('{"state": 200, "info": '.json_encode("清除失败！").'}');
    }

}



//第一步：选择要抓取的城市
if(empty($step)) {

    //58城市接口
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://wxapp.58.com/load/city");
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_TIMEOUT, 5);
    $data = curl_exec($curl);
    curl_close($curl);

    if (empty($data)) {
        die('城市接口数据获取失败！');
    }

    $data = json_decode($data, true);
    $data = json_decode($data['data'], true);

    if (empty($data)) {
        die('城市接口数据解析失败！');
    }

    $cityListArr = array();
    foreach ($data as $key => $val) {
        if ($val['listName'] && $val['dispCityId'] > 0) {
            array_push($cityListArr, $val);
        }
    }

    if (empty($cityListArr)) {
        die('城市接口数据为空！');
    }

    //本地城市数据
    $handler = true;
    $configHandels = new handlers("siteConfig", "siteCity");
    $moduleConfig = $configHandels->getHandle();
    if ($moduleConfig['state'] != 100) {
        die($moduleConfig['info']);
    }
    $localCityListArr = $moduleConfig['info'];

    //合并双方
    $cityArr = array();
    foreach ($cityListArr as $key => $val) {
        foreach ($localCityListArr as $k => $v) {
            if ($val['cityName'] == $v['name']) {
                array_push($cityArr, array(
                    'name' => $v['name'],
                    'cityid' => $v['cityid'],
                    'cid' => $val['dispCityId']
                ));
            }
        }
    }

    $alreadyCollection = array();
    $notCollection = array();

    //区分是否采集过
    foreach ($cityArr as $city){

        $sql = $dsql->SetQuery("SELECT count(`id`) totalCount FROM `#@__site_plugins_house_community` WHERE `state` > 0 AND `cityid` = " . $city['cityid'] . " LIMIT 1");
        $ret = $dsql->dsqlOper($sql, "results");
        if($ret){
            $totalCount = $ret[0]['totalCount'];
            if($totalCount > 0) {
                $city['totalRecord'] = $totalCount;
                array_push($alreadyCollection, $city);
            }else{
                array_push($notCollection, $city);
            }
        }else{
            array_push($notCollection, $city);
        }

    }

    $huoniaoTag->assign('alreadyCollection', $alreadyCollection);
    $huoniaoTag->assign('notCollection', $notCollection);

}

//获取列表数据
if($step == 1){

    $page = $page ? (int)$page : 1;

    //58城市接口
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://m.58.com/xiaoquweb/getXiaoquList/?city=".$cid."&page=".$page);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_TIMEOUT, 5);
    $data = curl_exec($curl);
    curl_close($curl);

    if (empty($data)) {
        die('列表接口数据获取失败，请重试！<a href="index.php">点击返回</a>');
    }

    $data = json_decode($data, true);
    $data = $data['data'];

    if (empty($data)) {
        die('列表接口返回数据为空！<a href="index.php">点击返回</a>');
    }

    //页码信息
    $pageDTO = $data['pageDTO'];

    $totalPage = $pageDTO['totalPage'];   //总页数
    $totalRecord = $pageDTO['totalRecord'];   //共多少条数据

    //数据
    $infoList = $data['infoList'];

    //取分站城市下的所有区域
    global $data;
    $data = '';
    $addrArr = $dsql->getTypeList($cityid, "site_area", 1);
    $addridArr = parent_foreach($addrArr, 'id');


    if(!empty($addrid)){
        echo json_encode($addrid);
    }

    //入库
    foreach ($infoList as $key => $val){

        $infoid = $val['infoid'];
        $name = $val['name'];
        $address = $val['address'];
        $pic = str_replace('210', '1000', str_replace('280', '1000', $val['pic']));   //宽高用1000尺寸
        $price = $val['price'];
        $areaName = $val['areaName'];
        $shangquanName = $val['shangquanName'];

        //取addrid
        $addrid = getAddrID($areaName, $shangquanName);

        //验证重复
        $sql = $dsql->SetQuery("SELECT `id` FROM `#@__site_plugins_house_community` WHERE `cityid` = '$cityid' AND `cid` = '$cid' AND `name` = '$name'");
        $ret = $dsql->dsqlOper($sql, "results");
        if(!$ret) {
            $sql = $dsql->SetQuery("INSERT INTO `#@__site_plugins_house_community` (`cityid`, `cid`, `infoid`, `name`, `addr`, `addrid`, `litpic`, `price`) VALUE ('$cityid', '$cid', '$infoid', '$name', '$address', '$addrid', '$pic', '$price')");
            $dsql->dsqlOper($sql, "update");
        }

    }

    if($page < $totalPage){
        $tmsg = '列表入库：第' . $page . '页，共 ' . $totalPage . ' 页';
        $doneForm  = "<form name='gonext' method='post' action='?step=1&cityid=".$cityid."&cid=".$cid."&page=".($page+1)."'></form>\r\n{$dojs}";
        PutInfo($tmsg, $doneForm);
        die;
    }else {
        header('location:?step=2&cityid=' . $cityid . '&cid=' . $cid);
//        echo '列表入库成功，<a href="?step=2&cityid=' . $cityid . '&cid=' . $cid . '">采集小区内容</a>';
    }


//获取小区内容
}elseif($step == 2){

    //统计总数
    $sql = $dsql->SetQuery("SELECT count(`id`) totalCount FROM `#@__site_plugins_house_community` WHERE `cityid` = '$cityid' AND `cid` = '$cid' AND (`state` = 0 OR `state` = 1)");
    $ret = $dsql->dsqlOper($sql, "results");
    $totalCount = $ret[0]['totalCount'];

    $page = $page ? (int)$page : 1;
    $pagestep = 10;   //每次采集10条
    $totalPage = ceil($totalCount/$pagestep);

    $atpage = $pagestep*($page-1);
    $where = " LIMIT $atpage, $pagestep";

    //查询需要采集的内容
    $sql = $dsql->SetQuery("SELECT `id`, `infoid`, `state`, `litpic` FROM `#@__site_plugins_house_community` WHERE `cityid` = '$cityid' AND `cid` = '$cid' AND (`state` = 0 OR `state` = 1) ORDER BY `id` ASC" . $where);
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){

        foreach ($ret as $key => $val){
            $id = $val['id'];
            $infoid = $val['infoid'];
            $litpic = $val['litpic'];

            //如果已经采集过
            if($val['state'] == 1){
                continue;
            }

            //58小区详情接口
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, "https://app.58.com/dict/detail/appxiaoqu/".$infoid);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curl, CURLOPT_TIMEOUT, 5);
            $data = curl_exec($curl);
            curl_close($curl);

            if (empty($data)) {
                $count = (int)$count + 1;
                if($count < 4) {
                    header('location:?step=2&cityid=' . $cityid . '&cid=' . $cid . '&page=' . $page . '&count=' . $count);
                    die;
                }else{
                    die('采集失败，请重试！<a href="index.php">点击返回</a>');
                }
            }

            $data = json_decode($data, true);
            if($data['status'] == 0 && $data['msg'] == 'OK'){
                $result = $data['result'];
                $info = $result['info'];

                $picArr = array();
                $config = array();

                $pics = $buildtype = $property = $proprice = $kfs = $parknum = $litpic_ = '';
                $buildage = $protype = $opendate = $planhouse = $rongji = $green = 0;

                foreach ($info as $k => $v){

                    foreach ($v as $k_ => $area){

                        //图集
                        if($k_ == 'xq_image_area'){
                            $image_list = $area['image_list'];
                            foreach ($image_list as $img){
                                if(!$picArr[$img['typeName']]){
                                    $picArr[$img['typeName']] = array();
                                }

                                $pic = explode(',', $img['image_list']);
                                $pic = str_replace('300', '1000', str_replace('400', '1000', $pic[0]));

                                if(!$litpic_){
                                    $litpic_ = $pic;
                                }

                                array_push($picArr[$img['typeName']], $pic);
                            }
                            $pics = serialize($picArr);
                        }

                        //小区信息
                        if($k_ == 'xq_base_info_area'){
                            $address_info = $area['address_info'];
                            $lng = $address_info['action']['lon'];  //经度
                            $lat = $address_info['action']['lat'];  //纬度

                            $other_info = $area['other_info'];
                            $other_info_items = $other_info['items'];

                            if($other_info_items) {
                                foreach ($other_info_items as $item) {

                                    //产权年限
                                    if ($item['title'] == '产权描述') {
                                        $buildage = (int)str_replace('年', '', $item['content']);
                                    }

                                    //物业类型
                                    if ($item['title'] == '物业类别') {
                                        $sql = $dsql->SetQuery("SELECT `id` FROM `#@__houseitem` WHERE `parentid` = 1 AND `typename` = '" . $item['content'] . "'");
                                        $ret = $dsql->dsqlOper($sql, "results");
                                        if ($ret) {
                                            $protype = $ret[0]['id'];
                                        }
                                    }

                                    //建筑类型
                                    if ($item['title'] == '建筑类别') {
                                        $buildtype = $item['content'];
                                    }

                                    //物业公司
                                    if ($item['title'] == '物业公司') {
                                        $property = $item['content'];
                                    }

                                    //物业费
                                    if ($item['title'] == '物业费') {
                                        $proprice = $item['content'];
                                    }

                                    //竣工时间
                                    if ($item['title'] == '竣工时间') {
                                        $item['content'] = str_replace('暂无数据', '', str_replace('年', '', $item['content']));
                                        $item['content'] = strlen($item['content']) == 4 ? $item['content'] . '-01-01' : $item['content'];
                                        $opendate = $item['content'] ? GetMkTime($item['content']) : 0;
                                    }

                                    //开发商
                                    if ($item['title'] == '开发商') {
                                        $kfs = $item['content'];
                                    }

                                    //规划户数
                                    if ($item['title'] == '总户数') {
                                        $planhouse = (int)str_replace('户', '', $item['content']);
                                    }

                                    //车位数
                                    if ($item['title'] == '停车位') {
                                        $parknum = $item['content'];
                                    }

                                    //容积率
                                    if ($item['title'] == '容积率') {
                                        $rongji = (float)$item['content'];
                                    }

                                    //绿化率
                                    if ($item['title'] == '绿化率') {
                                        $green = (float)str_replace('%', '', $item['content']);
                                    }

                                }
                            }
                        }

                        //周边配套
                        if($k_ == 'xq_zbpt_area'){
                            $other_info = $area['other_info'];
                            $other_info_items = $other_info['items'];

                            if($other_info_items) {
                                foreach ($other_info_items as $item) {
                                    array_push($config, $item['title'] . "###" . $item['content']);
                                }
                            }
                            $config = join('|||', $config);
                        }



                    }

                }

                //如果缩略图为空，取图集第一张
                $thumb = !$litpic && $litpic_ ? ", `litpic` = '$litpic_'" : '';

                //内容入库
                $sql = $dsql->SetQuery("UPDATE `#@__site_plugins_house_community` SET `state` = 1, `longitude` = '$lng', `latitude` = '$lat', `buildage` = '$buildage', `protype` = '$protype', `buildtype` = '$buildtype', `property` = '$property', `proprice` = '$proprice', `opendate` = '$opendate', `kfs` = '$kfs', `planhouse` = '$planhouse', `parknum` = '$parknum', `rongji` = '$rongji', `green` = '$green', `config` = '$config', `pics` = '$pics'".$thumb." WHERE `id` = $id");
                $dsql->dsqlOper($sql, "update");

            }

        }

        if($page < $totalPage){
            $tmsg = '内容采集：第' . $page . '页，共 ' . $totalPage . ' 页';
            $doneForm  = "<form name='gonext' method='post' action='?step=2&cityid=".$cityid."&cid=".$cid."&page=".($page+1)."'></form>\r\n{$dojs}";
            PutInfo($tmsg, $doneForm);
        }else {
            header('location:?step=4&cityid=' . $cityid . '&cid=' . $cid);
//            echo '小区内容采集成功，<a href="?step=3&cityid=' . $cityid . '&cid=' . $cid . '">点击发布</a><a href="index.php">点击返回</a>';
        }

    }else{
        die('没有要采集的小区数据！<a href="index.php">点击返回</a>');
    }
    die;


//发布入库
}elseif($step == 3){

    //查询需要发布的内容
    $sql = $dsql->SetQuery("SELECT * FROM `#@__site_plugins_house_community` WHERE `cityid` = '$cityid' AND `cid` = '$cid' AND `state` = 1");
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret) {

        foreach ($ret as $key => $val) {

            $id = $val['id'];
            $cityid = $val['cityid'];
            $name = $val['name'];
            $addr = $val['addr'];
            $addrid = $val['addrid'];
            $litpic = $val['litpic'];
            $price = $val['price'];
            $longitude = $val['longitude'];
            $latitude = $val['latitude'];
            $buildage = $val['buildage'];
            $protype = $val['protype'];
            $buildtype = $val['buildtype'];
            $property = $val['property'];
            $proprice = $val['proprice'];
            $opendate = $val['opendate'];
            $kfs = $val['kfs'];
            $planhouse = $val['planhouse'];
            $parknum = $val['parknum'];
            $rongji = $val['rongji'];
            $green = $val['green'];
            $config = $val['config'];
            $pics = $val['pics'];

            //发布入库
            $date = time();
            $sql = $dsql->SetQuery("INSERT INTO `#@__house_community` (`cityid`, `title`, `addrid`, `addr`, `longitude`, `latitude`, `litpic`, `price`, `buildage`, `protype`, `buildtype`, `property`, `proprice`, `opendate`, `kfs`, `planhouse`, `parknum`, `rongji`, `green`, `config`, `note`, `state`, `weight`, `pubdate`) VALUE ('$cityid', '$name', '$addrid', '$addr', '$longitude', '$latitude', '$litpic', '$price', '$buildage', '$protype', '$buildtype', '$property', '$proprice', '$opendate', '$kfs', '$planhouse', '$parknum', '$rongji', '$green', '$config', '', 1, 1, '$date')");
            $lastid = $dsql->dsqlOper($sql, "lastid");
            if(is_numeric($lastid)){

                $litpic_ = '';

                //图集
                $picArr = unserialize($pics);
                if($picArr){
                    foreach ($picArr as $k => $v){
                        $date = time();
                        $sql = $dsql->SetQuery("INSERT INTO `#@__house_album` (`action`, `loupan`, `title`, `weight`, `pubdate`) VALUE ('community', '$lastid', '$k', 1, '$date')");
                        $ret = $dsql->dsqlOper($sql, "lastid");
                        if(is_numeric($ret)){
                            foreach ($v as $p){

                                if($litpic_ == ''){
                                    $litpic_ = $p;
                                }

                                $sql = $dsql->SetQuery("INSERT INTO `#@__house_pic` (`type`, `aid`, `picPath`, `picInfo`) VALUE ('albumcommunity', '$ret', '$p', '')");
                                $dsql->dsqlOper($sql, "update");
                            }
                        }
                    }
                }

                //如果小区缩略图为空，则使用图集第一张图片
                if(!$litpic && $litpic_){
                    $sql = $dsql->SetQuery("UPDATE `#@__house_community` SET `litpic` = '$litpic_' WHERE `id` = $lastid");
                    $dsql->dsqlOper($sql, "update");
                }


                //更新状态
                $sql = $dsql->SetQuery("UPDATE `#@__site_plugins_house_community` SET `state` = 2 WHERE `id` = $id");
                $dsql->dsqlOper($sql, "update");
            }

        }

        header('location:?step=4&cityid=' . $cityid . '&cid=' . $cid);

    }else{
        die('没有要发布的小区数据！<a href="index.php">点击返回</a>');
    }
    die;


//已采集列表
}elseif($step == 4){

    $cityid = (int)$cityid;
    if(empty($cityid)) die('参数传递错误！');

    //查询城市名
    $cityName = '';
    $sql = $dsql->SetQuery("SELECT `typename` FROM `#@__site_area` WHERE `id` = " . $cityid);
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){
        $cityName = $ret[0]['typename'];
    }
    $huoniaoTag->assign('cityName', $cityName);

    //查询各状态
    $totalCount = $state1 = $state2 = $state3 = 0;
    $sql = $dsql->SetQuery("SELECT count(`id`) totalCount, (SELECT count(`id`) FROM `#@__site_plugins_house_community` WHERE `state` = 0 AND `cityid` = $cityid AND `cid` = $cid) state1, (SELECT count(`id`) FROM `#@__site_plugins_house_community` WHERE `state` = 1 AND `cityid` = $cityid AND `cid` = $cid) state2, (SELECT count(`id`) FROM `#@__site_plugins_house_community` WHERE `state` = 2 AND `cityid` = $cityid AND `cid` = $cid) state3 FROM `#@__site_plugins_house_community` WHERE `cityid` = $cityid AND `cid` = $cid LIMIT 1;");
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){
        $totalCount = $ret[0]['totalCount'];
        $state1 = $ret[0]['state1'];
        $state2 = $ret[0]['state2'];
        $state3 = $ret[0]['state3'];
    }
    $huoniaoTag->assign('totalCount', $totalCount);
    $huoniaoTag->assign('state1', $state1);
    $huoniaoTag->assign('state2', $state2);
    $huoniaoTag->assign('state3', $state3);

}


$tpl                      = dirname(__FILE__) . "/tpl";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates                = "index.html";

$cur = realpath('.');
$par = realpath('..');

//当前文件夹就是当前插件的ID
$folder = str_replace($par, '', $cur);
$folder = str_replace('/', '', $folder);
$folder = str_replace('\\', '', $folder);

$staticFile = $cfg_secureAccess . $cfg_basehost . '/include/plugins/' . $folder . '/tpl/';

$huoniaoTag->assign('staticFile', $staticFile);
$huoniaoTag->assign('folder', $folder);
$huoniaoTag->assign('cityid', (int)$cityid);
$huoniaoTag->assign('cid', (int)$cid);
$huoniaoTag->assign('step', (int)$step);
$huoniaoTag->display($templates);




//根据区域名称查询区域ID
function getAddrID($name1, $name2){
    global $addridArr;
    global $dsql;

    $addrid = 0;

    //优先用name2
    $sql = $dsql->SetQuery("SELECT `id` FROM `#@__site_area` WHERE `typename` = '$name2'");
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){
        foreach ($ret as $key => $val){
            if(in_array($val['id'], $addridArr)){
                $addrid = $val['id'];
            }
        }
    }

    //如果name2没有查询到，再查询name1
    if(!$addrid){
        $sql = $dsql->SetQuery("SELECT `id` FROM `#@__site_area` WHERE `typename` = '$name1'");
        $ret = $dsql->dsqlOper($sql, "results");
        if($ret){
            foreach ($ret as $key => $val){
                if(in_array($val['id'], $addridArr)){
                    $addrid = $val['id'];
                }
            }
        }
    }

    return $addrid;

}


function PutInfo($msg1,$msg2){
    $htmlhead  = "<html>\r\n<head>\r\n<title>温馨提示</title>\r\n";
    $htmlhead .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$GLOBALS['cfg_soft_lang']."\" />\r\n";
    $htmlhead .= "<link rel='stylesheet' rel='stylesheet' href='/static/css/admin/bootstrap.css?v=4' />";
    $htmlhead .= "<link rel='stylesheet' rel='stylesheet' href='/static/css/admin/common.css?v=1111' />";
    $htmlhead .= "<base target='_self'/>\r\n</head>\r\n<body>\r\n";
    $htmlfoot  = "</body>\r\n</html>";
    $rmsg  = "<div class='s-tip'><div class='s-tip-head'><h1>".$GLOBALS['cfg_soft_enname']." 提示：</h1></div>\r\n";
    $rmsg .= "<div class='s-tip-body'>".str_replace("\"","“",$msg1)."\r\n".$msg2."\r\n";
    $msginfo = $htmlhead.$rmsg.$htmlfoot;
    echo $msginfo;
}