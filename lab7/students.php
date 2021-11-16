<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

//$con = mysqli_connect('localhost', 'root', '','websyslab7');

$host="localhost";
$user="root";
$password="";
$db="websyslab7";
$con=new mysqli($host,$user,$password,$db);
// Print Error if the connection is failed.
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
// Print Error if the DB is not selected.
if (!mysqli_select_db($con, $db)) {
    die("Uh oh, couldn't select database --> $db" . $con->connect_error . ' >');
}


// get the post records
$inputRIN = $_POST['inputRIN'];
$inputRCSID = $_POST['inputRCSID'];
$inputName = $_POST['inputName'];
$inputLast = $_POST['inputLast'];
$inputAlias = $_POST['inputAlias'];
$inputPhone = $_POST['inputPhone'];
$inputStreet = $_POST['inputStreet'];
$inputCity = $_POST['inputCity'];
$inputState = $_POST['inputState'];
$inputZip = $_POST['inputZip'];

// database insert SQL code
$sql = "INSERT INTO `students`(`RIN`, `RCSID`, `name`, `lastname`, `alias`, `phone`, `street`, `city`, `state`, `zip`) VALUES ('$inputRIN','$inputRCSID','$inputName','$inputLast','$inputAlias','$inputPhone','$inputStreet','$inputCity','$inputState','$inputZip')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
else
{
    echo "wtf";
}

?>