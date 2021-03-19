
<?php
	include('conn.php');
    
    $bus_stat_id = $_POST['bus_stat_id'];
    $descrip = $_POST['descrip'];

    mysqli_query($conn,"UPDATE `bus_stat` SET `descrip`='$descrip' WHERE `bus_stat_id`= '$bus_stat_id'");
    
    header('location:dms_status.php');
?>  