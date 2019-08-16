<?php   if(!defined('HUONIAOINC')) exit('Request Error!');
/**
 * 商城模块API接口
 *
 * @version        $Id: shop.class.php 2014-3-23 上午09:25:10 $
 * @package        HuoNiao.Handlers
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */

class airparems {
	private $param;  //参数
	/**
     * 构造函数
	 *
     * @param string $action 动作名
     */
    public function __construct($param = array()){
		$this->param = $param;
	}

    /**
     * 商城基本参数
     * @return array
     */
    public function config(){

        require(HUONIAOINC."/config/airparems.inc.php");
        global $cfg_fileUrl;              //系统附件默认地址
        global $cfg_uploadDir;            //系统附件默认上传目录

        global $cfg_basehost;             //系统主域名
        global $cfg_hotline;              //系统默认咨询热线

        // global $customChannelName;        //模块名称
        // global $customLogo;               //logo使用方式
        global $cfg_weblogo;              //系统默认logo地址


        // global $customUpload;             //上传配置是否自定义
        global $cfg_softSize;             //系统附件上传限制大小
        global $cfg_softType;             //系统附件上传类型限制
        global $cfg_thumbSize;            //系统缩略图上传限制大小
        global $cfg_thumbType;            //系统缩略图上传类型限制
        global $cfg_atlasSize;            //系统图集上传限制大小
        global $cfg_atlasType;            //系统图集上传类型限制



        //获取当前城市名
        global $siteCityInfo;
        if(is_array($siteCityInfo)){
            $cityName = $siteCityInfo['name'];
        }

        //如果上传设置为系统默认，则以下参数使用系统默认
        if($customUpload == 0){
            $custom_softSize = $cfg_softSize;
            $custom_softType  = $cfg_softType;
            $custom_thumbSize = $cfg_thumbSize;
            $custom_thumbType = $cfg_thumbType;
            $custom_atlasSize = $cfg_atlasSize;
            $custom_atlasType = $cfg_atlasType;
        }

        $hotline = $hotline_config == 0 ? $cfg_hotline : $customHotline;

        $params = !empty($this->param) && !is_array($this->param) ? explode(',',$this->param) : "";


        $customChannelDomain = getDomainFullUrl('airparems', $customSubDomain);

        //分站自定义配置
        $ser = 'airparems';
        global $siteCityAdvancedConfig;
        if($siteCityAdvancedConfig && $siteCityAdvancedConfig[$ser]){
            if($siteCityAdvancedConfig[$ser]['title']){
                $customSeoTitle = $siteCityAdvancedConfig[$ser]['title'];
            }
            if($siteCityAdvancedConfig[$ser]['keywords']){
                $customSeoKeyword = $siteCityAdvancedConfig[$ser]['keywords'];
            }
            if($siteCityAdvancedConfig[$ser]['description']){
                $customSeoDescription = $siteCityAdvancedConfig[$ser]['description'];
            }
            if($siteCityAdvancedConfig[$ser]['logo']){
                $customLogoUrl = $siteCityAdvancedConfig[$ser]['logo'];
            }
            if($siteCityAdvancedConfig[$ser]['hotline']){
                $hotline = $siteCityAdvancedConfig[$ser]['hotline'];
            }
        }

        $return = array();
        if(!empty($params) > 0){
            foreach($params as $key => $param){
                if($param == "channelName"){
                    $return['channelName'] = str_replace('$city', $cityName, $customChannelName);
                }elseif($param == "logoUrl"){

                    //自定义LOGO
                    if($customLogo == 1){
                        $customLogo = getFilePath($customLogoUrl);
                    }else{
                        $customLogo = getFilePath($cfg_weblogo);
                    }

                    $return['logoUrl'] = $customLogo;
                }elseif($param == "subDomain"){
                    $return['subDomain'] = $customSubDomain;
                }elseif($param == "channelDomain"){
                    $return['channelDomain'] = $customChannelDomain;
                }elseif($param == "channelSwitch"){
                    $return['channelSwitch'] = $customChannelSwitch;
                }elseif($param == "closeCause"){
                    $return['closeCause'] = $customCloseCause;
                }elseif($param == "title"){
                    $return['title'] = str_replace('$city', $cityName, $customSeoTitle);
                }elseif($param == "keywords"){
                    $return['keywords'] = str_replace('$city', $cityName, $customSeoKeyword);
                }elseif($param == "description"){
                    $return['description'] = str_replace('$city', $cityName, $customSeoDescription);
                }elseif($param == "hotline"){
                    $return['hotline'] = $hotline;
                }elseif($param == "atlasMax"){
                    $return['atlasMax'] = $customAtlasMax;
                }elseif($param == "template"){
                    $return['template'] = $customTemplate;
                }elseif($param == "touchTemplate"){
                    $return['touchTemplate'] = $customTouchTemplate;
                }elseif($param == "softSize"){
                    $return['softSize'] = $custom_softSize;
                }elseif($param == "softType"){
                    $return['softType'] = $custom_softType;
                }elseif($param == "thumbSize"){
                    $return['thumbSize'] = $custom_thumbSize;
                }elseif($param == "thumbType"){
                    $return['thumbType'] = $custom_thumbType;
                }elseif($param == "atlasSize"){
                    $return['atlasSize'] = $custom_atlasSize;
                }elseif($param == "atlasType"){
                    $return['atlasType'] = $custom_atlasType;
                }
            }


        }else{

            //自定义LOGO
            if($customLogo == 1){
                $customLogo = getFilePath($customLogoUrl);
            }else{
                $customLogo = getFilePath($cfg_weblogo);
            }

            $return['channelName']   = str_replace('$city', $cityName, $customChannelName);
            $return['logoUrl']       = $customLogo;
            $return['subDomain']     = $customSubDomain;
            $return['channelDomain'] = $customChannelDomain;
            $return['channelSwitch'] = $customChannelSwitch;
            $return['closeCause']    = $customCloseCause;
            $return['title']         = str_replace('$city', $cityName, $customSeoTitle);
            $return['keywords']      = str_replace('$city', $cityName, $customSeoKeyword);
            $return['description']   = str_replace('$city', $cityName, $customSeoDescription);
            $return['hotline']       = $hotline;
            $return['atlasMax']      = $customAtlasMax;
            $return['template']      = $customTemplate;
            $return['touchTemplate'] = $customTouchTemplate;
            $return['softSize']      = $custom_softSize;
            $return['softType']      = $custom_softType;
            $return['thumbSize']     = $custom_thumbSize;
            $return['thumbType']     = $custom_thumbType;
            $return['atlasSize']     = $custom_atlasSize;
            $return['atlasType']     = $custom_atlasType;
        }

        return $return;

    }

