<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:40:29
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\help\help.html" */ ?>
<?php /*%%SmartyHeaderCode:12001270775d5125fdc32de7-76409530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc4e7e33f4372770a6499153094d39961d1701e' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\help\\help.html',
      1 => 1553395086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12001270775d5125fdc32de7-76409530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'title' => 0,
    'cfg_webname' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'templets_skin' => 0,
    'cfg_weblogo' => 0,
    'cfg_shortname' => 0,
    'cfg_hotline' => 0,
    'type' => 0,
    'parentid' => 0,
    'typeid' => 0,
    'type1' => 0,
    'page' => 0,
    'help' => 0,
    'pageInfo' => 0,
    'row' => 0,
    'cfg_powerby' => 0,
    'cfg_statisticscode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5125fdc8ac50_12521845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5125fdc8ac50_12521845')) {function content_5d5125fdc8ac50_12521845($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
../member/css/login.css?v=5" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/help.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
';
	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
<?php echo '</script'; ?>
>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- head s -->
<div class="wrap header fn-clear">
	<div class="logo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
">
		</a>
			<div class="shortname"><h2><?php echo $_smarty_tpl->tpl_vars['cfg_shortname']->value;?>
</h2><p>地方最大最全生活网</p></div>
	</div>
	<dl class="kefu fn-clear">
		<dt><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
../member/images/kf_tel.png" alt=""></dt>
		<dd>
			<p class="p1">客服热线</p>
			<p class="p2"><?php echo $_smarty_tpl->tpl_vars['cfg_hotline']->value;?>
</p>
		</dd>
	</dl>
</div>
<div class="split-line"></div>
<!-- head e -->

<!-- 内容部分 -->
<div class="whole fn-clear">

	<div class="left-mode">
		<h2>帮助中心</h2>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'helpsType','return'=>'type')); $_block_repeat=true; echo siteConfig(array('action'=>'helpsType','return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="service double_click">
			<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo getUrlPath(array('service'=>'siteConfig','template'=>'help','id'=>$_tmp1),$_smarty_tpl);?>
" class="shop-ping fn-clear"><i class="p_bulid<?php if ($_smarty_tpl->tpl_vars['parentid']->value==$_smarty_tpl->tpl_vars['type']->value['id']||$_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> position_bulid<?php }?>"></i><span><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span></a>
			<ul class="list"<?php if ($_smarty_tpl->tpl_vars['parentid']->value==$_smarty_tpl->tpl_vars['type']->value['id']||$_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> style="display: block;"<?php }?>>
				<li>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'helpsType','type'=>$_tmp2,'return'=>'type1')); $_block_repeat=true; echo siteConfig(array('action'=>'helpsType','type'=>$_tmp2,'return'=>'type1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
<?php $_tmp3=ob_get_clean();?><?php echo getUrlPath(array('service'=>'siteConfig','template'=>'help','id'=>$_tmp3),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type1']->value['id']) {?> class="process"<?php }?>><?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'helpsType','type'=>$_tmp2,'return'=>'type1'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</li>
			</ul>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'helpsType','return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>

	<div class="shop_mall">
		<div class="log_password">
			<ul class="account_how about_ticket">
				<li class="de_fault"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'helps','return'=>'help','typeid'=>$_tmp4,'page'=>$_tmp5,'pageSize'=>'20')); $_block_repeat=true; echo siteConfig(array('action'=>'helps','return'=>'help','typeid'=>$_tmp4,'page'=>$_tmp5,'pageSize'=>'20'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<?php echo $_smarty_tpl->tpl_vars['help']->value['url'];?>
" class="fn-clear"><i></i><span><?php echo $_smarty_tpl->tpl_vars['help']->value['title'];?>
</span></a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'helps','return'=>'help','typeid'=>$_tmp4,'page'=>$_tmp5,'pageSize'=>'20'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>

			<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
			<div class="empty">暂无相关信息！</div>
			<?php }?>
		</div>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo getPageList(array('service'=>'siteConfig','template'=>'help','pageType'=>'dynamic','typeid'=>$_tmp6,'param'=>"page=#page#"),$_smarty_tpl);?>


	</div>


</div>
<div class="split-line"></div>
<!-- 内容部分 -->
<!-- 底部 s -->
<div class="footer-login">
	<p>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"singel")); $_block_repeat=true; echo siteConfig(array('action'=>"singel"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php echo getUrlPath(array('service'=>'siteConfig','template'=>'about','id'=>$_tmp7),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a><span class="pice">|</span>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"singel"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'help'),$_smarty_tpl);?>
">帮助中心</a><span class="pice">|</span>
        <a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'feedback'),$_smarty_tpl);?>
">意见反馈</a>
	</p>
	<?php echo $_smarty_tpl->tpl_vars['cfg_powerby']->value;?>

</div>
<!-- 底部 e -->
<?php echo $_smarty_tpl->tpl_vars['cfg_statisticscode']->value;?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/help.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
