<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $t_ad_id=$_GET['t_ad_id'];


    $tables = array("user","user_t_ad");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_t_admin.php');

?>