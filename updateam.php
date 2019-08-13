<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$liot = $client->liot;
$studentcollection = $liot->studentcollection;

$npos=$_GET['npos'];
$essn =$_GET['aid'];
$posit=$_GET['pos'];
/*

$updateResult = $empcollection->updateOne(
    ['age'=>'32'],
    ['$set' => ['age'=>'23']]
);

*/

 
 $replaceResult = $studentcollection->replaceOne(
    ['SSN' => $essn],
    ['SSN' => $essn, 'Position' =>$nadd ]
 );
/*
    printf("Matched %d documents \n",$replaceResult->getMatchedCount());
    printf("Modified %d documents \n",$replaceResult->getModifiedCount());
);
 */

printf("Matched %d documents \n",$replaceResult->getMatchedCount());
printf("Modified %d documents \n",$replaceResult->getModifiedCount());
?>