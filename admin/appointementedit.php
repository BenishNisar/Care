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
$Query="SELECT * FROM `appointement` WHERE `id`='$Id'";
$Result=mysqli_query($Db,$Query);
$Data=mysqli_fetch_array($Result);


?>

<main>
 

   <div class="container">
    <div class="row">

      
        <h4 class="mb-3">Welcome</h4>
        <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="row g-3">
          <div class="col-sm-6">
              <label for="email" class="form-label">User</label>
              <input type="email" class="form-control" name="user" value="<?php echo $Data[1]; ?>" id="user" placeholder="Enter a user Name"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $Data[2]; ?>" id="email" placeholder="Enter Your Email"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>


            <!-- button -->

            <div class="col-sm-6">
              <label for="phone" class="form-label">Phone</label>
              <input type="phone" class="form-control" name="phone" value="<?php echo $Data[3]; ?>"  id="phone" placeholder="Enter Your PhoneNumber"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            


            <div class="col-sm-6">
             
              <label for="text" class="form-label">Departments</label>
              <select name="department"  value="<?php echo $Data[4]; ?>" class="form-control">
                <option value="General medicine ward">General medicine ward</option>
                <option value="ICU">ICU</option>
              </select>
              <!-- <input type="text" class="form-control" name="department" id="text"  placeholder=" Enter Your Department"  required> -->
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

          



            <div class="col-sm-6">
              <label for="doctor" class="form-label">Doctor</label>
              <!-- <input type="text" class="form-control" name="doctor"  id="text"  placeholder="Enter a Doctor"  required> -->
              
              
              <select name="doctor" value="<?php echo $Data[5]; ?>" class="form-control">
                <?php
                include_once("connection.php");
                  $query="SELECT * FROM `doctoraccount`";
                  $reuslt=mysqli_query($Db,$query);
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
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="text" class="form-label">City</label>
              <!-- <input type="text" class="form-control" name="city" id="text" placeholder="Enter a city"  required> -->
              
<select name="city"  value="<?php echo $Data[6]; ?>" class="form-control" id="">
<?php
                  $query="SELECT * FROM `cities`";
                  $reuslt=mysqli_query($Db,$query);
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
              
              
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="text" class="form-label">Hospital</label>
              <!-- <input type="text" class="form-control"   id="text" placeholder="Enter a hospital"  required> -->
              <select  class="form-control" name="hospital" value="<?php echo $Data[7]; ?>" name="hospital">
                <?php
                
                  $query="SELECT * FROM `hospitals`";
                  $reuslt=mysqli_query($Db,$query);
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
            
              
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="text" class="form-label">Date</label>
              <input type="date" class="form-control" name="date" id="text" value="<?php echo $Data[8]; ?>" placeholder="Date,month,year"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

           

  
  
            <div class="col-sm-6">
<div class="form-group mt-2">
<label class="text-dark" for="">Message</label>
<textarea name="message"  value="<?php echo $Data[9]; ?>"  class="form-control" rows="5"></textarea>
    
    </div>
    </div>




<div class="col-sm-6">
              <label for="text" class="form-label">Time</label>
              <input type="time" class="form-control" name="time"  value="<?php echo $Data[10]; ?>" id="text" placeholder="Enter a time"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
  

          <hr class="my-4">

         

        
          

          

          <button class=" btn btn-primary  float-right col-sm-4" name="submit" type="submit">Submit</button>
        </form>
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

  
  
    $Update="UPDATE `appointement` SET `user`='$User',`email`='$Email',`phone`='$Phone',`department`='$Department',`doctor`='$Doctor',`city`='$City',`hospital`='$Hospital',`date`='$Date',`message`='$Message',`time`='$Time' WHERE `id`='$Id'";



mysqli_query($Db,$Update);

echo "<script>window.location.href='appointementfetch.php';</script>";


}


?>