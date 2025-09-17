<?php
include("setting/connection.php");

if($_GET['del_id']){

    $del_id = $_GET['del_id'];

   mysqli_query($conn,"delete from register where id = $del_id");
    header("location:users.php");
   
   

}
?>



