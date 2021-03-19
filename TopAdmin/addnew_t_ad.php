<?php
	include('conn.php');

    $type_id = "1";
    $id="";
    $u_name =$_POST['u_name'];
    $l_name =$_POST['l_name'];
    $f_name =$_POST['f_name'];
    $m_intl =$_POST['m_intl'];
    $sufx  =$_POST['sufx'];
    $sex =$_POST['sex'];
    $ter_id =$_POST['ter_id'];
    $pass =$_POST['pass'];
    $cont_no =$_POST['cont_no'];
    $stat_id =$_POST['stat_id'];


    mysqli_query($conn,"INSERT INTO user( type_id, u_name, l_name, f_name, m_intl, sufx, sex, ter_id, pass, cont_no, stat_id) VALUES ('$type_id', '$u_name', '$l_name', '$f_name', '$m_intl', '$sufx', '$sex', '$ter_id', '".md5($pass)."', '$cont_no', '$stat_id')");

    $sql = "SELECT user_id FROM user WHERE type_id = 1 AND user_id =(SELECT MAX(user_id) FROM user)";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    $id = $data['user_id'];

    mysqli_query($conn,"INSERT INTO user_t_ad(user_id, u_name, l_name, f_name, m_intl, sufx, sex, ter_id, pass, cont_no, stat_id) VALUES ('$id', '$u_name', '$l_name', '$f_name', '$m_intl', '$sufx', '$sex', '$ter_id', '".md5($pass)."', '$cont_no', '$stat_id')");

    header('location:dms_user.php');

?>