<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `websiteinformation` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='websiteinformationfetch.php';</script>";
?>
