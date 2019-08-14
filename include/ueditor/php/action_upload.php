<?php
/**
 * 上传附件和上传视频
 * User: Jinqn
 * Date: 14-04-09
 * Time: 上午10:17
 */

/* 上传配置 */
$base64 = "upload";
switch (htmlspecialchars($action)) {
    case 'uploadimage':
        $config = array(
            "savePath" => "../../.." . $editor_uploadDir . "/" . $modelType . "/editor/image",
            "maxSize" => $cfg_editorSize,
            "allowFiles" => $cfg_editorType
        );
        $fieldName = $CONFIG['imageFieldName'];
        break;
    case 'uploadscrawl':
        $config = array(
            "savePath" => "../../.." . $editor_uploadDir . "/" . $modelType . "/editor/image",
            "maxSize" => $cfg_editorSize,
            "allowFiles" => $cfg_editorType,
            "oriName" => "scrawl.png"
        );
        $fieldName = $CONFIG['scrawlFieldName'];
        $base64 = "base64";
        break;
    case 'uploadvideo':
        $config = array(
            "savePath" => "../../.." . $editor_uploadDir . "/" . $modelType . "/editor/video",
            "maxSize" => $cfg_videoSize,
            "allowFiles" => $cfg_videoType
        );
        $fieldName = $CONFIG['videoFieldName'];
        break;
    case 'uploadfile':
    default:
        $config = array(
            "savePath" => "../../.." . $editor_uploadDir . "/" . $modelType . "/editor/file",
            "maxSize" => $cfg_softSize,
            "allowFiles" => $cfg_softType
        );
        $fieldName = $CONFIG['fileFieldName'];
        break;
}
/* 生成上传实例对象并完成上传 */
$up = new upload($fieldName, $config, $base64);

$info = $up->getFileInfo();
$url = explode($editor_uploadDir, $info["url"]);

