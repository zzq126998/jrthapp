<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 11:55:14
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/shop/touch/109/index.html" */ ?>
<?php /*%%SmartyHeaderCode:19476454045d4505a2522352-04419268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4214dad5b48e5e06a21dea1b00e5ed4d05ad26d0' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/shop/touch/109/index.html',
      1 => 1538189568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19476454045d4505a2522352-04419268',
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
    'shop_channelName' => 0,
    'list' => 0,
    '_bindex' => 0,
    'cfg_qiandao_state' => 0,
    'type' => 0,
    'row' => 0,
    'member_userDomain' => 0,
    'langData' => 0,
    'cfg_weixinQr' => 0,
    'cfg_weixinName' => 0,
    'cfg_miniProgramQr' => 0,
    'cfg_miniProgramName' => 0,
    'keywords' => 0,
    'wxjssdk_appId' => 0,
    'wxjssdk_timestamp' => 0,
    'wxjssdk_nonceStr' => 0,
    'wxjssdk_signature' => 0,
    'shop_description' => 0,
    'shop_logoUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4505a258f121_12228246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4505a258f121_12228246')) {function content_5d4505a258f121_12228246($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<title><?php echo $_smarty_tpl->tpl_vars['shop_title']->value;?>
</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/swiper.min_4.2.2.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
1">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
',staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', cookieDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookieDomain']->value;?>
';
	jQuery = $;
<?php echo '</script'; ?>
>
</head>

<body>
	<!-- 头部 -->
	<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>$_smarty_tpl->tpl_vars['shop_channelName']->value), 0);?>

	<!-- 头部 end -->

	<!-- banner s -->
	<div class="banner">
	  <div class="wrapper">
	      <div class="swiper-container">
	          <div class="swiper-wrapper">
	              <?php echo getMyAd(array('title'=>"商城_模板二_移动端_广告一",'type'=>"slide"),$_smarty_tpl);?>

	          </div>
	          <div class="pagination"></div>
	      </div>
	  </div>
	</div>
	<!-- banner e -->

	<!-- 头条资讯 s -->
	<div class="pubBox ttNews fn-clear">
		<div class="lBox">
			<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/toutiao.png" alt="">
		</div>

		<div class="mBox">
			<div class="swiper-container">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide">
			        	<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"news",'return'=>"list",'pageSize'=>6)); $_block_repeat=true; echo shop(array('action'=>"news",'return'=>"list",'pageSize'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		        		<p><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span><?php echo date("m/d",$_smarty_tpl->tpl_vars['list']->value['pubdate']);?>
</span><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a> </p>
		        		<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['list']<6&&!(($_smarty_tpl->tpl_vars['_bindex']->value['list'])%2)) {?>
		        		</div>
						  <div class="swiper-slide">
			        	<?php }?>
			        	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"news",'return'=>"list",'pageSize'=>6), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			        </div>
			    </div>
			</div>
		</div>

	</div>
	<!-- 头条资讯 e -->
	<!-- 搜索 s-->
	<div class="search-form fn-clear">
	  <div class="sobj">
	    <div class="type">
	        <label>商品</label>
	        <s></s>
	    </div>

	    <div class="inp">
	      <form action="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
" id="sform">
	        <s></s>
	        <input id="keywords" name="keywords" type="text" placeholder="输入您要搜索的关键词">
	        <span id="search">搜索</span>
	      </form>
	    </div>
	  </div>
	  <?php if ($_smarty_tpl->tpl_vars['cfg_qiandao_state']->value) {?><div class="qiandao"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'qiandao'),$_smarty_tpl);?>
">签到</a></div><?php }?>
	  <div class="typelist">
	    	<p>商品</p>
	    	<p>店铺</p>
	  </div>
	</div>
	<!-- 搜索 e-->

	<!-- 模块链接 s -->
	<div class="pubBox module">
		<ul class="fn-clear">
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'qianggou'),$_smarty_tpl);?>
">
					 <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/qianggou.png"></span>
					 <span class="icon-txt">限时抢购</span>
				</a>
			</li>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'secKill'),$_smarty_tpl);?>
">
					 <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/miaosha.png"></span>
					 <span class="icon-txt">准点秒杀</span>
				</a>
			</li>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'integral','template'=>'index'),$_smarty_tpl);?>
">
					 <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/jifen.png"></span>
					 <span class="icon-txt">积分商城</span>
				</a>
			</li>
			<!--<li>
				<a href="javascript:;">
					 <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/zhibo.png"></span>
					 <span class="icon-txt">购物直播</span>
				</a>
			</li>-->
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'store'),$_smarty_tpl);?>
">
					 <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/shangjia.png"></span>
					 <span class="icon-txt">推荐商家</span>
				</a>
			</li>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['type']<6) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list','param'=>"typeid=".((string)$_smarty_tpl->tpl_vars['type']->value['id'])),$_smarty_tpl);?>
">
					 <span class="icon-circle"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['iconturl'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
"></span>
					 <span class="icon-txt"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
				</a>
			</li>
			<?php } elseif ($_smarty_tpl->tpl_vars['_bindex']->value['type']==7) {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
/category.html">
					 <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/gengduo.png"></span>
					 <span class="icon-txt">更多分类</span>
				</a>
			</li>
			<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>
	<!-- 模块链接 e -->

	<!-- 限时抢购 s-->
	<div class="pubBox qgou">
		<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'qianggou'),$_smarty_tpl);?>
">
			<div class="qiangBg">
				<div class="boxTitle fn-clear"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/xianshi.png" alt=""> <span>|&nbsp;&nbsp;错过优惠不再</span></div>
				<div class="boxCon fn-clear">
					<div class="cleft">
						<div class="jsTime fn-clear" id="timeCounter"  data-time="">
							<span class="hour">00</span><em>:</em>
							<span class="minute">00</span><em>:</em>
							<span class="second">00</span>
						</div>
						<div class="imgBox">
							<div class="ibox">
						     </div>
						     <div class="ibox">
						     </div>
						</div>
					</div>
					<div class="cright">
						<div class="ibox">
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<!-- 限时抢购 e-->

	<!-- 准点秒杀 s-->
	<div class="public msha">
		<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'secKill'),$_smarty_tpl);?>
">
			<div class="msbg">
				<div class="boxTitle fn-clear"><i class="ms"></i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/zdms.png" alt=""> <span>|&nbsp;&nbsp;超低价格 只拼手速</span>
				</div>
			</div>
			<div class="puBox fn-clear">
			    <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'limited'=>"5",'pageSize'=>3,'return'=>'list')); $_block_repeat=true; echo shop(array('action'=>"slist",'limited'=>"5",'pageSize'=>3,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="goodbox">
					<div class="boxImg">
						<img src="<?php if (!empty($_smarty_tpl->tpl_vars['list']->value['litpic'])) {
echo $_smarty_tpl->tpl_vars['list']->value['litpic'];
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/blank.gif<?php }?>" alt="">
					</div>
					<div class="boxText">
						<b><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</b> <strong><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</strong>
					</div>
				</div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'limited'=>"5",'pageSize'=>3,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="botbg"></div>
			</div>
		</a>
	</div>
	<!-- 准点秒杀 e-->

	<!-- 积分商城 s-->
	<div class="public jfen">
		<a href="<?php echo getUrlPath(array('service'=>'integral','template'=>'index'),$_smarty_tpl);?>
">
			<div class="msbg">
				<div class="boxTitle fn-clear"><i class="jf"></i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/jfsc.png" alt=""> <span>|&nbsp;&nbsp;超低价格 只拼手速</span>
				</div>
			</div>
			<div class="puBox fn-clear">
			    <?php $_smarty_tpl->smarty->_tag_stack[] = array('integral', array('action'=>"slist",'flat'=>"0",'pageSize'=>3,'return'=>'list')); $_block_repeat=true; echo integral(array('action'=>"slist",'flat'=>"0",'pageSize'=>3,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="goodbox">
					<i class="zero"></i>
					<div class="boxImg">
						<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="">
					</div>
				</div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo integral(array('action'=>"slist",'flat'=>"0",'pageSize'=>3,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</a>
	</div>
	<!-- 积分商城 e-->

	<!-- 购物直播 s-->
	<!--<div class="c_live">
		<div class="ltbg">购物直播</div>
		<div class="liveBox">
			<div class="fbox">
				<div class="fcon fcon1" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/lpicture01.png);">
					<a href="javascript:;">
						<p class="live_num"><span class="smark">LIVE</span> 2033观看</p>
						<div class="fbottom">
							<h4>主播优选</h4>
							<p>主播优选</p>
						</div>
					</a>
				</div>
				<div class="fcon fcon2" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/lpicture02.png);">
					<a href="javascript:;">
						<p class="live_num"><span class="smark">LIVE</span> 1053观看</p>
						<div class="fbottom">
							<h4>主播优选</h4>
							<p>主播优选</p>
						</div>
					</a>
				</div>
			</div>
			<div class="fbox">
				<div class="fcon fcon3" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/lpicture03.png);">
					<a href="javascript:;">
						<span class="smark">LIVE</span>
					</a>
				</div>
				<div class="fcon fcon4" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/lpicture04.png);">
					<a href="javascript:;">
						<span class="smark">LIVE</span>
					</a>
				</div>
				<div class="fcon fcon5" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/lpicture05.png);">
					<a href="javascript:;">
						<span class="smark">LIVE</span>
					</a>
				</div>
			</div>
		</div>
	</div>-->
	<!-- 购物直播 e-->

	<!-- 推荐商家 s-->
	<div class="c_shop">
		<div class="ltbg">推荐商家</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"store",'return'=>"list",'rec'=>"1",'pageSize'=>"2")); $_block_repeat=true; echo shop(array('action'=>"store",'return'=>"list",'rec'=>"1",'pageSize'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="shopBox toptag">
			<div class="sbotop fn-clear">
				<div class="sbleft">
					<img src="<?php if (!empty($_smarty_tpl->tpl_vars['list']->value['logo'])) {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['list']->value['logo']),'type'=>"large"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/blank.gif<?php }?>" alt="">
				</div>
				<div class="sbright">
					<h3><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h3>
					<p class="fn-clear"><span class="rzcon"><i></i>实名认证</span><span class="bzjcon"><i></i>保证金</span><span class="wepay"><i></i>微信支付</span></p>
				</div>
			</div>
			<div class="sbomain">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"row",'store'=>$_tmp1,'pageSize'=>"3")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"row",'store'=>$_tmp1,'pageSize'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="goBox">
					<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
">
						<div class="good_box">
							<img src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['litpic'])) {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['row']->value['litpic']),'type'=>"o_large"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/blank.gif<?php }?>" alt="">
							<div class="fcover"><p><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p></div>
						</div>
						<div class="good_txt"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</div>
					</a>
				</div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"row",'store'=>$_tmp1,'pageSize'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div class="sbofoot">
				<div class="sbf"><a href="tel:<?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];?>
"><i class="contact"></i>联系商家</a></div>
				<div class="sbf"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">进店逛逛 <i class="go"></i></a></div>
			</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"store",'return'=>"list",'rec'=>"1",'pageSize'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div class="morebox"><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'store'),$_smarty_tpl);?>
">查看更多</a></div>
	</div>
	<!-- 推荐商家 e-->

	<!-- 精选好物 s-->
	<div class="c_shop">
		<div class="ltbg">精选好物</div>
		<ul class="goodlist fn-clear">
		</ul>
		<div class="morebox"><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
">查看更多</a></div>

	</div>
	<!-- 精选好物 e-->

	<!-- 底部悬浮 s -->
	<div class="wechat">
	  <a href="javaScript:;"><i></i></a>
	</div>
	<div class="gocart topcart">
	  <a class="cart-btn" href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
/cart.html"><i></i><em class="cart num">0</em></a>
	</div>
	<div class="my">
	  <a href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
"><i></i></a>
	</div>
	<div class="gotop">
	  <a href="javaScript:;"><i></i></a>
	</div>
	<!-- 底部悬浮 e-->

	<!-- 加入购物车 -->
	<div class="size-box">
		<div class="size-selected">
			<div class="size-img"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/shImg03.png"></div>
			<div class="size-txt">
				<p class="price"><em><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</em> <b></b></p>
				<p class="count"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][525];?>
 <b></b> 件</p>
				<p class="guige"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][21];?>
：<em></em></p>
			</div>
			<a href="javascript:;" class="closed"></a>
		</div>
		<p class="guige-tips"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][0][6];?>
</p>
		<div class="scrollbox" id="scrollbox">
			<div class="scroll" >
				<div class="size-html">
					<dl class="sys_item"></dl>
					<dl class="sys_item"></dl>
				</div>
				<div class="size-count fn-clear">
					<span class="size-count-tit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][0][7];?>
<em></em></span><p class="sizeBtn"><a href="javascript:;" class="numbtn reduce">－</a><input type="number" class="shop-count" value="1"><a href="javascript:;" class="numbtn add">＋</a></p>
				</div>
			</div>
		</div>
		<div class="size-confirm"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][1];?>
</a></div>
	</div>

	<div class="mask"></div>


<div class="wechat-popup">
	<div class="con">
		<a href="javascript:;" class="close">×</a>
		<?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value) {?>
		<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
"></dt><dd><?php echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;?>
<br>微信中长按识别</dd></dl>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value) {?>
		<dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value;?>
"></dt><dd><?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramName']->value;?>
<br>微信中长按识别</dd></dl>
		<?php }?>
	</div>
</div>
<div class="topcart" style="display:none;"><div class="cart-con"><div class="cartlist"><ul></ul></div></div></div>
<?php echo '<script'; ?>
>
	var atpage = 1,
		pageSize = 6,
		keywords = '<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
';
	var prourl   = '<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
';
	var storeurl = '<?php echo getUrlPath(array('service'=>'shop','template'=>'store'),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.fly.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/iscroll.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/swiper.min_4.2.2.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var wxconfig = {
		"appId": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_appId']->value;?>
',
		"timestamp": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_timestamp']->value;?>
',
		"nonceStr": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_nonceStr']->value;?>
',
		"signature": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_signature']->value;?>
',
		"description": '<?php echo $_smarty_tpl->tpl_vars['shop_description']->value;?>
',
		"title": '<?php echo $_smarty_tpl->tpl_vars['shop_title']->value;?>
',
		"imgUrl": '<?php echo $_smarty_tpl->tpl_vars['shop_logoUrl']->value;?>
',
		"link": '<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
',
	};

	document.write(unescape("%3Cscript src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v="+~(-new Date())+"'type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
