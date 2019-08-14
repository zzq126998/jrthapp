<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:35:50
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\car_receive_broker.html" */ ?>
<?php /*%%SmartyHeaderCode:8840033125d5365760a1210-92727010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4bcf9a80e4bf08328e3d5683af901aaf372df86' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\car_receive_broker.html',
      1 => 1553914018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8840033125d5365760a1210-92727010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'module' => 0,
    'comid' => 0,
    'state' => 0,
    'type' => 0,
    'cfg_staticPath' => 0,
    'langData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d53657614efa8_81998906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d53657614efa8_81998906')) {function content_5d53657614efa8_81998906($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((("收到的入驻申请").(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/car_receive_broker.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', comid = <?php echo $_smarty_tpl->tpl_vars['comid']->value;?>
, atpage = 1, totalCount = 0, pageSize = 10, state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("car_receive_broker", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
	<style>
	.list {padding: 0 15px;}
	</style>
	<div class="nav-tabs fn-clear">
		<ul class="fn-clear">
			<li data-id="" class="active"><a href="javascript:;">全部 (<span id="total">0</span>)</a></li>
			<li data-id="1,2"><a href="javascript:;">已处理 (<span id="yes_total">0</span>)</a></li>
			<li data-id="0"><a href="javascript:;">未处理 (<span id="not_total">0</span>)</a></li>
		</ul>
	</div>
	<div class="container fn-clear">
		<div class="list house_receive_broker" id="list">
			<p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/ajax-loader.gif" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
...</p></div>
		<div class="pagination fn-clear"></div>
	</div>
</div>

<div class="model model_fail">
	<div class="bg"></div>
	<a href="javascript:;" class="close">×</a>
	<P class="info"></P>
	<div class="model_m">
		<div class="model_title">拒绝理由</div>
		<div class="model_body">
			<textarea name="" id="" cols="30" rows="4" placeholder="请输入..."></textarea>
			<p class="choose"><label for="" class="active" data-id="1"><em></em>人员已满</label><label for="" data-id="2"><em></em>不符合门店要求</label></p>
		</div>
		<div class="model_btns">
			<a href="javascript:;" class="ok">确定</a>
		</div>
	</div>
</div>

<!-- 删除确认层 -->
<div class="model model_del">
	<div class="bg"></div>
	<a href="javascript:;" class="close">×</a>
	<div class="model_m">
		<div class="model_title" data-del="此操作将删除该顾问账号！！！" data-agree="确定要通过该申请吗？"></div>
		<div class="model_btns">
			<a href="javascript:;" class="cancel">取消</a>
			<a href="javascript:;" class="ok">确定</a>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/car_receive_broker.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
