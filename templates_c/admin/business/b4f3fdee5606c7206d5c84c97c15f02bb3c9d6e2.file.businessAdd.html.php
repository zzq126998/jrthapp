<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:51:12
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\business\businessAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:13662972575d510c60364274-26563903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4f3fdee5606c7206d5c84c97c15f02bb3c9d6e2' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\business\\businessAdd.html',
      1 => 1559204967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13662972575d510c60364274-26563903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'pagetitle' => 0,
    'cssFile' => 0,
    'atlasSize' => 0,
    'atlasType' => 0,
    'pics' => 0,
    'certify' => 0,
    'banner' => 0,
    'cfg_mapCity' => 0,
    'typeid' => 0,
    'addrid' => 0,
    'typeListArr' => 0,
    'addrListArr' => 0,
    'action' => 0,
    'adminPath' => 0,
    'dopost' => 0,
    'id' => 0,
    'token' => 0,
    'username' => 0,
    'uid' => 0,
    'type' => 0,
    'level' => 0,
    'expired' => 0,
    'title' => 0,
    'logo' => 0,
    'thumbSize' => 0,
    'cityid' => 0,
    'address' => 0,
    'lnglat' => 0,
    'mappic' => 0,
    'name' => 0,
    'cardnum' => 0,
    'areaCode' => 0,
    'phone' => 0,
    'email' => 0,
    'company' => 0,
    'licensenum' => 0,
    'wechatname' => 0,
    'wechatcode' => 0,
    'wechatqr' => 0,
    'tel' => 0,
    'qq' => 0,
    'landmark' => 0,
    'video' => 0,
    'video_pic' => 0,
    'qj_file' => 0,
    'typeidArr' => 0,
    'qj_type' => 0,
    'typeidNames' => 0,
    'thumbType' => 0,
    'license' => 0,
    'accounts' => 0,
    'jingying' => 0,
    'cardfront' => 0,
    'cardbehind' => 0,
    'body' => 0,
    'weekDay' => 0,
    'opentime' => 0,
    'amount' => 0,
    'parking' => 0,
    'tagArr' => 0,
    'item' => 0,
    'tag' => 0,
    'tagSel' => 0,
    'tag_shop' => 0,
    'isbid' => 0,
    'isJoin' => 0,
    'stateList' => 0,
    'state' => 0,
    'authArr' => 0,
    'auth' => 0,
    'authattr' => 0,
    'bind_printList' => 0,
    'bind_print' => 0,
    'print_config' => 0,
    'print_state' => 0,
    'editorFile' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d510c6040c254_14748714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d510c6040c254_14748714')) {function content_5d510c6040c254_14748714($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<?php echo '<script'; ?>
>
var atlasSize = <?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
, atlasType = "<?php echo $_smarty_tpl->tpl_vars['atlasType']->value;?>
", atlasMax = 0;  //图集配置
var imglist = {"imgpics": <?php echo $_smarty_tpl->tpl_vars['pics']->value;?>
, "certify": <?php echo $_smarty_tpl->tpl_vars['certify']->value;?>
, "banner": <?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
}, mapCity = "<?php echo $_smarty_tpl->tpl_vars['cfg_mapCity']->value;?>
",
	typeid = <?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
, addrid = <?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
, typeListArr = <?php echo $_smarty_tpl->tpl_vars['typeListArr']->value;?>
, addrListArr = <?php echo $_smarty_tpl->tpl_vars['addrListArr']->value;?>
, action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', modelType = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
', adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
";
	var service = 'business';
<?php echo '</script'; ?>
>
<style>
	#videoPreview video {width:200px;}
	#bannerBox .list-holder li {width: 115px !important;height: 86px;}
	#bannerBox .list-holder li .li-thumb {margin: -5px 0 0 0 !important;}
	#bannerBox .list-holder li a.li-rm {margin: -17px -14px 0 0 !important;}
	</style>
</head>

<body>
<form action="" method="post" name="editform" id="editform" class="editform">
  <input type="hidden" name="dopost" id="dopost" value="<?php echo $_smarty_tpl->tpl_vars['dopost']->value;?>
