<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-04 09:37:52
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/member/touch/login.html" */ ?>
<?php /*%%SmartyHeaderCode:9110075895d4636f0382a47-96476284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9cd31a14be41f692752be99d323b57b662fe83b' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/member/touch/login.html',
      1 => 1559557960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9110075895d4636f0382a47-96476284',
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
    'cfg_geetest' => 0,
    'alipay_app_login' => 0,
    'cfg_description' => 0,
    'cfg_webname' => 0,
    'cfg_weblogo' => 0,
    'HUONIAOROOT' => 0,
    'cfg_smsLoginState' => 0,
    'login' => 0,
    'cfg_secureAccess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d4636f03d46a4_64945480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4636f03d46a4_64945480')) {function content_5d4636f03d46a4_64945480($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<title><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][9];?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/login.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', redirectUrl = '<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
', site = '<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
  var geetest = <?php echo $_smarty_tpl->tpl_vars['cfg_geetest']->value;?>
;
  var alipay_app_login = <?php echo $_smarty_tpl->tpl_vars['alipay_app_login']->value;?>
;
<?php echo '</script'; ?>
>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_description']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_description'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_webname']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_title'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_img'] = new Smarty_variable($_tmp3, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['Share_url'] = new Smarty_variable($_tmp4, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['HUONIAOROOT']->value)."/templates/siteConfig/public_share.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>((string)$_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][9])), 0);?>


  <!-- 内容 s -->
  <div class="main">
    <div class="logobox"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_weblogo']->value;?>
" alt=""></div>
    <form class="" action="" method="post">
      <input type="hidden" name="areaCode" id="areaCode" value="86">

      <div class="litem">
        <div class="inpbox">
          <dl class="fn-clear">
            <dt class="fn-left"><i class="icon icon-user"></i></dt>
            <dd class="fn-left"><input type="text" name="account" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][1];?>
/<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][3][0];?>
" id="account"><i class="account_clear"></i></dd>
          </dl>
        </div>
        <div class="inpbox">
          <dl class="fn-clear">
            <dt class="fn-left"><i class="icon icon-psw"></i></dt>
            <dd class="fn-left"><input type="password" name="password" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][164];?>
" id="password"><i class="psw-show"></i></dd>
          </dl>
        </div>
        <?php if (strstr($_smarty_tpl->tpl_vars['redirectUrl']->value,"wmsj")===false) {?>
        <div class="checkbox fn-clear">
          <div class="fn-left"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/register.html" class="register"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][1][4];?>
</a></div>
          <a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/fpwd.html" class="fn-right"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][5][2];?>
</a>
        </div>
        <?php }?>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['cfg_smsLoginState']->value) {?>
      <div class="litem sms fn-hide">
        <div class="inpbox phone">
          <dl class="fn-clear">
            <dt class="fn-left"><label>+86</label></dt>
            <dd class="fn-left"><input type="tel" name="phone" value="" placeholder="手机号码" id="phone"></dd>
          </dl>
        </div>
        <div class="inpbox code">
          <dl class="fn-clear">
            <dd class="fn-left"><input type="number" name="vercode" value="" placeholder="请输入验证码" id="vercode"></dd>
            <dt class="fn-right"><span class="vcode">获取验证码</span></dt>
          </dl>
        </div>
      </div>
      <?php }?>
      <!-- <div class="error"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][165];?>
</span></div> -->
      <input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][0];?>
" class="submit">
      <?php if (strstr($_smarty_tpl->tpl_vars['redirectUrl']->value,"wmsj")===false) {
if ($_smarty_tpl->tpl_vars['cfg_smsLoginState']->value) {?><span class="smsLogin">短信验证码登录</span><?php }
}?>
    </form>
    <?php if (strstr($_smarty_tpl->tpl_vars['redirectUrl']->value,"wmsj")===false) {?>
    <div class="othertype">
      <div class="other_tit"><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][2][1];?>
</span></div>
      <div class="other_login">
        <ul>
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('siteConfig', array('action'=>"getLoginConnect",'return'=>"login")); $_block_repeat=true; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <?php if ($_smarty_tpl->tpl_vars['login']->value['code']=="qq") {?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/qq/img/100.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" alt=""></a></li>
          <?php } elseif ($_smarty_tpl->tpl_vars['login']->value['code']=="wechat") {?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
" class="wechat"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/wechat/img/100.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" alt=""></a></li>
          <?php } elseif ($_smarty_tpl->tpl_vars['login']->value['code']=="sina") {?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/sina/img/100.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" alt=""></a></li>
          <?php } elseif ($_smarty_tpl->tpl_vars['login']->value['code']=="alipay") {?>
          <li class="alipay"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login.php?type=<?php echo $_smarty_tpl->tpl_vars['login']->value['code'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/api/login/alipay/img/100.png?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" alt=""></a></li>
          <?php }?>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo siteConfig(array('action'=>"getLoginConnect",'return'=>"login"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
      </div>
    </div>
    <?php }?>
  </div>
  <!-- 内容 e -->


  <!-- 区号弹出层 s -->
  <div class="layer">
    <div class="layer_search"><p><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][285];?>
</p><em class="layer_close"></em></div>
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


<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/json.php?action=lang'><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['cfg_geetest']->value) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_secureAccess']->value;?>
static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
><?php }?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/login.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php if (strstr($_smarty_tpl->tpl_vars['redirectUrl']->value,"wmsj")!==false) {?>
<?php echo '<script'; ?>
>
  var login = utils.getStorage("wmsj_login");

  var user = pass = '';
  if(login){
    user = login.user;
    pass = login.pass;
  }

  if(user){
      $("#account").val(user);
  }
  if(pass){
      $("#password").val(pass);
  }

  $(".submit").click(function(){
    var number = $("#account").val();
    var password = $("#password").val();
    var data = {"user":number, "pass":password}
    utils.setStorage("wmsj_login", JSON.stringify(data));
  })

<?php echo '</script'; ?>
>
<?php }?>
</body>
</html>
<?php }} ?>
