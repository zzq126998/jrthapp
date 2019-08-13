<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:34:33
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\live\liveList.html" */ ?>
<?php /*%%SmartyHeaderCode:20493385535d51087941a605-67671904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64889b5138d5c009c5ea03791e298727286b1dea' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\live\\liveList.html',
      1 => 1561715346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20493385535d51087941a605-67671904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'recycle' => 0,
    'notice' => 0,
    'typeListArr' => 0,
    'action' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510879483dc5_72621933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510879483dc5_72621933')) {function content_5d510879483dc5_72621933($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>管理图片</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
/*#list td {white-space: nowrap;text-overflow:ellipsis;overflow: hidden;}*/
</style>
</head>

<body>
<div class="search">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <div class="btn-group" id="typeBtn" data-id="">
    <button class="btn dropdown-toggle" data-toggle="dropdown">全部分类<span class="caret"></span></button>
  </div>
  &nbsp;&nbsp;推流时间&nbsp;&nbsp;<input class="input-small" type="text" id="stime" placeholder="开始日期">&nbsp;&nbsp;到&nbsp;&nbsp;<input class="input-small" type="text" id="etime" placeholder="结束日期">&nbsp;&nbsp;
  <button type="button" class="btn btn-success" id="searchBtn">立即搜索</button>
</div>

<div class="filter clearfix">
  <div class="f-left">
    <?php if ($_smarty_tpl->tpl_vars['recycle']->value!=1) {?>
    <div class="btn-group" id="stateBtn"<?php if ($_smarty_tpl->tpl_vars['notice']->value) {?> data-id="a0"<?php }?>>
      <?php if ($_smarty_tpl->tpl_vars['notice']->value) {?>
      <button class="btn dropdown-toggle" data-toggle="dropdown">待审核(<span class="totalGray"></span>)<span class="caret"></span></button>
      <?php } else { ?>
      <button class="btn dropdown-toggle" data-toggle="dropdown">全部信息(<span class="totalCount"></span>)<span class="caret"></span></button>
      <?php }?>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-id="">全部(<span class="totalCount"></span>)</a></li>
        <li><a href="javascript:;" data-id="a0">待审核(<span class="totalGray"></span>)</a></li>
        <li><a href="javascript:;" data-id="a1">已审核(<span class="totalAudit"></span>)</a></li>
        <li><a href="javascript:;" data-id="a2">拒绝审核(<span class="totalRefuse"></span>)</a></li>
        <li><a href="javascript:;" data-id="0">未推流(<span class="initCount"></span>)</a></li>
        <li><a href="javascript:;" data-id="1">正在推流(<span class="nowCount"></span>)</a></li>
        <li><a href="javascript:;" data-id="2">历史推流(<span class="hisCount"></span>)</a></li>
        <li><a href="javascript:;" data-id="3">黑名单(<span class="blackCount"></span>)</a></li>
      </ul>
    </div>
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
  <li class="row20 left">标题</li>
  <li class="row15">推流地址</li>
  <li class="row15">直播地址</li>
  <li class="row15">推流时间</li>
  <li class="row10">审核状态</li>
  <li class="row8">修改</li>
  <li class="row5">删除</li>
  <li class="row9">操作</li>
</ul>

<div class="list mt124" id="list" data-totalpage="1" data-atpage="1"><table><tbody></tbody></table><div id="loading" class="loading hide"></div></div>

<div id="pageInfo" class="pagination pagination-centered"></div>

<div class="hide">
  <span id="sKeyword"></span>
  <span id="sType"></span>
  <span id="start"></span>
  <span id="end"></span>
</div>

<?php echo '<script'; ?>
>
  var typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
