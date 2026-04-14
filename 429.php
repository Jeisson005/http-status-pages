<?php
http_response_code(429);
$code        = 429;
$title       = 'Too Many Requests';
$description = 'You have sent too many requests in a given amount of time.';
$icon        = 'bi-speedometer2';
include '_template.php';
