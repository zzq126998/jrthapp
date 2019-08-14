<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:36:27
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\car\carAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:17744677965d53659baeef59-08975504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03032cfcddaf3995b6dc54fdcbfe44a3bf1870c5' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\car\\carAdd.html',
      1 => 1561028579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17744677965d53659baeef59-08975504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pagetitle' => 0,
    'cssFile' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'atlasSize' => 0,
    'atlasType' => 0,
    'addrid' => 0,
    'adminPath' => 0,
    'mapCity' => 0,
    'pics' => 0,
    'cityid' => 0,
    'cityList' => 0,
    'location' => 0,
    'brandListArr' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'brandname' => 0,
    'brand' => 0,
    'model' => 0,
    'modelArrCar' => 0,
    'row' => 0,
    'title' => 0,
    'litpic' => 0,
    'cfg_attachment' => 0,
    'typeopt' => 0,
    'usertype' => 0,
    'typenames' => 0,
    'user' => 0,
    'userid' => 0,
    'username' => 0,
    'contact' => 0,
    'price' => 0,
    'totalprice' => 0,
    'tax' => 0,
    'ckprice' => 0,
    'colorname' => 0,
    'cardtime' => 0,
    'mileage' => 0,
    'natureOpt' => 0,
    'nature' => 0,
    'natureNames' => 0,
    'stagingOpt' => 0,
    'staging' => 0,
    'stagingNames' => 0,
    'downpaymentArr' => 0,
    'val' => 0,
    'downpayment' => 0,
    'seeway' => 0,
    'transfertimes' => 0,
    'njendtime' => 0,
    'jqxendtime' => 0,
    'businessendtime' => 0,
    'note' => 0,
    'caratlasMax' => 0,
    'click' => 0,
    'weight' => 0,
    'stateopt' => 0,
    'state' => 0,
    'statenames' => 0,
    'flagval' => 0,
    'flaglist' => 0,
    'flag' => 0,
    'editorFile' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d53659bbe7091_22269008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d53659bbe7091_22269008')) {function content_5d53659bbe7091_22269008($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_checkboxes.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = "<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
",  //缩略图配置
	atlasSize = <?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
, atlasType = "<?php echo $_smarty_tpl->tpl_vars['atlasType']->value;?>
", atlasMax = 0;  //图集配置
	addrid = <?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
, modelType = "car", 
	cfg_term = "pc", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
var mapCity = "<?php echo $_smarty_tpl->tpl_vars['mapCity']->value;?>
";
var imglist = {"imgpics": <?php echo $_smarty_tpl->tpl_vars['pics']->value;?>
};
var cityid = <?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
, cityList = <?php echo $_smarty_tpl->tpl_vars['cityList']->value;?>
,addr = <?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
, szd = <?php echo $_smarty_tpl->tpl_vars['location']->value;?>
;
var brandListArr = <?php echo $_smarty_tpl->tpl_vars['brandListArr']->value;?>
;
<?php echo '</script'; ?>
>
<style>
#videoPreview video {width:200px;}
#bannerBox .list-holder li {width: 115px !important;height: 86px;}
#bannerBox .list-holder li .li-thumb {margin: -5px 0 0 0 !important;}
#bannerBox .list-holder li a.li-rm {margin: -17px -14px 0 0 !important;}
</style>
</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="dopost" id="dopost" value="<?php echo $_smarty_tpl->tpl_vars['dopost']->value;?>
" />
  <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  
  <dl class="clearfix">
    <dt><label for="brand">品牌分类：</label></dt>
    <dd style="overflow:visible;">
      <div class="btn-group" id="brandBtn" style="margin-left:10px;">
        <button class="btn dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['brandname']->value;?>
<span class="caret"></span></button>
      </div>
      <input type="hidden" name="brand" id="brand" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
" />
      <span class="input-tips"><s></s>请选择品牌分类</span>
    </dd>
  </dl>

  <?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['model']->value) {?>
  <dl class="clearfix" id="carmodel">
    <dt><label for="model">品牌型号：</label></dt>
    <dd>
      <span id="modelList">
        <select name="model" id="model" class="input-xxlarge">
            <option value="">选择分类</option>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modelArrCar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['model']->value==$_smarty_tpl->tpl_vars['row']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</option>
            <?php } ?>
        </select>
      </span>
      <span class="input-tips"><s></s>请选择品牌型号</span>
    </dd>
  </dl>
  <?php } else { ?>
  <dl class="clearfix hide" id="carmodel">
    <dt><label for="model">品牌型号：</label></dt>
    <dd>
      <span id="modelList">
        <select name="model" id="model" class="input-large">

        </select>
      </span>
      <span class="input-tips"><s></s>请选择品牌型号</span>
    </dd>
  </dl>
  <?php }?>

  <dl class="clearfix">
    <dt><label for="title">标题：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" maxlength="100" data-regex=".{2,100}" />
      <span class="input-tips"><s></s>请输入标题，2-60位</span>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="addr">所在区域：</label></dt>
    <dd>
      <div class="cityName addrBtn" data-field="addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addrid']->value,'split'=>' '),$_smarty_tpl);?>
