<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 17:25:28
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/member/touch/index.html" */ ?>
<?php /*%%SmartyHeaderCode:7964968355d455308119266-35852191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e95d2aa3e3ccfae80b82f6d835148af940a846' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/member/touch/index.html',
      1 => 1564476357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7964968355d455308119266-35852191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'cfg_cookiePre' => 0,
    'userinfo' => 0,
    'cfg_ucenterLinks' => 0,
    'is_ios_app' => 0,
    'cfg_ios_shelf' => 0,
    'cfg_hotline' => 0,
    'cfg_fenxiaoState' => 0,
    'cfg_fenxiaoName' => 0,
    'member_busiDomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4553081743b5_83092812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4553081743b5_83092812')) {function content_5d4553081743b5_83092812($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/wx.ziyousuda.com/include/tpl/plugins/modifier.date_format.php';
?>  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][7];?>
 </title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index_3.4.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
  var joinBusiUrl = '<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
</head>

<body>
<div class="mheader">
  <dl class="minfo fn-clear">
    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
    <dt><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'profile'),$_smarty_tpl);?>
"><img onerror="javascript:this.src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/noPhoto_100.jpg';" src="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['photo']=='') {
echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/noPhoto_100.jpg<?php } else {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['photo'])),$_smarty_tpl);
}?>" /></a></dt>
    <dd>
      <h2>
        <a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'profile'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</a>
        <span class="userlevel"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['level']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['levelIcon'];?>
" /><?php }?></span>
      </h2>
      <div class="certify">
        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==1) {?><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][255];?>
</span><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==1) {?><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][7];?>
</span><?php }?>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['level']) {?>
      <div class="levelinfo">[<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['levelName'];?>
]于<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userinfo']->value['expired'],"%Y.%m.%d");?>
到期<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'upgrade'),$_smarty_tpl);?>
">续费</a></div>
      <?php }?>
    </dd>
    <?php } else { ?>
    <h2 class="nlogin">
      <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/login.html"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][0];?>
/<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][0];?>
</a>
    </h2>
    <?php }?>
  </dl>
  <?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/user-<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['userid'];?>
.html" class="homepage"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][13];?>
</a><?php }?>
  <div class="hbg"><i></i><i></i></div>
</div>

<ul class="nav">
  <?php if (in_array('order',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
  <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order'),$_smarty_tpl);?>
"><i class="icon-order"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][359];?>
</a></li>
  <?php }?>
  <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage'),$_smarty_tpl);?>
"><i class="icon-manage"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][22];?>
</a></li>
  <?php if (!$_smarty_tpl->tpl_vars['is_ios_app']->value||!$_smarty_tpl->tpl_vars['cfg_ios_shelf']->value) {?>
  <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'pocket'),$_smarty_tpl);?>
"><i class="icon-account"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][874];?>
</a></li>
  <?php }?>
  <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'collect'),$_smarty_tpl);?>
"><i class="icon-collect"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][240];?>
</a></li>
  <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'qiandao'),$_smarty_tpl);?>
"><i class="icon-qiandao"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][132];?>
</a></li>
</ul>

<ul class="link">
  
  
  <?php if (!$_smarty_tpl->tpl_vars['is_ios_app']->value||!$_smarty_tpl->tpl_vars['cfg_ios_shelf']->value) {?>
  <?php if (!$_smarty_tpl->tpl_vars['userinfo']->value||$_smarty_tpl->tpl_vars['userinfo']->value['userType']==1) {?><li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'upgrade'),$_smarty_tpl);?>
"><i class="icon-vip"></i>会员中心</a></li><?php }?>
  <?php }?>
  
  
  <?php if (!$_smarty_tpl->tpl_vars['is_ios_app']->value||!$_smarty_tpl->tpl_vars['cfg_ios_shelf']->value) {?>
  <?php if (!$_smarty_tpl->tpl_vars['userinfo']->value||$_smarty_tpl->tpl_vars['userinfo']->value['userType']==1) {?><li><a href="javascript:;" class="sjSign"><i class="icon-sign"></i>签约商家</a></li><?php }?>
  <?php }?>
  <li><a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'help'),$_smarty_tpl);?>
"><i class="icon-help"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][273];?>
</a></li>
  <li class="hotline"><a href="tel:<?php echo $_smarty_tpl->tpl_vars['cfg_hotline']->value;?>
"><i class="icon-tel"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][169];?>
</a></li>
  <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security'),$_smarty_tpl);?>
"><i class="icon-security"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][8];?>
</a></li>
  <li id="appSetting" class="fn-hide"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'setting'),$_smarty_tpl);?>
"><i class="icon-setting"></i>系统设置</a></li>
  <?php if ($_smarty_tpl->tpl_vars['cfg_fenxiaoState']->value&&in_array('fenxiao',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
  <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fenxiao'),$_smarty_tpl);?>
"><i class="icon-fenxiao"></i><?php echo $_smarty_tpl->tpl_vars['cfg_fenxiaoName']->value;?>
</a></li>
  <?php }?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==1) {?>
<?php if (!$_smarty_tpl->tpl_vars['is_ios_app']->value||!$_smarty_tpl->tpl_vars['cfg_ios_shelf']->value) {?>
<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
#join" class="qyEnter"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][170];?>
</a>
<?php }?>
<?php } else { ?>
<a href="<?php echo $_smarty_tpl->tpl_vars['member_busiDomain']->value;?>
/?currentPageOpen=1" class="qyEnter"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][170];?>
</a>
<?php }?>
<?php } else { ?>
<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/login.html" class="qyEnter"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][170];?>
</a>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/touch_bottom_4.3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>"member"), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index_3.4.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
