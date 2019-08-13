<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:37:23
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\business-news.html" */ ?>
<?php /*%%SmartyHeaderCode:20441586335d5276c3333027-99530298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbc9d01bb4c0a5694c3103ed434d36c40edd344' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\business-news.html',
      1 => 1530018844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20441586335d5276c3333027-99530298',
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
  'unifunc' => 'content_5d5276c339a8a9_02255552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5276c339a8a9_02255552')) {function content_5d5276c339a8a9_02255552($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][36]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/manage.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/business-news.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var atpage = 1, totalCount = 0, pageSize = 10, editUrl = '<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'business','act'=>'news'),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("business_news", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <div class="nav-tabs fn-clear" style="margin-bottom: -1px;">
    	<a href="javascript:;" class="btn menuType"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][80];?>
</a>
    	<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'business','act'=>'news'),$_smarty_tpl);?>
" class="btn add"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][81];?>
</a>
    </div>
	<div class="container fn-clear">
		<div class="list article" id="list"><p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
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
js/business-news.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
