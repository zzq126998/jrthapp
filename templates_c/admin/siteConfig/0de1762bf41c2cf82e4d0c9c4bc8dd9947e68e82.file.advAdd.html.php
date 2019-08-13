<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:36:17
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\advAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:10364822055d512501e4c0b1-04345257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de1762bf41c2cf82e4d0c9c4bc8dd9947e68e82' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\advAdd.html',
      1 => 1559206076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10364822055d512501e4c0b1-04345257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pagetitle' => 0,
    'cssFile' => 0,
    'atlasSize' => 0,
    'atlasType' => 0,
    'type' => 0,
    'classid' => 0,
    'typeid' => 0,
    'typeListArr' => 0,
    'action' => 0,
    'adminPath' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'classList' => 0,
    'title' => 0,
    'weight' => 0,
    'starttime' => 0,
    'endtime' => 0,
    'color' => 0,
    'class1pic' => 0,
    'thumbSize' => 0,
    'class3bigpic' => 0,
    'class3smallpic' => 0,
    'class4leftpic' => 0,
    'class4rightpic' => 0,
    'stateopt' => 0,
    'state' => 0,
    'statenames' => 0,
    'body' => 0,
    'type1' => 0,
    'type2' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d512501ed6bc2_01448818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d512501ed6bc2_01448818')) {function content_5d512501ed6bc2_01448818($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
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
var atlasSize = <?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
, atlasType = "<?php echo $_smarty_tpl->tpl_vars['atlasType']->value;?>
", atlasMax = 0;  //图集配置
var atype = <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
, classid = <?php echo $_smarty_tpl->tpl_vars['classid']->value;?>
, typeid = '<?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
', typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, action = modelType = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
',
	adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="dopost" id="dopost" value="<?php echo $_smarty_tpl->tpl_vars['dopost']->value;?>
" />
  <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
	<dl class="clearfix<?php if ($_smarty_tpl->tpl_vars['id']->value) {?> hide<?php }?>">
    <dt><label for="class">广告类型：</label></dt>
    <dd>
      <span id="classList">
        <select name="class" id="class" class="input-large">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['classList']->value,'selected'=>$_smarty_tpl->tpl_vars['classid']->value),$_smarty_tpl);?>

        </select>
      </span>
      <span class="input-tips" style="display: inline-block;"><s></s>提交后，类型不可修改！</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="typeid"><?php if (!$_smarty_tpl->tpl_vars['type']->value) {?>广告分类：<?php } else { ?>所属模板：<?php }?></label></dt>
    <dd>
      <span id="typeList">
        <select name="typeid" id="typeid" class="input-large"></select>
      </span>
      <span class="input-tips"><s></s><?php if (!$_smarty_tpl->tpl_vars['type']->value) {?>请选择广告分类<?php } else { ?>请选择所属模板<?php }?></span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="title">广告标题：</label></dt>
    <dd>
      <input class="input-xlarge" type="text" name="title" id="title" data-regex=".{1,60}" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
      <span class="input-tips"><s></s>请输入广告标题<?php if ($_smarty_tpl->tpl_vars['action']->value=="tuan") {?>，同一个广告位置不同的投放区域请填写相同的标题！<?php }?></span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="weight">排序：</label></dt>
    <dd>
      <input class="input-mini" type="number" name="weight" id="weight" min="0" data-regex="[1-9]\d*" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
      <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="starttime">开始时间：</label></dt>
    <dd><input class="input-medium" type="text" name="starttime" id="starttime" value="<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="endtime">结束时间：</label></dt>
    <dd><input class="input-medium" type="text" name="endtime" id="endtime" value="<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
