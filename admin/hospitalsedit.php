
<?php

$Id=$_GET["id"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Care Admin2 </title>

 
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
   <?php
   include_once("header.php");
   ?>



<main>
 


<?php
include("connection.php");
$Query="SELECT * FROM `hospitals` WHERE `id`='$Id'";
$Result=mysqli_query($Db,$Query);
$Data=mysqli_fetch_array($Result);

?>




    


<div class="container">
<div class="row">


<form action="#" method="POST"  class="needs-validation" novalidate>
    <h1>Hospitals Form</h1>
          <div class="row g-3">
          <div class="col-sm-6 col-md-6 col-lg-6">
              <label for="text" class="form-label">HospitalName</label>
              <input type="text" class="form-control" name="hospitalname" value="<?php echo $Data[1];   ?>" id="user" placeholder="Enter a Hospital Name"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
 
            <div class="col-sm-6 col-md-6 col-lg-6">
              <label for="text" class="form-label">Hospital city</label>
              <select name="hospitalcity" value="<?php echo $Data[2];  ?>"   class="form-control" id="">

              


</select>

 <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
          
            <div class="col-sm-6 col-md-6 col-lg-6">
              <label for="text" class="form-label">Area</label>
              <input type="text" class="form-control" name="area" value="<?php echo $Data[3];   ?>"  id="user" placeholder="Enter a Area"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

        

         

            


        
            <div class="col-sm-6 col-md-6 col-lg-6">
              <label for="text" class="form-label">Location</label>
              <input type="text" class="form-control" name="location" value="<?php echo $Data[4];   ?>"  id="user" placeholder="Enter a Location"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
          



          
            <div class="col-sm-6 col-md-6 col-lg-6">
              <label for="text" class="form-label">Zip Code</label>
              <input type="text" class="form-control" name="zipcode" value="<?php echo $Data[5];   ?>"  id="user" placeholder="Enter a ZipCode"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
           
          
  
  

           

          


  

          <hr class="my-4">

         

        
          

          

          <button class=" btn btn-primary text-light  float-right col-sm-2" name="submit" type="submit">Submit</button>
        </form>
      </div>
    </div>















</div>
<!-- row -->

</div>

<!-- container -->











  </main>


  











  
  <!-- container-scroller -->
</div>






  
</div>
<!-- footer -->

<?php
include_once("footer.php");
?>

  

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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>



<?php
if (isset($_POST["submit"])) {

    $HospitalName = $_POST["hospitalname"];
    $HospitalCity = $_FILES["hospitalcity"];
    $Area = $_POST["area"];
    $Location = $_POST["location"];
    $ZipCode = $_POST["zipcode"];

 

    $Update ="UPDATE `hospitals` SET 
    `hospitalname`='$HospitalName',`hospitalcity`='$HospitalCity',`area`='$Area',
    `location`='$Location',`zipcode`='$ZipCode' WHERE `id`='$Id'";

    mysqli_query($Db,$Update);

    echo "<script>window.location.href='hospitalsfetch.php';</script>";
}
?>