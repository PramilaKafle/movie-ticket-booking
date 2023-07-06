

<?php
include 'admin/connectsql.php';
if (isset($_POST["book"])){
    $sid =$_POST["screen"]; 
    $seat =$_POST["seat"]; 
    $amount =$_POST["amount"];
    $sql ="INSERT INTO booking VALUES
   ('$sid','$seat', '$amount')";
   if(mysqli_query($conn, $sql)){ 
echo"new movie added sussfully";
header('location:payment.php');
        } 
   else{ 
    echo"Error:".$sql."<br>". mysqli_error($conn); 
        } 
       
mysqli_close($conn);
  
}

if(isset($_POST["booknow"])){
    $_SESSION['book'][]=array(
      'id' => rand(100,10000),
      'screen' => $_POST['screen'],
      'seat' => $_POST['seat'],
      'amount' => $_POST['amount'],
      
  );
}
?>