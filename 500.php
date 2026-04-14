<?php
http_response_code(500);
$code        = 500;
$title       = 'Internal Server Error';
$description = 'The server encountered an unexpected condition that prevented it from fulfilling the request.';
$icon        = 'bi-server';
include '_template.php';
