<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $ad_id=$_GET['ad_id'];


    $tables = array("user","user_admin");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_admin.php');

?>