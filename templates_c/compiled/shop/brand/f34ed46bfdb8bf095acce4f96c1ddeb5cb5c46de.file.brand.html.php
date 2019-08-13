<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:36:05
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\shop\132\brand.html" */ ?>
<?php /*%%SmartyHeaderCode:11314705345d52767527bc44-44417153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34ed46bfdb8bf095acce4f96c1ddeb5cb5c46de' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\shop\\132\\brand.html',
      1 => 1555746496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11314705345d52767527bc44-44417153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_title' => 0,
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
    'typeid' => 0,
    'brand' => 0,
    'type' => 0,
    'page' => 0,
    'row' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52767531bf17_68459741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52767531bf17_68459741')) {function content_5d52767531bf17_68459741($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][1];?>
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
css/brandlist.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('brand', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="contain">
<div class="bread">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][0];?>
</a>><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'brand'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][1];?>
</a><?php if ($_smarty_tpl->tpl_vars['typeid']->value!=0) {?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'brand','typeid'=>$_tmp1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
</a><?php }?></p>
</div>

<div class="tjpp">
	<em><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][3];?>
</em>
	<ul class="clearfix fn-clear">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"brand",'return'=>"brand",'page'=>"1",'rec'=>"1",'pageSize'=>"18")); $_block_repeat=true; echo shop(array('action'=>"brand",'return'=>"brand",'page'=>"1",'rec'=>"1",'pageSize'=>"18"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<li><a href="<?php echo $_smarty_tpl->tpl_vars['brand']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
"><div class="photo"><i></i><img src="<?php echo $_smarty_tpl->tpl_vars['brand']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
" /></div><p><?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
</p></a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"brand",'return'=>"brand",'page'=>"1",'rec'=>"1",'pageSize'=>"18"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</div>
<div class="wrap">
	<div class="select">
		<div class="tab"><span class="left"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][108];?>
</span><font>|</font>
			<p>
			<a<?php if ($_smarty_tpl->tpl_vars['typeid']->value==0) {?> class="on"<?php }?> href="<?php echo getUrlPath(array('service'=>'shop','template'=>'brand'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][96];?>
</a>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"brandType",'return'=>"type")); $_block_repeat=true; echo shop(array('action'=>"brandType",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a<?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'brand','typeid'=>$_tmp2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"brandType",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</p>
		</div>
	</div>
</div>

<div class="brand">
	<ul class="clearfix fn-clear">
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"brand",'typeid'=>$_tmp3,'page'=>$_tmp4,'pageSize'=>72)); $_block_repeat=true; echo shop(array('action'=>"brand",'typeid'=>$_tmp3,'page'=>$_tmp4,'pageSize'=>72), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<li><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank"><div class="img"><i></i><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/blank.gif" data-url="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
"></div><p><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p><span><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</span></a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"brand",'typeid'=>$_tmp3,'page'=>$_tmp4,'pageSize'=>72), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
		<li class="empty"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][4];?>
</li>
		<?php }?>
	</ul>
</div>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo getPageList(array('service'=>'shop','template'=>'brand','typeid'=>$_tmp5),$_smarty_tpl);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
