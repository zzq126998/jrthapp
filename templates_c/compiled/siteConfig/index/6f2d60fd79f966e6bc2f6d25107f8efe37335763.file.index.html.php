<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:06:14
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\siteConfig\110\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11278527755d5101d61aa4a1-94930435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f2d60fd79f966e6bc2f6d25107f8efe37335763' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\siteConfig\\110\\index.html',
      1 => 1560388817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11278527755d5101d61aa4a1-94930435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_webname' => 0,
    'cfg_keywords' => 0,
    'cfg_description' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'cfg_clihost' => 0,
    'HUONIAOROOT' => 0,
    'cfg_weblogo' => 0,
    'cfg_shortname' => 0,
    'cfg_hotline' => 0,
    'module' => 0,
    'keywords' => 0,
    '_bindex' => 0,
    'hotkeywords' => 0,
    'installModuleArr' => 0,
    'channel' => 0,
    'atype' => 0,
    'cfg_subway_state' => 0,
    'cfg_subway_title' => 0,
    'article_channelDomain' => 0,
    'article_pagesize' => 0,
    'image_channelDomain' => 0,
    'image_channelName' => 0,
    'video_channelDomain' => 0,
    'video_channelName' => 0,
    'info_channelDomain' => 0,
    'house_channelDomain' => 0,
    'job_channelDomain' => 0,
    'renovation_channelDomain' => 0,
    'userinfo' => 0,
    'i' => 0,
    'login' => 0,
    'member_userDomain' => 0,
    'member_busiDomain' => 0,
    'userDomain' => 0,
    'userType' => 0,
    'cfg_pointName' => 0,
    'notice' => 0,
    'alist' => 0,
    'huodong_channelDomain' => 0,
    'list' => 0,
    'business_channelDomain' => 0,
    'tuan_channelDomain' => 0,
    'shop_channelDomain' => 0,
    'ilist' => 0,
    'itype' => 0,
    'iatype' => 0,
    'demand1' => 0,
    'slist' => 0,
    'broker' => 0,
    'zjcom' => 0,
    'demand2' => 0,
    'zlist' => 0,
    'jobs' => 0,
    'post' => 0,
    'company' => 0,
    'huangye_channelDomain' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5101d6375555_73395362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5101d6375555_73395362')) {function content_5d5101d6375555_73395362($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<title><?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['cfg_keywords']->value;?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['cfg_description']->value;?>
">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/index.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
        var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
        var hideFileUrl = '<?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
';
        var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', cfg_clihost = '<?php echo $_smarty_tpl->tpl_vars['cfg_clihost']->value;?>
';
	<?php echo '</script'; ?>
>
   <!-- <?php echo '<script'; ?>
>
var Background_Url = "https://rc.0735up.com/201810.png"; //节日广告图片
var Background_Href = "https://rc.0735up.com"; //节日广告链接
var FestivalAD_hdeight = "125";//节日广告头部高度
var Skin_Num = "";//节日广告变量
<?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://rc.0735up.com/static/js/festival_ad.js?v=1"><?php echo '</script'; ?>
>
  <style>
    .FestivalAD_header {width: 1200px; height: auto; margin: 0 auto;}
    .module-con {width: 1220px; margin: 0 auto;}
  </style>-->
</head>

<body class="w1200">
<!-- 顶部信息 -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- 导航 -->
<div class="fixedwrap FestivalAD_header">
	<div class="fixedpane">
		<div class="wrap header fn-clear">
			<div class="logo">
				<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;?>
" alt="">
				<h2><?php echo $_smarty_tpl->tpl_vars['cfg_shortname']->value;?>
</h2>
			</div>
			<div class="kefu">
				<s><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/index-07.png" alt=""></s>
				<p>客服热线</p>
				<?php echo $_smarty_tpl->tpl_vars['cfg_hotline']->value;?>

			</div>
			<div class="searchwrap y-liner">
				<div class="search">
          <div class="type">
            <dl class="">
              <dt><a href="javascript:;" class="keytype"> 口碑商家 </a><em></em></dt>
              <dd>
                <div class="ModuleBox">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if ($_smarty_tpl->tpl_vars['module']->value['code']=="house") {?>
					<a href="javascript:;" data-id="1" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
">
						<span><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span>
						<div class="MoudleNav fn-clear">
							<i></i>
							<ul class="fn-clear">
								<li data-type="loupan">楼盘</li>
								<li data-type="community">小区</li>
								<li data-type="store">中介公司</li>
								<li data-type="sale">二手房</li>
								<li data-type="zu">租房</li>
								<li data-type="xzl">写字楼</li>
								<li data-type="sp">商铺</li>
								<li data-type="cf">厂房/仓库</li>
							</ul>
						</div>
					</a>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="job") {?>
					<a href="javascript:;" data-id="1" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
">
						<span><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span>
						<div class="MoudleNav jobMoudle fn-clear">
							<i></i>
							<ul class="fn-clear">
								<li data-type="zhaopin">职位</li>
								<li data-type="company">公司</li>
								<li data-type="resume">简历</li>
								<li data-type="zhaopinhui">招聘会</li>
							</ul>
						</div>
					</a>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="marry") {?>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="waimai") {?>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="special") {?>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="paper") {?>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="website") {?>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="renovation") {?>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="integral") {?>
					<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=="car") {?>
					<?php } else { ?>
					<a href="javascript:;" data-id="0" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span></a>
					<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
              </dd>
            </dl>
            <i class="line"></i>
          </div>
          <div class="FormBox">
						<form action="<?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
" class="form business">
							<div class="inputbox">
								<div class="inpbox"><input type="text" name="keywords" class="searchkey" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
								<div class="hotkey">
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('module'=>"index",'action'=>"hotkeywords",'return'=>"hotkeywords")); $_block_repeat=true; echo siteConfig(array('module'=>"index",'action'=>"hotkeywords",'return'=>"hotkeywords"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['hotkeywords']<=2) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['hotkeywords']->value['href'];?>
"<?php if ($_smarty_tpl->tpl_vars['hotkeywords']->value['target']==0) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hotkeywords']->value['keyword'];?>
</a>
									<?php }?>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('module'=>"index",'action'=>"hotkeywords",'return'=>"hotkeywords"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</div>
							</div>
							<input type="submit" class="submit" value="搜索">
						</form>
						  <?php if (in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>'article','template'=>'search'),$_smarty_tpl);?>
" class="form article <?php if ($_smarty_tpl->tpl_vars['channel']->value=="article") {
} else { ?>fn-hide<?php }?>">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("image",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>'image','template'=>'search'),$_smarty_tpl);?>
" class="form image fn-hide">
							  <div class="inputbox">
								  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
							  </div>
							  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>'info','template'=>'list'),$_smarty_tpl);?>
" class="form info <?php if ($_smarty_tpl->tpl_vars['channel']->value=="info") {
} else { ?>fn-hide<?php }?>">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="想找什么？输入类别或关键字试试..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"tuan",'template'=>"list"),$_smarty_tpl);?>
" class="form tuan fn-hide">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="search_keyword" class="searchkey" placeholder="请输入商品名称、地址等..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="" class="form house HouseForm fn-hide" onsubmit="return false;">
							  <div class="inputbox">
								  <div class="inpbox"><input type="text" name="search_keyword" id="HouseSearch" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
							  </div>
							  <input type="submit" class="submit HouseSeacher_btn" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("shop",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"shop",'template'=>"list"),$_smarty_tpl);?>
" class="form shop fn-hide">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入宝贝名称或相关词语..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="" class="form job HouseForm fn-hide" onsubmit="return false;">
							  <div class="inputbox">
								  <div class="inpbox"><input type="text" name="search_keyword" id="JobSearch" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
							  </div>
							  <input type="submit" class="submit JobSeacher_btn" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("video",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"video",'template'=>"list"),$_smarty_tpl);?>
