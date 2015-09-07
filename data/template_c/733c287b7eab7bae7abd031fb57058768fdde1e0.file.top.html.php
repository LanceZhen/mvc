<?php /* Smarty version Smarty-3.1.16, created on 2015-09-07 15:02:46
         compiled from "Tpl\admin\top.html" */ ?>
<?php /*%%SmartyHeaderCode:410955ea78e7aee1b1-55380238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '733c287b7eab7bae7abd031fb57058768fdde1e0' => 
    array (
      0 => 'Tpl\\admin\\top.html',
      1 => 1441609361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410955ea78e7aee1b1-55380238',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55ea78e7b50417_93237898',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ea78e7b50417_93237898')) {Function content_55ea78e7b50417_93237898($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="Tpl/admin/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})
</script>


</head>

<body style="background:url(Tpl/admin/images/topbg.gif) repeat-x;">

    <div class="topleft">
    <a href="main.html" target="_parent"><img src="Tpl/admin/images/logo.png" title="系统首页" /></a>
    </div>
        
    <ul class="nav">
    <li><a href="default.html" target="rightFrame" class="selected"><img src="Tpl/admin/images/icon01.png" title="工作台" /><h2>工作台</h2></a></li>
    <li><a href="imgtable.html" target="rightFrame"><img src="Tpl/admin/images/icon02.png" title="模型管理" /><h2>模型管理</h2></a></li>
    <li><a href="imglist.html"  target="rightFrame"><img src="Tpl/admin/images/icon03.png" title="模块设计" /><h2>模块设计</h2></a></li>
    <li><a href="tools.html"  target="rightFrame"><img src="Tpl/admin/images/icon04.png" title="常用工具" /><h2>常用工具</h2></a></li>
    <li><a href="computer.html" target="rightFrame"><img src="Tpl/admin/images/icon05.png" title="文件管理" /><h2>文件管理</h2></a></li>
    <li><a href="tab.html"  target="rightFrame"><img src="Tpl/admin/images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li>
    </ul>
            
    <div class="topright">    
    <ul>
    <li><span><img src="Tpl/admin/images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    <li><a href="index.php" target="_parent">前台</a></li>
    <li><a href="admin.php?c=User&m=logout" target="_parent">退出</a></li>
    </ul>
     
    <div class="user">
    <span><?php echo $_SESSION['username'];?>
</span>
    <i>消息</i>
    <b>5</b>
    </div>    
    
    </div>

</body>
</html>
<?php }} ?>
