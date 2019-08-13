<?php
/**
 * 后台所有功能（同时用于导航条、功能搜索、权限设置）
 *
 * @version        $Id: config_permission.php 2013-12-29 下午22:07:19 $
 * @package        HuoNiao.Member
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */
$menuData[0] = array(
    'menuName' => '配置',
    'menuId' => 'siteConfig',
    'subMenu' => array(
        0 => array(
            'menuName' => '基本设置',
            'subMenu' => array(
                0 => array(
                    'menuName' => '系统基本参数',
                    'menuUrl' => 'siteConfig.php',
                    'menuInfo' => '配置系统基本信息，首页风格、邮件配置、上传设置、远程附件设置、水印设置'
                ) ,
                1 => array(
                    'menuName' => '网站安全设置',
                    'menuUrl' => 'siteSafe.php',
                    'menuInfo' => '配置系统安全信息，保留子级域名、IP访问限制、会员注册开关、敏感词过滤、验证码设置、安全问题设置'
                ) ,
                2 => array(
                    'menuName' => '城市分站管理',
                    'menuUrl' => 'siteCity.php',
                    'menuInfo' => '开通多城市功能，配置城市管理员',
                    'menuChild' => array(
                        0 => array(
                            'menuName' => '高级设置',
                            'menuMark' => 'siteCityAdvanced'
                        )
                    )
                ) ,
                3 => array(
                    'menuName' => '支付方式设置',
                    'menuUrl' => 'sitePayment.php',
                    'menuInfo' => '配置系统可用的支付方式'
                ) ,
                4 => array(
                    'menuName' => '计划任务管理',
                    'menuUrl' => 'siteCron.php',
                    'menuInfo' => '计划任务是一项使系统在规定时间自动执行某些特定任务的功能，在需要的情况下，您也可以方便的将其用于站点功能的扩展。<br />计划任务是与系统核心紧密关联的功能特性，不当的设置可能造成站点功能的隐患，严重时可能导致站点无法正常运行，因此请务必仅在您对计划任务特性十分了解，并明确知道正在做什么、有什么样后果的时候才自行添加或修改任务项目。<br />此处和其他功能不同，本功能中完全按照站点系统默认时差对时间进行设定和显示，而不会依据某一用户或管理员的时差设定而改变显示或设置的时间值。'
                ) ,
                5 => array(
                    'menuName' => '操作日志管理',
                    'menuUrl' => 'siteLogs.php',
                    'menuInfo' => '网站管理员后台操作记录',
                    'city' => 1
                ) ,
                6 => array(
                    'menuName' => '网站地区设置',
                    'menuUrl' => 'siteAddr.php',
                    'menuInfo' => '配置网站常用地区信息，主要用于会员基本资料、收货地址等'
                ) ,
                7 => array(
                    'menuName' => '公交地铁设置',
                    'menuUrl' => 'siteSubway.php',
                    'menuInfo' => '配置城市地铁交通站点名称，主要用于团购、房产等模块'
                ) ,
                8 => array(
                    'menuName' => '内存优化配置',
                    'menuUrl' => 'siteCache.php',
                    'menuInfo' => '提升程序性能和服务器的负载能力'
                ) ,
                9 => array(
                    'menuName' => '清除页面缓存',
                    'menuUrl' => 'siteClearCache.php',
                    'menuInfo' => '自定义清除页面缓存文件'
                )
            )
        ) ,
        1 => array(
            'menuName' => '系统工具',
            'subMenu' => array(
                0 => array(
                    'menuName' => '系统模块管理',
                    'menuUrl' => 'moduleList.php',
                    'menuInfo' => '可对系统已安装模块卸载、启用、停用，也可安装官方提供的其它模块',
                    'menuChild' => array(
                        0 => array(
                            'menuName' => '安装新模块',
                            'menuMark' => 'installMoudule'
                        ) ,
                        1 => array(
                            'menuName' => '修改模块',
                            'menuMark' => 'modifyMoudule'
                        ) ,
                        2 => array(
                            'menuName' => '卸载模块',
                            'menuMark' => 'uninstallMoudule'
                        )
                    )
                ) ,
                1 => array(
                    'menuName' => '模块域名管理',
                    'menuUrl' => 'siteModuleDomain.php',
                    'menuInfo' => '批量修改模块域名配置信息'
                ) ,
                2 => array(
                    'menuName' => '商家域名管理',
                    'menuUrl' => 'siteBusinessDomain.php',
                    'menuInfo' => '批量管理商家域名配置信息',
                    'city' => 1
                ) ,
                3 => array(
                    'menuName' => '消息通知配置',
                    'menuUrl' => 'siteNotify.php',
                    'menuInfo' => '邮件通知、短信通知、微信公众号通知、网页即时消息通知'
                ) ,
                4 => array(
                    'menuName' => '数据库内容替换',
                    'menuUrl' => 'dbReplace.php',
                    'menuInfo' => '可指定表、字段名进行替换操作操作'
                ) ,
                5 => array(
                    'menuName' => '执行SQL语句',
                    'menuUrl' => 'dbQuery.php',
                    'menuInfo' => '可针对每个数据表执行单行或者多行的SQL语句'
                ) ,
                6 => array(
                    'menuName' => '数据库备份/还原',
                    'menuUrl' => 'dbData.php',
                    'menuInfo' => '对数据库进行备份和还原'
                ) ,
                7 => array(
                    'menuName' => '网站论坛整合',
                    'menuUrl' => 'siteBBS.php',
                    'menuInfo' => '支持Discuz!、PHPwind等论坛'
                ) ,
                8 => array(
                    'menuName' => '网站整合登录',
                    'menuUrl' => 'loginConnect.php',
                    'menuInfo' => '支持QQ、新浪微博、人人网、腾讯微博、支付宝、百度、开心网等平台'
                )
            )
        ) ,
        2 => array(
            'menuName' => '其它设置',
            'subMenu' => array(
                0 => array(
                    'menuName' => '热门关键词管理',
                    'menuUrl' => 'hotKeywords.php',
                    'menuInfo' => '维护模块热门关键词',
                    'city' => 1
                ) ,
                1 => array(
                    'menuName' => '搜索关键词维护',
                    'menuUrl' => 'searchKeywords.php',
                    'menuInfo' => '维护网站搜索的关键词',
                    'city' => 1
                ) ,
                2 => array(
                    'menuName' => '单页文档管理',
                    'menuUrl' => 'siteSingel.php?action=singel',
                    'menuInfo' => '关于我们、联系我们、网站介绍等相关信息'
                ) ,
                3 => array(
                    'menuName' => '网站公告设置',
                    'menuUrl' => 'siteNotice.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                4 => array(
                    'menuName' => '帮助信息管理',
                    'menuUrl' => 'siteHelps.php',
                    'menuInfo' => '网站帮助、常见问题等信息'
                ) ,
                5 => array(
                    'menuName' => '网站协议管理',
                    'menuUrl' => 'siteSingel.php?action=agree',
                    'menuInfo' => '会员注册协议、充值提现协议、现金积分兑换等相关协议'
                ) ,
                6 => array(
                    'menuName' => '网站广告设置',
                    'menuUrl' => 'advList.php?action=siteConfig',
                    'menuInfo' => '管理网站大首页及公共页面的所有广告',
                    'city' => 1
                ) ,
                7 => array(
                    'menuName' => '首页友情链接',
                    'menuUrl' => 'friendLink.php?action=siteConfig',
                    'menuInfo' => '网站大首页友情链接',
                    'city' => 1
                ) ,
                8 => array(
                    'menuName' => '举报管理',
                    'menuUrl' => 'siteComplain.php',
                    'menuInfo' => '管理网站所有举报信息。',
                    'city' => 1
                ),
                9 => array(
                    'menuName' => '意见反馈管理',
                    'menuUrl' => 'suggestion.php',
                    'menuInfo' => '管理网站所有意见反馈信息。',
                    'city' => 1
                )
            )
        ) ,
        3 => array(
            'menuName' => '邮件系统',
            'subMenu' => array(
                0 => array(
                    'menuName' => '邮箱账号管理',
                    'menuUrl' => 'emailAccount.php',
                    'menuInfo' => '管理系统发送邮件的帐号'
                ) ,
                // 1 => array(
                //     'menuName' => '邮件模板管理',
                //     'menuUrl' => 'mailTemp.php',
                //     'menuInfo' => ''
                // ) ,
                2 => array(
                    'menuName' => '邮件发送日志',
                    'menuUrl' => 'siteMessageLog.php?action=email',
                    'menuInfo' => '邮件发送成功和失败的历史记录'
                ) ,
                3 => array(
                    'menuName' => '手动发送邮件',
                    'menuUrl' => 'siteSendMail.php',
                    'menuInfo' => '支持群发、可指定邮件标题、自定义邮件内容'
                )
            )
        ) ,
        4 => array(
            'menuName' => '短信系统',
            'subMenu' => array(
                0 => array(
                    'menuName' => '短信平台管理',
                    'menuUrl' => 'smsAccount.php',
                    'menuInfo' => '管理第三方短信发送渠道'
                ) ,
                // 1 => array(
                //     'menuName' => '短信模板管理',
                //     'menuUrl' => 'smsTemp.php',
                //     'menuInfo' => ''
                // ) ,
                2 => array(
                    'menuName' => '短信发送日志',
                    'menuUrl' => 'siteMessageLog.php?action=phone',
                    'menuInfo' => '短信发送成功和失败的历史记录'
                ) ,
                3 => array(
                    'menuName' => '发送手机短信',
                    'menuUrl' => 'smsSend.php',
                    'menuInfo' => '手动发送手机短信，支付群发'
                )
            )
        )
    )
);
$menuData[1] = array(
    'menuName' => '用户',
    'menuId' => 'member',
    'subMenu' => array(
        0 => array(
            'menuName' => '超级管理',
            'subMenu' => array(
                0 => array(
                    'menuName' => '管理组',
                    'menuUrl' => 'adminGroup.php',
                    'menuInfo' => '',
                    'menuChild' => array(
                        0 => array(
                            'menuName' => '添加管理组',
                            'menuMark' => 'addAdminGroup',
                        ) ,
                        1 => array(
                            'menuName' => '修改管理组',
                            'menuMark' => 'modifyAdminGroup',
                        ) ,
                        2 => array(
                            'menuName' => '删除管理组',
                            'menuMark' => 'delAdminGroup',
                        ) ,
                        3 => array(
                            'menuName' => '配置管理组权限',
                            'menuMark' => 'adminGroupPerm',
                        )
                    )
                ) ,
                1 => array(
                    'menuName' => '管理员列表',
                    'menuUrl' => 'adminList.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                2 => array(
                    'menuName' => '添加管理员',
                    'menuUrl' => 'adminListAdd.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                3 => array(
                    'menuName' => '会员封面背景',
                    'menuUrl' => 'memberCoverBg.php',
                    'menuInfo' => '管理会员中心首页自定义封面背景图片',
                    'menuChild' => array(
                        0 => array(
                            'menuName' => '管理图片分类',
                            'menuMark' => 'memberCoverBgType'
                        ) ,
                        1 => array(
                            'menuName' => '添加新背景',
                            'menuMark' => 'memberCoverBgAdd'
                        ) ,
                        2 => array(
                            'menuName' => '修改背景图片',
                            'menuMark' => 'memberCoverBgEdit'
                        ) ,
                        3 => array(
                            'menuName' => '删除背景图片',
                            'menuMark' => 'memberCoverBgDel'
                        )
                    )
                )
            )
        ) ,
        1 => array(
            'menuName' => '用户等级',
            'subMenu' => array(
                0 => array(
                    'menuName' => '等级列表',
                    'menuUrl' => 'memberLevelList.php',
                    'menuInfo' => '',
                ) ,
                1 => array(
                    'menuName' => '费用设置',
                    'menuUrl' => 'memberLevelCost.php',
                    'menuInfo' => ''
                ) ,
                2 => array(
                    'menuName' => '特权设置',
                    'menuUrl' => 'memberLevelAuth.php',
                    'menuInfo' => ''
                )
            )
        ) ,
        2 => array(
            'menuName' => '用户管理',
            'subMenu' => array(
                0 => array(
                    'menuName' => '用户列表',
                    'menuUrl' => 'memberList.php',
                    'menuInfo' => '',
                    'city' => 1,
                    'menuChild' => array(
                        0 => array(
                            'menuName' => '新增新用户',
                            'menuMark' => 'memberAdd',
                            'city' => 1
                        ) ,
                        1 => array(
                            'menuName' => '修改用户信息',
                            'menuMark' => 'memberEdit',
                            'city' => 1
                        ) ,
                        2 => array(
                            'menuName' => '删除用户',
                            'menuMark' => 'memberDel',
                            'city' => 1
                        ) ,
                        3 => array(
                            'menuName' => '用户积分管理',
                            'menuMark' => 'jfMember',
                            'city' => 1,
                            'menuChild' => array(
                                0 => array(
                                    'menuName' => '变动积分',
                                    'menuMark' => 'editjfMember',
                                    'city' => 1
                                ) ,
                                1 => array(
                                    'menuName' => '删除变动记录',
                                    'menuMark' => 'deljfMember',
                                    'city' => 1
                                )
                            )
                        ) ,
                        4 => array(
                            'menuName' => '帐户余额管理',
                            'menuMark' => 'moneyMember',
                            'city' => 1,
                            'menuChild' => array(
                                0 => array(
                                    'menuName' => '余额变动',
                                    'menuMark' => 'editMoneyMember',
                                    'city' => 1
                                ) ,
                                1 => array(
                                    'menuName' => '删除变动记录',
                                    'menuMark' => 'delMoneyMember',
                                    'city' => 1
                                )
                            )
                        )
                    )
                ) ,
                1 => array(
                    'menuName' => '消息管理',
                    'menuUrl' => 'memberLetter.php',
                    'menuInfo' => ''
                ) ,
                2 => array(
                    'menuName' => '会员同步',
                    'menuUrl' => 'memberSync.php',
                    'menuInfo' => ''
                ) ,
                3 => array(
                    'menuName' => '消费排行',
                    'menuUrl' => 'memberStatistics.php',
                    'menuInfo' => '',
                    'city' => 1
                )
            )
        ) ,
        3 => array(
            'menuName' => '财务管理',
            'subMenu' => array(
                0 => array(
                    'menuName' => '结算设置',
                    'menuUrl' => 'settlement.php',
                    'menuInfo' => '打赏结算、商家佣金比例、结算时间等设置'
                ) ,
                1 => array(
                    'menuName' => '提现管理',
                    'menuUrl' => 'withdraw.php',
                    'menuInfo' => ''
                ) ,
                2 => array(
                    'menuName' => '刷新置顶配置',
                    'menuUrl' => 'refreshTop.php',
                    'menuInfo' => ''
                ) ,
                3 => array(
                    'menuName' => '现金消费记录',
                    'menuUrl' => 'moneyLogs.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                4 => array(
                    'menuName' => '积分使用记录',
                    'menuUrl' => 'pointsLogs.php',
                    'menuInfo' => '',
                    'city' => 1
                )
            )
        ) ,
        4 => array(
            'menuName' => '签到系统',
            'subMenu' => array(
                0 => array(
                    'menuName' => '签到规则',
                    'menuUrl' => 'qiandaoConfig.php',
                    'menuInfo' => ''
                ) ,
                1 => array(
                    'menuName' => '签到记录',
                    'menuUrl' => 'qiandaoRecord.php',
                    'menuInfo' => '',
                    'city' => 1
                )
            )
        ) ,
        5 => array(
            'menuName' => '积分系统',
            'subMenu' => array(
                0 => array(
                    'menuName' => '积分设置',
                    'menuUrl' => 'pointsConfig.php',
                    'menuInfo' => ''
                )
            )
        ) ,
        6 => array(
            'menuName' => '分销系统',
            'subMenu' => array(
                0 => array(
                    'menuName' => '分销设置',
                    'menuUrl' => 'fenxiaoConfig.php',
                    'menuInfo' => ''
                ),
                1 => array(
                    'menuName' => '分销商',
                    'menuUrl' => 'fenxiaoUser.php',
                    'menuInfo' => ''
                )
            )
        )
    )
);