" class="form video fn-hide">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="请输入关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("huangye",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"huangye",'template'=>"list"),$_smarty_tpl);?>
" class="form huangye <?php if ($_smarty_tpl->tpl_vars['channel']->value=="huangye") {
} else { ?>fn-hide<?php }?>">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您要查找的服务机构关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("vote",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"vote",'template'=>"index"),$_smarty_tpl);?>
" class="form vote <?php if ($_smarty_tpl->tpl_vars['channel']->value=="vote") {
} else { ?>fn-hide<?php }?>">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您要查找的活动关键字..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("tieba",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"tieba",'template'=>"index"),$_smarty_tpl);?>
" class="form tieba <?php if ($_smarty_tpl->tpl_vars['channel']->value=="tieba") {
} else { ?>fn-hide<?php }?>">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="输入您要查找的帖子..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("huodong",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"huodong",'template'=>"list"),$_smarty_tpl);?>
" class="form huodong fn-hide">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="搜索活动..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
						  <?php if (in_array("live",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
						  <form action="<?php echo getUrlPath(array('service'=>"live",'template'=>"livelist"),$_smarty_tpl);?>
" class="form live <?php if ($_smarty_tpl->tpl_vars['channel']->value=="live") {
} else { ?>fn-hide<?php }?>">
						  <div class="inputbox">
							  <div class="inpbox"><input type="text" name="keywords" class="searchkey" placeholder="搜索直播..." value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /></div>
						  </div>
						  <input type="submit" class="submit" value="搜索">
						  </form>
						  <?php }?>
		  </div>
        </div>

			</div>
		</div>
		<!-- head e -->
		<div class="nav-con n-linear">
      		<div class="wrap">
				<ul class="fn-clear">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module",'type'=>"1")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['module']->value['target']) {?> target="_blank"<?php }?> style="<?php if ($_smarty_tpl->tpl_vars['module']->value['color']) {?> color: <?php echo $_smarty_tpl->tpl_vars['module']->value['color'];?>
;<?php }
if ($_smarty_tpl->tpl_vars['module']->value['bold']) {?> font-weight: 700;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='article') {?>
						<ul class="li-down">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"type",'return'=>"atype")); $_block_repeat=true; echo article(array('action'=>"type",'return'=>"atype"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li><a href="<?php echo $_smarty_tpl->tpl_vars['atype']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['atype']->value['typename'];?>
</a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"type",'return'=>"atype"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
						<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='info') {?>
						<ul class="li-down">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>"atype")); $_block_repeat=true; echo info(array('action'=>"type",'return'=>"atype"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li><a href="<?php echo $_smarty_tpl->tpl_vars['atype']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['atype']->value['typename'];?>
</a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>"atype"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
						<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='house') {?>
						<ul class="li-down">
							<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu'),$_smarty_tpl);?>
" target="_blank">找出租房</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale'),$_smarty_tpl);?>
" target="_blank">找二手房</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map','action'=>'loupan'),$_smarty_tpl);?>
" target="_blank">地图找房</a></li>
							<?php if ($_smarty_tpl->tpl_vars['cfg_subway_state']->value) {?><li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','param'=>'from=subway'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['cfg_subway_title']->value;?>
</a></li><?php }?>
							<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand'),$_smarty_tpl);?>
" target="_blank">求租求购</a></li>
						</ul>
						<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='job') {?>
						<ul class="li-down">
							<li><a href="<?php echo getUrlPath(array('service'=>'job','template'=>'zhaopin'),$_smarty_tpl);?>
" target="_blank">最新职位</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'resume'),$_smarty_tpl);?>
" target="_blank">我要找工作</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'job','template'=>'company'),$_smarty_tpl);?>
" target="_blank">企业招聘</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'job','template'=>'resume'),$_smarty_tpl);?>
" target="_blank">最新简历</a></li>
						</ul>
						<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='renovation') {?>
						<ul class="li-down">
							<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'albums'),$_smarty_tpl);?>
" target="_blank">效果图</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'case'),$_smarty_tpl);?>
" target="_blank">装修案例</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'company'),$_smarty_tpl);?>
" target="_blank">找专家</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'zwj'),$_smarty_tpl);?>
" target="_blank">找小区</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'designer'),$_smarty_tpl);?>
" target="_blank">设计师</a></li>
							<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'zb'),$_smarty_tpl);?>
