<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:13:47
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\live\default\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:18069081185d511fbb6e58d2-95839753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15c1dfbe8546d1c74703105b462c43f332a5d590' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\live\\default\\detail.html',
      1 => 1530018728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18069081185d511fbb6e58d2-95839753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'livedetail_title' => 0,
    'live_keywords' => 0,
    'live_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'cfg_currentHost' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'livedetail_id' => 0,
    'livedetail_userurl' => 0,
    'livedetail_photo' => 0,
    'livedetail_nickname' => 0,
    'fid' => 0,
    'userid' => 0,
    'isfollow' => 0,
    'livedetail_click' => 0,
    'livedetail_state' => 0,
    'detail_mp4url' => 0,
    'row' => 0,
    'livedetail_username' => 0,
    'livedetail_userphoto' => 0,
    'livedetail_appKey' => 0,
    'livedetail_token' => 0,
    'detail_chatRoomId' => 0,
    'detail_url' => 0,
    'livedetail_litpic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511fbb76a629_15684013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511fbb76a629_15684013')) {function content_5d511fbb76a629_15684013($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['livedetail_title']->value;?>
-直播详情</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['live_keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['live_description']->value;?>
" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" href="//g.alicdn.com/de/prismplayer/2.6.0/skins/default/aliplayer-min.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="//g.alicdn.com/de/prismplayer/2.6.0/aliplayer-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
',channelDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_currentHost']->value;?>
';
	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;
	var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
	var templets_skin = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
	var id = <?php echo $_smarty_tpl->tpl_vars['livedetail_id']->value;?>
;
<?php echo '</script'; ?>
>
</head>
<?php echo $_smarty_tpl->getSubTemplate ("public_top_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('channel'=>"live"), 0);?>

<body class="w1200">
<div class="lContainer wrap">
    <div class="detailCon">
        <div class="content_left">
            <div class="content_top">
                <div class="head_left">
                    <div class="head_box">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['livedetail_userurl']->value;?>
" target="_blank">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['livedetail_photo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['livedetail_nickname']->value;?>
">
                        </a>
                    </div>
                    <div class="head_info">
                        <p class="anchor_name"><?php echo $_smarty_tpl->tpl_vars['livedetail_title']->value;?>

                        	<?php if ($_smarty_tpl->tpl_vars['fid']->value!=$_smarty_tpl->tpl_vars['userid']->value) {?>
                        		<?php if ($_smarty_tpl->tpl_vars['userid']->value&&$_smarty_tpl->tpl_vars['isfollow']->value) {?>
                        		<button data-id="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" class="follow btn_care1">已关注</button>
                        		<?php } else { ?>
                        		<button data-id="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" class="follow btn_care">关注</button>
                        		<?php }?>
                        	<?php } else { ?>
                        	<?php }?>
                        </p>
                        <p><span><a href="<?php echo $_smarty_tpl->tpl_vars['livedetail_userurl']->value;?>
" target="_blank" style="color:#fff;"><?php echo $_smarty_tpl->tpl_vars['livedetail_nickname']->value;?>
</a></span> <span>浏览次数： <?php echo $_smarty_tpl->tpl_vars['livedetail_click']->value;?>
</span></p>
                    </div>
                </div>
                <div class="head_right">
                    <div class="smobile">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/phone.png" > <span>手机观看</span>
                        <div class="qrcode"><i></i><span id="qrcode"></span></div>
                    </div>
                    <div class="share bdsharebuttonbox bds_more" data-cmd="more">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/share.png" ><span>分享</span>
                        <div class="lshare bdsharebuttonbox">
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友">QQ好友</a>
                        </div>
                    </div>

                    <div class="report"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/report.png" > <span>举报</span></div>
                </div>
            </div>
            <div class="content_main">

								<?php if ($_smarty_tpl->tpl_vars['livedetail_state']->value==2&&$_smarty_tpl->tpl_vars['detail_mp4url']->value=='') {?>
								<div class="empty"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/huifang.png"><p>视频回放正在制作中，请稍后访问...</p></div>
								<?php }?>

                <!--<video id="lVideo"></video>-->
                <div id="J_prismPlayer"></div>
                <!--<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/big_play.png" >-->
            </div>
        </div>
        <div class="content_right">
            <div class="right_title">聊天</div>
            <div class="right_main">
                <ul class="main_info" id="main_info">
                </ul>
                <div class="box_bottom input_box">
                    <input id="rc-chatroom-input" type="text" placeholder="说点什么吧...">
                    <button class="btn_send" id="rc-chatroom-button">发送</button>
                </div>
            </div>
        </div>
    </div>
    <!--热门直播-->
    <div class="conBox">
        <div class="floor"><span>热门直播</span></div>
        <div class="lContent">
            <ul class="contentBox">
            	<?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"alive",'return'=>"row",'type'=>"1",'orderby'=>"click",'pageSize'=>"8")); $_block_repeat=true; echo live(array('action'=>"alive",'return'=>"row",'type'=>"1",'orderby'=>"click",'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
">
                        <div class="box_img">
														<div class="playback state<?php echo $_smarty_tpl->tpl_vars['row']->value['state'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['state']==1) {?>直播中<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['state']==2) {?>精彩回放<?php }?></div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['litpic'];?>
">
                            <div class="box_cover"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/play.png" ></div>
                        </div>

                        <div class="live_intro">
                            <div class="intro-left"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
"></div>
                            <div class="intro_right">
                                <p class="p_font1"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</p>
                                <p class="p_font2">
                                    <span class="sp_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['nickname'];?>
</span>
                                    <span class="img_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/live_people.png"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['click'];?>
</span></span></p>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"alive",'return'=>"row",'type'=>"1",'orderby'=>"click",'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
    <!--结束-->

</div>
<?php echo '<script'; ?>
 type="text/javascript">
var username='<?php echo $_smarty_tpl->tpl_vars['livedetail_username']->value;?>
';
var userphoto='<?php echo $_smarty_tpl->tpl_vars['livedetail_userphoto']->value;?>
';
var appKey = "<?php echo $_smarty_tpl->tpl_vars['livedetail_appKey']->value;?>
";
var token  = "<?php echo $_smarty_tpl->tpl_vars['livedetail_token']->value;?>
";
var config = {
    protobuf : "<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/rong/protobuf-2.2.8.min.js"
};
var count = 0;// 拉取最近聊天最多 50 条。
var chatRoomId = "<?php echo $_smarty_tpl->tpl_vars['detail_chatRoomId']->value;?>
"; // 聊天室 Id。
var isfalse =<?php if ($_smarty_tpl->tpl_vars['livedetail_state']->value==2) {?>false<?php } else { ?>true<?php }?>;
var source = <?php if ($_smarty_tpl->tpl_vars['livedetail_state']->value==2) {?>'<?php echo $_smarty_tpl->tpl_vars['detail_mp4url']->value;?>
'<?php } else { ?>'<?php echo $_smarty_tpl->tpl_vars['detail_url']->value;?>
'<?php }?>;
var player = new Aliplayer({
		 id: "J_prismPlayer",
     autoplay: true,
     isLive: isfalse,
     playsinline: true,
     width:"100%",
     height:"540px",
     useH5Prism:true,
     useFlashPrism:false,
     source:source,
     cover:"<?php echo $_smarty_tpl->tpl_vars['livedetail_litpic']->value;?>
"
     }
);

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/rong/RongIMLib-2.2.9.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/chatroom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.qrcode.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dialog-4.2.0.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'siteConfig','theme'=>'gray'), 0);?>

</body>
</html>
<?php }} ?>
