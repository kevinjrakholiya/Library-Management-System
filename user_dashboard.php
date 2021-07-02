<?php
session_start(); 
function get_user_issued_book_count(){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"library");
  $user_issued_book_count="0";
  $query= " select count(*) as user_issued_book_count from issued_books where student_id=$_SESSION[id]";
  $query_run = mysqli_query($connection,$query);
      while ($row = mysqli_fetch_assoc($query_run)){
            $user_issued_book_count = $row['user_issued_book_count'];
      }
        return($user_issued_book_count);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS | User Dashboard </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
          My Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="view_profile.php">View Profile</a>
          <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
          <a class="dropdown-item" href="change_password.php">Change Password</a>
        </div>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav><br>

<span><marquee behavior="" direction="">This is Library Management System. Library Opens at 8:00 AM and Close 
    at 8:00 PM.</marquee></span><br><br>


<div class="container-fluid" id="user">
    <div class="row">
        
        <div class="col-lg-4 col-mg-4 col-12">
        <span><strong class="text-black">User Dashboard</strong></span>
        </div>
        <div class="col-lg-4 col-mg-4 col-12">
        <span><strong class="text-black">User Name: <?php echo $_SESSION['name']; ?></strong></span>
        </div>
        
        <div class="col-lg-4 col-mg-4 col-12">
        <span><strong class="text-black">Email: <?php echo $_SESSION['email']; ?></strong></span>  
        </div>
    </div>
</div>
<br>
<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-12 mt-4">
      <div class="card bg-light" style="width: 300px;">
					<div class="card-header">Issued Books:</div>
					<div class="card-body">
						<p class="card-text">No. of issued books: <?php echo get_user_issued_book_count(); ?> </p>
            <a href="view_issued_book.php" class="btn btn-success" target="_blank">View Issued Books</a>
					</div>
			</div>
  </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>