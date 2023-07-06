<?php 
include 'header.php';
include 'admin/connectsql.php';


$mid="";
 if (isset($_GET['mid'])) {
    $mid=$_GET['mid'];
   
}  


// // SQL query to select data from database
$qry = " SELECT * FROM addmovies where Movie_ID= $mid";
// //FETCHING DATA FROM DATABASE
$res = $conn->query($qry);


?>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>
<body>

					

<div class="description">
<?php 

					while($n=mysqli_fetch_array($res))
					{
                        ?>
                   
    <div class="image-container">
   
        <img class="img" src="admin/<?php echo $n['image']; ?>" alt="image"  > 
    </div> 
    <div class="desc-container">
        <p class="movie-desc"><?php echo $n['Moviename']; ?><br><br>
            <table>
                <tr><td>Release date:</td><td> <?php echo $n['Release_date']; ?> </td></tr>
               <tr><td>Running time:</td><td> <?php echo $n['Running_time']; ?></td></tr>
               <tr><td>Director:</td><td><?php echo $n['Director']; ?></td></tr>
               <tr><td>Writers:</td><td><?php echo $n['Writer']; ?>
            </td></tr>
               <tr><td>Cast:</td><td>
               <?php echo $n['Cast']; ?> </td></tr>
               <?php
                
            }
            ?>

<?php 
$qry1 = " SELECT * FROM addshows where show_ID= $mid";
$res1 = $conn->query($qry1);

while( $n1= mysqli_fetch_array($res1))
{
    ?>
               <tr><td>Screen:</td><td>
               <?php echo $n1['screen']; ?> </td></tr>
               <tr><td>Show Time:</td><td>
               <?php echo $n1['showtime']; ?> </td></tr>
               <tr><td>Show Date:</td><td>
               <input type="date"  id="dates"  onclick="return datevalidation()" required>
                   <span id="date" style="color: red; font-size: 16px;"></span></td></tr>
                   <tr><td>Number of seats:</td><td>  
                   
                  
                <form  action="payment.php" method="post">
           <input type="hidden" name="screen" value="<?php echo $n1['show_ID'];?>"/>
        <input type="number" name="seat" required tile="Number of Seats" max="<?php echo $n1['seats']?>" min="1" name="seats" class="input-control " value="" style="text-align:center" id="seats" onchange="calculateamount(this.value)" required />
</td></tr>
<tr><td>
     <input type="hidden"  name="amount" id="hm" value="<?php echo $n1['ticketcharge'];?>"/> 
											
                                          
            
        </td></tr> 

        <tr><td>Amount:</td> <td  id="amount" >
       
   </td></tr>
   </table>
   <button name="booknow" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">BOOK NOW</button>  
   </form>
  <script>
    
    $(document).ready(function(){
		$('#seats').change(function(){

var charge=<?php echo $n1['ticketcharge'];?>;
      
		 amount=charge*$(this).val();
		
		$('#hm').val(amount);
        $('#amount').html("Rs"+ amount);
	});
});
</script>
	

    
 


</p>







</div>
    <?php
} 
?>
</div>









    
   

    
   <script type="text/javascript">
   
 function datevalidation(){
     var date= new Date;
    var tdate=date.getDate();
    var month=date.getMonth()+1;
    if(tdate<10){
tdate='0'+ tdate;
    }
if(month<10){
        month ='0' + month;   }
        var year = date.getUTCFullYear();
        var mindate =year + "-"+ month +"-"+ tdate;
        document.getElementById('dates').setAttribute('min',mindate);
     console.log(mindate);

    }
     


 

</script> 




</body>
</html>
     

