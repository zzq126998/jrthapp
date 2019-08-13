<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:11:03
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\live\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9612704025d511f17a57351-42703722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f742a1ea9ac574647c7d8bab3e86ec00c539606' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\live\\default\\index.html',
      1 => 1530018728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9612704025d511f17a57351-42703722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
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
    'row' => 0,
    'typenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511f17aca740_90959999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511f17aca740_90959999')) {function content_5d511f17aca740_90959999($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['live_title']->value;?>
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
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


<div class="banner">
	<div class="wrap">
		<div class="slide" id="slide"><?php echo getMyAd(array('id'=>"252",'type'=>"slide"),$_smarty_tpl);?>
</div>
		<div class="slidebtn" id="slidebtn"></div>
	</div>
</div>


<div class="lContainer wrap">
    <!--正在直播-->
    <div class="conBox">
        <div class="floor">
            <span class="line"></span> <span>正在直播</span>
        </div>
        <div class="lContent">
            <ul class="contentBox">
            	<?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"alive",'return'=>"row",'type'=>"4",'pageSize'=>"8")); $_block_repeat=true; echo live(array('action'=>"alive",'return'=>"row",'type'=>"4",'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
                        <div class="box_img">
														<div class="playback state<?php echo $_smarty_tpl->tpl_vars['row']->value['state'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['state']==1) {?>直播中<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['state']==2) {?>精彩回放<?php }?></div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
">
                            <div class="box_cover"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/play.png" ></div>
                        </div>
                        <div class="live_intro">
                            <div class="intro-left"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
"></div>
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
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"alive",'return'=>"row",'type'=>"4",'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
    <!--结束-->

    <!--列表-->
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"type",'return'=>"typenav",'type'=>"0")); $_block_repeat=true; echo live(array('action'=>"type",'return'=>"typenav",'type'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="conBox">
        <div class="floor"><span class="line"></span> <span><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typenav']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo getUrlPath(array('service'=>'live','template'=>'livelist','typeid'=>$_tmp1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['typenav']->value['typename'];?>
</a></span></div>
        <div class="lContent">
            <ul class="contentBox">
            	<?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"alive",'return'=>"row",'type'=>"1",'typeid'=>((string)$_smarty_tpl->tpl_vars['typenav']->value['id']),'pageSize'=>"4")); $_block_repeat=true; echo live(array('action'=>"alive",'return'=>"row",'type'=>"1",'typeid'=>((string)$_smarty_tpl->tpl_vars['typenav']->value['id']),'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
                        <div class="box_img">
														<div class="playback state<?php echo $_smarty_tpl->tpl_vars['row']->value['state'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['state']==1) {?>直播中<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['state']==2) {?>精彩回放<?php }?></div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
">
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
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"alive",'return'=>"row",'type'=>"1",'typeid'=>((string)$_smarty_tpl->tpl_vars['typenav']->value['id']),'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"type",'return'=>"typenav",'type'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--结束-->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'live','theme'=>'gray'), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.cycle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	//大图幻灯
	$("#slide").cycle({
		pager: '#slidebtn',
		pause: true
	});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
