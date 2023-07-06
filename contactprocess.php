<?php
include 'admin/connectsql.php';


if(isset($_POST["upload"])){
  $name =$_POST["fullname"]; 
  $email =$_POST["email"]; 
  $number =$_POST["contact"];
  $msg=$_POST["message"];
  $sql ="INSERT INTO contactinfo VALUES
   ('$name','$email', '$number','$msg')";
   if(mysqli_query($conn, $sql)){ 
// echo"Contact information sent sussfully";
header('location:contact.php');
        } 
   else{ 
    echo"Error:".$sql."<br>". mysqli_error($conn); 
        } 
       
mysqli_close($conn); 
  
}
?>