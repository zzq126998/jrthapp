<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:22:47
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\register.html" */ ?>
<?php /*%%SmartyHeaderCode:5257333525d5105b70e9473-60257104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6016e5189ecbe5ae58b62cdefad659734bd6f89' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\register.html',
      1 => 1553911860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5257333525d5105b70e9473-60257104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'langData' => 0,
    'cfg_basehost' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'member_userDomain' => 0,
    'cfg_geetest' => 0,
    'regable' => 0,
    'regtypeArr' => 0,
    'cfg_webname' => 0,
    'cfg_weblogo' => 0,
    'cfg_shortname' => 0,
    'cfg_hotline' => 0,
    'fieldsArr' => 0,
    'cfg_seccodetype' => 0,
    'cfg_secureAccess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5105b71a4cd3_28541814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5105b71a4cd3_28541814')) {function content_5d5105b71a4cd3_28541814($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][8];?>
</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/base.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/pay.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/pay_list.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/register_v1.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/jquery-1.9.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', userDomain = '<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
';
  var criticalPoint = 1240, criticalClass = "w1200";
  $("html").addClass($(window).width() > criticalPoint ? criticalClass : "");
    var geetest = <?php echo $_smarty_tpl->tpl_vars['cfg_geetest']->value;?>
,type =<?php echo $_smarty_tpl->tpl_vars['regable']->value;?>
;
<?php echo '</script'; ?>
>
<!-- 对表单样式进行更改 -->
<style>
<?php if (count($_smarty_tpl->tpl_vars['regtypeArr']->value)==3) {?>
.register .tab-nav li{width:33%;}
.register .tab-head .mark{width: 323px;}
<?php } elseif (count($_smarty_tpl->tpl_vars['regtypeArr']->value)==2) {?>
.register .tab-nav li{width:50%;}
.register .tab-head .mark{width: 490px;}
<?php } else { ?>
.register .tab-nav li{width:100%;}
.register .tab-head .mark{width: 980px;}
<?php }?>
</style>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../siteConfig/top1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- head s -->
<div class="wrap header fn-clear">
  <div class="logo">
    <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
">
			<div class="shortname"><h2><?php echo $_smarty_tpl->tpl_vars['cfg_shortname']->value;?>
</h2><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][26];?>
</p></div>
		</a>
  </div>
  <dl class="kefu fn-clear">
    <dt><img src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
images/kf_tel.png" alt=""></dt>
    <dd>
      <p class="p1"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][275];?>
</p>
      <p class="p2"><?php echo $_smarty_tpl->tpl_vars['cfg_hotline']->value;?>
</p>
    </dd>
  </dl>
</div>

<div class="split-line"></div>

<!-- head e -->
<div class="wrap">
  <div class="registerwrap fn-clear">
    <div class="register">
      <div class="tab-head">
        <ul class="tab-nav fn-clear">
          <?php if (in_array('1',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
          <li data-type="1" class="icon1 active"><a href="javascript:;"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][9];?>
</span></a></li>
          <?php }?>
          <?php if (in_array('2',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
          <li data-type="2" class="icon2"><a href="javascript:;"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][2];?>
</span></a></li>
          <?php }?>
          <?php if (in_array('3',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
          <li data-type="3" class="icon2"><a href="javascript:;"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][3];?>
</span></a></li>
          <?php }?>
        </ul>
        <div class="mark"></div>
      </div>
      <div class="tab-body">
        <div class="tab-pane">
          <form action="" class="registform">
            <input type="hidden" name="areaCode" id="areaCode" value="86">
            <?php if (in_array('1',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
            <div class="ftype ftype01" <?php if ($_smarty_tpl->tpl_vars['regable']->value==1) {?>style="display: block;"<?php }?>>
				<div class="form-row">
                <dl class="fn-clear">
                    <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][20];?>
</dt>
                  <dd>
                    <div class="fn-clear">
                      <div class="inpbox fn-left">
                        <input type="text" name="username" class="username1" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][48];?>
">
                      </div>
                      <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][49];?>
</span></div>
                    </div>
                    <p class="tips">*<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][10];?>
</p>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][9];?>
</dt>
                  <dd class="fn-clear">
                    <div class="inpbox fn-left">
                      <input type="password" class="password password1" name="" value="" placeholder="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][6],'1','6');?>
"><i class="psw-show"></i>
                      <p class="tips">*<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][82];?>
</p>
                    </div>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][502];?>
</span></div>
                  </dd>
                </dl>
              </div>
              <?php if (in_array('1',$_smarty_tpl->tpl_vars['fieldsArr']->value)) {?>
              <div class="form-row">
                <dl class="fn-clear">
                    <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][31];?>
</dt>
                    <dd>
                    <div class="fn-clear">
                    	<div class="inpbox fn-left"><input type="text" name="nickname" class="nickname" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][50];?>
"></div>
                    	<div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][32][50];?>
</span></div>
                    </div>
                    </dd>
                </dl>
              </div>
              <?php }?>
              <?php if (in_array('2',$_smarty_tpl->tpl_vars['fieldsArr']->value)) {?>
              <div class="form-row">
                <dl class="fn-clear">
                    <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][0];?>
</dt>
                    <dd>
                    <div class="fn-clear">
                    	<div class="inpbox fn-left"><input type="text" name="email" class="email" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][31];?>
"></div>
                    	<div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][271];?>
</span></div>
                    </div>
                    </dd>
                </dl>
              </div>
              <?php }?>
              <?php if (in_array('3',$_smarty_tpl->tpl_vars['fieldsArr']->value)) {?>
              <div class="form-row">
                <dl class="fn-clear">
                    <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][22][40];?>
</dt>
                    <dd>
                    <div class="fn-clear">
                    	<div class="inpbox fn-left"><input maxlength="11" type="text" name="phone" class="phone" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][27];?>
"></div>
                    	<div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][21][185];?>
</span></div>
                    </div>
                    </dd>
                </dl>
              </div>
              <?php }?>
			  <?php if (!empty($_smarty_tpl->tpl_vars['cfg_seccodetype']->value)) {?>
              <div class="form-row">
                <dl class="fn-clear">
                    <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][0];?>
</dt>
                    <dd>
                    <div class="fn-clear">
                    	<div class="inpbox fn-left"><input type="text" name="vericode" class="vericode" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][540];?>
"></div><img src="/include/vdimgck.php" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][24][66];?>
" id="verifycode" />
                    	<div style="float:right;" class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][540];?>
</span></div>
                    </div>
                    </dd>
                </dl>
              </div>
              <?php }?>
            </div>
            <?php }?>
            <?php if (in_array('2',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
            <div class="ftype ftype02" <?php if ($_smarty_tpl->tpl_vars['regable']->value==3) {?>style="display: block;"<?php }?>>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][285];?>
</dt>
                  <dd class="fn-clear">
                    <div class="dropdown-menu fn-left"><a href="javascript:;" class="droptab" id="country-1"><label><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][28];?>
</label><i class="droparrow"></i></a></div>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][6];?>
</dt>
                  <dd class="fn-clear">
                    <div class="dropdown-menu fn-left"><a href="javascript:;" class="droptab" id="J-countryMobileCode"><label>86</label><i class="droparrow"></i></a></div>
                    <div class="inpbox fn-left">
                      <input type="text" name="" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][27];?>
" class="username3">
                      <p class="tips">*<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][80];?>
</p>
                    </div>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][465];?>
</span></div>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][0];?>
</dt>
                  <dd class="fn-clear">
                    <div class="inpbox fn-left">
                      <input type="text" name="" class="yzm3" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][32];?>
">
                    </div>
                    <a href="javascript:;" class="sendvdimgck sendvdimgck3 fn-left"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][1];?>
</a>
                    <a href="javascript:;" class="djs3"></a>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][466];?>
</span></div>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][9];?>
</dt>
                  <dd class="fn-clear">
                    <div class="inpbox fn-left">
                      <input type="password" class="password password3" name="" value="" placeholder="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][6],'1','6');?>
"><i class="psw-show"></i>
                      <p class="tips">*<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][82];?>
</p>
                    </div>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][502];?>
</span></div>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][10];?>
</dt>
                  <dd class="fn-clear">
                    <div class="inpbox fn-left">
                      <input type="password" class="repassword3" name="" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][24];?>
">
                    </div>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][493];?>
</div>
                  </dd>
                </dl>
              </div>
            </div>
            <?php }?>
            <?php if (in_array('3',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
            <div class="ftype ftype03" <?php if ($_smarty_tpl->tpl_vars['regable']->value==2) {?>style="display: block;"<?php }?>>
              <div class="form-row">
                <dl class="fn-clear">
                    <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][11];?>
</dt>
                  <dd>
                    <div class="fn-clear">
                      <div class="inpbox fn-left">
                        <input type="text" name="" class="username2" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][31];?>
">
                      </div>
                      <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][31];?>
</span></div>
                    </div>
                    <p class="tips">*<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][81];?>
</p>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][0];?>
</dt>
                  <dd class="fn-clear">
                    <div class="inpbox fn-left">
                      <input type="text" name="" class="yzm2" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][503];?>
">
                    </div>
                    <a href="javascript:;" class="sendvdimgck sendvdimgck2 fn-left"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][4][1];?>
</a>
                    <a href="javascript:;" class="djs2"></a>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][466];?>
</span></div>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][9];?>
</dt>
                  <dd class="fn-clear">
                    <div class="inpbox fn-left">
                      <input type="password" class="password2" name="" value="" placeholder="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][6],'1','6');?>
"><i class="psw-show"></i>
                      <p class="tips">*<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][82];?>
</p>
                    </div>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][502];?>
</span></div>
                  </dd>
                </dl>
              </div>
              <div class="form-row">
                <dl class="fn-clear">
                  <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][10];?>
</dt>
                  <dd class="fn-clear">
                    <div class="inpbox fn-left">
                      <input type="password" class="repassword2" name="" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][24];?>
">
                    </div>
                    <div class="error fn-left"><em></em><i class="error-icon"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][493];?>
</div>
                  </dd>
                </dl>
              </div>
            </div>
            <?php }?>
            <div class="form-row">
              <dl class="fn-clear">
                <dt></dt>
                <dd>
                  <div class="agreement">
                    <label class="checked"><i class="regicon iconcheck"></i><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][2];?>
</label>
                    <a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'protocol','title'=>'会员注册协议'),$_smarty_tpl);?>
" target="_blank">《<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][12][0];?>
》</a>
                  </div>
                  <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][4];?>
" class="submit">
                </dd>
              </dl>
            </div>
            <div id="popup-captcha"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="ui-select" data-widget-cid="widget-1" style="z-index: 99; display: none; position: absolute;">
  <ul class="ui-select-content" data-role="content">
    <li data-role="item" class="ui-select-item " data-value="CN" data-defaultselected="false" data-selected="false" data-disabled="false">China（中国大陆）
      <span class="fn-right">86</span></li>
    <li data-role="item" class="ui-select-item " data-value="HK" data-defaultselected="false" data-selected="false" data-disabled="false">Hong Kong（香港）
      <span class="fn-right">852</span></li>
    <li data-role="item" class="ui-select-item " data-value="MO" data-defaultselected="false" data-selected="false" data-disabled="false">Macau（澳门）
      <span class="fn-right">853</span></li>
    <li data-role="item" class="ui-select-item  ui-select-selected" data-value="TW" data-defaultselected="true" data-selected="true" data-disabled="false">Taiwan（台湾）
      <span class="fn-right">886</span></li>
    <li data-role="item" class="ui-select-item " data-value="AR" data-defaultselected="false" data-selected="false" data-disabled="false">Argentina（阿根廷）
      <span class="fn-right">54</span></li>
    <li data-role="item" class="ui-select-item " data-value="AU" data-defaultselected="false" data-selected="false" data-disabled="false">Australia（澳大利亚）
      <span class="fn-right">61</span></li>
    <li data-role="item" class="ui-select-item " data-value="AT" data-defaultselected="false" data-selected="false" data-disabled="false">Austria（奥地利）
      <span class="fn-right">43</span></li>
    <li data-role="item" class="ui-select-item " data-value="BS" data-defaultselected="false" data-selected="false" data-disabled="false">Bahamas（巴哈马）
      <span class="fn-right">1242</span></li>
    <li data-role="item" class="ui-select-item " data-value="BY" data-defaultselected="false" data-selected="false" data-disabled="false">Belarus（白俄罗斯）
      <span class="fn-right">375</span></li>
    <li data-role="item" class="ui-select-item " data-value="BE" data-defaultselected="false" data-selected="false" data-disabled="false">Belgium（比利时）
      <span class="fn-right">32</span></li>
    <li data-role="item" class="ui-select-item " data-value="BZ" data-defaultselected="false" data-selected="false" data-disabled="false">Belize（伯利兹）
      <span class="fn-right">501</span></li>
    <li data-role="item" class="ui-select-item " data-value="BR" data-defaultselected="false" data-selected="false" data-disabled="false">Brazil（巴西）
      <span class="fn-right">55</span></li>
    <li data-role="item" class="ui-select-item " data-value="BG" data-defaultselected="false" data-selected="false" data-disabled="false">Bulgaria（保加利亚）
      <span class="fn-right">359</span></li>
    <li data-role="item" class="ui-select-item " data-value="KH" data-defaultselected="false" data-selected="false" data-disabled="false">Cambodia（柬埔寨）
      <span class="fn-right">855</span></li>
    <li data-role="item" class="ui-select-item " data-value="CA" data-defaultselected="false" data-selected="false" data-disabled="false">Canada（加拿大）
      <span class="fn-right">1</span></li>
    <li data-role="item" class="ui-select-item " data-value="CL" data-defaultselected="false" data-selected="false" data-disabled="false">Chile（智利）
      <span class="fn-right">56</span></li>
    <li data-role="item" class="ui-select-item " data-value="CO" data-defaultselected="false" data-selected="false" data-disabled="false">Colombia（哥伦比亚）
      <span class="fn-right">57</span></li>
    <li data-role="item" class="ui-select-item " data-value="DK" data-defaultselected="false" data-selected="false" data-disabled="false">Denmark（丹麦）
      <span class="fn-right">45</span></li>
    <li data-role="item" class="ui-select-item " data-value="EG" data-defaultselected="false" data-selected="false" data-disabled="false">Egypt（埃及）
      <span class="fn-right">20</span></li>
    <li data-role="item" class="ui-select-item " data-value="EE" data-defaultselected="false" data-selected="false" data-disabled="false">Estonia（爱沙尼亚）
      <span class="fn-right">372</span></li>
    <li data-role="item" class="ui-select-item " data-value="FI" data-defaultselected="false" data-selected="false" data-disabled="false">Finland（芬兰）
      <span class="fn-right">358</span></li>
    <li data-role="item" class="ui-select-item " data-value="FR" data-defaultselected="false" data-selected="false" data-disabled="false">France（法国）
      <span class="fn-right">33</span></li>
    <li data-role="item" class="ui-select-item " data-value="DE" data-defaultselected="false" data-selected="false" data-disabled="false">Germany（德国）
      <span class="fn-right">49</span></li>
    <li data-role="item" class="ui-select-item " data-value="GR" data-defaultselected="false" data-selected="false" data-disabled="false">Greece（希腊）
      <span class="fn-right">30</span></li>
    <li data-role="item" class="ui-select-item " data-value="HU" data-defaultselected="false" data-selected="false" data-disabled="false">Hungary（匈牙利）
      <span class="fn-right">36</span></li>
    <li data-role="item" class="ui-select-item " data-value="IN" data-defaultselected="false" data-selected="false" data-disabled="false">India（印度）
      <span class="fn-right">91</span></li>
    <li data-role="item" class="ui-select-item " data-value="ID" data-defaultselected="false" data-selected="false" data-disabled="false">Indonesia（印度尼西亚）
      <span class="fn-right">62</span></li>
    <li data-role="item" class="ui-select-item " data-value="IE" data-defaultselected="false" data-selected="false" data-disabled="false">Ireland（爱尔兰）
      <span class="fn-right">353</span></li>
    <li data-role="item" class="ui-select-item " data-value="IL" data-defaultselected="false" data-selected="false" data-disabled="false">Israel（以色列）
      <span class="fn-right">972</span></li>
    <li data-role="item" class="ui-select-item " data-value="IT" data-defaultselected="false" data-selected="false" data-disabled="false">Italy（意大利）
      <span class="fn-right">39</span></li>
    <li data-role="item" class="ui-select-item " data-value="JP" data-defaultselected="false" data-selected="false" data-disabled="false">Japan（日本）
      <span class="fn-right">81</span></li>
    <li data-role="item" class="ui-select-item " data-value="JO" data-defaultselected="false" data-selected="false" data-disabled="false">Jordan（约旦）
      <span class="fn-right">962</span></li>
    <li data-role="item" class="ui-select-item " data-value="KG" data-defaultselected="false" data-selected="false" data-disabled="false">Kyrgyzstan（吉尔吉斯斯坦）
      <span class="fn-right">996</span></li>
    <li data-role="item" class="ui-select-item " data-value="LT" data-defaultselected="false" data-selected="false" data-disabled="false">Lithuania（立陶宛）
      <span class="fn-right">370</span></li>
    <li data-role="item" class="ui-select-item " data-value="LU" data-defaultselected="false" data-selected="false" data-disabled="false">Luxembourg（卢森堡）
      <span class="fn-right">352</span></li>
    <li data-role="item" class="ui-select-item " data-value="MY" data-defaultselected="false" data-selected="false" data-disabled="false">Malaysia（马来西亚）
      <span class="fn-right">60</span></li>
    <li data-role="item" class="ui-select-item " data-value="MV" data-defaultselected="false" data-selected="false" data-disabled="false">Maldives（马尔代夫）
      <span class="fn-right">960</span></li>
    <li data-role="item" class="ui-select-item " data-value="MX" data-defaultselected="false" data-selected="false" data-disabled="false">Mexico（墨西哥）
      <span class="fn-right">52</span></li>
    <li data-role="item" class="ui-select-item " data-value="MN" data-defaultselected="false" data-selected="false" data-disabled="false">Mongolia（蒙古）
      <span class="fn-right">976</span></li>
    <li data-role="item" class="ui-select-item " data-value="MA" data-defaultselected="false" data-selected="false" data-disabled="false">Morocco（摩洛哥）
      <span class="fn-right">212</span></li>
    <li data-role="item" class="ui-select-item " data-value="NL" data-defaultselected="false" data-selected="false" data-disabled="false">Netherlands（荷兰）
      <span class="fn-right">31</span></li>
    <li data-role="item" class="ui-select-item " data-value="NZ" data-defaultselected="false" data-selected="false" data-disabled="false">New Zealand（新西兰）
      <span class="fn-right">64</span></li>
    <li data-role="item" class="ui-select-item " data-value="NG" data-defaultselected="false" data-selected="false" data-disabled="false">Nigeria（尼日利亚）
      <span class="fn-right">234</span></li>
    <li data-role="item" class="ui-select-item " data-value="NO" data-defaultselected="false" data-selected="false" data-disabled="false">Norway（挪威）
      <span class="fn-right">47</span></li>
    <li data-role="item" class="ui-select-item " data-value="PA" data-defaultselected="false" data-selected="false" data-disabled="false">Panama（巴拿马）
      <span class="fn-right">507</span></li>
    <li data-role="item" class="ui-select-item " data-value="PE" data-defaultselected="false" data-selected="false" data-disabled="false">Peru（秘鲁）
      <span class="fn-right">51</span></li>
    <li data-role="item" class="ui-select-item " data-value="PH" data-defaultselected="false" data-selected="false" data-disabled="false">Philippines（菲律宾）
      <span class="fn-right">63</span></li>
    <li data-role="item" class="ui-select-item " data-value="PL" data-defaultselected="false" data-selected="false" data-disabled="false">Poland（波兰）
      <span class="fn-right">48</span></li>
    <li data-role="item" class="ui-select-item " data-value="PT" data-defaultselected="false" data-selected="false" data-disabled="false">Portugal（葡萄牙）
      <span class="fn-right">351</span></li>
    <li data-role="item" class="ui-select-item " data-value="QA" data-defaultselected="false" data-selected="false" data-disabled="false">Qatar（卡塔尔）
      <span class="fn-right">974</span></li>
    <li data-role="item" class="ui-select-item " data-value="RO" data-defaultselected="false" data-selected="false" data-disabled="false">Romania（罗马尼亚）
      <span class="fn-right">40</span></li>
    <li data-role="item" class="ui-select-item " data-value="RU" data-defaultselected="false" data-selected="false" data-disabled="false">Russia（俄罗斯）
      <span class="fn-right">7</span></li>
    <li data-role="item" class="ui-select-item " data-value="SA" data-defaultselected="false" data-selected="false" data-disabled="false">Saudi Arabia（沙特阿拉伯）
      <span class="fn-right">966</span></li>
    <li data-role="item" class="ui-select-item " data-value="RS" data-defaultselected="false" data-selected="false" data-disabled="false">Serbia（塞尔维亚）
      <span class="fn-right">381</span></li>
    <li data-role="item" class="ui-select-item " data-value="SC" data-defaultselected="false" data-selected="false" data-disabled="false">Seychelles（塞舌尔）
      <span class="fn-right">248</span></li>
    <li data-role="item" class="ui-select-item " data-value="SG" data-defaultselected="false" data-selected="false" data-disabled="false">Singapore（新加坡）
      <span class="fn-right">65</span></li>
    <li data-role="item" class="ui-select-item " data-value="ZA" data-defaultselected="false" data-selected="false" data-disabled="false">South Africa（南非）
      <span class="fn-right">27</span></li>
    <li data-role="item" class="ui-select-item " data-value="KR" data-defaultselected="false" data-selected="false" data-disabled="false">South Korea（韩国）
      <span class="fn-right">82</span></li>
    <li data-role="item" class="ui-select-item " data-value="ES" data-defaultselected="false" data-selected="false" data-disabled="false">Spain（西班牙）
      <span class="fn-right">34</span></li>
    <li data-role="item" class="ui-select-item " data-value="LK" data-defaultselected="false" data-selected="false" data-disabled="false">Sri Lanka（斯里兰卡）
      <span class="fn-right">94</span></li>
    <li data-role="item" class="ui-select-item " data-value="SE" data-defaultselected="false" data-selected="false" data-disabled="false">Sweden（瑞典）
      <span class="fn-right">46</span></li>
    <li data-role="item" class="ui-select-item " data-value="CH" data-defaultselected="false" data-selected="false" data-disabled="false">Switzerland（瑞士）
      <span class="fn-right">41</span></li>
    <li data-role="item" class="ui-select-item " data-value="TH" data-defaultselected="false" data-selected="false" data-disabled="false">Thailand（泰国）
      <span class="fn-right">66</span></li>
    <li data-role="item" class="ui-select-item " data-value="TN" data-defaultselected="false" data-selected="false" data-disabled="false">Tunisia（突尼斯）
      <span class="fn-right">216</span></li>
    <li data-role="item" class="ui-select-item " data-value="TR" data-defaultselected="false" data-selected="false" data-disabled="false">Turkey（土耳其）
      <span class="fn-right">90</span></li>
    <li data-role="item" class="ui-select-item " data-value="UA" data-defaultselected="false" data-selected="false" data-disabled="false">Ukraine（乌克兰）
      <span class="fn-right">380</span></li>
    <li data-role="item" class="ui-select-item " data-value="AE" data-defaultselected="false" data-selected="false" data-disabled="false">United Arab Emirates（阿联酋）
      <span class="fn-right">971</span></li>
    <li data-role="item" class="ui-select-item " data-value="GB" data-defaultselected="false" data-selected="false" data-disabled="false">United Kingdom（英国）
      <span class="fn-right">44</span></li>
    <li data-role="item" class="ui-select-item " data-value="US" data-defaultselected="false" data-selected="false" data-disabled="false">United States（美国）
      <span class="fn-right">1</span></li>
    <li data-role="item" class="ui-select-item " data-value="VE" data-defaultselected="false" data-selected="false" data-disabled="false">Venezuela（委内瑞拉）
      <span class="fn-right">58</span></li>
    <li data-role="item" class="ui-select-item " data-value="VN" data-defaultselected="false" data-selected="false" data-disabled="false">Vietnam（越南）
      <span class="fn-right">84</span></li>
    <li data-role="item" class="ui-select-item " data-value="VG" data-defaultselected="false" data-selected="false" data-disabled="false">Virgin Islands, British（英属维尔京群岛）
      <span class="fn-right">1284</span></li>
  </ul>
</div>
<div class="ui-country" data-widget-cid="widget-1" style="z-index: 99; position: absolute;display: none;">
  <ul class="ui-country-tops" data-role="tops">
    <li data-role="item" class="ui-country-top" data-value="CN" data-defaultselected="false" data-selected="false"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][276];?>
</li>
    <li data-role="item" class="ui-country-top" data-value="HK" data-defaultselected="false" data-selected="false"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][277];?>
</li>
    <li data-role="item" class="ui-country-top" data-value="MO" data-defaultselected="false" data-selected="false"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][278];?>
</li>
    <li data-role="item" class="ui-country-top ui-country-selected" data-value="TW" data-defaultselected="false" data-selected="true"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][279];?>
</li></ul>
  <ul class="ui-country-group">
    <li data-role="tab" class="ui-country-tabpan tab-active" data-value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][280];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][280];?>
</li>
    <li data-role="tab" class="ui-country-tabpan" data-value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][281];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][281];?>
</li>
    <li data-role="tab" class="ui-country-tabpan" data-value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][282];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][282];?>
</li>
    <li data-role="tab" class="ui-country-tabpan" data-value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][283];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][283];?>
</li>
    <li data-role="tab" class="ui-country-tabpan" data-value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][284];?>
"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][284];?>
</li></ul>
  <ul class="ui-country-content" data-role="content">
    <li data-role="item" class="ui-country-item" data-value="KH" data-group="亚洲" data-defaultselected="false" data-selected="false">Cambodia（柬埔寨）</li>
    <li data-role="item" class="ui-country-item" data-value="IN" data-group="亚洲" data-defaultselected="false" data-selected="false">India（印度）</li>
    <li data-role="item" class="ui-country-item" data-value="ID" data-group="亚洲" data-defaultselected="false" data-selected="false">Indonesia（印度尼西亚）</li>
    <li data-role="item" class="ui-country-item" data-value="IL" data-group="亚洲" data-defaultselected="false" data-selected="false">Israel（以色列）</li>
    <li data-role="item" class="ui-country-item" data-value="JP" data-group="亚洲" data-defaultselected="false" data-selected="false">Japan（日本）</li>
    <li data-role="item" class="ui-country-item" data-value="JO" data-group="亚洲" data-defaultselected="false" data-selected="false">Jordan（约旦）</li>
    <li data-role="item" class="ui-country-item" data-value="KG" data-group="亚洲" data-defaultselected="false" data-selected="false">Kyrgyzstan（吉尔吉斯斯坦）</li>
    <li data-role="item" class="ui-country-item" data-value="MY" data-group="亚洲" data-defaultselected="false" data-selected="false">Malaysia（马来西亚）</li>
    <li data-role="item" class="ui-country-item" data-value="MV" data-group="亚洲" data-defaultselected="false" data-selected="false">Maldives（马尔代夫）</li>
    <li data-role="item" class="ui-country-item" data-value="MN" data-group="亚洲" data-defaultselected="false" data-selected="false">Mongolia（蒙古）</li>
    <li data-role="item" class="ui-country-item" data-value="PH" data-group="亚洲" data-defaultselected="false" data-selected="false">Philippines（菲律宾）</li>
    <li data-role="item" class="ui-country-item" data-value="QA" data-group="亚洲" data-defaultselected="false" data-selected="false">Qatar（卡塔尔）</li>
    <li data-role="item" class="ui-country-item" data-value="SA" data-group="亚洲" data-defaultselected="false" data-selected="false">Saudi Arabia（沙特阿拉伯）</li>
    <li data-role="item" class="ui-country-item" data-value="SG" data-group="亚洲" data-defaultselected="false" data-selected="false">Singapore（新加坡）</li>
    <li data-role="item" class="ui-country-item" data-value="KR" data-group="亚洲" data-defaultselected="false" data-selected="false">South Korea（韩国）</li>
    <li data-role="item" class="ui-country-item" data-value="LK" data-group="亚洲" data-defaultselected="false" data-selected="false">Sri Lanka（斯里兰卡）</li>
    <li data-role="item" class="ui-country-item" data-value="TR" data-group="亚洲" data-defaultselected="false" data-selected="false">Turkey（土耳其）</li>
    <li data-role="item" class="ui-country-item" data-value="TH" data-group="亚洲" data-defaultselected="false" data-selected="false">Thailand（泰国）</li>
    <li data-role="item" class="ui-country-item" data-value="AE" data-group="亚洲" data-defaultselected="false" data-selected="false">United Arab Emirates（阿联酋）</li>
    <li data-role="item" class="ui-country-item" data-value="VN" data-group="亚洲" data-defaultselected="false" data-selected="false">Vietnam（越南）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="AT" data-group="欧洲" data-defaultselected="false" data-selected="false">Austria（奥地利）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="BY" data-group="欧洲" data-defaultselected="false" data-selected="false">Belarus（白俄罗斯）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="BE" data-group="欧洲" data-defaultselected="false" data-selected="false">Belgium（比利时）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="BG" data-group="欧洲" data-defaultselected="false" data-selected="false">Bulgaria（保加利亚）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="DK" data-group="欧洲" data-defaultselected="false" data-selected="false">Denmark（丹麦）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="EE" data-group="欧洲" data-defaultselected="false" data-selected="false">Estonia（爱沙尼亚）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="FI" data-group="欧洲" data-defaultselected="false" data-selected="false">Finland（芬兰）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="FR" data-group="欧洲" data-defaultselected="false" data-selected="false">France（法国）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="DE" data-group="欧洲" data-defaultselected="false" data-selected="false">Germany（德国）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="GR" data-group="欧洲" data-defaultselected="false" data-selected="false">Greece（希腊）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="HU" data-group="欧洲" data-defaultselected="false" data-selected="false">Hungary（匈牙利）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="IE" data-group="欧洲" data-defaultselected="false" data-selected="false">Ireland（爱尔兰）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="IT" data-group="欧洲" data-defaultselected="false" data-selected="false">Italy（意大利）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="LT" data-group="欧洲" data-defaultselected="false" data-selected="false">Lithuania（立陶宛）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="LU" data-group="欧洲" data-defaultselected="false" data-selected="false">Luxembourg（卢森堡）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="NL" data-group="欧洲" data-defaultselected="false" data-selected="false">Netherlands（荷兰）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="NO" data-group="欧洲" data-defaultselected="false" data-selected="false">Norway（挪威）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="PL" data-group="欧洲" data-defaultselected="false" data-selected="false">Poland（波兰）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="PT" data-group="欧洲" data-defaultselected="false" data-selected="false">Portugal（葡萄牙）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="RO" data-group="欧洲" data-defaultselected="false" data-selected="false">Romania（罗马尼亚）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="RU" data-group="欧洲" data-defaultselected="false" data-selected="false">Russia（俄罗斯）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="RS" data-group="欧洲" data-defaultselected="false" data-selected="false">Serbia（塞尔维亚）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="ES" data-group="欧洲" data-defaultselected="false" data-selected="false">Spain（西班牙）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="SE" data-group="欧洲" data-defaultselected="false" data-selected="false">Sweden（瑞典）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="CH" data-group="欧洲" data-defaultselected="false" data-selected="false">Switzerland（瑞士）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="UA" data-group="欧洲" data-defaultselected="false" data-selected="false">Ukraine（乌克兰）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="GB" data-group="欧洲" data-defaultselected="false" data-selected="false">United Kingdom（英国）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="AR" data-group="美洲" data-defaultselected="false" data-selected="false">Argentina（阿根廷）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="BS" data-group="美洲" data-defaultselected="false" data-selected="false">Bahamas（巴哈马）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="BZ" data-group="美洲" data-defaultselected="false" data-selected="false">Belize（伯利兹）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="BR" data-group="美洲" data-defaultselected="false" data-selected="false">Brazil（巴西）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="CA" data-group="美洲" data-defaultselected="false" data-selected="false">Canada（加拿大）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="CL" data-group="美洲" data-defaultselected="false" data-selected="false">Chile（智利）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="CO" data-group="美洲" data-defaultselected="false" data-selected="false">Colombia（哥伦比亚）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="MX" data-group="美洲" data-defaultselected="false" data-selected="false">Mexico（墨西哥）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="PA" data-group="美洲" data-defaultselected="false" data-selected="false">Panama（巴拿马）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="PE" data-group="美洲" data-defaultselected="false" data-selected="false">Peru（秘鲁）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="US" data-group="美洲" data-defaultselected="false" data-selected="false">United States（美国）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="VE" data-group="美洲" data-defaultselected="false" data-selected="false">Venezuela（委内瑞拉）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="VG" data-group="美洲" data-defaultselected="false" data-selected="false">Virgin Islands, British（英属维尔京群岛）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="EG" data-group="非洲" data-defaultselected="false" data-selected="false">Egypt（埃及）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="MA" data-group="非洲" data-defaultselected="false" data-selected="false">Morocco（摩洛哥）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="NG" data-group="非洲" data-defaultselected="false" data-selected="false">Nigeria（尼日利亚）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="SC" data-group="非洲" data-defaultselected="false" data-selected="false">Seychelles（塞舌尔）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="ZA" data-group="非洲" data-defaultselected="false" data-selected="false">South Africa（南非）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="TN" data-group="非洲" data-defaultselected="false" data-selected="false">Tunisia（突尼斯）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="AU" data-group="大洋洲" data-defaultselected="false" data-selected="false">Australia（澳大利亚）</li>
    <li data-role="item" class="ui-country-item fn-hide" data-value="NZ" data-group="大洋洲" data-defaultselected="false" data-selected="false">New Zealand（新西兰）</li></ul>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("../siteConfig/public_foot_v3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('theme'=>'gray'), 0);?>


<div class="dialog_msg fn-hide">
  <div class="box">
    <div class="bdt"><div class="bdr"></div></div>
    <a href="javascript:;" class="close">×</a>
    <div class="content">
      <p class="info">手机号<span class="blur"></span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][17];?>
</p>
      <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/login.html"class="btn"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][0];?>
</a>
      <p class="fpwd"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][23];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/fpwd.html" class="blur"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][3];?>
</a></p>
    </div>
  </div>
  <div class="bg"></div>
</div>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/common.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['cfg_geetest']->value) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_secureAccess']->value;?>
static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
><?php }?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/pay.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/register_v1.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
