<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$Db=mysqli_connect("localhost","root","","care");
if(!$Db){
    echo "connection failed";
}
error_reporting(0);
?>
    
</body>
</html>