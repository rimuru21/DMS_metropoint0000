<?php
	include('conn.php');
	
	$bus_id=$_GET['bus_id'];

	mysqli_query($conn,"delete from bus_details where bus_id='$bus_id'");
	header('location:dms_bus.php');

?>