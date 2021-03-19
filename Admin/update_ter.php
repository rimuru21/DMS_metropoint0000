
<?php
	include('conn.php');
    
    $ter_id = $_POST['ter_id'];
    $descrip = $_POST['descrip'];

    mysqli_query($conn,"UPDATE `ter_details` SET `descrip`='$descrip' WHERE `ter_id`= '$ter_id'");
    
    header('location:dms_terminal.php');
?>  