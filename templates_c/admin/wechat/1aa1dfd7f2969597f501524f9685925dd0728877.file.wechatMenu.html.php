<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 16:55:43
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\wechat\wechatMenu.html" */ ?>
<?php /*%%SmartyHeaderCode:5848351075d53cc8f3be0c5-81214141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa1dfd7f2969597f501524f9685925dd0728877' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\wechat\\wechatMenu.html',
      1 => 1559205061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5848351075d53cc8f3be0c5-81214141',
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
  'unifunc' => 'content_5d53cc8f419db1_68418409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d53cc8f419db1_68418409')) {function content_5d53cc8f419db1_68418409($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>微信自定义菜单</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
.root .key{width:350px;}
</style>
</head>

<body>
<div class="search" style="position:relative;">
  <label>搜索：<input class="input-xlarge" type="search" id="keyword" placeholder="请输入要搜索的关键字"></label>
  <button type="button" class="btn btn-success" id="searchBtn">搜索</button>
  <button type="button" class="btn btn-danger" id="batch" style="margin-left: 50px;">批量删除</button>
  <div class="tool">
    <a href="javascript:;" class="add-type" style="display:inline-block;" id="addNew_">添加新菜单</a>&nbsp;|&nbsp;<a href="javascript:;" id="unfold">全部展开</a>&nbsp;|&nbsp;<a href="javascript:;" id="away">全部收起</a>
    &nbsp;&nbsp;&nbsp;&nbsp;配置说明：<a href="https://help.kumanyun.com/help-50-10.html" target="_blank">https://help.kumanyun.com/help-50-10.html</a>
  </div>
</div>

<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:0 10px;">
  <li class="row3">&nbsp;</li>
  <li class="row40 left">菜单名称</li>
  <li class="row20 left">关键字/网页链接</li>
  <li class="row20">排序</li>
  <li class="row17 left">&nbsp;&nbsp;操 作</li>
</ul>

<form class="list mb50" id="list" style="margin-top:-10px;">
  <ul class="root"></ul>
  <div class="tr clearfix">
    <div class="row3"></div>
    <div class="row80 left"><a href="javascript:;" class="add-type" style="display:inline-block;" id="addNew">添加新菜单</a></div>
  </div>
</form>
<div class="fix-btn"><button type="button" class="btn btn-success" id="saveBtn">保存</button><button type="button" class="btn btn-primary" id="releaseBtn" style="margin: 10px 0 0 50px;">发布上线</button></div>

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
