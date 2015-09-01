<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/31 0031
 * Time: 下午 8:12
 */
class PictureController{
    function add(){
        View::display('admin/pictureAdd.html');
    }
    function manage(){
        View::display('admin/picture.html');
    }
}