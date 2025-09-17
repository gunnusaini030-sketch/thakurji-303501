<?php
include("setting/connection.php");

if($_GET['del_id']){

    $del_id = $_GET['del_id'];

   mysqli_query($conn,"delete from photos where id = $del_id");
    header("location:photos.php");
   
   

}
?>