<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-13 16:06:22
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/business/touch/121/list.html" */ ?>
<?php /*%%SmartyHeaderCode:8098684475d2055698f2990-84354656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46fa7054c75fa32fa6b2c57e2aa0825b3c1c07bc' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/business/touch/121/list.html',
      1 => 1562637429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8098684475d2055698f2990-84354656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d2055699367c1_60253504',
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'seo_title' => 0,
    'langData' => 0,
    'cfg_basehost' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_staticPath' => 0,
    'siteCityInfo' => 0,
    'member_userDomain' => 0,
    'cfg_hideUrl' => 0,
    'redirectUrl' => 0,
    'site' => 0,
    'cfg_geetest' => 0,
    'keywords' => 0,
    'typeid' => 0,
    'typeNameArr' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2055699367c1_60253504')) {function content_5d2055699367c1_60253504($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value!='') {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][5];
}?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/static/css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/list.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  var pageSize = 10, atpage = 1, cityid = <?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['cityid'];?>
;
  var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', userDomain = '<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
  var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, redirectUrl = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
', site = '<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
';
  var geetest = <?php echo $_smarty_tpl->tpl_vars['cfg_geetest']->value;?>
;
  var templets = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<body>
  <!-- 头部 -->
  <div class="header_">
    <div class="header-l">
      <a href="javascript:history.go(-1)" class="goBack"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/header_back.png" alt=""></a>
    </div>
    <form action="<?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
" method="get">
      <input type="text" class="header-search" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][1];?>
" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" id="keywords">
    </form>
  </div>
  <!-- 头部 end-->

  <!-- 筛选框 -->
  <div class="choose">
    <div class="choose-tab">
      <ul>
        <li class="tab-assort"><a href="javascript:;"><i><span><?php if ($_smarty_tpl->tpl_vars['typeid']->value) {
if ($_smarty_tpl->tpl_vars['typeNameArr']->value[1]) {
echo $_smarty_tpl->tpl_vars['typeNameArr']->value[0];?>
 > <?php echo $_smarty_tpl->tpl_vars['typeNameArr']->value[1];
} else {
echo $_smarty_tpl->tpl_vars['typeNameArr']->value[0];
}
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][2];
}?></span></i></a></li>
        <li class="tab-area"><a href="javascript:;"><i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][8];?>
</span></i></a></li>
        <li class="tab-orderby"><a href="javascript:;"><i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][4];?>
</span></i></a></li>
      </ul>
    </div>
    <div class="choose-box">
      <div class="choose-local dn" id="assort-box">
        <div class="choose-stage-th">
          <div id="scroll-assort">
            <ul>
              <li<?php if (!$_smarty_tpl->tpl_vars['typeid']->value) {?> class="on"<?php }?> data-id="0"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][2];?>
</a></li>
              <?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo business(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

              <li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['type']->value['lower']) {?>lower<?php }
if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['type']->value['id']) {?> on<?php }?>"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></li>
              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
          </div>
        </div>
        <div class="choose-stage-r">
          <div id="scroll-assort-second"><div class="load"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][3];?>
...</div></div>
        </div>
      </div>
      <div class="choose-local dn" id="area-box">
        <div class="choose-stage-th">
          <div id="scroll-area">
            <div class="load"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][3];?>
...</div>
          </div>
        </div>
        <div class="choose-stage-r">
          <div id="scroll-area-second">
            <div class="load"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][3];?>
...</div>
          </div>
        </div>
      </div>
      <div class="choose-local dn">
        <div id="scroll-sort">
          <ul>
            <li data-id="" class="on"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][4];?>
</a></li>
            <li data-id="1"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][5];?>
</a></li>
            <li data-id="2"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][6];?>
</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- 筛选框 end-->

  <!-- 列表 -->
  <div class="list"><ul></ul></div>
  <!-- 列表 end-->

  <div class="mask"></div>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/iscroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/list.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
