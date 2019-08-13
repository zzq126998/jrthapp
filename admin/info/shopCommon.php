<?php
/**
 * 管理团购评论
 *
 * @version        $Id: shopCommon.php 2018-10-9 上午9:55:16 $
 * @package        HuoNiao.Tuan
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__)."/../inc/config.inc.php");
checkPurview("shopCommon");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__)."/../templates/info";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "shopCommon.html";

global $handler;
$handler = true;


if($dopost == "getDetail"){
    if($id == "") die;
    $archives = $dsql->SetQuery("SELECT `pid`, `userid`, `content`, `dtime`, `ip`, `ipaddr`, `good`, `bad`, `ischeck` FROM `#@__info_shopcommon` WHERE `id` = ".$id);
    $results = $dsql->dsqlOper($archives, "results");

    if(count($results) > 0){

        //$typeSql = $dsql->SetQuery("SELECT p.`id`, p.`title` FROM `#@__tuanlist` p LEFT JOIN `#@__tuan_order` o ON o.`proid` = p.`id` WHERE o.`id` = ". $results[0]["aid"]);
        //$typename = $dsql->getTypeName($typeSql);
        //$results[0]["protitle"] = $typename[0]['title'];

        $typeSql = $dsql->SetQuery("SELECT `uid` FROM `#@__infoshop`  WHERE `id` = ". $results[0]["pid"]);
        $typename = $dsql->getTypeName($typeSql);
        $uid = $typename[0]['uid'];
        $member = getMemberDetail($uid);
        $results[0]["protitle"] = $member['company'];

        $param = array(
            "service"  => "info",
            "template" => "business",
            "id"       => $results[0]['pid']
        );
        $results[0]["prourl"] = getUrlPath($param);

        if($results[0]["userid"] == 0 || $results[0]["userid"] == -1){
            $username = "游客";
        }else{
            $archives = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = ".$results[0]["userid"]);
            $member = $dsql->dsqlOper($archives, "results");
            $username = $member[0]["username"];
        }
        $results[0]["username"] = $username;

        //评论图集
        $imglist = array();
        $pics = $results[0]['pics'];
        if(!empty($pics)){
            $pics = explode(",", $pics);
            foreach ($pics as $key => $value) {
                $imglist[$key]['val'] = $value;
                $imglist[$key]['path'] = getFilePath($value);
            }
        }
        $results[0]['pics'] = $imglist;

        echo json_encode($results);

    }else{
        echo '{"state": 200, "info": '.json_encode("评论信息获取失败！").'}';
    }
    die;

//更新评论信息
}else if($dopost == "updateDetail"){
    if($id == "") die;
    $content = $_POST["commonContent"];
    $dtime   = GetMkTime($_POST["commonTime"]);
    $ip      = $_POST["commonIp"];
    $good    = $_POST["commonGood"];
    $bad     = $_POST["commonBad"];
    $rating  = $_POST["rating"];
    $score1  = $_POST["score1"];
    $score2  = $_POST["score2"];
    $score3  = $_POST["score3"];
    $pics    = $_POST["pics"];
    $ischeck = $_POST["commonIsCheck"];
    $ipAddr = getIpAddr($ip);

    //会员通知
    $sql = $dsql->SetQuery("SELECT `pid`,`userid`, `ischeck`, `dtime` FROM `#@__info_shopcommon` WHERE `id` = $id");
    $ret = $dsql->dsqlOper($sql, "results");
    if($ret){
        $typeSql = $dsql->SetQuery("SELECT `uid` FROM `#@__infoshop`  WHERE `id` = ". $ret[0]["pid"]);
        $typename = $dsql->getTypeName($typeSql);
        $uid = $typename[0]['uid'];
        $member = getMemberDetail($uid);

        $aid     = $ret[0]['pid'];
        $title   = $member['company'];
        $pubdate = $member['pubdate'];
        $uid     = $member['userid'];

        $userid  = $ret[0]['userid'];
        $ischeck = $ret[0]['ischeck'];
        $dtime   = $ret[0]['dtime'];

        //验证评论状态
        if($ischeck != $commonIsCheck){

            $param = array(
                "service"  => "info",
                "template" => "business",
                "id"       => $aid
            );

            //只有审核通过的信息才发通知
            if($commonIsCheck == 1){

                //获取会员名
                $username = "";
                $sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = $userid");
                $ret = $dsql->dsqlOper($sql, "results");
                if($ret){
                    $username = $ret[0]['username'];
                }

                //自定义配置
        		$config = array(
        			"username" => $username,
        			"title" => $title,
        			"date" => date("Y-m-d H:i:s", $dtime),
        			"fields" => array(
        				'keyword1' => '信息标题',
        				'keyword2' => '发布时间',
        				'keyword3' => '进展状态'
        			)
        		);

                updateMemberNotice($userid, "会员-评论审核通过", $param, $config);

                //获取会员名
                $username = "";
                $sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = $uid");
                $ret = $dsql->dsqlOper($sql, "results");
                if($ret){
                    $username = $ret[0]['username'];
                }

                //自定义配置
        		$config = array(
        			"username" => $username,
        			"title" => $title,
        			"date" => date("Y-m-d H:i:s", $pubdate),
        			"fields" => array(
        				'keyword1' => '信息标题',
        				'keyword2' => '发布时间',
        				'keyword3' => '进展状态'
        			)
        		);

                updateMemberNotice($uid, "会员-新评论通知", $param, $config);

            }

        }
    }

    $archives = $dsql->SetQuery("UPDATE `#@__info_shopcommon` SET `content` = '$commonContent', `dtime` = '".GetMkTime($commonTime)."', `ip` = '$commonIp', `good` = '$commonGood', `bad` = '$commonBad', `ischeck` = '$commonIsCheck' WHERE `id` = ".$id);
    $results = $dsql->dsqlOper($archives, "update");
    if($results != "ok"){
        echo $results;
    }else{
        adminLog("更新商家评论", $id);
        echo '{"state": 100, "info": '.json_encode("修改成功！").'}';
    }
    die;

//更新评论状态
}else if($dopost == "updateState"){
    if($id == "") die;
    $each = explode(",", $id);
    $error = array();
    foreach($each as $val){


        //会员通知
        $sql = $dsql->SetQuery("SELECT `pid`,`userid`, `ischeck`, `dtime` FROM `#@__info_shopcommon` WHERE `id` = $val");
        $ret = $dsql->dsqlOper($sql, "results");
        if($ret){
            $typeSql = $dsql->SetQuery("SELECT `jointime`,`uid` FROM `#@__infoshop`  WHERE `id` = ". $ret[0]["pid"]);
            $typename = $dsql->getTypeName($typeSql);
            $uid = $typename[0]['uid'];
            $member = getMemberDetail($uid);

            $aid     = $ret[0]['pid'];
            $title   = $member['company'];
            $uid     = $member['userid'];

            $pubdate = $typename[0]['jointime'];
            $userid  = $ret[0]['userid'];
            $ischeck = $ret[0]['ischeck'];
            $dtime   = $ret[0]['dtime'];

            //验证评论状态
            if($ischeck != $arcrank){

                $param = array(
                    "service"  => "info",
                    "template" => "business",
                    "id"       => $aid
                );

                //只有审核通过的信息才发通知
                if($arcrank == 1){

                    //获取会员名
                    $username = "";
                    $sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = $userid");
                    $ret = $dsql->dsqlOper($sql, "results");
                    if($ret){
                        $username = $ret[0]['username'];
                    }

                    //自定义配置
            		$config = array(
            			"username" => $username,
            			"title" => $title,
            			"date" => date("Y-m-d H:i:s", $dtime),
            			"fields" => array(
            				'keyword1' => '信息标题',
            				'keyword2' => '发布时间',
            				'keyword3' => '进展状态'
            			)
            		);

                    updateMemberNotice($userid, "会员-评论审核通过", $param, $config);

                    //获取会员名
                    $username = "";
                    $sql = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = $uid");
                    $ret = $dsql->dsqlOper($sql, "results");
                    if($ret){
                        $username = $ret[0]['username'];
                    }

                    //自定义配置
            		$config = array(
            			"username" => $username,
            			"title" => $title,
            			"date" => date("Y-m-d H:i:s", $pubdate),
            			"fields" => array(
            				'keyword1' => '信息标题',
            				'keyword2' => '发布时间',
            				'keyword3' => '进展状态'
            			)
            		);

                    updateMemberNotice($uid, "会员-新评论通知", $param, $config);

                }

            }
        }



        $archives = $dsql->SetQuery("UPDATE `#@__info_shopcommon` SET `ischeck` = $arcrank WHERE `id` = ".$val);
        $results = $dsql->dsqlOper($archives, "update");
        if($results != "ok"){
            $error[] = $val;
        }
    }
    if(!empty($error)){
        echo '{"state": 200, "info": '.json_encode($error).'}';
    }else{
        adminLog("更新二手商家评论状态", $id."=>".$arcrank);
        echo '{"state": 100, "info": '.json_encode("修改成功！").'}';
    }
    die;

//删除评论
}else if($dopost == "delCommon"){
    if($id == "") die;
    $each = explode(",", $id);
    $error = array();
    foreach($each as $val){
        $archives = $dsql->SetQuery("DELETE FROM `#@__info_shopcommon` WHERE `id` = ".$val);
        $results = $dsql->dsqlOper($archives, "update");
        if($results != "ok"){
            $error[] = $val;
        }
    }
    if(!empty($error)){
        echo '{"state": 200, "info": '.json_encode($error).'}';
    }else{
        adminLog("删除商家评论", $id);
        echo '{"state": 100, "info": '.json_encode("删除成功！").'}';
    }
    die;

//获取评论列表
}else if($dopost == "getList"){
    $pagestep = $pagestep == "" ? 10 : $pagestep;
    $page     = $page == "" ? 1 : $page;

    $where = "";

    $where2 = " `cityid` in ($adminCityIds)";

    if ($adminCity){
        $where2 = " `cityid` = $adminCity";
    }

    $sidArr = array();
    $userSql = $dsql->SetQuery("SELECT `store`.id FROM `#@__infoshop` store WHERE".$where2);
    $results = $dsql->dsqlOper($userSql, "results");
    foreach ($results as $key => $value) {
        $sidArr[$key] = $value['id'];
    }
    if(!empty($sidArr)){
        $where3 = " AND `pid` in (".join(",",$sidArr).")";
    }else{
        echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": 0, "totalCount": 0, "totalGray": 0, "totalAudit": 0, "totalRefuse": 0}}';die;
    }

    if($sKeyword != ""){
        //按评论内容搜索
        if($sType == 0){
            $where .= " AND `content` like '%$sKeyword%'";

            //按信息标题搜索
        }elseif($sType == "1"){
            $where3 .= " AND `title` like '%$sKeyword%'";

            //按评论人搜索
        }elseif($sType == "2"){
            if($sKeyword == "游客"){
                $where .= " AND (`userid` = 0 OR `userid` = -1)";
            }else{
                $archives = $dsql->SetQuery("SELECT `id` FROM `#@__member` WHERE `username` like '%$sKeyword%'");
                $results = $dsql->dsqlOper($archives, "results");

                if(count($results) > 0){
                    $list = array();
                    foreach ($results as $key=>$value) {
                        $list[] = $value["id"];
                    }
                    $idList = join(",", $list);

                    $where .= " AND `userid` in ($idList)";

                }else{
                    echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": 0, "totalCount": 0, "totalGray": 0, "totalAudit": 0, "totalRefuse": 0}}';die;
                }
            }

            //按IP搜索
        }elseif($sType == "3"){
            $where .= " AND `ip` like '%$sKeyword%'";
        }
    }

    $archives = $dsql->SetQuery("SELECT `id` FROM `#@__info_shopcommon`  WHERE 1=1".$where3);
    $results = $dsql->dsqlOper($archives, "results");
    if(count($results) > 0){
        $list = array();
        foreach ($results as $key=>$value) {
            if($value['id']!=null)
                $list[] = $value["id"];
        }
        $idList = join(",", $list);
        $where .= " AND `id` in ($idList)";
    }else {
        echo '{"state": 101, "info": ' . json_encode("暂无相关信息") . ', "pageInfo": {"totalPage": 0, "totalCount": 0, "totalGray": 0, "totalAudit": 0, "totalRefuse": 0}}';
        die;
    }

    $archives = $dsql->SetQuery("SELECT `id` FROM `#@__info_shopcommon`");

    //总条数
    $totalCount = $dsql->dsqlOper($archives." WHERE 1 = 1".$where, "totalCount");
    //总分页数
    $totalPage = ceil($totalCount/$pagestep);
    //待审核
    $totalGray = $dsql->dsqlOper($archives." WHERE `ischeck` = 0".$where, "totalCount");
    //已审核
    $totalAudit = $dsql->dsqlOper($archives." WHERE `ischeck` = 1".$where, "totalCount");
    //拒绝审核
    $totalRefuse = $dsql->dsqlOper($archives." WHERE `ischeck` = 2".$where, "totalCount");

    if($state != ""){
        $where .= " AND `ischeck` = $state";

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
    $archives = $dsql->SetQuery("SELECT `id`, `pid`, `userid`, `content`, `dtime`, `ip`, `ipaddr`, `ischeck` FROM `#@__info_shopcommon` WHERE 1 = 1".$where);
    $results = $dsql->dsqlOper($archives, "results");

    if(count($results) > 0){
        $list = array();
        foreach ($results as $key=>$value) {
            $list[$key]["id"] = $value["id"];
            $list[$key]["articleId"] = $value["aid"];

            $typeSql = $dsql->SetQuery("SELECT `uid` FROM `#@__infoshop`  WHERE `id` = ". $value["pid"]);
            $typename = $dsql->getTypeName($typeSql);
            $uid = $typename[0]['uid'];
            $member = getMemberDetail($uid);
            $list[$key]["protitle"] = $member['company'];

            $param = array(
                "service"  => "info",
                "template" => "business",
                "id"       => $value['pid']
            );
            $list[$key]["prourl"] = getUrlPath($param);

            $list[$key]["commonUserId"] = $value["userid"];
            $member = $dsql->SetQuery("SELECT `username` FROM `#@__member` WHERE `id` = ".$value["userid"]);
            $username = $dsql->dsqlOper($member, "results");
            $list[$key]["commonUserName"]  = $username[0]["username"] == null ? "游客" : $username[0]["username"];

            $list[$key]["commonContent"] = cn_substrR(strip_tags($value["content"]), 30)."...";
            $list[$key]["commonTime"] = date('Y-m-d H:i:s', $value["dtime"]);
            $list[$key]["commonIp"] = $value["ip"];
            $list[$key]["commonIpAddr"] = $value["ipaddr"];

            $state = "";
            switch($value["ischeck"]){
                case "0":
                    $state = "等待审核";
                    break;
                case "1":
                    $state = "审核通过";
                    break;
                case "2":
                    $state = "审核拒绝";
                    break;
            }

            $list[$key]["commonIsCheck"] = $state;
        }
        if(count($list) > 0){
            echo '{"state": 100, "info": '.json_encode("获取成功").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}, "commonList": '.json_encode($list).'}';
        }else{
            echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
        }
    }else{
        echo '{"state": 101, "info": '.json_encode("暂无相关信息").', "pageInfo": {"totalPage": '.$totalPage.', "totalCount": '.$totalCount.', "totalGray": '.$totalGray.', "totalAudit": '.$totalAudit.', "totalRefuse": '.$totalRefuse.'}}';
    }
    die;
}


//验证模板文件
if(file_exists($tpl."/".$templates)){
    //css
    $cssFile = array(
        'ui/jquery.chosen.css',
        'admin/chosen.min.css'
    );
    $huoniaoTag->assign('cssFile', includeFile('css', $cssFile));
    //js
    $jsFile = array(
        'ui/bootstrap.min.js',
        'ui/jquery-ui-selectable.js',
        'ui/chosen.jquery.min.js',
        'admin/info/shopCommon.js'
    );
    $huoniaoTag->assign('jsFile', includeFile('js', $jsFile));
    $huoniaoTag->assign('cityList', json_encode($adminCityArr));
    $huoniaoTag->compile_dir = HUONIAOROOT."/templates_c/admin/info";  //设置编译目录
    $huoniaoTag->display($templates);
}else{
    echo $templates."模板文件未找到！";
}
