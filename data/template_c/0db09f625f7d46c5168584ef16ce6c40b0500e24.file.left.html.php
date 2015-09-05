<?php /* Smarty version Smarty-3.1.16, created on 2015-09-05 23:30:51
         compiled from "Tpl\admin\left.html" */ ?>
<?php /*%%SmartyHeaderCode:357655ea78e7b98486-27265441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0db09f625f7d46c5168584ef16ce6c40b0500e24' => 
    array (
      0 => 'Tpl\\admin\\left.html',
      1 => 1441466982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357655ea78e7b98486-27265441',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55ea78e7be73a5_12387672',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ea78e7be73a5_12387672')) {Function content_55ea78e7be73a5_12387672($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>



</head>

<body style="background:#f0f9fd;">
<div class="lefttop"><span></span>模块</div>

<dl class="leftmenu">

    <dd>
        <div class="title">
            <span><img src="Tpl/admin/images/leftico01.png"/></span>常规设置
        </div>
        <ul class="menuson">
            <li class="active"><cite></cite><a href="admin.php?c=Set&m=sysInfo" target="rightFrame">系统信息</a><i></i></li>
            <li><cite></cite><a href="admin.php?c=Set&m=getSet" target="rightFrame">基本设置</a><i></i></li>
            <li><cite></cite><a href="admin.php?c=User&m=setPass" target="rightFrame">密码修改</a><i></i></li>


        </ul>
    </dd>


    <dd>
        <div class="title">
            <span><img src="Tpl/admin/images/leftico02.png"/></span>文章管理
        </div>
        <ul class="menuson">
            <li><cite></cite><a href="admin.php?c=Article&m=add" target="rightFrame">添加文章</a><i></i></li>
            <li><cite></cite><a href="admin.php?c=Article&m=manage" target="rightFrame">管理文章</a><i></i></li>
            <li><cite></cite><a href="admin.php?c=Category&m=manage" target="rightFrame">管理分类</a><i></i></li>
            <!--<li><cite></cite><a href="#" target="rightFrame"  target="rightFrame">批量更新</a><i></i></li>-->
        </ul>
    </dd>

    <dd>
        <div class="title"><span><img src="Tpl/admin/images/leftico03.png"/></span>相册管理</div>
        <ul class="menuson">
            <li><cite></cite><a href="admin.php?c=Picture&m=add"  target="rightFrame">添加相片</a><i></i></li>
            <li><cite></cite><a href="admin.php?c=Picture&m=manage"  target="rightFrame">管理相片</a><i></i></li>
            <li><cite></cite><a href="admin.php?c=Album&m=manage"  target="rightFrame">管理相册</a><i></i></li>
        </ul>
    </dd>


    <dd>
        <div class="title"><span><img src="Tpl/admin/images/leftico04.png"/></span>帐户管理</div>
        <ul class="menuson">
            <li><cite></cite><a href="admin.php?c=User&m=add" target="rightFrame">添加帐号</a><i></i></li>
            <li><cite></cite><a href="admin.php?c=User&m=manage" target="rightFrame">管理帐号</a><i></i></li>
        </ul>

    </dd>
    <dd>
        <div class="title"><span><img src="Tpl/admin/images/leftico04.png"/></span>留言管理</div>
        <ul class="menuson">
            <li><cite></cite><a href="admin.php?c=Home&m=contactManage" target="rightFrame">管理留言</a><i></i></li>
        </ul>

    </dd>

    <dd>
        <div class="title"><span><img src="Tpl/admin/images/leftico04.png"/></span>其它模板</div>
        <ul class="menuson">
            <li><cite></cite><a href="Tpl/admin/right.html" target="rightFrame">数据列表</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/imgtable.html" target="rightFrame">图片数据表</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/form.html" target="rightFrame">添加编辑</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/imglist.html" target="rightFrame">图片列表</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/imglist1.html" target="rightFrame">自定义</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/tools.html" target="rightFrame">常用工具</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/filelist.html" target="rightFrame">信息管理</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/tab.html" target="rightFrame">Tab页</a><i></i></li>
            <li><cite></cite><a href="Tpl/admin/error.html" target="rightFrame">404页面</a><i></i></li>
        </ul>

    </dd>

</dl>
<script language="JavaScript" src="Tpl/admin/js/jquery.js"></script>

<script type="text/javascript">
    $(function () {
        //导航切换
        $(".menuson li").click(function () {
            $(".menuson li.active").removeClass("active")
            $(this).addClass("active");
        });


        $('.title').click(function(){
            var $ul = $(this).next('ul');
            $('.leftmenu dd').find('ul').slideUp();
            if($ul.is(':visible')){
                $ul.slideUp();
            }else{
                $ul.slideDown();
            }
        })
    })
</script>
</body>
</html>
<?php }} ?>
