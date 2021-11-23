<?php
try{
$dsn = 'mysql:host=localhost;dbname=login'; //Data source Name
$username = 'root';
$password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($dsn, $username, $password,$options);
}
catch(PDOException $ex){
    echo "no";
}
 ?>