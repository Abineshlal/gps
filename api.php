<?php
$responses = '';
$responses .='Contents of $_SERVER:'."\n";
$responses .= implode('; ', $_SERVER)."\n\n";
$responses .= 'Contents of $_GET:'."\n";
$responses .= implode('; ', $_GET)."\n\n";
$responses .= 'Contents of $_POST:'."\n";
$responses .= implode('; ', $_POST)."\n\n";
$responses .= 'Contents of Raw data:'."\n";
$responses .= file_get_contents('php://input')."\n\n";
$responses .= 'Contents of getallheaders:'."\n";
$responses .= implode('; ', getallheaders())."\n\n";
$responses .= 'Contents of apache_request_headers:'."\n";
$responses .= implode('; ', apache_request_headers());

$myfile = fopen("request_and_response.txt", "w") or die("Unable to open file!");
fwrite($myfile, $responses);