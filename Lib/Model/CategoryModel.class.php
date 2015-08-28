<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/27 0027
 * Time: 下午 8:54
 */
class CategoryModel extends Model{

    protected $table = 'cms_category';//表名
    protected $pk = 'category_id';//主键
    protected $field = array('category_id','category_name','parent_id','intro');//字段

    protected $_pad = array();//自动填充
    protected $_valid = array(array('category_name',1,'名称不能为空','require'),array('category_name',2,'名称不能超过15个字','length','1,15'),array('intro',0,'简介不能大于100字','length','0,100'));//自动验证



    /**获得栏目子孙树
     * @param $arr
     * @param int $prentId
     * @param int $lev
     * @return array
     */
    public function getCategoryTree($arr,$prentId = 0,$lev = 0){
        $tree = array();
        foreach($arr as $v){
            if($prentId == $v['parent_id']){
                $v['lev'] = $lev;
                $tree[] = $v;
                $tree = array_merge($tree,$this->getCategoryTree($arr,$v['category_id'],$lev+1));
            }
        }
        return $tree;
    }

    /**获得栏目下的子栏目
     * @param $id
     * @return mixed
     */
    public function getSon($id){
        Db::select($this->table,'',array('parent_id'=>$id));
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
                if($v['category_id'] == $id){
                    $trees[] = $v;
                    $id = $v['parent_id'];
                    break;
                }
            }
        }
        return array_reverse($trees);
    }

}
