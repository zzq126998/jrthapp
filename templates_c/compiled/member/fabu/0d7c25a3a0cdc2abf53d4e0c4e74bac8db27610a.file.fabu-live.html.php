<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:47
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\fabu-live.html" */ ?>
<?php /*%%SmartyHeaderCode:10845124215d511ff70d70a1-21859847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d7c25a3a0cdc2abf53d4e0c4e74bac8db27610a' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\fabu-live.html',
      1 => 1561715346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10845124215d511ff70d70a1-21859847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'cfg_staticPath' => 0,
    'templets_skin' => 0,
    'langData' => 0,
    'id' => 0,
    'litpic' => 0,
    'litpicS' => 0,
    'typenav' => 0,
    'typeid' => 0,
    'title' => 0,
    'ftime' => 0,
    'way' => 0,
    'catid' => 0,
    'password' => 0,
    'startmoney' => 0,
    'endmoney' => 0,
    'pulltype' => 0,
    'pullurl_pc' => 0,
    'pullurl_touch' => 0,
    'flow' => 0,
    'menuArr' => 0,
    'k' => 0,
    'cfg' => 0,
    'note' => 0,
    'arcrank' => 0,
    'thumbSize' => 0,
    'cfg_staticVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511ff71446e5_67282211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511ff71446e5_67282211')) {function content_5d511ff71446e5_67282211($_smarty_tpl) {?><?php echo '<script'; ?>
>
    var userDomain='<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'manage-live'),$_smarty_tpl);?>
', detailUrl = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
',staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
', templatePath = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
<?php echo '</script'; ?>
>
<style>
.list_box .menu {position: relative;width:70%;float: left;}
.list_box .menu li {margin-bottom: 10px;overflow: hidden;}
.list_box .menu input {font-size: 14px;}
.list_box .menu input:focus {position: relative;z-index: 1;}
.list_box .menu input.name {width:100px;}
.list_box .menu input.url {width:200px;margin-left: -1px;}
.list_box .menu span {font-weight: bold;margin:0 5px;cursor: pointer;font-size: 14px;color: #666;}
.list_box .menu span.sort {margin-right: 10px;cursor: move;}
.list_box .menu span.dn {margin-left: 45px;color: #ccc;}
.list_box .menu span.dn.active {color: #666;}
.list_box .menu .placeholder {height: 82px;width:394px;margin-bottom: 10px;border:1px solid #ccc;border: 1px dashed #c8c8c8;}
.w1200 .list_box .menu .placeholder {height: 40px;}
.w1200 .list_box .menu span.dn {margin-left: 10px;}
.notebox {overflow: hidden;}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <div class="list_banner"><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][43];?>
</p></div>
    <div class="list_main">
        <form id="fbForm" action="/include/ajax.php?service=live&action=<?php if (!empty($_smarty_tpl->tpl_vars['id']->value)) {?>edit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
} else { ?>getPushSteam<?php }?>">
            <div class="list_box listImgBox">
                <label for="up-banner" class="list_upload"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][44];?>
</label>
                <div id="up-banner" <?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?>style="display:none;"<?php }?>></div>
                <?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?>
                <ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='javascript:;'><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['litpicS']->value;?>
"/></a></li></ul>
                <?php } else { ?>
                <ul id="listSection1" class="listSection thumblist fn-clear"></ul>
                <?php }?>
                <input type="hidden" name="litpic" value="<?php echo $_smarty_tpl->tpl_vars['litpicS']->value;?>
" class="imglist-hidden">
                <span style="margin-left: 20px;">
                    <p>(<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][45];?>
)</p>
                    <button class="btn_sel"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][46];?>
</button>
                </span>
            </div>
            <div class="list_box">
                <label for="live_fl"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][47];?>
</label>
                <select name="typeid" id="live_fl">
                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];?>
</option>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('live', array('action'=>"type",'return'=>"typenav",'type'=>"0")); $_block_repeat=true; echo live(array('action'=>"type",'return'=>"typenav",'type'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['typenav']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['typeid']->value==$_smarty_tpl->tpl_vars['typenav']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['typenav']->value['typename'];?>
</option>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo live(array('action'=>"type",'return'=>"typenav",'type'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </select>
                <span class="tip-inline"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][48];?>
</span>
            </div>
            <div class="list_box">
                <label for="live_title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][49];?>
</label>
                <input type="text" id="live_title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][50];?>
">
            </div>

            <div class="list_box">
                <label for="start_time"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][17][34];?>
</label>
                <input type="text" id="start_time" name="valid" value="<?php echo $_smarty_tpl->tpl_vars['ftime']->value;?>
" readonly placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][51];?>
">
            </div>
            <div class="list_box fn-hide">
                <label><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][52];?>
</label>
                <div class="live_sel">
                    <div class="h_live">
                        <div class="h_screen <?php if ($_smarty_tpl->tpl_vars['way']->value==0) {?>active<?php }?>" data-id="0" id="h_screen"></div>
                        <label for="h_screen"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][53];?>
</label>
                    </div>
                    <div class="v_live">
                        <div class="h_screen <?php if ($_smarty_tpl->tpl_vars['way']->value==1) {?>active<?php }?>" data-id="1" id="v_screen"></div>
                        <label for="v_screen"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][54];?>
</label>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['way']->value;?>
" name="way" id="show">
            </div>
            <div class="list_box">
                <label for="live_lx"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][55];?>
</label>
                <select name="catid" id="live_lx">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['catid']->value==0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][56];?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['catid']->value==1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][57];?>
</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['catid']->value==2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][889];?>
</option>
                </select>
            </div>
            <div class="list_box li_pass" style="<?php if ($_smarty_tpl->tpl_vars['catid']->value==1) {?>display:block;<?php }?>">
                <label></label>
                <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][164];?>
">
            </div>
            <div class="list_box li_collect" style="<?php if ($_smarty_tpl->tpl_vars['catid']->value==2) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                <label for="start_collect"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][58];?>
</label>
                <span class="money_collect">
                    <span class="symbol cReduce">-</span>
                    <input type="text" value="<?php if (!empty($_smarty_tpl->tpl_vars['startmoney']->value)) {
echo $_smarty_tpl->tpl_vars['startmoney']->value;
} else { ?>0<?php }?>" name="startmoney" id="start_collect">
                    <span class="symbol cAdd">+</span>
                    <span> <?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</span>
                </span>
            </div>
            <div class="list_box li_collect" style="<?php if ($_smarty_tpl->tpl_vars['catid']->value==2) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                <label for="end_collect"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][59];?>
</label>
                    <span class="money_collect">
                        <span class="symbol cReduce">-</span>
                        <input type="text" value="<?php if (!empty($_smarty_tpl->tpl_vars['endmoney']->value)) {
echo $_smarty_tpl->tpl_vars['endmoney']->value;
} else { ?>0<?php }?>" name="endmoney" id="end_collect">
                        <span class="symbol cAdd">+</span>
                        <span><?php echo echoCurrency(array('type'=>'short'),$_smarty_tpl);?>
</span>
                    </span>
            </div>
            <div class="list_box">
                <label for="pulltype">拉流地址</label>
                <select name="pulltype" id="pulltype">
                    <option value="0" <?php if (!$_smarty_tpl->tpl_vars['pulltype']->value) {?> selected<?php }?>>系统生成</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['pulltype']->value==1) {?> selected<?php }?>>手动输入</option>
                </select>
            </div>
            <div class="list_box pullurlBox<?php if (!$_smarty_tpl->tpl_vars['pulltype']->value) {?> fn-hide<?php }?>">
                <label for="pullurl_pc">拉流地址(电脑端)</label>
                <input type="text" id="pullurl_pc" name="pullurl_pc" value="<?php echo $_smarty_tpl->tpl_vars['pullurl_pc']->value;?>
" placeholder="请输入第三方拉流地址">
            </div>
            <div class="list_box pullurlBox<?php if (!$_smarty_tpl->tpl_vars['pulltype']->value) {?> fn-hide<?php }?>">
                <label for="pullurl_touch">拉流地址(移动端)</label>
                <input type="text" id="pullurl_touch" name="pullurl_touch" value="<?php echo $_smarty_tpl->tpl_vars['pullurl_touch']->value;?>
" placeholder="请输入第三方拉流地址">
            </div>
            <div class="list_box">
                <label for="live_lc"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][60];?>
</label>
                <select name="flow" id="live_lc">
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['flow']->value==1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][61];?>
</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['flow']->value==2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][62];?>
</option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['flow']->value==3||$_smarty_tpl->tpl_vars['flow']->value=='') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][63];?>
</option>
                </select>
            </div>
            <div class="list_box fn-clear">
                <label for="menu">直播菜单</label>
                <ul class="menu">
                    <?php if ($_smarty_tpl->tpl_vars['menuArr']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['cfg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cfg']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cfg']->key => $_smarty_tpl->tpl_vars['cfg']->value) {
$_smarty_tpl->tpl_vars['cfg']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['cfg']->key;
?>
                    <li data-idx="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                      <div class="input-prepend input-append">
                        <span class="add-on sort">排序</span>
                        <input class="input-small name" type="text" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][name]" placeholder="菜单名称" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['name'];?>
">
                        <input class="input-middle url" type="text" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][url]" placeholder="菜单链接" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['cfg']->value['sys']) {?>readonly="" title="此项不需要填写"<?php }?>>
                        <input type="hidden" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][show]" class="show" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['show'];?>
">
                        <input type="hidden" name="menu[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][sys]" class="sys" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['sys'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['cfg']->value['show']=='1') {?>
                        <span class="add-on btn dn active">显示</span>
                        <?php } else { ?>
                        <span class="add-on btn dn">隐藏</span>
                        <?php }?>
                        <span class="add-on btn del">删除</span>
                        <span class="add-on btn add">新增</span>
                      </div>
                    </li>
                    <?php } ?>
                    <?php } else { ?>
                    <li data-idx="0">
                      <div class="input-prepend input-append">
                        <span class="add-on sort">排序</span>
                        <input class="input-small name" type="text" name="menu[0][name]" placeholder="菜单名称" value="图文">
                        <input class="input-middle url" type="text" name="menu[0][url]" placeholder="菜单链接" value="" readonly="" title="此项不需要填写">
                        <input type="hidden" name="menu[0][show]" class="show" value="1">
                        <input type="hidden" name="menu[0][sys]" class="sys" value="1">
                        <span class="add-on btn dn active">显示</span>
                        <span class="add-on btn del">删除</span>
                        <span class="add-on btn add">新增</span>
                      </div>
                    </li>
                    <li class="sys" data-idx="1">
                      <div class="input-prepend input-append">
                        <span class="add-on sort">排序</span>
                        <input class="input-small name" type="text" name="menu[1][name]" placeholder="菜单名称" value="互动">
                        <input class="input-middle url" type="text" name="menu[1][url]" placeholder="菜单链接" value="" readonly="" title="此项不需要填写">
                        <input type="hidden" name="menu[1][show]" class="show" value="1">
                        <input type="hidden" name="menu[1][sys]" class="sys" value="2">
                        <span class="add-on btn dn active">显示</span>
                        <span class="add-on btn del">删除</span>
                        <span class="add-on btn add">新增</span>
                      </div>
                    </li>
                    <li class="sys" data-idx="2">
                      <div class="input-prepend input-append">
                        <span class="add-on sort">排序</span>
                        <input class="input-small name" type="text" name="menu[2][name]" placeholder="菜单名称" value="榜单">
                        <input class="input-middle url" type="text" name="menu[2][url]" placeholder="菜单链接" value="" readonly="" title="此项不需要填写">
                        <input type="hidden" name="menu[2][show]" class="show" value="1">
                        <input type="hidden" name="menu[2][sys]" class="sys" value="3">
                        <span class="add-on btn dn active">显示</span>
                        <span class="add-on btn del">删除</span>
                        <span class="add-on btn add">新增</span>
                      </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="list_box fn-clear">
                <label for="note">直播简介</label>
                <div class="notebox">
                    <?php echo '<script'; ?>
 id="note" name="note" type="text/plain" style="width:600px;height:300px"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
<?php echo '</script'; ?>
>
                </div>
            </div>
            <div class="create-live">
                <button class="btn-create" type="submit"><?php if (!empty($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][151];
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][64];
}?></button>
                <?php if ($_smarty_tpl->tpl_vars['arcrank']->value==1) {?><p>提交后需要重新审核</p><?php }?>
                
            </div>
        </form>
    </div>
    <div class="sel_modal" style="display: none;">
        <div class="modal_box">
            <div class="modal_upload">
                <!--<input type="file" class="file_up">-->
                <div class="btn_sel uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['litpic']->value!='') {?> fn-hide<?php }?>" id="filePicker1" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                <div class="modal_tip">
                    <h5><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][65];?>
</h5>
                    <p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][31][45];?>
</p>
                </div>
            </div>
            <div class="modal_main">
                <ul>
                    <li value="0"><img src="/templates/member/images/live/a_banner01.png"></li>
                    <li value="1"><img src="/templates/member/images/live/a_banner02.png"></li>
                    <li value="2"><img src="/templates/member/images/live/a_banner03.png"></li>
                    <li value="3"><img src="/templates/member/images/live/a_banner04.png"></li>
                    <li value="4"><img src="/templates/member/images/live/a_banner05.png"></li>
                    <li value="5"><img src="/templates/member/images/live/a_banner06.png"></li>
                    <li value="6"><img src="/templates/member/images/live/a_banner07.png"></li>
                    <li value="7"><img src="/templates/member/images/live/a_banner08.png"></li>
                    <li value="8"><img src="/templates/member/images/live/a_banner09.png"></li>
                    <li value="9"><img src="/templates/member/images/live/a_banner10.png"></li>
                    <li value="10"><img src="/templates/member/images/live/a_banner11.png"></li>
                    <li value="11"><img src="/templates/member/images/live/a_banner12.png"></li>
                    <li value="12"><img src="/templates/member/images/live/a_banner13.png"></li>
                    <li value="13"><img src="/templates/member/images/live/a_banner14.png"></li>
                    <li value="14"><img src="/templates/member/images/live/a_banner15.png"></li>
                </ul>
            </div>
            <div class="btn_con fn-hide">
                <button class="btn_confirm"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][0];?>
</button>
                <button class="btn_cancel"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][12];?>
</button>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 id="menuTpl" type="text/html">
  <li data-idx="100">
    <div class="input-prepend input-append">
      <span class="add-on sort">排序</span>
      <input class="input-small name" type="text" name="menu[100][name]" placeholder="菜单名称" value="">
      <input class="input-middle url" type="text" name="menu[100][url]" placeholder="菜单链接" value="">
      <input type="hidden" name="menu[100][show]" class="show" value="1">
      <input type="hidden" name="menu[100][sys]" class="sys" value="0">
      <span class="add-on btn dn active">显示</span>
      <span class="add-on btn del">删除</span>
      <span class="add-on btn add">新增</span>
    </div>
  </li>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery-ui-sortable.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/calendar/WdatePicker.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php }} ?>
