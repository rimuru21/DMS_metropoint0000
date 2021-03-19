<?php
	include('conn.php');

    $type_id = "8";
    $id="";
    $user_id =  $_POST['user_id'];
    $con_id =  $_POST['con_id'];
    $u_name = $_POST['u_name'];
    $l_name = $_POST['l_name'];
    $f_name = $_POST['f_name'];
    $m_intl = $_POST['m_intl'];
    $sufx  = $_POST['sufx'];
    $sex = $_POST['sex'];
    $ter_id = $_POST['ter_id'];
    $pass = $_POST['pass'];
    $cont_no = $_POST['cont_no'];
    $stat_id = $_POST['stat_id'];
    $emp_date =$_POST['emp_date'];
    
    mysqli_query($conn,"UPDATE `user` SET `type_id`='$type_id',`u_name`='$u_name',`l_name`='$l_name',`f_name`='$f_name',`m_intl`='$m_intl',`sufx`='$sufx',`sex`='$sex',`ter_id`='$ter_id',`cont_no`='$cont_no',`stat_id`='$stat_id' WHERE  `user_id`= '$user_id'");

    $sql = "SELECT user_id FROM user WHERE type_id = 8 AND user_id =(SELECT MAX(user_id) FROM user)";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    $id = $data['user_id'];

    mysqli_query($conn,"UPDATE `user_con` SET `user_id`='$user_id', `u_name`='$u_name',`l_name`='$l_name',`f_name`='$f_name',`m_intl`='$m_intl',`sufx`='$sufx',`sex`='$sex',`ter_id`='$ter_id',`cont_no`='$cont_no',`stat_id`='$stat_id',`emp_date`='$emp_date' WHERE `user_id`= '$user_id' AND `con_id`= '$con_id' ");

    header('location:user_con.php');

?>
