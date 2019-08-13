<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:25:51
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\article\skin7\short_video.html" */ ?>
<?php /*%%SmartyHeaderCode:140680515d521faf72bd74-19793943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d01563ee0977438454cfc530384fab630ffbdc' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\article\\skin7\\short_video.html',
      1 => 1555661906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140680515d521faf72bd74-19793943',
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
    'page' => 0,
    'list' => 0,
    'imgh' => 0,
    'pageInfo' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d521faf7e9519_60794176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d521faf7e9519_60794176')) {function content_5d521faf7e9519_60794176($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
- 短视频</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['article_keywords']->value;?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['article_description']->value;?>
"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/short_video.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"
          media="all"/>
    <?php echo '<script'; ?>
 type="text/javascript"
            src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
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
        <ul id="masonry" class="content fn-clear">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>10,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>10,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                <div class="pic">
                    <?php if ($_smarty_tpl->tpl_vars['list']->value['litpic']) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" style="width:290px;height:<?php echo sprintf("%.d",($_smarty_tpl->tpl_vars['list']->value['picheight']/$_smarty_tpl->tpl_vars['list']->value['picwidth']*290));?>
px;">
                    <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['imgh']->value==200) {?>
                    <?php $_smarty_tpl->tpl_vars['imgh'] = new Smarty_variable(300, null, 0);?>
                    <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['imgh'] = new Smarty_variable(200, null, 0);?>
                    <?php }?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/thumb_making_290_<?php echo $_smarty_tpl->tpl_vars['imgh']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" style="width:290px;height:<?php echo $_smarty_tpl->tpl_vars['imgh']->value;?>
px;">
                    <?php }?>
                    <div class="play-box"><span class=" pay-btn"></span>
                        <div class="bg"></div>
                    </div>
                </div>
                <div class="info fn-clear">
                    <p class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                    <div class="use fn-left items"><img src="<?php if ($_smarty_tpl->tpl_vars['list']->value['media']) {
echo $_smarty_tpl->tpl_vars['list']->value['media']['ac_photo'];
} else { ?>/static/images/default_user.jpg<?php }?>" alt="">
                        <span><?php echo $_smarty_tpl->tpl_vars['list']->value['writer'];?>
</span></div>
                    <div class="fn-right num items"><?php echo $_smarty_tpl->tpl_vars['list']->value['zannum'];?>
</div>
                </div>
            </a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>10,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>

        <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
        <div class="empty">暂无相关内容</div>
        <?php }?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value) {?><?php echo "&type=";?><?php echo (string)$_smarty_tpl->tpl_vars['type']->value;?><?php }
$_tmp1=ob_get_clean();?><?php echo getPageList(array('service'=>'article','template'=>'short_video','pageType'=>'dynamic','param'=>"page=#page#".$_tmp1),$_smarty_tpl);?>


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
js/masonry-docs.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/svideo.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
