<?php
/**
 * 文章模型类
 * User: Administrator
 * Date: 2015/8/27 0027
 * Time: 下午 8:54
 */
class CategoryModel extends Model{

    protected $table = 'cms_category';//表名
    protected $pk = 'categoryId';//主键
    protected $field = array('categoryId','categoryName','parentId','intro');//字段

    protected $_pad = array();//自动填充
    protected $_valid = array(
        array('categoryName',1,'名称不能为空','require'),
        array('categoryName',2,'名称不能超过15个字','length','1,45'),
        array('intro',0,'简介不能大于100字','length','0,300')
    );//自动验证



    /**获得栏目子孙树
     * @param $arr
     * @param int $prentId
     * @param int $lev
     * @return array
     */
    public function getCategoryTree($arr,$prentId = 0,$lev = 0){
        $tree = array();
        foreach($arr as $v){
            if($prentId == $v['parentId']){
                $v['lev'] = $lev;
                $tree[] = $v;
                $tree = array_merge($tree,$this->getCategoryTree($arr,$v['categoryId'],$lev+1));
            }
        }
        return $tree;
    }

    /**获得栏目下的子栏目
     * @param $id
     * @return mixed
     */
    public function getSon($id){
        Db::select($this->table,'',array('parentId'=>$id));
        return Db::fetchAll();
    }

    /**获得栏目的家谱树
     * @param $parentId
     * @return array
     */
    public function getTree($id){
        $trees = array();
        $categoryList = $this->fetchAll();

        while($id != 0){
            foreach($categoryList as $v){
                if($v['categoryId'] == $id){
                    $trees[] = $v;
                    $id = $v['parentId'];
                    break;
                }
            }
        }
        return array_reverse($trees);
    }

}
