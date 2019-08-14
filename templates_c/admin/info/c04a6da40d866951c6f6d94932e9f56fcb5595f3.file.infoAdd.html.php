<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:29:15
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\info\infoAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:3827765155d5363eb861222-86999436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c04a6da40d866951c6f6d94932e9f56fcb5595f3' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\info\\infoAdd.html',
      1 => 1561028434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3827765155d5363eb861222-86999436',
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
    'imglist' => 0,
    'typeid' => 0,
    'addr' => 0,
    'typeListArr' => 0,
    'addrListArr' => 0,
    'action' => 0,
    'adminPath' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'title' => 0,
    'color' => 0,
    'username' => 0,
    'userid' => 0,
    'cityid' => 0,
    'priceopt' => 0,
    'price_switch' => 0,
    'pricenames' => 0,
    'price' => 0,
    'yunfei' => 0,
    'itemList' => 0,
    'body' => 0,
    'mbody' => 0,
    'person' => 0,
    'tel' => 0,
    'qq' => 0,
    'click' => 0,
    'weight' => 0,
    'valid' => 0,
    'arcrankList' => 0,
    'arcrank' => 0,
    'video' => 0,
    'rec' => 0,
    'fire' => 0,
    'top' => 0,
    'editorFile' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5363eb903449_87531719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5363eb903449_87531719')) {function content_5d5363eb903449_87531719($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
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
var imglist = {"list1": <?php echo $_smarty_tpl->tpl_vars['imglist']->value;?>
,},
	typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
, addr = <?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
, typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, addrListArr = <?php echo $_smarty_tpl->tpl_vars['addrListArr']->value;?>
, action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', modelType = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
',
	cfg_term = "pc", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
var service = 'info';
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
  <dl class="clearfix">
    <dt><label for="typeid">信息分类：</label></dt>
    <dd>
      <span id="typeList">
        <select name="typeid" id="typeid" class="input-large"></select>
      </span>
      <span class="input-tips"><s></s>请选择信息分类</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="title">信息标题：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="title" id="title" data-regex=".{5,60}" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
      <div class="color_pick"><em style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
;"></em></div>
      <span class="input-tips"><s></s>请输入信息标题，5-60个汉字</span>
      <input type="hidden" name="color" id="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" />
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="user">对应会员：</label></dt>
    <dd style="position:static;">
      <input class="input-medium" type="text" name="user" id="user" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" autocomplete="off" />
      <input type="hidden" name="userid" id="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
      <span class="input-tips"><s></s>请输入网站对应会员名</span>
      <div id="userList" class="popup_key"></div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="addr">所属地区：</label></dt>
    <dd>
			<div class="cityName addrBtn" data-field="addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addr']->value,'split'=>' '),$_smarty_tpl);?>
