<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:36:07
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\shop\132\news.html" */ ?>
<?php /*%%SmartyHeaderCode:14122984705d5276778475e1-74532338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f701096447b06b2cf440ba1958e53248742c7915' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\shop\\132\\news.html',
      1 => 1555746422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14122984705d5276778475e1-74532338',
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
    'pid' => 0,
    'pname' => 0,
    'tid' => 0,
    'tname' => 0,
    'type' => 0,
    'child' => 0,
    'typeid' => 0,
    'page' => 0,
    'row' => 0,
    'pageInfo' => 0,
    '_bindex' => 0,
    'l1' => 0,
    'l2' => 0,
    'l3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d527677904d88_63767277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d527677904d88_63767277')) {function content_5d527677904d88_63767277($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][51];?>
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
css/news.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('news', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="bread">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][0][0];?>
</a>><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'news'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][51];?>
</a><?php if ($_smarty_tpl->tpl_vars['pid']->value!=0) {?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'news','typeid'=>$_tmp1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
</a><?php }
if ($_smarty_tpl->tpl_vars['tid']->value!=0) {?>><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'news','typeid'=>$_tmp2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
</a><?php }?></p>
</div>

<div class="content fn-clear">
	<div class="news-left left">
		<div class="select">
			<p><span>分类</span><font>|</font>
				<a<?php if ($_smarty_tpl->tpl_vars['pid']->value==0) {?> class="on"<?php }?> href="<?php echo getUrlPath(array('service'=>'shop','template'=>'news'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][96];?>
</a>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"newsType",'return'=>"type",'pageSize'=>"10")); $_block_repeat=true; echo shop(array('action'=>"newsType",'return'=>"type",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['pid']->value==$_tmp3) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'news','typeid'=>$_tmp4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"newsType",'return'=>"type",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</p>
			<?php if ($_smarty_tpl->tpl_vars['pid']->value!=0&&$_smarty_tpl->tpl_vars['child']->value>0) {?>
			<p><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><font>&nbsp;</font>
				<a<?php if ($_smarty_tpl->tpl_vars['tid']->value==0) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'news','typeid'=>$_tmp5),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][96];?>
</a>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"newsType",'return'=>'type','type'=>$_tmp6)); $_block_repeat=true; echo shop(array('action'=>"newsType",'return'=>'type','type'=>$_tmp6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['tid']->value==$_tmp7) {?> class="on"<?php }?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp8=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'news','typeid'=>$_tmp8),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"newsType",'return'=>'type','type'=>$_tmp6), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</p>
			<?php }?>
		</div>
		<div class="all">
			<ul>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"news",'typeid'=>$_tmp9,'page'=>$_tmp10,'pageSize'=>"20")); $_block_repeat=true; echo shop(array('action'=>"news",'typeid'=>$_tmp9,'page'=>$_tmp10,'pageSize'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<h3><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></h3>
					<dl>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['litpic']!='') {?><dt class="left"><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
"></a></dt><?php }?>
						<dd class="left"><p><?php echo $_smarty_tpl->tpl_vars['row']->value['note'];?>
... <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target='_blank'>[<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][568];?>
]</a></p><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['pubdate'],"%Y-%m-%d");?>
</span></dd>
					</dl>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"news",'typeid'=>$_tmp9,'page'=>$_tmp10,'pageSize'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
				<li class="empty"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][57];?>
</li>
				<?php }?>
			</ul>
		</div>
		<!-- 分页 -->
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp11=ob_get_clean();?><?php echo getPageList(array('service'=>'shop','template'=>'news','typeid'=>$_tmp11),$_smarty_tpl);?>


	</div>

	<div class="news-right right">
		<div class="hot">
			<h3><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][20];?>
<span></span><em></em></h3>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"l1",'flag'=>"0",'pageSize'=>"10")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"l1",'flag'=>"0",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><i<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['l1']<4) {?> class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_bindex']->value['l1'];?>
</i><a href="<?php echo $_smarty_tpl->tpl_vars['l1']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['l1']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l1']->value['title'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"l1",'flag'=>"0",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
				<li class="empty"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][54];?>
</li>
				<?php }?>
			</ul>
		</div>
		<div class="hot">
			<h3><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][55];?>
<span></span><em></em></h3>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"l2",'flag'=>"1",'pageSize'=>"10")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"l2",'flag'=>"1",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><i<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['l2']<4) {?> class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_bindex']->value['l2'];?>
</i><a href="<?php echo $_smarty_tpl->tpl_vars['l2']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['l2']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l2']->value['title'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"l2",'flag'=>"1",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
				<li class="empty"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][54];?>
</li>
				<?php }?>
			</ul>
		</div>
		<div class="hot">
			<h3><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][56];?>
<span></span><em></em></h3>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"l3",'flag'=>"2",'pageSize'=>"10")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"l3",'flag'=>"2",'pageSize'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><i<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['l3']<4) {?> class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_bindex']->value['l3'];?>
</i><a href="<?php echo $_smarty_tpl->tpl_vars['l3']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['l3']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l3']->value['title'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"l3",'flag'=>"2",'pageSize'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
				<li class="empty"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][54];?>
</li>
				<?php }?>
			</ul>
		</div>
	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
