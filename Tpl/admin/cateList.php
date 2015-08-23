<?php
require_once '../include/init.php';
$cate = new cateModel();
$cateList = $cate->select();
$cateList = $cate->getCateTree($cateList,0);

include(ROOT."admin/category.html");