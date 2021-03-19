<?php
	include('conn.php');
	
    $que_id = $_POST['que_id'];
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

    mysqli_query($conn,"UPDATE `que_details` SET `que_id`='$que_id',`trip_no`='$trip_no',`bus_no`='$bus_no',`ass_dri`='$ass_dri',`ass_con`='$ass_con',`bus_type_id`='$bus_type_id',`seat_cap`='$seat_cap',`from_ter`='$from_ter',`to_ter`='$to_ter',`que_time`='$que_time',`que_date`='$que_date',`que_stat_id`='$que_stat_id' WHERE `que_id`= '$que_id'");
 
	header('location:dms_queued.php');

?>  

