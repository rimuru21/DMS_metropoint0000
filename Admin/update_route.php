
<?php
	include('conn.php');
    
    $route_id = $_POST['route_id'];
    $f_descrip = $_POST['f_descrip'];
    $l_descrip = $_POST['l_descrip'];

    mysqli_query($conn,"UPDATE `route_details` SET `f_descrip`='$f_descrip',`l_descrip`='$l_descrip' WHERE `route_id`= '$route_id'");
    
    header('location:dms_terminal.php');
?>  