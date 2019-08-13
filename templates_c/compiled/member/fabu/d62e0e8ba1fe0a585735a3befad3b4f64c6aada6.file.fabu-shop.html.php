<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 17:41:19
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\fabu-shop.html" */ ?>
<?php /*%%SmartyHeaderCode:20374212425d5285bf6c3aa9-66503299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd62e0e8ba1fe0a585735a3befad3b4f64c6aada6' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\fabu-shop.html',
      1 => 1540092514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20374212425d5285bf6c3aa9-66503299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typeid' => 0,
    'do' => 0,
    'id' => 0,
    'langData' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'itemid' => 0,
    'proType' => 0,
    'brandOption' => 0,
    'proItemList' => 0,
    'detail_title' => 0,
    'storeTypeOption' => 0,
    'detail_mprice' => 0,
    'detail_price' => 0,
    'logisticOption' => 0,
    'detail_volume' => 0,
    'detail_weight' => 0,
    'specification' => 0,
    'detail_inventory' => 0,
    'detail_limit' => 0,
    'detail_litpic' => 0,
    'thumbSize' => 0,
    'detail_litpicSource' => 0,
    'detail_pics' => 0,
    'k' => 0,
    'i' => 0,
    'atlasMax' => 0,
    'atlasSize' => 0,
    'cfg_weixinName' => 0,
    'detail_body' => 0,
    'specifiVal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5285bf7850c8_90668511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5285bf7850c8_90668511')) {function content_5d5285bf7850c8_90668511($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'shop'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>

<?php if (($_smarty_tpl->tpl_vars['typeid']->value==0&&$_smarty_tpl->tpl_vars['do']->value!="edit")||$_smarty_tpl->tpl_vars['do']->value=="editype") {?>
<form class="editform" method="post" action="<?php ob_start();
if ($_smarty_tpl->tpl_vars['id']->value!='') {?><?php echo "do=edit";?><?php }
$_tmp2=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'shop','typeid'=>'%typeid%','param'=>$_tmp2),$_smarty_tpl);?>
">
  <input type="hidden" name="typeid" id="typeid" value="<?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
" />
  <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
  <dl class="fn-clear">
    <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][559];?>
：</dt>
    <dd>
      <div class="t-main">
        <s class="cc-nav prev" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][187];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][187];?>
</s>
        <div class="t-list">
          <ol class="t-ol fn-clear" id="tList"></ol>
        </div>
        <s class="cc-nav next" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][188];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][188];?>
</s>
      </div>
      <div class="confrim">
        <strong><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][561];?>
：</strong><span id="cTxt"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][20];?>
</span>
      </div>
      <input class="btn btn-large<?php if ($_smarty_tpl->tpl_vars['typeid']->value!='') {?> btn-primary<?php }?>" type="submit" name="submit" id="btnNext" value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][95];?>
" <?php if ($_smarty_tpl->tpl_vars['typeid']->value=='') {?>disabled<?php }?> />
    </dd>
  </dl>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
  var specifiVal = [], atlasMax = 5;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/selectShopCategory.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
<div class="w-form">
	<form name="fabuForm" id="fabuForm" method="post" action="/include/ajax.php?service=shop&action=<?php if ($_smarty_tpl->tpl_vars['do']->value=="edit") {?>edit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
} else { ?>put<?php }?>" data-url="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'shop','param'=>'state=0'),$_smarty_tpl);?>
">
    <input type="hidden" name="typeid" id="typeid" value="<?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
" />
    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
    <input type="hidden" name="itemid" id="itemid" value="<?php echo $_smarty_tpl->tpl_vars['itemid']->value;?>
" />
		<dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][393];?>
：</dt>
			<dd class="editype">
				<?php echo $_smarty_tpl->tpl_vars['proType']->value;?>
&nbsp;&nbsp;&nbsp;&nbsp;
				【<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['id']->value!=0) {?><?php echo "&id=";?><?php echo (string)$_smarty_tpl->tpl_vars['id']->value;?><?php }
$_tmp4=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'shop','typeid'=>$_tmp3,'param'=>"do=editype".$_tmp4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][562];?>
</a>】
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][563];?>
：</dt>
			<dd>
				<select name="brand" id="brand" class="input-large"><?php echo $_smarty_tpl->tpl_vars['brandOption']->value;?>
</select>
				<span class="tip-inline"></span>
			</dd>
		</dl>
	  <?php if ($_smarty_tpl->tpl_vars['proItemList']->value!='') {?>
	  <div class="graybg" id="proItem">
	    <?php echo $_smarty_tpl->tpl_vars['proItemList']->value;?>

	  </div>
	  <?php }?>
		<dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][547];?>
：</dt>
			<dd>
				<input type="text" name="title" class="inp" id="title" size="60" maxlength="50" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][130];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_title']->value;?>
" />
				<span class="tip-inline"></span>
			</dd>
		</dl>
    <?php if ($_smarty_tpl->tpl_vars['storeTypeOption']->value) {?>
		<dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][488];?>
：</dt>
			<dd>
				<select name="category[]" id="category" multiple style="width: 300px; height: 150px; margin-bottom: 10px;"><?php echo $_smarty_tpl->tpl_vars['storeTypeOption']->value;?>
</select>
				<span class="tip-inline" style="display: inline-block;"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][119];?>
</span>
			</dd>
		</dl>
    <?php }?>
    <dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][527];?>
：</dt>
			<dd>
        <div class="input-append">
					<input id="mprice" name="mprice" type="text" size="8" maxlength="6" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][131];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_mprice']->value;?>
">
					<span class="add-aft"><?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</span>
				</div>
				<span class="tip-inline"></span>
			</dd>
		</dl>
    <dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][564];?>
：</dt>
			<dd>
        <div class="input-append">
					<input id="price" name="price" type="text" size="8" maxlength="6" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][131];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_price']->value;?>
">
					<span class="add-aft"><?php echo echoCurrency(array('type'=>"short"),$_smarty_tpl);?>
</span>
				</div>
				<span class="tip-inline"></span>
			</dd>
		</dl>
		<dl class="fn-clear" data-required="1" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][4][72];?>
">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][452];?>
：</dt>
			<dd>
				<select name="logistic" id="logistic" class="input-large"><?php echo $_smarty_tpl->tpl_vars['logisticOption']->value;?>
</select>
				<span class="tip-inline"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][72];?>
</span>
        <span id="logisticDetail" class="fn-hide" style="padding-top: 10px;"><small></small></span>
			</dd>
		</dl>
    <dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][565];?>
：</dt>
			<dd>
        <div class="input-append">
					<input id="volume" name="volume" type="text" size="8" maxlength="6" value="<?php echo $_smarty_tpl->tpl_vars['detail_volume']->value;?>
">
					<span class="add-aft">m³</span>
				</div>
				<span class="tip-inline"></span>
			</dd>
		</dl>
    <dl class="fn-clear" data-required="1">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][566];?>
：</dt>
			<dd>
        <div class="input-append">
					<input id="weight" name="weight" type="text" size="8" maxlength="6" value="<?php echo $_smarty_tpl->tpl_vars['detail_weight']->value;?>
">
					<span class="add-aft">kg</span>
				</div>
				<span class="tip-inline"></span>
			</dd>
		</dl>
    <?php if ($_smarty_tpl->tpl_vars['specification']->value!='') {?>
    <div class="graybg" id="specification">
      <?php echo $_smarty_tpl->tpl_vars['specification']->value;?>

      <div id="speList" class="fn-hide">
        <dl class="fn-clear">
          <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][189];?>
：</dt>
          <dd>
            <div class="speTab"><table><thead></thead><tbody></tbody></table></div>
            <span class="tip-inline" style="display:inline-block;"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][132];?>
</span>
          </dd>
        </dl>
      </div>
    </div>
    <?php }?>
    <dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][525];?>
：</dt>
			<dd>
        <div class="input-append">
					<input id="inventory" name="inventory" type="text" size="8" maxlength="6" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][133];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_inventory']->value;?>
">
					<span class="add-aft"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][3][1];?>
</span>
				</div>
				<span class="tip-inline"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][133];?>
</span>
			</dd>
		</dl>
    <dl class="fn-clear" data-required="1">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][567];?>
：</dt>
			<dd>
        <div class="input-append">
					<input id="limit" name="limit" type="text" size="8" maxlength="6" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][134];?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail_limit']->value;?>
">
					<span class="add-aft"><?php echo $_smarty_tpl->tpl_vars['langData']->value['shop'][3][1];?>
</span>
				</div>
				<span class="tip-inline"><s></s><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][134];?>
</span>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][19];?>
：</dt>
      <dd class="thumb fn-clear listImgBox">
				<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['detail_litpic']->value!='') {?> fn-hide<?php }?>" id="filePicker1" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<?php if ($_smarty_tpl->tpl_vars['detail_litpic']->value!='') {?>
				<ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['detail_litpic']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['detail_litpic']->value),'type'=>"small"),$_smarty_tpl);?>
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
		<dl class="fn-clear">
			<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][2];?>
：</dt>
      <dd class="listImgBox fn-hide">
				<div class="list-holder">
					<ul id="listSection2" class="fn-clear listSection fn-hide"<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?> style="display: block;"<?php }?>>
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail_pics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
						<li class="fn-clear" id="WU_FILE_1_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
							<span class="li-move" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][42];?>
">↕</span>
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
" data-url="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['i']->value['path']),'type'=>"small"),$_smarty_tpl);?>
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
						<div class="uploadinp filePicker" id="filePicker2" data-type="album" data-count="<?php echo $_smarty_tpl->tpl_vars['atlasMax']->value;?>
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
</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][10],'1',($_smarty_tpl->tpl_vars['atlasSize']->value/1024)),'2',$_smarty_tpl->tpl_vars['atlasMax']->value);?>
 <span class="fileerror"></span></p>
					</div>
				</div>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt><span>*</span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][335];?>
：</dt>
			<dd>
				<?php echo '<script'; ?>
 id="body" name="body" type="text/plain" style="width:90%;height:500px"><?php echo $_smarty_tpl->tpl_vars['detail_body']->value;?>
<?php echo '</script'; ?>
>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>&nbsp;</dt>
			<dd><button class="submit" id="submit"><?php if ($_smarty_tpl->tpl_vars['id']->value==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][19];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][122];
}?></button></dd>
		</dl>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  var specifiVal = <?php echo $_smarty_tpl->tpl_vars['specifiVal']->value;?>
, atlasMax = 5;
<?php echo '</script'; ?>
>
<?php }?>

<?php } else { ?>
<div class="list" style="padding: 200px 0; text-align: center; font-size: 14px; color: red;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][403];?>
</div>
<?php }?>
<?php }} ?>
