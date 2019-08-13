<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:49:43
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\info\115\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1715696585d510c077d9b33-20365195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35e67dd4f06548af8b26cc9dd4af5101aa9c5553' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\info\\115\\list.html',
      1 => 1555744192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1715696585d510c077d9b33-20365195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'list_seotitle' => 0,
    'list_typename' => 0,
    'info_channelName' => 0,
    'cfg_webname' => 0,
    'list_keywords' => 0,
    'list_description' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'info_channelDomain' => 0,
    'list_id' => 0,
    'cfg_hideUrl' => 0,
    'cfg_cookiePre' => 0,
    'keywords' => 0,
    'list_lower' => 0,
    'list_crumbs' => 0,
    'type' => 0,
    'type1' => 0,
    'type2' => 0,
    'addr' => 0,
    'addr1' => 0,
    'addr2' => 0,
    'list_item' => 0,
    'item' => 0,
    'options' => 0,
    'ilist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510c07856b78_78342106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510c07856b78_78342106')) {function content_5d510c07856b78_78342106($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php if ($_smarty_tpl->tpl_vars['list_seotitle']->value!='') {
echo $_smarty_tpl->tpl_vars['list_seotitle']->value;
} else {
if ($_smarty_tpl->tpl_vars['list_typename']->value) {
echo $_smarty_tpl->tpl_vars['list_typename']->value;
} else { ?>分类信息列表<?php }
}?>- <?php echo $_smarty_tpl->tpl_vars['info_channelName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['list_keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['list_description']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/public.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/list.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/info.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
', cfg_staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
', templatePath = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
		var typeid = '<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
';
	var criticalPoint = 1240, criticalClass = "w1200";
	$("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
	var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
';
	var addrid = 0, atpage = 1, totalCount = 0, pageSize = 20;
	var keywords = '<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
';
	var list_lower = '<?php echo $_smarty_tpl->tpl_vars['list_lower']->value;?>
';
<?php echo '</script'; ?>
>
</head>

<body class="w1200">
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- 导航 s-->
<?php echo $_smarty_tpl->getSubTemplate ("header_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- 导航 e-->

<div class="wrap crumbs fn-clear">
    <div class="cont">
        <a href="<?php echo $_smarty_tpl->tpl_vars['info_channelDomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['info_channelName']->value;?>
</a>
        <s></s>
        <?php if ($_smarty_tpl->tpl_vars['list_id']->value) {
echo $_smarty_tpl->tpl_vars['list_crumbs']->value;
} else { ?>信息列表<?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?><a class="filter-item search" href="javascript:;">关键词：<em><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</em><span class="close">×</span></a><?php }?>
</div>


<div class="filter_box">
	<div class="wrap">
		<div class="filter">
			<?php if ($_smarty_tpl->tpl_vars['list_id']->value==0) {?>
			<dl class="fn-clear" id="fnav">
				<dt>分类</dt>
				<dd>
					<div class="f_more">更多<i></i></div>
					<div class="item_box">
						<a href="<?php echo getUrlPath(array('service'=>'info','template'=>'list'),$_smarty_tpl);?>
" class="curr">不限</a>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>"type")); $_block_repeat=true; echo info(array('action'=>"type",'return'=>"type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a href="<?php echo getUrlPath(array('service'=>'info','template'=>'list','id'=>$_smarty_tpl->tpl_vars['type']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];
if ($_smarty_tpl->tpl_vars['type']->value['lower']) {
}?></a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>"type"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</dd>
			</dl>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['list_lower']->value>0) {?>
			<dl class="fn-clear" id="subnav" data-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
				<dt>分类</dt>
				<dd>
					<div class="f_more">更多<i></i></div>
					<div class="item_box">
						<a href="javascript:;" data-id="0" class="curr">不限</a>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>"type",'type'=>$_smarty_tpl->tpl_vars['list_id']->value,'son'=>"1")); $_block_repeat=true; echo info(array('action'=>"type",'return'=>"type",'type'=>$_smarty_tpl->tpl_vars['list_id']->value,'son'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a href="javascript:;" data-type="flag" data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];
if ($_smarty_tpl->tpl_vars['type']->value['lower']) {?><s></s><?php }?></a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>"type",'type'=>$_smarty_tpl->tpl_vars['list_id']->value,'son'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<div class="subnav fn-clear">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['list_id']->value,'son'=>"1")); $_block_repeat=true; echo info(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['list_id']->value,'son'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php if ($_smarty_tpl->tpl_vars['type1']->value['lower']) {?>
							<div id="subnav<?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
">
								<a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
">不限</a>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"type",'return'=>"type2",'type'=>$_smarty_tpl->tpl_vars['type1']->value['id'])); $_block_repeat=true; echo info(array('action'=>"type",'return'=>"type2",'type'=>$_smarty_tpl->tpl_vars['type1']->value['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['type2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type2']->value['typename'];?>
</a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>"type2",'type'=>$_smarty_tpl->tpl_vars['type1']->value['id']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</div>
							<?php }?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"type",'return'=>"type1",'type'=>$_smarty_tpl->tpl_vars['list_id']->value,'son'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					</div>
				</dd>
			</dl>
			<?php }?>

			<!--<dl class="fn-clear" id="">-->
				<!--<dt>来源</dt>-->
				<!--<dd>       -->
					<!--<div class="item_box">-->
						<!--<a href="javascript:;" class="curr">不限</a>-->
						<!--<a href="javascript:;" data-id="2">商家<s></s></a>-->
						<!--<a href="javascript:;" data-id="1">个人<s></s></a>-->
					<!--</div>-->
				<!--</dd>-->
			<!--</dl>-->

			<dl class="fn-clear" id="addr">
				<dt>区域</dt>
				<dd>
					<a href="javascript:;" data-id="0" class="curr">不限</a>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"addr",'return'=>"addr",'son'=>"1")); $_block_repeat=true; echo info(array('action'=>"addr",'return'=>"addr",'son'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['addr']->value['typename'];
if ($_smarty_tpl->tpl_vars['addr']->value['lower']) {?><s></s><?php }?></a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"addr",'return'=>"addr",'son'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<div class="subnav fn-clear">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"addr",'return'=>"addr1",'son'=>"1")); $_block_repeat=true; echo info(array('action'=>"addr",'return'=>"addr1",'son'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if ($_smarty_tpl->tpl_vars['addr1']->value['lower']) {?>
						<div id="addr<?php echo $_smarty_tpl->tpl_vars['addr1']->value['id'];?>
">
							<a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['addr1']->value['id'];?>
">不限</a>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"addr",'return'=>"addr2",'type'=>$_smarty_tpl->tpl_vars['addr1']->value['id'])); $_block_repeat=true; echo info(array('action'=>"addr",'return'=>"addr2",'type'=>$_smarty_tpl->tpl_vars['addr1']->value['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['addr2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['addr2']->value['typename'];?>
</a>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"addr",'return'=>"addr2",'type'=>$_smarty_tpl->tpl_vars['addr1']->value['id']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
						<?php }?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"addr",'return'=>"addr1",'son'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</dd>
			</dl>
			<dl class="fn-clear">
				<dt>价格</dt>
				<dd>
					<a href="javascript:;" data-id="0" class="curr">不限</a>
					<a href="javascript:;" data-id="0,100">100<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
以下</a>
					<a href="javascript:;" data-id="100,300">100-300<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
					<a href="javascript:;" data-id="300,500">300-500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
					<a href="javascript:;" data-id="500,1000">500-1000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
					<a href="javascript:;" data-id="1000,1500">1000-1500<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
					<a href="javascript:;" data-id="1500,2000">1500-2000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
					<a href="javascript:;" data-id="2000,3000">2000-3000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</a>
					<a href="javascript:;" data-id="3000,10000000">3000<?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
以上</a>

				</dd>
			</dl>

			<div id="itemOptions"></div>

			<?php if ($_smarty_tpl->tpl_vars['list_item']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['formtype']!="text") {?>
			<dl class="item fn-clear" data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['field'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				<dt><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</dt>
				<dd>
					<a href="javascript:;" data-id="0" class="curr">不限</a>
					<?php  $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['options']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['options']->key => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['options']->key;
?>
					<a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['options']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['options']->value;?>
</a>
					<?php } ?>
				</dd>
			</dl>
			<?php }?>
			<?php } ?>
			<?php }?>
			<div class="more fn-hide"><a href="javascript:;">更多选项<i></i></a></div>
		</div>
	</div>
</div>

<div class="wrap">
	<div class="sortbar fn-clear">
		<div class="tabs">
			<ul class="fn-clear">
				<li data-id="0" class="curr"><a href="javascript:;">全部信息</a></li>
				<li data-id="1"><a href="javascript:;">个人发布</a></li>
				<li data-id="2"><a href="javascript:;">商家发布</a></li>
			</ul>
		</div>
		<div class="views">
			<ul class="fn-clear">
				<li class="tpage"><a href="javascript:;" class="prev diabled"><i></i></a><span class="atpage"> <em>1</em> / 2 </span><a href="javascript:;" class="next"><i></i></a></li>
				<li class="window curr"><a href="javascript:;"><i></i>大图</a></li>
				<li class="rowlist"><a href="javascript:;"><i></i>列表</a></li>
			</ul>
		</div>
	</div>
	<div class="sort">
		<ul class="fn-clear">
			<li class="st curr" data-sort="1"><a href="javascript:;">默认排序</a></li>
			<!--<li class="st" data-sort="3"><a href="javascript:;">评分</a></li>-->
			<li class="st" data-sort="2"><a href="javascript:;">浏览量</a></li>
			<li class="videopic vid" data-sort="vid">
				<a href="javascript:;">
					<label><em></em></label>只看有视频<i class="picon-new"></i>
				</a>
			</li>
			<li class="videopic pic" data-sort="pic">
				<a href="javascript:;">
					<label><em></em></label>只看有图
				</a>
			</li>
			<li class="st price" data-sort="5">
				<a href="javascript:;">
					按价格 <s></s><i></i></span>
				</a>
				<div class="inp_price">
					<input type="input" class="p1" placeholder="￥" maxlength="5" value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">-
					<input type="input" class="p2" placeholder="￥" maxlength="5" value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
					<input type="button" class="btn" value="确定">
				</div>

			</li>

			<!-- <li class="fire"><a href="javascript:;" class="check"><i></i>火急</a></li> -->
			<!-- <li class="top1"><a href="javascript:;" class="check"><i></i>置顶</a></li> -->
		</ul>
	</div>
</div>

<!-- 加载失败 -->
<div class="wrap failed"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon_faild.png"><span>没有找到符合条件的结果</span></div>

<!-- 列表 -->
<div class="wrap lmain fn-clear ">
	<div class="fn-left pub main">
		<ul class="fn-clear recTop topborder">


		</ul>
		<ul class="fn-clear recCom">

		</ul>
	</div>


	<div class="fn-right other_box">
		<div class="tgtel">推广热线 <b>400-025-1158</b></div>
		<div class="adbox">
			<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
upfile/adPic.png" alt="">
		</div>
		<div class="r_other">其他人还在看</div>
		<div class="pub bmain">
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('info', array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"3",'pageSize'=>"2")); $_block_repeat=true; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"3",'pageSize'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<div class="box_collect"><i></i></div>

					<a href="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['url'];?>
