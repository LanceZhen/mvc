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

    /**
     * 添加相片
     */
    function add(){
        if($_POST){
            $data = $this->picture->_auto($_POST);
            if($data){
                $up = new Upload();
                $srcImg = $up->up('picture');
                $waterPath = ROOT.'data/picture/water-mark.png';
                $thumbPath = dirname($srcImg).'/thumb_'.basename($srcImg);

                if($srcImg){
                    //是否添加水印
                    if($data['hasMark']){
                        if(!Image::water($srcImg,$waterPath)){
                            echo '水印生成失败';
                            exit;
                        }
                    }
                    $data['path'] = str_replace(ROOT,'',$srcImg);
                    //是否产生缩略图
                    if($data['hasThumb']){
                        if(Image::thumb($srcImg,$thumbPath,'168','126')){
                            $data['thumbPath'] = str_replace(ROOT,'',$thumbPath);
                        }else{
                            echo '缩略图生成失败';
                            exit;
                        }
                    }
                    if($this->picture->insert($data)){
                        echo '添加成功';
                    }else{
                        unlink($srcImg);
                        unlink($data['path']);
                        unlink($data['thumbPath']);
                        echo '添加失败';
                    }
                }else{
                    var_dump($up->getError());
                }
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

    /**
     * 管理图片
     */
    function manage(){
        $picList = $this->picture->fetchAll();
        View::assign(array('picList' => $picList));
        View::display('admin/picture.html');
    }

    function del(){
        $id = $_GET['id']+0;
        $pic = $this->picture->fetchOne('path,thumbPath',$id);
        $picPath = ROOT.$pic['path'];
        $picThumbPath = ROOT.$pic['thumbPath'];
        if(file_exists($picPath) || file_exists($picThumbPath)){
            unlink($picPath);
            unlink($picThumbPath);
        }else{
            echo '文件不存在';
        }

        if($this->picture->delete($id)){
            echo '删除成功';
        }else{
            echo '删除失败';
        }
    }

    function edit(){
        $id = $_GET['id'];
        if($_POST){
            $data = $this->picture->_auto($_POST);
            if($data){
                $isUp = $_FILES['picture']['size'];
                if($isUp){
                    $up = new Upload();
                    $srcImg = $up->up('picture');
                    $waterPath = ROOT.'data/picture/water-mark.png';
                    $thumbPath = dirname($srcImg).'/thumb_'.basename($srcImg);

                    if($srcImg){
                        //是否添加水印
                        if($data['hasMark']){
                            if(!Image::water($srcImg,$waterPath)){
                                echo '水印生成失败';
                                exit;
                            }
                        }
                        $data['path'] = str_replace(ROOT,'',$srcImg);
                        //是否产生缩略图
                        if($data['hasThumb']){
                            if(Image::thumb($srcImg,$thumbPath,'168','126')){
                                $data['thumbPath'] = str_replace(ROOT,'',$thumbPath);
                            }else{
                                echo '缩略图生成失败';
                                exit;
                            }
                        }
                        $oriData = $this->picture->fetchOne('path,thumbPath',$id);
                        $oriPath = $oriData['path'];
                        $oriThumbPath = $oriData['thumbPath'];

                        if($this->picture->update($data,$id)){
                            unlink(ROOT.$oriPath);
                            unlink(ROOT.$oriThumbPath);
                            echo '修改成功';
                        }else{
                            echo '修改失败';
                        }
                    }else{
                        var_dump($up->getError());
                    }
                }else{//没修改图片
                    if($this->picture->update($data,$id)){
                        echo '修改成功';
                    }else{
                        echo '修改失败';
                    }
                }

            }else{
                var_dump($this->picture->getError());
            }
        }else{
            $id = $_GET['id'] + 0;
            $pic = $this->picture->fetchOne('',$id);
            $album = M('Album');
            $albumList = $album->getCategoryTree($album->fetchAll());
            View::assign(array('albumList' => $albumList));

            View::assign(array('pic' => $pic));
            View::display('admin/pictureEdit.html');
        }
    }
}