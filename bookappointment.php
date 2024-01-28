<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php

include_once("headerstyle.php");
?>

</head>
<body>


	

<?php
	include_once("headerfront.php");
?>
<div class="container">
<div class="row">

        
   


    <div class="container">
    <div class="row" style="margin-left:20px;">
        <h4 class="mb-3">Appointement</h4>
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
                
                $Db = mysqli_connect("localhost", "root", "", "care");

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

              <!-- <input type="text" class="form-control" name="doctor" id="text" placeholder="Enter a Doctor"  required> -->
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="text" class="form-label">City</label>

<select name="city"class="form-control" id="">
<?php
 $Db = mysqli_connect("localhost", "root", "", "care");
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

         

        
          

          

          <button class="btn btn-primary float-right col-sm-2 mt-2" style="margin-bottom:5px;" name="submit" type="submit">Book Appointement</button>
        </form>
      </div>
    </div>

</div>
<!-- row -->
    </div>
    <!-- container -->

  </main>


  
 
 
        
              
                
       

     
         




















</div>




</div>









  <!-- container-scroller -->
  

<!-- footer -->
<?php
include_once("footerfront.php");
?>

    
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $Db = mysqli_connect("localhost", "root", "", "care");
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


mysqli_query($Db,$Query);




}


?>