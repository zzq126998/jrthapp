<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:32:57
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\siteConfig\touch_top.html" */ ?>
<?php /*%%SmartyHeaderCode:19043601845d5364c9598e63-48388613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd3c5daeb1115c19e14a5431573255c1bf26b3c' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\siteConfig\\touch_top.html',
      1 => 1559557965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19043601845d5364c9598e63-48388613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headTheme' => 0,
    'pageLeft' => 0,
    'pageTitle' => 0,
    'pageRight' => 0,
    'langData' => 0,
    'cfg_basehost' => 0,
    'cfg_staticVersion' => 0,
    'member_userDomain' => 0,
    'installModuleArr' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5364c95b8273_04051293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5364c95b8273_04051293')) {function content_5d5364c95b8273_04051293($_smarty_tpl) {?><div class="header <?php echo $_smarty_tpl->tpl_vars['headTheme']->value;?>
">
	<?php if ($_smarty_tpl->tpl_vars['pageLeft']->value!='') {?>
	<?php echo $_smarty_tpl->tpl_vars['pageLeft']->value;?>

	<?php } else { ?>
	<div class="header-l"><a href="javascript:history.go(-1)" class="goBack"></a></div>
	<?php }?>
	<div class="header-address">
		<span><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</span>
	</div>
	<div class="header-search">
		<?php if ($_smarty_tpl->tpl_vars['pageRight']->value!='') {?>
		<?php echo $_smarty_tpl->tpl_vars['pageRight']->value;?>

		<?php } else { ?>
		<a href="javascript:;" class="dropnav"></a>
		<?php }?>
	</div>
</div>

<div class="navBox" id="navBox">
	<div class="navlist" id="navlist">
		<ul class="clearfix fn-clear">
			<li><a data-name="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][5];?>
" data-code="index" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
"><span class="imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/admin/nav/index.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" class=""></span><span class="txtbox"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][5];?>
</span></a></li>
			<li><a data-name="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][7];?>
" data-code="member" href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
"><span class="imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/admin/nav/member.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" class=""></span><span class="txtbox"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][7];?>
</span></a></li>
			<?php if (in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><li><a data-name="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][12];?>
" data-code="cart" href="<?php echo getUrlPath(array('service'=>'shop','template'=>'cart'),$_smarty_tpl);?>
"><span class="imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/admin/nav/shop_car.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" class=""></span><span class="txtbox"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][12];?>
</span></a></li><?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module",'type'=>"1")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['module']->value['code']!="special"&&$_smarty_tpl->tpl_vars['module']->value['code']!="website") {?>
			<li>
				<a data-name="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['module']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['module']->value['target']) {?> target="_blank"<?php }?>>
					<span class="imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['module']->value['icon'];?>
"></span>
					<span class="txtbox" style="<?php if ($_smarty_tpl->tpl_vars['module']->value['color']) {?> color: <?php echo $_smarty_tpl->tpl_vars['module']->value['color'];?>
;<?php }
if ($_smarty_tpl->tpl_vars['module']->value['bold']) {?> font-weight: 700;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span>
				</a>
			</li>
			<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<!-- 分享 s -->
			<li class="HN_PublicShare"><a href="javascript:;"><span class="imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/admin/nav/share.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" class="nav_23"></span><span class="txtbox"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][166];?>
</span></a></li>
			<!-- 分享 e -->
			<!-- 举报 s -->
			<li class="HN_Jubao"><a href="javascript:;"><span class="imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/admin/nav/jubao.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" class="nav_23"></span><span class="txtbox"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][30];?>
</span></a></li>
			<!-- 举报 e -->
		</ul>
	</div>
	<div class="bg" id="shearBg"></div>
</div>


<!-- 举报 s -->
<div class="JubaoBox">
	<a href="javascript:;" class="JuClose"></a>
	<div class="JuSelect">
		<p>信息虚假违法</p>
		<ul class="fn-clear Jubao-article">
			<li>垃圾广告</li>
			<li>色情淫秽</li>
			<li>政治反动</li>
			<li>钓鱼诈骗</li>
			<li>网络敲诈</li>
			<li>内容侵权</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-info">
			<li>冒用电话</li>
			<li>虚假信息</li>
			<li>违法信息</li>
			<li>服务糟糕</li>
			<li>骗子信息</li>
			<li>虚假电话</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-house">
			<li>房源已交易</li>
			<li>中介冒充个人</li>
			<li>图片或内容含微信等联系方式</li>
			<li>虚假(如房源、价格等虚假)</li>
			<li>诈骗（如提前收取各类费用等）</li>
			<li>涉黄违法</li>
			<li>电话虚假(如空号、无人接听)</li>
			<li>房源无法带看</li>
			<li>图片与实际不符</li>
			<li>价格与实际差异较大</li>
			<li>房源不在该小区</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-job">
			<li>电话虚假(如空号、无人接听)</li>
			<li>非法收费（培训费、介绍费等）</li>
			<li>职位虚假（薪资、工作地点等）</li>
			<li>涉黄违法</li>
			<li>招聘刷单刷钻人员</li>
			<li>职介冒充直招</li>
			<li>招生培训信息（非招聘）</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-dating">
			<li>盗用他人的照片做为自己的照片</li>
			<li>该用户的个人档案里含有不恰当（色情淫秽）的信息</li>
			<li>该用户对我很粗鲁无礼/辱骂我</li>
			<li>该用户散布垃圾信息</li>
			<li>该用户是酒托/饭托/诈骗犯</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-tieba">
			<li>广告垃圾</li>
			<li>政治有害类</li>
			<li>暴恐类</li>
			<li>淫秽色情类</li>
			<li>头像、签名档</li>
			<li>赌博类</li>
			<li>私服外挂类</li>
			<li>诈骗类</li>
			<li>违规内容</li>
			<li>恶意灌水</li>
			<li>重复发帖</li>
			<li>其他有害类</li>
		</ul>
		<ul class="fn-clear Jubao-huodong">
			<li>联系电话虚假</li>
			<li>骗子信息（酒托、饭托、色情服务等）</li>
			<li>虚假、违法信息</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-video">
			<li>无法播放</li>
			<li>播放卡</li>
			<li>画面和声音有问题</li>
			<li>不良内容</li>
			<li>侵权投诉</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-huangye">
			<li>电话被冒用</li>
			<li>企业被冒用</li>
			<li>虚假、违法信息</li>
			<li>侵权投诉</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-image">
			<li>色情暴力</li>
			<li>政治反动</li>
			<li>原图无法显示</li>
			<li>与查询内容不符</li>
			<li>侵权投诉</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-live">
			<li>盗用他人的照片做为自己的照片</li>
			<li>该用户的个人档案里含有不恰当（色情淫秽）的信息</li>
			<li>该用户对我很粗鲁无礼/辱骂我</li>
			<li>该用户散布垃圾信息</li>
			<li>该用户是酒托/饭托/诈骗犯</li>
			<li>其他</li>
		</ul>
		<ul class="fn-clear Jubao-business">
			<li>电话被冒用</li>
			<li>企业被冒用</li>
			<li>虚假、违法信息</li>
			<li>侵权投诉</li>
			<li>其他</li>
		</ul>
	</div>
	<div class="JuRemark">
		<p class="JubaoBox-tit">备注说明<em>(0-100字)</em></p>
		<textarea name="" rows="2" placeholder="请简明扼要的阐述您的理由，以便工作人员更好的判断。" maxlength="100"></textarea>
	</div>
	<div class="JubaoBox-contact">
		<p class="JubaoBox-tit"><span>*</span>联系方式</p>
		<dl class="fn-clear">
			<dt class="fn-left">手机号</dt>
			<dd class="fn-left"><input type="text" name="" placeholder="请输入手机号" id="JubaoTel"></dd>
		</dl>
	</div>
	<a href="javascript:;" class="JubaoBox-submit">提交</a>
</div>
<!-- 举报 e -->

<div class="JuError">请选择举报类型</div>
<div class="JuMask"></div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/ui/iscroll.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }} ?>
