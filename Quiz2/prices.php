
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 3</title>
</head>
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
<body>
    <h1>Item Prices<h1>
<?php
$con=mysqli_connect("localhost","root","","websys_quiz");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM items ORDER BY price desc");

echo "<table border='1' id='customers'>
<tr>
<th>Name</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
<h1>Items After Discount<h1>
<?php
$con=mysqli_connect("localhost","root","","websys_quiz");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT items.name, items.price - (items.price * discounts.discount) AS Value FROM items, discounts WHERE items.id = discounts.item_id ORDER BY VALUE;");

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

<h1>Average Item Prices<h1>
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

</body>
</html>