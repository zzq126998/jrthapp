<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:36:01
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\shop\132\store.html" */ ?>
<?php /*%%SmartyHeaderCode:809072655d52767149eae1-74487127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bddb00c16ceba6a5db88bad959ba5ed1fbf2ddcf' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\shop\\132\\store.html',
      1 => 1555746426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809072655d52767149eae1-74487127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'shop_title' => 0,
    'shop_keywords' => 0,
    'shop_description' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'shop_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'cfg_cookieDomain' => 0,
    'keywords' => 0,
    'typeid' => 0,
    'addrid' => 0,
    'orderby' => 0,
    'business' => 0,
    'type' => 0,
    'addr' => 0,
    'page' => 0,
    'row' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52767161d8a0_75037555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52767161d8a0_75037555')) {function content_5d52767161d8a0_75037555($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][61];?>
-<?php echo $_smarty_tpl->tpl_vars['shop_title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['shop_keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['shop_description']->value;?>
"/>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/store.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
';

	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");

	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', cookieDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookieDomain']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<body>
<?php $_smarty_tpl->tpl_vars['searchCurr'] = new Smarty_variable('store', null, 0);?>
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('store', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="contain">

<div class="bread">
  
	<p>	<span class="fn-left">		<a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][0];?>
</a>><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'store'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][61];?>
</a></span>

	<?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?>
	<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp3=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp1,'addrid'=>$_tmp2,'param'=>$_tmp3),$_smarty_tpl);?>
" class="filter-item search fn-left"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][18];?>
：<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<span class="close">×</span></a>
	<?php }?>
	</p>
</div>

<div class="content">
	<div class="select">
		<div class="tab"><span class="left"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][108];?>
</span><font class="left">|</font>
			<p>
				<a<?php if ($_smarty_tpl->tpl_vars['typeid']->value==0) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp6=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp7=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>0,'addrid'=>$_tmp4,'business'=>$_tmp5,'param'=>$_tmp6.$_tmp7),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][96];?>
</a>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_tmp8) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp12=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp13=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp9,'addrid'=>$_tmp10,'business'=>$_tmp11,'param'=>$_tmp12.$_tmp13),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</p>
		</div>
		<div class="tab"><span class="left"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][8];?>
</span><font class="left">|</font>
			<p>
				<a<?php if ($_smarty_tpl->tpl_vars['addrid']->value==0) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp15=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp16=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp14,'param'=>$_tmp15.$_tmp16),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][96];?>
</a>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"addr",'return'=>'addr')); $_block_repeat=true; echo shop(array('action'=>"addr",'return'=>'addr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp17=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['addrid']->value==$_tmp17) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp18=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp20=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp21=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp18,'addrid'=>$_tmp19,'business'=>0,'param'=>$_tmp20.$_tmp21),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"addr",'return'=>'addr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</p>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['addrid']->value!=0) {?>
		<div class="tab">
			<span class="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><font class="left">&nbsp;</font>
			<p>
				<a<?php if ($_smarty_tpl->tpl_vars['business']->value==0) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp22=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp24=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp25=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp22,'addrid'=>$_tmp23,'param'=>$_tmp24.$_tmp25),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][96];?>
</a>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp26=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"addr",'return'=>'addr','type'=>$_tmp26)); $_block_repeat=true; echo shop(array('action'=>"addr",'return'=>'addr','type'=>$_tmp26), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp27=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['business']->value==$_tmp27) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp28=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp29=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
<?php $_tmp30=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp31=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp32=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp28,'addrid'=>$_tmp29,'business'=>$_tmp30,'param'=>$_tmp31.$_tmp32),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];?>
</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"addr",'return'=>'addr','type'=>$_tmp26), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</p>
		</div>
		<?php }?>
	</div>
	<div class="selectX">
			<span class="left zh<?php if ($_smarty_tpl->tpl_vars['orderby']->value==0) {?> on<?php }?>"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp33=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp34=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp35=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp36=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp33,'addrid'=>$_tmp34,'business'=>$_tmp35,'param'=>$_tmp36),$_smarty_tpl);?>
"#}">默认</a></span><font class="left">|</font>
			<span class="left zh<?php if ($_smarty_tpl->tpl_vars['orderby']->value==1) {?> on<?php }?>"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp37=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp38=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp39=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp40=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store','typeid'=>$_tmp37,'addrid'=>$_tmp38,'business'=>$_tmp39,'param'=>"orderby=1".$_tmp40),$_smarty_tpl);?>
"#}">人气</a></span><font class="left">|</font>
			<div class="right">
				<span><em><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</em>/<label id="totalPage">1<label></label></label></span><a class="pre" href="javascript:;">&lt;</a><a class="next" href="javascript:;">&gt;</a>
			</div>
		</div>

		<ul class="sjList clearfix fn-clear">
			<?php $_smarty_tpl->tpl_vars['addr'] = new Smarty_variable($_smarty_tpl->tpl_vars['addrid']->value, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['business']->value!=0) {?>
			<?php $_smarty_tpl->tpl_vars['addr'] = new Smarty_variable($_smarty_tpl->tpl_vars['business']->value, null, 0);?>
			<?php }?>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp41=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php $_tmp42=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
<?php $_tmp43=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['orderby']->value;?>
<?php $_tmp44=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp45=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"store",'industry'=>$_tmp41,'title'=>$_tmp42,'addrid'=>$_tmp43,'orderby'=>$_tmp44,'page'=>$_tmp45,'pageSize'=>"30")); $_block_repeat=true; echo shop(array('action'=>"store",'industry'=>$_tmp41,'title'=>$_tmp42,'addrid'=>$_tmp43,'orderby'=>$_tmp44,'page'=>$_tmp45,'pageSize'=>"30"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<dl class="clearfix">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
					<dt class="left"><i></i><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/blank.gif" data-url="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
#}"></dt>
					<dd class="title"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['rec']==1) {?><em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][109];?>
</em><?php }?></dd>
					<dd><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][32];?>
：<?php echo $_smarty_tpl->tpl_vars['row']->value['rating'];?>
</dd>
					<dd><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][1];?>
：<?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</dd>
					<dd><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][9];?>
：
						<?php  $_smarty_tpl->tpl_vars['addr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['addr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addr']->key => $_smarty_tpl->tpl_vars['addr']->value) {
$_smarty_tpl->tpl_vars['addr']->_loop = true;
?>
						<?php echo $_smarty_tpl->tpl_vars['addr']->value;?>

						<?php } ?> <?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</dd>
					<dd class="clearfix"><span class="left"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][25];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">(<?php echo $_smarty_tpl->tpl_vars['row']->value['productCount'];
echo $_smarty_tpl->tpl_vars['langData']->value['shop'][3][1];?>
)</a></span><span class="left r"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][114];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">(<?php echo $_smarty_tpl->tpl_vars['row']->value['reviewCount'];
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][49];?>
)</a></span></dd>
                    </a>
                </dl>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"store",'industry'=>$_tmp41,'title'=>$_tmp42,'addrid'=>$_tmp43,'orderby'=>$_tmp44,'page'=>$_tmp45,'pageSize'=>"30"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
			<li class="empty"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][62];?>
</li>
			<?php }?>
		</ul>
    <!--分页-->
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp46=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp47=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp48=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp49=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp50=ob_get_clean();?><?php echo getPageList(array('service'=>'shop','template'=>'store','industry'=>$_tmp46,'addrid'=>$_tmp47,'business'=>$_tmp48,'param'=>$_tmp49.$_tmp50),$_smarty_tpl);?>


</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>var totalCount = <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']);?>
, totalPage = <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['pageInfo']->value['totalPage']);?>
, atPage = <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
, pageUrl = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp51=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
<?php $_tmp52=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['business']->value;?>
<?php $_tmp53=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['orderby']->value!='') {?><?php echo "orderby=";?><?php echo (string)$_smarty_tpl->tpl_vars['orderby']->value;?><?php }
$_tmp54=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><?php echo "&keywords=";?><?php echo (string)$_smarty_tpl->tpl_vars['keywords']->value;?><?php }
$_tmp55=ob_get_clean();?><?php echo getUrlPath(array('service'=>"shop",'template'=>"store",'industry'=>$_tmp51,'addrid'=>$_tmp52,'business'=>$_tmp53,'page'=>"%page%",'param'=>$_tmp54.$_tmp55),$_smarty_tpl);?>
';<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/store.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
