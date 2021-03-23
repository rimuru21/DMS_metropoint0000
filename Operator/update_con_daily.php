
<?php
	include('conn.php');
    
    $trip_stat_id = $_POST['trip_stat_id'];
    $con_id = $_POST['con_id'];

    mysqli_query($conn,"UPDATE `user_con` SET `trip_stat_id`='$trip_stat_id' WHERE `con_id`= '$con_id'");
    
    header('location:dms_con_reports.php');
?>  