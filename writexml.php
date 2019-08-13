<?php

$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$studentregister=$xml->createElement("studentregister");

	$studentregister=$xml->createElement("studentregister");
	$xml->appendChild($studentregister);

$student=$xml->createElement("student");
$studentregister->appendChild($student);

$sssn=$xml->createElement("ssn",123);
$student->appendChild($sssn);

$sfname=$xml->createElement("fname","devin");
$student->appendChild($sfname);

$slname=$xml->createElement("lname","chandula");
$student->appendChild($slname);

$saddress=$xml->createElement("address","Hakmana");
$student->appendChild($saddress);

$semail=$xml->createElement("email","devinchandula@gmail.com");
$student->appendChild($semail);

$gender=$xml->createElement("gender","Male");
$student->appendChild($gender);

$bday=$xml->createElement("bday","05/25/1996");
$student->appendChild($bday);

$age=$xml->createElement("age",23);
$student->appendChild($age);

$paymethod=$xml->createElement("paymethod","cash");
$student->appendChild($paymethod);

$timeperiod=$xml->createElement("timeperiod","05/25/2026");
$student->appendChild($timeperiod);

$dcode=$xml->createElement("dcode",123);
$student->appendChild($dcode);

echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("studentregister.xml");
