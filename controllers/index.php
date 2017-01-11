<?php
$http->HandleFunc("/",function() {
    $this->ServerHtml("Hello World");
});
