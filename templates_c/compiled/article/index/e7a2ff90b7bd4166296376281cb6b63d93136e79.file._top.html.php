<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 11:55:09
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/article/147/_top.html" */ ?>
<?php /*%%SmartyHeaderCode:19105448055d45059d8e30d4-82309070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a2ff90b7bd4166296376281cb6b63d93136e79' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/article/147/_top.html',
      1 => 1561979524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19105448055d45059d8e30d4-82309070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_channelDomain' => 0,
    'article_channelName' => 0,
    'article_logoUrl' => 0,
    'keywords' => 0,
    'article_hotline' => 0,
    'pageCurr' => 0,
    'installModuleArr' => 0,
    'paper_channelDomain' => 0,
    'paper_channelName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d45059d8f3903_99333763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d45059d8f3903_99333763')) {function content_5d45059d8f3903_99333763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="header wrap fn-clear">
    <h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['article_channelDomain']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['article_channelName']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article_logoUrl']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article_channelName']->value;?>
" /></a></h1>

    <div class="search">
        <div class="searchbox">
            <form name="search" method="get" action="<?php echo getUrlPath(array('service'=>'article','template'=>'search'),$_smarty_tpl);?>
">
                <input  name="keywords" type="text" class="txt_search" id="search_keyword" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:translate" placeholder="搜索新闻..." data-role="input" />
                <div id="search_button" type="submit" class="btn-s"><i></i></div>
            </form>
        </div>
    </div>

    <div class="fabu"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu-article'),$_smarty_tpl);?>
">发布投稿</a></div>
    <div class="kefu fn-clear"><span class="fn-left"><i></i>客服热线</span><?php echo $_smarty_tpl->tpl_vars['article_hotline']->value;?>
</div>
</div>

<div class="nav_box">
    <div class="nav_bg">
        <ul class="nav fn-clear wrap">
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="index") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"index"),$_smarty_tpl);?>
">首页</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="toutiao") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"toutiao"),$_smarty_tpl);?>
">头条资讯</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="picnews") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"picnews"),$_smarty_tpl);?>
">图片资讯</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="special") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"zt"),$_smarty_tpl);?>
">专题</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="media") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"media"),$_smarty_tpl);?>
">自媒体</a> <i class="picon-hot1"></i></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="short_video") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"short_video"),$_smarty_tpl);?>
">短视频</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="video") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"video"),$_smarty_tpl);?>
">视频逛街</a></li>
            <?php if (in_array("paper",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['paper_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['paper_channelName']->value;?>
</a> <i class="picon-hot2"></i></li><?php }?>
            <li class="zmt_bg"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config-selfmedia'),$_smarty_tpl);?>
" class="zmt" target="_blank">入驻自媒体</a></li>
        </ul>
    </div>
</div>
<?php }} ?>
