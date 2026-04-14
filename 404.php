<?php
http_response_code(404);
$code        = 404;
$title       = 'Not Found';
$description = 'The requested resource could not be found on this server.';
$icon        = 'bi-search';
include '_template.php';
