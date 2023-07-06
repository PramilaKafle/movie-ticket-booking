<?php
include ('header.php');
include 'admin/connectsql.php';


// // SQL query to select data from database
$query = " SELECT * FROM addmovies  ";
// //FETCHING DATA FROM DATABASE
$result = $conn->query($query);

?>


 <html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 
</head>

 <body>
  
  
<div class="movie-lists-container" style="background-color:  #eeeeee38;;">
  <div class="content">
   <a href="movie.php"  > ALL MOVIES</a>
   <a href="upcoming.php"style="margin-left:50px;" >UPCOMING MOVIES</a>

  </div>
<div class="movie-lists-wrapper">
 <div class="movie-lists">
       <?php 
					while($n=mysqli_fetch_array($result))
					{
					?>
          <div class="movie-item">
          
          <a href="2.php?mid=<?php echo $n['Movie_ID'];?>">
           <img class="movie-img" src="admin/<?php echo $n['image'];?>" alt="" >
           </a>  
            <p class="movie-desc"><?php echo $n['Moviename'];?></p>
          
           <a href="mywishlist.php?mid=<?php echo $n['Movie_ID'];?>" style="text-decoration:none;">
           <p class="movie-desc" > <button type="button" class="btn btn-success btn-lg btn-block"><i class="far fa-heart"></i> Add to wishlist</button> </p> </a> 
         
         
          </div>
        <?php }?> 
            
  </div>
   </div>
         
</div>
            
		
    
  <br> <br> <br>
  
   </body>
  </html> 

  <?php include 'footer.php'?>