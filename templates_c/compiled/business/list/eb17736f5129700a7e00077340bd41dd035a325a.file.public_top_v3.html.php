<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-22 04:34:35
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/siteConfig/public_top_v3.html" */ ?>
<?php /*%%SmartyHeaderCode:14935786755d0d3f5bbeaa31-55513655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb17736f5129700a7e00077340bd41dd035a325a' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/siteConfig/public_top_v3.html',
      1 => 1558086995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14935786755d0d3f5bbeaa31-55513655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HUONIAOROOT' => 0,
    'cfg_hotline' => 0,
    'cfg_basehost' => 0,
    'cfg_webname' => 0,
    'cfg_weblogo' => 0,
    'cfg_shortname' => 0,
    'channel' => 0,
    'article_hotline' => 0,
    'info_hotline' => 0,
    'image_hotline' => 0,
    'tuan_hotline' => 0,
    'house_hotline' => 0,
    'shop_hotline' => 0,
    'renovation_hotline' => 0,
    'job_hotline' => 0,
    'dating_hotline' => 0,
    'waimai_hotline' => 0,
    'special_hotline' => 0,
    'paper_hotline' => 0,
    'website_hotline' => 0,
    'video_hotline' => 0,
    'huangye_hotline' => 0,
    'huangye_channelDomain' => 0,
    'huangye_channelName' => 0,
    'huangye_logoUrl' => 0,
    'vote_hotline' => 0,
    'vote_channelDomain' => 0,
    'vote_channelName' => 0,
    'vote_logoUrl' => 0,
    'tieba_hotline' => 0,
    'tieba_channelDomain' => 0,
    'tieba_channelName' => 0,
    'tieba_logoUrl' => 0,
    'huodong_hotline' => 0,
    'integral_hotline' => 0,
    'live_hotline' => 0,
    'business_channelDomain' => 0,
    'business_channelName' => 0,
    'business_logoUrl' => 0,
    'quanjing_channelDomain' => 0,
    'quanjing_channelName' => 0,
    'quanjing_logoUrl' => 0,
    'headBaseHost' => 0,
    'headWebName' => 0,
    'headWebLogo' => 0,
    'headHotLine' => 0,
    'module' => 0,
    'keywords' => 0,
    'installModuleArr' => 0,
    'tuan_channelDomain' => 0,
    'tuan_channelName' => 0,
    'info_channelDomain' => 0,
    'info_channelName' => 0,
    'shop_channelDomain' => 0,
    'shop_channelName' => 0,
    'website_channelDomain' => 0,
    'website_channelName' => 0,
    'job_channelDomain' => 0,
    'job_channelName' => 0,
    'integral_channelDomain' => 0,
    'integral_channelName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0d3f5bc80f22_75632090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0d3f5bc80f22_75632090')) {function content_5d0d3f5bc80f22_75632090($_smarty_tpl) {?><!-- 顶部信息 -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- 导航 -->
<div class="fixedwrap FestivalAD_header">
	<div class="fixedpane">
		<!-- head s -->
		<div class="wrap header fn-clear">
			<?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['cfg_hotline']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headBaseHost'] = new Smarty_variable($_smarty_tpl->tpl_vars['cfg_basehost']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebName'] = new Smarty_variable($_smarty_tpl->tpl_vars['cfg_webname']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebLogo'] = new Smarty_variable($_smarty_tpl->tpl_vars['cfg_weblogo']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headShortName'] = new Smarty_variable($_smarty_tpl->tpl_vars['cfg_shortname']->value, null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['channel']->value=='article') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['article_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='info') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['info_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='image') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='tuan') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['tuan_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='house') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['house_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='shop') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='renovation') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['renovation_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='job') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['job_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='dating') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['dating_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='waimai') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['waimai_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='special') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['special_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='paper') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['paper_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='website') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['website_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='video') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['video_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='huangye') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['huangye_hotline']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headBaseHost'] = new Smarty_variable($_smarty_tpl->tpl_vars['huangye_channelDomain']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebName'] = new Smarty_variable($_smarty_tpl->tpl_vars['huangye_channelName']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebLogo'] = new Smarty_variable($_smarty_tpl->tpl_vars['huangye_logoUrl']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headShortName'] = new Smarty_variable($_smarty_tpl->tpl_vars['huangye_channelName']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='vote') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['vote_hotline']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headBaseHost'] = new Smarty_variable($_smarty_tpl->tpl_vars['vote_channelDomain']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebName'] = new Smarty_variable($_smarty_tpl->tpl_vars['vote_channelName']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebLogo'] = new Smarty_variable($_smarty_tpl->tpl_vars['vote_logoUrl']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headShortName'] = new Smarty_variable($_smarty_tpl->tpl_vars['vote_channelName']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='tieba') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['tieba_hotline']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headBaseHost'] = new Smarty_variable($_smarty_tpl->tpl_vars['tieba_channelDomain']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebName'] = new Smarty_variable($_smarty_tpl->tpl_vars['tieba_channelName']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebLogo'] = new Smarty_variable($_smarty_tpl->tpl_vars['tieba_logoUrl']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headShortName'] = new Smarty_variable($_smarty_tpl->tpl_vars['tieba_channelName']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='huodong') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['huodong_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='integral') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['integral_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='live') {?>
            <?php $_smarty_tpl->tpl_vars['headHotLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['live_hotline']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='business') {?>
            <?php $_smarty_tpl->tpl_vars['headBaseHost'] = new Smarty_variable($_smarty_tpl->tpl_vars['business_channelDomain']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebName'] = new Smarty_variable($_smarty_tpl->tpl_vars['business_channelName']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebLogo'] = new Smarty_variable($_smarty_tpl->tpl_vars['business_logoUrl']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headShortName'] = new Smarty_variable($_smarty_tpl->tpl_vars['business_channelName']->value, null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=='quanjing') {?>
            <?php $_smarty_tpl->tpl_vars['headBaseHost'] = new Smarty_variable($_smarty_tpl->tpl_vars['quanjing_channelDomain']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebName'] = new Smarty_variable($_smarty_tpl->tpl_vars['quanjing_channelName']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headWebLogo'] = new Smarty_variable($_smarty_tpl->tpl_vars['quanjing_logoUrl']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['headShortName'] = new Smarty_variable($_smarty_tpl->tpl_vars['quanjing_channelName']->value, null, 0);?>
            <?php }?>
			<div class="logo">
				<a href="<?php echo $_smarty_tpl->tpl_vars['headBaseHost']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['headWebName']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['headWebLogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['headWebName']->value;?>
"></a>
			</div>
			<div class="kefu"><s><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/changecity_tel.png"></s><p>客服热线</p><?php echo $_smarty_tpl->tpl_vars['headHotLine']->value;?>
</div>
			<div class="searchwrap">
				<div class="search">
						<div class="type">
							<dl>
								<dt><a href="javascript:;" class="keytype">
										<?php if ($_smarty_tpl->tpl_vars['channel']->value=="index") {?>
		                                商家店铺
		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="article") {?>
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                <?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="article") {?>
		                                <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>

		                                <?php } else { ?>
		                                <?php }?>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="info") {?>
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                <?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="info") {?>
		                                <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>

		                                <?php } else { ?>
		                                <?php }?>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="tieba") {?>
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                <?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="tieba") {?>
		                                <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>

		                                <?php } else { ?>
		                                <?php }?>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="huangye") {?>
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                <?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="huangye") {?>
		                                <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>

		                                <?php } else { ?>
		                                <?php }?>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="vote") {?>
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                <?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="vote") {?>
		                                <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>

		                                <?php } else { ?>
		                                <?php }?>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="live") {?>
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                <?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="live") {?>
		                                <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>

		                                <?php } else { ?>
		                                <?php }?>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="quanjing") {?>
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                <?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="quanjing") {?>
		                                <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>

		                                <?php } else { ?>
		                                <?php }?>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                                <?php } elseif ($_smarty_tpl->tpl_vars['channel']->value=="business") {?>
		                                商家店铺
		                                <?php }?>
									</a>
									<em></em>
								</dt>
								<dd>
									<div class="ModuleBox">
										<a href="javascript:;" data-id="0" data-module="business"><span>商家店铺</span></a>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="house") {?>
										<a href="javascript:;" data-id="1" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
">
											<span><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span>
											<div class="MoudleNav fn-clear">
												<i></i>
												<ul class="fn-clear">
													<li data-type="loupan">楼盘</li>
													<li data-type="community">小区</li>
													<li data-type="store">中介公司</li>
													<li data-type="sale">二手房</li>
													<li data-type="zu">租房</li>
													<li data-type="xzl">写字楼</li>
													<li data-type="sp">商铺</li>
													<li data-type="cf">厂房/仓库</li>
												</ul>
											</div>
										</a>
										<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="job") {?>
										<a href="javascript:;" data-id="1" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
">
											<span><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span>
											<div class="MoudleNav jobMoudle fn-clear">
												<i></i>
												<ul class="fn-clear">
													<li data-type="zhaopin">职位</li>
													<li data-type="company">公司</li>
													<li data-type="resume">简历</li>
													<li data-type="zhaopinhui">招聘会</li>
												</ul>
											</div>
										</a>
										<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="dating") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="marry") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="waimai") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="special") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="paper") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="website") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="renovation") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="integral") {?>
	                                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="car") {?>
	                                    <?php } else { ?>
	                                    <a href="javascript:;" data-id="0" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span></a>
	                                    <?php }?>
	                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</div>
								</dd>
							</dl>
						</div>
					<div class="FormBox">
						<form action="<?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
" class="form business <?php if ($_smarty_tpl->tpl_vars['channel']->value=="business"||$_smarty_tpl->tpl_vars['channel']->value=="index") {
} else { ?>fn-hide<?php }?>">
							<div class="inputbox">
								<div class="inpbox"><input type="text" name="keywords" class="searchkey" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"></div>
							</div>
							<div class="hotkey">
                                
                            </div>
							<input type="submit" class="submit" value="搜索">
						</form>
						<?php if (in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>'article','template'=>'search'),$_smarty_tpl);?>
" class="form article <?php if ($_smarty_tpl->tpl_vars['channel']->value=="article") {
} else { ?>fn-hide<?php }?>">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("image",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>'image','template'=>'search'),$_smarty_tpl);?>
" class="form image fn-hide">
                            <div class="inputbox">
                                <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                            </div>
                            <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>'info','template'=>'list'),$_smarty_tpl);?>
" class="form info <?php if ($_smarty_tpl->tpl_vars['channel']->value=="info") {
} else { ?>fn-hide<?php }?>">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="想找什么？输入类别或关键字试试..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"tuan",'template'=>"list"),$_smarty_tpl);?>
" class="form tuan fn-hide">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="search_keyword" class="searchkey" placeholder="请输入商品名称、地址等..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="" class="form house HouseForm fn-hide" onsubmit="return false;">
                            <div class="inputbox">
                                <div class="inpbox"><input type="text" name="search_keyword" id="HouseSearch" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                            </div>
                            <input type="submit" class="submit HouseSeacher_btn" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"shop",'template'=>"list"),$_smarty_tpl);?>
" class="form shop fn-hide">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入宝贝名称或相关词语..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="" class="form job HouseForm fn-hide" onsubmit="return false;">
                            <div class="inputbox">
                                <div class="inpbox"><input type="text" name="search_keyword" id="JobSearch" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                            </div>
                            <input type="submit" class="submit JobSeacher_btn" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("video",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"video",'template'=>"list"),$_smarty_tpl);?>
" class="form video fn-hide">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("huangye",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"huangye",'template'=>"list"),$_smarty_tpl);?>
" class="form huangye <?php if ($_smarty_tpl->tpl_vars['channel']->value=="huangye") {
} else { ?>fn-hide<?php }?>">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您要查找的服务机构关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("vote",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"vote",'template'=>"index"),$_smarty_tpl);?>
" class="form vote <?php if ($_smarty_tpl->tpl_vars['channel']->value=="vote") {
} else { ?>fn-hide<?php }?>">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您要查找的活动关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("tieba",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"tieba",'template'=>"index"),$_smarty_tpl);?>
" class="form tieba <?php if ($_smarty_tpl->tpl_vars['channel']->value=="tieba") {
} else { ?>fn-hide<?php }?>">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您要查找的帖子..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("huodong",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"huodong",'template'=>"list"),$_smarty_tpl);?>
" class="form huodong fn-hide">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="搜索活动..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("live",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"live",'template'=>"livelist"),$_smarty_tpl);?>
" class="form live <?php if ($_smarty_tpl->tpl_vars['channel']->value=="live") {
} else { ?>fn-hide<?php }?>">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="搜索直播..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
                        <?php if (in_array("quanjing",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                        <form action="<?php echo getUrlPath(array('service'=>"quanjing",'template'=>"list"),$_smarty_tpl);?>
" class="form quanjing <?php if ($_smarty_tpl->tpl_vars['channel']->value=="quanjing") {
} else { ?>fn-hide<?php }?>">
                        <div class="inputbox">
                            <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="搜索全景..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                        </div>
                        <input type="submit" class="submit" value="搜索">
                        </form>
                        <?php }?>
					</div>
				</div>
			</div>
		</div>
		<!-- head e -->

		<!-- 导航 s -->
		<div class="nav">
			<div class="wrap">
				<ul class="mainnav fn-clear">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
" class="nav-m">首页</a></li>
                    <li><a href="<?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
" class="nav-m">商家店铺</a></li>
                    <?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['tuan_channelDomain']->value;?>
" class="nav-m"><?php echo $_smarty_tpl->tpl_vars['tuan_channelName']->value;?>
</a></li>
                    <?php }?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['huangye_channelDomain']->value;?>
" class="nav-m">便民黄页</a></li>
                    <?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
" class="nav-m"><?php echo $_smarty_tpl->tpl_vars['info_channelName']->value;?>
</a></li>
                    <?php }?>
                    <?php if (in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
" class="nav-m"><?php echo $_smarty_tpl->tpl_vars['shop_channelName']->value;?>
</a></li>
                    <?php }?>
                    <?php if (in_array("website",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['website_channelDomain']->value;?>
" class="nav-m"><?php echo $_smarty_tpl->tpl_vars['website_channelName']->value;?>
</a></li>
                    <?php }?>
                    <?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['job_channelDomain']->value;?>
" class="nav-m"><?php echo $_smarty_tpl->tpl_vars['job_channelName']->value;?>
</a></li>
                    <?php }?>
                    <?php if (in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['integral_channelDomain']->value;?>
" class="nav-m"><?php echo $_smarty_tpl->tpl_vars['integral_channelName']->value;?>
</a></li>
                    <?php }?>
					<li><a target="_blank" href="<?php echo getUrlPath(array('service'=>'business','template'=>'map'),$_smarty_tpl);?>
" class="nav-m">地图找商家</a></li>
				</ul>
			</div>
		</div>
	</div>
</div><?php }} ?>
