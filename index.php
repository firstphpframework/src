<?php
header("Content-type: text/html; charset=utf-8");

define('BASE_PATH',dirname(__FILE__).DIRECTORY_SEPARATOR);

// 引入公共函数
include BASE_PATH.'functiones'.DIRECTORY_SEPARATOR.'global.func.php';
include BASE_PATH.'framework'.DIRECTORY_SEPARATOR.'Dispatch.php';
// 启动分发类
$dispatch = Dispatch::getInstance();
