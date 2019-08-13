<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$liot = $client->liot;

$acedamiccollection = $liot->acedamiccollection;
/*
$document = $empcollection->findOne(
    ['_id'=>'1']
);
var_dump($document);
*/

$documentlist = $acedamiccollection->find();

foreach ($documentlist as $doc) {
    
    var_dump($doc);
}
?>