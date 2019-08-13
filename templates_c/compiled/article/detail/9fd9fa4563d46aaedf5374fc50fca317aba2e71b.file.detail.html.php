<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:39:35
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\article\skin7\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2672644045d512251274f07-21502491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd9fa4563d46aaedf5374fc50fca317aba2e71b' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\article\\skin7\\detail.html',
      1 => 1565599173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2672644045d512251274f07-21502491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d512251382818_49900416',
  'variables' => 
  array (
    'detail_title' => 0,
    'list_typename' => 0,
    'article_channelName' => 0,
    'cfg_webname' => 0,
    'article_keywords' => 0,
    'article_description' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'article_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'detail_id' => 0,
    'detail_media' => 0,
    'detail_pubdate' => 0,
    'detail_sourceurl' => 0,
    'detail_source' => 0,
    'detail_writer' => 0,
    'detail_click' => 0,
    'detail_notpost' => 0,
    'detail_common' => 0,
    'detail_body' => 0,
    'detail_keywordsList' => 0,
    'i' => 0,
    'cfg_ucenterLinks' => 0,
    'rewardSwitch' => 0,
    'detail_reward_switch' => 0,
    'pageInfo' => 0,
    '_bindex' => 0,
    'reward' => 0,
    'row' => 0,
    'userinfo' => 0,
    'member_userDomain' => 0,
    'detail_typeid' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d512251382818_49900416')) {function content_5d512251382818_49900416($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<title><?php echo $_smarty_tpl->tpl_vars['detail_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['list_typename']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['article_channelName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['article_keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['article_description']->value;?>
" />
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/detail.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript">
			var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['article_channelDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';

	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");

	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';

	var aid = <?php echo $_smarty_tpl->tpl_vars['detail_id']->value;?>
;
	var media = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail_media']->value['id'])===null||$tmp==='' ? 0 : $tmp);?>
;
	<?php echo '</script'; ?>
>
</head>

<body class="w1200">
	<!--头部 s-->
	<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!--头部 e-->

<!--content内容 begin-->
<div class="content wrap">
	<div class="ad">
		<?php echo getMyAd(array('title'=>"新闻资讯_模板七_电脑端_新闻详情页_广告一"),$_smarty_tpl);?>

	</div>
	<!--page_navigate页面所在位置 begin-->
	<div class="page_navigate">
		<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/nav_pic_home.png" width="15" height="14">
		<a href="<?php echo $_smarty_tpl->tpl_vars['article_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['article_channelName']->value;?>
</a>>
		<a ><?php echo $_smarty_tpl->tpl_vars['list_typename']->value;?>
</a>

	</div>
	<!--page_navigate页面所在位置 end-->
	<!--newsContent资讯 begin-->
	<div class="newsContent fn-clear">
		<!--左侧资讯-->
		<div class="lf_content fn-left">
			<!--newsArticle搜索结果-文章内容详情 begin-->
			<div class="newsArticle">
				<div class="n_article_tit">
					<h4><?php echo $_smarty_tpl->tpl_vars['detail_title']->value;?>
</h4>
					<div class="art_remark">
						<p><span<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detail_pubdate']->value,'%Y-%m-%d %H:%M:%S');?>
</span></p>
						<p><strong>来源：<a href="<?php echo $_smarty_tpl->tpl_vars['detail_sourceurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['detail_source']->value;?>
</a></strong><span><?php if ($_smarty_tpl->tpl_vars['detail_writer']->value!='') {?>&nbsp;&nbsp;&nbsp;作者：<?php echo $_smarty_tpl->tpl_vars['detail_writer']->value;
}?></span></p>
						<p><i class="iconfont icon-liulan"></i><span>阅读：<?php echo $_smarty_tpl->tpl_vars['detail_click']->value;?>
</span></p>
						<?php if (!$_smarty_tpl->tpl_vars['detail_notpost']->value) {?><p><a href="#comment"><i class="iconfont icon-pinglun"></i><span>评论：<?php echo $_smarty_tpl->tpl_vars['detail_common']->value;?>
</span></a></p><?php }?>
					</div>
				</div>
				<div class="n_main">
					<!--main_text正文 begin-->
					<div class="main_text">
						<?php echo $_smarty_tpl->tpl_vars['detail_body']->value;?>

					</div>

					<div class="keyAndshare">
						<p class="keywords"><em>关键词：</em>
							<span>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail_keywordsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
							<a href="<?php echo getUrlPath(array('service'=>'article','template'=>'search','param'=>"keywords=".((string)$_smarty_tpl->tpl_vars['i']->value)),$_smarty_tpl);?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
							<?php } ?>
							</span>
						</p>
					</div>
					<!--keyAndshare关键词、分享 end-->

				</div>
			</div>
			<!--newsArticle搜索结果-文章内容详情 end-->


			<?php if (in_array('reward',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)&&$_smarty_tpl->tpl_vars['rewardSwitch']->value==0&&$_smarty_tpl->tpl_vars['detail_reward_switch']->value==0) {?>
			<!--gratuity打赏 begin-->
			<div class="gratuity">
				<div class="rewardS">
					<div class="rewardS-txt">
					    <div class="rewardS-support">
							<a href="javascript:;" class="money">打赏</a>
						</div>
					</div>
					<p><label class="totalRew"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']);?>
</label>人已打赏</p>

					<div class="gra-member">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'rewardList','return'=>'reward','aid'=>$_smarty_tpl->tpl_vars['detail_id']->value,'pageSize'=>'7')); $_block_repeat=true; echo article(array('action'=>'rewardList','return'=>'reward','aid'=>$_smarty_tpl->tpl_vars['detail_id']->value,'pageSize'=>'7'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['reward']<=7) {?>
							<li class="gra_num1">
								<div class="member_headpor">
									<a href="<?php echo $_smarty_tpl->tpl_vars['reward']->value['url'];?>
" target="_blank">
										<img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['reward']->value['photo'])===null||$tmp==='' ? '/static/images/noPhoto_60.jpg' : $tmp);?>
">
									</a>
								</div>
								<strong><?php echo $_smarty_tpl->tpl_vars['reward']->value['username'];?>
</strong>
								<p><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
<span><?php echo $_smarty_tpl->tpl_vars['reward']->value['amount'];?>
</span></p>
							</li>
							<?php }?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'rewardList','return'=>'reward','aid'=>$_smarty_tpl->tpl_vars['detail_id']->value,'pageSize'=>'7'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']>7) {?>
							<li class="moveButton">
								<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/moveButton.png" alt="">
							</li>
							<?php }?>
						</ul>

					</div>
				</div>
				<div class="pop pop_main_box">
				    <i class="pop-close icon-cross-lighter"></i>
