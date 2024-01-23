<?php
include("connection.php");
$Id = $_GET["avaliabilityid"];
$Query = "DELETE FROM `availability` WHERE `avaliabilityid`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='availabilityfetch.php';</script>";
?>
