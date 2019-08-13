<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:33:46
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\homemaking\skin1\index.html" */ ?>
<?php /*%%SmartyHeaderCode:634504515d51084ab04415-52303405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f94f135da5c8bae2eb7afd333055667f30d6c5fe' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\homemaking\\skin1\\index.html',
      1 => 1558101926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '634504515d51084ab04415-52303405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'homemaking_channelName' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_webname' => 0,
    'homemaking_logoUrl' => 0,
    'cfg_shortname' => 0,
    'langData' => 0,
    'cfg_appname' => 0,
    'cfg_weixinCode' => 0,
    'cfg_weixinQr' => 0,
    'cfg_powerby' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d51084ab6fb19_19086557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d51084ab6fb19_19086557')) {function content_5d51084ab6fb19_19086557($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['homemaking_channelName']->value;?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="bgfff">
    <div class="wrap">
      <div class="header fn-clear">
        <div class="logo">
  				<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['homemaking_logoUrl']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
"><h2><?php echo $_smarty_tpl->tpl_vars['cfg_shortname']->value;?>
</h2></a>
  			</div>
        <div class="navbar">
          <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][5];?>
</a>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="bg bg1"></div>
    <div class="bg bg2"></div>
    <div class="wrap">
      <div class="fn-clear">
        <div class="slideBox" id="slideBox">
          <div class="bd">
            <ul>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide1.png" alt=""></a></li>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide2.png" alt=""></a></li>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide3.png" alt=""></a></li>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide4.png" alt=""></a></li>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide5.png" alt=""></a></li>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide6.png" alt=""></a></li>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide7.png" alt=""></a></li>
              <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/slide8.png" alt=""></a></li>
            </ul>
          </div>
          <div class="slide_bg"></div>
        </div>
        <div class="rightBox fn-right">
          <p class="title">下载<?php echo $_smarty_tpl->tpl_vars['cfg_appname']->value;?>
APP，享受更多服务~</p>
          <ul class="fn-clear">
            <li>
              <p class="tit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][0][4];?>
</p>
              <p class="gray">ios/Android</p>
              <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'mobile'),$_smarty_tpl);?>
" alt="" class="code">
              <p class="info"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][0][7];?>
</p>
            </li>
            <li>
              <p class="tit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][0][5];?>
</p>
              <p class="gray"><?php echo $_smarty_tpl->tpl_vars['cfg_weixinCode']->value;?>
</p>
              <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
" alt="" class="code">
              <p class="info"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][0][8];?>
</p>
            </li>
            <li>
              <p class="tit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][0][6];?>
</p>
              <p class="gray"><?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
</p>
              <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" alt="" class="code">
              <p class="info"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][0][9];?>
</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="copyright"><?php echo $_smarty_tpl->tpl_vars['cfg_powerby']->value;?>
</div>
    </div>
  </div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" charset="utf-8"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
