<?php
http_response_code(408);
$code        = 408;
$title       = 'Request Timeout';
$description = 'The server timed out waiting for the request.';
$icon        = 'bi-clock-fill';
include '_template.php';
