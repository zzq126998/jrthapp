<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:47
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\fabu-pay.html" */ ?>
<?php /*%%SmartyHeaderCode:5350499015d511ff744ddf9-47561696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2b228ddf2fc07a1ea93411d0ac8642c87d978fe' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\fabu-pay.html',
      1 => 1553911732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5350499015d511ff744ddf9-47561696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
    'langData' => 0,
    'module' => 0,
    'cfg_fabuAmount' => 0,
    'cfg_staticPath' => 0,
    '_bindex' => 0,
    'payment' => 0,
    'cfg_basehost' => 0,
    'type' => 0,
    'paytype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511ff7469386_33879403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511ff7469386_33879403')) {function content_5d511ff7469386_33879403($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
  var totalBalance = <?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['userinfo']->value['money']);?>
;
<?php echo '</script'; ?>
>

<div class="mask"></div>

<div class="fabuPay">
	<div class="payTop">
		<div class="payHeader fn-clear">
			<p class="payNotice"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][813];?>
</p><a href="javascript:;" class="payClose"></a>
		</div>
		<div class="payTxt">
			<p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][812];?>
</p>
			<p><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <em class="payPrice"><?php echo $_smarty_tpl->tpl_vars['cfg_fabuAmount']->value[$_smarty_tpl->tpl_vars['module']->value];?>
</em>／<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][49];?>
</p>
			<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'upgrade'),$_smarty_tpl);?>
" class="payBtn" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][492];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][492];?>
</a>
		</div>
	</div>
	<div class="payBottom">
    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['money']>0) {?>
		<dl class="fabu_dl fn-clear yue">
			<dt class="yue-btn active"><i class="radio"><s></s></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][386];?>
 <em class="gray">( <?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
 )</em></dt>
			<dd>-<?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <em class="reduce-yue">0.00</em></dd>
		</dl>
		<dl class="fabu_dl fn-clear">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][316];?>
</dt>
			<dd>&nbsp; <?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <em class="pay-total">0.00</em></dd>
		</dl>
	  <?php }?>
    <div class="paytypeObj fn-hide">
	    <!-- <p class="choose-tit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][203];?>
</p> -->
			<ul class="payTab fn-clear">
				<li class="curr"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][29][126];?>
</li>
				<li><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][107];?>
</li>
			</ul>
			<div class="qrpay">
				<dl class="fn-clear">
					<dt><img src="" class="qrimg" /><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_top.png" class="pay_top" /><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_bottom.png" class="pay_bottom" /></dt>
					<dd><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_alipay.png" /><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_wx.png" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][29][127];?>
</dd>
				</dt>
			</div>
	    <ul class="payway fn-hide fn-clear">
				<?php $_smarty_tpl->tpl_vars['paytype'] = new Smarty_variable('', null, 0);?>
	      <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"payment",'return'=>"payment")); $_block_repeat=true; echo siteConfig(array('action'=>"payment",'return'=>"payment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['payment']==1) {?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
<?php $_tmp18=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['paytype'] = new Smarty_variable($_tmp18, null, 0);?>
				<?php }?>
	      <li<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['payment']==1) {?> class="active"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
"><a href="javascript:;" class="<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/templates/member/images/<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_name'];?>
</a></li>
	      <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"payment",'return'=>"payment"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	    </ul>
		</div>
		<a href="javascript:;" class="paySubmit" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][327];?>
</a>
	</div>
</div>

<form action="/include/ajax.php" method="post" id="payform">
	<input type="hidden" name="service" id="service" value="member">
	<input type="hidden" name="action" id="action" value="fabuPay">
	<input type="hidden" name="module" id="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
	<input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
	<input type="hidden" name="paytype" id="paytype" value="<?php echo $_smarty_tpl->tpl_vars['paytype']->value;?>
">
	<input type="hidden" name="aid" id="aid" value="" />
	<input type="hidden" name="amount" id="amount" value="" />
	<input type="hidden" name="useBalance" id="useBalance" value="" />
	<input type="hidden" name="tourl" id="tourl" value="" />
</form>
<?php }} ?>
