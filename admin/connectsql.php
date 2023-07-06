
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="movies";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if(!$conn) 

{ 
 die("Mysql connection failed :".mysqli_connect_error()); 

} 



?>