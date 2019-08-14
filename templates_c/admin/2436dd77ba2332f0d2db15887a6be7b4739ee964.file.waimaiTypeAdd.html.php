<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-31 09:06:16
         compiled from "/www/wwwroot/hnup.rucheng.pro/admin/templates/waimai/waimaiTypeAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:21246621055d40e988f34a97-66939255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2436dd77ba2332f0d2db15887a6be7b4739ee964' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/admin/templates/waimai/waimaiTypeAdd.html',
      1 => 1561025562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21246621055d40e988f34a97-66939255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'action' => 0,
    'adminPath' => 0,
    'id' => 0,
    'sort' => 0,
    'title' => 0,
    'icon' => 0,
    'iconturl' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d40e98901e087_08967075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d40e98901e087_08967075')) {function content_5d40e98901e087_08967075($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>店铺分类</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<style>
.reupload {display: none;}
.list-holder .piece li {text-align: center;}
#listSection img {max-height:86px;}
.upload-tip {line-height: 1 !important;}
</style>
<?php echo '<script'; ?>
>
var action = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
var modelType = 'waimai';
<?php echo '</script'; ?>
>
</head>

<body>
<div class="main-content">

  <div class="page-content">
    <!-- /section:settings.box -->
    <div class="page-content-area">

      <div class="">
        <div class="col-sm-12">
          <form enctype="multipart/form-data" class="form-horizontal" id="shoptype-form" action="waimaiTypeAdd.php" method="post">
            <div class="alert alert-danger" id="shoptype-form_es_" style="display:none">
              <p>请更正下列输入错误:</p>
              <ul><li>dummy</li></ul>
            </div>
            <!---->
            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden">
            <div class="form-group">
              <label class="col-sm-1"><label for="ShopType_tag">店铺分类编号</label></label>
              <input class="col-sm-1" size="10" maxlength="10" name="sort" id="ShopType_tag" type="text" value="<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['sort']->value);?>
">
              <span class="help-button">
                <span class="ace-icon fa fa-info bigger-120" data-rel="popover" data-trigger="hover" data-placement="right" data-content="决定展示顺序，编号越小越靠前" title="" data-original-title="店铺分类编号说明"></span>
                <div class="popover fade right in" style="top:-24px;left:300.39px;display:none;">
                  <div class="arrow" style="top:50%;"></div>
                  <h3 class="popover-title">店铺分类编号说明</h3>
                  <div class="popover-content">决定展示顺序，编号越大越靠前</div>
                </div>
              </span>
            </div>
            <div class="form-group">
              <label class="col-sm-1"><label for="ShopType_name">店铺分类名称</label></label>
              <input class="col-sm-1" size="10" maxlength="10" name="title" id="ShopType_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
            </div>
            <div class="form-group">
              <label class="col-sm-1"><label for="icon">店铺分类图标</label></label>
              <div class="listImgBox">
                <div class="list-holder">
                  <ul id="listSection" class="clearfix listSection piece">
                    <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
                    <li id="WU_FILE_0" class="pubitem">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['iconturl']->value;?>
" target="_blank" title="" class="enlarge"><img src="<?php echo $_smarty_tpl->tpl_vars['iconturl']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['iconturl']->value;?>
"></a><a class="reupload li-rm" href="javascript:;">删除图片</a>
                    </li>
                    <?php }?>
                  </ul>
                  <input type="hidden" name="icon" class="imglist-hidden" value="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
">
                </div>
                <div class="btn-section clearfix">
                  <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
                  <div class="uploadinp filePicker" id="filePicker" data-type="advthumb" data-count="1" data-size="1024" data-imglist="" style="display: none;"><div id="flasHolder"></div><span>添加图片</span></div>
                  <div class="upload-tip">
                    <p><a href="javascript:;" class="deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<span class="fileerror"></span></p>
                  </div>
                  <?php } else { ?>
                  <div class="uploadinp filePicker" id="filePicker" data-type="advthumb" data-count="1" data-size="1024" data-imglist=""><div id="flasHolder"></div><span>添加图片</span></div>
                  <div class="upload-tip">
                    <p><a href="javascript:;" class="deleteAllAtlas" style="display:none;">删除所有</a>&nbsp;&nbsp;<span class="fileerror"></span></p>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="clearfix form-actions">
              <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit" id="submitBtn" onclick="return checkFrom(this.form)"><i class="ace-icon fa fa-check bigger-110"></i>保存</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
    $('[data-rel="popover"]').popover();
});

//表单提交
function checkFrom(form){
    var form = $("#shoptype-form"), action = form.attr("action"), data = form.serialize();
    var btn = $("#submitBtn");

    btn.attr("disabled", true);

    $.ajax({
        url: action,
        type: "post",
        data: data,
        dataType: "json",
        success: function(res){
            if(res.state == 100){
                location.href = "waimaiType.php";
            }else{
                $.dialog.alert(res.info);
                btn.attr("disabled", false);
            }
        },
        error: function(){
            $.dialog.alert("网络错误，保存失败！");
            btn.attr("disabled", false);
        }
    })

}
<?php echo '</script'; ?>
>
<?php }} ?>
