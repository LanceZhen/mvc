<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
	    <li><a href="#">首页</a></li>
	    <li><a href="#">商品分类</a></li>
	    <li><a href="#">分类列表</a></li>
	    <li><a href="#">修改分类</a></li>
    </ul>
    </div>
    
    <div class="formbody">
	    <div class="formtitle"><span>基本信息</span></div>
	    <form action="doAdmin.php?act=modCate&id=<?php echo $cateInfo['cate_id'] ?>" method="post">
		    <ul class="forminfo">
			    <li><label>分类名称</label><input name="cate_name" type="text" class="dfinput" required value="<?php echo $cateInfo['cate_name']?>" /><i>名称不能超过15个字</i></li>
			    <li>
			    	<label>上级分类</label>
					<select name="parent_id" id="">
						<option value="0">顶级分类</option>
					<?php foreach ($cateList as $v){ ?>
						<option value="<?php echo $v['cate_id'] ?>" <?php echo $cateInfo['parent_id'] == $v['cate_id']? 'selected':'' ?> >
						<?php echo str_repeat('&nbsp;&nbsp;', $v['lev']); echo $v['cate_name'] ?></option>
					<?php } ?>
					</select>
			    </li>
			    <li><label>栏目简介</label><textarea name="intro" cols="" rows="" class="textinput"><?php echo $cateInfo['intro'] ?></textarea></li>
			    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
		    </ul>
	    </form>
    
    </div>


</body>

</html>
