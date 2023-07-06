<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php

include 'connectsql.php';
include 'sidebar.php';
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
  header('location:adminlogin.php');
 }

// SQL query to select data from database
$query = " SELECT moviename FROM addmovies  ";
//FETCHING DATA FROM DATABASE
$result = $conn->query($query);
?>




<div class="main">
    <legend>ADD SHOWS</legend>
    <form action="" method="POST"  data-toggle="validator">
    <div class="form-group">
    <label for="id">Movie Id:</label>
    <input type="num" class="form-control"  name="mid" required>
    
  </div>
    <div class="form-group">
    <label>Select Movie:</label>
    <select name="selectmovie" class="form-control" >
  <option readonly>Select a movie</option>
  <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
  <option><?php echo $array[0];?></option>

  <?php endwhile; ?>
                <?php else: ?>
                    <?php endif; ?>
                <?php mysqli_free_result($result); ?>
  </select>
</div><br>
  <div class="form-group">
 
    <label>Select Screen:</label>
    <select name="selectscreen" class="form-control"  >
  <option >Select a screen</option>
  <option value="DEMO">DEMO</option>
  <option value="3D screen">3D screen</option>
  <option value="4D screen">4D screen</option>
</select>
  </div><br>
  <div class="form-group">
    <label>Select Show Time:</label>
    <select name="selecttime" class="form-control"  placeholder="Select show time" >
  <option value="Morning(6-9)">Morning(6-9)</option>
  <option value="Noon(12-3)">Noon(12-3)</option>
  <option value="Night(8-11">Night(8-11)</option>
</select>
  </div><br>
  <div class="form-group">
    <label for="date">Start date:</label>
    <input type="date" class="form-control"  name="date">
  </div><br>
  <div class="form-group">
  <label >Seats:</label>
    <input type="number" name="seats" id="seats" placeholder="Seats" class="form-control"/>
 </div>
<div class="form-group">
<label >Ticket charge:</label>
    <input type="text" name="charge" id="scharge" placeholder="Ticket Charge" class="form-control"/>
</div>
  <button type="submit"class="btn btn-info"name="add" >ADD</button>
    </form>

<?php



include 'connectsql.php';
if (isset($_POST["add"])) {
  $mid =$_POST["mid"]; 
$selectmovie =$_POST["selectmovie"];
$selectscreen =$_POST["selectscreen"];
$selecttime =$_POST["selecttime"];
$date =$_POST["date"];
$seats=$_POST["seats"];
$charge=$_POST["charge"];



$sql ="INSERT INTO addshows VALUES
    ('$mid','$selectmovie','$selectscreen' ,'$selecttime','$date','$seats', '$charge')";
    if(mysqli_query($conn, $sql)){ 
 echo"new show added sussfully";
         } 
    else{ 
     echo"Error:".$sql."<br>". mysqli_error($conn); 
         } 
        
 mysqli_close($conn); 
}
?>

</div>
</body>
</html>
