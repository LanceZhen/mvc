<?php
/**
 * Created by PhpStorm.
 * User: HX1501388
 * Date: 2015/8/28
 * Time: 16:42
 */
class ArticleController{
    public function add(){
        $category = M('Category');
        $categoryList = $category->getCategoryTree($category->fetchAll());

        View::assign(array('categoryList'=>$categoryList));
        View::display('admin/articleAdd.html');
    }
}