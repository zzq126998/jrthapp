<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 17:41:15
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\manage-shop.html" */ ?>
<?php /*%%SmartyHeaderCode:15168814145d5285bb859ef8-59800721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea566bbc245b242e3794cc9b35b03872d28ea6ca' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\manage-shop.html',
      1 => 1530018844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15168814145d5285bb859ef8-59800721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5285bb8773c2_27585079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5285bb8773c2_27585079')) {function content_5d5285bb8773c2_27585079($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
	state = state == '' ? 1 : state;
<?php echo '</script'; ?>
>
<div class="nav-tabs fn-clear">
	<ul class="fn-clear">
		<li data-id="1"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][555];?>
 (<span id="audit">0</span>)</a></li>
		<li data-id="0"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][556];?>
 (<span id="gray">0</span>)</a></li>
		<li data-id="2"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][557];?>
 (<span id="refuse">0</span>)</a></li>
	</ul>
	<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'shop'),$_smarty_tpl);?>
" class="btn add"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][5];?>
</a>
</div>
<?php }} ?>