<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-21 14:26:44
         compiled from "/www/wwwroot/hnup.rucheng.pro/include/plugins/6/tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:15732681655d0c78a4829cf0-80841240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '792e5629a29a79f0a434773adfa7b53d95798fcc' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/include/plugins/6/tpl/index.html',
      1 => 1559024120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15732681655d0c78a4829cf0-80841240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_basehost' => 0,
    'cfg_staticVersion' => 0,
    'staticFile' => 0,
    'step' => 0,
    'cityid' => 0,
    'cid' => 0,
    'alreadyCollection' => 0,
    'city' => 0,
    'notCollection' => 0,
    'cityName' => 0,
    'totalCount' => 0,
    'state1' => 0,
    'state2' => 0,
    'state3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0c78a486d8a0_39517727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0c78a486d8a0_39517727')) {function content_5d0c78a486d8a0_39517727($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>全国小区一键导入</title>
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/css/admin/datetimepicker.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
' />
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/css/admin/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
' />
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/css/admin/bootstrap.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
' />
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['staticFile']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
' />
<?php echo '<script'; ?>
>
    var staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/', step = <?php echo $_smarty_tpl->tpl_vars['step']->value;?>
, cityid = '<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
', cid = '<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<body>
<?php if (!$_smarty_tpl->tpl_vars['step']->value) {?>
<div class="alert alert-success" style="margin:10px 20px 0;"><button type="button" class="close" data-dismiss="alert">×</button>请处只显示已开通的分站城市，如需导入更多城市，请先开通相关城市分站！</div>

<div class="step0">
    <?php if ($_smarty_tpl->tpl_vars['alreadyCollection']->value) {?>
    <div class="alreadyCollection">
        <h4>已采集(<?php echo count($_smarty_tpl->tpl_vars['alreadyCollection']->value);?>
)：</h4>
        <ul class="clearfix">
            <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alreadyCollection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
            <li><a href="?step=4&cityid=<?php echo $_smarty_tpl->tpl_vars['city']->value['cityid'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['city']->value['cid'];?>
" title="已采集<?php echo $_smarty_tpl->tpl_vars['city']->value['totalRecord'];?>
个小区"><strong><?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
</strong><span><?php echo $_smarty_tpl->tpl_vars['city']->value['totalRecord'];?>
</span></a></li>
            <?php } ?>
        </ul>
    </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notCollection']->value) {?>
    <div class="notCollection">
        <h4>未采集(<?php echo count($_smarty_tpl->tpl_vars['notCollection']->value);?>
)：</h4>
        <ul class="clearfix">
            <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notCollection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
            <li data-cid="<?php echo $_smarty_tpl->tpl_vars['city']->value['cid'];?>
"><a href="?step=1&cityid=<?php echo $_smarty_tpl->tpl_vars['city']->value['cityid'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['city']->value['cid'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
</strong></a></li>
            <?php } ?>
        </ul>
    </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['alreadyCollection']->value&&!$_smarty_tpl->tpl_vars['notCollection']->value) {?>
    <div class="empty">暂未查询要到导入的城市，请先开通城市分站！</div>
    <?php }?>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['step']->value==4) {?>
<div class="search">
    <label>【<?php echo $_smarty_tpl->tpl_vars['cityName']->value;?>
】采集数据管理&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">返回首页</a></label>
</div>

<div class="filter clearfix">
    <div class="f-left">
        <div class="btn-group" id="selectBtn">
            <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="check"></span><span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="javascript:;" data-id="1">全选</a></li>
                <li><a href="javascript:;" data-id="0">不选</a></li>
            </ul>
        </div>
        <button class="btn" data-toggle="dropdown" id="delBtn">删除</button>
        <div class="btn-group" id="stateBtn">
            <button class="btn dropdown-toggle" data-toggle="dropdown">全部信息(<span class="totalCount"><?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
</span>)<span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="javascript:;" data-id="">全部信息(<span class="totalCount"><?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
</span>)</a></li>
                <li><a href="javascript:;" data-id="0">待采集(<span class="totalGray"><?php echo $_smarty_tpl->tpl_vars['state1']->value;?>
</span>)</a></li>
                <li><a href="javascript:;" data-id="1">已采集(<span class="totalAudit"><?php echo $_smarty_tpl->tpl_vars['state2']->value;?>
</span>)</a></li>
                <li><a href="javascript:;" data-id="2">已发布(<span class="totalRefuse"><?php echo $_smarty_tpl->tpl_vars['state3']->value;?>
</span>)</a></li>
            </ul>
        </div>
        <a href="?step=1&cityid=<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" class="btn btn-primary" id="collection" style="margin-left: 15px;" title="重新获取最新小区信息">采集最新小区</a>
        <?php if ($_smarty_tpl->tpl_vars['state1']->value) {?>
        <a href="?step=2&cityid=<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" class="btn btn-primary" id="collection" style="margin-left: 15px;" title="完成待采集任务">继续采集</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['state2']->value) {?><a href="?step=3&cityid=<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" class="btn btn-success" id="fabu" style="margin-left: 15px;">一键发布</a><?php }?>
        <button class="btn btn-danger" data-toggle="dropdown" id="delete" style="margin-left: 15px;">清空列表</button>
    </div>
    <div class="f-right">
        <div class="btn-group" id="pageBtn">
            <button class="btn dropdown-toggle" data-toggle="dropdown">每页10条<span class="caret"></span></button>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:;" data-id="10">每页10条</a></li>
                <li><a href="javascript:;" data-id="15">每页15条</a></li>
                <li><a href="javascript:;" data-id="20">每页20条</a></li>
                <li><a href="javascript:;" data-id="30">每页30条</a></li>
                <li><a href="javascript:;" data-id="50">每页50条</a></li>
                <li><a href="javascript:;" data-id="100">每页100条</a></li>
            </ul>
        </div>
        <button class="btn disabled" data-toggle="dropdown" id="prevBtn">上一页</button>
        <button class="btn disabled" data-toggle="dropdown" id="nextBtn">下一页</button>
        <div class="btn-group" id="paginationBtn">
            <button class="btn dropdown-toggle" data-toggle="dropdown">1/1页<span class="caret"></span></button>
            <ul class="dropdown-menu" style="left:auto; right:0;">
                <li><a href="javascript:;" data-id="1">第1页</a></li>
            </ul>
        </div>
    </div>
</div>

<ul class="thead t100 clearfix">
    <li class="row3">&nbsp;</li>
    <li class="row25 left">小区</li>
    <li class="row20 left">地址</li>
    <li class="row12 left">报价</li>
    <li class="row10 left">建筑类型</li>
    <li class="row15 left">物业费</li>
    <li class="row15 left">状态</li>
</ul>

<div class="list mt124" id="list" data-totalpage="1" data-atpage="1"><table><tbody></tbody></table><div id="loading" class="loading hide"></div></div>

<div id="pageInfo" class="pagination pagination-centered"></div>
<?php }?>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/admin/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/ui/jquery.dialog-4.2.0.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/js/ui/bootstrap.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['staticFile']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
