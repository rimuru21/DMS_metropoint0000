<?php
include "conn.php";

$queID = $_POST['queID'];
$sql = "SELECT  que_long, que_lat, bus_no FROM que_details WHERE que_id = '$queID'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>