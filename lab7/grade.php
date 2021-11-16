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
$inputCRN = $_POST['inputCRN'];
$inputRIN = $_POST['inputRIN'];
$inputGrade = $_POST['inputGrade'];

// database insert SQL code
$sql = "INSERT INTO `grades`(`id`,`crn`, `RIN`, `grade`) VALUES (NULL,'$inputCRN','$inputRIN','$inputGrade')";

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