" />
  <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
  <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
	<dl class="clearfix">
    <dt><label for="company">管理会员：</label></dt>
    <dd style="position:static;">
      <input class="input-large" type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" autocomplete="off" />
      <input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" />
      <span class="input-tips" style="display:inline-block;"><s></s>此会员可以管理商家信息</span>
      <div id="companyList" class="popup_key"></div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label>入驻类型：</label></dt>
    <dd class="radio">
      <label><input type="radio" name="type" value="1"<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?> checked="checked"<?php }?>>体验版</label>&nbsp;&nbsp;
      <label><input type="radio" name="type" value="2"<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?> checked="checked"<?php }?>>企业版</label>&nbsp;&nbsp;
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label>过期时间</label><input type="hidden" name="level" id="level" value="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
" /></dt>
    <dd class="radio" style="overflow: inherit; padding-left: 140px;">
      <div class="input-prepend" style="margin-left:5px; margin-bottom: 0;">
        <input class="input-medium" type="text" name="expired" id="expired" value="<?php if ($_smarty_tpl->tpl_vars['expired']->value) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['expired']->value,"%Y-%m-%d %H:%M:%S");
}?>">
      </div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="title">店铺名称：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="title" id="title" data-regex=".{2,60}" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
      <span class="input-tips"><s></s>请输入店铺名称。</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt>店铺LOGO：</dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['logo']->value!='') {?> hide<?php }?>" id="filePicker1" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['logo']->value!='') {?>
			<ul id="listSection1" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection1" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="logo" value="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" class="imglist-hidden" id="logo">
		</dd>
	</dl>
	
	
  <dl class="clearfix">
    <dt><label for="typeid">经营品类：</label></dt>
    <dd>
      <span id="typeList">
        <select name="typeid" id="typeid" class="input-large"></select>
      </span>
      <span class="input-tips"><s></s>请选择经营品类</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="addrid">所属地区：</label></dt>
    <dd>
			<div class="cityName addrBtn" data-field="addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addrid']->value,'split'=>' '),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['addrid']->value!='') {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addrid']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else { ?>请选择<?php }?></div>
			<input type="hidden" name="addrid" id="addrid" value="<?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
" />
		<input type="hidden" name="cityid" id="cityid" value=<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
>
      <span class="input-tips"><s></s>请选择所属地区</span>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="address">详细地址：</label></dt>
    <dd>
      <input class="input-xlarge" type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" maxlength="60" data-regex=".{2,60}" />
      <img src="<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
../static/images/admin/markditu.jpg" id="mark" style="cursor:pointer;" title="标注地图位置" />
      <span class="input-tips"><s></s>请输入详细地址，2-60位</span>
      <input type="hidden" name="lnglat" id="lnglat" value="<?php echo $_smarty_tpl->tpl_vars['lnglat']->value;?>
" />
    </dd>
	</dl>
	<dl class="clearfix hide">
			<dt>地图截图：</dt>
			<dd class="thumb clearfix listImgBox">
				<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['mappic']->value!='') {?> hide<?php }?>" id="filePicker11" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
				<?php if ($_smarty_tpl->tpl_vars['mappic']->value!='') {?>
				<ul id="listSection11" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_11_1"><a href='<?php echo $_smarty_tpl->tpl_vars['mappic']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['mappic']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['mappic']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['mappic']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
				<?php } else { ?>
				<ul id="listSection11" class="listSection thumblist clearfix"></ul>
				<?php }?>
				<input type="hidden" name="mappic" value="<?php echo $_smarty_tpl->tpl_vars['mappic']->value;?>
" class="imglist-hidden" id="mappic">
			</dd>
		</dl>
  <dl class="clearfix hide">
    <dt><label for="name">法人姓名：</label></dt>
    <dd>
      <input class="input-large" type="text" name="name" id="name" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
    </dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label for="cardnum">身份证号码：</label></dt>
    <dd>
      <input class="input-large" type="text" name="cardnum" id="cardnum" maxlength="18" value="<?php echo $_smarty_tpl->tpl_vars['cardnum']->value;?>
