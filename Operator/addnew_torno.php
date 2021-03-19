<?php
	include('conn.php');
	
    $trip_no = $_POST['trip_no'];
    $bus_no = $_POST['bus_no'];
    $ass_dri = $_POST['ass_dri'];
    $ass_con = $_POST['ass_con'];
    $bus_type_id = $_POST['bus_type_id'];
    $seat_cap = $_POST['seat_cap'];
    $from_ter = 'Tagum';
    $to_ter = $_POST['to_ter'];
    $que_time = $_POST['que_time'];
    $que_date = $_POST['que_date'];
    $que_stat_id = 4;

    mysqli_query($conn,"INSERT INTO `que_details`(`trip_no`, `bus_no`, `ass_dri`, `ass_con`, `bus_type_id`, `seat_cap`, `from_ter`, `to_ter`, `que_time`, `que_date`, `que_stat_id`) VALUES ('$trip_no', '$bus_no','$ass_dri', '$ass_con', '$bus_type_id', '$seat_cap', '$from_ter', '$to_ter', '$que_time', '$que_date', '$que_stat_id')");
    
	header('location:dms_queued.php');

?>  