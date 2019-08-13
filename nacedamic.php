<?php


$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("noaregister.xml");


if (!$xml) {
	$noaregister=$xml->createElement("noaregister");
	$xml->appendChild($noaregister);
}
else
{
	$noaregister=$xml->firstChild;
}
if (isset($_POST['submit'])) {

	$assn=$_POST['essn'];
	$afname=$_POST['efname'];
	$alname=$_POST['elname'];
    $abday=$_POST['e_bday'];
    $aaddress=$_POST['eaddress'];
	$aemail=$_POST['eemail'];
	$agender=$_POST['gender'];
    $aage=$_POST['eage'];
    $asalary=$_POST['salary'];
	$aposition=$_POST['positi'];
	$agroup=$_POST['groups'];
	$aworktype=$_POST['worktype'];


    $nacedamic=$xml->createElement("nacedamic");
    $noaregister->appendChild($nacedamic);

$sssn=$xml->createElement("ssn",$assn);
$nacedamic->appendChild($sssn);

$sfname=$xml->createElement("fname",$afname);
$nacedamic->appendChild($sfname);

$slname=$xml->createElement("lname",$alname);
$nacedamic->appendChild($slname);

$bday=$xml->createElement("bday",$abday);
$nacedamic->appendChild($bday);

$saddress=$xml->createElement("address",$aaddress);
$nacedamic->appendChild($saddress);

$semail=$xml->createElement("email",$aemail);
$nacedamic->appendChild($semail);

$gender=$xml->createElement("gender",$agender);
$nacedamic->appendChild($gender);

$age=$xml->createElement("age",$aage);
$nacedamic->appendChild($age);

$salary=$xml->createElement("salary",$asalary);
$nacedamic->appendChild($salary);

$position=$xml->createElement("position",$aposition);
$nacedamic->appendChild($position);

$group=$xml->createElement("group",$agroup);
$nacedamic->appendChild($group);

$worktype=$xml->createElement("worktype",$aworktype);
$nacedamic->appendChild($worktype);

/*
$subjects=$xml->createElement("subjects",$sub);
$nacedamic->appendChild($subjects);
*/

echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("noaregister.xml");
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
    $abday=$_POST['e_bday'];
    $aaddress=$_POST['eaddress'];
	$aemail=$_POST['eemail'];
	$agender=$_POST['gender'];
    $aage=$_POST['eage'];
    $asalary=$_POST['salary'];
	$aposition=$_POST['positi'];
	$agroup=$_POST['groups'];
	$aworktype=$_POST['worktype'];
	$adepartment=$_POST['edept_id'];

$sql = "INSERT INTO employee(essn,efname,elname,ebdate,eaddress,eemail,egender,eage,salary,posit,edept_id) VALUES ('$assn','$afname','$alname','$abday','$aaddress','$aemail','$agender','$aage','$asalary','$aposition','$adepartment')";


if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
    $sql1="INSERT INTO nonacedamic(nessn,groups,worktype) VALUES ('$assn'.'$agroup','$aworktype')";
    if ($conn->query($sql1) === TRUE  ) {
        echo "Record inserted successfully";

}

} else {
    echo "Error insering record: " . $conn->error;
}

$conn->close();

?>
