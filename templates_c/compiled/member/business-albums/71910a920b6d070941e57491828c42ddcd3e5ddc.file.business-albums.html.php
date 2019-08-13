<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:37:22
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\business-albums.html" */ ?>
<?php /*%%SmartyHeaderCode:8360270315d522262b91f13-17352291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71910a920b6d070941e57491828c42ddcd3e5ddc' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\business-albums.html',
      1 => 1530018844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8360270315d522262b91f13-17352291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d522262bd2684_32545688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d522262bd2684_32545688')) {function content_5d522262bd2684_32545688($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][37]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/business-albums.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var atpage = 1, totalCount = 0, pageSize = 50, editUrl = '<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'business','act'=>'albums'),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("business_albums", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <div class="nav-tabs fn-clear" style="margin-bottom: -1px;">
    	<a href="javascript:;" class="btn menuType"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][84];?>
</a>
    	<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'business','act'=>'albums'),$_smarty_tpl);?>
" class="btn add"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][78];?>
</a>
    </div>
	<div class="container fn-clear">
		<div class="list fn-clear" id="list"><p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/ajax-loader.gif" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
...</p></div>
		<div class="pagination fn-clear"></div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/business-albums.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
