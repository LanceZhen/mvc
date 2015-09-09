<?php /* Smarty version Smarty-3.1.16, created on 2015-09-09 16:40:10
         compiled from "Tpl\admin\pictureAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:524955eff06ab09fd2-22385633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ccd99c012201123d281249ff20cc7f58aa21d76' => 
    array (
      0 => 'Tpl\\admin\\pictureAdd.html',
      1 => 1441090915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '524955eff06ab09fd2-22385633',
  'Function' => 
  array (
  ),
  'variables' => 
  array (
    'albumList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55eff06ab6caa6_98270129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eff06ab6caa6_98270129')) {Function content_55eff06ab6caa6_98270129($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
        <li><a href="#">相册管理</a></li>
        <li><a href="#">添加相片</a></li>
    </ul>
</div>

<div class="formbody">

    <div class="formtitle"><span>相片信息</span></div>
    <form action="admin.php?c=Picture&m=add" method="post" enctype="multipart/form-data">
        <ul class="forminfo">
            <li><label>图片标题</label><input name="title" type="text" class="dfinput"/></li>
            <li><label>添加到相册</label>
                <select name="albumId">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['album'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['album']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['albumList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['name'] = 'album';
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total']);
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumId'];?>
"><?php echo str_repeat('&emsp;',$_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['lev']);?>
<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumName'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </li>
            <li><label>图片描述</label><textarea name="intro" rows="" cols="" class="textinput" style="height: 60px;"></textarea></li>
            <li><label>上传图片</label><input style="padding-top: 8px;" name="picture" type="file" style="height: 32px; vertical-align: middle;"></li>
            <li><label>图片处理</label></label><cite style="display:inline-block;"><input name="hasThumb" type="checkbox" value="1" checked/>生成缩略图&nbsp;&emsp;<input name="hasMark" type="checkbox" value="1" checked />加水印</cite></li>
            <li><label>图片预览</label><img style="border: 1px solid #707070; margin-top: 8px;" src="Tpl/admin/images/no_image.gif" alt=""></li>
            <li><label>&nbsp;</label><input type="submit" class="btn" value="确认保存"/></li>
        </ul>
    </form>

</div>


</body>

</html>
<?php }} ?>
