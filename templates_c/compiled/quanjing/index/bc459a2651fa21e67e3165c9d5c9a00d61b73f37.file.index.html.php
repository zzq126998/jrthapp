<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 17:24:42
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/quanjing/skin1/index.html" */ ?>
<?php /*%%SmartyHeaderCode:549526305d4552da95b205-08407107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc459a2651fa21e67e3165c9d5c9a00d61b73f37' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/quanjing/skin1/index.html',
      1 => 1558436080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549526305d4552da95b205-08407107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'quanjing_title' => 0,
    'quanjing_keywords' => 0,
    'quanjing_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'cfg_currentHost' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4552da990a34_17820385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4552da990a34_17820385')) {function content_5d4552da990a34_17820385($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['quanjing_title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['quanjing_keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['quanjing_description']->value;?>
" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_currentHost']->value;?>
';
	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
  var atpage = 1, totalCount = 0, pageSize = 12;
  var staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
	var templets_skin = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
',templatePath = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
<?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['channel'] = new Smarty_variable("quanjing", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_top_v1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--banner轮播图 s-->
<div class="wrapper">
    <div class="swiper-container">
        <div class="swiper-wrapper swiper-no-swiping">
          <?php echo getMyAd(array('title'=>"全景_模板一_电脑端_广告一",'type'=>'slide'),$_smarty_tpl);?>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!--banner轮播图 e-->

<!--内容分类 s-->
<div class="view-con wrap">
    <div class="nav-con fn-clear">
        <ul class="nav-tab">
            <li class="active" data-id="0">全部</li>
            <li data-id="1">最新</li>
            <li data-id="2">人气</li>
        </ul>
       <ul class="nav-list fn-clear">
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('quanjing', array('action'=>'type','return'=>'type')); $_block_repeat=true; echo quanjing(array('action'=>'type','return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

           <li><a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo quanjing(array('action'=>'type','return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

       </ul>
    </div>
    <div class="main-con show">
        <ul class="main-list fn-clear " id="mainList" data-page="1">
            <div class="loading">正在加载...</div>
        </ul>
        <div class="pagination fn-clear" ></div>
    </div>
</div>
<!--内容分类 e-->

<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'siteConfig','theme'=>'gray'), 0);?>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
