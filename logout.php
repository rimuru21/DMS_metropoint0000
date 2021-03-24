<?php
unset($_SESSION['u_name']);
session_destroy();
session_write_close();
header('Location: index.php');
die;
?>