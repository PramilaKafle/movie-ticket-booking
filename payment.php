<?php
include ('header.php');
include 'admin/connectsql.php';


if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) ){
  header('location:login.php');
 }

// $mid="";
//  if (isset($_GET['mid'])) {
//     $mid=$_GET['mid'];
   
// }  

// $_SESSION['book']='payment';

if(isset($_POST["booknow"])){
    $_SESSION['book'][]=array(
      'id' => rand(100,10000),
      'screen' => $_POST['screen'],
      'seat' => $_POST['seat'],
      'amount' => $_POST['amount'],
      
  );
}

?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script type="text/javascript" src="newform.js">

    </script>
</head>
<body>
    

<br><br><br>

 <div class="row">
    <div class="col-md-6 " id="form_container">

        <h2>Payment</h2> 
       

    <b><legend > Credit/Debit Card Payment</legend></b>
  
        <i class="fab fa-cc-visa"></i>
        <i class="fas fa-credit-card"></i>
 

<!-- <form  name="form"   method="POST" action="#"   autocomplete="off"  onsubmit="return paymentvalidate()" >
   
  
       
<div class="form-group">
            <label>CARD NUMBER:</label>
              <input  class="form-control" type="text" name="cardnumber">
 <span id="cardnum" style="color: red; font-style: italic;"></span>
</div>
<div class="form-group">
       <label>CARD EXPIRY:</label>
           <input  class="form-control" type="text" name="cardexpiry"  >
 <span id="cardexpiry" style="color: red; font-style: italic; "></span>
</div>
<div class="form-group">
        <label>CARD CVC:</label>
          <input  class="form-control" type="text" name="cardcvc" >
 <span id="cardcvc" style="color: red;font-style: italic; "></span>
</div>
<div class="form-group">
           <label>CARD HOLDER NAME:</label>
                <input class="form-control" type="text" name="cardname"  >
                <span id="cardname" style="color: red; font-style: italic;"></span>
    </div>
    <button type="submit" name="upload" class="btn btn-success btn-lg btn-block " >Confirm Payment </button><br>
          
  



</form> -->
 <!-- <?php
$query = " SELECT * FROM booking  ORDER BY  amount DESC LIMIT 1";
$result= mysqli_query($conn,$query);


     $n1= mysqli_fetch_array($result);
    
        ?>  -->
        <?php if(isset($_SESSION['book'])) :?>
                <?php foreach($_SESSION['book'] as $k => $item) :?>

        
        <form action="https://uat.esewa.com.np/epay/main" method="POST">
            <input value="<?php echo $item['amount'];?>" name="tAmt" type="hidden">
            <input value="<?php echo $item['amount'];?>" name="amt" type="hidden">
            <input value="0" name="txAmt" type="hidden">
            <input value="0" name="psc" type="hidden">
            <input value="0" name="pdc" type="hidden">
            <input value="EPAYTEST" name="scd" type="hidden">
            <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
            <input value="http://localhost/movies/esewa_payment_success.php" type="hidden" name="su">
            <input value="http://localhost/movies/esewa_payment_failed.php" type="hidden" name="fu">
            <input value="Pay with E-sewa " type="submit" class="btn btn-success btn-lg btn-block " name="esewa">
      </form>
    
    

      <?php endforeach ?>
            <?php endif ?>


</div>
</div>
</body>
</html>
<br><br><br><br><br><br>
<?php include 'footer.php'?>