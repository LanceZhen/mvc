<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/23 0023
 * Time: 下午 10:42
 */
class UserModel extends Model{

    protected $table = 'tb_user';//表名
    protected $pk = 'id';//主键
    protected $field = array('name','pass');//字段

    protected $_pad = array();//自动填充
    protected $_valid = array(array('name',1,'请输入用户名','require'),array('pass',1,'请输入密码','require'));//自动验证

    /**判断用户是否登录
     * @return int
     */
    public static function isLogin(){
        if(!empty($_SESSION['isLogin']))
            return 1;
        else
            return 0;
    }
    function login($data){
        $sql = "select id,name from $this->table where name = '".$data['name']."' and pass = '".md5($data['pass'])."'";
        var_dump(Db::execute($sql));
    }

}