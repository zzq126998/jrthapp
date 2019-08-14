<?php
/**
 * 百度云相关接口调用
 *
 * @version        $Id: baidu.aip.func.php 2019-7-15 下午14:47:26 $
 * @package        HuoNiao.Libraries
 * @copyright      Copyright (c) 2013 - 2019, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */

if (!defined('HUONIAOINC')) exit('Request Error!');

require_once(HUONIAOINC."/class/AipImageSearch.class.php");

class baiduAipImageSearchClient {

    private $AppID = '';
    private $ApiKey = '';
    private $SecretKey = '';
    private $client;

    public function __construct(){
        $this->client = new AipImageSearch($this->AppID, $this->ApiKey, $this->SecretKey);
    }

    // 带参数调用商品检索—入库, 图片参数为远程url图片
    public function productAddUrl($url = '', $config = ''){
        $options = array();
        $options["brief"] = $config;

        return $this->client->productAddUrl($url, $options);
    }

    // 带参数调用商品检索—检索, 图片参数为远程url图片
    public function productSearchUrl($url = '', $config = array()){
        return $this->client->productSearchUrl($url, $config);
    }

    // 带参数调用商品检索—更新, 图片参数为远程url图片
    public function productUpdateUrl($url = '', $config = ''){
        $options = array();
        $options["brief"] = $config;

        return $this->client->productUpdateUrl($url, $options);
    }

    // 带参数调用商品检索—删除, 图片参数为远程url图片
    public function productDeleteByUrl($url = ''){
        return $this->client->productDeleteByUrl($url);
    }

}
