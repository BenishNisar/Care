<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `appointement` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='appointementfetch.php';</script>";
?>
