<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:49:43
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\info\115\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:17774094815d510c0796e0c6-78014349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca56f53d70b6767ee3a10ffe7c29f602cf7f8af3' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\info\\115\\bottom.html',
      1 => 1555744188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17774094815d510c0796e0c6-78014349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets_skin' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510c07970001_20848282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510c07970001_20848282')) {function content_5d510c07970001_20848282($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../../siteConfig/public_foot_v3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'info','theme'=>'gray'), 0);?>


<div class="btntop">
  <a href="javascript:;" class="top" title="返回顶部"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/gotop.png" alt=""></a>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/common.js"><?php echo '</script'; ?>
><?php }} ?>