" />
    </dd>
  </dl>
	<dl class="clearfix">
		<dt><label for="phone">手机号码：</label><input type="hidden" name="areaCode" id="areaCode" value="<?php echo $_smarty_tpl->tpl_vars['areaCode']->value;?>
" /></dt>
		<dd style="overflow: inherit; padding-left: 140px;" id="phoneArea">
			<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><?php if ($_smarty_tpl->tpl_vars['areaCode']->value) {?>+<?php echo $_smarty_tpl->tpl_vars['areaCode']->value;
} else { ?>区号<?php }?><span class="caret"></span></button>
			<ul class="dropdown-menu" style="left: 140px; max-height: 300px; overflow-y: auto;">
			<li><a href="javascript:;" data-id="+86">China（中国大陆）+86</a></li>
			<li><a href="javascript:;" data-id="+54">Argentina（阿根廷）+54</a></li>
			<li><a href="javascript:;" data-id="+61">Australia（澳大利亚）+61</a></li>
			<li><a href="javascript:;" data-id="+43">Austria（奥地利）+43</a></li>
			<li><a href="javascript:;" data-id="+1242">Bahamas（巴哈马）+1242</a></li>
			<li><a href="javascript:;" data-id="+375">Belarus（白俄罗斯）+375</a></li>
			<li><a href="javascript:;" data-id="+32">Belgium（比利时）+32</a></li>
			<li><a href="javascript:;" data-id="+501">Belize（伯利兹）+501</a></li>
			<li><a href="javascript:;" data-id="+55">Brazil（巴西）+55</a></li>
			<li><a href="javascript:;" data-id="+359">Bulgaria（保加利亚）+359</a></li>
			<li><a href="javascript:;" data-id="+855">Cambodia（柬埔寨）+855</a></li>
			<li><a href="javascript:;" data-id="+1">Canada（加拿大）+1</a></li>
			<li><a href="javascript:;" data-id="+56">Chile（智利）+56</a></li>
			<li><a href="javascript:;" data-id="+57">Colombia（哥伦比亚）+57</a></li>
			<li><a href="javascript:;" data-id="+45">Denmark（丹麦）+45</a></li>
			<li><a href="javascript:;" data-id="+20">Egypt（埃及）+20</a></li>
			<li><a href="javascript:;" data-id="+372">Estonia（爱沙尼亚）+372</a></li>
			<li><a href="javascript:;" data-id="+358">Finland（芬兰）+358</a></li>
			<li><a href="javascript:;" data-id="+33">France（法国）+33</a></li>
			<li><a href="javascript:;" data-id="+49">Germany（德国）+49</a></li>
			<li><a href="javascript:;" data-id="+30">Greece（希腊）+30</a></li>
			<li><a href="javascript:;" data-id="+852">Hong Kong（香港）+852</a></li>
			<li><a href="javascript:;" data-id="+36">Hungary（匈牙利）+36</a></li>
			<li><a href="javascript:;" data-id="+91">India（印度）+91</a></li>
			<li><a href="javascript:;" data-id="+62">Indonesia（印度尼西亚）+62</a></li>
			<li><a href="javascript:;" data-id="+353">Ireland（爱尔兰）+353</a></li>
			<li><a href="javascript:;" data-id="+972">Israel（以色列）+972</a></li>
			<li><a href="javascript:;" data-id="+39">Italy（意大利）+39</a></li>
			<li><a href="javascript:;" data-id="+81">Japan（日本）+81</a></li>
			<li><a href="javascript:;" data-id="+962">Jordan（约旦）+962</a></li>
			<li><a href="javascript:;" data-id="+996">Kyrgyzstan（吉尔吉斯斯坦）+996</a></li>
			<li><a href="javascript:;" data-id="+370">Lithuania（立陶宛）+370</a></li>
			<li><a href="javascript:;" data-id="+352">Luxembourg（卢森堡）+352</a></li>
			<li><a href="javascript:;" data-id="+853">Macau（澳门）+853</a></li>
			<li><a href="javascript:;" data-id="+60">Malaysia（马来西亚）+60</a></li>
			<li><a href="javascript:;" data-id="+960">Maldives（马尔代夫）+960</a></li>
			<li><a href="javascript:;" data-id="+52">Mexico（墨西哥）+52</a></li>
			<li><a href="javascript:;" data-id="+976">Mongolia（蒙古）+976</a></li>
			<li><a href="javascript:;" data-id="+212">Morocco（摩洛哥）+212</a></li>
			<li><a href="javascript:;" data-id="+31">Netherlands（荷兰）+31</a></li>
			<li><a href="javascript:;" data-id="+64">New Zealand（新西兰）+64</a></li>
			<li><a href="javascript:;" data-id="+234">Nigeria（尼日利亚）+234</a></li>
			<li><a href="javascript:;" data-id="+47">Norway（挪威）+47</a></li>
			<li><a href="javascript:;" data-id="+507">Panama（巴拿马）+507</a></li>
			<li><a href="javascript:;" data-id="+51">Peru（秘鲁）+51</a></li>
			<li><a href="javascript:;" data-id="+63">Philippines（菲律宾）+63</a></li>
			<li><a href="javascript:;" data-id="+48">Poland（波兰）+48</a></li>
			<li><a href="javascript:;" data-id="+351">Portugal（葡萄牙）+351</a></li>
			<li><a href="javascript:;" data-id="+974">Qatar（卡塔尔）+974</a></li>
			<li><a href="javascript:;" data-id="+40">Romania（罗马尼亚）+40</a></li>
			<li><a href="javascript:;" data-id="+7">Russia（俄罗斯）+7</a></li>
			<li><a href="javascript:;" data-id="+966">Saudi Arabia（沙特阿拉伯）+966</a></li>
			<li><a href="javascript:;" data-id="+381">Serbia（塞尔维亚）+381</a></li>
			<li><a href="javascript:;" data-id="+248">Seychelles（塞舌尔）+248</a></li>
			<li><a href="javascript:;" data-id="+65">Singapore（新加坡）+65</a></li>
			<li><a href="javascript:;" data-id="+27">South Africa（南非）+27</a></li>
			<li><a href="javascript:;" data-id="+82">South Korea（韩国）+82</a></li>
			<li><a href="javascript:;" data-id="+34">Spain（西班牙）+34</a></li>
			<li><a href="javascript:;" data-id="+94">Sri Lanka（斯里兰卡）+94</a></li>
			<li><a href="javascript:;" data-id="+46">Sweden（瑞典）+46</a></li>
			<li><a href="javascript:;" data-id="+41">Switzerland（瑞士）+41</a></li>
			<li><a href="javascript:;" data-id="+886">Taiwan（台湾）+886</a></li>
			<li><a href="javascript:;" data-id="+66">Thailand（泰国）+66</a></li>
			<li><a href="javascript:;" data-id="+216">Tunisia（突尼斯）+216</a></li>
			<li><a href="javascript:;" data-id="+90">Turkey（土耳其）+90</a></li>
			<li><a href="javascript:;" data-id="+380">Ukraine（乌克兰）+380</a></li>
			<li><a href="javascript:;" data-id="+971">United Arab Emirates（阿联酋）+971</a></li>
			<li><a href="javascript:;" data-id="+44">United Kingdom（英国）+44</a></li>
			<li><a href="javascript:;" data-id="+1">United States（美国）+1</a></li>
			<li><a href="javascript:;" data-id="+58">Venezuela（委内瑞拉）+58</a></li>
			<li><a href="javascript:;" data-id="+84">Vietnam（越南）+84</a></li>
			<li><a href="javascript:;" data-id="+1284">Virgin Islands（英属维尔京群岛）+1284</a></li>
			</ul>
			<input class="input-medium" type="text" name="phone" id="phone" data-regex="0?(13|14|15|17|18)[0-9]{9}" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" />
		</dd>
	</dl>
  <dl class="clearfix">
    <dt><label for="email">邮箱地址：</label></dt>
    <dd><input class="input-large" type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label for="company">公司名称：</label></dt>
    <dd>
      <input class="input-xlarge" type="text" name="company" id="company" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
