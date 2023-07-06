<?php 
include 'header.php';
include 'admin/connectsql.php';
$mid="";
 if (isset($_GET['mid'])) {
    $mid=$_GET['mid'];
 }   
 
    $deletewishlist="DELETE FROM wishlist WHERE pid=$mid";
    if(mysqli_query($conn,$deletewishlist)){
       echo "deleted"; 
       header('location:showwishlist.php');
   }
   

?>