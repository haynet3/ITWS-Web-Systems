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

$result = mysqli_query($con,"SELECT * FROM students ORDER BY RCSID");

echo "<table border='1'>
<tr>
<th>RIN</th>
<th>RCSID</th>
<th>Name</th>
<th>Last Name</th>
<th>Alias</th>
<th>Phone</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['RIN'] . "</td>";
echo "<td>" . $row['RCSID'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['alias'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['street'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['zip'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>