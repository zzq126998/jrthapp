<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:32:07
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteModuleDomain.html" */ ?>
<?php /*%%SmartyHeaderCode:15567325515d5107e7800651-81082744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189fa07084cf317cd04aad9df1ce174cc553a2fb' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteModuleDomain.html',
      1 => 1559206053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15567325515d5107e7800651-81082744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'adminPath' => 0,
    'cfg_basehost_' => 0,
    'token' => 0,
    'moduleArr' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5107e78313b3_71464495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5107e78313b3_71464495')) {function content_5d5107e78313b3_71464495($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>模块域名管理</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="search">
  <div class="btn-group">
    <button class="btn dropdown-toggle" data-toggle="dropdown">批量操作<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <!-- <li><a href="javascript:;" data-id="0">主域名</a></li> -->
      <li><a href="javascript:;" data-id="1">子域名</a></li>
      <li><a href="javascript:;" data-id="2">子目录</a></li>
    </ul>
  </div>
  <button type="button" class="btn btn-success">保存全部</button>
</div>
<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:10px 10px 0;">
  <li class="row3">&nbsp;</li>
  <li class="row12 left">模块名称</li>
  <li class="row10 left" style="overflow:visible;">类型</li>
  <li class="row35 left">域名</li>
  <li class="row40 left">操作</li>
</ul>
<div class="list mt124" id="list"><table><tbody><tr><td style="height:200px;" align="center">加载中...</td></tr></tbody></table></div>
<div class="search">
  <div class="btn-group dropup">
    <button class="btn dropdown-toggle" data-toggle="dropdown">批量操作<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <!-- <li><a href="javascript:;" data-id="0">主域名</a></li> -->
      <li><a href="javascript:;" data-id="1">子域名</a></li>
      <li><a href="javascript:;" data-id="2">子目录</a></li>
    </ul>
  </div>
  <button type="button" class="btn btn-success">保存全部</button>
</div>
<?php echo '<script'; ?>
>var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", cfg_basehost = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost_']->value;?>
', token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
', moduleArr = <?php echo $_smarty_tpl->tpl_vars['moduleArr']->value;?>
;<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
