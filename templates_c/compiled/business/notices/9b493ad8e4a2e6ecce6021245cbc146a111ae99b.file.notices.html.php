<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-22 07:37:45
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/business/128/notices.html" */ ?>
<?php /*%%SmartyHeaderCode:12281652205d0d6a49055eb3-15735590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b493ad8e4a2e6ecce6021245cbc146a111ae99b' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/business/128/notices.html',
      1 => 1555743742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12281652205d0d6a49055eb3-15735590',
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
    'cfg_staticVersion' => 0,
    'cfg_basehost' => 0,
    'business_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'cfg_hotline' => 0,
    'HUONIAOROOT' => 0,
    'page' => 0,
    'nlist' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0d6a490a15e5_22598264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0d6a490a15e5_22598264')) {function content_5d0d6a490a15e5_22598264($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/hnup.rucheng.pro/include/tpl/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value!='') {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else { ?>商家公告列表<?php }?>-<?php echo $_smarty_tpl->tpl_vars['business_title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['business_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['business_description']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/notices.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
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
var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;
var templets_skin = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
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
<div class="list-container wrap">
	<p class="index-page"><a href="<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
">首页</a> &gt; <a href="<?php echo getUrlPath(array('service'=>'business','template'=>'notices'),$_smarty_tpl);?>
">公告</a></p>
	<div class="noicelist">
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"notice",'return'=>'nlist','page'=>$_tmp2,'pageSize'=>"9")); $_block_repeat=true; echo business(array('action'=>"notice",'return'=>'nlist','page'=>$_tmp2,'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="notice_com">
				<div class="nc_lead fn-clear">
					<div class="nc_title"><i>•</i><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nlist']->value['title'];?>
</a></div>
					<div class="nc_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['nlist']->value['pubdate'],"%Y.%m.%d");?>
</div>
				</div>
				<div class="nc_text"> <?php echo $_smarty_tpl->tpl_vars['nlist']->value['body'];?>
</div>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"notice",'return'=>'nlist','page'=>$_tmp2,'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
				<div class="notice_com">
					<div class="nc_lead fn-clear">
						<div class="nc_title" style="text-align: center;">暂无公告</div>
					</div>
				</div>
			<?php }?>
	</div>

	<div class="page">
		<?php echo getPageList(array('service'=>'business','template'=>'notices','pageType'=>'dynamic','param'=>"page=#page#"),$_smarty_tpl);?>

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
</body>
</html><?php }} ?>
