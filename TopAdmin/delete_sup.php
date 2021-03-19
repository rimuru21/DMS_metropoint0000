<?php
	include('conn.php');

	$user_id=$_GET['user_id'];
    $sup_id=$_GET['sup_id'];


    $tables = array("user","user_sup");
    foreach($tables as $table) {
    mysqli_query($conn,"DELETE FROM $table WHERE user_id='$user_id'");
}
	

	header('location:user_sup.php');

?>