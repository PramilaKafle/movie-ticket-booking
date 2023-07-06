<?php
include 'admin/connectsql.php';


if(isset($_POST["upload"])){
  $fname =$_POST["firstname"]; 
  $lname =$_POST["lastname"]; 
  $email =$_POST["email"]; 
  $address =$_POST["address"];
  $gender=$_POST["gender"];
  $username=$_POST["name"];
  $pass=$_POST["pass"];
  $conpass=$_POST["conpass"];
  $sql ="INSERT INTO customerinfo VALUES
   ('','$fname','$lname','$email','$address', '$gender','$username','$pass',' $conpass')";
   if(mysqli_query($conn, $sql)){ 
// echo"Contact information sent sussfully";
header('location:register.php');
        } 
   else{ 
    echo"Error:".$sql."<br>". mysqli_error($conn); 
        } 
       
mysqli_close($conn); 
  
}
?>