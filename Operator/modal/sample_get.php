<?php
include "conn.php";

$bus_no = $_POST['bus_no'];
$sql = "SELECT  a.seat_cap as seat_cap, CONCAT(d.l_name,' ',d.f_name) as tdri, CONCAT(e.l_name,' ',e.f_name) as tcon, b.descrip as descrip, a.bus_type_id as bus_type_id, d.dri_id as dri_id, e.con_id as con_id FROM bus_details a, bus_type b, route_details c , user_dri d, user_con e WHERE a.dri_id = d.dri_id AND a.con_id = e.con_id AND b.bus_type_id = a.bus_type_id AND c.route_id = a.route_id AND bus_no = '$bus_no'  ";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>