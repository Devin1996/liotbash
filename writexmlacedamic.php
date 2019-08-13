<?php

$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$acedamicregister=$xml->createElement("acedamicregister");

	$acedamicregister=$xml->createElement("acedamicregister");
	$xml->appendChild($acedamicregister);

$acedamic=$xml->createElement("acedamic");
$acedamicregister->appendChild($acedamic);

$sssn=$xml->createElement("ssn",123);
$acedamic->appendChild($sssn);

$sfname=$xml->createElement("fname","Amal");
$acedamic->appendChild($sfname);

$slname=$xml->createElement("lname","chandula");
$acedamic->appendChild($slname);

$bday=$xml->createElement("bday","05/25/1996");
$acedamic->appendChild($bday);

$saddress=$xml->createElement("address","Hakmana");
$acedamic->appendChild($saddress);

$semail=$xml->createElement("email","chandula@gmail.com");
$acedamic->appendChild($semail);

$gender=$xml->createElement("gender","Male");
$acedamic->appendChild($gender);

$age=$xml->createElement("age",23);
$acedamic->appendChild($age);

$salary=$xml->createElement("salary",50);
$acedamic->appendChild($salary);

$position=$xml->createElement("position","Developer");
$acedamic->appendChild($semail);

$department=$xml->createElement("department",917);
$acedamic->appendChild($department);

$qualification=$xml->createElement("qualification","chandula@gmail.com");
$acedamic->appendChild($qualification);

$subjects=$xml->createElement("subjects","JAVA");
$acedamic->appendChild($subjects);


echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("acedamicregister.xml");