<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:22:38
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\login.html" */ ?>
<?php /*%%SmartyHeaderCode:6343922375d5105ae795ec9-47967517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca396b66dac9e69c4590253151722493a69a1b4' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\login.html',
      1 => 1553911774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6343922375d5105ae795ec9-47967517',
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
    'redirectUrl' => 0,
    'site' => 0,
    'cfg_geetest' => 0,
    'cfg_weblogo' => 0,
    'cfg_shortname' => 0,
    'cfg_hotline' => 0,
    'cfg_smsLoginState' => 0,
    'loginCode' => 0,
    'login' => 0,
    'cfg_secureAccess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5105ae8034f9_74271126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5105ae8034f9_74271126')) {function content_5d5105ae8034f9_74271126($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][9];?>
-<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/login.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', redirectUrl = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
', site = '<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
';
	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
  var geetest = <?php echo $_smarty_tpl->tpl_vars['cfg_geetest']->value;?>
;
<?php echo '</script'; ?>
>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- head s -->
<div class="wrap header fn-clear">
	<div class="logo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
">
			<div class="shortname"><h2><?php echo $_smarty_tpl->tpl_vars['cfg_shortname']->value;?>
</h2><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][26];?>
</p></div>
		</a>
	</div>
	<dl class="kefu fn-clear">
		<dt><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/kf_tel.png" alt=""></dt>
		<dd>
			<p class="p1"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][275];?>
</p>
			<p class="p2"><?php echo $_smarty_tpl->tpl_vars['cfg_hotline']->value;?>
</p>
		</dd>
	</dl>
</div>
<!-- head e -->
<!-- 登录外框 s -->
<div class="loginwrap">
	<div class="wrap">
		<div class="loginBG">
      <?php echo getMyAd(array('title'=>((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][13])),$_smarty_tpl);?>

    </div>
		<div class="formbox">
			<span class="ewmlogin"></span>
			<div class="saoma">
				<p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][58];?>
</p>
				<div class="picbox">
					<div class="pic1" id="login_container"><iframe src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=wechat&notclose=1" frameborder="0" scrolling="no" width="300px" height="350px"></iframe></div>
				</div>
			</div>
			<form action="" class="loginform">
				<div class="login-container">
					<ul class="tab fn-clear">
						<li class="curr"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][14];?>
</li>
						<?php if ($_smarty_tpl->tpl_vars['cfg_smsLoginState']->value) {?><li><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][15];?>
</li><?php }?>
					</ul>
					<div class="main">
						<div class="error"><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][499];?>
</p></div>
						<div class="item">
							<div class="form-row">
								<div class="inpbdr">
									<i class="lgicon iconuser"></i>
									<input type="text" class="inp username" id="loginuser" name="loginuser" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][500];?>
">
									
								</div>
							</div>
							<div class="form-row">
								<div class="inpbdr">
									<i class="lgicon iconlock"></i>
									<input type="password" class="inp password" id="loginpass" name="loginpass" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][0];?>
">
									
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['loginCode']->value==1) {?>
							<div class="form-row fn-clear">
								<div class="inpbdr yzminput">
									<i class="lgicon iconyzm"></i>
									<input type="input" class="inp vdimgck" id="logincode" name="logincode" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][0];?>
">
								</div>
								<div class="inpbdr yzmpic"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/vdimgck.php" id="vdimgck" alt=""></div>
								<a href="javascript:;" class="change"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][125];?>
</a>
							</div>
							<?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['cfg_smsLoginState']->value) {?>
						<div class="item fn-hide">
							<div class="form-row">
								<div class="inpbdr">
									<span class="areaCode"><i>+86</i><s></s></span>
									<input type="text" class="inp phone" id="phone" name="phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][6];?>
">
								</div>
							</div>
							<div class="areaCode_wrap"></div>
							<div class="form-row">
								<div class="inpbdr">
									<i class="lgicon iconlock"></i>
									<input type="text" class="inp vercode" id="vercode" name="vercode" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][8];?>
">
									<button type="button" class="getCodes"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][1];?>
</button>
								</div>
							</div>
						</div>
						<?php }?>
						<div class="form-row btnwrap">
							<input type="submit" class="submit" value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][0];?>
">
						</div>
						<div class="otherdo fn-clear">
							<a href="register.html" class="goregister"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][6];?>
></a>
							<a href="fpwd.html" class="fogetpsd"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][2];?>
？</a>
						</div>

					</div>

				</div>

				<!-- <div class="form-row"><div class="rememberpsd"><i class="lgicon iconcheck"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][501];?>
</div></div> -->

				<div class="othertype">
					<p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][4];?>
：</p>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"getLoginConnect",'return'=>"login")); $_block_repeat=true; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['login']->value['name'];?>
" class="loginconnect"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
/img/32.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>

			</form>
		</div>
	</div>
</div>
<!-- 登录外框 e -->

<?php echo $_smarty_tpl->getSubTemplate ("../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('theme'=>'gray'), 0);?>


<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/login.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['cfg_geetest']->value) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_secureAccess']->value;?>
static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
><?php }?>
</body>
</html>
<?php }} ?>
