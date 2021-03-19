<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $dri_id=$_GET['dri_id'];


    $tables = array("user","user_dri");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_dri.php');

?>