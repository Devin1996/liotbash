<?php

$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$company=$xml->createElement("company");


	$company=$xml->createElement("company");
	$xml->appendChild($company);

$emp=$xml->createElement("employee");
$company->appendChild($emp);
$name=$xml->createElement("name","John");
$emp->appendChild($name);
$age=$xml->createElement("age",25);
$emp->appendChild($age);
$dept=$xml->createElement("dept","computer");
$emp->appendChild($dept);
echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("company.xml");





?>