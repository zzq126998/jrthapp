<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:23:31
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\article\skin7\mddetail.html" */ ?>
<?php /*%%SmartyHeaderCode:289565185d5122034230d0-19609224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa8653140ac738b7b6683560844c9762252139a' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\article\\skin7\\mddetail.html',
      1 => 1555661906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289565185d5122034230d0-19609224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail_ac_name' => 0,
    'article_keywords' => 0,
    'article_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'article_channelDomain' => 0,
    'detail_id' => 0,
    'type' => 0,
    'n' => 0,
    'minh' => 0,
    'detail_userid' => 0,
    'page' => 0,
    'list' => 0,
    'k' => 0,
    'url' => 0,
    'tag' => 0,
    'alist' => 0,
    'img' => 0,
    'pageInfo' => 0,
    'detail_ac_photo' => 0,
    'detail_ac_profile' => 0,
    'detail_isfollow' => 0,
    'detail_total_article' => 0,
    'detail_click' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5122034e0872_51759336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5122034e0872_51759336')) {function content_5d5122034e0872_51759336($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['detail_ac_name']->value;?>
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
css/mddetail.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />

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
        var id = <?php echo $_smarty_tpl->tpl_vars['detail_id']->value;?>
;
    <?php echo '</script'; ?>
>
</head>
<body class="w1200">
<!--头部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageCurr'=>"media"), 0);?>

<!--头部 e-->
<div class="contain">
    <div class="wrap">
        <div class="con fn-clear">
            <div class="navlist">
                <div class="hd"><h2>这些圈子都在看</h2></div>
                <ul class="ch2-list">
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','mold'=>"0",'return'=>'type')); $_block_repeat=true; echo article(array('action'=>'type','mold'=>"0",'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','mold'=>"0",'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
                <ul class="list">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','uid'=>$_smarty_tpl->tpl_vars['detail_userid']->value,'mold'=>'0,1','page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>10,'return'=>"list")); $_block_repeat=true; echo article(array('action'=>'alist','uid'=>$_smarty_tpl->tpl_vars['detail_userid']->value,'mold'=>'0,1','page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>10,'return'=>"list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php ob_start();
echo getUrlPath(array('service'=>'article','template'=>'search'),$_smarty_tpl);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_tmp1, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['list']->value['mold']==0) {?>
                    <li class="item fn-clear">
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['litpic']) {?>
                        <div class="picture"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
"></a></div>
                        <?php }?>
                        <div class="detail">
                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['list']->value['flag']&&strstr($_smarty_tpl->tpl_vars['list']->value['flag'],"h")) {?><span class="icon-hots"></span><?php }
echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></h3>
                            <div class="tags">
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['keywordsArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['tag']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value<4) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?keywords=<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" class="tag"><?php echo mb_substr($_smarty_tpl->tpl_vars['tag']->value,0,5,'utf8');?>
</a>
                                <?php }?>
                                <?php } ?>
                            </div>
                            <div class="binfo cf">
                                <div class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['typeUrl'][0];?>
" class="souce"><?php echo $_smarty_tpl->tpl_vars['list']->value['typeName'][0];?>
</a><span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['pubdate'],'%Y-%m-%d %H:%M:%S');?>
</span></div>
                                <div class="fr">
                                    <a href="javascript:;" class="sharebtn t" data-title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['alist']->value['title']);?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
" data-pic="<?php echo $_smarty_tpl->tpl_vars['alist']->value['litpic'];?>
">分享</a>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
#comment" class="cmt" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['common'];?>
</a></div>
                            </div>
                        </div>
                    </li>
                    <?php } elseif ($_smarty_tpl->tpl_vars['list']->value['mold']==1) {?>
                    <li class="item-pics">
                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['list']->value['flag']&&strstr($_smarty_tpl->tpl_vars['list']->value['flag'],"h")) {?><span class="icon-hots"></span><?php }
echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></h3>
                        <a class="pics fn-clear" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                            <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['group_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['n']->value<4) {?>
                            <img class="picture fl" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['path'];?>
">
                            <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                            <?php }?>
                            <?php } ?>
                        </a>
                        <div class="binfo fn-clear">
                            <div class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['typeUrl'][0];?>
" target="_blank" class="souce"><?php echo $_smarty_tpl->tpl_vars['list']->value['typeName'][0];?>
</a><span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['pubdate'],'%Y-%m-%d %H:%M:%S');?>
</span></div>
                            <div class="tags fl">
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['keywordsArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?keywords=<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" class="tag"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</a>
                                <?php } ?>
                            </div>
                            <div class="fr">
                                <!--<a href="#" class="t">分享</a>-->
                                <a href="javascript:;" class="sharebtn t" data-title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['alist']->value['title']);?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
" data-pic="<?php echo $_smarty_tpl->tpl_vars['alist']->value['litpic'];?>
">分享</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
#comment" class="cmt" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['common'];?>
</a>
                            </div>
                        </div>
                    </li>
                    <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','uid'=>$_smarty_tpl->tpl_vars['detail_userid']->value,'mold'=>'0,1','page'=>$_smarty_tpl->tpl_vars['page']->value,'pageSize'=>10,'return'=>"list"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>

                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>
                <div class="empty">暂无相关信息</div>
                <?php } else { ?>
                <?php echo getPageList(array('service'=>'article','template'=>'mddetail','id'=>$_smarty_tpl->tpl_vars['detail_id']->value,'pageType'=>'dynamic','param'=>"page=#page#"),$_smarty_tpl);?>

                <?php }?>
            </div>

            <div class="inforight">
                <div class="mediaInfo">
                    <div class="author">
                        <div class="pic"><img src="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['detail_ac_photo']->value,"large","middle");?>
"></div>
                        <p class="name"><?php echo $_smarty_tpl->tpl_vars['detail_ac_name']->value;?>
</p>
                        <p class="dec" title="<?php echo $_smarty_tpl->tpl_vars['detail_ac_profile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['detail_ac_profile']->value;?>
</p>
                        <p class="collect_box">
                            <?php if ($_smarty_tpl->tpl_vars['detail_isfollow']->value==1) {?>
                            <span class="collect active curr">已关注</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['detail_isfollow']->value==0) {?>
                            <span class="collect">关注</span>
                            <?php } else { ?>
                            <span class="collect disabled">关注</span>
                            <?php }?>
                        </p>
                    </div>
                    <div class="msg"><div class="fn-left"><span><?php echo $_smarty_tpl->tpl_vars['detail_total_article']->value;?>
</span>文章</div><div class="line"></div><div class="fn-right"><span><?php if ($_smarty_tpl->tpl_vars['detail_click']->value>=10000) {
echo $_smarty_tpl->tpl_vars['detail_click']->value/10000;?>
万<?php } else {
echo $_smarty_tpl->tpl_vars['detail_click']->value;
}?></span>总阅读</div></div>

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
js/mddetail.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
