<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:18:35
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\article\selfmediaAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:5178806795d5120dba22108-97368734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5787d5614f443f8f62cb292f280dd94b24e0bd' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\article\\selfmediaAdd.html',
      1 => 1561715346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5178806795d5120dba22108-97368734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pagetitle' => 0,
    'cssFile' => 0,
    'type' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'atlasSize' => 0,
    'atlasType' => 0,
    'proveList' => 0,
    'op_authorizeList' => 0,
    'ac_banner' => 0,
    'typeListArr' => 0,
    'type2ListArr' => 0,
    'type4ListArr' => 0,
    'type42ListArr' => 0,
    'type22ListArr' => 0,
    'fieldListArr' => 0,
    'action' => 0,
    'adminPath' => 0,
    'cfg_staticPath' => 0,
    'cityid' => 0,
    'cityList' => 0,
    'id' => 0,
    'ac_field' => 0,
    'showreal' => 0,
    'stateChecked' => 0,
    'editstateChecked' => 0,
    'dopost' => 0,
    'token' => 0,
    'username' => 0,
    'userid' => 0,
    'typename' => 0,
    'type2name' => 0,
    'mb_type' => 0,
    'ac_name' => 0,
    'ac_profile' => 0,
    'fieldname' => 0,
    'ac_photo' => 0,
    'cfg_attachment' => 0,
    'imglist' => 0,
    'ac_addrid' => 0,
    'mb_name' => 0,
    'type4name' => 0,
    'type42name' => 0,
    'mb_level' => 0,
    'mb_code' => 0,
    'mb_license' => 0,
    'op_name' => 0,
    'op_idcard' => 0,
    'op_idcardfront' => 0,
    'op_phone' => 0,
    'op_email' => 0,
    'op_authorize' => 0,
    'type22name' => 0,
    'org_major_license_type' => 0,
    'org_major_license' => 0,
    'outer' => 0,
    'prove' => 0,
    'state' => 0,
    'stateNames' => 0,
    'click' => 0,
    'weight' => 0,
    'editstate' => 0,
    'editstateNames' => 0,
    'editlog' => 0,
    'managerList' => 0,
    'item' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5120dbac0493_31733509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5120dbac0493_31733509')) {function content_5d5120dbac0493_31733509($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
