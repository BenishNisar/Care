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

<?php

include("connection.php");
$Query="SELECT * FROM `about` WHERE `id`='$Id'";
$Result=mysqli_query($Db,$Query);
$Data=mysqli_fetch_array($Result);


?>


<main>
    <div class="py-2 text-center">
      <img class="d-block mx-auto mb-4" src="https://us.123rf.com/450wm/jasmin64/jasmin642211/jasmin64221100275/194879060-hospital-medical-center-clinic-icon-isolated-on-white-background.jpg?ver=" alt="" width="200px" height="190px" style="border-radius:50%;">
      <h2>About</h2>

    </div>
    <div class="container">
    <div class="row" style="margin-left:20px;">
        <h4 class="mb-3">About</h4>
        <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="row g-3">
          <div class="col-sm-6">
              <label for="text" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $Data[1];  ?>" id="user" placeholder="Title"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="email" class="form-label">Description</label>
              <!-- <input type="email" class="form-control" name="des"  id="email" placeholder="Enter Your description"  required> -->
              <textarea name="des" class="form-control" value="<?php echo $Data[2];  ?>" id="" cols="30" rows="10"></textarea>
              
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>


            <!-- button -->


            


          

          



      
         

           
            
            
            
           

           

  
  
 




  

          <hr class="my-4">

         

        
          

          

          <button class="btn btn-primary float-right col-sm-6" name="submit" type="submit">Book Appointement</button>
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
    $Title=mysqli_real_escape_string($Db,$_POST["title"]);
    $Des=mysqli_real_escape_string($Db,$_POST["des"]);  

  
  
    $Update="UPDATE `about` SET `title`='$Title',`descripation`='$Des' WHERE `id`=$Id";



mysqli_query($Db,$Update);

echo "<script>window.location.href='aboutfetch.php';</script>";


}


?>