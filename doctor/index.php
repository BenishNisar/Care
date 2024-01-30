<?php
include_once('connection.php');
session_start();
error_reporting(0);
if($_SESSION["doctorname"]!= "" ){

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Care</title>
  

  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
   <?php
   include_once("header.php");
   include_once("headerscript.php");
   ?>
  
  <!-- container-scroller -->



<div class="container">
<h1>Welcome to Doctor Dashboard
  <?php
  
  echo $_SESSION["doctorname"];
  
  
  ?>
</h1>
<div class="row">
<div class="col-md-4">

<div class="card mt-5 bg-primary" style="width: 12rem;height:150px;border:double black;box-shadow:10px 10px 10px gray;card:hover;background:pink;">
<a href="checkappointement.php" style="text-decoration:none;">
  <div class="card-body">
   
    <h2 class="card-title text-dark">Appointment</h2>
    <?php
      
      $query="SELECT * FROM `appointement`";
      $result=mysqli_query($Db,$query);
      $rowcount=mysqli_num_rows($result);
    ?>
    
    <h5 style="border: 1px solid black; width: 55px; height: 55px; align-items: center; text-align: center; border-radius: 50%; padding: 11px; background: white; margin-top: 10px;" class="text-dark"><?php echo $rowcount;?></h5>
    
  </div>

</a>
</div>
<!-- cardbody -->
</div>
<!-- col -->


<!-- col two -->


<div class="col-md-4">
<div class="card mt-5 bg-primary" style="width: 12rem;height:150px;color:black;border:double black;box-shadow:10px 10px 10px gray;">
<a href="doctoraccountfetch.php" style="text-decoration:none;">
  <div class="card-body">
   
    <h2 class="card-title text-dark">
   
      Doctors
   
    </h2>
    <?php
      include_once('connection.php');
      $query="SELECT * FROM `doctoraccount`";
      $result=mysqli_query($Db,$query);
      $rowcount=mysqli_num_rows($result);
    ?>
    
    <h5 style="border: 1px solid black; width: 55px; height: 55px; align-items: center; text-align: center; border-radius: 50%; padding: 11px; background: white; margin-top: 10px;" class="text-dark"><?php echo $rowcount;?></h5>
    
  </div>

</a>
</div>
<!-- cardbody -->
</div>
<!-- col -->

























</div>
<!-- container -->

</div>
<!-- row -->







  
</div>

</div>


<!-- footer -->

<?php
include_once("footer.php");
?>



  
</body>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- End custom js for this page-->
 
</html>
<?php
}

else{
  echo "<script>window.location.href='./login.php';</script>";
}

?>