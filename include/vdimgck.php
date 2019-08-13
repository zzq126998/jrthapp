<?php
/**
 * 验证码
 *
 * @version        $Id: vdimgck.php 2013-7-7 上午10:33:36 $
 * @package        HuoNiao.Libraries
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
session_start();
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
ini_set('display_errors', 'Off');

require_once (dirname(__FILE__).'/config/siteConfig.inc.php');
require_once (dirname(__FILE__).'/class/vdimgck.class.php');

$config = array(
    'seccodetype'     => (int)$cfg_seccodetype,        // 1:数字  2:字母  3:汉字  4:算术
    'seccodewidth'    => (int)$cfg_seccodewidth,       // 宽
    'seccodeheight'   => (int)$cfg_seccodeheight,      // 高
    'seccodefamily'   => dirname(__FILE__).'/data/fonts/'.$cfg_seccodefamily,  // 字体
	'scecodeangle'    => (int)$cfg_scecodeangle,       // 随机倾斜度
 	'scecodewarping'  => (int)$cfg_scecodewarping,     // 随机扭曲
	'scecodeshadow'   => (int)$cfg_scecodeshadow,      // 文字阴影
	'scecodeanimator' => (int)$cfg_scecodeanimator);   // GIF动画

$vdimgck = new vdimgck($config);
$vdimgck->display();