" data-id=<?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
>
        <?php if ($_smarty_tpl->tpl_vars['addrid']->value!=''&&$_smarty_tpl->tpl_vars['addrid']->value!="''") {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addrid']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else { ?>请选择<?php }?>
      </div>
      <input type="hidden" name="addrid" id="addrid" value=<?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
>
      <input type="hidden" name="cityid" id="cityid" value=<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt>缩略图：</dt>
    <dd class="thumb clearfix listImgBox">
      <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?> hide<?php }?>" id="filePicker1" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
      <?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?>
      <ul id="listSection1" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['litpic']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['litpic']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
      <?php } else { ?>
      <ul id="listSection1" class="listSection thumblist clearfix"></ul>
      <?php }?>
      <input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
" class="imglist-hidden" id="litpic_">
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label>来源：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"usertype",'values'=>$_smarty_tpl->tpl_vars['typeopt']->value,'checked'=>$_smarty_tpl->tpl_vars['usertype']->value,'output'=>$_smarty_tpl->tpl_vars['typenames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>

  <?php if ($_smarty_tpl->tpl_vars['usertype']->value==0) {?>
  <div id="userType0">
  <?php } else { ?>
  <div id="userType0" class="hide">
  <?php }?>
    <dl class="clearfix">
      <dt><label for="users">对应会员：</label></dt>
      <dd style="position:static;">
        <input class="input-large" type="text" name="users" id="users" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" autocomplete="off" />
        <span class="input-tips"><s></s>请从列表中选择个人会员</span>
        <div id="userListP" class="popup_key"></div>
        <div id="userPhoneP"></div>
      </dd>
    </dl>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
  <div id="userType1">
  <?php } else { ?>
  <div id="userType1" class="hide">
  <?php }?>
    <dl class="clearfix">
      <dt><label for="user">顾问：</label></dt>
      <dd style="position:static;">
        <input class="input-medium" type="text" name="user" id="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" autocomplete="off" />
        <input type="hidden" name="userid" id="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
        <span class="input-tips"><s></s>请从列表中选择顾问</span>
        <div id="userList" class="popup_key"></div>
        <div id="userPhone"></div>
      </dd>
    </dl>
  </div>

  <dl class="clearfix">
    <dt><label for="username">联系人：</label></dt>
    <dd>
      <input class="input-large" type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" data-regex=".{2,10}" maxlength="10" />
      <span class="input-tips"><s></s>请输入联系人，2-10位</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="contact">联系电话：</label></dt>
    <dd>
      <input class="input-large" type="text" name="contact" id="contact" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
" data-regex=".{7,20}" maxlength="20" />
      <span class="input-tips"><s></s>请输入联系电话，7-20位</span>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt>价格：</dt>
    <dd>
      <div class="input-prepend input-append" style="margin-bottom:0">
        <span class="add-on">市场价：</span>
        <input class="input-mini" id="price" name="price" type="text" data-regex="0|\d*\.?\d+" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
        <span class="add-on">万</span>
      </div>&nbsp;&nbsp;
      <div class="input-prepend input-append" style="margin-bottom:0">
        <span class="add-on">新车总价：</span>
        <input class="input-mini" id="totalprice" name="totalprice" type="text" data-regex="0|\d*\.?\d+" value="<?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
">
        <span class="add-on">万</span>
        <span class="radio">
        <label><input type="checkbox" name="tax" value="1" <?php if ($_smarty_tpl->tpl_vars['tax']->value==1) {?>checked="checked"<?php }?>>含税</label></span>
      </div>&nbsp;&nbsp;
      <div class="input-prepend input-append" style="margin-bottom:0">
          <span class="add-on">参考价：</span>
          <input class="input-large" type="text" name="ckprice" id="ckprice" value="<?php echo $_smarty_tpl->tpl_vars['ckprice']->value;?>
" maxlength="10" />
        </div>&nbsp;&nbsp;
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="colorname">颜色：</label></dt>
    <dd>
      <input class="input-large" type="text" name="colorname" id="colorname" value="<?php echo $_smarty_tpl->tpl_vars['colorname']->value;?>
" maxlength="10" data-regex=".{1,10}" />
      <span class="input-tips"><s></s>请输入颜色，1-10位</span>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="location">车牌所在地：</label></dt>
    <dd style="overflow: visible; padding-left: 140px;">
      <select class="chosen-select" id="location" name="location" style="width: auto; min-width: 150px;"></select>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="cardtime">上牌时间：</label></dt>
    <dd>
      <input class="input-medium" id="cardtime" name="cardtime" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cardtime']->value;?>
" autocomplete="off" />
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="mileage">行驶里程：</label></dt>
    <dd>
      <div class="input-prepend input-append">
        <input class="input-mini" type="number" name="mileage" id="mileage" value="<?php echo $_smarty_tpl->tpl_vars['mileage']->value;?>
