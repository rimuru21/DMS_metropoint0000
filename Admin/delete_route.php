<?php
	include('conn.php');
	
	$route_id=$_GET['route_id'];

	mysqli_query($conn,"delete from route_details where route_id='$route_id'");
	header('location:dms_terminal.php');

?>