<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-13 10:37:06
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\business-config-form.html" */ ?>
<?php /*%%SmartyHeaderCode:5820171305d5222527c50a4-43047276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9b2ff5fb2d417075d604167b1658574b2d40863' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\business-config-form.html',
      1 => 1553911598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5820171305d5222527c50a4-43047276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'cfg_basehost' => 0,
    'cfg_hideUrl' => 0,
    'cityid' => 0,
    'addrid' => 0,
    'circle' => 0,
    'state' => 0,
    'langData' => 0,
    'logo' => 0,
    'thumbSize' => 0,
    'logoSource' => 0,
    'title' => 0,
    'address' => 0,
    'lng' => 0,
    'lat' => 0,
    'landmark' => 0,
    'tel' => 0,
    'weekDay' => 0,
    'opentime' => 0,
    'wechatqr' => 0,
    'wechatqrSource' => 0,
    'wechatcode' => 0,
    'qq' => 0,
    'body' => 0,
    'bannerArr' => 0,
    'k' => 0,
    'i' => 0,
    'pic' => 0,
    'atlasSize' => 0,
    'cfg_weixinName' => 0,
    'detail_pics' => 0,
    'videoArr' => 0,
    'softSize' => 0,
    'video_pic' => 0,
    'video_picSource' => 0,
    'qj_type' => 0,
    'qj_fileArr' => 0,
    'qj_file' => 0,
    'businessTag_state' => 0,
    'tag' => 0,
    'tag_shopArr' => 0,
    'cfg_mapCity' => 0,
    'site_map' => 0,
    'site_map_apiFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d52225286efc5_43984721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d52225286efc5_43984721')) {function content_5d52225286efc5_43984721($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\include\\tpl\\plugins\\modifier.replace.php';
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/ion.rangeSlider.skinNice.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
css/ui/ion.rangeSlider.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/templates/member/company/css/fabu.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/templates/member/css/business-config.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript">
    var masterDomain = '<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
', staticPath = cfg_staticPath = '<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
';
    var hideFileUrl = <?php echo $_smarty_tpl->tpl_vars['cfg_hideUrl']->value;?>
, atlasSize = 5 * 1024 *1024, atlasMax = 2;

    var service = modelType = "business";
    var detail = {
        cityid: <?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
,
    addrid: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['addrid']->value)===null||$tmp==='' ? 0 : $tmp);?>
,
    circle: '<?php echo $_smarty_tpl->tpl_vars['circle']->value;?>
'
    }
<?php echo '</script'; ?>
>
<style>
    #body, #body .edui-editor {width: 90%!important;}
    .edui-editor-iframeholder {height: 400px!important;}
    #body .edui-default .edui-editor-iframeholder {width: 100%!important;}

    /* 全景专用 */
    .qj360 {position:relative; width:876px; height:136px;}
    .picbg {position:absolute; width:100%; left:0; top:0; z-index:-1;}
    .qj360 .piece li {margin:20px 10px 0 0;}
    .qj360 .piece li .li-rm {margin:-30px -10px 0 0!important;}
    .qj360 .piece li .li-thumb {margin:-2px 0 0 0;}
    .picbg li {cursor:default; width:135px !important; height:126px; padding:0 !important; text-align:center; line-height:25px !important; background:#eee;}

    .tags {border: 1px solid #d8d8d8; border-radius: 5px; padding: 6px 10px; width: 80%;}
    .tags input[type="text"], .tags input[type="text"]:focus {border: 0 none; box-shadow: none; display: inline; line-height: 22px; margin: 0; outline: 0 none; padding: 4px 6px;}
    .tags .tag {background-color: #91b8d0; color: #fff; display: inline-block; font-size: 12px; font-weight: normal; margin-bottom: 3px; margin-right: 3px; padding: 0 22px 0 9px; position: relative; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15); transition: all 0.2s ease 0s; vertical-align: baseline; white-space: nowrap;}
    .tags .tag .close {bottom: 0; color: #fff; float: none; font-size: 12px; line-height: 20px; opacity: 1; position: absolute; right: 0; text-align: center; text-shadow: none; top: 0; width: 18px;}
    .tags .tag .close:hover {background-color: rgba(0, 0, 0, 0.2);}
    .close {color: #000; float: right; font-size: 21px; font-weight: bold; line-height: 1; opacity: 0.2; text-shadow: 0 1px 0 #fff;}
    .close:hover, .close:focus {color: #000; cursor: pointer; opacity: 0.5; text-decoration: none;}
    button.close {background: transparent none repeat scroll 0 0; border: 0 none; cursor: pointer; padding: 0;}
    .tags .tag-warning {background-color: #ffb752;}
    .state0 {padding:0 0 20px 108px;color:#f00;}
</style>

<div class="w-form">
    <?php if ($_smarty_tpl->tpl_vars['state']->value==0||$_smarty_tpl->tpl_vars['state']->value==3) {?><p class="state0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][163];?>
</p><?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['state']->value==2) {?><p class="state0"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][164];?>
</p><?php }?>
    <form name="fabuForm" id="fabuForm" method="post" action="/include/ajax.php?service=business&action=updateStoreConfig">
        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][175];?>
：</dt>
            <dd class="thumb fn-clear listImgBox">
                <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['logo']->value!='') {?> fn-hide<?php }?>" id="filePicker1" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                <?php if ($_smarty_tpl->tpl_vars['logo']->value!='') {?>
                <ul id="listSection1" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_1"><a href='<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['logoSource']->value;?>
" style="max-width:300px;"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
                <?php } else { ?>
                <ul id="listSection1" class="listSection thumblist fn-clear"></ul>
                <?php }?>
                <input type="hidden" name="logo" value="<?php echo $_smarty_tpl->tpl_vars['logoSource']->value;?>
" class="imglist-hidden" id="logo">
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][174];?>
：</dt>
            <dd>
                <input type="text" name="title" class="inp" id="title" size="34" maxlength="60" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][21][128];?>
" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][27];?>
：</dt>
            <dd id="selAddr">
                <div class="sel-group" data-title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][68];?>
">
                    <div class="city-title addrBtn" data-field="addrid" data-ids="<?php echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addrid']->value,'split'=>' '),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['addrid']->value!='') {
echo getPublicParentInfo(array('tab'=>'site_area','id'=>$_smarty_tpl->tpl_vars['addrid']->value,'type'=>'typename','split'=>'/'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][7][2];
}?></div>
                </div>
                <input type="hidden" name="addrid" id="addrid" value="<?php echo $_smarty_tpl->tpl_vars['addrid']->value;?>
" />
                <input type="hidden" name="cityid" id="cityid" value="<?php echo $_smarty_tpl->tpl_vars['cityid']->value;?>
" />
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][35];?>
：</dt>
            <dd>
                <input type="text" name="address" class="inp" id="address" size="50" maxlength="60" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][69];?>
" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" />
                <img src="/static/images/admin/markditu.jpg" id="mark" style="float: left; cursor: pointer; margin-left: 10px;" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][92];?>
">
                <input type="hidden" name="lng" id="lng" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
">
                <input type="hidden" name="lat" id="lat" value="<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
">
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][165];?>
:</dt>
            <dd>
                <input type="text" name="landmark" class="inp" id="landmark" size="34" maxlength="60" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][166];?>
" value="<?php echo $_smarty_tpl->tpl_vars['landmark']->value;?>
" />
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][56];?>
:</dt>
            <dd>
                <input type="text" name="tel" class="inp" id="tel" size="34" maxlength="60" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][900];?>
" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" />
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][50];?>
：</dt>
            <dd>
                <div style="width: 50%;">
                    <input class="fn-hide" id="yingyeTxt" name="weeks" value="<?php echo $_smarty_tpl->tpl_vars['weekDay']->value;?>
" />
                </div>
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][15];?>
：</dt>
            <dd>
                <div style="width: 80%;">
                    <input class="fn-hide" id="opentime" name="opentime" value="<?php echo $_smarty_tpl->tpl_vars['opentime']->value;?>
" />
                </div>
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][184];?>
：</dt>
            <dd class="thumb fn-clear listImgBox">
                <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['wechatqr']->value!='') {?> fn-hide<?php }?>" id="filePicker2" data-type="logo"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                <?php if ($_smarty_tpl->tpl_vars['wechatqr']->value!='') {?>
                <ul id="listSection2" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_0_2"><a href='<?php echo $_smarty_tpl->tpl_vars['wechatqr']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['wechatqr']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['wechatqrSource']->value;?>
