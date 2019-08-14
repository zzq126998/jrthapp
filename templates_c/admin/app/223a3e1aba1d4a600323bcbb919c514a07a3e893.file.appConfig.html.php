<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-02 12:11:34
         compiled from "/www/wwwroot/hnup.rucheng.pro/admin/templates/app/appConfig.html" */ ?>
<?php /*%%SmartyHeaderCode:20334628195d0b7ca4b3afd5-76977535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '223a3e1aba1d4a600323bcbb919c514a07a3e893' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/admin/templates/app/appConfig.html',
      1 => 1562036068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20334628195d0b7ca4b3afd5-76977535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0b7ca4bd6fb3_94856575',
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'adminPath' => 0,
    'action' => 0,
    'android_guide' => 0,
    'ios_guide' => 0,
    'installWaimai' => 0,
    'token' => 0,
    'appname' => 0,
    'android_version' => 0,
    'ios_version' => 0,
    'ios_shelf' => 0,
    'android_update' => 0,
    'ios_update' => 0,
    'android_force' => 0,
    'ios_force' => 0,
    'android_note' => 0,
    'ios_note' => 0,
    'android_size' => 0,
    'logo' => 0,
    'cfg_attachment' => 0,
    'touchTplList' => 0,
    'touchTemplate' => 0,
    'tplItem' => 0,
    'cfg_staticVersion' => 0,
    'android_download' => 0,
    'yyb_download' => 0,
    'ios_download' => 0,
    'atlasType' => 0,
    'ad_pic' => 0,
    'ad_link' => 0,
    'ad_time' => 0,
    'android_index' => 0,
    'cfg_basehost' => 0,
    'ios_index' => 0,
    'map_baidu_android' => 0,
    'map_baidu_ios' => 0,
    'map_set' => 0,
    'map_google_android' => 0,
    'map_google_ios' => 0,
    'map_amap_android' => 0,
    'map_amap_ios' => 0,
    'rongKeyID' => 0,
    'rongKeySecret' => 0,
    'customBottomButton' => 0,
    'foo' => 0,
    'button' => 0,
    'thumbSize' => 0,
    'num' => 0,
    'sharePic' => 0,
    'business_appname' => 0,
    'business_android_version' => 0,
    'business_ios_version' => 0,
    'business_android_update' => 0,
    'business_ios_update' => 0,
    'business_android_force' => 0,
    'business_ios_force' => 0,
    'business_android_note' => 0,
    'business_ios_note' => 0,
    'business_android_size' => 0,
    'business_logo' => 0,
    'business_android_download' => 0,
    'business_yyb_download' => 0,
    'business_ios_download' => 0,
    'peisong_appname' => 0,
    'peisong_android_version' => 0,
    'peisong_ios_version' => 0,
    'peisong_android_update' => 0,
    'peisong_ios_update' => 0,
    'peisong_android_force' => 0,
    'peisong_ios_force' => 0,
    'peisong_android_note' => 0,
    'peisong_ios_note' => 0,
    'peisong_android_size' => 0,
    'peisong_logo' => 0,
    'peisong_android_download' => 0,
    'peisong_yyb_download' => 0,
    'peisong_ios_download' => 0,
    'peisong_map_baidu_android' => 0,
    'peisong_map_baidu_ios' => 0,
    'peisong_map_set' => 0,
    'peisong_map_google_android' => 0,
    'peisong_map_google_ios' => 0,
    'peisong_map_amap_android' => 0,
    'peisong_map_amap_ios' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0b7ca4bd6fb3_94856575')) {function content_5d0b7ca4bd6fb3_94856575($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/www/wwwroot/hnup.rucheng.pro/include/tpl/plugins/modifier.replace.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>APP基本设置</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
';
var imglist = {
    "android_guide": <?php echo $_smarty_tpl->tpl_vars['android_guide']->value;?>
,
    "ios_guide": <?php echo $_smarty_tpl->tpl_vars['ios_guide']->value;?>

};
<?php echo '</script'; ?>
>
<style media="screen">
    .editform dt {width: 200px;}
    .tpl-list.touch{margin-bottom: 20px;margin-top: 0px;margin-left: 0px;padding-left:0px;}
    #bottomButton img {width: 50px!important; height: 50px!important; display: block; margin: 0 auto;}
    #bottomButton .reupload {margin: 0 auto;}
    #bottomButton .table {width: auto;}
    #bottomButton .table th {min-width: 100px; height: 30px; text-align: center; line-height: 30px;}
    #bottomButton .table td {text-align: center; height: 34px; line-height: 31px;}
</style>
</head>

<body>
<?php if ($_smarty_tpl->tpl_vars['installWaimai']->value) {?>
<div class="btn-group config-nav" data-toggle="buttons-radio" style="margin-left: 160px;">
  <button type="button" class="btn active" data-type="portal">门户平台</button>
  <button type="button" class="btn" data-type="business">商家版</button>
  <button type="button" class="btn" data-type="peisong">配送员</button>
</div>
<?php }?>

<form action="appConfig.php" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <div class="item" id="portal">
    <dl class="clearfix">
      <dt><label for="appname">APP名称：</label></dt>
      <dd><input class="input-medium" type="text" name="appname" id="appname" value="<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
" /></dd>
    </dl>
    <dl class="clearfix">
      <dt><label>最新版本：</label></dt>
      <dd class="clearfix">
    		<div class="input-prepend">
          <span class="add-on">Android：</span>
          <input class="span2" id="android_version" name="android_version" type="text" value="<?php echo $_smarty_tpl->tpl_vars['android_version']->value;?>
" />
        </div>
    		<div class="input-prepend">
          <span class="add-on">iOS：</span>
          <input class="span2" id="ios_version" name="ios_version" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ios_version']->value;?>
" />
        </div>
        <label>
          <input id="ios_shelf" name="ios_shelf" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['ios_shelf']->value) {?> checked<?php }?> />
          <span class="add-on">iOS上架中</span>
          <span class="input-tips" style="display:inline-block;margin:10px 0 10px;"><s></s>开启iOS上架将隐藏会员充值、提现等相关页面或入口</span>
        </label>
    	</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>更新时间：</label></dt>
      <dd class="clearfix">
        <div class="input-prepend">
          <span class="add-on">Android：</span>
          <input class="span2 updateDate" id="android_update" name="android_update" type="text" value="<?php echo $_smarty_tpl->tpl_vars['android_update']->value;?>
" />
        </div>
        <div class="input-prepend">
          <span class="add-on">iOS：</span>
          <input class="span2 updateDate" id="ios_update" name="ios_update" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ios_update']->value;?>
" />
        </div>
    	</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>强制升级：</label></dt>
      <dd class="clearfix">
        <label>
          <input id="android_force" name="android_force" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['android_force']->value) {?> checked<?php }?> />
          <span class="add-on">Android</span>
        </label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <label>
          <input id="ios_force" name="ios_force" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['ios_force']->value) {?> checked<?php }?> />
          <span class="add-on">iOS</span>
        </label>
    	</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>更新内容：</label></dt>
      <dd class="clearfix">
    		<div class="input-prepend">
          <span class="add-on">Android：</span>
          <textarea class="input-xlarge" style="height: 100px;" name="android_note" id="android_note"><?php echo $_smarty_tpl->tpl_vars['android_note']->value;?>
</textarea>
        </div>
    		<div class="input-prepend">
          <span class="add-on">iOS：</span>
          <textarea class="input-xlarge" style="height: 100px;" name="ios_note" id="ios_note"><?php echo $_smarty_tpl->tpl_vars['ios_note']->value;?>
</textarea>
        </div>
    	</dd>
    </dl>
      <dl class="clearfix">
        <dt><label>文件大小：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <input class="span2" id="android_size" name="android_size" type="text" value="<?php echo $_smarty_tpl->tpl_vars['android_size']->value;?>
" />
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>LOGO：<br /><small>尺寸：180*180</small>&nbsp;&nbsp;&nbsp;</label></dt>
        <dd class="thumb clearfix listImgBox">
    		<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['logo']->value!='') {?> hide<?php }?>" id="filePicker3" data-type="logo" data-count="1" data-size="5120" data-imglist=""><div></div><span></span></div>
            <?php if ($_smarty_tpl->tpl_vars['logo']->value!='') {?>
    		<ul id="listSection3" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_3_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['logo']->value;?>
' target="_blank" title=""><img style="max-width: 150px;" alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['logo']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
    		<?php } else { ?>
    		<ul id="listSection3" class="listSection thumblist clearfix"></ul>
    		<?php }?>
    		<input type="hidden" name="logo" value="" class="imglist-hidden" id="logo">
    	</dd>
      </dl>
      <dl class="clearfix" id="tplList">
          <dt><label>风格模板：<br /><small></small>&nbsp;&nbsp;&nbsp;</label></dt>
          <dd>
        <div class="tpl-list touch">
          <ul class="clearfix">
            <?php  $_smarty_tpl->tpl_vars['tplItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tplItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['touchTplList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tplItem']->key => $_smarty_tpl->tpl_vars['tplItem']->value) {
$_smarty_tpl->tpl_vars['tplItem']->_loop = true;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['touchTemplate']->value==$_smarty_tpl->tpl_vars['tplItem']->value['directory']) {?> class="current"<?php }?>>
              <a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['tplItem']->value['directory'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['tplItem']->value['tplname'];?>
" class="img" title="模板名称：<?php echo $_smarty_tpl->tpl_vars['tplItem']->value['tplname'];?>
&#10;版权所有：<?php echo $_smarty_tpl->tpl_vars['tplItem']->value['copyright'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
../static/images/admin/app/touch/<?php echo $_smarty_tpl->tpl_vars['tplItem']->value['directory'];?>
/preview.jpg?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></a>
              <p>
                <span title="<?php echo $_smarty_tpl->tpl_vars['tplItem']->value['tplname'];?>
"><?php echo $_smarty_tpl->tpl_vars['tplItem']->value['tplname'];?>
(<?php echo $_smarty_tpl->tpl_vars['tplItem']->value['directory'];?>
)</span><br />
                <a href="javascript:;" class="choose">选择</a>
              </p>
            </li>
            <?php } ?>
          </ul>
          <input type="hidden" name="touchTemplate" id="touchTemplate" value="<?php echo $_smarty_tpl->tpl_vars['touchTemplate']->value;?>
" />
        </div>
      </dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="android_download">Android安装包下载地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="android_download" id="android_download" value="<?php echo $_smarty_tpl->tpl_vars['android_download']->value;?>
" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="yyb_download">应用宝链接地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="yyb_download" id="yyb_download" value="<?php echo $_smarty_tpl->tpl_vars['yyb_download']->value;?>
" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="ios_download">iOS安装包下载地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="ios_download" id="ios_download" value="<?php echo $_smarty_tpl->tpl_vars['ios_download']->value;?>
" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label>Android引导页：<br /><small>尺寸：720*1280</small>&nbsp;&nbsp;&nbsp;</label></dt>
        <dd class="listImgBox hide">
    		<div class="list-holder">
    			<ul id="listSection0" class="clearfix listSection piece"></ul>
    			<input type="hidden" name="android_guide" value='<?php echo $_smarty_tpl->tpl_vars['android_guide']->value;?>
' class="imglist-hidden">
    		</div>
    		<div class="btn-section clearfix">
    			<div class="uploadinp filePicker" id="filePicker0" data-type="single" data-count="10" data-size="5120" data-imglist="android_guide"><div id="flasHolder0"></div><span>添加图片</span></div>
    			<div class="upload-tip">
    				<p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大5M<span class="fileerror"></span></p>
    			</div>
    		</div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>iOS引导页：<br /><small>尺寸：1125*2436</small>&nbsp;&nbsp;&nbsp;</label></dt>
        <dd class="listImgBox hide">
    		<div class="list-holder">
    			<ul id="listSection1" class="clearfix listSection piece"></ul>
    			<input type="hidden" name="ios_guide" value='<?php echo $_smarty_tpl->tpl_vars['ios_guide']->value;?>
' class="imglist-hidden">
    		</div>
    		<div class="btn-section clearfix">
    			<div class="uploadinp filePicker" id="filePicker1" data-type="single" data-count="10" data-size="5120" data-imglist="ios_guide"><div id="flasHolder1"></div><span>添加图片</span></div>
    			<div class="upload-tip">
    				<p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大5M<span class="fileerror"></span></p>
    			</div>
    		</div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>广告页：<br /><small>尺寸：640*1136</small>&nbsp;&nbsp;&nbsp;</label></dt>
        <dd class="thumb clearfix listImgBox">
    		<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['ad_pic']->value!='') {?> hide<?php }?>" id="filePicker2" data-type="card" data-count="1" data-size="5120" data-imglist=""><div></div><span></span></div>
            <?php if ($_smarty_tpl->tpl_vars['ad_pic']->value!='') {?>
    		<ul id="listSection2" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_2_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['ad_pic']->value;?>
' target="_blank" title=""><img style="max-width: 150px;" alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['ad_pic']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['ad_pic']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
    		<?php } else { ?>
    		<ul id="listSection2" class="listSection thumblist clearfix"></ul>
    		<?php }?>
    		<input type="hidden" name="ad_pic" value="" class="imglist-hidden" id="ad_pic">
            <br /><br />
            <input class="input-xxlarge" type="text" name="ad_link" id="ad_link" value="<?php echo $_smarty_tpl->tpl_vars['ad_link']->value;?>
" placeholder="广告链接，留空表示没有链接" />
            <div class="input-prepend input-append" style="display: block; margin-top: 15px;">
              <span class="add-on">广告倒计时</span>
              <input class="span1" id="ad_time" name="ad_time" type="number" min="1" value="<?php echo $_smarty_tpl->tpl_vars['ad_time']->value;?>
" />
              <span class="add-on">秒</span>
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="android_index">Android首页地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="android_index" id="android_index" value="<?php if ($_smarty_tpl->tpl_vars['android_index']->value) {
echo $_smarty_tpl->tpl_vars['android_index']->value;
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/<?php }?>" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="ios_index">iOS首页地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="ios_index" id="ios_index" value="<?php if ($_smarty_tpl->tpl_vars['ios_index']->value) {
echo $_smarty_tpl->tpl_vars['ios_index']->value;
} else {
echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/<?php }?>" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label>百度地图：</label></dt>
        <dd class="clearfix">
          <div class="input-prepend">
            <span class="add-on">Android</span>
            <input class="span4" id="map_baidu_android" name="map_baidu_android" type="text" value="<?php echo $_smarty_tpl->tpl_vars['map_baidu_android']->value;?>
" />
          </div>
          <br />
          <div class="input-prepend">
            <span class="add-on">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS</span>
            <input class="span4" id="map_baidu_ios" name="map_baidu_ios" type="text" value="<?php echo $_smarty_tpl->tpl_vars['map_baidu_ios']->value;?>
" />
          </div>
          <label><input type="radio" name="map_set" value="2" <?php if ($_smarty_tpl->tpl_vars['map_set']->value==2) {?>checked="checked"<?php }?>>默认</label>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="map_google">谷歌地图：</label></dt>
        <dd class="clearfix">
          <div class="input-prepend">
            <span class="add-on">Android</span>
            <input class="span4" id="map_google_android" name="map_google_android" type="text" value="<?php echo $_smarty_tpl->tpl_vars['map_google_android']->value;?>
" />
          </div>
          <br />
          <div class="input-prepend">
            <span class="add-on">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS</span>
            <input class="span4" id="map_google_ios" name="map_google_ios" type="text" value="<?php echo $_smarty_tpl->tpl_vars['map_google_ios']->value;?>
" />
          </div>
          <label><input type="radio" name="map_set" value="1" <?php if ($_smarty_tpl->tpl_vars['map_set']->value==1) {?>checked="checked"<?php }?>>默认</label>
        </dd>
      </dl>
    <dl class="clearfix">
        <dt><label for="map_amap">高德地图：</label></dt>
        <dd class="clearfix">
            <div class="input-prepend">
                <span class="add-on">Android</span>
                <input class="span4" id="map_amap_android" name="map_amap_android" type="text" value="<?php echo $_smarty_tpl->tpl_vars['map_amap_android']->value;?>
" />
            </div>
            <br />
            <div class="input-prepend">
                <span class="add-on">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS</span>
                <input class="span4" id="map_amap_ios" name="map_amap_ios" type="text" value="<?php echo $_smarty_tpl->tpl_vars['map_amap_ios']->value;?>
" />
            </div>
            <label><input type="radio" name="map_set" value="4" <?php if ($_smarty_tpl->tpl_vars['map_set']->value==4) {?>checked="checked"<?php }?>>默认</label>
        </dd>
    </dl>
      <dl class="clearfix">
        <dt><label>融云设置：</label></dt>
        <dd class="clearfix">
          <div class="input-prepend">
            <span class="add-on">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Access Key ID</span>
            <input class="span4" id="rongKeyID" name="rongKeyID" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rongKeyID']->value;?>
" />
          </div>
          <br />
          <div class="input-prepend">
            <span class="add-on">Access Key Secret</span>
            <input class="span4" id="rongKeySecret" name="rongKeySecret" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rongKeySecret']->value;?>
" />
          </div>
          <label>请填写生产环境App Key；<a href="http://www.rongcloud.cn" target="_blank">申请地址：http://www.rongcloud.cn</a></label>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><label>自定义底部按钮：</label></dt>
        <dd class="clearfix" id="bottomButton">
            <div class="tips" style="margin: 5px 0 15px 0;">
                <span class="label label-info">注意：此处配置后，移动端全部生效（H5、APP、微信、小程序），图标尺寸：150*150px</span>
            </div>
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>标题</th>
                <th>默认图标</th>
                <th>选中图标</th>
                <th>跳转链接</th>
                <th>是否登录</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['customBottomButton']->value) {?>
              <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_variable(6, null, 0);?>
              <?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customBottomButton']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['button']->key;
?>
              <tr>
                <td><input type="text" class="input-small" name="bottomButton[name][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
" /></td>
                <td class="thumb clearfix listImgBox">
                  <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['button']->value['icon']!='') {?> hide<?php }?>" id="filePicker<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                  <?php if ($_smarty_tpl->tpl_vars['button']->value['icon']!='') {?>
                  <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['button']->value['icon'];?>
' target="_blank" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['button']->value['icon'];?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['button']->value['icon'];?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
                  <?php } else { ?>
                  <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="listSection thumblist fn-clear"></ul>
                  <?php }?>
                  <input type="hidden" name="bottomButton[icon][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['icon'];?>
" class="imglist-hidden" id="sharePic">
                </td>
                <td class="thumb clearfix listImgBox">
                  <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['button']->value['icon_h']!='') {?> hide<?php }?>" id="filePicker<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                  <?php if ($_smarty_tpl->tpl_vars['button']->value['icon_h']!='') {?>
                  <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['button']->value['icon_h'];?>
' target="_blank" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['button']->value['icon_h'];?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['button']->value['icon_h'];?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
                  <?php } else { ?>
                  <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
" class="listSection thumblist fn-clear"></ul>
                  <?php }?>
                  <input type="hidden" name="bottomButton[icon_h][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['icon_h'];?>
" class="imglist-hidden" id="sharePic"><br />
                </td>
                <td><input type="text" style="width: 450px;" name="bottomButton[url][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['url'];?>
"></td>
                <td><input type="checkbox" name="bottomButton[login][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['button']->value['login']==1) {?> checked<?php }?>></td>
              </tr>
              <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_variable($_smarty_tpl->tpl_vars['foo']->value+1, null, 0);?>
              <?php } ?>
              <?php if (count($_smarty_tpl->tpl_vars['customBottomButton']->value)<5) {?>
                <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(6+count($_smarty_tpl->tpl_vars['customBottomButton']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 10+1 - ($_smarty_tpl->tpl_vars['num']->value) : $_smarty_tpl->tpl_vars['num']->value-(10)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['num']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <tr>
                  <td><input type="text" name="bottomButton[name][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="" /></td>
                  <td class="thumb clearfix listImgBox" style="width: 100px;">
                    <div class="uploadinp filePicker thumbtn" id="filePicker<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                    <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="listSection thumblist fn-clear"></ul>
                    <input type="hidden" name="bottomButton[icon][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['sharePic']->value;?>
" class="imglist-hidden" id="sharePic">
                  </td>
                  <td class="thumb clearfix listImgBox" style="width: 100px;">
                    <div class="uploadinp filePicker thumbtn" id="filePicker<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                    <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
" class="listSection thumblist fn-clear"></ul>
                    <input type="hidden" name="bottomButton[icon_h][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['sharePic']->value;?>
" class="imglist-hidden" id="sharePic"><br />
                  </td>
                  <td><input type="text" name="bottomButton[url][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value=""></td>
                  <td><input type="checkbox" name="bottomButton[login][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="1">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <?php }} ?>
              <?php }?>
              <?php } else { ?>
              <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 10+1 - (6) : 6-(10)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 6, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
              <tr>
                <td><input type="text" name="bottomButton[name][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="" /></td>
                <td class="thumb clearfix listImgBox" style="width: 100px;">
                  <div class="uploadinp filePicker thumbtn" id="filePicker<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                  <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="listSection thumblist fn-clear"></ul>
                  <input type="hidden" name="bottomButton[icon][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['sharePic']->value;?>
" class="imglist-hidden" id="sharePic">
                </td>
                <td class="thumb clearfix listImgBox" style="width: 100px;">
                  <div class="uploadinp filePicker thumbtn" id="filePicker<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                  <ul id="listSection<?php echo $_smarty_tpl->tpl_vars['foo']->value*2;?>
" class="listSection thumblist fn-clear"></ul>
                  <input type="hidden" name="bottomButton[icon_h][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['sharePic']->value;?>
" class="imglist-hidden" id="sharePic"><br />
                </td>
                <td><input type="text" name="bottomButton[url][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value=""></td>
                <td><input type="checkbox" name="bottomButton[login][<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
]" value="1">&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <?php }} ?>
              <?php }?>

            </tbody>
          </table>
        </dd>
      </dl>
  </div>
  <div class="item hide" id="business">
    <dl class="clearfix">
      <dt><label for="business_appname">APP名称：</label></dt>
      <dd><input class="input-medium" type="text" name="business_appname" id="business_appname" value="<?php echo $_smarty_tpl->tpl_vars['business_appname']->value;?>
" /></dd>
    </dl>
      <dl class="clearfix">
        <dt><label>最新版本：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
          <span class="add-on">Android：</span>
          <input class="span2" id="business_android_version" name="business_android_version" type="text" value="<?php echo $_smarty_tpl->tpl_vars['business_android_version']->value;?>
" />
        </div>
    		<div class="input-prepend">
          <span class="add-on">iOS：</span>
          <input class="span2" id="business_ios_version" name="business_ios_version" type="text" value="<?php echo $_smarty_tpl->tpl_vars['business_ios_version']->value;?>
" />
        </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>更新时间：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <input class="span2 updateDate" id="business_android_update" name="business_android_update" type="text" value="<?php echo $_smarty_tpl->tpl_vars['business_android_update']->value;?>
" />
            </div>
    		<div class="input-prepend">
              <span class="add-on">iOS：</span>
              <input class="span2 updateDate" id="business_ios_update" name="business_ios_update" type="text" value="<?php echo $_smarty_tpl->tpl_vars['business_ios_update']->value;?>
" />
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>强制升级：</label></dt>
        <dd class="clearfix">
          <label>
            <input id="business_android_force" name="business_android_force" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['business_android_force']->value) {?> checked<?php }?> />
            <span class="add-on">Android</span>
          </label>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input id="business_ios_force" name="business_ios_force" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['business_ios_force']->value) {?> checked<?php }?> />
            <span class="add-on">iOS</span>
          </label>
      	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>更新内容：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <textarea class="input-xlarge" style="height: 100px;" name="business_android_note" id="business_android_note"><?php echo $_smarty_tpl->tpl_vars['business_android_note']->value;?>
</textarea>
            </div>
    		<div class="input-prepend">
              <span class="add-on">iOS：</span>
              <textarea class="input-xlarge" style="height: 100px;" name="business_ios_note" id="business_ios_note"><?php echo $_smarty_tpl->tpl_vars['business_ios_note']->value;?>
</textarea>
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>文件大小：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <input class="span2" id="business_android_size" name="business_android_size" type="text" value="<?php echo $_smarty_tpl->tpl_vars['business_android_size']->value;?>
" />
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>LOGO：<br /><small>尺寸：180*180</small>&nbsp;&nbsp;&nbsp;</label></dt>
        <dd class="thumb clearfix listImgBox">
        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['business_logo']->value!='') {?> hide<?php }?>" id="filePicker4" data-type="logo" data-count="1" data-size="5120" data-imglist=""><div></div><span></span></div>
            <?php if ($_smarty_tpl->tpl_vars['business_logo']->value!='') {?>
        <ul id="listSection4" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_4_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['business_logo']->value;?>
' target="_blank" title=""><img style="max-width: 150px;" alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['business_logo']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['business_logo']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
        <?php } else { ?>
        <ul id="listSection4" class="listSection thumblist clearfix"></ul>
        <?php }?>
        <input type="hidden" name="business_logo" value="" class="imglist-hidden" id="business_logo">
      </dd>
      </dl>

      <dl class="clearfix">
        <dt><label for="business_android_download">Android安装包下载地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="business_android_download" id="business_android_download" value="<?php echo $_smarty_tpl->tpl_vars['business_android_download']->value;?>
" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="business_yyb_download">应用宝链接地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="business_yyb_download" id="business_yyb_download" value="<?php echo $_smarty_tpl->tpl_vars['business_yyb_download']->value;?>
" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="business_ios_download">iOS安装包下载地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="business_ios_download" id="business_ios_download" value="<?php echo $_smarty_tpl->tpl_vars['business_ios_download']->value;?>
" /></dd>
      </dl>
  </div>
  <div class="item hide" id="peisong">
    <dl class="clearfix">
      <dt><label for="peisong_appname">APP名称：</label></dt>
      <dd><input class="input-medium" type="text" name="peisong_appname" id="peisong_appname" value="<?php echo $_smarty_tpl->tpl_vars['peisong_appname']->value;?>
" /></dd>
    </dl>
      <dl class="clearfix">
        <dt><label>最新版本：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <input class="span2" id="peisong_android_version" name="peisong_android_version" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_android_version']->value;?>
" />
            </div>
    		<div class="input-prepend">
              <span class="add-on">iOS：</span>
              <input class="span2" id="peisong_ios_version" name="peisong_ios_version" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_ios_version']->value;?>
" />
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>更新时间：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <input class="span2 updateDate" id="peisong_android_update" name="peisong_android_update" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_android_update']->value;?>
" />
            </div>
    		<div class="input-prepend">
              <span class="add-on">iOS：</span>
              <input class="span2 updateDate" id="peisong_ios_update" name="peisong_ios_update" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_ios_update']->value;?>
" />
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>强制升级：</label></dt>
        <dd class="clearfix">
          <label>
            <input id="peisong_android_force" name="peisong_android_force" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['peisong_android_force']->value) {?> checked<?php }?> />
            <span class="add-on">Android</span>
          </label>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input id="peisong_ios_force" name="peisong_ios_force" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['peisong_ios_force']->value) {?> checked<?php }?> />
            <span class="add-on">iOS</span>
          </label>
      	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>更新内容：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <textarea class="input-xlarge" style="height: 100px;" name="peisong_android_note" id="peisong_android_note"><?php echo $_smarty_tpl->tpl_vars['peisong_android_note']->value;?>
</textarea>
            </div>
    		<div class="input-prepend">
              <span class="add-on">iOS：</span>
              <textarea class="input-xlarge" style="height: 100px;" name="peisong_ios_note" id="peisong_ios_note"><?php echo $_smarty_tpl->tpl_vars['peisong_ios_note']->value;?>
</textarea>
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>文件大小：</label></dt>
        <dd class="clearfix">
    		<div class="input-prepend">
              <span class="add-on">Android：</span>
              <input class="span2" id="peisong_android_size" name="peisong_android_size" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_android_size']->value;?>
" />
            </div>
    	</dd>
      </dl>
      <dl class="clearfix">
        <dt><label>LOGO：<br /><small>尺寸：180*180</small>&nbsp;&nbsp;&nbsp;</label></dt>
        <dd class="thumb clearfix listImgBox">
        <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['peisong_logo']->value!='') {?> hide<?php }?>" id="filePicker5" data-type="logo" data-count="1" data-size="5120" data-imglist=""><div></div><span></span></div>
            <?php if ($_smarty_tpl->tpl_vars['peisong_logo']->value!='') {?>
        <ul id="listSection5" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_5_1"><a href='<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['peisong_logo']->value;?>
' target="_blank" title=""><img style="max-width: 150px;" alt="" src="<?php echo $_smarty_tpl->tpl_vars['cfg_attachment']->value;
echo $_smarty_tpl->tpl_vars['peisong_logo']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['peisong_logo']->value;?>
"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
        <?php } else { ?>
        <ul id="listSection5" class="listSection thumblist clearfix"></ul>
        <?php }?>
        <input type="hidden" name="peisong_logo" value="" class="imglist-hidden" id="peisong_logo">
      </dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="peisong_android_download">Android安装包下载地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="peisong_android_download" id="peisong_android_download" value="<?php echo $_smarty_tpl->tpl_vars['peisong_android_download']->value;?>
" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="peisong_yyb_download">应用宝链接地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="peisong_yyb_download" id="peisong_yyb_download" value="<?php echo $_smarty_tpl->tpl_vars['peisong_yyb_download']->value;?>
" /></dd>
      </dl>
      <dl class="clearfix">
        <dt><label for="peisong_ios_download">iOS安装包下载地址：</label></dt>
        <dd><input class="input-xxlarge" type="text" name="peisong_ios_download" id="peisong_ios_download" value="<?php echo $_smarty_tpl->tpl_vars['peisong_ios_download']->value;?>
" /></dd>
      </dl>
    <dl class="clearfix">
        <dt><label>百度地图：</label></dt>
        <dd class="clearfix">
            <div class="input-prepend">
                <span class="add-on">Android</span>
                <input class="span4" id="peisong_map_baidu_android" name="peisong_map_baidu_android" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_map_baidu_android']->value;?>
" />
            </div>
            <br />
            <div class="input-prepend">
                <span class="add-on">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS</span>
                <input class="span4" id="peisong_map_baidu_ios" name="peisong_map_baidu_ios" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_map_baidu_ios']->value;?>
" />
            </div>
            <label><input type="radio" name="peisong_map_set" value="2" <?php if ($_smarty_tpl->tpl_vars['peisong_map_set']->value==2) {?>checked="checked"<?php }?>>默认</label>
        </dd>
    </dl>
    <dl class="clearfix">
        <dt><label for="map_google">谷歌地图：</label></dt>
        <dd class="clearfix">
            <div class="input-prepend">
                <span class="add-on">Android</span>
                <input class="span4" id="peisong_map_google_android" name="peisong_map_google_android" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_map_google_android']->value;?>
" />
            </div>
            <br />
            <div class="input-prepend">
                <span class="add-on">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS</span>
                <input class="span4" id="peisong_map_google_ios" name="peisong_map_google_ios" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_map_google_ios']->value;?>
" />
            </div>
            <label><input type="radio" name="peisong_map_set" value="1" <?php if ($_smarty_tpl->tpl_vars['peisong_map_set']->value==1) {?>checked="checked"<?php }?>>默认</label>
        </dd>
    </dl>
    <dl class="clearfix">
        <dt><label for="map_amap">高德地图：</label></dt>
        <dd class="clearfix">
            <div class="input-prepend">
                <span class="add-on">Android</span>
                <input class="span4" id="peisong_map_amap_android" name="peisong_map_amap_android" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_map_amap_android']->value;?>
" />
            </div>
            <br />
            <div class="input-prepend">
                <span class="add-on">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS</span>
                <input class="span4" id="peisong_map_amap_ios" name="peisong_map_amap_ios" type="text" value="<?php echo $_smarty_tpl->tpl_vars['peisong_map_amap_ios']->value;?>
" />
            </div>
            <label><input type="radio" name="peisong_map_set" value="4" <?php if ($_smarty_tpl->tpl_vars['peisong_map_set']->value==4) {?>checked="checked"<?php }?>>默认</label>
        </dd>
    </dl>
  </div>

  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><input class="btn btn-large btn-success" type="submit" name="submit" id="btnSubmit" value="确认提交" /></dd>
  </dl>
</form>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
