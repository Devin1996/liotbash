<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="MainPageCSS.css">
</head>
<body>
<div class="header">
      <h2 style="color:#808080">Lanka Institute Of Technology</h2>
    </div>
    <ul >
  <li><a class="active" href="MainPage.php">Home</a></li>
  <li><a href="StudentRegisterPHP.php">Student Registration</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employee Registration</a>
    <div class="dropdown-content">
      <a href="AcedamicRegisterPHP.php">Acedamic Registration</a>
      <a href="NAcedamicRegisterPHP.php">NON-Acedamic Registration</a>
    </div>
  </li>
  <li><a href="studentdetails.php">Student Details</a></li>

  
    <li><a href="empdetails.php" class="dropbtn">Employee Details</a></li>

 
   <li><a href="updatepage.php">Update Deatils</a></li>
   <li><a href="removedata.php">Remove Deatils</a></li>
   <li><a href="mongo.php">NoSQL Database(Mongo)</a></li>
   <li><a href="modform.php">Modules</a></li>
   <li><a href="pamentform.php">Payments</a></li>
   <li><a href="labform.php">Labs</a></li>
   <li><a href="tuteform.php">Tutes</a></li>
   <li><a href="lecform.php">Lectures</a></li>

 	<li style="float:right"><a href="AdminLoginPHP.php">Admin logout</a></li>
</ul>
</body></html>

<?php
require_once('dbcon1.php');





//$fName = $_POST['fname'];
//$lName = $_POST['lname'];
//$eMail = $_POST['email'];
//$uName = $_POST['luname'];
//$Pwd = $_POST['lpwd'];
//$bDay = $_POST['bday'];
//$Gender = $_POST['gender']; 
//$Joins= $_POST['joins'];

//$sql = "INSERT INTO vusers (fnames, lnames, emails, unames, passwords, bdays ,gender, joins) VALUES ('$fName','$lName','$eMail','$uName','$Pwd','$bDay','$Gender','$Joins')";
//$sqli = "SELECT essn,efname,elname,ebdate,eaddress,eemail,egender,eage,salary,posit,edept_id FROM employee "; 
/*$sqli = "SELECT employee.essn,employee.efname,employee.elname,employee.ebdate,employee.eaddress,employee.eemail,employee.egender,employee.eage,employee.salary,employee.posit,employee.edept_id,acedamic.qualification,acedamic.subjects
FROM employee JOIN acedamic ON employee.essn=acedamic.aessn
ORDER BY employee.efname";*/
$sqli = "SELECT employee.essn,employee.efname,employee.elname,employee.ebdate,employee.eaddress,employee.eemail,employee.egender,employee.eage,employee.salary,employee.posit,employee.edept_id,acedamic.qualification,acedamic.subjects
FROM employee JOIN acedamic ON   acedamic.aessn= employee.essn 
UNION 
SELECT employee.essn,employee.efname,employee.elname,employee.ebdate,employee.eaddress,employee.eemail,employee.egender,employee.eage,employee.salary,employee.posit,employee.edept_id,nonacedamic.groups,nonacedamic.worktype
FROM employee  JOIN nonacedamic ON employee.essn= nonacedamic.nessn"
;
$response = @mysqli_query($dbc, $sqli); 


if ($response) {
	echo '<table border=1 align="left" cellspacing="10" cellpadding="8">

	<tr><td align="left"><b>SSN</b></td>
		<td align="left"><b>First Name</b></td>
		<td align="left"><b>Last NAme</b></td>
        <td align="left"><b>Birth Day</b></td>
        <td align="left"><b>Address</b></td>
        <td align="left"><b>E-mail</b></td>
        <td align="left"><b>Gender</b></td>
        <td align="left"><b>Age</b></td>
        <td align="left"><b>Salary</b></td>
        <td align="left"><b>Position</b></td>
        <td align="left"><b>Department ID</b></td>
        <td align="left"><b>Qualification</b></td>
        <td align="left"><b>Subject</b></td>
        <td align="left"><b>Group</b></td>
        <td align="left"><b>Worktype</b></td>

        </tr>';

	while ($row = mysqli_fetch_array($response)) {

		echo '<tr><td align="left">'.
		$row['essn'] . '</td><td align="left">' .
		$row['efname'] . '</td><td align="left">'.
		$row['elname'] . '</td><td align="left">'.
        $row['ebdate'] . '</td><td align="left">'.
        $row['eaddress'] . '</td><td align="left">'.
        $row['eemail'] . '</td><td align="left">'.
        $row['egender'] . '</td><td align="left">'.
        $row['eage'] . '</td><td align="left">'.
        $row['salary'] . '</td><td align="left">'.
        $row['posit'] . '</td><td align="left">'.
        $row['edept_id'] . '</td><td align="left">'.
        $row['qualification'] . '</td><td align="left">'.
        $row['subjects'] . '</td><td align="left">'
       // $row['groups'] . '</td><td align="left">'.
       // $row['worktype'] . '</td><td align="left">'
        ;

		
		echo '</tr>';
	}

	echo '</table>';

}else{
	echo "Coudn't issue database query ";
	@mysqli_error($dbc);
}

@mysqli_close($dbc);

?>

