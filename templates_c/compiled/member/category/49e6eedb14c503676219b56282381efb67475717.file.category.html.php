<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-15 11:43:57
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\category.html" */ ?>
<?php /*%%SmartyHeaderCode:6281069505d54d4fdb779c4-64965430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e6eedb14c503676219b56282381efb67475717' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\category.html',
      1 => 1530018844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6281069505d54d4fdb779c4-64965430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'module' => 0,
    'cfg_staticVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d54d4fdbb0429_55527399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d54d4fdbb0429_55527399')) {function content_5d54d4fdbb0429_55527399($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][450]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/category-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var modelType = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("category_".((string)$_smarty_tpl->tpl_vars['module']->value), null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
	<div class="container fn-clear">
		<?php echo $_smarty_tpl->getSubTemplate ("category-".((string)$_smarty_tpl->tpl_vars['module']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>

<div class="stopdrag"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][147];?>
<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][27];?>
</a></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/category-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
