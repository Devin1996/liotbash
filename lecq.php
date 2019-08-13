<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

$iessn=$_POST['iessn'];
$ihall_no=$_POST['ihall_no'];
$iussn=$_POST['iussn'];
$module_code=$_POST['imodule_code'];


$sql = "INSERT INTO lecture(lessn,lhall_no,lussn,lmodule_code) VALUES ('$iessn','$ihall_no','$iussn','$module_code')";




if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";

}

 else {
    echo "Error insering record: " . $conn->error;
}

$conn->close();

?>
