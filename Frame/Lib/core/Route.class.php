<?php
/**
 * url路由类
 */
final class Route{
    public static function init(){;
        $SE_STR = str_replace($_SERVER['SCRIPT_NAME'],'',$_SERVER['REQUEST_URI']);
        $SE_STR = trim($SE_STR,'/'); //string 'user/login/name/lance/pass/0000'

        $arrSe = explode('/',$SE_STR);
        $seCount = count($arrSe);
        var_dump($arrSe);

        $arrUrl = array(
            'controller' => 'Index',
            'method' => 'index',
            'params' => array()
        );

        if($seCount == 1 && $arrSe[0] != ''){
            $arrUrl['controller'] = $arrSe[0];
        }else if($seCount > 1){
            $arrUrl['controller'] = $arrSe[0];
            $arrUrl['method'] = $arrSe[1];
            if($seCount > 2 && $seCount%2 != 0){
                die('参数错误');
            }else{
                for($i = 2; $i < $seCount; $i+=2){
                    $arrKV = array($arrSe[$i] => $arrSe[$i+1]);
                    $arrUrl['params'] = array_merge($arrKV,$arrUrl['params']);
                }
            }
        }

        $controller = $arrUrl['controller'];
        $method = $arrUrl['method'];




    }
}
