<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:36
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:17134897985d511feccf94e9-45376651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ef881258f3b460a84cfc6c1a91842562146679b' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\manage.html',
      1 => 1561715346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17134897985d511feccf94e9-45376651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'langData' => 0,
    'cfg_webname' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_hideUrl' => 0,
    'module' => 0,
    'state' => 0,
    'type' => 0,
    'installModuleArr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511fecda3400_53914239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511fecda3400_53914239')) {function content_5d511fecda3400_53914239($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][12];?>
 - <?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/manage.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/refreshTop.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/fabu-pay.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';

	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");

	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
;

	var module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', atpage = 1, totalCount = 0, pageSize = 10, state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
', type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';

	var editUrl = '<?php echo getUrlPath(array('service'=>"member",'type'=>"user",'template'=>"fabu",'action'=>((string)$_smarty_tpl->tpl_vars['module']->value)),$_smarty_tpl);?>
';

  var statisticsUrl = '<?php echo getUrlPath(array('service'=>"member",'type'=>"user",'template'=>"statistics",'action'=>((string)$_smarty_tpl->tpl_vars['module']->value)),$_smarty_tpl);?>
';
  <?php if (in_array('live',$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
  var imgtextUrl = '<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'live_imgtext','param'=>'id='),$_smarty_tpl);?>
';
  <?php }?>
<?php echo '</script'; ?>
>
<style>
.table {width: 100%; margin-bottom: 20px; display: none;}
.table-bordered {border-bottom: 1px solid #ddd; border-collapse: separate; border-left: 0; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; }
.table-bordered, td, th {border-radius: 0!important;}
.table>thead>tr {color: #707070; font-weight: 400; background: repeat-x #F2F2F2; background-image: -webkit-linear-gradient(top,#f8f8f8 0,#ececec 100%); background-image: -o-linear-gradient(top,#f8f8f8 0,#ececec 100%); background-image: linear-gradient(to bottom,#f8f8f8 0,#ececec 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff8f8f8', endColorstr='#ffececec', GradientType=0); }
.table th, .table td {padding: 8px; line-height: 30px; text-align: left; vertical-align: top; border-top: 1px solid #ddd; }
.table input {padding:2px 5px;}
.table {font-size: 16px;font-weight: bold;}
</style>
</head>

<body>
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][12], null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
	<div class="container fn-clear">

		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="main">

			<?php echo $_smarty_tpl->getSubTemplate ("manage-".((string)$_smarty_tpl->tpl_vars['module']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			<div class="list <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" id="list"><p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/ajax-loader.gif" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
...</p></div>
			<div class="pagination fn-clear"></div>
	
			<?php if ($_smarty_tpl->tpl_vars['module']->value=="article") {?>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<th><input type="text" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m');?>
" id="month" title="选择月份统计发布量"></th>
					<th>数量</th>
				</thead>
				<tbody>
					<tr>
						<td>头条</td>
						<td id="total0"></td>
					</tr>
					<tr>
						<td>图集</td>
						<td id="total1"></td>
					</tr>
					<tr>
						<td>视频</td>
						<td id="total2"></td>
					</tr>
					<tr>
						<td>短视频</td>
						<td id="total3"></td>
					</tr>
				</tbody>
			</table>
			<?php }?>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("fabu-pay.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo getUrlPath(array('service'=>'member','template'=>'manage','type'=>'user','action'=>$_tmp1,'dopost'=>$_tmp2),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("refreshTop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tourl'=>$_tmp3,'act'=>$_tmp4), 0);?>

<?php } else { ?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo getUrlPath(array('service'=>'member','template'=>'manage','type'=>'user','action'=>$_tmp5),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("refreshTop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tourl'=>$_tmp6,'act'=>"detail"), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/refreshTop.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/manage-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/fabu-pay.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
