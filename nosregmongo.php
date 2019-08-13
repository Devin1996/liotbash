<?php
require "vendor/autoload.php";


$ssn=$_POST['s_ssn'];
$fname=$_POST['s_fname'];
$lname=$_POST['s_lname'];
$address=$_POST['s_address'];
$email=$_POST['s_email'];
$sgender=$_POST['gender'];
$s_bday=$_POST['s_bday'];
$s_age=$_POST['s_age'];
$paymentmethod=$_POST['paymentmethod'];
$t_period=$_POST['t_period'];
$degreecode=$_POST['degreecode'];

$client123 = new MongoDB\Client;

//create the datbase and use
$liot = $client123->liot;

/*
//create the collection inside the database
$result1 = $liotdb->createCollection('student_collection');

var_dump($result1);
*/
$student_collection = $liot->studentcollection;

$insertOneResult = $student_collection->insertOne(
['SSN'=>$ssn,'Fname'=>$fname,'Lname'=>$lname,'Address'=>$address,'e-mail'=>$email,'Gender'=>$sgender,'Birthday'=>$s_bday,'FAge'=>$s_age,'PaymentMethod'=>$paymentmethod,'Time Period'=>$t_period,'DegreeCode'=>$degreecode]
);

//$ssn$fname$lname$address$email$sgender$s_bday$s_age$paymentmethod$t_period$degreecode


?>