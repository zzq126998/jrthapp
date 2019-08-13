<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:34:36
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\live\liveAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:8578730855d51087c120181-77133014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ef3a0d6af0c15e3f33efc56202109dcda5efe2' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\live\\liveAdd.html',
      1 => 1561715346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8578730855d51087c120181-77133014',
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
    'imglist' => 0,
    'typeListArr' => 0,
    'action' => 0,
    'adminPath' => 0,
    'cfg_staticPath' => 0,
    'cityid' => 0,
    'cityList' => 0,
    'pulltype' => 0,
    'pullurl_pc' => 0,
    'pullurl_touch' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'title' => 0,
    'color' => 0,
    'typename' => 0,
    'typeid' => 0,
    'click' => 0,
    'weight' => 0,
    'minute' => 0,
    'second' => 0,
    'litpic' => 0,
    'cfg_attachment' => 0,
    'pubdate' => 0,
    'wayArr' => 0,
    'way' => 0,
    'wayNames' => 0,
    'livetypeArr' => 0,
    'livetype' => 0,
    'livetypeNames' => 0,
    'password' => 0,
    'startmoney' => 0,
    'endmoney' => 0,
    'flowArr' => 0,
    'flow' => 0,
    'flowNames' => 0,
    'stateList' => 0,
    'state' => 0,
    'pulltypeArr' => 0,
    'pulltypeNames' => 0,
    'menuArr' => 0,
    'k' => 0,
    'cfg' => 0,
    'adv' => 0,
    'note' => 0,
    'editorFile' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d51087c1bc5d6_16158750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d51087c1bc5d6_16158750')) {function content_5d51087c1bc5d6_16158750($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_options.php';
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
	//imglist = <?php echo $_smarty_tpl->tpl_vars['imglist']->value;?>
,
   var typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', modelType = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
',
	cfg_term = "pc", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
