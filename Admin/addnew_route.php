<?php
	include('conn.php');
	
    $f_descrip=$_POST['f_descrip'];
    $l_descrip=$_POST['l_descrip'];

    mysqli_query($conn,"INSERT INTO `route_details`(`f_descrip`, `f_descrip`) VALUES ('$f_descrip','$l_descrip')");
    
	header('location:dms_terminal.php');

?>  