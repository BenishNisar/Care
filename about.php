<?php

session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Care</title>
		
		<?php
		include_once("headerstyle.php");
		
		?>
	
		
    </head>
    <body>
		<?php
		include_once("headerfront.php");
		?>
	
	
		
		
			
		
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>About Us</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">About Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->









        <!-- Main Content Area -->
    <div class="about-section">
        <div class="container">
            <div class="row">
            <?php


$Db = mysqli_connect("localhost", "root", "", "care");
$Query="SELECT * FROM `about`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
                <div class="col-md-12">
                    <h3><?php echo $Data[1]; ?></h3>
                    <p><?php  echo $Data[2];  ?></p>
        
                </div>


             <?php
    }}
             ?>   
               
            </div>
        </div>
    </div>
    <!-- End Main Content Area -->

    


    
	<!-- Start Blog Area -->
<section>
    <div class="container" >
    <h1 class="text-center">Our Team</h1>
        <div class="row">
            
        <?php
                $Db=mysqli_connect("localhost","root","","care");
                $Query="SELECT * FROM `doctoraccount`";
                $Response=mysqli_query($Db,$Query);
                if(mysqli_num_rows($Response)){
                    while($Data=mysqli_fetch_array($Response)){

                ?>
            <!-- Single Blog -->
            <div class="col-lg-4 col-md-4">
                <a href="bookappointment.php">
              
                <div class="card mb-4">
                    <img src="./admin/images/<?php echo $Data[2]; ?>" class="card-img-top" width="200px" height="300px">
                    <div class="card-body">
                        <div class="date"><span class="text-dark">Doctor Name:</span><?php echo $Data[1]; ?></div>
                       <span class="text-dark card-title">Specialist:</span><?php echo $Data[5]; ?>
                    </div>
                    </a>
                </div>
               
            </div>
            <!-- End Single Blog -->
            <?php
                    }
                }
                ?>
        </div>
       
    </div>
</section>
<!-- End Blog Area -->
	
	<?php
	include_once("footerfront.php");
	include_once("script.php");
	?>
		
		
    </body>
</html>

	