<?php
/**
 * Created by PhpStorm.
 * User: HX1501388
 * Date: 2015/8/28
 * Time: 16:42
 */
class ArticleController{
    private $article = null;

    public function __construct(){
        $this->article = M('Article');
    }
    /**
     * 添加文章
     */
    public function add(){
        if($_POST){
            $data = $this->article->_auto($_POST);
            if($data){
                if($this->article->insert($data)){
                    echo '添加成功!';
                }else{
                    echo '添加失败!';
                }
            }else{
                var_dump($this->article->getError());
            }
        }else {
            $category = M('Category');
            $categoryList = $category->getCategoryTree($category->fetchAll());
            View::assign(array('categoryList' => $categoryList));
            View::display('admin/articleAdd.html');
        }
    }
    public function manage(){

        $category = M('Category');
        $categoryList = $category->fetchAll();
        $tree =$category->getCategoryTree($categoryList);
//        var_dump($tree);

        $articleList = $this->article->fetchAll('','','categoryId','');
        foreach($articleList as $k => $v){
            $row = $category->fetchOne('category_name',$v['categoryId']);
            $articleList[$k]['categoryName'] = $row['category_name'];//分类名字
            foreach($tree as $k1 => $v1){
                if($v['categoryId'] == $v1['category_id']){
                    $lev = $tree[$k1]['lev'];
                    break;
                }
            }
            $articleList[$k]['lev'] = $lev;
        }

//        $articleList = multi_array_sort($articleList,'lev',SORT_DESC);
        View::assign(array('data'=>$articleList));
        View::display('admin/article.html');
    }

    function del(){
        $id = $_GET['id'];
        if($this->article->delete($id)){
            echo '删除成功!';
        }else{
            echo '删除失败!';
        }
    }
    
}