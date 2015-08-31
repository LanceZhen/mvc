<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/27 0027
 * Time: 下午 8:09
 */
class AlbumController{
    private $album = null;//相册模型对象
    private $albumList = array();//分类列表信息
    private $albumTree = array();//子孙树

    function __construct(){
        $this->album = M('Album');
        $this->albumList = $this->album->fetchAll();
        $this->albumTree = $this->album->getCategoryTree($this->albumList);
    }

    /**
     * 管理分类列表
     */
    function manage(){
        View::assign(array('albumList'=>$this->albumTree));
        View::display('admin/album.html');
    }

    /**
     * 添加分类
     */
    function add(){
        if($_POST){
            $data = $this->album->_auto($_POST);
            if($data){
                if($this->album->insert($data)){
                    echo '相册添加成功!';
                }else{
                    echo '相册添加失败!';
                }
            }else{
                var_dump($this->album->getError());
            }
        }else{
            View::assign(array('albumList'=>$this->albumTree));
            View::display('admin/albumAdd.html');
        }
    }

    /**
     *修改分类
     */
    function edit(){
        $id = $_GET['id']+0;
        if($_POST){
            $data = $this->album->_auto($_POST);
            $trees = $this->album->getTree($data['parentId']);
            foreach($trees as $v){
                if($id == $v['albumId']){
                    exit('父栏目选取错误');
                }
            }

            if($data){
                if($this->album->update($data,$id)){
                    echo '栏目更新成功!';
                }else{
                    echo '栏目更新失败!';
                }
            }else{
                var_dump($this->album->getError());
            }
        }else{
            $data = $this->album->fetchOne('',$id);

            View::assign(array('albumList'=>$this->albumTree,'data'=>$data));
            View::display('admin/albumEdit.html');
        }
    }

    /**
     * 删除分类
     */
    function del(){
        $id = $_GET['id']+0;
        if($this->album->getSon($id)){
            exit('该分类下还有子栏目，不允许删除！');
        };

        $rs = $this->album->delete($id);
        if($rs){
            echo '删除成功！';
        }else{
            echo '删除失败！';
        }
    }
}