" style="max-width:300px;"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
                <?php } else { ?>
                <ul id="listSection2" class="listSection thumblist fn-clear"></ul>
                <?php }?>
                <input type="hidden" name="wechatqr" value="<?php echo $_smarty_tpl->tpl_vars['wechatqrSource']->value;?>
" class="imglist-hidden" id="wechatqr">
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][183];?>
：</dt>
            <dd><input type="text" name="wechatcode" class="inp" id="wechatcode" size="34" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['wechatcode']->value;?>
" /></dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][30];?>
：</dt>
            <dd><input type="text" name="qq" class="inp" id="qq" size="34" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][900];?>
" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
" /></dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][26][54];?>
：</dt>
            <dd>
                <?php echo '<script'; ?>
 id="body" name="body" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
<?php echo '</script'; ?>
>
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][16][167];?>
：</dt>
            <dd class="listImgBox fn-hide">
                <div class="list-holder">
                    <ul id="listSection3" class="fn-clear listSection fn-hide"<?php if ($_smarty_tpl->tpl_vars['bannerArr']->value) {?> style="display: block;"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['bannerArr']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bannerArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>
                    <li class="fn-clear" id="WU_FILE_3_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                        <a class="li-rm" href="javascript:;">×</a>
                        <div class="li-thumb" style="display: block;">
                            <div class="r-progress"><s></s></div>
                            <span class="ibtn">
                                            <a href="javascript:;" class="Lrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][43];?>
"></a>
                                            <a href="javascript:;" class="Rrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][44];?>
"></a>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['path'];?>
" target="_blank" class="enlarge" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][45];?>
"></a>
                                        </span>
                            <span class="ibg"></span>
                            <img data-val="<?php echo $_smarty_tpl->tpl_vars['pic']->value['source'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['pic']->value['source'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pic']->value['path'];?>
" />
                        </div>
                    </li>
                    <?php } ?>
                    <?php }?>
                    </ul>
                    <input type="hidden" name="banner" value="" class="imglist-hidden">
                </div>
                <div class="btn-section fn-clear">
                    <div class="wxUploadObj fn-clear">
                        <div class="uploadinp filePicker" id="filePicker3" data-type="album" data-count="5" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist=""><div id="flasHolder"></div><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][168];?>
</span></div>
                        <span class="upload-split fn-hide"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][0];?>
</span>
                        <dl class="wxUpload fn-hide fn-clear">
                            <dt><img id="wxUploadImg" /></dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][362];?>
<em class="wx"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][139];?>
</em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][140];?>
<br /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][846];
echo $_smarty_tpl->tpl_vars['cfg_weixinName']->value;
echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][141];?>
<br /><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][142];?>
<em class="fs"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][139];?>
</em><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][27][143];?>
</dd>
                        </dl>
                    </div>
                    <div class="upload-tip">
                        <p><a href="javascript:;" class="fn-hide deleteAllAtlas"<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?> style="display: inline-block;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][79];?>
</a>
                        	&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][10],'1',($_smarty_tpl->tpl_vars['atlasSize']->value/1024)),'2','5');?>
 <span class="fileerror"></span></p>
                    </div>
                </div>
            </dd>
        </dl>

        <dl class="fn-clear uploadVideo">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][195];?>
