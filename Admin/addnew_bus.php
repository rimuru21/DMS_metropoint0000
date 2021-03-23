<?php
	include('conn.php');
	
    $bus_no = $_POST['bus_no'];
    $bus_type_id = $_POST['bus_type_id'];
    $dri_id = $_POST['dri_id'];
    $con_id = $_POST['con_id'];
    $eng_id = $_POST['eng_id'];
    $plate_no = $_POST['plate_no'];
    $sap_code = $_POST['sap_code'];
    $route_id = $_POST['route_id'];
    $seat_cap = $_POST['seat_cap'];
    $bus_stat_id = $_POST['bus_stat_id'];

    mysqli_query($conn,"INSERT INTO `bus_details`(`bus_no`, `bus_type_id`, `dri_id`, `con_id`, `eng_id`, `plate_no`, `sap_code`, `route_id`, `seat_cap`, `bus_stat_id`) VALUES ('$bus_no', '$bus_type_id', '$dri_id', '$con_id', ' $eng_id', ' $plate_no', ' $sap_code', ' $route_id', '$seat_cap', '$bus_stat_id')");
    

	header('location:dms_bus.php');

?>  