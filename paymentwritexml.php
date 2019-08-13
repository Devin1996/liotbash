<?php

$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$paymentsxml=$xml->createElement("paymentsxml");

	$paymentsxml=$xml->createElement("paymentsxml");
	$xml->appendChild($paymentsxml);

$reciptno=$xml->createElement("Payments",123);
$paymentsxml->appendChild($reciptno);

$cost=$xml->createElement("cost",120000);
$paymentsxml->appendChild($cost);

$pussn=$xml->createElement("ssn",3763);
$paymentsxml->appendChild($pussn);


echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("paymentsxml.xml");

?>