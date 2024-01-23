<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `patientrecord` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='patientrecordfetch.php';</script>";
?>
