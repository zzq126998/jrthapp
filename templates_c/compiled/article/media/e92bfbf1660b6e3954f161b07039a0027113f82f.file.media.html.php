<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:23:42
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\article\skin7\media.html" */ ?>
<?php /*%%SmartyHeaderCode:21145669595d51220e576896-59244323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92bfbf1660b6e3954f161b07039a0027113f82f' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\article\\skin7\\media.html',
      1 => 1555661906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21145669595d51220e576896-59244323',
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
    'list' => 0,
    'type' => 0,
    'page' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d51220e634036_08501426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d51220e634036_08501426')) {function content_5d51220e634036_08501426($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
- 自媒体</title>
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
css/media.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</head>
<body class="w1200">
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('media', null, 0);?>
<!--头部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--头部 e-->
    <div class="contain">
        <div class="wrap">
            <div class="con fn-clear">
                <div class="navlist">
                    <div class="hd"><h2>自媒体类型</h2></div>
                    <ul class="ch2-list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'selfmedia_type','return'=>'list')); $_block_repeat=true; echo article(array('action'=>'selfmedia_type','return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="item"><a href="<?php echo getUrlPath(array('service'=>'article','template'=>'media','param'=>"type=".((string)$_smarty_tpl->tpl_vars['list']->value['id'])),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['list']->value['id']==$_smarty_tpl->tpl_vars['type']->value) {?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['typename'];?>
</a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'selfmedia_type','return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>

                <div class="arithmetic-list">
                    <ul class="media-list fn-clear">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'selfmedia','type'=>$_smarty_tpl->tpl_vars['type']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>6,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'selfmedia','type'=>$_smarty_tpl->tpl_vars['type']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>6,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                                <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"></div>
                                <div class="info fn-clear">
                                    <p class="name"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</p>
                                    <div class="items fn-left">文章数 <span><?php echo $_smarty_tpl->tpl_vars['list']->value['total_article'];?>
</span></div>
                                    <div class="items fn-right">阅读量 <span><?php if ($_smarty_tpl->tpl_vars['list']->value['click']>10000) {
echo $_smarty_tpl->tpl_vars['list']->value['click']/10000;?>
 <em>万</em><?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['click'];
}?></span></div>
                                </div>
                                <div class="btn">主页</div>
                            </a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'selfmedia','type'=>$_smarty_tpl->tpl_vars['type']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>6,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
                    <div class="empty">暂无相关自媒体</div>
                    <?php }?>
                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value) {?><?php echo "&type=";?><?php echo (string)$_smarty_tpl->tpl_vars['type']->value;?><?php }
$_tmp1=ob_get_clean();?><?php echo getPageList(array('service'=>'article','template'=>'media','pageType'=>'dynamic','param'=>"page=#page#".$_tmp1),$_smarty_tpl);?>

                </div>
            </div>
        </div>
    </div>

<!--底部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--底部 e-->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/media.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
