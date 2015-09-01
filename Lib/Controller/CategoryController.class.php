<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/27 0027
 * Time: 下午 8:09
 */
class CategoryController{
    private $category = null;//分类模型对象
    private $categoryList = array();//分类列表信息
    private $categoryTree = array();//子孙树

    function __construct(){
        $this->category = M('Category');
        $this->categoryList = $this->category->fetchAll();
        $this->categoryTree = $this->category->getCategoryTree($this->categoryList);
    }

    /**
     * 管理分类列表
     */
    function manage(){

        View::assign(array('categoryList'=>$this->categoryTree));
        View::display('admin/category.html');
    }

    /**
     * 添加分类
     */
    function add(){
        if($_POST){
            $data = $this->category->_auto($_POST);
            if($data){
                if($this->category->insert($data)){
                    echo '栏目添加成功!';
                }else{
                    echo '栏目添加失败!';
                }
            }else{
                var_dump($this->category->getError());
            }
        }else{
            View::assign(array('categoryList'=>$this->categoryTree));
            View::display('admin/categoryAdd.html');
        }
    }

    /**
     *修改分类
     */
    function edit(){
        $id = $_GET['id']+0;
        if($_POST){
            $data = $this->category->_auto($_POST);
            $trees = $this->category->getTree($data['parentId']);
            foreach($trees as $v){
                if($id == $v['categoryId']){
                    exit('父栏目选取错误');
                }
            }

            if($data){
                if($this->category->update($data,$id)){
                    echo '栏目更新成功!';
                }else{
                    echo '栏目更新失败!';
                }
            }else{
                var_dump($this->category->getError());
            }
        }else{
            $data = $this->category->fetchOne('',$id);

            View::assign(array('categoryList'=>$this->categoryTree,'data'=>$data));
            View::display('admin/categoryEdit.html');
        }
    }

    /**
     * 删除分类
     */
    function del(){
        $id = $_GET['id']+0;
        if($this->category->getSon($id)){
           exit('该分类下还有子栏目，不允许删除！');
        };

        $rs = $this->category->delete($id);
        if($rs){
            echo '删除成功！';
        }else{
            echo '删除失败！';
        }
    }
}