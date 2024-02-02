<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Care Admin2 </title>

  <style>
      .fa-calendar-check{
        height:20px;

      }
  .fa-calendar-check:hover{
color:blue;


}
</style>
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
  <link rel="shortcut icon" href="images/faviconlg.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
   <?php
   include_once("header.php");
   include_once("headerscript.php");
   ?>


<main>
 



<div class="container">
   <div class="row">
<div class="col-md-12 col-lg-12"style="margin-left:20px;" >
<form action="#" method="POST" class="needs-validation" novalidate>
        <h2>Cities</h2>
          <div class="row g-3">
          <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="citiesname" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="user" placeholder="Enter a Name"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
 


            <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="text" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="user" placeholder="Email"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
 
            <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="text" class="form-label">Phone</label>
              <input type="text" class="form-control" name="phone" id="user" placeholder="Phone"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
 

            <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="text" class="form-label">Subject</label>
              <input type="text" class="form-control" name="subject" id="user" placeholder="Subject"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
 
            <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="citiesname" class="form-label">Message</label>
              <input type="text" class="form-control" name="message" id="user" placeholder="Your Message"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
 
            


       

  



          

           

  
  






  

          <hr class="my-4">

         

        
          

          

          <button class=" btn btn-primary text-light  float-right col-sm-4" name="submit" type="submit">Submit</button>
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
if(isset($_POST["submit"])){
    include("connection.php");
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $Phone=$_POST["phone"];
    $Subject=$_POST["subject"];
    $Message=$_POST["message"];
    
   
  

  
  
$Query="INSERT INTO `contact`(`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES (
    NULL,'$Name','$Email','$Phone','$Subject','$Message')";


mysqli_query($Db,$Query);

echo "<script>window.location.href='contactfetch.php';</script>";


}


?>