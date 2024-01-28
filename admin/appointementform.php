<?php
$Connection=mysqli_connect("localhost","root","","care");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Care Admin2 </title>

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
   include_once("headerscript.php");
   ?>



<main>
    <div class="py-2 text-center">
      <img class="d-block mx-auto mb-4" src="https://us.123rf.com/450wm/jasmin64/jasmin642211/jasmin64221100275/194879060-hospital-medical-center-clinic-icon-isolated-on-white-background.jpg?ver=" alt="" width="200px" height="190px" style="border-radius:50%;">
      <h2>Appointement form</h2>

    </div>
    <div class="container">
    <div class="row" style="margin-left:20px;">
        <h4 class="mb-3">Welcome</h4>
        <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="row g-3">
          <div class="col-sm-6">
              <label for="email" class="form-label">Patient</label>
              <input type="email" class="form-control" name="user" id="user" placeholder="Enter a user Name"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>


            <!-- button -->

            <div class="col-sm-6">
              <label for="phone" class="form-label">Phone</label>
              <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter Your PhoneNumber"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            


            <div class="col-sm-6">
              <label for="text" class="form-label">Departments</label>
              <select name="department"class="form-control">
                <option value="General medicine ward">General medicine ward</option>
                <option value="ICU">ICU</option>
              </select>
              <!-- <input type="text" class="form-control" name="department" id="text" placeholder=" Enter Your Department"  required> -->
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

          



            <div class="col-sm-6">
              <label for="doctor" class="form-label">Doctors</label>
              <select name="doctor" class="form-control">
                <?php
                  $query="SELECT * FROM `doctoraccount`";
                  $reuslt=mysqli_query($Connection,$query);
                  if(mysqli_num_rows($reuslt)){
                    while($row=mysqli_fetch_array($reuslt))
                    {
                   
                ?>
                <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                <?php 
                  }
                }
                ?>

              </select>

              <!-- <input type="text" class="form-control" name="doctor" id="text" placeholder="Enter a Doctor"  required> -->
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="text" class="form-label">City</label>

<select name="city"class="form-control" id="">
<?php
                  $query="SELECT * FROM `cities`";
                  $reuslt=mysqli_query($Connection,$query);
                  if(mysqli_num_rows($reuslt)){
                    while($row=mysqli_fetch_array($reuslt))
                    {
                   
                ?>
                <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                <?php 
                  }
                }
                ?>


</select>

              <!-- <input type="text" class="form-control" name="city" id="text" placeholder="Enter a city"  required> -->
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="text" class="form-label">Hospital</label>
              <input type="text" class="form-control" name="hospital" id="text" placeholder="Enter a hospital"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="text" class="form-label">Date</label>
              <input type="date" class="form-control" name="date" id="text" placeholder="Date,month,year"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

           

  
  
            <div class="col-sm-6">

<label for="text" class="form-label form-group">Message</label>
<textarea  name="message"  class="form-control" rows="10"></textarea>
    
  
    </div>




<div class="col-sm-6">
              <label for="text" class="form-label">Time</label>
              <input type="time" class="form-control" name="time" id="text" placeholder="Enter a time"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
  

          <hr class="my-4">

         

        
          

          

          <button class="btn btn-primary float-right col-sm-2" name="submit" type="submit">Book Appointement</button>
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
    $User=$_POST["user"];
    $Email=$_POST["email"];
    $Phone=$_POST["phone"];
    $Department=$_POST["department"];
    $Doctor=$_POST["doctor"];
    $City=$_POST["city"];
    $Hospital=$_POST["hospital"];
    $Date=$_POST["date"];
    $Message=$_POST["message"];
    $Time=$_POST["time"];

  
  
   $Query="INSERT INTO `appointement`(`id`, `user`, `email`, `phone`, `department`, `doctor`, `city`, `hospital`, `date`, `message`, `time`) VALUES (NULL,'$User','$Email','$Phone','$Department','$Doctor','$City','$Hospital','$Date','$Message','$Time')";


mysqli_query($Connection,$Query);

echo "<script>window.location.href='appointementfetch.php';</script>";


}


?>