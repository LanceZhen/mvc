<?php /* Smarty version Smarty-3.1.16, created on 2015-09-01 15:31:13
         compiled from "Tpl\admin\sysInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1016755e554419a2e83-87337085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b20459aedfe0aeda297e320255f7fbbb9b53e483' => 
    array (
      0 => 'Tpl\\admin\\sysInfo.html',
      1 => 1440587695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016755e554419a2e83-87337085',
  'Function' => 
  array (
  ),
  'variables' => 
  array (
    'webServer' => 0,
    'domain' => 0,
    'phpVersion' => 0,
    'mysqlVersion' => 0,
    'upload' => 0,
    'dbSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e55441a492e4_08780782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e55441a492e4_08780782')) {Function content_55e55441a492e4_08780782($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>


</head>


<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">常规设置</a></li>
        <li><a href="#">系统信息</a></li>
    </ul>
</div>

<div class="rightinfo" style="width: 500px; margin: 100px auto;">

    <table class="tablelist">
        <tbody>
            <tr>
                <td>服务器环境:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['webServer']->value;?>
</td>
            </tr>
            <tr>
                <td>域名:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</td>
            </tr>
            <tr>
                <td>PHP版本:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['phpVersion']->value;?>
</td>
            </tr>
            <tr>
                <td>MYSQL版本:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['mysqlVersion']->value;?>
</td>
            </tr>
            <tr>
                <td>文件上传:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['upload']->value;?>
</td>
            </tr>
            <tr>
                <td>数据库使用:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['dbSize']->value;?>
</td>
            </tr>
        </tbody>
    </table>





</div>

<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>

</body>

</html>
<?php }} ?>
