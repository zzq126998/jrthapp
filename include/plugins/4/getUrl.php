<?php
/**
 * http://localhost/spider/getUrl.php?node=
 * 根据节点获取列表页url
 */
//error_reporting(E_ALL ^ E_NOTICE);

require_once('../../common.inc.php');
require_once './common.php';

define('HUONIAOADMIN', ".");

$dsql                     = new dsql($dbo);
$userLogin                = new userLogin($dbo);
$tpl                      = dirname(__FILE__) . "/tpl";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates                = "getUrl.html";
$user_id = $userLogin->getUserID();
if($user_id == -1) {
    ShowMsg("登录超时，请重新登录！", 'javascript:;');exit;
}
$err     = false;
$node_id = isset($_GET['node']) ? $_GET['node'] == '' ? $err = true : $_GET['node'] : $err = true;
$type    = isset($_GET['type']) ? $_GET['type'] == '' ? $err = true : $_GET['type'] : $err = true;
if ($err) returnJson(['code' => 201, 'msg' => '参数错误']);
//获取该节点的信息
$nodeInfo = getNode($node_id);

if (!count($nodeInfo)) die(json_encode(['code' => 201, 'msg' => '节点不存在'], JSON_UNESCAPED_UNICODE));

if ($type == 1 || $type == 2) {
    //采集多个界面
    $page_start = $_POST['page_start'];
    $page_end   = $_POST['page_end'];

    $rule_url = $nodeInfo['list_page_url_rule'];
    $sign     = '(*)';
    $urlRes   = [];

    //domain
    $domain = parse_url($nodeInfo['list_page_url_rule'])['host'];

    for ($i = $page_start; $i <= $page_end; $i++) {
        $listUrls = str_replace($sign, $i, $rule_url);
        $html     = downOnePage($listUrls);

        if (!$html) $html = strToUtf8(file_get_contents($listUrls));
        //截取正文
        $body = getBody($html);
        //获取所有url

        $urls = getUrls($body,  $domain);
        if ($urls) {
            foreach ($urls as $url) {
                $urlRes[] = $url;
            }
        }

    }


} else if ($type == 3) {
    //请求html
    $lostHtml = unserialize($nodeInfo['list_page_url']);

    $html = downOnePage($lostHtml[0]);
    if (!$html) $html = strToUtf8(file_get_contents($lostHtml[0]));

    if (!$html)
        $html = curl_get_copy($lostHtml[0]);
    //domain
    $domain = parse_url($lostHtml[0])['host'];

    //截取正文
    $body = getBody($html);
    //匹配所有url
    $urls = getUrls($body, $domain);



    foreach ($urls as $url) {
        $urlRes[] = $url;
    }


}
if ($urlRes) {
    $urlss  = array_slice($urlRes, 0, 10);
    $urlRes = serialize($urlRes);
    file_put_contents('./cache/' . $node_id . '.txt', $urlRes);
} else {
    $urlss = '';
}


$huoniaoTag->assign('cfg_staticPath', $cfg_staticPath);

$huoniaoTag->assign('urls', $urlss);
$huoniaoTag->assign('nodeInfo', $nodeInfo);
$huoniaoTag->display($templates);


/**
 * 获取节点下面的url
 * @param $node_id
 * @return array
 */
function getUrl($node_id)
{
    global $dsql;
    $sql  = "SELECT * from `#@__site_plugins_spider_nodes` where id = $node_id";
    $sqls = $dsql->SetQuery($sql);
    $res  = $dsql->dsqlOper($sqls, "results");
    return $res;
}

/**
 * 获取所有的链接
 */
function getUrls($html, $domain)
{
    global $nodeInfo;
    if ($html == false) return '';
    if (is_array($html)) {
        //递归处理多维数组转换一维
        $urls = changeArr($html);
    } else {
        $pattern = '/<a.+?href=\"(.+?)\">/i';
        preg_match_all($pattern, $html, $mat);
        unset($mat[1], $mat[3], $mat[2], $mat[4]);
        $urls = $mat[0];
        $urls_ = [];
        $pattern_ = '/href=\"([^\"]+)/';
        foreach ($urls as $url){
            preg_match_all($pattern_, $url, $mat_);
            $urls_[] = $mat_[1][0];
        }
    }

    //删除不包括的
    foreach ($urls_ as $k => $url) {
        $not_include = $nodeInfo['not_include'];
        if ($not_include !== '') {
            if (strstr($url, $not_include)) {
                unset($urls_[$k]);
            }
        }
    }
    //判断是否包含必须包含的
    if ($nodeInfo['must_include'] !== '') {
        foreach ($urls_ as $k => $url) {
            if (!strstr($url, $nodeInfo['must_include'])) {
                unset($urls_[$k]);
            }
        }
    }
    //删除重复
    $urls_ = array_unique($urls_);

    foreach ($urls_ as &$item) {
        if(!isset(parse_url($item)['scheme'])){
            $item = $domain . $item;
        }
    }

    return $urls_;
}

/**
 * 获取节点信息
 * @param $id
 * @return array
 */
function getNode($id)
{
    global $dsql;
    $sql  = "select * from `#@__site_plugins_spider_nodes` where id = $id";
    $sqls = $dsql->SetQuery($sql);
    $res  = $dsql->dsqlOper($sqls, "results");
    return isset($res[0]) ? $res[0] : '';
}


/**
 * 获取文章正文
 * @param $html
 * @return bool|string
 */
function getBody($html)
{
    global $nodeInfo;
    if ($nodeInfo['type'] == 3 || $nodeInfo['type'] == 1) {
        //采集非json
        $start = strpos($html, $nodeInfo['list_start_sign']) + strlen($nodeInfo['list_start_sign']);
        $end   = strpos($html, $nodeInfo['list_end_sign']) - strlen($nodeInfo['list_end_sign']);
        $body  = substr($html, $start, $end - $start);
        return $body;
    } else if ($nodeInfo['type'] == 2) {
        //采集json
        $html = strval($html);
        $str  = str_replace($nodeInfo['list_start_sign'], "", $html);
        $body = str_replace($nodeInfo['list_end_sign'], "", $str);
        $arr  = json_decode($body, true);
        //若不是数组或者对象，表示解析失败
        if (!is_array($arr) && !is_object($arr)) {
            $html = stripslashes(stripslashes($html)); //去除转义字符
            $arr  = json_reg($html);
            if (is_array($arr) && array_key_exists('json', $arr)) {
                //解码json
                $arr = changeJsonToArr($arr['json']);
            }
        }
        return $arr;
    }

}


