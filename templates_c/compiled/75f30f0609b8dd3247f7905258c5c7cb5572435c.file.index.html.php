<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-21 14:26:41
         compiled from "/www/wwwroot/hnup.rucheng.pro/include/plugins/5/tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:9954859765d0c78a1919c39-56383076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f30f0609b8dd3247f7905258c5c7cb5572435c' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/include/plugins/5/tpl/index.html',
      1 => 1537332410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9954859765d0c78a1919c39-56383076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'folder' => 0,
    'cfg_clihost' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0c78a193bd37_90396298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0c78a193bd37_90396298')) {function content_5d0c78a193bd37_90396298($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>一键转载</title>
<style media="screen">
.install-area {height: 184px; background: #f7f7f7; text-align: center; margin-bottom: 30px;}
.install-area .button {padding: 0 30px; font-size: 24px; background: #D53939; color: #fff; margin: 50px 0 15px; display: inline-block; height: 60px; line-height: 60px; border-radius: 3px; cursor: pointer; text-decoration: none;}
.install-area .button.white {background: #fff; color: #444; border: 1px solid #ddd; text-decoration: none; position: relative;}
.install-area .mask-button {position: absolute; width: 100%; height: 100%; left: 0; top: 0; font-size: 0; cursor: move;}
h4 {margin: 0;}
p {line-height: 25px;}
</style>
</head>

<body>

<div class="install-area">
  <div class="button white">
    拖动此按钮到书签栏
    <a href="javascript:(function(a,b,c,d){a[c]?a[c].init():(d=b.createElement('script'),d.id='huoniao_plugins_reprint_script',d.setAttribute('data-plugins','<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
'),d.setAttribute('data-clihost', '<?php echo $_smarty_tpl->tpl_vars['cfg_clihost']->value;?>
'),d.setAttribute('charset','utf-8'),d.src='<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
?v='+Math.floor(+new Date/1e7),b.body.appendChild(d))})(window,document,'HUONIAO_PLUGINS_REPRINT_GLOBAL');" onclick="alert('请把按钮拖动到书签栏');return false;" class="mask-button">一键转载</a>
  </div>
</div>

<h4>注意事项：</h4>
<p>1. 此功能需要提前登录后台，保持登录状态才可正常使用；<br />2. 如果系统没有配置HTTPS，将无法正常转载HTTPS的站点；</p>
<br />
<h4>使用方法：</h4>
<p>拖动上面的按钮到你的书签栏上。浏览网页时，点击书签栏上的“一键转载”即可。<br />找不到书签栏？，<a href="https://jingyan.baidu.com/article/8275fc865b5fc046a03cf62d.html" target="_blank">点击查看教程=></a></p>
<br />
<h4>使用教程：</h4>
<p><a href="https://uploads.ihuoniao.cn/siteConfig/zhuanzai.gif" target="_blank"><img src="https://uploads.ihuoniao.cn/siteConfig/zhuanzai.gif" width="650" /></a></p>
</body>
</html>
<?php }} ?>
