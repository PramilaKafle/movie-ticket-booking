
<?php
include 'admin/connectsql.php';

 
session_start();


// if(isset($_POST["upload"]))
// {
//   $uname=$_POST["uname"];
//   $pw=$_POST["password"];

  
   
//  $select="SELECT username,password FROM customerinfo ";
//  $result=mysqli_query($conn,$select);
 
//  if(mysqli_num_rows($result) == 1 )
//  {
//     $row=mysqli_fetch_assoc($result);
//     			{

//     if($row['username'] == $uname && $row['password'] == $pw)
//     {
//       $_SESSION['customer']= $row['username'];
//       if(isset($_SESSION['book']))
// 		{
// 			header('location:payment.php');
// 		}
//     elseif(isset($_SESSION['wish'])){
//       header('location:showwishlist.php');
//     }
		
		
//       header('location:index.php');
		
     
//     }
    
//     else{
//         echo("Invalid Username or Password!"); 
//         header('location:login.php');
      
//      }
//  }
//  }
// }
?>


<?php


$uname = mysqli_real_escape_string($conn,$_POST['uname']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$sql_query = "SELECT username,password FROM customerinfo WHERE username='".$uname."' and password='".$password."'";
$result = mysqli_query($conn,$sql_query);
$row = mysqli_fetch_array($result);

if($row){
    
      $_SESSION['customer']= $row['username'];
      if(isset($_SESSION['book']))
      		{
      			header('location:payment.php');
      		}
          elseif(isset($_SESSION['wish'])){
            header('location:showwishlist.php');
          }
          
          else{
            header('location:index.php');
          
           
          }
      
    }
else{
    echo "<li>Invlid Username or password.</li>";
    header('location:login.php');
}