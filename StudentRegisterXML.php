<?php


$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("studentregister.xml");


if (!$xml) {
	$studentregister=$xml->createElement("studentregister");
	$xml->appendChild($studentregister);
}
else
{
	$studentregister=$xml->firstChild;
}
if (isset($_POST['submit'])) {

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

$student=$xml->createElement("student");
$studentregister->appendChild($student);

$sssn=$xml->createElement("ssn",$ssn);
$student->appendChild($sssn);

$sfname=$xml->createElement("fname",$fname);
$student->appendChild($sfname);

$slname=$xml->createElement("lname",$lname);
$student->appendChild($slname);

$saddress=$xml->createElement("address",$address);
$student->appendChild($saddress);

$semail=$xml->createElement("email",$email);
$student->appendChild($semail);

$gender=$xml->createElement("gender",$sgender);
$student->appendChild($gender);

$bday=$xml->createElement("bday",$s_bday);
$student->appendChild($bday);

$age=$xml->createElement("age",$s_age);
$student->appendChild($age);

$paymethod=$xml->createElement("paymethod",$paymentmethod);
$student->appendChild($paymethod);

$timeperiod=$xml->createElement("timeperiod",$t_period);
$student->appendChild($timeperiod);

$dcode=$xml->createElement("dcode",$degreecode);
$student->appendChild($dcode);


echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("studentregister.xml");
}







?>
<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

$s_ssn= $_POST['s_ssn'];
$s_fname=$_POST['s_fname'];
$s_lname=$_POST['s_lname'];
$s_address=$_POST['s_address'];
$s_email=$_POST['s_email'];
$segender=$_POST['gender'];
$s_bday=$_POST['s_bday'];
$s_age=$_POST['s_age'];
$paymentmethod=$_POST['paymentmethod'];
$t_period=$_POST['t_period'];
$degreecode=$_POST['degreecode'];

$sql = "INSERT INTO undergraduate(ussn,ufname,ulname,ubdate,uaddress,uemail,ugender,uage,payment_method,timeperiod,udegree_code) VALUES ('$s_ssn','$s_fname','$s_lname','$s_bday','$s_address','$s_email','$segender','$s_age','$paymentmethod','$t_period','$degreecode')";



if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error insering record: " . $conn->error;
}

$conn->close();

?>
