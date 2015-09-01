<?php /* Smarty version Smarty-3.1.16, created on 2015-08-31 20:03:01
         compiled from "Tpl\admin\albumEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:806855e4262e6f9bd0-41008108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '053569c89de3ecbabf3499165a5c7881d8f2fe78' => 
    array (
      0 => 'Tpl\\admin\\albumEdit.html',
      1 => 1441022578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '806855e4262e6f9bd0-41008108',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e4262e793fe3_67572452',
  'variables' => 
  array (
    'data' => 0,
    'albumList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4262e793fe3_67572452')) {Function content_55e4262e793fe3_67572452($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
        <li><a href="#">管理相册</a></li>
        <li><a href="#">编辑相册</a></li>
    </ul>
</div>

<div class="formbody">
    <div class="formtitle"><span>分类信息</span></div>
    <form action="admin.php?c=Album&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['albumId'];?>
" method="post">
        <ul class="forminfo">
            <li><label>分类名称</label><input name="albumName" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['albumName'];?>
" class="dfinput"/><i>名称不能超过15个字</i>
            </li>
            <li>
                <label>上级分类</label>
                <select name="parentId" id="">
                    <option value="0">顶级分类</option>
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
                    <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumId'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['data']->value['parentId']==$_tmp1) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumId'];?>
"><?php echo str_repeat('&emsp;',$_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['lev']);?>
<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumName'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </li>
            <li><label>栏目简介</label><textarea name="intro" cols="" rows="" class="textinput"><?php echo $_smarty_tpl->tpl_vars['data']->value['intro'];?>
</textarea></li>
            <li><label>&nbsp;</label><input type="submit" class="btn" value="确认保存"/></li>
        </ul>
    </form>

</div>


</body>

</html>
<?php }} ?>
