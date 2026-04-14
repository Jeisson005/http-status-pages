<?php
http_response_code(502);
$code        = 502;
$title       = 'Bad Gateway';
$description = 'The server received an invalid response from an upstream server.';
$icon        = 'bi-hdd-network-fill';
include '_template.php';
