<?php
$http->HandleFunc("/config/show",function() {
    $this->ServerJson($this->config);
});
