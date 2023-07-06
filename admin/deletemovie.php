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
 
    $deletemovie="DELETE FROM addmovies WHERE Movie_ID=$mid";
    if(mysqli_query($conn,$deletemovie)){
       echo "deleted"; 
       header('location:viewmovie.php');
   }
?>
