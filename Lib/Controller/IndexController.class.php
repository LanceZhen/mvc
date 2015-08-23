<?php
	class IndexController{
		function index()
        {
            $user = M('User');
			if(UserModel::isLogin()){

			}else{
               View::display('admin/login.html');
            }
        }
        function login(){
            echo 0;
        }
	}
?>