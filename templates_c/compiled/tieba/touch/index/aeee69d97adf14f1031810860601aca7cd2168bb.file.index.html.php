<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 17:25:30
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/tieba/touch/112/index.html" */ ?>
<?php /*%%SmartyHeaderCode:18225293265d45530a1a5da8-98719685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeee69d97adf14f1031810860601aca7cd2168bb' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/tieba/touch/112/index.html',
      1 => 1559559209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18225293265d45530a1a5da8-98719685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seoTitle' => 0,
    'tieba_channelName' => 0,
    'tieba_keywords' => 0,
    'tieba_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'tieba_channelDomain' => 0,
    'typeid' => 0,
    'cfg_cookiePre' => 0,
    'siteCityInfo' => 0,
    'cfg_qiandao_state' => 0,
    'type' => 0,
    '_bindex' => 0,
    'cfg_weixinQr' => 0,
    'cfg_weixinName' => 0,
    'cfg_miniProgramQr' => 0,
    'cfg_miniProgramName' => 0,
    'wxjssdk_appId' => 0,
    'wxjssdk_timestamp' => 0,
    'wxjssdk_nonceStr' => 0,
    'wxjssdk_signature' => 0,
    'tieba_title' => 0,
    'tieba_logoUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d45530a1f2055_02986321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d45530a1f2055_02986321')) {function content_5d45530a1f2055_02986321($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<title><?php if ($_smarty_tpl->tpl_vars['seoTitle']->value!='') {
echo $_smarty_tpl->tpl_vars['seoTitle']->value;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['tieba_channelName']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['tieba_keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['tieba_description']->value;?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/swiper.min_4.2.2.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
 type="text/javascript">
  var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['tieba_channelDomain']->value;?>
', modelType = 'tieba', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
  var typeid = <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['typeid']->value);?>
;
	var templets = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
  var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
  var page = 1;
  var pageSize = 5;
<?php echo '</script'; ?>
>
</head>

<body>
<!-- nav -->
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['tieba_channelName']->value, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- banner s -->
<div class="banner">
  <div class="wrapper">
      <div class="swiper-container">
          <div class="swiper-wrapper">
          	  <?php echo getMyAd(array('title'=>"贴吧社区_模板二_移动端_广告一",'type'=>"slide"),$_smarty_tpl);?>

          </div>
          <div class="pagination"></div>
      </div>
  </div>
</div>
<!-- banner e -->
<!-- 搜索 s-->
<div class="search-form fn-clear">
  <div class="sobj">
    <div class="area">
      <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/changecity.html">
        <i></i>
        <label><?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['name'];?>
</label>
        <s></s>
      </a>
    </div>
    <div class="inp">
      <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/search.html" >
        <s></s>
        <label>帖子、板块、用户</label>
        <span>搜索</span>
      </a>
    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['cfg_qiandao_state']->value) {?><div class="qiandao"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'qiandao'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/qiandao.png"><p>签到</p></a></div><?php }?>
</div>
<!-- 搜索 e -->

<!-- 滑动导航 s -->
<div class="pubBox swiper-nav">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <ul>
              	  <?php $_smarty_tpl->smarty->_tag_stack[] = array('tieba', array('action'=>"type",'return'=>'type')); $_block_repeat=true; echo tieba(array('action'=>"type",'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
">
                      <span class="icon-circle"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['iconturl'])===null||$tmp==='' ? '/static/images/type_default.png' : $tmp);?>
"></span>
                      <span class="icon-txt"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
                    </a>
                  </li>
                  <?php if (!(($_smarty_tpl->tpl_vars['_bindex']->value['type'])%10)) {?>
				  </ul>
				  </div>
				  <div class="swiper-slide">
	        	  <ul>
	        	  <?php }?>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tieba(array('action'=>"type",'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

              </ul>
            </div>
        </div>
        <div class="pagination"></div>
    </div>
</div>
<!-- 滑动导航 e -->

<!-- 总数 s -->
<div class="pubBox account">
  <ul class="fn-clear">
    <li><a href="javascript:;"><p>用户: <em class="user">0</em></p></a></li>
    <li><a href="javascript:;"><p>发贴量: <em class="views">0</em></p></a></li>
    <li><a href="javascript:;"><p>今日：<em class="today">0</em></p></a></li>
  </ul>
</div>
<!-- 总数 e -->

<!-- 推荐置顶、最新发布 -->
<div class="pubBox recomTab">
  <ul>
    <li class="active" data-id="1" data-action="recomTop" data-page="1" data-totalpage="1">
      <a href="javascript:;">推荐置顶</a>
    </li>
    <li data-id="2" data-action="newFabu" data-page="1" data-totalpage="1">
      <a href="javascript:;">最新发布</a>
    </li>
     <li data-id="3" data-action="imgTie" data-page="1" data-totalpage="1">
      <a href="javascript:;">图片帖子</a>
    </li>
     <li data-id="4" data-action="videoTie" data-page="1" data-totalpage="1">
      <a href="javascript:;">视频帖子</a>
     </li>
  </ul>
</div>

<!-- 内容部分 -->
<div class="container">
  <div class="swiper-container" id="tabs-container">
      <div class="swiper-wrapper">
         <div class="swiper-slide ">
            <ul class="fn-clear recomlist conlist">
            </ul>
         </div>
         <div class="swiper-slide ">
            <ul class="fn-clear newfblist conlist">
            </ul>
         </div>
          <div class="swiper-slide ">
            <ul class="fn-clear imglist conlist">
            </ul>
         </div>
          <div class="swiper-slide">
            <ul class="fn-clear videolist conlist">
            </ul>
         </div>
      </div>
  </div>
</div>

<!-- 发布 -->
<a href="<?php echo getUrlPath(array('service'=>'tieba','template'=>'fabu'),$_smarty_tpl);?>
" class="fabu-btn"><i></i></a>

<div class="gotop"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/go-top.png" alt=""></div>
<div class="wechat-fix"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/wechat-fix.png" alt=""></div>
<div class="wechat-popup">
  <div class="con">
    <a href="javascript:;" class="close">×</a>
    <?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value) {?>
    <dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
"></dt><dd><?php echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;?>
<br>微信中长按识别</dd></dl>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value) {?>
    <dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value;?>
"></dt><dd><?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramName']->value;?>
<br>微信中长按识别</dd></dl>
  	<?php }?>
  </div>
</div>

<!-- 大图展示 s-->
<div class="bigBoxShow">
  <div class="swiper-container bigSwiper">
      <i class="vClose"></i>
      <div class="swiper-wrapper">

      </div>
      <div class="swiper-pagination bigPagination"></div>
  </div>
</div>
<!-- 大图展示 e-->
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
		"description": '<?php echo $_smarty_tpl->tpl_vars['tieba_description']->value;?>
',
		"title": '<?php echo $_smarty_tpl->tpl_vars['tieba_title']->value;?>
',
		"imgUrl": '<?php echo $_smarty_tpl->tpl_vars['tieba_logoUrl']->value;?>
',
		"link": '<?php echo $_smarty_tpl->tpl_vars['tieba_channelDomain']->value;?>
',
	};

	document.write(unescape("%3Cscript src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v="+~(-new Date())+"'type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/swiper.min_4.2.2.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/swiper.animate1.0.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
