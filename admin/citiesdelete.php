<?php
include("connection.php");
$CityId = $_GET["cityid"];
$Delete = "DELETE FROM `cities` WHERE `cityid`='$CityId'";
mysqli_query($Db, $Delete); 
echo "<script>window.location.href='citiesfetch.php';</script>";
?>
