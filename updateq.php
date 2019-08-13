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


$sql = "UPDATE undergraduate SET uaddress = '".$_GET['nadd']."' WHERE ussn =".$_GET['id']." AND uaddress='".$_GET['add']."'";

if ($conn->query($sql) === TRUE) {
    echo "Undergraduate Record Updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>


