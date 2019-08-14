<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 11:57:37
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/article/touch/148/list.html" */ ?>
<?php /*%%SmartyHeaderCode:7418672725d450631665e00-49021237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a99350fb827fdb521c806093dc9c3c67a243c2' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/article/touch/148/list.html',
      1 => 1564485194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7418672725d450631665e00-49021237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_title' => 0,
    'cfg_soft_lang' => 0,
    'article_keywords' => 0,
    'article_description' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'article_channelDomain' => 0,
    'member_userDomain' => 0,
    'cfg_hideUrl' => 0,
    'redirectUrl' => 0,
    'site' => 0,
    'cfg_cookiePre' => 0,
    'cfg_description' => 0,
    'cfg_webname' => 0,
    'cfg_weblogo' => 0,
    'HUONIAOROOT' => 0,
    'type' => 0,
    '_bindex' => 0,
    'type2' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4506316b9780_21207274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4506316b9780_21207274')) {function content_5d4506316b9780_21207274($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/www/wwwroot/wx.ziyousuda.com/include/tpl/plugins/modifier.replace.php';
?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
</title>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['article_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['article_description']->value;?>
">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/swiper.min_4.2.2.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index_1.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/zqlist.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" href="//g.alicdn.com/de/prismplayer/2.8.0/skins/default/aliplayer-min.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="//g.alicdn.com/de/prismplayer/2.8.0/aliplayer-min.js"><?php echo '</script'; ?>
>
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
<?php echo '<script'; ?>
>
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['article_channelDomain']->value;?>
', userDomain = '<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
',templets_skin='<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, redirectUrl = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
', site = '<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
';
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
	var templets = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
',listid;
<?php echo '</script'; ?>
>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_description']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_description'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_title'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_img'] = new Smarty_variable($_tmp3, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_url'] = new Smarty_variable($_tmp4, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_share.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body>
	<div class="fixed_box">

		<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('index', null, 0);?>
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>$_tmp5), 0);?>

		<!--顶部搜索和logo e-->	
		<!--导航s-->
		<div class="nav_box fn-clear">
			<a href="javascript:;" class="more_nav"></a>
			<ul class="fn-clear f_nav">
				<li class="active" data-index="all" data-page='1'><a href="javascript:;" >头条</a></li>
				<li data-index="video" data-page='1'><a href="javascript:;">视频</a></li>
				<li data-index="zqnum" data-page='1'><a href="javascript:;">媒体号</a></li>
				<li data-index="zt" data-page='1'><a href="javascript:;" >专题</a></li>
				<li data-index="img" data-page='1'  data-mold='1'><a href="javascript:;" >图集</a></li>
				<li data-index="svideo" data-page='1'  data-mold='3'><a href="javascript:;" >小视频</a></li>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo article(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li data-index="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
" data-page='1'  data-mold='0' data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><a href="javascript:;" ><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<li class="last_li" data-index="last" data-page='1'><a href="javascript:;"></a></li>
			</ul>
		</div>
		<!--导航e-->
	</div>
	
	<!--所有内容-->
	<!-- 内容部分 -->
	<div class="container" >
		<p class="refreshText"></p>
		<div class="swiper-container " id="tabs-container">
		    <div class="swiper-wrapper">
		       <div class="swiper-slide  con_all channel_0">
		    		<!--banner s-->
					<div class="BannerBox adv_banner1" >
						<div class="swiper-container">
							<div class="bd swiper-wrapper">
								<?php ob_start();?><?php echo getMyAd(array('title'=>"新闻资讯_移动端_头条幻灯",'type'=>"slide"),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_modifier_replace($_tmp6,'slideshow-item','swiper-slide');?>

							</div>
							<div class="pagination"></div>
						</div>
					</div>
					<!--banner e-->
					<!--搜索框s-->
					<div class="search_box">
						<form class="search" action="<?php echo getUrlPath(array('service'=>'article','template'=>'searchlist'),$_smarty_tpl);?>
">
							<div class="btn_right"><button type="submit"></button></div>
							<div class="input_box"><input type="text" name="keywords" placeholder="请输入搜索关键字" /></div>
							
						</form>
					</div>
					<!--搜索框e-->
					<div class="news_box">
						
					</div>
		       </div>
						
						<!-- 视频 box s -->
   	       <div class="swiper-slide con_video channel_1">
          			<!--新闻资讯s-->
     				<div class="news_box">
     				<!--视频s-->
     					<ul class="ulbox"></ul>
     				<!--视频e-->
     				</div>
     				<!--新闻资讯e-->
   	       </div>
						<!-- 视频 box e -->
		      	
		      	<!-- 媒体号 box s -->
		       <div class="swiper-slide con_zqnum channel_2">
	       			<div class="listbox">
						<div class="list_left">
							<ul >
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'selfmedia_field','return'=>'type')); $_block_repeat=true; echo article(array('action'=>'selfmedia_field','return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
" data-page='1'<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['type']==1) {?> class="on"<?php }?>><a href="javascript:;" ><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'selfmedia_field','return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</ul>	
						</div>
						<div class="list_right">
							<ul class="ulbox">
								
							</ul>
						</div>
						
					</div>
		       </div>
		       <!-- 媒体号 box e -->
		       <!-- 专题 box s -->
		       <div class="swiper-slide con_zt channel_3">
	       			<!--banner s-->
					<div class="BannerBox adv_banner2" >
						<div class="swiper-container">
							<div class="bd swiper-wrapper">
								<?php ob_start();?><?php echo getMyAd(array('title'=>"新闻资讯_移动端_专题幻灯",'type'=>"slide"),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_modifier_replace($_tmp7,'slideshow-item','swiper-slide');?>

							</div>
						</div>
					</div>
					<!--banner e-->
					
					
					
					<!--新闻资讯s-->
					<div class="news_box" id="zhuanti_box">
					<!--专题s-->
					<!--专题e-->
					<!--专题列表s-->	
						<div class="tlist_box">
							<ul class="ulbox"></ul>
						</div>
					<!--专题列表e-->	
					</div>
					<!--新闻资讯e-->
		       </div>
		       <!-- 专题 box e -->
		       <div class="swiper-slide con_img channel_4" ></div>
		       <div class="swiper-slide con_svideo " >
		       		<ul class="box1"></ul>
		       		<ul class="box2"></ul>
		       </div>
						<?php $_smarty_tpl->tpl_vars['s'] = new Smarty_variable(4, null, 0);?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"type",'return'=>"type2")); $_block_repeat=true; echo article(array('action'=>"type",'return'=>"type2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		       <div class="swiper-slide con_<?php echo $_smarty_tpl->tpl_vars['type2']->value['id'];?>
 channel_<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['type2']+$_smarty_tpl->tpl_vars['s']->value;?>
" ></div>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"type",'return'=>"type2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		    </div>
		</div>
	</div>
	
	
	<!--所有导航s-->
	<div class="nav_all">
		<h2><span>我的频道</span><a href="javascript:;" class="close_btn"></a></h2>
		<ul class="fn-clear nav_now">
			<li class="active" data-index="all" data-page='1'><a href="javascript:;" >头条</a></li>
				<li data-index="video" data-page='1'><a href="javascript:;">视频</a></li>
				<li data-index="zqnum" data-page='1'><a href="javascript:;">媒体号</a></li>
				<li data-index="zt" data-page='1'><a href="javascript:;" >专题</a></li>
				<li data-index="img" data-page='1'  data-mold='1'><a href="javascript:;" >图集</a></li>
				<li data-index="svideo" data-page='1'  data-mold='3'><a href="javascript:;" >小视频</a></li>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo article(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li data-index="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
" data-page='1'  data-mold='0' data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><a href="javascript:;" ><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>
	<!--所有导航e-->

<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_bottom_4.3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>"index"), 0);?>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/swiper.min_4.2.2.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.scroll.loading.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index_1.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
