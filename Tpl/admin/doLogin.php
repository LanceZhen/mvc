<?php 
require_once('../include/init.php');

$data = $_POST;
$admin = new AdminModel();
$row = $admin->checkLogin($data['username'],$data['password']);
if(empty($row)){
   echo '登录失败'; 
}else{
   header('location:./main.html');
}