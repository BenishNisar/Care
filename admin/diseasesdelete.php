<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `diseases` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='diseasesfetch.php';</script>";
?>
