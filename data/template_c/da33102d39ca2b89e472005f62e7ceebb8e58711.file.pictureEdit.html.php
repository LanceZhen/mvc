<?php /* Smarty version Smarty-3.1.16, created on 2015-09-07 14:59:03
         compiled from "Tpl\admin\pictureEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:2243855eac2f6a89642-17250679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da33102d39ca2b89e472005f62e7ceebb8e58711' => 
    array (
      0 => 'Tpl\\admin\\pictureEdit.html',
      1 => 1441502862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2243855eac2f6a89642-17250679',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55eac2f6b5f195_94532786',
  'variables' => 
  array (
    'pic' => 0,
    'albumList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eac2f6b5f195_94532786')) {Function content_55eac2f6b5f195_94532786($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
    <form action="admin.php?c=Picture&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['pic']->value['id'];?>
" method="post" enctype="multipart/form-data">
        <ul class="forminfo">
            <li><label>图片标题</label><input name="title"  value="<?php echo $_smarty_tpl->tpl_vars['pic']->value['title'];?>
" type="text" class="dfinput"/></li>
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
                    <option <?php if ($_smarty_tpl->tpl_vars['pic']->value['albumId']==$_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumId']) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumId'];?>
"><?php echo str_repeat('&emsp;',$_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['lev']);?>
<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['albumName'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </li>
            <li><label>图片描述</label><textarea name="intro" rows="" cols="" class="textinput" style="height: 60px;"><?php echo $_smarty_tpl->tpl_vars['pic']->value['intro'];?>
</textarea></li>
            <li><label>修改图片</label><img id="pic" src="<?php echo $_smarty_tpl->tpl_vars['pic']->value['path'];?>
" alt=""><input style="padding-top: 8px;" name="picture" id="picture" type="file" style="height: 32px; vertical-align: middle;"></li>
            <li><label>图片处理</label></label><cite style="display:inline-block;"><input name="hasThumb" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['pic']->value['hasThumb']==1) {?> checked <?php }?>/>生成缩略图&nbsp;&emsp;<input name="hasMark" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['pic']->value['hasMark']==1) {?> checked <?php }?> />加水印</cite></li>
            <li><label>&nbsp;</label><input type="submit" class="btn" value="确认保存"/></li>
        </ul>
    </form>

</div>

<script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>
<script type="text/javascript">
    $(function(){
        $('#picture').change(function(){
            $('#pic').remove();
        })
    })
</script>
</body>

</html>
<?php }} ?>
