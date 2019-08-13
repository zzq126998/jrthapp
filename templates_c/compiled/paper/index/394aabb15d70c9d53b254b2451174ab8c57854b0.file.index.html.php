<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:40:19
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\paper\140\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3906874935d5125f3c91875-43974971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '394aabb15d70c9d53b254b2451174ab8c57854b0' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\paper\\140\\index.html',
      1 => 1556529229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3906874935d5125f3c91875-43974971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paper_title' => 0,
    'paper_keywords' => 0,
    'paper_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'paper_channelDomain' => 0,
    'cfg_cookiePre' => 0,
    'langData' => 0,
    'date' => 0,
    'id' => 0,
    'store' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5125f3ce5864_67724873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5125f3ce5864_67724873')) {function content_5d5125f3ce5864_67724873($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['paper_title']->value;?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['paper_keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['paper_description']->value;?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
/js/need/laydate.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['paper_channelDomain']->value;?>
', cfg_staticPath = staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
', cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
        var imgurl ="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
";
    <?php echo '</script'; ?>
>
</head>
<body class="w1200">
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrap">
    <div class="nav-box">
        <ul class="nav fn-clear">
            <li class="edit" id="edit"><i></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][14];?>
</span></li>
            <li class="date"><i></i><input id="date"  readonly="readonly"placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][15];?>
" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%Y-%m-%d");?>
" class="laydate-icon" onclick="laydate()" autocomplete="off"></li>
        </ul>
        <div class="choose-box">
            <ul class="choose-list">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('paper', array('action'=>'store','return'=>'store','pageSize'=>'100')); $_block_repeat=true; echo paper(array('action'=>'store','return'=>'store','pageSize'=>'100'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['store']->value['id']) {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['store']->value['url'];?>
" ><?php echo $_smarty_tpl->tpl_vars['store']->value['title'];?>
</a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo paper(array('action'=>'store','return'=>'store','pageSize'=>'100'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>



    <div class="container mod-list" id="mod-item">
        <ul class="list fn-clear" id="txt">

        </ul>
        <div class="loading fn-hide"><?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][16];?>
...</div>
        <div class="pagination fn-clear"></div>
    </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ('../../siteConfig/public_foot_v3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'paper','theme'=>'gray'), 0);?>


<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/laydate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
