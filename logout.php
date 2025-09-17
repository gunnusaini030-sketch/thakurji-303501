<?php
include("setting/connection.php"); 

unset($_SESSION['register']);

header("location:login.php");
 exit;

?>