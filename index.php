<?php
//入口文件
/*$_GET['c'] = empty($_GET['c']) ? 'Home' : $_GET['c'];
$_GET['m'] = empty($_GET['m']) ? 'index' : $_GET['m'];*/

require_once('Frame/start.php');
$config = Config::getInstance()->getConf();
$config['URL_MODEL'] = 1;
start::run($config);

