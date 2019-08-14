<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-04 09:37:46
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/public_location.html" */ ?>
<?php /*%%SmartyHeaderCode:15543939635d4636eabd5566-29415172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db7c44063bb5f0bfd97da195c060d4fabf48cd1' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/public_location.html',
      1 => 1530018730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15543939635d4636eabd5566-29415172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_map' => 0,
    'site_map_key' => 0,
    'site_map_apiFile' => 0,
    'site_map_amap_apiFile' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4636eabda369_56328140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4636eabda369_56328140')) {function content_5d4636eabda369_56328140($_smarty_tpl) {?><?php echo '<script'; ?>
>
  	var site_map = "<?php echo $_smarty_tpl->tpl_vars['site_map']->value;?>
", site_map_key = '<?php echo $_smarty_tpl->tpl_vars['site_map_key']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_map_apiFile']->value;?>
"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['site_map']->value=="qq") {?>
<?php echo '<script'; ?>
 type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['site_map']->value!="amap") {?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_map_amap_apiFile']->value;?>
" charset="utf-8"><?php echo '</script'; ?>
>
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicLocation.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php }} ?>
