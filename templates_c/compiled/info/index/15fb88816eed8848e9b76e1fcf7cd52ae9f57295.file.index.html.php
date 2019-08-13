<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:49:42
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\info\115\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17498459875d510c062f3233-60838970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15fb88816eed8848e9b76e1fcf7cd52ae9f57295' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\info\\115\\index.html',
      1 => 1555744190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17498459875d510c062f3233-60838970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'info_title' => 0,
    'info_keywords' => 0,
    'info_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'info_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'j' => 0,
    'type' => 0,
    '_bindex' => 0,
    'i' => 0,
    'subtype' => 0,
    'subtype1' => 0,
    'a' => 0,
    'ilist' => 0,
    'slist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510c063cfde3_15662470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510c063cfde3_15662470')) {function content_5d510c063cfde3_15662470($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<title><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['info_keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['info_description']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
', templatePath = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;

	<?php echo '</script'; ?>
>
</head>

<body  class='w1200'>
	<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- 导航 s-->
	<?php echo $_smarty_tpl->getSubTemplate ("header_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- 导航 e-->

	<!-- 菜单 s-->
	<div class="b-main">
		<div class="wrap body">
			<div class="FirstFloor fn-clear">
				<div class="NavList">
					<ul>
						<?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(0, null, 0);?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'type')); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php if ($_smarty_tpl->tpl_vars['j']->value<10) {?>
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['j']->value++;?>
">

								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
" class="name"><s class="iIcon<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['type'];?>
"></s><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
									<i class="arrow"></i>
									<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'subtype','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id']))); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'subtype','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<?php if ($_smarty_tpl->tpl_vars['i']->value<2) {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['subtype']->value['url'];?>
" class="item"><?php echo $_smarty_tpl->tpl_vars['subtype']->value['typename'];?>
</a>
										<?php }?>
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
">
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'subtype','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<div class="sub-category">
										<dl>
											<dt><h2 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></h2></dt>
											<dd class="fn-clear">
												<div class="subitem">
													<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'subtype1','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id']))); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'subtype1','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													<a href="<?php echo $_smarty_tpl->tpl_vars['subtype1']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subtype1']->value['typename'];?>
</a>
													<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'subtype1','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												</div>
											</dd>
										</dl>
									</div>
								</li>
							<?php }?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(null, null, 0);?>

						<li class="moreList">
							<a href="javascript:;" class="name"><s class="iIcon11"></s>更多分类</a>
							<i class="arrow"></i>
							<a href="javascript:;" class="item">更多分类</a>
							<div class="more_list">
								<ul>
									<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(0, null, 0);?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'type')); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['a']->value++;?>
">
									<?php if ($_smarty_tpl->tpl_vars['a']->value>10) {?>
										<li>
											<a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
" class="name"><s class="iIcon<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['type'];?>
"></s><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
											<i class="arrow"></i>
											<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'subtype','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id']))); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'subtype','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

											<?php if ($_smarty_tpl->tpl_vars['i']->value<2) {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['subtype']->value['url'];?>
" class="item"><?php echo $_smarty_tpl->tpl_vars['subtype']->value['typename'];?>
</a>
											<?php }?>
											<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
">
											<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'subtype','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<div class="sub-category">
												<dl>
													<dt><h2 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></h2></dt>
													<dd class="fn-clear">
														<div class="subitem">
															<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'subtype1','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id']))); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'subtype1','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

															<a href="<?php echo $_smarty_tpl->tpl_vars['subtype1']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subtype1']->value['typename'];?>
</a>
															<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'subtype1','type'=>((string)$_smarty_tpl->tpl_vars['type']->value['id'])), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

														</div>
													</dd>
												</dl>
											</div>
										</li>
									<?php }?>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


								</ul>
							</div>
						</li>
					</ul>
				</div>

				<div class="mainbox">
					<div class="slideBox slideBox1">
				      <div class="slidewrap">
				        <div class="slide">
				          <div class="bd">
							  <div class="slideobj"><?php echo getMyAd(array('title'=>"二手信息_模板九_电脑端_广告一",'type'=>"slide"),$_smarty_tpl);?>
</div>
				          </div>
				          <div class="hd"><ul></ul></div>
				        </div>
				      </div>
				    </div>
				    <div class="adbox">
				    	<?php echo getMyAd(array('title'=>"二手信息_模板九_电脑端_广告二"),$_smarty_tpl);?>

					</div>
				</div>

				<div class="rightbox">
					<div class="bnews">
						<div class="ntitle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/newsTitle.png" alt=""></div>
						<ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'pageSize'=>"6")); $_block_repeat=true; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="<?php if ($_smarty_tpl->tpl_vars['ilist']->value['rec']) {?>licolor1<?php }