$fid = $path = "";
if ($info["state"] == "SUCCESS") {

    if ($term == "mobile") {
        // $large = $up->smallImg($cfg_meditorPicWidth, 9999, "large", $cfg_quality);
    }

    //获取文件后缀
    $fileClass_ = explode(".", $info["originalName"]);
    $fileClass_ = $fileClass_[count($fileClass_) - 1];
    $fileClass = chkType($fileClass_);

    //对图片文件添加水印
    if (($action == "uploadimage" || $action == "uploadscrawl") && $markConfig['editorMarkState'] == 1 && $fileClass_ != 'gif') {
        $waterMark = $up->waterMark($markConfig);
    }

    //普通FTP模式
    if ($editor_ftpType == 0 && $editor_ftpState == 1) {
        $ftpConfig = array();
        if ($modelType != "siteConfig" && $customFtp == 1 && $custom_ftpState == 1) {
            $ftpConfig = array(
                "on" => $custom_ftpState, //是否开启
                "host" => $custom_ftpServer, //FTP服务器地址
                "port" => $custom_ftpPort, //FTP服务器端口
                "username" => $custom_ftpUser, //FTP帐号
                "password" => $custom_ftpPwd,  //FTP密码
                "attachdir" => $custom_ftpDir,  //FTP上传目录
                "attachurl" => $custom_ftpUrl,  //远程附件地址
                "timeout" => $custom_ftpTimeout,  //FTP超时
                "ssl" => $custom_ftpSSL,  //启用SSL连接
                "pasv" => $custom_ftpPasv  //被动模式连接
            );
        }

        $huoniao_ftp = new ftp($ftpConfig);
        $huoniao_ftp->connect();
        if ($huoniao_ftp->connectid) {
            $huoniao_ftp->upload(HUONIAOROOT . $editor_uploadDir . $url[1], $editor_ftpDir . $url[1]);
        }

        //阿里云OSS
    } elseif ($editor_ftpType == 1) {
        $OSSConfig = array();
        if ($modelType != "siteConfig") {
            $OSSConfig = array(
                "bucketName" => $custom_OSSBucket,
                "endpoint" => $custom_EndPoint,
                "accessKey" => $custom_OSSKeyID,
                "accessSecret" => $custom_OSSKeySecret
            );
        }

        $aliyunOSS = new aliyunOSS($OSSConfig);
        $aliyunOSS->upload($url[1], HUONIAOROOT . $editor_uploadDir . $url[1]);
    } elseif ($editor_ftpType == 2) {
        $autoload = true;
        $accessKey = $custom_QINIUAccessKey;
        $secretKey = $custom_QINIUSecretKey;
        // 构建鉴权对象
        $auth = new \Qiniu\Auth($accessKey, $secretKey);
        // 要上传的空间
        $bucket = $custom_QINIUbucket;
        // 上传到七牛后保存的文件名
        // $key = substr(str_replace('/', '_', $url[1]), 1);
        $key = $url[1];
        // 生成上传 Token
        $token = $auth->uploadToken($bucket,$key);
        // 要上传文件的本地路径
        $filePath = $local_fileUrl;
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new \Qiniu\Storage\UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        $uploadMgr->putFile($token, $key, HUONIAOROOT . $editor_uploadDir . $url[1]);
    }

    $autoload = false;
    $dsql = new dsql($dbo);
    $userLogin = new userLogin($dbo);
    $userid = $userLogin->getMemberID();

    $originalName = ($editor_ftpType == 1 || $editor_ftpType == 2) ? 'is_createface_' : '';
    $attachment = $dsql->SetQuery("INSERT INTO `#@__attachment` (`userid`, `filename`, `filetype`, `filesize`, `path`, `pubdate`) VALUES ('$userid', '" . $info["originalName"] . "', '" . $fileClass . "', '" . $info["size"] . "', '" . $url[1] . "', '" . GetMkTime(time()) . "')");
    $aid = $dsql->dsqlOper($attachment, "lastid");
    if (!$aid) die('{"state":"数据写入失败！"}');

    $RenrenCrypt = new RenrenCrypt();
    $fid = base64_encode($RenrenCrypt->php_encrypt($aid));

    $path = $cfg_attachment . $fid;

    //20160128修复编辑器输出域名问题
    global $cfg_basehost;
    $cfg_attachment = str_replace("http://" . $cfg_basehost, "", $cfg_attachment);
    $attachmentPath = str_replace("https://" . $cfg_basehost, "", $cfg_attachment);
    $path = $attachmentPath . $fid;


    //如果是视频文件则输出真实路径
    if ($action == "uploadvideo") {
        // $path = $site_fileUrl.$url[1];
        $path = getFilePath($fid);
    }
}

$turl = getFilePath($fid);
$videoimg = $editor_ftpType == 1 ? $turl."?x-oss-process=video/snapshot,t_0,f_jpg,w_0,h_0,m_fast" : ($editor_ftpType == 2 ? "?vframe/jpg/offset/1/rotate/auto" : str_replace(".mp4", ".png", $turl));
PutCookie('ftpType', $editor_ftpType, 3600);
return json_encode(array(
    "url" => $path,
    "turl" => $turl,
    "videoimg" => $videoimg,
    "original" => $info["originalName"],
    "name" => $info["originalName"],
    "type" => $info["type"],
    "size" => $info["size"],
    "state" => $info["state"]
));



//判断文件类型
function chkType($f = NULL)
{
    if (!empty($f)) {
        $f = strtolower($f);
        global $cfg_softType;
        global $cfg_thumbType;
        $flashType = "swf";
        global $cfg_audioType;
        global $cfg_videoType;

        $thumbType_ = explode("|", $cfg_thumbType);
        $flashType_ = explode("|", $flashType);
        $audioType_ = explode("|", $cfg_audioType);

        if (in_array($f, $cfg_softType)) return "file";
        if (in_array($f, $thumbType_)) return "image";
        if (in_array($f, $flashType_)) return "flash";
        if (in_array($f, $audioType_)) return "audio";
        if (in_array($f, $cfg_videoType)) return "video";
    } else {
        return "file";
    }
}
