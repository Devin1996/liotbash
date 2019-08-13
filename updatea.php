<?php
//include_once 'dbcon.php'
$server="localhost";
$uname="root";
$pw="";
$dbname="liot";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<?php


$sql = "UPDATE employee SET posit = '".$_GET['npos']."' WHERE essn =".$_GET['aid']." AND posit='".$_GET['pos']."'";

if ($conn->query($sql) === TRUE) {
    echo "Employee Record Updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
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