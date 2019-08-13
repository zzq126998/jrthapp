<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:46
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\fabu.html" */ ?>
<?php /*%%SmartyHeaderCode:14168765815d511ff6edcd84-61966568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d28846b2fe08eb684388eedee0baed3d6c0bf5b' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\fabu.html',
      1 => 1561715346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14168765815d511ff6edcd84-61966568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'do' => 0,
    'langData' => 0,
    'detail_title' => 0,
    'cfg_webname' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'module' => 0,
    'cfg_hideUrl' => 0,
    'state' => 0,
    'type' => 0,
    'typeid' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'atlasSize' => 0,
    'atlasType' => 0,
    'atlasMax' => 0,
    'id' => 0,
    'audioType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511ff7015a82_04806755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511ff7015a82_04806755')) {function content_5d511ff7015a82_04806755($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php if ($_smarty_tpl->tpl_vars['do']->value=="edit") {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][142];?>
 - <?php echo $_smarty_tpl->tpl_vars['detail_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][143];
}?> - <?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/fabu.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/fabu-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/fabu-pay.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = cfg_staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';

	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");

	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;

	var modelType = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
', typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
;
	var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = '<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
', atlasSize = <?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
, atlasType = '<?php echo $_smarty_tpl->tpl_vars['atlasType']->value;?>
', atlasMax = <?php echo $_smarty_tpl->tpl_vars['atlasMax']->value;?>
;
	var id = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
<?php echo '</script'; ?>
>
</head>

<body>
<?php if ($_smarty_tpl->tpl_vars['do']->value=="edit") {?>
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][142], null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][143], null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
	<div class="container fn-clear">
		<?php echo $_smarty_tpl->getSubTemplate ("fabu-".((string)$_smarty_tpl->tpl_vars['module']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("fabu-pay.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<dl class="fn-clear fn-hide">
  <dt>音频：</dt>
  <dd class="thumb fn-clear listImgBox">
    <div class="uploadinp filePicker thumbtn" id="filePicker_audio" data-type-real="audio" data-type="filenail" data-mime="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['audioType']->value,";",",");?>
" data-accept="<?php echo $_smarty_tpl->tpl_vars['audioType']->value;?>
" data-count="1" data-size="" data-imglist=""><div></div><span></span></div>
    <ul id="listSection_audio" class="listSection thumblist fn-clear"></ul>
    <input type="hidden" name="" value="" class="imglist-hidden">
  </dd>
</dl>


<?php echo '<script'; ?>
 type='text/javascript' src='/include/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/include/ueditor/ueditor.all.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/include/ueditor/addCustomizeButton.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['module']->value!='live') {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu-pay.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['type']->value!='') {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php if ($_smarty_tpl->tpl_vars['type']->value=="qzu"||$_smarty_tpl->tpl_vars['type']->value=="qgou") {?>demand<?php } else {
echo $_smarty_tpl->tpl_vars['type']->value;
}?>.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
><?php }?>
</body>
</html>
<?php }} ?>