" /></dd>
  </dl>
  <div id="class1" class="hide">
    <dl class="clearfix<?php if ($_smarty_tpl->tpl_vars['id']->value) {?> hide<?php }?>">
      <dt>展现方式：</dt>
      <dd>
        <label><input type="radio" name="style" value="code" checked="checked" />代码</label>&nbsp;&nbsp;
        <label><input type="radio" name="style" value="text" />文字</label>&nbsp;&nbsp
        <label><input type="radio" name="style" value="pic" />图片</label>&nbsp;&nbsp
        <label><input type="radio" name="style" value="flash" />Flash</label>&nbsp;&nbsp
				<span class="input-tips" style="display: inline-block;"><s></s>提交后，类型不可修改！</span>
      </dd>
    </dl>
    <div id="style_code">
      <dl class="clearfix">
        <dt><label for="codehtml">HTML代码：</label></dt>
        <dd><textarea name="codehtml" id="codehtml" class="input-xxlarge" rows="5"></textarea></dd>
      </dl>
    </div>
    <div id="style_text" class="hide">
      <dl class="clearfix">
        <dt><label for="texttitle">文字内容：</label></dt>
        <dd>
          <input class="input-large" type="text" name="texttitle" id="texttitle" />
          <div class="color_pick"><em style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
;"></em></div>
          <input type="hidden" name="color" id="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" />
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="textlink">文字链接：</label></dt>
        <dd>
          <input class="input-xlarge" type="text" name="textlink" id="textlink" />
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="textsize">文字大小：</label></dt>
        <dd>
          <input class="input-mini" type="number" min="0" name="textsize" id="textsize" />px
        </dd>
      </dl>
    </div>
    <div id="style_pic" class="hide">
      <dl class="clearfix">
        <dt>上传图片：</dt>
				<dd class="thumb clearfix listImgBox">
					<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['class1pic']->value!='') {?> hide<?php }?>" id="filePicker1" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
					<ul id="listSection1" class="listSection thumblist clearfix"></ul>
					<input type="hidden" name="class1pic" value="<?php echo $_smarty_tpl->tpl_vars['class1pic']->value;?>
" class="imglist-hidden" id="class1pic">
				</dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="piclink">图片链接：</label></dt>
        <dd>
          <input class="input-xlarge" type="text" name="piclink" id="piclink" />
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="picalt">替换文字：</label></dt>
        <dd>
          <input class="input-xlarge" type="text" name="picalt" id="picalt" />
        </dd>
      </dl>
      <dl class="clearfix">
        <dt>图片尺寸：</dt>
        <dd>
          <div class="input-prepend input-append">
            <span class="add-on">宽</span>
            <input class="span1" id="class1picwidth" name="class1picwidth" type="text" value="" />
            <span class="add-on">px</span>
          </div>
          &times;
          <div class="input-prepend input-append">
            <span class="add-on">高</span>
            <input class="span1" id="class1picheight" name="class1picheight" type="text" value="" />
            <span class="add-on">px</span>
          </div>
        </dd>
      </dl>
    </div>
    <div id="style_flash" class="hide">
      <dl class="clearfix">
        <dt>上传Flash：</dt>
        <dd>
          <input name="class1flash" type="hidden" id="class1flash" value="" />
          <div class="spic hide">
            <div class="sholder"></div>
            <a href="javascript:;" class="reupload">重新上传</a>
          </div>
          <iframe src ="/include/upfile.inc.php?mod=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&type=adv&obj=class1flash&filetype=flash" style="width:100%; height:25px;" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" ></iframe>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt>Flash尺寸：</dt>
        <dd>
          <div class="input-prepend input-append">
            <span class="add-on">宽</span>
            <input class="span1" id="flashwidth" name="flashwidth" type="text" value="" />
            <span class="add-on">px</span>
          </div>
          &times;
          <div class="input-prepend input-append">
            <span class="add-on">高</span>
            <input class="span1" id="flashheight" name="flashheight" type="text" value="" />
            <span class="add-on">px</span>
          </div>
        </dd>
      </dl>
    </div>
	  <dl class="clearfix">
	    <dt><label for="mark1">广告标识：</label></dt>
	    <dd class="radio">
				<label><input type="radio" name="mark1" value="1" />隐藏</label>&nbsp;&nbsp
				<label><input type="radio" name="mark1" value="0" checked="checked" />显示</label>&nbsp;&nbsp;
	    </dd>
	  </dl>
  </div>
  <div id="class2" class="hide">
    <dl class="clearfix">
      <dt>图片尺寸：</dt>
      <dd>
        <div class="input-prepend input-append">
          <span class="add-on">宽</span>
          <input class="span1" id="class2picwidth" name="class2picwidth" type="text" value="" />
          <span class="add-on">px</span>
        </div>
        &times;
        <div class="input-prepend input-append">
          <span class="add-on">高</span>
          <input class="span1" id="class2picheight" name="class2picheight" type="text" value="" />
          <span class="add-on">px</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>上传图片：</dt>
      <dd class="listImgBox hide">
        <div class="list-holder">
          <ul id="listSection2" class="clearfix listSection"></ul>
          <input type="hidden" id="imglist1" value='' class="imglist-hidden">
        </div>
        <div class="btn-section clearfix">
          <div class="uploadinp filePicker" id="filePicker2" data-type="adv" data-count="999" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist=""><div id="flasHolder"></div><span>添加图片</span></div>
          <div class="upload-tip">
            <p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
          </div>
        </div>
      </dd>
    </dl>
  </div>
  <div id="class3" class="hide">
    <dl class="clearfix">
      <dt><label for="showtime">显示时间：</label></dt>
      <dd>
        <input class="input-mini" type="number" min="0" name="showtime" id="showtime" />秒
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="adwidth">广告宽度：</label></dt>
      <dd><input class="input-mini" type="number" min="0" name="adwidth" id="adwidth" />px</dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="extrulink">广告链接：</label></dt>
      <dd>
        <input class="input-xlarge" type="text" name="extrulink" id="extrulink" />
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>大图：</dt>
			<dd class="thumb clearfix listImgBox">
				<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['class1pic']->value!='') {?> hide<?php }?>" id="filePicker3" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<ul id="listSection3" class="listSection thumblist clearfix"></ul>
				<input type="hidden" name="class3bigpic" value="<?php echo $_smarty_tpl->tpl_vars['class3bigpic']->value;?>
