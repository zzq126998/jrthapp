<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:15:58
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\security.html" */ ?>
<?php /*%%SmartyHeaderCode:14732207995d51203e63e170-89396116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bba5ad1cd13abce0b0d4cf158cc9d6577ef44e53' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\security.html',
      1 => 1553911872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14732207995d51203e63e170-89396116',
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
    'doget' => 0,
    'userinfo' => 0,
    'question1' => 0,
    'question2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d51203e82c4b9_41832139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d51203e82c4b9_41832139')) {function content_5d51203e82c4b9_41832139($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][8];?>
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
css/security.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
, doget = '<?php echo $_smarty_tpl->tpl_vars['doget']->value;?>
', rating = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['security'];?>
, certifyState = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['certifyState'];?>
,
			pageUrl = '<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security'),$_smarty_tpl);?>
',
			bindPaypwdUrl = '<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'paypwdAdd'),$_smarty_tpl);?>
',
			bindPhoneUrl = '<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chphone'),$_smarty_tpl);?>
',
			bindEmailUrl = '<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chemail'),$_smarty_tpl);?>
',
			bindQuestionUrl = '<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'question'),$_smarty_tpl);?>
';
	var phoneCheck = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck'];?>
, emailCheck = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['emailCheck'];?>
, questionSet = <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['question'];?>
;
<?php echo '</script'; ?>
>
</head>

<body>
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][8], null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
	<div class="container fn-clear">

		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="main">

			<dl class="testing fn-clear" id="testing">
				<dt class="percentage">100</dt>
				<dd>
					<h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][73];?>
···</h5>
					<div class="progress">
						<div class="bar"><i></i></div>
						<ul class="fn-clear">
							<li class="p1"><i></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][7];?>
</span></li>
							<li class="p2"><i></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][255];?>
</span></li>
							<li class="p3"><i></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][774];?>
</span></li>
							<li class="p4"><i></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][74];?>
</span></li>
							<li class="p5"><i></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][256];?>
</span></li>
						</ul>
					</div>
					<p class="suc-tip"></p>
					<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security'),$_smarty_tpl);?>
" class="checkSecure"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][57];?>
</a>
				</dd>
			</dl>

			<div class="list">
				<ul class="nickname fn-clear">
					<li class="l"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][29];?>
</li>
					<li class="c"><s></s><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</li>
					<li class="r"><a href="javascript:;" id="chnickname"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][4];?>
</a></li>
				</ul>
				<ul class="password fn-clear">
					<li class="l"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][11];?>
</li>
					<li class="c"><s></s>****************</li>
					<li class="r"><a href="javascript:;" id="chpassword"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][4];?>
</a></li>
				</ul>
				<ul class="paypwd<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['paypwdCheck']==0) {?> fail<?php }?> fn-clear fn-hide">
					<li class="l"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][7];?>
</li>
					<li class="c"><s></s><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['paypwdCheck']==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][75];
} else { ?>****************<?php }?></li>
					<li class="r"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['paypwdCheck']==0) {?><a href="javascript:;" id="paypwdAdd"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][173];?>
</a><?php } else { ?><a href="javascript:;" id="paypwdEdit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][4];?>
</a><a href="javascript:;" id="paypwdReset"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][5];?>
</a><?php }?></li>
				</ul>
				<ul class="certify<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {?> fail<?php }?> fn-clear fn-hide">
					<li class="l"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][255];?>
</li>
					<li class="c"><s></s><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {
if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==3) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][741];?>
...<?php } else {
if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==2) {
echo $_smarty_tpl->tpl_vars['userinfo']->value['certifyInfo'];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][17];
}
}
} else {
echo $_smarty_tpl->tpl_vars['userinfo']->value['idcard'];
}?></li>
					<li class="r"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {
if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=3) {?><a href="javascript:;" id="chCertify"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==2) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][174];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][47];
}?></a><?php } else { ?><a href="javascript:;" id="shCertify"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][175];?>
</a><?php }
} else { ?><a href="javascript:;" id="shCertify"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][175];?>
</a><?php }?></li>
				</ul>
				<ul class="mobile<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']!=1) {?> fail<?php }?> fn-clear fn-hide">
					<li class="l"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][7];?>
</li>
					<li class="c"><s></s><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']!=1) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][17];
} else { ?>+<?php echo ($_smarty_tpl->tpl_vars['userinfo']->value['areaCode']).($_smarty_tpl->tpl_vars['userinfo']->value['phoneEncrypt']);
}?></li>
					<li class="r"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']!=1) {?><a href="javascript:;" id="chphone"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][47];?>
</a><?php } else { ?><a href="javascript:;" id="chphoneEdit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][3];?>
</a><a href="javascript:;" id="chphoneDel"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][10];?>
</a><?php }?></li>
				</ul>
				<ul class="email<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']!=1) {?> fail<?php }?> fn-clear fn-hide">
					<li class="l"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][10];?>
</li>
					<li class="c"><s></s><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']!=1) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][17];
} else {
echo $_smarty_tpl->tpl_vars['userinfo']->value['emailEncrypt'];
}?></li>
					<li class="r"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']!=1) {?><a href="javascript:;" id="chemail"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][47];?>
</a><?php } else { ?><a href="javascript:;" id="chEmailEdit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][4];?>
</a><a href="javascript:;" id="chEmailDel"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][10];?>
</a><?php }?></li>
				</ul>
				<ul class="question<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['question']==0) {?> fail<?php }?> fn-clear fn-hide">
					<li class="l"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][213];?>
</li>
					<li class="c"><s></s><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['question']==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][75];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][15];
}?></li>
					<li class="r"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['question']==0) {?><a href="javascript:;" id="question"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][655];?>
</a><?php } else { ?><a href="javascript:;" id="chQuestionEdit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][4];?>
</a><a href="javascript:;" id="chQuestionDel"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][5];?>
</a><?php }?></li>
				</ul>
			</div>

		</div>
	</div>
</div>

<?php echo '<script'; ?>
 id="authentication" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][92];?>
</p></div>
		<ul class="authenticated">
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==1) {?><li class="p"><a href="javascript:;"><em></em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][13];?>
<s><i></i></s></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']==1) {?><li class="e"><a href="javascript:;"><em></em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][14];?>
<s><i></i></s></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['question']==1) {?><li class="q"><a href="javascript:;"><em></em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][93];?>
<s><i></i></s></a></li><?php }?>
		</ul>
		<div class="authlist">
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==1) {?>
			<div class="item">
				<dl class="clearfix">
		      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][6];?>
：</dt>
		      <dd><input type="text" disabled value="+<?php echo ($_smarty_tpl->tpl_vars['userinfo']->value['areaCode']).($_smarty_tpl->tpl_vars['userinfo']->value['phoneEncrypt']);?>
" /></dd>
		    </dl>
		    <dl class="clearfix">
		      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][0];?>
：</dt>
		      <dd><input type="text" class="vdimgck" id="vdimgck" name="vdimgck" placeholder="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][0],'1','6');?>
" autocomplete="off" maxlength="6" onkeyup="value=value.replace(/\D+/ig,'')" /><a href="javascript:;" class="verifybtn" id="getPhoneAuthVerify"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][4];?>
</a></dd>
		    </dl>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']==1) {?>
			<div class="item">
				<dl class="clearfix">
		      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][76];?>
：</dt>
		      <dd><input type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['emailEncrypt'];?>
" /></dd>
		    </dl>
		    <dl class="clearfix">
		      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][0];?>
：</dt>
		      <dd><input type="text" class="vdimgck" id="vdimgckEmail" name="vdimgck" placeholder="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][0],'1','6');?>
" autocomplete="off" maxlength="6" onkeyup="value=value.replace(/\D+/ig,'')" /><a href="javascript:;" class="verifybtn" id="getEmailAuthVerify"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][5];?>
</a></dd>
		    </dl>
		  </div>
		  <?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['question']==1) {?>
			<div class="item">
				<dl class="clearfix">
		      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][10];?>
：</dt>
		      <dd class="sel-group">
		      	<em><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][231],'1',$_smarty_tpl->tpl_vars['question1']->value),'2',$_smarty_tpl->tpl_vars['question2']->value);?>
</em>
		      </dd>
		    </dl>
		    <dl class="clearfix">
		      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][11];?>
：</dt>
		      <dd><input type="text" id="answer" name="answer" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][102];?>
" autocomplete="off" /></dd>
		    </dl>
			</div>
			<?php }?>
		</div>
		<div class="footer-tip"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][94];?>
，<a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][95];?>
</a>，<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][96];?>
。</div>
  </div>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 id="chnicknameEdit" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][86];?>
</p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][30];?>
：</dt>
      <dd><input type="text" id="name" name="name" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][87];?>
" maxlength="10" /></dd>
    </dl>
  </div>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 id="chpasswordEdit" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][85];?>
</p></div>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['pwd']) {?>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][12];?>
：</dt>
      <dd><input type="password" id="old" name="old" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][83];?>
" /></dd>
    </dl>
		<?php }?>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][1];?>
：</dt>
      <dd><input type="password" id="new" name="new" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][84];?>
" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][13];?>
：</dt>
      <dd id="passwordStrengthDiv"><span></span></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][10];?>
：</dt>
      <dd><input type="password" id="confirm" name="confirm" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][14];?>
" /></dd>
    </dl>
  </div>
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['paypwdCheck']==0) {?>
<?php echo '<script'; ?>
 id="chpaypwdAdd" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][243];?>
</p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][7];?>
：</dt>
      <dd><input type="password" id="pay1" name="pay1" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][213];?>
" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][13];?>
：</dt>
      <dd id="passwordStrengthDiv"><span></span></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][77];?>
：</dt>
      <dd><input type="password" id="pay2" name="pay2" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][21];?>
" /></dd>
    </dl>
  </div>
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 id="chpaypwdEdit" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][88];?>
</p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][16];?>
：</dt>
      <dd><input type="password" id="old" name="old" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][83];?>
" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][17];?>
：</dt>
      <dd><input type="password" id="new" name="new" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][84];?>
" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][13];?>
：</dt>
      <dd id="passwordStrengthDiv"><span></span></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][10];?>
：</dt>
      <dd><input type="password" id="confirm" name="confirm" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][14];?>
" /></dd>
    </dl>
  </div>
<?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==0||$_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==2) {?>
<?php echo '<script'; ?>
 id="chCertifyAdd" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==2) {?> error<?php }?>"><s></s><p><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==2) {
echo $_smarty_tpl->tpl_vars['userinfo']->value['certifyInfo'];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][740];
}?></p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][31];?>
：</dt>
      <dd style="width: 200px;"><input type="text" id="realname" name="realname" autocomplete="off" maxlength="10" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][105];?>
" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][32];?>
：</dt>
      <dd style="width: 200px;"><input type="text" id="idcard" name="idcard" autocomplete="off" maxlength="18" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][106];?>
" /></dd>
    </dl>
    <div class="cardUpload fn-clear">
    	<div class="item front">
    		<input name="front" type="hidden" id="front" />
    		<div class="spic">
	        <div class="sholder"></div>
	        <a href="javascript:;" class="reupload"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][59];?>
</a>
	      </div>
	      <iframe class="uploadFrame" src ="/include/upfile.inc.php?mod=siteConfig&type=card&obj=front&filetype=image" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" ></iframe>
    	</div>
    	<div class="item back">
    		<input name="back" type="hidden" id="back" />
    		<div class="spic">
	        <div class="sholder"></div>
	        <a href="javascript:;" class="reupload"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][59];?>
</a>
	      </div>
	      <iframe class="uploadFrame" src ="/include/upfile.inc.php?mod=siteConfig&type=card&obj=back&filetype=image" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" ></iframe>
    	</div>
    </div>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==2) {?>
    <dl class="licenseUpload clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][187];?>
：</dt>
      <dd>
      	<input name="license" type="hidden" id="license" />
    		<div class="spic">
	        <div class="sholder"></div>
	        <a href="javascript:;" class="reupload"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][59];?>
</a>
	      </div>
	      <iframe class="uploadFrame" src ="/include/upfile.inc.php?mod=siteConfig&type=card&obj=license&filetype=image" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" ></iframe>
      </dd>
    </dl>
		<?php }?>
  </div>
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 id="chCertify" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip success"><s></s><p><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']==1) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][246];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][247];
}?></p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][31];?>
：</dt>
      <dd style="width: 200px;"><input type="text" id="realname" disabled /></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][32];?>
：</dt>
      <dd style="width: 200px;"><input type="text" id="idcard" disabled /></dd>
    </dl>
    <div class="cardUpload fn-clear">
    	<div class="item front"><div class="spic"><div class="sholder"></div></div></div>
    	<div class="item back"><div class="spic"><div class="sholder"></div></div></div>
    </div>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==2) {?>
    <dl class="licenseUpload clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][187];?>
：</dt>
      <dd><div class="spic"><div class="sholder"></div></div></dd>
    </dl>
		<?php }?>
  </div>
<?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']!=1) {?>
<?php echo '<script'; ?>
 id="chphoneAdd" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][238];?>
</p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][6];?>
：</dt>
      <dd><div class="areaCodeBox"><a href="javascript:;" class="active"><span class="code">86</span></a><ul class="areaCon"></ul><input type="hidden" name="areaCode" name="areaCode" id="areaCode" value="86" /></div><input type="text" id="phone" name="phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][463];?>
" autocomplete="off" maxlength="11" onkeyup="value=value.replace(/\D+/ig,'')" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][0];?>
：</dt>
      <dd><input type="text" class="vdimgck" id="vdimgck" name="vdimgck" placeholder="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][0],'1','6');?>
" autocomplete="off" maxlength="6" onkeyup="value=value.replace(/\D+/ig,'')" /><a href="javascript:;" class="verifybtn" id="getPhoneVerify"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][4];?>
</a></dd>
    </dl>
  </div>
<?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']!=1) {?>
<?php echo '<script'; ?>
 id="chemailAdd" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][230];?>
</p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][76];?>
：</dt>
      <dd><input type="text" id="email" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][505];?>
" autocomplete="off" /></dd>
    </dl>
  </div>
<?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['question']==0) {?>
<?php echo '<script'; ?>
 id="questionAdd" type="text/html">
	<div class="editForm" name="editForm">
		<div class="edit-tip"><s></s><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][251];?>
</p></div>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][130];?>
：</dt>
      <dd class="sel-group">
      	<em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][742];?>
</em>
      	<div class="sel q1">
      		<label><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];?>
<s></s></label>
      		<select>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][743];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][743];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][744];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][744];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][745];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][745];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][746];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][746];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][747];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][747];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][748];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][748];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][749];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][749];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][750];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][750];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][751];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][751];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][752];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][752];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][753];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][753];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][754];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][754];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][755];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][755];?>
</option>
      		</select>
      	</div>
      	<input type="hidden" id="q1" name="q1" />
      	<em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][756];?>
</em>
      	<div class="sel q2">
      		<label><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];?>
<s></s></label>
      		<select>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];?>
</option>
						<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][4];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][4];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][757];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][757];?>
</option>
      			<option value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][758];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][758];?>
</option>
      		</select>
      	</div>
      	<input type="hidden" id="q2" name="q2" />
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][759];?>
：</dt>
      <dd><input type="text" id="answer" name="answer" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][102];?>
" autocomplete="off" /></dd>
    </dl>
  </div>
<?php echo '</script'; ?>
>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.passwordStrength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/areaCode.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/security.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