：</dt>
            <dd class="listImgBox fn-clear">
                <div class="list-holder">
                    <ul id="listSection4" class="fn-clear listSection">
                        <?php if ($_smarty_tpl->tpl_vars['videoArr']->value) {?>
                        <li id="WU_FILE_40" class="pubitem complete">
                            <video class="video-js" id="WU_FILE_41" src="<?php echo $_smarty_tpl->tpl_vars['videoArr']->value[0]['path'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['videoArr']->value[0]['source'];?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['videoArr']->value[0]['source'];?>
"></video>
                            <div class="file-panel li-rm"><span class="cancel"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][8];?>
删除</span></div>
                            <span class="player"></span>
                        </li>
                        <?php }?>
                    </ul>
                    <input type="hidden" id="video" name="video" value="<?php echo $_smarty_tpl->tpl_vars['videoArr']->value[0]['source'];?>
" class="imglist-hidden">
                </div>
                <div class="btn-section fn-clear">
                    <div class="uploadinp filePicker" id="filePicker4" data-extensions="mp4" data-mime="video/mp4" data-type="filenail" data-type-real="video" data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['softSize']->value;?>
" data-imglist=""><div id="flasHolder4"></div><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][196];?>
</span><em>+</em></div>
                </div>
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][197];?>
：</dt>
            <dd class="thumb fn-clear listImgBox">
                <div class="uploadinp filePicker thumbtn<?php if ($_smarty_tpl->tpl_vars['video_pic']->value!='') {?> fn-hide<?php }?>" id="filePicker5" data-type="thumb"  data-count="1" data-size="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value;?>
" data-imglist=""><div></div><span></span></div>
                <?php if ($_smarty_tpl->tpl_vars['video_pic']->value!='') {?>
                <ul id="listSection5" class="listSection thumblist fn-clear" style="display:inline-block;"><li id="WU_FILE_5_1"><a href='<?php echo $_smarty_tpl->tpl_vars['video_pic']->value;?>
' target="_blank" title=""><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['video_pic']->value;?>
" data-val="<?php echo $_smarty_tpl->tpl_vars['video_picSource']->value;?>
" style="max-width:300px;"/></a><a class="reupload li-rm" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][176];?>
</a></li></ul>
                <?php } else { ?>
                <ul id="listSection5" class="listSection thumblist fn-clear"></ul>
                <?php }?>
                <input type="hidden" name="video_pic" value="<?php echo $_smarty_tpl->tpl_vars['video_picSource']->value;?>
" class="imglist-hidden" id="video_pic">
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][18][51];?>
：</dt>
            <dd class="fn-clear">
                <div class="radio">
                    <span data-id="0"<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==0) {?> class="curr"<?php }?>>图片</span>
                    <span data-id="1"<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==1) {?> class="curr"<?php }?>>URL</span>
                    <input type="hidden" name="qj_type" id="qj_type" value="<?php echo $_smarty_tpl->tpl_vars['qj_type']->value;?>
">
                </div>
            </dd>
        </dl>

        <dl id="qj_0" class="fn-clear fn-hide"<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==0) {?> style="display: block;"<?php }?>>
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][50];?>
：</dt>
            <dd class="listImgBox fn-hide">
                <div class="btn-section fn-clear">
                    <div class="wxUploadObj fn-clear">
                        <div class="uploadinp filePicker" id="filePicker6" data-type="quanj" data-count="6" data-size="<?php echo $_smarty_tpl->tpl_vars['atlasSize']->value;?>
