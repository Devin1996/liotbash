<?php


$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("acedamicregister.xml");


if (!$xml) {
	$acedamicregister=$xml->createElement("acedamicregister");
	$xml->appendChild($acedamicregister);
}
else
{
	$acedamicregister=$xml->firstChild;
}
if (isset($_POST['submit'])) {

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


    $acedamic=$xml->createElement("acedamic");
    $acedamicregister->appendChild($acedamic);

$sssn=$xml->createElement("ssn",$assn);
$acedamic->appendChild($sssn);

$sfname=$xml->createElement("fname",$afname);
$acedamic->appendChild($sfname);

$slname=$xml->createElement("lname",$alname);
$acedamic->appendChild($slname);

$bday=$xml->createElement("bday",$abday);
$acedamic->appendChild($bday);

$saddress=$xml->createElement("address",$aaddress);
$acedamic->appendChild($saddress);

$semail=$xml->createElement("email",$aemail);
$acedamic->appendChild($semail);

$gender=$xml->createElement("gender",$agender);
$acedamic->appendChild($gender);

$age=$xml->createElement("age",$aage);
$acedamic->appendChild($age);

$salary=$xml->createElement("salary",$asalary);
$acedamic->appendChild($salary);

$position=$xml->createElement("position",$aposition);
$acedamic->appendChild($position);

$department=$xml->createElement("department",$adepartment);
$acedamic->appendChild($department);

$qualification=$xml->createElement("qualification",$qfy);
$acedamic->appendChild($qualification);
/*
$subjects=$xml->createElement("subjects",$sub);
$acedamic->appendChild($subjects);
*/

echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("acedamicregister.xml");
}







?>

<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

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


$sql = "INSERT INTO employee(essn,efname,elname,ebdate,eaddress,eemail,egender,eage,salary,posit,edept_id) VALUES ('$assn','$afname','$alname','$abday','$aaddress','$aemail','$agender','$aage','$asalary','$aposition','$adepartment')";




if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";

}

 else {
    echo "Error insering record: " . $conn->error;
}

$conn->close();

?>
