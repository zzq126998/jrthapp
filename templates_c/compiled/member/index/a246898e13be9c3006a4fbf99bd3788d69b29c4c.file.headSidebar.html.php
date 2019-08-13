<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:36:59
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\headSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:19825505455d52224b4e8f55-93585841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a246898e13be9c3006a4fbf99bd3788d69b29c4c' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\headSidebar.html',
      1 => 1557071651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19825505455d52224b4e8f55-93585841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_basehost' => 0,
    'langData' => 0,
    'member_busiDomain' => 0,
    'member_userDomain' => 0,
    'userinfo' => 0,
    'pageCurr' => 0,
    'type' => 0,
    'cfg_ucenterLinks' => 0,
    'module' => 0,
    'showModuleConfig' => 0,
    'cfg_pointState' => 0,
    'cfg_pointName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52224b650614_25833400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52224b650614_25833400')) {function content_5d52224b650614_25833400($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><div class="head">
	<ul class="l">
		<li class="index"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" target="_blank"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][5];?>
</a></li>
		<li class="ucenter"><a href="<?php echo $_smarty_tpl->tpl_vars['member_busiDomain']->value;?>
"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][15];?>
</a></li>
		<li class="personal"><a href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
" target="_blank"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][11];?>
</a></li>
		<li class="menu">
			<a href="javascript:;"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][430];?>
</a>
			<div class="popup">
				<s></s><b></b>
				<div class="popupMenuList"></div>
			</div>
		</li>
	</ul>
	<ul class="r">
		<li class="message has">
			<a href="javascript:;"><s></s><i><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['message'];?>
</i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][239];?>
</a>
			<div class="popup">
				<s></s><b></b>
				<ul class="mlist" data-url="<?php echo getUrlPath(array('service'=>'member','template'=>'message_detail','id'=>"%id"),$_smarty_tpl);?>
"></ul>
				<p><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'message'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][680];?>
></a></p>
			</div>
		</li>
		<li class="setting">
			<a href="javascript:;"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][71];?>
</a>
			<div class="popup">
				<s></s><b></b>
				<div class="link">
					<a class="config" href="<?php echo getUrlPath(array('service'=>'member','template'=>'profile'),$_smarty_tpl);?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][70];?>
</a>
					<a class="security" href="<?php echo getUrlPath(array('service'=>'member','template'=>'security'),$_smarty_tpl);?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][8];?>
</a>
					<a class="connect" href="<?php echo getUrlPath(array('service'=>'member','template'=>'connect'),$_smarty_tpl);?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][11];?>
</a>
					<a class="record" href="<?php echo getUrlPath(array('service'=>'member','template'=>'loginrecord'),$_smarty_tpl);?>
"><i></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][8];?>
</a></div>
			</div>
		</li>
		<li class="uinfo">
			<a href="javascript:;"><s></s><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
<i></i></a>
			<div class="subnav"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/logout.html" class="logout"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][123];?>
</a></div>
		</li>
	</ul>
</div>

<div class="sidebar">
	<div class="sidebar-content">
		<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_business"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_about"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_news"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_albums"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_video"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_panor"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_comment"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_diancan"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_dingzuo"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_paidui"||$_smarty_tpl->tpl_vars['pageCurr']->value=="business_maidan"||$_smarty_tpl->tpl_vars['pageCurr']->value=='business_custom_nav'||$_smarty_tpl->tpl_vars['pageCurr']->value=='business_custom_menu') {?> active<?php }?>">
			<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][431];?>
</dt>
			<dd>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_business") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-config'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][432];?>
</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_custom_nav"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"&&$_smarty_tpl->tpl_vars['type']->value=="custom_nav")) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-custom_nav'),$_smarty_tpl);?>
">自定义导航</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_custom_menu"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"&&$_smarty_tpl->tpl_vars['type']->value=="custom_menu")) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-custom_menu'),$_smarty_tpl);?>
">自定义菜单</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_about"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"&&$_smarty_tpl->tpl_vars['type']->value=="about")) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-about'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][433];?>
</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_news"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"&&$_smarty_tpl->tpl_vars['type']->value=="news")) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-news'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][434];?>
</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_albums"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"&&$_smarty_tpl->tpl_vars['type']->value=="albums")) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-albums'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][435];?>
</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_video"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"&&$_smarty_tpl->tpl_vars['type']->value=="video")) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-video'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][436];?>
</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_panor"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_business"&&$_smarty_tpl->tpl_vars['type']->value=="panor")) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-panor'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][437];?>
</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_comment") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-comment'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][438];?>
</a>
				<?php if (in_array('food',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>

                <?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'diancan'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php if ($_tmp17) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_diancan") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-diancan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][439];?>
</a>
                <?php }?>
                <?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'dingzuo'),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php if ($_tmp18) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_dingzuo") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-dingzuo'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][440];?>
