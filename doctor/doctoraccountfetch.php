<?php

session_start();
$Doctorname=$_SESSION["doctorname"];

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
 


                       
 

                    <?php
include("connection.php");
$Query="SELECT * FROM `doctoraccount` WHERE `username`='$Doctorname'";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
 


<div class="profile">
  <img src="./images/<?php echo $Data[2];?>"  width="420px" height="390px"; style="border-radius:50%;margin-left:280px;margin-top:5px;">
  </div>


<?php
}
}


?>



                 
            </table>
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

