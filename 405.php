<?php
http_response_code(405);
$code        = 405;
$title       = 'Method Not Allowed';
$description = 'The request method is not supported for this resource.';
$icon        = 'bi-slash-circle-fill';
include '_template.php';