$moduleList = array();
$sql = $dsql->SetQuery("SELECT `title`, `subject`, `name`, `subnav` FROM `#@__site_module` WHERE `state` = 0 AND `type` = 0 AND `parentid` != 0 ORDER BY `weight`");
$result = $dsql->dsqlOper($sql, "results");
if($result){
	foreach($result as $f_key => $f_val){
		$moduleList[$f_key]['menuName'] = $f_val['subject'] ? $f_val['subject'] : $f_val['title'];
		$moduleList[$f_key]['menuId'] = $f_val['name'];
		$moduleList[$f_key]['subMenu'] = objtoarr(json_decode($f_val['subnav']));
	}
}

$menuData[2] = array(
    'menuName' => '模块',
    'subMenu' => $moduleList
);




// $menuData[3] = array(
//     'menuName' => '手机',
//     'menuId' => 'mobile',
//     'subMenu' => array(
//         0 => array(
//             'menuName' => '基本设置',
//             'subMenu' => array(
//                 0 => array(
//                     'menuName' => '手机端基本配置',
//                     'menuUrl' => '#',
//                     'menuInfo' => ''
//                 ) ,
//                 1 => array(
//                     'menuName' => '手机模板配置',
//                     'menuUrl' => '#',
//                     'menuInfo' => ''
//                 )
//             )
//         )
//     )
// );

