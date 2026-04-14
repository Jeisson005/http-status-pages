<?php
http_response_code(401);
$code        = 401;
$title       = 'Unauthorized';
$description = 'Authentication is required to access this resource.';
$icon        = 'bi-lock-fill';
include '_template.php';
