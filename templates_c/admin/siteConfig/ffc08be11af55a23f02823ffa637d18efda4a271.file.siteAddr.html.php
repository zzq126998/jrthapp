<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:32:30
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteAddr.html" */ ?>
<?php /*%%SmartyHeaderCode:4816899715d5107fe7f0754-52927739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffc08be11af55a23f02823ffa637d18efda4a271' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteAddr.html',
      1 => 1559205989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4816899715d5107fe7f0754-52927739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'pid' => 0,
    'pname' => 0,
    'province' => 0,
    'p' => 0,
    'cid' => 0,
    'cname' => 0,
    'city' => 0,
    'c' => 0,
    'did' => 0,
    'dname' => 0,
    'district' => 0,
    'd' => 0,
    'typeListArr' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5107fe84e388_87963550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5107fe84e388_87963550')) {function content_5d5107fe84e388_87963550($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>网站地区</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
.list .tr .markditu {margin-left: 50px;}
.tooltip.bottom {white-space: normal;}
</style>
</head>

<body>
<!-- <div class="search" style="position:relative;">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <button type="button" class="btn btn-success" id="searchBtn">搜索</button>
  <button type="button" class="btn btn-danger" id="batch" style="margin-left: 50px;">批量删除</button>
  <div class="tool">
    <a href="javascript:;" class="add-type" style="display:inline-block;" id="addNew_">添加新区域</a>&nbsp;|&nbsp;<a href="javascript:;" id="unfold">全部展开</a>&nbsp;|&nbsp;<a href="javascript:;" id="away">全部收起</a>
  </div>
</div> -->

<div class="search" style="padding: 15px 10px;">
  <label>选择区域：</label>
  <div class="btn-group" id="pBtn" data-id="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
">
    <button class="btn dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="">--省份--</a></li>
      <?php if ($_smarty_tpl->tpl_vars['province']->value) {?>
      <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
      <li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['typename'];?>
</a></li>
      <?php } ?>
      <?php }?>
    </ul>
  </div>
  <div class="btn-group" id="cBtn" data-id="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
    <button class="btn dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="">--城市--</a></li>
      <?php if ($_smarty_tpl->tpl_vars['city']->value) {?>
      <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
      <li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['typename'];?>
</a></li>
      <?php } ?>
      <?php }?>
    </ul>
  </div>
  <div class="btn-group" id="dBtn" data-id="<?php echo $_smarty_tpl->tpl_vars['did']->value;?>
">
    <button class="btn dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['dname']->value;?>
<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="">--州县 --</a></li>
      <?php if ($_smarty_tpl->tpl_vars['district']->value) {?>
      <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['district']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
      <li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['typename'];?>
</a></li>
      <?php } ?>
      <?php }?>
    </ul>
  </div>
  <button type="button" class="btn btn-danger" id="batch" style="margin-left: 80px;">批量删除</button>
</div>

<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:0 10px;">
  <li class="row2">&nbsp;</li>
  <li class="row60 left">名称<small style="margin-left: 153px;"><a href="https://yiqixie.com/s/home/fcADDb2ccVZ4LxOkVds0z8UOz" target="_blank">获取城市天气ID</a></small><small class="lnglatTips" style="margin-left: 60px;" data-toggle="tooltip" data-placement="bottom" title="此数据均由系统自动采集获取而来，数据准确度请根据实际使用情况做出调整！">区域经纬度 <i class="icon-question-sign"></i></small></li>
  <li class="row20">排序</li>
  <li class="row17 left">操 作</li>
</ul>

<form class="list mb50" id="list">
  <ul class="root"></ul>
  <div class="tr clearfix">
    <div class="row2"></div>
    <div class="row80 left"><a href="javascript:;" class="add-type" style="display:inline-block;" id="addNew">添加新区域</a></div>
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

<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $('.lnglatTips').tooltip();
})
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
