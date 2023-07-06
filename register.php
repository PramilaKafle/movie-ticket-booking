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
  <script type="text/javascript" src="newform.js"></script>
</head>
<body>
<div class="row">
    <div class="col-md-6 " id="form_container">
        <h2>Registration Form</h2> 
        <hr>
    

<form  name="form" action="registerprocess.php" method="POST" onsubmit="return validatereg()">
     <div class="form-group">
       <label>Firstname:</label>
       <input class="form-control"  type="text" name="firstname" placeholder="Enter your first Name" >
       <span id="name" style="color: red; font-size: 16px;"></span>
     </div>

     <div class="form-group">
       <label>Lastname:</label>
       <input class="form-control"  type="text" name="lastname" placeholder="Enter your last Name" >
       <span id="lname" style="color: red; font-size: 16px;"></span>
     </div>
     <div class="form-group">
       <label>Email:</label>
       <input class="form-control"  type="text" name="email" placeholder="Enter your Email Address" >
       <span id="emails" style="color: red; font-size: 16px;"></span>
     </div>
     <div class="form-group">
       <label>Address:</label>
       <input class="form-control"  type="text" name="address" placeholder="Enter your Address" >
       <span id="address" style="color: red; font-size: 16px;"></span>
     </div>
     <div class="form-group">
       <label>Gender:</label>
       <input class="form-group"  type="radio" name="gender" value="M">Male   <input class="form-group"  type="radio" name="gender" value="F">Female
    <span id="gen" style="color: red; font-size: 16px;"></span><br><br>
       
     </div>
     <div class="form-group">
       <label>Username:</label>
       <input class="form-control"  type="text" name="name" placeholder="Enter your Username" >
       <span id="username" style="color: red; font-size: 16px;"></span>
     </div>
     <div class="form-group">
       <label>Password:</label>
       <input class="form-control"  type="password" name="pass" placeholder="Enter your Password(min 6 character)" >
       <span id="pass" style="color: red; font-size: 16px;"></span>
     </div>
     <div class="form-group">
       <label>  Confirm Password:</label>
       <input class="form-control"  type="password" name="conpass" placeholder="Enter your Password" >
       <span id="conpass" style="color: red; font-size: 16px;"></span>
     </div>

     <button type="submit" name="upload" class="btn btn-lg btn-default pull-right" >Submit  </button>
   

</form>
</div>
</div>

</body>
</html>
<br><br>
<?php
include ('footer.php');
?>