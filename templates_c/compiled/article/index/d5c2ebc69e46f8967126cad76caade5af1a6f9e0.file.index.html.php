<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 11:55:09
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/article/147/index.html" */ ?>
<?php /*%%SmartyHeaderCode:5714426705d45059d848a93-73062761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c2ebc69e46f8967126cad76caade5af1a6f9e0' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/article/147/index.html',
      1 => 1561979523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5714426705d45059d848a93-73062761',
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
    'article_channelDomain' => 0,
    'list' => 0,
    'i' => 0,
    'n' => 0,
    'installModuleArr' => 0,
    'paper_channelName' => 0,
    'paper_channelDomain' => 0,
    'store' => 0,
    'typeidx' => 0,
    'type' => 0,
    'subtype' => 0,
    'm' => 0,
    'notid' => 0,
    '_bindex' => 0,
    'list1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d45059d8d9e01_25496957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d45059d8d9e01_25496957')) {function content_5d45059d8d9e01_25496957($_smarty_tpl) {?><!DOCTYPE html>
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
css/public2.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
    <?php echo '</script'; ?>
>
</head>
<body class="w1200">
<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable('index', null, 0);?>
<!--头部 s-->
<?php echo $_smarty_tpl->getSubTemplate ("_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--头部 e-->
<div class="contain">
    <div class="wrap">
        <div class="dad">
            <?php echo getMyAd(array('title'=>"新闻资讯_模板八_电脑端_首页_广告一"),$_smarty_tpl);?>

        </div>

        <div class="focusNews fn-clear">
            <div class="focusleft fn-left">
                <div class="adbox">
                    <div class=" slideBox" id="slideBox1">
                        <div class="wrap">
                            <div class="hd">
                                <ul></ul>
                                <a class="prev" href="javascript:void(0)"></a>
                                <a class="next" href="javascript:void(0)"></a>
                            </div>
                        </div>
                        <div class="bd">
                            <ul>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>'0','thumb'=>'1','pageSize'=>5,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>'0','thumb'=>'1','pageSize'=>5,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="fn-clear">
                                    <div class="item">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                                            <div class="text"><b><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</b><div class="bg"></div></div>
                                        </a>
                                        <!--<div class="bg"></div>-->
                                    </div>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>'0','thumb'=>'1','pageSize'=>5,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="rad">
                    <?php echo getMyAd(array('title'=>"新闻资讯_模板八_电脑端_首页_广告二"),$_smarty_tpl);?>

                </div>

                <div class="rightlist">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','flag'=>'r','pageSize'=>5,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','flag'=>'r','pageSize'=>5,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','flag'=>'r','pageSize'=>5,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="focuslist">
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                <div class="itemlist">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','flag'=>'h','page'=>$_smarty_tpl->tpl_vars['i']->value,'pageSize'=>6,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','flag'=>'h','page'=>$_smarty_tpl->tpl_vars['i']->value,'pageSize'=>6,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a <?php if ($_smarty_tpl->tpl_vars['n']->value==0) {?>class="title"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','flag'=>'h','page'=>$_smarty_tpl->tpl_vars['i']->value,'pageSize'=>6,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <?php }} ?>
            </div>
            <!--要闻右侧-->
            <div class="focusright fn-right">
                <div class="newmedia">
                    <h3 class="title">新加入媒体 <a href="<?php echo getUrlPath(array('service'=>'article','template'=>'media'),$_smarty_tpl);?>
">更多>></a></h3>
                    <ul class="medialist fn-clear">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'selfmedia','orderby'=>'time','pageSize'=>9,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'selfmedia','orderby'=>'time','pageSize'=>9,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="fn-left"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
">
                            <p class="name" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</p>
                        </a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'selfmedia','orderby'=>'time','pageSize'=>9,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <?php if (in_array("paper",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
                <div class="elepress">
                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['paper_channelName']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['paper_channelDomain']->value;?>
">更多>></a></h3>
                    <div class="pressbox">
                        <div class=" slideBox" id="slideBox">
                            <div class="wrap">
                                <div class="hd">
                                    <ul></ul>
                                    <a class="prev" href="javascript:void(0)"></a>
                                    <a class="next" href="javascript:void(0)"></a>
                                </div>
                            </div>
                            <div class="bd">
                                <ul>
                                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('paper', array('action'=>'store','return'=>'store','pageSize'=>'100')); $_block_repeat=true; echo paper(array('action'=>'store','return'=>'store','pageSize'=>'100'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php if ($_smarty_tpl->tpl_vars['store']->value['forum']&&$_smarty_tpl->tpl_vars['n']->value<5) {?>
                                    <li class="fn-clear">
                                        <div class="item">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['store']->value['forum']['url'];?>
" target="_blank"><img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['store']->value['forum']['litpic']),'type'=>"middle"),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['store']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['store']->value['title'];?>
"></a>
                                        </div>
                                    </li>
                                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                                    <?php }?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo paper(array('action'=>'store','return'=>'store','pageSize'=>'100'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>

        <div class="dad">
            <?php echo getMyAd(array('title'=>"新闻资讯_模板八_电脑端_首页_广告三"),$_smarty_tpl);?>

        </div>
        <!--视频资讯 s-->
        <div class="modular videoNews">
            <div class="title">
                <a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"video"),$_smarty_tpl);?>
" class="curr">视频资讯</a>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','mold'=>2,'pageSize'=>8,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'type','mold'=>2,'pageSize'=>8,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['typename'];?>
</a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','mold'=>2,'pageSize'=>8,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"video"),$_smarty_tpl);?>
" class="more">更多>></a>
            </div>
            <div class="con fn-clear">
                <div class="fn-left vleft">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>2,'pageSize'=>1,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>2,'pageSize'=>1,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                            <span class="playbtn"></span>
                        </div>
                        <p class="tit"><i></i> <?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                    </a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>2,'pageSize'=>1,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <ul class="vlist fn-clear">
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>2,'pageSize'=>9,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>2,'pageSize'=>9,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['n']->value>0) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <div class="pic">
                            <img src="<?php if ($_smarty_tpl->tpl_vars['list']->value['litpic']) {
echo $_smarty_tpl->tpl_vars['list']->value['litpic'];
} else {
echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/videoface_179_127.jpg<?php }?>" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
">
                            <div class="time">
                                <span><?php echo $_smarty_tpl->tpl_vars['list']->value['click'];?>
</span>
                                <div class="bg"></div>
                            </div>
                            <div class="carver"><span class="play-btn"></span><div class="bg"></div></div>
                        </div>
                        <div class="txt sliceFont" data-num="23"><?php if ($_smarty_tpl->tpl_vars['list']->value['description']) {
echo $_smarty_tpl->tpl_vars['list']->value['description'];
} else {
echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);
}?></div>
                    </a></li>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>2,'pageSize'=>9,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>

            </div>

        </div>
        <!--视频资讯 e-->
        <div class="dad">
            <?php echo getMyAd(array('title'=>"新闻资讯_模板八_电脑端_首页_广告四"),$_smarty_tpl);?>

        </div>


        <?php $_smarty_tpl->tpl_vars['typeidx'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','return'=>'type')); $_block_repeat=true; echo article(array('action'=>'type','return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['typeidx']->value<5) {?>
        <div class="dad">
            <?php ob_start();
echo ($_smarty_tpl->tpl_vars['typeidx']->value+1);
$_tmp1=ob_get_clean();?><?php echo getMyAd(array('title'=>"新闻资讯_模板八_电脑端_首页_广告五_".$_tmp1),$_smarty_tpl);?>

        </div>

        <div class="modular houseNews">
            <div class="title">
                <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
" class="curr"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'return'=>'subtype','pageSize'=>"8")); $_block_repeat=true; echo article(array('action'=>'type','type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'return'=>'subtype','pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['subtype']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subtype']->value['typename'];?>
</a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','type'=>$_smarty_tpl->tpl_vars['type']->value['id'],'return'=>'subtype','pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
" class="more">更多>></a>
            </div>
            <div class="con fn-clear">
                <div class="con-left fn-clear">
                    <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable('', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable(1, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'thumb'=>'1','pageSize'=>3,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'thumb'=>'1','pageSize'=>3,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['m']->value==1) {?>
                    <div class="focus1_focus"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
"></div>
                        <div class="tit"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
</div>
                    </a></div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['m']->value==2) {?>
                    <div class="focus2 small"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
"></div>
                        <div class="tit"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
</div>
                    </a></div>
                    <?php } else { ?>
                    <div class="focus3 small"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                        <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
"></div>
                        <div class="tit"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
</div>
                    </a></div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['m']->value==1) {?>
                    <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['id'], null, 0);?>
                    <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable((($_smarty_tpl->tpl_vars['notid']->value).(",")).($_smarty_tpl->tpl_vars['list']->value['id']), null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value+1, null, 0);?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'thumb'=>'1','pageSize'=>3,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <div class="conList">
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (1) : 1-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                    <div class="itemlist">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'page'=>$_smarty_tpl->tpl_vars['i']->value,'notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>5,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'page'=>$_smarty_tpl->tpl_vars['i']->value,'notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>5,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a <?php if ($_smarty_tpl->tpl_vars['n']->value==0) {?>class="title"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
                        <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'page'=>$_smarty_tpl->tpl_vars['i']->value,'notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>5,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                    <?php }} ?>
                </div>

                <div class="con-right">
                    <h3 class="title">热门推荐 <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
">更多>></a></h3>
                    <ul class="recomlist">
                        <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'thumb'=>'1','flag'=>'r','pageSize'=>1,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'thumb'=>'1','flag'=>'r','pageSize'=>1,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="item-pic"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank">
                            <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
"><i class="hot"></i></div>
                            <p class="tit" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p>
                        </a></li>
                        <?php $_smarty_tpl->tpl_vars['notid'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value['id'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(2, null, 0);?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'thumb'=>'1','flag'=>'r','pageSize'=>1,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'flag'=>'r','notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>5,'isAjax'=>1,'return'=>'list')); $_block_repeat=true; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'flag'=>'r','notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>5,'isAjax'=>1,'return'=>'list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="item"> <i<?php if ($_smarty_tpl->tpl_vars['n']->value<4) {?> class="col"<?php }?>><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</i> <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['title']);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></li>
                        <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','typeid'=>$_smarty_tpl->tpl_vars['type']->value['id'],'flag'=>'r','notid'=>$_smarty_tpl->tpl_vars['notid']->value,'pageSize'=>5,'isAjax'=>1,'return'=>'list'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['typeidx'] = new Smarty_variable($_smarty_tpl->tpl_vars['typeidx']->value+1, null, 0);?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <div class="dad">
            <?php echo getMyAd(array('title'=>"新闻资讯_模板八_电脑端_首页_广告六"),$_smarty_tpl);?>

        </div>
        <!--图片新闻 s-->
        <div class="modular picNews">
            <div class="title">
                <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
" class="curr">图片新闻</a>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'type','mold'=>1,'pageSize'=>8,'return'=>'type')); $_block_repeat=true; echo article(array('action'=>'type','mold'=>1,'pageSize'=>8,'return'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['type']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'type','mold'=>1,'pageSize'=>8,'return'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <a href="<?php echo getUrlPath(array('service'=>"article",'template'=>"picnews"),$_smarty_tpl);?>
" class="more">更多>></a>
            </div>
            <!--<div class="picNews-con fn-clear">-->
            <!---->
            <!--</div>-->

            <!--商城资讯-->
            <div class="picnews-con">
                <div class="slideBox slideBox4">
                    <div class="bd">
                        <ul class="fn-clear">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>'alist','mold'=>1,'return'=>'list1')); $_block_repeat=true; echo article(array('action'=>'alist','mold'=>1,'return'=>'list1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="item">
                                <a class="item-c a<?php echo $_smarty_tpl->tpl_vars['_bindex']->value['list1'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['list1']->value['url'];?>
" target="_blank" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list1']->value['title']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list1']->value['litpic'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list1']->value['title']);?>
"> <div class="txt"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list1']->value['title']);?>
</div>
                                    <div class="bg"></div></a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>'alist','mold'=>1,'return'=>'list1'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        </ul>
                    </div>
                    <div class="hd">
                        <ul class="fn-clear"></ul>
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
                    </div>
                </div>

            </div>
        </div>
        <!--图片新闻 e-->

    </div>
</div>


<!--底部 s-->
<?php echo $_smarty_tpl->getSubTemplate ('../../siteConfig/public_foot_v3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'article','theme'=>'gray'), 0);?>

<!--底部 e-->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
