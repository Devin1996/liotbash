<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$liot = $client->liot;
$studentcollection = $liot->studentcollection;

$nadd=$_GET['nadd'];
$ssn=$_GET['id'];
$uaddress=$_GET['add'];
/*

$updateResult = $empcollection->updateOne(
    ['age'=>'32'],
    ['$set' => ['age'=>'23']]
);

*/

 
 $replaceResult = $studentcollection->replaceOne(
    ['SSN' => $ssn],
    ['SSN' => $ssn, 'Address' =>$nadd ]
 );
/*
    printf("Matched %d documents \n",$replaceResult->getMatchedCount());
    printf("Modified %d documents \n",$replaceResult->getModifiedCount());
);
 */

printf("Matched %d documents \n",$replaceResult->getMatchedCount());
printf("Modified %d documents \n",$replaceResult->getModifiedCount());
?>