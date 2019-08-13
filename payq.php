<?php

$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("paymentsxml.xml");
if (!$xml) {
	$paymentsxml=$xml->createElement("paymentsxml");
	$xml->appendChild($paymentsxml);
}
else
{
	$paymentsxml=$xml->firstChild;
}

if (isset($_POST['submit'])) {
    $rno=$_POST['rno'];
    $cost=$_POST['cost'];
    $ssn=$_POST['ssn'];

    $payments=$xml->createElement("paymentsxml");
    $paymentsxml->appendChild($payments);

$reciptno=$xml->createElement("Payments",123);
$payments->appendChild($reciptno);

$cost=$xml->createElement("cost",120000);
$payments->appendChild($cost);

$pussn=$xml->createElement("ssn",3763);
$payments->appendChild($pussn);


echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("paymentsxml.xml");
}

?>

<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

$rno=$_POST['rno'];
$cost=$_POST['cost'];
$ssn=$_POST['ssn'];



$sql = "INSERT INTO payment(recipt_no,cost,pussn) VALUES ('$rno','$cost','$ssn')";




if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";

}

 else {
    echo "Error insering record: " . $conn->error;
}

$conn->close();

?>
