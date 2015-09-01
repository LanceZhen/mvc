<?php
/**
 * 图片控制器类
 * User: Administrator
 * Date: 2015/8/31 0031
 * Time: 下午 8:12
 */
class PictureController{
    private $picture = null;

    function __construct(){
        $this->picture = M('Picture');
    }

    function add(){
        if($_POST){
            $data = $this->picture->_auto($_POST);
            if($data){
                var_dump($data);

            }else{
                var_dump($this->picture->getError());
            }
        }else{
            $album = M('Album');
            $albumList = $album->getCategoryTree($album->fetchAll());
            View::assign(array('albumList' => $albumList));
            View::display('admin/pictureAdd.html');
        }
    }
    function manage(){
        View::display('admin/picture.html');
    }
}