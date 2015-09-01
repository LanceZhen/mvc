<?php
/**
 * 用户模型类
 * User: Administrator
 * Date: 2015/8/23 0023
 * Time: 下午 10:42
 */
class UserModel extends Model{

    protected $table = 'cms_user';//表名
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

    /**登录
     * @param $data
     * @return int
     */
    function login($data){
        DB::select($this->table,'id,name',array('name'=>$data['name'],'pass'=>md5($data['pass'])));
        if($data = DB::fetchOne()){
            $_SESSION['isLogin'] = true;
            $_SESSION['uid'] = $data['id'];
            $_SESSION['username'] = $data['name'];
            return 1;
        }else{
            return 0;
        }

    }

    function setPass($uid,$oldPass,$newPass){
        DB::select($this->table,'id',array('id'=>$uid,'pass'=>md5($oldPass)));
        if(DB::fetchOne()){
            $newPass = md5($newPass);
            $sql = "update {$this->table} set pass = '{$newPass}' where id = {$uid}";
            if(DB::sqlExec($sql)){
                return 1;
            }else{
                return 0;
            }
        }else{
            return 2;
        }
    }
}