<?php 
include 'header.php';
include 'admin/connectsql.php';
if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) ){
  header('location:login.php');
 }


 $_SESSION['wish']='wishlist';
?>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br>
<div class="table-container">
  <h2 style="text-align: center;">Wish List</h2>
             
  <table class="table">
    <thead>
      <tr>
        <th>Movie Name</th>
        <th>Release Date</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $mid="";
        if (isset($_GET['mid'])) {
           $mid=$_GET['mid'];}   
        $sql="SELECT * FROM wishlist  JOIN addmovies on addmovies.Movie_ID= wishlist.pid";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) >0)
        {
            while($row=mysqli_fetch_array($result))
            {
        ?>
      <tr>
        <td><a href="2.php?mid=<?php echo $row['pid'];?>"><?php echo $row['Moviename'];?></a></td>
        <td><?php echo $row['Release_date'];?></td>
        <td><?php echo date('M j g: i A',strtotime($row['timestamp']));?></td>
        
        <td><a href="delete_wishlist.php?mid=<?php echo $row['pid'];?>"   class="btn btn-info" role="button"> Delete</a> </td>
      </tr>
     
      <?php
      }
    }?>
    </tbody>
  </table>
</div>

</body>
</html>
<br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'?>