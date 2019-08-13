<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:49:54
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\house\104\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16987489615d510c12556a35-12629064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '077faf8f57bdb1e56a2878866bf18c6fbe665590' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\house\\104\\index.html',
      1 => 1538189488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16987489615d510c12556a35-12629064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'house_title' => 0,
    'house_keywords' => 0,
    'house_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'cfg_clihost' => 0,
    'cfg_geetest' => 0,
    'HUONIAOROOT' => 0,
    'house_channelDomain' => 0,
    'house_logoUrl' => 0,
    'i' => 0,
    'addr' => 0,
    'cfg_subway_state' => 0,
    'cfg_subway_title' => 0,
    'siteCityInfo' => 0,
    'sub' => 0,
    'addrid' => 0,
    'business' => 0,
    'subway' => 0,
    'station' => 0,
    'room' => 0,
    'zhuangxiu' => 0,
    'rentype' => 0,
    'type' => 0,
    'keywords' => 0,
    'orderby' => 0,
    'price' => 0,
    'item' => 0,
    'list' => 0,
    'cfg_app_ios_download' => 0,
    'cfg_app_android_download' => 0,
    'cfg_weixinQr' => 0,
    'cfg_miniProgramQr' => 0,
    'mlist' => 0,
    'nlist' => 0,
    'typeid' => 0,
    'salestate' => 0,
    'times' => 0,
    'buildtype' => 0,
    'tuandate' => 0,
    'filter' => 0,
    'loupan' => 0,
    'area' => 0,
    'direction' => 0,
    'buildage' => 0,
    'floor' => 0,
    'flags' => 0,
    '_bindex' => 0,
    'demand1' => 0,
    'zjcom' => 0,
    'broker' => 0,
    'demand2' => 0,
    'flink' => 0,
    'row' => 0,
    'cfg_powerby' => 0,
    'cfg_statisticscode' => 0,
    'cfg_secureAccess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510c1291b9a3_67519313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510c1291b9a3_67519313')) {function content_5d510c1291b9a3_67519313($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<title><?php echo $_smarty_tpl->tpl_vars['house_title']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['house_keywords']->value;?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['house_description']->value;?>
">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
 type="text/javascript">
    var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
    var hideFileUrl = '<?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
';
    var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', cfg_clihost = '<?php echo $_smarty_tpl->tpl_vars['cfg_clihost']->value;?>
';
    var geetest = <?php echo $_smarty_tpl->tpl_vars['cfg_geetest']->value;?>
;
<?php echo '</script'; ?>
>
<body class="w1200">
<!-- 顶部信息 -->

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告一"),$_smarty_tpl);?>

</div>
<!-- 搜索 -->
<div class="logo-wrap wrap fn-clear">
	<div class="logo fn-clear">
		<a href="<?php echo $_smarty_tpl->tpl_vars['house_channelDomain']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['house_logoUrl']->value;?>
" alt="">
		</a>
	</div>
	<div class="search">
		<ul class="fn-clear search-top">
			<li class="active" data-type="loupan"><a href="javascript:;" data-href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan'),$_smarty_tpl);?>
">新房</a></li>
			<li data-type="community"><a href="javascript:;" data-href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale'),$_smarty_tpl);?>
" >二手房</a></li>
			<li data-type="community"><a href="javascript:;" data-href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu'),$_smarty_tpl);?>
" >租房</a></li>
			<li data-type="community"><a href="javascript:;" data-href="<?php echo getUrlPath(array('service'=>'house','template'=>'community'),$_smarty_tpl);?>
">找小区</a></li>
			<li data-type="xzl"><a href="javascript:;" data-href="<?php echo getUrlPath(array('service'=>'house','template'=>'xzl'),$_smarty_tpl);?>
" >写字楼</a></li>
		</ul>
		<div class="search-con">
				<input type="text" name="search_keyword" id="search_keyword" class="text" value="搜索楼盘名称、地址..." onfocus="if(this.value=='搜索楼盘名称、地址...')this.value='';" onblur="if(this.value=='')this.value='搜索楼盘名称、地址...';">
				<input type="submit" class="submit" id="search_button" value="搜索">
		</div>
	</div>
	<div class="loc-room">
		<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map','action'=>'loupan'),$_smarty_tpl);?>
" target="_blank">
			<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/loc.png" alt="">
			<span>地图找房</span>
		</a>
	</div>
	<div class="pub-room">
		<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config-house'),$_smarty_tpl);?>
" target="_blank">
			<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/publish.png" alt="">
			<span>发布房源</span>
		</a>
	</div>
</div>
<!-- 便捷查询 -->
<div class="find-wrap wrap fn-clear">
	<div class="find-left lnav fn-clear">
		<div class="left-title">便捷查询</div>
		<!-- sss -->
		<div class="category-popup">
			<ul class="fn-clear">
				<li>
					<div class="fix">
						<div class="name fn-clear">
							<a href="javascript:;">区域</a>
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt="">
						</div>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['i']->value<7) {?>
						<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp1),$_smarty_tpl);?>
" class="item"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a>&nbsp;&nbsp;
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php echo $_smarty_tpl->tpl_vars['i']->value==null;?>


					</div>
					<div class="sub-category fn-clear">
						<dl class="fn-clear">
							<dt>
								<h2 class="title">
									<a href="javascript:;">所有区域</a>
								</h2>
							</dt>
							<dd class="fn-clear">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</dd>
						</dl>
						<?php if ($_smarty_tpl->tpl_vars['cfg_subway_state']->value) {?>
						<dl class="fn-clear">
							<dt>
								<h2 class="title">
									<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['cfg_subway_title']->value;?>
</a>
								</h2>
							</dt>
							<dd class="fn-clear">
								<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['cityid'];?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"subway",'return'=>'sub','city'=>$_tmp3)); $_block_repeat=true; echo siteConfig(array('action'=>"subway",'return'=>'sub','city'=>$_tmp3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>$_tmp4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"subway",'return'=>'sub','city'=>$_tmp3), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</dd>
						</dl>
						<?php }?>
					</div>
				</li>

				<li>
					<div class="fix">
						<div class="name">
							<a href="javascript:;">价格</a>
							 <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt="">
						</div>
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp14=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp5,'business'=>$_tmp6,'subway'=>$_tmp7,'station'=>$_tmp8,'price'=>'','room'=>$_tmp9,'zhuangxiu'=>$_tmp10,'rentype'=>$_tmp11,'type'=>$_tmp12,'keywords'=>$_tmp13,'param'=>$_tmp14),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='') {?> class="curr"<?php }?>>不限</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp18=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp20=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp22=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp24=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp15,'business'=>$_tmp16,'subway'=>$_tmp17,'station'=>$_tmp18,'price'=>',5','room'=>$_tmp19,'zhuangxiu'=>$_tmp20,'rentype'=>$_tmp21,'type'=>$_tmp22,'keywords'=>$_tmp23,'param'=>$_tmp24),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value==',5') {?> class="curr"<?php }?>>500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
以下</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp25=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp26=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp27=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp28=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp29=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp30=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp31=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp32=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp33=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp34=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp25,'business'=>$_tmp26,'subway'=>$_tmp27,'station'=>$_tmp28,'price'=>'5,8','room'=>$_tmp29,'zhuangxiu'=>$_tmp30,'rentype'=>$_tmp31,'type'=>$_tmp32,'keywords'=>$_tmp33,'param'=>$_tmp34),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='5,8') {?> class="curr"<?php }?>>500-800<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp35=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp36=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp37=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp38=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp39=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp40=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp41=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp42=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp43=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp44=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp35,'business'=>$_tmp36,'subway'=>$_tmp37,'station'=>$_tmp38,'price'=>'8,10','room'=>$_tmp39,'zhuangxiu'=>$_tmp40,'rentype'=>$_tmp41,'type'=>$_tmp42,'keywords'=>$_tmp43,'param'=>$_tmp44),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='8,10') {?> class="curr"<?php }?>>800-1000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp45=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp46=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp47=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp48=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp49=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp50=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp51=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp52=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp53=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp54=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp45,'business'=>$_tmp46,'subway'=>$_tmp47,'station'=>$_tmp48,'price'=>'10,15','room'=>$_tmp49,'zhuangxiu'=>$_tmp50,'rentype'=>$_tmp51,'type'=>$_tmp52,'keywords'=>$_tmp53,'param'=>$_tmp54),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='10,15') {?> class="curr"<?php }?>>1000-1500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</div>
                    <div class="sub-category fn-clear">
                        <dl class="fn-clear">
                            <dt>
                                <h2 class="title">
                                    <a class="item" href="javascript:;">所有价格</a>
                                </h2>
                            </dt>
                            <dd class="fn-clear">
								<a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp55=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp56=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp57=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp58=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp59=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp60=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp61=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp62=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp63=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp64=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp55,'business'=>$_tmp56,'subway'=>$_tmp57,'station'=>$_tmp58,'price'=>'','room'=>$_tmp59,'zhuangxiu'=>$_tmp60,'rentype'=>$_tmp61,'type'=>$_tmp62,'keywords'=>$_tmp63,'param'=>$_tmp64),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='') {?> class="curr"<?php }?>>不限</a>
								<a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp65=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp66=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp67=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp68=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp69=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp70=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp71=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp72=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp73=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp74=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp65,'business'=>$_tmp66,'subway'=>$_tmp67,'station'=>$_tmp68,'price'=>',5','room'=>$_tmp69,'zhuangxiu'=>$_tmp70,'rentype'=>$_tmp71,'type'=>$_tmp72,'keywords'=>$_tmp73,'param'=>$_tmp74),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value==',5') {?> class="curr"<?php }?>>500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
以下</a>
								<a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp75=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp76=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp77=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp78=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp79=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp80=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp81=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp82=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp83=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp84=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp75,'business'=>$_tmp76,'subway'=>$_tmp77,'station'=>$_tmp78,'price'=>'5,8','room'=>$_tmp79,'zhuangxiu'=>$_tmp80,'rentype'=>$_tmp81,'type'=>$_tmp82,'keywords'=>$_tmp83,'param'=>$_tmp84),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='5,8') {?> class="curr"<?php }?>>500-800<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
								<a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp85=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp86=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp87=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp88=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp89=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp90=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp91=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp92=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp93=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp94=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp85,'business'=>$_tmp86,'subway'=>$_tmp87,'station'=>$_tmp88,'price'=>'8,10','room'=>$_tmp89,'zhuangxiu'=>$_tmp90,'rentype'=>$_tmp91,'type'=>$_tmp92,'keywords'=>$_tmp93,'param'=>$_tmp94),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='8,10') {?> class="curr"<?php }?>>800-1000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
								<a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp95=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp96=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp97=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp98=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp99=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp100=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp101=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp102=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp103=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp104=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp95,'business'=>$_tmp96,'subway'=>$_tmp97,'station'=>$_tmp98,'price'=>'10,15','room'=>$_tmp99,'zhuangxiu'=>$_tmp100,'rentype'=>$_tmp101,'type'=>$_tmp102,'keywords'=>$_tmp103,'param'=>$_tmp104),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='10,15') {?> class="curr"<?php }?>>1000-1500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
                                <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp105=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp106=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp107=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp108=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp109=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp110=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp111=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp112=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp113=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp114=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp105,'business'=>$_tmp106,'subway'=>$_tmp107,'station'=>$_tmp108,'price'=>'20,30','room'=>$_tmp109,'zhuangxiu'=>$_tmp110,'rentype'=>$_tmp111,'type'=>$_tmp112,'keywords'=>$_tmp113,'param'=>$_tmp114),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='20,30') {?> class="curr"<?php }?>>2000-3000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
                                <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp115=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp116=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp117=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp118=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp119=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp120=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp121=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp122=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp123=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp124=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp115,'business'=>$_tmp116,'subway'=>$_tmp117,'station'=>$_tmp118,'price'=>'30,50','room'=>$_tmp119,'zhuangxiu'=>$_tmp120,'rentype'=>$_tmp121,'type'=>$_tmp122,'keywords'=>$_tmp123,'param'=>$_tmp124),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='30,50') {?> class="curr"<?php }?>>3000-5000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
                                <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp125=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp126=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp127=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp128=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp129=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp130=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp131=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp132=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp133=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp134=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp125,'business'=>$_tmp126,'subway'=>$_tmp127,'station'=>$_tmp128,'price'=>'50,','room'=>$_tmp129,'zhuangxiu'=>$_tmp130,'rentype'=>$_tmp131,'type'=>$_tmp132,'keywords'=>$_tmp133,'param'=>$_tmp134),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='50,') {?> class="curr"<?php }?>>5000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
