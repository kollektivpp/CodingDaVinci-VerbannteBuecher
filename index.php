<?php
require 'vendor/autoload.php';

$string = file_get_contents('http://www.berlin.de/rubrik/hauptstadt/verbannte_buecher/verbannte-buecher.json');
$data   = json_decode($string,true);

$tweet = $data[rand(0,count($data))]['ocrResult'];
$twitter = new Twitter('***************', '***************', '***************', '***************');

$twitter->send($tweet);

?>