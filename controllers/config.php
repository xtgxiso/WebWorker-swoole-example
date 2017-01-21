<?php
$http->HandleFunc("/config/show",function() use($config) {
    $this->ServerJson($config);
});
