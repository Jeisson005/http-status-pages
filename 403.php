<?php
http_response_code(403);
$code        = 403;
$title       = 'Forbidden';
$description = 'You do not have permission to access this resource.';
$icon        = 'bi-shield-fill-x';
include '_template.php';
