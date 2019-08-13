<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;

$liot = $client->liot;

$result1 = $liot->createCollection('tutes');

var_dump($result1);

?>