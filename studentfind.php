<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$liot = $client->liot;

$studentcollection = $liot->studentcollection;
/*
$document = $empcollection->findOne(
    ['_id'=>'1']
);
var_dump($document);
*/

$documentlist = $studentcollection->find();

foreach ($documentlist as $doc) {
    
    var_dump($doc);
}
?>