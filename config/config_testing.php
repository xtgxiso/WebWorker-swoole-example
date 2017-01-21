<?php
//开发环境配置参数
$config = array();
$config["redis"]["host"] = "127.0.0.1";
$config["redis"]["port"] = 6379;
$config["redis"]["password"] = "123456";
$config["redis"]["db"] = 1;
//是否自动初始化连接
$config["redis"]["load"] = 1;
//是否启用协程redis库
$config["redis"]["coroutine"] = 1;
//记录redis连接池数量
$config["redis"]["coroutine_count"] = 0;
//存放所有的redis连接
$config["redis"]["coroutine_pool"] = new SplQueue();

$config["db"]["host"] = "127.0.0.1";
$config["db"]["user"] = "root";
$config["db"]["password"] = "123456";
$config["db"]["db"] = "test";
$config["db"]["port"] = 3306;
$config["db"]["charset"] = "utf8";
//是否自动初始化连接
$config["db"]["load"] = 1;
//是否启用协程mysql库
$config["db"]["coroutine"] = 1;
//记录mysql连接池数量
$config["db"]["coroutine_count"] = 0;
//存放所有的mysql连接
$config["db"]["coroutine_pool"] = new SplQueue();
