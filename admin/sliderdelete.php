<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `slider` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='sliderfetch.php';</script>";
?>
