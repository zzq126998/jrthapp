<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 15:57:45
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\siteCityAdvanced.html" */ ?>
<?php /*%%SmartyHeaderCode:17133801995d511bf98b7ca5-52929134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600119aa24783602c1c05f03b37e375550d756e9' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\siteCityAdvanced.html',
      1 => 1559206099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17133801995d511bf98b7ca5-52929134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'thumbSize' => 0,
    'thumbType' => 0,
    'adminPath' => 0,
    'action' => 0,
    'cfg_staticVersion' => 0,
    'cid' => 0,
    'token' => 0,
    'moduleArr' => 0,
    'm' => 0,
    'config' => 0,
    'cfg_attachment' => 0,
    'touchTemplate' => 0,
    'editorFile' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511bf9919753_26828784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511bf9919753_26828784')) {function content_5d511bf9919753_26828784($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>城市分站高级设置</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
    var thumbSize = <?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
, thumbType = "<?php echo $_smarty_tpl->tpl_vars['thumbType']->value;?>
", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", modelType = action = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
", cfg_staticVersion = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
', cid = <?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
;
<?php echo '</script'; ?>
>
<style>
    .advanced {margin-top: 10px; padding-bottom: 20px;}
    .modulelist {position: relative; float: left; margin-left: 20px; }
    .modulelist ul {padding: 0; margin: 0;}
    .modulelist li {height: 35px; line-height: 35px; background: #c4c4c4; font-size: 14px; margin-bottom: 1px; list-style: none;}
    .modulelist li a {display: block; padding: 0 12px; color: #fff;}
    .modulelist li.current {background: #2c75e9;}
    .main {position: relative; overflow: hidden; padding-left: 15px;}
    .tpl-list {padding: 0;}
    .tpl-list h5 {margin: 0;}
</style>
</head>

<body>
<div class="alert alert-success" style="margin:10px 90px 0 20px"><button type="button" class="close" data-dismiss="alert">×</button>提示：此处配置留空不影响使用，系统将调用默认配置信息！</div>

<form action="" method="post" name="editform" id="editform" class="advanced editform clearfix">
    <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" />
    <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
    <div class="modulelist">
        <ul>
            <li<?php if ($_smarty_tpl->tpl_vars['action']->value=='siteConfig') {?> class="current"<?php }?>><a href="?cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&action=siteConfig">系统设置</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['action']->value=='business') {?> class="current"<?php }?>><a href="?cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&action=business">商家设置</a></li>
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moduleArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['action']->value==$_smarty_tpl->tpl_vars['m']->value['name']) {?> class="current"<?php }?>><a href="?cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>

    <div class="main">
        <?php if ($_smarty_tpl->tpl_vars['action']->value=='siteConfig') {?>
        <dl class="clearfix">
            <dt><label for="webname" class="sl">seo标题：</label></dt>
            <dd>
                <input class="input-xxlarge" type="text" name="webname" id="webname" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['webname'];?>
" data-regex=".*" />
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label for="keywords" class="sl">seo关键词：</label></dt>
            <dd>
                <input class="input-xxlarge" type="text" name="keywords" id="keywords" placeholder="一般不超过100个字" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['keywords'];?>
" data-regex=".*" />
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label for="description" class="sl">seo描述：</label></dt>
            <dd>
                <textarea name="description" id="description" placeholder="一般不超过200个字" data-regex=".{0,200}"><?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['description'];?>
</textarea>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label class="sl">自定义LOGO：</label></dt>
            <dd class="thumb fn-clear listImgBox fn-hide">
                <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['weblogo']!='') {?> hide<?php }?>" id="filePicker1" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['weblogo']!='') {?>
                <ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['weblogo'];?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['weblogo'];?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['weblogo'];?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
                <?php } else { ?>
                <ul id="listSection1" class="listSection thumblist fn-clear"></ul>
                <?php }?>
                <input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['weblogo'];?>
" class="imglist-hidden" id="litpic">
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label for="hotline" class="sl">咨询热线：</label></dt>
            <dd>
                <input class="input-large" type="text" name="hotline" id="hotline" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['hotline'];?>
" data-regex=".*" />
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label class="sl">版权信息：</label></dt>
            <dd>
                <?php echo '<script'; ?>
 id="powerby" name="powerby" type="text/plain" style="width:95.4%; height:200px;"><?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['powerby'];?>
<?php echo '</script'; ?>
>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label for="statisticscode" class="sl">统计代码：</label></dt>
            <dd>
                <textarea name="statisticscode" id="statisticscode" style="width: 90%; height: 150px;" placeholder="在第三方网站上注册并获得统计代码"><?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['statisticscode'];?>
</textarea>
            </dd>
        </dl>
        <?php } else { ?>
        <dl class="clearfix">
            <dt><label for="title" class="sl">seo标题：</label></dt>
            <dd>
                <input class="input-xxlarge" type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['title'];?>
" data-regex=".*" />
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label for="keywords" class="sl">seo关键词：</label></dt>
            <dd>
                <input class="input-xxlarge" type="text" name="keywords" id="keywords" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['keywords'];?>
" data-regex=".*" />
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label for="description" class="sl">seo描述：</label></dt>
            <dd>
                <textarea name="description" id="description" placeholder="一般不超过200个字" data-regex=".{0,200}"><?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['description'];?>
</textarea>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt><label class="sl">自定义LOGO：</label></dt>
            <dd class="thumb fn-clear listImgBox fn-hide">
                <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['logo']!='') {?> hide<?php }?>" id="filePicker1" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['logo']!='') {?>
                <ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['logo'];?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['logo'];?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['logo'];?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
                <?php } else { ?>
                <ul id="listSection1" class="listSection thumblist fn-clear"></ul>
                <?php }?>
                <input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['logo'];?>
" class="imglist-hidden" id="litpic">
            </dd>
        </dl>
        <dl class="clearfix">
            <dt></dt>
            <dd>
                <span class="input-tips" style="display: block;"><s></s>注意：请先确认模块设置中是否开启了LOGO自定义选项！</span>
            </dd>
        </dl>
        <?php if ($_smarty_tpl->tpl_vars['action']->value!='business') {?>
        <dl class="clearfix">
            <dt><label for="hotline" class="sl">咨询热线：</label></dt>
            <dd>
                <input class="input-large" type="text" name="hotline" id="hotline" value="<?php echo $_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['action']->value]['hotline'];?>
" data-regex=".*" />
                <span class="input-tips" style="display: inline-block;"><s></s>注意：请先确认模块设置中是否开启了咨询热线自定义选项！</span>
            </dd>
        </dl>
        <?php }?>
        <?php }?>
        <div id="tplList">
            <dl class="clearfix">
                <dt><label class="sl">模板风格：</label></dt>
                <dd>
                    <div class="tpl-list">
                        <h5 class="stit"><span class="label label-info">电脑端：</span></h5>
                        <select class="copyTemplate" id="defaultTplList" data-type="">
                            <option value="">请选择默认模板</option>
                        </select>
                        <ul class="clearfix" id="tplListUl"></ul>
                        <input type="hidden" name="template" id="template" value="" />
                    </div>
                    <div class="tpl-list touch">
                        <h5 class="stit"><span class="label label-warning">移动端：</span></h5>
                        <select class="copyTemplate" id="touchDefaultTplList" data-type="touch">
                            <option value="">请选择默认模板</option>
                        </select>
                        <ul class="clearfix" id="touchTplListUl"></ul>
                        <input type="hidden" name="touchTemplate" id="touchTemplate" value="<?php echo $_smarty_tpl->tpl_vars['touchTemplate']->value;?>
" />
                    </div>
                </dd>
            </dl>
        </div>
        <dl class="clearfix formbtn">
            <dt>&nbsp;</dt>
            <dd><input class="btn btn-large btn-success" type="submit" name="submit" id="btnSubmit" value="确认提交" /></dd>
        </dl>
    </div>
</form>

<?php echo $_smarty_tpl->tpl_vars['editorFile']->value;?>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
