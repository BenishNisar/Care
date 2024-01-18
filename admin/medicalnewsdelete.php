<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `medicalnews` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='medicalnewsfetch.php';</script>";
?>
