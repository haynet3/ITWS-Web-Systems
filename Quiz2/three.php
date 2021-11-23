<?php
$con=mysqli_connect("localhost","root","","websys_quiz");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT items.name, (items.price + (items.price - (items.price * discounts.discount)))/2 AS Value FROM items, discounts WHERE items.id = discounts.item_id ORDER BY VALUE DESC;");

echo "<table border='1' id='customers'>
<tr>
<th>Name</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['Value'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>