</a>
                <?php }?>
                <?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'paidui'),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php if ($_tmp19) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_paidui") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-paidui'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][441];?>
</a>
                <?php }?>
                <?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'maidan'),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php if ($_tmp20) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="business_maidan") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'business-maidan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][442];?>
</a>
                <?php }?>

				<?php }?>
			</dd>
		</dl>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			
			<?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='article'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['article']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['article']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_article"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_article") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][235];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_article") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'article'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][66];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_article") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'article'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][16];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='info'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['info']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['info']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_info"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_info") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][67];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_info") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'info'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][20];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_info") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'info'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][143];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_info") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'info'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][190];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="order_info") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'info'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][191];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='tuan'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['tuan']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['tuan']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_tuan"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_tuan"||$_smarty_tpl->tpl_vars['pageCurr']->value=="config_tuan"||$_smarty_tpl->tpl_vars['pageCurr']->value=="verify_tuan"||$_smarty_tpl->tpl_vars['pageCurr']->value=="quan_tuan"||$_smarty_tpl->tpl_vars['pageCurr']->value=="order_tuan") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][36];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_tuan") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'tuan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][443];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_tuan"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_tuan") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'tuan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][444];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="verify_tuan") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'verify','action'=>'tuan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][445];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="quan_tuan") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'quan','action'=>'tuan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][446];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="order_tuan") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'tuan'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][447];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='house'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['house']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['house']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_house"||$_smarty_tpl->tpl_vars['pageCurr']->value=="house_broker"||$_smarty_tpl->tpl_vars['pageCurr']->value=="house_entrust"||$_smarty_tpl->tpl_vars['pageCurr']->value=="house_receive_broker") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][237];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_house") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'house'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][448];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="house_broker") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'house-broker'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][449];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="house_receive_broker") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'house_receive_broker'),$_smarty_tpl);?>
">入驻申请</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="house_entrust") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'house_entrust'),$_smarty_tpl);?>
">房源委托</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='shop'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['shop']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['shop']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_shop"||$_smarty_tpl->tpl_vars['pageCurr']->value=="category_shop"||$_smarty_tpl->tpl_vars['pageCurr']->value=="manage_shop"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_shop"||$_smarty_tpl->tpl_vars['pageCurr']->value=="order_shop"||$_smarty_tpl->tpl_vars['pageCurr']->value=="logistic_shop") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][37];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_shop") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'shop'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][443];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="category_shop") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'category','action'=>'shop'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][450];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_shop"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_shop") {?> class="curr"<?php }?>  href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'shop'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][451];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="order_shop") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'shop'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][447];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="logistic_shop") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'logistic','action'=>'shop'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][452];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='renovation'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['renovation']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['renovation']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_renovation"||$_smarty_tpl->tpl_vars['pageCurr']->value=="team_renovation"||$_smarty_tpl->tpl_vars['pageCurr']->value=="albums_renovation"||$_smarty_tpl->tpl_vars['pageCurr']->value=="case_renovation"||$_smarty_tpl->tpl_vars['pageCurr']->value=="booking_renovation") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][38];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_renovation") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'renovation'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][453];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="team_renovation") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'team','action'=>'renovation'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][454];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="albums_renovation") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'albums','action'=>'renovation'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][455];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="case_renovation") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'case','action'=>'renovation'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][456];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="booking_renovation") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'booking','action'=>'renovation'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][457];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='job'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['job']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['job']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_job"||$_smarty_tpl->tpl_vars['pageCurr']->value=="post"||$_smarty_tpl->tpl_vars['pageCurr']->value=="resume_job"||$_smarty_tpl->tpl_vars['pageCurr']->value=="invitation_job"||$_smarty_tpl->tpl_vars['pageCurr']->value=="collections_job") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][765];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_job") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'job'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][453];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="post") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'post'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][459];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="resume_job") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'resume','action'=>'job'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][460];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="invitation_job") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'invitation','action'=>'job'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][461];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="collections_job") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'collections','action'=>'job'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][462];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='waimai'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['waimai']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['waimai']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_waimai"||$_smarty_tpl->tpl_vars['pageCurr']->value=="waimai-menus"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_waimai"||$_smarty_tpl->tpl_vars['pageCurr']->value=="waimai-albums"||$_smarty_tpl->tpl_vars['pageCurr']->value=="order_waimai") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][35];?>
</dt>
					<dd>
						<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/wmsj?from=<?php echo getUrlPath(array('service'=>'member'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][463];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='website'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['website']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['website']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_website"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_website"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-guest"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-honor"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-job"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-video"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-qj"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-custom_nav"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-news"||$_smarty_tpl->tpl_vars['pageCurr']->value=="website-product") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][68];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_website") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'website'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][464];?>