以上</a>

                            </dd>
                        </dl>

                    </div>
				</li>

				<li>
					<div class="fix">
						<div class="name">
							<a href="javascript:;">户型</a>
							<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt=""> -->
						</div>
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp135=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp136=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp137=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp138=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp139=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp140=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp141=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp142=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp143=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp144=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp135,'business'=>$_tmp136,'subway'=>$_tmp137,'station'=>$_tmp138,'price'=>$_tmp139,'room'=>'','zhuangxiu'=>$_tmp140,'rentype'=>$_tmp141,'type'=>$_tmp142,'keywords'=>$_tmp143,'param'=>$_tmp144),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='') {?> class="curr"<?php }?>>不限</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp145=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp146=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp147=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp148=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp149=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp150=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp151=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp152=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp153=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp154=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp145,'business'=>$_tmp146,'subway'=>$_tmp147,'station'=>$_tmp148,'price'=>$_tmp149,'room'=>'1','zhuangxiu'=>$_tmp150,'rentype'=>$_tmp151,'type'=>$_tmp152,'keywords'=>$_tmp153,'param'=>$_tmp154),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='1') {?> class="curr"<?php }?>>一居</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp155=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp156=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp157=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp158=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp159=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp160=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp161=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp162=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp163=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp164=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp155,'business'=>$_tmp156,'subway'=>$_tmp157,'station'=>$_tmp158,'price'=>$_tmp159,'room'=>'2','zhuangxiu'=>$_tmp160,'rentype'=>$_tmp161,'type'=>$_tmp162,'keywords'=>$_tmp163,'param'=>$_tmp164),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='2') {?> class="curr"<?php }?>>二居</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp165=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp166=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp167=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp168=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp169=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp170=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp171=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp172=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp173=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp174=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp165,'business'=>$_tmp166,'subway'=>$_tmp167,'station'=>$_tmp168,'price'=>$_tmp169,'room'=>'3','zhuangxiu'=>$_tmp170,'rentype'=>$_tmp171,'type'=>$_tmp172,'keywords'=>$_tmp173,'param'=>$_tmp174),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='3') {?> class="curr"<?php }?>>三居</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp175=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp176=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp177=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp178=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp179=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp180=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp181=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp182=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp183=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp184=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp175,'business'=>$_tmp176,'subway'=>$_tmp177,'station'=>$_tmp178,'price'=>$_tmp179,'room'=>'4','zhuangxiu'=>$_tmp180,'rentype'=>$_tmp181,'type'=>$_tmp182,'keywords'=>$_tmp183,'param'=>$_tmp184),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='4') {?> class="curr"<?php }?>>四居</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp185=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp186=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp187=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp188=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp189=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp190=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp191=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp192=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp193=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp194=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp185,'business'=>$_tmp186,'subway'=>$_tmp187,'station'=>$_tmp188,'price'=>$_tmp189,'room'=>'5','zhuangxiu'=>$_tmp190,'rentype'=>$_tmp191,'type'=>$_tmp192,'keywords'=>$_tmp193,'param'=>$_tmp194),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='5') {?> class="curr"<?php }?>>五居</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp195=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp196=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp197=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp198=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp199=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp200=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp201=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp202=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp203=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp204=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp195,'business'=>$_tmp196,'subway'=>$_tmp197,'station'=>$_tmp198,'price'=>$_tmp199,'room'=>'0','zhuangxiu'=>$_tmp200,'rentype'=>$_tmp201,'type'=>$_tmp202,'keywords'=>$_tmp203,'param'=>$_tmp204),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='0') {?> class="curr"<?php }?>>五居以上</a>
					</div>
				</li>

				<li>
					<div class="fix">
						<div class="name"><a href="javascript:;">装修</a></div>
                        <a class="item" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp205=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp206=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp207=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp208=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp209=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp210=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp211=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp212=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp213=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp214=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp205,'business'=>$_tmp206,'subway'=>$_tmp207,'station'=>$_tmp208,'price'=>$_tmp209,'room'=>$_tmp210,'zhuangxiu'=>'','rentype'=>$_tmp211,'type'=>$_tmp212,'keywords'=>$_tmp213,'param'=>$_tmp214),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['zhuangxiu']->value=='') {?> class="curr"<?php }?>>不限</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"item",'return'=>"item",'type'=>"2")); $_block_repeat=true; echo house(array('action'=>"item",'return'=>"item",'type'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp215=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp216=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp217=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp218=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp219=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp220=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php $_tmp221=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp222=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp223=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp224=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp225=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp215,'business'=>$_tmp216,'subway'=>$_tmp217,'station'=>$_tmp218,'price'=>$_tmp219,'room'=>$_tmp220,'zhuangxiu'=>$_tmp221,'rentype'=>$_tmp222,'type'=>$_tmp223,'keywords'=>$_tmp224,'param'=>$_tmp225),$_smarty_tpl);?>
" class="item"><?php echo $_smarty_tpl->tpl_vars['item']->value['typename'];?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"item",'return'=>"item",'type'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</li>

			</ul>
			<!--<div class="more"><i></i></div>-->
		</div>
		<!-- eee -->

	</div>
	<div class="find-right">
		<div class="right-title">
			<ul class="fn-clear tab">
				<li class="active tab-li"><a href="<?php echo $_smarty_tpl->tpl_vars['house_channelDomain']->value;?>
">首页</a></li>

				<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan'),$_smarty_tpl);?>
" class="title">新房</a></li>
				<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale'),$_smarty_tpl);?>
" class="title">二手房</a></li>
				<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu'),$_smarty_tpl);?>
" class="title">租房</a></li>
				<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sp'),$_smarty_tpl);?>
" class="title">商铺</a></li>
				<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'cf'),$_smarty_tpl);?>
" class="title">厂房、仓库</a></li>
				<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand'),$_smarty_tpl);?>
" class="title">求租求购</a></li>
				<li class="tab-li"></li>

				<li class="tab-li">
					<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store'),$_smarty_tpl);?>
" class="title">中介公司</a>
					<div class="li-down">
						<ul class="fn-clear">
							<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'broker'),$_smarty_tpl);?>
" class="title">经纪人</a></li>
						</ul>
					</div>
				</li>


				<li class="tab-li"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'news'),$_smarty_tpl);?>
" class="title">房产资讯</a></li>
			</ul>
		</div>
		<div class="con-left fn-clear">
			<!-- 焦点图 -->
			<div class="PicFocus fn-clear">
			    <div class="slideBox slideBox1">
			      <div class="slidewrap">
			        <div class="slide">
			          <div class="bd">
						  <?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告二"),$_smarty_tpl);?>

					  </div>
			          <div class="hd"><ul></ul></div>
			        </div>
			        <a href="javascript:;" class="prev"></a>
			        <a href="javascript:;" class="next"></a>
			      </div>
			    </div>
		  	</div>
  			<!-- 焦点图e -->
  			<!--焦点2 -->
  			<div class="slideBox slideBox2 fn-clear">
  				<div class="bd fn-clear">
  					<ul class="fn-clear">
  						<li>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1)); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			  				<div class="slide-item fn-clear">
			  					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
			  					<div class="item-right">
									<p class="p1"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
									<p class="p2"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][1];?>
</a></p>
									<p class="p3"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span>¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span>/m&sup2;</span></a></p>
								</div>
			  				</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		  				</li>
		  				<li>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>2)); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			  				<div class="slide-item fn-clear">
			  					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
			  					<div class="item-right">
									<p class="p1"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
									<p class="p2"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][1];?>
</a></p>
									<p class="p3"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span>¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span>/m&sup2;</span></a></p>
								</div>
			  				</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>2), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		  				</li>
		  				<li>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>3)); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			  				<div class="slide-item fn-clear">
			  					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
			  					<div class="item-right">
									<p class="p1"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
									<p class="p2"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][1];?>
</a></p>
									<p class="p3"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span>¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span>/m&sup2;</span></a></p>
								</div>
			  				</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>3), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		  				</li>
		  			</ul>
	  			</div>
	  			<a class="prev" href="javascript:;"></a>
	  			<a class="next" href="javascript:;"></a>
  			</div>
		</div>

		<div class="con-right fn-clear">
			<div class="app-wrap fn-clear">
				<?php if ($_smarty_tpl->tpl_vars['cfg_app_ios_download']->value||$_smarty_tpl->tpl_vars['cfg_app_android_download']->value) {?>
				<div class="app fn-clear">
					<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo getUrlPath(array('service'=>"siteConfig",'template'=>"mobile"),$_smarty_tpl);?>
" alt="">
					<p>APP下载</p>
				</div>
				<?php } else { ?>
				<div class="app fn-clear">
					<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" alt="">
					<p>移动端</p>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value) {?>
				<div class="weixin fn-clear">
					<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
" alt="">
					<p>微信公众号</p>
				</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value) {?>
				<div class="weixin fn-clear">
					<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value;?>
" alt="">
					<p>微信小程序</p>
				</div>
				<?php }?>
			</div>
			<div class="new-group fn-clear">
				<ul class="fn-clear">
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'','zhuangxiu'=>'','buildtype'=>'','tuandate'=>'','filter'=>"tuan"),$_smarty_tpl);?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-01.png" alt="">
							<p>新房团购</p>
						</a>
					</li>
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'kan'),$_smarty_tpl);?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-02.png" alt="">
							<p>组团看房</p>
						</a>
					</li>
					<!--<li>-->
						<!--<a href="javascript:;">-->
							<!--<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-03.png" alt="">-->
							<!--<p>房价走势</p>-->
						<!--</a>-->
					<!--</li>-->
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'calculator','do'=>'sy'),$_smarty_tpl);?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-04.png" alt="">
							<p>房贷计算器</p>
						</a>
					</li>
					<!--<li>-->
						<!--<a href="">-->
							<!--<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-05.png" alt="">-->
							<!--<p>全景看房</p>-->
						<!--</a>-->
					<!--</li>-->
					<!--<li>-->
						<!--<a href="">-->
							<!--<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-06.png" alt="">-->
							<!--<p>视频看房</p>-->
						<!--</a>-->
					<!--</li>-->
					<!--<li>-->
						<!--<a href="javascript:;">-->
							<!--<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-07.png" alt="">-->
							<!--<p>房产直播</p>-->
						<!--</a>-->
					<!--</li>-->
					<!--<li>-->
						<!--<a href="javascript:;">-->
							<!--<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-08.png" alt="">-->
							<!--<p>房产问答</p>-->
						<!--</a>-->
					<!--</li>-->
					<li>
						<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'tmonth'),$_smarty_tpl);?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/group-09.png" alt="">
							<p>新房优惠</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告三"),$_smarty_tpl);?>

</div>
<!-- 楼市头条 -->
<div class="floor-wrap wrap fn-clear">
	<div class="floor-left fn-clear">
		<!-- 焦点图 -->
		<div class="PicFocus fn-clear floor-slide">
		    <div class="slideBox slideBox3">
		      <div class="slidewrap">
		        <div class="slide">
		          <div class="bd">
					  <?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告四"),$_smarty_tpl);?>

				  </div>
		          <div class="hd"><ul></ul></div>
		        </div>

		      </div>
		    </div>
	  	</div>
		<!-- 焦点图e -->
		<div class="video">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"1")); $_block_repeat=true; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<a href="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['url'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['litpic'];?>
