<?php
include "conn.php";

$u_name = $_POST['u_name'];

$sql = "SELECT a.u_name as u_name, b.ter_id as ter_id, b.descrip as ter_n FROM user a, ter_details b WHERE u_name = '$u_name'  ";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>