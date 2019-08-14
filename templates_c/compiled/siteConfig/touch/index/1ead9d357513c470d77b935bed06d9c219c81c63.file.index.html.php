<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 12:24:34
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/touch/124/index.html" */ ?>
<?php /*%%SmartyHeaderCode:12769101415d450c82bee3a5-78418665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ead9d357513c470d77b935bed06d9c219c81c63' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/touch/124/index.html',
      1 => 1562852177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12769101415d450c82bee3a5-78418665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_webname' => 0,
    'cfg_soft_lang' => 0,
    'cfg_keywords' => 0,
    'cfg_description' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'member_userDomain' => 0,
    'cfg_hideUrl' => 0,
    'redirectUrl' => 0,
    'site' => 0,
    'cfg_cookiePre' => 0,
    'cfg_weblogo' => 0,
    'HUONIAOROOT' => 0,
    'cfg_weixinQr' => 0,
    'cfg_weixinName' => 0,
    'cfg_miniProgramQr' => 0,
    'cfg_miniProgramName' => 0,
    'cfg_app_ios_download' => 0,
    'cfg_app_android_download' => 0,
    'cfg_app_logo' => 0,
    'cfg_appname' => 0,
    'cfg_app_ios_version' => 0,
    'cfg_app_android_version' => 0,
    'siteCityInfo' => 0,
    'installModuleArr' => 0,
    'cfg_ucenterLinks' => 0,
    'shop_channelDomain' => 0,
    'dating_channelDomain' => 0,
    'business_channelDomain' => 0,
    'huangye_channelDomain' => 0,
    'renovation_channelDomain' => 0,
    'huodong_channelDomain' => 0,
    'house_channelDomain' => 0,
    'info_channelDomain' => 0,
    'job_channelDomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d450c82c55d70_73522621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d450c82c55d70_73522621')) {function content_5d450c82c55d70_73522621($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/www/wwwroot/wx.ziyousuda.com/include/tpl/plugins/modifier.replace.php';
?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['cfg_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['cfg_description']->value;?>
">
<meta name="wap-font-scale" content="no">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no,viewport-fit=cover">
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
js/core/zepto.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', userDomain = '<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, redirectUrl = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
', site = '<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
';
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
	var templets = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';

	if(device.indexOf('huoniao') > -1){
        setTimeout(function(){
            setupWebViewJavascriptBridge(function(bridge) {
                bridge.callHandler('goToIndex', {}, function(){});
            });
        }, 500);
    }
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
		<div class="wechat-popup">
			<div class="con">
				<a href="javascript:;" class="close">×</a>
				<?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value) {?><dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
"></dt><dd><?php echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;?>
<br>微信中长按识别</dd></dl><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value) {?><dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value;?>
"></dt><dd><?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramName']->value;?>
<br>微信中长按识别</dd></dl><?php }?>
			</div>
		</div>
		<div class="downloadAppFixed">
		<div class="con">
			<a href="javascript:;" class="close">×</a>
			<?php if ($_smarty_tpl->tpl_vars['cfg_app_ios_download']->value||$_smarty_tpl->tpl_vars['cfg_app_android_download']->value) {?>
			<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'mobile'),$_smarty_tpl);?>
">
				<dl class="fn-clear app">
					<dt><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_app_logo']->value;?>
" /></dt>
					<dd>
						<h3>立即下载<?php echo $_smarty_tpl->tpl_vars['cfg_appname']->value;?>
</h3>
						<p data-ios="<?php echo $_smarty_tpl->tpl_vars['cfg_app_ios_version']->value;?>
" data-android="<?php echo $_smarty_tpl->tpl_vars['cfg_app_android_version']->value;?>
">最新版本：v<em></em></p>
					</dd>
				</dl>
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value) {?>
			<div class="weixin">
				<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
" />
				<ul>
					<li>微信关注“<?php echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;?>
”公众号</li>
					<li>微信扫描上方二维码关注</li>
				</ul>
			</div>
			<?php }?>
		</div>
	</div>
		<!--轮播图-->
		<div class="banner">
			<div class="wrapper">
			    <div class="swiper-container">
			        <div class="swiper-wrapper">
			        	<?php ob_start();?><?php echo getMyAd(array('title'=>"首页_模板三_移动端_广告一",'type'=>"slide"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_modifier_replace($_tmp5,"slideshow-item","swiper-slide");?>

			        </div>
			        <div class="pagination"></div>
			    </div>
		 	</div>
		</div>
		
		<div class="head-search-box">
			<div class="head-search">
				<!--选定地点-->
				<?php if ($_smarty_tpl->tpl_vars['siteCityInfo']->value&&$_smarty_tpl->tpl_vars['siteCityInfo']->value['count']>1) {?><div class="areachose" data-url="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/changecity.html"><span><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['name'];?>
</span><s></s></div><?php }?>
				
				<!--搜索、扫描-->
				<div class="search-scan">
					
					<a class="search<?php if ($_smarty_tpl->tpl_vars['siteCityInfo']->value['count']<=1) {?> singelCity<?php }?>" data-url="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'search'),$_smarty_tpl);?>
"><i></i></a>
					<i class="scan"></i>
				</div>
			</div>
		</div>
		<!--导航-->
		<div class="pubBox tcInfo">
			<div class="tabMain show">
			    <div class="swiper-container swipre00">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide">
			            	<ul>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
		                        <li class="pl_h"><span></span></li>
			            	</ul>
			            </div>
			        
			        </div>
			        <div class="pagination pag00"></div>
			    </div>
			</div>
		</div>
		<!--管理中心-->
		<div class="manageInfo-box">
			<div class="manageInfo">
				<ul class="manage">
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'qiandao'),$_smarty_tpl);?>
">
							<p>签到</p>
						</a>
					</li>
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'pocket'),$_smarty_tpl);?>
">
							<p>我的口袋</p>
						</a>
					</li>
                    <?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                    <?php if (in_array('order',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order'),$_smarty_tpl);?>
">
							<p>订单管理</p>	
						</a>						
					</li>
                    <?php }?>
                    <?php }?>
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage'),$_smarty_tpl);?>
">
							<p>发布管理</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!--产品推荐-->
		<div class="recommend-box">
			<?php echo getMyAd(array('title'=>"首页_模板三_移动端_广告二"),$_smarty_tpl);?>

		</div>

        <?php if (in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<div class="shop-discount">
			<a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
">
				<h3>特惠商城</h3>
			</a>		
		</div>
        <?php }?>

        <?php if (in_array("dating",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<div class="jiaoyou-online">
			<a href="<?php echo $_smarty_tpl->tpl_vars['dating_channelDomain']->value;?>
">
			<div class="jiaoyou">
				<div class="jiaoyou-img">
					<i></i>
				</div>
				<div class="jiaoyou-text">
					<h3><span>交友•</span>附近&动态</h3>
					<p >缘分就在你身边</p>
				</div>
				<div class="jiaoyou-headicon">
					<ul class="head-icon">
						<li><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/headicon-1.jpg"></li>
						<li><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/headicon-2.jpg"></li>
						<li><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/headicon-3.jpg"></li>
					</ul>
					<div class="more">
						<i></i>
					</div>
				</div>
				
			</div>
			</a>
		</div>
        <?php }?>

		<!--限时抢购、服务-->
		<div class="servericeall-box">
			<div class="serverice">
				<div class="deadline">
					<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'qianggou'),$_smarty_tpl);?>
">
						<p ><i></i><span>限时抢购</span></p>
						<p class="nowtime"><span>0</span>点场还剩：</p>
						<p class="deadline-show"><span id="time_h">0</span><i>:</i><span id="time_m">0</span><i>:</i><span id="time_s">0</span></p>
					</a>
				</div>
				<div class="local-shoper">
					<a href="<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
">
						<h3>本地商家</h3>
						<p>优质商家任你挑</p>
					</a>
					
				</div>
				<div class="local-service">
					<a href="<?php echo $_smarty_tpl->tpl_vars['huangye_channelDomain']->value;?>
">
						<h3>本地服务</h3>
						<p>生活服务查询</p>
					</a>
					
				</div>
				
			</div>
		</div>

		<!-- 便民查询 s -->
		<div class="pubBox convenience">
			<h3>生活服务查询 <i></i></h3>
			<ul class="fn-clear service_list">
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=超市'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-shop.png"></span>
						<span class="icon-txt">超市</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=医院'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-hospital.png"></span>
						<span class="icon-txt">医院</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=公交站'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-bus.png"></span>
						<span class="icon-txt">公交站</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=书店'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-book.png"></span>
						<span class="icon-txt">书店</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=体育馆'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-sports.png"></span>
						<span class="icon-txt">体育馆</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=营业厅'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-bussiness.png"></span>
						<span class="icon-txt">营业厅</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=加油站'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-gasStation.png"></span>
						<span class="icon-txt">加油站</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=公安局'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-polic.png"></span>
						<span class="icon-txt">公安局</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_list','param'=>'directory=停车场'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-park.png"></span>
						<span class="icon-txt">停车场</span>
					</a>
				</li>
				<li>
					<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'114_homepage'),$_smarty_tpl);?>
">
						<span class="icon-scircle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/co-all.png"></span>
						<span class="icon-txt">全部</span>
					</a>
				</li>
			</ul>

		</div>
		<!-- 便民查询 e -->
		

		<?php if (in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!--同城头条s-->
		<div class="tcNews-box">
			<div class="tcNews">
				<div class="news-icon"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/news_icon.png"/></div>
				<div class="news-list">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					    	<div class="pl_h fn-clear">
			                    <div class="pl_h_l"></div>
			                    <div class="pl_h_r"></div>
			                </div>
			            </div>
				    	<!--<div class="pagination"></div>-->
					</div>
				</div>
			</div>
		</div>
		<!-- 同城头条 e -->
		<?php }?>
		
		
		<!--职业招聘s-->
		<div class="job-box">
			<div class="job">
				<div class="job-title">
					<h3>职业招聘</h3>
					<a href="<?php echo getUrlPath(array('service'=>'job','template'=>'zhaopin'),$_smarty_tpl);?>
"><span>去找工作</span><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/go_btn.png"></a>
				</div>
				<div class="job-block">
					<div class="job-meeting">
						<a href="<?php echo getUrlPath(array('service'=>'job','template'=>'zhaopinhui'),$_smarty_tpl);?>
">
							<h4>招聘会</h4>
							<p><i></i>更多就业机会</p>
							<p><i></i>更多职位选择</p>
						</a>
					</div>
					<ul>
						<li class="lookenterprise">
							<a href="<?php echo getUrlPath(array('service'=>'job','template'=>'company'),$_smarty_tpl);?>
">
								<h4>找企业</h4>
								<p>本地优质企业</p>
							</a>
						</li>
						<li class="looktalent">
							<a href="<?php echo getUrlPath(array('service'=>'job','template'=>'resume'),$_smarty_tpl);?>
">
								<h4>找人才</h4>
								<p>各行各业精英</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--职业招聘e-->
		<!--家装行业s-->
		<div class="jiazhuang-box">
			<div class="jiazhuang">
				<div class="jz-text">
					<h3>家装市场</h3>
					<p>一键式家装建材</p>
				</div>
				<div class="jz-btn">
					<a href="<?php echo $_smarty_tpl->tpl_vars['renovation_channelDomain']->value;?>
">去逛逛>></a>
				</div>
			</div>
		</div>
		<!--家装行业e-->
		<!--快速导航-模块s-->
		<div class="four-modules">
			<ul class="modules">
				<?php echo getMyAd(array('title'=>"首页_模板三_移动端_广告三"),$_smarty_tpl);?>
				
			</ul>
		</div>
		<!--快速导航-模块e-->
		
		<?php if (in_array("huodong",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!--同城活动s-->
		<div class="tc-activity-box">
			<div class="tc-activity-title">
				<a class="activity-more" href="<?php echo $_smarty_tpl->tpl_vars['huodong_channelDomain']->value;?>
"><span>更多</span><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/go_btn.png"></a>
				<span><b>同城活动</b><i></i></span>
			</div>
			<div class="swiper-container">
				<div class="tc-activity  swiper-wrapper" >
					<!--占位-->
					<div class="activity-pl_h swiper-slide activity"></div>					
				</div>
			</div>
		</div>
		<!--同城活动e-->
		<?php }?>
		
		<?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!--出租房源s-->
		<div class="house-resource">
			<div class="bg-house pub-style">
				<h3>出租房源</h3>
				<p>真实房源  为你精选</p>
			</div>
			<div class="house-list-box">
				<ul>
					<!--默认加载-->
					<li class="loading">加载中...</li>
					
					
				</ul>
				<div class="look-more house-more">
					<a href="<?php echo $_smarty_tpl->tpl_vars['house_channelDomain']->value;?>
">查看更多房源>></a>
				</div>
			</div>
		</div>
		<!--出租房源e-->
		<?php }?>
		
		<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!--分类信息s-->
		<div class="classify-info">
			<div class="bg-info pub-style">
				<h3>分类信息</h3>
				<p>闲置转让  发布信息</p>
			</div>
			<div class="info-list-box">
				<ul>
					<li class="loading">加载中...</li>
					
				</ul>
				<div class="look-more ">
					<a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
">查看更多信息>></a>
				</div>
			</div>
		</div>
		<!--分类信息e-->
		<?php }?>
		
		<?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<!--求职招聘s-->
		<div class="lookjob-box">
			<div class="bg-job pub-style">
				<h3>求职招聘</h3>
				<p>优质企业  招贤纳士</p>
			</div>
			<div class="job-list-box">
				<ul>
					<li class="loading">加载中...</li>
				</ul>
				<div class="look-more job-more">
					<a href="<?php echo $_smarty_tpl->tpl_vars['job_channelDomain']->value;?>
">查看更多招聘职位>></a>
				</div>
			</div>
		</div>
		<!--求职招聘e-->
		<?php }?>
			
		<!--推荐商家-->
		<div class="Business-box">
			<div class="bg-business pub-style">
				<h3>推荐商家</h3>
				<p>口碑商家  品质服务</p>
			</div>
			<div class="business-list-box">
				<ul>
					<li class="loading">加载中...</li>

				</ul>
				
				<div class="look-more shop-more">
					<a href="javascript:;">查看更多信息>></a>
				</div>
			</div>
		</div>
		<!--底部导航栏-->

<div class="gotop"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/go-top.png"></div>
<?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value||$_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value) {?><div class="wechat-fix"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/wechat-fix.png"></div><?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("../../touch_bottom_3.4.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>"index"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_location.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
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
</body>
</html><?php }} ?>
