
    <?php
	include('conn.php');
	
	$que_id=$_GET['que_id'];
    $dri_id=$_GET['dri_id'];
    $con_id=$_GET['con_id'];
    $bus_id=$_GET['bus_id'];
    $trip_stat_id = 0;

	mysqli_query($conn,"DELETE from que_details where que_id='$que_id'");

    mysqli_query($conn,"UPDATE `user_dri` SET `trip_stat_id` = '$trip_stat_id' WHERE `dri_id` = '$dri_id'");
    mysqli_query($conn,"UPDATE `user_con` SET `trip_stat_id` = '$trip_stat_id' WHERE `con_id` = '$con_id'");
    mysqli_query($conn,"UPDATE `bus_details` SET `trip_stat_id` = '$trip_stat_id' WHERE `bus_no` = '$bus_no'");

	header('location:dms_queued.php');

?>