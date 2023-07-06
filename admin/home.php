<?php
include 'connectsql.php';
include 'sidebar.php';
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
    header('location:adminlogin.php');
   }

   $sql="SELECT * from customerinfo";
   $result=$conn->query($sql);
   $row= mysqli_num_rows($result);

   $sqli="SELECT * from addmovies";
   $res=$conn->query($sqli);
   $r= mysqli_num_rows($res);
   
   $sq="SELECT * from addshows";
   $resu=$conn->query($sq);
   $ro= mysqli_num_rows($resu);

   $query="SELECT * from booking";
   $ans=$conn->query($query);
   $n= mysqli_num_rows($ans);

?>


<div class="main">
<div class="cards">
<div class="title">
      <h3>NO. of Customer </h3>
</div>
<div class="desc">
    <p><?php echo $row;?></p>
</div>
</div>

<div class="cards">
<div class="title">
      <h3>Total NO. of Movies</h3>
</div>
<div class="desc">
    <p><?php echo $r;?></p>
</div>
</div>

<div class="cards">
<div class="title">
      <h3> Available Shows </h3>
</div>
<div class="desc">
    <p><?php echo $ro;?></p>
</div>
</div>


<div class="cards">
<div class="title">
      <h3> Bookings </h3>
</div>
<div class="desc">
    <p><?php echo $n;?></p>
</div>
</div>
</body>
</html>