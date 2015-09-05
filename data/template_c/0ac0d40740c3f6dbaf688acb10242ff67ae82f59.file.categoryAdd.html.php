<?php /* Smarty version Smarty-3.1.16, created on 2015-09-05 18:23:59
         compiled from "Tpl\admin\categoryAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:2898855eac2bf115105-08374588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac0d40740c3f6dbaf688acb10242ff67ae82f59' => 
    array (
      0 => 'Tpl\\admin\\categoryAdd.html',
      1 => 1441020358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2898855eac2bf115105-08374588',
  'Function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55eac2bf1ae3d2_06479705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eac2bf1ae3d2_06479705')) {Function content_55eac2bf1ae3d2_06479705($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
            <li><label>分类名称</label><input name="categoryName" type="text" class="dfinput"/><i>名称不能超过15个字</i>
            </li>
            <li>
                <label>上级分类</label>
                <select name="parentId" id="">
                    <option value="0">顶级分类</option>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['category'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['category']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categoryList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['name'] = 'category';
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total']);
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['categoryId'];?>
"><?php echo str_repeat('&emsp;',$_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['lev']);?>
<?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['categoryName'];?>
</option>
                    <?php endfor; endif; ?>
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
