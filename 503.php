<?php
http_response_code(503);
$code        = 503;
$title       = 'Service Unavailable';
$description = 'The server is temporarily unable to handle the request.';
$icon        = 'bi-tools';
include '_template.php';
