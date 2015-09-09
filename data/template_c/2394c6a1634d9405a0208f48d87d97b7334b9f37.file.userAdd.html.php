<?php /* Smarty version Smarty-3.1.16, created on 2015-09-09 16:42:33
         compiled from "Tpl\admin\userAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:1182055eff0f9e3d125-91865626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2394c6a1634d9405a0208f48d87d97b7334b9f37' => 
    array (
      0 => 'Tpl\\admin\\userAdd.html',
      1 => 1441502862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1182055eff0f9e3d125-91865626',
  'Function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55eff0f9e7c4f8_34440011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eff0f9e7c4f8_34440011')) {Function content_55eff0f9e7c4f8_34440011($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .tablelist input[type='text'],.tablelist input[type='number'],.tablelist input[type='password']{ width: 80px; height: 24px; line-height: 24px; border: 1px solid #D1D1D1; text-indent: 8px; margin-right: 8px;}
        .tablelist input[type='radio']{ margin-right: 4px; vertical-align: middle;}
        .tablelist label{ margin-right: 20px }
        .tablelist .tr1 input{ width: 150px;}
        .tablelist input[type='submit'],.tablelist input[type='reset']{ margin: 10px 20px 10px 0; height: 26px; padding: 0 10px; border: 1px solid #B6B3AF; background: #D6D6D6; color: #333333; }
    </style>
    <script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>
    <script type="text/javascript" src="Tpl/admin/js/layer/layer.js"></script>


</head>


<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">帐号管理</a></li>
        <li><a href="#">添加账号</a></li>
    </ul>
</div>
<div class="rightinfo" style="width: 500px; margin: 100px auto;">
    <form action="admin.php?c=User&m=add" method="post">
    <table class="tablelist">
        <tbody>
            <tr>
                <td>用户名：</td>
                <td><input name="name" type="text" value=""></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input name="pass" type="password" value=""></td>
            </tr>
            <tr>
                <td>密码确认：</td>
                <td><input name="cfmPass" type="password" value=""></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="提交"><input type="reset" value="重设"></td>
            </tr>
        </tbody>
    </table>
    </form>
</div>

<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>

</body>

</html>
<?php }} ?>
