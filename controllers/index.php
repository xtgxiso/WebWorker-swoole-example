<?php

$http->AddFunc("/test",function() {
    $redis->set("xtgxiso",time());
});


$http->HandleFunc("/test",function() {
    $this->ServerHtml($this->redis->get("xtgxiso"));
});
