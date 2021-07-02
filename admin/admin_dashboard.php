<?php
session_start(); 
require('functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS | Admin Dashboard </title>
    <link rel="stylesheet" href="../css/style.css">
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
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
          Book
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_book.php">Add New Book</a>
          <a class="dropdown-item" href="manage_book.php">Manage Books</a>
        </div>
        </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_cat.php">Add New Category</a>
          <a class="dropdown-item" href="manage_cat.php">Manage Category</a>
        </div>
        </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
          Author
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_auth.php">Add New Author</a>
          <a class="dropdown-item" href="manage_auth.php">Manage Author</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="issue_book.php">Issue Book</a>
      </li>
    </ul>
  </div>
</nav><br>

<span><marquee behavior="" direction="">This is Library Management System. Library Opens at 8:00 AM and Close 
    at 8:00 PM.</marquee></span><br><br>


<div class="container-fluid" id="user">
    <div class="row">
        <div class="col-lg-4 col-mg-4 col-12">
        <span><strong class="text-black">Admin Dashboard</strong></span>
        </div>
        <div class="col-lg-4 col-mg-4 col-12">
        <span><strong class="text-black">Admin Name: <?php echo $_SESSION['name']; ?></strong></span>
        </div>
        
        <div class="col-lg-4 col-mg-4 col-12">
        <span><strong class="text-black">Email: <?php echo $_SESSION['email']; ?></strong></span>  
        </div>
    </div>
</div>
<br><br>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-12 mt-4">
      <div class="card bg-light" style="width: 300px;">
					<div class="card-header">Registered Users:</div>
					<div class="card-body">
						<p class="card-text">No. of total users: <?php echo get_user_count(); ?></p>
            <a href="regusers.php" class="btn btn-danger" target="_blank">View Registered Users</a>
					</div>
			</div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
      <div class="card bg-light" style="width: 300px;">
					<div class="card-header">Registered Books:</div>
					<div class="card-body">
						<p class="card-text">No. of available books:  <?php echo get_book_count(); ?></p>
            <a href="regbooks.php" class="btn btn-primary" target="_blank">View Registered Books</a>
					</div>
			</div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
      <div class="card bg-light" style="width: 300px;">
					<div class="card-header">Registered Category:</div>
					<div class="card-body"> 
						<p class="card-text">No. of books category:  <?php echo get_category_count(); ?></p>
            <a href="regcat.php" class="btn btn-secondary" target="_blank">View categories</a>
					</div>
			</div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
      <div class="card bg-light" style="width: 300px;">
					<div class="card-header">Registered Authors:</div>
					<div class="card-body">
						<p class="card-text">No. of available authors:  <?php echo get_author_count(); ?></p>
            <a href="regauth.php" class="btn btn-success" target="_blank">View Authors</a>
					</div>
			</div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
      <div class="card bg-light" style="width: 300px;">
					<div class="card-header">Issued Books:</div>
					<div class="card-body">
						<p class="card-text">No. of issued books:  <?php echo get_Issued_book_count(); ?></p>
            <a href="view_issued_book.php" class="btn btn-info" target="_blank">View Issued Books</a>
					</div>
			</div>
    </div>
  </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>