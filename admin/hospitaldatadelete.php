<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `hospitaldata` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='hospitaldatafetch.php';</script>";
?>
