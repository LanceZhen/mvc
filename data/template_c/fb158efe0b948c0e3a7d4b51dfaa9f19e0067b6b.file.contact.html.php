<?php /* Smarty version Smarty-3.1.16, created on 2015-09-05 23:51:51
         compiled from "Tpl\admin\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:449555eb0e3e8d6430-81838510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb158efe0b948c0e3a7d4b51dfaa9f19e0067b6b' => 
    array (
      0 => 'Tpl\\admin\\contact.html',
      1 => 1441468310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '449555eb0e3e8d6430-81838510',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55eb0e3e9b7f84_68487997',
  'variables' => 
  array (
    'contactList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eb0e3e9b7f84_68487997')) {Function content_55eb0e3e9b7f84_68487997($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css" />



</head>


<body>
	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">留言管理</a></li>
    <li><a href="#">管理留言</a></li>
    </ul>
    </div>

    <div class="rightinfo">

    <div class="tools">

    	<ul class="toolbar">
	        <li><span><img src="Tpl/admin/images/t03.png" /></span>删除</li>
	        <li><span><img src="Tpl/admin/images/t04.png" /></span>统计</li>
        </ul>


        <ul class="toolbar1">
        <li><span><img src="Tpl/admin/images/t05.png" /></span>设置</li>
        </ul>

    </div>


    <table class="tablelist">
    	<thead>
	    	<tr>
		        <th width="5%"><input name="" type="checkbox" value="" /></th>
		        <th width="10%">用户名</th>
		        <th width="10%">邮箱</th>
	       		<th width="10%">网址</th>
	       		<th width="30%">留言内容</th>
	       		<th width="10%">操作</th>
	        </tr>
        </thead>
        <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contact'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contactList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['name'] = 'contact';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total']);
?>
	        <tr>
		        <td><input type="checkbox"></td>
		        <td><?php echo $_smarty_tpl->tpl_vars['contactList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['name'];?>
</td>
		        <td><?php echo $_smarty_tpl->tpl_vars['contactList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['email'];?>
</td>
		        <td><?php echo $_smarty_tpl->tpl_vars['contactList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['webSite'];?>
</td>
		        <td><?php echo $_smarty_tpl->tpl_vars['contactList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['message'];?>
</td>
		        <td><a class="tablelink" href="index.php?c=Home&m=delContact&id=<?php echo $_smarty_tpl->tpl_vars['contactList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['id'];?>
" onclick="if(!window.confirm('确定删除')) return false;">删除</a></td>
	        </tr>
            <?php endfor; endif; ?>
        </tbody>
    </table>


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
        <span><img src="Tpl/admin/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>

        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>

    </div>




    </div>

    <script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
    //   $(".del").click(function(){

    //         $(".tip").fadeIn(300);
    //   });

    //   $(".tiptop a,.cancel").click(function(){
    //         $(".tip").fadeOut(300);
    // });

    //   $(".sure").click(function(){
    //         window.location.href="";
    // });



    });
    </script>
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>


</body>

</html>
<?php }} ?>