" />
    </dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label for="licensenum">营业执照号码：</label></dt>
    <dd><input class="input-large" type="text" name="licensenum" id="licensenum" value="<?php echo $_smarty_tpl->tpl_vars['licensenum']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label for="wechatname">微信名称：</label></dt>
    <dd><input class="input-large" type="text" name="wechatname" id="wechatname" value="<?php echo $_smarty_tpl->tpl_vars['wechatname']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="wechatcode">微信号：</label></dt>
    <dd><input class="input-large" type="text" name="wechatcode" id="wechatcode" value="<?php echo $_smarty_tpl->tpl_vars['wechatcode']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label>微信二维码：</label></dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['wechatqr']->value!='') {?> hide<?php }?>" id="filePicker14" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['wechatqr']->value!='') {?>
			<ul id="listSection14" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_14_1"><a href='/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['wechatqr']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['wechatqr']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['wechatqr']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['wechatqr']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection14" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="wechatqr" value="<?php echo $_smarty_tpl->tpl_vars['wechatqr']->value;?>
" class="imglist-hidden" id="wechatqr">
		</dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="tel">联系电话：</label></dt>
    <dd><input type="text" class="input-large" id="tel" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" /><span class="input-tips"><s></s>多个请用,分隔</span></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="qq">联系QQ：</label></dt>
		<dd><input type="text" class="input-large" id="qq" name="qq" value="<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
" /><span class="input-tips"><s></s>多个请用,分隔</span></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="landmark">附近地标：</label></dt>
    <dd><input type="text" class="input-large" id="landmark" name="landmark" value="<?php echo $_smarty_tpl->tpl_vars['landmark']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt>幻灯图片：</dt>
		<dd class="listImgBox hide">
			<div class="list-holder">
				<ul id="listSection3" class="clearfix listSection piece"></ul>
				<input type="hidden" name="banner" value='<?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
' class="imglist-hidden">
			</div>
			<div class="btn-section clearfix">
				<div class="uploadinp filePicker" id="filePicker3" data-type="album" data-count="999" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist="banner"><div id="flasHolder"></div><span>添加图片</span></div>
				<div class="upload-tip">
					<p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
				</div>
			</div>
		</dd>
  </dl>

  <dl class="clearfix hide">
    <dt>店铺图集：</dt>
		<dd class="listImgBox hide">
			<div class="list-holder">
				<ul id="listSection4" class="clearfix listSection piece"></ul>
				<input type="hidden" name="pics" value='<?php echo $_smarty_tpl->tpl_vars['pics']->value;?>
' class="imglist-hidden">
			</div>
			<div class="btn-section clearfix">
				<div class="uploadinp filePicker" id="filePicker4" data-type="album" data-count="999" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist="imgpics"><div id="flasHolder"></div><span>添加图片</span></div>
				<div class="upload-tip">
					<p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
				</div>
			</div>
		</dd>
	</dl>
	<dl class="clearfix" id="type0">
    <dt>上传视频：</dt>
    <dd>
      <input name="video" type="hidden" id="video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" />
      <div class="spic<?php if (!$_smarty_tpl->tpl_vars['video']->value) {?> hide<?php }?>">
        <div class="sholder" id="videoPreview">
          <?php if ($_smarty_tpl->tpl_vars['video']->value!='') {?>
            <a href="/include/videoPreview.php?f=" data-id="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
">预览视频</a>
          <?php }?>
        </div>
        <a href="javascript:;" class="reupload">重新上传</a>
      </div>
      <iframe src ="/include/upfile.inc.php?mod=business&type=video&obj=video&filetype=video" style="width:100%; height:25px;<?php if ($_smarty_tpl->tpl_vars['video']->value!='') {?> display: none;<?php }?>" scrolling="no" frameborder="0" marginwidth="0" marginheight="0"></iframe>
    </dd>
	</dl>
	<dl class="clearfix">
    <dt>视频封面：</dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['video_pic']->value!='') {?> hide<?php }?>" id="filePicker12" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['video_pic']->value!='') {?>
			<ul id="listSection12" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_12_1"><a href='<?php echo $_smarty_tpl->tpl_vars['video_pic']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['video_pic']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['video_pic']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['video_pic']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection12" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="video_pic" value="<?php echo $_smarty_tpl->tpl_vars['video_pic']->value;?>
