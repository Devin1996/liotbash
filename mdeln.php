<?php
require "vendor/autoload.php";
$del=$_GET['nid'];

$client = new MongoDB\Client;

$liot = $client->liot;

$nonacedamiccollection = $liot->nonacedamiccollection;

$deleteResult = $nonacedamiccollection->deleteOne(
    ['SSN' => $del]
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

/*
$deleteResult = $nonacedamiccollection->deleteMany(
    ['_id' => '4']
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

*/
?>
