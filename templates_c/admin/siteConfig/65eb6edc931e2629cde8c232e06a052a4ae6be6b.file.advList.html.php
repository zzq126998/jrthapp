<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:12:54
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\advList.html" */ ?>
<?php /*%%SmartyHeaderCode:17602245155d5103668fead7-19437197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65eb6edc931e2629cde8c232e06a052a4ae6be6b' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\advList.html',
      1 => 1559206108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17602245155d5103668fead7-19437197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'type' => 0,
    'userType' => 0,
    'action' => 0,
    'typeListArr' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510366946f38_32405438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510366946f38_32405438')) {function content_5d510366946f38_32405438($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>管理广告</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="search">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <div class="btn-group" id="typeBtn" data-id="">
    <button class="btn dropdown-toggle" data-toggle="dropdown">全部分类<span class="caret"></span></button>
  </div>
  <button type="button" class="btn btn-success" id="searchBtn">立即搜索</button>
  <?php if (!$_smarty_tpl->tpl_vars['type']->value&&$_smarty_tpl->tpl_vars['userType']->value!=3) {?><a href="advType.php?action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-info ml30" id="typeManage">分类管理</a><?php }?>
</div>

<div class="filter clearfix">
  <div class="f-left">
    <?php if ($_smarty_tpl->tpl_vars['userType']->value!=3) {?>
    <div class="btn-group" id="selectBtn">
      <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="check"></span><span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-id="1">全选</a></li>
        <li><a href="javascript:;" data-id="0">不选</a></li>
      </ul>
    </div>
    <button class="btn" data-toggle="dropdown" id="delBtn">删除</button>
    <a href="advAdd.php?action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="btn btn-primary" id="addNew">新增广告</a>
    <?php }?>
  </div>
  <div class="f-right">
    <div class="btn-group" id="pageBtn">
      <button class="btn dropdown-toggle" data-toggle="dropdown">每页10条<span class="caret"></span></button>
      <ul class="dropdown-menu pull-right">
        <li><a href="javascript:;" data-id="10">每页10条</a></li>
        <li><a href="javascript:;" data-id="15">每页15条</a></li>
        <li><a href="javascript:;" data-id="20">每页20条</a></li>
        <li><a href="javascript:;" data-id="30">每页30条</a></li>
        <li><a href="javascript:;" data-id="50">每页50条</a></li>
        <li><a href="javascript:;" data-id="100">每页100条</a></li>
      </ul>
    </div>
    <button class="btn disabled" data-toggle="dropdown" id="prevBtn">上一页</button>
    <button class="btn disabled" data-toggle="dropdown" id="nextBtn">下一页</button>
    <div class="btn-group" id="paginationBtn">
      <button class="btn dropdown-toggle" data-toggle="dropdown">1/1页<span class="caret"></span></button>
      <ul class="dropdown-menu" style="left:auto; right:0;">
        <li><a href="javascript:;" data-id="1">第1页</a></li>
      </ul>
    </div>
  </div>
</div>

<ul class="thead t100 clearfix">
  <li class="row3">&nbsp;</li>
  <li class="row30">标题</li>
  <li class="<?php if ($_smarty_tpl->tpl_vars['userType']->value!=3) {?>row10<?php } else { ?>row14<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['type']->value) {?>分类<?php } else { ?>模板<?php }?></li>
  <li class="<?php if ($_smarty_tpl->tpl_vars['userType']->value!=3) {?>row10<?php } else { ?>row14<?php }?>">类型</li>
  <li class="<?php if ($_smarty_tpl->tpl_vars['userType']->value!=3) {?>row13<?php } else { ?>row14<?php }?>">开始/结束时间</li>
  <li class="<?php if ($_smarty_tpl->tpl_vars['userType']->value!=3) {?>row13<?php } else { ?>row25<?php }?>">分站广告</li>
  <?php if ($_smarty_tpl->tpl_vars['userType']->value!=3) {?>
  <li class="row9">状态</li>
  <li class="row12">操作</li>
  <?php }?>
</ul>

<div class="list mt124" id="list" data-totalpage="1" data-atpage="1"><table><tbody></tbody></table><div id="loading" class="loading hide"></div></div>

<div id="pageInfo" class="pagination pagination-centered"></div>

<div class="hide">
  <span id="sKeyword"></span>
  <span id="sType"></span>
</div>

<?php echo '<script'; ?>
>
  var typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, action = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", atype = <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
, userType = <?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
;
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>