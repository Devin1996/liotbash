<?php
require "vendor/autoload.php";


$assn=$_POST['essn'];
$afname=$_POST['efname'];
$alname=$_POST['elname'];
$abday=$_POST['e_bday'];
$aaddress=$_POST['eaddress'];
$aemail=$_POST['eemail'];
$agender=$_POST['gender'];
$aage=$_POST['eage'];
$asalary=$_POST['salary'];
$aposition=$_POST['positi'];
$agroup=$_POST['groups'];
$aworktype=$_POST['worktype'];

$client123 = new MongoDB\Client;

//create the datbase and use
$liot = $client123->liot;

/*
//create the collection inside the database
$result1 = $liotdb->createCollection('nonacedamiccollection$nonacedamiccollection');

var_dump($result1);
*/
$nonacedamiccollection = $liot->nonacedamiccollection;

$insertOneResult = $nonacedamiccollection->insertOne(
['SSN'=>$assn,'Fname'=>$afname,'Lname'=>$alname,'Address'=>$aaddress,'e-mail'=>$aemail,'Gender'=>$agender,'Birthday'=>$abday,'FAge'=>$aage,'Salary'=>$asalary,'Position'=>$aposition,'Group'=>$agroup,'WorkType'=>$aworktype]
);


?>