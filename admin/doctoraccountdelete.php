<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `doctoraccount` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='doctoraccountfetch.php';</script>";
?>
