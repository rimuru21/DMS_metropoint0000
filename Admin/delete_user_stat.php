<?php
	include('conn.php');
	
	$stat_id=$_GET['stat_id'];

	mysqli_query($conn,"delete from user_stat where stat_id='$stat_id'");

	header('location:dms_status.php');

?>