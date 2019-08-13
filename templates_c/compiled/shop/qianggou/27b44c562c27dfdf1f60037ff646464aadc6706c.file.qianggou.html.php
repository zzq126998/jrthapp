<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:13:51
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\shop\132\qianggou.html" */ ?>
<?php /*%%SmartyHeaderCode:17099280925d52713fb716e1-93329754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b44c562c27dfdf1f60037ff646464aadc6706c' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\shop\\132\\qianggou.html',
      1 => 1555746426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17099280925d52713fb716e1-93329754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'shop_title' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'shop_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'cfg_cookieDomain' => 0,
    'langData' => 0,
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52713fbe0c50_54217137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52713fbe0c50_54217137')) {function content_5d52713fbe0c50_54217137($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<title>限时抢购-<?php echo $_smarty_tpl->tpl_vars['shop_title']->value;?>
</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/qianggou.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
',staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
',templets_skin = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', cookieDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookieDomain']->value;?>
';
	jQuery = $;
<?php echo '</script'; ?>
>
</head>

<body class="w1200">
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('qianggou', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="bread wrap">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][0];?>
</a>><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][47];?>
</a>><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'qianggou'),$_smarty_tpl);?>
">限时抢购</a></p>
</div>


<div class="qb_bg wrap">
	<div class="djs">
		<div class="line"></div>
		<div class="daojishibox"><span></span><span></span><span></span><span></span></div>
		<div class="daojishi"> <span class="h">00</span><span class="m">00</span><span class="s">00</span><span class="hm">00</span></div>
		<span class="dec">距离本场结束还剩</span>
	</div>
</div>

<div class="contain">
	<div class="wrap">
		<div class="txtScroll-left navlist wrap">
			<div class="hd">
				<a class="next"><i></i></a>
				<a class="prev prevStop"><i></i></a>
			</div>
			<div class="bd">
				<div class="tempWrap"><ul class="infoList" id="timelist">

				</ul></div>
			</div>
		</div>

		<div class="slide-container gallery-main" id="mod-item">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="qg-slide">
						<!-- 必抢好货 s-->
						<div class="qgoubox fn-clear">

						</div>
					</div>
					<div class="pagination fn-clear"></div>

				</div>

			</div>
		</div>

	</div>
</div>
	<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>
	var atpage = 1,
		keywords = '<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
',
		pageSize = 12;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/qianggou.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