" data-regex="0|\d*\.?\d+">
        <span class="add-on">万公里</span>
      </div>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="nature">车辆性质：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"nature",'values'=>$_smarty_tpl->tpl_vars['natureOpt']->value,'checked'=>$_smarty_tpl->tpl_vars['nature']->value,'output'=>$_smarty_tpl->tpl_vars['natureNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="staging">可分期：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"staging",'values'=>$_smarty_tpl->tpl_vars['stagingOpt']->value,'checked'=>$_smarty_tpl->tpl_vars['staging']->value,'output'=>$_smarty_tpl->tpl_vars['stagingNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>

 <dl>
  <?php if ($_smarty_tpl->tpl_vars['staging']->value==1) {?>
  <div id="downpayment1">
  <?php } else { ?>
  <div id="downpayment1" class="hide">
  <?php }?>
    <dt><label for="downpayment">首付比例：</label></dt>
    <dd>
      <span id="downpaymentList">
        <select name="downpayment" id="downpayment" class="input-large">
          <option value="">选择比例</option>
          <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['downpaymentArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['downpayment']->value==$_smarty_tpl->tpl_vars['val']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
          <?php } ?>
        </select>
      </span>
      <span class="input-tips"><s></s>请选择首付比例</span>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="seeway">看车方式：</label></dt>
    <dd>
      <input class="input-large" type="text" name="seeway" id="seeway" value="<?php echo $_smarty_tpl->tpl_vars['seeway']->value;?>
" maxlength="100" data-regex=".{2,100}" />
      <span class="input-tips"><s></s>请输入看车方式</span>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="transfertimes">过户次数：</label></dt>
    <dd>
      <div class="input-prepend input-append">
        <input class="input-mini" type="number" name="transfertimes" id="transfertimes" value="<?php echo $_smarty_tpl->tpl_vars['transfertimes']->value;?>
" data-regex="0|\d*\.?\d+">
      </div>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="njendtime">年检到期时间：</label></dt>
    <dd>
      <input class="input-medium" id="njendtime" name="njendtime" type="text" value="<?php echo $_smarty_tpl->tpl_vars['njendtime']->value;?>
" autocomplete="off" />
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="jqxendtime">交强险到期时间：</label></dt>
    <dd>
      <input class="input-medium" id="jqxendtime" name="jqxendtime" type="text" value="<?php echo $_smarty_tpl->tpl_vars['jqxendtime']->value;?>
" autocomplete="off" />
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="businessendtime">商业险到期时间：</label></dt>
    <dd>
      <input class="input-medium" id="businessendtime" name="businessendtime" type="text" value="<?php echo $_smarty_tpl->tpl_vars['businessendtime']->value;?>
" autocomplete="off" />
    </dd>
  </dl>

  <dl class="clearfix">
    <dt>车况说明：</dt>
    <dd><textarea class="input-xxlarge" name="note" id="note" rows="10"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</textarea></dd>
  </dl>

  <dl class="clearfix">
    <dt>店铺图集：</dt>
    <dd class="listImgBox hide">
      <div class="list-holder">
        <ul id="listSection4" class="clearfix listSection piece"></ul>
        <input type="hidden" name="pics" value='<?php echo $_smarty_tpl->tpl_vars['pics']->value;?>
' class="imglist-hidden">
      </div>
      <div class="btn-section clearfix">
        <div class="uploadinp filePicker" id="filePicker4" data-type="album" data-count="<?php echo $_smarty_tpl->tpl_vars['caratlasMax']->value;?>
" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist="imgpics"><div id="flasHolder"></div><span>添加图片</span></div>
        <div class="upload-tip">
          <p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
        </div>
      </div>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label for="click">浏览次数：</label></dt>
    <dd>
      <span><input class="input-mini" type="number" name="click" min="0" id="click" value="<?php echo $_smarty_tpl->tpl_vars['click']->value;?>
" /></span>
      <label class="ml30" for="weight">排序：</label><input class="input-mini" type="number" name="weight" id="weight" min="0" data-regex="[1-9]\d*" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
      <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>
    </dd>
  </dl>
    <dl class="clearfix">
      <dt><label for="state">显示状态：</label></dt>
      <dd class="radio">
        <?php echo smarty_function_html_radios(array('name'=>"state",'values'=>$_smarty_tpl->tpl_vars['stateopt']->value,'checked'=>$_smarty_tpl->tpl_vars['state']->value,'output'=>$_smarty_tpl->tpl_vars['statenames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="flag">附加属性：</label></dt>
      <dd class="radio">
        <?php echo smarty_function_html_checkboxes(array('name'=>'flag','values'=>$_smarty_tpl->tpl_vars['flagval']->value,'output'=>$_smarty_tpl->tpl_vars['flaglist']->value,'selected'=>$_smarty_tpl->tpl_vars['flag']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

      </dd>
    </dl>

  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><input class="btn btn-large btn-success" type="submit" name="submit" id="btnSubmit" value="确认提交" /></dd>
  </dl>
</form>

<?php echo $_smarty_tpl->tpl_vars['editorFile']->value;?>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
