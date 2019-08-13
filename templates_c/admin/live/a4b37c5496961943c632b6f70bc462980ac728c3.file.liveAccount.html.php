<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:11:26
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\live\liveAccount.html" */ ?>
<?php /*%%SmartyHeaderCode:11314516925d511f2e83db84-73327207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b37c5496961943c632b6f70bc462980ac728c3' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\live\\liveAccount.html',
      1 => 1561028408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11314516925d511f2e83db84-73327207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'adminPath' => 0,
    'token' => 0,
    'smsItem' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511f2e897934_69851644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511f2e897934_69851644')) {function content_5d511f2e897934_69851644($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>直播平台管理</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <div class="alert alert-success" style="margin:0 50px 10px;"><button type="button" class="close" data-dismiss="alert">×</button>配置非常重要，如果不会配置的，可以联系视频直播平台提供商帮助配置</div>
  <div class="mail-list clearfix">
    <?php echo $_smarty_tpl->tpl_vars['smsItem']->value;?>

  </div>
  <input class="btn btn-large btn-success" type="button" name="button" id="add" style="margin-left:50px;" value="新增一个帐户">
  <!--<a href="javascript:;" id="check" style="margin-left:20px;<?php if ($_smarty_tpl->tpl_vars['smsItem']->value=='') {?> display: none;<?php }?>">测试启用帐号是否可用</a>-->
  <?php echo '<script'; ?>
 id="smsForm" type="text/html">
    <form action="" class="quick-editForm smsForm" name="smsForm">
      <dl class="clearfix">
        <dt>平台名称：</dt>
        <dd><input class="input-large" type="text" name="title" id="title" value="" /></dd>
      </dl>
      <dl class="clearfix">
        <dt>AppKeyId：</dt>
        <dd><input class="input-large" type="text" name="username" id="username" value="" /></dd>
      </dl>
      <dl class="clearfix">
        <dt>AppKeySecret：</dt>
        <dd>
          <input class="input-large" type="text" name="password" id="password" value="" />
          <span class="help-inline">如果需要加密，请输入加密后的密码</span>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt>直播加速域名：</dt>
        <dd><input class="input-large" type="text" name="vhost" id="vhost" value="" /></dd>
      </dl>
      <dl class="clearfix">
        <dt>AppName：</dt>
        <dd><input class="input-large" type="text" name="appname" id="appname" value="" /></dd>
      </dl>
      <dl class="clearfix">
        <dt>推流域名：</dt>
        <dd><input class="input-large" type="text" name="pushdomain" id="pushdomain" value="" /></dd>
      </dl>
      <dl class="clearfix">
        <dt>推流鉴权Key：</dt>
        <dd><input class="input-large" type="text" name="privatekey" id="privatekey" value="" />
          <span class="help-inline">主key</span>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt>播流域名：</dt>
        <dd><input class="input-large" type="text" name="playdomain" id="playdomain" value="" /></dd>
      </dl>
      <dl class="clearfix">
        <dt>播流鉴权Key：</dt>
        <dd><input class="input-large" type="text" name="playprivatekey" id="playprivatekey" value="" />
          <span class="help-inline">主key</span>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt>周期录制时长：</dt>
        <dd><input class="input-large" type="text" name="duration" id="duration" value="" /><span class="help-inline">单位：秒</span></dd>
      </dl>
      <!--<dl class="clearfix">-->
        <!--<dt>转码模板：</dt>-->
        <!--<dd>-->
          <!--<label id="standardcheck" ><input type="radio" name="transmode" value="0" checked /> 标准模板</label>-->
          <!--<label id="narrowbandcheck"><input type="radio" name="transmode" value="1" /> 窄带高清模板</label>-->
        <!--</dd>-->
      <!--</dl>-->
      <!--<dl class="clearfix" id="standard">-->
        <!--<dt></dt>-->
        <!--<dd class="radio" style="padding-left:125px">-->
          <!--<label><input type="checkbox" name="modeid[]" value="0" >流畅</label>-->
          <!--<label><input type="checkbox" name="modeid[]" value="1" >标清</label>-->
          <!--<label><input type="checkbox" name="modeid[]" value="2" >高清</label>-->
          <!--<label><input type="checkbox" name="modeid[]" value="3" >超清</label>-->
        <!--</dd>-->
      <!--</dl>-->
      <dl class="clearfix">
        <dt>官方网站：</dt>
        <dd><input class="input-large" type="text" name="website" id="website" value="" /></dd>
      </dl>
      <dl class="clearfix">
        <dt>联系方式：</dt>
        <dd><input class="input-large" type="text" name="contact" id="contact" value="" /></dd>
      </dl>
    </form>
  <?php echo '</script'; ?>
>
</form>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
