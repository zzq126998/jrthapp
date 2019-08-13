<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:49:43
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\info\115\header_search.html" */ ?>
<?php /*%%SmartyHeaderCode:17731193345d510c07921dd2-84974692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3584ab52e4145edf69adcbdffbe887092cfcac79' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\info\\115\\header_search.html',
      1 => 1555744188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17731193345d510c07921dd2-84974692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_channelDomain' => 0,
    'info_channelName' => 0,
    'info_logoUrl' => 0,
    'keywords' => 0,
    'cfg_basehost' => 0,
    'templets_skin' => 0,
    'cfg_miniProgramName' => 0,
    'cfg_weixinQr' => 0,
    'cfg_weixinName' => 0,
    'cfg_miniProgramQr' => 0,
    'business_channelDomain' => 0,
    'huangye_channelDomain' => 0,
    'integral_channelDomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510c0792f8a6_67325159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510c0792f8a6_67325159')) {function content_5d510c0792f8a6_67325159($_smarty_tpl) {?><div class="fixedwrap FestivalAD_header">
    <div class="fixedpane">
        <!-- head s -->
        <div class="wrap header fn-clear">
            <div class="logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['info_channelName']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['info_logoUrl']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_channelName']->value;?>
" /></a>
            </div>
            <div class="searchwrap y-linear">
                <div class="search">
                    <div class="type">
                        <dl>
                            <dt><a href="javascript:;" class="keytype"> 信息 </a><em></em></dt>
                            <dd>
                                <a href="javascript:;" data-id="0" data-type="list" class="active">信息</a>
                                <a href="javascript:;" data-id="1" data-type="store_list">商家</a>
                            </dd>
                        </dl>
                    </div>
                    <div class="FormBox">
                        <form action="<?php echo getUrlPath(array('service'=>'info','template'=>'list'),$_smarty_tpl);?>
" class="form">
                            <div class="inputbox">
                                <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您想搜索的关键词" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                            </div>
                            <div class="subbox search-btn">
                                <i class="isearch"></i>
                                <input type="submit" class="submit" value="搜索">
                            </div>
                        </form>
                        <form action="<?php echo getUrlPath(array('service'=>'info','template'=>'store_list'),$_smarty_tpl);?>
" class="form fn-hide">
                            <div class="inputbox">
                                <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您想搜索的关键词" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
                            </div>
                            <div class="subbox search-btn">
                                <i class="isearch"></i>
                                <input type="submit" class="submit" value="搜索">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="infobox">
                <a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','module'=>'info'),$_smarty_tpl);?>
" class="fbbox"><i class="ifabu"></i><span>发布信息</span></a>
                <a href="javascript:;" class="tgbox"><i class="ituig"></i><span>推广合作</span></a>
                <div class="app-con fn-clear">
                    <div class="icon-box app">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/mobile.html" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/app.png"></a>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/mobile.html" target="_blank">移动端</a></p>
                        <div class="down app-down fn-clear">
                            <div class="con-box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
">
                                <p>扫码访问</p>
                            </div>
                            <div class="con-box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
">
                                <p>移动端app下载：<br><?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramName']->value;?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box wx">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/weixin.png">
                        <p>微信端</p>
                        <div class="down wx-down fn-clear">
                            <div class="con-box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
">
                                <p>扫码访问</p>
                            </div>
                            <div class="con-box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
">
                                <p>微信公众平台：<br><?php echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;?>
</p>
                            </div>
                            <div class="con-box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramQr']->value;?>
">
                                <p>微信小程序：<br><?php echo $_smarty_tpl->tpl_vars['cfg_miniProgramName']->value;?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searchkey searchkeys">
                <a href="javascript:;" class="fontcl1">iphonex</a>
                <a href="javascript:;" class="fontcl2">家庭保洁</a>
                <a href="javascript:;" class="fontcl3">店面转让</a>
                <a href="javascript:;" class="fontcl4">上门按摩</a>
                <a href="javascript:;" class="fontcl5">包月花</a>
                <a href="javascript:;" class="fontcl6">美睫美甲</a>
            </div>
        </div>
        <!-- head e -->

        <div class="nav-con n-linear">
            <div class="wrap">
                <ul class="fn-clear">
                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
">首页</a></li>
                    <li><a href="<?php echo getUrlPath(array('service'=>'info','action'=>'list'),$_smarty_tpl);?>
">最新信息</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
" class="nav-m" target="_blank">同城交易<i class="picon-hot1"></i></a></li>
                    <li><a href="<?php echo getUrlPath(array('service'=>'info','template'=>'store_list'),$_smarty_tpl);?>
">商家店铺</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['huangye_channelDomain']->value;?>
" target="_blank">便民黄页</a></li>
                    <li><a href="<?php echo getUrlPath(array('service'=>'house','action'=>'demand'),$_smarty_tpl);?>
?type=1" target="_blank">求购</a></li>
                    <!--<li><a href="javascript:;" class="nav-m" target="_blank">转让<i class="picon-hot2"></i></a></li>-->
                    <!--<li><a href="javascript:;" target="_blank">物品认领</a></li>-->
                </ul>
                <div class="boxRight">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['integral_channelDomain']->value;?>
" target="_blank"><i class="igifs"></i>礼品兑换</a>
                    <a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','temp'=>'qiandao'),$_smarty_tpl);?>
" target="_blank"><i class="iqd"></i>今日签到</a>
                </div>
            </div>
        </div>

    </div>
</div><?php }} ?>
