<?php
	class IndexController{

		function index()
        {
            $user = M('User');
			if(UserModel::isLogin()){
                View::display('admin/index.html');
			}else{
                View::assign(array('msg'=>''));
                View::display('admin/login.html');
            }
        }
        function top(){
            View::display('admin/top.html');
        }
        function left(){
            View::display('admin/left.html');
        }

	}
?>