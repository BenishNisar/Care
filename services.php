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
							<h2>Services</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Services</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	
	
	
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">

					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=4";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>





						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html"><?php  echo $Data[1]; ?></a></h4>
							<p><?php  echo $Data[2]; ?></p>	
							
						</div>
						<!-- End Single Service -->
						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">

					
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=5";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2] ?></p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=6";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>


						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2]; ?> </p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=7";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>



						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2]; ?> </p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=8";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>


					
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="service-details.php"><?php echo $Data[1];  ?></a></h4>
							<p><?php echo $Data[2]; ?> </p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=9";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>

						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2]; ?></p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->















        
	

	
	<?php
	include_once("footerfront.php");
	?>
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Google Map API Key JS -->
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
		<!-- Gmaps JS -->
		<script src="js/gmaps.min.js"></script>
		<!-- Map Active JS -->
		<script src="js/map-active.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>


	