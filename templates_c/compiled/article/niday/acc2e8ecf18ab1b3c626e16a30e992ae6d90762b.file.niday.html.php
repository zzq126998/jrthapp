<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:20:35
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\article\skin7\niday.html" */ ?>
<?php /*%%SmartyHeaderCode:9488715765d521e730b2e21-05091689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acc2e8ecf18ab1b3c626e16a30e992ae6d90762b' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\article\\skin7\\niday.html',
      1 => 1555661906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9488715765d521e730b2e21-05091689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_title' => 0,
    'article_keywords' => 0,
    'article_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'mold' => 0,
    'list_id' => 0,
    'type' => 0,
    'list_topTypeid' => 0,
    'n' => 0,
    'minh' => 0,
    'list' => 0,
    'm' => 0,
    'notid' => 0,
    'host' => 0,
    'hlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d521e7316c740_66997457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d521e7316c740_66997457')) {function content_5d521e7316c740_66997457($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['article_keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['article_description']->value;?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/picnews.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" >
        var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
';
        var mold = '<?php echo $_smarty_tpl->tpl_vars['mold']->value;?>
';
        var typeid = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['list_id']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
        var searchPage = '<?php echo getUrlPath(array('service'=>'article','template'=>'search','param'=>'keywords='),$_smarty_tpl);?>
';
    <?php echo '</script'; ?>
>
</head>
<body class="w1200">
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('picnews', null, 0);?>
<!--头部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--头部 e-->
<div class="contain">
    <div class="wrap">
        <div class="ad">
            <?php echo getMyAd(array('title'=>"新闻资讯_模板七_电脑端_图片_广告一"),$_smarty_tpl);?>

        </div>

        <div class="con fn-clear">
            <div class="navlist">
                <div class="hd"><h2>相关频道</h2></div>
                <ul class="ch2-list">
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'return'=>'type')); $_block_repeat=true; echo article(array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['list_topTypeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['n']->value>10) {?>
            <?php $_smarty_tpl->tpl_vars['minh'] = new Smarty_variable(66+57*10, null, 0);?>
            <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['minh'] = new Smarty_variable(66+57*$_smarty_tpl->tpl_vars['n']->value, null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['minh']->value<300) {?>
            <?php $_smarty_tpl->tpl_vars['minh'] = new Smarty_variable(300, null, 0);?>
            <?php }?>
            <div class="channel_mod" style="min-height:<?php echo $_smarty_tpl->tpl_vars['minh']->value;?>
px;">
                <div class="focus3 fn-clear">
                    <div class="focus3_focus">
                        <div class="slideBox slideBox2">
                            <div class="bd">
                                <ul class="fn-clear">
                                    <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable('', null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable(1, null, 0);?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'pageSize'=>2,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'pageSize'=>2,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" class="fn-clear">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                                        <div class="text"><b><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
</b></div>
                                    </a></li>
                                    <?php if ($_smarty_tpl->tpl_vars['m']->value==1) {?>
                                    <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['id'], null, 0);?>
                                    <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable((($_smarty_tpl->tpl_vars['notid']->value).(",")).($_smarty_tpl->tpl_vars['list']->value['id']), null, 0);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value+1, null, 0);?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'pageSize'=>2,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            </div>
                            <div class="hd"><ul class="fn-clear"></ul></div>
                        </div>
                    </div>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>2,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>2,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="focus3_li small focus3_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                        <div class="txt"><b><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
</b></div>
                    </a></div>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>2,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php if ($_smarty_tpl->tpl_vars['m']->value==1&&$_smarty_tpl->tpl_vars['n']->value==1) {?>
                    <style>.focus3 {display:none;}</style>
                    <?php }?>
                </div>

                <ul class="list pic-list" id="piclist"></ul>
                <div style="font-size:14px;color:#bfbfbf;text-align:center;line-height:168px;" class="loa">加载中...</div>
            </div>
            <!--右侧新闻列表-->
            <div class="right-bar">
                <div class="hour24-bar">
                    <div class="bar-tit"><h2 class="f1"><span>24小时必读</span></h2></div>
                    <div class="bar-con">
                        <ul class="list">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'thumb'=>"1",'return'=>'host','orderby'=>'1','page'=>'1','pageSize'=>'5')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'thumb'=>"1",'return'=>'host','orderby'=>'1','page'=>'1','pageSize'=>'5'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="item "><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value['url'];?>
" target="_blank" class="fn-clear">
                                <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['host']->value['title']);?>
"></div>
                                <div class="txt"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['host']->value['title']);?>
</div>
                            </a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'thumb'=>"1",'return'=>'host','orderby'=>'1','page'=>'1','pageSize'=>'5'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        </ul>
                        <div class="more"><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"picnews"),$_smarty_tpl);?>
">查看更多</a></div>
                    </div>
                </div>

                <div class="hot-bar">
                    <div class="bar-tit"><h2 class="f1"><span>热门资讯</span></h2></div>
                    <div class="bar-con">
                        <ul class="list">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'thumb'=>"1",'return'=>"hlist",'orderby'=>"1",'pageSize'=>"4")); $_block_repeat=true; echo article(array('action'=>"alist",'mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'thumb'=>"1",'return'=>"hlist",'orderby'=>"1",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="item "><a href="<?php echo $_smarty_tpl->tpl_vars['hlist']->value['url'];?>
" target="_blank" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['hlist']->value['title']);?>
" class="fn-clear">
                                <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['hlist']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['host']->value['title']);?>
" ></div>
                                <div class="txt"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['hlist']->value['title']);?>
</div>
                            </a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'thumb'=>"1",'return'=>"hlist",'orderby'=>"1",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                        <div class="more"><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"picnews"),$_smarty_tpl);?>
">查看更多</a></div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<!--底部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--底部 e-->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/jquery.getAjax.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/picnews.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
