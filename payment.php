<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","liot");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['ok']))
{
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

	//insert query

	$insert= "INSERT INTO employee(essn,efname,elname,ebdate,eaddress,eemail,egender,eage,salary,posit,edept_id) VALUES ('$assn','$afname','$alname','$abday','$aaddress','$aemail','$agender','$aage','$asalary','$aposition','$adepartment')";
	$query=mysqli_query($con,$insert) or die(mysqli_error($con));
	if($query==1)
	{
		$ins="INSERT INTO acedamic(aessn,qualification) VALUES ('$assn'.'$qfy')";
		$quy=mysqli_query($con,$ins) or die(mysqli_error($con));
		if($quy==1)
		{
			echo "Payment done:";
		}
	}
	else
	{
		echo "Payment no done:";
	}
}



?>