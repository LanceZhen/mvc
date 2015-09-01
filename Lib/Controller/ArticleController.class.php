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

    /**
     * 管理文章
     */
    public function manage(){

        $category = M('Category');
        $categoryList = $category->fetchAll();
        $tree =$category->getCategoryTree($categoryList);

        $articleList = $this->article->fetchAll('','','categoryId','');
        if($articleList){
            //分类的缩进
            foreach($articleList as $k => $v){
                $row = $category->fetchOne('categoryName',$v['categoryId']);
                $articleList[$k]['categoryName'] = $row['categoryName'];//分类名字
                foreach($tree as $k1 => $v1){
                    if($v['categoryId'] == $v1['categoryId']){
                        $lev = $tree[$k1]['lev'];
                        break;
                    }
                }
                $articleList[$k]['lev'] = $lev;
                if($v['audit'] == 0){
                    $articleList[$k]['auditAction'] = 'auditArticle';
                    $articleList[$k]['auditText'] = '<em style="color: red;">审核</em>';
                }else{
                    $articleList[$k]['auditAction'] = 'lockArticle';
                    $articleList[$k]['auditText'] = '锁定';
                }
            }
            $display = 'hide';
        }else{
            $display = 'show';
        }
        View::assign(array('data'=>$articleList,'display' => $display));
        View::display('admin/article.html');
    }

    /**
     * 编辑文章
     */
    function edit(){
        $id = $_GET['id'];
        if($_POST){
            $data = $this->article->_auto($_POST);
            if($data){
                if($this->article->update($data,$id)){
                    echo '修改成功';
                }else{
                    echo '修改失败';
                }
            }else{
                var_dump($this->article->getError());
            }
        }else{
            $category = M('Category');
            $categoryList = $category->getCategoryTree($category->fetchAll());

            $data = $this->article->fetchOne('',$id);
            View::assign(array('categoryList' => $categoryList,'data' => $data));
            View::display('admin/articleEdit.html');
        }
    }

    /**
     * 删除文章
     */
    function del(){
        $id = empty($_GET['id']) ? _post('idList'): $_GET['id'] + 0;
        if(empty($id)){
            die('没有选择要删除的文章');
        }
        if($this->article->delete($id)){
            echo '删除成功!';
        }else{
            echo '删除失败!';
        }
    }

    /**
     * 审核文章
     */
    function audit(){
        $id = empty($_GET['id']) ? _post('idList') : $_GET['id']+0;
        $action = $_GET['action'];

        if($action == 'auditArticle'){
            $audit = 1;
        }else if($action == 'lockArticle'){
            $audit = 0;
        }

        if(empty($id)){
            if($audit){
                die('没有选择要审核的文章');
            }else{
                die('没有选择要锁定的文章');
            }
        }

        $rs = $this->article->update(array('audit'=>$audit),$id);
        if($rs){
            forward('admin.php',array('c' => 'Article','m' => 'manage'));
        }else{
            echo '操作失败!';
        }
    }

    
}