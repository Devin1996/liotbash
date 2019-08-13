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


$sql = "UPDATE employee SET salary = '".$_GET['nsal']."' WHERE essn =".$_GET['nid']." AND salary='".$_GET['sal']."'";

if ($conn->query($sql) === TRUE) {
    echo "Employee salary Updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
