<?php /* Smarty version Smarty-3.1.16, created on 2015-08-25 16:36:02
         compiled from "Tpl\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1067155d9e1fd82aee5-78683776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9611304f9c654976f04bf34f5623c81a9286f8' => 
    array (
      0 => 'Tpl\\admin\\login.html',
      1 => 1440491760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1067155d9e1fd82aee5-78683776',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55d9e1fd84e109_80963109',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d9e1fd84e109_80963109')) {Function content_55d9e1fd84e109_80963109($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>欢迎登录后台管理系统</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <script language="JavaScript" src="Tpl/admin/js/jquery.js"></script>
    <script src="Tpl/admin/js/cloud.js" type="text/javascript"></script>
    
    <script language="javascript">
        $(function () {
            $('.loginbox').css({'position': 'absolute', 'left': ($(window).width() - 692) / 2});
            $(window).resize(function () {
                $('.loginbox').css({'position': 'absolute', 'left': ($(window).width() - 692) / 2});
            })
        });
    </script>
    
</head>

<body style="background-color:#1c77ac; background-image:url(Tpl/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">

<div id="mainBody">
    <div id="cloud1" class="cloud"></div>
    <div id="cloud2" class="cloud"></div>
</div>


<div class="logintop">
    <span>欢迎登录后台管理界面平台</span>
    <ul>
        <li><a href="#">回首页</a></li>
        <li><a href="#">帮助</a></li>
        <li><a href="#">关于</a></li>
    </ul>
</div>

<div class="loginbody">

    <span class="systemlogo"></span>

    <div class="loginbox">
        <form action="admin.php?c=User&m=login" method="post">
            <ul>
                <li><input name="name"  type="text" class="loginuser" value=""/></li>
                <li><input name="pass" type="password" class="loginpwd" value=""/></li>

                <li>
                    <input name="" type="submit" class="loginbtn" value="登录"/>
                    <label><input name="" type="checkbox" value="" checked="checked"/>记住密码</label>
                    <label><a href="#">忘记密码？</a></label>
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value!='') {?>
                    <br><br><p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                    <?php }?>
                </li>
            </ul>
        </form>

    </div>

</div>


<div class="loginbm">版权所有 2013 <a href="http://www.uimaker.com">uimaker.com</a> 仅供学习交流，勿用于任何商业用途</div>


</body>

</html>
<?php }} ?>
