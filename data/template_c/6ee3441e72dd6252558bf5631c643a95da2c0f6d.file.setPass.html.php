<?php /* Smarty version Smarty-3.1.16, created on 2015-08-27 19:57:21
         compiled from "Tpl\admin\setPass.html" */ ?>
<?php /*%%SmartyHeaderCode:70955dec7d1a9a4b9-59513400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ee3441e72dd6252558bf5631c643a95da2c0f6d' => 
    array (
      0 => 'Tpl\\admin\\setPass.html',
      1 => 1440676640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70955dec7d1a9a4b9-59513400',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55dec7d1ac41a3_64073116',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dec7d1ac41a3_64073116')) {Function content_55dec7d1ac41a3_64073116($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .tablelist input[type='text'],.tablelist input[type='number'],.tablelist input[type='password']{ width: 80px; height: 24px; line-height: 24px; border: 1px solid #D1D1D1; text-indent: 8px; margin-right: 8px;}
        .tablelist input[type='radio']{ margin-right: 4px; vertical-align: middle;}
        .tablelist label{ margin-right: 20px }
        .tablelist .tr1 input{ width: 150px;}
        .tablelist input[type='submit'],.tablelist input[type='reset']{ margin: 10px 20px 10px 0; height: 26px; padding: 0 10px; border: 1px solid #B6B3AF; background: #D6D6D6; color: #333333; }
    </style>
    <script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>
    <script type="text/javascript" src="Tpl/admin/js/layer/layer.js"></script>


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
<a href="javascript:;" id="a">12112</a>
<div class="rightinfo" style="width: 500px; margin: 100px auto;">
    <form action="admin.php?c=User&m=setPass" method="post">
    <table class="tablelist">
        <tbody>
            <tr>
                <td>原始密码：</td>
                <td><input name="oldPass" type="password" value=""></td>
            </tr>
            <tr>
                <td>新密码：</td>
                <td><input name="newPass" type="password" value=""></td>
            </tr>
            <tr>
                <td>新密码：</td>
                <td><input name="cfmPass" type="password" value=""></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="提交"><input type="reset" value="重设"></td>
            </tr>
        </tbody>
    </table>
    </form>
</div>

<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
    $(function(){
        $('#a').click(function(){
            layer.alert('见到你真的很高兴');
            return false;
//            /*$.ajax({
//                type:'POST',
//                dataType:'json',
//                data:{
//                    oldPass:$('#oldPass').val(),
//                    newPass:$('#newPass').val(),
//                    cfmPass:$('#cfmPass').val()
//                },
//                url:'admin.php?c=User&m=setPass',
//                success:function(msg){
//                    alert(msg);
//                }
//            })*/
        })
    })
</script>

</body>

</html>
<?php }} ?>