if ($_smarty_tpl->tpl_vars['ilist']->value['fire']) {?>licolor2<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
"><b>· </b><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
						<a href="<?php echo getUrlPath(array('service'=>'info','template'=>'list'),$_smarty_tpl);?>
" class="more">更多最新信息</a>
					</div>
					<div class="fb_rz">
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','module'=>'info'),$_smarty_tpl);?>
" class="conbox first">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/fabu.png" alt="">
							<span>发布信息</span>
						</a>
						<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
" class="conbox">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/fabu.png" alt="">
							<span>商家入驻</span>
						</a>
					</div>
					<div class="adbox">
						<?php echo getMyAd(array('title'=>"二手信息_模板九_电脑端_广告三"),$_smarty_tpl);?>

					</div>
				</div>


			</div>
		</div>
	</div>
	<!-- 菜单 e-->
	<!-- 推荐置顶 s-->
	<div class="wrap recomtop">
		<div class="public_top fn-clear">
			<div class="fn-left l">
				<span>推荐置顶</span> <i class="itop"></i>
			</div>
			<div class="fn-right r">
				<a href="javascript:;" class="a_btn1 btn_change" data-type="zd">换一批</a>
				<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','module'=>'info'),$_smarty_tpl);?>
" class="a_btn2 btn_top">我要置顶</a>
			</div>
		</div>
		<div class="recom_main fn-clear">
			<input type="hidden" class="zd_page" value="1">
			<div class="zd_list">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'top'=>1,'pageSize'=>"5")); $_block_repeat=true; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'top'=>1,'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="recom_box">
				<div class="box_collect <?php if ($_smarty_tpl->tpl_vars['ilist']->value['collect']) {?>collected<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['id'];?>
" data-type="detail"><i></i></div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
">
					<div class="recom_img">
						<img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ilist']->value['litpic'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['ilist']->value['litpic']),'type'=>"small"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
/nImage1.png<?php }?>" alt="">
						<?php if ($_smarty_tpl->tpl_vars['ilist']->value['video']) {?>
						<div class="cover_play">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/Icon_play.png" alt="">
						</div>
						<?php }?>
						<div class="box_mark">
							<span class="m_top">置顶</span>
							<?php if ($_smarty_tpl->tpl_vars['ilist']->value['is_shop']) {?>
							<span class="m_shop">商家</span>
							<?php } else { ?>
							<span class="m_geren">个人</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['ilist']->value['video']!=1) {?>
							<span class="m_pic"><em><?php echo $_smarty_tpl->tpl_vars['ilist']->value['pcount'];?>
</em>图</span>
							<?php }?>
						</div>
					</div>
					<div class="recom_info">
						<?php if ($_smarty_tpl->tpl_vars['ilist']->value['price_switch']==0) {?><p class="info_price"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price']!=0) {?><b>¥</b><?php echo $_smarty_tpl->tpl_vars['ilist']->value['price'];
} else { ?>价格面议<?php }?></p><?php }?>
						<p class="m_info"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</p>
						<div class="info_address fn-clear">
							<span class="fn-left location"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][2];?>
/<?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][1];?>
</span>
							<span class="fn-right telphone" data-tel="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
">
								<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/Icon_tel.png" alt=""><?php }?>
							</span>
							<div class="c_telphone"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
 <i></i></div>
						</div>
					</div>
				</a>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'top'=>1,'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
	</div>
	<!-- 推荐置顶 e-->
	<div class="InfoContent">
		<div class="wrap Info_Box">
			<div class="slideBox slideBox2">
		        <div class="bd">
			        <ul>
				        <li class="fn-clear">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>1,'pageSize'=>"6")); $_block_repeat=true; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>1,'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="libox">
				        		<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
" class="fn-clear">
				        			<div class="fn-left l">
				        				<i></i>
						         		<img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['ilist']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt="">
						         	</div>
						         	<div class="fn-left r">
						         		<p class="fn-clear"><span class="intit"><b>[<?php echo $_smarty_tpl->tpl_vars['ilist']->value['typename'];?>
]</b><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</span> <span class="pos"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][1];?>
</span></p>
						         		<p class="fn-clear"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price_switch']==0) {?><span class="price"><b><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price']!=0) {
echo $_smarty_tpl->tpl_vars['ilist']->value['price'];?>
元<?php } else { ?>价格面议<?php }?></b></span><?php }?> <span class="time"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['pubdate_istoday']) {?>今天 <?php echo $_smarty_tpl->tpl_vars['ilist']->value['pubdate2'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ilist']->value['pubdate1'];?>
 <?php }?> </span></p>
						         	</div>
				        		</a>
				        	</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>1,'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				        </li>
				        <li class="fn-clear">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>2,'pageSize'=>"6")); $_block_repeat=true; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>2,'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="libox">
								<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
