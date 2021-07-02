<?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"library");
        $query= "delete from books where book_no = '$_GET[bn]'";
        $query_run = mysqli_query($connection,$query);
        ?>
        <script>
             alert("Book Deleted Successfully.....");
             window.location.href="manage_book.php"
        </script>
