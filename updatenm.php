<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$liot = $client->liot;
$studentcollection = $liot->studentcollection;

$nsal=$_GET['nsal'];
$essn =$_GET['nid'] ;
$salary=$_GET['sal'];
/*

$updateResult = $empcollection->updateOne(
    ['age'=>'32'],
    ['$set' => ['age'=>'23']]
);

*/

 
 $replaceResult = $studentcollection->replaceOne(
    ['SSN' => $essn],
    ['SSN' => $essn, 'Salary' =>$salary ]
 );
/*
    printf("Matched %d documents \n",$replaceResult->getMatchedCount());
    printf("Modified %d documents \n",$replaceResult->getModifiedCount());
);
 */

printf("Matched %d documents \n",$replaceResult->getMatchedCount());
printf("Modified %d documents \n",$replaceResult->getModifiedCount());
?>