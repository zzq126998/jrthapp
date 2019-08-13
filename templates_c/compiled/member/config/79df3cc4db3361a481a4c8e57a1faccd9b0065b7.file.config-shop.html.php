<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 17:54:47
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\config-shop.html" */ ?>
<?php /*%%SmartyHeaderCode:20299891765d5288e7ddac06-01031744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79df3cc4db3361a481a4c8e57a1faccd9b0065b7' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\config-shop.html',
      1 => 1553395086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20299891765d5288e7ddac06-01031744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumbSize' => 0,
    'thumbType' => 0,
    'storeState' => 0,
    'detail_state' => 0,
    'langData' => 0,
    'detail_industry' => 0,
    'type' => 0,
    'detail_industryid' => 0,
    'detail_addrid' => 0,
    'detail_cityid' => 0,
    'detail_company' => 0,
    'detail_title' => 0,
    'detail_referred' => 0,
    'detail_address' => 0,
    'detail_project' => 0,
    'detail_logo' => 0,
    'detail_logoSource' => 0,
    'detail_people' => 0,
    'detail_contact' => 0,
    'detail_tel' => 0,
    'detail_qq' => 0,
    'detail_wechatcode' => 0,
    'detail_wechatqr' => 0,
    'detail_wechatqrSource' => 0,
    'detail_pics' => 0,
    'k' => 0,
    'i' => 0,
    'atlasMax' => 0,
    'atlasSize' => 0,
    'cfg_weixinName' => 0,
    'detail_note' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5288e7e28e37_51944637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5288e7e28e37_51944637')) {function content_5d5288e7e28e37_51944637($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'shop'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5) {?>
<style>
	#subway dd {max-height: 300px; overflow-x: hidden; overflow-y: auto;}
	.li-info {display: none!important;}
	.list-holder li {width: 115px !important;height: 86px;}
	.list-holder li .li-thumb {margin: -5px 0 0 0 !important;}
	.list-holder li a.li-rm {margin: -17px -14px 0 0 !important;}
</style>
<?php echo '<script'; ?>
 type="text/javascript">
	var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = '<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
';
	var uploadType = "logo", atlasMax= "1";
	var service = 'shop';
<?php echo '</script'; ?>
>
<style>.state0 {padding: 0 0 20px 115px; color: #f00;}</style>
<div class="w-form">
	<?php if ($_smarty_tpl->tpl_vars['storeState']->value==1) {?>
		<?php if ($_smarty_tpl->tpl_vars['detail_state']->value==0) {?>
		<p class="state0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][25];?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['detail_state']->value==2) {?>
		<p class="state0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][26];?>
</p>
		<?php }?>
	<?php }?>
	<form name="fabuForm" id="fabuForm" method="post" action="/include/ajax.php?service=shop&action=storeConfig">
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][552];?>
：</dt>
			<dd id="selIndustry">
				<div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][41];?>
">
					<button type="button" class="sel"><?php if ($_smarty_tpl->tpl_vars['detail_industry']->value!='') {
echo $_smarty_tpl->tpl_vars['detail_industry']->value;
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?><span class="caret"></span></button>
					<ul class="sel-menu">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo shop(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li><a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<input type="hidden" name="industry" id="industry" value="<?php echo $_smarty_tpl->tpl_vars['detail_industryid']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][27];?>
：</dt>
			<dd id="selAddr">
				<div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][68];?>
">
					<div class="addrBtn" data-field="addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['detail_addrid']->value,'split'=>' '),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['detail_addrid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['detail_addrid']->value) {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['detail_addrid']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?></div>
				</div>
				<input type="hidden" name="addrid" id="addrid" value="<?php echo $_smarty_tpl->tpl_vars['detail_addrid']->value;?>
" />
				<input type="hidden" name="cityid" id="cityid" value="<?php echo $_smarty_tpl->tpl_vars['detail_cityid']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][354];?>
：</dt>
			<dd>
				<input type="text" name="company" class="inp" id="company" size="35" maxlength="60" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][42];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_company']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][174];?>
：</dt>
			<dd>
				<input type="text" name="title" class="inp" id="title" size="35" maxlength="60" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][21][128];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_title']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][553];?>
：</dt>
			<dd>
				<input type="text" name="referred" class="inp" id="referred" size="20" maxlength="20" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][43];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_referred']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][355];?>
：</dt>
			<dd>
				<input type="text" name="address" class="inp" id="address" size="35" maxlength="60" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][44];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_address']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][554];?>
：</dt>
			<dd>
				<input type="text" name="project" class="inp" id="project" size="70" maxlength="100" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][27];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_project']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][175];?>
：</dt>
			<dd class="thumb fn-clear listImgBox">
				<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_logo']->value!='') {?> fn-hide<?php }?>" id="filePicker1" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<?php if ($_smarty_tpl->tpl_vars['detail_logo']->value!='') {?>
				<ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['detail_logo']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['detail_logo']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_logoSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
				<?php } else { ?>
				<ul id="listSection1" class="listSection thumblist fn-clear"></ul>
				<?php }?>
				<input type="hidden" name="logo" value="<?php echo $_smarty_tpl->tpl_vars['detail_logoSource']->value;?>
" class="imglist-hidden" id="litpic">
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][642];?>
：</dt>
			<dd>
				<input type="text" name="people" class="inp" id="people" size="25" maxlength="20" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][46];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_people']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][56];?>
：</dt>
			<dd>
				<input type="text" name="contact" class="inp" id="contact" size="25" maxlength="20" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][433];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_contact']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][298];?>
：</dt>
			<dd>
				<input type="text" name="telphone" class="inp" id="telphone" size="25" maxlength="20" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][47];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_tel']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][30];?>
：</dt>
			<dd>
				<input type="text" name="qq" class="inp" id="qq" size="25" maxlength="20" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][11];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_qq']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt>微信号：</dt>
			<dd>
				<input type="text" name="wechatcode" class="inp" id="wechatcode" size="25" maxlength="20" data-title="请输入微信号" value="<?php echo $_smarty_tpl->tpl_vars['detail_wechatcode']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>微信二维码：</dt>
			<dd class="thumb fn-clear listImgBox">
				<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_wechatqr']->value!='') {?> fn-hide<?php }?>" id="filePicker2" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<?php if ($_smarty_tpl->tpl_vars['detail_wechatqr']->value!='') {?>
				<ul id="listSection2" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_1_1"><a href='<?php echo $_smarty_tpl->tpl_vars['detail_wechatqr']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['detail_wechatqr']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_wechatqrSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
				<?php } else { ?>
				<ul id="listSection2" class="listSection thumblist fn-clear"></ul>
				<?php }?>
				<input type="hidden" name="wechatqr" value="<?php echo $_smarty_tpl->tpl_vars['detail_wechatqrSource']->value;?>
" class="imglist-hidden" id="litpic">
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][2];?>
：</dt>
			<dd class="listImgBox fn-hide">
				<div class="list-holder">
					<ul id="listSection3" class="fn-clear listSection fn-hide"<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?> style="display: block;"<?php }?>>
					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail_pics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
					<li class="fn-clear" id="WU_FILE_1_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
						<a class="li-rm" href="javascript:;">×</a>
						<div class="li-thumb" style="display: block;">
							<div class="r-progress"><s></s></div>
							<span class="ibtn">
									<a href="javascript:;" class="Lrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][43];?>
"></a>
									<a href="javascript:;" class="Rrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][44];?>
"></a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['path'];?>
" target="_blank" class="enlarge" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][45];?>
"></a>
								</span>
							<span class="ibg"></span>
							<img data-val="<?php echo $_smarty_tpl->tpl_vars['i']->value['pathSource'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['i']->value['path'];?>
" src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['i']->value['path']),'type'=>"small"),$_smarty_tpl);?>
" />
						</div>
					</li>
					<?php } ?>
					</ul>
					<input type="hidden" name="imglist" value="" class="imglist-hidden">
				</div>
				<div class="btn-section fn-clear">
					<div class="wxUploadObj fn-clear">
						<div class="uploadinp filePicker" id="filePicker3" data-type="pics" data-count="<?php echo $_smarty_tpl->tpl_vars['atlasMax']->value;?>
" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist=""><div id="flasHolder"></div><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][168];?>
</span></div>
						<span class="upload-split fn-hide">或</span>
						<dl class="wxUpload fn-hide fn-clear">
							<dt><img id="wxUploadImg" /></dt>
							<dd>使用<em class="wx">微信</em>扫描左侧二维码<br />关注<?php echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;?>
公众号后<br />将图片<em class="fs">发送</em>给公众号即可传图</dd>
						</dl>
					</div>
					<div class="upload-tip">
						<p><a href="javascript:;" class="fn-hide deleteAllAtlas"<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?> style="display: inline-block;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][79];?>
</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][10],'1',($_smarty_tpl->tpl_vars['atlasSize']->value/1024)),'2','10');?>
 <span class="fileerror"></span></p>
					</div>
				</div>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][36];?>
：</dt>
			<dd>
				<?php echo '<script'; ?>
 id="body" name="body" type="text/plain" style="width:90%;height:500px"><?php echo $_smarty_tpl->tpl_vars['detail_note']->value;?>
<?php echo '</script'; ?>
>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>&nbsp;</dt>
			<dd><button class="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][63];?>
</button></dd>
		</dl>
	</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicAddr.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>

<?php } else { ?>
<div class="list" style="padding: 200px 0; text-align: center; font-size: 14px; color: red;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][403];?>
</div>
<?php }?>
<?php }} ?>
