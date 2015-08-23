<?php 
require_once '../include/init.php';
$id = _get('id')+0;

$cate = new cateModel();
$cateInfo = $cate->find($id);  	

$cateList = $cate->select();
$cateList = $cate->getCateTree($cateList);

include('categoryMod.php');