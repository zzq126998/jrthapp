<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:23:46
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\article\skin7\video.html" */ ?>
<?php /*%%SmartyHeaderCode:18611269715d51221288dae1-28677203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62d26c03a96b6634cd093885aba6a99fb1ec874' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\article\\skin7\\video.html',
      1 => 1555661908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18611269715d51221288dae1-28677203',
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
    'pageCurr' => 0,
    'type' => 0,
    'list_topTypeid' => 0,
    'n' => 0,
    'minh' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d512212928001_96754192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d512212928001_96754192')) {function content_5d512212928001_96754192($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
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
css/video.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
        var staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
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
<!--头部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageCurr'=>$_smarty_tpl->tpl_vars['pageCurr']->value), 0);?>

<!--头部 e-->
<div class="contain">
    <div class="wrap">

        <div class="containtwo">

            <!--列表式-->
            <div class="con fn-clear pta show">
                <div class="navlist">
                    <div class="hd"><h2>这些圈子都在看</h2></div>
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

                <!--中间部分-->
                <div class="content fl" style="min-height:<?php echo $_smarty_tpl->tpl_vars['minh']->value;?>
px;" >
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'flag'=>"h",'pageSize'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'flag'=>"h",'pageSize'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="video-module">
                        <div class="wrapper">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                                <img src="<?php if ($_smarty_tpl->tpl_vars['list']->value['litpic']) {
echo $_smarty_tpl->tpl_vars['list']->value['litpic'];
} else { ?>/static/images/blank.gif<?php }?>" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                                <div class="play-box"><span class="play-btn"></span><div class="bg"></div></div>
                            </a>
                        </div>
                        <div class="info">
                            <p class="title"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                            <div class="items fn-clear">
                                <?php if ($_smarty_tpl->tpl_vars['list']->value['writer']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['list']->value['media']) {?>
                                <div class="fn-left"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['media']['url'];?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['list']->value['writer'];?>
</a></div>
                                <?php } else { ?>
                                <div class="fn-left"><span class="author"><?php echo $_smarty_tpl->tpl_vars['list']->value['writer'];?>
</span></div>
                                <?php }?>
                                <?php }?>
                                <span class="publish"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['pubdate'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                <div class="fn-right">
                                    <a href="javascript:;" class="sharebtn t" data-title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" data-pic="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
">分享</a>
                                    <span class="count"><?php if ($_smarty_tpl->tpl_vars['list']->value['click']>=10000) {
echo $_smarty_tpl->tpl_vars['list']->value['click']/10000;?>
万<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['click'];
}?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'flag'=>"h",'pageSize'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <div class="arithmetic-list">
                        <div class="hd">
                            <h2 class="title">享看懂你 <span class="sub-title">你的专属视频</span></h2>
                        </div>
                        <div class="bd">
                            <ul class="video-list " id="vdlist"></ul>

                            <div style="font-size:14px;color:#bfbfbf;text-align:center;line-height:168px;" class="loa">加载中...</div>
                            <!-- <div class="loadmore">为您推荐了10条视频</div> -->
                        </div>
                    </div>

                </div>
                <div class="sidebar fr">
                    <div class="hd fn-clear"><h2 class="fl">相关推荐</h2>   </div>
                    <ul class="video-list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>$_smarty_tpl->tpl_vars['mold']->value,'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'flag'=>"r",'pageSize'=>6,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>$_smarty_tpl->tpl_vars['mold']->value,'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'flag'=>"r",'pageSize'=>6,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                            <div class="inner">
                                <div class="pic">
                                    <img src="<?php if ($_smarty_tpl->tpl_vars['list']->value['litpic']) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['list']->value['litpic'],'large','middle');
} else { ?>/static/images/blank.gif<?php }?>" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                                    <span class="duration"><?php echo $_smarty_tpl->tpl_vars['list']->value['videotime'];?>
</span>
                                </div>
                                <div class="info">
                                    <p class="title"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                                    <span class="author"><?php echo $_smarty_tpl->tpl_vars['list']->value['writer'];?>
</span>
                                    <span class="count"><?php if ($_smarty_tpl->tpl_vars['list']->value['click']>=10000) {
echo $_smarty_tpl->tpl_vars['list']->value['click']/10000;?>
万<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['click'];
}?></span>
                                </div>
                            </div>
                        </a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>$_smarty_tpl->tpl_vars['mold']->value,'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'flag'=>"r",'pageSize'=>6,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <div class="more"><a href="<?php echo getUrlPath(array('service'=>'article','template'=>'video'),$_smarty_tpl);?>
">查看更多</a></div>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/video.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
