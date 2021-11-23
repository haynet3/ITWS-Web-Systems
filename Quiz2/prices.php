
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
    <form action="one.php" method="get">
  <input type="submit" value="All items">
</form>

<h1>Items After Discount<h1>
    <form action="two.php" method="get">
  <input type="submit" value="Discounts">
</form>


<h1>Average Item Prices<h1>
    <form action="three.php" method="get">
  <input type="submit" value="Average price">
</form>
    

</body>
</html>