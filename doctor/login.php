<?php
session_start();
error_reporting(0);
if($_SESSION["doctorname"] == ""){
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>detail</title>
</head>
<style>
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>
<body class="container display-4">


  <!-- Login -->
  <div class="wrapper">
        <div class="logo">
            <img src="https://cdn.leonardo.ai/users/bd3b9048-6217-4c06-82db-bbfbace249f0/generations/700533ea-3196-4423-8d88-add5db3d7324/Leonardo_Diffusion_XL_make_a_logo_of_Hospital_name_Care_2.jpg" alt="logo" >
        </div>
        <div class="text-center mt-4 name">
            Care
        </div>
        <form class="p-3 mt-3" action="#" method="POST">
    <!-- Your form fields go here -->
    <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="email" id="email" placeholder="Email">
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="pwd" placeholder="Password">
    </div>
    <button class="btn mt-3" name="submit" type="submit">Login</button>
</form>

        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>




</body>
</html>

<?php
if(isset($_POST["submit"])){
include("connection.php");
$Email=$_POST["email"];
$Password=$_POST["password"];
$Query="SELECT `id`, `username`, `password`, `email` FROM `doctorlogin` WHERE `email`='$Email' AND `password`='$Password'";
$Response=mysqli_query($Db,$Query);

if(mysqli_num_rows($Response)){
    $Data=mysqli_fetch_array($Response);
    session_start();
    $_SESSION["doctorname"]=$Data[1];
    echo "<script>window.location.href='./index.php';</script>";

}

else{
    echo "Invalid email or password";
}

}

}
else{
    echo "<script>window.location.href='./index.php';</script>";
}
?>
