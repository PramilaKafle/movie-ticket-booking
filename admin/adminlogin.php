<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
     <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
<link rel="stylesheet" href="admin.css">
<style>
  #form_container{
    left:300px;
    top:100px;
    background-color:;
    border:1px solid grey;
  }
  h3{
    text-align:center;
  }
</style>

</head>

<body>

<div class="row">
  
 <div class="col-md-6" id="form_container">
 
  <h3>Admin login</h3>
  <hr>
  
  <form action="loginvalidate.php" method="POST" autocomplete="off">
    <div class="input-group">
      
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control"  id="username" placeholder="Enter username" name="username">
    </div>
    <br></br>
    <div class="input-group">
     
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" class="form-control"  id="pwd" placeholder="Enter password" name="pwd">
    </div><br></br>
    <div class="form-group">
    <input type="submit" class="btn btn-primary pull-right"  value="login">
    </div>

  </form>


  </div>  
</div>  




</body>
</html>


