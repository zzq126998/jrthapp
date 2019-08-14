<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 17:25:37
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/business/touch/121/index.html" */ ?>
<?php /*%%SmartyHeaderCode:20203167485d45531191b1f7-99396183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d5a5caaac974c7f667ad006fdbd1405bac64a7' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/business/touch/121/index.html',
      1 => 1564485920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20203167485d45531191b1f7-99396183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'business_channelName' => 0,
    'business_keywords' => 0,
    'business_description' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'member_userDomain' => 0,
    'cfg_cookiePre' => 0,
    'cfg_hideUrl' => 0,
    'redirectUrl' => 0,
    'site' => 0,
    'cfg_geetest' => 0,
    'business_title' => 0,
    'business_logoUrl' => 0,
    'business_channelDomain' => 0,
    'HUONIAOROOT' => 0,
    'siteCityInfo' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d455311961fb2_33184516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d455311961fb2_33184516')) {function content_5d455311961fb2_33184516($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['business_channelName']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['business_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['business_description']->value;?>
">
<meta name="wap-font-scale" content="no">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no,viewport-fit=cover">
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/swiper.min_4.2.2.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/jquery.smartScroll.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', userDomain = '<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, redirectUrl = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
', site = '<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
';
	var geetest = <?php echo $_smarty_tpl->tpl_vars['cfg_geetest']->value;?>
;
	var templets = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
	var typeUrl = '<?php echo getUrlPath(array('service'=>'business','template'=>'list','param'=>"typeid=%id"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business_description']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_description'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business_title']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_title'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business_logoUrl']->value;?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_img'] = new Smarty_variable($_tmp3, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_url'] = new Smarty_variable($_tmp4, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_share.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>((string)$_smarty_tpl->tpl_vars['business_channelName']->value)), 0);?>


<!-- 轮播图 s -->
<div class="banner">
	<div class="wrapper">
	    <div class="swiper-container">
	        <div class="swiper-wrapper">
	            <?php echo getMyAd(array('title'=>"商家_模板二_移动端_banner",'type'=>'slide'),$_smarty_tpl);?>

	        </div>
	        <div class="pagination"></div>
	    </div>
 	</div>
</div>

<!-- 轮播图 e -->

<!-- 搜索 -->
<div class="search-form">
	<div class="sobj">
		<div class="area">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/changecity.html">
				<i></i>
				<label><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['name'];?>
</label>
				<s></s>
			</a>
		</div>
		<div class="inp">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/search.html" >
				<s></s>
				<label>找楼盘、找小区、找地址</label>
				<span>搜索</span>
			</a>
		</div>
	</div>
</div>

<!-- 搜索 e -->

<!-- 最新入驻 s -->
<div class="pubBox tcNews fn-clear">
	<div class="lBox"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/bruzhu.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" alt=""></div>
	<div class="mBox">
		<div class="swiper-container">
		    <div class="swiper-wrapper">
                <div class="pl_h"></div>
            </div>
	    	<div class="pagination"></div>
		</div>
	</div>
	<div class="rBox">
		<?php if (!$_smarty_tpl->tpl_vars['userinfo']->value||$_smarty_tpl->tpl_vars['userinfo']->value['userType']==1) {?>
		<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/b-ruzhu.png" alt="">
			<p>我要入驻</p>
		</a>
		<?php } elseif ($_smarty_tpl->tpl_vars['userinfo']->value['busiType']==1) {?>
		<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'join_upgrade'),$_smarty_tpl);?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/b-ruzhu.png" alt="">
			<p>我要升级</p>
		</a>
		<?php } else { ?>
		<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'join_renew'),$_smarty_tpl);?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/b-ruzhu.png" alt="">
			<p>我要续费</p>
		</a>
		<?php }?>
	</div>

</div>
<!-- 最新入驻 e -->

<!-- 滑动导航 s -->
<div class="pubBox tcInfo">
	<div class="tabMain">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            	<ul>
                    <li class="pl_h"></li>
                    <li class="pl_h"></li>
                    <li class="pl_h"></li>
                    <li class="pl_h"></li>
                    <li class="pl_h"></li>
            	</ul>
            </div>
        </div>
        <div class="pagination"></div>
    </div>
	</div>
</div>
<!-- 滑动导航 e -->

<!-- 广告位 s -->
<div class="pubBox adpos fn-clear">
	<div class="adBox">
		<?php echo getMyAd(array('title'=>"商家_模板二_移动端_广告一"),$_smarty_tpl);?>

	</div>
	<div class="adBox">
		<?php echo getMyAd(array('title'=>"商家_模板二_移动端_广告二"),$_smarty_tpl);?>

	</div>
	<div class="adBox">
		<?php echo getMyAd(array('title'=>"商家_模板二_移动端_广告三"),$_smarty_tpl);?>

	</div>
	<div class="adBox">
		<?php echo getMyAd(array('title'=>"商家_模板二_移动端_广告四"),$_smarty_tpl);?>

	</div>

</div>

<!-- 广告位 e -->
<div class="pubBox AdBox">
	<?php echo getMyAd(array('title'=>"商家_模板二_移动端_广告五"),$_smarty_tpl);?>

</div>

<!-- 推荐商家 s -->
<div class="pubBox recomBus">
	<h3>推荐商家</h3>
	<ul class="fn-clear">
        <li class="pl_h fn-clear">
            <div class="pl_h_l"></div>
            <div class="pl_h_r">
                <div class="pl_h_r_r"></div>
                <div class="pl_h_r_l"></div>
            </div>
        </li>
        <li class="pl_h fn-clear">
            <div class="pl_h_l"></div>
            <div class="pl_h_r">
                <div class="pl_h_r_r"></div>
                <div class="pl_h_r_l"></div>
            </div>
        </li>
        <li class="pl_h fn-clear">
            <div class="pl_h_l"></div>
            <div class="pl_h_r">
                <div class="pl_h_r_r"></div>
                <div class="pl_h_r_l"></div>
            </div>
        </li>
        <li class="pl_h fn-clear">
            <div class="pl_h_l"></div>
            <div class="pl_h_r">
                <div class="pl_h_r_r"></div>
                <div class="pl_h_r_l"></div>
            </div>
        </li>
        <li class="pl_h fn-clear">
            <div class="pl_h_l"></div>
            <div class="pl_h_r">
                <div class="pl_h_r_r"></div>
                <div class="pl_h_r_l"></div>
            </div>
        </li>
    </ul>
	<div class="moreBox">
		<a href="javascript:;" class="btnMore">查看更多</a>
	</div>

</div>
<!-- 推荐商家 e -->

<div class="gotop"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/go-top.png" alt=""></div>

<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_bottom_4.3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>"business"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_location.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
