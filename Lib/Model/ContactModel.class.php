<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/5 0005
 * Time: 下午 11:33
 */
class ContactModel extends Model{
    protected $table = 'tb_contact';//表名
    protected $pk = 'id';//主键
    protected $field = array('id','name','email','webSite','message');//字段

    protected $_pad = array(array());//自动填充
    protected $_valid = array(//自动验证  array('验证的字段名',0/1/2(验证场景),'报错提示','require/in(某几种情况)/between(范围)/length(某个范围)','参数')
        array()
    );
}