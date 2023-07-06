<?php

include 'connectsql.php';
include 'sidebar.php';
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
  header('location:adminlogin.php');
 }

// SQL query to select data from database
$query = " SELECT * FROM addshows  ";
//FETCHING DATA FROM DATABASE
$result = $conn->query($query);
?>

 


<div class="main">
<br><br><br>
<h3>AVAILABLE SHOWS</h3>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
       
        <th>Movie</th>
        <th>Screen</th>
        <th>Show Time</th>
        <th>Start Date</th>
        <th>Total Seats</th>
        <th>Ticket charge</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
      <tr>
    
     
        <td><?php echo $rows['movie'];?></td>
        <td><?php echo $rows['screen'];?></td>
        <td><?php echo $rows['showtime'];?></td>
        <td><?php echo $rows['date'];?></td>
        <td><?php echo $rows['seats'];?></td>
        <td><?php echo $rows['ticketcharge'];?></td>
        <td><a href="deleteshow.php?mid=<?php echo $rows['show_ID'];?>" > <button  type="submit"class="btn btn-info" name="upload" > Delete</button></a></td>
        <?php
                }
            ?>
      </tr>
      
    </tbody>
  </table>
  </div>
</div>

</body>
</html>