<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM employee WHERE essn=".$_GET["nid"];

if ($conn->query($sql) === TRUE) {
    echo "Non Acedamic Employee details deleted successfully";
    
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

<html>
<head><title>Delete</title></head>
<body>
    <br>
    <a href="MainPage.php">Home</a>
</body>
</html>