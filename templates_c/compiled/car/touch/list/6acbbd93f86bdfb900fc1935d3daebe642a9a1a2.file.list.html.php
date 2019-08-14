<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:32:57
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\car\touch\skin1\list.html" */ ?>
<?php /*%%SmartyHeaderCode:9170204855d5364c94d39b3-42504064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acbbd93f86bdfb900fc1935d3daebe642a9a1a2' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\car\\touch\\skin1\\list.html',
      1 => 1556520713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9170204855d5364c94d39b3-42504064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'langData' => 0,
    'car_keywords' => 0,
    'car_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'car_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'keywords' => 0,
    'brand' => 0,
    'prices' => 0,
    'type' => 0,
    'store' => 0,
    'usertype' => 0,
    'wxjssdk_appId' => 0,
    'wxjssdk_timestamp' => 0,
    'wxjssdk_nonceStr' => 0,
    'wxjssdk_signature' => 0,
    'car_typename' => 0,
    'car_logoUrl' => 0,
    'list_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5364c957f819_68668581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5364c957f819_68668581')) {function content_5d5364c957f819_68668581($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][88];?>
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
css/ui/ion.rangeSlider.min.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/list.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>((string)$_smarty_tpl->tpl_vars['langData']->value['car'][6][88])), 0);?>

<!--搜索 s-->
<div class="seabox">
    <div class="inp">
        <form id="myForm" action="" method="get">
            <a href="#">
                <label class="search_l"><s class="search_icon"></s><input type="text" id="keywords" name="search_keyword"  value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][87];?>
" ></label>
                <span id="search"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][0];?>
</span>
            </a>
        </form>
    </div>
</div>
<!--搜索 e-->
<div class="choose-box">
    <ul class="choose-tab fn-clear">
        <li data-type="brand" data-id="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
" class="brand"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][12];?>
</span></li>
        <li class="price" data-id="<?php echo $_smarty_tpl->tpl_vars['prices']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][13];?>
</span></li>
        <li><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][14];?>
</span></li>
        <li class="paixu" data-id=""><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][0][15];?>
</span></li>
    </ul>

    <div class="choose-list">
        <div class="choose-con">
            <!--品牌 s-->
            <div class="choose-li choose-local">
                <div class="choose-brand fn-clear">
                    <div class="category-wrapper">
                        <p class="brand-top"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][1];?>
</p>
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][2];?>
</p>
                        <ul class="brand-list">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"typeList",'return'=>'type','son'=>"1",'orderby'=>"3",'pageSize'=>9999)); $_block_repeat=true; echo car(array('action'=>"typeList",'return'=>'type','son'=>"1",'orderby'=>"3",'pageSize'=>9999), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><i><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['icon'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
" alt=""></i><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"typeList",'return'=>'type','son'=>"1",'orderby'=>"3",'pageSize'=>9999), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="brand-wrapper">
                        <ul class="show">
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--价格 s-->
            <div class="choose-li choose-local">
                <div class="choose-price">
                    <ul class="fn-clear">
                        <li data-price=""><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][3];?>
</li>
                        <li data-price=",3">3万以下</li>
                        <li data-price="3,5">3-5万</li>
                        <li data-price="5,10">5-10万</li>
                        <li data-price="10,15">10-15万</li>
                        <li data-price="10,20">10-20万</li>
                        <li data-price="20,30">20-30万</li>
                        <li data-price="30,50">30-50万</li>
                        <li data-price="50,">50万以上</li>
                    </ul>
                    <div class="choose-price-user">
                        <div class="choose-price-user_title fn-clear"><span class="t"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][0];?>
</span> <div class="fn-right"><span data-price="" class="price-text" id="price-text">17万以上</span><span class="btn" id="sure-btn"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][1][15];?>
</span></div></div>
                        <div class="choose-price-user_text" >
                            <div class="price_u" id="price_u"></div>

                        </div>
                    </div>

                </div>
                <div class="up"><i></i></div>
            </div>
            <!--更多 s-->
            <div class="choose-li choose-local">
                <div class="choose-more">
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][4];?>
</p>
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"levelType",'return'=>'type')); $_block_repeat=true; echo car(array('action'=>"levelType",'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li data-type="level" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"levelType",'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][5];?>
</p>
                        <ul class="fn-clear">
                            <li data-type="year" data-id="1">1年以内</li>
                            <li data-type="year" data-id="3">3年以内</li>
                            <li data-type="year" data-id="5">5年以内</li>
                            <li data-type="year" data-id="6">5年以上</li>
                        </ul>
                    </div>
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][6];?>
</p>
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"caritemList",'return'=>'type','type'=>"1",'pageSize'=>9999)); $_block_repeat=true; echo car(array('action'=>"caritemList",'return'=>'type','type'=>"1",'pageSize'=>9999), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li data-type="gearbox" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"caritemList",'return'=>'type','type'=>"1",'pageSize'=>9999), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][7];?>
</p>
                        <ul class="fn-clear">
                            <li data-type="mileage" data-id="1">1万以内</li>
                            <li data-type="mileage" data-id="3">3万以内</li>
                            <li data-type="mileage" data-id="5">5万以内</li>
                            <li data-type="mileage" data-id="10">10万以内</li>
                            <li data-type="mileage" data-id="11">10万以上</li>
                        </ul>
                    </div>
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][8];?>
</p>
                        <ul class="fn-clear">
                            <li data-type="emissions" data-id=",1">1.0L及以下</li>
                            <li data-type="emissions" data-id="1.1,1.6">1.1L-1.6L</li>
                            <li data-type="emissions" data-id="1.7,2.0">1.7L-2.0L</li>
                            <li data-type="emissions" data-id="2.1,2.5">2.1L-2.5L</li>
                            <li data-type="emissions" data-id="2.6,3.0">2.6L-3.0L</li>
                            <li data-type="emissions" data-id="3.1,4.1">3.1L-4.0L</li>
                            <li data-type="emissions" data-id="4.0,">4.0L以上</li>
                        </ul>
                    </div>
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][9];?>
</p>
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"caritemList",'return'=>'type','type'=>"2",'pageSize'=>9999)); $_block_repeat=true; echo car(array('action'=>"caritemList",'return'=>'type','type'=>"2",'pageSize'=>9999), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li data-type="standard" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"caritemList",'return'=>'type','type'=>"2",'pageSize'=>9999), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][10];?>
</p>
                        <ul class="fn-clear">
                            <li data-type="flag" data-id="4">急售</li>
                            <li data-type="flag" data-id="0">推荐</li>
                            <li data-type="flag" data-id="1">准新车</li>
                            <li data-type="flag" data-id="3">热销</li>
                            <li data-type="flag" data-id="2">新车</li>
                        </ul>
                    </div>
                    <div class="more-child">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][12];?>
</p>
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"caritemList",'return'=>'type','type'=>"4",'pageSize'=>9999)); $_block_repeat=true; echo car(array('action'=>"caritemList",'return'=>'type','type'=>"4",'pageSize'=>9999), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li data-type="fueltype" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"caritemList",'return'=>'type','type'=>"4",'pageSize'=>9999), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class="more-child config">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][15];?>
</p>
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('car', array('action'=>"carConfigure",'type'=>"3",'return'=>'type')); $_block_repeat=true; echo car(array('action'=>"carConfigure",'type'=>"3",'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li data-type="internalsetting" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo car(array('action'=>"carConfigure",'type'=>"3",'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <div class=" panel">
                        <p class="title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][16];?>
</p>
                        <ul class="fn-clear">
                            <li data-type="color" data-id="黑" class=""><span class="black"></span><p>黑</p></li>
                            <li data-type="color" data-id="白"><span class="write"></span><p>白</p></li>
                            <li data-type="color" data-id="银/灰"><span class="gray"></span><p>银/灰</p></li>
                            <li data-type="color" data-id="红"><span class="red"></span><p>红</p></li>
                            <li data-type="color" data-id="蓝"><span class="blue"></span><p>蓝</p></li>
                            <li data-type="color" data-id="香槟"><span class="champagne"></span><p>香槟</p></li>
                            <li data-type="color" data-id="褐"><span class="brown"></span><p>褐</p></li>
                            <li data-type="color" data-id="橙"><span class="orange"></span><p>橙</p></li>
                            <li data-type="color" data-id="黄"><span class="yellow"></span><p>黄</p></li>
                            <li data-type="color" data-id="紫"><span class="purple"></span><p>紫</p></li>
                            <li data-type="color" data-id="绿"><span class="green"></span><p>绿</p></li>
                            <li data-type="color" data-id="其他"><span class="others"></span><p>其他</p></li>
                        </ul>
                    </div>
                    <div class="btns"><span class="cancel"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][1][14];?>
</span><span class="sure"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][1][15];?>
</span></div>
                </div>

            </div>
            <!--排序 s-->
            <div class="choose-li choose-local">
                <ul class="choose-sort">
                    <li data-id="" class=""><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][17];?>
</li>
                    <li data-id="2"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][18];?>
</li>
                    <li data-id="1"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][19];?>
</li>
                    <li data-id="4"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][20];?>
</li>
                    <li data-id="5"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][5][21];?>
</li>
                </ul>
                <div class="up"><i></i></div>

            </div>


        </div>
    </div>
</div>

<!--汽车列表-->
<div class="list-box carList">
    <ul class="car-list">
        
    </ul>
    <div class="loading"><span>加载中...</span></div>
</div>


<div class="mask mask-hide"></div>

<div class="top"><a href="#"></a></div>

<?php echo '<script'; ?>
 type="text/javascript">
    var store = '<?php echo $_smarty_tpl->tpl_vars['store']->value;?>
', usertype = '<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
', prices = '<?php echo $_smarty_tpl->tpl_vars['prices']->value;?>
', brands = '<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
';
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
		"title": '<?php echo $_smarty_tpl->tpl_vars['car_typename']->value;?>
',
		"imgUrl": '<?php echo $_smarty_tpl->tpl_vars['car_logoUrl']->value;?>
',
		"link": '<?php echo getUrlPath(array('service'=>"car",'template'=>"list",'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value),$_smarty_tpl);?>
',
	};

	document.write(unescape("%3Cscript src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v="+~(-new Date())+"'type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/ion.rangeSlider.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/list.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
