<?php
http_response_code(504);
$code        = 504;
$title       = 'Gateway Timeout';
$description = 'The server did not receive a timely response from an upstream server.';
$icon        = 'bi-hourglass-split';
include '_template.php';