	/**
		* 发布信息
		* @return array
		*/
	public function put(){
        global $dsql;
        global $userLogin;
        global $langData;

        $sql = $dsql->SetQuery("INSERT INTO `#@__air_parameters` (`company_introduction`, `guidance_price`, `advantage`, `shortcoming`, `fuselage_length`, `fuselage_wide`, `fuselage_height`, `cabin_length`, `cabin_wide`, `cabin_height`, `num_seats`, `rotor_diameter`, `engine_xing`, `engine_type`, `num_cylinders`, `exhaust_capacity`, `max_series_power`, `cooling_system`, `fuel_type`, `tank_capacity`, `grease_type`, `weight_limit`, `max_launch_weight`, `basic_weight`, `empty_weight`, `max_speed`, `best_rate_climb`, `max_range`, `practical_lift`, `min_launch_space`, `min_land_space`, `other_paras`) VALUES ('".$param['company_introduction']."', '".$param['guidance_price']."', '".$param['advantage']."', '".$param['shortcoming']."', '".$param['fuselage_length']."', '".$param['fuselage_wide']."', '".$param['fuselage_height']."', '".$param['cabin_length']."', '".$param['cabin_wide']."', '".$param['cabin_height']."', '".$param['num_seats']."', '".$param['rotor_diameter']."', '".$param['engine_xing']."', '".$param['engine_type']."', '".$param['num_cylinders']."', '".$param['exhaust_capacity']."', '".$param['max_series_power']."', '".$param['cooling_system']."', '".$param['fuel_type']."', '".$param['tank_capacity']."', '".$param['grease_type']."', '".$param['weight_limit']."', '".$param['max_launch_weight']."', '".$param['basic_weight']."', '".$param['empty_weight']."', '".$param['max_speed']."', '".$param['best_rate_climb']."', '".$param['max_range']."', '".$param['practical_lift']."', '".$param['min_launch_space']."', '".$param['min_land_space']."', '".$param['other_paras']."')");
        $aid = $dsql->dsqlOper($sql, "lastid");
		if(is_numeric($aid)){
			return $aid;
		}else{
			return array("state" => 101, "info" => 6666);  //发布到数据时发生错误，请检查字段内容！
		}
	}


