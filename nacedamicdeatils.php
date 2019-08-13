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
$sqli = "SELECT ussn,ufname,ulname,ubdate,uaddress,uemail,ugender,uage,payment_method,timeperiod,udegree_code FROM undergraduate "; 
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
        <td align="left"><b>Payment Method</b></td>
        <td align="left"><b>Time Period</b></td>
        <td align="left"><b>Degree Code</b></td>

        </tr>';

	while ($row = mysqli_fetch_array($response)) {

		echo '<tr><td align="left">'.
		$row['ussn'] . '</td><td align="left">' .
		$row['ufname'] . '</td><td align="left">'.
		$row['ulname'] . '</td><td align="left">'.
        $row['ubdate'] . '</td><td align="left">'.
        $row['uaddress'] . '</td><td align="left">'.
        $row['uemail'] . '</td><td align="left">'.
        $row['ugender'] . '</td><td align="left">'.
        $row['uage'] . '</td><td align="left">'.
        $row['payment_method'] . '</td><td align="left">'.
        $row['timeperiod'] . '</td><td align="left">'.
        $row['udegree_code'] . '</td><td align="left">'
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

