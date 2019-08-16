<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-15 11:43:53
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\index.html" */ ?>
<?php /*%%SmartyHeaderCode:7249400175d54d4f9f30d37-67539568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a2da03d1ade57233538beff192f5d44d9d46603' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\index.html',
      1 => 1564477412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7249400175d54d4f9f30d37-67539568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'cfg_ucenterLinks' => 0,
    'cfg_pointState' => 0,
    'userinfo' => 0,
    'cfg_pointName' => 0,
    'cfg_staticPath' => 0,
    'nowHour' => 0,
    'notice' => 0,
    'diancan_state' => 0,
    'list' => 0,
    'diancanAudit' => 0,
    'diancanGray' => 0,
    'dingzuo_state' => 0,
    'dingzuoAudit' => 0,
    'dingzuoGray' => 0,
    'paidui_state' => 0,
    'paiduiGray' => 0,
    'maidan_state' => 0,
    'maidanAudit' => 0,
    'maidanAudit_' => 0,
    'module' => 0,
    'articleAudit' => 0,
    'articleGray' => 0,
    'articleRefuse' => 0,
    'infoAudit' => 0,
    'infoGray' => 0,
    'infoRefuse' => 0,
    'tuanGray' => 0,
    'tuanRefuse' => 0,
    'tuanOngoing' => 0,
    'tuanRefunded' => 0,
    'shopGray' => 0,
    'shopRefuse' => 0,
    'shopOngoing' => 0,
    'shopRefunded' => 0,
    'house_comid' => 0,
    'houseState1' => 0,
    'houseState0' => 0,
    'houseState2' => 0,
    'jobState1' => 0,
    'jobState0' => 0,
    'jobState2' => 0,
    'jobResume' => 0,
    'renovationTeam' => 0,
    'renovationRese' => 0,
    'cfg_basehost' => 0,
    'websiteAudit' => 0,
    'voteJoin' => 0,
    'voteAudit' => 0,
    'voteExpire' => 0,
    'tiebaAudit' => 0,
    'tiebaGray' => 0,
    'tiebaRefuse' => 0,
    'huodongAudit' => 0,
    'huodongGray' => 0,
    'huodongRefuse' => 0,
    'huodongJoin' => 0,
    'car_comid' => 0,
    'carState1' => 0,
    'carState0' => 0,
    'carState2' => 0,
    'homemakingGray' => 0,
    'homemakingRefuse' => 0,
    'homemakingOngoing' => 0,
    'homemakingRefunded' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d54d4fa177341_68274932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d54d4fa177341_68274932')) {function content_5d54d4fa177341_68274932($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][75]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">

	<div class="notice"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][41];?>
<a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][56];?>
</a> <a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][57];?>
</a><em class="close">&times;</em></div>

	<!-- 基本信息&帐户信息 -->
	<div class="hline fn-clear">
		<?php if (in_array('balance',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)||$_smarty_tpl->tpl_vars['cfg_pointState']->value) {?>
		<div class="r">
			<div class="hitem account">
				<p>
					<?php if (in_array('balance',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][363];?>
：<strong title="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
</strong><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['cfg_pointState']->value) {
echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;?>
：<strong title="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['point'];?>
"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['point'];?>
</strong><?php }?>
				</p>
				<?php if (in_array('balance',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<div class="btns fn-clear">
					<?php if (in_array('deposit',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'deposit'),$_smarty_tpl);?>
" class="cz"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][77];?>
</a>
					<?php }?>
					<?php if (in_array('withdraw',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'withdraw'),$_smarty_tpl);?>
" class="tx"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][471];?>
</a>
					<?php }?>
					<?php if (in_array('record',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'record'),$_smarty_tpl);?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][225];?>
</a>
					<?php }?>
				</div>
				<?php }?>
			</div>
		</div>
		<?php }?>
		<div class="l">
			<div class="hitem uinfo">
				<dl class="fn-clear">
					<dt><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'portrait'),$_smarty_tpl);?>
"><img onerror="javascript:this.src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/noPhoto_100.jpg';" src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['photo'])),$_smarty_tpl);?>
" /><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][110];?>
</span></a></dt>
					<dd>
						<div class="name"><h2><?php echo $_smarty_tpl->tpl_vars['nowHour']->value;?>
，<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</h2><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['lastlogintime']) {?><span class="date"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][9];?>
：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['lastlogintime'];?>
</span><?php }?></div>
						<ul class="fn-clear">
							<li><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'security'),$_smarty_tpl);?>
" class="real<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {?> disable<?php }?>"><s></s></a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'security'),$_smarty_tpl);?>
" class="mobile<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==0) {?> disable<?php }?>"><s></s></a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'security'),$_smarty_tpl);?>
" class="email<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']==0) {?> disable<?php }?>"><s></s></a></li>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
	</div>

	<!-- 待办事项&日期天气 -->
	<div class="hline fn-clear">
		<div class="r">
			<div class="weather-con">
				<h3><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][261];?>
</h3>
				<div class="hitem date-weather">
					<ul class="fn-clear">
						<li class="d"><strong><?php echo getMyTime(array('format'=>"%d"),$_smarty_tpl);?>
</strong><p><?php echo getMyWeek(array('prefix'=>$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][48]),$_smarty_tpl);?>
<br /><?php echo getMyTime(array('format'=>"%Y"),$_smarty_tpl);?>
.<?php echo getMyTime(array('format'=>"%m"),$_smarty_tpl);?>
</p></li>
					</ul>
				</div>
			</div>

			<div class="hitem gonggao-con">
				<p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][53];?>
</p>
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"notice",'return'=>"notice",'pageSize'=>"10")); $_block_repeat=true; echo siteConfig(array('action'=>"notice",'return'=>"notice",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a href="<?php echo $_smarty_tpl->tpl_vars['notice']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['notice']->value['title'];?>
"><s></s><?php echo $_smarty_tpl->tpl_vars['notice']->value['title'];?>
</a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"notice",'return'=>"notice",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>

		</div>

		<div class="l">
			<h3><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][586];?>
<a href="javascript:;" onclick="window.location.reload();" class="more reload" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][70];?>
"><i></i></a></h3>
			<div class=" module fn-clear">

				<?php if (in_array('food',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>

				
				<?php if ($_smarty_tpl->tpl_vars['diancan_state']->value) {?>

				<?php $_smarty_tpl->tpl_vars['diancanAudit'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['diancanGray'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"diancanOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo business(array('action'=>"diancanOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->tpl_vars['diancanAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalAudit'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['diancanGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalGray'], null, 0);?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"diancanOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][439];?>
 <i></i></dt>
					<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-b-diancan.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
					<dd>
						<div class="fn-clear item2">
							<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-diancan-order','param'=>'state=3'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][12];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['diancanAudit']->value);?>
</a></em>
							</a></p>
							<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-diancan-order','param'=>'state=0'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][11];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['diancanGray']->value);?>
</a></em>
									<?php if ($_smarty_tpl->tpl_vars['diancanGray']->value) {?><i class="m-state"></i><?php }?>
							</a></p>
						</div>
					</dd>
				</dl>
				<?php }?>

				
				<?php if ($_smarty_tpl->tpl_vars['dingzuo_state']->value) {?>

				<?php $_smarty_tpl->tpl_vars['dingzuoAudit'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['dingzuoGray'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"dingzuoOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo business(array('action'=>"dingzuoOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->tpl_vars['dingzuoAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalAudit'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['dingzuoGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalGray'], null, 0);?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"dingzuoOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][440];?>
 <i></i></dt>
					<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-b-dingzuo.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
					<dd>
						<div class="fn-clear item2">
							<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-dingzuo-order','param'=>'state=1'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][12];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['dingzuoAudit']->value);?>
</a></em>
							</a></p>
							<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-dingzuo-order','param'=>'state=0'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][11];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['dingzuoGray']->value);?>
</a></em>
									<?php if ($_smarty_tpl->tpl_vars['diancanGray']->value) {?><i class="m-state"></i><?php }?>
							</a></p>
						</div>
					</dd>
				</dl>
				<?php }?>

				
				<?php if ($_smarty_tpl->tpl_vars['paidui_state']->value) {?>

				<?php $_smarty_tpl->tpl_vars['paiduiGray'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"paiduiOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo business(array('action'=>"paiduiOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->tpl_vars['paiduiGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalGray'], null, 0);?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"paiduiOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][441];?>
 <i></i></dt>
					<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-b-paidui.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
					<dd>
						<div class="fn-clear item1">
							<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-paidui-order'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][5];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['paiduiGray']->value);?>
</a></em>
									<?php if ($_smarty_tpl->tpl_vars['paiduiGray']->value) {?><i class="m-state"></i><?php }?>
							</a></p>
						</div>
					</dd>
				</dl>
				<?php }?>

				
				<?php if ($_smarty_tpl->tpl_vars['maidan_state']->value) {?>

				<?php $_smarty_tpl->tpl_vars['maidanAudit'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"maidanOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo business(array('action'=>"maidanOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->tpl_vars['maidanAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalAudit'], null, 0);?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"maidanOrder",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php $_smarty_tpl->tpl_vars['maidanAudit_'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"maidanOrder",'return'=>"list",'u'=>"1",'today'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo business(array('action'=>"maidanOrder",'return'=>"list",'u'=>"1",'today'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->tpl_vars['maidanAudit_'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalAudit'], null, 0);?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"maidanOrder",'return'=>"list",'u'=>"1",'today'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][442];?>
 <i></i></dt>
					<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-b-maidan.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
					<dd>
						<div class="fn-clear item2">
							<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-maidan-order'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][0];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['maidanAudit']->value);?>
</a></em>
							</a></p>
							<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-paidui-order'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][39];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['maidanAudit_']->value);?>
</a></em>
							</a></p>
						</div>
					</dd>
				</dl>
				<?php }?>

				<?php }?>

				

				<dl class="custom-nav" style="cursor:pointer;">
					<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][472];?>
 <i></i></dt>
					<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-module.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
					
				</dl>


				<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


					
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'article'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="article"&&$_tmp1) {?>

					<?php $_smarty_tpl->tpl_vars['articleAudit'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['articleGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['articleRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo article(array('action'=>"alist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['articleAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['articleGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['articleRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][235];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-article.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item3">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'article','param'=>"state=1"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['articleAudit']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'article','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['articleGray']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'article','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['articleRefuse']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['articleRefuse']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'info'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="info"&&$_tmp2) {?>

					<?php $_smarty_tpl->tpl_vars['infoAudit'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['infoGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['infoRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo info(array('action'=>"ilist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['infoAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['infoGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['infoRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][67];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-info.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item3">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'info','param'=>"state=1"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['infoAudit']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'info','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['infoGray']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'info','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['infoRefuse']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['infoRefuse']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tuan'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="tuan"&&$_tmp3) {?>

					<?php $_smarty_tpl->tpl_vars['tuanGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['tuanRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tuan', array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo tuan(array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['tuanGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['tuanRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tuan(array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->tpl_vars['tuanOngoing'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['tuanRefunded'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tuan', array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo tuan(array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['tuanOngoing'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['ongoing'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['tuanRefunded'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refunded'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tuan(array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][36];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-tuan.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item4">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'tuan','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tuanGray']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'tuan','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tuanRefuse']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['tuanRefuse']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'tuan','param'=>"state=1"),$_smarty_tpl);?>
">
										<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][154];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tuanOngoing']->value);?>
</a></em>
										<?php if ($_smarty_tpl->tpl_vars['tuanOngoing']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'tuan','param'=>"state=4"),$_smarty_tpl);?>
">
										<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][65];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tuanRefunded']->value);?>
</a></em>
										<?php if ($_smarty_tpl->tpl_vars['tuanRefunded']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'shop'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="shop"&&$_tmp4) {?>

					<?php $_smarty_tpl->tpl_vars['shopGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['shopRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['shopGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['shopRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->tpl_vars['shopOngoing'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['shopRefunded'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo shop(array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['shopOngoing'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['ongoing'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['shopRefunded'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refunded'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][160];?>
  <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-shop.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item4">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'shop','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['shopGray']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'shop','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][558];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['shopRefuse']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['shopRefuse']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'shop','param'=>"state=1"),$_smarty_tpl);?>
">
										<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][154];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['shopOngoing']->value);?>
</a></em>
										<?php if ($_smarty_tpl->tpl_vars['shopOngoing']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'shop','param'=>"state=4"),$_smarty_tpl);?>
">
										<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][65];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['shopRefunded']->value);?>
</a></em>
										<?php if ($_smarty_tpl->tpl_vars['shopRefunded']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'house'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="house"&&$_tmp5) {?>

					<?php $_smarty_tpl->tpl_vars['houseAudit'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['houseGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['houseRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house_comid']->value;?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjUserList",'return'=>"list",'u'=>"1",'comid'=>$_tmp6,'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo house(array('action'=>"zjUserList",'return'=>"list",'u'=>"1",'comid'=>$_tmp6,'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['houseState0'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state0'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['houseState1'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state1'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['houseState2'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state2'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjUserList",'return'=>"list",'u'=>"1",'comid'=>$_tmp6,'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][398];?>
  <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-house.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item3">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'house-broker','param'=>"state=1"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['houseState1']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'house-broker','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['houseState0']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'house-broker','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['houseState2']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['houseState2']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'job'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="job"&&$_tmp7) {?>

					<?php $_smarty_tpl->tpl_vars['jobState0'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['jobState1'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['jobState2'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"post",'return'=>"list",'com'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo job(array('action'=>"post",'return'=>"list",'com'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['jobState0'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state0'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['jobState1'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state1'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['jobState2'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state2'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"post",'return'=>"list",'com'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->tpl_vars['jobResume'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"deliveryList",'type'=>"company",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo job(array('action'=>"deliveryList",'type'=>"company",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['jobResume'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state0'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"deliveryList",'type'=>"company",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][895];?>
  <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-job.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item4">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'post','param'=>"state=1"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['jobState1']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'post','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['jobState0']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'post','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['jobState2']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['jobState2']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'resume','action'=>'job'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][766];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['jobResume']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['jobResume']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'renovation'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="renovation"&&$_tmp8) {?>

					<?php $_smarty_tpl->tpl_vars['renovationTeam'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('renovation', array('action'=>"team",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo renovation(array('action'=>"team",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['renovationTeam'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo renovation(array('action'=>"team",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->tpl_vars['renovationRese'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('renovation', array('action'=>"rese",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo renovation(array('action'=>"rese",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['renovationRese'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state0'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo renovation(array('action'=>"rese",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][896];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-renovation.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item2">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'team','action'=>'renovation'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][42];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['renovationTeam']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'booking','action'=>'renovation'),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][80];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['renovationRese']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['renovationRese']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'waimai'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="waimai"&&$_tmp9) {?>
					<dl id="waimaiOrderObj">
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][17][1];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-waimai.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item4">
								<p><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/wmsj/order/waimaiOrder.php?state=2" target="_blank" id="wmo2">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][31];?>
 <span>0</span></em>
								</a></p>
								<p><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/wmsj/order/waimaiOrder.php?state=3" target="_blank" id="wmo3">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][66];?>
 <span>0</span></em>
								</a></p>
								<p><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/wmsj/order/waimaiOrder.php?state=4" target="_blank" id="wmo4">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][46];?>
 <span>0</span></em>
								</a></p>
								<p><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/wmsj/order/waimaiOrder.php?state=5" target="_blank" id="wmo5">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][115];?>
 <span>0</span></em>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'website'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="website"&&$_tmp10) {?>

					<?php $_smarty_tpl->tpl_vars['websiteAudit'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('website', array('action'=>"guest",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo website(array('action'=>"guest",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['websiteAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalAudit'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo website(array('action'=>"guest",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][68];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-website.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item1">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'website-guest'),$_smarty_tpl);?>
">
									<em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][848];?>
</em> <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['websiteAudit']->value);?>

									<?php if ($_smarty_tpl->tpl_vars['renovationRese']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'vote'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="vote"&&$_tmp11) {?>

					<?php $_smarty_tpl->tpl_vars['voteJoin'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('vote', array('action'=>"joinList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo vote(array('action'=>"joinList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['voteJoin'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo vote(array('action'=>"joinList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->tpl_vars['voteAudit'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['voteExpire'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('vote', array('action'=>"vlist",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo vote(array('action'=>"vlist",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['voteAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['voteExpire'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['expire'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo vote(array('action'=>"vlist",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][26];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-vote.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item3">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'vote-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][33];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['voteJoin']->value);?>
</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage-vote','param'=>'state=1'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][20];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['voteAudit']->value);?>
</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage-vote','param'=>'state=2'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][507];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['voteExpire']->value);?>
</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tieba'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="tieba"&&$_tmp12) {?>

					<?php $_smarty_tpl->tpl_vars['tiebaAudit'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['tiebaGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['tiebaRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tieba', array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo tieba(array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['tiebaAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['tiebaGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['tiebaRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tieba(array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][238];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-tieba.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item3">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'tieba','param'=>"state=1"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tiebaAudit']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'tieba','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tiebaGray']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'tieba','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tiebaRefuse']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['tiebaRefuse']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'huodong'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="huodong"&&$_tmp13) {?>

					<?php $_smarty_tpl->tpl_vars['huodongAudit'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['huodongGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['huodongRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('huodong', array('action'=>"hlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo huodong(array('action'=>"hlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['huodongAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['huodongGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['huodongRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo huodong(array('action'=>"hlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->tpl_vars['huodongJoin'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('huodong', array('action'=>"joinList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo huodong(array('action'=>"joinList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['huodongJoin'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo huodong(array('action'=>"joinList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][161];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-huodong.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item4">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'huodong','param'=>"state=1"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongAudit']->value);?>
</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'huodong','param'=>"state=0"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongGray']->value);?>
</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'huodong','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongRefuse']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['huodongRefuse']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'huodong-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][33];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongJoin']->value);?>
</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'car'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="car"&&$_tmp14) {?>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['car_comid']->value;?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"adviserList",'return'=>"list",'u'=>"1",'comid'=>$_tmp15,'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo car(array('action'=>"adviserList",'return'=>"list",'u'=>"1",'comid'=>$_tmp15,'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['carState0'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state0'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['carState1'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state1'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['carState2'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state2'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"adviserList",'return'=>"list",'u'=>"1",'comid'=>$_tmp15,'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][43];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-info.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item3">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'car-broker','param'=>"state=1"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['carState1']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'car-broker','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['carState0']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'car-broker','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['carState2']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['carState2']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					
					<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'homemaking'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="homemaking"&&$_tmp16) {?>

					<?php $_smarty_tpl->tpl_vars['homemakingGray'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['homemakingRefuse'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('homemaking', array('action'=>"hList",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo homemaking(array('action'=>"hList",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['homemakingGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state6'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['homemakingRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['state8'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo homemaking(array('action'=>"hList",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->tpl_vars['homemakingOngoing'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['homemakingRefunded'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('homemaking', array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo homemaking(array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['homemakingOngoing'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['ongoing'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['homemakingRefunded'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refunded'], null, 0);?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo homemaking(array('action'=>"orderList",'return'=>"list",'store'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['homemaking'][8][26];?>
 <i></i></dt>
						<dd><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/c-tuan.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></dd>
						<dd>
							<div class="fn-clear item4">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'homemaking','param'=>"state=0"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['homemakingGray']->value);?>
</em>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','module'=>'homemaking','param'=>"state=2"),$_smarty_tpl);?>
">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['homemakingRefuse']->value);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['homemakingRefuse']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'homemaking','param'=>"state=6"),$_smarty_tpl);?>
">
										<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['homemaking'][9][93];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['homemakingOngoing']->value);?>
</a></em>
										<?php if ($_smarty_tpl->tpl_vars['homemakingOngoing']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'homemaking','param'=>"state=9"),$_smarty_tpl);?>
">
										<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][65];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['homemakingRefunded']->value);?>
</a></em>
										<?php if ($_smarty_tpl->tpl_vars['homemakingRefunded']->value>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</dd>
					</dl>

					<?php }}}}}}}}}}}}}}?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



			</div>

		</div>
	</div>



</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
