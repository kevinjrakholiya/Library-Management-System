<?php
session_start(); 
$connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"library");
        $name = "";
        $email = "";
        $mobile = "";
        $address = "";
        $query= " select * from admins where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection,$query);
        // while ($row = $query_run->fetch_assoc()){
            while ($row = mysqli_fetch_assoc($query_run)){
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $address = $row['address'];
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS | Admin Dashboard - View Profile </title>
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

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-mg-4 col-8 offeset-lg-4 offset-md-4 col-2">
        <form>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" value="<?php echo $name;?>"disabled>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" value="<?php echo $email;?>"disabled>
                </div>
                <div class="form-group">
                    <label>mobile:</label>
                    <input type="text" class="form-control" value="<?php echo $mobile;?>"disabled>
                </div>
                <div class="form-group">
                    <label>address:</label>
                    <textarea rows="3"  cols="40"  class="form-control" disabled=""><?php echo $address;?>
                    </textarea>
                </div>
                
            </form>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>