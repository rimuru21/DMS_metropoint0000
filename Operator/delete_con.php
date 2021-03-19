<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $con_id=$_GET['con_id'];


    $tables = array("user","user_con");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_con.php');

?>