" alt="">
			</a>
			<div class="floor-bg"></div>
			<div class="bg-text">
				<a href="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['url'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['mlist']->value['title']);?>
</a>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="floor-info">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"5")); $_block_repeat=true; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/start.png" alt=""></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['url'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['mlist']->value['title']);?>
</a>
			</p>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		</div>
	</div>
	<div class="floor-right fn-clear">
		<div class="floor-top fn-clear">
			<div class="floor-title fn-clear">
				<div class="title-left">楼市头条</div>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"1")); $_block_repeat=true; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<h3><a href="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['url'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['mlist']->value['title']);?>
</a></h3>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div class="title-con">
				<ul class="fn-clear">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"news",'return'=>"nlist",'orderby'=>"click",'typeid'=>"1",'pageSize'=>"9")); $_block_repeat=true; echo house(array('action'=>"news",'return'=>"nlist",'orderby'=>"click",'typeid'=>"1",'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><span class="red">• </span><a href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['nlist']->value['title']);?>
</a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"news",'return'=>"nlist",'orderby'=>"click",'typeid'=>"1",'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				</ul>
			</div>
		</div>
		<div class="floor-middle">
			<ul class="fn-clear">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"10")); $_block_repeat=true; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['url'];?>
"><span class="grey">• </span><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['mlist']->value['title']);?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"news",'return'=>"mlist",'orderby'=>"click",'typeid'=>"2",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			</ul>
		</div>
		<div class="floor-bottom">
			<ul class="fn-clear">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"news",'return'=>"nlist",'orderby'=>"click",'typeid'=>"1",'pageSize'=>"5")); $_block_repeat=true; echo house(array('action'=>"news",'return'=>"nlist",'orderby'=>"click",'typeid'=>"1",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['litpic'];?>
" alt=""></a>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['nlist']->value['title']);?>
</a></p>
				</li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"news",'return'=>"nlist",'orderby'=>"click",'typeid'=>"1",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			</ul>
		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告五"),$_smarty_tpl);?>

</div>
<!-- 推荐楼盘 -->
<div class="build-wrap wrap fn-clear">
	<div class="build">
		<div class="build-tab">
			<ul class="fn-clear">
				<li class="active">推荐楼盘</li>
				<li>热销楼盘</li>
				<li>特惠楼盘</li>
				<li>精选楼盘</li>
			</ul>
		</div>
		<div class="tab-con show">
			<ul class="fn-clear">

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"rec")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"rec"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<div class="effect"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a></div>
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h4></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><p><span class="font14">¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span class="font14">/m&sup2;</span> <span class="gong"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][2];?>
</span></p></a>
				</li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"rec"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>

		<div class="tab-con">
			<ul class="fn-clear">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"hot")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"hot"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="effect"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h4></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><p><span class="font14">¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span class="font14">/m&sup2;</span> <span class="gong"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][2];?>
</span></p></a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"hot"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>

		<div class="tab-con">
			<ul class="fn-clear">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"tuan")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"tuan"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="effect"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h4></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><p><span class="font14">¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span class="font14">/m&sup2;</span> <span class="gong"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][2];?>
</span></p></a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"tuan"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>

		<div class="tab-con">
			<ul class="fn-clear">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"rec")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"rec"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="effect"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h4></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><p><span class="font14">¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span class="font14">/m&sup2;</span> <span class="gong"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][2];?>
</span></p></a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"4",'page'=>1,'filter'=>"rec"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告六"),$_smarty_tpl);?>

</div>
<!-- 楼盘团购 -->
<div class="buy-wrap wrap fn-clear">
	<div class="buy-title">
		<div class="title-left fn-clear">
			<h3>楼盘团购</h3>
		</div>
		<div class="title-right fn-clear">
			<ul class="fn-clear">
				<li class="active"><a href="javascript:;">新房团购</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'','zhuangxiu'=>'','buildtype'=>'','tuandate'=>'','filter'=>"tuan"),$_smarty_tpl);?>
">楼盘团购</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'kan'),$_smarty_tpl);?>
" target="_blank">看房团</a></li>
			</ul>
		</div>
	</div>
	<div class="buy-left find-left">

		<div class="left-con">


			<div class="list">

				<dl class="fn-clear one-list">

					<dt class="fn-clear"><span>区域</span><i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt=""></i></dt>
					<dd><a href="javascript:;">不限</a></dd>

                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['i']->value<7) {?>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp226=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp226),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a>&nbsp;</dd>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php echo $_smarty_tpl->tpl_vars['i']->value==null;?>


				</dl>
				<div class="two-list">
					<dl class="fn-clear">
						<dt class="fn-clear"><span>所有区域</span></dt>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp227=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp227),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a></dd>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</dl>
					<?php if ($_smarty_tpl->tpl_vars['cfg_subway_state']->value) {?>
					<dl class="fn-clear">
						<dt>
							<h2 class="title">
								<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['cfg_subway_title']->value;?>
</a>
							</h2>
						</dt>
						<dd class="fn-clear">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['cityid'];?>
<?php $_tmp228=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"subway",'return'=>'sub','city'=>$_tmp228)); $_block_repeat=true; echo siteConfig(array('action'=>"subway",'return'=>'sub','city'=>$_tmp228), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
<?php $_tmp229=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>$_tmp229),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</a>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"subway",'return'=>'sub','city'=>$_tmp228), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</dd>
					</dl>
					<?php }?>
				</div>
			</div>

			<div class="list">
				<dl class="fn-clear one-list">
					<dt class="fn-clear"><span>价格</span></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp230=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp231=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp232=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp233=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp234=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp235=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp236=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp237=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp238=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp239=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp240=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp241=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp242=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp230,'business'=>$_tmp231,'subway'=>$_tmp232,'station'=>$_tmp233,'price'=>'','typeid'=>$_tmp234,'salestate'=>$_tmp235,'times'=>$_tmp236,'zhuangxiu'=>$_tmp237,'buildtype'=>$_tmp238,'tuandate'=>$_tmp239,'filter'=>$_tmp240,'keywords'=>$_tmp241,'param'=>$_tmp242),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp243=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp244=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp245=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp246=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp247=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp248=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp249=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp250=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp251=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp252=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp253=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp254=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp255=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp256=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp257=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp243,'business'=>$_tmp244,'subway'=>$_tmp245,'station'=>$_tmp246,'price'=>"0,8",'typeid'=>$_tmp247,'salestate'=>$_tmp248,'times'=>$_tmp249,'zhuangxiu'=>$_tmp250,'buildtype'=>$_tmp251,'tuandate'=>$_tmp254,'filter'=>$_tmp255,'keywords'=>$_tmp256,'param'=>$_tmp257),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=="0,8") {?> class="curr"<?php }?>>8千以下</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp258=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp259=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp260=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp261=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp262=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp263=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp264=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp265=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp266=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp267=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp268=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp269=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp270=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp258,'business'=>$_tmp259,'subway'=>$_tmp260,'station'=>$_tmp261,'price'=>"8,10",'typeid'=>$_tmp262,'salestate'=>$_tmp263,'times'=>$_tmp264,'zhuangxiu'=>$_tmp265,'buildtype'=>$_tmp266,'tuandate'=>$_tmp267,'filter'=>$_tmp268,'keywords'=>$_tmp269,'param'=>$_tmp270),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=="8,10") {?> class="curr"<?php }?>>8千-1万</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp271=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp272=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp273=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp274=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp275=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp276=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp277=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp278=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp279=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp280=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp281=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp282=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp283=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp271,'business'=>$_tmp272,'subway'=>$_tmp273,'station'=>$_tmp274,'price'=>"10,15",'typeid'=>$_tmp275,'salestate'=>$_tmp276,'times'=>$_tmp277,'zhuangxiu'=>$_tmp278,'buildtype'=>$_tmp279,'tuandate'=>$_tmp280,'filter'=>$_tmp281,'keywords'=>$_tmp282,'param'=>$_tmp283),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=="10,15") {?> class="curr"<?php }?>>1-1.5万</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp284=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp285=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp286=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp287=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp288=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp289=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp290=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp291=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp292=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp293=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp294=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp295=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp296=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp284,'business'=>$_tmp285,'subway'=>$_tmp286,'station'=>$_tmp287,'price'=>"15,20",'typeid'=>$_tmp288,'salestate'=>$_tmp289,'times'=>$_tmp290,'zhuangxiu'=>$_tmp291,'buildtype'=>$_tmp292,'tuandate'=>$_tmp293,'filter'=>$_tmp294,'keywords'=>$_tmp295,'param'=>$_tmp296),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=="15,20") {?> class="curr"<?php }?>>1.5-2万</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp297=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp298=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp299=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp300=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp301=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp302=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp303=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp304=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp305=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp306=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp307=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp308=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp309=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp297,'business'=>$_tmp298,'subway'=>$_tmp299,'station'=>$_tmp300,'price'=>"25,30",'typeid'=>$_tmp301,'salestate'=>$_tmp302,'times'=>$_tmp303,'zhuangxiu'=>$_tmp304,'buildtype'=>$_tmp305,'tuandate'=>$_tmp306,'filter'=>$_tmp307,'keywords'=>$_tmp308,'param'=>$_tmp309),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=="25,30") {?> class="curr"<?php }?>>2.5-3万</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp310=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp311=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp312=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp313=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp314=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp315=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp316=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp317=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp318=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp319=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp320=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp321=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp322=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp310,'business'=>$_tmp311,'subway'=>$_tmp312,'station'=>$_tmp313,'price'=>"30,0",'typeid'=>$_tmp314,'salestate'=>$_tmp315,'times'=>$_tmp316,'zhuangxiu'=>$_tmp317,'buildtype'=>$_tmp318,'tuandate'=>$_tmp319,'filter'=>$_tmp320,'keywords'=>$_tmp321,'param'=>$_tmp322),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=="30,0") {?> class="curr"<?php }?>>3万以上</a></dd>
				</dl>
			</div>
			<div class="list">
				<dl class="fn-clear one-list">
					<dt class="fn-clear"><span>类型</span><i></i></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp323=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp324=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp325=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp326=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp327=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp328=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp329=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp330=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp331=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp332=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp333=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp334=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp335=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp323,'business'=>$_tmp324,'subway'=>$_tmp325,'station'=>$_tmp326,'price'=>$_tmp327,'typeid'=>0,'salestate'=>$_tmp328,'times'=>$_tmp329,'zhuangxiu'=>$_tmp330,'buildtype'=>$_tmp331,'tuandate'=>$_tmp332,'filter'=>$_tmp333,'keywords'=>$_tmp334,'param'=>$_tmp335),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['typeid']->value==0) {?> class="curr"<?php }?>>不限</a></dd>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"item",'return'=>"item",'type'=>"1")); $_block_repeat=true; echo house(array('action'=>"item",'return'=>"item",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp336=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp337=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp338=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp339=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp340=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php $_tmp341=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['salestate']->value;?>
<?php $_tmp342=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['times']->value;?>
<?php $_tmp343=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp344=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildtype']->value;?>
<?php $_tmp345=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tuandate']->value;?>
<?php $_tmp346=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
<?php $_tmp347=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp348=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp349=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp336,'business'=>$_tmp337,'subway'=>$_tmp338,'station'=>$_tmp339,'price'=>$_tmp340,'typeid'=>$_tmp341,'salestate'=>$_tmp342,'times'=>$_tmp343,'zhuangxiu'=>$_tmp344,'buildtype'=>$_tmp345,'tuandate'=>$_tmp346,'filter'=>$_tmp347,'keywords'=>$_tmp348,'param'=>$_tmp349),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?> class="curr"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['typename'];?>
</a></dd>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"item",'return'=>"item",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</dl>
			</div>

		</div>

	</div>
	<div class="buy-middle">
		<ul class="fn-clear">

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"6",'page'=>1,'filter'=>"tuan")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"6",'page'=>1,'filter'=>"tuan"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
				<p class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
				<p class="p1"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span>¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span>/m&sup2;</span></a></p>
				<p class="p2">
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
						<span class="num"><?php echo $_smarty_tpl->tpl_vars['list']->value['tuanCount'];?>
