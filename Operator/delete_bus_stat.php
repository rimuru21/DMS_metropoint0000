<?php
	include('conn.php');
	
	$bus_stat_id=$_GET['bus_stat_id'];

	mysqli_query($conn,"delete from bus_stat where bus_stat_id='$bus_stat_id'");

	header('location:dms_status.php');

?>