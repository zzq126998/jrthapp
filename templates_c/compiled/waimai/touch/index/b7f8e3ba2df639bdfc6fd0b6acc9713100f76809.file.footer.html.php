<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-04 09:37:46
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/waimai/touch/default/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:11058366665d4636eabc9273-77038190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f8e3ba2df639bdfc6fd0b6acc9713100f76809' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/waimai/touch/default/footer.html',
      1 => 1530018916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11058366665d4636eabc9273-77038190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_basehost' => 0,
    'langData' => 0,
    'HUONIAOROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4636eabd1d20_18396820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4636eabd1d20_18396820')) {function content_5d4636eabd1d20_18396820($_smarty_tpl) {?>
	<!-- 底部 -->
	<div class="fixFooter">
	  <ul>
	    <li class="ficon1 active"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][0];?>
</a></li>
			<li class="ficon4"><a href="<?php echo getUrlPath(array('service'=>'waimai','template'=>'paotui'),$_smarty_tpl);?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][49];?>
</a></li>
	    <li class="ficon3"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order','module'=>'waimai'),$_smarty_tpl);?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][359];?>
</a></li>
	    <li class="ficon5"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user'),$_smarty_tpl);?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][0];?>
</a></li>
	  </ul>
	</div>
	<!-- 底部 end  -->

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_location.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php }} ?>
