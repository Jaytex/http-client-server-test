<?php
require __DIR__ . '/../vendor/autoload.php';

$data = array(
	'@id' => $_SERVER['REQUEST_URI'],
 	'to' => 'Pillr',
 	'subject' => 'Hello Pillr',
 	'message' => 'Here is my submission',
 	'from' => 'Jay Bamimore',
 	'timeSent' => date_timestamp_get(date_create())
 );
$json_string = json_encode($data, JSON_PRETTY_PRINT);
header('Content-type: application/json');

echo $_SERVER['SERVER_PROTOCOL'], " 200 OK", "\n";
echo "Date: ", date('D, d M Y H:i:s T'), "\n";
echo "Server: ", $_SERVER['SERVER_NAME'], "\n";
echo "Last-Modified: ", date('D, d M Y H:i:s T',filemtime($_SERVER['SCRIPT_FILENAME'])), "\n";
echo "Content-Length: ", strlen($json_string), "\n";
echo "Content-Type: application/json", "\n";
echo $json_string;
