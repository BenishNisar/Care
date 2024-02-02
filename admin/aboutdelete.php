<?php
include("connection.php");
$Id = $_GET["id"];
$Delete = "DELETE FROM `about` WHERE `id`='$Id'";
mysqli_query($Db, $Delete); 
echo "<script>window.location.href='aboutfetch.php';</script>";
?>
