<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:31:02
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\moduleList.html" */ ?>
<?php /*%%SmartyHeaderCode:362618885d5107a63a2130-22298438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44dd01d9fb4035046c66c9ac06f0f20d1953b19a' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\moduleList.html',
      1 => 1559206083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '362618885d5107a63a2130-22298438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'moduleList' => 0,
    'action' => 0,
    'adminPath' => 0,
    'token' => 0,
    'cfg_defaultindex' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5107a63ee412_32860776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5107a63ee412_32860776')) {function content_5d5107a63ee412_32860776($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>网站模块管理</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style media="screen">
  .filter a {color: #999;}
  .filter a.curr {color: #2672ec;}
  #list .img {margin-right: 5px;}
  #list .label {font-weight: 500; text-shadow: none;}
  .list .tr div {padding-top: 5px;}
  .list .filter {background: transparent; padding: 0;}
  .filter .check {margin-right: 3px;}
  .list li.placeholder {height: 48px;}
  .list .tr .color_pick {padding: 2px; border-left: 1px solid #ccc; margin-right: 15px; height: 25px;}
  .color_pick em {width: 25px; height: 25px;}
</style>
</head>

<body>
<div class="search" style="position:relative;">
  <div class="tool">
    <button class="btn btn-info" data-toggle="dropdown" id="installNew">安装更多模块</button>
  </div>
</div>

<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:0 10px;">
  <li class="row7">模块</li>
  <li class="row10 left">导航名</li>
  <li class="row20 left">导航链接</li>
  <li class="row10 left">图标</li>
  <li class="row30 left">颜色</li>
  <li class="row13">排序</li>
  <li class="row10 left">操作</li>
</ul>

<div class="list mb50" id="list">
  <ul class="root"></ul>
  <div class="tr clearfix">
    <div class="row7"></div>
    <div class="row80 left"><a href="javascript:;" class="add-type" style="display:inline-block; margin-left: 0;" id="addNew">添加自定义导航</a></div>
  </div>
  <div class="fix-btn">
    <button type="button" class="btn btn-success" id="saveBtn">保存修改</button>
    <span class="help-inline" style="line-height: 35px; margin: 10px 0 0 20px;">修改完请及时保存~</span>
  </div>
  <!-- <button type="button" class="btn btn-success" id="saveBtn">保存</button> -->
</div>

<?php echo '<script'; ?>
 id="editForm" type="text/html">
  <form action="" class="quick-editForm" name="editForm">
	<dl class="clearfix">
      <dt>模块标识：</dt>
      <dd id="name"></dd>
    </dl>
    <dl class="clearfix">
      <dt>模块名称：</dt>
      <dd><input class="input-xlarge" type="text" name="title" id="title" value="" /></dd>
    </dl>
	<dl class="clearfix">
      <dt>模块图标：</dt>
      <dd>
	    <input class="input-xlarge" type="text" name="icon" id="icon" value="" /><br />
	    图片位于：/static/images/admin/nav/
      </dd>
    </dl>
    <!-- <dl class="clearfix">
      <dt style="color: red; font-weight: 700;">子域名规则：<small style="display: block; color: #666; text-align: left; font-weight: 500; line-height: 20px;">错误的修改将导致网站无法正常访问<br />请谨慎操作！！！</small></dt>
      <dd><textarea id="domainRules" name="domainRules" style="width:95%; height:150px;" /></textarea></dd>
    </dl>
    <dl class="clearfix">
      <dt style="color: red; font-weight: 700;">子目录规则：<small style="display: block; color: #666; text-align: left; font-weight: 500; line-height: 20px;">错误的修改将导致网站无法正常访问<br />请谨慎操作！！！</small></dt>
      <dd><textarea id="catalogRules" name="catalogRules" style="width:95%; height:150px;" /></textarea></dd>
    </dl> -->
    <dl class="clearfix hide">
      <dt>所属目录：</dt>
      <dd><select name="parentid" id="parentid" class="input-large"></select></dd>
    </dl>
    <dl class="clearfix">
      <dt>状态：</dt>
      <dd class="clearfix">
        <label><input type="radio" name="state" value="0" />启用</label>
        <label><input type="radio" name="state" value="1" />停用</label>
      </dd>
    </dl>
    <dl class="clearfix wx">
      <dt>小程序：</dt>
      <dd class="clearfix">
        <label><input type="radio" name="wx" value="1" />启用</label>
        <label><input type="radio" name="wx" value="0" />停用</label>
      </dd>
    </dl>
	<dl class="clearfix">
      <dt>排序：</dt>
      <dd><input class="input-mini" type="number" min="0" name="weight" id="weight" value="" /></dd>
    </dl>
  </form>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  var moduleList = <?php echo $_smarty_tpl->tpl_vars['moduleList']->value;?>
, action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
', defaultindex = '<?php echo $_smarty_tpl->tpl_vars['cfg_defaultindex']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
