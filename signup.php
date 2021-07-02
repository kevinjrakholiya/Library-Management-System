<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System </title>
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="admin/index.php">Admin Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">User Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">User Register</a>
      </li>
      
    </ul>
  </div>
</nav><br>

<span><marquee behavior="" direction="">This is Library Management System. Library Opens at 8:00 AM and Close 
    at 8:00 PM.</marquee></span><br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12" id="side_bar">
            <h5>Library Timing</h5>
            <ul>
                <li>Opening Time 8:00 AM</li>
                <li>Closing Time 8:00 PM</li>
                <li>Sunday off</li>
            </ul>
            <h5>What We Provide ?</h5>
            <ul>
                <li>Free Wi-fi</li>
                <li>News Paper</li>
                <li>Discussion room</li>
                <li>RO Water</li>
                <li>Peacefull Environment</li>
            </ul>
        </div>

        <div class= "col-lg-8 col-md-8 col-12" id="main_content">
            <center><h3>User Registration Form</h3></center>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobil Number:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea name="address" id="address" cols="40" rows="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>