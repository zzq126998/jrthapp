<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 16:55:25
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\business\businessAuthAttr.html" */ ?>
<?php /*%%SmartyHeaderCode:14375157795d53cc7d4a36e8-14115650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b748adf13240df28a2381f6261b6cd9cc0a8e6' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\business\\businessAuthAttr.html',
      1 => 1559204985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14375157795d53cc7d4a36e8-14115650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'typeListArr' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d53cc7d4ef9c7_47176161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d53cc7d4ef9c7_47176161')) {function content_5d53cc7d4ef9c7_47176161($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>商家自定义认证属性</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:20px 10px 0;">
  <li class="row2">&nbsp;</li>
  <li class="row60 left">名称</li>
  <li class="row20">排序</li>
  <li class="row17 left">操 作</li>
</ul>

<form class="list mb50" id="list">
  <ul class="root"></ul>
  <div class="tr clearfix">
    <div class="row2"></div>
    <div class="row80 left"><a href="javascript:;" class="add-type" style="display:inline-block;" id="addNew">添加新属性</a></div>
  </div>
</form>
<div class="fix-btn"><button type="button" class="btn btn-success" id="saveBtn">保存</button></div>

<?php echo '<script'; ?>
>
  var typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