.content {padding:20px 50px;}
.content table {width:100%;vertical-align:middle; color:#333; font-size:14px; border-left:1px solid #d7d7d7; border-bottom:1px solid #d7d7d7;}
.content table th {height:30px; text-align:center; vertical-align:middle; font-weight:500; border:1px solid #d7d7d7; border-left:none; border-bottom:none; background:#ededed;}
.content table td {padding:5px; min-width:90px; text-align:center; vertical-align:middle; border:1px solid #d7d7d7; border-left:none; border-bottom:none; background:#fff;}
.content table td input {height:15px; margin:0;}
.content tbody > tr:nth-child(odd) > td {background-color: #f9f9f9;}
.content table tr.curr td {background: #eef6ff;}
.content table tr.cancel td, .content table tr.cancel td span {color:#eee !important;}
.content p {margin-top:30px;text-align: center;}
.open>.dropdown-menu {max-height:300px;overflow-y:auto;}
.editform dl textarea {width:400px;}
.input-tips-block {display: block;margin: 5px 0;vertical-align: middle; position: relative; padding: 0 10px 0 27px;line-height: 20px; font-size: 14px; color: #999;} 
.input-tips-block s {position:absolute; left:6px; top:2px; width:16px; height:16px; background:url(../../../static/images/admin/pubIcon.png) -19px -72px; filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity:0.5; opacity:0.5;}
.editform dl dt.multiple {line-height: 1.6;}
.group-title {padding: 15px 15px 0; color:#f3a93c;}
.group-title blockquote {border-left-color: #f3a93c;}
.variable {display: none;}
.variable.variable-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 {display: block;}
.updateData .name {display: inline-block;font-weight: bold;margin:5px 10px 10px 0;}
.updateData img {max-width: 400px;}
.editform hr {border-color: #b94a48;}
.gofoot a {width: 15px; height: 16px; display: inline-block; text-align: center; overflow: hidden; text-indent: -888em; vertical-align: middle;background: url(/static/images/admin/pubIcon.png?v=5) no-repeat;background-position: -19px -92px;}
.managerTable {padding:0 50px;}
.managerTable .info {margin-left:10px;width:200px;display: inline-block;white-space: nowrap;text-overflow:ellipsis;overflow: hidden;}
.managerTable .info.error {color:#f60;}
.managerTable .info.success {color:#00CC66;}
</style>
<?php echo '<script'; ?>
>
var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = "<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
",  //缩略图配置
	atlasSize = <?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
, atlasType = "<?php echo $_smarty_tpl->tpl_vars['atlasType']->value;?>
", atlasMax = 0;  //图集配置

var imglist = {
    "prove": <?php echo $_smarty_tpl->tpl_vars['proveList']->value;?>
,
    "op_authorize": <?php echo $_smarty_tpl->tpl_vars['op_authorizeList']->value;?>
,
    "ac_banner": <?php echo $_smarty_tpl->tpl_vars['ac_banner']->value;?>

  }, 
  typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, 
  type2ListArr = <?php echo $_smarty_tpl->tpl_vars['type2ListArr']->value;?>
, 
  type4ListArr = <?php echo $_smarty_tpl->tpl_vars['type4ListArr']->value;?>
, 
  type42ListArr = <?php echo $_smarty_tpl->tpl_vars['type42ListArr']->value;?>
, 
  type22ListArr = <?php echo $_smarty_tpl->tpl_vars['type22ListArr']->value;?>
, 
  fieldListArr = <?php echo $_smarty_tpl->tpl_vars['fieldListArr']->value;?>
, 
  action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', 
  modelType = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
',
	cfg_term = "pc", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
var cityid = <?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
, cityList = <?php echo $_smarty_tpl->tpl_vars['cityList']->value;?>
;
var id = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
var type = <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
;
var detail = {
  ac_field: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['ac_field']->value)===null||$tmp==='' ? 0 : $tmp);?>

};
<?php echo '</script'; ?>
>
</head>

<body>
<!-- <div class="btn-group config-nav" data-toggle="buttons-radio" style="margin-bottom:15px;">
  <button type="button" class="btn active" data-type="all">全部信息</button>
  <button type="button" class="btn" data-type="ac">账号信息</button>
  <button type="button" class="btn" data-type="op">运营者信息</button>
  <button type="button" class="btn" data-type="auditLog">审核记录</button>
</div> -->
<?php if ($_smarty_tpl->tpl_vars['showreal']->value) {?>
<div class="alert alert-danger gofoot" style="margin:10px 70px 10px 10px;">本页显示该自媒体账号当前资料</div>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['stateChecked']->value==1&&$_smarty_tpl->tpl_vars['editstateChecked']->value==0) {?>
<div class="alert alert-danger gofoot" style="margin:10px 70px 10px 10px;"><button type="button" class="close" data-dismiss="alert">×</button>有新的申请待处理：(当前不可编辑资料)&nbsp;&nbsp;<a href="#newupdate"></a></div>
<?php }?>
<?php }?>
<div class="btn-group config-nav" data-toggle="buttons-radio" style="margin-bottom:15px;">
  <button type="button" class="btn active" data-type="info">基本信息</button>
  <button type="button" class="btn" data-type="manager">子管理员</button>
  <?php if ($_smarty_tpl->tpl_vars['id']->value) {?><button type="button" class="btn" data-type="custype" id="custype">自定义分类</button><?php }?>
</div>
<form action="" method="post" name="editform" id="editform" class="editform">
<div class="item">
    <input type="hidden" name="dopost" id="dopost" value="<?php echo $_smarty_tpl->tpl_vars['dopost']->value;?>
" />
    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
    <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
    <dl class="clearfix">
      <dt><label for="user">管理会员：</label></dt>
      <dd style="position:static;">
        <input class="input-large" type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" autocomplete="off" />
        <input type="hidden" name="userid" id="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
        <span class="input-tips" style="display:inline-block;"><s></s>此会员可以管理自媒体信息</span>
        <div id="companyList" class="popup_key"></div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>入驻类型：</dt>
      <dd class="dropdown-box" style="overflow:visible;" data-type="type">
        <div class="btn-group" id="typeBtn" style="margin-left:10px;">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['typename']->value;?>
<span class="caret"></span></button>
        </div>
        <input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
        <span class="input-tips"><s></s>请选择入驻类型</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-2">
      <dt>媒体类型：</dt>
      <dd class="dropdown-box" style="overflow:visible;" data-type="">
        <div class="btn-group" id="type2Btn" style="margin-left:10px;">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['type2name']->value;?>
<span class="caret"></span></button>
        </div>
        <input type="hidden" name="mb_type" id="type2_mb_type" value="<?php echo $_smarty_tpl->tpl_vars['mb_type']->value;?>
" />
        <span class="input-tips"><s></s>媒体类型</span>
      </dd>
    </dl>
    <!-- 账号信息 s -->
    <dl class="clearfix">
      <dt><label for="ac_name">自媒体名称：</label></dt>
      <dd>
        <input class="input-xlarge" type="text" name="ac_name" id="ac_name" maxlength="10" data-regex=".{1,10}" value="<?php echo $_smarty_tpl->tpl_vars['ac_name']->value;?>
" />
        <span class="input-tips"><s></s>请输入自媒体名称 1-10个字</span>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="ac_profile">自媒体介绍：</label></dt>
      <dd>
        <input class="input-xxlarge" type="text" name="ac_profile" id="ac_profile" maxlength="30" data-regex=".{1,30}" value="<?php echo $_smarty_tpl->tpl_vars['ac_profile']->value;?>
" />
        <span class="input-tips"><s></s>请输入自媒体介绍 1-25个字</span>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>自媒体领域：</dt>
      <dd class="dropdown-box" style="overflow:visible;" data-type="field">
        <div class="btn-group" id="fieldBtn" style="margin-left:10px;">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['fieldname']->value;?>
<span class="caret"></span></button>
        </div>
        <input type="hidden" name="ac_field" id="ac_field" value="<?php echo $_smarty_tpl->tpl_vars['ac_field']->value;?>
" />
        <span class="input-tips"><s></s>请选择领域</span>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>头像：</dt>
      <dd class="thumb clearfix listImgBox">
        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['ac_photo']->value!='') {?> hide<?php }?>" id="filePicker1" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
        <?php if ($_smarty_tpl->tpl_vars['ac_photo']->value!='') {?>
        <ul id="listSection1" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['ac_photo']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['ac_photo']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['ac_photo']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
        <?php } else { ?>
        <ul id="listSection1" class="listSection thumblist clearfix"></ul>
        <?php }?>
        <input type="hidden" name="ac_photo" value="<?php echo $_smarty_tpl->tpl_vars['ac_photo']->value;?>
" class="imglist-hidden" id="ac_photo">
      </dd>
    </dl>
    <!-- 图集 -->
    <dl class="clearfix">
      <dt>幻灯片：</dt>
      <dd class="listImgBox hide">
        <div class="list-holder">
          <ul id="listSection2" class="clearfix listSection"></ul>
          <input type="hidden" name="imglist" value='<?php echo $_smarty_tpl->tpl_vars['imglist']->value;?>
' class="imglist-hidden">
        </div>
        <div class="btn-section clearfix">
          <div class="uploadinp filePicker" id="filePicker2" data-type="desc" data-count="6" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist="ac_banner"><div id="flasHolder"></div><span>添加图片</span></div>
          <div class="upload-tip">
            <p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
          </div>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>所在地：</label></dt>
      <dd style="overflow:visible;" id="addrList">
        <div class="btn-group" style="margin-left:10px;">
          <div class="cityName addrBtn" data-field="ac_addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['ac_addrid']->value,'split'=>' '),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ac_addrid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['ac_addrid']->value) {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['ac_addrid']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else { ?>请选择<?php }?></div>
        </div>
        <input type="hidden" name="ac_addrid" id="ac_addrid" value="<?php echo $_smarty_tpl->tpl_vars['ac_addrid']->value;?>
" />
        <input type="hidden" name="cityid" id="cityid" value="<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
" />
        <span class="input-tips"><s></s>请选择所在区域</span>
      </dd>
    </dl>
    <!-- 账号信息 e -->

    <!-- 主体信息 s -->
    <dl class="clearfix variable variable-2">
      <dt><label for="mb_name">媒体名称：</label></dt>
      <dd>
        <input class="input-xlarge" type="text" name="mb_name" id="mb_name1" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['mb_name']->value;?>
" />
        <span class="input-tips"><s></s>请输入自媒体名称</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-4">
      <dt><label for="mb_name">机构名称：</label></dt>
      <dd>
        <input class="input-xlarge" type="text" name="mb_name" id="mb_name2" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['mb_name']->value;?>
" />
        <span class="input-tips"><s></s>请输入机构名称</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-4">
      <dt>机构类型：</dt>
      <dd class="dropdown-box" style="overflow:visible;" data-type="">
        <div class="btn-group" id="type4Btn" style="margin-left:10px;">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['type4name']->value;?>
<span class="caret"></span></button>
        </div>
        <input type="hidden" name="mb_type" id="type4_mb_type" value="<?php echo $_smarty_tpl->tpl_vars['mb_type']->value;?>
" />
        <span class="input-tips"><s></s>机构类型</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-4">
      <dt>机构级别：</dt>
      <dd class="dropdown-box" style="overflow:visible;" data-type="">
        <div class="btn-group" id="type42Btn" style="margin-left:10px;">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['type42name']->value;?>
<span class="caret"></span></button>
        </div>
        <input type="hidden" name="mb_level" id="mb_level" value="<?php echo $_smarty_tpl->tpl_vars['mb_level']->value;?>
" />
        <span class="input-tips"><s></s>机构级别</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-2 variable-3 variable-4 variable-5">
      <dt><label for="mb_code">统一社会信用代码：</label></dt>
      <dd>
        <input class="input-xlarge" type="text" name="mb_code" id="mb_code" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['mb_code']->value;?>
" />
        <span class="input-tips"><s></s>仅支持营业执照副本或事业单位法人证书作为主体证件，其他如组织机构代码证等均不能作为入驻主体证件</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-2 variable-3 variable-4 variable-5">
      <dt class="multiple">营业执照或&nbsp;&nbsp;&nbsp;<br>事业单位&nbsp;&nbsp;&nbsp;<br>法人证书&nbsp;&nbsp;&nbsp;<br>副本扫描件：</dt>
      <dd class="thumb clearfix listImgBox">
        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['mb_license']->value!='') {?> hide<?php }?>" id="filePickermblicense" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
        <?php if ($_smarty_tpl->tpl_vars['mb_license']->value!='') {?>
        <ul id="listSectionmblicense" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_mblicense_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['mb_license']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['mb_license']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['mb_license']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
        <?php } else { ?>
        <ul id="listSectionmblicense" class="listSection thumblist clearfix"></ul>
        <?php }?>
        <input type="hidden" name="mb_license" value="<?php echo $_smarty_tpl->tpl_vars['mb_license']->value;?>
" class="imglist-hidden" id="mb_license">
      </dd>
    </dl>
    <!-- 主体信息 e -->

    <!-- 运营者信息 s -->
    <div class="group-title">
      <blockquote>
        <p id="group-op-title">运营者联系信息</p>
      </blockquote>
    </div>
    <dl class="clearfix variable variable-2 variable-3 variable-4 variable-5">
      <dt><label for="op_name">运营者姓名：</label></dt>
      <dd>
        <input class="input-small" type="text" name="op_name" id="op_name" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['op_name']->value;?>
" />
        <span class="input-tips"><s></s>运营者姓名</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-2 variable-3 variable-4 variable-5">
      <dt><label for="op_idcard">运营者身份证号码：</label></dt>
      <dd>
        <input class="input-large" type="text" name="op_idcard" id="op_idcard" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['op_idcard']->value;?>
" />
        <span class="input-tips"><s></s>请输入运营者身份证号码</span>
      </dd>
    </dl>
    <dl class="clearfix variable variable-2 variable-3 variable-4 variable-5">
      <dt class="multiple">运营者手持&nbsp;&nbsp;&nbsp;<br>身份证照片：</dt>
      <dd class="thumb clearfix listImgBox">
        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['op_idcardfront']->value!='') {?> hide<?php }?>" id="filePickeropidcardfront" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
        <?php if ($_smarty_tpl->tpl_vars['op_idcardfront']->value!='') {?>
        <ul id="listSectionopidcardfront" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_opidcardfront_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['op_idcardfront']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['op_idcardfront']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['op_idcardfront']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
        <?php } else { ?>
        <ul id="listSectionopidcardfront" class="listSection thumblist clearfix"></ul>
        <?php }?>
        <input type="hidden" name="op_idcardfront" value="<?php echo $_smarty_tpl->tpl_vars['op_idcardfront']->value;?>
" class="imglist-hidden" id="op_idcardfront">
      </dd>
    </dl>

    <dl class="clearfix">
      <dt><label for="op_phone">联系手机：</label></dt>
      <dd>
        <input class="input-xlarge" type="text" name="op_phone" id="op_phone" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['op_phone']->value;?>
" />
        <span class="input-tips"><s></s>请输入联系手机</span>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="op_email">联系邮箱：</label></dt>
      <dd>
        <input class="input-xlarge" type="text" name="op_email" id="op_email" data-regex="\w+((-w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['op_email']->value;?>
" />
        <span class="input-tips"><s></s>请输入联系邮箱</span>
      </dd>
    </dl>
    
    <dl class="clearfix variable variable-2 variable-3 variable-4 variable-5">
      <dt>机构授权书扫描件：</dt>
      <dd class="thumb clearfix listImgBox">
        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['op_authorize']->value!='') {?> hide<?php }?>" id="filePickerauthorize" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
        <?php if ($_smarty_tpl->tpl_vars['op_authorize']->value!='') {?>
        <ul id="listSectionauthorize" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_authorize_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['op_authorize']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['op_authorize']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['op_authorize']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
        <?php } else { ?>
        <ul id="listSectionauthorize" class="listSection thumblist clearfix"></ul>
        <?php }?>
        <input type="hidden" name="op_authorize" value="<?php echo $_smarty_tpl->tpl_vars['op_authorize']->value;?>
" class="imglist-hidden" id="op_authorize">
      </dd>
    </dl>

    <!-- 运营者信息 e -->
  
    <!-- 专业资质 s -->
    <!-- 运营者信息 s -->
    <div class="variable variable-2">
      <div class="group-title">
        <blockquote>
          <p>专业资质</p>
        </blockquote>
      </div>
      <dl class="clearfix">
        <dt>资质类型：</dt>
        <dd class="dropdown-box" style="overflow:visible;" data-type="">
          <div class="btn-group" id="type22Btn" style="margin-left:10px;">
            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['type22name']->value;?>
<span class="caret"></span></button>
          </div>
          <input type="hidden" name="org_major_license_type" id="org_major_license_type" value="<?php echo $_smarty_tpl->tpl_vars['org_major_license_type']->value;?>
" />
          <span class="input-tips"><s></s>媒体专业资质</span>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt class="multiple">资质扫描件：</dt>
        <dd class="thumb clearfix listImgBox">
          <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['org_major_license']->value!='') {?> hide<?php }?>" id="filePickerorg_major_license" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
          <?php if ($_smarty_tpl->tpl_vars['org_major_license']->value!='') {?>
          <ul id="listSectionorg_major_license" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_org_major_license_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['org_major_license']->value);?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['org_major_license']->value);?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['org_major_license']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
          <?php } else { ?>
          <ul id="listSectionorg_major_license" class="listSection thumblist clearfix"></ul>
          <?php }?>
          <input type="hidden" name="org_major_license" value="<?php echo $_smarty_tpl->tpl_vars['org_major_license']->value;?>
" class="imglist-hidden" id="org_major_license">
        </dd>
      </dl>
    </div>

    <!-- 辅助资料 -->
    <dl class="clearfix">
      <dt><label for="outer">外平台信息：</label></dt>
      <dd>
        <textarea name="outer" id="outer" rows="4" placeholder="10~200汉字之内" data-regex=".{0,200}"><?php echo $_smarty_tpl->tpl_vars['outer']->value;?>
</textarea>
        <span class="input-tips"><s></s>请输入外平台信息</span>
        <span class="input-tips-block"><s></s>请填写您在其他平台（如头条号、企鹅号、百家号、一点号等）的账号信息，有助于平台了解您的创作能力，更快通过您的入驻审核/转正</span>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>证明材料：</dt>
      <dd class="listImgBox hide">
        <div class="list-holder">
          <ul id="listSectionprove" class="clearfix listSection"></ul>
          <input type="hidden" name="prove" value='<?php echo $_smarty_tpl->tpl_vars['prove']->value;?>
' class="imglist-hidden">
        </div>
        <div class="btn-section clearfix">
          <div class="uploadinp filePicker" id="filePickerprove" data-type="desc" data-count="5" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist="prove"><div id="flasHolder"></div><span>添加图片</span></div>
          <div class="upload-tip">
            <p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
          </div>
        </div>
        <span class="input-tips-block variable variable-1 variable-4 variable-5"><s></s>财经、医疗相关类型自媒体必须上传相关执业证书 ；可上传您在其它自媒体平台后台的个人资料页截图；附件最多上传5个。</span>
        <span class="input-tips-block variable variable-2"><s></s>若您的媒体号与专业资质的归属方属于旗下网站、品牌、栏目等关系，则必须上传关系证明和资质授权使用证明；附件最多上传5个。</span>
        <span class="input-tips-block variable variable-3"><s></s>可上传您的官网网站截图，您在其它自媒体平台后台的个人资料页截图；附件最多上传5个。</span>
      </dd>
    </dl>
    <?php if (!$_smarty_tpl->tpl_vars['showreal']->value) {?>
    <dl class="clearfix">
      <dt><label>账号状态：</label></dt>
      <dd class="radio">
        <?php echo smarty_function_html_radios(array('name'=>"state",'values'=>$_smarty_tpl->tpl_vars['state']->value,'checked'=>$_smarty_tpl->tpl_vars['stateChecked']->value,'output'=>$_smarty_tpl->tpl_vars['stateNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="click">浏览次数：</label></dt>
      <dd>
        <span><input class="input-mini" type="number" name="click" min="0" id="click" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['click']->value)===null||$tmp==='' ? 0 : $tmp);?>
" /></span>
        <label class="ml30" for="weight">排序：</label><input class="input-mini" type="number" name="weight" id="weight" min="0" data-regex="[0-9]\d*" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['weight']->value)===null||$tmp==='' ? 0 : $tmp);?>
" />
        <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>
      </dd>
    </dl>
    <?php if ($_smarty_tpl->tpl_vars['stateChecked']->value==1&&$_smarty_tpl->tpl_vars['editstateChecked']->value==0) {?>
    <hr>
    <dl class="clearfix" id="newupdate">
      <dt><label>申请更新资料：</label></dt>
      <dd class="radio">
        <?php echo smarty_function_html_radios(array('name'=>"editstate",'values'=>$_smarty_tpl->tpl_vars['editstate']->value,'checked'=>$_smarty_tpl->tpl_vars['editstateChecked']->value,'output'=>$_smarty_tpl->tpl_vars['editstateNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

        <span class="input-tips" style="display:inline-block"><s></s>同意后相关信息将更新为最新资料</span>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>申请时间：</label></dt>
      <dd style="padding-top:10px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['editlog']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>查看当前资料：</label></dt>
      <dd style="padding-top:10px;"><a href="selfmediaAdd.php?dopost=edit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&showreal=1" id="lookNow" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">点击查看</a></dd>
    </dl>
    
    <?php }?>

    <?php }?>
  
</div>
<div class="item hide">
  <div class="managerTable">
    <table class="table table-hover table-bordered table-striped" id="managerTable">
      <thead>
        <tr>
          <th>用户</th>
          <th>添加时间</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['managerList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['userid'];?>
">
          <td>[<?php echo $_smarty_tpl->tpl_vars['item']->value['userid'];?>
]<a href="javascript:;" class="userinfo" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</a></td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['pubdate'],'%Y-%m-%d %H:%M:%S');?>
</td>
          <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
        </tr>
        <?php } ?>
      </tbody>
      <tbody>
        <tr>
          <td colspan="3" style="text-align:center;">
            <button type="button" class="btn btn-small addManager" data-type="trial">增加管理员</button>&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <input type="hidden" name="manager" value="" id="manager">
  <input type="hidden" name="delmanager" value="" id="delmanager">
</div>
<?php if (!$_smarty_tpl->tpl_vars['showreal']->value) {?>
    <dl class="clearfix formbtn">
      <dt>&nbsp;</dt>
      <dd><button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button></dd>
    </dl>
<?php }?>
</form>

<?php echo '<script'; ?>
 type="text/templates" id="trTemp">
  <tr>
  <td><input type="number" min="1" class="uid" placeholder="请输入用户id" /><span class="info"></span></td>
    <td></td>
    <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
  </tr>
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
