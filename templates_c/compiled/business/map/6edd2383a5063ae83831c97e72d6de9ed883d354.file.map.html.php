<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-22 06:11:13
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/business/128/map.html" */ ?>
<?php /*%%SmartyHeaderCode:11843513645d0d5601404b42-46401407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6edd2383a5063ae83831c97e72d6de9ed883d354' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/business/128/map.html',
      1 => 1555743742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11843513645d0d5601404b42-46401407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_title' => 0,
    'business_title' => 0,
    'house_keywords' => 0,
    'house_description' => 0,
    'cfg_staticPath' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'house_channelDomain' => 0,
    'cfg_cookiePre' => 0,
    'userinfo' => 0,
    'member_userDomain' => 0,
    'member_busiDomain' => 0,
    'userDomain' => 0,
    'business_channelDomain' => 0,
    'n' => 0,
    'module' => 0,
    'business_channelName' => 0,
    'cfg_webname' => 0,
    'business_logoUrl' => 0,
    'cfg_weblogo' => 0,
    'siteCityInfo' => 0,
    'service' => 0,
    'city' => 0,
    'cfg_hotline' => 0,
    'bjtype' => 0,
    'keywords' => 0,
    'site_map_apiFile' => 0,
    'site_map' => 0,
    'cfg_staticVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0d560144f032_88940750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0d560144f032_88940750')) {function content_5d0d560144f032_88940750($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value!='') {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else { ?>地图找商家<?php }?>-<?php echo $_smarty_tpl->tpl_vars['business_title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['house_keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['house_description']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/jquery.mCustomScrollbar.min.css" media="all" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=3">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/map.css?v=3">
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['house_channelDomain']->value;?>
';

    var criticalPoint = 1240, criticalClass = "w1200";
    $("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
    var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
<?php echo '</script'; ?>
>
</head>
<body>
<!--顶部菜单 s-->
<div class="top">
    <div class="wrap topbar fn-clear">
        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
            <?php $_smarty_tpl->tpl_vars['userDomain'] = new Smarty_variable($_smarty_tpl->tpl_vars['member_userDomain']->value, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==2) {?>
            <?php $_smarty_tpl->tpl_vars['userDomain'] = new Smarty_variable($_smarty_tpl->tpl_vars['member_busiDomain']->value, null, 0);?>
            <?php }?>
            <ul class="logreg" id="navLoginBefore">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['userDomain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/logout.html">安全退出</a></li>
            </ul>
        <?php } else { ?>
            <ul class="logreg" id="navLoginBefore">
                <li><a href="javascript:;" id="login">登录</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/register.html">注册</a></li>
            </ul>
        <?php }?>
        
        <ul class="topbarlink">
            <li class="index"><a href="<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
">首页</a></li>
            <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module",'type'=>"1")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['n']->value<=10) {?>
            <li class="index"><a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</a></li>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
</div>

<!--顶部菜单 end-->

<div class="header">
    <h1 class="logo">
        <a href="<?php if ($_smarty_tpl->tpl_vars['business_channelDomain']->value) {
echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;
}?>" title="<?php if ($_smarty_tpl->tpl_vars['business_channelName']->value) {
echo $_smarty_tpl->tpl_vars['business_channelName']->value;
} else {
echo $_smarty_tpl->tpl_vars['cfg_webname']->value;
}?>"><img src="<?php if ($_smarty_tpl->tpl_vars['business_logoUrl']->value) {
echo $_smarty_tpl->tpl_vars['business_logoUrl']->value;
} else {
echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;
}?>" alt=""></a>
    </h1>
    
    <div class="topInfo">
        <div class="loginbox">
        <!-- <span class="siteCityInfo">上海</span> -->
        <span class="changeCityBtn">
            <div class="msearch"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['name'];?>
<i></i></a></div>
            <!-- 「<a href="javascript:;">切换城市</a>」 -->
            <div class="changeCityList">
                <p class="setwidth"></p>
                <div class="boxpd">
                    <div class="sj"><i></i></div>
                    <div class="box">
                        <div class="content fn-clear">
                            <p class="tit">请选择您所在的城市：</p>
                            <ul>
                            
                               <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['service']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'siteCity','return'=>'city','module'=>$_tmp1)); $_block_repeat=true; echo siteConfig(array('action'=>'siteCity','return'=>'city','module'=>$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['city']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['siteCityInfo']->value['domain']==$_smarty_tpl->tpl_vars['city']->value['domain']) {?> class="curr"<?php }?> data-domain='<?php echo json_encode($_smarty_tpl->tpl_vars['city']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
<s><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/changecity_curr.png" /></s></a></li>
                              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'siteCity','return'=>'city','module'=>$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                        <div class="morecontent fn-hide">
                            <dl class="hot">
                                <dt>热门</dt>
                                <dd></dd>
                            </dl>
                            <div class="more">
                                <dl class="pytit">
                                    <dt>城市</dt>
                                    <dd></dd>
                                </dl>
                                <div class="list"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        </div>        
    </div>
    <div class="tel"><i></i><?php echo $_smarty_tpl->tpl_vars['cfg_hotline']->value;?>
</div>
</div>


<!-- 商家地图 s-->
<div class="map-box wrap">
    <div class="zoom-ctrl">
        <span class="zoom-plus">+</span>
        <span class="zoom-minus">-</span>
    </div>

    <div class="map" id="map"></div>
    <div class="sidebar">
        <div class="map-os" title="收起左栏"><i></i></div>
        <div class="search-box">
            <input type="text" name="keywords" id="skey" placeholder="输入商家名称...">
            <span id="sbtn"><i></i></span>
        </div>

        <ol class="f-o">
            <li class="qu_btn"><span>分类</span><i></i></li>
        </ol>

        <div class="listes">
            <div class="business-list"><p class="loading">加载中...</p></div>
        </div>

        <div class="filter">
            <div class="category">
                <ul class="qu">
                    <li data-id="" class="active">不限</li>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"type",'return'=>'bjtype','son'=>'1')); $_block_repeat=true; echo business(array('action'=>"type",'return'=>'bjtype','son'=>'1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li data-id="<?php echo $_smarty_tpl->tpl_vars['bjtype']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['bjtype']->value['typename'];?>
</li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"type",'return'=>'bjtype','son'=>'1'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
            <div class="catelist">
                <ul class="catelist-item show">
                </ul>
            </div>
        </div>

    </div>

</div>

<!-- 商家地图 e-->
<?php echo '<script'; ?>
>
    var g_conf = {
            "cityName": "<?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['name'];?>
",   //当前城市
            "mapWrapper": "map",  //地图区块
            "minZoom": 11,        //地图最大zoom
            "sjMin": 0,           //均价最小值
            "sjMax": 30000,       //均价最大值

            //关键字
            "keywords": "<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"

            //筛选
            ,"filter": []

            //排序
            ,"orderby": 0
             
            ,"typeid": ''
    };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_map_apiFile']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery-ui-autocomplete.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.mCustomScrollbar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/map_<?php echo $_smarty_tpl->tpl_vars['site_map']->value;?>
.js?V=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
