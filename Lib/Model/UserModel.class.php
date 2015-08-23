<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/23 0023
 * Time: 下午 10:42
 */
class UserModel{
    function isLogin(){
        if(!empty($_SESSION['isLogin']))
            return 1;
        else
            return 0;
    }
}