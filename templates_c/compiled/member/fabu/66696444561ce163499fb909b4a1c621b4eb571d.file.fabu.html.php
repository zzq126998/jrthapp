<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:37:02
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\fabu.html" */ ?>
<?php /*%%SmartyHeaderCode:13179759375d5276aec56805-83396962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66696444561ce163499fb909b4a1c621b4eb571d' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\fabu.html',
      1 => 1556457137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13179759375d5276aec56805-83396962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'do' => 0,
    'langData' => 0,
    'detail_title' => 0,
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'module' => 0,
    'cfg_staticPath' => 0,
    'state' => 0,
    'type' => 0,
    'typeid' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'atlasSize' => 0,
    'atlasType' => 0,
    'atlasMax' => 0,
    'id' => 0,
    'cfg_basehost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5276aecf8a17_47517147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5276aecf8a17_47517147')) {function content_5d5276aecf8a17_47517147($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['do']->value=="edit") {?>
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][142]).(" - ")).($_smarty_tpl->tpl_vars['detail_title']->value)).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][143]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/fabu.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/fabu-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/jquery.chosen.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var modelType = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
', typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
, uploadType = "thumb";
	var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = '<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
', atlasSize = <?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
, atlasType = '<?php echo $_smarty_tpl->tpl_vars['atlasType']->value;?>
', atlasMax = <?php echo $_smarty_tpl->tpl_vars['atlasMax']->value;?>
;
	var id = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
<?php echo '</script'; ?>
>
</head>
<?php if ($_smarty_tpl->tpl_vars['type']->value=="nanny") {?>
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("fabu_".((string)$_smarty_tpl->tpl_vars['module']->value)."_".((string)$_smarty_tpl->tpl_vars['type']->value), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("fabu_".((string)$_smarty_tpl->tpl_vars['module']->value), null, 0);?>
<?php }?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
	<div class="container fn-clear">
		<?php if ($_smarty_tpl->tpl_vars['type']->value=="nanny") {?>
		<?php echo $_smarty_tpl->getSubTemplate ("fabu-".((string)$_smarty_tpl->tpl_vars['module']->value)."-".((string)$_smarty_tpl->tpl_vars['type']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ("fabu-".((string)$_smarty_tpl->tpl_vars['module']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>
</div>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/ueditor/ueditor.all.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/chosen.jquery.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['type']->value!='') {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php if ($_smarty_tpl->tpl_vars['type']->value=="qzu"||$_smarty_tpl->tpl_vars['type']->value=="qgou") {?>demand<?php } else {
echo $_smarty_tpl->tpl_vars['type']->value;
}?>.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
><?php }?>
</body>
</html>
<?php }} ?>