<!--					<div class="pop-title"><div class="pop_name">0人已对本文进行打赏</div></div>-->
					<div class="pop-content">
						<div class="pop-interval" id="page-list-content">
						  <ul class="gratuity_list"></ul>
						  <ul class="rwPage"></ul>
						</div>
					</div>
			    </div>
				<!-- 打赏浮动层 s -->
<div class="rewardS-mask"></div>
<div class="rewardS-pay">
  <div class="rewardS-pay-tit">
    <a href="javascript:;" class="close fn-right">×</a><h3>打赏支持</h3>
  </div>
    <div class="rewardS-pay-box">
      <div class="rewardS-pay-money">
        <span>打赏金额 </span><strong class="icon"><?php echo echoCurrency(array('type'=>"symbol"),$_smarty_tpl);?>
</strong>
        <input type="text" name="" value="5" class="inp" />
        <ul class="rewardS-pay-select">
          <li>1<?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</li><li>2<?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</li><li>5<?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</li><li>10<?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</li><li>20<?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</li><li>50<?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</li>
        </ul>
      </div>
      <div class="rewardS-pay-way">
        <h3>选择支付方式：</h3>
        <ul class="fn-clear">
			  	<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"payment")); $_block_repeat=true; echo siteConfig(array('action'=>"payment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	  		  <li<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['row']==1) {?> class="on"<?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['row']->value['pay_code'];?>
"><a href="javascript:;" class="<?php echo $_smarty_tpl->tpl_vars['row']->value['pay_code'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['pay_name'];?>
"></a><em></em></li>
	  		  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"payment"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
      </div>
    </div>
    <div class="rewardS-sumbit">
      <a href="javascript:;" target="_blank" data-url="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/ajax.php?service=article&action=reward&aid=<?php echo $_smarty_tpl->tpl_vars['detail_id']->value;?>
&amount=$amount&paytype=$paytype">确认支付</a>
    </div>
</div>
<!-- 打赏浮动层 e -->
				<!--打赏记录 begin-->
				<div class="gratuity_record">
					<div class="record_top">
						<h6>打赏记录</h6><span>×</span>
					</div>
					<div class="record-list-box">
						 <ul class="record-list">

					</ul>
					</div>

					<ul class="record-page" id="pages">

					</ul>
				</div>
				<!--打赏记录 end-->
			</div>
			<!--gratuity打赏 end-->
			<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['detail_notpost']->value) {?>
		<!-- 评论 s -->
		<a name="comment"></a>
		<div class="comment">
			<div class="c-title fn-clear">
				<h4>精彩评论<small>文明上网理性发言，请遵守<a href="#">新闻评论服务协议</a></small></h4>
				<a href="javascript:;" class="tnum">共<?php echo $_smarty_tpl->tpl_vars['detail_common']->value;?>
条评论</a>
			</div>
			<div class="c-area">
				<div class="textarea" contenteditable="true" data-type="parent"></div>
				<div class="c-sub fn-clear">
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
					<div class="np-login">
						<a href="<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
" target="_blank" class="u"><img onerror="javascript:this.src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/noPhoto_40.jpg';" src="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['photo']=='') {
echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/noPhoto_40.jpg<?php } else {
echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['photo']),'type'=>"small"),$_smarty_tpl);
}?>" /><span><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</span></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/logout.html" class="o logout">安全退出</a>
					</div>
					<a href="javascript:;" class="subtn">发表</a>
					<?php } else { ?>
					<a href="javascript:;" class="subtn login">登录</a>
					<?php }?>
				</div>
			</div>
			<div class="c-content">
				<ul class="c-nav fn-clear">
					<li>全部评论</li>
					<li class="c-orderby fn-clear"><a href="javascript:;" class="chot" data-id="hot">热度</a><a href="javascript:;" class="ctime active" data-id="time">时间</a></li>
				</ul>
				<ul class="c-list" id="commentList" data-page="1">
					<div class="loading"></div>
				</ul>
				<div id="loadMore" class="loading">加载更多</div>
			</div>
		</div>
		<?php echo '<script'; ?>
 type="text/template" id="replaytemp">
		<div class="c-area">
			<div class="textarea" contenteditable="true"></div>
			<div class="c-sub fn-clear">
				<?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
				<a href="javascript:;" class="subtn">回复</a>
				<?php } else { ?>
				<a href="javascript:;" class="subtn login">登录</a>
				<?php }?>
			</div>
		</div>
	<?php echo '</script'; ?>