</a>
						<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'dressup','action'=>'website'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][465];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="website-news"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_website"&&$_smarty_tpl->tpl_vars['type']->value=='news')) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'website-news'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][466];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="website-guest") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'website-guest'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][467];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="website-honor"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_website"&&$_smarty_tpl->tpl_vars['type']->value=='honor')) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'website-honor'),$_smarty_tpl);?>
">企业荣誉</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="website-job"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_website"&&$_smarty_tpl->tpl_vars['type']->value=='job')) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'website-job'),$_smarty_tpl);?>
">人才招聘</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="website-product"||($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_website"&&$_smarty_tpl->tpl_vars['type']->value=='product')) {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'website-product'),$_smarty_tpl);?>
">产品管理</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="website-custom_nav") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'website-custom_nav'),$_smarty_tpl);?>
">自定义导航</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='tieba'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['tieba']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['tieba']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_tieba") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][238];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_tieba") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'tieba'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][69];?>
</a>
					</dd>
				</dl>

			
			

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='vote'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['vote']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['vote']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_vote"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_vote"||$_smarty_tpl->tpl_vars['pageCurr']->value=="vote-join") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][26];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="vote-join") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'vote-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][252];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_vote") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'vote'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][26];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_vote") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'vote'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][27];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='huodong'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['huodong']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['huodong']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="huodong-join"||$_smarty_tpl->tpl_vars['pageCurr']->value=="manage_huodong") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][3];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="huodong-join") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'huodong-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][252];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_huodong") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'huodong'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][3];?>
</a>
						<a href="<?php echo getUrlPath(array('service'=>'huodong','template'=>'fabu'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][170];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='car'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['car']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['car']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="car_entrust"||$_smarty_tpl->tpl_vars['pageCurr']->value=="car_receive_broker"||$_smarty_tpl->tpl_vars['pageCurr']->value=="car_broker"||$_smarty_tpl->tpl_vars['pageCurr']->value=="config_car"||$_smarty_tpl->tpl_vars['pageCurr']->value=="manage_car"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_car") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][43];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_car") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'car'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][45];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="car_broker") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'car-broker'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][44];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="car_receive_broker") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'car_receive_broker'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][46];?>
</a>
					</dd>
				</dl>

			
			<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='homemaking'&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['homemaking']&&$_smarty_tpl->tpl_vars['showModuleConfig']->value['homemaking']['show']) {?>
				<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_homemaking_nanny"||$_smarty_tpl->tpl_vars['pageCurr']->value=="homemaking_nanny"||$_smarty_tpl->tpl_vars['pageCurr']->value=="manage_homemaking"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_homemaking"||$_smarty_tpl->tpl_vars['pageCurr']->value=="config_homemaking"||$_smarty_tpl->tpl_vars['pageCurr']->value=="order_homemaking") {?> active<?php }?>">
					<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['homemaking'][8][26];?>
</dt>
					<dd>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="config_homemaking") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'config','action'=>'homemaking'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][443];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="manage_homemaking"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_homemaking") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'homemaking'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['homemaking'][8][31];?>
</a>
						<!--<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="homemaking_nanny"||$_smarty_tpl->tpl_vars['pageCurr']->value=="fabu_homemaking_nanny") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'homemaking-nanny'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['homemaking'][8][44];?>
