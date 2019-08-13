<?php  if(!defined('HUONIAOINC')) exit('Request Error!');
/**
 * 广告插件
 *
 * @version        $Id: myad.class.php 2014-12-18 下午15:48:25 $
 * @package        HuoNiao.class
 * @copyright      Copyright (c) 2013 - 2018, HuoNiao, Inc.
 * @link           https://www.ihuoniao.cn/
 */

if(!function_exists('getMyAd')){
    function getMyAd($params, &$smarty = array()){
        extract ($params);
        global $dsql;

        //正常情况
        if(!empty($id)){
            $handels = new handlers("siteConfig", "adv");
            $return = $handels->getHandle($id);

            if($return['state'] == 100){
                $info = $return['info'];
                return getAdHtml($info, $type, $exp, $insert);
            }

        //标题识别广告
        }elseif(!empty($title)){

            $handels = new handlers("siteConfig", "adv");
            $return = $handels->getHandle(array("model" => "siteConfig", "title" => $title));

            if($return['state'] == 100){
                $info = $return['info'];
                return getAdHtml($info, $type, $exp, $insert);
            }

        //分站广告
        }elseif(!empty($model) && !empty($title)){

            $handels = new handlers("siteConfig", "adv");
            $return = $handels->getHandle(array("model" => $model, "title" => $title));

            if($return['state'] == 100){
                $info = $return['info'];
                return getAdHtml($info, $type, $exp, $insert);
            }


        //分类广告
        }elseif(!empty($service) && !empty($typeid)){
            global $tplFloder;
            $tplFloder = str_replace("/", "", $tplFloder);
            $class = 1;
            switch ($type) {
                case 'slide':
                    $class = 2;
                    break;
                case 'stretch':
                    $class = 3;
                    break;
                case 'couplet':
                    $class = 4;
                    break;
                default:
                    $class = 1;
                    break;
            }
            $archives = $dsql->SetQuery("SELECT `id` FROM `#@__advlist` WHERE `state` = 1 AND `model` = '$service' AND `type` = $typeid AND `class` = $class AND `template` = '$tplFloder'");
            $results  = $dsql->dsqlOper($archives, "results");
            if($results){
                $id = $results[0]['id'];
                if(is_numeric($id)){
                    $handels = new handlers("siteConfig", "adv");
                    $return = $handels->getHandle($id);

                    if($return['state'] == 100){
                        $info = $return['info'];
                        return getAdHtml($info, $type, $exp, $insert);
                    }
                }
            }

        }
    }
}

