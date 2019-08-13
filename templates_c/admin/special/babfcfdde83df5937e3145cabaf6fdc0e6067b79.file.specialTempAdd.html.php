<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:15:11
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\special\specialTempAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:9217652875d5103ef283dc3-22069747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'babfcfdde83df5937e3145cabaf6fdc0e6067b79' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\special\\specialTempAdd.html',
      1 => 1561025553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9217652875d5103ef283dc3-22069747',
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
    'typeid' => 0,
    'typeListArr' => 0,
    'adminPath' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'title' => 0,
    'litpic' => 0,
    'cfg_attachment' => 0,
    'html' => 0,
    'weight' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5103ef2d9ce2_51571178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5103ef2d9ce2_51571178')) {function content_5d5103ef2d9ce2_51571178($_smarty_tpl) {?><!DOCTYPE html>
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
",
	typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
, typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
,
	adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
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
    <dt><label for="typeid">模板分类：</label></dt>
    <dd>
      <span id="typeList">
        <select name="typeid" id="typeid" class="input-large"></select>
      </span>
      <span class="input-tips"><s></s>请选择模板分类</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="title">模板名称：</label></dt>
    <dd>
      <input class="input-xlarge" type="text" name="title" id="title" data-regex=".{1,60}" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
      <span class="input-tips"><s></s>请输入模板名称</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="sitelogo">缩略图：</label></dt>
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
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="html">模板内容：</label></dt>
    <dd><textarea name="html" id="html" class="input-xxlarge" rows="10" placeholder="请输入模板内容，JSON格式"><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</textarea></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="weight">排序：</label></dt>
    <dd>
      <input class="input-mini" type="number" name="weight" id="weight" min="0" data-regex="[1-9]\d*" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
      <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>
    </dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button></dd>
  </dl>
</form>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
