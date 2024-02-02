<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `doctorlogin` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='doctorloginfetch.php';</script>";
?>
