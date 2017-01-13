<?php
require_once 'vendor/autoload.php';

//加载配置文件
define("WebWorker_RUN",getenv("WebWorker_RUN"));
if ( WebWorker_RUN == "production" ) {
    require_once __DIR__ . '/config/config_production.php';
}else if ( WebWorker_RUN == "testing" ) {
    require_once __DIR__ . '/config/config_testing.php';
}else if ( WebWorker_RUN == "development"  ) {
    require_once __DIR__ . '/config/config_development.php';
}else {
    require_once __DIR__ . '/config/config_production.php';
}

$http = new WebWorker\App('0.0.0.0',1215);

$http->config = $config;

//进程名字
$http->name = "xtgxiso";
//工作进程数量
$http->count = 4;
//初始化加载的目录，仅支持一级目录加载，不支持递归。这些目录下的代码支持reload更新
$http->autoload = array(__DIR__."/controllers/",__DIR__."/libs/",__DIR__."/funcs/",__DIR__."/models/");

//运行服务
$http->run();


