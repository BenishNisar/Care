<?php
include("connection.php");
$Id = $_GET["id"];
$Query = "DELETE FROM `newsletter   ` WHERE `id`='$Id'";
mysqli_query($Db, $Query); 
echo "<script>window.location.href='newsletterfetch.php';</script>";
?>