" class="imglist-hidden" id="class3bigpic">
			</dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="bigheight">大图高度：</label></dt>
      <dd><input class="input-mini" type="number" min="0" name="bigheight" id="bigheight" />px</dd>
    </dl>
    <dl class="clearfix">
      <dt>小图：</dt>
			<dd class="thumb clearfix listImgBox">
				<div class="uploadinp filePicker thumbtn" id="filePicker4" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<ul id="listSection4" class="listSection thumblist clearfix"></ul>
				<input type="hidden" name="class3smallpic" value="<?php echo $_smarty_tpl->tpl_vars['class3smallpic']->value;?>
" class="imglist-hidden" id="class3smallpic">
			</dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="smallheight">小图高度：</label></dt>
      <dd><input class="input-mini" type="number" min="0" name="smallheight" id="smallheight" />px</dd>
    </dl>
	  <dl class="clearfix">
	    <dt><label for="mark3">广告标识：</label></dt>
	    <dd class="radio">
				<label><input type="radio" name="mark3" value="1" />隐藏</label>&nbsp;&nbsp
				<label><input type="radio" name="mark3" value="0" checked="checked" />显示</label>&nbsp;&nbsp;
	    </dd>
	  </dl>
  </div>
  <div id="class4" class="hide">
    <dl class="clearfix">
      <dt><label for="bodywidth">页面宽度：</label></dt>
      <dd>
        <input class="input-mini" type="number" min="0" name="bodywidth" id="bodywidth" />px
        <span class="help-inline">如果窗口大小小于此宽度，广告将不显示</span>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>广告尺寸：</dt>
      <dd>
        <div class="input-prepend input-append">
          <span class="add-on">宽</span>
          <input class="span1" id="adwidth_" name="adwidth_" type="text" value="" />
          <span class="add-on">px</span>
        </div>
        &times;
        <div class="input-prepend input-append">
          <span class="add-on">高</span>
          <input class="span1" id="adheight_" name="adheight_" type="text" value="" />
          <span class="add-on">px</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="topheight">距离顶部：</label></dt>
      <dd><input class="input-mini" type="number" min="0" name="topheight" id="topheight" />px</dd>
    </dl>
    <div class="row-fluid">
      <div class="span6">
        <p style="padding-left:50px;"><strong>左边：</strong></p>
        <dl class="clearfix">
          <dt>上传图片：</dt>
					<dd class="thumb clearfix listImgBox">
						<div class="uploadinp filePicker thumbtn" id="filePicker5" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
						<ul id="listSection5" class="listSection thumblist clearfix"></ul>
						<input type="hidden" name="class4leftpic" value="<?php echo $_smarty_tpl->tpl_vars['class4leftpic']->value;?>
