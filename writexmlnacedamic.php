<?php

$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$noaregister=$xml->createElement("noaregister");

	$noaregister=$xml->createElement("noaregister");
	$xml->appendChild($noaregister);

$nacedamic=$xml->createElement("nacedamic");
$noaregister->appendChild($nacedamic);

$sssn=$xml->createElement("ssn",123);
$nacedamic->appendChild($sssn);

$sfname=$xml->createElement("fname","Amal");
$nacedamic->appendChild($sfname);

$slname=$xml->createElement("lname","chandula");
$nacedamic->appendChild($slname);

$bday=$xml->createElement("bday","05/25/1996");
$nacedamic->appendChild($bday);

$saddress=$xml->createElement("address","Hakmana");
$nacedamic->appendChild($saddress);

$semail=$xml->createElement("email","chandula@gmail.com");
$nacedamic->appendChild($semail);

$gender=$xml->createElement("gender","Male");
$nacedamic->appendChild($gender);

$age=$xml->createElement("age",23);
$nacedamic->appendChild($age);

$salary=$xml->createElement("salary",50);
$nacedamic->appendChild($salary);

$position=$xml->createElement("position","Elctrician");
$nacedamic->appendChild($semail);

$group=$xml->createElement("group","CeylonE");
$nacedamic->appendChild($group);

$worktype=$xml->createElement("worktype","Bulb Check");
$nacedamic->appendChild($worktype);


echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("noaregister.xml");