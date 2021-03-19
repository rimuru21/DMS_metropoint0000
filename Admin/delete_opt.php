<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $opt_id=$_GET['opt_id'];


    $tables = array("user","user_opt");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_op.php');

?>