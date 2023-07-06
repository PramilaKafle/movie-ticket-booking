
<?php
include 'header.php';

include 'admin/connectsql.php';
// SQL query to select data from database
$query = " SELECT * FROM addmovies  ";
//FETCHING DATA FROM DATABASE
$result = $conn->query($query);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
 
<body>
<div class="container">
 <div class="content-container">
      <div class="featured-content"
          style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/8.jpg');">
          <p class="featured-desc">NOW SHOWING</p>
      </div>


  
  <div class="movie-list-container">
   
    <div class="movie-list-wrapper">
      <div class="movie-list">
        <?php  
            while($detail=$result->fetch_assoc())
            {
            ?>
          <div class="movie-list-item">
          <a href="2.php?mid=<?php echo $detail['Movie_ID'];?>">
           <img class="movie-list-item-img" src="admin/<?php echo $detail['image'];?>" alt="Image cannot be displayed" >
           </a>  
                <span class="movie-list-item-title" ><?php echo $detail['Moviename'];?></span>
                <p class="movie-list-item-desc"><?php echo "Director:".$detail['Director'];?><br>
                <?php echo "Writers:".$detail['Writer'];?> <br>
                <?php echo "Casts:".$detail['Cast'];?> 
                
                  </p>
               
                
                <br>
                <a href="mywishlist.php?mid=<?php echo $detail['Movie_ID'];?>" style="text-decoration:none;">
            <button type="button" class="movie-list-item-button "><i class="far fa-heart"></i> Add to Wishlist</button>  </a> 
    
     <!-- <a href="login.php?mid=<?php echo $detail['Movie_ID'];?>" style="text-decoration:none;">
            <button type="button" class="movie-list-item-button "><i class="far fa-heart"></i> Add to Wishlist</button>  </a> 
     -->
          </div>
        <?php }?> 
      </div>
         
    </div>
  </div>
</div>
</body>
</html>

        

           
</div>
  

<?php include 'footer.php'?>