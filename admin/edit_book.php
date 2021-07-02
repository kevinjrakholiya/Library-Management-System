<?php
session_start(); 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"library");
    $book_name="";
    $author_name="";
    $cat_name="";
    $book_no="";
    $book_price="";
$query= " select * from books where book_no = '$_GET[bn]'";
$query_run = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($query_run)){
    $book_name = $row['book_name'];             
    $author_name = $row['author_name'];             
    $cat_name = $row['cat_name'];             
    $book_price = $row['book_price'];             
    $book_no = $row['book_no'];  

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS | Admin Dashboard - Update Book</title>
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

<div class="container headings text-center" style="margin-bottom:35px;">
		<h3 class="text-center font-weight-bold">Edit Book No. : <?php echo $_GET['bn']; ?></h3>
</div>

    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-mg-4 col-8 offeset-lg-4 offset-md-4 col-2">
        <form action="" method="post">
                <div class="form-group">
                    <label>Book No:</label>
                    <input type="text" class="form-control" name="book_no" value="<?php echo $book_no; ?>" required>
                </div>
                <div class="form-group">
                    <label>Book Name:</label>
                    <input type="text" class="form-control" name="book_name" value="<?php echo $book_name; ?>" required>
                </div>
                <div class="form-group">
                    <label>Author:</label>
                    <input type="text" class="form-control" name="author_name" value="<?php echo $author_name; ?>" required>
                </div>
                <div class="form-group">
                    <label>Category:</label>
                    <input type="text" class="form-control" name="cat_name" value="<?php echo $cat_name; ?>" required>
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" class="form-control" name="book_price" value="<?php echo $book_price; ?>" required>
                </div>
                 <button class="btn btn-primary" name="update_book">Update Book</button>
            </form>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
    if(isset($_POST['update_book'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"library");
        $query= "update books set book_no = '$_POST[book_no]',book_name = '$_POST[book_name]',author_name = '$_POST[author_name]',
        cat_name = '$_POST[cat_name]',book_price = '$_POST[book_price]' where book_no = '$_GET[bn]'";
        $query_run = mysqli_query($connection,$query);
        ?>
        <script>
             alert("Book Update Successfully.....");
             window.location.href="manage_book.php"
        </script>
        <?php
    }
?>

