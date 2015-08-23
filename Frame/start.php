<?php
    header('Content-type:text/html; charset=utf-8');
    //开启session
    session_start();
    //绝对路径
    define('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))).'/');
    //设置时区
    date_default_timezone_set('PRC');
    //引入类文件
    require_once(ROOT.'Frame/include.list.php');
    foreach($paths as $path){
        require_once(ROOT.'Frame/'.$path);
    }
    define('ADMIN_PATH',dirname(curPageURL()).'/Tpl/admin/');
    define('APP',dirname(curPageURL()).'/admin.php?');

/**启动
     * Class start
     */
    class start{
        private static $config;
        public static $controller;
        public static $method;
        //初始化数据库
        private static function initDb(){
            Db::init('Mysql',self::$config['db']);
        }
        //初始化视图引擎
        private static function initView(){
            View::init('Smarty',self::$config['view']);
        }
        //初始化控制器
        private static function initController(){
            self::$controller = isset($get['c']) ? $get['c'] : 'Index';
        }
        //初始化方法
        private static function initMethod(){
            self::$method = isset($get['m']) ? $get['m'] : 'index';
        }

        //运行
        public static function run($config){
            self::$config = $config;
            self::initDb();
            self::initView();
            self::initController();
            self::initMethod();
            C(self::$controller,self::$method);
        }
    }
    //启动
    require_once(ROOT.'config.php');
    start::run($config);
