<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 11:55:07
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/article/147/toutiao.html" */ ?>
<?php /*%%SmartyHeaderCode:2039279515d45059b91f536-80933860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b52504e7c554f5478fe7a58a48e8562aac5ee94' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/article/147/toutiao.html',
      1 => 1561979524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2039279515d45059b91f536-80933860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_seotitle' => 0,
    'list_typename' => 0,
    'cfg_webname' => 0,
    'list_keywords' => 0,
    'list_description' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'mold' => 0,
    'list_id' => 0,
    'pageCurr' => 0,
    'typeid' => 0,
    'row' => 0,
    'parentid' => 0,
    'type' => 0,
    'type1' => 0,
    'n' => 0,
    'minh' => 0,
    'list' => 0,
    'host' => 0,
    'hlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d45059b974f76_87214253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d45059b974f76_87214253')) {function content_5d45059b974f76_87214253($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta charset="UTF-8">
    <title>今日头条<?php if ($_smarty_tpl->tpl_vars['list_seotitle']->value!='') {?>-<?php echo $_smarty_tpl->tpl_vars['list_seotitle']->value;
} else {
echo $_smarty_tpl->tpl_vars['list_typename']->value;
}?> - <?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
 </title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['list_keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['list_description']->value;?>
" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/toutiao.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
<!--头部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageCurr'=>$_smarty_tpl->tpl_vars['pageCurr']->value), 0);?>

<!--头部 e-->
<div class="contain">
    <div class="wrap">
        <div class="ad">
            <?php echo getMyAd(array('title'=>"新闻资讯_模板八_电脑端_头条_广告一"),$_smarty_tpl);?>

        </div>

        <div class="con fn-clear">
            <ul class="fudong-nav">
                <div class="hd"><h2>相关频道</h2></div>
                <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'return'=>'type')); $_block_repeat=true; echo article(array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li <?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['row']->value['id']||$_smarty_tpl->tpl_vars['parentid']->value==$_smarty_tpl->tpl_vars['row']->value['id']) {?>class="active item"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
                    <div class="secondnac-box">
                        <ul class="second-nav">
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'type'=>$_tmp1,'return'=>'type1')); $_block_repeat=true; echo article(array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'type'=>$_tmp1,'return'=>'type1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="on_nav">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['type1']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
"> <?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'type'=>$_tmp1,'return'=>'type1'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </li>
                <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
       
            </ul>



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
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'thumb'=>'1','pageSize'=>3,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'thumb'=>'1','pageSize'=>3,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['n']->value==1) {?>
                    <div class="focus3_focus"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                        <div class="txt"><b><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</b></div>
                    </a></div>
                    <?php } else { ?>
                    <div class="focus3_li small focus3_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                        <div class="txt"><b><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</b></div>
                    </a></div>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>((string)$_smarty_tpl->tpl_vars['mold']->value),'typeid'=>$_smarty_tpl->tpl_vars['list_id']->value,'thumb'=>'1','pageSize'=>3,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>

                <ul class="list nhc" id="newslist">

                </ul>
                <!--鼠标滚动到底部自动加载更多-->
                <div style="font-size:14px;color:#bfbfbf;text-align:center;line-height:168px;" class="loa">加载中...</div>

            </div>

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
                        <div class="more"><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"toutiao"),$_smarty_tpl);?>
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
                        <div class="more"><a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"toutiao"),$_smarty_tpl);?>
">查看更多</a></div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

<!--底部 s-->
<?php echo $_smarty_tpl->getSubTemplate ('../../siteConfig/public_foot_v3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'article','theme'=>'gray'), 0);?>

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
js/ui/jquery.cycle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/toutiao.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
