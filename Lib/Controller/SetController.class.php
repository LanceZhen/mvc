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
    function getSet(){

        View::assign($this->data);
        View::display('admin/baseSet.html');
    }
    function saveSet(){
        //表单验证
//        var_dump($_POST);
//        var_dump($this->config);
        $arr = $_POST;
        $keys = array_keys($this->data);
        var_dump($keys);exit;
        $obj = Config::getInstance();
        $data = array(
            $obj->config['PAGING']['ARTICLE'] =>$arr[$keys[0]],
            $obj->config['PAGING']['PICTURE'] =>$arr[$keys[1]],
            $obj->config['PICTURE_SHOW_TYPE'] =>$arr[$keys[2]],
            $obj->config['WATER_TEXT'][0] =>$arr[$keys[3]],
            $obj->config['WATER_TEXT'][1] =>$arr[$keys[4]],
            $obj->config['THUMB_SIZE']['WIDTH'] =>$arr[$keys[5]],
            $obj->config['THUMB_SIZE']['HEIGHT'] =>$arr[$keys[6]],
            $obj->config['PICTURE_SIZE']['WIDTH'] =>$arr[$keys[7]],
            $obj->config['PICTURE_SIZE']['HEIGHT'] =>$arr[$keys[8]],
        );

        var_dump($data);

//        Config::getInstance()->getConf();
    }
}