" target="_blank">装修招标</a></li>
						</ul>
						<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['code']=='image') {?>
						<ul class="li-down">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('image', array('action'=>"type",'return'=>"atype")); $_block_repeat=true; echo image(array('action'=>"type",'return'=>"atype"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li><a href="<?php echo $_smarty_tpl->tpl_vars['atype']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['atype']->value['typename'];?>
</a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo image(array('action'=>"type",'return'=>"atype"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
						<?php }?>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(null, null, 0);?>
				</ul>
			</div>
		</div>
		<!-- nav e -->
	</div>
</div>
<!-- 模块链接 -->
<div class="module-con fn-clear">
	<div class="module-box">
		<!-- 资讯 -->
		<?php if (in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<div class="box-con first-module" style="margin-left: 0;">
			<div class="title-icon">
				<a href="<?php echo $_smarty_tpl->tpl_vars['article_channelDomain']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/index-08.png" alt="">
					<p>资讯</p>
				</a>
			</div>
			<ul class="fn-clear">
				<?php $_smarty_tpl->tpl_vars['article_pagesize'] = new Smarty_variable(53, null, 0);?>
				<?php if (in_array("image",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
				<?php $_smarty_tpl->tpl_vars['article_pagesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['article_pagesize']->value-1, null, 0);?>
				<?php }?>
				<?php if (in_array("video",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
				<?php $_smarty_tpl->tpl_vars['article_pagesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['article_pagesize']->value-1, null, 0);?>
				<?php }?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"type",'return'=>"atype",'pageSize'=>$_smarty_tpl->tpl_vars['article_pagesize']->value)); $_block_repeat=true; echo article(array('action'=>"type",'return'=>"atype",'pageSize'=>$_smarty_tpl->tpl_vars['article_pagesize']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<?php echo $_smarty_tpl->tpl_vars['atype']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['atype']->value['typename'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"type",'return'=>"atype",'pageSize'=>$_smarty_tpl->tpl_vars['article_pagesize']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if (in_array("image",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['image_channelDomain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['image_channelName']->value;?>
</a></li><?php }?>
				<?php if (in_array("video",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['video_channelDomain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['video_channelName']->value;?>
</a></li><?php }?>
			</ul>
		</div>
		<?php }?>
		<s class="module-line"></s>
		<!-- 二手 -->

		<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<div class="box-con">
			<div class="title-icon">
				<a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/index-09.png" alt="">
					<p>二手</p>
				</a>
			</div>
			<ul class="fn-clear">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>"atype",'pageSize'=>6)); $_block_repeat=true; echo info(array('action'=>"type",'return'=>"atype",'pageSize'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<?php echo $_smarty_tpl->tpl_vars['atype']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['atype']->value['typename'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>"atype",'pageSize'=>6), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<?php }?>

		<s class="module-line"></s>
		<!-- 房产 -->
		<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<div class="box-con">
			<div class="title-icon">
				<a href="<?php echo $_smarty_tpl->tpl_vars['house_channelDomain']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/index-10.png" alt="">
					<p>房产</p>
				</a>
			</div>
			<ul class="fn-clear">
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan'),$_smarty_tpl);?>
" target="_blank">找新开盘</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale'),$_smarty_tpl);?>
" target="_blank">找出售房</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu'),$_smarty_tpl);?>
" target="_blank">找出租房</a></li>
				<?php if ($_smarty_tpl->tpl_vars['cfg_subway_state']->value) {?>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'loupan','param'=>'from=subway'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['cfg_subway_title']->value;?>
</a></li>
				<?php } else { ?>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand'),$_smarty_tpl);?>
" target="_blank">求租求购</a></li>
				<?php }?>
				<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map','action'=>'loupan'),$_smarty_tpl);?>
" target="_blank">地图找房</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-sale'),$_smarty_tpl);?>
" target="_blank">发布房源</a></li>
			</ul>
		</div>
		<?php }?>
		<s class="module-line"></s>
		<!-- 招聘 -->
		<?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<div class="box-con">
			<div class="title-icon">
				<a href="<?php echo $_smarty_tpl->tpl_vars['job_channelDomain']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/index-11.png" alt="">
					<p>招聘</p>
				</a>
			</div>
			<ul class="fn-clear">
				<li><a href="<?php echo getUrlPath(array('service'=>'job','template'=>'zhaopin'),$_smarty_tpl);?>
" target="_blank">最新职位</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'job','template'=>'company'),$_smarty_tpl);?>
" target="_blank">知名企业</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'member','template'=>'post','param'=>'do=add'),$_smarty_tpl);?>
" target="_blank">发布招聘</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'job','template'=>'resume'),$_smarty_tpl);?>
" target="_blank">最新简历</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'job','template'=>'news'),$_smarty_tpl);?>
" target="_blank">求职指南</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'resume'),$_smarty_tpl);?>
" target="_blank">更新简历</a></li>
			</ul>
		</div>
		<?php }?>
		<s class="module-line"></s>
		<!-- 装修 -->
		<?php if (in_array("renovation",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
		<div class="box-con" style="margin-right: 0;">
			<div class="title-icon">
				<a href="<?php echo $_smarty_tpl->tpl_vars['renovation_channelDomain']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/index-12.png" alt="">
					<p>装修</p>
				</a>
			</div>
			<ul class="fn-clear">
				<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'entrust'),$_smarty_tpl);?>
" target="_blank">免费设计</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'case'),$_smarty_tpl);?>
" target="_blank">装修案例</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'designer'),$_smarty_tpl);?>
" target="_blank">设计师</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'company'),$_smarty_tpl);?>
" target="_blank">装修公司</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'raiders'),$_smarty_tpl);?>
" target="_blank">装修攻略</a></li>
				<li><a href="<?php echo getUrlPath(array('service'=>'renovation','template'=>'zwj'),$_smarty_tpl);?>
" target="_blank">找我家</a></li>
			</ul>
		</div>
		<?php }?>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告一"),$_smarty_tpl);?>

</div>

<div class="serve-wrap">
	<div class="serve">
		<div class="serve-title">
			本地生活服务
		</div>
		<ul class="serve-con fn-clear">
			<?php if (in_array("tieba",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'tieba'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-01.png" alt="">
					<p>发帖子</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("live",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'live'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-02.png" alt="">
					<p>发视频</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("quanjing",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'quanjing'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-03.png" alt="">
					<p>发全景</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'job'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-04.png" alt="">
					<p>发招聘</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'house'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-05.png" alt="">
					<p>找房子</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'job'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-06.png" alt="">
					<p>找工作</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("huodong",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'huodong'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-07.png" alt="">
					<p>发活动</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("live",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'live'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-08.png" alt="">
					<p>发直播</p>
				</a>
			</li>
			<?php }?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'business'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-11.png" alt="">
					<p>找商圈</p>
				</a>
			</li>
			<?php if (in_array("renovation",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'renovation'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-09.png" alt="">
					<p>找装修</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("waimai",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'waimai'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-10.png" alt="">
					<p>找美食</p>
				</a>
			</li>
			<?php }?>
			<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
			<li>
				<a href="<?php echo getUrlPath(array('service'=>'info'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/serve-12.png" alt="">
					<p>逛二手</p>
				</a>
			</li>
			<?php }?>
		</ul>
	</div>
	<!-- 焦点图 -->
	<div class="PicFocus">
    <div class="slideBox slideBox1">
      <div class="slidewrap">
        <div class="slide">
			  <div class="bd">
				  <?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告四",'type'=>"slide"),$_smarty_tpl);?>

			  </div>
			<div class="hd"><ul></ul></div>
        </div>
        <a href="javascript:;" class="prev"></a>
        <a href="javascript:;" class="next"></a>
      </div>
    </div>
  	</div>
	<!-- 登录注册 -->

	<div class="login-wrap fn-clear">
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value!=true) {?>
		<div class="login">
			<form action="" class="login-form">
				<div class="num-verify-wrap">
					<input type="text" class="text-num" name="loginuser" placeholder="请输入您的账号" autocomplete="off" value="">
				</div>
				<div class="pass-verify-wrap">
					<input type="password" class="password" name="loginpass" placeholder="请输入您的密码" autocomplete="off" value="">
				</div>
				<div class="btnwrap">
					<input type="submit" class="submit" value="立即登录">
				</div>
				<div class="reg">
					<span>还没有账号？</span>
					<span class="now"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/register.html">马上注册</a></span>
					<span class="forget"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/fpwd.html">忘记密码</a></span>
				</div>
				<div class="quick">
					<span>一键快捷登录</span>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"getLoginConnect",'return'=>"login")); $_block_repeat=true; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<span style="display:none;"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span>
					<?php if ($_smarty_tpl->tpl_vars['i']->value<5) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['login']->value['name'];?>
" class="loginconnect"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
/img/32.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" /></a>
					<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(null, null, 0);?>
				</div>
			</form>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
		<?php $_smarty_tpl->tpl_vars['userDomain'] = new Smarty_variable($_smarty_tpl->tpl_vars['member_userDomain']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['userType'] = new Smarty_variable('user', null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==2) {?>
		<?php $_smarty_tpl->tpl_vars['userDomain'] = new Smarty_variable($_smarty_tpl->tpl_vars['member_busiDomain']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['userType'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<div class="login-success fn-clear">
			<div class="title">
				<div class="login-out">
					<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/logout.html">退出</a>
				</div>
				<div class="out-icon">
					<a href="<?php echo $_smarty_tpl->tpl_vars['userDomain']->value;?>
/message.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/login-04.png" class="img-1" alt=""></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['userDomain']->value;?>
/security.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/login-05.png" class="img-2" alt=""></a>
				</div>
			</div>
			<div class="con fn-clear">
				<div class="con-left fn-clear"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/user/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['userid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['photo'];?>
" alt=""></a></div>
				<div class="con-right fn-clear">
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/user/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['userid'];?>
" class="p-title"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</a></p>
					<p class="p-icon fn-clear">
						<a href="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','type'=>$_tmp1,'template'=>'security','doget'=>'chCertify'),$_smarty_tpl);
} else {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','type'=>$_tmp2,'template'=>'security','doget'=>'shCertify'),$_smarty_tpl);
}?>" class="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {?> disable<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/login-06.png" alt=""></a>
						<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','type'=>$_tmp3,'template'=>'security','doget'=>'chphone'),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==0) {?> disable<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/login-07.png" alt=""></a>
						<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','type'=>$_tmp4,'template'=>'security','doget'=>'chemail'),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']==0) {?> disable<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/login-08.png" alt=""></a>
					</p>
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userType']==1) {?>
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['level']) {?>
					<p class="huangjin fn-hide"><a href="javascipt:;"><img src="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['levelIcon'];?>
" alt=""><span><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['levelName'];?>
</span></a></p>
					<?php } else { ?>
					<p class="member"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'upgrade'),$_smarty_tpl);?>
" class="upgrade">会员升级</a></p>
					<?php }?>
					<?php }?>
				</div>
			</div>
			<div class="money">
				<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','type'=>$_tmp5,'template'=>'record'),$_smarty_tpl);?>
">可用余额<span><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
</span></a>
				<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','type'=>$_tmp6,'template'=>'record'),$_smarty_tpl);?>
">冻结余额<span><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['userinfo']->value['freeze'];?>
</span></a>
				<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userType']->value;?>
<?php $_tmp7=ob_get_clean();?><?php echo getUrlPath(array('service'=>'member','type'=>$_tmp7,'template'=>'point'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;?>
<span><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['point'];?>
</span></a>
			</div>
			<div class="personal">
				<div class="person"><a href="<?php echo $_smarty_tpl->tpl_vars['userDomain']->value;?>
">会员中心</a></div>
				<div class="integral"><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'qiandao'),$_smarty_tpl);?>
">签到送积分</a></div>
			</div>
		</div>
		<?php }?>
		<div class="speak-wrap">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"notice",'return'=>"notice",'pageSize'=>"1")); $_block_repeat=true; echo siteConfig(array('action'=>"notice",'return'=>"notice",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<div class="speak">
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/speak.png" alt="">
						<a href="<?php echo $_smarty_tpl->tpl_vars['notice']->value['url'];?>
"><span><marquee><?php echo $_smarty_tpl->tpl_vars['notice']->value['title'];?>
</marquee></span></a>
					</div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"notice",'return'=>"notice",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		</div>
	</div>
</div>
<!-- 头条推荐 -->
<?php if (in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
<div class="headline-wrap fn-clear">
	<div class="hot-wrap">
		<div class="hot">
			<div class="redian">热点</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'return'=>"alist",'flag'=>"p",'orderby'=>"2",'page'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"p",'orderby'=>"2",'page'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<span class="video">
				<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['alist']->value['litpic'];?>
" alt=""></a>
			</span>
			<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
"><p class="hot-text"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</p></a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"p",'orderby'=>"2",'page'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="shade"></div>
		</div>
		<div class="hot">
			<div class="zuixin">最新</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'return'=>"alist",'flag'=>"p",'orderby'=>"1",'page'=>"1",'pageSize'=>"1")); $_block_repeat=true; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"p",'orderby'=>"1",'page'=>"1",'pageSize'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<span class="video">
				<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['alist']->value['litpic'];?>
" alt=""></a>
			</span>
			<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
"><p class="hot-text"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</p></a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"p",'orderby'=>"1",'page'=>"1",'pageSize'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="shade"></div>
		</div>
		<!-- teeth-lunbo-s -->
		<div class="teeth">
		    <div class="slideBox slideBox1">
		      <div class="slidewrap">
		        <div class="slide">
			        <div class="bd">
						<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告五",'type'=>"slide"),$_smarty_tpl);?>

					</div>
		    	<div class="hd"><ul></ul></div>
		   		</div>
			    </div>
			</div>
		</div>
	</div>
		<!-- teeth-lunbo-e -->
	<div class="headline">
		<div class="headline-title">
			<h3>头条推荐</h3>
			<i></i>
			<span><a href="<?php echo $_smarty_tpl->tpl_vars['article_channelDomain']->value;?>
">查看更多>></a></span>
		</div>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'return'=>"alist",'flag'=>"b",'page'=>"1",'pageSize'=>"3")); $_block_repeat=true; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"b",'page'=>"1",'pageSize'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<div class="headline-con">
			<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
">
				<h4><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['alist']->value['title']);?>
</h4>
				<p><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['alist']->value['description']),0,36);?>
</p>
			</a>
		</div>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"b",'page'=>"1",'pageSize'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('article', array('action'=>"alist",'return'=>"alist",'flag'=>"h",'page'=>"1",'pageSize'=>"4",'isAjax'=>1)); $_block_repeat=true; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"h",'page'=>"1",'pageSize'=>"4",'isAjax'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<div class="con fn-clear">
            <span class="con-video">[<?php echo $_smarty_tpl->tpl_vars['alist']->value['typeName'][0];?>
]</span>
			<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
"><span class="con-mes"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['alist']->value['title']);?>
</span></a>
			<span class="con-time"><?php echo date('m-d',$_smarty_tpl->tpl_vars['alist']->value['pubdate']);?>
</span>
		</div>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo article(array('action'=>"alist",'return'=>"alist",'flag'=>"h",'page'=>"1",'pageSize'=>"4",'isAjax'=>1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	</div>
	<div class="city-wrap">
		<div class="city-title">
			<h3>同城活动</h3>
			<i></i>
			<span><a href="<?php echo $_smarty_tpl->tpl_vars['huodong_channelDomain']->value;?>
">查看更多>></a></span>
		</div>
		<div class="city-con">
			<div class="slideBox">
				<div class="bd">
					<ul class="fn-clear">
						<!-- 同城活动-s -->
						<li>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('huodong', array('action'=>'hlist','return'=>'list','page'=>'1','pageSize'=>'4')); $_block_repeat=true; echo huodong(array('action'=>'hlist','return'=>'list','page'=>'1','pageSize'=>'4'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="city-item fn-clear">
								<div class="city-left">
									<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
								</div>
								<div class="city-right">
									<p class="city-name"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,11);?>
..</a></p>
									<p class="deadline"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">截止时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['end'],"%Y-%m-%d");?>
</a></p>
									<p class="join"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">已报名 <span><?php echo $_smarty_tpl->tpl_vars['list']->value['reg'];?>
</span> 人</a></p>
									<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" class="sign">我要报名</a>
								</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo huodong(array('action'=>'hlist','return'=>'list','page'=>'1','pageSize'=>'4'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						</li>

						<!-- 同城活动-e -->
						
					</ul>
				</div>
				<div class="hd">
					<ul class="fn-clear">
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>
<!-- 头条推荐e -->
<!-- 广告位 -->


<!-- 商家s -->
<div class="shop-wrap fn-clear">
	<div class="classify">
		<div class="classify-title">
			<h3>商家分类</h3>
			<a href="<?php echo getUrlPath(array('service'=>'business','template'=>'list'),$_smarty_tpl);?>
">查看更多>></a>
		</div>
		<div class="classify-con">
			<ul class="fn-clear">
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>"type",'return'=>"atype",'pageSize'=>"18")); $_block_repeat=true; echo business(array('action'=>"type",'return'=>"atype",'pageSize'=>"18"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<?php echo getUrlPath(array('service'=>'business','template'=>'list','param'=>"typeid=".((string)$_smarty_tpl->tpl_vars['atype']->value['id'])),$_smarty_tpl);?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/shop-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png" alt="">
						<p><?php echo $_smarty_tpl->tpl_vars['atype']->value['typename'];?>
</p>
					</a>
				</li>
				<span style="display: none"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>"type",'return'=>"atype",'pageSize'=>"18"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(null, null, 0);?>
			</ul>
		</div>
		<div class="shop-join">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/b">
				入驻商家
			</a>
		</div>
	</div>
	<!-- 推荐商家 -->
	<div class="recommend fn-clear">
		<ul class="rec-title fn-clear">
			<li class="on"><a href="javascipt:;">推荐商家</a><i></i></li>
			<!--<li><a href="javascipt:;">最新入驻</a><i></i></li>-->
			<!--<li><a href="javascipt:;">企业店铺</a><i></i></li>-->
			<!--<li><a href="javascipt:;">商城店铺</a><i></i></li>-->
			<a href="<?php echo $_smarty_tpl->tpl_vars['business_channelDomain']->value;?>
" class="more">查看更多&gt;&gt;</a>
		</ul>
		<div class="rec-con fn-clear">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('business', array('action'=>'blist','return'=>'list','pageSize'=>"8")); $_block_repeat=true; echo business(array('action'=>'blist','return'=>'list','pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="rec-item">
				<div class="item-top">
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" alt=""></a>
					<?php if ($_smarty_tpl->tpl_vars['list']->value['panor']>0) {?><span class="i-all">全景</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['list']->value['video']>0) {?><span class="i-video">视频</span><?php }?>
				</div>
				<div class="item-bottom">
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><p class="item-name"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p></a>
					<p class="num">
						<a href="javascipt:;">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/rec-01.png" alt="">
							<span><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];?>
</span>
						</a>
					</p>
					<p class="location">
						<a href="javascipt:;">
							<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/rec-02.png" alt="">
							<span><?php echo $_smarty_tpl->tpl_vars['list']->value['address'];?>
</span>
						</a>
					</p>
				</div>
			</div>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo business(array('action'=>'blist','return'=>'list','pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告六"),$_smarty_tpl);?>

</div>
<!-- 优惠券 -->

<!-- 广告位 -->
<!--<div class="ad-con">-->
	<!--<div class="siteAdvObj">-->
		<!--<a href="javascipt:;">-->
			<!--<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/ad-07.png" alt="">-->
		<!--</a>-->
	<!--</div>-->
<!--</div>-->
<!-- 推荐团购 -->
<?php if (in_array("tuan",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
<div class="group-wrap fn-clear">
	<div class="group fn-clear">
		<div class="group-title">
			<h3>推荐团购</h3>
			<a href="<?php echo $_smarty_tpl->tpl_vars['tuan_channelDomain']->value;?>
">查看更多&gt;&gt;</a>
		</div>
		<div class="group-con">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tuan', array('action'=>"tlist",'return'=>"list",'pageSize'=>"3")); $_block_repeat=true; echo tuan(array('action'=>"tlist",'return'=>"list",'pageSize'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="group-item">
				<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
				<div class="bg"></div>
				<div class="text">
					<p class="text-1"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
					<p class="text-2">
						<a href="javascipt:;"><span class="text2-1">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
&nbsp;&nbsp;</span><del>￥<?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['market'];?>
</del></a>
						<a href="javascipt:;"><span class="text2-3"><?php echo $_smarty_tpl->tpl_vars['list']->value['sale'];?>
&nbsp;&nbsp;</span><span class="text2-2">已售&nbsp;&nbsp;</span></a>
					</p>
				</div>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo tuan(array('action'=>"tlist",'return'=>"list",'pageSize'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="shop-join">
				<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'fabu','action'=>'tuan'),$_smarty_tpl);?>
">
					发布团购
				</a>
			</div>
		</div>
	</div>

	<!-- 推荐商品 s -->
	<div class="recommend-info goods-box tuan-box fn-clear shop-box">
	  <!-- <div class="box-left"> -->
	  <div class="top-box fn-clear">
	    <ul class="fn-clear">
	      <li class="active">推荐商品<i></i></li>
	      <li>特价促销<i></i></li>
	      <li>热卖商品<i></i></li>
	      <li>新品上架<i></i></li>
	    </ul>
	    <a href="<?php echo $_smarty_tpl->tpl_vars['shop_channelDomain']->value;?>
" target="_blank" class="more">查看更多&gt;&gt;</a>
	  </div>

	  <div class="tuan-con goods-con fn-clear show">

		  <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"list",'flag'=>"0",'pageSize'=>"8")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"list",'flag'=>"0",'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		  <div class="main-tuan">
	      <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
	        <div class="slide-img"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
"></div>
	        <div class="slide-title"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</div>
	        <p class="slide-sell"> <span class="symbol"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
 <span class="y-price"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['mprice'];?>
</span><span class="al-sell">已售 <span class="s-num"><?php echo $_smarty_tpl->tpl_vars['list']->value['sales'];?>
</span></span></p>
	      </a>
	    	</div>
		  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"list",'flag'=>"0",'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </div>

	  <div class="tuan-con goods-con fn-clear">
		  <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"list",'flag'=>"1",'pageSize'=>"8")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"list",'flag'=>"1",'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		  <div class="main-tuan">
			  <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
				  <div class="slide-img"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
"></div>
				  <div class="slide-title"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</div>
				  <p class="slide-sell"> <span class="symbol"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
 <span class="y-price"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['mprice'];?>
</span><span class="al-sell">已售 <span class="s-num"><?php echo $_smarty_tpl->tpl_vars['list']->value['sales'];?>
</span></span></p>
			  </a>
		  </div>
		  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"list",'flag'=>"1",'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </div>

	  <div class="tuan-con goods-con fn-clear">
		  <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"list",'flag'=>"2",'pageSize'=>"8")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"list",'flag'=>"2",'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		  <div class="main-tuan">
			  <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
				  <div class="slide-img"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
"></div>
				  <div class="slide-title"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</div>
				  <p class="slide-sell"> <span class="symbol"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
 <span class="y-price"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['mprice'];?>
</span><span class="al-sell">已售 <span class="s-num"><?php echo $_smarty_tpl->tpl_vars['list']->value['sales'];?>
</span></span></p>
			  </a>
		  </div>
		  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"list",'flag'=>"2",'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	  </div>

	  <div class="tuan-con goods-con fn-clear">
		  <?php $_smarty_tpl->smarty->_tag_stack[] = array('shop', array('action'=>"slist",'return'=>"list",'orderby'=>"5",'pageSize'=>"8")); $_block_repeat=true; echo shop(array('action'=>"slist",'return'=>"list",'orderby'=>"5",'pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		  <div class="main-tuan">
			  <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
				  <div class="slide-img"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
"></div>
				  <div class="slide-title"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</div>
				  <p class="slide-sell"> <span class="symbol"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
 <span class="y-price"><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['list']->value['mprice'];?>
</span><span class="al-sell">已售 <span class="s-num"><?php echo $_smarty_tpl->tpl_vars['list']->value['sales'];?>
</span></span></p>
			  </a>
		  </div>
		  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo shop(array('action'=>"slist",'return'=>"list",'orderby'=>"5",'pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </div>

	</div>
	<!-- 推荐商品 e -->
	<ul class="group-img">
		<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告七"),$_smarty_tpl);?>

	</ul>
</div>
<?php }?>
<!-- 推荐信息、数码手机 -->
<?php if (in_array("info",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
<div class="digital-wrap wrap fn-clear">
	<div class="digital-left fn-clear">
		<div class="con-title">
			<h3>推荐信息</h3>
			<a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
">查看更多&gt;&gt;</a>
		</div>
		<div class="info-wrap">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist",'return'=>"ilist",'rec'=>"1",'pageSize'=>"4")); $_block_repeat=true; echo info(array('action'=>"ilist",'return'=>"ilist",'rec'=>"1",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="info-item fn-clear">
				<div class="item-left">
					<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['litpic'];?>
" alt=""></a>
				</div>
				<div class="item-right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
"><p class="p1"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</p></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
"><p class="p2"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ilist']->value['pubdate'],"%Y.%m.%d");?>
</p></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
"><p class="p3"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/info-01.png" alt=""> <?php echo $_smarty_tpl->tpl_vars['ilist']->value['tel'];?>
</p></a>
				</div>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist",'return'=>"ilist",'rec'=>"1",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		</div>
		<div class="shop-join">
			<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'info'),$_smarty_tpl);?>
">
				发布信息
			</a>
		</div>
	</div>
	<div class="digital-right recommend-info info">
		<!-- 数码手机s -->
		<div class="box-left">
		    <div class="top-box fn-clear">
		      <ul class="fn-clear">
				  <?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>'type','return'=>'itype','pageSize'=>'5')); $_block_repeat=true; echo info(array('action'=>'type','return'=>'itype','pageSize'=>'5'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				  <li<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['itype']==1) {?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['itype']->value['typename'];?>
<i></i></li>
				  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>'type','return'=>'itype','pageSize'=>'5'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		      </ul>
		      <a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
" target="_blank" class="more">查看更多&gt;&gt;</a>
			</div>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>'type','return'=>'iatype','pageSize'=>'8')); $_block_repeat=true; echo info(array('action'=>'type','return'=>'iatype','pageSize'=>'8'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<div class="info-con<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['iatype']==1) {?> show<?php }?>">
				<div class="picture-con fn-clear">
					<div class="activity-con fn-clear">
						<div class="slideBox slideBox3">
							<div class="bd">
								<div class="tempWrap">
									<ul class="fn-clear">
										<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['iatype']->value['id'];?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist",'return'=>"alist",'thumb'=>"1",'top'=>"1",'typeid'=>$_tmp8,'pageSize'=>"6")); $_block_repeat=true; echo info(array('action'=>"ilist",'return'=>"alist",'thumb'=>"1",'top'=>"1",'typeid'=>$_tmp8,'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


										<li>
											<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
" target="_blank">
												<div class="slide-img"><img src="<?php echo $_smarty_tpl->tpl_vars['alist']->value['litpic'];?>
"></div>
												<div class="slide-title"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</div>
											</a>
										</li>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist",'return'=>"alist",'thumb'=>"1",'top'=>"1",'typeid'=>$_tmp8,'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


									</ul>
								</div>
							</div>
							<a class="prev" href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/prev1.png" alt=""></a>
							<a class="next" href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/next1.png" alt=""></a>
						</div>
					</div>
				</div>
				<div class="news-list fn-clear">
					<ul class="ul-1">
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['iatype']->value['id'];?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist",'return'=>"alist",'typeid'=>$_tmp9,'pageSize'=>"14",'orderby'=>"1")); $_block_repeat=true; echo info(array('action'=>"ilist",'return'=>"alist",'typeid'=>$_tmp9,'pageSize'=>"14",'orderby'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li class="fn-clear">
							<a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
" target="_blank">
								<span class="cir">• </span>
								<span class="info"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</span>
								<span class="news-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['alist']->value['pubdate'],"%Y-%m");?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['alist']->value['top']) {?><span class="n-tip tip1">顶</span><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['alist']->value['fire']) {?><span class="n-tip tip2">火</span><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['alist']->value['rec']) {?><span class="n-tip tip3">荐</span><?php }?>
							</a>
						</li>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist",'return'=>"alist",'typeid'=>$_tmp9,'pageSize'=>"14",'orderby'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
		    </div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>'type','return'=>'iatype','pageSize'=>'8'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		  </div>
	</div>
</div>
<?php }?>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告八"),$_smarty_tpl);?>

</div>
<!-- 最新求购 -->
<?php if (in_array("house",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
<div class="new-wrap wrap fn-clear recommend-info">
	<div class="new-left">
		<div class="left-con fn-clear">
		    <div class="con-title fn-clear">
				<h3>最新求购</h3>
				<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=1'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a>
			</div>
		    <div class="right-con">
		      <ul>

				  <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>'demand','return'=>'demand1','typeid'=>'1','rentype'=>"1",'pageSize'=>"6")); $_block_repeat=true; echo house(array('action'=>'demand','return'=>'demand1','typeid'=>'1','rentype'=>"1",'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				  <li class="fn-clear">
					  <a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=1'),$_smarty_tpl);?>
" target="_blank" title="">
						  <div class="li-left">
							  <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top1.png" alt="">
						  </div>
						  <div class="li-right">
							  <h4><?php echo $_smarty_tpl->tpl_vars['demand1']->value['title'];?>
</h4>
							  <p><i></i><?php echo $_smarty_tpl->tpl_vars['demand1']->value['contact'];?>
<span><?php echo $_smarty_tpl->tpl_vars['demand1']->value['pubdate'];?>
</span></p>
						  </div>
					  </a>
				  </li>
				  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>'demand','return'=>'demand1','typeid'=>'1','rentype'=>"1",'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		      </ul>
		    </div>
		</div>
		<div class="buy">
			<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=1'),$_smarty_tpl);?>
">发布求购</a>
	    </div>
	    <div class="room">
	    	<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-sale'),$_smarty_tpl);?>
">发布房源</a>
	    </div>
	</div>
	<!-- 推荐二手房 -->

	<div class="rec-two recommend fn-clear">
		<ul class="rec-title fn-clear">
			<li class="on"><a href="javascipt:;">推荐二手房</a><i></i></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'community'),$_smarty_tpl);?>
">找小区</a></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store'),$_smarty_tpl);?>
">中介公司</a></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'broker'),$_smarty_tpl);?>
">找经纪人</a></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map-sale'),$_smarty_tpl);?>
">地图找房</a></li>

			<div class="a-right">
				<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/u/fabu-house-sale.html" class="publish">发布房源</a>
				<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'sale'),$_smarty_tpl);?>
" class="more">查看更多&gt;&gt;</a>
			</div>
		</ul>
		<div class="rec-con fn-clear">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>'saleList','return'=>'slist','pageSize'=>"8")); $_block_repeat=true; echo house(array('action'=>'saleList','return'=>'slist','pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="rec-item">
				<div class="item-top">
					<a href="<?php echo $_smarty_tpl->tpl_vars['slist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slist']->value['litpic'];?>
" alt=""></a>
				</div>
				<div class="item-bottom">
					<a href="javascipt:;"><p class="item-name"><?php echo $_smarty_tpl->tpl_vars['slist']->value['title'];?>
</p></a>
					<p class="money">
						<a href="javascipt:;">
							<span><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['slist']->value['price'];?>
万</span>
						</a>
					</p>
					<p class="location">
						<a href="javascipt:;">
							<span><?php echo $_smarty_tpl->tpl_vars['slist']->value['room'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['slist']->value['area'];?>
平方米</span>
						</a>
					</p>
				</div>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>'saleList','return'=>'slist','pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告九"),$_smarty_tpl);?>

</div>
<!-- 房产经纪人 -->
<div class="room-wrap wrap fn-clear">
	<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'broker'),$_smarty_tpl);?>
" class="more">点击更多&gt;&gt;</a>
	<div class="room-title">
		<ul class="fn-clear">
			<li class="active">房产经纪人</li>
			<li>中介公司</li>
		</ul>
		<div class="apply apply1"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/u/config-house.html">申请为经纪人</a></div>
		<div class="apply"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/b/config-house.html">入驻中介公司</a></div>
	</div>
	<div class="room-con fn-clear show">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjUserList",'return'=>"broker",'pageSize'=>"9")); $_block_repeat=true; echo house(array('action'=>"zjUserList",'return'=>"broker",'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="room-item fn-clear">
			<div class="item-left">
				<a href="<?php echo $_smarty_tpl->tpl_vars['broker']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['broker']->value['litpic'];?>
" alt=""></a>
			</div>
			<div class="item-right fn-clear">
				<p class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['broker']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['broker']->value['nickname'];?>
</a></p>
				<p class="door">门店：<span class="door-1"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['broker']->value['areaid'];?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['broker']->value['addrid'];?>
<?php $_tmp11=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'broker','addrid'=>$_tmp10,'business'=>$_tmp11),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['broker']->value['address'][count($_smarty_tpl->tpl_vars['broker']->value['address'])-1];?>
</a></span></p>
				<p class="tel">电话：<span class="tel-num"><a href="javascipt:;"><?php echo $_smarty_tpl->tpl_vars['broker']->value['phone'];?>
</a></span></p>
				<p>
					<span class="room-1">房源：</span>
					<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['broker']->value['id'];?>
<?php $_tmp12=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'broker-detail','id'=>$_tmp12,'tpl'=>'zu'),$_smarty_tpl);?>
"><span class="room-2">出租</span><span class="room-3"><?php echo $_smarty_tpl->tpl_vars['broker']->value['zuCount'];?>
</span><span class="room-4">套</span></a>
						&nbsp;&nbsp;
					<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['broker']->value['id'];?>
<?php $_tmp13=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'broker-detail','id'=>$_tmp13,'tpl'=>'sale'),$_smarty_tpl);?>
"><span class="room-2">出售</span><span class="room-3"><?php echo $_smarty_tpl->tpl_vars['broker']->value['saleCount'];?>
</span><span class="room-4">套</span></a>
				</p>
			</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjUserList",'return'=>"broker",'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	</div>

	<div class="room-con inter fn-clear">

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"6")); $_block_repeat=true; echo house(array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="room-item">
			<div class="item-left">
				<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['litpic'];?>
<?php $_tmp14=ob_get_clean();?><?php echo changeFileSize(array('url'=>$_tmp14,'type'=>'large'),$_smarty_tpl);?>
" alt=""></a>
			</div>
			<div class="item-right fn-clear">
				<p class="name"><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['address'];?>
</a></p>
				<p class="door">门店：<span class="door-1"><a href="javascipt:;"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['title'];?>
</a></span></p>
				<p class="tel">电话：<span class="tel-num"><a href="javascipt:;"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['tel'];?>
</a></span></p>
				<p>
					<span class="room-1">房源：</span>
					<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','tpl'=>"zu",'id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
"><span class="room-2">出租</span><span class="room-3"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['countZu'];?>
</span><span class="room-4">套</span></a>
					&nbsp;&nbsp;
					<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store-detail','tpl'=>"sale",'id'=>('').($_smarty_tpl->tpl_vars['zjcom']->value['id'])),$_smarty_tpl);?>
"><span class="room-2">出售</span><span class="room-3"><?php echo $_smarty_tpl->tpl_vars['zjcom']->value['countSale'];?>
</span><span class="room-4">套</span></a>
				</p>
			</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>"zjComList",'return'=>"zjcom",'page'=>"1",'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	</div>
</div>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告十"),$_smarty_tpl);?>

</div>
<!-- 最新求租 -->
<div class="new-wrap wrap fn-clear recommend-info">
	<div class="new-left">
		<div class="left-con fn-clear">
		    <div class="con-title fn-clear">
				<h3>最新求租</h3>
				<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=0'),$_smarty_tpl);?>
">查看更多&gt;&gt;</a>
			</div>
		    <div class="right-con">
		      <ul>

				  <?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>'demand','return'=>'demand2','typeid'=>'0','rentype'=>"1",'pageSize'=>"6")); $_block_repeat=true; echo house(array('action'=>'demand','return'=>'demand2','typeid'=>'0','rentype'=>"1",'pageSize'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				  <li class="fn-clear">
					  <a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=0'),$_smarty_tpl);?>
" target="_blank" title="">
						  <div class="li-left">
							  <img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top1.png" alt="">
						  </div>
						  <div class="li-right">
							  <h4><?php echo $_smarty_tpl->tpl_vars['demand2']->value['title'];?>
</h4>
							  <p><i></i><?php echo $_smarty_tpl->tpl_vars['demand2']->value['contact'];?>
<span><?php echo $_smarty_tpl->tpl_vars['demand2']->value['pubdate'];?>
</span></p>
						  </div>
					  </a>
				  </li>
				  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>'demand','return'=>'demand2','typeid'=>'0','rentype'=>"1",'pageSize'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>




		      </ul>
		    </div>
		</div>
		<div class="buy">
			<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'demand','param'=>'type=0'),$_smarty_tpl);?>
">发布求租</a>
	    </div>
	    <div class="room">
	    	<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-zu'),$_smarty_tpl);?>
">发布租房</a>
	    </div>
	</div>
	<!-- 推荐二手房 -->
	<div class="rec-two recommend fn-clear">
		<ul class="rec-title fn-clear">
			<li class="on"><a href="javascipt:;">推荐出租房</a><i></i></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'community'),$_smarty_tpl);?>
">找小区</a></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'store'),$_smarty_tpl);?>
">中介公司</a></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'broker'),$_smarty_tpl);?>
">找经纪人</a></li>
			<li><a href="<?php echo getUrlPath(array('service'=>'house','template'=>'map-sale'),$_smarty_tpl);?>
">地图找房</a></li>
			<div class="a-right">
				<a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'house-zu'),$_smarty_tpl);?>
