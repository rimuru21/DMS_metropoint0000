<?php
include "conn.php";

$sql = "SELECT trip_no , bus_no, que_lat, que_long FROM `que_details` where trip_no = '9678567'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>