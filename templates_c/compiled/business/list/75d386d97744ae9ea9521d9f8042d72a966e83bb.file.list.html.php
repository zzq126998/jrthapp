<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-22 04:34:35
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/business/128/list.html" */ ?>
<?php /*%%SmartyHeaderCode:8874557845d0d3f5bad7da2-44735309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75d386d97744ae9ea9521d9f8042d72a966e83bb' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/business/128/list.html',
      1 => 1555743758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8874557845d0d3f5bad7da2-44735309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_title' => 0,
    'business_title' => 0,
    'business_keywords' => 0,
    'business_description' => 0,
    'cfg_staticPath' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'business_channelDomain' => 0,
    'cfg_cookiePre' => 0,
    'typem' => 0,
    'cfg_hotline' => 0,
    'HUONIAOROOT' => 0,
    'typeid' => 0,
    'pageUrl' => 0,
    'pageParam' => 0,
    'type' => 0,
    'type1' => 0,
    'addrid' => 0,
    'addr' => 0,
    'addr1' => 0,
    'keywords' => 0,
    'page' => 0,
    'list' => 0,
    'pageInfo' => 0,
    'n' => 0,
    'cat' => 0,
    'row' => 0,
    'company' => 0,
    'zjcom' => 0,
    'nlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0d3f5bbe0e39_37994694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0d3f5bbe0e39_37994694')) {function content_5d0d3f5bbe0e39_37994694($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value!='') {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else { ?>商家列表<?php }?>-<?php echo $_smarty_tpl->tpl_vars['business_title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['business_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['business_description']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/list.css">
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
',channelDomain = '<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
';
var criticalPoint = 1240, criticalClass = "w1200";
$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
var hideFileUrl = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
var templets_skin = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
',typem = '<?php echo $_smarty_tpl->tpl_vars['typem']->value;?>
';
<?php echo '</script'; ?>
>
</head>
<body class="w1200">
<?php $_smarty_tpl->tpl_vars['channel'] = new Smarty_variable('business', null, 0);?>
<?php $_smarty_tpl->tpl_vars['hotline'] = new Smarty_variable($_smarty_tpl->tpl_vars['cfg_hotline']->value, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_top_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php ob_start();?><?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['pageUrl'] = new Smarty_variable($_tmp1, null, 0);?>
<div class="list-container">
	<div class="wrap"><p class="index-page"><a href="<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
">首页</a> &gt; <a href="<?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
">店铺</a></p></div>
	<div class="list-wrap wrap fn-clear">
		<div class="list-left fn-left">
			<!-- 分类 -->
			<div class="list-sort fn-clear">
				<div class="filter filter-second fn-clear">
					<?php if ($_smarty_tpl->tpl_vars['typem']->value!="house"&&$_smarty_tpl->tpl_vars['typem']->value!="jianzhan") {?>
					<div class="filter-left">
						<div class="sort-head">分类</div>
						<div class="sort-all <?php if ($_smarty_tpl->tpl_vars['typeid']->value=='') {?>on<?php }?>"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp2,'data'=>$_tmp3,'typeid'=>''),$_smarty_tpl);?>
">全部</a></div>
					</div>
					<div class="filter-right filter-right-sort">
						<ul class="one-filter">
							<?php if ($_smarty_tpl->tpl_vars['typem']->value==''||$_smarty_tpl->tpl_vars['typem']->value=="huangye") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo business(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li <?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> class="on"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp6=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp4,'data'=>$_tmp5,'typeid'=>$_tmp6),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['typem']->value=="shop") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li <?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> class="on"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp9=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp7,'data'=>$_tmp8,'typeid'=>$_tmp9),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
							<?php } elseif ($_smarty_tpl->tpl_vars['typem']->value=="job") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"industry",'son'=>1,'return'=>"type")); $_block_repeat=true; echo job(array('action'=>"industry",'son'=>1,'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li <?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> class="on"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp12=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp10,'data'=>$_tmp11,'typeid'=>$_tmp12),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
							<i></i>
							<ul class="two-filter">
								<div class="arrow"><em></em><i></i></div>
								<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"industry",'return'=>"type1",'type'=>$_tmp13)); $_block_repeat=true; echo job(array('action'=>"industry",'return'=>"type1",'type'=>$_tmp13), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<li <?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type1']->value['id']) {?> class="on"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
<?php $_tmp16=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp14,'data'=>$_tmp15,'typeid'=>$_tmp16),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</a></li>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"industry",'return'=>"type1",'type'=>$_tmp13), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</ul>
							</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"industry",'son'=>1,'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
							<?php }?>
						</ul>
					</div>
					<?php }?>
				</div>
				<div class="filter filter-second fn-clear">
					<div class="filter-left">
						<div class="sort-head">区域</div>
						<div class="sort-all <?php if ($_smarty_tpl->tpl_vars['addrid']->value=='') {?>on<?php }?>"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp18=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp17,'data'=>$_tmp18,'addrid'=>''),$_smarty_tpl);?>
">全部</a></div>
					</div>
					<div class="filter-right">
						<ul class="one-filter">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"addr",'return'=>"addr")); $_block_repeat=true; echo business(array('action'=>"addr",'return'=>"addr"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li <?php if ($_smarty_tpl->tpl_vars['addrid']->value==$_smarty_tpl->tpl_vars['addr']->value['id']) {?> class="on"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp20=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp21=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp19,'data'=>$_tmp20,'addrid'=>$_tmp21),$_smarty_tpl);?>
"><span><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</span></a><i></i>
								<ul class="two-filter">
									<div class="arrow"><em></em><i></i></div>
									<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp22=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"addr",'return'=>"addr1",'type'=>$_tmp22)); $_block_repeat=true; echo business(array('action'=>"addr",'return'=>"addr1",'type'=>$_tmp22), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<li <?php if ($_smarty_tpl->tpl_vars['addrid']->value==$_smarty_tpl->tpl_vars['addr1']->value['id']) {?> class="on"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp24=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr1']->value['id'];?>
<?php $_tmp25=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp23,'data'=>$_tmp24,'addrid'=>$_tmp25),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr1']->value['typename'];?>
</a></li>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"addr",'return'=>"addr1",'type'=>$_tmp22), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</ul>
							</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"addr",'return'=>"addr"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
				</div>
			</div>
			<!-- 商家店铺 -->
			<div class="list-tab">
				<ul class="tab-title fn-clear">
					<li <?php if ($_smarty_tpl->tpl_vars['typem']->value=='') {?>class="active"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp26=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp27=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp26,'data'=>$_tmp27,'addrid'=>'','typeid'=>'','typem'=>''),$_smarty_tpl);?>
">商家店铺</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['typem']->value=='huangye') {?>class="active"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp28=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp29=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp28,'data'=>$_tmp29,'addrid'=>'','typeid'=>'','typem'=>'huangye'),$_smarty_tpl);?>
">黄页店铺</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['typem']->value=='jianzhan') {?>class="active"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp30=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp31=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp30,'data'=>$_tmp31,'addrid'=>'','typeid'=>'','typem'=>'jianzhan'),$_smarty_tpl);?>
">企业建站</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['typem']->value=='shop') {?>class="active"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp32=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp33=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp32,'data'=>$_tmp33,'addrid'=>'','typeid'=>'','typem'=>'shop'),$_smarty_tpl);?>
">商城店铺</a></li>
					<!-- <li <?php if ($_smarty_tpl->tpl_vars['typem']->value=='waimai') {?>class="active"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp34=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp35=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp34,'data'=>$_tmp35,'addrid'=>'','typeid'=>'','typem'=>'waimai'),$_smarty_tpl);?>
">外卖店铺</a></li> -->
					<li <?php if ($_smarty_tpl->tpl_vars['typem']->value=='job') {?>class="active"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp36=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp37=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp36,'data'=>$_tmp37,'addrid'=>'','typeid'=>'','typem'=>'job'),$_smarty_tpl);?>
">招聘企业</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['typem']->value=='house') {?>class="active"<?php }?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
<?php $_tmp38=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageParam']->value;?>
<?php $_tmp39=ob_get_clean();?><?php echo getUrlParam(array('url'=>$_tmp38,'data'=>$_tmp39,'addrid'=>'','typeid'=>'','typem'=>'house'),$_smarty_tpl);?>
">房产中介</a></li>
				</ul>
				<div class="container-wrap">
					<?php if ($_smarty_tpl->tpl_vars['typem']->value=='') {?>
					<div class="container <?php if ($_smarty_tpl->tpl_vars['typem']->value=='') {?>show<?php }?>">
						<div class="tab-content">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp40=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp41=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp42=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp43=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"blist",'return'=>"list",'store'=>"2",'addrid'=>$_tmp40,'typeid'=>$_tmp41,'title'=>$_tmp42,'page'=>$_tmp43,'pageSize'=>"8")); $_block_repeat=true; echo business(array('action'=>"blist",'return'=>"list",'store'=>"2",'addrid'=>$_tmp40,'typeid'=>$_tmp41,'title'=>$_tmp42,'page'=>$_tmp43,'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="tab-item fn-clear">
								<div class="fn-clear">
									<div class="tab-img"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt=""></a></div>
									<?php if ($_smarty_tpl->tpl_vars['list']->value['isbid']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top.png" alt="" class="stick"><?php }?>
									<div class="item-right">
										<p class="name fn-clear"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['list']->value['member']['phoneCheck']) {?><span class="a-id"></span><?php }
if ($_smarty_tpl->tpl_vars['list']->value['member']['promotion']>0) {?><span class="a-money" title="保障金：<?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['member']['promotion'];
echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
"></span><?php }
if ($_smarty_tpl->tpl_vars['list']->value['member']['licenseState']) {?><span class="a-company"></span><?php }?></p>
										<p class="tag"><span><?php echo $_smarty_tpl->tpl_vars['list']->value['typename'][0];?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['list']->value['typename'][1];?>
</span> </p>
										<p class="chat">
											<?php if ($_smarty_tpl->tpl_vars['list']->value['qq']) {?><span class="QQ"><i>QQ :</i><?php echo $_smarty_tpl->tpl_vars['list']->value['qq'];?>
</span><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['list']->value['wechatcode']) {?><span class="wechat"><i>微信 :</i><?php echo $_smarty_tpl->tpl_vars['list']->value['wechatcode'];?>
</span><?php }?>
										</p>
										<p class="location">地址：<?php echo $_smarty_tpl->tpl_vars['list']->value['address'];?>
</p>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['list']->value['tel']) {?><div class="shop-store"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];?>
</a></div><?php }?>
									<div class="code">
										<img class="code-icon" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code4.png" alt="">
										<div class="code-scan"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php $_tmp44=ob_get_clean();?><?php echo getUrlPath(array('service'=>'business','template'=>'detail','id'=>$_tmp44),$_smarty_tpl);?>
" alt=""></div>
									</div>
								</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"blist",'return'=>"list",'store'=>"2",'addrid'=>$_tmp40,'typeid'=>$_tmp41,'title'=>$_tmp42,'page'=>$_tmp43,'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						</div>
						<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
							<div class="empty">抱歉！ 未找到相关商家</div>
						<?php }?>
						<div class="page">
							<?php echo getPageList(array('service'=>'business','template'=>'list','pageType'=>'dynamic','param'=>((string)$_smarty_tpl->tpl_vars['pageParam']->value)."&page=#page#"),$_smarty_tpl);?>

						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['typem']->value=='huangye') {?>
					<div class="container bg <?php if ($_smarty_tpl->tpl_vars['typem']->value=='huangye') {?>show<?php }?>">
						<div class="tab-content">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp45=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp46=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp47=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp48=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"blist",'return'=>"list",'addrid'=>$_tmp45,'typeid'=>$_tmp46,'title'=>$_tmp47,'page'=>$_tmp48,'pageSize'=>"8")); $_block_repeat=true; echo business(array('action'=>"blist",'return'=>"list",'addrid'=>$_tmp45,'typeid'=>$_tmp46,'title'=>$_tmp47,'page'=>$_tmp48,'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="tab-item fn-clear">
							<div class="fn-clear">
								<div class="tab-img"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt=""></a></div>
								<?php if ($_smarty_tpl->tpl_vars['list']->value['isbid']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top.png" alt="" class="stick"><?php }?>
								<div class="item-right">
									<p class="name fn-clear"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['list']->value['member']['phoneCheck']) {?><span class="a-id"></span><?php }
if ($_smarty_tpl->tpl_vars['list']->value['member']['promotion']>0) {?><span class="a-money" title="保障金：<?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['member']['promotion'];
echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
"></span><?php }
if ($_smarty_tpl->tpl_vars['list']->value['member']['licenseState']) {?><span class="a-company"></span><?php }?></p>
									<p class="tag"><span><?php echo $_smarty_tpl->tpl_vars['list']->value['typename'][0];?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['list']->value['typename'][1];?>
</span></p>
									<p class="chat">
										<?php if ($_smarty_tpl->tpl_vars['list']->value['qq']) {?><span class="QQ"><i>QQ :</i><?php echo $_smarty_tpl->tpl_vars['list']->value['qq'];?>
</span><?php }?>
										<?php if ($_smarty_tpl->tpl_vars['list']->value['wechatcode']) {?><span class="wechat"><i>微信 :</i><?php echo $_smarty_tpl->tpl_vars['list']->value['wechatcode'];?>
</span><?php }?>
									</p>
									<p class="location">地址：<?php echo $_smarty_tpl->tpl_vars['list']->value['address'];?>
</p>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['list']->value['tel']) {?><div class="shop-store"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];?>
</a></div><?php }?>
								<div class="code">
									<img class="code-icon" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code4.png" alt="">
									<div class="code-scan"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php $_tmp49=ob_get_clean();?><?php echo getUrlPath(array('service'=>'business','template'=>'detail','id'=>$_tmp49),$_smarty_tpl);?>
" alt=""></div>
								</div>
							</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"blist",'return'=>"list",'addrid'=>$_tmp45,'typeid'=>$_tmp46,'title'=>$_tmp47,'page'=>$_tmp48,'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						</div>
						<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
							<div class="empty">抱歉！ 未找到相关黄页</div>
						<?php }?>
						<div class="page">
								<?php echo getPageList(array('service'=>'business','template'=>'list','pageType'=>'dynamic','param'=>((string)$_smarty_tpl->tpl_vars['pageParam']->value)."&page=#page#"),$_smarty_tpl);?>

						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['typem']->value=='jianzhan') {?>
					<div class="container company <?php if ($_smarty_tpl->tpl_vars['typem']->value=='jianzhan') {?>show<?php }?>">
						<div class="tab-content">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp50=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp51=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp52=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('website', array('action'=>'wlist','return'=>'list','addrid'=>$_tmp50,'title'=>$_tmp51,'page'=>$_tmp52,'pageSize'=>'8')); $_block_repeat=true; echo website(array('action'=>'wlist','return'=>'list','addrid'=>$_tmp50,'title'=>$_tmp51,'page'=>$_tmp52,'pageSize'=>'8'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="tab-item fn-clear">
								<div class="fn-clear">
								<div class="tab-img"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt=""></a></div>
								<?php if ($_smarty_tpl->tpl_vars['list']->value['isbid']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top.png" alt="" class="stick"><?php }?>
								<div class="item-right">
									<p class="name fn-clear"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
									<p class="tag">
										<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
										<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['catname']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['n']->value<=4) {?>
										<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];
if ($_smarty_tpl->tpl_vars['n']->value<4) {?><i>|</i><?php }?></a>
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
										<?php } ?>
									</p>
									<!-- <p class="location">地址：吴中区星海街加城花园乐嘉生活广场2楼（星海街苏茜路）</p> -->
								</div>
								<?php if ($_smarty_tpl->tpl_vars['list']->value['tel']) {?><div class="shop-store"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];?>
</a></div><?php }?>
								<div class="code">
									<img class="code-icon" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code4.png" alt="">
									<div class="code-scan"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" alt=""></div>
								</div>
								</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo website(array('action'=>'wlist','return'=>'list','addrid'=>$_tmp50,'title'=>$_tmp51,'page'=>$_tmp52,'pageSize'=>'8'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
						<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
							<div class="empty">抱歉！ 未找到相关企业建站</div>
						<?php }?>
						<div class="page">
							<?php echo getPageList(array('service'=>'business','template'=>'list','pageType'=>'dynamic','param'=>((string)$_smarty_tpl->tpl_vars['pageParam']->value)."&page=#page#"),$_smarty_tpl);?>

						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['typem']->value=='shop') {?>
					<div class="container mall <?php if ($_smarty_tpl->tpl_vars['typem']->value=='shop') {?>show<?php }?>">
						<div class="tab-content">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp53=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp54=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp55=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"store",'industry'=>$_tmp53,'addrid'=>$_tmp54,'page'=>$_tmp55,'pageSize'=>"8")); $_block_repeat=true; echo shop(array('action'=>"store",'industry'=>$_tmp53,'addrid'=>$_tmp54,'page'=>$_tmp55,'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="tab-item fn-clear">
								<div class="fn-clear">
									<div class="up fn-clear">
										<div class="tab-img"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
#}" alt=""></a></div>
										<?php if ($_smarty_tpl->tpl_vars['row']->value['rec']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top.png" alt="" class="stick"><?php }?>
										<div class="item-right">
											<p class="name fn-clear"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['row']->value['userinfo']['phoneCheck']) {?><span class="a-id"></span><?php }
if ($_smarty_tpl->tpl_vars['row']->value['userinfo']['certifyState']) {?><span class="a-money"></span><?php }
if ($_smarty_tpl->tpl_vars['row']->value['userinfo']['licenseState']) {?><span class="a-company"></span><?php }?></p>
											<p class="tel"><i></i><?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</p>
											<p class="chat">
												<?php if ($_smarty_tpl->tpl_vars['row']->value['qq']) {?><span class="QQ"><i>QQ :</i><?php echo $_smarty_tpl->tpl_vars['row']->value['qq'];?>
</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['row']->value['wechatcode']) {?><span class="wechat"><i>微信 :</i><?php echo $_smarty_tpl->tpl_vars['row']->value['wechatcode'];?>
</span><?php }?>
											</p>
											<p class="location">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</p>
										</div>
										<div class="enter"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
">进入店铺 <i></i></a></div>
										<div class="code">
											<img class="code-icon" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code4.png" alt="">
											<div class="code-scan"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" alt=""></div>
										</div>
									</div>
									<div class="down fn-clear shoplist" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
									</div>

								</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"store",'industry'=>$_tmp53,'addrid'=>$_tmp54,'page'=>$_tmp55,'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
						<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
							<div class="empty">抱歉！ 未找到相关商铺<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['totalCount'];?>
</div>
						<?php }?>
						<div class="page">
							<?php echo getPageList(array('service'=>'business','template'=>'list','pageType'=>'dynamic','param'=>((string)$_smarty_tpl->tpl_vars['pageParam']->value)."&page=#page#"),$_smarty_tpl);?>

						</div>
					</div>
					<?php }?>
					<div class="container food">
						<div class="tab-content">

							<!--<div class="tab-item fn-clear">-->
								<!--<div class="fn-clear">-->
									<!--<a href="javascript:;"><img class="tab-img" src="images/eg_bg.png" alt=""></a>-->
									<!--<img src="images/top.png" alt="" class="stick">-->
									<!--<div class="item-right">-->
										<!--<p class="name fn-clear"><a href="javascript:;">苏州卓凡清洗保洁服务有限公司</a><span class="a-id"></span><span class="a-money"></span><span class="a-company"></span></p>-->
										<!--<p class="tag"><span>保洁服务</span></p>-->
										<!--<p class="chat">-->
											<!--<span class="QQ"><i>QQ :</i>51254125</span>-->
											<!--<span class="wechat"><i>微信 :</i>51254125</span>-->
										<!--</p>-->
										<!--<p class="location">地址：吴中区星海街加城花园乐嘉生活广场2楼（星海街苏茜路）</p>-->
									<!--</div>-->
									<!--<div class="shop-store"><a href="javascript:;">0512-62866149</a></div>-->
									<!--<div class="code">-->
										<!--<img class="code-icon" src="images/code4.png" alt="">-->
										<!--<div class="code-scan"><img src="upfile/qrcode.png" alt=""></div>-->
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->



						</div>
						<div class="page">
							<!-- <a href="javascript:;">上一页</a>
							<a href="javascript:;">1</a>
							<a class="active" href="javascript:;">2</a>
							<a href="javascript:;">3</a>
							<a href="javascript:;">4</a>
							<a href="javascript:;">...</a>
							<a href="javascript:;">8</a>
							<a href="javascript:;">下一页</a> -->
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['typem']->value=='job') {?>
					<div class="container recruit <?php if ($_smarty_tpl->tpl_vars['typem']->value=='job') {?>show<?php }?>">
						<div class="tab-content">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp56=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp57=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp58=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"company",'return'=>"company",'addrid'=>$_tmp56,'industry'=>$_tmp57,'page'=>$_tmp58,'pageSize'=>8)); $_block_repeat=true; echo job(array('action'=>"company",'return'=>"company",'addrid'=>$_tmp56,'industry'=>$_tmp57,'page'=>$_tmp58,'pageSize'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="tab-item fn-clear">
								<div class="fn-clear">
									<div  class="tab-img"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" alt=""></a></div>
									<?php if ($_smarty_tpl->tpl_vars['company']->value['isbid']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top.png" alt="" class="stick"><?php }?>
									<div class="item-right">
										<p class="name fn-clear"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['company']->value['phoneCheck']) {?><span class="a-id"></span><?php }
if ($_smarty_tpl->tpl_vars['company']->value['certifyState']) {?><span class="a-money"></span><?php }
if ($_smarty_tpl->tpl_vars['company']->value['licenseState']) {?><span class="a-company"></span><?php }?></p>
										<p class="tag"><a href="#"><?php echo $_smarty_tpl->tpl_vars['company']->value['industry'];?>
</a></p>

										<p class="location">地址：<?php echo $_smarty_tpl->tpl_vars['company']->value['address'];?>
</p>
									</div>
									<div class="pos"><span><i><?php echo $_smarty_tpl->tpl_vars['company']->value['pcount'];?>
</i>在招职位</span><span><i><?php echo count($_smarty_tpl->tpl_vars['company']->value['picsArr']);?>
</i>企业相册</span></div>
									<div class="code">
										<img class="code-icon" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code4.png" alt="">
										<div class="code-scan"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
" alt=""></div>
									</div>
								</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"company",'return'=>"company",'addrid'=>$_tmp56,'industry'=>$_tmp57,'page'=>$_tmp58,'pageSize'=>8), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
						<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
							<div class="empty">抱歉！ 未找到相关职位</div>
						<?php }?>
						<div class="page">
							<?php echo getPageList(array('service'=>'business','template'=>'list','pageType'=>'dynamic','param'=>((string)$_smarty_tpl->tpl_vars['pageParam']->value)."&page=#page#"),$_smarty_tpl);?>

						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['typem']->value=='house') {?>
					<div class="container house <?php if ($_smarty_tpl->tpl_vars['typem']->value=='house') {?>show<?php }?>">
						<div class="tab-content">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp59=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp60=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp61=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjComList",'return'=>"zjcom",'addrid'=>$_tmp59,'page'=>$_tmp60,'keywords'=>$_tmp61,'pageSize'=>"8")); $_block_repeat=true; echo house(array('action'=>"zjComList",'return'=>"zjcom",'addrid'=>$_tmp59,'page'=>$_tmp60,'keywords'=>$_tmp61,'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="tab-item fn-clear">
								<div class="fn-clear">
									<div class="tab-img"><a target="_blank" href="<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['litpic'];?>
<?php $_tmp62=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp62,'type'=>'large'),$_smarty_tpl);?>
" alt=""></a></div>
									<?php if ($_smarty_tpl->tpl_vars['zjcom']->value['isbid']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top.png" alt="" class="stick"><?php }?>
									<div class="item-right">
										<p class="name fn-clear"><a target="_blank" href="<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['zjcom']->value['member']['phoneCheck']) {?><span class="a-id"></span><?php }
if ($_smarty_tpl->tpl_vars['zjcom']->value['member']['certifyState']) {?><span class="a-money"></span><?php }
if ($_smarty_tpl->tpl_vars['zjcom']->value['member']['licenseState']) {?><span class="a-company"></span><?php }?></p>
										<p class="des"><span>出租<i><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['countZu'];?>
</i></span><span>出售<i><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['countSale'];?>
</i></span><span>团队<i><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['countTeam'];?>
</i></span></p>
										<p class="location">地址：<?php echo $_smarty_tpl->tpl_vars['zjcom']->value['address'];?>
</p>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['zjcom']->value['tel']) {?><div class="shop-store"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['tel'];?>
</a></div><?php }?>
									<div class="code">
										<img class="code-icon" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/code4.png" alt="">
										<div class="code-scan"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
" alt=""></div>
									</div>
								</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjComList",'return'=>"zjcom",'addrid'=>$_tmp59,'page'=>$_tmp60,'keywords'=>$_tmp61,'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
						<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
							<div class="empty">抱歉！ 未找到相关中介</div>
						<?php }?>
						<div class="page">
							<?php echo getPageList(array('service'=>'business','template'=>'list','pageType'=>'dynamic','param'=>((string)$_smarty_tpl->tpl_vars['pageParam']->value)."&page=#page#"),$_smarty_tpl);?>

						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>

		<div class="list-right fn-right">
			<div class="join"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/shopper-join.png" alt=""></a></div>
			<!-- 最新入驻 -->
			<div class="notice">
				<div class="notice-title">最新公告</div>
				<div class="notice-con">
					<div class="txtMarquee-top">
						<div class="bd">
							<ul class="infoList">
								
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"notice",'return'=>'nlist','pageSize'=>"8")); $_block_repeat=true; echo business(array('action'=>"notice",'return'=>'nlist','pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
">[公告]<?php echo $_smarty_tpl->tpl_vars['nlist']->value['title'];?>
</a></li>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"notice",'return'=>'nlist','pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- 猜你喜欢 -->
			<div class="serve-right fn-right">
				<div class="like-title">猜你喜欢</div>
				<div class="like-con">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"4")); $_block_repeat=true; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
						<div class="like-list">
							<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt="">
							<p class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
							<p class="location"><?php echo $_smarty_tpl->tpl_vars['list']->value['address'];?>
</p>
						</div>
					</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"blist",'return'=>'list','store'=>"2",'orderby'=>"2",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>

		</div>
	</div>
</div>

<!-- 底部 -->
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'business','theme'=>'gray'), 0);?>

<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/list.js"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
