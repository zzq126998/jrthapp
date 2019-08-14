<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 11:53:11
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/shop/132/index.html" */ ?>
<?php /*%%SmartyHeaderCode:17203129595d4505270d6032-63008311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0645e225e9784f1a374b7d72be8e32a849f6446b' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/shop/132/index.html',
      1 => 1555746422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17203129595d4505270d6032-63008311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
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
    '_bindex' => 0,
    'nlist' => 0,
    'cfg_weixinQr' => 0,
    'Flist' => 0,
    'slist' => 0,
    'newslist' => 0,
    'list' => 0,
    'pageInfo' => 0,
    'installModuleArr' => 0,
    'row' => 0,
    'noid' => 0,
    'type' => 0,
    'type1' => 0,
    'm' => 0,
    'category' => 0,
    'tid' => 0,
    'tid1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d45052716dd54_17638174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d45052716dd54_17638174')) {function content_5d45052716dd54_17638174($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <title><?php echo $_smarty_tpl->tpl_vars['shop_title']->value;?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['shop_keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['shop_description']->value;?>
" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
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
<body class="w1200">
<!--头部 s-->
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('index', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--头部 e-->
<div class="bg_box">
    <div class="wrap fn-clear">

        <!--广告轮播 s-->
        <div class="adbox" id="adbox">
            <div class=" slideBox" id="slideBox">
                <div class="wrap">
                    <div class="hd">
                        <ul></ul>
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
                    </div>
                </div>
                <div class="bd">
                    <ul>
                        <?php echo getMyAd(array('title'=>"商城_模板二_电脑端_广告二",'type'=>"slide"),$_smarty_tpl);?>

                    </ul>
                </div>
            </div>
        </div>
        <!--广告轮播 e-->

        <!--商家入驻 s-->
        <div class="setted">
            <div class="info">
                <div class="tit">
                    <a target="_blank" href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'enter'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/ru.png"></a>
                    <a target="_blank" href="<?php echo getUrlPath(array('service'=>'member','template'=>'config-shop'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/gua.png"></a>
                </div>
                <h3>快讯 <a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"news"),$_smarty_tpl);?>
"> 更多 ></a></h3>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"news",'return'=>"nlist",'pageSize'=>"7")); $_block_repeat=true; echo shop(array('action'=>"news",'return'=>"nlist",'pageSize'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <p><a target="_blank" <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['nlist']%2==0) {?>class="cut"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
"><span>【<?php echo $_smarty_tpl->tpl_vars['nlist']->value['typename'];?>
】</span><?php echo $_smarty_tpl->tpl_vars['nlist']->value['title'];?>
</a></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"news",'return'=>"nlist",'pageSize'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <div class="qr_box"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
"></div>
            </div>
            <div class="bg"></div>
        </div>
        <!--商家入驻 e-->
    </div>
</div>


<div class="contain">
    <div class="wrap">
        <!--限时抢购 s-->
        <div class="fn-clear secskill qianggou bottom30">
            <div class="left">
                <p class="tit">限时抢购</p>
                <p class="en">LAST MINUTE</p>
                <p class="dec">距离本场结束还剩</p>
                <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/bg_qiang.png" alt="">
                <div class="djs">
                    <div class="line"></div>
                    <div class="daojishibox"><span></span><span></span><span></span><span></span></div>
                    <div class="daojishi"><span class="h">00</span><span class="m">00</span><span class="s">00</span><span class="hm">00</span></div>
                </div>
            </div>
            <ul class="mid fn-clear" id="qgou">
            </ul>
            <div class="right">
                    <div class="slideBox slideBox1">
                        <div class="bd">
                            <ul class="fn-clear">
                                <?php echo getMyAd(array('title'=>"商城_模板二_电脑端_广告三",'type'=>"slide"),$_smarty_tpl);?>

                            </ul>
                        </div>
                        <div class="hd"><ul class="fn-clear"></ul></div>
                    </div>
            </div>
        </div>
        <!--限时抢购 e-->

        <!--领券中心 热销榜单  商城资讯 s-->
        <div class="fn-clear part2 bottom30">
            <!-- <div class="lquan">
                <h2><a href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"quan"),$_smarty_tpl);?>
">领券中心 <span>优惠不可错过 GO></span></a></h2>
                <div class="slideBox slideBox2">
                    <div class="bd">
                        <ul class="fn-clear">
                            <li class="item"><a href="#" class="fn-clear">
                                <div class="img">
                                    <p class="price"><e>¥</e>300 </p>
                                    <p class="contact">满4999可用</p>
                                </div>
                                <div class="info">
                                    <p class="name">格力空调店铺满减优惠券</p>
                                    <p class="zhu">仅购买指定型号空调</p>
                                    <div class="count">已抢 60%</div>
                                    <div class="progress">
                                        <b style="width:60%"></b>
                                    </div>
                                    <span class="btn curr">已领取</span>
                                </div>
                            </a></li>

                            <li class="item"><a href="#" class="fn-clear">
                                <div class="img">
                                    <p class="price"><e>¥</e>300 </p>
                                    <p class="contact">满4999可用</p>
                                </div>
                                <div class="info">
                                    <p class="name">格力空调店铺满减优惠券</p>
                                    <p class="zhu">仅购买指定型号空调</p>
                                    <div class="count">已抢 60%</div>
                                    <div class="progress">
                                        <b style="width:60%"></b>
                                    </div>
                                    <span class="btn">立即领取</span>
                                </div>
                            </a></li>
                        </ul>
                    </div>
                    <div class="hd"><ul class="fn-clear"></ul></div>
                </div>
            </div> -->
            <!--每日推荐s-->
            <div class="hotsale rec">
                <h2><a target="_blank" href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"list"),$_smarty_tpl);?>
?flag=0"><p class="c">每日推荐 <span>优惠不可错过 GO></span></p></a></h2>
                <div class="slideBox slideBox2">
                    <div class="bd">
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"Flist",'flag'=>"0",'orderby'=>"1",'pageSize'=>"9")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"Flist",'flag'=>"0",'orderby'=>"1",'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="item"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['Flist']->value['url'];?>
" class="fn-clear">
                                <div class="hot-item fn-clear">
                                    <img src="<?php if ($_smarty_tpl->tpl_vars['Flist']->value['litpic']) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['Flist']->value['litpic'];?>
<?php $_tmp1=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp1,'type'=>'middle'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                                    <div class="info">
                                        <p class="name"><?php echo $_smarty_tpl->tpl_vars['Flist']->value['title'];?>
</p>
                                        <p class="pc"><span class="price"><e><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</e><?php echo $_smarty_tpl->tpl_vars['Flist']->value['price'];?>
</span> <span class="count">销量 : <?php echo $_smarty_tpl->tpl_vars['Flist']->value['sales'];?>
笔</span></p>
                                    </div>
                                </div>
                                <i class="num"><?php echo $_smarty_tpl->tpl_vars['_bindex']->value['Flist'];?>
</i>
                                <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['Flist']==1) {?>
                                <span class="fir"></span>
                                <?php }?>
                            </a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"Flist",'flag'=>"0",'orderby'=>"1",'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="hd"><ul class="fn-clear"></ul></div>
                </div>
            </div>
            <!--每日推荐d-->
            <!--热销榜单-->
            <div class="hotsale">
                <h2><a target="_blank" href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"list"),$_smarty_tpl);?>
"><p class="c">热销榜单 <span>大家都在买</span></p></a></h2>
                <div class="slideBox slideBox3">
                    <div class="bd">
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"slist",'orderby'=>"1",'pageSize'=>"9")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"slist",'orderby'=>"1",'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="item"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['slist']->value['url'];?>
" class="fn-clear">
                                <div class="hot-item fn-clear">
                                    <img src="<?php if ($_smarty_tpl->tpl_vars['slist']->value['litpic']) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['slist']->value['litpic'];?>
<?php $_tmp2=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp2,'type'=>'middle'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                                    <div class="info">
                                        <p class="name"><?php echo $_smarty_tpl->tpl_vars['slist']->value['title'];?>
</p>
                                        <p class="pc"><span class="price"><e><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</e><?php echo $_smarty_tpl->tpl_vars['slist']->value['price'];?>
</span> <span class="count">销量 : <?php echo $_smarty_tpl->tpl_vars['slist']->value['sales'];?>
笔</span></p>
                                    </div>
                                </div>
                                <i class="num"><?php echo $_smarty_tpl->tpl_vars['_bindex']->value['slist'];?>
</i>
                                <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['slist']==1) {?>
                                <span class="fir"></span>
                                <?php }?>
                            </a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"slist",'orderby'=>"1",'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="hd"><ul class="fn-clear"></ul></div>
                </div>
            </div>

            <!--商城资讯-->
            <div class="shanginfo">
                <h2><a target="_blank" href="<?php echo getUrlPath(array('service'=>"shop",'template'=>"news"),$_smarty_tpl);?>
">商城资讯 <span>多方资讯紧随潮流 GO></span></a> </h2>
                <div class="slideBox slideBox4">
                    <div class="bd">
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"news",'return'=>"newslist",'orderby'=>"1",'pageSize'=>"3")); $_block_repeat=true; echo shop(array('action'=>"news",'return'=>"newslist",'orderby'=>"1",'pageSize'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="item"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['newslist']->value['url'];?>
" class="fn-clear">
                                <img src="<?php if ($_smarty_tpl->tpl_vars['newslist']->value['litpic']) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['newslist']->value['litpic'];?>
<?php $_tmp3=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp3,'type'=>'large'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                                <P class="name"><?php echo $_smarty_tpl->tpl_vars['newslist']->value['title'];?>
</P>
                                <p class="content"><?php echo $_smarty_tpl->tpl_vars['newslist']->value['note'];?>
</p>
                            </a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"news",'return'=>"newslist",'orderby'=>"1",'pageSize'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="hd"><ul class="fn-clear"></ul></div>
                </div>

            </div>
        </div>
        <!--领券中心 热销榜单  商城资讯 e-->

        <!--准点秒杀 s-->
        <div class="fn-clear secskill punctuality bottom30">
            <div class="left">
                <p class="tit">准点秒杀</p>
                <p class="en">FLASH DEALS</p>
                <p class="dec">1元秒杀 数量有限 <br>
                    只拼手速</p>
                <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/bg_seckill.png" alt="">
            </div>
            <ul class="mid fn-clear">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'limited'=>"5",'pageSize'=>4,'return'=>'list')); $_block_repeat=true; echo shop(array('action'=>"slist",'limited'=>"5",'pageSize'=>4,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
                    <img src="<?php if (!empty($_smarty_tpl->tpl_vars['list']->value['litpic'])) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
<?php $_tmp4=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp4,'type'=>'middle'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                    <p class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                    <p class="price"><s> <?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['mprice'];?>
</s> <span><i><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</i><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
 </span></p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'limited'=>"5",'pageSize'=>4,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']<1) {?>
                <div class="loading">暂无抢购活动</div>
                <?php }?>

            </ul>
            <div class="right">
                <div class="slideBox slideBox1">
                    <div class="bd">
                        <ul class="fn-clear">
                            <?php echo getMyAd(array('title'=>"商城_模板二_电脑端_广告四",'type'=>"slide"),$_smarty_tpl);?>

                        </ul>
                    </div>
                    <div class="hd"><ul class="fn-clear"></ul></div>
                </div>

            </div>

        </div>
        <!--准点秒杀 e-->
        <?php if (in_array("integral",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
        <!--积分换购 s-->
        <div class="fn-clear secskill jifen bottom30">
            <div class="left">
                <p class="tit">积分换购</p>
                <p class="en">POINTS<br>
                    REDEMPTION</p>
                <p class="dec">0元换购 积分抵现<br>
                    积分不再闲置</p>
                <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/bg_jifen.png" alt="">
            </div>
            <ul class="mid fn-clear">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('integral', array('action'=>"slist",'flat'=>"0",'pageSize'=>4,'return'=>'list')); $_block_repeat=true; echo integral(array('action'=>"slist",'flat'=>"0",'pageSize'=>4,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">
                    <img src="<?php if (!empty($_smarty_tpl->tpl_vars['list']->value['litpic'])) {
echo $_smarty_tpl->tpl_vars['list']->value['litpic'];
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                    <p class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                    <p class="integral "><e><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 </e><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
 + <?php echo $_smarty_tpl->tpl_vars['list']->value['point'];?>
<span>积分</span> </p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo integral(array('action'=>"slist",'flat'=>"0",'pageSize'=>4,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="right">
                <div class="slideBox slideBox1">
                    <div class="bd">
                        <ul class="fn-clear">
                            <?php echo getMyAd(array('title'=>"商城_模板二_电脑端_广告五",'type'=>"slide"),$_smarty_tpl);?>

                        </ul>
                    </div>
                    <div class="hd"><ul class="fn-clear"></ul></div>
                </div>
            </div>
        </div>
        <!--积分换购 e-->
        <?php }?>

        <!--推荐商家 s-->
        <div class="recommoend bottom30">
                <h2>推荐商家 <a href="#">所有商家 ></a></h2>
                <div class="slideBox slideBox5">
                    <div class="bd">
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"store",'return'=>"list",'rec'=>"1",'pageSize'=>"9")); $_block_repeat=true; echo shop(array('action'=>"store",'return'=>"list",'rec'=>"1",'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="item"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" class="fn-clear">
                              <div class="tit fn-clear">
                                  <img src="<?php if (!empty($_smarty_tpl->tpl_vars['list']->value['logo'])) {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['list']->value['logo']),'type'=>"large"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                                  <div class="info">
                                      <p class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                                      <p class="tel"><?php if ($_smarty_tpl->tpl_vars['list']->value['tel']) {?>电话 : <?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];
}?> <?php if ($_smarty_tpl->tpl_vars['list']->value['wechatcode']) {?><span class="wx">微信 : <?php echo $_smarty_tpl->tpl_vars['list']->value['wechatcode'];?>
</span><?php }?></p>
                                      <p class="sure"><?php if ($_smarty_tpl->tpl_vars['list']->value['userinfo']['certifyState']==1) {?><span class="sm"><i></i>实名认证</span><?php }?> <span class="bz"><i></i>保证金</span><span class="wx"><i></i>微信支付</span><span class="zf"><i></i>支付宝</span></p>
                                  </div>
                              </div>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"row",'store'=>$_tmp5,'pageSize'=>"1")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"row",'store'=>$_tmp5,'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <div class="img_big">
                                    <img src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['litpic'])) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
<?php $_tmp6=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp6,'type'=>'large'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                                    <div class="msg">
                                        <div class="info">
                                            <p class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p>
                                            <p class="price"><i><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</i><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</p>
                                        </div>
                                        <div class="bg"></div>
                                    </div>
                                </div>
                                <?php $_smarty_tpl->tpl_vars['noid'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['id'], null, 0);?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"row",'store'=>$_tmp5,'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <div class="img_small fn-clear">
                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"row",'store'=>$_tmp7,'pageSize'=>"4")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"row",'store'=>$_tmp7,'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['id']!=$_smarty_tpl->tpl_vars['noid']->value) {?>
                                    <div class="s_item">
                                        <div class="imgbox">
                                            <img  src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['litpic'])) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
<?php $_tmp8=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp8,'type'=>'middle'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt="">
                                            <div class="s_msg">
                                                <span class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</span>
                                                <div class="bg"></div>
                                            </div>

                                        </div>
                                        <p class="price"><i><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</i><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</p>
                                    </div>
                                    <?php }?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"row",'store'=>$_tmp7,'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </div>
                                <div class="qr_box">
                                    <e class="qr_bg"></e>
                                    <i class="qr_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" alt=""></i>
                                </div>
                            </a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"store",'return'=>"list",'rec'=>"1",'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="hd"><ul class="fn-clear"></ul></div>
                </div>
        </div>
        <!--推荐商家 e-->
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'son'=>"1",'return'=>"type",'pageSize'=>"4")); $_block_repeat=true; echo shop(array('action'=>"type",'son'=>"1",'return'=>"type",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <!--1F 百货食品 s-->
        <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['type']==3) {?>
        <div class="ad bottom30 fn-clear">
            <?php echo getMyAd(array('title'=>"商城_模板二_电脑端_广告六",'type'=>"slide"),$_smarty_tpl);?>

        </div>
        <?php }?>
        <div class="general <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['type']==1) {?>Baihuo<?php } elseif ($_smarty_tpl->tpl_vars['_bindex']->value['type']==2) {?>Digital<?php } elseif ($_smarty_tpl->tpl_vars['_bindex']->value['type']==3) {?>Muyin<?php } elseif ($_smarty_tpl->tpl_vars['_bindex']->value['type']==4) {?>Meizhuang<?php }?> bottom30">
            <h2 class="title"><strong><?php echo $_smarty_tpl->tpl_vars['_bindex']->value['type'];?>
F</strong><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
 <a target="_blank" href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
?typeid=<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
">查看更多 ></a> 
                <p class="gen_tit">
                    <span class="active">热卖推荐</span>
                    <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable(1, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"2")); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <span><?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['m']->value==1) {?>
                    <?php $_smarty_tpl->tpl_vars['tid'] = new Smarty_variable($_smarty_tpl->tpl_vars['type1']->value['id'], null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['m']->value==2) {?>
                    <?php $_smarty_tpl->tpl_vars['tid1'] = new Smarty_variable($_smarty_tpl->tpl_vars['type1']->value['id'], null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </p>
            </h2>
            <div class="content">
                <div class="g_item fn-clear show">
                    <div class="left"><?php echo getMyAd(array('title'=>"商城_模板二_电脑端_楼层".((string)$_smarty_tpl->tpl_vars['_bindex']->value['type'])."广告"),$_smarty_tpl);?>

                    <div class="fl">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id'])); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a target="_blank" href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
?typeid=<?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['type']->value['id']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                    </div>

                    <div class="mid">
                        <div class="slideBox <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['type']==1) {?>slideBox6<?php } elseif ($_smarty_tpl->tpl_vars['_bindex']->value['type']==2) {?>slideBox7<?php } elseif ($_smarty_tpl->tpl_vars['_bindex']->value['type']==3) {?>slideBox8<?php } elseif ($_smarty_tpl->tpl_vars['_bindex']->value['type']==4) {?>slideBox9<?php }?>">
                            <div class="bd">
                                <ul class="fn-clear">
                                    <?php echo getMyAd(array('title'=>"商城_模板二_电脑端_楼层".((string)$_smarty_tpl->tpl_vars['_bindex']->value['type'])."幻灯片广告"),$_smarty_tpl);?>

                                </ul>
                            </div>
                            <div class="hd"><ul class="fn-clear"></ul></div>
                            <div class="pp fn-clear">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"brand",'return'=>"category",'category'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"6")); $_block_repeat=true; echo shop(array('action'=>"brand",'return'=>"category",'category'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <span><a target="_blank" href="<?php echo getUrlPath(array('service'=>'shop','template'=>'list'),$_smarty_tpl);?>
?brand=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['category']->value['logo'];?>
" alt=""></a></span>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"brand",'return'=>"category",'category'=>$_smarty_tpl->tpl_vars['type']->value['id'],'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                        </div>
                    </div>

                    <ul class="right fn-clear">
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp9,'pageSize'=>"6")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp9,'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><img src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['litpic'])) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
<?php $_tmp10=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp10,'type'=>'middle'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt=""><p class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p><p class="price"><i><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</i><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</p></a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp9,'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                
                <div class="g_item chaoliu">
                    <ul class="fn-clear">
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp11,'pageSize'=>"12")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp11,'pageSize'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><img src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['litpic'])) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
<?php $_tmp12=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp12,'type'=>'middle'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt=""><p class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p><p class="price"><i><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</i><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</p></a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp11,'pageSize'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <div class="g_item chaoliu">
                    <ul class="fn-clear">
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tid1']->value;?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp13,'pageSize'=>"12")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp13,'pageSize'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><img src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['litpic'])) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
<?php $_tmp14=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp14,'type'=>'middle'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
static/images/404.jpg<?php }?>" alt=""><p class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p><p class="price"><i><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</i><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</p></a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"row",'typeid'=>$_tmp13,'pageSize'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>
        <!--1F 百货食品 e-->
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'son'=>"1",'return'=>"type",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    </div>

</div>

<!--底部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--底部 e-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.cycle.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
