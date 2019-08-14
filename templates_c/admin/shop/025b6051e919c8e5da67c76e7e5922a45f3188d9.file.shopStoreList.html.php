<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 10:38:31
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\shop\shopStoreList.html" */ ?>
<?php /*%%SmartyHeaderCode:11123006005d5374273e7764-62426522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025b6051e919c8e5da67c76e7e5922a45f3188d9' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\shop\\shopStoreList.html',
      1 => 1561025596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11123006005d5374273e7764-62426522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'cityArr' => 0,
    'city' => 0,
    'notice' => 0,
    'addrListArr' => 0,
    'industryListArr' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d537427458c23_43400124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d537427458c23_43400124')) {function content_5d537427458c23_43400124($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>管理商城店铺</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="search">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <div class="btn-group" id="industryBtn" data-id="">
    <button class="btn dropdown-toggle" data-toggle="dropdown">全部行业<span class="caret"></span></button>
  </div>
  <!--<div class="btn-group" id="addrBtn" data-id="">-->
    <!--<button class="btn dropdown-toggle" data-toggle="dropdown">全部地区<span class="caret"></span></button>-->
  <!--</div>-->
  <select class="chosen-select" id="cityid" style="width: auto;">
    <option value="">选择分站城市</option>
    <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cityArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
</option>
    <?php } ?>
  </select>&nbsp;&nbsp;
  <div class="btn-group" id="certiBtn" data-id="">
    <button class="btn dropdown-toggle" data-toggle="dropdown">全部信息<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="">全部信息</a></li>
      <li><a href="javascript:;" data-id="0">未认证</a></li>
      <li><a href="javascript:;" data-id="1">已认证</a></li>
      <li><a href="javascript:;" data-id="2">认证失败</a></li>
    </ul>
  </div>
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
    <button class="btn" data-toggle="dropdown" id="delBtn">删除</button>
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
    <a href="shopStoreAdd.php" class="btn btn-primary" id="addNew">新增店铺</a>
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
  <li class="row15 left">店铺名</li>
  <li class="row10">会员名</li>
  <li class="row9 left">联系电话</li>
  <li class="row10 left">所在区域</li>
  <li class="row10">经营行业</li>
  <li class="row6">认 证</li>
  <li class="row8">状 态</li>
  <li class="row12">发布时间</li>
  <li class="row17">操 作</li>
</ul>

<div class="list mt124" id="list" data-totalpage="1" data-atpage="1"><table><tbody></tbody></table><div id="loading" class="loading hide"></div></div>

<div id="pageInfo" class="pagination pagination-centered"></div>

<div class="hide">
  <span id="sKeyword"></span>
  <span id="sIndustry"></span>
  <span id="sAddr"></span>
  <span id="sCerti"></span>
</div>

<?php echo '<script'; ?>
>
  var addrListArr = <?php echo $_smarty_tpl->tpl_vars['addrListArr']->value;?>
, industryListArr = <?php echo $_smarty_tpl->tpl_vars['industryListArr']->value;?>
,
      adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
