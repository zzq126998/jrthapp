<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 11:57:51
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/member/touch/login_touch_popup_3.4.html" */ ?>
<?php /*%%SmartyHeaderCode:6519852455d45063f894640-71541466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17af3a030a6ae90061fb3dc8a2cbdd432eae0510' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/member/touch/login_touch_popup_3.4.html',
      1 => 1564479227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6519852455d45063f894640-71541466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langData' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'redirectUrl' => 0,
    'site' => 0,
    'member_userDomain' => 0,
    'cfg_geetest' => 0,
    'cfg_regstatus' => 0,
    'cfg_regclosemessage' => 0,
    'alipay_app_login' => 0,
    'cfg_smsLoginState' => 0,
    'login' => 0,
    'regtypeArr' => 0,
    'first' => 0,
    'fieldsArr' => 0,
    'cfg_seccodetype' => 0,
    'cfg_secureAccess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d45063f8e03a1_72705309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d45063f8e03a1_72705309')) {function content_5d45063f8e03a1_72705309($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][0];?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/login_touch_popup_3.4.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', redirectUrl = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
', site = '<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
';
  var userDomain = '<?php echo $_smarty_tpl->tpl_vars['member_userDomain']->value;?>
';
  var templets = '<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
';
  var geetest = <?php echo $_smarty_tpl->tpl_vars['cfg_geetest']->value;?>
;
  var regstatus = <?php echo $_smarty_tpl->tpl_vars['cfg_regstatus']->value;?>
;
  var regclosemessage = '<?php echo $_smarty_tpl->tpl_vars['cfg_regclosemessage']->value;?>
';
  var audioSrc = {
    refresh: '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
audio/refresh.mp3',
    tap: '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
audio/tap.mp3',
    cancel: '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
audio/cancel.mp3',
  }
  var alipay_app_login = <?php echo $_smarty_tpl->tpl_vars['alipay_app_login']->value;?>
;
<?php echo '</script'; ?>
>
</head>

<body>

<div class="login-box">
  <div class="formbox">
    <div class="tabHead">
      <ul class="fn-clear">
        <li class="active"><a href="javascript:;" id="login">登录</a></li>
        <li><a href="javascript:;" id="register">注册</a></li>
      </ul>
    </div>

    <div class="tabCon showform">
      <div class="logbox logshow">
          <form action="" id="loginForm">
          <dl class="fn-clear">
            <dt><i class="icon-user"></i></dt>
            <dd><input type="text" id="user-name" placeholder="手机号/邮箱" /></dd>
          </dl>
          <dl class="fn-clear">
            <dt><i class="icon-pass"></i></dt>
            <dd>
              <input type="password" id="password" placeholder="密码">
              <i class="icon-clear"></i>
              <i class="icon-eye disabled"></i>
            </dd>
          </dl>
        </form>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['cfg_smsLoginState']->value) {?>
      <div class="logbox ">
       <form action="" id="loginMobileForm">
          <input type="hidden" name="areaCode" class="areaCode" id="loginAreaCode" value="86">
          <input type="hidden" name="action" value="getPhoneVerify">
          <input type="hidden" name="type" value="sms_login">
          <dl class="f-mobile">
          <dt><i class="icon_mobile"></i><label for=""><font id="loginAreaCodeLab">+86</font><span></span></label></dt>
            <dd><input type="number" pattern="\d*" class="inp account" name="phone" data-send="phone" id="loginPhone" placeholder="请输入您的手机号" oninput="if(value.length>11) value=value.slice(0,11)"></dd>
          </dl>
          <dl>
            <dt><i class="icon_yzm"></i></dt>
            <dd><input type="text" class="inp" name="code" id="vcode1" placeholder="请输入您的手机验证码"><a href="javascript:;" class="get-yzm">获取验证码</a></dd>
          </dl>
        </form>
      </div>
      <?php }?>
       <a class="login-button" href="javascript:"><span class="load"></span>登录</a>
       <p class="flex"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/fpwd.html" target="_blank">忘记密码</a><a class="blue free-reg" href="javascript:;">免费注册</a></p>
      <div class="other-login">
        <ul>
          <?php if ($_smarty_tpl->tpl_vars['cfg_smsLoginState']->value) {?><li class="li-sms"><a class="login-icon" href="javascript:;"><em class="login-icon sms"></em><p>短信登录</p></a></li><?php }?>
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"getLoginConnect",'return'=>"login")); $_block_repeat=true; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <?php if ($_smarty_tpl->tpl_vars['login']->value['code']=="qq") {?>
          <li class="li-qq"><a class="login-icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
" target="_top"><em class="login-icon qq"></em><p>QQ登录</p></a></li>
          <?php } elseif ($_smarty_tpl->tpl_vars['login']->value['code']=="sina") {?>
          <li class="li-sina"><a class="login-icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
" target="_top"><em class="login-icon wb"></em><p>微博登录</p></a></li>
          <?php } elseif ($_smarty_tpl->tpl_vars['login']->value['code']=="wechat") {?>
          <li class="li-weixin"><a class="login-icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
" target="_top"><em class="login-icon wx"></em><p>微信登录</p></a></li>
          <?php } elseif ($_smarty_tpl->tpl_vars['login']->value['code']=="alipay") {?>
          <li class="li-alipay"><a class="login-icon" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
" target="_top"><em class="login-icon ali"></em><p>支付宝登录</p></a></li>
          <?php }?>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
      </div>
    </div>

    <div class="tabCon">
      <div class="reg-tab">
        <ul>
          <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(0, null, 0);?>
          <?php if (in_array('2',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
          <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(1, null, 0);?>
          <li class="curr" data-type="phone">手机注册</li>
          <?php }?>
          <?php if (in_array('1',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
          <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(1, null, 0);?>
          <li<?php if (!$_smarty_tpl->tpl_vars['first']->value) {?> class="curr"<?php }?> data-type="username">用户名注册</li>
          <?php }?>
          <?php if (in_array('3',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
          <li<?php if (!$_smarty_tpl->tpl_vars['first']->value) {?> class="curr"<?php }?> data-type="email">邮箱注册</li>
          <?php }?>
        </ul>
      </div>
      <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(0, null, 0);?>
      <?php if (in_array('2',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
      <div class="regbox regbox-mobile regshow">
        <form action="" class="registerForm" id="regPhoneForm" method="post">
          <input type="hidden" name="areaCode" class="areaCode" id="registerAreaCode" value="86">
          <input type="hidden" name="action" value="getPhoneVerify">
          <input type="hidden" name="type" value="signup">
          <input type="hidden" name="mtype" value="1">
          <input type="hidden" name="rtype" value="3">
          <dl class="f-mobile">
          <dt><i class="icon_mobile"></i><label for=""><font id="registerAreaCodeLab">+86</font><span></span></label></dt>
            <dd><input type="number" pattern="\d*" class="inp account" name="phone" data-send="phone" id="phone" placeholder="请输入您的手机号" oninput="if(value.length>11) value=value.slice(0,11)"></dd>
          </dl>
          <dl>
            <dt><i class="icon_yzm"></i></dt>
            <dd><input type="text" class="inp" name="vcode" id="phone_code" placeholder="请输入您的手机验证码"><a href="javascript:;" class="get-yzm">获取验证码</a></dd>
          </dl>
          <dl>
            <dt><i class="icon_lock"></i></dt>
            <dd><input type="text" class="inp" name="password" id="phone_pasw" placeholder="请填写密码"></dd>
          </dl>
          <input type="submit" class="fn-hide">
        </form>
      </div>
      <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(1, null, 0);?>
      <?php }?>
      <?php if (in_array('1',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
      <div class="regbox regbox-username<?php if (!$_smarty_tpl->tpl_vars['first']->value) {?> regshow<?php }?>">
        <form action="" class="registerForm" method="post">
          <input type="hidden" name="areaCode" value="86">
          <input type="hidden" name="mtype" value="1">
          <input type="hidden" name="rtype" value="1">
          <dl>
            <dt><i class="icon_username"></i></dt>
            <dd><input type="text" class="inp account" name="account" id="username" placeholder="请输入您的用户名"></dd>
          </dl>
          <dl>
            <dt><i class="icon_lock"></i></dt>
            <dd><input type="text" class="inp" name="password" id="username_pasw" placeholder="请填写密码"></dd>
          </dl>
          <?php if (in_array('1',$_smarty_tpl->tpl_vars['fieldsArr']->value)) {?>
          <!-- 真实姓名 -->
          <dl>
            <dt><i class="icon_realname"></i></dt>
            <dd><input type="text" class="inp" name="nickname" id="username_nickname" placeholder="请输入您的真实姓名"></dd>
          </dl>
          <?php }?>
          <?php if (in_array('2',$_smarty_tpl->tpl_vars['fieldsArr']->value)) {?>
          <!-- 邮箱 -->
          <dl>
            <dt><i class="icon_email"></i></dt>
            <dd><input type="text" class="inp" name="email" id="username_email" placeholder="请输入您的邮箱账号"></dd>
          </dl>
          <?php }?>
          <?php if (in_array('3',$_smarty_tpl->tpl_vars['fieldsArr']->value)) {?>
          <!-- 手机 -->
          <dl>
            <dt><i class="icon_mobile"></i></dt>
            <dd><input type="number" pattern="\d*" class="inp" name="phone" id="username_phone" placeholder="请输入您的手机号" oninput="if(value.length>11) value=value.slice(0,11)"></dd>
          </dl>
          <?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['cfg_seccodetype']->value)) {?>
          <dl>
            <dt><i class="icon_vericode"></i></dt>
            <dd><input type="text" class="inp" name="vericode" id="username_code" placeholder="请输入验证码"><img src="/include/vdimgck.php" class="vericode_img"></dd>
          </dl>
          <?php }?>
          <input type="submit" class="fn-hide">
        </form>
      </div>
      <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(1, null, 0);?>
      <?php }?>
      <?php if (in_array('3',$_smarty_tpl->tpl_vars['regtypeArr']->value)) {?>
      <div class="regbox regbox-email<?php if (!$_smarty_tpl->tpl_vars['first']->value) {?> regshow<?php }?>">
        <form action="" class="registerForm" method="post">
          <input type="hidden" name="action" value="getEmailVerify">
          <input type="hidden" name="type" value="signup">
          <input type="hidden" name="mtype" value="1">
          <input type="hidden" name="rtype" value="2">
          <dl>
            <dt><i class="icon_email"></i></dt>
              <dd><input type="text" class="inp account" name="email" data-send="email" id="email" placeholder="请输入您的邮箱账号"></dd>
            </dl>
            <dl>
              <dt><i class="icon_yzm"></i></dt>
              <dd><input type="text" class="inp" name="vcode" id="email_code" placeholder="请输入您的邮箱验证码"><a href="javascript:;" class="get-yzm">获取验证码</a></dd>
            </dl>
            <dl>
              <dt><i class="icon_lock"></i></dt>
              <dd><input type="text" class="inp" name="password" id="email_pasw" placeholder="请填写密码"></dd>
            </dl>
            <input type="submit" class="fn-hide">
          </form>
      </div>
      <?php }?>
      <div class="f-agree">
        <label for=""><input type="checkbox" class="agree"><span></span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][2];?>
</label><a href="<?php echo getUrlPath(array('service'=>'siteConfig','template'=>'protocol','title'=>'会员注册协议'),$_smarty_tpl);?>
" target="_top">《<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][12][0];?>
》</a>
      </div>
      <div class="f-submit"><a href="javascript:;" class="submit">立即注册</a></div>
    </div>
    <div class="closeBox">
      <a href="javascript:;"><i></i></a>
    </div>
  </div>

</div>

<!-- 区号弹出层 s -->
<div class="layer">
  <div class="layer_search"><p>国籍/地区</p><em class="layer_close"><span class="inpClose"><i class="inpClear"></i></span></em></div>
  <div class="layer_list" id="layer_list">
    <ul>
      <li><span>China（中国大陆）</span><em class="fn-right">+86</em></li>
      <li><span>Hong Kong（香港）</span><em class="fn-right">+852</em></li>
      <li><span>Macau（澳门）</span><em class="fn-right">+853</em></li>
      <li>Taiwan（台湾）<em class="fn-right">+886</em></li>
      <li><span>Argentina（阿根廷）</span><em class="fn-right">+54</em></li>
      <li><span>Australia（澳大利亚）</span><em class="fn-right">+61</em></li>
      <li><span>Austria（奥地利）</span><em class="fn-right">+43</em></li>
      <li><span>Bahamas（巴哈马）</span><em class="fn-right">+1242</em></li>
      <li><span>Belarus（白俄罗斯）</span><em class="fn-right">+375</em></li>
      <li><span>Belgium（比利时）</span><em class="fn-right">+32</em></li>
      <li><span>Belize（伯利兹）</span><em class="fn-right">+501</em></li>
      <li><span>Brazil（巴西）</span><em class="fn-right">+55</em></li>
      <li><span>Bulgaria（保加利亚）</span><em class="fn-right">+359</em></li>
      <li><span>Cambodia（柬埔寨）</span><em class="fn-right">+855</em></li>
      <li><span>Canada（加拿大）</span><em class="fn-right">+1</em></li>
      <li><span>Chile（智利）</span><em class="fn-right">+56</em></li>
      <li><span>Colombia（哥伦比亚）</span><em class="fn-right">+57</em></li>
      <li><span>Denmark（丹麦）</span><em class="fn-right">+45</em></li>
      <li><span>Egypt（埃及）</span><em class="fn-right">+20</em></li>
      <li><span>Estonia（爱沙尼亚）</span><em class="fn-right">+372</em></li>
      <li><span>Finland（芬兰）</span><em class="fn-right">+358</em></li>
      <li><span>France（法国）</span><em class="fn-right">+33</em></li>
      <li><span>Germany（德国）</span><em class="fn-right">+49</em></li>
      <li><span>Greece（希腊）</span><em class="fn-right">+30</em></li>
      <li><span>Hungary（匈牙利）</span><em class="fn-right">+36</em></li>
      <li><span>India（印度）</span><em class="fn-right">+91</em></li>
      <li><span>Indonesia（印度尼西亚）</span><em class="fn-right">+62</em></li>
      <li><span>Ireland（爱尔兰）</span><em class="fn-right">+353</em></li>
      <li><span>Israel（以色列）</span><em class="fn-right">+972</em></li>
      <li><span>Italy（意大利）</span><em class="fn-right">+39</em></li>
      <li><span>Japan（日本）</span><em class="fn-right">+81</em></li>
      <li><span>Jordan（约旦）</span><em class="fn-right">+962</em></li>
      <li><span>Kyrgyzstan（吉尔吉斯斯坦）</span><em class="fn-right">+996</em></li>
      <li><span>Lithuania（立陶宛）</span><em class="fn-right">+370</em></li>
      <li><span>Luxembourg（卢森堡）</span><em class="fn-right">+352</em></li>
      <li><span>Malaysia（马来西亚）</span><em class="fn-right">+60</em></li>
      <li><span>Maldives（马尔代夫）</span><em class="fn-right">+960</em></li>
      <li><span>Mexico（墨西哥）</span><em class="fn-right">+52</em></li>
      <li><span>Mongolia（蒙古）</span><em class="fn-right">+976</em></li>
      <li><span>Morocco（摩洛哥）</span><em class="fn-right">+212</em></li>
      <li><span>Netherlands（荷兰）</span><em class="fn-right">+31</em></li>
      <li><span>New Zealand（新西兰）</span><em class="fn-right">+64</em></li>
      <li><span>Nigeria（尼日利亚）</span><em class="fn-right">+234</em></li>
      <li><span>Norway（挪威）</span><em class="fn-right">+47</em></li>
      <li><span>Panama（巴拿马）</span><em class="fn-right">+507</em></li>
      <li><span>Peru（秘鲁）</span><em class="fn-right">+51</em></li>
      <li><span>Philippines（菲律宾）</span><em class="fn-right">+63</em></li>
      <li><span>Poland（波兰）</span><em class="fn-right">+48</em></li>
      <li><span>Portugal（葡萄牙）</span><em class="fn-right">+351</em></li>
      <li><span>Qatar（卡塔尔）</span><em class="fn-right">+974</em></li>
      <li><span>Romania（罗马尼亚）</span><em class="fn-right">+40</em></li>
      <li><span>Russia（俄罗斯）</span><em class="fn-right">+7</em></li>
      <li><span>Saudi Arabia（沙特阿拉伯）</span><em class="fn-right">+966</em></li>
      <li><span>Serbia（塞尔维亚）</span><em class="fn-right">+381</em></li>
      <li><span>Seychelles（塞舌尔）</span><em class="fn-right">+248</em></li>
      <li><span>Singapore（新加坡）</span><em class="fn-right">+65</em></li>
      <li><span>South Africa（南非）</span><em class="fn-right">+27</em></li>
      <li><span>South Korea（韩国）</span><em class="fn-right">+82</em></li>
      <li><span>Spain（西班牙）</span><em class="fn-right">+34</em></li>
      <li><span>Sri Lanka（斯里兰卡）</span><em class="fn-right">+94</em></li>
      <li><span>Sweden（瑞典）</span><em class="fn-right">+46</em></li>
      <li><span>Switzerland（瑞士）</span><em class="fn-right">+41</em></li>
      <li><span>Thailand（泰国）</span><em class="fn-right">+66</em></li>
      <li><span>Tunisia（突尼斯）</span><em class="fn-right">+216</em></li>
      <li><span>Turkey（土耳其）</span><em class="fn-right">+90</em></li>
      <li><span>Ukraine（乌克兰）</span><em class="fn-right">+380</em></li>
      <li><span>United Arab Emirates（阿联酋）</span><em class="fn-right">+971</em></li>
      <li><span>United Kingdom（英国）</span><em class="fn-right">+44</em></li>
      <li><span>United States（美国）</span><em class="fn-right">+1</em></li>
      <li><span>Venezuela（委内瑞拉）</span><em class="fn-right">+58</em></li>
      <li><span>Vietnam（越南）</span><em class="fn-right">+84</em></li>
      <li><span>Virgin Islands（英属维尔京群岛）</span><em class="fn-right">+1284</em></li>
    </ul>
  </div>
</div>
<!-- 区号弹出层 e -->
<div class="mask" id="maskReg"></div>
<div id="popupReg-captcha-mobile"></div>
<?php if ($_smarty_tpl->tpl_vars['cfg_geetest']->value) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_secureAccess']->value;?>
static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
><?php }?>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/login_touch_popup_3.4.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
