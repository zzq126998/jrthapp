<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:16:55
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\config-selfmedia.html" */ ?>
<?php /*%%SmartyHeaderCode:11901487165d512077164ad4-52848130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f42f48218f2b690f7daffe86ff4077436ea7a1' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\config-selfmedia.html',
      1 => 1561715346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11901487165d512077164ad4-52848130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pageTitle' => 0,
    'cfg_webname' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'detail_id' => 0,
    'detail_type' => 0,
    'langData' => 0,
    'is_join' => 0,
    'detail_state' => 0,
    'detail_editstate' => 0,
    'mttype' => 0,
    'detail_mb_type' => 0,
    'detail_ac_name' => 0,
    'detail_ac_profile' => 0,
    'detail_ac_fieldname' => 0,
    'type' => 0,
    'detail_ac_field' => 0,
    'detail_ac_photo' => 0,
    'detail_ac_photoSource' => 0,
    'detail_ac_addrid' => 0,
    'detail_ac_addr' => 0,
    'detail_cityid' => 0,
    'detail_mb_name' => 0,
    'detail_mb_levelname' => 0,
    'detail_mb_level' => 0,
    'detail_mb_typename' => 0,
    'detail_mb_code' => 0,
    'detail_mb_license' => 0,
    'detail_mb_licenseSource' => 0,
    'detail_op_name' => 0,
    'detail_op_idcard' => 0,
    'detail_op_idcardfront' => 0,
    'cfg_attachment' => 0,
    'detail_op_idcardfrontSource' => 0,
    'detail_op_phone' => 0,
    'detail_op_email' => 0,
    'detail_op_authorize' => 0,
    'detail_op_authorizeSource' => 0,
    'selfmediaGrantImg' => 0,
    'selfmediaGrantTpl' => 0,
    'detail_org_major_license_typename' => 0,
    'detail_org_major_license_type' => 0,
    'detail_org_major_license' => 0,
    'detail_org_major_licenseSource' => 0,
    'detail_outer' => 0,
    'detail_proveList' => 0,
    'k' => 0,
    'i' => 0,
    'detail_prove' => 0,
    'atlasSize' => 0,
    'cfg_weixinName' => 0,
    'detail_imglist' => 0,
    'selfmediaAgreement' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5120772fee26_26624280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5120772fee26_26624280')) {function content_5d5120772fee26_26624280($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable("自媒体", null, 0);?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
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
css/fabu.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/config-selfmedia.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = cfg_staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';

	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");

	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
	var modelType = 'article', uploadType = "thumb", thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = '<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
';
	var service = 'siteConfig';//用于选择区域
	var detail = {
		id: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail_id']->value)===null||$tmp==='' ? 0 : $tmp);?>
,
		type: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail_type']->value)===null||$tmp==='' ? 0 : $tmp);?>
,
	}
	
<?php echo '</script'; ?>
>
<style>
.variable.variable-<?php echo $_smarty_tpl->tpl_vars['detail_type']->value;?>
 {display: block;}
.unauth {padding:150px 0;text-align: center;font-size: 18px;font-weight: bold;}
</style>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
	<div class="container fn-clear">

		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="main">

			<ul class="main-tab">
				<li class="curr"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config','action'=>'selfmedia'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][0];?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['is_join']->value==1&&$_smarty_tpl->tpl_vars['detail_state']->value==1) {?>
				<li class="add"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'article'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][16];?>
</a></li>
				<?php }?>
			</ul>

			<div class="box">
				<?php if ($_smarty_tpl->tpl_vars['is_join']->value===0) {?>
				<div class="step1">
					<ul class="fn-clear">
						<li class="type1" data-id="1">
							<div class="inner">
								<i></i>
								<p class="name"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][1];?>
</p>
								<p class="des"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][2];?>
</p>
							</div>
						</li>
						<li class="type2" data-id="2">
							<div class="inner">
								<i></i>
								<p class="name"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][3];?>
</p>
								<p class="des"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][4];?>
</p>
							</div>
						</li>
						<li class="type3" data-id="3">
							<div class="inner">
								<i></i>
								<p class="name"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][5];?>
</p>
								<p class="des"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][6];?>
</p>
							</div>
						</li>
						<li class="type4" data-id="4">
							<div class="inner">
								<i></i>
								<p class="name"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][7];?>
</p>
								<p class="des"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][8];?>
</p>
							</div>
						</li>
						<li class="type5" data-id="5">
							<div class="inner">
								<i></i>
								<p class="name"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][9];?>
</p>
								<p class="des"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][10];?>
</p>
							</div>
						</li>
					</ul>
					<a href="javascript:;" class="btn next disabled"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][11];?>
</a>
				</div>

				<?php } elseif ($_smarty_tpl->tpl_vars['is_join']->value==2) {?>
				<p class="unauth">抱歉，您没有管理自媒体账号的权限</p>
				<?php }?>

				<div class="step2<?php if ($_smarty_tpl->tpl_vars['is_join']->value!=1) {?> fn-hide<?php }?> w-form">
					<?php if (!$_smarty_tpl->tpl_vars['is_join']->value) {?><a href="javascript:;" class="choose">返回上一步</a><?php }?>
					<form name="fabuForm" id="fabuForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/ajax.php?service=article&action=selfmediaConfig">

						<?php if ($_smarty_tpl->tpl_vars['is_join']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['detail_state']->value==0) {?>
			        	<p class="state0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][168];?>
</p>
							<?php } elseif ($_smarty_tpl->tpl_vars['detail_state']->value==2) {?>
			        	<p class="state2"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][12];?>
</p>
			        <?php } elseif ($_smarty_tpl->tpl_vars['detail_state']->value==1) {?>
			        	<?php if ($_smarty_tpl->tpl_vars['detail_editstate']->value==0) {?>
			        	<p class="state2" id="waitAudit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][13];?>
</p>
			        	<?php } elseif ($_smarty_tpl->tpl_vars['detail_editstate']->value==2) {?>
			        	<p class="state2"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][14];?>
</p>
								<?php }?>
			        <?php }?>
		        <?php }?>
						
						<input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['detail_type']->value;?>
|default:0">
						<div class="group-title">
							<p class="title"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][15];?>
</span></p>
						</div>

						<dl class="fn-clear variable variable-2" id="type2_mb_type" data-required="1">
						  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][16];?>
：</dt>
						  <dd>
							  <div class="radio">
							  	<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"selfmedia_type2",'return'=>"mttype")); $_block_repeat=true; echo article(array('action'=>"selfmedia_type2",'return'=>"mttype"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<span data-id="<?php echo $_smarty_tpl->tpl_vars['mttype']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['detail_mb_type']->value==$_smarty_tpl->tpl_vars['mttype']->value['id']) {?> class="curr"<?php }?>>	<?php echo $_smarty_tpl->tpl_vars['mttype']->value['typename'];?>
</span>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"selfmedia_type2",'return'=>"mttype"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<input type="hidden" name="mb_type" id="mb_type2" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_type']->value;?>
" />
								</div>
							</dd>
						</dl>
		        <dl class="fn-clear" data-required="1">
							<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][17];?>
：</dt>
							<dd>
								<input type="text" name="ac_name" class="inp" id="ac_name" size="40" maxlength="50" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][18];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_ac_name']->value;?>
" />
								<span class="tip-inline"></span>
							</dd>
						</dl>
						<dl class="fn-clear" data-required="1">
							<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][19];?>
：</dt>
							<dd>
								<input type="text" name="ac_profile" class="inp" id="ac_profile" size="60" maxlength="30" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][20];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_ac_profile']->value;?>
" />
								<span class="tip-inline"></span>
							</dd>
						</dl>
						<dl class="fn-clear" data-required="1">
							<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][21];?>
：</dt>
							<dd id="selType">
								<div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][41];?>
">
									<button type="button" class="sel"><?php if ($_smarty_tpl->tpl_vars['detail_ac_fieldname']->value) {
echo $_smarty_tpl->tpl_vars['detail_ac_fieldname']->value;
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?><span class="caret"></span></button>
									<ul class="sel-menu">
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"selfmedia_field",'return'=>"type")); $_block_repeat=true; echo article(array('action'=>"selfmedia_field",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"selfmedia_field",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</ul>
								</div>
								<input type="hidden" name="ac_field" id="ac_field" value="<?php echo $_smarty_tpl->tpl_vars['detail_ac_field']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][22];?>
" />
								<span class="tip-inline"></span>
							</dd>
						</dl>
						<dl class="fn-clear" data-required="1">
							<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][13];?>
：</dt>
							<dd class="thumb fn-clear listImgBox">
								<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_ac_photo']->value!='') {?> fn-hide<?php }?>" id="filePicker1" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
								<?php if ($_smarty_tpl->tpl_vars['detail_ac_photo']->value!='') {?>
								<ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['detail_ac_photo']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['detail_ac_photo']->value),'type'=>"small"),$_smarty_tpl);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_ac_photoSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
								<?php } else { ?>
								<ul id="listSection1" class="listSection thumblist fn-clear"></ul>
								<?php }?>
								<input type="hidden" name="ac_photo" id="ac_photo" value="<?php echo $_smarty_tpl->tpl_vars['detail_ac_photoSource']->value;?>
" class="imglist-hidden">
							</dd>
						</dl>
						<dl class="fn-clear">
	            <dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][34];?>
：</dt>
	            <dd id="selAddr">
                <div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][68];?>
">
                  <div class="city-title addrBtn" data-field="addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['detail_ac_addrid']->value,'split'=>' '),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['detail_ac_addrid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['detail_ac_addrid']->value) {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['detail_ac_addrid']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?></div>
                </div>
	              <input type="hidden" name="ac_addrid" id="ac_addrid" value="<?php echo $_smarty_tpl->tpl_vars['detail_ac_addr']->value;?>
" />
	              <input type="hidden" name="cityid" id="cityid" value="<?php echo $_smarty_tpl->tpl_vars['detail_cityid']->value;?>
" />
	              <span class="tip-inline"></span>
	            </dd>
	          </dl>
						
						<div class="variable variable-2 variable-3 variable-4">

		          <div class="group-title group-mgt">
								<p class="title"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][23];?>
</span></p>
								<p class="des"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][24];?>
</p>
							</div>

			        <dl class="fn-clear variable variable-2">
								<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][25];?>
：</dt>
								<dd>
									<input type="text" name="mb_name" class="inp" id="mb_name1" size="40" maxlength="50" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][18];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_name']->value;?>
" />
									<span class="tip-inline"></span>
								</dd>
							</dl>

							<dl class="fn-clear variable variable-3">
								<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][803];?>
：</dt>
								<dd>
									<input type="text" name="mb_name" class="inp" id="mb_name_3" size="40" maxlength="50" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][320];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_name']->value;?>
" />
									<span class="tip-inline"></span>
								</dd>
							</dl>
							
							<dl class="fn-clear variable variable-4">
								<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][26];?>
：</dt>
								<dd>
									<input type="text" name="mb_name" class="inp" id="mb_name2" size="40" maxlength="50" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][27];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_name']->value;?>
" />
									<span class="tip-inline"></span>
								</dd>
							</dl>
							<dl class="fn-clear variable variable-4">
								<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][28];?>
：</dt>
								<dd id="selType">
									<div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][29];?>
">
										<button type="button" class="sel"><?php if ($_smarty_tpl->tpl_vars['detail_mb_levelname']->value) {
echo $_smarty_tpl->tpl_vars['detail_mb_levelname']->value;
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?><span class="caret"></span></button>
										<ul class="sel-menu">
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"selfmedia_type42",'return'=>"type")); $_block_repeat=true; echo article(array('action'=>"selfmedia_type42",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

											<li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
											<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"selfmedia_type42",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										</ul>
									</div>
									<input type="hidden" name="mb_level" id="mb_level" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_level']->value;?>
" />
									<span class="tip-inline"></span>
								</dd>
							</dl>
							<dl class="fn-clear variable variable-4">
								<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][30];?>
：</dt>
								<dd id="selType">
									<div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][31];?>
">
										<button type="button" class="sel"><?php if ($_smarty_tpl->tpl_vars['detail_mb_typename']->value) {
echo $_smarty_tpl->tpl_vars['detail_mb_typename']->value;
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?><span class="caret"></span></button>
										<ul class="sel-menu">
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"selfmedia_type4",'return'=>"type")); $_block_repeat=true; echo article(array('action'=>"selfmedia_type4",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

											<li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
											<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"selfmedia_type4",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										</ul>
									</div>
									<input type="hidden" name="mb_type" id="mb_type" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_type']->value;?>
" />
									<span class="tip-inline"></span>
								</dd>
							</dl>

							<dl class="fn-clear variable variable-2 variable-3 variable-4 variable-5">
								<dt class="multiple"><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][32];?>
&nbsp;&nbsp;&nbsp;<br><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][33];?>
：</dt>
								<dd>
									<input type="text" name="mb_code" class="inp" id="mb_code" size="40" maxlength="50" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][27];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_code']->value;?>
" />
									<span class="tip-inline"></span>
								</dd>
							</dl>

							<dl class="fn-clear variable variable-2 variable-3 variable-4">
								<dt class="multiple"><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][187];
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][0];?>
&nbsp;&nbsp;&nbsp;<br><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][34];?>
&nbsp;&nbsp;&nbsp;<br><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][35];?>
&nbsp;&nbsp;&nbsp;<br><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][36];?>
：</dt>
								<dd class="thumb fn-clear listImgBox">
									<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_mb_license']->value!='') {?> fn-hide<?php }?>" id="filePicker_mb_license" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
									<?php if ($_smarty_tpl->tpl_vars['detail_mb_license']->value!='') {?>
									<ul id="listSection_mb_license" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_mb_license_1"><a href='<?php echo $_smarty_tpl->tpl_vars['detail_mb_license']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['detail_mb_license']->value),'type'=>"small"),$_smarty_tpl);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_mb_licenseSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
									<?php } else { ?>
									<ul id="listSection_mb_license" class="listSection thumblist fn-clear"></ul>
									<?php }?>
									<input type="hidden" name="mb_license" value="<?php echo $_smarty_tpl->tpl_vars['detail_mb_licenseSource']->value;?>
" class="imglist-hidden">
								</dd>
							</dl>
							
						</div>

	          <div class="group-title group-mgt">
							<p class="title" id="group-op-title"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][37];?>
</span></p>
						</div>

						<dl class="fn-clear variable variable-2 variable-3 variable-4 variable-5">
					    <dt><span>*</span><label for="op_name"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][38];?>
：</label></dt>
					    <dd>
					      <input class="inp input-small inp" type="text" name="op_name" id="op_name" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['detail_op_name']->value;?>
" />
					    </dd>
					  </dl>
					  <dl class="fn-clear variable variable-2 variable-3 variable-4 variable-5">
					    <dt><span>*</span><label for="op_idcard"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][39];?>
&nbsp;&nbsp;&nbsp;<br><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][40];?>
：</label></dt>
					    <dd>
					      <input class="input-large inp" type="text" name="op_idcard" id="op_idcard" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['detail_op_idcard']->value;?>
" />
					    </dd>
					  </dl>
					  <dl class="fn-clear variable variable-2 variable-3 variable-4 variable-5">
					    <dt class="multiple"><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][41];?>
&nbsp;&nbsp;&nbsp;<br><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][42];?>
：</dt>
					    <dd class="thumb clearfix listImgBox">
					      <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_op_idcardfront']->value!='') {?> hide<?php }?>" id="filePickeropidcardfront" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
					      <?php if ($_smarty_tpl->tpl_vars['detail_op_idcardfront']->value!='') {?>
					      <ul id="listSectionopidcardfront" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_opidcardfront_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['detail_op_idcardfront']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['detail_op_idcardfrontSource']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_op_idcardfrontSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
					      <?php } else { ?>
					      <ul id="listSectionopidcardfront" class="listSection thumblist clearfix"></ul>
					      <?php }?>
					      <input type="hidden" name="op_idcardfront" value="<?php echo $_smarty_tpl->tpl_vars['detail_op_idcardfrontSource']->value;?>
" class="imglist-hidden" id="op_idcardfrontSource">
					    </dd>
					  </dl>

					  <dl class="fn-clear">
					    <dt><span>*</span><label for="op_phone"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][43];?>
：</label></dt>
					    <dd>
					      <input class="input-xlarge inp" type="text" name="op_phone" id="op_phone" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['detail_op_phone']->value;?>
" />
					    </dd>
					  </dl>
					  <dl class="fn-clear">
					    <dt><span>*</span><label for="op_email"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][33];?>
：</label></dt>
					    <dd>
					      <input class="input-xlarge inp" type="text" name="op_email" id="op_email" data-regex="\w+((-w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['detail_op_email']->value;?>
" />
					    </dd>
					  </dl>
					  <!-- 请仔细阅读授权书填写示例，下载授权书模板，填写完成后扫描文件上传，最大2M。 -->

					  <dl class="fn-clear variable variable-2 variable-3 variable-4 variable-5">
					    <dt class="multiple"><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][44];?>
&nbsp;&nbsp;&nbsp;<br><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][45];?>
：</dt>
					    <dd class="thumb clearfix listImgBox">
					      <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_op_authorize']->value!='') {?> hide<?php }?>" id="filePicker_op_authorize" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
					      <?php if ($_smarty_tpl->tpl_vars['detail_op_authorize']->value!='') {?>
					      <ul id="listSection_op_authorize" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_op_authorize_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['detail_op_authorize']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['detail_op_authorizeSource']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_op_authorizeSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
					      <?php } else { ?>
					      <ul id="listSection_op_authorize" class="listSection thumblist fn-clear"></ul>
					      <?php }?>
					      <input type="hidden" name="op_authorize" value="<?php echo $_smarty_tpl->tpl_vars['detail_op_authorize']->value;?>
" class="imglist-hidden" id="op_authorizeSource">
					    </dd>
					    <dd>
					    	<div class="exp">
					    	  <?php if ($_smarty_tpl->tpl_vars['selfmediaGrantImg']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['selfmediaGrantImg']->value;?>
" target="_blank" class="img" style="margin-right:30px;">*授权书填写示例</a><?php }?>
					    	  <?php if ($_smarty_tpl->tpl_vars['selfmediaGrantTpl']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['selfmediaGrantTpl']->value;?>
" target="_blank" class="tpl">*授权书模板下载</a><?php }?>
					    	</div>
					    </dd>
					  </dl>

					  <!-- 运营者信息 e -->

					  
					  <div class="variable variable-2">
						  <!-- 专业资质 s -->
						  <div class="group-title group-mgt">
								<p class="title"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][46];?>
</span></p>
							</div>
					    <dl class="fn-clear" id="org_major_license_type_box">
					    	<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][47];?>
：</dt>
					    	<dd id="selType">
					    		<div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][48];?>
">
					    			<button type="button" class="sel"><?php if ($_smarty_tpl->tpl_vars['detail_org_major_license_typename']->value) {
echo $_smarty_tpl->tpl_vars['detail_org_major_license_typename']->value;
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?><span class="caret"></span></button>
					    			<ul class="sel-menu">
					    				<li><a href="javascript:;" data-id="0">请选择</a></li>
					    				<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"selfmedia_type2_license",'return'=>"type")); $_block_repeat=true; echo article(array('action'=>"selfmedia_type2_license",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					    				<li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
					    				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"selfmedia_type2_license",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					    			</ul>
					    		</div>
					    		<input type="hidden" name="org_major_license_type" id="org_major_license_type" value="<?php echo $_smarty_tpl->tpl_vars['detail_org_major_license_type']->value;?>
" />
					    		<span class="tip-inline"></span>
					    	</dd>
					    </dl>
					    <dl class="fn-clear variable variable-2">
					      <dt class="multiple"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][49];?>
：</dt>
					      <dd class="thumb clearfix listImgBox">
					        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_org_major_license']->value!='') {?> hide<?php }?>" id="filePickerorg_major_license" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
					        <?php if ($_smarty_tpl->tpl_vars['detail_org_major_license']->value!='') {?>
					        <ul id="listSectionorg_major_license" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_org_major_license_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['detail_org_major_license']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['detail_org_major_licenseSource']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_org_major_licenseSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
					        <?php } else { ?>
					        <ul id="listSectionorg_major_license" class="listSection thumblist clearfix"></ul>
					        <?php }?>
					        <input type="hidden" name="org_major_license" value="<?php echo $_smarty_tpl->tpl_vars['detail_org_major_licenseSource']->value;?>
" class="imglist-hidden" id="org_major_licenseSource">
					      </dd>
					    </dl>
					  </div>
					  <!-- 辅助资料 s -->
					  <div class="group-title group-mgt">
							<p class="title"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][50];?>
</span></p>
						</div>
					  <!-- 辅助资料 -->
					  <dl class="fn-clear">
					    <dt><label for="outer"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][51];?>
：</label></dt>
					    <dd class="fn-clear">
					    	<textarea class="inp text" name="outer" id="outer" rows="5" cols="60" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][52];?>
"><?php echo $_smarty_tpl->tpl_vars['detail_outer']->value;?>
</textarea>
					    </dd>
					    <dd class="info-tip"><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][53];?>
</p></dd>
					  </dl>
					  <dl class="fn-clear">
					  	<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][54];?>
：</dt>
					  	<dd class="listImgBox fn-hide">
					  		<div class="list-holder">
					  			<ul id="listSection_prove" class="fn-clear listSection fn-hide"<?php if ($_smarty_tpl->tpl_vars['detail_proveList']->value) {?> style="display: block;"<?php }?>>
					  				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail_proveList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
					  				<li class="fn-clear" id="WU_FILE_prove_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
					  					<span class="li-move" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][42];?>
">↕</span>
					  					<a class="li-rm" href="javascript:;">×</a>
					  					<div class="li-thumb" style="display: block;">
					  						<div class="r-progress"><s></s></div>
					  						<span class="ibtn">
					  							<a href="javascript:;" class="Lrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][43];?>
"></a>
					  							<a href="javascript:;" class="Rrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][44];?>
"></a>
					  							<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['path'];?>
" target="_blank" class="enlarge" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][45];?>
"></a>
					  						</span>
					  						<span class="ibg"></span>
					  						<img data-val="<?php echo $_smarty_tpl->tpl_vars['i']->value['pathSource'];?>
" data-url="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['i']->value['path']),'type'=>"small"),$_smarty_tpl);?>
" src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['i']->value['path']),'type'=>"small"),$_smarty_tpl);?>
" />
					  					</div>
					  					<textarea class="li-desc" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][477];?>
" style="display: inline-block;"><?php echo $_smarty_tpl->tpl_vars['i']->value['info'];?>
</textarea>
					  				</li>
					  				<?php } ?>
					  			</ul>
					  			<input type="hidden" name="prove" value="<?php echo $_smarty_tpl->tpl_vars['detail_prove']->value;?>
" class="imglist-hidden">
					  		</div>
					  		<div class="btn-section fn-clear">
					  			<div class="wxUploadObj fn-clear">
					  				<div class="uploadinp filePicker" id="filePicker_prove" data-type="desc" data-count="5" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist=""><div id="flasHolder"></div><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][168];?>
</span></div>
					  				<span class="upload-split fn-hide"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][0];?>
</span>
					  				<dl class="wxUpload fn-hide fn-clear">
					  					<dt><img id="wxUploadImg" /></dt>
					  					<dd><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][362];?>
<em class="wx"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][139];?>
</em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][140];?>
<br /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][846];
echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][141];?>
<br /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][142];?>
<em class="fs"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][139];?>
</em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][143];?>
</dd>
					  				</dl>
					  			</div>
					  			<div class="upload-tip">
					  				<p><a href="javascript:;" class="fn-hide deleteAllAtlas"<?php if ($_smarty_tpl->tpl_vars['detail_imglist']->value) {?> style="display: inline-block;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][79];?>
</a>&nbsp;&nbsp;<span class="fileerror"></span></p>
					  			</div>
					  		</div>
					  	</dd>
					  	<dd class="info-tip variable variable-1 variable-4 variable-5"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][54];
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][56];?>
</dd>
				      <dd class="info-tip variable variable-2"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][55];
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][56];?>
</dd>
				      <dd class="info-tip variable variable-3"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][57];
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][56];?>
</dd>
					  </dl>
					  <?php if (!$_smarty_tpl->tpl_vars['is_join']->value) {?>
						<dl class="fn-clear agreement">
							<dt>&nbsp;</dt>
							<dd>
								<p><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][58];?>
<a href="javascript:;">《<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][60];?>
》</a></p>
							</dd>
						</dl>
						<?php }?>
						<div class="fn-clear f-btn">
							<input type="submit" class="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][27];?>
" />
						</div>

				  </form>
					<div class="desk"></div>
				</div>

			</div>

		</div>
	</div>
</div>

<div class="agreemenmodel">
	<a href="javascript:;" class="close"></a>
	<p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][60];?>
</p>
	<!-- <textarea readonly="readonly"><?php echo $_smarty_tpl->tpl_vars['selfmediaAgreement']->value;?>
</textarea> -->
	<div class="textarea"><?php echo $_smarty_tpl->tpl_vars['selfmediaAgreement']->value;?>
</div>
</div>
<div class="bg"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery-ui-autocomplete.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/config-selfmedia.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicAddr.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
