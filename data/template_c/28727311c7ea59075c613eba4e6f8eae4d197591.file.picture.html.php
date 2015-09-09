<?php /* Smarty version Smarty-3.1.16, created on 2015-09-09 16:42:07
         compiled from "Tpl\admin\picture.html" */ ?>
<?php /*%%SmartyHeaderCode:1463055eff0df611f27-37190343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28727311c7ea59075c613eba4e6f8eae4d197591' => 
    array (
      0 => 'Tpl\\admin\\picture.html',
      1 => 1441502862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1463055eff0df611f27-37190343',
  'Function' => 
  array (
  ),
  'variables' => 
  array (
    'picList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55eff0df676f09_70653246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eff0df676f09_70653246')) {Function content_55eff0df676f09_70653246($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
            <li class="click" onclick="location.href='admin.php?c=Picture&m=add'"><span><img src="Tpl/admin/images/t01.png"/></span>添加</li>
            <li class="click"><span><img src="Tpl/admin/images/t02.png"/></span>修改</li>
            <li><span><img src="Tpl/admin/images/t03.png"/></span>删除</li>
            <li><span><img src="Tpl/admin/images/t04.png"/></span>统计</li>
        </ul>


        <ul class="toolbar1">
            <li><span><img src="Tpl/admin/images/t05.png"/></span>设置</li>
        </ul>

    </div>


    <ul class="imglist">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['picList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['name'] = 'pic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total']);
?>
        <li class="selected">
            <span><img src="<?php echo $_smarty_tpl->tpl_vars['picList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['thumbPath'];?>
"/></span>
            <h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['picList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['title'];?>
</a></h2>
            <p><a href="admin.php?c=Picture&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['picList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['id'];?>
">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?c=Picture&m=del&id=<?php echo $_smarty_tpl->tpl_vars['picList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['id'];?>
" onclick="if(!window.confirm('确定删除？')) return false;">删除</a></p>
        </li>
        <?php endfor; endif; ?>
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