">
						<div class="recom_img">
							<img src="<?php echo changeFileSize(array('url'=>((string)$_smarty_tpl->tpl_vars['ilist']->value['litpic']),'type'=>"small"),$_smarty_tpl);?>
" alt="">
							<?php if ($_smarty_tpl->tpl_vars['ilist']->value['video']) {?>
							<div class="cover_play">
								<img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/Icon_play.png" alt="">
							</div>
							<?php }?>
							<div class="box_mark">
								<?php if ($_smarty_tpl->tpl_vars['ilist']->value['video']!=1) {?>
								<span class="m_pic"><em><?php echo $_smarty_tpl->tpl_vars['ilist']->value['pcount'];?>
</em>图</span>
								<?php }?>
							</div>
						</div>
						<div class="recom_info">
							<?php if ($_smarty_tpl->tpl_vars['ilist']->value['price_switch']==0) {?><p class="info_price"><?php if ($_smarty_tpl->tpl_vars['ilist']->value['price']!=0) {?><b>¥</b><?php echo $_smarty_tpl->tpl_vars['ilist']->value['price'];
} else { ?>价格面议<?php }?></p><?php }?>
							<p class="m_info"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['title'];?>
</p>
							<div class="info_address fn-clear">
								<span class="fn-left location"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][2];?>
/<?php echo $_smarty_tpl->tpl_vars['ilist']->value['address'][1];?>
</span>
								<span class="fn-right telphone" data-tel="<?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
">
								<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/Icon_tel.png" alt=""><?php }?>
									</span>
								<div class="c_telphone"><?php echo $_smarty_tpl->tpl_vars['ilist']->value['member']['phone'];?>
 <i></i></div>
							</div>
						</div>
					</a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo info(array('action'=>"ilist_v2",'return'=>"ilist",'orderby'=>"3",'pageSize'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>

	</div>
</div>

<div class="wrap pub bmain fn-hide">
	<ul class="fn-clear main_list">

	</ul>
</div>

<div class="wrap pagination fn-clear"></div>





<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.scroll.loading.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/list.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/info.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.qrcode.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
