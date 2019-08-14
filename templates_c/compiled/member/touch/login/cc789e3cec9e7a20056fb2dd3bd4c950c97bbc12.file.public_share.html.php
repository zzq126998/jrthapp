<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-04 09:37:52
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/public_share.html" */ ?>
<?php /*%%SmartyHeaderCode:12678493485d4636f03dbd69-36458176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc789e3cec9e7a20056fb2dd3bd4c950c97bbc12' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/public_share.html',
      1 => 1541126366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12678493485d4636f03dbd69-36458176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wxjssdk_appId' => 0,
    'wxjssdk_timestamp' => 0,
    'wxjssdk_nonceStr' => 0,
    'wxjssdk_signature' => 0,
    'Share_description' => 0,
    'Share_title' => 0,
    'Share_img' => 0,
    'Share_url' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4636f03e09d6_58730899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4636f03e09d6_58730899')) {function content_5d4636f03e09d6_58730899($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
	var wxconfig = {
		"appId": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_appId']->value;?>
',
		"timestamp": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_timestamp']->value;?>
',
		"nonceStr": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_nonceStr']->value;?>
',
		"signature": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_signature']->value;?>
',
		"description": '<?php echo $_smarty_tpl->tpl_vars['Share_description']->value;?>
',
		"title": '<?php echo $_smarty_tpl->tpl_vars['Share_title']->value;?>
',
		"imgUrl":'<?php echo $_smarty_tpl->tpl_vars['Share_img']->value;?>
',
		"link": '<?php echo $_smarty_tpl->tpl_vars['Share_url']->value;?>
',
	};
    document.head.appendChild(document.createElement('script')).src = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v=' + ~(-new Date());
	// document.write(unescape("%3Cscript src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v="+~(-new Date())+"'type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>
<?php }} ?>
