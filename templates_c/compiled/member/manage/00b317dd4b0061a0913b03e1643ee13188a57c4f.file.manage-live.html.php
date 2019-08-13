<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:37
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\manage-live.html" */ ?>
<?php /*%%SmartyHeaderCode:10292887815d511fed270311-56571687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00b317dd4b0061a0913b03e1643ee13188a57c4f' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\manage-live.html',
      1 => 1553911794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10292887815d511fed270311-56571687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511fed272269_68941644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511fed272269_68941644')) {function content_5d511fed272269_68941644($_smarty_tpl) {?><div class="list_banner"><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][29];?>
</p></div>
<input value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['userid'];?>
" id="hiddenid" type="hidden">
<div class="live_main">
</div>
<?php }} ?>
