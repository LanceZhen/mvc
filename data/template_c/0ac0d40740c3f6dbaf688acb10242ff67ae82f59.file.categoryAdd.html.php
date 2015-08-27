<?php /* Smarty version Smarty-3.1.16, created on 2015-08-27 23:00:23
         compiled from "Tpl\admin\categoryAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:2695355df02eaba1615-70461775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac0d40740c3f6dbaf688acb10242ff67ae82f59' => 
    array (
      0 => 'Tpl\\admin\\categoryAdd.html',
      1 => 1440687619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2695355df02eaba1615-70461775',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55df02eabcfdd2_30809632',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55df02eabcfdd2_30809632')) {Function content_55df02eabcfdd2_30809632($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">文章管理</a></li>
        <li><a href="#">管理分类</a></li>
        <li><a href="#">增加分类</a></li>
    </ul>
</div>

<div class="formbody">
    <div class="formtitle"><span>分类信息</span></div>
    <form action="admin.php?c=Category&m=add" method="post">
        <ul class="forminfo">
            <li><label>分类名称</label><input name="category_name" type="text" class="dfinput"/><i>名称不能超过15个字</i>
            </li>
            <li>
                <label>上级分类</label>
                <select name="parent_id" id="">
                    <option value="0">顶级分类</option>
                </select>
            </li>
            <li><label>栏目简介</label><textarea name="intro" cols="" rows="" class="textinput"></textarea></li>
            <li><label>&nbsp;</label><input type="submit" class="btn" value="确认保存"/></li>
        </ul>
    </form>

</div>


</body>

</html>
<?php }} ?>
