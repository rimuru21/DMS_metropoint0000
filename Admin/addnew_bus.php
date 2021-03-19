<?php
	include('conn.php');
	
    $bus_no = $_POST['bus_no'];
    $bus_type_id = $_POST['bus_type_id'];
    $ass_dri = $_POST['ass_dri'];
    $ass_con = $_POST['ass_con'];
    $eng_id = $_POST['eng_id'];
    $plate_no = $_POST['plate_no'];
    $sap_code = $_POST['sap_code'];
    $route_id = $_POST['route_id'];
    $seat_cap = $_POST['seat_cap'];
    $bus_stat_id = $_POST['bus_stat_id'];
    $ip_add = $_POST['ip_add'];
    $ip_add1 = $_POST['ip_add1'];
    $ip_add2 = $_POST['ip_add2'];
    $ip_add3 = $_POST['ip_add3'];

    mysqli_query($conn,"INSERT INTO `bus_details`(`bus_no`, `bus_type_id`, `ass_dri`, `ass_con`, `eng_id`, `plate_no`, `sap_code`, `route_id`, `seat_cap`, `bus_stat_id`, `ip_add`, `ip_add1`, `ip_add2`, `ip_add3`) VALUES ('$bus_no', '$bus_type_id', '$ass_dri', '$ass_con', ' $eng_id', ' $plate_no', ' $sap_code', ' $route_id', '$seat_cap', '$bus_stat_id', '$ip_add','$ip_add1','$ip_add2','$ip_add3')");
    

	header('location:dms_bus.php');

?>  