" class="imglist-hidden" id="class4leftpic">
					</dd>
        </dl>
        <dl class="clearfix">
          <dt><label for="leftpiclink">广告链接：</label></dt>
          <dd>
            <input class="input-xlarge" type="text" name="leftpiclink" id="leftpiclink" />
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><label for="leftpicalt">替换文字：</label></dt>
          <dd>
            <input class="input-xlarge" type="text" name="leftpicalt" id="leftpicalt" />
          </dd>
        </dl>
				<dl class="clearfix">
			    <dt><label for="markLeft">广告标识：</label></dt>
			    <dd class="radio">
						<label><input type="radio" name="markLeft" value="1" />隐藏</label>&nbsp;&nbsp
						<label><input type="radio" name="markLeft" value="0" checked="checked" />显示</label>&nbsp;&nbsp;
			    </dd>
			  </dl>
      </div>
      <div class="span6">
        <p style="padding-left:50px;"><strong>右边：</strong></p>
        <dl class="clearfix">
          <dt>上传图片：</dt>
					<dd class="thumb clearfix listImgBox">
						<div class="uploadinp filePicker thumbtn" id="filePicker6" data-type="advthumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
						<ul id="listSection6" class="listSection thumblist clearfix"></ul>
						<input type="hidden" name="class4rightpic" value="<?php echo $_smarty_tpl->tpl_vars['class4rightpic']->value;?>
" class="imglist-hidden" id="class4rightpic">
					</dd>
        </dl>
        <dl class="clearfix">
          <dt><label for="rightpiclink">广告链接：</label></dt>
          <dd>
            <input class="input-xlarge" type="text" name="rightpiclink" id="rightpiclink" />
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><label for="rightpicalt">替换文字：</label></dt>
          <dd>
            <input class="input-xlarge" type="text" name="rightpicalt" id="rightpicalt" />
          </dd>
        </dl>
				<dl class="clearfix">
			    <dt><label for="markRight">广告标识：</label></dt>
			    <dd class="radio">
						<label><input type="radio" name="markRight" value="1" />隐藏</label>&nbsp;&nbsp
						<label><input type="radio" name="markRight" value="0" checked="checked" />显示</label>&nbsp;&nbsp;
			    </dd>
			  </dl>
      </div>
    </div>
  </div>
  <div id="class5" class="hide">
    <dl class="clearfix">
      <dt>头部高度：</dt>
      <dd>
        <div class="input-prepend input-append">
          <input class="span1" id="class5headHeight" name="class5headHeight" type="text" value="" />
          <span class="add-on">px</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>图片链接：</dt>
      <dd>
        <div class="input-prepend input-append">
          <input class="input-xlarge" id="class5picurl" name="class5picurl" type="text" value="" />
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt>上传图片：</dt>
      <dd class="thumb clearfix listImgBox">
        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['class1pic']->value!='') {?> hide<?php }?>" id="filePicker10" data-type="holidayadv"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
        <ul id="listSection10" class="listSection thumblist clearfix"></ul>
        <input type="hidden" name="litpic" value="" class="imglist-hidden" id="litpic">
      </dd>
    </dl>
  </div>
  <dl class="clearfix">
    <dt><label for="state">显示状态：</label></dt>
    <dd class="radio">
      <?php echo smarty_function_html_radios(array('name'=>"state",'values'=>$_smarty_tpl->tpl_vars['stateopt']->value,'checked'=>$_smarty_tpl->tpl_vars['state']->value,'output'=>$_smarty_tpl->tpl_vars['statenames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button></dd>
  </dl>
</form>

<span id="adBody" class="hide"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</span>
<span id="type1" class="hide"><?php echo $_smarty_tpl->tpl_vars['type1']->value;?>
</span>
<span id="type2" class="hide"><?php echo $_smarty_tpl->tpl_vars['type2']->value;?>
</span>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
