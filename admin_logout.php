<?php
include("setting/connection.php"); 

unset($_SESSION['admin_users']);

header("location:admin_login.php");
 exit;

?>