" data-id=<?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
>
				<?php if ($_smarty_tpl->tpl_vars['addr']->value!=''&&$_smarty_tpl->tpl_vars['addr']->value!="''") {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addr']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else { ?>请选择<?php }?>
			</div>
			<input type="hidden" name="addr" id="addr" value=<?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
>
            <input type="hidden" name="cityid" id="cityid" value=<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
>
    </dd>
  </dl>

  <dl class="clearfix">
	  <dt>价格开关：</dt>
	  <dd class="radio">
	    <?php echo smarty_function_html_radios(array('name'=>"price_switch",'values'=>$_smarty_tpl->tpl_vars['priceopt']->value,'checked'=>$_smarty_tpl->tpl_vars['price_switch']->value,'output'=>$_smarty_tpl->tpl_vars['pricenames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

	    <span class="input-tips" style="display:inline-block;"><s></s>如果关闭，前台价格不显示</span>
	  </dd>
  </dl>

  <dl class="clearfix priceinfo <?php if ($_smarty_tpl->tpl_vars['price_switch']->value==1) {?>hide<?php }?>">
    <dt><label>价格：</label></dt>
    <dd>
        <div class="input-prepend input-append">
            <input class="input-mini" type="number" name="price" id="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" data-regex="0|\d*\.?\d+">
            <span class="add-on">元</span>
            <span class="input-tips" style="display:inline-block;"><s></s>数字类型(面议请填写0元)</span>
        </div>
    </dd>
</dl>

    <dl class="clearfix priceinfo <?php if ($_smarty_tpl->tpl_vars['price_switch']->value==1) {?>hide<?php }?>">
        <dt><label>运费：</label></dt>
        <dd>
            <div class="input-prepend input-append">
                <input class="input-mini" type="number" name="yunfei" id="price" value="<?php echo $_smarty_tpl->tpl_vars['yunfei']->value;?>
" min="0" data-regex="0|\d*\.?\d+">
                <span class="add-on">元</span>
                <span class="input-tips" style="display:inline-block;"><s></s>数字类型(若无则填写0元)</span>
            </div>
        </dd>
    </dl>
  <div id="itemList" class="hide" style="background:#f5f5f5; padding:5px 0;"><?php echo $_smarty_tpl->tpl_vars['itemList']->value;?>
</div>
  <dl class="clearfix">
    <dt>信息说明：</dt>
    <dd>
      <ul class="nav nav-tabs" style="margin-bottom:5px;">
        <li class="active"><a href="#pc">电脑端</a></li>
        <li><a href="#mobile">移动端</a></li>
      </ul>
      <div id="pc">
      	<?php echo '<script'; ?>
 id="body" name="body" type="text/plain" style="width:85%;height:500px"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
<?php echo '</script'; ?>
>
      </div>
      <div id="mobile" class="hide">
      	<?php echo '<script'; ?>
 id="mbody" name="mbody" type="text/plain" style="width:960px;height:500px"><?php echo $_smarty_tpl->tpl_vars['mbody']->value;?>
<?php echo '</script'; ?>
>
      </div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="person">联系人：</label></dt>
    <dd>
      <input class="input-medium" type="text" name="person" id="person" value="<?php echo $_smarty_tpl->tpl_vars['person']->value;?>
" />
      <label for="tel">电话或手机：
        <input class="input-medium" type="text" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" />
      </label>
      <label for="qq">QQ/MSN：
        <input class="input-medium" type="text" name="qq" id="qq" value="<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
" />
      </label>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="click">浏览次数：</label></dt>
    <dd>
      <span><input class="input-mini" type="number" name="click" min="0" id="click" data-regex="[1-9]\d*" value="<?php echo $_smarty_tpl->tpl_vars['click']->value;?>
" /></span>
      <label class="ml30" for="weight">排序：</label><input class="input-mini" type="number" name="weight" id="weight" min="0" data-regex="[1-9]\d*" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
      <span class="input-tips"><s></s>必填，排序越大，越排在前面</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="valid">有效期：</label></dt>
    <dd class="radio">
      <input type="text" class="input-medium" id="valid" name="valid" value="<?php echo $_smarty_tpl->tpl_vars['valid']->value;?>
" />
      <label for="arcrank">信息状态：
        <select name="arcrank" id="arcrank" class="input-medium">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arcrankList']->value,'selected'=>$_smarty_tpl->tpl_vars['arcrank']->value),$_smarty_tpl);?>

        </select>
      </label>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>上传图片：</dt>
		<dd class="listImgBox hide">
			<div class="list-holder">
				<ul id="listSection2" class="clearfix listSection"></ul>
				<input type="hidden" name="imglist" value='<?php echo $_smarty_tpl->tpl_vars['imglist']->value;?>
' class="imglist-hidden">
			</div>
			<div class="btn-section clearfix">
				<div class="uploadinp filePicker" id="filePicker2" data-type="desc" data-count="999" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist="list1"><div id="flasHolder"></div><span>添加图片</span></div>
				<div class="upload-tip">
					<p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
				</div>
			</div>
		</dd>
  </dl>

  <dl class="clearfix" id="type0">
    <dt>上传视频：</dt>
    <dd>
		<input name="video" type="hidden" id="video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" />
		<div class="spic<?php if ($_smarty_tpl->tpl_vars['video']->value=='') {?> hide<?php }?>">
			<div class="sholder" id="videoPreview">
				 <a href="/include/videoPreview.php?f=" data-id="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
">预览视频</a>
			</div>
			<a href="javascript:;" class="reupload">重新上传</a>
		</div>
		<iframe src ="/include/upfile.inc.php?mod=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&type=video&obj=video&filetype=video" style="width:100%; height:25px;<?php if ($_smarty_tpl->tpl_vars['video']->value!='') {?> display: none;<?php }?>" scrolling="no" frameborder="0" marginwidth="0" marginheight="0"></iframe>
    </dd>
  </dl>

  <dl class="clearfix">
    <dt><label>其它设置：</label></dt>
    <dd class="radio">
      <label><input type="checkbox" name="rec" value="1"<?php if ($_smarty_tpl->tpl_vars['rec']->value==1) {?> checked<?php }?> />推荐</label>
      <label><input type="checkbox" name="fire" value="1"<?php if ($_smarty_tpl->tpl_vars['fire']->value==1) {?> checked<?php }?> />火急</label>
      <!-- <label><input type="checkbox" name="top" value="1"<?php if ($_smarty_tpl->tpl_vars['top']->value==1) {?> checked<?php }?> />置顶</label> -->
    </dd>
  </dl>
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button></dd>
  </dl>
</form>

<?php echo $_smarty_tpl->tpl_vars['editorFile']->value;?>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
