<?php
http_response_code(400);
$code        = 400;
$title       = 'Bad Request';
$description = 'The server cannot process the request due to invalid syntax.';
$icon        = 'bi-exclamation-triangle-fill';
include '_template.php';
