<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:32:19
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\dbReplace.html" */ ?>
<?php /*%%SmartyHeaderCode:4900608435d5107f30f19e5-54306502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adad7f90f570319ffa520d18bc398c51e7be5fd8' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\dbReplace.html',
      1 => 1559206008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4900608435d5107f30f19e5-54306502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'token' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5107f3122747_49440508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5107f3122747_49440508')) {function content_5d5107f3122747_49440508($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>数据库内容替换</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="editform">
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <dl class="clearfix">
    <dt>点击选择表：</dt>
    <dd>
      <div class="dbtable">
        <ul class="theader clearfix">
          <li class="row40">表名</li>
          <li class="row10 center">行数</li>
          <li class="row10 center">大小</li>
          <li class="row40">注释</li>
        </ul>
        <div class="tbody" id="tablist"><p><center><br />数据表加载中...<br /><br /></center></p></div>
      </div>
    </dd>
  </dl>
  <dl class="clearfix hide" id="fields">
    <dt>点击选择字段：</dt>
    <dd>
      <small></small>
      <div></div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>查找：</dt>
    <dd><input type="text" name="rpstring" id="rpstring" class="input-xxlarge" /></dd>
  </dl>
  <dl class="clearfix">
    <dt>替换：</dt>
    <dd><input type="text" name="tostring" id="tostring" class="input-xxlarge" /></dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="button" name="button" id="btnSubmit">确认提交</button><span class="help-inline">此操作极为危险，请小心使用。</span></dd>
  </dl>
</div>

<?php echo '<script'; ?>
>var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html><?php }} ?>