</span>
						<span class="people">人报名</span>
					</a>
				</p>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"6",'page'=>1,'filter'=>"tuan"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>
	<!--报名组团看房-->
	<div class="buy-right">
		<form action="" class="form-input" id="loginForm" onsubmit="return false">
			<div class="see">
				<h3>报名组团看房</h3>
				<div class="type">
					<p>意向楼盘</p>
					<div class="see-down">
						<div class="mbox">
						<span class="selectType" >
							<a title="" href="javascript:;" class="ipt"  id="selectTypeText">请选择</a>
							<span id="selectTypeMenu">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>"loupan",'filter'=>"tuan",'pageSize'=>"9999")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>"loupan",'filter'=>"tuan",'pageSize'=>"9999"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<a rel="0" title="" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['loupan']->value['title'];?>
</a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>"loupan",'filter'=>"tuan",'pageSize'=>"9999"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</span>
							<input type="hidden" name="" class="ipt" value="" id="selectTypeRel">
							<em class="searchArrow hh abs">下拉选择</em>
						</span>
					</div>

					</div>
				</div>
				<div class="name name-form fn-clear">
					<p>姓名</p>
					<input type="text" class="name-text nickname">
				</div>
				<div class="name number fn-clear">
					<p>手机号码</p>
					<input type="text" class="tel-text">
					<span class="num-tip fn-hide"></span>
				</div>
				<div class="name code fn-clear">
					<p>验证码</p>
					<input type="text" class="number" id="number">
					<button class="gain sendvdimgck">获取</button>
					<!-- <a href="javascript:;" class="djs3"></a> -->
				</div>
				<div class="book"><input type="submit" value="预约免费看房" class="booking" id="loginForm"></div>
			</div>
		</form>

		<div class="add">已累计<span>52</span>人报名参加</div>
		<div class="join">
			<div class="txtMarquee-top">
				<div class="bd">
					<ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>'bookingList','return'=>'list','pageSize'=>"9")); $_block_repeat=true; echo house(array('action'=>'bookingList','return'=>'list','pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li><a href="javascript:;"><p><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['name'],0,1);?>
**报名了 <span><?php echo $_smarty_tpl->tpl_vars['list']->value['loupan'];?>
</span></p></a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>'bookingList','return'=>'list','pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--报名组团看房 e-->
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告七"),$_smarty_tpl);?>

</div>
<!--&lt;!&ndash; 广告位 &ndash;&gt;-->
<!--<div class="ad-con">-->
<!--</div>-->
<!-- 新盘推荐 -->
<div class="buy-wrap intro-wrap wrap fn-clear">
	<div class="buy-title">
		<div class="title-left fn-clear">
			<h3>新盘推荐</h3>
		</div>
		<div class="title-right fn-clear">
			<ul class="fn-clear">
				<li class="active"><a href="">最新开盘</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'','zhuangxiu'=>'','buildtype'=>'','tuandate'=>'','filter'=>"hot"),$_smarty_tpl);?>
">热销楼盘</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'','zhuangxiu'=>'','buildtype'=>'','tuandate'=>'','filter'=>"rec"),$_smarty_tpl);?>
">推荐楼盘</a></li>

			</ul>
		</div>
	</div>
	<div class="intro-left">
		<div class="scroll-wrap">
			<h4>最新开盘</h4>
			<div class="scroll-box">

				<div class="scroll">
					<p class="scroll-time">
						<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-01.png" alt="">
						<span>今日</span>
						<em></em>
					</p>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"today")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"today"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p class="loc">
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="location"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="area">¥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
元/m&sup2;</span></a>
					</p>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"today"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				</div>

				<div class="scroll">
					<p class="scroll-time">
						<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-01.png" alt="">
						<span>昨日</span>
						<em></em>
					</p>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"yesterday")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"yesterday"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p class="loc">
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="location"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="area">¥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
元/m&sup2;</span></a>
					</p>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"yesterday"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				</div>

				<div class="scroll">
					<p class="scroll-time">
						<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-01.png" alt="">
						<span>本月</span>
						<em></em>
					</p>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"tmonth")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"tmonth"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p class="loc">
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="location"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="area">¥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
元/m&sup2;</span></a>
					</p>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"tmonth"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				</div>
				<div class="scroll">
					<p class="scroll-time">
						<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-01.png" alt="">
						<span>上一月</span>
						<em></em>
					</p>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"lmonth")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"lmonth"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p class="loc">
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="location"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="area">¥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
元/m&sup2;</span></a>
					</p>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"lmonth"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
				<div class="scroll">
					<p class="scroll-time">
						<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/intro-01.png" alt="">
						<span>下月</span>
						<em></em>
					</p>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"nmonth")); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"nmonth"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p class="loc">
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="location"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span class="area">¥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
元/m&sup2;</span></a>
					</p>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"3",'page'=>1,'orderby'=>4,'times'=>"nmonth"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>

			</div>
		</div>

	</div>
	<div class="buy-middle">
		<ul class="fn-clear">

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanList",'return'=>'list','pageSize'=>"6",'page'=>1,'orderby'=>4)); $_block_repeat=true; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"6",'page'=>1,'orderby'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
				<p class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
				<p class="p1"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span>¥</span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
<span>/m&sup2;</span></a></p>
				<p class="new-loc">
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'][2];?>
</a>
				</p>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanList",'return'=>'list','pageSize'=>"6",'page'=>1,'orderby'=>4), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		</ul>
	</div>
	<div class="intro-right">
		<div class="state">
			<div class="state-title fn-clear">
				<h4>楼盘动态</h4>
				<a href="<?php echo getUrlPath(array('service'=>"house",'templates'=>"loupan"),$_smarty_tpl);?>
">更多&gt;&gt;</a>
			</div>
			<div class="state-text">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"loupanNewsList",'return'=>"list",'rand'=>"1",'page'=>"1",'pageSize'=>"12")); $_block_repeat=true; echo house(array('action'=>"loupanNewsList",'return'=>"list",'rand'=>"1",'page'=>"1",'pageSize'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p><span>• </span><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"loupanNewsList",'return'=>"list",'rand'=>"1",'page'=>"1",'pageSize'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告八"),$_smarty_tpl);?>

</div>
<!-- 广告位 -->
<!--<div class="ad-con">-->
<!--</div>-->
<!-- 二手房 -->
<div class="buy-wrap buy-two wrap fn-clear">
	<div class="buy-title">
		<div class="title-left fn-clear">
			<h3>二手房</h3>
		</div>
		<div class="title-right fn-clear">
			<ul class="fn-clear">
				<li class="active"><a href="javascript:;">推荐二手房</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'community'),$_smarty_tpl);?>