</a>
						<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="order_homemaking") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'order','action'=>'homemaking'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][447];?>
</a>-->
					</dd>
				</dl>

			<?php }?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php if (in_array('deposit',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)||in_array('withdraw',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)||($_smarty_tpl->tpl_vars['cfg_pointState']->value&&in_array('convert',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value))||in_array('record',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)||($_smarty_tpl->tpl_vars['cfg_pointState']->value&&(in_array('transfer',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)||in_array('point',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)))||in_array('checkout',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="deposit"||$_smarty_tpl->tpl_vars['pageCurr']->value=="withdraw"||$_smarty_tpl->tpl_vars['pageCurr']->value=="convert"||$_smarty_tpl->tpl_vars['pageCurr']->value=="record"||$_smarty_tpl->tpl_vars['pageCurr']->value=="transfer"||$_smarty_tpl->tpl_vars['pageCurr']->value=="point"||$_smarty_tpl->tpl_vars['pageCurr']->value=="checkout"||$_smarty_tpl->tpl_vars['pageCurr']->value=="checkout-order") {?> active<?php }?>">
			<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][470];?>
</dt>
			<dd<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="deposit"||$_smarty_tpl->tpl_vars['pageCurr']->value=="withdraw"||$_smarty_tpl->tpl_vars['pageCurr']->value=="convert"||$_smarty_tpl->tpl_vars['pageCurr']->value=="record"||$_smarty_tpl->tpl_vars['pageCurr']->value=="transfer"||$_smarty_tpl->tpl_vars['pageCurr']->value=="point") {?> style="display: block;"<?php }?>>

				<?php if (in_array('deposit',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="deposit") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'deposit'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][1];?>
</a>
				<?php }?>

				<?php if (in_array('withdraw',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="withdraw") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'withdraw'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][471];?>
</a>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['cfg_pointState']->value&&in_array('convert',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="convert") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'convert'),$_smarty_tpl);?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][726],'1',$_smarty_tpl->tpl_vars['cfg_pointName']->value);?>
</a>
				<?php }?>

				<?php if (in_array('record',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="record") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'record'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][226];?>
</a>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['cfg_pointState']->value) {?>
				<?php if (in_array('transfer',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="transfer") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'transfer'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][730];?>
</a>
				<?php }?>

				<?php if (in_array('point',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="point") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'point'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][78];?>
</a>
				<?php }?>
				<?php }?>

				<?php if (in_array('checkout',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="checkout") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'checkout'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][38];?>
</a>
                <?php }?>
                <?php if (in_array('order',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="checkout-order") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'checkout-order'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][879];?>
</a>
				<?php }?>
			</dd>
		</dl>
		<?php }?>

		<?php if (in_array('business',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dl class="item<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="module"||$_smarty_tpl->tpl_vars['pageCurr']->value=="promotion") {?> active<?php }?>">
			<dt><s><i></i></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][6];?>
</dt>
			<dd<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="module"||$_smarty_tpl->tpl_vars['pageCurr']->value=="promotion") {?> style="display: block;"<?php }?>>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="module") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'module'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][472];?>
</a>
				<a<?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="promotion") {?> class="curr"<?php }?> href="<?php echo getUrlPath(array('service'=>'member','template'=>'promotion'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][473];?>
</a>
			</dd>
		</dl>
		<?php }?>

	</div>

	<div class="bottom-nav">
		<a href="javascript:;" class="custom-nav" id="custom-nav"><i></i>模块开关</a>
	</div>
</div>


<?php echo '<script'; ?>
 id="popupModuleList" type="text/html">
	<ul class="fn-clear">
		<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showModuleConfig']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
		<li<?php if ($_smarty_tpl->tpl_vars['module']->value['purview']==0) {?> class="nopower"<?php }?>><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['module']->value['show']&&$_smarty_tpl->tpl_vars['module']->value['purview']==1) {?> checked<?php }
if ($_smarty_tpl->tpl_vars['module']->value['purview']==0) {?> readonly<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['module']->value['title'];?>
</label></li>
		<?php } ?>
	</ul>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var pageCurr = '<?php echo $_smarty_tpl->tpl_vars['pageCurr']->value;?>
';
	var upgradeUrl = '<?php echo getUrlPath(array('service'=>'member','template'=>'join_upgrade'),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
<?php }} ?>
