<?php
$dsn = 'mysql:host=localhost;dbname=login'; //Data source Name
$username = 'root';
$password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($dsn, $username, $password,$options);
 ?>

<?php
session_start();
if(!empty($_SESSION['username'])) {
header('location:index.html');
}
require 'db.php';


if(isset($_POST['login'])) {

$user = $_POST['username'];
$pass = $_POST['password'];

if(empty($user) || empty($pass)) {
$message = 'All field are required';
} else {
$query = $conn->prepare("SELECT username, password FROM users WHERE 
username=? AND password=?");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['username'] = $user;
  header('location:index.html');
} else {
  $message = "Username/Password is wrong";
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if(isset($message)) {
echo $message;
}
?>
<form action="#" method="post">
Username: <input type="text" name="username" placeholder="username"> 
 <br/><br/>
Password: <input type="password" name="password" placeholder="password">

<br/><br/>
<input type="submit" name="login" value="Login">

</form>

</html>