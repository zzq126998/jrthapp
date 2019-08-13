<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:05:14
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteSubwayAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:11800174625d511dbaab1c63-56752811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce76b53fcf74f62d482c458b6e58941d306f1225' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteSubwayAdd.html',
      1 => 1559205997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11800174625d511dbaab1c63-56752811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'adminPath' => 0,
    'cityid' => 0,
    'dopost' => 0,
    'token' => 0,
    'province' => 0,
    'p' => 0,
    'provinceid' => 0,
    'subway' => 0,
    's' => 0,
    't' => 0,
    'sid' => 0,
    'cid' => 0,
    'countyid' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511dbab2cd69_95699410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511dbab2cd69_95699410')) {function content_5d511dbab2cd69_95699410($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>新增地铁线路</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
<style>
.menus-item {position:relative; min-height:93px; padding:0 10px 10px 0; margin-top:15px; border-bottom:1px dashed #ccc;}
.menus-item:first-child {margin:0;}
.menus-item h3 {float:left; margin:-3px 20px 0 0;}
.menus-item h3 i {margin-right:5px; cursor:move;}
.menus-item .del-item {position:absolute; left:18px; top:48px; line-height:20px; font-size:12px}
.menus-item .del-item i {vertical-align:text-top; margin-right:5px;}
.menus-item ul {position:relative; min-height:41px; overflow:hidden; list-style:none; margin:0;}
.menus-item li {float:left; width:210px; list-style:none; padding:3px 0; margin-right:33px;}
.menus-item li i {cursor:move;}
.menus-item h3 i, .menus-item li i, .menus-item li a {vertical-align:middle;}
.menus-item li input {margin-left:5px;}
.addNewList {padding:10px 0 5px; line-height:25px; display:inline-block; margin-left:150px;}
.addNewList i {vertical-align:middle; margin:-4px 3px 0 0;}
</style>
</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
" />
  <input type="hidden" name="dopost" id="dopost" value="<?php echo $_smarty_tpl->tpl_vars['dopost']->value;?>
" />
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <dl class="clearfix">
    <dt>所在城市：</dt>
    <dd>
      <select id="pBtn" class="input-medium">
        <option value="0">--省份--</option>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['p']->value['id']==$_smarty_tpl->tpl_vars['provinceid']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['typename'];?>
</option>
        <?php } ?>
      </select>
      <select id="cBtn" class="input-medium">
        <option value="0">--城市--</option>
      </select>
      <select id="xBtn" class="input-medium">
        <option value="0">--区县--</option>
      </select>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label>线路：</label><a href="javascript:;" class="label label-info" style="color:#fff" id="addItem"><i class="icon-white icon-plus-sign"></i> 新增线路</a>&nbsp;&nbsp;&nbsp;</dt>
    <dd id="menus">
      <?php if ($_smarty_tpl->tpl_vars['subway']->value!='') {?>
      <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subway']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
      <div class="menus-item clearfix">
        <h3><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-title" placeholder="线路名" class="input-small" data-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
" /></h3>
        <div class="del-item"><a href="javascript:;"><i class="icon-trash"></i>删除此线路</a></div>
        <ul class="clearfix">
          <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['station']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <?php } ?>
        </ul>
        <a href="javascript:;" class="addNewList"><i class="icon-plus"></i>新增站点</a>
      </div>
      <?php } ?>
      <?php } else { ?>
      <div class="menus-item clearfix">
        <h3><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-title" placeholder="线路名" class="input-small" data-id="0" /></h3>
        <div class="del-item"><a href="javascript:;"><i class="icon-trash"></i>删除此线路</a></div>
        <ul class="clearfix">
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
          <li><i data-toggle="tooltip" data-placement="right" data-original-title="拖动以排序" class="icon-move"></i><input type="text" name="m-list" placeholder="站点" class="input-medium" data-id="0" /><a data-toggle="tooltip" data-placement="right" data-original-title="删除" href="javascript:;" class="icon-trash"></a></li>
        </ul>
        <a href="javascript:;" class="addNewList"><i class="icon-plus"></i>新增站点</a>
      </div>
      <?php }?>
    </dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><input class="btn btn-large btn-success" type="submit" name="submit" id="btnSubmit" value="确认提交" /></dd>
  </dl>
</form>

<?php echo '<script'; ?>
>var sid = <?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
, cid = <?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
, provinceid = <?php echo $_smarty_tpl->tpl_vars['provinceid']->value;?>
, cityid = <?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
, countyid = <?php echo $_smarty_tpl->tpl_vars['countyid']->value;?>
;<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
