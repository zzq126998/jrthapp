<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:40:19
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\paper\140\header.html" */ ?>
<?php /*%%SmartyHeaderCode:4429801695d5125f3e0a874-96117407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea075d59a259c293fed1914371f294ae46cf3cbd' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\paper\\140\\header.html',
      1 => 1556529229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4429801695d5125f3e0a874-96117407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paper_channelDomain' => 0,
    'paper_logoUrl' => 0,
    'templets_skin' => 0,
    'paper_hotline' => 0,
    'keywords' => 0,
    'langData' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5125f3e18344_13951585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5125f3e18344_13951585')) {function content_5d5125f3e18344_13951585($_smarty_tpl) {?><div class="header">
    <div class="wrap w1200">
        <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['paper_channelDomain']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['paper_logoUrl']->value;?>
" alt="" /></a></div>
        <div class="kefu">
            <div class="img-box"><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/icon_kefu.png" alt=""></div>
            <p><?php echo $_smarty_tpl->tpl_vars['paper_hotline']->value;?>
</p>
        </div>
        <div class="search-box">
            <div class="form-box">
                <form id="sform" name="search" method="get" action='<?php echo getUrlPath(array('service'=>"paper",'template'=>"search_list"),$_smarty_tpl);?>
'>
                    <input name="keywords" type="text" class="txt_search" id="search_keyword" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" autocomplete="off"  placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][13];?>
" data-role="input">
                    <button id="search_button" type="submit" class="btn-s"><i></i></button>
                    <input type="hidden" name="date" id="seach_date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                </form>
            </div>
            <ul class="choose-box fn-clear">
                <li <?php if ($_smarty_tpl->tpl_vars['date']->value=='today') {?>class="active"<?php }?> date-time="today"><i></i> <span><?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][5];?>
</span></li>
                <li <?php if ($_smarty_tpl->tpl_vars['date']->value=='week') {?>class="active"<?php }?> date-time="week"><i></i> <span><?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][6];?>
</span></li>
                <li <?php if ($_smarty_tpl->tpl_vars['date']->value=='month') {?>class="active"<?php }?> date-time="month"><i></i> <span><?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][7];?>
</span></li>
                <li <?php if ($_smarty_tpl->tpl_vars['date']->value=='halfyear') {?>class="active"<?php }?> date-time="halfyear"><i></i> <span><?php echo $_smarty_tpl->tpl_vars['langData']->value['paper'][0][8];?>
</span></li>

            </ul>
        </div>
    </div>


</div><?php }} ?>
