<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `hospitals` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='hospitalsfetch.php';</script>";
?>