>
		<!-- 评论 e -->
		<?php }?>
		</div>
		<!--左侧资讯 end-->

		<!--news_right资讯右侧信息栏 begin-->

		<div class="news_right">
			<!--<h4><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'article'),$_smarty_tpl);?>
" target="_blank" class="online">在线投稿</a></h4>-->
			<?php if ($_smarty_tpl->tpl_vars['detail_media']->value) {?>
			<div class="authorInfo">
				<div class="pic"><a href="<?php echo $_smarty_tpl->tpl_vars['detail_media']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['detail_media']->value['ac_photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['detail_media']->value['ac_name'];?>
"></a></div>
				<p class="name"><?php echo $_smarty_tpl->tpl_vars['detail_media']->value['ac_name'];?>
</p>
				<div class="msg"><div class="fn-left"><span><?php echo $_smarty_tpl->tpl_vars['detail_media']->value['total_article'];?>
</span>文章</div><div class="line"></div><div class="fn-right"><span><?php if ($_smarty_tpl->tpl_vars['detail_media']->value['click']>=10000) {
echo $_smarty_tpl->tpl_vars['detail_media']->value['click']/10000;?>
万<?php } else {
echo $_smarty_tpl->tpl_vars['detail_media']->value['click'];
}?></span>总阅读</div></div>
				<div class="share-oper">
					<p class="collect_box">
						<?php if ($_smarty_tpl->tpl_vars['detail_media']->value['isfollow']==1) {?>
						<span class="collect active curr">已关注</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['detail_media']->value['isfollow']==0) {?>
						<span class="collect">关注</span>
						<?php } else { ?>
						<span class="collect disabled">关注</span>
						<?php }?>
						<!-- <span class="thumbs-up">点赞</span> -->
					</p>

					<div class="share-box fn-clear">
						<em class="fn-left">分享到：</em>

						<p class="bdsharebuttonbox" style="margin:-10px 0 0 5px">
							<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
							<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
							<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
						</p>

					</div>

				</div>
				<div class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['detail_media']->value['url'];?>
">查看他的文章></a></div>
			</div>
			<?php }?>

			<ul class="news_express">
				<strong>相关阅读</strong>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['detail_typeid']->value,'return'=>'data','pageSize'=>'8')); $_block_repeat=true; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['detail_typeid']->value,'return'=>'data','pageSize'=>'8'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" target="_blank" title='<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['title']);?>
'>
						<label><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</label>
						<p><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['title']);?>
</p>
					</a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['detail_typeid']->value,'return'=>'data','pageSize'=>'8'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			</ul>
			<ul class="rg_pic">
				<?php echo getMyAd(array('title'=>"你大爷爷爷"),$_smarty_tpl);?>

			</ul>
			<ul class="right_detailed">
				<strong>精彩图片</strong>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>1,'return'=>'data','pageSize'=>'8')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>1,'return'=>'data','pageSize'=>'8'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" target="_blank" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['title']);?>
">
						<span  class="anim_sm">
						<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['title']);?>
">
					</span>
						<p><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['title']);?>
</p>
						<em><?php echo count($_smarty_tpl->tpl_vars['data']->value['group_img'])+1;?>
图</em>
					</a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>1,'return'=>'data','pageSize'=>'8'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			</ul>
			<ul class="news_express">
				<strong>新帖速递</strong>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'return'=>"data",'orederby'=>'1','pageSize'=>'8')); $_block_repeat=true; echo article(array('action'=>"alist",'return'=>"data",'orederby'=>'1','pageSize'=>'8'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" target="_blank" title='<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['title']);?>
'>
						<label><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</label>
						<p><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['title']);?>
</p>
					</a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'return'=>"data",'orederby'=>'1','pageSize'=>'8'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			</ul>
			<ul class="rg_pic">
				<?php echo getMyAd(array('title'=>"新闻资讯_模板七_电脑端_新闻详情页_广告三"),$_smarty_tpl);?>

			</ul>

		</div>
		<!--news_right资讯右侧信息栏 end-->
	</div>
	<!--newsContent资讯 end-->
</div>
<!--content内容 end-->


<div class="clear">

</div>

	<!--底部 s-->
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!--底部 e-->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/detail.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/jqPaginator.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
