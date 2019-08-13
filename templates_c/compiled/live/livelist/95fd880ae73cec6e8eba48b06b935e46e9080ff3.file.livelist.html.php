<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:11:55
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\live\default\livelist.html" */ ?>
<?php /*%%SmartyHeaderCode:2565811125d511f4baa9a74-14729480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95fd880ae73cec6e8eba48b06b935e46e9080ff3' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\live\\default\\livelist.html',
      1 => 1530018728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2565811125d511f4baa9a74-14729480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'keywords' => 0,
    'live_typename' => 0,
    'live_title' => 0,
    'live_keywords' => 0,
    'live_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'cfg_currentHost' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'typeid' => 0,
    'page' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511f4bb47e07_38436373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511f4bb47e07_38436373')) {function content_5d511f4bb47e07_38436373($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>搜索：<?php echo $_smarty_tpl->tpl_vars['keywords']->value;
} else {
echo $_smarty_tpl->tpl_vars['live_typename']->value;
}?>-<?php echo $_smarty_tpl->tpl_vars['live_title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['live_keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['live_description']->value;?>
" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_currentHost']->value;?>
';
	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
	var templets_skin = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
<?php echo '</script'; ?>
>
</head>
<body class="w1200">
<?php echo $_smarty_tpl->getSubTemplate ("public_top_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('channel'=>"live"), 0);?>

<div class="lContainer wrap">
    <div class="conBox">
        <div class="floor">
            <span><?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>搜索：<?php echo $_smarty_tpl->tpl_vars['keywords']->value;
} else {
echo $_smarty_tpl->tpl_vars['live_typename']->value;
}?></span>
        </div>
        <div class="lContent">
            <ul class="contentBox">
            	<?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"alive",'return'=>"row",'type'=>"1",'typeid'=>((string)$_smarty_tpl->tpl_vars['typeid']->value),'title'=>((string)$_smarty_tpl->tpl_vars['keywords']->value),'page'=>((string)$_smarty_tpl->tpl_vars['page']->value),'pageSize'=>"20")); $_block_repeat=true; echo live(array('action'=>"alive",'return'=>"row",'type'=>"1",'typeid'=>((string)$_smarty_tpl->tpl_vars['typeid']->value),'title'=>((string)$_smarty_tpl->tpl_vars['keywords']->value),'page'=>((string)$_smarty_tpl->tpl_vars['page']->value),'pageSize'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
                        <div class="box_img">
														<div class="playback state<?php echo $_smarty_tpl->tpl_vars['row']->value['state'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['state']==1) {?>直播中<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['state']==2) {?>精彩回放<?php }?></div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
" alt="">
                            <div class="box_cover"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/play.png" ></div>
                        </div>

                        <div class="live_intro">
                            <div class="intro-left"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
" alt=""></div>
                            <div class="intro_right">
                                <p class="p_font1"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p>
                                <p class="p_font2">
                                    <span class="sp_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['nickname'];?>
</span>
                                    <span class="img_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/live_people.png"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['click'];?>
</span></span></p>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"alive",'return'=>"row",'type'=>"1",'typeid'=>((string)$_smarty_tpl->tpl_vars['typeid']->value),'title'=>((string)$_smarty_tpl->tpl_vars['keywords']->value),'page'=>((string)$_smarty_tpl->tpl_vars['page']->value),'pageSize'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <!-- 分页 -->
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo getPageList(array('service'=>'live','template'=>'livelist','pageType'=>'dynamic','typeid'=>$_tmp1,'param'=>"keywords=".((string)$_smarty_tpl->tpl_vars['keywords']->value)."&page=#page#"),$_smarty_tpl);?>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'siteConfig','theme'=>'gray'), 0);?>

</body>
</html>
<?php }} ?>
