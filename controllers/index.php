<?php

$http->AddFunc("/test",function() {
    /*
    $redis = new Swoole\Coroutine\Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->auth(123456);
    $redis->select(1);
    $this->redis = $redis;
    */
    $redis = new \Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->auth(123456);
    $redis->select(1);
    $redis->set("xtgxiso",time());
    $this->redis = $redis;
});


$http->HandleFunc("/test",function() {
    $this->ServerHtml($this->redis->get("xtgxiso"));
});
