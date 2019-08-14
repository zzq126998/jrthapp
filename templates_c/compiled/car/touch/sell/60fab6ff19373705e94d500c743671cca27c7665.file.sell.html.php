<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:35:13
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\car\touch\skin1\sell.html" */ ?>
<?php /*%%SmartyHeaderCode:5833961425d536551257dc5-14272938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60fab6ff19373705e94d500c743671cca27c7665' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\car\\touch\\skin1\\sell.html',
      1 => 1556520713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5833961425d536551257dc5-14272938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'article_keywords' => 0,
    'article_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5365512d2ec9_46647333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5365512d2ec9_46647333')) {function content_5d5365512d2ec9_46647333($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][25];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['article_keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['article_description']->value;?>
">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/sell.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>((string)$_smarty_tpl->tpl_vars['langData']->value['car'][5][25])), 0);?>

<div class="sellBox">
    <div class="ad-box"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/sell_bg.png" alt=""></div>
    <div class="btns">
        <div class="btn_wt"><a href="<?php echo getUrlPath(array('service'=>"car",'template'=>"wtsell"),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][22];?>
</a></div>
        <div class="btn_ge"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu-car'),$_smarty_tpl);?>
" ><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][23];?>
</span><em><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][24];?>
</em></a></div>
    </div>
</div>



<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/sell.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
