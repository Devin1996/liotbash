<?php
require "vendor/autoload.php";


$rno=$_POST['rno'];
$cost=$_POST['cost'];
$ssn=$_POST['ssn'];

$client123 = new MongoDB\Client;

//create the datbase and use
$liot = $client123->liot;

/*
//create the collection inside the database
$result1 = $liotdb->createCollection('student_collection');

var_dump($result1);
*/
$pay = $liot->payments;

$insertOneResult = $pay->insertOne(
['Recipt_no'=>$rno,'Cost'=>$cost,'Ssn'=>$ssn]
);

//$ssn$fname$lname$address$email$sgender$s_bday$s_age$paymentmethod$t_period$degreecode


?>

<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$liot = $client->liot;

$pays = $liot->payments;
/*
$document = $empcollection->findOne(
    ['_id'=>'1']
);
var_dump($document);
*/

$documentlist = $pays->find();

foreach ($documentlist as $doc) {
    
    var_dump($doc);
}
?>