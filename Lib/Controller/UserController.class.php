<?php
/**
 * 用户控制器类
 * User: HX1501388
 * Date: 2015/8/25
 * Time: 14:09
 */
class UserController{
    //登录
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
    //注销
    function logout(){
        $_SESSION = array();
        session_destroy();
        View::assign(array('msg'=>'退出成功'));
        View::display('admin/login.html');
    }
    //修改密码
    function setPass(){
        if($_POST){
            if($_POST['newPass'] != $_POST['cfmPass']){
                 exit('两次新密码的输入不一致!');
            }
            $user = M('User');
            $rs = $user->setPass($_SESSION['uid'],$_POST['oldPass'],$_POST['newPass']);
            switch($rs){
                case 0:
                    echo '修改失败，请重试!';
                    break;
                case 1:
                    echo '修改成功!';
                    break;
                case 2:
                    echo '原始密码不正确!';
            }

        }else{
            View::display('admin/setPass.html');
        }
    }
}