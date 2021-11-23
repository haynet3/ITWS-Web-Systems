
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

a.button1{
 display:inline-block;
 padding:0.35em 1.2em;
 border:0.1em solid #FFFFFF;
 margin:0 0.3em 0.3em 0;
 border-radius:0.12em;
 box-sizing: border-box;
 text-decoration:none;
 font-family:'Roboto',sans-serif;
 font-weight:300;
 color:#FFFFFF;
 text-align:center;
 transition: all 0.2s;
}
a.button1:hover{
 color:#000000;
 background-color:#FFFFFF;
}
@media all and (max-width:30em){
 a.button1{
  display:block;
  margin:0.4em auto;
 }
}
input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus {
    border-color:#333;
}

input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
.center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
h1,h2 {
    text-align:center;
}
}
</style>
<body>
    <h1>ITWS Quiz Part 3<h1>
        <h2>Tyler Haynes<h2>
    <div class="center">
<h1>Item Prices<h1>
    <form action="one.php" method="get">
  <input type="submit" class="button1" value="All items">
</form>

<h1>Items After Discount<h1>
    <form action="two.php" method="get">
  <input type="submit" class="button1" value="Discounts">
</form>


<h1>Average Item Prices<h1>
    <form action="three.php" method="get">
  <input type="submit" class="button1" value="Average price">
</div>
</form>
    

</body>
</html>