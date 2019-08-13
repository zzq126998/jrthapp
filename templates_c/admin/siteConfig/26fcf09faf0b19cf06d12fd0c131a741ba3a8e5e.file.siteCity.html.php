<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 15:52:56
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteCity.html" */ ?>
<?php /*%%SmartyHeaderCode:17130798765d511ad8bef569-42371721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26fcf09faf0b19cf06d12fd0c131a741ba3a8e5e' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteCity.html',
      1 => 1559206094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17130798765d511ad8bef569-42371721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'cfg_sameAddr_state' => 0,
    'province' => 0,
    'p' => 0,
    'domaintype' => 0,
    'domaintypeChecked' => 0,
    'domaintypeNames' => 0,
    'basehost' => 0,
    'adminPath' => 0,
    'token' => 0,
    'domainArr' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511ad8ce3820_02345703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511ad8ce3820_02345703')) {function content_5d511ad8ce3820_02345703($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>分站城市管理</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
    .setting, .setting label {display: inline-block;}
    .setting {margin-left: 50px;}
    .setting label {margin: 0 10px 0 0;}
    .setting label input[type=radio] {margin-right: 0;}
</style>
</head>

<body>
<div class="search">
  <div class="btn-group">
    <button class="btn dropdown-toggle" data-toggle="dropdown">批量操作<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="0">主域名</a></li>
      <li><a href="javascript:;" data-id="1">子域名</a></li>
      <li><a href="javascript:;" data-id="2">子目录</a></li>
    </ul>
  </div>
  <button type="button" class="btn btn-success">保存全部</button>
  <button type="button" class="btn btn-primary ml30">开通城市</button>
    <div class="setting">
        <label class="statusTips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="举例说明：开通了苏州分站，再开通昆山（归属于苏州管辖的县级市）分站，此时是否需要隐藏苏州分站下的昆山区域"><i class="icon-question-sign" style="margin-top: 4px;"></i>
        重复区域：</label>
        <label><input type="radio" name="state" value="1"<?php if ($_smarty_tpl->tpl_vars['cfg_sameAddr_state']->value) {?> checked<?php }?> /> 显示</label>
        <label><input type="radio" name="state" value="0"<?php if (!$_smarty_tpl->tpl_vars['cfg_sameAddr_state']->value) {?> checked<?php }?> /> 隐藏</label>
        <button class="btn btn-small btn-success" id="save">保存</button>
    </div>
</div>
<ul class="thead clearfix" style="position:relative; top:0; left:0; right:0; margin:10px 10px 0;">
  <li class="row5">ID</li>
  <li class="row15 left">城市名称</li>
  <li class="row10 left">类型</li>
  <li class="row30 left">域名</li>
  <li class="row40 left">操作</li>
</ul>
<div class="list mt124" id="list"><table><tbody><tr><td style="height:200px;" align="center">加载中...</td></tr></tbody></table></div>
<div class="search">
  <div class="btn-group dropup">
    <button class="btn dropdown-toggle" data-toggle="dropdown">批量操作<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="javascript:;" data-id="0">主域名</a></li>
      <li><a href="javascript:;" data-id="1">子域名</a></li>
      <li><a href="javascript:;" data-id="2">子目录</a></li>
    </ul>
  </div>
  <button type="button" class="btn btn-success">保存全部</button>
  <button type="button" class="btn btn-primary ml30">开通城市</button>
</div>

<?php echo '<script'; ?>
 id="addCity" type="text/html">
  <form action="" class="quick-editForm" name="editForm">
    <dl class="clearfix">
      <dt>所属城市：</dt>
      <dd>
        <select id="pBtn" name="pBtn" style="width:130px;">
          <option value="">--省份--</option>
          <?php if ($_smarty_tpl->tpl_vars['province']->value) {?>
          <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" data-pinyin="<?php echo $_smarty_tpl->tpl_vars['p']->value['pinyin'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['typename'];?>
</option>
          <?php } ?>
          <?php }?>
        </select>
        <select id="cBtn" name="cBtn" style="width:130px;">
          <option value="">--城市--</option>
        </select>
        <select id="xBtn" name="xBtn" style="width:130px;">
          <option value="">--区县--</option>
        </select>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>域名类型：</dt>
      <dd class="clearfix">
        <?php echo smarty_function_html_radios(array('name'=>"domaintype",'values'=>$_smarty_tpl->tpl_vars['domaintype']->value,'checked'=>$_smarty_tpl->tpl_vars['domaintypeChecked']->value,'output'=>$_smarty_tpl->tpl_vars['domaintypeNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

      </dd>
    </dl>
    <dl class="clearfix">
      <dt>绑定域名：</dt>
      <dd>
        <div class="input-prepend input-append">
          <span class="add-on">http://<?php echo $_smarty_tpl->tpl_vars['basehost']->value;?>
</span>
          <input class="input-mini" type="text" name="domain" id="domain" />
          <span class="add-on" style="display:none;"></span>
        </div>
      </dd>
    </dl>
  </form>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", subdomain = '<?php echo $_smarty_tpl->tpl_vars['basehost']->value;?>
', token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
', domainArr = <?php echo $_smarty_tpl->tpl_vars['domainArr']->value;?>
;<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $('.statusTips').tooltip();
    })
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
