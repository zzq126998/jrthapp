<?php
//系统核心配置文件
require_once(dirname(__FILE__).'/../include/common.inc.php');
$autoload = true;

function classLoader($class){
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/upload/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');

require_once(dirname(__FILE__).'/upload/Qiniu/functions.php');

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;

global $cfg_wechatAppid;
global $cfg_wechatAppsecret;
global $cfg_uploadDir;
global $cfg_basehost;

$media_id = $_POST["media_id"];
$module   = $_POST["module"];
$module   = empty($module) ? "siteConfig" : $module;

if(empty($media_id)) die(json_encode(array("state" => 200, "info" => "微信配置错误！")));

$sql = $dsql->SetQuery("SELECT * FROM `#@__app_audio_video_config` LIMIT 0, 1");
$ret = $dsql->dsqlOper($sql, "results");
if($ret){
    $data = $ret[0];
    $access_key    = $data['access_key'];
    $secret_key    = $data['secret_key'];
    $bucket        = $data['bucket'];
    $pipeline      = $data['pipeline'];
    $domain        = $data['domain'];
    $audio_quality = $data['audio_quality'];
}else{
    die(json_encode(array("state" => 200, "info" => "请先配置APP音视频处理参数！")));
}

if($cfg_wechatAppid && $cfg_wechatAppsecret){
    include HUONIAOINC."/class/WechatJSSDK.class.php";
    $jssdk = new WechatJSSDK($cfg_wechatAppid, $cfg_wechatAppsecret);
    $access_token = $jssdk->getAccessToken();

    //微信上传下载媒体文件
    $url = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token={$access_token}&media_id={$media_id}";


    //保存的路径及文件名
    $dir = $cfg_uploadDir . "/audio/weixin/";
    $name = time() . rand(1, 10000) . ".amr";

    if(!is_dir(HUONIAOROOT . $dir)){
        if (!@mkdir(HUONIAOROOT . $dir, 0777, true)){
          die(json_encode(array("state" => 200, "info" => "服务器没有创建文件夹权限！")));
        }
    }

    /* 下载文件 */
    include HUONIAOINC."/class/httpdown.class.php";
    $httpdown = new httpdown();
  	$httpdown->OpenUrl($url); # 远程文件地址
  	$httpdown->SaveToBin(HUONIAOROOT . $dir . $name); # 保存路径及文件名
  	$httpdown->Close(); # 释放资源

    //七牛转码
    $auth = new Auth($access_key, $secret_key);
    $newName = create_sess_id();
    $savekey = Qiniu\base64_urlSafeEncode($bucket.':'.$newName.'.mp3');

    //设置转码参数
    $fops = "avthumb/mp3/ab/{$audio_quality}k/ar/44100/acodec/libmp3lame";
    $fops = $fops.'|saveas/'.$savekey;

    $policy = array(
        'persistentOps' => $fops,
        'persistentPipeline' => $pipeline
    );

    //指定上传转码命令
    $uptoken = $auth->uploadToken($bucket, null, 3600, $policy);
    $key = $media_id.'.amr'; //七牛云中保存的amr文件名
    $uploadMgr = new UploadManager();
    list($ret, $err) = $uploadMgr->putFile($uptoken, $key, HUONIAOROOT . $dir . $name);

    if ($err !== null) {
        echo json_encode(array("state" => 200, "info" => "上传失败！"));
    }else{

        //此时七牛云中同一段音频文件有amr和MP3两个格式的两个文件同时存在
        $bucketMgr = new BucketManager($auth);

        //为节省空间,删除amr格式文件
        //不要删除，删除会影响七牛云转码，因为在转码过程中，如果将此文件删除，会导致转码失败
        // $bucketMgr->delete($bucket, $key);

        //删除服务器上的amr文件
        @unlink(HUONIAOROOT . $dir . $name);

        //由于使用七牛的地址直接播放会有延迟的问题，所以这里多做了一步从七牛再下载到本地的操作
        // $file->OpenUrl("http://{$domain}/{$newName}.mp3"); # 远程文件地址
        // $file->SaveToBin(HUONIAOROOT . $dir . $newName . ".mp3"); # 保存路径及文件名
        // $file->Close(); # 释放资源

        //验证文件是否下载成功
        // if(!file_exists(HUONIAOROOT . $dir . $newName . ".mp3")){
        // 	echo json_encode(array("state" => 200, "info" => "云端下载失败！"));
        // }else{
        	echo json_encode(array("state" => 100, "info" => "http://{$domain}/{$newName}.mp3"));
        // }
    }

}else{
    echo json_encode(array("state" => 200, "info" => "微信配置错误！"));
}
