<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM undergraduate WHERE ussn=".$_GET["id"];

if ($conn->query($sql) === TRUE) {
    echo "Student details deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>