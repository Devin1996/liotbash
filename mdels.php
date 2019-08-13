<?php
require "vendor/autoload.php";
$del=$_GET['aid'];

$client = new MongoDB\Client;

$liot = $client->liot;

$acedamiccollection = $liot->acedamiccollection;

$deleteResult = $acedamiccollection->deleteOne(
    ['SSN' => $del]
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

/*
$deleteResult = $acedamiccollection->deleteMany(
    ['_id' => '4']
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

*/
?>