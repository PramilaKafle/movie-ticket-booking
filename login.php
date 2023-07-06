<?php
include ('header.php');
include ('admin/connectsql.php');
     
      
?>
<!-- <head> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
      .des{
        color:green;
		
      }
    </style>
<!-- </head> -->
<body>
<br><br><br>
<div class="row">
    <div class="col-md-6 " id="form_container">
        <h2>LOGIN</h2> 
        <p class="des">
           Please login to procced!
        </p>
<form  name="form" action="loginprocess.php"  method="POST"   autocomplete="off"  onsubmit="return loginvalidate() ">
<div class="form-group">
       <label>Username:</label>
       <input class="form-control"  type="text" name="uname" placeholder="Enter your Username" >
      
     </div>
     <div class="form-group">
       <label>Password:</label>
       <input class="form-control"  type="password" name="password" placeholder="Enter your Password(min 6 character)" >
       <span id="pass" style="color: red; font-size: 16px;"></span>
     </div>
    

<button type="submit" name="upload" class="btn btn-success btn-lg btn-block " >Login </button>

<div class="form-group"> 
<a href="register.php" style="font-size:18px;"> New here?<b>  Register Now</b></a>
</div>

</form>
	</div>
	</div>
  <br><br><br><br>
  <?php include 'footer.php'?>