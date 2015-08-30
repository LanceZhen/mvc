<?php /* Smarty version Smarty-3.1.16, created on 2015-08-28 19:14:22
         compiled from "Tpl\admin\category.html" */ ?>
<?php /*%%SmartyHeaderCode:1787855defee45c9af4-77766076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '457eeb0b848224fa94d0e9db27c5a5f25e896f02' => 
    array (
      0 => 'Tpl\\admin\\category.html',
      1 => 1440760249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1787855defee45c9af4-77766076',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55defee4604876_78709408',
  'variables' => 
  array (
    'categoryList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55defee4604876_78709408')) {Function content_55defee4604876_78709408($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <li><a href="#">文章管理</a></li>
    <li><a href="#">管理分类</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
	        <li class="click" onclick="location.href='admin.php?c=Category&m=add'"><span><img src="Tpl/admin/images/t01.png" /></span>添加</li>
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
		        <th width="35%">分类名称</th>
		        <th width="35%">栏目简介</th>
	       		<th width="20%">操作</th>
	        </tr>
        </thead>
        <tbody>
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
	        <tr>
		        <td><input type="checkbox"></td>
		        <td style="padding-left: <?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['lev']*2;?>
em;"><?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_name'];?>
</td>
		        <td><?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['intro'];?>
</td>
		        <td><a class='tablelink' href="admin.php?c=Category&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_id'];?>
">编辑</a>&nbsp;&nbsp;<a class='tablelink del' href="admin.php?c=Category&m=del&id=<?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_id'];?>
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
