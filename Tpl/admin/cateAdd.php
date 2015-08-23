<?php
require_once '../include/init.php';

$cate = new cateModel();
$cateList = $cate->select();
$cateList = $cate->getCateTree($cateList);

include(ROOT.'admin/categoryAdd.html');
