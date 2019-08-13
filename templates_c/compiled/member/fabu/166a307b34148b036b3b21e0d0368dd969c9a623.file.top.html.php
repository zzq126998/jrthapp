<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:47
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\top.html" */ ?>
<?php /*%%SmartyHeaderCode:16438926475d511ff702d182-83315104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166a307b34148b036b3b21e0d0368dd969c9a623' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\top.html',
      1 => 1556457137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16438926475d511ff702d182-83315104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_cookiePre' => 0,
    'member_userDomain' => 0,
    'langData' => 0,
    'userinfo' => 0,
    'installModuleArr' => 0,
    'cfg_ucenterLinks' => 0,
    'cfg_pointState' => 0,
    'cfg_pointName' => 0,
    'member_busiDomain' => 0,
    'cfg_basehost' => 0,
    'template' => 0,
    'pageTitle' => 0,
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511ff7096940_35938753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511ff7096940_35938753')) {function content_5d511ff7096940_35938753($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><?php echo '<script'; ?>
 type="text/javascript">var memberPage = true, cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', channelDomain = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['member_userDomain']->value,"http://",'');?>
';<?php echo '</script'; ?>
>
<div class="header">
	<div class="wrap fn-clear">
		<a class="logo" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][79];?>
" href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
"><s></s><h1><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][11];?>
</h1><span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['member_userDomain']->value,"http://",'');?>
</span></a>
		<ul class="nav">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][6];?>
</a></li>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'profile'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][2];?>
<span class="arrow"><em></em></span></a>
				<dl class="subnav">
					<dt></dt>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'profile'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][23];?>
</a></dd>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chpassword'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][19];?>
</a></dd>
					<dd><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['paypwdCheck']==0) {?>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'paypwdAdd'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][120];?>
</a>
						<?php } else { ?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'paypwdEdit'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][20];?>
</a>
						<?php }?></dd>
					<dd><a href="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chCertify'),$_smarty_tpl);
} else {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'shCertify'),$_smarty_tpl);
}?>"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][212];?>
</a></dd>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chphone'),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][774];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][7];
}?></a></dd>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chemail'),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][16];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][10];
}?></a></dd>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'question'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][213];?>
</a></dd>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'address'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][214];?>
</a></dd>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'connect'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][11];?>
</a></dd>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'loginrecord'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][8];?>
</a></dd>
				</dl>
			</li>
			<li>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][1];?>
<span class="arrow"><em></em></span></a>
				<dl class="subnav">
					<dt></dt>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'article','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp1)) {?>
					<dd>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'article'),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][215];?>
] <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][9];?>
</a>
					</dd><?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'info','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp2)) {?><dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'info'),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][216];?>
] <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][10];?>
</a></dd><?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'house','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp3)) {?>
					<dd>
						<a href="javascript:;">[<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][217];?>
] <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][13];?>
</a>
						<dl>
							<!--<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-demand'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][49];?>
</a></dd>-->
							<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-sale'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][218];?>
</a></dd>
							<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-zu'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][219];?>
</a></dd>
							<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-xzl'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][220];?>
</a></dd>
							<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-sp'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][221];?>
</a></dd>
							<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-cf'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][222];?>
</a></dd>
						</dl>
					</dd>
					<?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tieba','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if (in_array("tieba",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp4)) {?>
					<dd><a href="<?php echo getUrlPath(array('service'=>'tieba','template'=>'fabu'),$_smarty_tpl);?>
" target="_blank">[<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][223];?>
] <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][3];?>
</a></dd>
					<?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'huodong','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if (in_array("huodong",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp5)) {?>
					<dd><a href="<?php echo getUrlPath(array('service'=>'huodong','template'=>'fabu'),$_smarty_tpl);?>
" target="_blank">[<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][224];?>
] <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][7];?>
</a></dd>
					<?php }?>
				</dl>
			</li>
			<li>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][2];?>
<span class="arrow"><em></em></span></a>
				<dl class="subnav">
					<dt></dt>
					<?php if (in_array('deposit',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'deposit'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][10];?>
</a></dd>
					<?php }?>

                    <?php if (in_array('order',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][12];?>
</a></dd>
					<?php }?>

					<?php if (in_array('record',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'record'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][226];?>
</a></dd>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['cfg_pointState']->value&&in_array('point',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'point'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][78];?>
</a></dd>
					<?php }?>

					<?php if (in_array('balance',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
					<dd><a><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][228];?>
：<strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
</strong></a></dd>
					<dd><a><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][229];?>
：<strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['freeze'];?>
</strong></a></dd>
					<?php }?>
				</dl>
			</li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['member_busiDomain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][230];?>
</a></li>
			<li class="mobile">
				<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'mobile'),$_smarty_tpl);?>
" target="_blank"><s class="mob"></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][80];?>
<i class="new">new</i></a>
				<dl class="subnav">
					<dt></dt>
					<dd class="qrcode"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" /></dd>
				</dl>
			</li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/logout.html" class="logout"><s class="quit"></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][4];?>
</a></li>
		</ul>
	</div>
</div>


<div class="wrap crumbs fn-clear">
	<div class="cont">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][5];?>
</a>
		<s><i></i></s>
		<a href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][7];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['template']->value!='index') {?>
		<s><i></i></s>
		<?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>

		<?php }?>
	</div>
	<div class="notice" id="notice">
		<ul>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"notice",'return'=>"notice",'pageSize'=>"8")); $_block_repeat=true; echo siteConfig(array('action'=>"notice",'return'=>"notice",'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['notice']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['notice']->value['title'];?>
"><s></s><?php echo $_smarty_tpl->tpl_vars['notice']->value['title'];?>
</a></li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"notice",'return'=>"notice",'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>
</div>
<?php }} ?>
