<?php
require_once 'vendor/autoload.php';

$http = new WebWorker\App('0.0.0.0',1215);
//进程名字
$http->name = "xtgxiso";
//工作进程数量
$http->count = 4;
//初始化加载的目录，仅支持一级目录加载，不支持递归。这些目录下的代码支持reload更新
$http->autoload = array(__DIR__."/controllers/",__DIR__."/libs/",__DIR__."/funcs/",__DIR__."/models/");

//运行服务
$http->run();