" class="fn-clear">
									<div class="fn-left l">
										<i></i>
										<img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['ilist']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt="">
									</div>
									<div class="fn-left r">
										<p class="fn-clear"><span class="intit"><b>[<?php echo $_smarty_tpl->tpl_vars['ilist']->value['typename'];?>
]</b><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</span> <span class="pos"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][1];?>
</span></p>
										<p class="fn-clear"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price_switch']==0) {?><span class="price"><b><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price']!=0) {
echo $_smarty_tpl->tpl_vars['ilist']->value['price'];?>
元<?php } else { ?>价格面议<?php }?></b></span><?php }?> <span class="time"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['pubdate_istoday']) {?>今天 <?php echo $_smarty_tpl->tpl_vars['ilist']->value['pubdate2'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ilist']->value['pubdate1'];?>
 <?php }?> </span></p>
									</div>
								</a>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>2,'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				        </li>
				        <li class="fn-clear">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>3,'pageSize'=>"6")); $_block_repeat=true; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>3,'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="libox">
								<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
" class="fn-clear">
									<div class="fn-left l">
										<i></i>
										<img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['ilist']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt="">
									</div>
									<div class="fn-left r">
										<p class="fn-clear"><span class="intit"><b>[<?php echo $_smarty_tpl->tpl_vars['ilist']->value['typename'];?>
]</b><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</span> <span class="pos"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][1];?>
</span></p>
										<p class="fn-clear"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price_switch']==0) {?><span class="price"><b><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price']!=0) {
echo $_smarty_tpl->tpl_vars['ilist']->value['price'];?>
元<?php } else { ?>价格面议<?php }?></b></span><?php }?> <span class="time"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['pubdate_istoday']) {?>今天 <?php echo $_smarty_tpl->tpl_vars['ilist']->value['pubdate2'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ilist']->value['pubdate1'];?>
 <?php }?> </span></p>
									</div>
								</a>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'page'=>3,'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				        </li>
			        </ul>
		        </div>
		        <div class="hd"><ul class="fn-clear"></ul></div>
		    </div>
		</div>
	</div>

	<!-- 最新入驻 s-->
	<div class="wrap newshop">
		<div class="public_top fn-clear">
			<div class="fn-left l">
				<span>最新入驻</span> <i class="ishop"></i>
			</div>
			<div class="fn-right r">
				<a href="javascript:;" class="a_btn1 btn_change" data-type="sj">换一批</a>
				<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'businese','temp'=>'config','module'=>'info'),$_smarty_tpl);?>
" class="a_btn2 btn_top">我要入驻</a>
			</div>
		</div>
		<input type="hidden" value="1" class="sz_page">

		<div class="recom_main fn-clear">
			<div class="sj_list">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"shopList",'return'=>"slist",'orderby'=>"1",'pagesize'=>"4",'page'=>"1")); $_block_repeat=true; echo info(array('action'=>"shopList",'return'=>"slist",'orderby'=>"1",'pagesize'=>"4",'page'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="recom_box">
					<div class="box_collect <?php if ($_smarty_tpl->tpl_vars['slist']->value['collect']) {?>collected<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['slist']->value['id'];?>
" data-type="shop"><i></i></div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['slist']->value['url'];?>
">
				<!--<a href="javaScript:;">-->
					<div class="recom_img">
						<img src="<?php if ($_smarty_tpl->tpl_vars['slist']->value['pcount']>0) {
echo $_smarty_tpl->tpl_vars['slist']->value['pics'][0];
}?>" alt="">
						<?php if ($_smarty_tpl->tpl_vars['slist']->value['video']) {?>
						<div class="cover_play">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/Icon_play.png" alt="">
						</div>
						<?php }?>
						<div class="box_mark">
							<?php if ($_smarty_tpl->tpl_vars['slist']->value['top']) {?>
							<span class="m_top">置顶</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slist']->value['video']=='') {?>
							<span class="m_pic"><em><?php echo $_smarty_tpl->tpl_vars['slist']->value['pcount'];?>
</em>图</span>
							<?php }?>
						</div>
					</div>
					<div class="recom_info">
						<h3><?php echo $_smarty_tpl->tpl_vars['slist']->value['user']['nickname'];?>
</h3>
						<div class="box_mark fn-clear">
							<span class="m_mark mark1">商家</span>
							<span class="m_mark mark2"><?php echo $_smarty_tpl->tpl_vars['slist']->value['typename'];?>
</span>
						</div>
						<div class="comment_box fn-clear">
							<!--<div class="star_box"><i style="width: 80%;"></i></div>-->
							<span><?php echo $_smarty_tpl->tpl_vars['slist']->value['shop_common'];?>
评论</span>
						</div>
						<div class="pos_box fn-clear">
							<span class="pos fn-left"><?php echo $_smarty_tpl->tpl_vars['slist']->value['address_'][0];
echo $_smarty_tpl->tpl_vars['slist']->value['address_'][1];?>
</span>
							<!--<span class="fn-right"><i class="ipos"></i>2.3km</span>-->
						</div>
						<div class="tel_box"><i></i><?php if ($_smarty_tpl->tpl_vars['slist']->value['user']['phone']) {
echo $_smarty_tpl->tpl_vars['slist']->value['user']['phone'];
} else { ?>暂无电话<?php }?></div>
					</div>
				</a>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"shopList",'return'=>"slist",'orderby'=>"1",'pagesize'=>"4",'page'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div class="adv_box">
				<?php echo getMyAd(array('title'=>"二手信息_模板九_电脑端_广告四"),$_smarty_tpl);?>

				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/adImg01.png" alt="">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/adImg02.png" alt="">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/adImg03.png" alt="">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/adImg04.png" alt=""> -->
			</div>
		</div>
	</div>
	<!-- 最新入驻 e-->

	<!-- 广告 s-->
	<div class="wrap adBox">
		<?php echo getMyAd(array('title'=>"二手信息_模板九_电脑端_广告五"),$_smarty_tpl);?>

	</div>
	<!-- 广告 e-->

	<div class="main_box">
		<!-- 闲置数码 s-->
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'type','pageSize'=>"2")); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'type','pageSize'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="wrap c_info">
			<div class="public_top fn-clear">
				<div class="fn-left l">
					<span class="info_typeid" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
				</div>
				<div class="fn-right r">
					<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp3=ob_get_clean();?><?php echo getUrlPath(array('service'=>'info','template'=>'list','typeid'=>$_tmp3),$_smarty_tpl);?>
