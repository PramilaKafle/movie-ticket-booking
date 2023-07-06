<?php
$name=$_POST["username"];
$pass=$_POST["pwd"];
$username="admin";
$pwd="password";
session_start();
if($name ==$username and $pass==$pwd){
  $_SESSION['admin']= $username;
  header('Location:home.php');
exit();
}
else{
  echo("Invalid Username or Password!"); 
  header('Location:adminlogin.php');
}


?>

