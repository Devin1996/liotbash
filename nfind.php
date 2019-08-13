<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$liot = $client->liot;

$nonacedamiccollection = $liot->nonacedamiccollection;
/*
$document = $empcollection->findOne(
    ['_id'=>'1']
);
var_dump($document);
*/

$documentlist = $nonacedamiccollection->find();

foreach ($documentlist as $doc) {
    
    var_dump($doc);
}
?>