<?php
session_start();
$DoctorName=$_SESSION["doctorname"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Care Admin2 </title>

 
 <?php 
 include_once("docstyle.php");
 ?>


  <style>
  th{
    border-right:1px solid black;
    border-bottom:1px solid black;
    font-family:bold;
    color:skyblue;
    background-color:black;
    text-align:center;
  }
  td{
    border-right:1px solid black;
    border-bottom:1px solid black;
  }



  table{
 
 box-shadow:3px 3px 1px 1px black;
 text-align:center;
}
table:hover{
 box-shadow:3px 3px 1px 1px blue;
}


</style>


</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
   <?php
   include_once("header.php");
   include_once("headerscripts.php");
   ?>
 


                       
 <div class="container py-5">
  <header class="text-center text-dark">
    <h1 class="display-4">Appointement</h1>
    <p class="lead mb-0"  id="changingText"><b>"Embrace each day as an opportunity to nourish your body, challenge your mind, and cultivate a life filled with balance, for in the pursuit of a healthy life, you discover the true richness of well-being."</b></p>
   
  </header>
 
  <div class="col-sm-6 col-md-12 col-lg-12">
   <table border="1px"   style="width:100%;" class="mt-5 text-white text-center">
            <tr class="text-white" style="border-right:1px solid black;">
                        <th >id</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>Doctor</th>
                        <th>city</th>
                        <th>Hospital</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Time</th>
                       
                   
                    </tr>


                    <?php
include("connection.php");
$Query="SELECT * FROM `appointement` WHERE `doctor`='$DoctorName'";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>

<tr class="text-dark">
    <td><?php echo $Data[0]; ?></td>
    <td><?php echo $Data[1]; ?></td>
    <td><?php echo $Data[2]; ?></td>
    <td><?php echo $Data[3]; ?></td>
    <td><?php echo $Data[4]; ?></td>
    <td><?php echo $Data[5]; ?></td>
    <td><?php echo $Data[6]; ?></td>
    <td><?php echo $Data[7]; ?></td>
    <td><?php echo $Data[8]; ?></td>
    <td><?php echo $Data[9]; ?></td>
    <td><?php echo $Data[10]; ?></td>

   
</tr>
<?php
}
}


?>



                 
            </table>
          </div>
        
   

  
 
 
        
              
                
       

     
         




















</div>




</div>









  <!-- container-scroller -->
  

<!-- footer -->



<?php
include_once("footer.php");
?>
 <script>
    document.addEventListener('DOMContentLoaded', function () {
      var changingText = document.getElementById('changingText');

      setInterval(function () {
        changingText.innerHTML =  "Certainly! Here's a sample appointment quote you can use:Your health is an investment, not an expense. Schedule your appointment today and prioritize the well-being that empowers your tomorrows. Your journey to a healthier life.";
      }, 5000);
    
    });

   


  

  </script>


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

</html>

