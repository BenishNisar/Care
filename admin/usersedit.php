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
  
  

  <style>
      #password-eye {
      cursor: pointer;
      user-select: none;
      height:33px;
  
    }
  </style>

</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
   <?php
   include_once("header.php");
   include_once("headerscript.php")
   ?>





<?php
include("connection.php");
$Query="SELECT * FROM `users` WHERE `id`='$Id'";
$Result=mysqli_query($Db,$Query);
$Data=mysqli_fetch_array($Result);




?>



<main>
 




   <div class="container">
    <div class="row">

   
      <div class="col-md-6 col-lg-6"style="margin-left:20px;" >
<h2>Users</h2>
        <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="row g-3">
          <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="email" class="form-label">UserName</label>
              <input type="text" class="form-control" name="username" value="<?php echo $Data[1]; ?>" id="text" placeholder="Enter a First Name"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
 



            <!-- button -->
            <div class="col-sm-12 col-md-12">
    <div class="form-group">
    <label for="password" class="form-label">Password</label>
        <div class="input-group">
            <input type="password" class="form-control"  name="password" value="<?php echo $Data[2]; ?>"  id="password" placeholder="Enter a Password" required>
            <div class="input-group-append">
                <span class="input-group-text" id="password-eye">👁️</span>
            </div>
        </div>
    </div>
</div>


            <div class="col-sm-12 col-md-12">
              <label for="email" class="form-label"> Email</label>
              <input type="email" class="form-control"  name="email" value="<?php echo $Data[3]; ?>"   required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            


          

          
            
          

            <div class="col-sm-12">
              <label for="text" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name="phonenumber" value="<?php echo $Data[4]; ?>" id="text" placeholder="Enter a PhoneNumber"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

          

          

            

            
          

            <div class="col-sm-12">
              <label for="text" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" value="<?php echo $Data[5]; ?>" id="text" placeholder="Enter a Address"  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            
          

       
          
          
          
           

  
  






  

          <hr class="my-4">

         

        
          

          

          <button class=" btn btn-primary text-light  float-right col-sm-4" style="margin-bottom:10px;" name="submit" type="submit">Submit</button>
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

<script>
    const passwordInput = document.getElementById('password');
    const passwordEye = document.getElementById('password-eye');

    passwordEye.addEventListener('click', togglePasswordVisibility);

    function togglePasswordVisibility() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordEye.textContent = '👁️';
      } else {
        passwordInput.type = 'password';
        passwordEye.textContent = '👁️';
      }
    }
  </script>

</html>



<?php
if(isset($_POST["submit"])){
    include("connection.php");
    $UserName=$_POST["username"];
    $Password=$_POST["password"];
    $Email=$_POST["email"];
    $PhoneNumber=$_POST["phonenumber"];
    $Address=$_POST["address"];
    
  
   $Update="UPDATE `users` SET 
   `username`='$UserName',`password`='$Password',
   `email`='$Email',`phonenumber`='$PhoneNumber',`address`='$Address' WHERE `id`='$Id'";


mysqli_query($Db,$Update);

echo "<script>window.location.href='usersfetch.php';</script>";


}


?>