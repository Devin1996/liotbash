<?php
require "vendor/autoload.php";


$assn=$_POST['essn'];
$afname=$_POST['efname'];
$alname=$_POST['elname'];
$abday=$_POST['ebday'];
$aaddress=$_POST['eaddress'];
$aemail=$_POST['eemail'];
$agender=$_POST['egender'];
$aage=$_POST['eage'];
$asalary=$_POST['salary'];
$aposition=$_POST['posit'];
$adepartment=$_POST['edept_id'];
$qfy=$_POST['qualifications'];

$client123 = new MongoDB\Client;

//create the datbase and use
$liot = $client123->liot;

/*
//create the collection inside the database
$result1 = $liotdb->createCollection('acedamiccollection$acedamiccollection');

var_dump($result1);
*/
$acedamiccollection = $liot->acedamiccollection;

$insertOneResult = $acedamiccollection->insertOne(
['SSN'=>$assn,'Fname'=>$afname,'Lname'=>$alname,'Address'=>$aaddress,'e-mail'=>$aemail,'Gender'=>$agender,'Birthday'=>$abday,'FAge'=>$aage,'Salary'=>$asalary,'Position'=>$aposition,'Department'=>$adepartment,'Qualification'=>$qfy]
);


?>