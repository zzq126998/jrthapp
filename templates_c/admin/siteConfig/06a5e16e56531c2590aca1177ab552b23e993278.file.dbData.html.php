<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:32:16
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\dbData.html" */ ?>
<?php /*%%SmartyHeaderCode:2478949345d5107f06b0f92-95533416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06a5e16e56531c2590aca1177ab552b23e993278' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\dbData.html',
      1 => 1559206021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2478949345d5107f06b0f92-95533416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'action' => 0,
    'moduleArr' => 0,
    'module' => 0,
    'dirname' => 0,
    'adminPath' => 0,
    'DB_PREFIX' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5107f06ed875_04142698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5107f06ed875_04142698')) {function content_5d5107f06ed875_04142698($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>数据库备份/还原</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="btn-group config-nav" data-toggle="buttons-radio">
  <?php if ($_smarty_tpl->tpl_vars['action']->value=="data") {?>
  <a class="btn active" href="javascript:;">数据库备份</a>
  <?php } else { ?>
  <a class="btn" href="dbData.php">数据库备份</a>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['action']->value=="revert") {?>
  <a class="btn active" href="javascript:;">数据库还原</a>
  <?php } else { ?>
  <a class="btn" href="dbData.php?action=revert">数据库还原</a>
  <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['action']->value=="data") {?>
<form class="editform" id="dbform" method="post" action="dbData.php?action=do<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
  <dl class="clearfix">
    <dt>
      选择要备份的表：
      <div class="btn-group" id="chooseModule">
        <button class="btn dropdown-toggle" data-toggle="dropdown">快速选择<span class="caret"></span></button>
        <ul class="dropdown-menu" style="text-align:left; min-width:100px;">
          <li><a href="javascript:;" data-id="">全部</a></li>
          <li><a href="javascript:;" data-id="member">会员</a></li>
          <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moduleArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
          <li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['title'];?>
</a></li>
          <?php } ?>
        </ul>
      </div>
    </dt>
    <dd>
      <div class="dbtable">
        <ul class="theader clearfix">
        <li class="row40"><label><input type="checkbox" id="checkall" checked />全选</label>&nbsp;&nbsp;表名&nbsp;&nbsp;&nbsp;&nbsp;共：<span id="dbCount">..</span> 个表</li>
          <li class="row10 center">行数</li>
          <li class="row10 center">大小</li>
          <li class="row40">注释</li>
        </ul>
        <div class="tbody" id="tablist" style="width:100%"><p><center><br />数据表加载中...<br /><br /></center></p></div>
      </div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="fsize">分卷大小：</label></dt>
    <dd><input type="number" min="0" name="fsize" id="fsize" class="input-small" value="2048" />kb</dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="dirname">备份名称：</label></dt>
    <dd>
      <input type="text" name="dirname" id="dirname" class="input-medium" value="<?php echo $_smarty_tpl->tpl_vars['dirname']->value;?>
" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" />
      <span class="input-tips" style="display:inline-block"><s></s>只能输入英文和数字</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="isstruct">备份表结构信息：</label></dt>
    <dd class="radio"><label><input type="checkbox" name="isstruct" id="isstruct" value="1" checked /></label>&nbsp;</dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd>
      <button class="btn btn-success" type="submit" name="button" id="btnSubmit">备份</button>&nbsp;&nbsp;
      <button class="btn" type="button" name="button" id="btnOpimize">优化</button>&nbsp;&nbsp;
      <button class="btn" type="button" name="button" id="btnRepair">修复</button>
    </dd>
  </dl>
</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['action']->value=="revert") {?>
<form id="dbform" class="hide" method="post" action="dbData.php?action=do<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
  <input type="hidden" name="floder" />
</form>
<ul class="thead clearfix" style="position:relative; top:15px; left:0; right:0; margin:0 20px;">
  <li class="row3" id="selectAll"><span class="check"></span></li>
  <li class="row37 left"><a href="javascript:;" class="hide" style="margin-right:10px;" id="delRevert">删除</a>备份名</li>
  <li class="row10 left">类 型</li>
  <li class="row20">备份时间</li>
  <li class="row10">尺 寸</li>
  <li class="row10">卷 数</li>
  <li class="row10">操 作</li>
</ul>
<div class="list" style="padding:10px 20px; margin-top:5px" id="list" data-totalpage="1" data-atpage="1"><table><tbody></tbody></table><div id="loading" class="loading hide"></div></div>
<?php }?>

<?php echo '<script'; ?>
>var action = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", DB_PREFIX = '<?php echo $_smarty_tpl->tpl_vars['DB_PREFIX']->value;?>
';<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html><?php }} ?>
