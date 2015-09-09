<?php
/**
 * url路由类
 */
final class Route{
    public static function init(){;
        $SE_STR = str_replace($_SERVER['SCRIPT_NAME'],'',$_SERVER['REQUEST_URI']);///mvc/index.php/user/login -> //string 'user/login/name/lance/pass/0000'
        $SE_STR = trim($SE_STR,'/');

        $arrSe = explode('/',$SE_STR);
        $seCount = count($arrSe);

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

        $controllerName = $arrUrl['controller'].'Controller';
        $methodName = $arrUrl['method'];


        $controllerFile = ROOT."Lib/Controller/".$controllerName.'.class.php';

        if(file_exists($controllerFile)){
            require_once($controllerFile);
            $controllerObj = new $controllerName();
            if(method_exists($controllerObj,$methodName)){
                if(is_callable(array($controllerObj,$methodName))){
                    $returnV = $controllerObj->$methodName($arrUrl['params']);
                    if(!is_null($returnV)){
                        var_dump($returnV);
                    }
                }else{
                    die('方法不能调用');
                }
            }else{
                die('方法不存在');
            }

        }else{
            die('控制器文件不存在');
        }


    }
}
