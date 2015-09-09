<?php
//入口文件
require_once('Frame/start.php');
$config = Config::getInstance()->getConf();
start::run($config);
