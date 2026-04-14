<?php
http_response_code(410);
$code        = 410;
$title       = 'Gone';
$description = 'The requested resource is no longer available and will not be available again.';
$icon        = 'bi-trash3-fill';
include '_template.php';
