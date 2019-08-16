<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-15 11:36:58
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:10076900185d54d35a91d2a5-11433436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2a576812818c0a43bb11c62bc40f7e72adb64f' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\manage.html',
      1 => 1564477451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10076900185d54d35a91d2a5-11433436',
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
    'typeid' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d54d35a967657_41859996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d54d35a967657_41859996')) {function content_5d54d35a967657_41859996($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][12]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/manage.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
../css/refreshTop.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php if ($_smarty_tpl->tpl_vars['module']->value=='huangye') {?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/manage-huangye.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript">
	var module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', atpage = 1, totalCount = 0, pageSize = 10, state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
	var editUrl = '<?php echo getUrlPath(array('service'=>"member",'template'=>"fabu",'action'=>((string)$_smarty_tpl->tpl_vars['module']->value)),$_smarty_tpl);?>
';
	var modelType = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
', typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
, uploadType = "thumb";
	var statisticsUrl = '<?php echo getUrlPath(array('service'=>"member",'type'=>"user",'template'=>"statistics",'action'=>((string)$_smarty_tpl->tpl_vars['module']->value)),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("manage_".((string)$_smarty_tpl->tpl_vars['module']->value), null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
	<?php echo $_smarty_tpl->getSubTemplate ("manage-".((string)$_smarty_tpl->tpl_vars['module']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['module']->value=='huangye') {?>
	<?php } else { ?>
	<div class="container fn-clear">
		<div class="list <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" id="list"><p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/ajax-loader.gif" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
...</p></div>
		<div class="pagination fn-clear"></div>
	</div>
	<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>$_tmp1,'dopost'=>$_tmp2),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("../refreshTop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tourl'=>$_tmp3,'act'=>$_tmp4), 0);?>

<?php } else { ?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>$_tmp5),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("../refreshTop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tourl'=>$_tmp6,'act'=>"detail"), 0);?>

<?php }?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
../js/refreshTop.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/manage-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
