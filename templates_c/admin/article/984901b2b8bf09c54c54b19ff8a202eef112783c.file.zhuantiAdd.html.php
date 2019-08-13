<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:21:14
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\article\zhuantiAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:16160386105d521e9ab059c8-52584966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984901b2b8bf09c54c54b19ff8a202eef112783c' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\article\\zhuantiAdd.html',
      1 => 1561768326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16160386105d521e9ab059c8-52584966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pagetitle' => 0,
    'cssFile' => 0,
    'atlasSize' => 0,
    'atlasType' => 0,
    'adminPath' => 0,
    'action' => 0,
    'dopost' => 0,
    'pid' => 0,
    'id' => 0,
    'token' => 0,
    'parentid' => 0,
    'typename' => 0,
    'parname' => 0,
    'typeid' => 0,
    'litpic' => 0,
    'thumbSize' => 0,
    'cfg_attachment' => 0,
    'banner_large' => 0,
    'banner_small' => 0,
    'description' => 0,
    'weight' => 0,
    'state' => 0,
    'stateChecked' => 0,
    'stateNames' => 0,
    'flag_rList' => 0,
    'flag_r' => 0,
    'flag_hList' => 0,
    'flag_h' => 0,
    'typeListArr' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d521e9abf5e02_24400584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d521e9abf5e02_24400584')) {function content_5d521e9abf5e02_24400584($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_options.php';
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
var atlasSize = <?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
, atlasType = "<?php echo $_smarty_tpl->tpl_vars['atlasType']->value;?>
", atlasMax = 0,  //图集配置
	adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', modelType = 'article';
<?php echo '</script'; ?>
>
<style>
.listSection:empty + input + .fg {height:30px;}
</style>
</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="dopost" id="dopost" value="<?php echo $_smarty_tpl->tpl_vars['dopost']->value;?>
" />
  <input type="hidden" name="pid" id="pid" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" />
  <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <?php if ($_smarty_tpl->tpl_vars['pid']->value||$_smarty_tpl->tpl_vars['parentid']->value) {?>
  <dl class="clearfix">
    <dt><label for="typename">分类名称：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="typename" id="typename" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['typename']->value;?>
" />
      <span class="input-tips"><s></s>请输入分类名称，20个汉字以内</span>
    </dd>
  </dl>
  <?php } else { ?>
  <dl class="clearfix">
    <dt>专题分类：</dt>
    <dd style="overflow:visible;">
      <div class="btn-group" id="typeBtn" style="margin-left:10px;">
        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['parname']->value;?>
<span class="caret"></span></button>
      </div>
      <input type="hidden" name="typeid" id="typeid" value="<?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
" />
      <span class="input-tips"><s></s>请选择所属分类</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="typename">专题名称：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="typename" id="typename" data-regex=".{1,60}" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['typename']->value;?>
" />
      <span class="input-tips"><s></s>请输入信息标题，60个汉字以内</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>缩略图：</dt>
    <dd class="thumb clearfix listImgBox">
      <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?> hide<?php }?>" id="filePicker1" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
      <?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?>
      <ul id="listSection1" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['litpic']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['litpic']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
      <?php } else { ?>
      <ul id="listSection1" class="listSection thumblist clearfix"></ul>
      <?php }?>
      <input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
" class="imglist-hidden" id="litpic">
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>banner（大图）：</dt>
    <dd class="thumb clearfix listImgBox">
      <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['banner_large']->value!='') {?> hide<?php }?>" id="filePicker10" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
      <?php if ($_smarty_tpl->tpl_vars['banner_large']->value!='') {?>
      <ul id="filePicker10" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_10_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['banner_large']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['banner_large']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['banner_large']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
      <?php } else { ?>
      <ul id="listSection10" class="listSection thumblist clearfix"></ul>
      <?php }?>
      <input type="hidden" name="banner_large" value="<?php echo $_smarty_tpl->tpl_vars['banner_large']->value;?>
" class="imglist-hidden" id="banner_large">
      <div class="clearfix fg"></div>
      <span class="input-tips" style="display:inline-block;"><s></s>pc端使用，尺寸 [1920*620]</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>banner（小图）：</dt>
    <dd class="thumb clearfix listImgBox">
      <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['banner_small']->value!='') {?> hide<?php }?>" id="filePicker11" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
      <?php if ($_smarty_tpl->tpl_vars['banner_small']->value!='') {?>
      <ul id="filePicker11" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_11_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['banner_small']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['banner_small']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['banner_small']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
      <?php } else { ?>
      <ul id="listSection11" class="listSection thumblist clearfix"></ul>
      <?php }?>
      <input type="hidden" name="banner_small" value="<?php echo $_smarty_tpl->tpl_vars['banner_small']->value;?>
" class="imglist-hidden" id="banner_small">
      <div class="clearfix fg"></div>
      <span class="input-tips" style="display:inline-block;"><s></s>pc端使用，尺寸 [660*440]</span>
    </dd>
  </dl>
  <!-- <dl class="clearfix">
    <dt>banner：</dt>
    <dd class="thumb clearfix listImgBox">
      <div class="uploadinp filePicker thumbtn" id="filePicker1" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
      <ul id="listSection1" class="listSection thumblist clearfix"></ul>
    </dd>
  </dl> -->
  <dl class="clearfix">
    <dt><label for="description">专题简介：</label></dt>
    <dd>
      <textarea name="description" id="description" placeholder="10~200汉字之内" data-regex=".{0,200}" rows="5" style="height:auto;"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>
      <span class="input-tips"><s></s>10~200汉字之内</span>
    </dd>
  </dl>
  <?php }?>
  <dl class="clearfix">
    <dt><label for="weight">排序：</label></dt>
    <dd>
      <span><input class="input-mini" type="number" name="weight" min="0" id="weight" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['weight']->value)===null||$tmp==='' ? 0 : $tmp);?>
" /></span>
      <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>状态：</dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"state",'values'=>$_smarty_tpl->tpl_vars['state']->value,'checked'=>$_smarty_tpl->tpl_vars['stateChecked']->value,'output'=>$_smarty_tpl->tpl_vars['stateNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <?php if (!$_smarty_tpl->tpl_vars['pid']->value&&!$_smarty_tpl->tpl_vars['parentid']->value) {?>
  <dl class="clearfix">
    <dt>推荐：</dt>
    <dd class="radio">
      <select name="flag_r" id="flag_r" class="input-medium">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['flag_rList']->value,'selected'=>$_smarty_tpl->tpl_vars['flag_r']->value),$_smarty_tpl);?>

      </select>
      <label for="flag_h" style="margin-top:0;">头条：
        <select name="flag_h" id="flag_h" class="input-medium">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['flag_hList']->value,'selected'=>$_smarty_tpl->tpl_vars['flag_h']->value),$_smarty_tpl);?>

        </select>
      </label>
    </dd>
  </dl>
  <?php }?>

  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button></dd>
  </dl>
</form>
<?php echo '<script'; ?>
>
var typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
;
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
