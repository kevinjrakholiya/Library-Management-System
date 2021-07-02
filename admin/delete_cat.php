<?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"library");
        $query= "delete from category where cat_id = '$_GET[cid]'";
        $query_run = mysqli_query($connection,$query);
        ?>
        <script>
             alert("Category Deleted Successfully.....");
             window.location.href="manage_cat.php"
        </script>
