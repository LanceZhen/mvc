<?php /* Smarty version Smarty-3.1.16, created on 2015-08-31 16:48:11
         compiled from "Tpl\admin\article.html" */ ?>
<?php /*%%SmartyHeaderCode:2351155e07178276fb7-25989663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e14a6f478a4fbf81932f82d17f6ca92406e441' => 
    array (
      0 => 'Tpl\\admin\\article.html',
      1 => 1441010887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2351155e07178276fb7-25989663',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e071782f0ca0_52763060',
  'variables' => 
  array (
    'data' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e071782f0ca0_52763060')) {Function content_55e071782f0ca0_52763060($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li><a href="#">管理文章</a></li>
    </ul>
</div>

<div class="rightinfo">
    <form id="form" action="" method="post">
        <div class="tools">
            <ul class="toolbar">
                <li class="click" onclick="location.href='admin.php?c=Article&m=add'"><span><img
                        src="Tpl/admin/images/t01.png"/></span>添加
                </li>
                <!--<li class="click"><span><img src="Tpl/admin/images/t02.png" /></span>修改</li>-->
                <li id="audit"><span><img src="Tpl/admin/images/t02.png"/></span>审核
                </li>
                <li id="lock"><span><img src="Tpl/admin/images/t02.png"/></span>锁定</li>
                <li id="del"><span><img src="Tpl/admin/images/t03.png"/></span>删除</li>
                <li><span><img src="Tpl/admin/images/t04.png"/></span>统计</li>
                <!--<input id="action" type="hidden" name="action" value="aduit">-->
            </ul>
            <ul class="toolbar1">
                <li><span><img src="Tpl/admin/images/t05.png"/></span>设置</li>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
                <th width="3%"><input id="all" type="checkbox" value=""/></th>
                <th width="20%">标题</th>
                <th width="20%">摘要</th>
                <th width="20%">类别</th>
                <th width="10%">发布时间</th>
                <th width="5%">是否审核</th>
                <th width="">操作</th>
            </tr>
            </thead>
            <tbody id="list">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
            <tr>
                <td><input name="idList[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
" type="checkbox"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['summary'];?>
</td>
                <td style="padding-left: <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['lev']*2;?>
em;"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['categoryName'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['postTime'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['audit']==0) {?>未审核<?php } else { ?>已审核<?php }?></td>
                <td>
                    <a class='tablelink'
                       href="admin.php?c=Article&m=audit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
&action=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['auditAction'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['auditText'];?>
</a>&nbsp;&nbsp;
                    <a href="admin.php?c=Article&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
" class="tablelink">编辑</a>&nbsp;&nbsp;
                    <a class='tablelink del' href="admin.php?c=Article&m=del&id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"
                       onclick="return confirm('确定要删除吗？')">删除</a></td>
            </tr>
            <?php endfor; endif; ?>
            </tbody>
        </table>
    </form>
    <div class="<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
 not-content">暂时没有文章!</div>

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
            <span><img src="Tpl/admin/images/ticon.png"/></span>

            <div class="tipright">
                <p>是否确认对信息的修改 ？</p>
                <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
            </div>
        </div>

        <div class="tipbtn">
            <input type="button" class="sure" value="确定"/>&nbsp;
            <input type="button" class="cancel" value="取消"/>
        </div>

    </div>


</div>

<script type="text/javascript" src="Tpl/admin/js/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        /*$(".del").click(function(){
         $(".tip").fadeIn(300);
         });*/

        //   $(".tiptop a,.cancel").click(function(){
        //         $(".tip").fadeOut(300);
        // });

        //   $(".sure").click(function(){
        //         window.location.href="";
        // });

        //全选，反选
        $('#all').click(function () {
            if (this.checked) {
                $('#list :checkbox').attr('checked', true);
            } else {
                $('#list :checkbox').attr('checked', false);
            }
        })
    });
    //审核
    $('#audit').click(function(){
        $('#form').attr('action','admin.php?c=Article&m=audit&action=auditArticle').submit();
    })
    //锁定
    $('#lock').click(function(){
        $('#form').attr('action','admin.php?c=Article&m=audit&action=lockArticle').submit();
    })
    //删除
    $('#del').click(function(){
        $('#form').attr('action','admin.php?c=Article&m=del').submit();
    })
</script>
<script type="text/javascript">
//    $('.tablelist tbody tr:odd').addClass('odd');
</script>

</body>

</html>
<?php }} ?>