">找小区</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store'),$_smarty_tpl);?>
">中介公司</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'broker'),$_smarty_tpl);?>
">找经纪人</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map-sale'),$_smarty_tpl);?>
">地图找房</a></li>
			</ul>
			<div class="sou">
				<input class="text sale2_key" type="text" value="搜索二手房源..." onfocus="if(this.value=='搜索二手房源...')this.value='';" onblur="if(this.value=='')this.value='搜索二手房源...';">
				<input class="submit sale2_search" type="submit" value="搜索">
			</div>
		</div>

	</div>
	<div class="buy-left find-left">

		<div class="left-con">
			<div class="list">
				<dl class="fn-clear one-list">
					<dt class="fn-clear"><span>区域</span><i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt=""></i></dt>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['i']->value<7) {?>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp350=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp350),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a>&nbsp;</dd>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php echo $_smarty_tpl->tpl_vars['i']->value==null;?>

				</dl>
				<div class="two-list">
					<dl class="fn-clear">
						<dt class="fn-clear"><span>所有区域</span></dt>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp351=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>$_tmp351),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a></dd>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</dl>

				</div>
			</div>
			<div class="list">
				<dl class="fn-clear one-list">
					<dt class="fn-clear"><span>总价</span><i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt=""></i></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp352=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp353=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp354=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp355=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp356=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp357=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp358=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp359=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp360=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp361=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp362=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp363=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp364=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp352,'business'=>$_tmp353,'subway'=>$_tmp354,'station'=>$_tmp355,'price'=>'','area'=>$_tmp356,'room'=>$_tmp357,'direction'=>$_tmp358,'buildage'=>$_tmp359,'floor'=>$_tmp360,'zhuangxiu'=>$_tmp361,'flags'=>$_tmp362,'keywords'=>$_tmp363,'param'=>$_tmp364),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp365=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp366=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp367=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp368=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp369=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp370=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp371=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp372=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp373=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp374=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp375=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp376=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp377=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp365,'business'=>$_tmp366,'subway'=>$_tmp367,'station'=>$_tmp368,'price'=>',100','area'=>$_tmp369,'room'=>$_tmp370,'direction'=>$_tmp371,'buildage'=>$_tmp372,'floor'=>$_tmp373,'zhuangxiu'=>$_tmp374,'flags'=>$_tmp375,'keywords'=>$_tmp376,'param'=>$_tmp377),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value==',100') {?> class="curr"<?php }?>>100万以下</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp378=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp379=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp380=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp381=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp382=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp383=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp384=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp385=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp386=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp387=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp388=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp389=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp390=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp378,'business'=>$_tmp379,'subway'=>$_tmp380,'station'=>$_tmp381,'price'=>'100,150','area'=>$_tmp382,'room'=>$_tmp383,'direction'=>$_tmp384,'buildage'=>$_tmp385,'floor'=>$_tmp386,'zhuangxiu'=>$_tmp387,'flags'=>$_tmp388,'keywords'=>$_tmp389,'param'=>$_tmp390),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='100,150') {?> class="curr"<?php }?>>100-150万</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp391=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp392=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp393=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp394=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp395=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp396=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp397=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp398=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp399=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp400=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp401=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp402=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp403=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp391,'business'=>$_tmp392,'subway'=>$_tmp393,'station'=>$_tmp394,'price'=>'150,200','area'=>$_tmp395,'room'=>$_tmp396,'direction'=>$_tmp397,'buildage'=>$_tmp398,'floor'=>$_tmp399,'zhuangxiu'=>$_tmp400,'flags'=>$_tmp401,'keywords'=>$_tmp402,'param'=>$_tmp403),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='150,200') {?> class="curr"<?php }?>>150-200万</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp404=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp405=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp406=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp407=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp408=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp409=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp410=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp411=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp412=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp413=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp414=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp415=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp416=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp404,'business'=>$_tmp405,'subway'=>$_tmp406,'station'=>$_tmp407,'price'=>'200,250','area'=>$_tmp408,'room'=>$_tmp409,'direction'=>$_tmp410,'buildage'=>$_tmp411,'floor'=>$_tmp412,'zhuangxiu'=>$_tmp413,'flags'=>$_tmp414,'keywords'=>$_tmp415,'param'=>$_tmp416),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='200,250') {?> class="curr"<?php }?>>200-250万</a></dd>

                </dl>
				<div class="two-list">
					<dl class="fn-clear">
						<dt class="fn-clear"><span>所有价格</span></dt>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp417=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp418=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp419=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp420=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp421=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp422=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp423=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp424=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp425=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp426=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp427=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp428=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp429=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp417,'business'=>$_tmp418,'subway'=>$_tmp419,'station'=>$_tmp420,'price'=>'','area'=>$_tmp421,'room'=>$_tmp422,'direction'=>$_tmp423,'buildage'=>$_tmp424,'floor'=>$_tmp425,'zhuangxiu'=>$_tmp426,'flags'=>$_tmp427,'keywords'=>$_tmp428,'param'=>$_tmp429),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp430=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp431=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp432=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp433=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp434=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp435=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp436=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp437=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp438=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp439=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp440=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp441=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp442=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp430,'business'=>$_tmp431,'subway'=>$_tmp432,'station'=>$_tmp433,'price'=>',100','area'=>$_tmp434,'room'=>$_tmp435,'direction'=>$_tmp436,'buildage'=>$_tmp437,'floor'=>$_tmp438,'zhuangxiu'=>$_tmp439,'flags'=>$_tmp440,'keywords'=>$_tmp441,'param'=>$_tmp442),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value==',100') {?> class="curr"<?php }?>>100万以下</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp443=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp444=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp445=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp446=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp447=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp448=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp449=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp450=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp451=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp452=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp453=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp454=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp455=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp443,'business'=>$_tmp444,'subway'=>$_tmp445,'station'=>$_tmp446,'price'=>'100,150','area'=>$_tmp447,'room'=>$_tmp448,'direction'=>$_tmp449,'buildage'=>$_tmp450,'floor'=>$_tmp451,'zhuangxiu'=>$_tmp452,'flags'=>$_tmp453,'keywords'=>$_tmp454,'param'=>$_tmp455),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='100,150') {?> class="curr"<?php }?>>100-150万</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp456=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp457=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp458=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp459=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp460=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp461=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp462=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp463=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp464=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp465=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp466=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp467=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp468=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp456,'business'=>$_tmp457,'subway'=>$_tmp458,'station'=>$_tmp459,'price'=>'150,200','area'=>$_tmp460,'room'=>$_tmp461,'direction'=>$_tmp462,'buildage'=>$_tmp463,'floor'=>$_tmp464,'zhuangxiu'=>$_tmp465,'flags'=>$_tmp466,'keywords'=>$_tmp467,'param'=>$_tmp468),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='150,200') {?> class="curr"<?php }?>>150-200万</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp469=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp470=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp471=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp472=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp473=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp474=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp475=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp476=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp477=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp478=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp479=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp480=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp481=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp469,'business'=>$_tmp470,'subway'=>$_tmp471,'station'=>$_tmp472,'price'=>'200,250','area'=>$_tmp473,'room'=>$_tmp474,'direction'=>$_tmp475,'buildage'=>$_tmp476,'floor'=>$_tmp477,'zhuangxiu'=>$_tmp478,'flags'=>$_tmp479,'keywords'=>$_tmp480,'param'=>$_tmp481),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='200,250') {?> class="curr"<?php }?>>200-250万</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp482=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp483=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp484=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp485=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp486=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp487=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp488=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp489=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp490=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp491=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp492=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp493=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp494=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp482,'business'=>$_tmp483,'subway'=>$_tmp484,'station'=>$_tmp485,'price'=>'250,300','area'=>$_tmp486,'room'=>$_tmp487,'direction'=>$_tmp488,'buildage'=>$_tmp489,'floor'=>$_tmp490,'zhuangxiu'=>$_tmp491,'flags'=>$_tmp492,'keywords'=>$_tmp493,'param'=>$_tmp494),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='250,300') {?> class="curr"<?php }?>>250-300万</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp495=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp496=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp497=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp498=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp499=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp500=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp501=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp502=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp503=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp504=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp505=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp506=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp507=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp495,'business'=>$_tmp496,'subway'=>$_tmp497,'station'=>$_tmp498,'price'=>'300,500','area'=>$_tmp499,'room'=>$_tmp500,'direction'=>$_tmp501,'buildage'=>$_tmp502,'floor'=>$_tmp503,'zhuangxiu'=>$_tmp504,'flags'=>$_tmp505,'keywords'=>$_tmp506,'param'=>$_tmp507),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='300,500') {?> class="curr"<?php }?>>300-500万</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp508=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp509=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp510=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp511=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp512=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp513=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp514=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp515=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp516=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp517=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp518=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp519=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp520=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp508,'business'=>$_tmp509,'subway'=>$_tmp510,'station'=>$_tmp511,'price'=>'500,1000','area'=>$_tmp512,'room'=>$_tmp513,'direction'=>$_tmp514,'buildage'=>$_tmp515,'floor'=>$_tmp516,'zhuangxiu'=>$_tmp517,'flags'=>$_tmp518,'keywords'=>$_tmp519,'param'=>$_tmp520),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='500,1000') {?> class="curr"<?php }?>>500-1000万</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp521=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp522=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp523=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp524=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp525=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp526=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp527=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp528=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp529=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp530=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp531=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp532=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp533=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp521,'business'=>$_tmp522,'subway'=>$_tmp523,'station'=>$_tmp524,'price'=>'1000,','area'=>$_tmp525,'room'=>$_tmp526,'direction'=>$_tmp527,'buildage'=>$_tmp528,'floor'=>$_tmp529,'zhuangxiu'=>$_tmp530,'flags'=>$_tmp531,'keywords'=>$_tmp532,'param'=>$_tmp533),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='1000,') {?> class="curr"<?php }?>>1000万以上</a></dd>

                    </dl>
				</div>
			</div>
			<div class="list">
				<dl class="fn-clear one-list">
					<dt class="fn-clear"><span>面积</span><i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt=""></i></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp534=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp535=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp536=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp537=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp538=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp539=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp540=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp541=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp542=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp543=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp544=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp545=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp546=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp534,'business'=>$_tmp535,'subway'=>$_tmp536,'station'=>$_tmp537,'price'=>$_tmp538,'area'=>'','room'=>$_tmp539,'direction'=>$_tmp540,'buildage'=>$_tmp541,'floor'=>$_tmp542,'zhuangxiu'=>$_tmp543,'flags'=>$_tmp544,'keywords'=>$_tmp545,'param'=>$_tmp546),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp547=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp548=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp549=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp550=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp551=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp552=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp553=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp554=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp555=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp556=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp557=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp558=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp559=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp547,'business'=>$_tmp548,'subway'=>$_tmp549,'station'=>$_tmp550,'price'=>$_tmp551,'area'=>',50','room'=>$_tmp552,'direction'=>$_tmp553,'buildage'=>$_tmp554,'floor'=>$_tmp555,'zhuangxiu'=>$_tmp556,'flags'=>$_tmp557,'keywords'=>$_tmp558,'param'=>$_tmp559),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value==',50') {?> class="curr"<?php }?>>50㎡以下</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp560=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp561=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp562=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp563=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp564=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp565=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp566=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp567=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp568=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp569=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp570=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp571=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp572=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp560,'business'=>$_tmp561,'subway'=>$_tmp562,'station'=>$_tmp563,'price'=>$_tmp564,'area'=>'50,70','room'=>$_tmp565,'direction'=>$_tmp566,'buildage'=>$_tmp567,'floor'=>$_tmp568,'zhuangxiu'=>$_tmp569,'flags'=>$_tmp570,'keywords'=>$_tmp571,'param'=>$_tmp572),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='50,70') {?> class="curr"<?php }?>>50-70㎡</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp573=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp574=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp575=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp576=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp577=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp578=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp579=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp580=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp581=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp582=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp583=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp584=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp585=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp573,'business'=>$_tmp574,'subway'=>$_tmp575,'station'=>$_tmp576,'price'=>$_tmp577,'area'=>'70,90','room'=>$_tmp578,'direction'=>$_tmp579,'buildage'=>$_tmp580,'floor'=>$_tmp581,'zhuangxiu'=>$_tmp582,'flags'=>$_tmp583,'keywords'=>$_tmp584,'param'=>$_tmp585),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='70,90') {?> class="curr"<?php }?>>70-90㎡</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp586=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp587=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp588=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp589=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp590=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp591=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp592=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp593=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp594=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp595=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp596=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp597=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp598=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp586,'business'=>$_tmp587,'subway'=>$_tmp588,'station'=>$_tmp589,'price'=>$_tmp590,'area'=>'90,110','room'=>$_tmp591,'direction'=>$_tmp592,'buildage'=>$_tmp593,'floor'=>$_tmp594,'zhuangxiu'=>$_tmp595,'flags'=>$_tmp596,'keywords'=>$_tmp597,'param'=>$_tmp598),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='90,110') {?> class="curr"<?php }?>>90-110㎡</a></dd>

                </dl>
				<div class="two-list">
					<dl class="fn-clear">
						<dt class="fn-clear"><span>所有面积</span></dt>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp599=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp600=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp601=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp602=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp603=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp604=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp605=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp606=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp607=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp608=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp609=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp610=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp611=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp599,'business'=>$_tmp600,'subway'=>$_tmp601,'station'=>$_tmp602,'price'=>$_tmp603,'area'=>'','room'=>$_tmp604,'direction'=>$_tmp605,'buildage'=>$_tmp606,'floor'=>$_tmp607,'zhuangxiu'=>$_tmp608,'flags'=>$_tmp609,'keywords'=>$_tmp610,'param'=>$_tmp611),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp612=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp613=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp614=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp615=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp616=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp617=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp618=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp619=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp620=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp621=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp622=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp623=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp624=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp612,'business'=>$_tmp613,'subway'=>$_tmp614,'station'=>$_tmp615,'price'=>$_tmp616,'area'=>',50','room'=>$_tmp617,'direction'=>$_tmp618,'buildage'=>$_tmp619,'floor'=>$_tmp620,'zhuangxiu'=>$_tmp621,'flags'=>$_tmp622,'keywords'=>$_tmp623,'param'=>$_tmp624),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value==',50') {?> class="curr"<?php }?>>50㎡以下</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp625=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp626=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp627=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp628=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp629=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp630=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp631=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp632=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp633=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp634=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp635=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp636=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp637=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp625,'business'=>$_tmp626,'subway'=>$_tmp627,'station'=>$_tmp628,'price'=>$_tmp629,'area'=>'50,70','room'=>$_tmp630,'direction'=>$_tmp631,'buildage'=>$_tmp632,'floor'=>$_tmp633,'zhuangxiu'=>$_tmp634,'flags'=>$_tmp635,'keywords'=>$_tmp636,'param'=>$_tmp637),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='50,70') {?> class="curr"<?php }?>>50-70㎡</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp638=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp639=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp640=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp641=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp642=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp643=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp644=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp645=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp646=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp647=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp648=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp649=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp650=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp638,'business'=>$_tmp639,'subway'=>$_tmp640,'station'=>$_tmp641,'price'=>$_tmp642,'area'=>'70,90','room'=>$_tmp643,'direction'=>$_tmp644,'buildage'=>$_tmp645,'floor'=>$_tmp646,'zhuangxiu'=>$_tmp647,'flags'=>$_tmp648,'keywords'=>$_tmp649,'param'=>$_tmp650),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='70,90') {?> class="curr"<?php }?>>70-90㎡</a></dd>
						<dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp651=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp652=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp653=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp654=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp655=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp656=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp657=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp658=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp659=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp660=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp661=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp662=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp663=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp651,'business'=>$_tmp652,'subway'=>$_tmp653,'station'=>$_tmp654,'price'=>$_tmp655,'area'=>'90,110','room'=>$_tmp656,'direction'=>$_tmp657,'buildage'=>$_tmp658,'floor'=>$_tmp659,'zhuangxiu'=>$_tmp660,'flags'=>$_tmp661,'keywords'=>$_tmp662,'param'=>$_tmp663),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='90,110') {?> class="curr"<?php }?>>90-110㎡</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp664=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp665=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp666=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp667=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp668=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp669=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp670=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp671=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp672=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp673=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp674=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp675=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp676=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp664,'business'=>$_tmp665,'subway'=>$_tmp666,'station'=>$_tmp667,'price'=>$_tmp668,'area'=>'110,150','room'=>$_tmp669,'direction'=>$_tmp670,'buildage'=>$_tmp671,'floor'=>$_tmp672,'zhuangxiu'=>$_tmp673,'flags'=>$_tmp674,'keywords'=>$_tmp675,'param'=>$_tmp676),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='110,150') {?> class="curr"<?php }?>>110-150㎡</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp677=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp678=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp679=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp680=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp681=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp682=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp683=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp684=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp685=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp686=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp687=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp688=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp689=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp677,'business'=>$_tmp678,'subway'=>$_tmp679,'station'=>$_tmp680,'price'=>$_tmp681,'area'=>'150,200','room'=>$_tmp682,'direction'=>$_tmp683,'buildage'=>$_tmp684,'floor'=>$_tmp685,'zhuangxiu'=>$_tmp686,'flags'=>$_tmp687,'keywords'=>$_tmp688,'param'=>$_tmp689),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='150,200') {?> class="curr"<?php }?>>150-200㎡</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp690=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp691=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp692=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp693=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp694=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp695=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp696=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp697=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp698=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp699=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp700=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp701=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp702=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp690,'business'=>$_tmp691,'subway'=>$_tmp692,'station'=>$_tmp693,'price'=>$_tmp694,'area'=>'200,300','room'=>$_tmp695,'direction'=>$_tmp696,'buildage'=>$_tmp697,'floor'=>$_tmp698,'zhuangxiu'=>$_tmp699,'flags'=>$_tmp700,'keywords'=>$_tmp701,'param'=>$_tmp702),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='200,300') {?> class="curr"<?php }?>>200-300㎡</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp703=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp704=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp705=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp706=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp707=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp708=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp709=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp710=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp711=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp712=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp713=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp714=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp715=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp703,'business'=>$_tmp704,'subway'=>$_tmp705,'station'=>$_tmp706,'price'=>$_tmp707,'area'=>'300,','room'=>$_tmp708,'direction'=>$_tmp709,'buildage'=>$_tmp710,'floor'=>$_tmp711,'zhuangxiu'=>$_tmp712,'flags'=>$_tmp713,'keywords'=>$_tmp714,'param'=>$_tmp715),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['area']->value=='300,') {?> class="curr"<?php }?>>300㎡以上</a></dd>

					</dl>
				</div>
			</div>
			<div class="list">
				<dl class="fn-clear one-list" style="padding-bottom: 37px;">
					<dt class="fn-clear"><span>户型</span></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp716=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp717=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp718=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp719=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp720=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp721=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp722=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp723=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp724=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp725=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp726=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp727=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp728=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp716,'business'=>$_tmp717,'subway'=>$_tmp718,'station'=>$_tmp719,'price'=>$_tmp720,'area'=>$_tmp721,'room'=>'','direction'=>$_tmp722,'buildage'=>$_tmp723,'floor'=>$_tmp724,'zhuangxiu'=>$_tmp725,'flags'=>$_tmp726,'keywords'=>$_tmp727,'param'=>$_tmp728),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp729=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp730=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp731=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp732=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp733=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp734=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp735=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp736=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp737=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp738=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp739=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp740=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp741=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp729,'business'=>$_tmp730,'subway'=>$_tmp731,'station'=>$_tmp732,'price'=>$_tmp733,'area'=>$_tmp734,'room'=>'1','direction'=>$_tmp735,'buildage'=>$_tmp736,'floor'=>$_tmp737,'zhuangxiu'=>$_tmp738,'flags'=>$_tmp739,'keywords'=>$_tmp740,'param'=>$_tmp741),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='1') {?> class="curr"<?php }?>>一居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp742=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp743=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp744=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp745=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp746=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp747=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp748=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp749=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp750=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp751=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp752=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp753=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp754=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp742,'business'=>$_tmp743,'subway'=>$_tmp744,'station'=>$_tmp745,'price'=>$_tmp746,'area'=>$_tmp747,'room'=>'2','direction'=>$_tmp748,'buildage'=>$_tmp749,'floor'=>$_tmp750,'zhuangxiu'=>$_tmp751,'flags'=>$_tmp752,'keywords'=>$_tmp753,'param'=>$_tmp754),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='2') {?> class="curr"<?php }?>>二居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp755=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp756=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp757=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp758=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp759=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp760=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp761=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp762=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp763=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp764=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp765=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp766=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp767=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp755,'business'=>$_tmp756,'subway'=>$_tmp757,'station'=>$_tmp758,'price'=>$_tmp759,'area'=>$_tmp760,'room'=>'3','direction'=>$_tmp761,'buildage'=>$_tmp762,'floor'=>$_tmp763,'zhuangxiu'=>$_tmp764,'flags'=>$_tmp765,'keywords'=>$_tmp766,'param'=>$_tmp767),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='3') {?> class="curr"<?php }?>>三居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp768=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp769=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp770=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp771=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp772=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp773=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp774=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp775=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp776=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp777=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp778=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp779=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp780=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp768,'business'=>$_tmp769,'subway'=>$_tmp770,'station'=>$_tmp771,'price'=>$_tmp772,'area'=>$_tmp773,'room'=>'4','direction'=>$_tmp774,'buildage'=>$_tmp775,'floor'=>$_tmp776,'zhuangxiu'=>$_tmp777,'flags'=>$_tmp778,'keywords'=>$_tmp779,'param'=>$_tmp780),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='4') {?> class="curr"<?php }?>>四居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp781=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp782=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp783=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp784=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp785=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp786=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp787=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp788=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp789=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp790=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp791=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp792=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp793=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp781,'business'=>$_tmp782,'subway'=>$_tmp783,'station'=>$_tmp784,'price'=>$_tmp785,'area'=>$_tmp786,'room'=>'5','direction'=>$_tmp787,'buildage'=>$_tmp788,'floor'=>$_tmp789,'zhuangxiu'=>$_tmp790,'flags'=>$_tmp791,'keywords'=>$_tmp792,'param'=>$_tmp793),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='5') {?> class="curr"<?php }?>>五居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp794=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp795=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp796=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp797=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp798=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
