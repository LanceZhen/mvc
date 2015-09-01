<?php
/**
 * 配置读写类
 * User: HX1501388
 * Date: 2015/8/26
 * Time: 12:23
 */
class Config{
    private static $obj;
    private $config = array();

    final private function __construct(){
        $config = array();
        require_once(ROOT.'config.php');
        $this->config = $config;
    }
    final private function __clone(){
        trigger_error('Clone is not allow!', E_USER_ERROR);
    }
    public static function getInstance(){
        if(!self::$obj instanceof self){
            self::$obj = new self();
        }
        return self::$obj;
    }
    public function setConf($k,$v){
        $this->config[$k] = $v;
    }
    public function getConf(){
        return $this->config;
    }

    public function __get($k){
        if(array_key_exists($k,$this->config)){
            return $this->config[$k];
        }
    }

    public function __set($k,$v){
        $this->config[$k] = $v;
    }

}