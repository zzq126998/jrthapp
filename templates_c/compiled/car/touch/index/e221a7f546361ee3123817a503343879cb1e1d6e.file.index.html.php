<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:32:31
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\car\touch\skin1\index.html" */ ?>
<?php /*%%SmartyHeaderCode:14917770975d5364af412ff1-87205785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e221a7f546361ee3123817a503343879cb1e1d6e' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\car\\touch\\skin1\\index.html',
      1 => 1556520713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14917770975d5364af412ff1-87205785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'car_channelName' => 0,
    'car_keywords' => 0,
    'car_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'car_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'siteCityInfo' => 0,
    'langData' => 0,
    'type' => 0,
    'list' => 0,
    'newslist' => 0,
    'wxjssdk_appId' => 0,
    'wxjssdk_timestamp' => 0,
    'wxjssdk_nonceStr' => 0,
    'wxjssdk_signature' => 0,
    'car_title' => 0,
    'car_logoUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5364af53ddd3_95661784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5364af53ddd3_95661784')) {function content_5d5364af53ddd3_95661784($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['car_channelName']->value;?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['car_keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['car_description']->value;?>
">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/swiper.min_4.2.2.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['car_channelDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
', templets_skin = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
    var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
    <?php echo '</script'; ?>
>
</head>
<body>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['car_channelName']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>$_tmp1), 0);?>


<!-- 轮播图 s -->
<div class="banner">
    <div class="wrapper">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php echo getMyAd(array('title'=>"汽车_模板一_移动端_广告一",'type'=>'slide'),$_smarty_tpl);?>

            </div>
            <div class="pagination"></div>
        </div>
    </div>

    <div class="area">
        <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/changecity.html">
            <s></s>
            <label><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['name'];?>
</label>
            <i></i>
        </a>
    </div>
</div>
<!-- 轮播图 e -->

<!--导航 s-->
<div class="nav">
    <ul class="fn-clear">
        <li><a href="<?php echo getUrlPath(array('service'=>"car",'template'=>"list"),$_smarty_tpl);?>
">
            <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/ic01.png" alt=""></span>
            <span class="icon-text"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][88];?>
</span></a>
        </li>
        <li><a href="<?php echo getUrlPath(array('service'=>"car",'template'=>"sell"),$_smarty_tpl);?>
">
            <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/ic02.png" alt=""></span>
            <span class="icon-text"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][89];?>
</span></a>
        </li>
        <li><a href="<?php echo getUrlPath(array('service'=>"car",'template'=>"store"),$_smarty_tpl);?>
">
            <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/ic03.png" alt=""></span>
            <span class="icon-text"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][54];?>
</span></a>
        </li>
        <li><a href="<?php echo getUrlPath(array('service'=>"car",'template'=>"list"),$_smarty_tpl);?>
?usertype=0">
            <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/ic04.png" alt=""></span>
            <span class="icon-text"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][90];?>
</span></a>
        </li>
        <li><a href="<?php echo getUrlPath(array('service'=>"car",'template'=>"news"),$_smarty_tpl);?>
">
            <span class="icon-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/ic05.png" alt=""></span>
            <span class="icon-text"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][52];?>
</span></a>
        </li>
    </ul>
</div>

<!--导航 e-->

<!--搜索 s-->
<div class="seabox">
    <div class="inp">
        <form id="myForm" action="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
" method="get">
            <a href="#">
                <label class="search_l"><s class="search_icon"></s><input type="text" id="keywords" name="keywords"  placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][87];?>
" ></label>

                <span id="search"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][0];?>
</span>
            </a>
        </form>
    </div>
</div>
<!--搜索 e-->

<div class="quick_screen">
    <div class="car-price">
        <ul class="fn-clear">
            <li><a href="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
?prices=,3">3万以下</a></li>
            <li><a href="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
?prices=3,5">3-5万</a></li>
            <li><a href="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
?prices=5,10">5-10万</a></li>
            <li><a href="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
?prices=10,20">10-20万</a></li>
            <li><a href="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
?prices=20,">20万以上</a></li>
        </ul>
    </div>
    <div class="car-brand">
        <ul class="fn-clear">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"type",'return'=>'type','pageSize'=>10)); $_block_repeat=true; echo car(array('action'=>"type",'return'=>'type','pageSize'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
">
                <span class="brand_icon"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['iconturl'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
" alt=""></span>
                <span class="bread_text"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
            </a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"type",'return'=>'type','pageSize'=>10), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>

    <div class="car-btns fn-clear">
        <a class="all-car-home" href="<?php echo getUrlPath(array('service'=>"car",'template'=>"list"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][1];?>
</a>
        <a class="check-in" href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter_car'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][2];?>
</a>
    </div>

</div>

<div class="sku_info">
    <ul class="fn-clear">
        <?php echo getMyAd(array('title'=>"汽车_模板一_移动端_广告二"),$_smarty_tpl);?>

    </ul>
</div>

<!--个人车源 s-->
<div class="per-source">
    <h3 class="tit"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][3];?>
</span></h3>
    <ul>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"car",'return'=>"list",'usertype'=>"1",'orderby'=>"1",'pageSize'=>"5")); $_block_repeat=true; echo car(array('action'=>"car",'return'=>"list",'usertype'=>"1",'orderby'=>"1",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
            <div class="imgbox"><img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['list']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt=""></div>
            <h4><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h4>
            <p class="price"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][20];?>
</p>
        </a></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"car",'return'=>"list",'usertype'=>"1",'orderby'=>"1",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

    <div class="p_more"><a href="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
?usertype=0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][4];?>
</a></div>
</div>
<!--个人车源 e-->

<!--线下门店 s-->
    <div class="store">
        <h3 class="tit"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][5];?>
</span></h3>
        <ul>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"storeList",'return'=>"list",'orderby'=>"1",'pageSize'=>"5")); $_block_repeat=true; echo car(array('action'=>"storeList",'return'=>"list",'orderby'=>"1",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
                <div class="imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt=""><span><?php echo $_smarty_tpl->tpl_vars['list']->value['addrName'][count($_smarty_tpl->tpl_vars['list']->value['addrName'])-2];?>
</span></div>
                <h4><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h4>
                <p class="num"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][91];?>
: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['list']->value['salenums'])===null||$tmp==='' ? 0 : $tmp);
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][82];?>
</p>
            </a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"storeList",'return'=>"list",'orderby'=>"1",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="s_more"><a href="<?php echo getUrlPath(array('service'=>'car','template'=>'store'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][6];?>
</a></div>
    </div>
<!--线下门店 e-->

<!--资讯 s-->
<div class="artical">
    <ul>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"news",'return'=>"newslist",'orderby'=>"1",'pageSize'=>"3")); $_block_repeat=true; echo car(array('action'=>"news",'return'=>"newslist",'orderby'=>"1",'pageSize'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="fn-clear"><a href="<?php echo $_smarty_tpl->tpl_vars['newslist']->value['url'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['newslist']->value['litpic']) {?><div class="img-box"><img src="<?php echo $_smarty_tpl->tpl_vars['newslist']->value['litpic'];?>
" alt=""><span><?php echo $_smarty_tpl->tpl_vars['newslist']->value['imgGroupNum'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][80];?>
</span></div><?php }?>
            <div class="info">
                <h4><?php echo $_smarty_tpl->tpl_vars['newslist']->value['title'];?>
</h4>
                <p><em><?php echo $_smarty_tpl->tpl_vars['newslist']->value['source'];?>
</em> <em><?php echo $_smarty_tpl->tpl_vars['newslist']->value['click'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][81];?>
 · <?php echo $_smarty_tpl->tpl_vars['newslist']->value['floortime'];?>
</em></p>
            </div>
        </a></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"news",'return'=>"newslist",'orderby'=>"1",'pageSize'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
    <a class="in_more" href="<?php echo getUrlPath(array('service'=>'car','template'=>'news'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][7];?>
</a>
</div>
<!--资讯 e-->

<!--推荐车型 s-->
<div class="recom">
    <ul class="nav-tab fn-clear">
        <li class="curr"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][8];?>
</span></li>
        <li><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][9];?>
</span></li>
        <li><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][10];?>
</span></li>
    </ul>
    <div class="filter">
        <ul class="container show">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"car",'return'=>"list",'flags'=>"0",'orderby'=>"1",'pageSize'=>"4")); $_block_repeat=true; echo car(array('action'=>"car",'return'=>"list",'flags'=>"0",'orderby'=>"1",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="fn-clear"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
                <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></div>
                <div class="info">
                    <div class="tit"><span class="tit_tex sliceFont" data-num="20"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </span><?php if (strpos($_smarty_tpl->tpl_vars['list']->value['flag'],2)>-1) {?><span class="new"> </span><?php }?> <?php if (strpos($_smarty_tpl->tpl_vars['list']->value['flag'],1)>-1) {?><span class="z_new"> </span><?php }?></div>
                    <p class="by_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['cardtime'],'%Y');
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][55];?>
 | <?php echo $_smarty_tpl->tpl_vars['list']->value['mileage'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][21];?>
</p>
                    <p class="price"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][20];?>
</p>
                </div>
            </a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"car",'return'=>"list",'flags'=>"0",'orderby'=>"1",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <ul class="container">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"car",'return'=>"list",'orderby'=>"1",'pageSize'=>"4")); $_block_repeat=true; echo car(array('action'=>"car",'return'=>"list",'orderby'=>"1",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="fn-clear"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
                <div class="img"><img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['list']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt=""></div>
                <div class="info">
                    <div class="tit"><span class="tit_tex sliceFont" data-num="20"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </span><?php if (strpos($_smarty_tpl->tpl_vars['list']->value['flag'],2)>-1) {?><span class="new"> </span><?php }?> <?php if (strpos($_smarty_tpl->tpl_vars['list']->value['flag'],1)>-1) {?><span class="z_new"> </span><?php }?></div>
                    <p class="by_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['cardtime'],'%Y');
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][55];?>
 | <?php echo $_smarty_tpl->tpl_vars['list']->value['mileage'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][21];?>
</p>
                    <p class="price"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][20];?>
</p>
                </div>
            </a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"car",'return'=>"list",'orderby'=>"1",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <ul class="container">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"car",'return'=>"list",'flags'=>"3",'orderby'=>"1",'pageSize'=>"4")); $_block_repeat=true; echo car(array('action'=>"car",'return'=>"list",'flags'=>"3",'orderby'=>"1",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="fn-clear"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
                <div class="img"><img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['list']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt=""></div>
                <div class="info">
                    <div class="tit"><span class="tit_tex sliceFont" data-num="20"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </span><?php if (strpos($_smarty_tpl->tpl_vars['list']->value['flag'],2)>-1) {?><span class="new"> </span><?php }?> <?php if (strpos($_smarty_tpl->tpl_vars['list']->value['flag'],1)>-1) {?><span class="z_new"> </span><?php }?></div>
                    <p class="by_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['cardtime'],'%Y');
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][55];?>
 | <?php echo $_smarty_tpl->tpl_vars['list']->value['mileage'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][21];?>
</p>
                    <p class="price"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];
echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][20];?>
</p>
                </div>
            </a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"car",'return'=>"list",'flags'=>"3",'orderby'=>"1",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
    <a class="re_more" href="<?php echo getUrlPath(array('service'=>'car','template'=>'list'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][11];?>
</a>
</div>

<div class="gotop"><a href="#"></a></div>

<!--推荐车型 e-->
<?php echo '<script'; ?>
 type="text/javascript">
	var wxconfig = {
		"appId": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_appId']->value;?>
',
		"timestamp": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_timestamp']->value;?>
',
		"nonceStr": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_nonceStr']->value;?>
',
		"signature": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_signature']->value;?>
',
		"description": '<?php echo $_smarty_tpl->tpl_vars['car_description']->value;?>
',
		"title": '<?php echo $_smarty_tpl->tpl_vars['car_title']->value;?>
',
		"imgUrl": '<?php echo $_smarty_tpl->tpl_vars['car_logoUrl']->value;?>
',
		"link": '<?php echo $_smarty_tpl->tpl_vars['car_channelDomain']->value;?>
',
	};

	document.write(unescape("%3Cscript src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v="+~(-new Date())+"'type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/swiper.min_4.2.2.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
