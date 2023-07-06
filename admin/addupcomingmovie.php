<?php
include 'sidebar.php';
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
  header('location:adminlogin.php');
 }
?>

<div class="main">
<legend>ADD  UPCOMING MOVIE</legend>
 
<form action=""  method="POST" data-toggle="validator" enctype="multipart/form-data">
  <div class="form-group">
    <label for="movie">Movie Name:</label>
    <input type="text" class="form-control"  name="movie" required>
</div>

<div class="form-group">
    <label for="type">Movie Type:</label>
    <input type="text" class="form-control"  name="type" required>
</div>
  
 <div class="form-group">
    <label for="date">Release date:</label>
    <input type="date" class="form-control"  name="date" required>
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
  $movie =$_POST["movie"]; 
  $type=$_POST['type'];
  $date =$_POST["date"];
 
  
   $image_name =$_FILES["image"]['name'];
   $tmp_name =$_FILES["image"]['tmp_name'];
   $folder="./upcoming/".$image_name;
   move_uploaded_file( $tmp_name,$folder);
  
  $sql ="INSERT INTO upcomingmovies VALUES
   ('$movie', '$type','$date','$folder')";
   if(mysqli_query($conn, $sql)){ 
echo"new movie added sussfully";
        } 
   else{ 
    echo"Error:".$sql."<br>". mysqli_error($conn); 
        } 
       
mysqli_close($conn); 
  
}




?>
