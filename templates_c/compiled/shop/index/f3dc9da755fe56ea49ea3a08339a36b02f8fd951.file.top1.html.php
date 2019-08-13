<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:06:20
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\siteConfig\top1.html" */ ?>
<?php /*%%SmartyHeaderCode:7975704445d5101dc773f82-49213109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3dc9da755fe56ea49ea3a08339a36b02f8fd951' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\siteConfig\\top1.html',
      1 => 1558086990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7975704445d5101dc773f82-49213109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_cookiePre' => 0,
    'cfg_clihost' => 0,
    'siteCityInfo' => 0,
    'service' => 0,
    'city' => 0,
    'cfg_basehost' => 0,
    'userinfo' => 0,
    'member_userDomain' => 0,
    'member_busiDomain' => 0,
    'langData' => 0,
    'userDomain' => 0,
    '_bindex' => 0,
    'row1' => 0,
    'cfg_staticVersion' => 0,
    'installModuleArr' => 0,
    'cfg_staticPath' => 0,
    'cfg_weixinQr' => 0,
    'module' => 0,
    'row2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5101dc7ba4b5_57798718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5101dc7ba4b5_57798718')) {function content_5d5101dc7ba4b5_57798718($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', cfg_clihost = '<?php echo $_smarty_tpl->tpl_vars['cfg_clihost']->value;?>
';<?php echo '</script'; ?>
>
<!-- 顶部信息 s -->
<div class="topInfo">
	<div class="wrap fn-clear">
		<div class="loginbox">
			<?php if ($_smarty_tpl->tpl_vars['siteCityInfo']->value&&$_smarty_tpl->tpl_vars['siteCityInfo']->value['count']>1) {?>
			<span class="siteCityInfo"><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['name'];?>
</span>
			<span class="changeCityBtn">
				「<a href="javascript:;">切换城市</a>」
				<div class="changeCityList">
					<p class="setwidth"></p>
					<div class="boxpd">
						<div class="sj"><i></i></div>
						<div class="box">
							<div class="content fn-clear">
								<p class="tit">请选择您所在的城市：</p>
								<ul>
								<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['service']->value;?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'siteCity','return'=>'city','module'=>$_tmp15)); $_block_repeat=true; echo siteConfig(array('action'=>'siteCity','return'=>'city','module'=>$_tmp15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					      	<li><a href="<?php echo $_smarty_tpl->tpl_vars['city']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['siteCityInfo']->value['domain']==$_smarty_tpl->tpl_vars['city']->value['domain']) {?> class="curr"<?php }?> data-domain='<?php echo json_encode($_smarty_tpl->tpl_vars['city']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
<s><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/changecity_curr.png" /></s></a></li>
					      <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'siteCity','return'=>'city','module'=>$_tmp15), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				      	</ul>
				      </div>
				      <div class="morecontent fn-hide">
								<dl class="hot">
									<dt>热门</dt>
									<dd></dd>
								</dl>
								<div class="more">
									<dl class="pytit">
										<dt>城市</dt>
										<dd></dd>
									</dl>
									<div class="list"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</span>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
			<?php $_smarty_tpl->tpl_vars['userDomain'] = new Smarty_variable($_smarty_tpl->tpl_vars['member_userDomain']->value, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==2) {?>
			<?php $_smarty_tpl->tpl_vars['userDomain'] = new Smarty_variable($_smarty_tpl->tpl_vars['member_busiDomain']->value, null, 0);?>
			<?php }?>
			<div class="loginafter fn-clear" id="navLoginBefore">
				<span class="fn-left"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][12];?>
，</span><a href="<?php echo $_smarty_tpl->tpl_vars['userDomain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</a><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['message']>0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['userDomain']->value;?>
/message.html?state=0" target="_blank">(<font color="#ff0000"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['message'];?>
</font>)</a><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/logout.html" class="logout"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][6];?>
</a>
			</div>
			<?php } else { ?>
			<div class="loginbefore fn-clear" id="navLoginAfter">
				<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/register.html" class="regist"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][0];?>
</a>
				<span class="fn-left">&nbsp;/&nbsp;</span>
				<span class="logint"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/login.html"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][0];?>
</a></span>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"getLoginConnect",'return'=>"row1")); $_block_repeat=true; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"row1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['row1']<4) {?>
				<a class="loginconnect" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['row1']->value['code'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row1']->value['name'];?>
" target="_blank"><i class="picon"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/<?php echo $_smarty_tpl->tpl_vars['row1']->value['code'];?>
/img/24.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></i></a>
				<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"row1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<?php }?>
		</div>
		<ul class="menu topbarlink fn-clear">
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][5];?>
</a><span class="separ">|</span>
			</li>
			<li class="dropdown user">
				<a href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][7];?>
<i class="picon picon-down"></i></a>
				<div class="submenu">
					<?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)||in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)||in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][4];?>
</a><?php }?>
					<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'record'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][266];?>
</a>
					<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][8];?>
</a>
				</div>
			</li>
			<li><a href="<?php echo getUrlPath(array('service'=>"siteConfig",'template'=>"mobile"),$_smarty_tpl);?>
" target="_blank"><i class=""><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/public_top_icon_mobile.png" /></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][2];?>
</a><span class="separ">|</span>
				<div class="pop">
					<s></s>
					<p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][267];?>
<a href="<?php echo getUrlPath(array('service'=>"siteConfig",'template'=>"mobile"),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" width="150" height="150" /></a></p>
				</div>
			</li>
			<li><a href="javascript:;"><i class=""><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/public_top_icon_wechat.png" /></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][286];?>
</a><span class="separ">|</span>
				<div class="pop" style="left: -26px;">
					<s></s>
					<p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][268];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
" width="150" height="150" /></p>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][2];?>
<i class="picon picon-down"></i></a>
				<div class="submenu">
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'article','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php if (in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp16)) {?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'article'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][235];?>
</a><?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'info','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp17)) {?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'info'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][236];?>
</a><?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'house','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp18)) {?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config','action'=>'house'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][6];?>
</a><?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'huodong','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php if (in_array("huodong",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp19)) {?><a href="<?php echo getUrlPath(array('service'=>'huodong','template'=>'fabu'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][7];?>
</a><?php }?>
					<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tieba','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php if (in_array("tieba",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&(!$_smarty_tpl->tpl_vars['userinfo']->value||$_tmp20)) {?><a href="<?php echo getUrlPath(array('service'=>'tieba','template'=>'index','param'=>'#publish'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][3];?>
</a><?php }?>
				</div>
			</li>
			<li class="dropdown webmap">
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][271];?>
<i class="picon picon-down"></i></a>
				<div class="submenu">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module",'type'=>"1")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['module']->value['target']) {?> target="_blank"<?php }?> style="<?php if ($_smarty_tpl->tpl_vars['module']->value['color']) {?> color: <?php echo $_smarty_tpl->tpl_vars['module']->value['color'];?>
;<?php }
if ($_smarty_tpl->tpl_vars['module']->value['bold']) {?> font-weight: 700;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</li>
		</ul>
	</div>
</div>
<!-- 顶部信息 e -->


<?php echo '<script'; ?>
 type="text/template" id="notLoginHtml">
	<div class="loginbefore fn-clear" id="navLoginAfter">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/register.html" class="regist"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][0];?>
</a>
		<span class="fn-left">&nbsp;/&nbsp;</span>
		<span class="logint"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/login.html"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][0];?>
</a></span>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"getLoginConnect",'return'=>"row2")); $_block_repeat=true; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"row2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['row2']<4) {?>
		<a class="loginconnect" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['row2']->value['code'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row2']->value['name'];?>
" target="_blank"><i class="picon"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/<?php echo $_smarty_tpl->tpl_vars['row2']->value['code'];?>
/img/24.png" /></i></a>
		<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"row2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
<?php echo '</script'; ?>
>
<?php }} ?>