" class="imglist-hidden" id="video_pic">
		</dd>
	</dl>
	<dl class="clearfix">
    <dt><label>全景类型：</label></dt>
    <dd class="radio">
      <input name="qj_pic" type="hidden" id="litpic" value="<?php echo $_smarty_tpl->tpl_vars['qj_file']->value;?>
" />
      <?php echo smarty_function_html_radios(array('name'=>"typeidArr",'values'=>$_smarty_tpl->tpl_vars['typeidArr']->value,'checked'=>$_smarty_tpl->tpl_vars['qj_type']->value,'output'=>$_smarty_tpl->tpl_vars['typeidNames']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

    </dd>
	</dl>
	<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==0) {?>
  <dl class="clearfix" id="qj_type0">
  <?php } else { ?>
  <dl class="clearfix hide" id="qj_type0">
  <?php }?>
    <dt>全景图片：</dt>
    <dd class="listImgBox hide">
      <div class="btn-section clearfix">
        <div class="uploadinp filePicker" id="filePicker2" data-type="quanj" data-count="6" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist=""><div id="flasHolder"></div><span>添加图片</span></div>
        <div class="upload-tip">
          <p><a href="/include/360panorama.php?f=" class="btn-mini btn-link<?php if (($_smarty_tpl->tpl_vars['qj_type']->value==0&&$_smarty_tpl->tpl_vars['qj_file']->value=='')||($_smarty_tpl->tpl_vars['qj_type']->value==1)) {?> hide<?php }?>" id="previewQj">预览</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['thumbType']->value,"*.",''),";","、");?>
