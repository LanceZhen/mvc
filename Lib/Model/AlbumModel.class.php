<?php
/**
 * Created by PhpStorm.
 * User: HX1501388
 * Date: 2015/8/31
 * Time: 17:05
 */
class AlbumModel extends Model{
    protected $table = 'cms_album';//表名
    protected $pk = 'albumId';//主键
    protected $field = array('albumId','albumName','parentId','intro');//字段

    protected $_pad = array();//自动填充
    protected $_valid = array(//自动验证  array('验证的字段名',0/1/2(验证场景),'报错提示','require/in(某几种情况)/between(范围)/length(某个范围)','参数')
        array('albumName',1,'相册名称不能为空','require'),
        array('albumName',2,'相册名称不能超过15个字','length','1,45'),
        array('parentId',1,'上级相册选择不正确','number'),
        array('intro',0,'相册简介必须大于100个字','length','1,300')
    );

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
                $tree = array_merge($tree,$this->getCategoryTree($arr,$v['albumId'],$lev+1));
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
                if($v['albumId'] == $id){
                    $trees[] = $v;
                    $id = $v['parentId'];
                    break;
                }
            }
        }
        return array_reverse($trees);
    }
}