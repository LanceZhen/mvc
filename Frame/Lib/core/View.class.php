<?php
class View{
    public static $view;
    public static function init($viewType,$config){
        self::$view = new $viewType();
        foreach($config as $k => $v){
            self::$view->$k = $v;
        }
    }
    public static function assign($data){
       self::$view->assign($data);
    }
    public static function display($tpl){
        self::$view->display($tpl);
    }
}
