<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-22 02:07:28
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/siteConfig/public_location.html" */ ?>
<?php /*%%SmartyHeaderCode:2116240695d0d1ce0bf7085-18779749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '724a43e5bb448d563416ce76a1fa93e0acf1aa17' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/siteConfig/public_location.html',
      1 => 1530018730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116240695d0d1ce0bf7085-18779749',
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
  'unifunc' => 'content_5d0d1ce0bfc8d1_80067615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0d1ce0bfc8d1_80067615')) {function content_5d0d1ce0bfc8d1_80067615($_smarty_tpl) {?><?php echo '<script'; ?>
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
