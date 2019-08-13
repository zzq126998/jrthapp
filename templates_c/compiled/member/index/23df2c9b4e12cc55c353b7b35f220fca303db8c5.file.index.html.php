<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 15:05:28
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\index.html" */ ?>
<?php /*%%SmartyHeaderCode:18556444765d510fb8e4c4c3-68157941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23df2c9b4e12cc55c353b7b35f220fca303db8c5' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\index.html',
      1 => 1559628856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18556444765d510fb8e4c4c3-68157941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'langData' => 0,
    'cfg_webname' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_hideUrl' => 0,
    'userinfo' => 0,
    'bannerUrl' => 0,
    'nowHour' => 0,
    'level' => 0,
    'cla' => 0,
    'text' => 0,
    'cfg_qiandao_state' => 0,
    'cfg_ucenterLinks' => 0,
    'cfg_pointState' => 0,
    'cfg_pointName' => 0,
    'installModuleArr' => 0,
    'integral_channelDomain' => 0,
    'list' => 0,
    'orderModuleCount' => 0,
    'tuanOrderCount' => 0,
    'shopOrderCount' => 0,
    'integralOrderCount' => 0,
    'pageInfo' => 0,
    'messageCount' => 0,
    'messageRead' => 0,
    'collectList' => 0,
    'collectCount' => 0,
    'module' => 0,
    'articleAudit' => 0,
    'articleGray' => 0,
    'articleRefuse' => 0,
    'infoAudit' => 0,
    'infoGray' => 0,
    'infoRefuse' => 0,
    'houseSale' => 0,
    'houseZu' => 0,
    'houseXzl' => 0,
    'houseSp' => 0,
    'jobCollect' => 0,
    'jobDelivery' => 0,
    'jobInvitation' => 0,
    'tiebaAudit' => 0,
    'tiebaGray' => 0,
    'tiebaRefuse' => 0,
    'huodongAudit' => 0,
    'huodongGray' => 0,
    'huodongRefuse' => 0,
    'huodongJoin' => 0,
    'voteJoin' => 0,
    'voteAudit' => 0,
    'voteExpire' => 0,
    'liveState0' => 0,
    'liveState1' => 0,
    'liveState2' => 0,
    'carAudit' => 0,
    'carGray' => 0,
    'carRefuse' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510fb91446f6_05117571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510fb91446f6_05117571')) {function content_5d510fb91446f6_05117571($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][7];?>
 - <?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';

	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");

	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;

	var money = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
, freeze = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['freeze'];?>
, point = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['point'];?>
;
<?php echo '</script'; ?>
>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
	<div class="container fn-clear">

		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="main">

			<!-- 会员基本信息 s -->
			<div class="banner"<?php if ($_smarty_tpl->tpl_vars['bannerUrl']->value) {?> style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['bannerUrl']->value;?>
');"<?php }?>>
				<a href="javascript:;" class="conbg" id="customBanner" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][254];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][254];?>
</a>
				<dl class="uinfo">
					<dt>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'portrait'),$_smarty_tpl);?>
">
							<img onerror="javascript:this.src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/noPhoto_100.jpg';" src="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['photo']=='') {
echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/noPhoto_100.jpg<?php } else {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['photo'])),$_smarty_tpl);
}?>" />
							<span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][110];?>
</span>
						</a>
					</dt>
					<dd>
						<div class="name">
							<h2><span><?php echo $_smarty_tpl->tpl_vars['nowHour']->value;?>
，<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];
if ($_smarty_tpl->tpl_vars['userinfo']->value['level']) {?><font title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][733];?>
：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userinfo']->value['expired'],"%Y-%m-%d %H:%M:%S");?>
">【<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['levelName'];?>
】</font><?php }?></span></h2>
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==1||!$_smarty_tpl->tpl_vars['userinfo']->value) {?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'upgrade'),$_smarty_tpl);?>
" class="qiye" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][113];?>
</a><?php }?>
						</div>
						<ul class="fn-clear">
							<li><a href="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chCertify'),$_smarty_tpl);
} else {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'shCertify'),$_smarty_tpl);
}?>" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][255];?>
" class="real<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {?> disable<?php }?>"><s></s></a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chphone'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][7];?>
" class="mobile<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==0) {?> disable<?php }?>"><s></s></a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chemail'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][10];?>
" class="email<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']==0) {?> disable<?php }?>"><s></s></a></li>
						</ul>
					</dd>
				</dl>
				<div class="bot">
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['lastlogintime']) {?>
					<div class="l"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][9];?>
：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['lastlogintime'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['lastloginipaddr'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'loginrecord'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][52];?>
>></a></div>
					<?php } else { ?>
					<div class="l"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'loginrecord'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][682];?>
</a></div>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][1]), null, 0);?>
					<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][53]), null, 0);?>
					<?php $_smarty_tpl->tpl_vars['cla'] = new Smarty_variable("l1", null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['security']<100&&$_smarty_tpl->tpl_vars['userinfo']->value['security']>40) {?>
						<?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][2]), null, 0);?>
						<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][54]), null, 0);?>
						<?php $_smarty_tpl->tpl_vars['cla'] = new Smarty_variable("l2", null, 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['userinfo']->value['security']<=40) {?>
						<?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][3]), null, 0);?>
						<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][54]), null, 0);?>
						<?php $_smarty_tpl->tpl_vars['cla'] = new Smarty_variable("l2", null, 0);?>
					<?php }?>
					<div class="r"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][257];?>
：<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security'),$_smarty_tpl);?>
" class="<?php echo $_smarty_tpl->tpl_vars['cla']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a></div>
					<?php if ($_smarty_tpl->tpl_vars['cfg_qiandao_state']->value) {?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'qiandao'),$_smarty_tpl);?>
" class="jifen"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig']['22'][109];?>
</a><?php }?>
				</div>
			</div>
			<!-- 会员基本信息 e -->

			<!-- 资产 s -->
			<div class="acc-info fn-clear">
				<?php if (in_array('balance',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<div class="info-con"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][14];?>
 <span><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['money']+$_smarty_tpl->tpl_vars['userinfo']->value['freeze'];?>
</b></span></div>
				<div class="info-con"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][258];?>
 <span><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
</b></span></div>
				<div class="info-con"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][229];?>
 <span><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['freeze'];?>
</b></span></div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cfg_pointState']->value) {?><div class="info-con"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][683];
echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;?>
 <span><b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['point'];?>
</b><?php if (in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['integral_channelDomain']->value;?>
" target="_blank" class="d"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][15];?>
</a><?php }?></span></div><?php }?>
			</div>
			<!-- 资产 e -->

			<!-- 模块集合 s -->
			<div class="modules">
				<ul class="fn-clear">

					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tuan','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'shop','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ((in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp1)||(in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp2)||in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>

                    <?php if (in_array('order',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>

					<?php $_smarty_tpl->tpl_vars['orderModuleCount'] = new Smarty_variable(0, null, 0);?>

					
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tuan','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp3) {?>
						<?php $_smarty_tpl->tpl_vars['tuanOrderCount'] = new Smarty_variable(0, null, 0);?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tuan', array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo tuan(array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['tuanOrderCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tuan(array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						<?php $_smarty_tpl->tpl_vars['orderModuleCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['orderModuleCount']->value+1, null, 0);?>

					<?php }?>

					
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'shop','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if (in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp4) {?>
						<?php $_smarty_tpl->tpl_vars['shopOrderCount'] = new Smarty_variable(0, null, 0);?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo shop(array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['shopOrderCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						<?php $_smarty_tpl->tpl_vars['orderModuleCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['orderModuleCount']->value+1, null, 0);?>
					<?php }?>

					
					<?php if (in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						<?php $_smarty_tpl->tpl_vars['integralOrderCount'] = new Smarty_variable(0, null, 0);?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('integral', array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo integral(array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->tpl_vars['integralOrderCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo integral(array('action'=>"orderList",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						<?php $_smarty_tpl->tpl_vars['orderModuleCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['orderModuleCount']->value+1, null, 0);?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['orderModuleCount']->value) {?>
					<li class="li-1">
						<div class="m-content" >
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-order.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][4];?>
</h5>
							<div class="fn-clear item<?php echo $_smarty_tpl->tpl_vars['orderModuleCount']->value;?>
">
								<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tuan','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp5) {?>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order','module'=>'tuan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][46];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tuanOrderCount']->value);?>
</a></p>
								<?php }?>
								<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'shop','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if (in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp6) {?>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order','module'=>'shop'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][47];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['shopOrderCount']->value);?>
</a></p>
								<?php }?>
								<?php if (in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order','module'=>'integral'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['integralOrderCount']->value);?>
</a></p>
								<?php }?>
							</div>
						</div>
						<div class="cover c1"></div>
					</li>
					<?php }?>
					<?php }?>
					<?php }?>

					
					<?php $_smarty_tpl->tpl_vars['messageCount'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['messageRead'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('member', array('action'=>"message",'return'=>"list",'pageSize'=>"1")); $_block_repeat=true; echo member(array('action'=>"message",'return'=>"list",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo member(array('action'=>"message",'return'=>"list",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->tpl_vars['messageCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['messageRead'] = new Smarty_variable($_smarty_tpl->tpl_vars['pageInfo']->value['read'], null, 0);?>
					<li class="li-2">
						<div class="m-content"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-message.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][19];?>
</h5>
							<div class="fn-clear item3">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'message'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][0];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['messageCount']->value);?>
</a></p>
								<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'message','param'=>"state=1"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][8];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['messageRead']->value);?>
</a></p>
								<p><a href="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['message']>0) {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'message','param'=>"state=0"),$_smarty_tpl);
} else {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'message'),$_smarty_tpl);
}?>">
									<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][7];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['userinfo']->value['message']);?>
</em>
									<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['message']>0) {?><i class="m-state"></i><?php }?>
								</a></p>
							</div>
						</div>
						<div class="cover c2"></div>
					</li>

					
					<?php $_smarty_tpl->tpl_vars['collectCount'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('member', array('action'=>"collectList",'return'=>"collectList",'pageSize'=>"1")); $_block_repeat=true; echo member(array('action'=>"collectList",'return'=>"collectList",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo member(array('action'=>"collectList",'return'=>"collectList",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php if ($_smarty_tpl->tpl_vars['collectList']->value) {?>
					    <?php $_smarty_tpl->tpl_vars['collectCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount'], null, 0);?>
                    <?php }?>
					<li class="li-3">
						<div class="m-content">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-collect.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][9];?>
</h5>
							<div class="fn-clear item1">
								<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'collect'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][311];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['collectCount']->value);?>
</a></p>
							</div>
						</div>
						<div class="cover c3"></div>
					</li>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


						
						<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'article','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='article'&&$_tmp7) {?>

							<?php $_smarty_tpl->tpl_vars['articleAudit'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['articleGray'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['articleRefuse'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo article(array('action'=>"alist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['articleAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['articleGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['articleRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<li class="li-4">
								<div class="m-content">
									<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-article.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][269];?>
</h5>
									<div class="fn-clear item3">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'article','param'=>"state=1"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['articleAudit']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'article','param'=>"state=0"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['articleGray']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'article','param'=>"state=2"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['articleRefuse']->value);?>
</em>
											<?php if ($_smarty_tpl->tpl_vars['articleRefuse']->value>0) {?><i class="m-state"></i><?php }?>
										</a></p>
									</div>
								</div>
								<div class="cover c4"></div>
							</li>

						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'info','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='info'&&$_tmp8) {?>

							<?php $_smarty_tpl->tpl_vars['infoAudit'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['infoGray'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['infoRefuse'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo info(array('action'=>"ilist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['infoAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['infoGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['infoRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<li class="li-8">
								<div class="m-content">
									<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-info.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][18];?>
</h5>
									<div class="fn-clear item3">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'info','param'=>"state=1"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['infoAudit']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'info','param'=>"state=0"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['infoGray']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'info','param'=>"state=2"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['infoRefuse']->value);?>
</em>
											<?php if ($_smarty_tpl->tpl_vars['infoRefuse']->value>0) {?><i class="m-state"></i><?php }?>
										</a></p>
									</div>
								</div>
								<div class="cover c8"></div>
							</li>

						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'house','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='house'&&$_tmp9) {?>

							<?php $_smarty_tpl->tpl_vars['houseSale'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"saleList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo house(array('action'=>"saleList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['houseSale'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"saleList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


							<?php $_smarty_tpl->tpl_vars['houseZu'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zuList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo house(array('action'=>"zuList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['houseZu'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zuList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


							<?php $_smarty_tpl->tpl_vars['houseXzl'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"xzlList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo house(array('action'=>"xzlList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['houseXzl'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"xzlList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


							<?php $_smarty_tpl->tpl_vars['houseSp'] = new Smarty_variable(0, null, 0);?>s
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"spList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo house(array('action'=>"spList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['houseSp'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"spList",'u'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<li class="li-10">
								<div class="m-content"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-house.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][22];?>
</h5>
									<div class="fn-clear item4">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-sale'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][218];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['houseSale']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-zu'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][219];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['houseZu']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-xzl'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][220];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['houseXzl']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-sp'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][221];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['houseSp']->value);?>
</a></p>
									</div>
								</div>
								<div class="cover c10"></div>
							</li>

						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'job','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='job'&&$_tmp10) {?>

							<?php $_smarty_tpl->tpl_vars['jobCollect'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('member', array('action'=>"collectList",'module'=>"job",'temp'=>"job",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo member(array('action'=>"collectList",'module'=>"job",'temp'=>"job",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['jobCollect'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo member(array('action'=>"collectList",'module'=>"job",'temp'=>"job",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


							<?php $_smarty_tpl->tpl_vars['jobDelivery'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"deliveryList",'type'=>"person",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo job(array('action'=>"deliveryList",'type'=>"person",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['jobDelivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"deliveryList",'type'=>"person",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


							<?php $_smarty_tpl->tpl_vars['jobInvitation'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"invitationList",'type'=>"person",'state'=>"0",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo job(array('action'=>"invitationList",'type'=>"person",'state'=>"0",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['jobInvitation'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"invitationList",'type'=>"person",'state'=>"0",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<li class="li-6">
								<div class="m-content">
									<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-job.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][765];?>
</h5>
									<div class="fn-clear item3">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'collections'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][240];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['jobCollect']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'delivery'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][16];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['jobDelivery']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'invitation'),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][767];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['jobInvitation']->value);?>
</em>
											<?php if ($_smarty_tpl->tpl_vars['jobInvitation']->value>0) {?><i class="m-state"></i><?php }?>
										</a></p>
									</div>
								</div>
								<div class="cover c6"></div>
							</li>

						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tieba','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='tieba'&&$_tmp11) {?>

							<?php $_smarty_tpl->tpl_vars['tiebaAudit'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['tiebaGray'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['tiebaRefuse'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tieba', array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo tieba(array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['tiebaAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tiebaGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tiebaRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tieba(array('action'=>"tlist",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<li class="li-7">
								<div class="m-content">
									<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-tieba.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][238];?>
</h5>
									<div class="fn-clear item3">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'tieba','param'=>"state=1"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tiebaAudit']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'tieba','param'=>"state=0"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tiebaGray']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'tieba','param'=>"state=2"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['tiebaRefuse']->value);?>
</em>
											<?php if ($_smarty_tpl->tpl_vars['tiebaRefuse']->value>0) {?><i class="m-state"></i><?php }?>
										</a></p>
									</div>
								</div>
								<div class="cover c7"></div>
							</li>

						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'huodong','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='huodong'&&$_tmp12) {?>

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

							<li class="li-5">
								<div class="m-content"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-huodong.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][3];?>
</h5>
									<div class="fn-clear item4">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'huodong','param'=>"state=1"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongAudit']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'huodong','param'=>"state=0"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongGray']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'huodong','param'=>"state=2"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongRefuse']->value);?>
</em>
											<?php if ($_smarty_tpl->tpl_vars['huodongRefuse']->value>0) {?><i class="m-state"></i><?php }?>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'huodong-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][33];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['huodongJoin']->value);?>
</a></p>
									</div>
								</div>
								<div class="cover c5"></div>
							</li>

						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'vote','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='vote'&&$_tmp13) {?>

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

							<li class="li-11">
								<div class="m-content"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-vote.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][26];?>
</h5>
									<div class="fn-clear item3">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'vote-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][33];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['voteJoin']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage-vote','param'=>'state=1'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][20];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['voteAudit']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage-vote','param'=>'state=2'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][507];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['voteExpire']->value);?>
</a></p>
									</div>
								</div>
								<div class="cover c11"></div>
							</li>

						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'live','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='live'&&$_tmp14) {?>

							<?php $_smarty_tpl->tpl_vars['liveState0'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['liveState1'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['liveState2'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"alive",'u'=>"1",'state'=>"0",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo live(array('action'=>"alive",'u'=>"1",'state'=>"0",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['liveState0'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"alive",'u'=>"1",'state'=>"0",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"alive",'u'=>"1",'state'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo live(array('action'=>"alive",'u'=>"1",'state'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['liveState1'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"alive",'u'=>"1",'state'=>"1",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"alive",'u'=>"1",'state'=>"2",'return'=>"list",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo live(array('action'=>"alive",'u'=>"1",'state'=>"2",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['liveState2'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['totalCount'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"alive",'u'=>"1",'state'=>"2",'return'=>"list",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<li class="li-12">
								<div class="m-content"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-live.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][23];?>
</h5>
									<div class="fn-clear item3">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'live'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][21];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['liveState0']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'live'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][22];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['liveState1']->value);?>
</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'live'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][507];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['liveState2']->value);?>
</a></p>
									</div>
								</div>
								<div class="cover c12"></div>
							</li>
							
						
						<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'car','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='car'&&$_tmp15) {?>

							<?php $_smarty_tpl->tpl_vars['carAudit'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['carGray'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['carRefuse'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"car",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo car(array('action'=>"car",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['carAudit'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['audit'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['carGray'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['gray'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['carRefuse'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['refuse'], null, 0);?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"car",'return'=>"list",'u'=>"1",'pageData'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<li class="li-8">
								<div class="m-content">
									<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon/m-info.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /><h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][43];?>
</h5>
									<div class="fn-clear item3">
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'car','param'=>"state=1"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][30];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['carAudit']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'car','param'=>"state=0"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][31];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['carGray']->value);?>
</em>
										</a></p>
										<p><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'car','param'=>"state=2"),$_smarty_tpl);?>
">
											<em class="inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][32];?>
 <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['carRefuse']->value);?>
</em>
											<?php if ($_smarty_tpl->tpl_vars['infoRefuse']->value>0) {?><i class="m-state"></i><?php }?>
										</a></p>
									</div>
								</div>
								<div class="cover c8"></div>
							</li>

						<?php }}}}}}}}}?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				</ul>
			</div>
			<!-- 模块集合 e -->

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
