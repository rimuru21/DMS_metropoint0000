<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $man_id=$_GET['man_id'];


    $tables = array("user","user_man");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_man.php');

?>