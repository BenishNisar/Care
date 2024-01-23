<?php
$Db=mysqli_connect("localhost","root","","care");
if(!$Db){
    echo "connection failed";
}
error_reporting(0);
?>