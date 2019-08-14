<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:25:37
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\config-car.html" */ ?>
<?php /*%%SmartyHeaderCode:20906698085d53631160e996-04565294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b40dd3207a86469fcb5a6c72b0eb05a5885f846' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\config-car.html',
      1 => 1559282487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20906698085d53631160e996-04565294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'storeState' => 0,
    'detail_state' => 0,
    'langData' => 0,
    'detail_title' => 0,
    'detail_addrid' => 0,
    'addrid' => 0,
    'cityid' => 0,
    'detail_address' => 0,
    'detail_tel' => 0,
    'detail_litpic' => 0,
    'detail_litpicSource' => 0,
    'detail_openStart' => 0,
    'detail_openEnd' => 0,
    'detail_license' => 0,
    'detail_licenseSource' => 0,
    'detail_pics' => 0,
    'k' => 0,
    'i' => 0,
    'pic' => 0,
    'storeatlasMax' => 0,
    'atlasSize' => 0,
    'cfg_weixinName' => 0,
    'carTag_state' => 0,
    'tag' => 0,
    'detail_note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d53631171e1d5_88453694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d53631171e1d5_88453694')) {function content_5d53631171e1d5_88453694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'car'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/jquery.chosen.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'/>
<?php echo '<script'; ?>
 type="text/javascript">
	var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = '<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
';
	var uploadType = "logo", atlasMax= "1";
<?php echo '</script'; ?>
>
<style>
.reg {text-align: center; padding-top: 150px;}
.reg a {font-weight: 700; color: blue; text-decoration: underline;}

.state0 {padding: 0 0 20px 115px; color: #f00;}.chzn-container {vertical-align: middle;}
.switchwrap {}
.switch {position: relative;float: left;width:50px;height:28px;border:1px solid #a0a0a0;border-radius:14px;margin-right:5px;transition:all .2s;}
.switch span {position: absolute;display: block;width:24px;height:24px;background: #a0a0a0;border-radius:50%;left:2px;top:2px;transition:all .2s;}
.switch_text {float: left;line-height: 28px;color: #333;}
.switch.open {border-color: #f74c25;}
.switch.open span {background: #f74c25;left:24px;}
.closeinfo p {color:#f00;}
.switchinfo {margin-top: 8px;}
.switchinfo p {font-size: 14px;color: #a0a0a0;line-height: 26px;}
</style>
<div class="w-form">

	<?php if ($_smarty_tpl->tpl_vars['storeState']->value==1) {?>
		<?php if ($_smarty_tpl->tpl_vars['detail_state']->value==0) {?>
		<p class="state0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][16];?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['detail_state']->value==2) {?>
		<p class="state0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][17];?>
</p>
		<?php }?>
	<?php }?>
	<form name="fabuForm" id="fabuForm" method="post" action="/include/ajax.php?service=car&action=storeConfig">
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][354];?>
：</dt>
			<dd>
				<input type="text" name="title" class="inp" id="title" size="35" maxlength="60" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][42];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_title']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][27];?>
：</dt>
      <dd id="selAddr">
          <div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][68];?>
">
              <div class="city-title addrBtn" data-field="addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['detail_addrid']->value,'split'=>' '),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['detail_addrid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['detail_addrid']->value!='') {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['detail_addrid']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?></div>
          </div>
          <input type="hidden" name="addrid" id="addrid" value="<?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
" />
          <input type="hidden" name="cityid" id="cityid" value="<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
" />
      </dd>
    </dl>

    <dl class="fn-clear">
      <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][35];?>
：</dt>
      <dd>
        <input type="text" name="address" class="inp" id="address" size="50" maxlength="60" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][69];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_address']->value;?>
" />
        
      </dd>
    </dl>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][56];?>
：</dt>
			<dd>
				<input type="text" name="tel" class="inp" id="tel" size="25" maxlength="20" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][433];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_tel']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][31];?>
：</dt>
			<dd class="thumb fn-clear listImgBox">
				<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_litpic']->value!='') {?> fn-hide<?php }?>" id="filePicker1" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<?php if ($_smarty_tpl->tpl_vars['detail_litpic']->value!='') {?>
				<ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['detail_litpic']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['detail_litpic']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_litpicSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
				<?php } else { ?>
				<ul id="listSection1" class="listSection thumblist fn-clear"></ul>
				<?php }?>
				<input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['detail_litpicSource']->value;?>
" class="imglist-hidden" id="litpic">
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][15];?>
：</dt>
			<dd>
				<div class="input-append input-prepend">
					<input type="text" name="openStart" class="inp" id="openStart" size="5" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['detail_openStart']->value;?>
" />
					<span class="add-aft"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][51];?>
</span>
					<input type="text" name="openEnd" class="inp" id="openEnd" size="5" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['detail_openEnd']->value;?>
" />
				</div>
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][1];?>
：</dt>
			<dd class="thumb fn-clear listImgBox">
				<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_license']->value!='') {?> fn-hide<?php }?>" id="filePicker2" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<?php if ($_smarty_tpl->tpl_vars['detail_license']->value!='') {?>
				<ul id="listSection2" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_2_1"><a href='<?php echo $_smarty_tpl->tpl_vars['detail_license']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['detail_license']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['detail_licenseSource']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
				<?php } else { ?>
				<ul id="listSection2" class="listSection thumblist fn-clear"></ul>
				<?php }?>
				<input type="hidden" name="license" value="<?php echo $_smarty_tpl->tpl_vars['detail_licenseSource']->value;?>
" class="imglist-hidden" id="license">
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][186];?>
：</dt>
			<dd class="listImgBox fn-hide">
					<div class="list-holder">
							<ul id="listSection3" class="fn-clear listSection fn-hide"<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?> style="display: block;"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail_pics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>
							<li class="fn-clear" id="WU_FILE_3_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
									<a class="li-rm" href="javascript:;">×</a>
									<div class="li-thumb" style="display: block;">
											<div class="r-progress"><s></s></div>
											<span class="ibtn">
																			<a href="javascript:;" class="Lrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][43];?>
"></a>
																			<a href="javascript:;" class="Rrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][44];?>
"></a>
																			<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['pic'];?>
" target="_blank" class="enlarge" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][45];?>
"></a>
																	</span>
											<span class="ibg"></span>
											<img data-val="<?php echo $_smarty_tpl->tpl_vars['pic']->value['picSource'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['pic']->value['picSource'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pic']->value['pic'];?>
" />
									</div>
							</li>
							<?php } ?>
							<?php }?>
							</ul>
							<input type="hidden" name="pics" value="" class="imglist-hidden">
					</div>
					<div class="btn-section fn-clear">
							<div class="wxUploadObj fn-clear">
									<div class="uploadinp filePicker" id="filePicker3" data-type="album" data-count="<?php echo $_smarty_tpl->tpl_vars['storeatlasMax']->value;?>
" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist=""><div id="flasHolder"></div><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][168];?>
</span></div>
									<span class="upload-split fn-hide"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][0];?>
</span>
									<dl class="wxUpload fn-hide fn-clear">
											<dt><img id="wxUploadImg" /></dt>
											<dd><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][362];?>
<em class="wx"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][139];?>
</em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][140];?>
<br /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][846];
echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][141];?>
<br /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][142];?>
<em class="fs"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][139];?>
</em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][143];?>
</dd>
									</dl>
							</div>
							<div class="upload-tip">
									<p><a href="javascript:;" class="fn-hide deleteAllAtlas"<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?> style="display: inline-block;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][79];?>
</a>
										&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][10],'1',($_smarty_tpl->tpl_vars['atlasSize']->value/1024)),'2','5');?>
 <span class="fileerror"></span></p>
							</div>
					</div>
			</dd>
		</dl>

		<dl class="fn-clear">
				<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][2];?>
：</dt>
				<dd>
						<div class="checkbox">
								<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carTag_state']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
								<label><input type="checkbox" name="tag[]" value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['tag']->value['active']) {?> checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</label>
								<?php } ?>
						</div>
				</dd>
		</dl>

		<dl class="fn-clear">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][576];?>
：</dt>
			<dd>
				<?php echo '<script'; ?>
 id="note" name="note" type="text/plain" style="width:90%;height:500px"><?php echo $_smarty_tpl->tpl_vars['detail_note']->value;?>
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
js/ui/calendar/WdatePicker.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicAddr.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/chosen.jquery.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php } else { ?>
<div class="list" style="padding: 200px 0; text-align: center; font-size: 14px; color: red;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][403];?>
</div>
<?php }?>
<?php }} ?>
