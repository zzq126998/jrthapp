<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:12:51
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\article\articleCommon.html" */ ?>
<?php /*%%SmartyHeaderCode:1830036715d5103633e06d0-16462414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d1de8bfafdeaccc4ab576a4a0d4ce83e5fcbc1' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\article\\articleCommon.html',
      1 => 1561025629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830036715d5103633e06d0-16462414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'action' => 0,
    'adminPath' => 0,
    'cityList' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d51036340f4f8_81557295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d51036340f4f8_81557295')) {function content_5d51036340f4f8_81557295($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>新闻评论管理</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="search">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <div class="btn-group" id="typeBtn" data-id="0">
    <button class="btn dropdown-toggle" data-toggle="dropdown">评论内容<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="0">评论内容</a></li>
      <li><a href="javascript:;" data-id="1">文章标题</a></li>
      <li><a href="javascript:;" data-id="2">评论人</a></li>
      <li><a href="javascript:;" data-id="3">评论IP</a></li>
    </ul>
  </div>
  <select class="chosen-select" id="cityList" style="width: auto;"></select>
  <button type="button" class="btn btn-success" id="searchBtn">立即搜索</button>
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
    <button class="btn" id="delBtn">删除</button>
    <div class="btn-group" id="stateBtn">
      <button class="btn dropdown-toggle" data-toggle="dropdown">全部信息(<span class="totalCount"></span>)<span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-id="">全部信息(<span class="totalCount"></span>)</a></li>
        <li><a href="javascript:;" data-id="0">待审核(<span class="totalGray"></span>)</a></li>
        <li><a href="javascript:;" data-id="1">已审核(<span class="totalAudit"></span>)</a></li>
        <li><a href="javascript:;" data-id="2">拒绝审核(<span class="totalRefuse"></span>)</a></li>
      </ul>
    </div>
    <div class="btn-group hide" id="batchAudit">
      <button class="btn dropdown-toggle" data-toggle="dropdown">批量审核<span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-id="待审核">待审核</a></li>
        <li><a href="javascript:;" data-id="已审核">已审核</a></li>
        <li><a href="javascript:;" data-id="拒绝审核">拒绝审核</a></li>
      </ul>
    </div>
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
    <button class="btn dropdown-toggle disabled" data-toggle="dropdown" id="prevBtn">上一页</button>
    <button class="btn dropdown-toggle disabled" data-toggle="dropdown" id="nextBtn">下一页</button>
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
  <li class="row35">评论内容</li>
  <li class="row12 left">评论人</li>
  <li class="row17 left">评论IP</li>
  <li class="row13 left">评论时间</li>
  <li class="row10">状态</li>
  <li class="row10">操 作</li>
</ul>

<div class="list common mt124" id="list" data-totalpage="1" data-atpage="1"><table><tbody></tbody></table><div id="loading" class="loading hide"></div></div>

<div id="pageInfo" class="pagination pagination-centered"></div>

<div class="hide">
  <span id="sKeyword"></span>
  <span id="sType">0</span>
</div>

<?php echo '<script'; ?>
 id="quickEdit" type="text/html">
  <form action="" class="quick-editForm" name="editForm">
    <dl class="clearfix">
      <dt>评论文章 ：</dt>
      <dd id="articleTitle"></dd>
    </dl>
    <dl class="clearfix">
      <dt>评论用户：</dt>
      <dd id="commonUser"></dd>
    </dl>
    <dl class="clearfix">
      <dt>评论内容：</dt>
      <dd><textarea id="commonContent" name="commonContent" style="width:90%; height:100px;" /></textarea></dd>
    </dl>
	<dl class="clearfix">
      <dt>评论时间：</dt>
      <dd><input type="text" id="commonTime" name="commonTime" class="input-medium" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论IP：<input type="text" id="commonIp" name="commonIp" class="input-medium" /></dd>
    </dl>
	<dl class="clearfix">
      <dt>顶：</dt>
      <dd><input type="number" min="0" id="commonGood" name="commonGood" class="input-mini" />&nbsp;&nbsp;&nbsp;踩：<input type="number" min="0" id="commonBad" name="commonBad" class="input-mini" /></dd>
    </dl>
	<dl class="clearfix">
      <dt>审核通过：</dt>
      <dd>
        <select id="commonIsCheck" name="commonIsCheck" class="input-medium">
          <option value="0">等待审核</option>
          <option value="1" selected="selected">审核通过</option>
          <option value="2">审核拒绝</option>
        </select>
      </dd>
    </dl>
  </form>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>var action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", cityList = <?php echo $_smarty_tpl->tpl_vars['cityList']->value;?>
;<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html><?php }} ?>
