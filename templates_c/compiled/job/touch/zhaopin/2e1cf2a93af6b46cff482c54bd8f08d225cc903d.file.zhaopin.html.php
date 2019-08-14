<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-03 12:36:21
         compiled from "/www/wwwroot/wx.ziyousuda.com/templates/job/touch/151/zhaopin.html" */ ?>
<?php /*%%SmartyHeaderCode:13796896125d450f45abb9d1-71869933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e1cf2a93af6b46cff482c54bd8f08d225cc903d' => 
    array (
      0 => '/www/wwwroot/wx.ziyousuda.com/templates/job/touch/151/zhaopin.html',
      1 => 1564474166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13796896125d450f45abb9d1-71869933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_shortname' => 0,
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
    'cfg_basehost' => 0,
    'job_channelDomain' => 0,
    'cfg_hideUrl' => 0,
    'siteCityInfo' => 0,
    'cfg_cookiePre' => 0,
    'type' => 0,
    'page' => 0,
    'pageInfo' => 0,
    'wxjssdk_appId' => 0,
    'wxjssdk_timestamp' => 0,
    'wxjssdk_nonceStr' => 0,
    'wxjssdk_signature' => 0,
    'job_description' => 0,
    'job_logoUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d450f45b12774_50200489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d450f45b12774_50200489')) {function content_5d450f45b12774_50200489($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<title>招聘职位</title>
<meta name="keywords" content="找工作,招聘网,招聘信息,互联网招聘" />
<meta name="description" content="找工作,招聘网,求职网,互联网招聘,<?php echo $_smarty_tpl->tpl_vars['cfg_shortname']->value;?>
招聘是互联网领域垂直招聘网站,互联网职业机会尽在<?php echo $_smarty_tpl->tpl_vars['cfg_shortname']->value;?>
招聘" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/core/touchBase.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
css/position.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/touchScale.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/core/zepto.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', channelDomain = '<?php echo $_smarty_tpl->tpl_vars['job_channelDomain']->value;?>
', staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';

var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, cityid = <?php echo $_smarty_tpl->tpl_vars['siteCityInfo']->value['cityid'];?>
;
var cookiePre = '<?php echo $_smarty_tpl->tpl_vars['cfg_cookiePre']->value;?>
', detailListId = 'maincontent';
<?php echo '</script'; ?>
>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../../../siteConfig/touch_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('headTheme'=>"absolute",'pageTitle'=>"职位列表"), 0);?>


  <!-- 筛选框 -->
  <div class="choose">
      <div class="choose-tab">
        <ul>
          <li data-type="addr" class="tab-addrid"><a href="javascript:;"><i><span>工作地点</span></i></a></li>
          <li data-type="industry" class="tab-industry"><a href="javascript:;"><i><span>行业领域</span></i></a></li>
          <li data-type="jtype" class="tab-jtype"><a href="javascript:;"><i><span>职位类型</span></i></a></li>
          <li><a href="javascript:;" ><i><span>更多</span></i></a></li>
        </ul>
      </div>
      <div class="choose-box">
        <div class="choose-local dn" id="area-box">
          <div class="choose-stage-l">
            <div id="choose-area">
              <div class="load">获取中...</div>
            </div>
          </div>
          <div class="choose-stage-r">
            <div id="choose-area-second">
              <div class="load">获取中...</div>
            </div>
          </div>
        </div>
        <!--行业类型-->
        <div class="choose-local dn" id="info-box">
          <div class="choose-stage-l">
            <div id="choose-info">
              <div class="load">获取中...</div>
            </div>
          </div>
          <div class="choose-stage-r">
            <div id="choose-info-second">
              <div class="load">获取中...</div>
            </div>
          </div>
        </div>
        <!--职位类型-->
        <div class="choose-local dn" id="sort-box">
          <div class="choose-stage-l">
            <div id="choose-sort">
              <div class="load">获取中...</div>
            </div>
          </div>
          <div class="choose-stage-c">
            <div id="choose-sort-second">
              <div class="load">获取中...</div>
            </div>
          </div>
          <div class="choose-stage-th" id="choose-stage-th">
            <div id="choose-sort-third">
              <div class="load">获取中...</div>
            </div>
          </div>
        </div>
        <div class="choose-local dn" id="choose-more-second">
          <div class="choose-more">
            <div id="choose-more" class="gd">
              <div class="mainList">
                <p>职位性质</p>
                <div class="gdList"  data-type="nature">
                  <span data-id="-1">不限</span>
                  <span data-id="0">全职</span>
                  <span data-id="1">兼职</span>
                  <span data-id="2">实习</span>
                  <span data-id="3">临时</span>
                </div>
              </div>
              <div class="mainList">
                <p>公司性质</p>
                <div class="gdList"  data-type="gnature">
                  <span data-id="-1">不限</span>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"5")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <span data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
              </div>
              <div class="mainList">
                <p>公司规模</p>
                <div class="gdList" data-type="scale">
                  <span data-id="-1">不限</span>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"6")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <span data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
              </div>
              <div class="mainList">
                <p>薪资待遇</p>
                <div class="gdList" data-type="salary">
                  <span data-id="-1">不限</span>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"3")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <span data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
              </div>
              <div class="mainList">
                <p>工作经验</p>
                <div class="gdList" data-type="experience">
                  <span data-id="-1">不限</span>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"1")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <span data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
              </div>
              <div class="mainList">
                <p>学历要求</p>
                <div class="gdList"  data-type="educational">
                  <span data-id="-1">不限</span>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"2")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <span data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</span>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
              </div>
              <div class="conClick">
                <div class="rest"><a href="javascript:;">重置</a></div>
                <div class="confirm"><a href="javascript:;">确定</a></div>
              </div>
            </div>
          </div>
          <!-- <div class="more-box dn">
            <div id="choose-more-second">
              <div class="h100">
                <ul>
                  <li data-id="-1">不限</li>
                  <li data-id="0">全职</li>
                  <li data-id="1">兼职</li>
                  <li data-id="2">临时</li>
                  <li data-id="3">实习</li>
                </ul>
                
                <ul>
                  <li data-id="-1">不限</li>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"1")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
                
                <ul>
                  <li data-id="-1">不限</li>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"2")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
                
                <ul>
                  <li data-id="-1">不限</li>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"3")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
                
                <ul>
                  <li data-id="-1">不限</li>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"5")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
                
                <ul>
                  <li data-id="-1">不限</li>
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('job', array('action'=>"item",'return'=>"type",'type'=>"6")); $_block_repeat=true; echo job(array('action'=>"item",'return'=>"type",'type'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <li data-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</li>
                  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo job(array('action'=>"item",'return'=>"type",'type'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
              </div>
            </div>
            <div class="back">
              <a href="javascript:;">返回</a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  <!-- 筛选框 end-->

  <!-- 搜索框 -->
<div class="search-box fn-clear">
  <div class="search">
    <i></i>
    <input type="text" id="search_keyword" class="txt_search" value="" autocomplete="off" placeholder="请输入您要搜索的职位关键词">
  </div>
  <div class="search-btn"><a href="javaScript:;">搜索</a></div>
</div>

<!-- 列表 -->
<div class="positionList">
  <ul></ul>
</div>



    <div class="mask"></div>



<?php echo '<script'; ?>
>
var atpage = '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
',
    totalCount = <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalCount']==0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['pageInfo']->value['totalCount'];
}?>,
    totalPage = <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['totalPage']==0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['pageInfo']->value['totalPage'];
}?>,
    pageSize = 20;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
  var wxconfig = {
    "appId": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_appId']->value;?>
',
    "timestamp": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_timestamp']->value;?>
',
    "nonceStr": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_nonceStr']->value;?>
',
    "signature": '<?php echo $_smarty_tpl->tpl_vars['wxjssdk_signature']->value;?>
',
    "description": '<?php echo $_smarty_tpl->tpl_vars['job_description']->value;?>
',
    "title": '职位列表',
    "imgUrl": '<?php echo $_smarty_tpl->tpl_vars['job_logoUrl']->value;?>
',
    "link": '<?php echo getUrlPath(array('service'=>'job','template'=>'zhaopin'),$_smarty_tpl);?>
',
  };
  document.write(unescape("%3Cscript src='<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicShare.js?v="+~(-new Date())+"'type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/position.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/detail2list.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