//var cityid = <?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
, cityList = <?php echo $_smarty_tpl->tpl_vars['cityList']->value;?>
;
var pulltype = <?php echo $_smarty_tpl->tpl_vars['pulltype']->value;?>
;
var pullurl_pc = '<?php echo $_smarty_tpl->tpl_vars['pullurl_pc']->value;?>
';
var pullurl_touch = '<?php echo $_smarty_tpl->tpl_vars['pullurl_touch']->value;?>
';
<?php echo '</script'; ?>
>
<style>
.placeholder {height: 33px;width:178px;margin-bottom: 10px;border:1px solid #ccc;border-radius:4px;}
.menu .sort {cursor: move;}
.menu .url {margin-left: -1px !important;}
.menu .btn {cursor: pointer;}
.menu .add {margin-left: 10px !important;}
.menu .dn {color:#999;}
.menu .dn.active {color:#333;}
.menu .input-append .active, .input-prepend .active {border-color: #ccc;}
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
    <dt><label for="title">直播标题：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="title" id="title" data-regex=".{1,60}" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
      <div class="color_pick"><em style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
;"></em></div>
      <span class="input-tips"><s></s>请输入直播标题，1-60个汉字</span>
      <input type="hidden" name="color" id="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" />
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>直播分类：</dt>
    <dd style="overflow:visible;">
      <div class="btn-group" id="typeBtn" style="margin-left:10px;">
        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['typename']->value;?>
<span class="caret"></span></button>
      </div>
      <input type="hidden" name="typeid" id="typeid" value="<?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
" />
      <span class="input-tips"><s></s>请选择信息分类</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="click">浏览次数：</label></dt>
    <dd>
      <span><input class="input-mini" type="number" name="click" min="0" id="click" value="<?php echo $_smarty_tpl->tpl_vars['click']->value;?>
" /></span>
      <!--<label class="ml30" for="weight">排序：</label><input class="input-mini" type="number" name="weight" id="weight" min="1" data-regex="[1-9]\d*" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
      <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>-->
    </dd>
  </dl>
  <?php if (!isset($_smarty_tpl->tpl_vars['state'])) $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['state']->value = 2) {?>
  <dl class="clearfix">
    <dt><label for="click">直播时长：</label></dt>
    <dd>
      <span>
        <input class="input-mini" type="number" name="minute" min="0" id="minute" value="<?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
" />分钟
        <input class="input-mini" type="number" name="second" min="0" id="second" value="<?php echo $_smarty_tpl->tpl_vars['second']->value;?>
" />秒
      </span>
    </dd>
  </dl>
  <?php }?>
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
&type=small" data-val="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection1" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
" class="imglist-hidden" id="litpic">
		</dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="writer">发布时间：</label></dt>
    <dd>
        <div class="input-append form_datetime" style="margin: 0;">
          <input class="input-medium" type="text" name="pubdate" id="pubdate" date-language="ch" value="<?php echo $_smarty_tpl->tpl_vars['pubdate']->value;?>
" />
          <span class="add-on"><i class="icon-time"></i></span>
        </div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label>横竖屏：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"way",'values'=>$_smarty_tpl->tpl_vars['wayArr']->value,'checked'=>$_smarty_tpl->tpl_vars['way']->value,'output'=>$_smarty_tpl->tpl_vars['wayNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
	<dl class="clearfix">
    <dt><label>直播类型：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"livetype",'values'=>$_smarty_tpl->tpl_vars['livetypeArr']->value,'checked'=>$_smarty_tpl->tpl_vars['livetype']->value,'output'=>$_smarty_tpl->tpl_vars['livetypeNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <?php if ($_smarty_tpl->tpl_vars['livetype']->value==1) {?>
  <dl class="clearfix" id="type1">
  <?php } else { ?>
  <dl class="clearfix hide" id="type1">
  <?php }?>
    <dt><label for="password">加密密码：</label></dt>
    <dd><input class="input-xxlarge" type="text" name="password" id="password" value="<?php if ($_smarty_tpl->tpl_vars['password']->value) {
echo $_smarty_tpl->tpl_vars['password']->value;
}?>" placeholder="填写密码" /><span class="input-tips"><s></s>请填写密码</span></dd>
  </dl>
  <?php if ($_smarty_tpl->tpl_vars['livetype']->value==2) {?>
  <dl class="clearfix" id="type2">
  <?php } else { ?>
  <dl class="clearfix hide" id="type2">
  <?php }?>
    <dt><label for="startmoney">开始收费：</label></dt>
    <dd>
    	<input class="input-medium" type="number" name="startmoney" id="startmoney" placeholder="请填写开始收费" value="<?php echo $_smarty_tpl->tpl_vars['startmoney']->value;?>
">
    	<span class="input-tips"><s></s>请填写开始收费</span>
    	<label class="ml30">请填写结束收费：<input class="input-medium" type="number" name="endmoney" id="endmoney" placeholder="请填写结束收费" value="<?php echo $_smarty_tpl->tpl_vars['endmoney']->value;?>
"><span class="input-tips"><s></s>请结束收费</span></label>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label>流畅度：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"flow",'values'=>$_smarty_tpl->tpl_vars['flowArr']->value,'checked'=>$_smarty_tpl->tpl_vars['flow']->value,'output'=>$_smarty_tpl->tpl_vars['flowNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <!--<dl class="clearfix">
    <dt>是否直播：</dt>
    <dd class="radio">
      <label for="state">
        <select name="state" id="state" class="input-medium">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['stateList']->value,'selected'=>$_smarty_tpl->tpl_vars['state']->value),$_smarty_tpl);?>

        </select>
      </label>
    </dd>
  </dl>-->
  <dl class="clearfix">
    <dt><label>拉流地址：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"pulltype",'values'=>$_smarty_tpl->tpl_vars['pulltypeArr']->value,'checked'=>$_smarty_tpl->tpl_vars['pulltype']->value,'output'=>$_smarty_tpl->tpl_vars['pulltypeNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <dl class="clearfix pullurlCon">
    <dt><label for="pullurl_pc">拉流地址(电脑端)：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="pullurl_pc" id="pullurl_pc" value="<?php echo $_smarty_tpl->tpl_vars['pullurl_pc']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pulltype']->value==0) {?> readonly=""<?php }?> />
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="pullurl_touch">拉流地址(移动端)：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="pullurl_touch" id="pullurl_touch" value="<?php echo $_smarty_tpl->tpl_vars['pullurl_touch']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pulltype']->value==0) {?> readonly=""<?php }?> />
    </dd>
  </dl>
  <!-- 正文 -->
  <dl class="clearfix">
    <dt><label>直播菜单：</label></dt>
    <dd>
      <ul class="menu" style="margin-left:0;">
        <?php if ($_smarty_tpl->tpl_vars['menuArr']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['cfg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cfg']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cfg']->key => $_smarty_tpl->tpl_vars['cfg']->value) {
$_smarty_tpl->tpl_vars['cfg']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['cfg']->key;
?>
        <li data-idx="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
          <div class="input-prepend input-append">
            <span class="add-on sort">排序</span>
            <input class="input-small name" type="text" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][name]" placeholder="菜单名称" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['name'];?>
">
            <input class="input-middle url" type="text" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][url]" placeholder="菜单链接" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['cfg']->value['sys']) {?>readonly=""<?php }?>>
            <input type="hidden" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][show]" class="show" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['show'];?>
