<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$password = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){

    // while ($row = $query_run->fetch_assoc()) {
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update users set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
    
	?>
<script type="text/javascript">
	alert("Password Updated successfully...");
	window.location.href = "user_dashboard.php";
</script>

<?php
	}
	else{
	?>
	<script>
		alert("Enter currect current password");
		window.location.href = "change_password.php"
	</script>
	<?php
	}
	?>