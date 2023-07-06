<?php
include ('header.php');
include ('admin/connectsql.php');


?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/newstyle.css" > 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Ticket booking</title>
  <script type="text/javascript" src="newform.js">
 

    </script>
    <style>
      .des{
        color:green;
      }
    </style>

</head>
<body>
 <div class="row">
    <div class="col-md-6 " id="form_container">
        <h2>Contact Us</h2> 
        <p class="des">
           Please send your message below. We will get back to you at the earliest!
        </p>
<form name="form" id="myform" action="contactprocess.php" method="POST"  autocomplete="off"  onsubmit="return contactvalidation()">
    
      <div class="form-group">
        <label>Fullname:</label> 
        <input class="form-control data-minlength="5" type="text" name="fullname" placeholder="Enter your fullName" >
        <span id="name" style="color: red; font-size: 16px;"></span>
  </div>
       
     
     <div class="form-group">
            <label>Email: </label>
            <input class="form-control"  type="text" name="email" placeholder="Enter your Email Address"> 
            <span id="emails" style="color: red; font-size: 16px;"></span>
  </div>
            
            
            <div class="form-group">
                <label  >ContactNumber:</label> 
                <input class="form-control" type="text" name="contact" placeholder="Enter your Contact Number">
                <span id="number" style="color: red; font-size: 16px;"></span>
                </div>

<div class="form-group">
<label >Message:</label><textarea class="form-control" name="message" reuired></textarea>
</div>
<button type="submit" name="upload" class="btn btn-lg btn-default pull-right" >Send  </button>

</form>
</div>
</div>
</body>
<br><br>

</html>
<?php
include ('footer.php');
?>