<?php
/**
 * Created by PhpStorm.
 * User: HX1501388
 * Date: 2015/8/26
 * Time: 10:03
 */
class SetController{
    private $config = array();
    private $data = array();

    final function __construct(){
        $this->config = Config::getInstance()->getConf();

        $this->data = array(
            'articlePageSize' => $this->config['PAGING']['ARTICLE'],
            'picturePageSize' => $this->config['PAGING']['PICTURE'],
            'pictureShowType' => $this->config['PICTURE_SHOW_TYPE'],
            'waterText1' => $this->config['WATER_TEXT'][0],
            'waterText2' => $this->config['WATER_TEXT'][1],
            'width' => $this->config['THUMB_SIZE']['WIDTH'],
            'height' => $this->config['THUMB_SIZE']['HEIGHT'],
            'maxWidth' => $this->config['PICTURE_SIZE']['WIDTH'],
            'maxHeight' => $this->config['PICTURE_SIZE']['HEIGHT'],
        );
    }
    //系统信息
    function sysInfo(){
        $mysqlVersion = DB::getVersion();
        if(ini_get('file_uploads')){
            $upload = "允许｜文件：".ini_get('upload_max_filesize')." | 表单：".ini_get('post_max_size');
        }else{
            $upload = "<span style='color: red;'>禁止</span>";
        }

        $dbSize = DB::getDBSize($this->config['DB']['NAME'],$this->config['DB']['PREFIX']);
        $dbSize = $dbSize ? formatSize($dbSize) : '未知';
        View::assign(array(
           'webServer'=>PHP_OS.' | '.$_SERVER['SERVER_SOFTWARE'],
            'domain'=>$_SERVER['SERVER_NAME'],
            'phpVersion'=>PHP_VERSION,
            'mysqlVersion'=>$mysqlVersion,
            'upload'=>$upload,
            'dbSize'=>$dbSize
        ));
        View::display('admin/sysInfo.html');
    }
    //获取基本设置
    function getSet(){
        View::assign($this->data);
        View::display('admin/baseSet.html');
    }
    //保存基本设置
    function saveSet(){
        //表单验证
        $arr = $_POST;
        $keys = array_keys($this->data);
        //设置基本设置
        $confObj = Config::getInstance();
        $confObj->setConf('PAGING',array('ARTICLE' => $arr[$keys[0]],'PICTURE' => $arr[$keys[1]]));
        $confObj->setConf('PICTURE_SHOW_TYPE',$arr[$keys[2]]);
        $confObj->setConf('WATER_TEXT',array(0 => $arr[$keys[3]],1 => $arr[$keys[4]]));
        $confObj->setConf('THUMB_SIZE',array('WIDTH' => $arr[$keys[5]],'HEIGHT' => $arr[$keys[6]]));
        $confObj->setConf('PICTURE_SIZE',array('WIDTH' => $arr[$keys[7]],'HEIGHT' => $arr[$keys[8]]));
        //获得新配置数组
        $newConfig = Config::getInstance()->getConf();

        $configPath = ROOT.'config.php';
        //获取配置文件的文本内容
        if(function_exists('file_get_contents')){
            $configText = file_get_contents($configPath);
        }else{
            $configText = implode('',file($configPath));
        }
        //遍历匹配替换
//        foreach($newConfig as $k => $v){
//            $reg = "|'\w+'\s*=>\s*array\([\s\w'=>\,]*\)|";	//正则 变量配置参数
//            if(is_array($v)){
//                $str = parseValue($v);
//            }
//            if(preg_match($reg, $configText))
//            {
//                $configText = preg_replace($reg, "'".$k."'".' => '.$str, $configText);
//            }
//            else
//            {
//
//            }
//        }
        var_dump($configText);
        //保存配置
        /*if($fh = fopen($configPath,'w')){
            $flag = fwrite($fh,$configText);
            if($flag){

            }
            fclose($fh);
        }*/
    }
}