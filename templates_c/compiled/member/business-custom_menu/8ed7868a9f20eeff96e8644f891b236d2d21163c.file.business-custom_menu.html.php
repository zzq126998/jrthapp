<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:37:19
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\business-custom_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:5534352985d52225fd3a4a0-56463156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed7868a9f20eeff96e8644f891b236d2d21163c' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\business-custom_menu.html',
      1 => 1538123328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5534352985d52225fd3a4a0-56463156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'menuList' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52225fd809d3_67475061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52225fd809d3_67475061')) {function content_5d52225fd809d3_67475061($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable(("自定义菜单 - ").($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/manage.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/business-about.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var atpage = 1, totalCount = 0, pageSize = 10, editUrl = '<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'business','act'=>'about'),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("business_custom_menu", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <div class="nav-tabs fn-clear" style="margin-bottom: -1px;">
    	<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'business','act'=>'custom_menu'),$_smarty_tpl);?>
" class="btn add">新增菜单</a>
    </div>
	<div class="container fn-clear">
		<div class="list article" id="list">
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
			<div class="item fn-clear" data-id="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
">
				<div class="o"><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'business','act'=>'custom_menu','param'=>"id=".((string)$_smarty_tpl->tpl_vars['menu']->value['id'])),$_smarty_tpl);?>
" class="edit"><s></s>编辑</a><a href="javascript:;" class="del"><s></s>删除</a></div>
				<div class="i"><h5><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</h5></div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/business-custom_menu.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
