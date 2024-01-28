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
   include_once("headerscript.php");
   ?>
 


                       

   

  
 
 
        
              
                
       

     
         




















                      
 <div class="container py-5">
  <header class="text-center text-dark">
  <img id="mainImage"  alt="Main Image" style="max-width:300px;height:200px;border: radius 7px;">


   
  </header>
  <div style="float:right;">
 <a style="text-decoration:none;color:white;" href="serviceform.php" > <button class="btn btn-primary" style="width:150px;color:white;background-color:blue;border-top:1px solid white;border-right:1px solid white;border-bottom:1px solid white;border-left:1px solid white;border-radius:3px;text-decoration:none;margin-right:1px;border-radius:10px;">Add New</button>   </a>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-12">
   <table border="1px"   style="width:100%;" class="mt-5 text-white text-center">
            <tr class="text-white" style="border-right:1px solid black;">
                        <th >id</th>
                        <th>title</th>
                      
                        <th>Description</th>
                        
             
                  <th>Image</th>
             
                  

                      <th>Edit</th>
                      <th>Delete</th>
                   
                    </tr>


                    <?php
include("connection.php");
$Query="SELECT * FROM `service`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>

<tr class="text-dark">
    <td><?php echo $Data[0]; ?></td>
    <td><?php echo $Data[1]; ?></td>
    <td><?php echo $Data[2]; ?></td>
  
    
<td><img src="./images/<?php echo $Data[3] ;?>" width="200px">
</td>

    
<td><a href="serviceedit.php?id=<?php echo $Data[0]; ?>"><button class="btn btn-primary">Edit</button></a></td>
    <td><a href="servicedelete.php?id=<?php echo $Data[0]; ?>"><button class="btn btn-primary">Delete</button></a></td>
   
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
  






  <!-- container-scroller -->
  

<!-- footer -->



<?php
include_once("footer.php");
?>
   <script>
        var images = ["./images/medicalinventions.jpg", "./images/medicalinventionstwo.jpg", "./images/medicalinventionsthree.jpg"]; // Array of image sources
        var imageIndex = 0; 

        // Function to change the image
        function changeImage() {
            var image = document.getElementById("mainImage");
            image.src = images[imageIndex];
            image.style.width = "300px";
            image.style.height = "200px";
            image.style.borderRadius="8px";
            
            imageIndex = (imageIndex + 1) % images.length; // Cycle through images
        }

        // Change image every 3 seconds (3000 milliseconds)
        setInterval(changeImage, 3000);

        // Initially set the image
        changeImage();
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