<?php $_tmp799=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
<?php $_tmp800=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['buildage']->value;?>
<?php $_tmp801=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
<?php $_tmp802=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp803=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['flags']->value;?>
<?php $_tmp804=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp805=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp806=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>$_tmp794,'business'=>$_tmp795,'subway'=>$_tmp796,'station'=>$_tmp797,'price'=>$_tmp798,'area'=>$_tmp799,'room'=>'0','direction'=>$_tmp800,'buildage'=>$_tmp801,'floor'=>$_tmp802,'zhuangxiu'=>$_tmp803,'flags'=>$_tmp804,'keywords'=>$_tmp805,'param'=>$_tmp806),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='0') {?> class="curr"<?php }?>>五居以上</a></dd>
				</dl>
			</div>
		</div>

	</div>
	<div class="buy-middle two-middle">


		<ul class="fn-clear">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"saleList",'return'=>'list','pageSize'=>"6",'page'=>1,'orderby'=>1)); $_block_repeat=true; echo house(array('action'=>"saleList",'return'=>'list','pageSize'=>"6",'page'=>1,'orderby'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
				<p class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,8);?>
</a></p>
				<p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
						<span class="small">￥</span>
						<span class="big"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span>
						<span class="small">万</span>
					</a>
				</p>
				<p class="grey">
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['list']->value['room'];?>
  &nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['area'];?>
平方米
					</a>
				</p>
				<!--<div class="quan">全景</div>-->
				<!--<div class="shipin">视频</div>-->
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"saleList",'return'=>'list','pageSize'=>"6",'page'=>1,'orderby'=>1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		</ul>
	</div>
	<div class="two-right">
		<div class="two-block">
			<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-sale'),$_smarty_tpl);?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/two-01.png" alt="">
				发布二手房
			</a>
		</div>
		<div class="two-block block-r">
			<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=1'),$_smarty_tpl);?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/two-02.png" alt="">
				求购二手房
			</a>
		</div>

		<div class="box-right">
		    <div class="top-box fn-clear">
		      <span class="buy-info">最新求购</span>
		    </div>

			<!-- s -->
			<div class="fn-clear two-slide">
				<div class="slideBox slideBox3">
					<div class="slidewrap">
						<div class="slide">
							<div class="bd">

								<div class="slideshow-item ad0">

									<div class="right-con">
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>'demand','return'=>'demand1','typeid'=>'0','rentype'=>"1",'pageSize'=>"5",'page'=>1)); $_block_repeat=true; echo house(array('action'=>'demand','return'=>'demand1','typeid'=>'0','rentype'=>"1",'pageSize'=>"5",'page'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<div class="fn-clear two-item">
											<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=1'),$_smarty_tpl);?>
">
												<div class="li-left">
													<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['demand1'];?>
.png" alt="">
												</div>
												<div class="li-right">
													<h4><?php echo $_smarty_tpl->tpl_vars['demand1']->value['title'];?>
</h4>
													<p><i></i><?php echo $_smarty_tpl->tpl_vars['demand1']->value['contact'];?>
<span><?php echo $_smarty_tpl->tpl_vars['demand1']->value['pubdate'];?>
</span></p>
												</div>
											</a>
										</div>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>'demand','return'=>'demand1','typeid'=>'0','rentype'=>"1",'pageSize'=>"5",'page'=>1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</div>
								</div>

							</div>
							<div class="hd"><ul></ul></div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告九"),$_smarty_tpl);?>

</div>
<!-- 推荐经纪人 -->
<div class="buy-wrap agent wrap fn-clear">
	<div class="buy-title fn-clear">
		<div class="title-left fn-clear">
			<h3>推荐经纪人</h3>
			<div class="title-r">
				<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config-house'),$_smarty_tpl);?>
"><div class="agent-block1">申请为经纪人</div></a>
				<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'config-house'),$_smarty_tpl);?>
