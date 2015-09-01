<?php
/**
 * 设置模型类
 * User: Administrator
 * Date: 2015/8/30 0030
 * Time: 上午 11:58
 */
class SetModel extends Model{
    protected $table = '';//表名
    protected $pk = '';//主键
    protected $field = array();//字段

    protected $_pad = array();//自动填充
    protected $_valid = array(//自动验证  array('验证的字段名',0/1/2(验证场景),'报错提示','require/in(某几种情况)/between(范围)/length(某个范围)','参数')
        array('articlePageSize',1,'文章分页数目不能为空并且要是数字','number'),
        array('picturePageSize',1,'图片分页数目不能为空并且要是数字','number')
    );
}