<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-04 09:37:46
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/waimai/touch/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:11478596395d4636eaae6e08-62733243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c0854f152c4cc8885bd7e9d658bc31751c3f8e' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/waimai/touch/default/index.html',
      1 => 1564535452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11478596395d4636eaae6e08-62733243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waimai_description' => 0,
    'waimai_title' => 0,
    'cfg_basehost' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'cfg_staticPath' => 0,
    'waimai_channelDomain' => 0,
    'cfg_cookiePre' => 0,
    'local' => 0,
    'search' => 0,
    'langData' => 0,
    'type' => 0,
    'wxjssdk_appId' => 0,
    'wxjssdk_timestamp' => 0,
    'wxjssdk_nonceStr' => 0,
    'wxjssdk_signature' => 0,
    'waimai_logoUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4636eab2df46_93762298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4636eab2df46_93762298')) {function content_5d4636eab2df46_93762298($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['waimai_description']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['waimai_title']->value;?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
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
 type="text/javascript">
  var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['waimai_channelDomain']->value;?>
', modelType = 'waimai', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
  var userdomain = '<?php echo getUrlPath(array('service'=>"member",'type'=>"user"),$_smarty_tpl);?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
  var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
  var local = '<?php echo $_smarty_tpl->tpl_vars['local']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"style="position:absolute;width:0;height:0"><defs><symbol viewBox="0 0 70 12"id="star-actived.d4c54d1"><defs><linearGradient id="star-actived.d4c54d1_a"x1="0%"y1="50%"y2="50%"><stop offset="0%"stop-color="#FFDE00"></stop><stop offset="100%"stop-color="#FFB000"></stop></linearGradient></defs><path fill="url(#star-actived.d4c54d1_a)"fill-rule="evenodd"d="M54.017 8.072l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L53.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm-48 0L3.465 9.633c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L5.63.589c.213-.515.557-.523.774 0L7.55 3.352l2.982.237c.556.044.67.368.24.736L8.497 6.269l.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm12 0l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L17.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm12 0l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L29.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm12 0l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L41.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56z"></path></symbol><symbol viewBox="0 0 70 12"id="star-gray.cc081b9"><path fill="#EEE"fill-rule="evenodd"d="M54.017 8.072l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L53.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm-48 0L3.465 9.633c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L5.63.589c.213-.515.557-.523.774 0L7.55 3.352l2.982.237c.556.044.67.368.24.736L8.497 6.269l.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm12 0l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L17.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm12 0l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L29.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56zm12 0l-2.552 1.561c-.476.291-.758.096-.626-.455l.696-2.909-2.273-1.944c-.424-.362-.325-.691.239-.736l2.982-.237L41.63.589c.213-.515.557-.523.774 0l1.146 2.763 2.982.237c.556.044.67.368.24.736l-2.274 1.944.696 2.91c.13.542-.143.75-.626.454l-2.551-1.56z"></path></symbol></defs></svg>

  <!-- 头部 -->
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['pageLeft'] = new Smarty_variable((('<div class="header-l"><a href=').($_tmp1)).(' class="goBack"></a></div>'), null, 0);?>
  <?php ob_start();?><?php echo getUrlPath(array('service'=>'waimai','template'=>'search'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['search'] = new Smarty_variable($_tmp2, null, 0);?>
  <?php ob_start();?><?php echo getUrlPath(array('service'=>'waimai','template'=>'local'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['local'] = new Smarty_variable($_tmp3, null, 0);?>
  <?php $_smarty_tpl->tpl_vars['pageRight'] = new Smarty_variable((('<a href="').($_smarty_tpl->tpl_vars['search']->value)).('" class="header-search"></a>'), null, 0);?>
  <?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((((('<a href="').($_smarty_tpl->tpl_vars['local']->value)).('" class="fn-clear"><em>')).($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][4])).('..</em></a>'), null, 0);?>
  <?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('headTheme'=>"transparent absolute"), 0);?>

  <!-- 头部 end -->

  <div class="wrapper">
    <div class="swiper-container swiper-container1">
      <div class="swiper-wrapper">
        <?php echo getMyAd(array('title'=>"美食外卖_移动端_广告一",'type'=>"slide"),$_smarty_tpl);?>

      </div>
      <div class="pagination"></div>
    </div>
  </div>

  <!-- 滑动导航 -->
  <div class="nav">
    <div class="swiper-wrapper">
			<div class="swiper-slide">
        <ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('waimai', array('action'=>"shopType",'return'=>'type')); $_block_repeat=true; echo waimai(array('action'=>"shopType",'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
">
              <span class="icon-img"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['iconturl'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
"></span>
              <span class="icon-txt"><?php echo $_smarty_tpl->tpl_vars['type']->value['title'];?>
</span>
            </a>
          </li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo waimai(array('action'=>"shopType",'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <!-- 滑动导航 end-->

  <div class="advbox">
    <div class="advCon">
      <?php echo getMyAd(array('title'=>"限量抢购",'type'=>"slide"),$_smarty_tpl);?>

    </div>
  </div>

  <!-- 为你优选 s -->
  <div class="youxuan">
    <div class="yx-tit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][2][0];?>
</div>
    <div class="yxbox fn-clear">
      <?php echo getMyAd(array('title'=>"为你优选",'type'=>"slide"),$_smarty_tpl);?>

    </div>
  </div>
  <!-- 为你优选 e -->

  <p class="nearTit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['waimai'][2][1];?>
</p>

	<!-- 商家列表 -->
  <div class="near-box"><div class="loading"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
</div></div>
	<!-- 商家列表 -->

  <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div class="mask"></div>
  <div id="map"></div>

<!-- 外卖订单状态 -->
<div class="waimaiOrderstate swiper-msg">
  <em></em>
  <ul class="list swiper-wrapper"></ul>
</div>

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
      "description": '<?php echo $_smarty_tpl->tpl_vars['waimai_description']->value;?>
',
      "title": '<?php echo $_smarty_tpl->tpl_vars['waimai_title']->value;?>
',
      "imgUrl": '<?php echo $_smarty_tpl->tpl_vars['waimai_logoUrl']->value;?>
',
      "link": '<?php echo $_smarty_tpl->tpl_vars['waimai_channelDomain']->value;?>
',
  };
  var typeid = '', orderby = '', yingye = '', lng = '', lat = '', page = 1, pageSize = 10;

  document.write(unescape("%3Cscript src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v="+~(-new Date())+"'type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/iscroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
