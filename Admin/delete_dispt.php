<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $dispt_id=$_GET['dispt_id'];


    $tables = array("user","user_dispt");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_dis.php');

?>