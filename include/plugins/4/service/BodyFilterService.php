<?php

class BodyFilterService{

    public $body;
    public $filter;

    public function __construct($body, $filter)
    {
        $this->body = $body;
        $this->filter = $filter;
    }

    public function startFilter(){
        $formatArr = $this->formatFilters();
        $body = '';
        foreach ($formatArr as $k => $item){
            $pat = '!' .$item. '!';
            if($k == 0){
                $body = preg_replace($pat, "", $this->body);
            }else{
                $body = preg_replace($pat, "", $body);
            }
        }
        return $body;
    }


    public function formatFilters()
    {
        $filterStr = $this->filter;
        $strArr = explode("[#", $filterStr);
        $resArr = [];
        foreach ($strArr as $str){
            if($str !== ''){
                $resArr[] = rtrim(str_replace("#]", "", $str));
            }
        }
        return $resArr;
    }


}