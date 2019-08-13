<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:37:06
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\business-config.html" */ ?>
<?php /*%%SmartyHeaderCode:21413153285d52225253e797-91181232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586f1807f4b581d7b89cb0645f69b2321678766f' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\business-config.html',
      1 => 1538123328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21413153285d52225253e797-91181232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_webname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d522252579132_30732911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d522252579132_30732911')) {function content_5d522252579132_30732911($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][123]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("config_business", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <div class="container fn-clear">
        <?php echo $_smarty_tpl->getSubTemplate ("../business-config-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
