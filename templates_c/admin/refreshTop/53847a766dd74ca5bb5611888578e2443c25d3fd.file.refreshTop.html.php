<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-09 09:57:46
         compiled from "/www/wwwroot/hnup.rucheng.pro/admin/templates/member/refreshTop.html" */ ?>
<?php /*%%SmartyHeaderCode:7265989695d23f49ac3e615-11992840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53847a766dd74ca5bb5611888578e2443c25d3fd' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/admin/templates/member/refreshTop.html',
      1 => 1559282487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7265989695d23f49ac3e615-11992840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'adminPath' => 0,
    'installModuleArr' => 0,
    'token' => 0,
    'info_refreshFreeTimes' => 0,
    'info_refreshNormalPrice' => 0,
    'info_titleBlodlPrice' => 0,
    'info_titleBlodlDay' => 0,
    'info_titleRedPrice' => 0,
    'info_titleRedDay' => 0,
    'info_refreshSmart' => 0,
    'refresh' => 0,
    'info_topNormal' => 0,
    'top' => 0,
    'info_topPlan' => 0,
    'house_refreshFreeTimes' => 0,
    'house_refreshNormalPrice' => 0,
    'house_refreshSmart' => 0,
    'house_topNormal' => 0,
    'house_topPlan' => 0,
    'job_refreshFreeTimes' => 0,
    'job_refreshNormalPrice' => 0,
    'job_refreshSmart' => 0,
    'job_topNormal' => 0,
    'job_topPlan' => 0,
    'car_refreshFreeTimes' => 0,
    'car_refreshNormalPrice' => 0,
    'car_refreshSmart' => 0,
    'car_topNormal' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d23f49ad17de1_50623401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d23f49ad17de1_50623401')) {function content_5d23f49ad17de1_50623401($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>刷新置顶配置</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
var adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
<?php echo '</script'; ?>
>
<style media="screen">
  .domain-rules {margin: 0 50px;}
  .domain-rules th {font-size: 14px; line-height: 3em; border-bottom: 1px solid #ededed; padding: 0 5px; text-align: left;}
  .domain-rules td {font-size: 14px; line-height: 3.5em; border-bottom: 1px solid #ededed; padding: 0 5px;}
  .domain-rules .input-append, .domain-rules .input-prepend {margin: 15px 0 0;}
  .domain-rules input {font-size: 16px;}
  .editform dt label.sl {margin-top: -10px;}
  .editform dt small {display: block; margin: -8px 12px 0 0;}
  .editform dt small i {font-style: normal;}

  .priceWrap .table {width: auto;}
  .priceWrap .table th {min-width: 105px; height: 30px; text-align: center; line-height: 30px;}
  .priceWrap .table th:last-child {min-width: 50px;}
  .priceWrap .table td {text-align: center; height: 34px; line-height: 31px;}
  .priceWrap .level {font-size: 18px;}
  .priceWrap .input-append, .input-prepend {margin-bottom: 0;}
  .priceWrap .del {display: inline-block; vertical-align: middle;}
  .priceWrap .input-append select {margin: -5px -6px 0 -6px; border-radius: 0;}

  #agreement {width:530px;height:200px;}

  .input-prepend.input-append .add-on:first-child, .input-prepend.input-append .btn:first-child {margin-right: -1px;-webkit-border-radius: 4px 0 0 4px;-moz-border-radius: 4px 0 0 4px;border-radius: 4px 0 0 4px;margin-bottom: 10px;}
</style>
</head>

<body>
<div class="btn-group config-nav" data-toggle="buttons-radio">
  <?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><button type="button" class="btn active" data-type="info">二手</button><?php }?>
  <?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><button type="button" class="btn<?php if (!in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?> active<?php }?>" data-type="house">房产</button><?php }?>
  <?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><button type="button" class="btn<?php if (!in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&!in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?> active<?php }?>" data-type="job">招聘</button><?php }?>
  <?php if (in_array("car",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><button type="button" class="btn<?php if (!in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&!in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&!in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?> active<?php }?>" data-type="car">汽车</button><?php }?>
</div>

<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />

  <?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
  <div class="item">
    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">刷新配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="info_refreshFreeTimes">免费次数：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini" type="number" id="info_refreshFreeTimes" name="info_refreshFreeTimes" value="<?php echo $_smarty_tpl->tpl_vars['info_refreshFreeTimes']->value;?>
">
          <span class="add-on">次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="info_refreshNormalPrice">普通刷新：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini refreshNormalPrice" type="number" id="info_refreshNormalPrice" name="info_refreshNormalPrice" value="<?php echo $_smarty_tpl->tpl_vars['info_refreshNormalPrice']->value;?>
">
          <span class="add-on">元/次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="info_titleBlodlPrice">标题加粗：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini titleBlodlPrice" type="number" id="info_titleBlodlPrice" name="info_titleBlodlPrice" value="<?php echo $_smarty_tpl->tpl_vars['info_titleBlodlPrice']->value;?>
">
          <span class="add-on"><?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</span>
        </div>
        <div class="input-prepend input-append">
            <span class="add-on" style="">时长</span>
          <input class="input-mini titleBlodlDay" type="number" id="info_titleBlodlDay" name="info_titleBlodlDay" value="<?php echo $_smarty_tpl->tpl_vars['info_titleBlodlDay']->value;?>
">
          <span class="add-on">天</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="info_titleRedPrice">标题加红：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini titleRedPrice" type="number" id="info_titleRedPrice" name="info_titleRedPrice" value="<?php echo $_smarty_tpl->tpl_vars['info_titleRedPrice']->value;?>
">
          <span class="add-on"><?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</span>
        </div>
        <div class="input-prepend input-append">
            <span class="add-on" style="">时长</span>
          <input class="input-mini titleRedDay" type="number" id="info_titleRedDay" name="info_titleRedDay" value="<?php echo $_smarty_tpl->tpl_vars['info_titleRedDay']->value;?>
">
          <span class="add-on">天</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>智能刷新：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、单价、优惠的值按照普通刷新一次的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped refreshSmartTable">
            <thead>
              <tr>
                <th>次数</th>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>单价</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['info_refreshSmart']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['refresh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refresh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_refreshSmart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refresh']->key => $_smarty_tpl->tpl_vars['refresh']->value) {
$_smarty_tpl->tpl_vars['refresh']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="info_refresh[times][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['times'];?>
" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="info_refresh[day][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_refresh[price][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="info_refresh[times][]" value="" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="info_refresh[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_refresh[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="7">
                  <button type="button" class="btn btn-small addPrice" data-type="refresh">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>

    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">置顶配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>普通置顶：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、优惠的值按照第一条的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped topNormalTable">
            <thead>
              <tr>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['info_topNormal']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['top'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_topNormal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top']->key => $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="info_topNormal[day][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topNormal[price][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="info_topNormal[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topNormal[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="5">
                  <button type="button" class="btn btn-small addPrice" data-type="topNormal">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>计划置顶：</label></dt>
      <dd>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>时长</th>
                <th>周一</th>
                <th>周二</th>
                <th>周三</th>
                <th>周四</th>
                <th>周五</th>
                <th>周六</th>
                <th>周日</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>全天</td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[0]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[1]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[2]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[3]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[4]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[5]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="info_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[6]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
              </tr>
                <tr>
                  <td>早8点-晚8点</td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="info_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[0]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="info_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[1]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="info_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[2]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="info_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[3]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="info_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[4]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="info_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[5]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="info_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['info_topPlan']->value[6]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
  </div>
  <?php }?>

  <?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
  <div class="item<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?> hide<?php }?>">
    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">刷新配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="house_refreshFreeTimes">免费次数：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini" type="number" id="house_refreshFreeTimes" name="house_refreshFreeTimes" value="<?php echo $_smarty_tpl->tpl_vars['house_refreshFreeTimes']->value;?>
">
          <span class="add-on">次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="house_refreshNormalPrice">普通刷新：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini refreshNormalPrice" type="number" id="house_refreshNormalPrice" name="house_refreshNormalPrice" value="<?php echo $_smarty_tpl->tpl_vars['house_refreshNormalPrice']->value;?>
">
          <span class="add-on">元/次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>智能刷新：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、单价、优惠的值按照普通刷新一次的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped refreshSmartTable">
            <thead>
              <tr>
                <th>次数</th>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>单价</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['house_refreshSmart']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['refresh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refresh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['house_refreshSmart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refresh']->key => $_smarty_tpl->tpl_vars['refresh']->value) {
$_smarty_tpl->tpl_vars['refresh']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="house_refresh[times][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['times'];?>
" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="house_refresh[day][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_refresh[price][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="house_refresh[times][]" value="" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="house_refresh[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_refresh[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="7">
                  <button type="button" class="btn btn-small addPrice" data-type="refresh">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>

    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">置顶配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>普通置顶：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、优惠的值按照第一条的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped topNormalTable">
            <thead>
              <tr>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['house_topNormal']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['top'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['house_topNormal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top']->key => $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="house_topNormal[day][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topNormal[price][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="house_topNormal[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topNormal[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="5">
                  <button type="button" class="btn btn-small addPrice" data-type="topNormal">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>计划置顶：</label></dt>
      <dd>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>时长</th>
                <th>周一</th>
                <th>周二</th>
                <th>周三</th>
                <th>周四</th>
                <th>周五</th>
                <th>周六</th>
                <th>周日</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>全天</td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[0]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[1]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[2]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[3]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[4]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[5]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="house_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[6]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
              </tr>
                <tr>
                  <td>早8点-晚8点</td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="house_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[0]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="house_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[1]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="house_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[2]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="house_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[3]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="house_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[4]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="house_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[5]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="house_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['house_topPlan']->value[6]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
  </div>
  <?php }?>

  <?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
  <div class="item<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)||in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?> hide<?php }?>">
    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">刷新配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="job_refreshFreeTimes">免费次数：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini" type="number" id="job_refreshFreeTimes" name="job_refreshFreeTimes" value="<?php echo $_smarty_tpl->tpl_vars['job_refreshFreeTimes']->value;?>
">
          <span class="add-on">次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="job_refreshNormalPrice">普通刷新：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini refreshNormalPrice" type="number" id="job_refreshNormalPrice" name="job_refreshNormalPrice" value="<?php echo $_smarty_tpl->tpl_vars['job_refreshNormalPrice']->value;?>
">
          <span class="add-on">元/次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>智能刷新：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、单价、优惠的值按照普通刷新一次的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped refreshSmartTable">
            <thead>
              <tr>
                <th>次数</th>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>单价</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['job_refreshSmart']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['refresh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refresh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_refreshSmart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refresh']->key => $_smarty_tpl->tpl_vars['refresh']->value) {
$_smarty_tpl->tpl_vars['refresh']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="job_refresh[times][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['times'];?>
" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="job_refresh[day][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_refresh[price][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="job_refresh[times][]" value="" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="job_refresh[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_refresh[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="7">
                  <button type="button" class="btn btn-small addPrice" data-type="refresh">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>

    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">置顶配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>普通置顶：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、优惠的值按照第一条的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped topNormalTable">
            <thead>
              <tr>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['job_topNormal']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['top'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_topNormal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top']->key => $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="job_topNormal[day][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topNormal[price][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="job_topNormal[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topNormal[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="5">
                  <button type="button" class="btn btn-small addPrice" data-type="topNormal">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>计划置顶：</label></dt>
      <dd>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>时长</th>
                <th>周一</th>
                <th>周二</th>
                <th>周三</th>
                <th>周四</th>
                <th>周五</th>
                <th>周六</th>
                <th>周日</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>全天</td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[0]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[1]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[2]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[3]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[4]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[5]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="job_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[6]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
              </tr>
                <tr>
                  <td>早8点-晚8点</td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="job_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[0]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="job_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[1]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="job_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[2]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="job_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[3]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="job_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[4]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="job_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[5]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="job_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[6]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
  </div>
  <?php }?>

  <?php if (in_array("car",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
  <div class="item<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)||in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)||in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?> hide<?php }?>">
    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">刷新配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="car_refreshFreeTimes">免费次数：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini" type="number" id="car_refreshFreeTimes" name="car_refreshFreeTimes" value="<?php echo $_smarty_tpl->tpl_vars['car_refreshFreeTimes']->value;?>
">
          <span class="add-on">次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label for="car_refreshNormalPrice">普通刷新：</label></dt>
      <dd>
        <div class="input-append">
          <input class="input-mini refreshNormalPrice" type="number" id="car_refreshNormalPrice" name="car_refreshNormalPrice" value="<?php echo $_smarty_tpl->tpl_vars['car_refreshNormalPrice']->value;?>
">
          <span class="add-on">元/次</span>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>智能刷新：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、单价、优惠的值按照普通刷新一次的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped refreshSmartTable">
            <thead>
              <tr>
                <th>次数</th>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>单价</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['car_refreshSmart']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['refresh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refresh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['car_refreshSmart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refresh']->key => $_smarty_tpl->tpl_vars['refresh']->value) {
$_smarty_tpl->tpl_vars['refresh']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="car_refresh[times][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['times'];?>
" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="car_refresh[day][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_refresh[price][]" value="<?php echo $_smarty_tpl->tpl_vars['refresh']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 times" name="car_refresh[times][]" value="" type="number">
                    <span class="add-on">次</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="car_refresh[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_refresh[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="unit">0元</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="7">
                  <button type="button" class="btn btn-small addPrice" data-type="refresh">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>

    <dl class="clearfix">
      <dt><strong style="font-size: 16px;">置顶配置&nbsp;&nbsp;&nbsp;&nbsp;</strong></dt>
      <dd>&nbsp;</dd>
    </dl>
    <dl class="clearfix">
      <dt><label>普通置顶：</label></dt>
      <dd>
        <h5 class="stit" style="margin-top: 0;"><span class="label label-info">折扣、优惠的值按照第一条的价格计算</span></h5>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped topNormalTable">
            <thead>
              <tr>
                <th>时长</th>
                <th>价格</th>
                <th>折扣</th>
                <th>优惠</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['car_topNormal']->value) {?>
              <?php  $_smarty_tpl->tpl_vars['top'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['car_topNormal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top']->key => $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->_loop = true;
?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="car_topNormal[day][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['day'];?>
" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topNormal[price][]" value="<?php echo $_smarty_tpl->tpl_vars['top']->value['price'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td>
                  <div class="input-append">
                    <input class="span1 day" name="car_topNormal[day][]" value="" type="number">
                    <span class="add-on">天</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topNormal[price][]" value="" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td class="discount">无</td>
                <td class="offer">0元</td>
                <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
              <?php }?>
            </tbody>
            <tbody>
              <tr>
                <td colspan="5">
                  <button type="button" class="btn btn-small addPrice" data-type="topNormal">增加一行</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><label>计划置顶：</label></dt>
      <dd>
        <div class="priceWrap">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>时长</th>
                <th>周一</th>
                <th>周二</th>
                <th>周三</th>
                <th>周四</th>
                <th>周五</th>
                <th>周六</th>
                <th>周日</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>全天</td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[0]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[1]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[2]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[3]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[4]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[5]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
                <td>
                  <div class="input-append">
                    <input class="input-small price" step="0.01" name="car_topPlan[all][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[6]['all'];?>
" type="number">
                    <span class="add-on">元</span>
                  </div>
                </td>
              </tr>
                <tr>
                  <td>早8点-晚8点</td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="car_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[0]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="car_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[1]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="car_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[2]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="car_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[3]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="car_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[4]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="car_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[5]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                  <td>
                    <div class="input-append">
                      <input class="input-small price" step="0.01" name="car_topPlan[day][]" value="<?php echo $_smarty_tpl->tpl_vars['job_topPlan']->value[6]['day'];?>
" type="number">
                      <span class="add-on">元</span>
                    </div>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
      </dd>
    </dl>
  </div>
  <?php }?>

  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><input class="btn btn-large btn-success" type="submit" name="submit" id="btnSubmit" value="确认提交" /></dd>
  </dl>
</form>

<?php echo '<script'; ?>
 type="text/templates" id="refresh">
<tr>
  <td>
    <div class="input-append">
      <input class="span1 times" name="__refresh[times][]" value="" type="number">
      <span class="add-on">次</span>
    </div>
  </td>
  <td>
    <div class="input-append">
      <input class="span1 day" name="__refresh[day][]" value="" type="number">
      <span class="add-on">天</span>
    </div>
  </td>
  <td>
    <div class="input-append">
      <input class="input-small price" step="0.01" name="__refresh[price][]" value="" type="number">
      <span class="add-on">元</span>
    </div>
  </td>
  <td class="discount">无</td>
  <td class="unit">0元</td>
  <td class="offer">0元</td>
  <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
</tr>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/templates" id="topNormal">
<tr>
  <td>
    <div class="input-append">
      <input class="span1 day" name="__topNormal[day][]" value="" type="number">
      <span class="add-on">天</span>
    </div>
  </td>
  <td>
    <div class="input-append">
      <input class="input-small price" step="0.01" name="__topNormal[price][]" value="" type="number">
      <span class="add-on">元</span>
    </div>
  </td>
  <td class="discount">无</td>
  <td class="offer">0元</td>
  <td><a href="javascript:;" class="del" title="删除"><i class="icon-trash"></i></a></td>
</tr>
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