" data-imglist=""><div id="flasHolder6"></div><span><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][168];?>
</span></div>
                        <div class="upload-tip">
                            <p><a href="javascript:;" class="fn-hide deleteAllAtlas"<?php if ($_smarty_tpl->tpl_vars['detail_pics']->value) {?> style="display: inline-block;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][79];?>
</a>
                            	&nbsp;&nbsp;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][10],'1',($_smarty_tpl->tpl_vars['atlasSize']->value/1024)),'2','6');?>
 <span class="fileerror"></span></p>
                        </div>
                    </div>
                </div>

                <div class="list-holder qj360">
                    <ul id="listSection6" class="fn-clear listSection fn-hide piece"<?php if ($_smarty_tpl->tpl_vars['bannerArr']->value) {?> style="display: block;"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['qj_fileArr']->value&&$_smarty_tpl->tpl_vars['qj_type']->value==0) {?>
                    <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['qj_fileArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['pic']->value['source']) {?>
                    <li class="fn-clear" id="WU_FILE_6_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                        <a class="li-rm" href="javascript:;">×</a>
                        <div class="li-thumb" style="display: block;">
                            <div class="r-progress"><s></s></div>
                            <span class="ibtn">
                                                    <a href="javascript:;" class="Lrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][43];?>
"></a>
                                                    <a href="javascript:;" class="Rrotate" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][44];?>
"></a>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['path'];?>
" target="_blank" class="enlarge" title="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][23][45];?>
"></a>
                                                </span>
                            <span class="ibg"></span>
                            <img data-val="<?php echo $_smarty_tpl->tpl_vars['pic']->value['source'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['pic']->value['source'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pic']->value['path'];?>
" />
                        </div>
                    </li>
                    <?php }?>
                    <?php } ?>
                    <?php }?>
                    </ul>
                    <ul class="picbg" data-listidx="1"><li style="cursor: move;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][55];?>
</li><li style="cursor: move;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][16];?>
</li><li style="cursor: move;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][56];?>
</li><li style="cursor: move;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][15];?>
</li><li style="cursor: move;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][57];?>
</li><li style="cursor: move;"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][13][58];?>
</li></ul>
                    <input type="hidden" name="qj_pics" id="qj_pics" value="<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==0) {
echo $_smarty_tpl->tpl_vars['qj_file']->value;
}?>" class="imglist-hidden">
                </div>
            </dd>
        </dl>

        <dl id="qj_1" class="fn-clear fn-hide"<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==1) {?> style="display: block;"<?php }?>>
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][479];?>
：</dt>
            <dd>
                <input type="text" name="qj_url" class="inp" id="qj_url" size="60" maxlength="60" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][20][122];?>
" value="<?php if ($_smarty_tpl->tpl_vars['qj_type']->value==1) {
echo $_smarty_tpl->tpl_vars['qj_file']->value;
}?>" />
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][901];?>
：</dt>
            <dd>
                <div class="checkbox">
                    <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['businessTag_state']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                    <label><input type="checkbox" name="tag[]" value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['tag']->value['active']) {?> checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</label>
                    <?php } ?>
                </div>
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][902];?>
：</dt>
            <dd>
                <div class="tags" id="tags">
                    <?php if ($_smarty_tpl->tpl_vars['tag_shopArr']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_shopArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                    <span class="tag" data-val="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
<button class="close" type="button">×</button></span>
                    <?php } ?>
                    <?php }?>
                    <input id="tag_shop" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][903];?>
" value="" name="tag_shop" style="display: none;"/>
                    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][19][903];?>
" class="tags_enter" autocomplete="off"/>
                </div>
            </dd>
        </dl>

        <dl class="fn-clear">
            <dt>&nbsp;</dt>
            <dd><button class="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][63];?>
</button></dd>
        </dl>

    </form>
</div>


<div class="map-pop" id="markPopMap">
    <a href="javascript:;" class="pop-close">&times;</a>
    <div class="pop-border"></div>
    <div class="pop-main">
        <div class="pop-title"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][92];?>
</div>
        <div class="pop-con">
            <iframe name="markDitu" id="markDitu" frameborder="0"></iframe>
            <div class="btns"><a href="javascript:;" id="okPop"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][1];?>
</a><a href="javascript:;" id="cloPop"><?php echo $_smarty_tpl->tpl_vars['langData']->value['siteConfig'][6][12];?>
</a></div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    var map_city = '<?php echo $_smarty_tpl->tpl_vars['cfg_mapCity']->value;?>
', site_map = "<?php echo $_smarty_tpl->tpl_vars['site_map']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_map_apiFile']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/jquery.dragsort-0.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicUpload.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/publicAddr.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
js/ui/ion.rangeSlider-2.2.min.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/include/ueditor/ueditor.all.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_basehost']->value;?>
/templates/member/js/business-config.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
><?php }} ?>
