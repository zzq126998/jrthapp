<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-22 02:07:28
         compiled from "/www/wwwroot/hnup.rucheng.pro/templates/siteConfig/public_foot_v3.html" */ ?>
<?php /*%%SmartyHeaderCode:3734588045d0d1ce0bbbba3-96347910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e02becf43718757be01a652007a97db0cd32cfd' => 
    array (
      0 => '/www/wwwroot/hnup.rucheng.pro/templates/siteConfig/public_foot_v3.html',
      1 => 1553395088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3734588045d0d1ce0bbbba3-96347910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'module' => 0,
    'flink' => 0,
    'row' => 0,
    'type' => 0,
    'type1' => 0,
    'cfg_basehost' => 0,
    'cfg_weixinQr' => 0,
    'cfg_powerby' => 0,
    'cfg_statisticscode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d0d1ce0bd1925_80680175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0d1ce0bd1925_80680175')) {function content_5d0d1ce0bd1925_80680175($_smarty_tpl) {?><div class="footer <?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">
  <div class="wrap">
    <?php if ($_smarty_tpl->tpl_vars['module']->value) {?>
    <div class="friendlink">
      <h5>友情链接</h5>
      <ul class="fn-clear">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"friendLink",'return'=>"flink",'module'=>$_smarty_tpl->tpl_vars['module']->value)); $_block_repeat=true; echo siteConfig(array('action'=>"friendLink",'return'=>"flink",'module'=>$_smarty_tpl->tpl_vars['module']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><a href="<?php echo $_smarty_tpl->tpl_vars['flink']->value['sitelink'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['flink']->value['sitename'];?>
"><?php echo $_smarty_tpl->tpl_vars['flink']->value['sitename'];?>
</a></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"friendLink",'return'=>"flink",'module'=>$_smarty_tpl->tpl_vars['module']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      </ul>
    </div>
    <?php }?>
    <div class="help fn-clear">
      <div class="helplist">
        <dl>
          <dt>关于我们</dt>
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"singel",'pageSize'=>"4")); $_block_repeat=true; echo siteConfig(array('action'=>"singel",'pageSize'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp12=ob_get_clean();?><?php echo getUrlPath(array('service'=>'siteConfig','template'=>'about','id'=>$_tmp12),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></dd>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"singel",'pageSize'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

          <dd><a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'feedback'),$_smarty_tpl);?>
" target="_blank">意见反馈</a></dd>
        </dl>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'helpsType','return'=>'type','pageSize'=>"5")); $_block_repeat=true; echo siteConfig(array('action'=>'helpsType','return'=>'type','pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <dl>
          <dt><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
<s></s></dt>
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>'helpsType','type'=>$_tmp13,'return'=>'type1','pageSize'=>"5")); $_block_repeat=true; echo siteConfig(array('action'=>'helpsType','type'=>$_tmp13,'return'=>'type1','pageSize'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <dd><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type1']->value['id'];?>
<?php $_tmp14=ob_get_clean();?><?php echo getUrlPath(array('service'=>'siteConfig','template'=>'help','id'=>$_tmp14),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
"><?php echo $_smarty_tpl->tpl_vars['type1']->value['typename'];?>
</a></dd>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'helpsType','type'=>$_tmp13,'return'=>'type1','pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </dl>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>'helpsType','return'=>'type','pageSize'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      </div>
      <div class="qr">
        <div class="qr-img"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" />移动版</div>
        <?php if ($_smarty_tpl->tpl_vars['cfg_weixinQr']->value) {?><div class="qr-img"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weixinQr']->value;?>
" />微信公众号</div><?php }?>
      </div>
    </div>
    <div class="copyright"><?php echo $_smarty_tpl->tpl_vars['cfg_powerby']->value;?>
</div>
    <div class="statisticscode"><?php echo $_smarty_tpl->tpl_vars['cfg_statisticscode']->value;?>
</div>
  </div>
</div>
<?php }} ?>
