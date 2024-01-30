<?php
include("connection.php");
$Id = $_GET["id"];
$Delete = "DELETE FROM `client` WHERE `id`='$Id'";
mysqli_query($Db, $Delete); 
echo "<script>window.location.href='clientfetch.php';</script>";
?>
