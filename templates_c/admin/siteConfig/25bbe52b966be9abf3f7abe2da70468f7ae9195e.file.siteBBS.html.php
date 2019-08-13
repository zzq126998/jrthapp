<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:32:15
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteBBS.html" */ ?>
<?php /*%%SmartyHeaderCode:8858273255d5107ef3e58b6-17216828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25bbe52b966be9abf3f7abe2da70468f7ae9195e' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteBBS.html',
      1 => 1559206002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8858273255d5107ef3e58b6-17216828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'token' => 0,
    'bbs_name' => 0,
    'bbs_url' => 0,
    'stateList' => 0,
    'state' => 0,
    'stateName' => 0,
    'bbs_typeList' => 0,
    'bbs_type' => 0,
    'bbs_typeName' => 0,
    'discuz_config' => 0,
    'phpwind_config' => 0,
    'action' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5107ef427f54_38971479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5107ef427f54_38971479')) {function content_5d5107ef427f54_38971479($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>网站论坛整合</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <dl class="clearfix">
    <dt><label for="bbs_name">论坛名称：</label></dt>
    <dd>
      <input class="input-large" type="text" name="bbs_name" id="bbs_name" data-regex=".{2,30}" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['bbs_name']->value;?>
" />
      <span class="input-tips"><s></s>请输入论坛名称，2-30个字符。</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="bbs_url">论坛地址：</label></dt>
    <dd>
      <input class="span5" type="text" name="bbs_url" id="bbs_url" data-regex="http(s?):\/\/[^\s]+" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['bbs_url']->value;?>
" />
      <span class="input-tips"><s></s>论坛地址，以“http://、https://”开头</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>论坛状态：</dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"state",'values'=>$_smarty_tpl->tpl_vars['stateList']->value,'checked'=>$_smarty_tpl->tpl_vars['state']->value,'output'=>$_smarty_tpl->tpl_vars['stateName']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <?php if ($_smarty_tpl->tpl_vars['state']->value==1) {?>
  <div id="state1">
  <?php } else { ?>
  <div id="state1" class="hide">
  <?php }?>
    <dl class="clearfix">
      <dt>整合平台：</dt>
      <dd class="radio">
        <?php echo smarty_function_html_radios(array('name'=>"bbs_type",'values'=>$_smarty_tpl->tpl_vars['bbs_typeList']->value,'checked'=>$_smarty_tpl->tpl_vars['bbs_type']->value,'output'=>$_smarty_tpl->tpl_vars['bbs_typeName']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

      </dd>
    </dl>
    <?php if ($_smarty_tpl->tpl_vars['bbs_type']->value=='discuz') {?>
    <div id="discuz">
    <?php } else { ?>
    <div id="discuz" class="hide">
    <?php }?>
      <dl class="clearfix">
        <dt><label for="discuz_config">UCenter配置信息：</label></dt>
        <dd>
          <textarea class="input-xxlarge" style="height:375px;" name="discuz_config" id="discuz_config"><?php echo $_smarty_tpl->tpl_vars['discuz_config']->value;?>
</textarea>
          <span class="input-tips" style="display:inline-block;"><s></s>此处内容是从UCenter应用中心自动生成的代码<br />直接粘贴过来即可。</span>
        </dd>
      </dl>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['bbs_type']->value=='phpwind') {?>
    <div id="phpwind">
    <?php } else { ?>
    <div id="phpwind" class="hide">
    <?php }?>
      <dl class="clearfix">
        <dt><label for="phpwind_config">UCenter配置信息：</label></dt>
        <dd>
          <textarea class="input-xxlarge" style="height:375px;" name="phpwind_config" id="phpwind_config"><?php echo $_smarty_tpl->tpl_vars['phpwind_config']->value;?>
</textarea>
          <span class="input-tips" style="display:inline-block;"><s></s>此处内容是从UCenter应用中心自动生成的代码<br />直接粘贴过来即可。</span>
        </dd>
      </dl>
    </div>
  </div>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd>
        <button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button>
        &nbsp;&nbsp;&nbsp;&nbsp;
        配置教程：<a href="https://help.kumanyun.com/help-53.html" target="_blank">https://help.kumanyun.com/help-53.html</a>
    </dd>
  </dl>
</form>

<?php echo '<script'; ?>
>var action = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
