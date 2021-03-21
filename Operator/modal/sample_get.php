<?php
include "conn.php";

$bus_no = $_POST['bus_no'];
$sql = "SELECT a.ass_dri as ass_dri, a.ass_con as ass_con, a.seat_cap as seat_cap, b.descrip as descrip, a.bus_type_id as bus_type_id, c.abbr as abbr FROM bus_details a, bus_type b, route_details c WHERE b.bus_type_id = a.bus_type_id AND c.route_id = a.route_id AND bus_no = '$bus_no' ";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>