，单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M，最多6张图片<span class="fileerror"></span></p>
        </div>
      </div>
      <div class="list-holder qj360">
        <ul id="listSection2" class="clearfix listSection piece"></ul>
        <ul class="picbg"><li>前</li><li>右</li><li>后</li><li>左</li><li>顶</li><li>底</li></ul>
      </div>
    </dd>
  </dl>
  <?php if ($_smarty_tpl->tpl_vars['qj_type']->value==1) {?>
  <dl class="clearfix" id="qj_type1">
  <?php } else { ?>
  <dl class="clearfix hide" id="qj_type1">
  <?php }?>
    <dt><label for="url">远程地址：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="qj_url" id="url" value="<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==1) {
echo $_smarty_tpl->tpl_vars['qj_file']->value;
}?>" data-regex="[a-zA-z]+:\/\/[^\s]+" />
      <span class="input-tips"><s></s>请输入网址，以http://开头</span>
    </dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label>营业执照：</label></dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['license']->value!='') {?> hide<?php }?>" id="filePicker5" data-type="card"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['license']->value!='') {?>
			<ul id="listSection5" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_5_1"><a href='/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['license']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['license']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['license']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['license']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection5" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="license" value="<?php echo $_smarty_tpl->tpl_vars['license']->value;?>
" class="imglist-hidden" id="license">
		</dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label>开户许可证：</label></dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['accounts']->value!='') {?> hide<?php }?>" id="filePicker7" data-type="card"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['accounts']->value!='') {?>
			<ul id="listSection7" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_7_1"><a href='/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection7" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="accounts" value="<?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
" class="imglist-hidden" id="accounts">
		</dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label>经营许可证：</label></dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['jingying']->value!='') {?> hide<?php }?>" id="filePicker8" data-type="card"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['jingying']->value!='') {?>
			<ul id="listSection8" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_8_1"><a href='/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['jingying']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['jingying']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['jingying']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['jingying']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection8" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="jingying" value="<?php echo $_smarty_tpl->tpl_vars['jingying']->value;?>
