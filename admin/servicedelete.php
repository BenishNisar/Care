<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `service` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='servicefetch.php';</script>";
?>
