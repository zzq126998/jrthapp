<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 16:14:37
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\refreshTop.html" */ ?>
<?php /*%%SmartyHeaderCode:17142299015d511fed3357c6-11137826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3bc4561b28320a55b3169a4264e2f0f44543de' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\refreshTop.html',
      1 => 1553911858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17142299015d511fed3357c6-11137826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
    'langData' => 0,
    'cfg_basehost' => 0,
    'tomorrowDate' => 0,
    'addWeekDate' => 0,
    'cfg_staticPath' => 0,
    '_bindex' => 0,
    'payment' => 0,
    'module' => 0,
    'act' => 0,
    'paytype' => 0,
    'tourl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d511fed36a3a9_83194561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511fed36a3a9_83194561')) {function content_5d511fed36a3a9_83194561($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
?><?php echo '<script'; ?>
 type="text/javascript">
  var userTotalBalance = <?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['userinfo']->value['money']);?>
;
  var nowTime = <?php echo time();?>
;
  var currentYear = <?php echo smarty_modifier_date_format(time(),"%Y");?>
, currentMonth = <?php echo smarty_modifier_date_format(time(),"%m");?>
, currentDay = <?php echo smarty_modifier_date_format(time(),"%d");?>
;
<?php echo '</script'; ?>
>

<div class="refreshTopMask"></div>

<div class="refreshTopPopup">
  <div class="rtHeader fn-clear">
    <h5></h5>
    <a href="javascript:;" class="rtClose">&times;</a>
  </div>
  <div class="rtBody">

    <!-- 刷新 s -->
    <div class="rtRefresh fn-hide">
      <div class="rtTab">
        <ul class="fn-clear">
          <li data-type="smart"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][28];?>
</li>
          <li data-type="normal" class="curr"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][29];?>
</li>
        </ul>
      </div>
      <div class="rtCon">
        <!-- 智能刷新 -->
        <div class="rtItem fn-hide">
          <ul class="rtSmart"></ul>
        </div>

        <!-- 普通刷新 -->
        <div class="rtItem">
        <div class="normalTips"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][30];?>
<em class="smartUnit">0.0</em>元</span></div>

          <!-- 免费刷新 -->
          <div class="freeRefresh">
            <div class="oper">
              <div class="ny">
                <button type="button" class="refreshNow"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][31];?>
</button>
                <p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][32];?>
</p>
                
              </div>
              <div class="sc fn-hide">
                <span class="icon-success"><s></s></span>
                <div><strong><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][33];?>
</strong></div>
                <p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][34];?>
</p>
                <button type="button" class="refreshConfirm"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][1];?>
</button>
              </div>
            </div>
          </div>

          <!-- 普通收费刷新 -->
          <div class="normalRefresh fn-hide">
            <p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][35];?>
</p>
          </div>
        </div>

      </div>
    </div>
    <!-- 刷新 e -->

    <!-- 置顶 s -->
    <div class="rtTopping fn-hide">
      <dl class="fn-clear">
        <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][36];?>
</dt>
        <dd class="topTit"></dd>
      </dl>
      <dl class="fn-clear">
        <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][37];?>
</dt>
        <dd class="topType fn-clear">
          <label class="checked"><em><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/templates/member/images/refreshTop_checked.png" /></em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][38];?>
</label>
          <label><em><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/templates/member/images/refreshTop_checked.png" /></em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][39];?>
</label>
        </dd>
      </dl>
      <div class="topNormal">
        <dl class="fn-clear">
          <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][40];?>
</dt>
          <dd>
            <ul class="topDays fn-clear"></ul>
          </dd>
        </dl>
      </div>
      <div class="topPlan fn-hide">
        <dl class="fn-clear">
          <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][41];?>
</dt>
          <dd>
            <div class="rtDate" id="topPlanBegan">
              <input id="topPlanBeganObj" readonly value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tomorrowDate']->value,'%Y-%m-%d');?>
" />
              <em></em>
            </div>
            <span class="rtSplit"></span>
            <div class="rtDate" id="topPlanEnd">
              <input id="topPlanEndObj" readonly value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['addWeekDate']->value,'%Y-%m-%d');?>
">
              <em></em>
            </div>
          </dd>
        </dl>
        <dl class="fn-clear">
          <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][42];?>
</dt>
          <dd>
            <table class="rtPlanList">
              <thead>
                <tr>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][384];?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][4];?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][5];?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][6];?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][7];?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][8];?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][9];?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][10];?>
</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][11];?>
</td>
                  <td class="curr" data-week="1" data-type="all"><em></em></td>
                  <td class="curr" data-week="2" data-type="all"><em></em></td>
                  <td class="curr" data-week="3" data-type="all"><em></em></td>
                  <td class="curr" data-week="4" data-type="all"><em></em></td>
                  <td class="curr" data-week="5" data-type="all"><em></em></td>
                  <td class="curr" data-week="6" data-type="all"><em></em></td>
                  <td class="curr" data-week="0" data-type="all"><em></em></td>
                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][14][12];?>
</td>
                  <td data-week="1" data-type="day"><em></em></td>
                  <td data-week="2" data-type="day"><em></em></td>
                  <td data-week="3" data-type="day"><em></em></td>
                  <td data-week="4" data-type="day"><em></em></td>
                  <td data-week="5" data-type="day"><em></em></td>
                  <td data-week="6" data-type="day"><em></em></td>
                  <td data-week="0" data-type="day"><em></em></td>
                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][43];?>
</td>
                  <td><em></em></td>
                  <td><em></em></td>
                  <td><em></em></td>
                  <td><em></em></td>
                  <td><em></em></td>
                  <td><em></em></td>
                  <td><em></em></td>
                </tr>
              </tbody>
            </table>
          </dd>
        </dl>
      </div>
    </div>
    <!-- 置顶 e -->

    <!-- 支付 s -->
    <div class="rtPayObj fn-hide">
      <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['money']>0) {?>
      <dl class="fabu_dl fn-clear yue">
        <dt class="yue-btn active"><i class="radio"><s></s></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][386];?>
 <em class="gray">(<?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['userinfo']->value['money'];?>
)</em></dt>
        <dd>-<?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <em class="reduce-yue">0.00</em></dd>
      </dl>
      <?php }?>
      <dl class="fabu_dl fn-clear">
        <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][44];?>
</dt>
        <dd>&nbsp;<?php echo echoCurrency(array('type'=>'symbol'),$_smarty_tpl);?>
 <em class="pay-total">0.00</em></dd>
      </dl>

      <div class="paytypeObj">
        <ul class="payTab fn-clear">
          <li class="curr"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][29][126];?>
</li>
          <li class=""><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][29][128];?>
</li>
        </ul>
        <div class="qrpay" style="display: block;">
          <dl class="fn-clear">
            <dt><img src="" class="qrimg"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_top.png" class="pay_top"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_bottom.png" class="pay_bottom"></dt>
            <dd><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_alipay.png"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
images/pay_wx.png"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][29][127];?>
</dd>
          </dl>
        </div>

        <ul class="payway fn-hide fn-clear">
          <?php $_smarty_tpl->tpl_vars['paytype'] = new Smarty_variable('', null, 0);?>
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"payment",'return'=>"payment")); $_block_repeat=true; echo siteConfig(array('action'=>"payment",'return'=>"payment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <?php if ($_smarty_tpl->tpl_vars['_bindex']->value['payment']==1) {?>
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
<?php $_tmp25=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['paytype'] = new Smarty_variable($_tmp25, null, 0);?>
          <?php }?>
          <li<?php if ($_smarty_tpl->tpl_vars['_bindex']->value['payment']==1) {?> class="active"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
"><a href="javascript:;" class="<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/templates/member/images/<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_code'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['pay_name'];?>
</a></li>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"payment",'return'=>"payment"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
      </div>
      <a href="javascript:;" class="paySubmit" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][327];?>
</a>
    </div>
    <!-- 支付 e -->

    <!-- 经纪人提交刷新 -->
    <p class="zjuser_info"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][45];?>
</p>
    <a href="javascript:;" data-url="<?php echo getUrlPath(array('service'=>'member','type'=>'user','template'=>'house_meallist'),$_smarty_tpl);?>
" class="paySubmit zjuser_tj" id="zjuser_refresh" target="_blank"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][70];?>
</a>

  </div>
</div>

<div class="topCalendar"></div>
<div class="topCalendarBg"></div>

<form action="/include/ajax.php" method="post" id="refreshTopForm">
	<input type="hidden" name="service" id="service" value="siteConfig">
	<input type="hidden" name="action" id="action" value="refreshTop">
	<input type="hidden" name="type" id="type" value="">
	<input type="hidden" name="module" id="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
	<input type="hidden" name="act" id="act" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
">
	<input type="hidden" name="paytype" id="paytype" value="<?php echo $_smarty_tpl->tpl_vars['paytype']->value;?>
">
	<input type="hidden" name="aid" id="aid" value="" />
	<input type="hidden" name="amount" id="amount" value="" />
	<input type="hidden" name="useBalance" id="useBalance" value="" />
	<input type="hidden" name="config" id="config" value="" />
	<input type="hidden" name="tourl" id="tourl" value="<?php echo $_smarty_tpl->tpl_vars['tourl']->value;?>
" />
</form>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/calendar/WdatePicker.js"><?php echo '</script'; ?>
>
<?php }} ?>
