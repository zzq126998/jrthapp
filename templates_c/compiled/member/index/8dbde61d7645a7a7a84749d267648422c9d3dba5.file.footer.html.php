<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-16 10:26:09
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:13888874165d5614413984d4-02215422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbde61d7645a7a7a84749d267648422c9d3dba5' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\footer.html',
      1 => 1564476808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13888874165d5614413984d4-02215422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'langData' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5614413d4db2_91791833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5614413d4db2_91791833')) {function content_5d5614413d4db2_91791833($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><div class="wrap footer">
	<p>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"singel",'pageSize'=>"7")); $_block_repeat=true; echo siteConfig(array('action'=>"singel",'pageSize'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp33=ob_get_clean();?><?php echo getUrlPath(array('service'=>'siteConfig','template'=>'about','id'=>$_tmp33),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>  |
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"singel",'pageSize'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'help'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][273];?>
</a>
	</p>
	<p>Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" target="_blank"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cfg_basehost']->value,"http://",'');?>
</a>  <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][23];?>
</p>
</div>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dialog-4.2.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php }} ?>
