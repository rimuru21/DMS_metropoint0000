<?php
	include('conn.php');
	
	$ter_id=$_GET['ter_id'];

	mysqli_query($conn,"delete from ter_details where ter_id='$ter_id'");
	header('location:dms_terminal.php');

?>