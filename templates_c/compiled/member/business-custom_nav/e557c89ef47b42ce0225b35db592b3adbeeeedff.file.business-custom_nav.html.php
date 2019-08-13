<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:37:21
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\business-custom_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:7553049275d522261340457-99504814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e557c89ef47b42ce0225b35db592b3adbeeeedff' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\business-custom_nav.html',
      1 => 1538123328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7553049275d522261340457-99504814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'custom_navArr' => 0,
    'nav' => 0,
    'k' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d522261384a32_84475048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d522261384a32_84475048')) {function content_5d522261384a32_84475048($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable(("自定义导航 - ").($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/manage.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<style>
    .container .list {padding: 10px 30px 0;}
    .container table {width: 100%; border-bottom: 3px solid #e3e4e8;}
    .container .fir {width: 20px;}
    .container thead {border-bottom: 2px solid #e3e4e8; font-size: 14px; background: #fff; color: #8e8e8e; line-height: 60px;}
    .container tbody tr {line-height: 45px; font-size: 14px; border-bottom: 1px solid #eee;}
    .container tbody tr:hover td {background-color: #f5f5f5;}
    .container tbody tr:hover td.empty {background-color: #fff;}
    .container tbody td {line-height: 28px; padding: 12px 0;}
    .container tbody td input {height: 28px; padding: 0 3px; border: 1px solid #ccc;}
    .container tbody td img {vertical-align: middle;}
    .container tbody td .tit {width: 150px;}
    .container tbody td .link {width: 300px;}
    .container tbody td .del {color: #f00;}
    .container .nav-tabs {padding-bottom: 15px;}
    .container .nav-tabs .btn {margin-top: 15px;}
    .submit {float: right; width: 160px; height: 45px; line-height: 45px; font-size: 20px; color: #fff; border: 1px solid #76ae30; border-radius: 3px; background-color: #85c336; cursor: pointer; margin: 10px 10px 0;}
</style>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("business_custom_nav", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <div class="nav-tabs fn-clear">
        <ul class="fn-clear">
            <li data-id="" class="active"><a href="javascript:;">自定义导航</a></li>
        </ul>
    </div>
    <div class="container fn-clear">
        <table>
            <thead><tr><td class="fir"></td><td>导航图标</td><td>导航名</td><td>导航链接</td><td>操作</td></tr></thead>
            <tbody>
                <?php if ($_smarty_tpl->tpl_vars['custom_navArr']->value) {?>
                <?php  $_smarty_tpl->tpl_vars["nav"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["nav"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['custom_navArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["nav"]->key => $_smarty_tpl->tpl_vars["nav"]->value) {
$_smarty_tpl->tpl_vars["nav"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["nav"]->key;
?>
                <tr>
                    <td class="fir"></td>
                    <td>
                        <img data-url="<?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['nav']->value['iconSource'];?>
" class="img" style="height: 40px;">
                        <a href="javascript:;" class="upfile" title="删除"><?php if ($_smarty_tpl->tpl_vars['nav']->value['icon']) {?>重新上传<?php } else { ?>上传图标<?php }?></a>
                        <input type="file" name="Filedata" class="imglist-hidden Filedata fn-hide" id="Filedata_cus_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                        <input type="hidden" class="icon" value="">
                    </td>
                    <td><input type="text" class="tit" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
" placeholder="请输入导航名" /></td>
                    <td><input type="text" class="link" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
" placeholder="请输入网址，以http:// 或 https://开头" /></td>
                    <td><a href="javascript:;" class="link del">删除</a></td>
                </tr>
                <?php } ?>
                <?php }?>
            </tbody>
        </table>
        <div class="nav-tabs fn-clear">
            <a href="javascript:;" class="btn add">添加导航</a>
            <button type="button" class="submit" id="submit">保存修改</button>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.ajaxFileUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/custom_nav.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
