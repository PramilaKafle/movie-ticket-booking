<?php



include 'connectsql.php';
include 'sidebar.php';
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
  header('location:adminlogin.php');
 }




$mid="";
 if (isset($_GET['mid'])) {
    $mid=$_GET['mid'];
 }   
 
    $deleteshow="DELETE FROM addshows WHERE show_ID=$mid";
    if(mysqli_query($conn,$deleteshow)){
       echo "deleted"; 
       header('location:todayshow.php');
   }
?>