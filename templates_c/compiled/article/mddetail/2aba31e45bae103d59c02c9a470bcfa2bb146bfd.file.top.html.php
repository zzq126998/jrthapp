<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:23:31
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\article\skin7\top.html" */ ?>
<?php /*%%SmartyHeaderCode:16104304075d5122034f7f86-95002614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aba31e45bae103d59c02c9a470bcfa2bb146bfd' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\article\\skin7\\top.html',
      1 => 1555661906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16104304075d5122034f7f86-95002614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_channelDomain' => 0,
    'article_channelName' => 0,
    'article_logoUrl' => 0,
    'keywords' => 0,
    '_bindex' => 0,
    'word' => 0,
    'cfg_weixinQr' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'article_hotline' => 0,
    'pageCurr' => 0,
    'installModuleArr' => 0,
    'special_channelDomain' => 0,
    'special_channelName' => 0,
    'paper_channelDomain' => 0,
    'paper_channelName' => 0,
    'cfg_staticVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5122035115d9_25913338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5122035115d9_25913338')) {function content_5d5122035115d9_25913338($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="header wrap">
    <h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['article_channelDomain']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['article_channelName']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article_logoUrl']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article_channelName']->value;?>
" /></a></h1>
    <div class="search">
        <div class="formbox">
            <form name="search" method="get" action="<?php echo getUrlPath(array('service'=>'article','template'=>'search'),$_smarty_tpl);?>
">
                <input name="keywords" type="text" class="txt_search" id="search_keyword" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:translate" placeholder="搜索新闻..." data-role="input" />
                <button id="search_button" type="submit" class="btn-s">搜索</button>
            </form>
        </div>
        <p class="hot-s">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'hotkeywords','module'=>'article','return'=>'word')); $_block_repeat=true; echo siteConfig(array('action'=>'hotkeywords','module'=>'article','return'=>'word'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['word']<4) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['word']->value['href'];?>
"<?php if ($_smarty_tpl->tpl_vars['word']->value['target']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['word']->value['keyword'];?>
</a>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'hotkeywords','module'=>'article','return'=>'word'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </p>
    </div>
    <div class="fabu"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu-article'),$_smarty_tpl);?>
">发布投稿</a></div>
    <?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value) {?>
    <div class="wx">
        <div class="wx_box"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/wx_icon.png"><p>关注微信</p></div>
        <p class="wx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
"></p>
    </div>
    <?php }?>
    <div class="kefu"><s><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/changecity_tel.png" /></s><p>客服热线</p><?php echo $_smarty_tpl->tpl_vars['article_hotline']->value;?>
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
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="video") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"video"),$_smarty_tpl);?>
">视频逛街</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="media") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"media"),$_smarty_tpl);?>
">自媒体</a> <i class="picon-hot1"></i></li>
            <li <?php if ($_smarty_tpl->tpl_vars['pageCurr']->value=="short_video") {?> class="currpage"<?php }?>><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"short_video"),$_smarty_tpl);?>
">短视频</a></li>
            <?php if (in_array("special",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['special_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['special_channelName']->value;?>
</a></li><?php }?>
            <?php if (in_array("paper",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['paper_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['paper_channelName']->value;?>
</a> <i class="picon-hot2"></i></li><?php }?>
            <li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config-selfmedia'),$_smarty_tpl);?>
" class="zmt" target="_blank">入驻自媒体</a></li>
        </ul>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/top.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php }} ?>
