<?php 
include 'header.php';
include 'admin/connectsql.php';

  

$mid="";
 if (isset($_GET['mid'])) {
    $mid=$_GET['mid'];       
 }   

 

 $sql_check=" SELECT * FROM wishlist where pid=$mid";
$result_check=mysqli_query($conn,$sql_check);

if(mysqli_num_rows($result_check) == 1){
    echo  "Movie already exist";
    header('location:showwishlist.php');
}else{
    $insertwishlist="INSERT INTO wishlist (pid) VALUES ('$mid')";
    if(mysqli_query($conn,$insertwishlist)){
       echo "Added to wishlist"; 
       header('location:showwishlist.php');
   }
   else {
       echo "Error: " . $insertwishlist . "<br>" . $conn->error;
     }
}




     
 ?>   

