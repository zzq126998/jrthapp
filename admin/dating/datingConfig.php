<?php
/**
 * 交友频道配置
 *
 * @version        $Id: datingConfig.php 2014-6-12 上午9:21:22 $
 * @package        HuoNiao.Dating
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
define('HUONIAOADMIN', "..");
require_once(dirname(__FILE__) . "/../inc/config.inc.php");
checkPurview("datingConfig");
$dsql = new dsql($dbo);
$tpl = dirname(__FILE__) . "/../templates/dating";
$huoniaoTag->template_dir = $tpl; //设置后台模板目录
$templates = "datingConfig.html";

$action = $action == "" ? "dating" : $action;
$dir = "../../templates/" . $action; //当前目录

//删除模板文件夹
if ($action == "delTpl") {
    if ($token == "") die('token传递失败！');
    if ($dopost == "") die('参数传递失败！');

    if (empty($floder)) die('请选择要删除的模板！');

    $dir = "../../templates/" . $dopost; //当前目录
    $floder = $dir . "/" . iconv('utf-8', 'gbk', $floder);
    $deldir = deldir($floder);
    if ($deldir) {
        adminLog("修改交友设置", "删除模板：" . $floder);
        echo '{"state": 100, "info": ' . json_encode("删除成功！") . '}';
    } else {
        echo '{"state": 200, "info": ' . json_encode("删除失败！") . '}';
    }
    die;
}

//频道配置参数
include(HUONIAOINC . "/config/" . $action . ".inc.php");

//异步提交
if ($type != "") {
    if ($token == "") die('token传递失败！');

    if ($type == "site") {
        //基本设置
        $customChannelName = $channelname;
        $customLogo = $articleLogo;
        $customLogoUrl = $litpic;
        $customSharePic = $sharePic;
        $customSubDomain = $subdomain;
        $customChannelDomain = $channeldomain;
        $customChannelSwitch = $channelswitch;
        $customCloseCause = $closecause;

        //seo设置
        $customSeoTitle = $title;
        $customSeoKeyword = $keywords;
        $customSeoDescription = $description;
        $hotline_config = $hotline_rad;
        $customHotline = $hotline;

        //地图配置
        $custom_map = $map;

        if ($customChannelName == "" || $customLogo == "" || $customChannelDomain == "")
            die('{"state": 200, "info": ' . json_encode("请填写完整！") . '}');

        //验证域名是否被使用
        if (!operaDomain('check', $customChannelDomain, $action, 'config'))
            die('{"state": 200, "info": ' . json_encode("域名已被占用，请重试！") . '}');

        adminLog("修改交友设置", "基本设置");

        //单独配置域名
    } elseif ($type == "domain") {

        $customSubDomain = $subdomain;
        $customChannelDomain = $channeldomain;

    } elseif ($type == "temp") {

        //模板风格
        $customTemplate = $articleTemplate;
        $customTouchTemplate = $touchTemplate;

        adminLog("修改交友设置", "模板风格");

    } elseif ($type == "upload") {

        //上传设置
        $customUpload = $articleUpload;

        //自定义
        if ($customUpload == 1) {
            $custom_uploadDir = str_replace('.', '', $uploadDir);
            $custom_softSize = $softSize;
            $custom_softType = $softType;
            $custom_thumbSize = $thumbSize;
            $custom_thumbType = $thumbType;
            $custom_atlasSize = $atlasSize;
            $custom_atlasType = $atlasType;
            $custom_thumbSmallWidth = $thumbSmallWidth;
            $custom_thumbSmallHeight = $thumbSmallHeight;
            $custom_thumbMiddleWidth = $thumbMiddleWidth;
            $custom_thumbMiddleHeight = $thumbMiddleHeight;
            $custom_thumbLargeWidth = $thumbLargeWidth;
            $custom_thumbLargeHeight = $thumbLargeHeight;
            $custom_atlasSmallWidth = $atlasSmallWidth;
            $custom_atlasSmallHeight = $atlasSmallHeight;
            $custom_photoCutType = $photoCutType;
            $custom_photoCutPostion = $photoCutPostion;
            $custom_quality = $quality;

            $custom_softSize = $custom_softSize == "" ? 10240 : $custom_softSize;
            $custom_thumbSize = $custom_thumbSize == "" ? 1024 : $custom_thumbSize;
            $custom_atlasSize = $custom_atlasSize == "" ? 2048 : $custom_atlasSize;
            $custom_thumbSmallWidth = $custom_thumbSmallWidth == "" ? 104 : $custom_thumbSmallWidth;
            $custom_thumbSmallHeight = $custom_thumbSmallHeight == "" ? 80 : $custom_thumbSmallHeight;
            $custom_thumbMiddleWidth = $custom_thumbMiddleWidth == "" ? 240 : $custom_thumbMiddleWidth;
            $custom_thumbMiddleHeight = $custom_thumbMiddleHeight == "" ? 180 : $custom_thumbMiddleHeight;
            $custom_thumbLargeWidth = $custom_thumbLargeWidth == "" ? 400 : $custom_thumbLargeWidth;
            $custom_thumbLargeHeight = $custom_thumbLargeHeight == "" ? 300 : $custom_thumbLargeHeight;
            $custom_atlasSmallWidth = $custom_atlasSmallWidth == "" ? 115 : $custom_atlasSmallWidth;
            $custom_atlasSmallHeight = $custom_atlasSmallHeight == "" ? 75 : $custom_atlasSmallHeight;
            $custom_quality = $custom_quality == "" ? 90 : $custom_quality;

            if ($custom_uploadDir == "" || $custom_softType == "" || $custom_thumbType == "")
                die('{"state": 200, "info": ' . json_encode("请填写完整！") . '}');
        }

        adminLog("修改交友设置", "上传设置");

    } elseif ($type == "ftp") {

        //远程附件
        $customFtp = $articleFtp;

        //自定义
        if ($customFtp == 1) {
            $custom_ftpState = $ftpStateType;
            $custom_ftpType = $ftpType;
            $custom_ftpSSL = $ftpSSL;
            $custom_ftpPasv = $ftpPasv;
            $custom_ftpUrl = $ftpUrl;
            $custom_ftpServer = $ftpServer;
            $custom_ftpPort = $ftpPort;
            $custom_ftpDir = $ftpDir;
            $custom_ftpUser = $ftpUser;
            $custom_ftpPwd = $ftpPwd;
            $custom_ftpTimeout = $ftpTimeout;
            $custom_OSSUrl = $OSSUrl;
            $custom_OSSBucket = $OSSBucket;
            $custom_EndPoint = $EndPoint;
            $custom_OSSKeyID = $OSSKeyID;
            $custom_OSSKeySecret = $OSSKeySecret;
            $custom_QINIUAccessKey = $access_key;
            $custom_QINIUSecretKey = $secret_key;
            $custom_QINIUbucket = $bucket;
            $custom_QINIUdomain = $domain;

            $custom_ftpState = $custom_ftpState == "" ? 0 : $custom_ftpState;
            $custom_ftpType = $custom_ftpType == "" ? 0 : $custom_ftpType;
            $custom_ftpSSL = $custom_ftpSSL == "" ? 0 : $custom_ftpSSL;
            $custom_ftpPasv = $custom_ftpPasv == "" ? 0 : $custom_ftpPasv;
            $custom_ftpPort = $custom_ftpPort == "" ? 21 : $custom_ftpPort;
            $custom_ftpTimeout = $custom_ftpTimeout == "" ? 0 : $custom_ftpTimeout;

            if ($custom_ftpType == 1) {
                if ($custom_OSSUrl == "" || $custom_OSSBucket == "" || $custom_EndPoint == "" || $custom_OSSKeyID == "" || $custom_OSSKeySecret == "")
                    die('{"state": 200, "info": ' . json_encode("请填写完整！") . '}');
            }

            if ($custom_ftpType == 2) {
                if ($custom_QINIUAccessKey == "" || $custom_QINIUSecretKey == "" || $custom_QINIUbucket == "" || $custom_QINIUdomain == "")
                    die('{"state": 200, "info": ' . json_encode("请填写完整！") . '}');
            }

            if ($custom_ftpType == 0 && $custom_ftpState == 1) {
                if ($custom_ftpUrl == "" || $custom_ftpServer == "" || $custom_ftpDir == "" || $custom_ftpUser == "" || $custom_ftpPwd == "")
                    die('{"state": 200, "info": ' . json_encode("请填写完整！") . '}');
            }
        }

        adminLog("修改交友设置", "远程附件");

    } elseif ($type == "mark") {

        //水印设置
        $customMark = $articleMark;

        //自定义
        if ($customMark == 1) {
            $custom_thumbMarkState = $thumbMarkState;
            $custom_atlasMarkState = $atlasMarkState;
            $custom_editorMarkState = $editorMarkState;
            $custom_waterMarkWidth = $waterMarkWidth;
            $custom_waterMarkHeight = $waterMarkHeight;
            $custom_waterMarkPostion = $waterMarkPostion;
            $custom_waterMarkType = $waterMarkType;
            $custom_markText = $markText;
            $custom_markFontfamily = $markFontfamily;
            $custom_markFontsize = $markFontsize;
            $custom_markFontColor = $markFontColor;
            $custom_markFile = $markFile;
            $custom_markPadding = $markPadding;
            $custom_transparent = $transparent;
            $custom_markQuality = $markQuality;

            $custom_thumbMarkState = $custom_thumbMarkState == "" ? 1 : $custom_thumbMarkState;
            $custom_atlasMarkState = $custom_atlasMarkState == "" ? 0 : $custom_atlasMarkState;
            $custom_editorMarkState = $custom_editorMarkState == "" ? 0 : $custom_editorMarkState;
            $custom_waterMarkWidth = $custom_waterMarkWidth == "" ? 400 : $custom_waterMarkWidth;
            $custom_waterMarkHeight = $custom_waterMarkHeight == "" ? 300 : $custom_waterMarkHeight;
            $custom_waterMarkPostion = $custom_waterMarkPostion == "" ? 9 : $custom_waterMarkPostion;
            $custom_waterMarkType = $custom_waterMarkType == "" ? 1 : $custom_waterMarkType;
            $custom_markFontsize = $custom_markFontsize == "" ? 12 : $custom_markFontsize;
            $custom_markPadding = $custom_markPadding == "" ? 10 : $custom_markPadding;
            $custom_markTransparent = $custom_transparent == "" ? 100 : $custom_transparent;
            $custom_markQuality = $custom_markQuality == "" ? 90 : $custom_markQuality;

            if ($custom_waterMarkType == 1) {
                if ($custom_markText == "" || $custom_markFontfamily == "")
                    die('{"state": 200, "info": ' . json_encode("请填写完整！") . '}');
            } elseif ($custom_waterMarkType == 2 || $custom_waterMarkType == 3) {
                if ($custom_markFile == "")
                    die('{"state": 200, "info": ' . json_encode("请填写完整！") . '}');
            }
        }

        adminLog("修改交友设置", "水印设置");

    } elseif ($type == "about") {

        $customAtlasMax = (int)$atlasMax;
        $tagsLength = $tagsLength_ == "" ? 5 : $tagsLength_;
        $graspLength = $graspLength_ == "" ? 10 : $graspLength_;
        $learnLength = $learnLength_ == "" ? 10 : $learnLength_;
        $eventsInfo = $eventsInfo_;

        $goldName = $goldName_ == "" ? "金币" : $goldName_;
        $goldRatio = (int)$goldRatio_;
        if($goldRatio > 100){
          $goldRatio = 100;
        }elseif($goldRatio < 1){
          $goldRatio = 1;
        }
        $keyPrice = (int)$keyPrice_;

        $goldDeposit = $goldDeposit_ == "" ? "6,300,680,1360,2040,2720" : $goldDeposit_;
        $goldDeposit_arr = explode(",", $goldDeposit);
        $arr = array();
        foreach ($goldDeposit_arr as $k => $v) {
          $v = (int)$v;
          if($v){
            $arr[] = $v;
          }
        }
        $goldDeposit = join(",", $arr);
        $leadPrice = $_POST['leadPrice'];
        if(empty($leadPrice)){
            $leadPrice = array();
        }else{
            sort($leadPrice);
        }
        $leadPrice = serialize($leadPrice);

        $extractRatio = $_POST['extractRatio'];
        if(empty($extractRatio)){
            $extractRatio = array();
        }else{
            $err = "";
            $r = array();
            foreach ($extractRatio as $k => $v) {
                $r[$k]['type'] = $v['type'];

                $hn1 = empty($v['hn1']) ? 0 : $v['hn1'];
                $hn2 = empty($v['hn2']) ? 0 : $v['hn2'];
                $u2  = empty($v['u2']) ? 0 : $v['u2'];
                $pt  = empty($v['pt']) ? 100 : $v['pt'];

                if($hn1 < 0 || $hn2 < 0 || $u2 < 0 || $pt < 0){
                    $err = "请检查提成配置";
                    break;
                }

                $t = $hn1 + $hn2 + $u2 + $pt;
                if($t != 100){
                    $err = "请检查提成配置";
                    break;
                }
                $r[$k]['hn1'] = $hn1;
                $r[$k]['hn2'] = $hn2;
                $r[$k]['u2'] = $u2;
                $r[$k]['pt'] = $pt;
            }
            if($err){
                die('{"state": 200, "info": ' . json_encode($err) . '}');
                exit;
            }
            $extractRatio = $r;
        }

        $extractRatio = serialize($extractRatio);

        $withdrawRatio = (float)$withdrawRatio_;
        $withdrawMinAmount = (float)$withdrawMinAmount_;

        $voiceswitch = $_POST['voiceswitch'];
        $videoswitch = $_POST['videoswitch'];

    } elseif ($type == "plat") {
        $plat_title = $_POST['plat_title'];
        $plat_litpic = $_POST['plat_litpic'];
        $plat_service = $_POST['plat_service'];
    }

    //域名操作
    operaDomain('update', $customChannelDomain, $action, 'config');

    //基本设置文件内容
    $customInc = "<" . "?php\r\n";
    //基本设置
    $customInc .= "\$customChannelName = '" . $customChannelName . "';\r\n";
    $customInc .= "\$customLogo = " . $customLogo . ";\r\n";
    $customInc .= "\$customLogoUrl = '" . $customLogoUrl . "';\r\n";
    $customInc .= "\$customSharePic = '" . $customSharePic . "';\r\n";
    $customInc .= "\$customSubDomain = " . $customSubDomain . ";\r\n";
    $customInc .= "\$customChannelSwitch = " . $customChannelSwitch . ";\r\n";
    $customInc .= "\$customCloseCause = '" . $customCloseCause . "';\r\n";
    $customInc .= "\$customSeoTitle = '" . $customSeoTitle . "';\r\n";
    $customInc .= "\$customSeoKeyword = '" . $customSeoKeyword . "';\r\n";
    $customInc .= "\$customSeoDescription = '" . $customSeoDescription . "';\r\n";
    $customInc .= "\$hotline_config = " . $hotline_config . ";\r\n";
    $customInc .= "\$customHotline = '" . $customHotline . "';\r\n";
    $customInc .= "\$customAtlasMax = " . $customAtlasMax . ";\r\n";
    $customInc .= "\$custom_map = " . $custom_map . ";\r\n";
    //模板风格
    $customInc .= "\$customTemplate = '" . $customTemplate . "';\r\n";
    $customInc .= "\$customTouchTemplate = '" . $customTouchTemplate . "';\r\n";
    //上传设置
    $customInc .= "\$customUpload = " . $customUpload . ";\r\n";
    $customInc .= "\$custom_uploadDir = '" . $custom_uploadDir . "';\r\n";
    $customInc .= "\$custom_softSize = " . $custom_softSize . ";\r\n";
    $customInc .= "\$custom_softType = '" . $custom_softType . "';\r\n";
    $customInc .= "\$custom_thumbSize = " . $custom_thumbSize . ";\r\n";
    $customInc .= "\$custom_thumbType = '" . $custom_thumbType . "';\r\n";
    $customInc .= "\$custom_atlasSize = " . $custom_atlasSize . ";\r\n";
    $customInc .= "\$custom_atlasType = '" . $custom_atlasType . "';\r\n";
    $customInc .= "\$custom_thumbSmallWidth = " . $custom_thumbSmallWidth . ";\r\n";
    $customInc .= "\$custom_thumbSmallHeight = " . $custom_thumbSmallHeight . ";\r\n";
    $customInc .= "\$custom_thumbMiddleWidth = " . $custom_thumbMiddleWidth . ";\r\n";
    $customInc .= "\$custom_thumbMiddleHeight = " . $custom_thumbMiddleHeight . ";\r\n";
    $customInc .= "\$custom_thumbLargeWidth = " . $custom_thumbLargeWidth . ";\r\n";
    $customInc .= "\$custom_thumbLargeHeight = " . $custom_thumbLargeHeight . ";\r\n";
    $customInc .= "\$custom_atlasSmallWidth = " . $custom_atlasSmallWidth . ";\r\n";
    $customInc .= "\$custom_atlasSmallHeight = " . $custom_atlasSmallHeight . ";\r\n";
    $customInc .= "\$custom_photoCutType = '" . $custom_photoCutType . "';\r\n";
    $customInc .= "\$custom_photoCutPostion = '" . $custom_photoCutPostion . "';\r\n";
    $customInc .= "\$custom_quality = " . $custom_quality . ";\r\n";
    //远程附件
    $customInc .= "\$customFtp = " . $customFtp . ";\r\n";
    $customInc .= "\$custom_ftpState = " . $custom_ftpState . ";\r\n";
    $customInc .= "\$custom_ftpType = " . $custom_ftpType . ";\r\n";
    $customInc .= "\$custom_ftpSSL = " . $custom_ftpSSL . ";\r\n";
    $customInc .= "\$custom_ftpPasv = " . $custom_ftpPasv . ";\r\n";
    $customInc .= "\$custom_ftpUrl = '" . $custom_ftpUrl . "';\r\n";
    $customInc .= "\$custom_ftpServer = '" . $custom_ftpServer . "';\r\n";
    $customInc .= "\$custom_ftpPort = " . $custom_ftpPort . ";\r\n";
    $customInc .= "\$custom_ftpDir = '" . $custom_ftpDir . "';\r\n";
    $customInc .= "\$custom_ftpUser = '" . $custom_ftpUser . "';\r\n";
    $customInc .= "\$custom_ftpPwd = '" . $custom_ftpPwd . "';\r\n";
    $customInc .= "\$custom_ftpTimeout = " . $custom_ftpTimeout . ";\r\n";
    $customInc .= "\$custom_OSSUrl = '" . $custom_OSSUrl . "';\r\n";
    $customInc .= "\$custom_OSSBucket = '" . $custom_OSSBucket . "';\r\n";
    $customInc .= "\$custom_EndPoint = '" . $custom_EndPoint . "';\r\n";
    $customInc .= "\$custom_OSSKeyID = '" . $custom_OSSKeyID . "';\r\n";
    $customInc .= "\$custom_OSSKeySecret = '" . $custom_OSSKeySecret . "';\r\n";
    $customInc .= "\$custom_QINIUAccessKey = '" . $custom_QINIUAccessKey . "';\r\n";
    $customInc .= "\$custom_QINIUSecretKey = '" . $custom_QINIUSecretKey . "';\r\n";
    $customInc .= "\$custom_QINIUbucket = '" . $custom_QINIUbucket . "';\r\n";
    $customInc .= "\$custom_QINIUdomain = '" . $custom_QINIUdomain . "';\r\n";
    //水印设置
    $customInc .= "\$customMark = " . $customMark . ";\r\n";
    $customInc .= "\$custom_thumbMarkState = " . $custom_thumbMarkState . ";\r\n";
    $customInc .= "\$custom_atlasMarkState = " . $custom_atlasMarkState . ";\r\n";
    $customInc .= "\$custom_editorMarkState = " . $custom_editorMarkState . ";\r\n";
    $customInc .= "\$custom_waterMarkWidth = " . $custom_waterMarkWidth . ";\r\n";
    $customInc .= "\$custom_waterMarkHeight = " . $custom_waterMarkHeight . ";\r\n";
    $customInc .= "\$custom_waterMarkPostion = " . $custom_waterMarkPostion . ";\r\n";
    $customInc .= "\$custom_waterMarkType = " . $custom_waterMarkType . ";\r\n";
    $customInc .= "\$custom_waterMarkText = '" . $custom_markText . "';\r\n";
    $customInc .= "\$custom_markFontfamily = '" . $custom_markFontfamily . "';\r\n";
    $customInc .= "\$custom_markFontsize = " . $custom_markFontsize . ";\r\n";
    $customInc .= "\$custom_markFontColor = '" . $custom_markFontColor . "';\r\n";
    $customInc .= "\$custom_markFile = '" . $custom_markFile . "';\r\n";
    $customInc .= "\$custom_markPadding = " . $custom_markPadding . ";\r\n";
    $customInc .= "\$custom_markTransparent = " . $custom_markTransparent . ";\r\n";
    $customInc .= "\$custom_markQuality = " . $custom_markQuality . ";\r\n";
    // 其它配置
    $customInc .= "\$tagsLength = " . (int)$tagsLength . ";\r\n";
    $customInc .= "\$graspLength = " . (int)$graspLength . ";\r\n";
    $customInc .= "\$learnLength = " . (int)$learnLength . ";\r\n";
    $customInc .= "\$goldName = '" . $goldName . "';\r\n";
    $customInc .= "\$goldRatio = " . (int)$goldRatio . ";\r\n";
    $customInc .= "\$goldDeposit = '" . $goldDeposit . "';\r\n";
    $customInc .= "\$keyPrice = " . (int)$keyPrice . ";\r\n";
    $customInc .= "\$eventsInfo = '" . $eventsInfo . "';\r\n";
    $customInc .= "\$leadPrice = '" . $leadPrice . "';\r\n";
    $customInc .= "\$extractRatio = '" . $extractRatio . "';\r\n";
    $customInc .= "\$withdrawRatio = " . (float)$withdrawRatio . ";\r\n";
    $customInc .= "\$withdrawMinAmount = " . (float)$withdrawMinAmount . ";\r\n";
    $customInc .= "\$voiceswitch = " . (int)$voiceswitch . ";\r\n";
    $customInc .= "\$videoswitch = " . (int)$videoswitch . ";\r\n";

    // 平台信息
    $customInc .= "\$plat_title = '" . $plat_title . "';\r\n";
    $customInc .= "\$plat_litpic = '" . $plat_litpic . "';\r\n";
    $customInc .= "\$plat_service = '" . $plat_service . "';\r\n";

    $customInc .= "?" . ">";

    $customIncFile = HUONIAOINC . "/config/" . $action . ".inc.php";
    $fp = fopen($customIncFile, "w") or die('{"state": 200, "info": ' . json_encode("写入文件 $customIncFile 失败，请检查权限！") . '}');
    fwrite($fp, $customInc);
    fclose($fp);

    die('{"state": 100, "info": ' . json_encode("配置成功！") . '}');
    exit;
}

//验证模板文件
if (file_exists($tpl . "/" . $templates)) {

    //js
    $jsFile = array(
        'ui/bootstrap.min.js',
        'ui/jquery.colorPicker.js',
        'ui/jquery.dragsort-0.5.1.min.js',
        'publicUpload.js',
        'admin/dating/datingConfig.js'
    );
    $huoniaoTag->assign('jsFile', includeFile('js', $jsFile));

    include(HUONIAOINC . "/config/" . $action . ".inc.php");
    global $cfg_basehost;
    global $customUpload;
    if ($customUpload == 1) {
        global $custom_thumbSize;
        global $custom_thumbType;
        $huoniaoTag->assign('thumbSize', $custom_thumbSize);
        $huoniaoTag->assign('thumbType', "*." . str_replace("|", ";*.", $custom_thumbType));
    }

    //基本设置
    $huoniaoTag->assign('channelname', $customChannelName);

    //频道LOGO
    $huoniaoTag->assign('articleLogo', array('0', '1'));
    $huoniaoTag->assign('articleLogoNames', array('系统默认', '自定义'));
    $huoniaoTag->assign('articleLogoChecked', $customLogo);
    $huoniaoTag->assign('articleLogoUrl', $customLogoUrl);

    $huoniaoTag->assign('sharePic', $customSharePic);

    //启用频道域名-单选
    $huoniaoTag->assign('cfg_basehost', $cfg_basehost);
    $huoniaoTag->assign('subdomain', array('0', '1', '2'));
    $huoniaoTag->assign('subdomainNames', array('主域名', '子域名', '子目录'));
    $huoniaoTag->assign('subdomainChecked', $customSubDomain);

    //获取域名信息
    $domainInfo = getDomain($action, 'config');
    $huoniaoTag->assign('channeldomain', $domainInfo['domain']);

    //频道开关-单选
    $huoniaoTag->assign('channelswitch', array('0', '1'));
    $huoniaoTag->assign('channelswitchNames', array('启用', '禁用'));
    $huoniaoTag->assign('channelswitchChecked', $customChannelSwitch);
    $huoniaoTag->assign('closecause', $customCloseCause);

    //seo设置
    $huoniaoTag->assign('title', $customSeoTitle);
    $huoniaoTag->assign('keywords', $customSeoKeyword);
    $huoniaoTag->assign('description', $customSeoDescription);

    //咨询热线
    $huoniaoTag->assign('hotlineVal', array('0', '1'));
    $huoniaoTag->assign('hotlineNames', array('系统默认', '自定义'));
    $huoniaoTag->assign('hotlineChecked', (int)$hotline_config);
    $huoniaoTag->assign('hotline', $customHotline);

    $huoniaoTag->assign('atlasMax', $customAtlasMax);

    //地图配置
    $huoniaoTag->assign('mapList', array(0 => '系统默认', 1 => '谷歌', 2 => '百度', 3 => '腾迅', 4 => '高德'));
    $huoniaoTag->assign('mapSelected', $custom_map);

    global $cfg_map;
    $defaultMap = "";
    switch ($cfg_map) {
        case 1:
            $defaultMap = "谷歌";
            break;
        case 2:
            $defaultMap = "百度";
            break;
        case 3:
            $defaultMap = "腾讯";
            break;
        case 4:
            $defaultMap = "高德";
            break;
    }
    $huoniaoTag->assign('defaultMap', $defaultMap);

    //模板风格
    $floders = listDir($dir);
    $skins = array();
    if (!empty($floders)) {
        $i = 0;
        foreach ($floders as $key => $floder) {
            $config = $dir . '/' . $floder . '/config.xml';
            if (file_exists($config)) {
                //解析xml配置文件
                $xml = new DOMDocument();
                $xml->load($config);
                $data = $xml->getElementsByTagName('Data')->item(0);
                $tplname = $data->getElementsByTagName("tplname")->item(0)->nodeValue;
                $copyright = $data->getElementsByTagName("copyright")->item(0)->nodeValue;

                if(!strstr($floder, '__')) {
                    $skins[$i]['tplname'] = $tplname;
                    $skins[$i]['directory'] = $floder;
                    $skins[$i]['copyright'] = $copyright;
                    $i++;
                }
            }
        }
    }
    $huoniaoTag->assign('tplList', $skins);
    $huoniaoTag->assign('articleTemplate', $customTemplate);


    //touch模板
    $floders = listDir($dir . '/touch');
    $skins = array();
    if (!empty($floders)) {
        $i = 0;
        foreach ($floders as $key => $floder) {
            $config = $dir . '/touch/' . $floder . '/config.xml';
            if (file_exists($config)) {
                //解析xml配置文件
                $xml = new DOMDocument();
                libxml_disable_entity_loader(false);
                $xml->load($config);
                $data = $xml->getElementsByTagName('Data')->item(0);
                $tplname = $data->getElementsByTagName("tplname")->item(0)->nodeValue;
                $copyright = $data->getElementsByTagName("copyright")->item(0)->nodeValue;

                if(!strstr($floder, '__')) {
                    $skins[$i]['tplname'] = $tplname;
                    $skins[$i]['directory'] = $floder;
                    $skins[$i]['copyright'] = $copyright;
                    $i++;
                }
            }
        }
    }
    $huoniaoTag->assign('touchTplList', $skins);
    $huoniaoTag->assign('touchTemplate', $customTouchTemplate);


    //上传设置
    $huoniaoTag->assign('articleUpload', array('0', '1'));
    $huoniaoTag->assign('articleUploadNames', array('系统默认', '自定义'));
    $huoniaoTag->assign('articleUploadChecked', $customUpload);

    $huoniaoTag->assign('uploadDir', $custom_uploadDir);
    $huoniaoTag->assign('softSize', $custom_softSize);
    $huoniaoTag->assign('softType', $custom_softType);
    $huoniaoTag->assign('thumbSize', $custom_thumbSize);
    $huoniaoTag->assign('thumbType_', $custom_thumbType);
    $huoniaoTag->assign('atlasSize', $custom_atlasSize);
    $huoniaoTag->assign('atlasType', $custom_atlasType);
    $huoniaoTag->assign('thumbSmallWidth', $custom_thumbSmallWidth);
    $huoniaoTag->assign('thumbSmallHeight', $custom_thumbSmallHeight);
    $huoniaoTag->assign('thumbMiddleWidth', $custom_thumbMiddleWidth);
    $huoniaoTag->assign('thumbMiddleHeight', $custom_thumbMiddleHeight);
    $huoniaoTag->assign('thumbLargeWidth', $custom_thumbLargeWidth);
    $huoniaoTag->assign('thumbLargeHeight', $custom_thumbLargeHeight);
    $huoniaoTag->assign('atlasSmallWidth', $custom_atlasSmallWidth);
    $huoniaoTag->assign('atlasSmallHeight', $custom_atlasSmallHeight);
    $huoniaoTag->assign('photoCutType', $custom_photoCutType);
    $huoniaoTag->assign('photoCutPostion', $custom_photoCutPostion);
    $huoniaoTag->assign('quality', $custom_quality);

    //远程附件
    $huoniaoTag->assign('articleFtp', array('0', '1'));
    $huoniaoTag->assign('articleFtpNames', array('系统默认', '自定义'));
    $huoniaoTag->assign('articleFtpChecked', $customFtp);

    $huoniaoTag->assign('ftpType', array('0', '1', '2'));
    $huoniaoTag->assign('ftpTypeNames', array('普通FTP模式', '阿里云OSS', '七牛云'));
    $huoniaoTag->assign('ftpTypeChecked', (int)$custom_ftpType);

    $huoniaoTag->assign('ftpStateType', array('0', '1'));
    $huoniaoTag->assign('ftpStateNames', array('否', '是'));
    $huoniaoTag->assign('ftpStateChecked', $custom_ftpState);

    $huoniaoTag->assign('ftpSSL', array('0', '1'));
    $huoniaoTag->assign('ftpSSLNames', array('否', '是'));
    $huoniaoTag->assign('ftpSSLChecked', $custom_ftpSSL);

    $huoniaoTag->assign('ftpPasv', array('0', '1'));
    $huoniaoTag->assign('ftpPasvNames', array('否', '是'));
    $huoniaoTag->assign('ftpPasvChecked', $custom_ftpPasv);

    $huoniaoTag->assign('ftpUrl', $custom_ftpUrl);
    $huoniaoTag->assign('ftpServer', $custom_ftpServer);
    $huoniaoTag->assign('ftpPort', $custom_ftpPort);
    $huoniaoTag->assign('ftpDir', $custom_ftpDir);
    $huoniaoTag->assign('ftpUser', $custom_ftpUser);
    $huoniaoTag->assign('ftpPwd', $custom_ftpPwd);
    $huoniaoTag->assign('ftpTimeout', $custom_ftpTimeout);
    $huoniaoTag->assign('OSSUrl', $custom_OSSUrl);
    $huoniaoTag->assign('OSSBucket', $custom_OSSBucket);
    $huoniaoTag->assign('EndPoint', $custom_EndPoint);
    $huoniaoTag->assign('OSSKeyID', $custom_OSSKeyID);
    $huoniaoTag->assign('OSSKeySecret', $custom_OSSKeySecret);
    $huoniaoTag->assign('access_key', $custom_QINIUAccessKey);
    $huoniaoTag->assign('secret_key', $custom_QINIUSecretKey);
    $huoniaoTag->assign('bucket', $custom_QINIUbucket);
    $huoniaoTag->assign('domain', $custom_QINIUdomain);

    //水印设置
    $huoniaoTag->assign('articleMark', array('0', '1'));
    $huoniaoTag->assign('articleMarkNames', array('系统默认', '自定义'));
    $huoniaoTag->assign('articleMarkChecked', $customMark);

    $huoniaoTag->assign('thumbMarkState', array('0', '1'));
    $huoniaoTag->assign('thumbMarkStateNames', array('关闭', '开启'));
    $huoniaoTag->assign('thumbMarkStateChecked', $custom_thumbMarkState);

    $huoniaoTag->assign('atlasMarkState', array('0', '1'));
    $huoniaoTag->assign('atlasMarkStateNames', array('关闭', '开启'));
    $huoniaoTag->assign('atlasMarkStateChecked', $custom_atlasMarkState);

    $huoniaoTag->assign('editorMarkState', array('0', '1'));
    $huoniaoTag->assign('editorMarkStateNames', array('关闭', '开启'));
    $huoniaoTag->assign('editorMarkStateChecked', $custom_editorMarkState);

    $huoniaoTag->assign('waterMarkWidth', $custom_waterMarkWidth);
    $huoniaoTag->assign('waterMarkHeight', $custom_waterMarkHeight);
    $huoniaoTag->assign('waterMarkPostion', $custom_waterMarkPostion);
    //水印类型-单选
    $huoniaoTag->assign('waterMarkType', array('1', '2', '3'));
    $huoniaoTag->assign('waterMarkTypeNames', array('文字', 'PNG图片', 'GIF图片'));
    $huoniaoTag->assign('waterMarkTypeChecked', $custom_waterMarkType);
    $huoniaoTag->assign('markText', $custom_waterMarkText);

    //水印字体
    $ttfFloder = HUONIAOINC . "/data/fonts/";
    if (is_dir($ttfFloder)) {
        if ($file = opendir($ttfFloder)) {
            $fileArray = array();
            while ($f = readdir($file)) {
                if ($f != '.' && $f != '..') {
                    array_push($fileArray, $f);
                }
            }
            //字体文件-下拉菜单
            $huoniaoTag->assign('markFontfamily', $fileArray);
            $huoniaoTag->assign('markFontfamilySelected', $custom_markFontfamily);
        }
    }

    $huoniaoTag->assign('markFontsize', $custom_markFontsize);
    $huoniaoTag->assign('markFontColor', $custom_markFontColor);

    //水印图片
    $markFloder = HUONIAOINC . "/data/mark/";
    if (is_dir($markFloder)) {
        if ($file = opendir($markFloder)) {
            $fileArray = array();
            while ($f = readdir($file)) {
                if ($f != '.' && $f != '..') {
                    array_push($fileArray, $f);
                }
            }
            //字体文件-下拉菜单
            $huoniaoTag->assign('markFile', $fileArray);
            $huoniaoTag->assign('markFileSelected', $custom_markFile);
        }
    }

    $huoniaoTag->assign('markPadding', $custom_markPadding);
    $huoniaoTag->assign('transparent', $custom_markTransparent);
    $huoniaoTag->assign('markQuality', $custom_markQuality);

    // 其它配置
    $huoniaoTag->assign('tagsLength', $tagsLength);
    $huoniaoTag->assign('graspLength', $graspLength);
    $huoniaoTag->assign('learnLength', $learnLength);
    $huoniaoTag->assign('goldName', $goldName ? $goldName : '金币');
    $huoniaoTag->assign('goldRatio', $goldRatio ? $goldRatio : 1);
    $huoniaoTag->assign('goldDeposit', $goldDeposit);
    $huoniaoTag->assign('eventsInfo', $eventsInfo);
    $huoniaoTag->assign('keyPrice', (int)$keyPrice);

    $huoniaoTag->assign('leadPrice', $leadPrice ? unserialize($leadPrice) : array());
    $huoniaoTag->assign('extractRatio', $extractRatio ? unserialize($extractRatio) : array());
    $huoniaoTag->assign('withdrawRatio', (float)$withdrawRatio);
    $huoniaoTag->assign('withdrawMinAmount', (float)$withdrawMinAmount);

    //语音认证-单选
    $huoniaoTag->assign('voiceswitch', array('0', '1'));
    $huoniaoTag->assign('voiceswitchNames', array('不需要', '需要'));
    $huoniaoTag->assign('voiceswitchChecked', (int)$voiceswitch);

    //视频认证-单选
    $huoniaoTag->assign('videoswitch', array('0', '1'));
    $huoniaoTag->assign('videoswitchNames', array('不需要', '需要'));
    $huoniaoTag->assign('videoswitchChecked', (int)$videoswitch);

    //平台信息
    $huoniaoTag->assign('plat_title', $plat_title);
    $huoniaoTag->assign('plat_litpic', $plat_litpic);
    $huoniaoTag->assign('plat_service', $plat_service);

    // print_r(unserialize($extractRatio));
    // print_r(unserialize($leadPrice));


    $huoniaoTag->assign('action', $action);
    $huoniaoTag->compile_dir = HUONIAOROOT . "/templates_c/admin/dating";  //设置编译目录
    $huoniaoTag->display($templates);
} else {
    echo $templates . "模板文件未找到！";
}
