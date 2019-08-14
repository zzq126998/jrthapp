<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-21 10:20:05
         compiled from "/www/wwwroot/hnup.rucheng.pro/admin/templates/business/businessAuthAttr.html" */ ?>
<?php /*%%SmartyHeaderCode:14143057835d0c3ed5363f57-08678875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9a291d25ea7ffb7006d68a0afd040bfc4f457f' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/admin/templates/business/businessAuthAttr.html',
      1 => 1559204985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14143057835d0c3ed5363f57-08678875',
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
  'unifunc' => 'content_5d0c3ed53859d3_85427594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0c3ed53859d3_85427594')) {function content_5d0c3ed53859d3_85427594($_smarty_tpl) {?><!DOCTYPE html>
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
