<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 10:36:07
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\shop\mytagAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:12877554265d537397f2f628-36279654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c5660c6081c3338fb5d1096549cafb15f08e3b8' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\shop\\mytagAdd.html',
      1 => 1561025596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12877554265d537397f2f628-36279654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pagetitle' => 0,
    'cssFile' => 0,
    'typeid' => 0,
    'typeListArr' => 0,
    'module' => 0,
    'adminPath' => 0,
    'item' => 0,
    'specification' => 0,
    'storetype' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'name' => 0,
    'storeOption' => 0,
    'price1' => 0,
    'price2' => 0,
    'flagopt' => 0,
    'flagList' => 0,
    'flag' => 0,
    'orderbyList' => 0,
    'orderby' => 0,
    'start' => 0,
    'end' => 0,
    'expbody' => 0,
    'stateopt' => 0,
    'state' => 0,
    'statenames' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5373980a4c08_05266832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5373980a4c08_05266832')) {function content_5d5373980a4c08_05266832($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_checkboxes.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
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
var typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
, typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", itemType = <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
, itemSpe = <?php echo $_smarty_tpl->tpl_vars['specification']->value;?>
, storetype = <?php echo $_smarty_tpl->tpl_vars['storetype']->value;?>
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
    <dt><label for="name">标签说明：</label></dt>
    <dd>
      <input type="text" class="input-large" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
      <span class="help-inline">为了方便管理，请输入标签说明！</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="typeid">调用分类：</label></dt>
    <dd><select name="typeid" id="typeid" style="width:auto"></select></dd>
  </dl>
  <div id="itemList" class="hide" style="background:#f5f5f5; padding:5px 0;">
    <div id="itemType" class="hide"></div>
    <div id="itemSpe" class="hide" style="border-top:5px solid #fff;"></div>
  </div>
  <dl class="clearfix">
    <dt><label for="store">所属店铺：</label></dt>
    <dd><select name="store" id="store" class="input-large"><?php echo $_smarty_tpl->tpl_vars['storeOption']->value;?>
</select></dd>
  </dl>
  <dl class="clearfix hide" id="categoryObj">
    <dt><label for="category">店铺商品分类：</label></dt>
    <dd><select name="category" id="category" class="input-large"></select></dd>
  </dl>
  <dl class="clearfix">
    <dt>价格区间：</dt>
    <dd>
      <div class="input-prepend input-append" style="margin:0">
        <span class="add-on">从</span>
        <input class="input-mini" id="price1" name="price1" type="text" value="<?php echo $_smarty_tpl->tpl_vars['price1']->value;?>
" />
        <span class="add-on">到</span>
        <input class="input-mini" id="price2" name="price2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['price2']->value;?>
" />
      </div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>自定义标签：</dt>
    <dd class="radio" id="flags"><?php echo smarty_function_html_checkboxes(array('name'=>'flags','values'=>$_smarty_tpl->tpl_vars['flagopt']->value,'output'=>$_smarty_tpl->tpl_vars['flagList']->value,'selected'=>$_smarty_tpl->tpl_vars['flag']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>
</dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="orderby">排序：</label></dt>
    <dd>
      <select name="orderby" id="orderby" class="input-medium">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['orderbyList']->value,'selected'=>$_smarty_tpl->tpl_vars['orderby']->value),$_smarty_tpl);?>

      </select>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="start">开始时间：</label></dt>
    <dd>
      <input class="input-medium" type="text" name="start" id="start" date-language="ch" value="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" />
      <span class="help-inline">如不限制，留空即可！</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="end">结束时间：</label></dt>
    <dd>
      <input class="input-medium" type="text" name="end" id="end" date-language="ch" value="<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" />
      <span class="help-inline">如不限制，留空即可！</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="expbody">过期显示内容：</label></dt>
    <dd><textarea rows="5" class="input-xxlarge" name="expbody" id="expbody"><?php echo $_smarty_tpl->tpl_vars['expbody']->value;?>
</textarea></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="state">状态：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"state",'values'=>$_smarty_tpl->tpl_vars['stateopt']->value,'checked'=>$_smarty_tpl->tpl_vars['state']->value,'output'=>$_smarty_tpl->tpl_vars['statenames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd>
      <button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button>
      <a class="btn btn-link ml30" href="javascript:;" id="preview">预览</a>
    </dd>
  </dl>
</form>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html><?php }} ?>
