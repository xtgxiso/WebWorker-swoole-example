<?php
$http->HandleFunc("/stats",function() {
    $stats = $this->http_server->stats();
    $stats['start_time'] = date('Y-m-d H:i:s',$stats['start_time']);
    $this->ServerJson($stats);
});
