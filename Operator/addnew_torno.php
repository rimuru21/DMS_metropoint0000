<?php
	include('conn.php');
	
    $trip_no = $_POST['trip_no'];
    $bus_no = $_POST['bus_no'];
    $dri_id = $_POST['dri_id'];
    $con_id = $_POST['con_id'];
    $bus_type_id = $_POST['bus_type_id'];
    $seat_cap = $_POST['seat_cap'];
    $from_ter = $_POST['from_ter'];;
    $to_ter = $_POST['to_ter'];
    $que_time = $_POST['que_time'];
    $que_date = $_POST['que_date'];
    $que_stat_id = 0;
    $trip_stat_id = 1;

    mysqli_query($conn,"INSERT INTO `que_details`(`trip_no`, `bus_no`, `dri_id`, `con_id`, `bus_type_id`, `seat_cap`, `from_ter`, `to_ter`, `que_time`, `que_date`, `que_stat_id`) VALUES ('$trip_no', '$bus_no','$dri_id', '$con_id', '$bus_type_id', '$seat_cap', '$from_ter', '$to_ter', '$que_time', '$que_date', '$que_stat_id')");

    mysqli_query($conn,"UPDATE `user_dri` SET `trip_stat_id` = '$trip_stat_id' WHERE `dri_id` = '$dri_id'");
    mysqli_query($conn,"UPDATE `user_con` SET `trip_stat_id` = '$trip_stat_id' WHERE `con_id` = '$con_id'");
    mysqli_query($conn,"UPDATE `bus_details` SET `trip_stat_id` = '$trip_stat_id' WHERE `bus_no` = '$bus_no'");
        
	header('location:dms_queued.php');

?>  