<?php
	include('conn.php');
	
    $descrip=$_POST['descrip'];

    mysqli_query($conn,"INSERT INTO `user_stat`(`descrip`) VALUES ('$descrip')");
    
	header('location:dms_status.php');

?>  