"><div class="agent-block2">入驻中介公司</div></a>
			</div>
		</div>
		<div class="title-right">
		<!-- sss -->
		<div class="fixedwrap FestivalAD_header">
			<div class="fixedpane">
				<div class="searchwrap y-linear">
		        <div class="search">
			        <div class="type">
			          <dl>
			                <dt><a href="javascript:;" class="keytype"> 经纪人 </a><em></em></dt>
			                <dd>
			                  <div class="ModuleBox">
		                          <a href="javascript:;" data-id="0" data-module="info"><span>经纪人</span></a>
		                          <a href="javascript:;" data-id="0" data-module="image"><span>中介公司</span></a>
			                  </div>
			                </dd>
			          </dl>
			        </div>
			        <div class="FormBox">
						<form action="" class="form business">
							<div class="inputbox">
								<div class="inpbox"><input type="text" name="keywords" class="searchkey broker_key" placeholder="搜索经纪人..." value="" /></div>
							</div>
							<input class="submit broker_search" type="submit" value="搜索">
						</form>
						<form action="" class="form image fn-hide">
							<div class="inputbox">
								<div class="inpbox"><input type="text" name="keywords" class="searchkey zhongjiegongsi_key" placeholder="搜索中介公司..." value="" /></div>
							</div>
							<input class="submit zhongjiegongsi_search" type="submit" value="搜索">
						</form>
						<form action="" class="form info fn-hide">
							<div class="inputbox">
								<div class="inpbox"><input type="text" name="keywords" class="searchkey broker_key2" placeholder="搜索经纪人..." /></div>
							</div>
							<input class="submit broker2_search"  type="submit" value="搜索">
						</form>
					</div>
		        </div>
		    </div>
		</div>
		<!-- eee -->
		</div>
	</div>
	</div>



	<div class="agent-left fn-clear">
		<div class="agent-sort">
			<div class="agent-box fn-clear">
				<h4>区域</h4>
				<ul class="fn-clear">
					<li class="red"><a href="javascript:;">不限</a></li>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp807=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'broker','addrid'=>$_tmp807),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
			<div class="agent-box fn-clear">
				<h4>公司</h4>
				<ul class="fn-clear">
					<li class="red"><a href="javascript:;">不限</a></li>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"5")); $_block_repeat=true; echo house(array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['title'];?>
</a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<br>
					<br>
				</ul>
			</div>

		</div>
		<div class="people">
			<ul class="fn-clear">

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjUserList",'return'=>"broker",'pageSize'=>"9")); $_block_repeat=true; echo house(array('action'=>"zjUserList",'return'=>"broker",'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


				<li class="fn-clear">
					<div class="left"><a href="<?php echo $_smarty_tpl->tpl_vars['broker']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['broker']->value['litpic'];?>
" alt=""></a></div>
					<div class="right">
						<p class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['broker']->value['url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['broker']->value['nickname'],0,6);?>
</a></p>
						<p class="tel"><a href="#"><?php echo $_smarty_tpl->tpl_vars['broker']->value['phone'];?>
</a></p>
						<a href="<?php echo $_smarty_tpl->tpl_vars['broker']->value['url'];?>
"><p class="rent">出租<span class="red"><?php echo $_smarty_tpl->tpl_vars['broker']->value['zuCount'];?>
</span>套  出售<span class="red"><?php echo $_smarty_tpl->tpl_vars['broker']->value['saleCount'];?>
</span>套</p></a>
						<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['broker']->value['areaid'];?>
<?php $_tmp808=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['broker']->value['addrid'];?>
<?php $_tmp809=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'broker','addrid'=>$_tmp808,'business'=>$_tmp809),$_smarty_tpl);?>
"><p class="shop">门店：<span><?php echo $_smarty_tpl->tpl_vars['broker']->value['address'][count($_smarty_tpl->tpl_vars['broker']->value['address'])-1];?>
</span></p></a>
					</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjUserList",'return'=>"broker",'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			</ul>
		</div>
	</div>
	<div class="agent-right">
		<div class="bussi-title">
			中介公司
		</div>
			<!-- s -->
			<div class="fn-clear agent-slide">
			    <div class="slideBox slideBox4">
			      <div class="slidewrap">
			        <div class="slide">
			          <div class="bd">
			          	<div class="slideshow-item ad0">
			          		<div class="bussi-box">

								<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"5")); $_block_repeat=true; echo house(array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<div class="bussi-item fn-clear">
									<a href="<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['url'];?>
">
										<div class="item-left">
											<a href="<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['litpic'];?>
" alt=""></a>
										</div>
										<div class="item-right">
											<p class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['title'];?>
</a></p>
											<p class="people"><a href="<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['url'];?>
">经纪人：<span class="red">67</span></a></p>
											<p class="rent"><a href="<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['url'];?>
">出租<span><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['countZu'];?>
</span>&nbsp;  出售<span><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['countSale'];?>
</span>套</a></p>
										</div>
									</a>
								</div>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


							</div>

				        </div>


					</div>
			        <div class="hd"><ul></ul></div>
			        </div>

			      </div>
			    </div>
		  	</div>
			<!-- e -->
		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"房产_模板五_电脑端_广告十"),$_smarty_tpl);?>

</div>
<!-- 出租房 -->
<div class="buy-wrap buy-two wrap fn-clear">
	<div class="buy-title">
		<div class="title-left fn-clear">
			<h3>出租房</h3>
		</div>
		<div class="title-right fn-clear">
			<ul class="fn-clear">
				<li class="active"><a href="javascript:;">推荐出租房</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu'),$_smarty_tpl);?>
">区域找房</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=0'),$_smarty_tpl);?>
">求租房</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'community'),$_smarty_tpl);?>
">找小区</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map-zu'),$_smarty_tpl);?>
">地图找房</a></li>

			</ul>
			<div class="sou">
				<form action="" method="get">
				<input class="text sale1_key" type="text" value="搜索出租房源..." onfocus="if(this.value=='搜索出租' +
				 '房源...')this.value='';" onblur="if(this.value=='')this.value='搜索出租房源...';">
				<input class="submit sale1_search"  type="submit" value="搜索">
				</form>
			</div>
		</div>

	</div>
	<div class="buy-left find-left">

		<div class="left-con">
            <div class="list">
                <dl class="fn-clear one-list">
                    <dt class="fn-clear"><span>区域</span><i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt=""></i></dt>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['i']->value<7) {?>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp810=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp810),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a>&nbsp;</dd>
                    <?php }?>
                    <span style="display: none;"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php echo $_smarty_tpl->tpl_vars['i']->value==null;?>

                </dl>
                <div class="two-list">
                    <dl class="fn-clear">
                        <dt class="fn-clear"><span>所有区域</span></dt>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo house(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['i']->value>6) {?>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp811=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp811),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a></dd>
                        <?php }?>
                        <span style="display: none;"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php echo $_smarty_tpl->tpl_vars['i']->value==null;?>

                    </dl>

                </div>
            </div>
			<div class="list">
				<dl class="fn-clear one-list">
					<dt class="fn-clear"><span>租金</span><i><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/find-01.png" alt=""></i></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp812=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp813=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp814=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp815=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp816=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp817=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp818=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp819=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp820=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp821=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp812,'business'=>$_tmp813,'subway'=>$_tmp814,'station'=>$_tmp815,'price'=>'','room'=>$_tmp816,'zhuangxiu'=>$_tmp817,'rentype'=>$_tmp818,'type'=>$_tmp819,'keywords'=>$_tmp820,'param'=>$_tmp821),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp822=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp823=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp824=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp825=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp826=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp827=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp828=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp829=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp830=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp831=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp822,'business'=>$_tmp823,'subway'=>$_tmp824,'station'=>$_tmp825,'price'=>',5','room'=>$_tmp826,'zhuangxiu'=>$_tmp827,'rentype'=>$_tmp828,'type'=>$_tmp829,'keywords'=>$_tmp830,'param'=>$_tmp831),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value==',5') {?> class="curr"<?php }?>>500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
以下</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp832=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp833=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp834=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp835=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp836=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp837=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp838=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp839=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp840=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp841=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp832,'business'=>$_tmp833,'subway'=>$_tmp834,'station'=>$_tmp835,'price'=>'5,8','room'=>$_tmp836,'zhuangxiu'=>$_tmp837,'rentype'=>$_tmp838,'type'=>$_tmp839,'keywords'=>$_tmp840,'param'=>$_tmp841),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='5,8') {?> class="curr"<?php }?>>500-800<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp842=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp843=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp844=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp845=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp846=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp847=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp848=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp849=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp850=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp851=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp842,'business'=>$_tmp843,'subway'=>$_tmp844,'station'=>$_tmp845,'price'=>'8,10','room'=>$_tmp846,'zhuangxiu'=>$_tmp847,'rentype'=>$_tmp848,'type'=>$_tmp849,'keywords'=>$_tmp850,'param'=>$_tmp851),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='8,10') {?> class="curr"<?php }?>>800-1000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a></dd>
                    <dd> <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp852=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp853=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp854=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp855=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp856=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp857=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp858=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp859=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp860=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp861=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp852,'business'=>$_tmp853,'subway'=>$_tmp854,'station'=>$_tmp855,'price'=>'10,15','room'=>$_tmp856,'zhuangxiu'=>$_tmp857,'rentype'=>$_tmp858,'type'=>$_tmp859,'keywords'=>$_tmp860,'param'=>$_tmp861),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='10,15') {?> class="curr"<?php }?>>1000-1500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a></dd>

				</dl>
				<div class="two-list">
					<dl class="fn-clear">
						<dt class="fn-clear"><span>所有租金</span></dt>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp862=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp863=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp864=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp865=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp866=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp867=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp868=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp869=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp870=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp871=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp862,'business'=>$_tmp863,'subway'=>$_tmp864,'station'=>$_tmp865,'price'=>'15,20','room'=>$_tmp866,'zhuangxiu'=>$_tmp867,'rentype'=>$_tmp868,'type'=>$_tmp869,'keywords'=>$_tmp870,'param'=>$_tmp871),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='15,20') {?> class="curr"<?php }?>>1500-2000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp872=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp873=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp874=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp875=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp876=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp877=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp878=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp879=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp880=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp881=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp872,'business'=>$_tmp873,'subway'=>$_tmp874,'station'=>$_tmp875,'price'=>'20,30','room'=>$_tmp876,'zhuangxiu'=>$_tmp877,'rentype'=>$_tmp878,'type'=>$_tmp879,'keywords'=>$_tmp880,'param'=>$_tmp881),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='20,30') {?> class="curr"<?php }?>>2000-3000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp882=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp883=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp884=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp885=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp886=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp887=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp888=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp889=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp890=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp891=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp882,'business'=>$_tmp883,'subway'=>$_tmp884,'station'=>$_tmp885,'price'=>'30,50','room'=>$_tmp886,'zhuangxiu'=>$_tmp887,'rentype'=>$_tmp888,'type'=>$_tmp889,'keywords'=>$_tmp890,'param'=>$_tmp891),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='30,50') {?> class="curr"<?php }?>>3000-5000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a></dd>
                        <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp892=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp893=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp894=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp895=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp896=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp897=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp898=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp899=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp900=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp901=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp892,'business'=>$_tmp893,'subway'=>$_tmp894,'station'=>$_tmp895,'price'=>'50,','room'=>$_tmp896,'zhuangxiu'=>$_tmp897,'rentype'=>$_tmp898,'type'=>$_tmp899,'keywords'=>$_tmp900,'param'=>$_tmp901),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['price']->value=='50,') {?> class="curr"<?php }?>>5000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
以上</a></dd>

					</dl>
				</div>
			</div>
			<div class="list">
				<dl class="fn-clear one-list">
					<dt class="fn-clear"><span>户型</span></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp902=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp903=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp904=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp905=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp906=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp907=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp908=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp909=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp910=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp911=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp902,'business'=>$_tmp903,'subway'=>$_tmp904,'station'=>$_tmp905,'price'=>$_tmp906,'room'=>'','zhuangxiu'=>$_tmp907,'rentype'=>$_tmp908,'type'=>$_tmp909,'keywords'=>$_tmp910,'param'=>$_tmp911),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp912=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp913=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp914=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp915=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp916=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp917=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp918=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp919=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp920=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp921=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp912,'business'=>$_tmp913,'subway'=>$_tmp914,'station'=>$_tmp915,'price'=>$_tmp916,'room'=>'1','zhuangxiu'=>$_tmp917,'rentype'=>$_tmp918,'type'=>$_tmp919,'keywords'=>$_tmp920,'param'=>$_tmp921),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='1') {?> class="curr"<?php }?>>一居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp922=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp923=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp924=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp925=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp926=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp927=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp928=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp929=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp930=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp931=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp922,'business'=>$_tmp923,'subway'=>$_tmp924,'station'=>$_tmp925,'price'=>$_tmp926,'room'=>'2','zhuangxiu'=>$_tmp927,'rentype'=>$_tmp928,'type'=>$_tmp929,'keywords'=>$_tmp930,'param'=>$_tmp931),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='2') {?> class="curr"<?php }?>>二居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp932=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp933=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp934=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp935=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp936=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp937=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp938=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp939=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp940=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp941=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp932,'business'=>$_tmp933,'subway'=>$_tmp934,'station'=>$_tmp935,'price'=>$_tmp936,'room'=>'3','zhuangxiu'=>$_tmp937,'rentype'=>$_tmp938,'type'=>$_tmp939,'keywords'=>$_tmp940,'param'=>$_tmp941),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='3') {?> class="curr"<?php }?>>三居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp942=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp943=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp944=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp945=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp946=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp947=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp948=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp949=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp950=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp951=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp942,'business'=>$_tmp943,'subway'=>$_tmp944,'station'=>$_tmp945,'price'=>$_tmp946,'room'=>'4','zhuangxiu'=>$_tmp947,'rentype'=>$_tmp948,'type'=>$_tmp949,'keywords'=>$_tmp950,'param'=>$_tmp951),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='4') {?> class="curr"<?php }?>>四居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp952=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp953=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp954=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp955=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp956=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp957=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp958=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp959=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp960=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp961=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp952,'business'=>$_tmp953,'subway'=>$_tmp954,'station'=>$_tmp955,'price'=>$_tmp956,'room'=>'5','zhuangxiu'=>$_tmp957,'rentype'=>$_tmp958,'type'=>$_tmp959,'keywords'=>$_tmp960,'param'=>$_tmp961),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='5') {?> class="curr"<?php }?>>五居</a></dd>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp962=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp963=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp964=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp965=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp966=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zhuangxiu']->value;?>
