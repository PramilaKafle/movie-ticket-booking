<?php



include 'connectsql.php';
include 'sidebar.php';
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
  header('location:adminlogin.php');
 }

// SQL query to select data from database
$query = " SELECT * FROM addmovies  ";
//FETCHING DATA FROM DATABASE
$result = $conn->query($query);
?>





<div class="main">
  <br><br>
  <h3>MOVIES LISTS</h3>
<ul class="list-group">
<!--<?php include 'retrieve-data.php'; ?>-->
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>

  <li class="list-group-item"><?php echo $array[1];?><a href="deletemovie.php?mid=<?php echo $array[0];?>" > <button  type="submit"class="btn btn-light pull-right" name="upload" > Delete</button></a>
</li>
  
  <?php endwhile; ?>
                <?php else: ?>
                    <?php endif; ?>
                <?php mysqli_free_result($result); ?>
</ul>

</div>
</body>
</html>