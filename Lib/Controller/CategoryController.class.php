<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/27 0027
 * Time: 下午 8:09
 */
class CategoryController{
    function manage(){
        View::display('admin/category.html');
    }
    function add(){
        if($_POST){
            $category = M('Category');
            $data = $category->_auto($_POST);
            if($data){
                if($category->add($data)){
                    echo '栏目添加成功!';
                }else{
                    echo '栏目添加失败!';
                }
            }else{
                var_dump($category->getError());
            }
        }else{
            View::display('admin/categoryAdd.html');
        }
    }
}