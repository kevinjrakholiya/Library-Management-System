<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query= "update users set name = '$_POST[name]',email = '$_POST[email]',mobile = '$_POST[mobile]',address = '$_POST[address]'
    where email = '$_SESSION[email]'";
    $query_run = mysqli_query($connection,$query);
?>

<script>
    alert("Updated Successfully...");
    window.location.href = "user_dashboard.php";
</script>