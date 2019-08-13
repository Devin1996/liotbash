<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

$mcode=$_POST['mcode'];
$mtitile=$_POST['mtitile'];
$gpa=$_POST['gpa'];



$sql = "INSERT INTO module(module_code,title,gp) VALUES ('$mcode','$mtitile','$gpa')";




if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";

}

 else {
    echo "Error insering record: " . $conn->error;
}

$conn->close();

?>
