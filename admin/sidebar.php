<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="admin.css">
</head>
<body>
<nav class="navbar navbar-fixed-top ">

    <div class="nav navbar-nav">
    <button value="submit" class="btn btn-info"> <a href="logout.php">logout</a></button>
    
</div>

</nav> 



<div class="sidebar">
<h2>Threater</h2>
   <a href="home.php"><i class="fa fa-fw fa-home"></i>  Home</a><br>
    <a href="addmovie.php"><i class="fa fa-plus" aria-hidden="true"></i> Add Movie</a><br>
    <a href="viewmovie.php" > <i class="fa fa-film" aria-hidden="true"></i> View Movies</a><br>
    <a href="addshow.php" > <i class="fa fa-plus" aria-hidden="true"></i> Add Shows</a><br>
   
    <a href="todayshow.php" ><i class="fa fa-calendar" aria-hidden="true"></i>Today Shows</a><br>
    <a href="addupcomingmovie.php" ><i class="fa fa-plus" aria-hidden="true"></i>UpComing Movie</a><br>
    <!-- <a href="todaysbooking" ><i class="fa fa-ticket" aria-hidden="true"></i>Todays Booking</a> -->
    </div>  
    </body>
</html>