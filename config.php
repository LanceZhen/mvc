<?php
/**
 * 系统配置
 */
$config = array(
    //数据库
    'DB' => array(
        'HOST' => 'localhost',
        'USER' => 'root',
        'PASS' => '',
        'NAME' => 'frame',
        'CHARSET' => 'utf8',
        'PREFIX' => 'cms'
    ),
    //模板引擎
//      $smarty->left_delimiter=$config["left_delimiter"];//左定界符
//		$smarty->right_delimiter=$config["right_delimiter"];//右定界符
//		$smarty->template_dir=$config["template_dir"];//html模板的地址
//		$smarty->compile_dir=$config["compile_dir"];//模板编译生成的文件
//		$smarty->cache_dir=$config["cache_dir"];//缓存*/
// caching  0：Smarty默认值，表示不对模板进行缓存；1：表示Smarty将使用当前定义的cache_lifetime来决定是否结束cache；2：表示
    //Smarty将使用在cache被建立时使用cache_lifetime这个值。习惯上使用true与false来表示是否进行缓存。
    //单位cache_lifetime 秒
    'VIEW' => array(
        'left_delimiter' => '{',
        'right_delimiter' => '}',
        'template_dir' => 'Tpl',
        'compile_dir' => 'data/template_c',
        'caching' => false,
        'cache_lifetime' => 60 * 60 * 24,
       // 'cache_dir' => 'data/cache'
    ),
    //分页 每页显示的数量
    'PAGING' => array(
        'ARTICLE' => 4,
        'PICTURE' => 5
    ),
    //缩略图大小
    'THUMB_SIZE' => array(
        'WIDTH' => 100,
        'HEIGHT' => 100
    ),
    //生成后大小
    'PICTURE_SIZE' => array(
        'WIDTH' => 500,
        'HEIGHT' => 500
    ),
    //水印文字
    'WATER_TEXT' => array('Lance','all rights reserved'),
    //图片显示方式
    'PICTURE_SHOW_TYPE' => 'thumb',
    //URL设置
    'URL_MODEL' => 0// 0 (普通模式); 1 (PATHINFO 模式);

);