" class="imglist-hidden" id="jingying">
		</dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label>身份证正面：</label></dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['cardfront']->value!='') {?> hide<?php }?>" id="filePicker9" data-type="card"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['cardfront']->value!='') {?>
			<ul id="listSection9" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_9_1"><a href='/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['cardfront']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['cardfront']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['cardfront']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['cardfront']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection9" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="cardfront" value="<?php echo $_smarty_tpl->tpl_vars['cardfront']->value;?>
" class="imglist-hidden" id="cardfront">
		</dd>
  </dl>
  <dl class="clearfix hide">
    <dt><label>身份证反面：</label></dt>
		<dd class="thumb clearfix listImgBox">
			<div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['cardbehind']->value!='') {?> hide<?php }?>" id="filePicker10" data-type="card"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
			<?php if ($_smarty_tpl->tpl_vars['cardbehind']->value!='') {?>
			<ul id="listSection10" class="listSection thumblist clearfix" style="display:inline-block;"><li id="WU_FILE_10_1"><a href='/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['cardbehind']->value;?>
' target="_blank" title=""><img alt="" src="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['cardbehind']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['cardbehind']->value;?>
" data-url="/include/attachment.php?f=<?php echo $_smarty_tpl->tpl_vars['cardbehind']->value;?>
" width="100"/></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li></ul>
			<?php } else { ?>
			<ul id="listSection10" class="listSection thumblist clearfix"></ul>
			<?php }?>
			<input type="hidden" name="cardbehind" value="<?php echo $_smarty_tpl->tpl_vars['cardbehind']->value;?>
" class="imglist-hidden" id="cardbehind">
		</dd>
  </dl>
  <dl class="clearfix hide">
    <dt>其他证明文件：</dt>
		<dd class="listImgBox hide">
			<div class="list-holder">
				<ul id="listSection6" class="clearfix listSection piece"></ul>
				<input type="hidden" name="certify" value='<?php echo $_smarty_tpl->tpl_vars['certify']->value;?>
' class="imglist-hidden">
			</div>
			<div class="btn-section clearfix">
				<div class="uploadinp filePicker" id="filePicker6" data-type="album" data-count="999" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist="certify"><div id="flasHolder"></div><span>添加图片</span></div>
				<div class="upload-tip">
					<p><a href="javascript:;" class="hide deleteAllAtlas">删除所有</a>&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['atlasType']->value,"*.",''),";","、");?>
&nbsp;&nbsp;单张最大<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value/1024;?>
M<span class="fileerror"></span></p>
				</div>
			</div>
		</dd>
  </dl>
	<dl class="clearfix">
    <dt><label for="body">店铺详情：</label></dt>
    <dd>
      <?php echo '<script'; ?>
 id="body" name="body" type="text/plain" style="width:85%;height:500px"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
<?php echo '</script'; ?>
>
    </dd>
  </dl>
  <dl class="fn-clear">
    <dt>营业日：</dt>
    <dd>
        <div style="width: 50%;">
            <input class="fn-hide" id="yingyeTxt" name="weeks" value="<?php echo $_smarty_tpl->tpl_vars['weekDay']->value;?>
" />
        </div>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="opentime">营业时间：</label></dt>
    <dd><input type="text" class="input-large" id="opentime" name="opentime" value="<?php echo $_smarty_tpl->tpl_vars['opentime']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="amount">人均消费：</label></dt>
    <dd><input type="text" class="input-large" id="amount" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="parking">停车位：</label></dt>
    <dd><input type="text" class="input-large" id="parking" name="parking" value="<?php echo $_smarty_tpl->tpl_vars['parking']->value;?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label>特色标签：</label></dt>
    <dd>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <label><input type="checkbox" name="tag[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tag']->value&&in_array($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['tagSel']->value)) {?> checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label>&nbsp;&nbsp;
    <?php } ?>
  </dd>
  <dl class="clearfix">
    <dt><label for="tag_shop">店铺标签：</label></dt>
    <dd>
      <input class="input-xxlarge" type="text" name="tag_shop" id="tag_shop" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['tag_shop']->value;?>
