<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:30:34
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\store.html" */ ?>
<?php /*%%SmartyHeaderCode:6039015115d51078ab2fb29-56608004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf327d55897bac164d4a097000b314e03d64a806' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\store.html',
      1 => 1559206089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6039015115d51078ab2fb29-56608004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'redirectUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d51078ab5c9f7_57313767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d51078ab5c9f7_57313767')) {function content_5d51078ab5c9f7_57313767($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>商店</title>
<style media="screen">
  .redirect {font-size: 14px; padding: 100px 0; font-family: 'microsoft yahei'; text-align: center; color: green;}
</style>
</head>
<body>
<div class="redirect">正在进入商店，请稍候...</div>
<?php echo '<script'; ?>
 type="text/javascript">
if(self.location == top.location){
  location.href = "../index.php?gotopage=siteConfig/store.php";
}else{
  location.href = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
';
}
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
