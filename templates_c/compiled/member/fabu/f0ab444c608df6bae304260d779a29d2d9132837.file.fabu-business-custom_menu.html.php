<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:37:03
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\fabu-business-custom_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1080850185d5276af037168-39009962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0ab444c608df6bae304260d779a29d2d9132837' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\fabu-business-custom_menu.html',
      1 => 1538123328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080850185d5276af037168-39009962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuList' => 0,
    'id' => 0,
    'detail_title' => 0,
    'detail_body' => 0,
    'detail_jump' => 0,
    'langData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5276af065f75_80537687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5276af065f75_80537687')) {function content_5d5276af065f75_80537687($_smarty_tpl) {?><?php echo '<script'; ?>
>
    var menuList = <?php echo json_encode($_smarty_tpl->tpl_vars['menuList']->value);?>
;
<?php echo '</script'; ?>
>
<div class="w-form">
	<form name="fabuForm" id="fabuForm" method="post" action="/include/ajax.php?service=business&action=updateStoreCustomMenu" data-url="<?php echo getUrlPath(array('service'=>'member','template'=>'business-custom_menu'),$_smarty_tpl);?>
">
		<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
		<dl class="fn-clear">
			<dt>标题：</dt>
			<dd>
				<input type="text" name="title" class="inp" id="title" size="60" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['detail_title']->value;?>
" placeholder="请输入标题" />
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>类型：</dt>
			<dd>
				<div class="radio">
					<span data-id="0" class="curr">自定义内容</span>
					<span data-id="1">跳转</span>
				</div>
			</dd>
		</dl>
		<dl class="type0 fn-clear">
			<dt>内容：</dt>
			<dd>
				<?php echo '<script'; ?>
 id="body" name="body" type="text/plain" style="width:90%;height:500px"><?php echo $_smarty_tpl->tpl_vars['detail_body']->value;?>
<?php echo '</script'; ?>
>
			</dd>
		</dl>
		<dl class="type1 fn-clear fn-hide">
			<dt>链接：</dt>
			<dd>
				<input type="text" name="jump" class="inp" id="jump" size="60" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['detail_jump']->value;?>
" placeholder="请输入网址，以http:// 或 https://开头" />
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>&nbsp;</dt>
			<dd><button class="submit" id="submit"><?php if ($_smarty_tpl->tpl_vars['id']->value==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['shop'][1][7];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][122];
}?></button></dd>
		</dl>
	</form>
</div>
<?php }} ?>
