<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-22 02:07:28
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/business/128/index.html" */ ?>
<?php /*%%SmartyHeaderCode:7220381795d0d1ce092f5f7-69815657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88aa067d6ddc2252e29b5de876d8312f95b7402c' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/business/128/index.html',
      1 => 1555743752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7220381795d0d1ce092f5f7-69815657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'seo_title' => 0,
    'business_title' => 0,
    'business_keywords' => 0,
    'business_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'business_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'cfg_hotline' => 0,
    'HUONIAOROOT' => 0,
    'pageUrl' => 0,
    'bjtype' => 0,
    'm' => 0,
    'list' => 0,
    'n' => 0,
    'nlist' => 0,
    'slist' => 0,
    'installModuleArr' => 0,
    'ilist' => 0,
    'jlist' => 0,
    'hlist' => 0,
    'wlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0d1ce09d1910_53324853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0d1ce09d1910_53324853')) {function content_5d0d1ce09d1910_53324853($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/hnup.rucheng.pro/include/tpl/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value!='') {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['business_title']->value;
}?></title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['business_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['business_description']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
', templatePath = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;
<?php echo '</script'; ?>
>
</head>
<body class="w1200">
<?php $_smarty_tpl->tpl_vars['channel'] = new Smarty_variable('business', null, 0);?>
<?php $_smarty_tpl->tpl_vars['hotline'] = new Smarty_variable($_smarty_tpl->tpl_vars['cfg_hotline']->value, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_top_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php ob_start();?><?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['pageUrl'] = new Smarty_variable($_tmp1, null, 0);?>
<div class="introduce-wrap">
	<div class="introduce wrap fn-clear">
		<div class="menu-left fn-left">
			<ul class="one fn-clear">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"type",'return'=>'bjtype','page'=>"1",'pageSize'=>"11")); $_block_repeat=true; echo business(array('action'=>"type",'return'=>'bjtype','page'=>"1",'pageSize'=>"11"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li class="one-li see-more">
					<a target="_blank" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bjtype']->value['id'];?>
<?php $_tmp3=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp2,'typeid'=>$_tmp3),$_smarty_tpl);?>
"><i style="background-image: url(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bjtype']->value['iconturl'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
)" class="a1"></i><?php echo $_smarty_tpl->tpl_vars['bjtype']->value['typename'];?>
<s></s></a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"type",'return'=>'bjtype','page'=>"1",'pageSize'=>"11"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				
				<li class="one-li see-more typemore">
					<a href="javascript:;"><i class="a12"></i>查看更多<s></s></a>
					<ul class="menu-two">
						<?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable(1, null, 0);?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"type",'return'=>'bjtype','page'=>"1")); $_block_repeat=true; echo business(array('action'=>"type",'return'=>'bjtype','page'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if ($_smarty_tpl->tpl_vars['m']->value>11) {?>
						<li><a target="_blank" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bjtype']->value['id'];?>
<?php $_tmp5=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp4,'typeid'=>$_tmp5),$_smarty_tpl);?>
"><i style="background-image: url(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bjtype']->value['iconturl'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
)" class="b1"></i><?php echo $_smarty_tpl->tpl_vars['bjtype']->value['typename'];?>
</a></li>
						<?php }?>
						<?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value+1, null, 0);?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"type",'return'=>'bjtype','page'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</li>
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
" id="typenum">
			</ul>
		</div>

		<div class="menu-middle fn-left">
			<div class="middle-slide">
				<div class="slideBox slideBox1">
					<div class="bd">
						<ul>
							<?php echo getMyAd(array('title'=>"商家_模板三_电脑端_广告一",'type'=>"slide"),$_smarty_tpl);?>

						</ul>
					</div>
					<div class="hd"><ul></ul></div>
				</div>
			</div>
			<div class="middle-shop">
				<div class="shop-title">最新入驻商家</div>
				<div class="shop-con fn-clear">

					<ul class="fn-left">
						<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"4",'pageSize'=>"6")); $_block_repeat=true; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"4",'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['n']->value<=3) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/index-shop<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
.png" alt=""><?php }?><span class="text"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span><span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['pubdate'],'%m.%d');?>
</span></a></li>
						<?php if ($_smarty_tpl->tpl_vars['n']->value%3==0) {?>
						</ul>
						<ul class="fn-left">
						<?php }?>
						<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"4",'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>
		</div>

		<div class="menu-right fn-right">
			<div class="shop fn-clear">
				<div class="join-box box fn-left">
					<div class="join-bg"></div>
					<a class="join fn-left" href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
">商家入驻</a>
				</div>
				<div class="manage-box box fn-right">
					<div class="manage-bg"></div>
					<a class="manage fn-left" href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'business-config'),$_smarty_tpl);?>
">商家管理</a>
				</div>
			</div>
			<!-- 公告 -->
			<div class="notice">
				<div class="notice-title">公告<a class="more" target="_blank" href="<?php echo getUrlPath(array('service'=>'business','template'=>'notices'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a></div>
				<div class="notice-con">
					<div class="txtMarquee-top">
						<div class="bd">
							<ul class="infoList">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"notice",'return'=>'nlist','pageSize'=>"8")); $_block_repeat=true; echo business(array('action'=>"notice",'return'=>'nlist','pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
">[公告]<?php echo $_smarty_tpl->tpl_vars['nlist']->value['title'];?>
</a></li>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"notice",'return'=>'nlist','pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- 商家服务 -->
			<div class="serve">
				<div class="serve-title">商家服务</div>
				<div class="serve-con">
					<ul class="fn-clear">
						<li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve1.png" alt=""><p>独立小程序</p></a></li>
						<li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve2.png" alt=""><p>多店铺管理</p></a></li>
						<li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve3.png" alt=""><p>企业官网</p></a></li>
						<li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve4.png" alt=""><p>互动直播</p></a></li>
						<li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve5.png" alt=""><p>自定义单页</p></a></li>
						<li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve6.png" alt=""><p>商家视频</p></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 推荐商家 -->
	<div class="intro-shop wrap">
		<div class="shop-title"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-title.png" alt="">推荐商家<a href="<?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a></div>
		<div class="shop-con">
			<ul class="fn-clear">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"10")); $_block_repeat=true; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
						<div class="shop-bg">
							<img class="bg-img" src="<?php echo $_smarty_tpl->tpl_vars['list']->value['banner'][0]['pic'];?>
" alt="">
							<img class="code" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code.png" alt="">
							<div class="code-img"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" alt=""></div>
						</div>
						<div class="shop-details">
							<div class="img-title"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt=""></div>
							<div class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];
if ($_smarty_tpl->tpl_vars['list']->value['isbid']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/ding.png" alt=""><?php }?></div>
							<div class="location">地址：<?php echo $_smarty_tpl->tpl_vars['list']->value['address'];?>
</div>
							<?php if ($_smarty_tpl->tpl_vars['list']->value['tel']) {?>
								<div class="tel"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/tel.png" alt=""><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'][0];?>
</div>
							<?php }?>
						</div>
					</a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
	</div>
	<!-- 广告位 -->
	<div class="ad-con">
	  	<?php echo getMyAd(array('title'=>"商家_模板三_电脑端_广告二",'type'=>"siteAdvObj"),$_smarty_tpl);?>

	</div>
	<!-- 便民黄页 -->
	<div class="yellow-page wrap">
		<div class="yellow-title fn-clear">
			<h3><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-title.png" alt="">便民黄页</h3>
			<div class="title-r">
				<a class="more" target="_blank" href="<?php echo getUrlPath(array('service'=>'huangye','template'=>'list'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a>
				<div class="join"><i></i><a class="huangye" target="_blank" href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
">入驻黄页</a></div>
			</div>
		</div>
		<div class="yellow-con fn-clear">
			<div class="yellow-left fn-left">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"blist",'return'=>'list','pageSize'=>"6")); $_block_repeat=true; echo business(array('action'=>"blist",'return'=>'list','pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="yellow-list">
					<div class="list-left fn-clear">
						<div class="page-img">
							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img class="intro-img" src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt=""><img class="cover" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/img-cover.png" alt=""></a>
						</div>
						<div class="page-text">
							<p class="name"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
							<p class="tel"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/tel3.png" alt=""><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'][0];?>
</p>
							<p class="location"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/yellow-location.png" alt=""><?php echo $_smarty_tpl->tpl_vars['list']->value['address'];?>
</p>
						</div>
						<div class="code-icon">
							<img class="code" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code2.png" alt="">
							<div class="code-hover"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" alt=""></div>
						</div>
					</div>
				</div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"blist",'return'=>'list','pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div class="yellow-right fn-right">
				<div class="join-title">最新入驻</div>
				<div class="join-con">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"4")); $_block_repeat=true; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<div class="join-list fn-clear">
						<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
							<img class="join-intro" src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt="">
							<div class="list-right">
								<p class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
								<p class="tel"><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'][0];?>
</p>
								<p class="location"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/new-join-location.png" alt=""><?php echo $_smarty_tpl->tpl_vars['list']->value['address'];?>
</p>
							</div>
						</a>
					</div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>
		</div>
	</div>
	<!-- 广告位 -->
	<div class="ad-con">
	  	<?php echo getMyAd(array('title'=>"商家_模板三_电脑端_广告三",'type'=>"siteAdvObj"),$_smarty_tpl);?>

	</div>
	<!-- 限时抢购 -->
	<div class="flash-sale fn-clear wrap">
		<div class="buy fn-left">
			<p>距离本场结束还剩</p>
			<div class="settime" endtime="2018-12-9 8:49:0"></div>
		</div>
		<div class="sale-list fn-right">
			<div class="slideBox2">
				<div class="bd">
					<ul id="limit"></ul>
				</div>
				<a class="prev" href="javascript:void(0)"></a>
				<a class="next" href="javascript:void(0)"></a>
			</div>
		</div>
	</div>
	<!-- 推荐团购 -->
	<div class="yellow-page group-wrap fn-clear wrap">
		<div class="yellow-title fn-clear">
			<h3><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-title.png" alt="">推荐团购</h3>
			<div class="title-r">
				<a class="more" href="<?php echo getUrlPath(array('service'=>'tuan','template'=>'list'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a>
			</div>
		</div>
		<div class="group fn-clear">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tuan', array('action'=>"tlist",'return'=>"list",'pageSize'=>"4")); $_block_repeat=true; echo tuan(array('action'=>"tlist",'return'=>"list",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="group-list">
				<div class="group-img"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['list']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt=""></a></div>
				<div class="group-box">
					<p class="name"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
					<p class="num"><?php echo $_smarty_tpl->tpl_vars['list']->value['sale'];?>
人已团</p>
					<div class="money fn-clear">
						<p class="red"><span class="sign"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</span><span class="qian"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span></p>
						<p class="grey"><span class="sign"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</span><span class="qian"><?php echo $_smarty_tpl->tpl_vars['list']->value['market'];?>
</span></p>
					</div>
					<div class="buy"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">去抢购</a></div>
				</div>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tuan(array('action'=>"tlist",'return'=>"list",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	</div>
	<!-- 广告位 -->
	<div class="ad-con">
	  <?php echo getMyAd(array('title'=>"商家_模板三_电脑端_广告四",'type'=>"siteAdvObj"),$_smarty_tpl);?>

	</div>
	<!-- 发现好店 -->
	<div class="find-wrap wrap fn-clear">
		<div class="find-left fn-left">
			<div class="find-title fn-clear"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-title.png" alt="">发现好店<a class="more" target="_blank" href="<?php echo getUrlPath(array('service'=>'tuan','template'=>'store'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a></div>
			<div class="find-shop fn-clear">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tuan', array('action'=>"storeList",'return'=>"slist",'pageSize'=>"10")); $_block_repeat=true; echo tuan(array('action'=>"storeList",'return'=>"slist",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="find-list">
					<div class="list-bg"><img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['slist']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt=""></div>
					<div class="hover">
						<div class="img-hover"></div>
						<div class="getin"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['slist']->value['url'];?>
">进入店铺</a></div>
					</div>
					<div class="list-con">
						<p class="name"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['slist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['slist']->value['company'];?>
</a></p>
						<p class="tel"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/tel.png" alt=""><?php echo $_smarty_tpl->tpl_vars['slist']->value['tel'];?>
</p>
					</div>
				</div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tuan(array('action'=>"storeList",'return'=>"slist",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
		<!-- <div class="find-right fn-right">
			<div class="nearby">
				<div class="nearby-title">附近商圈<a class="fn-right" target="_blank" href="<?php echo getUrlPath(array('service'=>'tuan','template'=>'shangquan'),$_smarty_tpl);?>
">更多&gt;&gt;</a></div>
				<div class="nearby-con">

				</div>
			</div>
		</div> -->
	</div>
	<!-- 新加入媒体 -->
	<!-- <div class="yellow-page new-media wrap fn-clear">
		<div class="yellow-title fn-clear">
			<h3><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-title.png" alt="">新加入媒体</h3>
			<div class="title-r">
				<a class="more" href="javascript:;">查看更多&gt;&gt;</a>
			</div>
		</div>
		<div class="media-page fn-clear">
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media1.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media2.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media3.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media4.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media5.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media6.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media3.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
			<div class="media-list">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/media2.png" alt="">
				<p class="name">墨者狩熟</p>
				<a class="index" href="javascript:;">主页</a>
			</div>
		</div>
	</div> -->
	<div class="wrap shop-sort fn-clear">
		<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!-- 推荐二手店铺 -->
		<div class="two fn-left">
			<div class="title two-title">推荐二手店铺<a target="_blank" href="<?php echo getUrlPath(array('service'=>'info','template'=>'list'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a></div>
			<div class="two-con">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"shopList",'return'=>"ilist",'pagesize'=>"5")); $_block_repeat=true; echo info(array('action'=>"shopList",'return'=>"ilist",'pagesize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
">
					<div class="two-list fn-clear">
						<div class="two-img"><img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['ilist']->value['user']['photo']),'type'=>"small"),$_smarty_tpl);?>
" alt=""></div>
						<div class="two-text">
							<p class="name"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['user']['company'];?>
</p>
							<?php if ($_smarty_tpl->tpl_vars['ilist']->value['tel']) {?><p class="tel"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/tel.png" alt=""><?php echo $_smarty_tpl->tpl_vars['ilist']->value['tel'];?>
</p><?php }?>
							<p class="place"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'];?>
</p>
						</div>
					</div>
				</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"shopList",'return'=>"ilist",'pagesize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
		<?php }?>
		<?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!-- 招聘企业 -->
		<div class="recruit fn-left">
			<div class="title two-title">招聘企业<a target="_blank" href="<?php echo getUrlPath(array('service'=>'job','template'=>'list'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a></div>
			<div class="recruit-con">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"company",'return'=>"jlist",'pageSize'=>"5")); $_block_repeat=true; echo job(array('action'=>"company",'return'=>"jlist",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['jlist']->value['url'];?>
">
					<div class="recruit-list fn-clear">
						<div class="recruit-img"><img src="<?php echo $_smarty_tpl->tpl_vars['jlist']->value['logo'];?>
" alt=""></div>
						<div class="recruit-text">
							<p class="name"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['title'];?>
</p>
							<p class="job">共发布 <span><?php echo $_smarty_tpl->tpl_vars['jlist']->value['pcount'];?>
</span> 个职位</p>
							<?php if ($_smarty_tpl->tpl_vars['jlist']->value['contact']) {?><p class="tel"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/tel.png" alt=""><?php echo $_smarty_tpl->tpl_vars['jlist']->value['contact'];?>
</p><?php }?>
						</div>
					</div>
				</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"company",'return'=>"jlist",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
		<?php }?>
		<?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!-- 外卖店铺 -->
		<div class="recruit fn-left">
			<div class="title two-title">中介公司<a target="_blank" href="<?php echo getUrlPath(array('service'=>'house','template'=>'store'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a></div>
			<div class="recruit-con">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjComList",'return'=>"hlist",'pageSize'=>"5")); $_block_repeat=true; echo house(array('action'=>"zjComList",'return'=>"hlist",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['hlist']->value['url'];?>
">
					<div class="recruit-list fn-clear">
						<div class="recruit-img"><img src="<?php if ($_smarty_tpl->tpl_vars['hlist']->value['litpic']) {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['hlist']->value['litpic']),'type'=>"small"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/404.jpg<?php }?>" alt=""></div>
						<div class="recruit-text">
							<p class="name"><?php echo $_smarty_tpl->tpl_vars['hlist']->value['title'];?>
</p>
							<p class="job">共有团队 <span><?php echo $_smarty_tpl->tpl_vars['hlist']->value['countTeam'];?>
</span> 人</p>
							<?php if ($_smarty_tpl->tpl_vars['hlist']->value['tel']) {?><p class="tel"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/tel.png" alt=""><?php echo $_smarty_tpl->tpl_vars['hlist']->value['tel'];?>
</p><?php }?>
						</div>
					</div>
				</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjComList",'return'=>"hlist",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
		<?php }?>
		<!-- <div class="takeout fn-right">
			<div class="title two-title">外卖店铺<a target="_blank" href="<?php echo getUrlPath(array('service'=>'waimai','template'=>'list'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a></div>
			<div class="takeout-con fn-clear">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('waimai', array('action'=>"shopList",'return'=>"wlist",'pageSize'=>"12")); $_block_repeat=true; echo waimai(array('action'=>"shopList",'return'=>"wlist",'pageSize'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['wlist']->value['url'];?>
">
					<div class="takeout-list">
						<img src="<?php if ($_smarty_tpl->tpl_vars['wlist']->value['pic']) {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['wlist']->value['pic']),'type'=>"small"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/404.jpg<?php }?>" alt="">
						<p class="name"><?php echo $_smarty_tpl->tpl_vars['wlist']->value['shopname'];?>
</p>
					</div>
				</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo waimai(array('action'=>"shopList",'return'=>"wlist",'pageSize'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div> -->
	</div>
</div>

<!-- 底部 -->
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'business','theme'=>'gray'), 0);?>

<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_location.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
