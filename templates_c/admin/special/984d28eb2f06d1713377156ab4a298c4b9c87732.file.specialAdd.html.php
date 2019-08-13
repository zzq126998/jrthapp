<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:15:29
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\special\specialAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:11602800115d510401a6cab3-69448836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984d28eb2f06d1713377156ab4a298c4b9c87732' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\special\\specialAdd.html',
      1 => 1561028466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11602800115d510401a6cab3-69448836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pagetitle' => 0,
    'cssFile' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'adminPath' => 0,
    'typeid' => 0,
    'typeListArr' => 0,
    'basehost' => 0,
    'subdomain' => 0,
    'cityid' => 0,
    'cityList' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'title' => 0,
    'domaintype' => 0,
    'domaintypeChecked' => 0,
    'domaintypeNames' => 0,
    'domain' => 0,
    'customSubDomain' => 0,
    'domainexp' => 0,
    'domaintip' => 0,
    'litpic' => 0,
    'cfg_attachment' => 0,
    'note' => 0,
    'head' => 0,
    'footer' => 0,
    'weight' => 0,
    'stateopt' => 0,
    'state' => 0,
    'statenames' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510401ab6e61_36323430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510401ab6e61_36323430')) {function content_5d510401ab6e61_36323430($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = "<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
",  //缩略图配置
	modelType = "special", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
",
	typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
, typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
,
	basehost = '<?php echo $_smarty_tpl->tpl_vars['basehost']->value;?>
', subdomain = '<?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
';
var cityid = <?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
, cityList = <?php echo $_smarty_tpl->tpl_vars['cityList']->value;?>
;
<?php echo '</script'; ?>
>
</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="dopost" id="dopost" value="<?php echo $_smarty_tpl->tpl_vars['dopost']->value;?>
" />
  <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <dl class="clearfix">
    <dt><label for="module">城市：</label></dt>
    <dd style="overflow: visible; padding-left: 140px;">
      <select class="chosen-select" id="cityid" name="cityid" style="width: auto; min-width: 150px;"></select>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="title">专题名称：</label></dt>
    <dd>
      <input class="input-xlarge" type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" maxlength="60" data-regex=".{3,60}" />
      <span class="input-tips"><s></s>请输入专题名称，3-60位</span>
    </dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label>访问方式：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"domaintype",'values'=>$_smarty_tpl->tpl_vars['domaintype']->value,'checked'=>$_smarty_tpl->tpl_vars['domaintypeChecked']->value,'output'=>$_smarty_tpl->tpl_vars['domaintypeNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <?php if ($_smarty_tpl->tpl_vars['domaintypeChecked']->value==0) {?>
  <div id="domainObj" class="hide" style="background:#f5f5f5; padding:5px 0;">
  <?php } else { ?>
  <div id="domainObj" class="hide" style="background:#f5f5f5; padding:5px 0;">
  <?php }?>
    <dl class="clearfix">
      <dt><label for="domain">绑定域名：</label></dt>
      <dd>
        <div class="input-prepend input-append">
          <span class="add-on">http://</span>
          <?php if ($_smarty_tpl->tpl_vars['domaintypeChecked']->value==1) {?>
          <input class="input-large" type="text" name="domain" id="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
          <span class="add-on" style="display:none;">
          <?php } else { ?>
          <input class="input-mini" type="text" name="domain" id="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
          <span class="add-on">
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['customSubDomain']->value==0) {?>
          .<?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>

          <?php } else { ?>
          .<?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['basehost']->value;?>

          <?php }?></span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="domainexp">过期时间：</label></dt>
      <dd><input class="input-medium" id="domainexp" name="domainexp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['domainexp']->value;?>
" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="domaintip">过期提示：</label></dt>
      <dd>
        <textarea name="domaintip" id="domaintip" class="input-xxlarge" rows="5"><?php echo $_smarty_tpl->tpl_vars['domaintip']->value;?>
</textarea>
      </dd>
    </dl>
  </div>
  <dl class="clearfix">
    <dt>专题分类：</dt>
    <dd>
      <span id="typeList">
        <select name="typeid" id="typeid" class="input-large"></select>
      </span>
      <span class="input-tips"><s></s>请选择专题分类</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>缩略图：</dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?> hide<?php }?>" id="filePicker1" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?>
			<ul id="listSection1" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['litpic']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['litpic']->value;?>
&type=small" data-val="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection1" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
" class="imglist-hidden" id="litpic">
		</dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="note">专题摘要：</label></dt>
    <dd><textarea name="note" id="note" class="input-xxlarge" rows="4"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</textarea></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="head">头部代码：</label></dt>
    <dd>
      <textarea name="head" id="head" class="input-xxlarge" rows="4"><?php echo $_smarty_tpl->tpl_vars['head']->value;?>
</textarea>
      <span class="input-tips" style="display:inline-block;"><s></s>例如：Google Webmaster Tools验证元标记</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="footer">底部代码：</label></dt>
    <dd>
      <textarea name="footer" id="footer" class="input-xxlarge" rows="4"><?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
</textarea>
      <span class="input-tips" style="display:inline-block;"><s></s>例如：Google Analytics追踪代码，百度、CNZZ等统计代码</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="weight">排序：</label></dt>
    <dd>
      <input class="input-mini" type="number" name="weight" id="weight" min="0" data-regex="[1-9]\d*" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
      <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="state">显示状态：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"state",'values'=>$_smarty_tpl->tpl_vars['stateopt']->value,'checked'=>$_smarty_tpl->tpl_vars['state']->value,'output'=>$_smarty_tpl->tpl_vars['statenames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><input class="btn btn-large btn-success" type="submit" name="submit" id="btnSubmit" value="确认提交" /></dd>
  </dl>
</form>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
