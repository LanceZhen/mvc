<?php
/**
 * 单一入口启动
 */
    header('Content-type:text/html; charset=utf-8');
    //开启session
    session_start();
    //绝对路径
    define('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))).'/');
    define('FRONT_BASE','http://'.dirname($_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']).'/Tpl/front/');
    define('FRONT_LINK','http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].'/');
    //设置时区
    date_default_timezone_set('PRC');
    //引入类文件
    require_once(ROOT.'Frame/include.list.php');
    foreach($paths as $path){
        require_once(ROOT.'Frame/'.$path);
    }
/**启动
     * Class start
     */
    class start{
        private static $config;
        public static $controller;
        public static $method;

        //初始化数据库
        private static function initDb(){
            Db::init('Mysql',self::$config['DB']);
        }
        //初始化视图引擎
        private static function initView(){
            View::init('Smarty',self::$config['VIEW']);
        }
        //初始化控制器
        private static function initController(){
            self::$controller = isset($_GET['c']) ? $_GET['c'] : 'Index';
        }
        //初始化方法
        private static function initMethod(){
            self::$method = isset($_GET['m']) ? $_GET['m'] : 'index';
        }
        //初始化路由
        private static function initRoute(){
            Route::init();
        }

        //运行
        public static function run($config){
            self::$config = $config;
            self::initDb();
            self::initView();
            if(!$config['URL_MODEL']){
                self::initController();
                self::initMethod();
                C(self::$controller,self::$method);
            }else if($config['URL_MODEL'] == 1){
                self::initRoute();
            }
        }
    }

