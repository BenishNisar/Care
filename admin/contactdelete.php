<?php
include("connection.php");
$Id = $_GET["id"];
$Delete = "DELETE FROM `contact` WHERE `id`='$Id'";
mysqli_query($Db, $Delete); 
echo "<script>window.location.href='contactfetch.php';</script>";
?>