" class="publish">发布房源</a>
				<a href="<?php echo getUrlPath(array('service'=>'house','template'=>'zu'),$_smarty_tpl);?>
" class="more">查看更多&gt;&gt;</a>
			</div>
		</ul>
		<div class="rec-con fn-clear">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('house', array('action'=>'zuList','return'=>'zlist','pageSize'=>"8")); $_block_repeat=true; echo house(array('action'=>'zuList','return'=>'zlist','pageSize'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="rec-item">
				<div class="item-top">
					<a href="<?php echo $_smarty_tpl->tpl_vars['zlist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['zlist']->value['litpic'];?>
" alt=""></a>
					<?php if ($_smarty_tpl->tpl_vars['zlist']->value['isquanjing']!=0) {?><span class="i-all">全景</span><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['zlist']->value['isvideo']!=0) {?><span class="i-video">视频</span><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['zlist']->value['isshapan']!=0) {?><span class="i-sha">沙盘</span><?php }?>
				</div>
				<div class="item-bottom">
					<a href="javascipt:;"><p class="item-name"><?php echo $_smarty_tpl->tpl_vars['zlist']->value['title'];?>
</p></a>
					<p class="money">
						<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zlist']->value['addrid'];?>
<?php $_tmp15=ob_get_clean();?><?php echo getUrlPath(array('service'=>'house','template'=>'zu','addrid'=>0,'business'=>$_tmp15),$_smarty_tpl);?>
">
							<span><?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['zlist']->value['price'];?>
/月</span>
						</a>
					</p>
					<p class="location">
						<a href="javascipt:;">
							<span><?php echo $_smarty_tpl->tpl_vars['zlist']->value['room'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['zlist']->value['area'];?>
平方米</span>
						</a>
					</p>
				</div>
			</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo house(array('action'=>'zuList','return'=>'zlist','pageSize'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		</div>

	</div>
</div>
<?php }?>
<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告十一"),$_smarty_tpl);?>

</div>

<!-- 一句话招聘 -->
<?php if (in_array("job",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
<div class="word recommend-box house-box wrap fn-clear">
	<div class="box-right house-info word-l-con">
	    <div class="word-title fn-clear">
		    <ul class="fn-clear">
		      <li class="on">
		      	<a href="javascipt:;">一句话招聘</a>
		      	<i></i>
		      </li>
		      <li><a href="javascipt:;">一句话求职</a><i></i></li>
		      <i></i>
		    </ul>
	    </div>
	    <div class="right-con word-info show">
	      <ul>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"sentence",'return'=>"jobs",'pageSize'=>"7",'page'=>"1",'type'=>"0")); $_block_repeat=true; echo job(array('action'=>"sentence",'return'=>"jobs",'pageSize'=>"7",'page'=>"1",'type'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	        <li class="fn-clear">
	          <a href="javascipt:;" target="_blank">
	            <div class="li-left"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top1.png" alt=""></div>
	            <div class="li-right">
	              <h4><span class="span-1"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['note'];?>
</span><span class="span-2"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['people'];?>
</span></h4>
	              <p><i></i><?php echo $_smarty_tpl->tpl_vars['jobs']->value['contact'];?>
  <span class="span-time"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['pubdate1'];?>
</span></p>
	            </div>
	          </a>
	        </li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"sentence",'return'=>"jobs",'pageSize'=>"7",'page'=>"1",'type'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	      </ul>
	    </div>
	    <div class="right-con word-info">
	      <ul>
			  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"sentence",'return'=>"jobs",'pageSize'=>"7",'page'=>"1",'type'=>"1")); $_block_repeat=true; echo job(array('action'=>"sentence",'return'=>"jobs",'pageSize'=>"7",'page'=>"1",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			  <li class="fn-clear">
	          <a href="javascipt:;" target="_blank">
	            <div class="li-left"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top1.png" alt=""></div>
	            <div class="li-right">
	              <h4><span class="span-1"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['note'];?>
</span><span class="span-2"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['people'];?>
</span></h4>
	              <p><i></i><?php echo $_smarty_tpl->tpl_vars['jobs']->value['contact'];?>
  <span class="span-time"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['pubdate1'];?>
</span></p>
	            </div>
	          </a>
	        </li>
			  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"sentence",'return'=>"jobs",'pageSize'=>"7",'page'=>"1",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



	      </ul>
	    </div>

		<div class="buy">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/sz/job/sentence.html?type=1">发布一句话</a>
	    </div>
	    <div class="room">
	    	<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'post','param'=>'do=add'),$_smarty_tpl);?>
">发布职位</a>
	    </div>
	</div>
	<div class="job-wrap fn-clear">
		<div class="job-title">
			<h3>企业招聘</h3>
			<i></i>
			<div class="a-right">
				<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'post','param'=>'do=add'),$_smarty_tpl);?>
" class="publish">发布职位</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['job_channelDomain']->value;?>
" class="more">查看更多&gt;&gt;</a>
			</div>
		</div>
		<div class="job-con fn-clear">
			<ul class="fn-clear">

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"post",'return'=>"post",'pageSize'=>"12",'_flag'=>"1")); $_block_repeat=true; echo job(array('action'=>"post",'return'=>"post",'pageSize'=>"12",'_flag'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" target="_blank">
					<p class="p1"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
<span class="month"><?php echo $_smarty_tpl->tpl_vars['post']->value['salary'];?>
K/<span class="num">月</span></span></p>
					<p class="p2"><?php echo $_smarty_tpl->tpl_vars['post']->value['addr'][count($_smarty_tpl->tpl_vars['post']->value['addr'])-1];?>
 | <?php echo $_smarty_tpl->tpl_vars['post']->value['experience'];?>
 | <?php echo $_smarty_tpl->tpl_vars['post']->value['educational'];?>
</p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['companyUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['company']['title'];?>
&gt;&gt;</a>
					<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/top-02.png" alt="">
					</a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"post",'return'=>"post",'pageSize'=>"12",'_flag'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			</ul>
		</div>
	</div>
</div>
<!-- 最新入驻企业 -->
<div class="bussi-wrap wrap fn-clear">
	<div class="bussi-title job-title">
		<h3>最新入驻企业</h3>
		<i></i>
		<div class="a-right">
			<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'module'),$_smarty_tpl);?>
" class="publish">企业入驻</a>
			<a href="<?php echo getUrlPath(array('service'=>'job','template'=>'company'),$_smarty_tpl);?>
" class="more">查看更多&gt;&gt;</a>
		</div>
	</div>
	<div class="bussi-con">
		<div class="slideBox slideBox4">
			<div class="bd">
				<ul class="fn-clear">
					<li>
						<div class="fn-clear item-box">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"company",'return'=>"company",'pageSize'=>"14")); $_block_repeat=true; echo job(array('action'=>"company",'return'=>"company",'pageSize'=>"14"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<div class="bussi-item">
								<a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
"><img class="bussi-img" src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" alt=""></a>
								<div class="shade"></div>
								<div class="bg"><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
">企业官网</a></div>
								<div class="fn-hide">
									<div class="bg-top fn-clear">
										<a href="javascript:;"><img class="img-1" src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" alt=""></a>
										<i><a href="javascript:;"><img class="img-2" src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
" alt=""></a></i>
									</div>
									<div class="bg-bottom fn-clear">
										<a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
"><p class="bg-title"><?php echo $_smarty_tpl->tpl_vars['company']->value['title'];?>
</p></a>
										<p class="p1">
											<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
<?php $_tmp16=ob_get_clean();?><?php echo getUrlPath(array('service'=>'job','template'=>'company-job','id'=>$_tmp16),$_smarty_tpl);?>
">职位&nbsp; <span><?php echo $_smarty_tpl->tpl_vars['company']->value['pcount'];?>
</span></a>&nbsp; |&nbsp;
											<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
<?php $_tmp17=ob_get_clean();?><?php echo getUrlPath(array('service'=>'job','template'=>'company-salary','id'=>$_tmp17),$_smarty_tpl);?>
">工资&nbsp; <span><?php echo $_smarty_tpl->tpl_vars['company']->value['wcount'];?>
</span></a>&nbsp; |&nbsp;
											<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
<?php $_tmp18=ob_get_clean();?><?php echo getUrlPath(array('service'=>'job','template'=>'company-album','id'=>$_tmp18),$_smarty_tpl);?>
">相册&nbsp; <span><?php echo count($_smarty_tpl->tpl_vars['company']->value['picsArr']);?>
</span></a>
										</p>
										<p class="p2">
											招聘职位
										</p>
										<p class="p3">
											<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
<?php $_tmp19=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"post",'return'=>"post",'company'=>$_tmp19,'pageSize'=>"4")); $_block_repeat=true; echo job(array('action'=>"post",'return'=>"post",'company'=>$_tmp19,'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

											<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
、</a>
											<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"post",'return'=>"post",'company'=>$_tmp19,'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
<?php $_tmp20=ob_get_clean();?><?php echo getUrlPath(array('service'=>'job','template'=>'company-job','id'=>$_tmp20),$_smarty_tpl);?>
">查看该企业的全部职位&gt;&gt;</a>
										</p>
									</div>
									<div class="trans"></div>
									<em></em>
								</div>
							</div>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"company",'return'=>"company",'pageSize'=>"14"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						</div>
					</li>


				</ul>
			</div>
			<div class="hd">
		        <ul class="fn-clear">

		        </ul>
		    </div>
		</div>
	</div>
</div>
<?php }?>

<!-- 广告位 -->
<div class="ad-con">
	<?php echo getMyAd(array('title'=>"首页_模板十一_电脑端_广告十二"),$_smarty_tpl);?>

</div>
<!-- 最新入驻 -->
<?php if (in_array("huangye",$_smarty_tpl->tpl_vars['installModuleArr']->value)) {?>
<div class="most-wrap wrap fn-clear">
	<div class="most-left">
		<div class="most-title">
			<h3>最新入驻</h3>
			<a href="<?php echo $_smarty_tpl->tpl_vars['huangye_channelDomain']->value;?>
">查看更多&gt;&gt;</a>
		</div>
		<div class="slideBox slideBox5">
			<div class="bd">
				<ul class="fn-clear">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('huangye', array('return'=>"list",'action'=>"ilist",'orderby'=>"1",'pageSize'=>"4")); $_block_repeat=true; echo huangye(array('return'=>"list",'action'=>"ilist",'orderby'=>"1",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
						<div class="most-con">
							<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img class="img-1" src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><span><img class="img-2" src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" alt="" width="74" height="74"></span></a>
						</div>
						<div class="text">
							<a href="javascript:;"><p class="brj"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</p></a>
							<a href="javascript:;"><p class="tel">联系电话：<?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];?>
</p></a>
							<a href="javascript:;"><p class="common">电子邮箱：<?php echo $_smarty_tpl->tpl_vars['list']->value['email'];?>
</p></a>
							<a href="javascript:;"><p class="common">企业地址：<?php echo $_smarty_tpl->tpl_vars['list']->value['addressdet'];?>
</p></a>
							<a href="javascript:;"><p class="common">行业分类：<?php echo $_smarty_tpl->tpl_vars['list']->value['typeLevel'][0];?>
 » <?php echo $_smarty_tpl->tpl_vars['list']->value['typeLevel'][1];?>
</p></a>
						</div>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo huangye(array('return'=>"list",'action'=>"ilist",'orderby'=>"1",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
			<div class="hd">
		        <ul class="fn-clear"><li class=""></li><li class="on"></li><li></li></ul>
		    </div>
		</div>
	</div>
	<div class="most-right recommend fn-clear">
		<div class="right-title">
			<ul class="rec-title fn-clear">
				<li class="on"><a href="javascipt:;">推荐黄页</a><i></i></li>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('huangye', array('action'=>"type",'return'=>"type",'pageSize'=>"5")); $_block_repeat=true; echo huangye(array('action'=>"type",'return'=>"type",'pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<?php echo $_smarty_tpl->tpl_vars['huangye_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a><i></i></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo huangye(array('action'=>"type",'return'=>"type",'pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<div class="a-right">
					<a href="<?php echo getUrlPath(array('service'=>'member','template'=>'module'),$_smarty_tpl);?>
" class="publish">入驻黄页</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['huangye_channelDomain']->value;?>
" class="more">查看更多&gt;&gt;</a>
				</div>
			</ul>
		</div>
		<div class="right-con fn-clear">
			<ul class="fn-clear">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('huangye', array('return'=>"list",'action'=>"ilist",'rec'=>"1",'pageSize'=>"9")); $_block_repeat=true; echo huangye(array('return'=>"list",'action'=>"ilist",'rec'=>"1",'pageSize'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<div class="li-left">
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['litpic'];?>
" alt=""></a>
					</div>
					<div class="most-li-right">
						<p class="p1"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>
						<p class="p2"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/info-01.png" alt=""><?php echo $_smarty_tpl->tpl_vars['list']->value['tel'];?>
</a></p>
						<?php if ($_smarty_tpl->tpl_vars['list']->value['addressdet']) {?><p class="p3"><a href="javascipt:;"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/rec-02.png" alt=""><?php echo $_smarty_tpl->tpl_vars['list']->value['addressdet'];?>
</a></p><?php }?>
					</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo huangye(array('return'=>"list",'action'=>"ilist",'rec'=>"1",'pageSize'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
	</div>
</div>
<?php }?>

<!-- 底部 -->
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>'siteConfig','theme'=>'gray'), 0);?>


<div class="job-company-popup">

</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.SuperSlide.2.1.1.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/login.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="UTF-8" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>

<?php }} ?>
