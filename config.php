<?php
/**
 * 系统配置
 */
$config = array(
    //模板引擎
//      $smarty->left_delimiter=$config["left_delimiter"];//左定界符
//		$smarty->right_delimiter=$config["right_delimiter"];//右定界符
//		$smarty->template_dir=$config["template_dir"];//html模板的地址
//		$smarty->compile_dir=$config["compile_dir"];//模板编译生成的文件
//		$smarty->cache_dir=$config["cache_dir"];//缓存*/
    'view' => array(
        'left_delimiter' => '{=',
        'right_delimiter' => '}',
        'template_dir' => 'Tpl',
        'compile_dir' => 'data/template_c'),
    //数据库
    'db' => array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'name' => 'frame',
        'charset' => 'utf8')
);