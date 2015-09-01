<?php
/**
 * 图片模型类
 * User: HX1501388
 * Date: 2015/9/1
 * Time: 15:03
 */
class PictureModel extends Model{
    protected $table = 'cms_picture';//表名
    protected $pk = 'id';//主键
    protected $field = array('id','title','albumId','intro','path','hasThumb','hasMark');//字段

    protected $_pad = array(array('hasThumb','value',0),array('hasMark','value',0));//自动填充
    protected $_valid = array(//自动验证  array('验证的字段名',0/1/2(验证场景),'报错提示','require/in(某几种情况)/between(范围)/length(某个范围)','参数')
        array('title',1,'图片标题不能为空','require'),
        array('title',2,'图片标题不能大于40个字符','length','1,40'),
        array('albumId',1,'相册选择错误','number'),
        array('intro',0,'图片描述不能大于300个字符','length','1,300'),
        array('hasThumb',1,'图片处理错误','in','0,1'),
        array('hasMark',1,'图片处理错误','in','0,1')
    );
}