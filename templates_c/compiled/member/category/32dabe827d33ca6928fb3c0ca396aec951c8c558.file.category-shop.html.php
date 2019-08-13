<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 17:46:57
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\category-shop.html" */ ?>
<?php /*%%SmartyHeaderCode:8361918365d528711e8fb41-38455553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32dabe827d33ca6928fb3c0ca396aec951c8c558' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\category-shop.html',
      1 => 1530018844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8361918365d528711e8fb41-38455553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'typeList' => 0,
    'row' => 0,
    'storeid' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d528711ead015_55815834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d528711ead015_55815834')) {function content_5d528711ead015_55815834($_smarty_tpl) {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'shop'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5) {?>
<div class="tbar fn-clear">
  <div class="operater">
    <a href="javascript:;" class="label" id="addNewType"><i>+</i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][90];?>
</a>
  </div>
  <div class="opts">
    <a href="javascript:;" id="unfold"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][25];?>
</a>
    <span>&nbsp;|&nbsp;</span>
    <a href="javascript:;" id="fold"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][26];?>
</a>
  </div>
</div>

<table class="cats-table">
  <colgroup>
    <col width="4%">
    <col width="auto">
    <col width="15%">
    <col width="15%">
  </colgroup>
  <thead>
    <tr>
      <th><input type="checkbox" class="checkall" /></th>
      <th class="tit"><a href="javascript:;" class="delchecked fn-hide"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][9];?>
</a><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][485];?>
</span></th>
      <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][20];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][11];?>
</th>
    </tr>
  </thead>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tbody>
    <tr class="sup" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
      <td><input type="checkbox" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" /></td>
      <td class="tit"><a href="javascript:;" class="fold"></a><input type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['typename'];?>
" /></td>
      <td><a href="javascript:;" class="up"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][13];?>
</a><a href="javascript:;" class="down"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][14];?>
</a></td>
      <td><a href="javascript:;" class="deletetr" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][8];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][8];?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['storeid']->value;?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store-detail','id'=>$_tmp6,'typeid'=>$_tmp7),$_smarty_tpl);?>
" class="editrow" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][175];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][175];?>
</a></td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['row']->value['lower']) {?>
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['lower']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
    <tr class="sub" data-id="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
      <td><input type="checkbox" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" /></td>
      <td class="tit"><span class="plus-icon"></span><input type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['typename'];?>
" /></td>
      <td><a href="javascript:;" class="up"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][13];?>
</a><a href="javascript:;" class="down"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][14];?>
</a></td>
      <td><a href="javascript:;" class="deletetr" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][8];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][8];?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['storeid']->value;?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php $_tmp9=ob_get_clean();?><?php echo getUrlPath(array('service'=>'shop','template'=>'store-detail','id'=>$_tmp8,'typeid'=>$_tmp9),$_smarty_tpl);?>
" class="editrow" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][175];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][175];?>
</a></td>
    </tr>
    <?php } ?>
    <?php }?>
    <tr class="add-sub" style="display: table-row;">
      <td></td>
      <td colspan="3" class="tit"><span class="plus-icon"></span><a href="javascript:;" class="add-type"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][91];?>
</a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>

<div class="tbar fn-clear">
  <div class="operater">
    <a href="javascript:;" class="label" id="addNewType1"><i>+</i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][90];?>
</a>
  </div>
</div>

<?php } else { ?>
<div class="list" style="padding: 200px 0; text-align: center; font-size: 14px; color: red;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][403];?>
</div>
<?php }?>
<?php }} ?>
