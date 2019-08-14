<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 10:39:49
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\order.html" */ ?>
<?php /*%%SmartyHeaderCode:6794944945d537475b172b2-39045376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dbedd14e7fc8aa7bd865c6fdae7f3a34d35917b' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\order.html',
      1 => 1530018846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6794944945d537475b172b2-39045376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'module' => 0,
    'state' => 0,
    'type' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d537475b829a5_30787153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d537475b829a5_30787153')) {function content_5d537475b829a5_30787153($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][126]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/manage.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', atpage = 1, totalCount = 0, pageSize = 10, state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
	var editUrl = '<?php echo getUrlPath(array('service'=>"member",'template'=>"orderdetail",'action'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"%id%"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("order_".((string)$_smarty_tpl->tpl_vars['module']->value), null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
	<?php echo $_smarty_tpl->getSubTemplate ("order-".((string)$_smarty_tpl->tpl_vars['module']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="container fn-clear">
		<div class="list <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" id="list"><p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/ajax-loader.gif" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
...</p></div>
		<div class="pagination fn-clear"></div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/order-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
