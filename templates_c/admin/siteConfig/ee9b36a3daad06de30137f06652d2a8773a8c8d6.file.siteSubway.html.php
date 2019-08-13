<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 15:59:15
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteSubway.html" */ ?>
<?php /*%%SmartyHeaderCode:11583524865d511c53db6f87-56422885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9b36a3daad06de30137f06652d2a8773a8c8d6' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteSubway.html',
      1 => 1559206035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11583524865d511c53db6f87-56422885',
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
    'subway_state' => 0,
    'subway_title' => 0,
    'adminPath' => 0,
    'token' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511c53df1925_06112631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511c53df1925_06112631')) {function content_5d511c53df1925_06112631($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>城市地铁</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
html, body {height: 100%;}
.setting, .setting label {display: inline-block;}
.setting {margin-left: 50px;}
.setting label {margin: 0 10px 0 0;}
.setting label input[type=radio] {margin-right: 0;}
</style>
</head>

<body>
<div class="search" style="position:relative;">
  <label>城市筛选：</label>
  <div class="btn-group" id="pBtn" data-id="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
">
    <button class="btn dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="">--省份--</a></li>
      <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
      <li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['typename'];?>
</a></li>
      <?php } ?>
    </ul>
  </div>
  <div class="btn-group" id="cBtn" data-id="">
    <button class="btn dropdown-toggle" data-toggle="dropdown">--城市--<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="">--城市--</a></li>
    </ul>
  </div>
  <div class="btn-group" id="xBtn" data-id="">
    <button class="btn dropdown-toggle" data-toggle="dropdown">--区县--<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="">--区县--</a></li>
    </ul>
  </div>
  <div class="setting">
    状态：
    <label><input type="radio" name="state" value="1"<?php if ($_smarty_tpl->tpl_vars['subway_state']->value) {?> checked<?php }?> /> 开启</label>
    <label><input type="radio" name="state" value="0"<?php if (!$_smarty_tpl->tpl_vars['subway_state']->value) {?> checked<?php }?> /> 关闭</label>
    <label><input placeholder="文案" type="text" id="tit" class="input-small" value="<?php echo $_smarty_tpl->tpl_vars['subway_title']->value;?>
" /></label>
    <button class="btn btn-small btn-success" id="save">保存</button>
  </div>
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
    <a href="siteSubway.php?dopost=add" class="btn btn-primary" id="addNew">新增公交地铁</a>
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

<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:0 10px;">
  <li class="row3">&nbsp;</li>
  <li class="row25 left">城市</li>
  <li class="row60 left">线路</li>
  <li class="row12 left">&nbsp;&nbsp;&nbsp;操 作</li>
</ul>

<div class="list mt124" id="list" data-totalpage="1" data-atpage="1"><table><tbody></tbody></table><div id="loading" class="loading hide"></div></div>
<div id="pageInfo" class="pagination pagination-centered"></div>

<?php echo '<script'; ?>
>
  var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
