<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 16:13:51
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\shop\132\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:12323457155d52713fd77134-99734077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd707852cbe4c3b6adc019152d514e5ef4bce64ca' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\shop\\132\\bottom.html',
      1 => 1555746482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12323457155d52713fd77134-99734077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'langData' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52713fd8a9b1_13554507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52713fd8a9b1_13554507')) {function content_5d52713fd8a9b1_13554507($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><div class="ensure wrap">
  <ul class="fn-clear">
    <li class="fn-clear">
      <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon_01.png" alt=""></div>
      <h2>官方自营</h2>
      <p>商城全场商品均为自营</p>
    </li>
    <li class="fn-clear">
      <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon_02.png" alt=""></div>
      <h2>正品承诺</h2>
      <p>厂家直供，保证质量</p>
    </li>
    <li class="fn-clear">
      <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon_03.png" alt=""></div>
      <h2>极速物流</h2>
      <p>顺丰速运，次日即可送达</p>
    </li>
    <li class="fn-clear">
      <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon_04.png" alt=""></div>
      <h2>全国联保</h2>
      <p>国税发票，质保无忧</p>
    </li>
    <li class="fn-clear">
      <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon_05.png" alt=""></div>
      <h2>门店保障</h2>
      <p>50家实体门店遍布全国</p>
    </li>
  </ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../../siteConfig/public_foot_v3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'shop','theme'=>'gray'), 0);?>


<div class="floatnav">
  <div class="sc"><a target="_blank" href="<?php echo getUrlPath(array('service'=>"member",'type'=>"user",'template'=>"collect-shop"),$_smarty_tpl);?>
"></a><div class="scdex">我的收藏</div></div>


  <div class="code">
    <i></i>
    <p>手机购物</p>
  </div>
  <div class="qrcode" id="qrcode">
      <s></s>
      <p><a href="<?php echo getUrlPath(array('service'=>"siteConfig",'template'=>"mobile"),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" width="150" height="150" /></a></p>
  </div>

<div class="gotop">
  <a href="#top"><i></i></a>
</div>

</div>


<div class="topcart">
  <a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'cart'),$_smarty_tpl);?>
" class="cart-btn"><span class="icon"></span><i>0</i>购物车
    <!--<s><em></em></s>-->
  </a>
  <div class="cart-con">
    <!--<div class="spacer"></div>-->
    <p class="empty"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][64];?>
</p>
    <div class="cartlist"><ul></ul><div class="cartft fn-clear"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][689],'1','<em></em>');?>
 <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][664];?>
：<span class="pric"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
<strong>0.00</strong></span> <small>(<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][0][11];?>
)</small><a href="<?php echo getUrlPath(array('service'=>'shop','template'=>'cart'),$_smarty_tpl);?>
" class="cartbtn"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][65];?>
</a></div></div>
  </div>
</div>
<!--<div class="btntop">-->
  <!--<a href="javascript:;" class="top" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][0];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][5][0];?>
</a>-->
  <!--<a href="javascript:;" class="close" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][15];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][15];?>
</a>-->
<!--</div>-->

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.scroll.loading.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
><?php }} ?>
