<?php /* Smarty version Smarty-3.1.16, created on 2015-09-07 14:59:10
         compiled from "Tpl\admin\user.html" */ ?>
<?php /*%%SmartyHeaderCode:923255eaa61eb1e5f5-06832098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0221892608a5cdc7a08e4c0aad2f850e3af84a' => 
    array (
      0 => 'Tpl\\admin\\user.html',
      1 => 1441502862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '923255eaa61eb1e5f5-06832098',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55eaa61ebe5a41_13502241',
  'variables' => 
  array (
    'userList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eaa61ebe5a41_13502241')) {Function content_55eaa61ebe5a41_13502241($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <li><a href="#">帐号管理</a></li>
    <li><a href="#">管理帐号</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
	        <li class="click" onclick="location.href='admin.php?c=User&m=add'"><span><img src="Tpl/admin/images/t01.png" /></span>添加</li>
	        <!--<li class="click"><span><img src="Tpl/admin/images/t02.png" /></span>修改</li>-->
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
		        <!--<th width="5%">编号<i class="sort"><img src="Tpl/admin/images/px.gif" /></i></th>-->
		        <th width="35%">用户名</th>
	       		<th width="20%">操作</th>
	        </tr>
        </thead>
        <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['userList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
	        <tr>
		        <td><input type="checkbox"></td>
		        <td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'];?>
</td>
		        <td><a class='tablelink' href="admin.php?c=User&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
">编辑</a>&nbsp;&nbsp;<a class='tablelink del' href="admin.php?c=User&m=del&id=<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
" onclick="return confirm('确定要删除吗？')">删除</a></td>
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