">
            <input type="hidden" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][sys]" class="sys" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['sys'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['cfg']->value['show']=='1') {?>
            <span class="add-on btn dn active">显示</span>
            <?php } else { ?>
            <span class="add-on btn dn">隐藏</span>
            <?php }?>
            <span class="add-on btn del">删除</span>
            <span class="add-on btn add">新增</span>
          </div>
        </li>
        <?php } ?>
        <?php } else { ?>
        <li data-idx="0">
          <div class="input-prepend input-append">
            <span class="add-on sort">排序</span>
            <input class="input-small name" type="text" name="menu[0][name]" placeholder="菜单名称" value="图文">
            <input class="input-middle url" type="text" name="menu[0][url]" placeholder="菜单链接" value="" readonly="">
            <input type="hidden" name="menu[0][show]" class="show" value="1">
            <input type="hidden" name="menu[0][sys]" class="sys" value="1">
            <span class="add-on btn dn active">显示</span>
            <span class="add-on btn del">删除</span>
            <span class="add-on btn add">新增</span>
          </div>
        </li>
        <li class="sys" data-idx="1">
          <div class="input-prepend input-append">
            <span class="add-on sort">排序</span>
            <input class="input-small name" type="text" name="menu[1][name]" placeholder="菜单名称" value="互动">
            <input class="input-middle url" type="text" name="menu[1][url]" placeholder="菜单链接" value="" readonly="">
            <input type="hidden" name="menu[1][show]" class="show" value="1">
            <input type="hidden" name="menu[1][sys]" class="sys" value="2">
            <span class="add-on btn dn active">显示</span>
            <span class="add-on btn del">删除</span>
            <span class="add-on btn add">新增</span>
          </div>
        </li>
        <li class="sys" data-idx="2">
          <div class="input-prepend input-append">
            <span class="add-on sort">排序</span>
            <input class="input-small name" type="text" name="menu[2][name]" placeholder="菜单名称" value="榜单">
            <input class="input-middle url" type="text" name="menu[2][url]" placeholder="菜单链接" value="" readonly="">
            <input type="hidden" name="menu[2][show]" class="show" value="1">
            <input type="hidden" name="menu[2][sys]" class="sys" value="3">
            <span class="add-on btn dn active">显示</span>
            <span class="add-on btn del">删除</span>
            <span class="add-on btn add">新增</span>
          </div>
        </li>
        <?php }?>
      </ul>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="adv">广告标题：</label></dt>
    <dd>
      <span><input class="input-xlarge" type="text" name="adv" min="0" id="adv" value="<?php echo $_smarty_tpl->tpl_vars['adv']->value;?>
" /></span>
      <span class="input-tips"><s></s>留空则没有广告</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>直播简介：</dt>
    <dd>
      <?php echo '<script'; ?>
 id="note" name="note" type="text/plain" style="width:85%;height:500px"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
<?php echo '</script'; ?>
>
    </dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button></dd>
  </dl>
</form>

<?php echo '<script'; ?>
 id="menuTpl" type="text/html">
  <li data-idx="100">
    <div class="input-prepend input-append">
      <span class="add-on sort">排序</span>
      <input class="input-small name" type="text" name="menu[100][name]" placeholder="菜单名称" value="">
      <input class="input-middle url" type="text" name="menu[100][url]" placeholder="菜单链接" value="">
      <input type="hidden" name="menu[100][show]" class="show" value="1">
      <input type="hidden" name="menu[0][sys]" class="sys" value="0">
      <span class="add-on btn dn active">显示</span>
      <span class="add-on btn del">删除</span>
      <span class="add-on btn add">新增</span>
    </div>
  </li>
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['editorFile']->value;?>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
