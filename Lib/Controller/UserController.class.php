<?php
/**
 * Created by PhpStorm.
 * User: HX1501388
 * Date: 2015/8/25
 * Time: 14:09
 */
class UserController{
    function login(){
        $user = M('User');
        $data = $user->_auto($_POST);
        if($data){
            if($user->login($data)){
                View::display('admin/index.html');
            }else{
                View::assign(array('msg'=>'用户名或密码错误！'));
                View::display('admin/login.html');
            }
        }else{
            $msg = $user->getError();
            View::assign(array('msg'=>$msg[0]));
            View::display('admin/login.html');exit;
        }

    }
    function logout(){
        $_SESSION = array();
        session_destroy();
        View::assign(array('msg'=>'退出成功'));
        View::display('admin/login.html');
    }
}