<?php $_tmp967=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp968=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp969=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp970=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp971=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp962,'business'=>$_tmp963,'subway'=>$_tmp964,'station'=>$_tmp965,'price'=>$_tmp966,'room'=>'0','zhuangxiu'=>$_tmp967,'rentype'=>$_tmp968,'type'=>$_tmp969,'keywords'=>$_tmp970,'param'=>$_tmp971),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['room']->value=='0') {?> class="curr"<?php }?>>五居以上</a></dd>
				</dl>
			</div>
			<div class="list">
				<dl class="fn-clear one-list" style="padding-bottom: 35px;">
					<dt class="fn-clear"><span>特色</span><i></i></dt>
                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp972=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp973=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp974=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp975=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp976=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp977=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp978=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp979=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp980=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp981=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp972,'business'=>$_tmp973,'subway'=>$_tmp974,'station'=>$_tmp975,'price'=>$_tmp976,'room'=>$_tmp977,'zhuangxiu'=>'','rentype'=>$_tmp978,'type'=>$_tmp979,'keywords'=>$_tmp980,'param'=>$_tmp981),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['zhuangxiu']->value=='') {?> class="curr"<?php }?>>不限</a></dd>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"item",'return'=>"item",'type'=>"2")); $_block_repeat=true; echo house(array('action'=>"item",'return'=>"item",'type'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp982=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp983=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subway']->value;?>
<?php $_tmp984=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['station']->value;?>
<?php $_tmp985=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<?php $_tmp986=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room']->value;?>
<?php $_tmp987=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php $_tmp988=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rentype']->value;?>
<?php $_tmp989=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp990=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp991=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp992=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>$_tmp982,'business'=>$_tmp983,'subway'=>$_tmp984,'station'=>$_tmp985,'price'=>$_tmp986,'room'=>$_tmp987,'zhuangxiu'=>$_tmp988,'rentype'=>$_tmp989,'type'=>$_tmp990,'keywords'=>$_tmp991,'param'=>$_tmp992),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['zhuangxiu']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?> class="curr"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['typename'];?>
</a></dd>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"item",'return'=>"item",'type'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</dl>
			</div>
		</div>

	</div>
	<div class="buy-middle two-middle">
		<ul class="fn-clear">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zuList",'return'=>"list",'pageSize'=>"6")); $_block_repeat=true; echo house(array('action'=>"zuList",'return'=>"list",'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
				<p class="name"><a href="javascript:;"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,14);?>
</a></p>
				<p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
						<span class="small">￥</span>
						<span class="big"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span>
						<span class="small">万</span>
					</a>
				</p>
				<p class="grey">
					<a href="javascript:;">
						<?php echo $_smarty_tpl->tpl_vars['list']->value['room'];?>
  &nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['area'];?>
平方米
					</a>
				</p>

				<?php if ($_smarty_tpl->tpl_vars['list']->value['isquanjing']!=0) {?><div class="quan">全景</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['list']->value['isvideo']!=0) {?><div class="shipin">视频</div><?php }?>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zuList",'return'=>"list",'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>
	<div class="two-right">
		<div class="two-block">
			<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-zu'),$_smarty_tpl);?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/two-01.png" alt="">
				发布出租房
			</a>
		</div>
		<div class="two-block block-r">
			<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=0'),$_smarty_tpl);?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/fang.png" alt="">
				求租房
			</a>
		</div>

		<div class="box-right">
		    <div class="top-box fn-clear">
		      <span class="buy-info">最新求租</span>
		    </div>
		    <!-- s -->
			<div class="fn-clear two-slide">
			    <div class="slideBox slideBox3">
			      <div class="slidewrap">
			        <div class="slide">
			          <div class="bd">

			          	<div class="slideshow-item ad0">

			          		<div class="right-con">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>'demand','return'=>'demand2','typeid'=>'0','rentype'=>"1",'pageSize'=>"5",'page'=>1)); $_block_repeat=true; echo house(array('action'=>'demand','return'=>'demand2','typeid'=>'0','rentype'=>"1",'pageSize'=>"5",'page'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<div class="fn-clear two-item">
						          <a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=0'),$_smarty_tpl);?>
">
						            <div class="li-left">
						              <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['demand2'];?>
.png" alt="">
						            </div>
						            <div class="li-right">
						              <h4><?php echo $_smarty_tpl->tpl_vars['demand2']->value['title'];?>
</h4>
						              <p><i></i><?php echo $_smarty_tpl->tpl_vars['demand2']->value['contact'];?>
<span><?php echo $_smarty_tpl->tpl_vars['demand2']->value['pubdate'];?>
</span></p>
						            </div>
						          </a>
								</div>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>'demand','return'=>'demand2','typeid'=>'0','rentype'=>"1",'pageSize'=>"5",'page'=>1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</div>
				        </div>

						</div>
				        <div class="hd"><ul></ul></div>
				        </div>

				      </div>
				    </div>
			  	</div>
			<!-- e -->
		  </div>
	</div>
</div>
<!-- 底部 -->
<div class="foot wrap fn-clear">
	<div class="foot-top fn-clear">
		<div class="foot-item foot1">
			<dl class="fn-clear">
				<dt>
					买房工具
				</dt>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'calculator','do'=>'sy'),$_smarty_tpl);?>
">商贷计算器</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'news'),$_smarty_tpl);?>
">购房百科</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'calculator','do'=>'gjj'),$_smarty_tpl);?>
">公积金贷款计算器</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'broker'),$_smarty_tpl);?>
">经纪人</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'calculator','do'=>'zh'),$_smarty_tpl);?>
">组合贷款计算器</a></dd>
			</dl>
			<i></i>
		</div>
		<div class="foot-item foot2">
			<dl class="fn-clear">
				<dt>
					新房
				</dt>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'tmonth'),$_smarty_tpl);?>
">新开盘楼盘</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'','zhuangxiu'=>'','buildtype'=>'','tuandate'=>'','filter'=>"hot"),$_smarty_tpl);?>
">热销楼盘</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'','zhuangxiu'=>'','buildtype'=>'','tuandate'=>'','filter'=>"rec"),$_smarty_tpl);?>
">推荐楼盘</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','typeid'=>'','salestate'=>'','times'=>'','zhuangxiu'=>'','buildtype'=>'','tuandate'=>'','filter'=>"tuan"),$_smarty_tpl);?>
">看房团</a></dd>
				<?php if ($_smarty_tpl->tpl_vars['cfg_subway_state']->value) {?><dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','param'=>'from=subway'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_subway_title']->value;?>
</a></dd><?php }?>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map-loupan'),$_smarty_tpl);?>
">地图找房</a></dd>
			</dl>
			<i></i>
		</div>
		<div class="foot-item foot3">
			<dl class="fn-clear">
				<dt>
					写字楼
				</dt>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','area'=>'','room'=>'','direction'=>'','buildage'=>'','floor'=>'','zhuangxiu'=>'','flags'=>'0'),$_smarty_tpl);?>
" target="_blank">急售房源</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','area'=>'','room'=>'','direction'=>'','buildage'=>'','floor'=>'','zhuangxiu'=>'','flags'=>'1'),$_smarty_tpl);?>
" target="_blank">免税房源</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','area'=>'','room'=>'','direction'=>'','buildage'=>'','floor'=>'','zhuangxiu'=>'','flags'=>'3'),$_smarty_tpl);?>
" target="_blank">校区房</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','area'=>'','room'=>'','direction'=>'','buildage'=>'','floor'=>'','zhuangxiu'=>'','flags'=>'4'),$_smarty_tpl);?>
" target="_blank">满五年</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','area'=>'','room'=>'','direction'=>'','buildage'=>'','floor'=>'','zhuangxiu'=>'','flags'=>'5'),$_smarty_tpl);?>
" target="_blank">推荐</a></dd>
				<?php if ($_smarty_tpl->tpl_vars['cfg_subway_state']->value) {?><dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale','param'=>'from=subway'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['cfg_subway_title']->value;?>
</a><?php }?></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map-sale'),$_smarty_tpl);?>
" target="_blank">地图找房</a></dd>

			</dl>
			<i></i>
		</div>
		<div class="foot-item foot4">
			<dl class="fn-clear">
				<dt>
					租房
				</dt>

				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','room'=>'','zhuangxiu'=>'','rentype'=>'1'),$_smarty_tpl);?>
" target="_blank">整租房源</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','room'=>'','zhuangxiu'=>'','rentype'=>'2'),$_smarty_tpl);?>
" target="_blank">合租房源</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>0,'business'=>0,'subway'=>0,'station'=>0,'price'=>'','room'=>'','zhuangxiu'=>'','rentype'=>'1','type'=>'1'),$_smarty_tpl);?>
" target="_blank">100%个人房源</a></dd>
				<?php if ($_smarty_tpl->tpl_vars['cfg_subway_state']->value) {?><dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu','param'=>'from=subway'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['cfg_subway_title']->value;?>
</a><?php }?></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map-zu'),$_smarty_tpl);?>
" target="_blank">地图找房</a></dd>

			</dl>
			<i></i>
		</div>
		<div class="foot-item foot5">
			<dl class="fn-clear">
				<dt>
					商业  土地
				</dt>

				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'xzl'),$_smarty_tpl);?>
" target="_blank">租写字楼</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'xzl','type'=>'1'),$_smarty_tpl);?>
" target="_blank">购写字楼</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sp'),$_smarty_tpl);?>
" target="_blank">租商铺</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sp','type'=>'1'),$_smarty_tpl);?>
" target="_blank">购商铺</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sp','type'=>'2'),$_smarty_tpl);?>
" target="_blank">转商铺</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'cf'),$_smarty_tpl);?>
" target="_blank">租厂房</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'cf','type'=>'2'),$_smarty_tpl);?>
" target="_blank">售厂房</a></dd>
				<dd><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'cf','type'=>'1'),$_smarty_tpl);?>
" target="_blank">转厂房</a></dd>
			</dl>
		</div>
	</div>
	<div class="foot-middle fn-clear">
		<dl class="fn-clear">
			<dt>合作伙伴</dt>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"friendLink",'return'=>"flink",'module'=>"house")); $_block_repeat=true; echo siteConfig(array('action'=>"friendLink",'return'=>"flink",'module'=>"house"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<dd><a href="<?php echo $_smarty_tpl->tpl_vars['flink']->value['sitelink'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['flink']->value['sitename'];?>
</a></dd>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"friendLink",'return'=>"flink",'module'=>"house"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</dl>
	</div>
</div>
<div class="foot-bottom">
	<div class="bottom wrap">
		<ul class="fn-clear">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"singel")); $_block_repeat=true; echo siteConfig(array('action'=>"singel"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp993=ob_get_clean();?><?php echo getUrlPath(array('service'=>'siteConfig','template'=>'about','id'=>$_tmp993),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a> |
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"singel"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'help'),$_smarty_tpl);?>
" target="_blank">帮助中心</a>
		</ul>
		<?php echo $_smarty_tpl->tpl_vars['cfg_powerby']->value;?>
<br /><?php echo $_smarty_tpl->tpl_vars['cfg_statisticscode']->value;?>

	</div>
</div>



<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
