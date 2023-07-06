<?php
include 'admin/connectsql.php';

 
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket booking</title>
    <link rel="stylesheet"   href="css/newstyle.css">
    <script type="text/javascript" src="newform.js"></script>
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
  <div class="nav">
  <div class="nav-container">
    <div class="logo-container">
      <h2>Movie ticket booking </h2>
    </div>
      <div class="menu-container" >
          <nav>
          
            <a href="index.php"><b>Home</b> </a>
            <a href="movie.php"> Movies</a>
            <a href="contact.php"> Contact US</a>
          <a> <?php if(isset($_SESSION['customer'])){?> <a href="showwishlist.php"><i class="far fa-heart"></i>Wishlist</a><?php }?></a>
          </nav>
      </div>
      <button id="button" value="submit" > <?php if(isset($_SESSION['customer'])){?>
			  <a href="logut.php">Logout</a><?php }else{?><a href="login.php">Login</a> <a href="register.php">Register</a>
          <?php }?></a></button>
            <!-- <button id="button" type="button" value="submit"  onclick="document.location='register.php'">Register</button> -->
         
  </div>
</div>
        
      
</body>
</html>
  