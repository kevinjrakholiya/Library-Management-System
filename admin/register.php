<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "insert into admins values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[address]')";
    $query_run = mysqli_query($connection,$query);
?>

<script>
    alert("Registration Successfully....You may login now.");
    window.location.href = "index.php";
</script>