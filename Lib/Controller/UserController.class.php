<?php
/**
 * 用户控制器类
 * User: HX1501388
 * Date: 2015/8/25
 * Time: 14:09
 */
class UserController{
    private $user = null;

    function __construct(){
        $this->user = M('User');
    }
    //登录
    function login(){
        $data = $this->user->_auto($_POST);
        if($data){
            if($this->user->login($data)){
                View::display('admin/index.html');
            }else{
                View::assign(array('msg'=>'用户名或密码错误！'));
                View::display('admin/login.html');
            }
        }else{
            $msg = $this->user->getError();
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
            $rs = $this->user->setPass($_SESSION['uid'],$_POST['oldPass'],$_POST['newPass']);
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

    /**
     * 添加用户
     */
    function add(){
        if($_POST){
            if($_POST['pass'] != $_POST['cfmPass']){
                exit('两次新密码的输入不一致!');
            }
            $data = $this->user->_auto($_POST);
            if($data){
                $data['pass'] = md5($data['pass']);
                if($this->user->insert($data)){
                    echo '添加成功';
                }else{
                    echo '添加失败';
                }
            }else{
                var_dump($this->user->getError());
            }
        }else{
            View::display('admin/userAdd.html');
        }
    }

    /**
     * 管理用户
     */
    function manage(){
        $userList = $this->user->fetchAll();
        View::assign(array('userList' => $userList));
        View::display('admin/user.html');
    }
    /**
     * 编辑用户
     */
    function edit(){
        $id = $_GET['id'] + 0;
        if($_POST){
            if($_POST['pass'] != $_POST['cfmPass']){
                exit('两次新密码的输入不一致!');
            }
            $data = $this->user->_auto($_POST);
            if($data){
                $data['pass'] = md5($data['pass']);
                if($this->user->update($data,$id)){
                    echo '修改成功';
                }else{
                    echo '修改失败';
                }
            }else{
                var_dump($this->user->getError());
            }
        }else{
            $data = $this->user->fetchOne('id,name',$id);
            View::assign(array('data' => $data));
            View::display('admin/userEdit.html');
        }
    }

    /**
     * 删除
     */
    function del(){
        $id = $_GET['id'];
        if($this->user->delete($id)){
            echo '删除成功';
        }else{
            echo '删除失败';
        }
    }
}