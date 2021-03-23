
<?php
	include('conn.php');
    
    $trip_stat_id = $_POST['trip_stat_id'];
    $dri_id = $_POST['dri_id'];

    mysqli_query($conn,"UPDATE `user_dri` SET `trip_stat_id`='$trip_stat_id' WHERE `dri_id`= '$dri_id'");
    
    header('location:dms_dri_reports.php');
?>  