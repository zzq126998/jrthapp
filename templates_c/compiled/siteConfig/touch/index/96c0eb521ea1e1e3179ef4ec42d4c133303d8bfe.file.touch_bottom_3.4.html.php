<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 12:24:34
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/touch_bottom_3.4.html" */ ?>
<?php /*%%SmartyHeaderCode:9873067895d450c82c8c782-40336164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96c0eb521ea1e1e3179ef4ec42d4c133303d8bfe' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/siteConfig/touch_bottom_3.4.html',
      1 => 1553912314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9873067895d450c82c8c782-40336164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_app' => 0,
    'userinfo' => 0,
    '_bindex' => 0,
    'nav' => 0,
    'active' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d450c82ca0532_17987677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d450c82ca0532_17987677')) {function content_5d450c82ca0532_17987677($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['is_app']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
<!-- 发布信息 s-->
<div class="cd-bouncy-nav-modal" id="myFabu">
	<div class="cd-bouncy-nav">
		<iframe  name="myFabuIframe" id="myFabuIframe" src="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabuJoin_touch_popup_3.4'),$_smarty_tpl);?>
" data-src="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabuJoin_touch_popup_3.4'),$_smarty_tpl);?>
" frameborder="0" width="100%" height="100%"></iframe>
	</div>
</div>
<!-- 发布信息 e-->
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['userinfo']->value) {?>
<!-- 登录 s-->
<div class="login-modal" id="myLogin" >
	<div class="loginBox">
		<iframe name="myLoginIframe" id="myLoginIframe" src="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'login_touch_popup_3.4'),$_smarty_tpl);?>
" data-src="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'login_touch_popup_3.4'),$_smarty_tpl);?>
" frameborder="0"  width="100%" height="100%"></iframe>
	</div>
</div>
<!-- 登录 e-->
<?php }?>

<div class="footer_3_4">
	<ul class="fn-clear">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'touchHomePageFooter','version'=>'2.0','return'=>'nav')); $_block_repeat=true; echo siteConfig(array('action'=>'touchHomePageFooter','version'=>'2.0','return'=>'nav'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['nav']==3) {?>
        <li class="fabu">
            <a href="javascript:;">
                <i><img src="<?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
" /></i>
                <p><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</p>
            </a>
            <div class="fabuBg"></div>
        </li>
        <?php } else { ?>
		<li class="ficon">
			<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
">
				<i><img src="<?php if (($_smarty_tpl->tpl_vars['_bindex']->value['nav']==1&&$_smarty_tpl->tpl_vars['active']->value=='index')||($_smarty_tpl->tpl_vars['_bindex']->value['nav']==2&&$_smarty_tpl->tpl_vars['active']->value=='business')||($_smarty_tpl->tpl_vars['_bindex']->value['nav']==4&&$_smarty_tpl->tpl_vars['active']->value=='message')||($_smarty_tpl->tpl_vars['_bindex']->value['nav']==5&&$_smarty_tpl->tpl_vars['active']->value=='member')) {
echo $_smarty_tpl->tpl_vars['nav']->value['icon_h'];
} else {
echo $_smarty_tpl->tpl_vars['nav']->value['icon'];
}?>" /></i>
				<p><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</p>
			</a>
		</li>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'touchHomePageFooter','version'=>'2.0','return'=>'nav'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
var audioSrc = {
	refresh: '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
audio/refresh.mp3',
	tap: '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
audio/tap.mp3',
	cancel: '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
audio/cancel.mp3'
}

var is_login_animating = false;
var audio,audio1,audio2,stop=1;
    audio = new Audio();
    audio1 = new Audio();
    audio2 = new Audio();
    audio.src = audioSrc.refresh;
    audio1.src = audioSrc.tap;
    audio2.src = audioSrc.cancel;

var myLoginIframe = '';
var myFabuIframe = '';
var popupIframeTop = 0;

//关闭菜单
function btnLoginClose(){
	audio2.play();
	$('.login-modal').removeClass('fade-in').addClass('fade-out');
	setTimeout(function(){
		$('.login-modal').hide();
	}, 500);
	$('html').removeClass("popup_fixed");
	$(window).scrollTop(popupIframeTop);
}

function btnFbClose(){
	audio2.play();
	$('.cd-bouncy-nav-modal').removeClass('fade-in').addClass('fade-out');
	setTimeout(function(){
		$('.cd-bouncy-nav-modal').hide();
	}, 500);
	$('html').removeClass("popup_fixed");
    $(window).scrollTop(popupIframeTop);
}

function noscroll(){
    setTimeout(function(){
        $('html').addClass("popup_fixed");
	}, 300);
}

$(function(){
	//弹出菜单--登录
	$('.header-top .login').on('tap', function() {
        popupIframeTop = $(window).scrollTop();
		audio.play();
		$('.login-modal').show().removeClass('fade-out').addClass('fade-in');
		if(myLoginIframe != 'login'){
			myLoginIframe = 'login';
			$("#myLoginIframe").attr("src", $("#myLoginIframe").data('src') + '#log');
		}
		stop=0;
		noscroll();
	});
	 //弹出菜单--注册
	$('.header-top .register').on('tap', function() {
        popupIframeTop = $(window).scrollTop();
		audio.play();
		$('.login-modal').show().removeClass('fade-out').addClass('fade-in');
		if(myLoginIframe != 'register'){
			myLoginIframe = 'register';
			$("#myLoginIframe").attr("src", $("#myLoginIframe").data('src') + '#reg');
		}
		stop=0;
		noscroll();
	});

	//发布信息弹出菜单
	$('.footer_3_4 ul .fabu').on('tap', function() {
		if(window.wx_miniprogram_judge == undefined) return;
    popupIframeTop = $(window).scrollTop();
    var userid = $.cookie(cookiePre+'login_user');
    if(userid == undefined || userid == null || userid == 0 || userid == ''){
      audio.play();
      $('.login-modal').show().removeClass('fade-out').addClass('fade-in');
      if(myLoginIframe != 'login'){
        myLoginIframe = 'login';
        $("#myLoginIframe").attr("src", $("#myLoginIframe").data('src') + '#log');
      }
      stop=0;
      noscroll();
    }else {
      audio.play();
      if (myFabuIframe != 'fabu') {
        $("#myFabuIframe").attr("src", $("#myFabuIframe").data('src') + '#fabu');
      }
      if(wx_miniprogram){
        $('#gotopage').remove();
        $('body').append('<a href="'+$("#myFabuIframe").attr("src")+'" id="gotopage"></a>');
        $('#gotopage').click();
        return;
      }
      $('.cd-bouncy-nav-modal').show().removeClass('fade-out').addClass('fade-in');
      myFabuIframe = 'fabu';
      stop = 0;
      noscroll();
    }
	});
});
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