	/**
		* 修改信息
		* @return array
		*/
	public function edit(){

		global $dsql;
        global $userLogin;
        global $langData;

		$userid    = $userLogin->getMemberID();
		$param     = $this->param;

		$id        = $param['id'];
		$typeid    = $param['typeid'];
		$brand     = (int)$param['brand'];
		$itemid    = $param['itemid'];
		$title     = filterSensitiveWords(addslashes($param['title']));
		$category  = $param['category'];
		$mprice    = $param['mprice'];
		$price     = $param['price'];
		$logistic  = $param['logistic'];
		$volume    = (float)$param['volume'];
		$weight    = (float)$param['weight'];
		$inventory = $param['inventory'];
		$limit     = $param['limit'];
		$litpic    = $param['litpic'];
		$imglist   = $param['imglist'];
		$video     = $param['video'];
		$body      = filterSensitiveWords(addslashes($param['body']));
		$pubdate   = GetMkTime(time());

		if($userid == -1){
			return array("state" => 200, "info" => $langData['siteConfig'][20][262]);  //登录超时，请重新登录！
		}

		$userSql = $dsql->SetQuery("SELECT `id`, `state` FROM `#@__shop_store` WHERE `userid` = ".$userid);
		$userResult = $dsql->dsqlOper($userSql, "results");
		if(!$userResult){
			return array("state" => 200, "info" => $langData['shop'][4][36]);  //您还未开通商城店铺！
		}

		if(!verifyModuleAuth(array("module" => "shop"))){
			return array("state" => 200, "info" => $langData['shop'][4][1]);  //商家权限验证失败！
		}

		if($userResult[0]['state'] == 0){
			return array("state" => 200, "info" => $langData['shop'][4][53]);  //您的商铺信息还在审核中，请通过审核后再发布！
		}

		if($userResult[0]['state'] == 2){
			return array("state" => 200, "info" => $langData['shop'][4][54]);  //您的商铺信息审核失败，请通过审核后再发布！
		}

		$sid = $userResult[0]['id'];

		if($id == ""){
			return array("state" => 200, "info" => $langData['shop'][4][67]);  //信息提交失败，请重试！
		}

		if($typeid == ""){
			return array("state" => 200, "info" => $langData['shop'][4][55]);  //分类获取失败，请重新选择分类！
		}

		if($itemid == ""){
			return array("state" => 200, "info" => $langData['shop'][4][56]);  //分类属性ID获取失败，请重新选择分类！
		}

		//获取分类下相应属性
		$property = array();
		$propertyName = "item";
		$shopitem = $dsql->SetQuery("SELECT `id`, `typename`, `flag` FROM `#@__shop_item` WHERE `type` = ".$itemid." AND `parentid` = 0 ORDER BY `weight`");
		$shopResults = $dsql->dsqlOper($shopitem, "results");
		foreach($shopResults as $key => $val){

			$pid = $val['id'];
			$typeName = $val['typename'];
			$r = strstr($val['flag'], 'r');
			$proval = $_POST[$propertyName.$pid];

			if(is_array($proval)){
				if($r && empty($proval)){
					return array("state" => 200, "info" => $langData['siteConfig'][7][2].$typeName.'！');  //请选择
				}
				if(!empty($proval)){
					array_push($property, $pid."#".join(",", $proval));
				}
			}else{
				if($r && $proval == ""){
					return array("state" => 200, "info" => $langData['siteConfig'][7][2].$typeName.'！');  //请选择
				}
				if(!empty($proval)){
					array_push($property, $pid."#".$proval);
				}
			}
		}
		$property = join("|", $property);


		if($title == ""){
			return array("state" => 200, "info" => $langData['shop'][4][57]);  //请输入商品标题！
		}

		$category = isset($category) ? join(',',$category) : '';

		if(!preg_match("/^0|\d*\.?\d+$/i", $mprice, $matches)){
			return array("state" => 200, "info" => $langData['shop'][4][58]);  //市场价不得为空，类型为数字！
		}

		if(!preg_match("/^0|\d*\.?\d+$/i", $price, $matches)){
			return array("state" => 200, "info" => $langData['shop'][4][59]);  //一口价不得为空，类型为数字！
		}

		if(empty($logistic)){
			return array("state" => 200, "info" => $langData['shop'][4][60]);  //请选择物流运费模板！
		}

		//获取分类下相应规格
		$specifival = array();
		$spearray = array();
		$invent = 0;
		$typeitem = $dsql->SetQuery("SELECT `spe` FROM `#@__shop_type` WHERE `id` = ".$typeid."");
		$typeResults = $dsql->dsqlOper($typeitem, "results");
		if($typeResults){
			$spe = $typeResults[0]['spe'];
			if($spe != ""){
				$spe = explode(",", $spe);
				foreach($spe as $key => $val){
					$speitem = array();
					$speSql = $dsql->SetQuery("SELECT `id` FROM `#@__shop_specification` WHERE `id` = ".$val);
					$speResults = $dsql->dsqlOper($speSql, "results");
					if($speResults){
						$speval = $_POST["spe".$speResults[0]['id']];
						if(!empty($speval) != ""){
							array_push($spearray, $speval);
						}
					}
				}
			}
		}

		if(!empty($spearray)){
			if(count($spearray) > 1){
				$spearray = descartes($spearray);
			}else{
				$spearray = $spearray[0];
			}
			foreach($spearray as $key => $val){
				$speid = $val;
				if(is_array($val)){
					$speid = join("-", $val);
				}
				$spemprice = $_POST["f_mprice_".$speid];
				$speprice = $_POST["f_price_".$speid];
				$speinventory = $_POST["f_inventory_".$speid];
				if(!preg_match("/^0|\d*\.?\d+$/i", $spemprice, $matches)){
					return array("state" => 200, "info" => $langData['shop'][4][61]);  //规格表中价格不得为空，类型为数字！
				}elseif(!preg_match("/^0|\d*\.?\d+$/i", $speprice, $matches)){
					return array("state" => 200, "info" => $langData['shop'][4][62]);  //规格表中库存不得为空，类型为数字！
				}elseif(!preg_match("/^0|\d*\.?\d+$/i", $speinventory, $matches)){
					return array("state" => 200, "info" => $langData['shop'][4][62]);  //规格表中库存不得为空，类型为数字！
				}else{
					$invent += $speinventory;
					array_push($specifival, $speid.",".$spemprice."#".$speprice."#".$speinventory);
				}
			}
		}

		if(!empty($specifival)){
			$specifival = join("|", $specifival);
			$inventory = $invent;
		}else{
			$specifival = "";

			if(!preg_match("/^0|\d*\.?\d+$/i", $inventory, $matches)){
				return array("state" => 200, "info" => $langData['shop'][4][63]);  //库存不得为空，类型为数字！
			}
		}

		if(empty($litpic)){
			return array("state" => 200, "info" => $langData['shop'][4][64]);  //请上传商品缩略图！
			exit();
		}

		if(empty($imglist)){
			return array("state" => 200, "info" => $langData['shop'][4][65]);  //请上传商品图集！
			exit();
		}

		if(trim($body) == ''){
			return array("state" => 200, "info" => $langData['shop'][4][66]);  //请输入商品描述
		}

		//保存到主表
		$archives = $dsql->SetQuery("UPDATE `#@__shop_product` SET `type` = '$typeid', `title` = '$title', `brand` = '$brand', `property` = '$property', `category` = '$category', `mprice` = '$mprice', `price` = '$price', `logistic` = '$logistic', `volume` = '$volume', `weight` = '$weight', `specification` = '$specifival', `inventory` = '$inventory', `limit` = '$limit', `litpic` = '$litpic', `state` = 0, `pics` = '$imglist', `body` = '$body', `video` = '$video' WHERE `id` = ".$id);
		$ret = $dsql->dsqlOper($archives, "update");

		if($ret == "ok"){
			//后台消息通知
			updateAdminNotice("shop", "detail");

			return "修改成功！";
		}else{
			return array("state" => 101, "info" => $langData['siteConfig'][21][142]);  //发布到数据时发生错误，请检查字段内容！
		}

	}


}