$menuData[4] = array(
    'menuName' => '微信',
    'menuId' => 'wechat',
    'subMenu' => array(
        0 => array(
            'menuName' => '微信设置',
            'subMenu' => array(
                0 => array(
                    'menuName' => '基本设置',
                    'menuUrl' => 'wechatConfig.php',
                    'menuInfo' => ''
                ) ,
                1 => array(
                    'menuName' => '菜单设置',
                    'menuUrl' => 'wechatMenu.php',
                    'menuInfo' => ''
                ) ,
                2 => array(
                    'menuName' => '自动回复',
                    'menuUrl' => 'wechatAutoreply.php',
                    'menuInfo' => ''
                ) ,
                3 => array(
                    'menuName' => '小程序码',
                    'menuUrl' => 'wxMiniProgramScene.php',
                    'menuInfo' => ''
                )
            )
        )
    )
);

$menuData[5] = array(
    'menuName' => '商家',
    'menuId' => 'business',
    'subMenu' => array(
        0 => array(
            'menuName' => '商家配置',
            'subMenu' => array(
                0 => array(
                    'menuName' => '基本配置',
                    'menuUrl' => 'businessConfig.php',
                    'menuInfo' => ''
                ) ,
                // 1 => array(
                //     'menuName' => '区域配置',
                //     'menuUrl' => 'businessAddr.php',
                //     'menuInfo' => ''
                // ) ,
                2 => array(
                    'menuName' => '经营品类',
                    'menuUrl' => 'businessType.php',
                    'menuInfo' => ''
                ) ,
                3 => array(
                    'menuName' => '认证属性',
                    'menuUrl' => 'businessAuthAttr.php',
                    'menuInfo' => ''
                ) ,
                4 => array(
                    'menuName' => '广告管理',
                    'menuUrl' => 'siteConfig/advList.php?action=business',
                    'menuInfo' => ''
                ) ,
                5 => array(
                    'menuName' => '友情链接',
                    'menuUrl' => 'siteConfig/friendLink.php?action=business',
                    'menuInfo' => ''
                )
            )
        ),
        1 => array(
            'menuName' => '商家管理',
            'subMenu' => array(
                0 => array(
                    'menuName' => '商家列表',
                    'menuUrl' => 'businessList.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                1 => array(
                    'menuName' => '商家介绍',
                    'menuUrl' => 'businessAbout.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                2 => array(
                    'menuName' => '商家动态',
                    'menuUrl' => 'businessNews.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                3 => array(
                    'menuName' => '商家相册',
                    'menuUrl' => 'businessAlbums.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                4 => array(
                    'menuName' => '商家视频',
                    'menuUrl' => 'businessVideo.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                5 => array(
                    'menuName' => '商家全景',
                    'menuUrl' => 'businessPanor.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                6 => array(
                    'menuName' => '商家点评',
                    'menuUrl' => 'businessComment.php',
                    'menuInfo' => '',
                    'city' => 1
                ),
                7 => array(
                    'menuName' => '商家公告',
                    'menuUrl' => 'businessNotice.php',
                    'menuInfo' => '',
                    'city' => 1
                )
            )
        ),
        2 => array(
            'menuName' => '入驻订单',
            'subMenu' => array(
                0 => array(
                    'menuName' => '入驻申请',
                    'menuUrl' => 'businessJoin.php',
                    'menuInfo' => '',
                    'city' => 1
                ) ,
                1 => array(
                    'menuName' => '入驻订单',
                    'menuUrl' => 'businessOrder.php',
                    'menuInfo' => '',
                    'city' => 1
                )
            )
        ),
        // 3 => array(
        //     'menuName' => '探店',
        //     'subMenu' => array(
        //         0 => array(
        //             'menuName' => '探店分类',
        //             'menuUrl' => 'discoveryType.php',
        //             'menuInfo' => '',
        //             'city' => 0
        //         ) ,
        //         1 => array(
        //             'menuName' => '管理文章',
        //             'menuUrl' => 'discoveryList.php',
        //             'menuInfo' => '',
        //             'city' => 1,
        //             'menuChild' => array(
        //                 0 => array(
        //                     'menuName' => '添加信息',
        //                     'menuMark' => 'adddiscovery',
        //                 ),
        //                 1 => array(
        //                     'menuName' => '修改信息',
        //                     'menuMark' => 'editdiscovery',
        //                 ),
        //                 2 => array(
        //                     'menuName' => '删除信息',
        //                     'menuMark' => 'deldiscovery',
        //                 )
        //             )
        //         ) ,
        //         2 => array(
        //             'menuName' => '评论管理',
        //             'menuUrl' => 'discoveryCommon.php',
        //             'menuInfo' => '',
        //             'city' => 1,
        //             'menuChild' => array(
        //                 0 => array(
        //                     'menuName' => '修改评论',
        //                     'menuMark' => 'editdiscoveryCommon',
        //                 ),
        //                 1 => array(
        //                     'menuName' => '删除评论',
        //                     'menuMark' => 'deldiscoveryCommon',
        //                 )
        //             )
        //         )
        //     )
        // )
    )
);

$menuData[6] = array(
    'menuName' => 'APP',
    'menuId' => 'app',
    'subMenu' => array(
        0 => array(
            'menuName' => '基本配置',
            'subMenu' => array(
                0 => array(
                    'menuName' => 'APP配置',
                    'menuUrl' => 'appConfig.php',
                    'menuInfo' => ''
                ),
                1 => array(
                    'menuName' => '推送配置',
                    'menuUrl' => 'pushConfig.php',
                    'menuInfo' => ''
                ),
                2 => array(
                    'menuName' => '音视频处理',
                    'menuUrl' => 'audioVideoProcess.php',
                    'menuInfo' => ''
                )
            )
        )
    )
);

$menuData[7] = array(
    'menuName' => '插件',
    'menuId' => 'plugins',
    'subMenu' => array(
        0 => array(
            'menuName' => '插件管理',
            'subMenu' => array(
                0 => array(
                    'menuName' => '插件管理',
                    'menuUrl' => 'plugins.php',
                    'menuInfo' => ''
                )
            )
        )
    )
);
