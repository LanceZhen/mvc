<?php /* Smarty version Smarty-3.1.16, created on 2015-08-31 10:14:08
         compiled from "Tpl\admin\articleEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:1127855e3afdf4b21b2-52876206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be1e32fc4ccb26ffefb09ab27017f603fe4f2026' => 
    array (
      0 => 'Tpl\\admin\\articleEdit.html',
      1 => 1440987244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127855e3afdf4b21b2-52876206',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e3afdf516459_82417403',
  'variables' => 
  array (
    'data' => 0,
    'categoryList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3afdf516459_82417403')) {Function content_55e3afdf516459_82417403($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CMS</title>
    <link href="Tpl/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        cite input{ vertical-align: middle; margin-right: 4px;}
        cite label:nth-child(2) input{ margin-left: 20px;}
    </style>
    <script src="Tpl/admin/js/My97DatePicker/WdatePicker.js"></script>
</head>

<body>
<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">文章管理</a></li>
        <li><a href="#">添加文章</a></li>
    </ul>
</div>

<div class="formbody">

    <div class="formtitle"><span>文章信息</span></div>
    <form action="admin.php?c=Article&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" method="post">
    <ul class="forminfo">
        <li><label>文章标题</label><input name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" class="dfinput"/><i>标题不能超过30个字符</i></li>
        <li><label>文章分类</label>
            <select name="categoryId" id="">
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
                <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_id'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['data']->value['categoryId']==$_tmp1) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_id'];?>
"><?php echo str_repeat('&emsp;',$_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['lev']);?>
<?php echo $_smarty_tpl->tpl_vars['categoryList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_name'];?>
</option>
                <?php endfor; endif; ?>
            </select>
        </li>
        <li><label for="">发布时间</label><input name="postTime" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['postTime'];?>
"  type="text" class="dfinput" onClick="WdatePicker()" style="width: 150px;"></li>
        <li><label for="">文章摘要</label><textarea name="summary" class="textinput" style="height: 60px;" rows="" cols=""><?php echo $_smarty_tpl->tpl_vars['data']->value['summary'];?>
</textarea><i>小于100个汉字</i></li>
        <li><label for="">文章作者</label><input name="author" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
" type="text" class="dfinput"></li>
        <li><label for="">文章来源</label><input name="source" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['source'];?>
" type="text" class="dfinput"></li>
        <li><label>关键字</label><input name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['keyword'];?>
" type="text" class="dfinput"/><i>多个关键字用,隔开</i></li>
        <li><label>是否推荐</label><cite><label><input name="isRecommend" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['isRecommend']==1) {?> checked <?php }?>/>是</label><label><input name="isRecommend" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['isRecommend']==0) {?> checked <?php }?>/>否</label></cite></li>
        <li><label>文章内容</label>
            <!-- 加载编辑器的容器 -->
            <script id="container"  name="content" style="display:inline-block;width:1000px;height:400px;" type="text/plain"></script>
        </li>
        <li><label>&nbsp;</label><input type="submit" class="btn" value="确认保存"/></li>
    </ul>
    </form>
</div>
<!-- 配置文件 -->
<script type="text/javascript" src="Tpl/admin/js/ueditor1_4_3-utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="Tpl/admin/js/ueditor1_4_3-utf8-php/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');

//    var ue = UE.getContent();
    //对编辑器的操作最好在编辑器ready之后再做
    ue.ready(function() {
        //设置编辑器的内容
        ue.setContent('<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
');
        //获取html内容，返回: <p>hello</p>
//        var html = ue.getContent();
        //获取纯文本内容，返回: hello
//        var txt = ue.getContentTxt();
    });
</script>
</body>
</html>
<?php }} ?>
