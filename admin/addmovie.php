<?php

include 'sidebar.php';
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
  header('location:adminlogin.php');
 }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="admin.css">
</head>
<body>



<div class="main">

<legend>ADD MOVIE</legend>
 
    <form action=""  method="POST" data-toggle="validator" enctype="multipart/form-data">
 
    <div class="form-group">
    <label for="id">Movie Id:</label>
    <input type="num" class="form-control"  name="mid" required>
    
  </div>

    <div class="form-group">
    <label for="movie">Movie Name:</label>
    <input type="text" class="form-control"  name="movie" required>
    
  </div>
  <div class="form-group">
    <label for="date">Release date:</label>
    <input type="date" class="form-control"  name="date" required>
  </div>

  <div class="form-group">
    <label for="date">Running Time:</label>
    <input type="text" class="form-control"  name="time" required>
  </div>

  <div class="form-group">
    <label for="director">Director:</label>
    <input type="text" class="form-control"  name="dir" required>
  </div>
  
 <div class="form-group">
    <label for="writer">Writer:</label>
    <input type="text" class="form-control"  name="writer" required>
  </div>

  <div class="form-group">
    <label for="cast">Cast:</label>
    <input type="text" class="form-control" name="cast" required>
  </div>

  <div class="form-group">
    <label for="img">Image:</label>
    <input type="file" class="form-control"  name="image"  accept=".png,.gif,.jpg" required>
  </div>
  
  
  
  <button type="submit"class="btn btn-info" name="upload" >ADD</button>

    </form>
   

</div>
</body>
</html>

<?php
include 'connectsql.php';

if (isset($_POST["upload"])){
  $mid =$_POST["mid"]; 
  $movie =$_POST["movie"]; 
  $date =$_POST["date"];
  $time=$_POST["time"];
  $dir =$_POST["dir"];
  $writer=$_POST["writer"];
  $cast =$_POST["cast"];
  
   $image_name =$_FILES["image"]['name'];
   $tmp_name =$_FILES["image"]['tmp_name'];
   $folder="./images/".$image_name;
   move_uploaded_file( $tmp_name,$folder);
  
  $sql ="INSERT INTO addmovies VALUES
   ('$mid','$movie', '$date','$time', '$dir', '$writer','$cast','$folder')";
   if(mysqli_query($conn, $sql)){ 
echo"new movie added sussfully";
        } 
   else{ 
    echo"Error:".$sql."<br>". mysqli_error($conn); 
        } 
       
mysqli_close($conn); 
  
}




?>
