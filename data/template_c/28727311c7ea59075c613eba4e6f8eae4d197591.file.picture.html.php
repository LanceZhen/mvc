<?php /* Smarty version Smarty-3.1.16, created on 2015-08-31 20:39:51
         compiled from "Tpl\admin\picture.html" */ ?>
<?php /*%%SmartyHeaderCode:1836155e44ae57d8bc0-17732215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28727311c7ea59075c613eba4e6f8eae4d197591' => 
    array (
      0 => 'Tpl\\admin\\picture.html',
      1 => 1441024790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1836155e44ae57d8bc0-17732215',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e44ae581e7b9_01564962',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44ae581e7b9_01564962')) {Function content_55e44ae581e7b9_01564962($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>
    <script language="javascript">
        $(function () {
            //导航切换
            $(".imglist li").click(function () {
                $(".imglist li.selected").removeClass("selected")
                $(this).addClass("selected");
            })
        })
    </script>
</head>


<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">相册管理</a></li>
        <li><a href="#">管理图片</a></li>
    </ul>
</div>

<div class="rightinfo">

    <div class="tools">

        <ul class="toolbar">
            <li class="click" onclick="location.href='admin.php?picture&m=add'"><span><img src="Tpl/admin/images/t01.png"/></span>添加</li>
            <li class="click"><span><img src="Tpl/admin/images/t02.png"/></span>修改</li>
            <li><span><img src="Tpl/admin/images/t03.png"/></span>删除</li>
            <li><span><img src="Tpl/admin/images/t04.png"/></span>统计</li>
        </ul>


        <ul class="toolbar1">
            <li><span><img src="Tpl/admin/images/t05.png"/></span>设置</li>
        </ul>

    </div>


    <ul class="imglist">

        <li class="selected">
            <span><img src="Tpl/admin/images/img01.png"/></span>

            <h2><a href="#">软件界面设计下载</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="Tpl/admin/images/img02.png"/></span>

            <h2><a href="#">界面样式素材下载</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="Tpl/admin/images/img03.png"/></span>

            <h2><a href="#">弹出小窗口界面设计教程</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="images/img04.png"/></span>

            <h2><a href="#">羽毛图标设计教程</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="images/img05.png"/></span>

            <h2><a href="#">日历组件样式设计</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="images/img06.png"/></span>

            <h2><a href="#">羽毛图标设计教程</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="images/img07.png"/></span>

            <h2><a href="#">弹出小窗口界面设计教程</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="images/img08.png"/></span>

            <h2><a href="#">弹出小窗口界面设计教程</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="images/img09.png"/></span>

            <h2><a href="#">弹出小窗口界面设计教程</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

        <li>
            <span><img src="images/img10.png"/></span>

            <h2><a href="#">软件界面设计下载</a></h2>

            <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">删除</a></p>
        </li>

    </ul>


    <div class="pagin">
        <div class="message">共<i class="blue">1256</i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>
        <ul class="paginList">
            <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
            <li class="paginItem"><a href="javascript:;">1</a></li>
            <li class="paginItem current"><a href="javascript:;">2</a></li>
            <li class="paginItem"><a href="javascript:;">3</a></li>
            <li class="paginItem"><a href="javascript:;">4</a></li>
            <li class="paginItem"><a href="javascript:;">5</a></li>
            <li class="paginItem more"><a href="javascript:;">...</a></li>
            <li class="paginItem"><a href="javascript:;">10</a></li>
            <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
        </ul>
    </div>


    <div class="tip">
        <div class="tiptop"><span>提示信息</span><a></a></div>

        <div class="tipinfo">
            <span><img src="images/ticon.png"/></span>

            <div class="tipright">
                <p>是否确认对信息的修改 ？</p>
                <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
            </div>
        </div>

        <div class="tipbtn">
            <input name="" type="button" class="sure" value="确定"/>&nbsp;
            <input name="" type="button" class="cancel" value="取消"/>
        </div>

    </div>


</div>


</body>

</html>
<?php }} ?>
