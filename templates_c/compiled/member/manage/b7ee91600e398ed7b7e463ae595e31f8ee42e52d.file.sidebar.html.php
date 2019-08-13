<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:36
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:18536739795d511fece74424-41971268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ee91600e398ed7b7e463ae595e31f8ee42e52d' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\sidebar.html',
      1 => 1556457137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18536739795d511fece74424-41971268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_ucenterLinks' => 0,
    'cfg_pointState' => 0,
    'cfg_pointName' => 0,
    'installModuleArr' => 0,
    'userinfo' => 0,
    'module' => 0,
    'dating_channelDomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511fecf2dd43_60783883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511fecf2dd43_60783883')) {function content_5d511fecf2dd43_60783883($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><!-- 侧栏 s -->
<div class="sidebar">
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][3];?>
<s><i></i></s></dt>

		<?php if (in_array('deposit',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'deposit'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][10];?>
</a></dd>
		<?php }?>

        <?php if (in_array('order',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][12];?>
</a></dd>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['cfg_pointState']->value&&in_array('convert',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'convert'),$_smarty_tpl);?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][726],'1',$_smarty_tpl->tpl_vars['cfg_pointName']->value);?>
</a></dd>
		<?php }?>

		<?php if (in_array('record',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'record'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][226];?>
</a></dd>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['cfg_pointState']->value) {?>
		<?php if (in_array('transfer',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'transfer'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][730];?>
</a></dd>
		<?php }?>
		<?php if (in_array('point',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'point'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cfg_pointName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][78];?>
</a></dd>
		<?php }?>
		<?php }?>

		<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'article','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tieba','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php if (((in_array("article",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp12)||(in_array("tieba",$_smarty_tpl->tpl_vars['installModuleArr']->value)&&$_tmp13))&&in_array('reward',$_smarty_tpl->tpl_vars['cfg_ucenterLinks']->value)) {?>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'reward'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][233];?>
</a></dd>
		<?php }?>

		<dd><a href="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['message']>0) {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'message','param'=>"state=0"),$_smarty_tpl);
} else {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'message'),$_smarty_tpl);
}?>"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][19];
if ($_smarty_tpl->tpl_vars['userinfo']->value['message']>0) {?><em><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['message'];?>
</em><?php }?></a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'collect'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][9];?>
</a></dd>
	</dl>

	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][234];?>
<s><i></i></s></dt>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"siteModule",'return'=>"module")); $_block_repeat=true; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			
			<?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'article','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='article'&&$_tmp14) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][269];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config','action'=>'selfmedia'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][28][0];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'article'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][1];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'article'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][16];?>
</a></li>
				</ul>
			</dd>
			
			<dd class="fn-hide">
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][51];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'discovery'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][52];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'business-discovery'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][53];?>
</a></li>
				</ul>
			</dd>
			

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'info','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='info'&&$_tmp15) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][18];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'info'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][1];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'info'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][143];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'order','module'=>'info'),$_smarty_tpl);?>
?type=out"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][21];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'house','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='house'&&$_tmp16) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][237];?>
<s><i></i></s></a>
				<ul>
					
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'config-house'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][449];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'house_yuyue'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][54];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'house_entrust'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][1];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'house_meallist'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][3];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'house_mymeal'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][4];?>
</a></li>
					<li class="line">&nbsp;</li>
					
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'house_yuyue_list'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][55];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'house_entrust_list'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][56];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-sale'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][218];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-zu'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][219];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-xzl'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][220];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-sp'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][221];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-cf'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][222];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'house-cw'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][7];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'job','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='job'&&$_tmp17) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][765];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'resume'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][242];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'collections'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][243];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'delivery'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][244];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'job','action'=>'invitation'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][245];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'tieba','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='tieba'&&$_tmp18) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][238];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'tieba'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][1];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'tieba','template'=>'fabu'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][143];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'dating','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='dating'&&$_tmp19) {?>
			<dd>
				<a href="<?php echo $_smarty_tpl->tpl_vars['dating_channelDomain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][894];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'dating-mydata'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][410];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'dating','template'=>'u','id'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['dating_uid'])),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][20];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'dating','action'=>'my_leadline'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][29][19];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'dating','action'=>'my_sendgreet'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][248];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'dating','action'=>'my_visit_record'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][249];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'put_forward','param'=>'module=dating&utype=0'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][12];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'dating','action'=>'my_store'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][57];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'dating','action'=>'my_hn'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][58];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'huodong','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='huodong'&&$_tmp20) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][3];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'huodong-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][252];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'huodong'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][3];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'huodong','template'=>'fabu'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][11][7];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'vote','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='vote'&&$_tmp21) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][26];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'vote-join'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][252];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage-vote'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][26];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu-vote'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][27];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'live','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='live'&&$_tmp22) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][23];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'live'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][28];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'live'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][29];?>
</a></li>
                    <li><a href="<?php echo getUrlPath(array('service'=>'live','template'=>'anchor_index','userid'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['userid'])),$_smarty_tpl);?>
?type=fans"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][847];?>
</a></li>
                    <li><a href="<?php echo getUrlPath(array('service'=>'live','template'=>'anchor_index','userid'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['userid'])),$_smarty_tpl);?>
?type=care"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][846];?>
</a></li>
				</ul>
			</dd>

			
			<?php } else {?><?php ob_start();?><?php echo verifyModuleAuth(array('module'=>'car','type'=>'userCenter'),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['module']->value['code']=='car'&&$_tmp23) {?>
			<dd>
				<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][43];?>
<s><i></i></s></a>
				<ul>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'car-config'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['car'][6][44];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage','action'=>'car'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][10][1];?>
</a></li>
					<li><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'fabu','action'=>'car'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][143];?>
</a></li>
				</ul>
			</dd>

			<?php }}}}}}}}}}?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"siteModule",'return'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	</dl>

	<dl style="display: none;">
		<dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][253];?>
<s><i></i></s></dt>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'profile'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][23];?>
</a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chpassword'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][19];?>
</a></dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['paypwdCheck']==0) {?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'paypwdAdd'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][120];?>
</a><?php } else { ?><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'paypwdEdit'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][20];?>
</a><?php }?></dd>
		<dd><a href="<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['certifyState']!=1) {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chCertify'),$_smarty_tpl);
} else {
echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'shCertify'),$_smarty_tpl);
}?>"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][212];?>
</a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chphone'),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['phoneCheck']==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][774];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][7];
}?></a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'chemail'),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailCheck']==0) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][16];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][10];
}?></a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'security','doget'=>'question'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][213];?>
</a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'address'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][214];?>
</a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'connect'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][11];?>
</a></dd>
		<dd><a href="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'loginrecord'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][15][8];?>
</a></dd>
	</dl>
</div>
<!-- 侧栏 e -->
<?php }} ?>
