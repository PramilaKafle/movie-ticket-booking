<?php
session_start();
session_destroy();
header('location:index.php');
// if (isset($_SESSION["customer"])) {
// 	session_destroy();
// 	header("location:index.php");
// }else{
// 	header("location:index.php");
// }
?>