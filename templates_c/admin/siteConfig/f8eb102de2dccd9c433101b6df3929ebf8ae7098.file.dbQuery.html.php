<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:32:18
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\dbQuery.html" */ ?>
<?php /*%%SmartyHeaderCode:16444399655d5107f2eef9b4-64613795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8eb102de2dccd9c433101b6df3929ebf8ae7098' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\dbQuery.html',
      1 => 1559205984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16444399655d5107f2eef9b4-64613795',
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
  'unifunc' => 'content_5d5107f2f2a358_44430031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5107f2f2a358_44430031')) {function content_5d5107f2f2a358_44430031($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>执行SQL语句</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<div class="editform">
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <dl class="clearfix">
    <dt><label for="sqlquery">SQL语句：</label></dt>
    <dd><textarea name="sqlquery" id="sqlquery" style="width:90%" rows="10" placeholder="输入输要执行的SQL语句"></textarea></dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="button" name="button" id="btnSubmit">确认提交</button><span class="help-inline">此操作极为危险，请小心使用。</span></dd>
  </dl>
  <div id="return" style="padding:20px;"></div>
</div>

<?php echo '<script'; ?>
>var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html><?php }} ?>
