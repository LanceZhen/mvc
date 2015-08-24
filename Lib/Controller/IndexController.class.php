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
            $user = M('User');
            $data = $user->_auto($_POST);
            if($data){
                if($user->login($data)){
                    View::display('admin/index.html');
                }else{

                }
            }else{
                var_dump($user->getError());exit;
            }

        }
	}
?>