" />
      <span class="input-tips"><s></s>多个请用|分隔</span>
    </dd>
	</dl>
	<dl class="clearfix">
		<dt><label>是否置顶：</label></dt>
		<dd class="radio">
			<label><input type="checkbox" name="isbid" value="1"<?php if ($_smarty_tpl->tpl_vars['isbid']->value==1) {?> checked<?php }?> />置顶</label>
		</dd>
	</dl>
	<?php if ($_smarty_tpl->tpl_vars['isJoin']->value||!$_smarty_tpl->tpl_vars['id']->value) {?>
  <dl class="clearfix">
    <dt><label for="state">店铺状态：</label></dt>
    <dd class="radio">
      <select name="state" id="state" class="input-medium">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['stateList']->value,'selected'=>$_smarty_tpl->tpl_vars['state']->value),$_smarty_tpl);?>

      </select>
    </dd>
  </dl>
	<?php }?>
  <dl class="clearfix">
    <dt><label>认证信息：</label></dt>
    <dd>
		<?php  $_smarty_tpl->tpl_vars['auth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auth']->key => $_smarty_tpl->tpl_vars['auth']->value) {
$_smarty_tpl->tpl_vars['auth']->_loop = true;
?>
		<label><input type="checkbox" name="authattr[]" value="<?php echo $_smarty_tpl->tpl_vars['auth']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['authattr']->value&&in_array($_smarty_tpl->tpl_vars['auth']->value['id'],$_smarty_tpl->tpl_vars['authattr']->value)) {?> checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['auth']->value['typename'];?>
</label>&nbsp;&nbsp;
		<?php } ?>
		<a href="businessAuthAttr.php" class="btn btn-info btn-mini" style="display: inline-block; vertical-align: middle;" id="customRz">自定义认证属性</a>
	</dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="bind_print">是否开启打印机：</label></dt>
    <dd class="radio">
      <select name="bind_print" id="bind_print" class="input-medium">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['bind_printList']->value,'selected'=>$_smarty_tpl->tpl_vars['bind_print']->value),$_smarty_tpl);?>

      </select>
    </dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="print_config">打印机终端号：</label></dt>
    <dd><input type="text" class="input-large" id="print_config_mcode" name="print_config[mcode][]" value="<?php echo $_smarty_tpl->tpl_vars['print_config']->value[0]['mcode'];?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="print_config">打印机密钥：</label></dt>
    <dd><input type="text" class="input-large" id="print_config_msign" name="print_config[msign][]" value="<?php echo $_smarty_tpl->tpl_vars['print_config']->value[0]['msign'];?>
" /></dd>
  </dl>
  <dl class="clearfix">
    <dt><label for="print_state">打印机状态：</label></dt>
    <dd>
      	<?php if ($_smarty_tpl->tpl_vars['bind_print']->value&&$_smarty_tpl->tpl_vars['print_config']->value[0]['mcode']!=''&&$_smarty_tpl->tpl_vars['print_config']->value[0]['msign']!='') {?>
			<?php if ($_smarty_tpl->tpl_vars['print_state']->value==1) {?>
				<p style="padding:4px 0;vertical-align:middle;color:green">在线</p>
			<?php } elseif ($_smarty_tpl->tpl_vars['print_state']->value==2) {?>
				<p style="padding:4px 0;vertical-align:middle;color:red">缺纸</p>
			<?php } elseif ($_smarty_tpl->tpl_vars['print_state']->value==3) {?>
				<p style="padding:4px 0;vertical-align:middle;color:red">离线</p>
			<?php } else { ?>
				<p style="padding:4px 0;vertical-align:middle;color:#ccc">未知</p>
			<?php }?>
		<?php } else { ?>
			<p style="padding:4px 0;vertical-align:middle;color:#ccc">未配置</p>
		<?php }?>
    </dd>
  </dl>
  
  <dl class="clearfix formbtn">
    <dt>&nbsp;</dt>
    <dd><button class="btn btn-large btn-success" type="submit" name="button" id="btnSubmit">确认提交</button></dd>
  </dl>
</form>
<?php echo $_smarty_tpl->tpl_vars['editorFile']->value;?>

<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
