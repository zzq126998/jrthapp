<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 11:29:18
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:13216728255d53800e569eb8-66359563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f41a8d9f6254922c435bd48c6384c1929660db' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\login.html',
      1 => 1559205287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13216728255d53800e569eb8-66359563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cfg_basehost' => 0,
    'failedlogin' => 0,
    'gotopage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d53800e5e4fb6_05673647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d53800e5e4fb6_05673647')) {function content_5d53800e5e4fb6_05673647($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 9]>
<html class="oldie">
<![endif]-->
<!--[if gte IE 7]>
<html>
<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta name="renderer" content="webkit">
<title>网站管理平台</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/css/admin/bootstrap.css?v=2" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/css/admin/login.css" rel="stylesheet" />
</head>

<body>
<div class="wrap clearfix">
  <div class="l-left"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/images/admin/birdLC.png" /></div>
  <div class="l-right">
    <div id="loginInfo">
    <?php if ($_smarty_tpl->tpl_vars['failedlogin']->value!=1) {?>
    <h2>网站管理平台</h2>
    <form method="post" target="_top" id="loginForm">
      <input type="hidden" name="gotopage" id="gotopage" value="<?php echo $_smarty_tpl->tpl_vars['gotopage']->value;?>
" />
      <input type="hidden" name="dopost" value="login" />
      <dl>
        <dt><label for="username">登录帐户：</label></dt>
        <dd>
          <div class="l-input username control-group">
            <s></s>
            <input class="loginInput" type="text" name="userid" id="username" placeholder="请输入帐户名" autocomplete="off" />
          </div>
        </dd>
        <dt><label for="password">登录密码：</label></dt>
        <dd>
          <div class="l-input password control-group">
            <s></s>
            <input class="loginInput" type="password" name="pwd" id="password" placeholder="请输入帐户密码" />
            <span id="togglePassword" title="显示密码">显示密码</span>
          </div>
        </dd>
      </dl>
      <div class="rember hide">
        <label><input type="checkbox" name="rember" value="1" />下次自动登录 (公共场所慎用)</label>
      </div>
      <div class="submit">
        <input id="submit" type="submit" value="登录" class="btn btn-large btn-danger" />
      </div>
    </form>
    <p>1、不要在公共场合保存登录信息。<br />2、尽量避免多人使用同一帐号，系统会自动锁死。<br />3、为保证您的帐户安全，退出系统时请注销登录。</p>
    <?php } else { ?>
    <p style="padding-top:150px; font-size:16px; color:#333;">由于您的登录密码错误次数过多，<br />本次登录请求已经被拒绝，请 15 分钟后重新尝试。</p>
    <?php }?>
    </div>
  </div>
</div>

<div class="bgmark"></div>


<!--[if lt IE 9]>
<div class="update-layer"></div>
<div class="update-frame">
  <h2>非常抱歉，系统暂停对IE8及以下版本浏览器的支持！</h2>
  <h3>我们强烈建议您安装新版本浏览器，点击图标即可下载。</h3>
  <p><img src="/static/images/admin/save.gif" />下列软件均通过安全检测，您可放心安装</p>
  <ul>
    <li><a href="http://dlsw.baidu.com/sw-search-sp/soft/9d/14744/ChromeStandalone_44.0.2403.130_Setup.1438755492.exe" target="_blank"><img src="/static/images/admin/browser/chrome.gif" />Chrome</a></li>
    <li><a href="http://download.firefox.com.cn/releases/stub/official/zh-CN/Firefox-latest.exe" target="_blank"><img src="/static/images/admin/browser/firefox.gif" />火狐</a></li>
    <li><a href="http://download.microsoft.com/download/3/A/2/3A2B7E95-24EF-44F6-A092-C9CF4D1878D0/IE11-Windows6.1.exe" target="_blank"><img src="/static/images/admin/browser/ie.gif" />IE11</a></li>
    <li><a href="http://down.360safe.com/se/360se7.1.1.800.exe" target="_blank"><img src="/static/images/admin/browser/360.gif" />360浏览器</a></li>
    <li><a href="http://download.ie.sogou.com/se/sogou_explorer_6.0_0806.exe" target="_blank"><img src="/static/images/admin/browser/sogou.gif" />搜狗浏览器</a></li>
    <li><a href="http://dldir1.qq.com/invc/tt/QQBrowser_Setup_9.0.2315.400.exe" target="_blank"><img src="/static/images/admin/browser/qq.gif" />QQ浏览器</a></li>
  </ul>
  <p class="tip">双核浏览器请切换至 <strong>极速模式</strong>。  <a href="http://jingyan.baidu.com/article/22a299b539f4b19e18376a5b.html" target="_blank">如何开启</a>？</p>
</div>
<!--<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/core/jquery-1.9.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/ui/jquery.toggle-password.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/admin/login.js?v=3"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
