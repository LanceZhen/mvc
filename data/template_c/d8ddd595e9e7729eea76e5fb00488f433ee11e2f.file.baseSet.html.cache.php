<?php /* Smarty version Smarty-3.1.16, created on 2015-08-26 17:16:40
         compiled from "Tpl\admin\baseSet.html" */ ?>
<?php /*%%SmartyHeaderCode:1591555dd83f86a5507-00147368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ddd595e9e7729eea76e5fb00488f433ee11e2f' => 
    array (
      0 => 'Tpl\\admin\\baseSet.html',
      1 => 1440579504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591555dd83f86a5507-00147368',
  'Function' => 
  array (
  ),
  'variables' => 
  array (
    'articlePageSize' => 0,
    'picturePageSize' => 0,
    'waterText1' => 0,
    'waterText2' => 0,
    'width' => 0,
    'height' => 0,
    'maxWidth' => 0,
    'maxHeight' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55dd83f8705af4_47704590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dd83f8705af4_47704590')) {Function content_55dd83f8705af4_47704590($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .tablelist input[type='text'],.tablelist input[type='number']{ width: 80px; height: 24px; line-height: 24px; border: 1px solid #D1D1D1; text-indent: 8px; margin-right: 8px;}
        .tablelist input[type='radio']{ margin-right: 4px; vertical-align: middle;}
        .tablelist label{ margin-right: 20px }
        .tablelist .tr1 input{ width: 150px;}
        .tablelist input[type='submit'],.tablelist input[type='reset']{ margin: 10px 20px 10px 0; height: 26px; padding: 0 10px; border: 1px solid #B6B3AF; background: #D6D6D6; color: #333333; }
    </style>
    <script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>


</head>


<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">商品分类</a></li>
        <li><a href="#">分类列表</a></li>
    </ul>
</div>

<div class="rightinfo" style="width: 500px; margin: 100px auto;">

    <table class="tablelist">
        <tbody>
            <tr>
                <td>后台文章每页显示数目:</td>
                <td><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['articlePageSize']->value;?>
">条/页</td>
            </tr>
            <tr>
                <td>后台图片每页显示数目</td>
                <td><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['picturePageSize']->value;?>
">条/页</td>
            </tr>
            <tr>
                <td>后台图片显示方式</td>
                <td><label><input type="radio" name="pictureShowType" value="list">列表</label>
                    <label><input type="radio" name="pictureShowType" value="thumb"/>缩略图</label>
                </td>
            </tr>
            <tr class="tr1">
                <td>水印文字</td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['waterText1']->value;?>
"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['waterText2']->value;?>
"></td>
            </tr>
            <tr>
                <td>缩略图尺寸</td>
                <td>宽 <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
">px 　 高 <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
">px</td>
            </tr>
            <tr>
                <td>图片上传后的最大尺寸</td>
                <td>宽 <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
">px 　 高 <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['maxHeight']->value;?>
">px</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="提交"><input type="reset" value="重设"></td>
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