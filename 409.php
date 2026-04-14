<?php
http_response_code(409);
$code        = 409;
$title       = 'Conflict';
$description = 'The request conflicts with the current state of the resource.';
$icon        = 'bi-arrow-left-right';
include '_template.php';
