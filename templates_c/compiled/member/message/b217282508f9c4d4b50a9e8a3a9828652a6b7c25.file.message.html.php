<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:58:59
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\message.html" */ ?>
<?php /*%%SmartyHeaderCode:1108308225d5227734c44f3-31592961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b217282508f9c4d4b50a9e8a3a9828652a6b7c25' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\message.html',
      1 => 1553911804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1108308225d5227734c44f3-31592961',
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
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5227735201e8_26503311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5227735201e8_26503311')) {function content_5d5227735201e8_26503311($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][828];?>
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
css/message.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
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
, state = '<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
';
	var atpage = 1, totalCount = 0, pageSize = 15, url = '<?php echo getUrlPath(array('service'=>"member",'type'=>"user",'template'=>"message_detail",'id'=>"%id"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
</head>

<body>
<?php $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][828], null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
	<div class="container fn-clear">

		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="main">

			<ul class="main-tab">
				<li data-id=""><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][391];?>
 (<span id="total">0</span>)</a></li>
				<li data-id="0"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][7];?>
 (<span id="unread">0</span>)</a></li>
				<li data-id="1"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][9][8];?>
 (<span id="read">0</span>)</a></li>
			</ul>

			<div class="list message" id="list"><p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/ajax-loader.gif" /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][184];?>
...</p></div>
			<div class="opera">
				<label><input type="checkbox" id="selectAll" /> <?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][28];?>
</label>
				<a href="javascript:;" class="delSelect"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][8];?>
</a>
				<a href="javascript:;" class="readSelect"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][172];?>
</a>
			</div>
			<div class="pagination fn-clear"></div>

		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/message.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
