<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:37:35
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\module.html" */ ?>
<?php /*%%SmartyHeaderCode:1859015985d52226f256f31-54952238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046c7c20decc6d7c68506cd334decc370fc62b82' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\module.html',
      1 => 1538124104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1859015985d52226f256f31-54952238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52226f2995e5_91000714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52226f2995e5_91000714')) {function content_5d52226f2995e5_91000714($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][472]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/module.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("module", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript">
  $(function(){
    $('.custom-nav').click();
    $('#custom-nav').attr("data-url", "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
");
  })  
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
