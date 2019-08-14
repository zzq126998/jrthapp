<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-14 09:35:50
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\car-broker.html" */ ?>
<?php /*%%SmartyHeaderCode:18809390465d536576b34812-30881275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1412ca6302e564c9dfc843c112debb1c5afc46a6' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\car-broker.html',
      1 => 1553914026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18809390465d536576b34812-30881275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_webname' => 0,
    'templets_skin' => 0,
    'cfg_staticVersion' => 0,
    'comid' => 0,
    'state' => 0,
    'type' => 0,
    'cfg_staticPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d536576c1ee81_87302502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d536576c1ee81_87302502')) {function content_5d536576c1ee81_87302502($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable((($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][908]).(" - ")).($_smarty_tpl->tpl_vars['cfg_webname']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/car-broker.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
	var module = 'car', comid = <?php echo $_smarty_tpl->tpl_vars['comid']->value;?>
, atpage = 1, totalCount = 0, pageSize = 20, state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->tpl_vars['pageCurr'] = new Smarty_variable("car_broker", null, 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("headSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main housebroker">
	<div class="container fn-clear">
		<div class="con-title fn-clear">
			<div class="total">共<span>0</span>个<?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][44];?>
</div>
			<div class="opera">
				<form id="searchForm"><input type="text" class="keywords" placeholder="搜索<?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][44];?>
"><input type="submit" class="submit" value=""></form>
				<a href="javascript:;" class="add">添加<?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][44];?>
</a>
			</div>
		</div>
		<div class="list fn-clear" id="list"><p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/ajax-loader.gif" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
...</p></div>
		<div class="pagination fn-clear"></div>
	</div>
</div>

<!-- 新增/编辑层 -->
<div class="model model_edit">
	<div class="bg"></div>
	<a href="javascript:;" class="close">×</a>
	<form action="" class="model_m" id="zjuserForm">
		<input type="hidden" name="id" id="userid" value="0">
		<dl class="fn-clear photo">
			<dt>上传头像<input type="hidden" name="photo" id="photo" value=""></dt>
			<dd>
				<div class="up">
					<p class="sn"></p>
					<p class="txt">上传照片</p>
					<input type="file" name="Filedata" value="" class="Filedata" id="Filedata">
					<a href="javascript:;" class="remove"></a>
				</div>
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>姓名</dt>
			<dd>
				<input type="text" name="nickname" id="nickname" class="nickname" placeholder="请输入联系人姓名">
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>电话号码</dt>
			<dd>
				<input type="text" name="phone" id="phone" class="phone" placeholder="请输入您的手机号">
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>登陆密码</dt>
			<dd>
				<input type="text" name="password" id="password" class="password" placeholder="请输入密码">
			</dd>
		</dl>
		<dl class="fn-clear">
			<dt>金牌顾问</dt>
			<dd>
				<input type="checkbox" name="quality" id="quality" class="quality" value="1">
			</dd>
		</dl>
		<p class="info"></p>
		<input type="submit" class="submit" value="添加">
	</form>
</div>

<!-- 删除确认层 -->
<div class="model model_del">
	<div class="bg"></div>
	<a href="javascript:;" class="close">×</a>
	<div class="model_m">
		<div class="model_title">确认删除此<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][909];?>
吗？</div>
		<div class="model_btns">
			<a href="javascript:;" class="cancel">取消</a>
			<a href="javascript:;" class="ok">确定</a>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.ajaxFileUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/car-broker.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
