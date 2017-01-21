<?php

$http->AddFunc("/test",function() {
    $this->redis->set("xtgxiso",time());
});


$http->HandleFunc("/test",function() {
    $this->ServerHtml($this->redis->get("xtgxiso"));
});
