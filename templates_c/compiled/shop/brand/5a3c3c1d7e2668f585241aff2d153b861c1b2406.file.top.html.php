<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:36:05
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\shop\132\top.html" */ ?>
<?php /*%%SmartyHeaderCode:16064697805d52767535a735-13815558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a3c3c1d7e2668f585241aff2d153b861c1b2406' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\shop\\132\\top.html',
      1 => 1555746428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16064697805d52767535a735-13815558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_channelDomain' => 0,
    'shop_channelName' => 0,
    'shop_logoUrl' => 0,
    'searchCurr' => 0,
    'keywords' => 0,
    'hotkeywords' => 0,
    'cfg_qiandao_state' => 0,
    'templets_skin' => 0,
    'shop_hotline' => 0,
    'cfg_hotline' => 0,
    '_bindex' => 0,
    'type' => 0,
    'type1' => 0,
    'n' => 0,
    'category' => 0,
    'pageCurr' => 0,
    'installModuleArr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5276753a8951_81502810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5276753a8951_81502810')) {function content_5d5276753a8951_81502810($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>
	var productUrl = '<?php echo getUrlPath(array('service'=>"shop",'template'=>"list"),$_smarty_tpl);?>
', storeUrl = '<?php echo getUrlPath(array('service'=>"shop",'template'=>"store"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
<div class="topad wrap"><?php echo getMyAd(array('title'=>"商城_模板二_电脑端_广告一"),$_smarty_tpl);?>
</div>

<div class="header wrap fn-clear">
	<h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['shop_channelName']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['shop_logoUrl']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['shop_channelName']->value;?>
" /></a></h1>

	<div class="search">
		<div class="type">
			<span <?php if ($_smarty_tpl->tpl_vars['searchCurr']->value==''||$_smarty_tpl->tpl_vars['keywords']->value=='') {?>class="curr"<?php }?>>商品</span>
			<span <?php if ($_smarty_tpl->tpl_vars['searchCurr']->value=="store"&&$_smarty_tpl->tpl_vars['keywords']->value!='') {?>class="curr"<?php }?>>店铺</span>
		</div>
		<div class="formbox">
			<s></s>
			<?php if ($_smarty_tpl->tpl_vars['searchCurr']->value=="store"&&$_smarty_tpl->tpl_vars['keywords']->value!='') {?>
			<form id="sform" name="search" method="get" action="<?php echo getUrlPath(array('service'=>'shop','template'=>'store'),$_smarty_tpl);?>
">
			<?php } else { ?>
			<form id="sform" name="search" method="get" action="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
">
			<?php }?>
				<input name="keywords" type="text" class="txt_search" id="search_keyword" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:translate" placeholder="输入你要搜索的关键词" data-role="input" />
				<button id="search_button" type="submit" class="btn-s">搜索</button>
			</form>
		</div>
		<p class="hot-s">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('module'=>"shop",'action'=>"hotkeywords",'return'=>"hotkeywords")); $_block_repeat=true; echo siteConfig(array('module'=>"shop",'action'=>"hotkeywords",'return'=>"hotkeywords"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a href="<?php echo $_smarty_tpl->tpl_vars['hotkeywords']->value['href'];?>
"<?php if ($_smarty_tpl->tpl_vars['hotkeywords']->value['target']==0) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hotkeywords']->value['keyword'];?>
</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('module'=>"shop",'action'=>"hotkeywords",'return'=>"hotkeywords"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</p>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['cfg_qiandao_state']->value) {?><div class="qiandao"><a target="_blank" href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'qiandao'),$_smarty_tpl);?>
">签到</a></div><?php }?>

	<div class="kefu">
		<s><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/tell.png" alt=""></s>
		<p>客服热线</p>
		<?php if ($_smarty_tpl->tpl_vars['shop_hotline']->value) {
echo $_smarty_tpl->tpl_vars['shop_hotline']->value;
} else {
echo $_smarty_tpl->tpl_vars['cfg_hotline']->value;
}?>
	</div>
</div>

<div class="nav-box">
	<div class="wrap fn-clear">
		<div class="lnav">
			<div class="t-category"><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"list"),$_smarty_tpl);?>
">所有商品分类</a></div>

			<div class="category-popup">
				<ul class="fn-clear">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['type']>14) {?>
					<li class="fn-hide">
					<?php } else { ?>
					<li class="fn-clear">
					<?php }?>
					<!--<li class="fn-clear">-->
						<div class="fix">
								<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
?typeid=<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
" class="name">
									<!--<s class="iIcon<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['type'];?>
"> </s>-->
									<s class="iIcon<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['type'];?>
">
                                      <img class="img" src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['iconturl'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
" />
										<!-- <img class="imgh" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['type'];?>
_h.png"> -->
									</s><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
								<span>
									<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"2")); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
?typeid=<?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
" class="item"><?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</a><?php if ($_smarty_tpl->tpl_vars['n']->value==1) {?>/<?php }?> 
									<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(null, null, 0);?>
								</span>
						</div>
						<div class="sub-category fn-clear">
							<div class="sub">
							<dl>
								<dd class="fn-clear">
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'])); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
?typeid=<?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</a>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</dd>
							</dl>
							</div>

							<div class="brand">
								<dl>
									<dt><h2 class="title"><a href="#">推荐品牌</a></h2></dt>
									<dd class="fn-clear">
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"brand",'return'=>"category",'category'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"4")); $_block_repeat=true; echo shop(array('action'=>"brand",'return'=>"category",'category'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
?brand=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['category']->value['logo'];?>
" alt=""></a>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"brand",'return'=>"category",'category'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</dd>
								</dl>
							</div>
						</div>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<li class="fn-clear">
						<div class="fix">
							<a class="name" href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"list"),$_smarty_tpl);?>
"><s class="iIcon15"><img class="img" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon20.png" /><img class="imgh" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon20_h.png" /></s> 更多分类</a>
						</div>
					</li>
				</ul>

				<div class="bg"></div>
			</div>
		</div>

		<ul class="nav fn-clear">
			<li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="index") {?> class="currpage"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['shop_channelName']->value;?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="qianggou") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"qianggou"),$_smarty_tpl);?>
">限时抢购</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="secKill") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"secKill"),$_smarty_tpl);?>
">准点秒杀</a></li>
			<!-- <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="quan") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"quan"),$_smarty_tpl);?>
">领券中心</a></li> -->
			<li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="store") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"store"),$_smarty_tpl);?>
">推荐商家</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="brand") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"brand"),$_smarty_tpl);?>
">品牌库</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="news") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"news"),$_smarty_tpl);?>
">商城资讯</a></li>
			<?php if (in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li><a href="<?php echo getUrlPath(array('service'=>'integral','template'=>'index'),$_smarty_tpl);?>
">积分商城</a></li>
			<?php }?>
		</ul>
	</div>
</div>


<?php }} ?>
