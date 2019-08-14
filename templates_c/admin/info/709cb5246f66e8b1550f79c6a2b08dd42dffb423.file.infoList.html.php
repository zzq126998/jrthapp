<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:29:17
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\info\infoList.html" */ ?>
<?php /*%%SmartyHeaderCode:15711172865d5363ed012e76-45426837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '709cb5246f66e8b1550f79c6a2b08dd42dffb423' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\info\\infoList.html',
      1 => 1561025624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15711172865d5363ed012e76-45426837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'notice' => 0,
    'typeListArr' => 0,
    'cityList' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5363ed091df9_34535757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5363ed091df9_34535757')) {function content_5d5363ed091df9_34535757($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>管理信息</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="search">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <div class="btn-group" id="typeBtn" data-id="">
    <button class="btn dropdown-toggle" data-toggle="dropdown">全部分类<span class="caret"></span></button>
  </div>
  <select class="chosen-select" id="cityList" style="width: auto;"></select>
  <button type="button" class="btn btn-success" id="searchBtn">立即搜索</button>
  <button class="btn btn-danger" id="delAllGray" style="margin-left:20px;">一键删除待审核</button>
</div>

<div class="filter clearfix">
  <div class="f-left">
    <div class="btn-group" id="selectBtn">
      <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="check"></span><span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-id="1">全选</a></li>
        <li><a href="javascript:;" data-id="0">不选</a></li>
      </ul>
    </div>
    <button class="btn" data-toggle="dropdown" id="delBtn">删除</button>
    <button class="btn" data-toggle="dropdown" id="refreshBtn">更新时间</button>
    <div class="btn-group" id="stateBtn"<?php if ($_smarty_tpl->tpl_vars['notice']->value) {?> data-id="0"<?php }?>>
      <?php if ($_smarty_tpl->tpl_vars['notice']->value) {?>
      <button class="btn dropdown-toggle" data-toggle="dropdown">待审核(<span class="totalGray"></span>)<span class="caret"></span></button>
      <?php } else { ?>
      <button class="btn dropdown-toggle" data-toggle="dropdown">全部信息(<span class="totalCount"></span>)<span class="caret"></span></button>
      <?php }?>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-id="">全部信息(<span class="totalCount"></span>)</a></li>
        <li><a href="javascript:;" data-id="0">待审核(<span class="totalGray"></span>)</a></li>
        <li><a href="javascript:;" data-id="1">已审核(<span class="totalAudit"></span>)</a></li>
        <li><a href="javascript:;" data-id="2">拒绝审核(<span class="totalRefuse"></span>)</a></li>
        <li><a href="javascript:;" data-id="3">取消显示(<span class="totalNoshow"></span>)</a></li>
        <li><a href="javascript:;" data-id="4">已过期(<span class="totalValid"></span>)</a></li>
      </ul>
    </div>
    <div class="btn-group hide" id="batchAudit">
      <button class="btn dropdown-toggle" data-toggle="dropdown">批量审核<span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-id="待审核">待审核</a></li>
        <li><a href="javascript:;" data-id="已审核">已审核</a></li>
        <li><a href="javascript:;" data-id="拒绝审核">拒绝审核</a></li>
        <li><a href="javascript:;" data-id="取消显示">取消显示</a></li>
      </ul>
    </div>
    <a href="javascript:;" class="btn" id="grayObj">待审核(<span class="totalGray">0</span>)</a>
    <a href="infoAdd.php" class="btn btn-primary" id="addNew">发布信息</a>
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
  <li class="row20">标 题</li>
  <li class="row12">分 类</li>
  <li class="row5">价 格</li>
  <li class="row5">城 市</li>
  <li class="row12">审核状态</li>
  <li class="row12">发布人</li>
  <li class="row9">发布IP</li>
  <li class="row12">时 间</li>
  <li class="row10">操 作</li>
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
, cityList = <?php echo $_smarty_tpl->tpl_vars['cityList']->value;?>
, adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
