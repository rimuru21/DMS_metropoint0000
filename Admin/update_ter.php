
<?php
	include('conn.php');
    
    $ter_id = $_POST['ter_id'];
    $descrip = $_POST['descrip'];
    $ter_lat = $_POST['ter_lat'];
    $ter_long = $_POST['ter_long'];

    mysqli_query($conn,"UPDATE `ter_details` SET `descrip`='$descrip', `ter_lat`='$ter_lat', `ter_long`='$ter_long'  WHERE `ter_id`= '$ter_id'");
    
    header('location:dms_terminal.php');
?>  