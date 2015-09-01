<?php

/**模板引擎类
 * Class View
 */
class View{
    public static $view;
    public static function init($viewType,$config){
        self::$view = new $viewType();
        foreach($config as $k => $v){
            self::$view->$k = $v;
        }
    }

    /**分配数据
     * @param $data
     */
    public static function assign($data){
       self::$view->assign($data);
    }

    /**显示模板
     * @param $tpl
     */
    public static function display($tpl){
        self::$view->display($tpl);
    }
}
