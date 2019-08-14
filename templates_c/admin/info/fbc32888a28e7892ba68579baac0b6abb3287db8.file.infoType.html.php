<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:29:14
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\info\infoType.html" */ ?>
<?php /*%%SmartyHeaderCode:1652997035d5363ea14fd14-00216103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc32888a28e7892ba68579baac0b6abb3287db8' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\info\\infoType.html',
      1 => 1561025624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652997035d5363ea14fd14-00216103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'typeListArr' => 0,
    'action' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5363ea1af885_69768975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5363ea1af885_69768975')) {function content_5d5363ea1af885_69768975($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>信息分类</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
.list .tr .left em {font-style: normal; margin-right: 5px;}
.row67 {width:67%;}
.upfile {margin-left:5px;}
</style>
</head>

<body>
<div class="search" style="position:relative;">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <button type="button" class="btn btn-success" id="searchBtn">搜索</button>
  <button type="button" class="btn btn-danger" id="batch" style="margin-left: 50px;">批量删除</button>
  <div class="tool">
    <a href="javascript:;" class="add-type" style="display:inline-block;" id="addNew_">添加新分类</a>&nbsp;|&nbsp;<a href="javascript:;" id="unfold">全部展开</a>&nbsp;|&nbsp;<a href="javascript:;" id="away">全部收起</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-error">注：请在最后一级设置字段，否则没有效果！</span>
  </div>
</div>

<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:0 10px;">
  <li class="row3">&nbsp;</li>
  <li class="row50 left">分类名称</li>
  <li class="row10">字段</li>
  <li class="row7 right">修改</li>
  <li class="row15">排序</li>
  <li class="row10 left">删除</li>
</ul>

<form class="list mb50" id="list" style="margin-top:-10px;">
  <ul class="root"></ul>
  <div class="tr clearfix">
    <div class="row3"></div>
    <div class="row80 left"><a href="javascript:;" class="add-type" style="display:inline-block;" id="addNew">添加新分类</a></div>
  </div>
</form>
<div class="fix-btn"><button type="button" class="btn btn-success" id="saveBtn">保存</button></div>

<?php echo '<script'; ?>
>
  var typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="editForm" type="text/html">
  <form action="" class="quick-editForm" name="editForm">
    <dl class="clearfix">
      <dt>分类名称：</dt>
      <dd><input class="input-xlarge" type="text" name="typename" id="typename" maxlength="30" value="" /></dd>
    </dl>
    <dl class="clearfix hide">
      <dt>上级分类：</dt>
      <dd><select name="parentid" id="parentid" class="input-large"></select></dd>
    </dl>
    <dl class="clearfix">
      <dt>seotitle：</dt>
      <dd><input class="input-xlarge" type="text" name="seotitle" id="seotitle" value="" /></dd>
    </dl>
    <dl class="clearfix">
      <dt>keywords：</dt>
      <dd><input class="input-xlarge" type="text" name="keywords" id="keywords" value="" /></dd>
    </dl>
    <dl class="clearfix">
      <dt>description：</dt>
      <dd><textarea name="description" class="input-xlarge" id="description"></textarea></dd>
    </dl>
  </form>
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
