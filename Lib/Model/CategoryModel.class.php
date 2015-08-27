<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/27 0027
 * Time: 下午 8:54
 */
class CategoryModel extends Model{

    protected $table = 'cms_category';//表名
    protected $pk = 'id';//主键
    protected $field = array('category_id','category_name','parent_id','intro');//字段

    protected $_pad = array();//自动填充
    protected $_valid = array(array('category_name',1,'名称不能为空','require'),array('category_name',2,'名称不能超过15个字','length','1,15'),array('intro',0,'简介不能大于100字','length','0,100'));//自动验证

    public function add($data){
        return Db::insert($this->table,$data);
    }


}