<?php
session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS | Admin Dashboard - Manage Author</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin_dashboard.php">Library Management System(LMS)</a>
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

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
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

<div class="container headings text-center" style="margin-bottom:35px;">
		<h2 class="text-center font-weight-bold">Manage Authors</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1">

            <table class="table table-bordered table-hover"  style="text-align: center; overflow:auto;"> 
                <thead>
                    <tr>
                        <th>Author ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <?php
                         $connection = mysqli_connect("localhost","root","");
                         $db = mysqli_select_db($connection,"library");
                         $query="select * from authors";
                         $query_run = mysqli_query($connection,$query);
                         while ($row = mysqli_fetch_assoc($query_run)){
                    ?>  
                    <tr>
                        <td><?php echo $row['author_id']; ?></td>
                        <td><?php echo $row['author_name']; ?></td>
                        <td>
                            <button class="btn"><a href="edit_auth.php?aid=<?php echo $row['author_id'];?>" style="text-decoration:none;">
                            Edit</a></button>
                            <button class="btn"><a href="delete_auth.php?aid=<?php echo $row['author_id'];?>" style="text-decoration:none;">
                            Delete</a></button>

                        </td>
                    </tr>  

                    <?php       
                     }
                    ?>
                   
                </table>
            
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

