<?php
	include('conn.php');
	
    $descrip=$_POST['descrip'];

    mysqli_query($conn,"INSERT INTO `ter_details`(`descrip`) VALUES ('$descrip')");
    
	header('location:dms_terminal.php');

?>  