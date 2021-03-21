<?php 
    session_start();
    include('conn.php');

	// variable declaration
    $u_name = "";
    $pass ="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$u_name = mysqli_real_escape_string($conn, $_POST['u_name']);
		$pass = mysqli_real_escape_string($conn, $_POST['pass']);

		if (empty($u_name)) {
			array_push($errors, "Username is required");
		}
		if (empty($pass)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$pass = md5($pass);
            $query = "SELECT * FROM user WHERE u_name='$u_name' AND pass='$pass' AND type_id = 1";
            $query1 = "SELECT * FROM user WHERE u_name='$u_name' AND pass='$pass' AND type_id = 2";
            $query2 = "SELECT * FROM user WHERE u_name='$u_name' AND pass='$pass' AND type_id = 5";
            $result = mysqli_query($conn, $query);
            $result1 = mysqli_query($conn, $query1);
            $result2 = mysqli_query($conn, $query2);

			if (mysqli_num_rows($result) == 1) {
				$_SESSION['u_name'] = $u_name;
				$_SESSION['success'] = "You are now logged in";
				header('location: topadmin/dms_ad_dashboard.php');
            }elseif(mysqli_num_rows($result1) == 1) {
				$_SESSION['u_name'] = $u_name;
				alert( "You are now logged in" + $u_name);
				$_SESSION['success'] = "You are now logged in";
                header('location: admin/dms_ad_dashboard.php'); 
            }elseif(mysqli_num_rows($result2) == 1) {
				$_SESSION['u_name'] = $u_name;
				alert( "You are now logged in" + $u_name);
				$_SESSION['success'] = "You are now logged in";
                header('location: operator/dms_op_dashboard.php'); 
            }else { 
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>