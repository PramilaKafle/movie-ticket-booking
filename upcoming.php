<?php
include 'header.php';
include 'admin/connectsql.php';
// // SQL query to select data from database
$query = " SELECT * FROM upcomingmovies ";
// //FETCHING DATA FROM DATABASE
$result = $conn->query($query);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  
</head>
<body>
<div class="movie-lists-container" style="background-color: #eeeeee38;">
  <div class="content">
   <a href="movie.php"  > ALL MOVIES</a>
   <a href="upcoming.php"style="margin-left:50px;" >UP COMING MOVIES</a>

  </div>
  <div class="movie-lists-wrapper">
     <div class="movie-lists">
         <?php 
					while($r=mysqli_fetch_array($result))
					{
					?>
          <div class="movie-item">
              <img class="movie-img" src="admin/<?php echo $r['image'];?>" alt="">
             
            <p class="movie-desc"><?php echo $r['moviename'];?> <?php echo $r['movietype'];?></p>
            <span style="font-size: 16px; font-family: cursive;">Release Date:.<?php echo $r['Releasedate'];?></span>
          </div>
         <?Php }?>
      </div>
            
		</div>
 </div>
 
<?php include 'footer.php' ?>