<?php
require "vendor/autoload.php";
$del=$_GET['id'];

$client = new MongoDB\Client;

$liot = $client->liot;

$studentcollection = $liot->studentcollection;

$deleteResult = $studentcollection->deleteOne(
    ['SSN' => $del]
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

/*
$deleteResult = $studentcollection->deleteMany(
    ['_id' => '4']
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

*/
?>