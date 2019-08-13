<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 15:58:01
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteCityBusiness.html" */ ?>
<?php /*%%SmartyHeaderCode:810639715d511c09948767-57488976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90f815b905709564081b7b0b697b734f85aa875' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteCityBusiness.html',
      1 => 1559206057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810639715d511c09948767-57488976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'typename' => 0,
    'cid' => 0,
    'area' => 0,
    'q' => 0,
    'list' => 0,
    'a' => 0,
    'k' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511c099c57b9_56950186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511c099c57b9_56950186')) {function content_5d511c099c57b9_56950186($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>城市区域商圈</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>
<style>
.markditu {margin-right: 15px;}
</style>
<body>
<div class="search">
  <div class="btn-group">
    <button class="btn dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['typename']->value;?>
<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="siteCityBusiness.php?cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">所有区域</a></li>
      <?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
      <li><a href="siteCityBusiness.php?cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&qid=<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['q']->value['typename'];?>
</a></li>
      <?php } ?>
    </ul>
  </div>
  <button type="button" class="btn btn-primary ml30">新增商圈</button>
</div>
<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:10px 10px 0;">
  <li class="row2">&nbsp;</li>
  <li class="row15 left">区域</li>
  <li class="row20 left">名称</li>
  <li class="row12">开放时间</li>
  <li class="row12">联系电话</li>
  <li class="row15">经纬度</li>
  <li class="row12">缩略图</li>
  <li class="row12">操作</li>
</ul>
<div class="list mt124" id="list">
  <table>
    <tbody>
      <?php if (count($_smarty_tpl->tpl_vars['list']->value)==0) {?>
      <tr><td style="height: 200px;">暂无信息。</td></tr>
      <?php }?>
      <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['a']->key;
?>
      <tr class="citylist" data-id="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
">
        <td class="row2"></td>
        <td class="row15 left"><?php echo $_smarty_tpl->tpl_vars['a']->value['typename'];?>
</td>
        <td class="row20 left"><input type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
" /><label style="display:inline-block; margin-left:10px;"><input type="checkbox" class="hot" value="1"<?php if ($_smarty_tpl->tpl_vars['a']->value['hot']==1) {?> checked<?php }?>>热门</label></td>
        <td class="row12"><div class="input-prepend input-append"><input class="input-mini openStart" type="text" name="openStart" id="openStart" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['openStart'];?>
"><span class="add-on">到</span><input class="input-mini openEnd" type="text" name="openEnd" id="openEnd" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['openEnd'];?>
"></div></td>
        <td class="row12"><input class="input-large" type="text" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['tel'];?>
" /></td>
        <td class="row15"><a data-lnglat="<?php echo $_smarty_tpl->tpl_vars['a']->value['lnglat'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" data-city="<?php echo $_smarty_tpl->tpl_vars['a']->value['cityname'];?>
" href="javascript:;" class="markditu" title="标注区域位置"><img src="/static/images/admin/markditu.jpg"></a><input disabled class="input-large" type="hidden" name="lng" id="lng" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['lng'];?>
"/><input disabled class="input-large" type="hidden" name="lat" id="lat" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['lat'];?>
"/><input class="input-large" type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
"/></td>
        <td class="row12"><?php if (!empty($_smarty_tpl->tpl_vars['a']->value['litpic'])) {?><img src="<?php echo getFilePath($_smarty_tpl->tpl_vars['a']->value['litpic']);?>
" class="img" alt="" style="height:40px;"><?php }?><a style="color:#2672ec;" href="javascript:;" class="upfile" title="删除">上传图标</a><input type="file" name="Filedata" value="" class="imglist-hidden Filedata hide" id="Filedata_<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"><input type="hidden" name="icon" class="icon" value=""></td>
        <td class="row12"><a href="javascript:;" class="del">删除</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="fix-btn"><button type="button" class="btn btn-success" id="saveBtn">保存图片</button></div>
<?php echo '<script'; ?>
 id="addNew" type="text/html">
  <form action="" class="quick-editForm" name="editForm">
    <dl class="clearfix">
      <dt>所属区域：</dt>
      <dd>
        <select id="qBtn" name="qBtn" style="width:130px;">
          <option value="">--区域--</option>
          <?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['q']->value['typename'];?>
</option>
          <?php } ?>
        </select>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>商圈名称：</dt>
      <dd><input class="input-large" type="text" name="name" id="name" /></dd>
    </dl>
    <dl class="clearfix">
      <dt>属性：</dt>
      <dd><label><input type="checkbox" name="hot" id="hot" value="1" />热门</label></dd>
    </dl>
  </form>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", cid = <?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
;<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
