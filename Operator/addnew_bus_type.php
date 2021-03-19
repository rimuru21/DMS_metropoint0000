
<?php
	include('conn.php');
	
    $descrip=$_POST['descrip'];
    $abbr=$_POST['abbr'];
    mysqli_query($conn,"INSERT INTO `bus_type`(`descrip`, `abbr`) VALUES ('$descrip', '$abbr')");
    
	header('location:dms_bus.php');

?>  