" target="_blank" class="a_btn1 btn_more">查看更多</a>
					<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','module'=>'info'),$_smarty_tpl);?>
" target="_blank" class="a_btn2 btn_fabu">我要发布</a>
				</div>
			</div>
			<div class="list_box">
				<ul class="fn-clear">
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>'subtype','type'=>$_tmp4,'page'=>"1",'pageSize'=>"5")); $_block_repeat=true; echo info(array('action'=>"type",'return'=>'subtype','type'=>$_tmp4,'page'=>"1",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subtype']->value['id'];?>
<?php $_tmp5=ob_get_clean();?><?php echo getUrlPath(array('service'=>'info','template'=>'list','typeid'=>$_tmp5),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['subtype']->value['typename'];?>
</a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'subtype','type'=>$_tmp4,'page'=>"1",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
			<div class="recom_main fn-clear">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'pageSize'=>"5",'typeid'=>$_tmp6,'page'=>"1")); $_block_repeat=true; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'pageSize'=>"5",'typeid'=>$_tmp6,'page'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="recom_box">
					<div class="box_collect <?php if ($_smarty_tpl->tpl_vars['ilist']->value['collect']) {?>collected<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['id'];?>
" data-type="detail"><i></i></div>

					<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
">
						<div class="recom_img">
							<img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['ilist']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt="">
							<?php if ($_smarty_tpl->tpl_vars['ilist']->value['video']) {?>
							<div class="cover_play">
								<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/Icon_play.png" alt="">
							</div>
							<?php }?>
						</div>
						<div class="recom_info">
							<?php if ($_smarty_tpl->tpl_vars['ilist']->value['price_switch']==0) {?><p class="info_price"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price']!=0) {?><b>¥</b><?php echo $_smarty_tpl->tpl_vars['ilist']->value['price'];
} else { ?>价格面议<?php }?></p><?php }?>
							<p class="m_info"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</p>
							<div class="info_address fn-clear">
								<span class="fn-left location"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][2];?>
/<?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][1];?>
</span>
								<span class="fn-right telphone" data-tel="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['tel'];?>
">
								<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/Icon_tel.png" alt=""><?php }?>
								</span>
								<div class="c_telphone"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
 <i></i></div>
							</div>
						</div>
					</a>
				</div>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"1",'pageSize'=>"5",'typeid'=>$_tmp6,'page'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>'type','pageSize'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<!-- 闲置数码 e-->
		<!-- 广告 s-->
		<div class="wrap adBox fn-clear">
			<?php echo getMyAd(array('title'=>"二手信息_模板九_电脑端_广告六"),$_smarty_tpl);?>

		</div>
		<!-- 广告 e-->
		<div class="wrap bt_more"><a href="<?php echo getUrlPath(array('service'=>'info','template'=>'list'),$_smarty_tpl);?>
">查看更多</a></div>
	</div>







<?php echo $_smarty_tpl->getSubTemplate ('../../siteConfig/public_foot_v3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'info','theme'=>'gray'), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
