<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location:  /dms_metropoint0000/index.php');
die;
?>