<?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"library");
        $query= "delete from authors where author_id = '$_GET[aid]'";
        $query_run = mysqli_query($connection,$query);
        ?>
        <script>
             alert("Book Deleted Successfully.....");
             window.location.href="manage_auth.php"
        </script>
