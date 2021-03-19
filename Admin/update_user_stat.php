
<?php
	include('conn.php');
    
    $stat_id = $_POST['stat_id'];
    $descrip = $_POST['descrip'];

    mysqli_query($conn,"UPDATE `user_stat` SET `descrip`='$descrip' WHERE `stat_id`= '$stat_id'");
    
    header('location:dms_status.php');
?>  