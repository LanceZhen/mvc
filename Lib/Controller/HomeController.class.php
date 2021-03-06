<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/5 0005
 * Time: 上午 2:00
 */
class HomeController{
    private $contact = null;

    function __construct(){
        $this->contact = M('Contact');
    }

    function index(){
        $_SESSION['nav'] = 'home';
        View::display('front/index.html');
    }
    function about(){
        $_SESSION['nav'] = 'about';
        View::display('front/about.html');
    }
    function event(){
        $_SESSION['nav'] = 'event';
        View::display('front/event.html');
    }
    function blog(){
        $_SESSION['nav'] = 'blog';
        View::display('front/blog.html');
    }



    function contact(){
        $_SESSION['nav'] = 'contact';
        if($_POST){
            if($this->contact->insert($_POST)){
                alert('提交成功!');
            }
        }else{
            View::display('front/contact.html');
        }
    }
    function contactManage(){
        $contactList = $this->contact->fetchAll();
        View::assign(array('contactList' => $contactList));
        View::display('admin/contact.html');
    }
    function delContact(){
        $id = $_GET['id'] +0;
        if($this->contact->delete($id)){
            echo '删除成功';
        }else{
            echo '删除失败';
        }
    }
}