if(!function_exists('getAdHtml')){

    // $exp  【详情】
    function getAdHtml($info, $type, $exp, $insert){

        global $cfg_advMarkState;  //广告标识状态  0关闭  1开启
        global $cfg_advMarkPostion;  //标识位置  0左上  1右上  2左下  3右下

        global $cfg_secureAccess;
        global $cfg_basehost;
        global $userLogin;

        $userLogin->keepUserID = 'admin_auth';
        $uid = $userLogin->getUserID();

        $advMark = '';
        if($cfg_advMarkState && !$info['mark']){
          $advMark = '<div class="advMark pos'.$cfg_advMarkPostion.'">广告</div>';
        }
        if($info['advTitle'] && $uid != -1){
          $advMark .= '<div class="advTitleMark">'.$info['advTitle'].'</div>';
        }


        //普通广告
        if($info['class'] == 1){

            //代码
            if($info['type'] == "code"){

                if(strstr($info['body'], 'advPlaceholder')){
                  $body = $info['body'];
                }else{
                  $body = '<div class="siteAdvObj">' . $info['body'] . $advMark .'</div>';
                }

                //json格式
                if($type == 'json'){
                  echo json_encode(array('code' => $body));die;
                }else{
                  return $body;
                }

            //文字
            }elseif($info['type'] == "text"){
                $sty = array();
                if(!empty($info['color'])){
                    $sty[] = "color:".$info['color'];
                }
                if(!empty($info['size'])){
                    $sty[] = "font-size:".$info['size']."px";
                }
                if($info['link'] == ""){

                    return '<div class="siteAdvObj"><font style="'.join("; ", $sty).'">'.$info['title'].'</font>' . $advMark .'</div>';
                }else{
                    return '<div class="siteAdvObj"><a href="'.$info['link'].'" target="_blank" style="'.join("; ", $sty).'">'.$info['title'].'</a>' . $advMark .'</div>';
                }

            //图片、flash
            }else{
                return getAttachHtml($info['src'], $info['href'], $info['title'], $info['width'], $info['height'], $exp, $insert, $advMark);
            }

        //多图广告
        }elseif($info['class'] == 2){

            $list = array();

            //幻灯片【主要为了显示图片说明】
            if($type == "slide"){
                foreach ($info['list'] as $key => $value) {

                    $advMark_ = $advMark;
                    if($value['mark']){
                      if($info['advTitle'] && $uid != -1){
                        $advMark_ = '<div class="advTitleMark">'.$info['advTitle'].'</div>';
                      }else{
                        $advMark_ = '';
                      }
                    }

                    $img = getAttachHtml($value['src'], $value['link'], $value['title'], $info['width'], $info['height'], false, $insert, $advMark_);
                    $href = "href='javascript:;' style='cursor:default;'";
                    if($value['link'] != ""){
                        $href = 'href="'.$value['link'].'" target="_blank"';
                    }
                    $list[] = '<div class="slideshow-item ad'.$key.'">'.$img.'<div class="slideinfo"><h3><a '.$href.'>'.$value['title'].'</a></h3><p>'.$value['desc'].'</p><div class="bg"></div></div></div>';
                }

            //json格式
            }elseif($type == "json"){
              $list = array();
              foreach ($info['list'] as $key => $value) {
                array_push($list, array(
                  'src' => getFilePath($value['src']),
                  'link' => $value['link'],
                  'title' => $value['title'],
                  'desc' => $value['desc']
                ));
              }
              echo json_encode($list);die;

            //图片列表
            }else{
                foreach ($info['list'] as $key => $value) {

                    $advMark_ = $advMark;
                    if($value['mark']){
                      if($info['advTitle'] && $uid != -1){
                        $advMark_ = '<div class="advTitleMark">'.$info['advTitle'].'</div>';
                      }else{
                        $advMark_ = '';
                      }
                    }

                    $img = getAttachHtml($value['src'], $value['link'], $value['title'], $info['width'], $info['height'], false, $insert, $advMark_);
                    if($value['link'] != ""){
                        $list[] = '<li>'.$img.'<span><a href="'.$value['link'].'" target="_blank">'.$value['title'].'</a></span></li>';
                    }else{
                        $list[] = '<li>'.$img.'<span><a href="javascript:;" style="cursor:default;">'.$value['title'].'</a></span></li>';
                    }
                }
            }
            return join("", $list);

        //伸缩广告
        }elseif($info['class'] == 3){
            $id = create_check_code(6);
            $html = array();
            $imgSmall = getAttachHtml($info['small'], $info['link'], "", $info['width'], $info['smallHeight'], false, $insert, $advMark);
            $imgLarge = getAttachHtml($info['large'], $info['link'], "", $info['width'], $info['largeHeight'], false, $insert, $advMark);
            $html[] = '<div id="stretch_'.$id.'"><div id="stretch_body_'.$id.'">'.$imgSmall.'</div><div class="adClose"><i></i><span class="kai"></span></div></div>';
            $html[] = '<script type="text/javascript" src="'.$cfg_secureAccess.$cfg_basehost.'/static/js/ui/jquery.stretch.js"></script>';
            $html[] = '<script type="text/javascript">$(function(){stretchAd("'.$id.'", \''.$imgSmall.'\', \''.$imgLarge.'\', '.$info['smallHeight'].', '.$info['largeHeight'].', '.$info['time'].');});</script>';
            return join("", $html);

        //对联广告
        }elseif($info['class'] == 4){

            $advMarkLeft = $advMark;
            if($info['left']['mark']){
              if($info['advTitle'] && $uid != -1){
                $advMarkLeft = '<div class="advTitleMark">'.$info['advTitle'].'</div>';
              }else{
                $advMarkLeft = '';
              }
            }

            $advMarkRight = $advMark;
            if($info['right']['mark']){
              if($info['advTitle'] && $uid != -1){
                $advMarkRight = '<div class="advTitleMark">'.$info['advTitle'].'</div>';
              }else{
                $advMarkRight = '';
              }
            }

            // $advMarkLeft = !$info['left']['mark'] ? $advMark : '';
            // $advMarkRight = !$info['right']['mark'] ? $advMark : '';

            $html = array();
            $left = getAttachHtml($info['left']['src'], $info['left']['link'], $info['left']['title'], $info['adwidth'], $info['adheight'], false, $insert, $advMarkLeft);
            $right = getAttachHtml($info['right']['src'], $info['right']['link'], $info['right']['title'], $info['adwidth'], $info['adheight'], false, $insert, $advMarkRight);

            $html[] = '<script type="text/javascript" src="'.$cfg_secureAccess.$cfg_basehost.'/static/js/ui/jquery.couplet.js"></script>';
            $html[] = '<script type="text/javascript">$(function(){couplet(\''.$left.'\', \''.$right.'\', '.$info['width'].', '.$info['adwidth'].', '.$info['adheight'].', '.$info['topheight'].');});</script>';
            return join("", $html);

        //节日广告
        }elseif($info['class'] == 5){
            global $cfg_staticPath;
            $html = array();

            $body = $info['body'];
            array_push($html, '<script>');
            array_push($html, 'var Background_Url = "'.getFilePath($body[1]).'"; //节日广告图片');
            array_push($html, 'var Background_Href = "'.$body[2].'"; //节日广告链接');
            array_push($html, 'var FestivalAD_hdeight = "'.$body[0].'";//节日广告头部高度');
            array_push($html, 'var Skin_Num = "";//节日广告变量');
            array_push($html, '</script>');
            array_push($html, '<script type="text/javascript" src="'.$cfg_staticPath.'js/festival_ad.js?v=1"></script>');

            return join("\n", $html);
        }
    }
}
